<?php

	class Cart{
	  public $kodeProduk, $kuantitas;
	  public function __construct(){
	  		
		}

	function tambahProduk($KodeNow,$KuantitasNow){
		if($this->kodeProduk == NULL){
			$this->kodeProduk[] = $KodeNow;
			$this->kuantitas[] = $KuantitasNow;
				
		}else{
			foreach ($this->kodeProduk as $key => $value) {
    			if($this->kodeProduk[$key] == $KodeNow){
					$this->kuantitas[$key] += $KuantitasNow;
			}
		}
				if($this->kodeProduk[$key] != $KodeNow){
					 $this->kodeProduk[] = $KodeNow;
					 $this->kuantitas[] = $KuantitasNow;
			}
		}
}

    function hapusProduk($KodeNow){
    		
    	foreach ($this->kodeProduk as $key => $value) {
    				if($this->kodeProduk[$key] == $KodeNow){
						  array_splice($this->kodeProduk,$key,1);
						  array_splice($this->kuantitas,$key,1);
						  break;
			}
			
    			}
			
		}	
	function tampilkanCart(){
		
	
		foreach ($this->kodeProduk as $key => $value) {
		
			echo "{$this->kodeProduk[$key]} ";
			$temp = $this->kuantitas[$key];
			echo "(".$temp.")<br>";
		}
		
	}
	}
	

	 
	$keranjang = new Cart();
	
	$keranjang->tambahProduk("Pisang Hijau", 2);
	$keranjang->tambahProduk("Semangka Kuning", 3);
	$keranjang->tambahProduk("Apel Merah", 1);
	$keranjang->tambahProduk("Apel Merah", 4);
	$keranjang->tambahProduk("Apel Merah", 2);

	$keranjang->hapusProduk("Semangka Kuning");
	$keranjang->hapusProduk("Semangka Merah");

	$keranjang->tampilkanCart();

 ?>