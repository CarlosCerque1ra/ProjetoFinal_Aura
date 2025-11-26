document.addEventListener("DOMContentLoaded", () => {
  const toggleButton = document.getElementById("themeToggle");
  const body = document.body;
  const navbar = document.querySelector(".navbar");

  // Verifica se tem preferência salva
  if (localStorage.getItem("theme")) {
    body.className = localStorage.getItem("theme");
    toggleButton.textContent = body.classList.contains("dark-mode") ? "🌙" : "☀️";
  }

  toggleButton.addEventListener("click", () => {
    if (body.classList.contains("dark-mode")) {
      body.classList.replace("dark-mode", "light-mode");
      toggleButton.textContent = "☀️";
      localStorage.setItem("theme", "light-mode");
    } else {
      body.classList.replace("light-mode", "dark-mode");
      toggleButton.textContent = "🌙";
      localStorage.setItem("theme", "dark-mode");
    }
  });

  // ====== Efeito de Transparência na Navbar ao Scrollar ======
  window.addEventListener("scroll", () => {
    const scrollPos = window.scrollY;
    const maxScroll = window.innerHeight; // Usa a altura da viewport como referência
    
    // Calcula a opacidade: começa com 0.95 e vai até 0.4 conforme scrolleia
    const opacity = Math.max(0.4, 0.95 - (scrollPos / maxScroll) * 0.55);
    
    navbar.style.backgroundColor = `rgba(20, 20, 30, ${opacity})`;
  });
});
