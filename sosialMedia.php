<?php

class penggunaan
{
    private $nama;
    private $email;
    private $password;

    public function __construct($nama, $email, $password)
    {
        $this->nama = $nama;
        $this->email = $email;
        $this->password = $password;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function getEmail()
    {
        return $this->email;
    }
    
    public function setPassword($password)
    {
       $this->password = $password;
    }
}

class post 
{
    private $pengguna;
    private $tanggal;
    private $konten;

    public function __construct(penggunaan $pengguna, $konten)
    {
        $this->pengguna = $pengguna;
        $this->tanggal= date('Y-m-d H:I:S');
        $this->konten = $konten;
    }

    public function getTanggal()
    {
        return $this->tanggal;
    }

    public function getKonten()
    {
        return $this->konten;
    }
    
    public function setkonten($konten)
    {
       $this->konten = $konten;
    }
}

// contoh penggunaan
$pengguna1 = new penggunaan('John Doe', 'john.doe@example.com', 'password123');

$post1 = new post($pengguna1, 'Ini adalah konten post pertama.');
$post2 = new post($pengguna1, 'Ini adalah konten post kedua.');

echo "Nama pengguna: " . $pengguna1->getNama() . PHP_EOL;
echo "Email pengguna: " . $pengguna1->getEmail() . PHP_EOL;

echo "Konten post 1: " . $post1->getkonten() . PHP_EOL;
echo "Konten post 2: " . $post2->getkonten() . PHP_EOL;

$post1->setKonten('Konten post pertama telah diubah.');
echo "Konten post 1 setelah diubah: " . $post1->getKonten() . PHP_EOL;

?>