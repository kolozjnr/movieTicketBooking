
  // Get rid of small loading animation
  [...document.querySelectorAll(".input-location-dependant")].forEach(element =>
    element.classList.toggle("d-none")
  );

  // Function to set multiple attributes at once
  const setAttributes = (el, attrs) => {
    for (var key in attrs) {
      el.setAttribute(key, attrs[key]);
    }
  };

  const toggleLGA = target => {
    let state = target.value,                                                         // Get value of state
      selectLGAOption = ["Select Location..."],                                            // Define this once so as not to repeat it multiple times
      lgaList = {
        Abuja: [
          "Kado Mall",
          "Jabi Mall",
          "Transcorp",
          "Gwarimpa Mall"
        ],
        Lagos: [
          "Area 1",
          "Area 2",
          "Area 3",
          "Area 4"
        ],
        Rivers: [
          "Mile 1",
          "Mile 2",
          "Mile 3",
          "Mile 3"
        ],
        Minna: [
          "NA Tradoc Mall",
          "Bosso Mall",
          "Chanchaga Mall",
          "Mobil Mall"
        ]
      }[state],                                                                       // Ternary switch operator to show list of LGAs based on chosen state
      lgas = [...selectLGAOption, ...Object.values(lgaList)],                         // Join select LGA option with list of LGAs
      form = target.parentElement.parentElement.parentElement.parentElement,          // Get parent up to the forth generation just in case LGA select element is deeply nested
      lgaSelect = form.querySelector(".select-lga"),                                  // Get the LGA select element
      length = lgaSelect.options.length;                                              // Get number of options already existing in LGA select element

    // Clear LGS select element
    for (i = length - 1; i >= 0; i--) {
      lgaSelect.options[i] = null;
    }

    // Populate LGA select element
    lgas.forEach(lga => {
      let opt = document.createElement("option");                                     // Create option element
      opt.appendChild(document.createTextNode(lga));                                  // Append LGA to it
      opt.value = lga;                                                                // Set the value to LGA

      // Make option asking you to select unclickable
      lga.includes("elect")
        ? setAttributes(opt, { disabled: "disabled", selected: "selected" })
        : "";

      // Add this option element to LGA select element
      lgaSelect.appendChild(opt);
    });
  };
