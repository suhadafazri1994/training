<?php 

 class Biodata{

 	// menyimpan data dalam array
 	public $data = [];

 	// function nama
 	public function nama($nama)
 	{
 		$this->data['name'] = $nama;
 		return $this;
 	}

 	// function alamat
 	public function alamat($alamat)
 	{
 		$this->data['address'] = $alamat;
 		return $this;
 	}

 	// function hobi
 	public function hobi($hobi = array())
 	{
 		$this->data['hobbies'] = $hobi;
 		return $this;
 	}
 	
 	// function menikah
 	public function menikah($menikah)
 	{
 		$this->data['is_married'] = $menikah;
 		return $this;
 	}
 	
 	// function sekolah
 	public function sekolah($sekolah = array())
 	{
 		$this->data['school'] = $sekolah;
 		return $this;
 	}

 	// function kemampuan
 	public function kemampuan($kemampuan = array())
 	{
 		$this->data['skills'] = $kemampuan;
 		return $this;
 	}

 	// function konvert ke json
 	public function json(){
 		return json_encode($this->data, JSON_PRETTY_PRINT);
 	}
 	
}

$biodata 	= new Biodata();
$nama		= "<br>Fazri Suhada<br><br>";
$alamat		= "<br>Ladang Laweh, Kota Bukittinggi, Sumatra Barat<br><br>";
$hobi 		= ['<br>Jogging','Catur','Membuat Program<br><br>'];
$sekolah	= [
				"<br>highSchool<br>" 	=> "SMAN 1 Banuhampu<br>",
				"university" 	=> "AMIK Solok<br><br>"
			  ];
$kemampuan	= [
				"<br>Web<br>"		=> ['HTML','CSS','PHP'],
				"<br>Desaign<br>"	=> ['Corel Draw','Photo Shop']
			  ];
print_r($biodata->nama($nama)
				->alamat($alamat)
				->hobi($hobi)
				->menikah(false)
				->sekolah($sekolah)
				->kemampuan($kemampuan)
				->json()
);
