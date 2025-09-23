@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>

    <div class="row">
        <!-- Chart Area -->
        <div class="col-xl-8 col-lg-7">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Jumlah Student per Jurusan</h6>
                </div>
                <div class="card-body">
                    <canvas id="studentChart"></canvas>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script>
    var ctx = document.getElementById("studentChart");
    var studentChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["Informatika", "Sistem Informasi", "Teknik Elektro", "Manajemen"],
            datasets: [{
                label: "Jumlah Student",
                backgroundColor: ["#4e73df", "#1cc88a", "#36b9cc", "#f6c23e"],
                data: [50, 30, 20, 40],
            }],
        },
    });
</script>
@endpush
