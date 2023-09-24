@include('header')
<div class="container mt-3">
    <div class="card" style="width: 18rem;">
        <ul class="list-group list-group-flush">
          <li class="list-group-item">UNIVERSITAS : 
            
<span class="badge bg-primary">{{ $namaKampus}}</span></li>
<li class="list-group-item">Alamat : 
            
    <span class="badge bg-primary">{{ $alamat}}</span></li>
    <li class="list-group-item">Akreditasi : 
            
        <span class="badge bg-primary">{{ $Akreditasi}}</span></li>
        </ul>
      </div>

</div>
  @include('footer')