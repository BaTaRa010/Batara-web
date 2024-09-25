// Fungsi untuk menangani pencarian dan redirect ke halaman yang sesuai
function searchUser() {
  // Ambil input dari pengguna
  var name = document.getElementById("searchInput").value.toLowerCase().trim();

  // Daftar nama dan halaman yang sesuai
  var users = {
    "ahmad maulana zuhdi": "users/ahmadMaulanaZuhdi.html",
    "akbar wahyudi": "users/akbarWahyudi.html",
    "aisyah puji lestari": "users/aisyahPujiLestari.html",
    "akbar maulana hakim": "users/akbarMaulanaHakim.html",
    "akhlan dzakwan fadillah": "users/akhlanDzakwanFadillah.html",
    "alfan athallah syafala": "users/alfanAthallahSyafala.html",
    "al sirazzy rapaelanda": "users/alSirazzyRapaelanda.html",
    "amara desfianti": "users/amaraDesfianti.html",
    "anton patoni": "users/antonPatoni.html",
    "aqila abdillah annas": "users/aqilaAbdillahAnnas.html",
    "aridho rizky iskandar": "users/aridhoRizkyIskandar.html",
    "armahedi prasetia mukti": "users/armahediPrasetiaMukti.html",
    "azril bayu pambuko": "users/azrilBayuPambuko.html",
    "bagas aditya pratama": "users/bagasAdityaPratama.html",
    "dian ruby maulana": "users/dianRubyMaulana.html",
    "fadhil setiawan": "users/fadhilSetiawan.html",
    "fauziah nuryanti": "users/fauziahNuryanti.html",
    "forlan jannatul khaezan": "users/forlanJannatulKhaezan.html",
    "galan ahdiansyah": "users/galanAhdiansyah.html",
    "hanifah nur faizah": "users/hanifahNurFaizah.html",
    "indri mutiara imelda": "users/indriMutiaraImelda.html",
    "ivan bagas mahesa": "users/ivanBagasMahesa.html",
    "kezia febriani": "users/keziaFebriani.html",
    "khalista halwa syatifa": "users/khalistaHalwaSyatifa.html",
    "linka elvina": "users/linkaElvina.html",
    "muhammad ariyanto": "users/muhammadAriyanto.html",
    "mutiara aulia iskandar": "users/mutiaraAuliaIskandar.html",
    "nabilla nur annisa": "users/nabillaNurAnnisa.html",
    "nur faiz abdurrahman": "users/nurFaizAbdurrahman.html",
    "rangga dwi apriliana": "users/ranggaDwiApriliana.html",
    "roro athiva dejavi": "users/roroAthivaDejavi.html",
    "theo nanda": "users/theo.html",
    "yuana putri arishandi": "users/yuanaPutriArishandi.html",
    "alfan ferdiansyah": "users/alfanFerdiansyah.html",
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
