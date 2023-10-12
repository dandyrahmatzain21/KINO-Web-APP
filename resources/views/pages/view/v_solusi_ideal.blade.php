@extends('layouts/app')
@section('judul_halaman', 'Solusi-Ideal-'.$Periode->periode)

@section('konten')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <div class="d-flex align-items-center">
                        <h6 class="mb-0">Tabel Solusi Ideal {{$Periode->periode}}</h6>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Solusi</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        CI-1</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        CI-2</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        CI-3</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        CI-4</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        CI-5</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        CK-1</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        CK-2</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        CK-3</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        CK-4</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        CK-5</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        CK-6</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        CK-7</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        CN-1</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        CN-2</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        CN-3</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <p class="mb-0 text-sm ps-3">Positif</p>
                                    </td>
                                    <td>
                                        <p class="mb-0 text-sm ps-3">{{ number_format($Solusi['c1']['positif'], 5) }}</p>
                                    </td>
                                    <td>
                                        <p class="mb-0 text-sm ps-3">{{ number_format($Solusi['c2']['positif'], 5) }}</p>
                                    </td>
                                    <td>
                                        <p class="mb-0 text-sm ps-3">{{ number_format($Solusi['c3']['positif'], 5) }}</p>
                                    </td>
                                    <td>
                                        <p class="mb-0 text-sm ps-3">{{ number_format($Solusi['c4']['positif'], 5) }}</p>
                                    </td>
                                    <td>
                                        <p class="mb-0 text-sm ps-3">{{ number_format($Solusi['c5']['positif'], 5) }}</p>
                                    </td>
                                    <td>
                                        <p class="mb-0 text-sm ps-3">{{ number_format($Solusi['c6']['positif'], 5) }}</p>
                                    </td>
                                    <td>
                                        <p class="mb-0 text-sm ps-3">{{ number_format($Solusi['c7']['positif'], 5) }}</p>
                                    </td>
                                    <td>
                                        <p class="mb-0 text-sm ps-3">{{ number_format($Solusi['c8']['positif'], 5) }}</p>
                                    </td>
                                    <td>
                                        <p class="mb-0 text-sm ps-3">{{ number_format($Solusi['c9']['positif'], 5) }}</p>
                                    </td>
                                    <td>
                                        <p class="mb-0 text-sm ps-3">{{ number_format($Solusi['c10']['positif'], 5) }}</p>
                                    </td>
                                    <td>
                                        <p class="mb-0 text-sm ps-3">{{ number_format($Solusi['c11']['positif'], 5) }}</p>
                                    </td>
                                    <td>
                                        <p class="mb-0 text-sm ps-3">{{ number_format($Solusi['c12']['positif'], 5) }}</p>
                                    </td>
                                    <td>
                                        <p class="mb-0 text-sm ps-3">{{ number_format($Solusi['c13']['positif'], 5) }}</p>
                                    </td>
                                    <td>
                                        <p class="mb-0 text-sm ps-3">{{ number_format($Solusi['c14']['positif'], 5) }}</p>
                                    </td>
                                    <td>
                                        <p class="mb-0 text-sm ps-3">{{ number_format($Solusi['c15']['positif'], 5) }}</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p class="mb-0 text-sm ps-3">Negatif</p>
                                    </td>
                                    <td>
                                        <p class="mb-0 text-sm ps-3">{{ number_format($Solusi['c1']['negatif'], 5) }}</p>
                                    </td>
                                    <td>
                                        <p class="mb-0 text-sm ps-3">{{ number_format($Solusi['c2']['negatif'], 5) }}</p>
                                    </td>
                                    <td>
                                        <p class="mb-0 text-sm ps-3">{{ number_format($Solusi['c3']['negatif'], 5) }}</p>
                                    </td>
                                    <td>
                                        <p class="mb-0 text-sm ps-3">{{ number_format($Solusi['c4']['negatif'], 5) }}</p>
                                    </td>
                                    <td>
                                        <p class="mb-0 text-sm ps-3">{{ number_format($Solusi['c5']['negatif'], 5) }}</p>
                                    </td>
                                    <td>
                                        <p class="mb-0 text-sm ps-3">{{ number_format($Solusi['c6']['negatif'], 5) }}</p>
                                    </td>
                                    <td>
                                        <p class="mb-0 text-sm ps-3">{{ number_format($Solusi['c7']['negatif'], 5) }}</p>
                                    </td>
                                    <td>
                                        <p class="mb-0 text-sm ps-3">{{ number_format($Solusi['c8']['negatif'], 5) }}</p>
                                    </td>
                                    <td>
                                        <p class="mb-0 text-sm ps-3">{{ number_format($Solusi['c9']['negatif'], 5) }}</p>
                                    </td>
                                    <td>
                                        <p class="mb-0 text-sm ps-3">{{ number_format($Solusi['c10']['negatif'], 5) }}</p>
                                    </td>
                                    <td>
                                        <p class="mb-0 text-sm ps-3">{{ number_format($Solusi['c11']['negatif'], 5) }}</p>
                                    </td>
                                    <td>
                                        <p class="mb-0 text-sm ps-3">{{ number_format($Solusi['c12']['negatif'], 5) }}</p>
                                    </td>
                                    <td>
                                        <p class="mb-0 text-sm ps-3">{{ number_format($Solusi['c13']['negatif'], 5) }}</p>
                                    </td>
                                    <td>
                                        <p class="mb-0 text-sm ps-3">{{ number_format($Solusi['c14']['negatif'], 5) }}</p>
                                    </td>
                                    <td>
                                        <p class="mb-0 text-sm ps-3">{{ number_format($Solusi['c15']['negatif'], 5) }}</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
