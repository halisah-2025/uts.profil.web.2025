function toggleBiodata() {
    const sections = document.querySelectorAll("main section");
    sections.forEach(sec => {
        sec.style.display = sec.style.display === "none" ? "block" : "none";
    });
}
