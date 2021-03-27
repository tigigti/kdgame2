const loginForm = document.querySelector("#loginForm");
const registerForm = document.querySelector("#registerForm");
const formToggler = document.querySelector("#formToggler");

let toggled = false;

const translations = {
  de: {
    untoggled: "Noch nicht registriert?",
    toggled: "Bereits registriert?",
  },
  en: {
    untoggled: "Not registered yet?",
    toggled: "Already registered?",
  },
};

formToggler.addEventListener("click", e => {
  toggled = !toggled;
  loginForm.style.display = loginForm.style.display == "none" ? "block" : "none";
  registerForm.style.display = registerForm.style.display == "none" ? "block" : "none";

  formToggler.innerHTML = toggled
    ? translations[document.documentElement.lang].toggled
    : translations[document.documentElement.lang].untoggled;
});
