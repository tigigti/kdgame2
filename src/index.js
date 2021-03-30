const loginForm = document.querySelector("#loginForm");
const registerForm = document.querySelector("#registerForm");
const formToggler = document.querySelector("#formToggler");

let toggled = false;
const lang = document.documentElement.lang;

const translations = {
  de: {
    untoggled: "Noch nicht registriert?",
    toggled: "Bereits registriert?",
    passwrong: "Die Passwörter stimmen nicht überein",
  },
  en: {
    untoggled: "Not registered yet?",
    toggled: "Already registered?",
    passwrong: "The passwords don't match",
  },
};

formToggler.addEventListener("click", e => {
  toggled = !toggled;
  loginForm.style.display = loginForm.style.display == "none" ? "block" : "none";
  registerForm.style.display = registerForm.style.display == "none" ? "block" : "none";

  formToggler.innerHTML = toggled ? translations[lang].toggled : translations[lang].untoggled;
});

registerForm.addEventListener("submit", e => {
  e.preventDefault();
  const formData = new FormData(registerForm);
  if (formData.get("regPassword") != formData.get("regPassword2")) {
    return alert(translations[lang].passwrong);
  }
  registerForm.submit();
});
