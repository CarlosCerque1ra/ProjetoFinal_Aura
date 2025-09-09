document.addEventListener("DOMContentLoaded", () => {
  const toggleButton = document.getElementById("themeToggle");
  const body = document.body;

  // Verifica se tem preferência salva
  if (localStorage.getItem("theme")) {
    body.className = localStorage.getItem("theme");
  }

  toggleButton.addEventListener("click", () => {
    if (body.classList.contains("dark-mode")) {
      body.classList.replace("dark-mode", "light-mode");
      toggleButton.textContent = "";
      localStorage.setItem("theme", "light-mode");
    } else {
      body.classList.replace("light-mode", "dark-mode");
      toggleButton.textContent = "";
      localStorage.setItem("theme", "dark-mode");
    }
  });
});
