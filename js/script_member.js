// Fungsi untuk menangani pencarian dan redirect ke halaman yang sesuai
function searchUser() {
  // Ambil input dari pengguna
  var name = document.getElementById("searchInput").value.toLowerCase().trim();

  // Daftar nama dan halaman yang sesuai
  var users = {
    "ahmad maulana zuhdi": "ahmadMaulanaZuhdi.html",
    "akbar wahyudi": "akbarWahyudi.html",
    "aisyah puji lestari": "aisyahPujiLestari.html",
    "akbar maulana hakim": "akbarMaulanaHakim.html",
    "akhlan dzakwan fadillah": "akhlanDzakwanFadillah.html",
    "alfan athallah syafala": "alfanAthallahSyafala.html",
    "al sirazzy rapaelanda": "alSirazzyRapaelanda.html",
    "amara desfianti": "amaraDesfianti.html",
    "anton patoni": "antonPatoni.html",
    "aqila abdillah annas": "aqilaAbdillahAnnas.html",
    "aridho rizky iskandar": "aridhoRizkyIskandar.html",
    "armahedi prasetia mukti": "armahediPrasetiaMukti.html",
    "azril bayu pambuko": "azrilBayuPambuko.html",
    "bagas aditya pratama": "bagasAdityaPratama.html",
    "dian ruby maulana": "dianRubyMaulana.html",
    "fadhil setiawan": "fadhilSetiawan.html",
    "fauziah nuryanti": "fauziahNuryanti.html",
    "forlan jannatul khaezan": "forlanJannatulKhaezan.html",
    "galan ahdiansyah": "galanAhdiansyah.html",
    "hanifah nur faizah": "hanifahNurFaizah.html",
    "indri mutiara imelda": "indriMutiaraImelda.html",
    "ivan bagas mahesa": "ivanBagasMahesa.html",
    "kezia febriani": "keziaFebriani.html",
    "khalista halwa syatifa": "khalistaHalwaSyatifa.html",
    "linka elvina": "linkaElvina.html",
    "muhammad ariyanto": "muhammadAriyanto.html",
    "mutiara aulia iskandar": "mutiaraAuliaIskandar.html",
    "nabilla nur annisa": "nabillaNurAnnisa.html",
    "nur faiz abdurrahman": "nurFaizAbdurrahman.html",
    "rangga dwi apriliana": "ranggaDwiApriliana.html",
    "roro athifa dejavi": "roroAthivaDejavi.html",
    "theo nanda": "theo.html",
    "yuana putri arishandi": "yuanaPutriArishandi.html",
    "alfan ferdiansyah": "alfanFerdiansyah.html",
  };

  // Periksa apakah nama ada dalam daftar
  if (users[name]) {
    // Redirect ke halaman yang sesuai
    window.location.href = users[name];
  } else {
    // Tampilkan pesan kesalahan jika nama tidak ditemukan
    Swal.fire({
      title: "Wrong !",
      text: "username tidak ada",
      icon: "error",
    });
  }
}
