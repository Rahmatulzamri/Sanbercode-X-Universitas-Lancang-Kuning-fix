console.log('.....Conditional.....')
var nama = "John"
var peran = ""
function peranWerewolf(nama, peran) {
    if (nama === "" && peran == "") {
      return "Nama harus diisi!";
    } else if (peran === "") {
      return "Halo " + nama + ", Pilih peranmu untuk memulai game!";
    } else if (peran === "Penyihir") {
      return "Selamat datang di Dunia Werewolf, " + nama + "\nHalo Penyihir " + nama + ", kamu dapat melihat siapa yang menjadi werewolf!";
    } else if (peran === "Guard") {
      return "Selamat datang di Dunia Werewolf, " + nama + "\nHalo Guard " + nama + ", kamu akan membantu melindungi temanmu dari serangan werewolf.";
    } else if (peran === "Werewolf") {
      return "Selamat datang di Dunia Werewolf, " + nama + "\nHalo Werewolf " + nama + ", Kamu akan memakan mangsa setiap malam!";
    }
  }
  
  // Test cases
  console.log(peranWerewolf("", ""));
  console.log(peranWerewolf("Jeri", "")); // Output: "Halo John, Pilih peranmu untuk memulai game!"
  console.log(peranWerewolf("Wahyudi", "Penyihir")); // Output: "Selamat datang di Dunia Werewolf, Jane", "Halo Penyihir Jane, kamu dapat melihat siapa yang menjadi werewolf!"
  console.log(peranWerewolf("Zamri", "Guard")); // Output: "Selamat datang di Dunia Werewolf, Jenita", "Halo Guard Jenita, kamu akan membantu melindungi temanmu dari serangan werewolf."
  console.log(peranWerewolf("Reski", "Werewolf")); // Output: "Selamat datang di Dunia Werewolf, Junaedi", "Halo Werewolf Junaedi, Kamu akan memakan mangsa setiap malam!"
  