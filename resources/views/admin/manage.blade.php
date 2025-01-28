@extends('admin.layouts.admin')

@section('title', 'Gérer le marché')

@section('content')
<div class="card">
    <div class="card-header">
        <h3>Gérer le marché</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('market.admin.save') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="market-name">Nom du marché :</label>
                <input type="text" id="market-name" name="market_name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="market-description">Description :</label>
                <textarea id="market-description" name="market_description" class="form-control" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </form>
    </div>
</div>
@endsection
