<div class="container">
    <div class="row">
        @foreach ($data as $item)
        <div class="col mt-5">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset($item->foto) }}" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">{{ $item->name }}</h5>
                    <p class="card-text">Rp.{{ $item->harga }}</p>
                </div>

                <a href="{{ route('pelanggan.detail', $item->id) }}" class="btn btn-dark">Detail</a>

            </div>
        </div>
        @endforeach
    </div>
</div>