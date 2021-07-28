<?php
/**
 * array adalah kumpulan nilai yg berjenis sama
 * 
 * variabel -> individu
 * array -> populasi
 */
//$student = "Bill Gates";
//$siswa = ["John Cena","The Rock","Batista","Rey Mysterio"];
//echo $siswa[3];

//array numeric -> array yg indexnya berupa numerik
//array assosiative -> array yg indexnya berupa string

//array digunakan saat ada data yg bisa dikelompokkan
$person =[
    ["name"=> "Gopal", "address"=> "Madrid","age"=> 40],
    ["name"=> "Kaizo", "address"=> "Saturnus","age"=> 80],
    ["name"=> "GKokochi", "address"=> "Pluto","age"=> 20],
];

echo $person [2]["address"];
?>