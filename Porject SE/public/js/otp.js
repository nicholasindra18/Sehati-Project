const inputs = document.querySelectorAll("input"),
      submit = document.querySelector("#submit");

inputs.forEach((input, index1) => {
  input.addEventListener("keyup", (e) => {
    const currentInput = input,
    nextInput = input.nextElementSibling,
    prevInput = input.previousElementSibling;

    if(currentInput.value.length > 1){
      currentInput.value = "";
      return;
    }

    if(nextInput && nextInput.hasAttribute("disabled") && currentInput.value !== "") {
      nextInput.removeAttribute("disabled");
      nextInput.focus();
    }

    if(e.key === "Backspace"){
      inputs.forEach((input, index2) => {
        if(index1 <= index2 && prevInput) {
          input.setAttribute("disabled", true);
          input.value = "";
          prevInput.focus();
        }
      });
    }
  });
});

