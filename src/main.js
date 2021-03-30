window.onload = e => {
  const alertBox = document.querySelector(".alert-box");
  // Language switcher logic
  const langSwitcher = document.querySelector("#langSwitcher");
  langSwitcher.addEventListener("click", e => {
    const dropdown = langSwitcher.querySelector(".dropdown-container");
    langSwitcher.querySelector(".dropdown").classList.toggle("active");
    if (dropdown.style.maxHeight) {
      dropdown.style.maxHeight = null;
    } else {
      dropdown.style.maxHeight = dropdown.scrollHeight + "px";
    }
  });

  const languages = document.querySelectorAll(".language");
  languages.forEach(lang => {
    lang.addEventListener("click", e => {
      document.querySelector("#langInput").value = lang.dataset.langCode;
      langSwitcher.submit();
    });
  });

  if (alertBox) {
    const progressBar = alertBox.querySelector(".progress-bar");
    progressBar.style.width = 0;
    setTimeout(() => {
      alertBox.style.display = "none";
    }, 4000);
  }
};
