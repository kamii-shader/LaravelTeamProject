@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Donasi Kampanye') }}</div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('donation.store') }}">
                        @csrf
                        
                        <div class="mb-3">
                            <label for="portofolio_id" class="form-label">Pilih Kampanye</label>
                            <select class="form-select @error('portofolio_id') is-invalid @enderror" name="portofolio_id" id="portofolio_id" required>
                                <option value="" disabled selected>-- Pilih Kampanye --</option>
                                @foreach($portofolios as $portofolio)
                                    <option value="{{ $portofolio->id }}" {{ old('portofolio_id') == $portofolio->id ? 'selected' : '' }}>
                                        {{ $portofolio->title }}
                                    </option>
                                @endforeach
                            </select>
                            @error('portofolio_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="amount" class="form-label">Jumlah Donasi (IDR)</label>
                            <input type="number" class="form-control @error('amount') is-invalid @enderror" name="amount" id="amount" value="{{ old('amount') }}" min="1" step="any" required>
                            @error('amount')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Kirim Donasi</button>
                    </form>

                    <h3 class="mt-4">Daftar Kampanye</h3>
                    <div class="row">
                        @foreach($portofolios as $portofolio)
                            <div class="col-md-4">
                                <div class="card mb-4">
                                    <img src="{{ asset('images/'.$portofolio->image) }}" class="card-img-top" alt="{{ $portofolio->name }}">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $portofolio->title }}</h5>
                                        <p class="card-text">{{ Str::limit($portofolio->description, 100) }}</p>
                                        <p class="card-text"><strong>Terkumpul: Rp {{ number_format($portofolio->donations_sum_amount, 0, ',', '.') }}</strong></p>
                                        <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#donateModal" data-portofolio-id="{{ $portofolio->id }}" data-portofolio-name="{{ $portofolio->name }}">Donasi Sekarang</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Donasi -->
<div class="modal fade" id="donateModal" tabindex="-1" aria-labelledby="donateModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="donateModalLabel">Form Donasi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('donation.store') }}">
                    @csrf
                    <input type="hidden" name="portofolio_id" id="modal_portofolio_id">
                    <div class="mb-3">
                        <label for="modal_amount" class="form-label">Jumlah Donasi (IDR)</label>
                        <input type="number" class="form-control" name="amount" id="modal_amount" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim Donasi</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('additional-scripts')
<script>
    var donateButtons = document.querySelectorAll('.btn-success');
    donateButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            var portofolioId = this.getAttribute('data-portofolio-id');
            var portofolioName = this.getAttribute('data-portofolio-name');
            
            document.getElementById('modal_portofolio_id').value = portofolioId;
            document.getElementById('modal_amount').focus();
        });
    });
</script>
@endsection
