<?php

namespace App\Models\Traits\Relations;

use Illuminate\Support\Str;

trait ProdukRelations {
	
	function getHargaStringAttribute(){
		return "Rp. ".number_format($this->attributes['harga']);
	}

	function handleUploadFoto(){
		if(request()->hasFile('foto')){
			$foto = request()->file('foto');
			$destination = "images/produk";
			$randomStr = Str::random(5);
			$filename = $this->id."-".time()."-".$randomStr.".".$foto->extension();
			$url = $foto->storeAs($destination, $filename);
			$this->foto = "app/".$url;
			$this->save();
		}
	}

}