<?php
session_start();

$daftarBuku = [
    [
        "id" => 1,
        "judul" => "Percy Jackson",
        "pengarang" => ["Rick Riordan"],
        "tahun" => 2008,
        "tag" => ["thriller", "remaja"],
        "stok" => 3,
        "peminjam" => [],
    ],
    [
        "id" => 2,
        "judul" => "Harry Potter and the Philosopher's Stone",
        "pengarang" => ["J.K. Rowling"],
        "tahun" => 1997,
        "tag" => ["thriller", "remaja"],
        "stok" => 8,
        "peminjam" => [],
    ],
    [
        "id" => 3,
        "judul" => "Percy Jackson and the Lightning Thief",
        "pengarang" => ["Rick Riordan"],
        "tahun" => 2005,
        "tag" => ["thriller", "Fiksi", "fantasy"],
        "stok" => 6,
        "peminjam" => ["email1@gmail.com", "email2@gmail.com"],
    ],
    [
        "id" => 4,
        "judul" => "City of Bones",
        "pengarang" => ["Cassandra Clare"],
        "tahun" => 2008,
        "tag" => ["Urban fantasy", "remaja"],
        "stok" => 3,
        "peminjam" => ["email1", "email1","email1","email1","email1"],
    ],
    [
        "id" => 5,
        "judul" => "Owl City",
        "pengarang" => ["Adam Young"],
        "tahun" => 2009,
        "tag" => ["Fiksi", "Adult"],
        "stok" => 6,
        "peminjam" => ["email1","email1","email1","email1","email1"],
    ],
];

function cariBerdasarkanPengarang($pengarang, $daftarBukus){
    $hasil = [];
    foreach ($daftarBukus as $buku) {
        if ($buku["pengarang"] == [$pengarang]) {
            array_push($hasil, $buku);
        }
    }
    return $hasil;
}

if (isset($_POST["pengarang"])) {
    $_SESSION["daftarBuku"] = cariBerdasarkanPengarang($_POST["pengarang"], $daftarBuku);
    header("Location: falestio-3.php");
}


function cariBukuTakLaku($daftarBuku){
    $hasil = [];
    foreach ($daftarBuku as $buku) {
        if ($buku["peminjam"] == []) {
            array_push($hasil, $buku);
        }
    }
    return $hasil;
}