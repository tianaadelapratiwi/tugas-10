@extends('template.base')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					Tambah Data Produk
				</div>
				<div class="card-body">
					<form action="{{url('produk')}}" method="post" enctype="multipart/form-data">
						@csrf
					<div class="form-group">
						<label for="" class="control-label">Nama </label>
						<input type="text" name="nama_produk" class="form-control">
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
								<label for="" class="control-label">Foto</label>
								<input type="file" class="form-control" name="foto" accept=".png">
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label for="" class="control-label">Harga</label>
								<input type="text" class="form-control" name="harga" >
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label for="" class="control-label">Berat</label>
								<input type="text" class="form-control"  name="berat">
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label for="" class="control-label">Stok</label>
								<input type="text" class="form-control"  name="stok">
							</div>
						</div>
					</div>

					<div class="form-group">
						<label for="" class="control-label">Deskripsi</label>
						<textarea class="form-control"  name="deskripsi"></textarea>
					</div>

					<button class="btn btn-dark float-right"><i class="fa fa-save"></i> Simpan</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection