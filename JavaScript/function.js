console.log(".....Function.....")
console.log(".....Pertama Function.....")
function teriak() {
    return "Halo Sanbers!"
  }
  
  // TEST CASE
  console.log(teriak()) // "Halo Sanbers!"

  console.log(".....Kedua Function.....")
  function kalikan(num1, num2) {
    return num1 * num2
  }
  
  console.log(kalikan(4, 12)) // 48

  console.log(".....Ketiga Function.....")
  function introduce(name, age, address, hobby) {
    return "Nama saya " + name + ", umur saya " + age + " tahun, alamat saya di " + address + ", dan saya punya hobby yaitu " + hobby + "!";
  }
  
   
   // TEST CASES
  console.log(introduce("Zamri", 20, "Riau", "Futsal")) // Menampilkan "Nama saya Agus, umur saya 30 tahun, alamat saya di Jogja, dan saya punya hobby yaitu Gaming!" 