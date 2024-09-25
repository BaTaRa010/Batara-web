// Fungsi untuk menambahkan kelas animasi ketika elemen terlihat
function animateOnScroll(entries, observer) {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      // Cek elemen berdasarkan id untuk menentukan animasi yang diterapkan
      if (entry.target.id === "textArea") {
        entry.target.classList.add("animate__fadeInUp"); // Animasi untuk textArea
      } else if (entry.target.id === "cardArea") {
        entry.target.classList.add("animate__fadeInUp"); // Animasi untuk cardArea
      } else if (entry.target.id === "made") {
        entry.target.classList.add("animate__zoomInDown"); // Animasi untuk cardArea
      }
      observer.unobserve(entry.target); // Hentikan observasi setelah animasi diterapkan
    }
  });
}

// Buat observer
const observer = new IntersectionObserver(animateOnScroll, {
  threshold: 0.5, // 50% dari elemen harus terlihat sebelum memicu animasi
});

// Targetkan kedua elemen div
const textArea = document.getElementById("textArea");
const cardArea = document.getElementById("cardArea");
const made = document.getElementById("made");

// Mulai observasi kedua elemen
observer.observe(textArea);
observer.observe(cardArea);
observer.observe(made);
