@extends('layouts.app')

@section('content')
    <div class="">
        <div class="row">
            <div class="col-md-2">
                <h4 class="text-center"> TOTAL DES CLIENTS</h4>
                <p class="d-flex  justify-content-between"> 
                    <i class="fa fa-users"></i> 
                    <b>{{ $client_total }}</b> 
                </p>
            </div>
              <div class="col-md-3">
                <h4 class="text-center">MONTANT DES VENTES</h4>
                <p class="d-flex justify-content-between"> 
                    <span>oeufs</span>
                    <span>
                        <b>{{ number_format($total_oeuf); }}</b>
                    </span>  
                    <span>
                        <b>#BIF</b>
                    </span>
                </p> 
                <p class="d-flex justify-content-between"> 
                   <span>Poules </span>
                    <span>
                        <b>{{  number_format($total_poule); }}</b>
                    </span>
                    <span>
                        <b>#BIF</b>
                    </span>
                </p>
            </div>
              <div class="col-md-3">
                <h4 class="text-center">TOTAL DES FOURNISSEURS</h4>
                <p class="text-center">
                    <span></span>
                    <span>{{ $total_fournisseur }}</span>
                </p>
            </div>
              <div class="col-md-3">
                <h4 class="text-center">DATE </h4>
                <p class="text-center">{{ date('d-m-Y') }}</p>
            </div>
            
        </div>
        <hr>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <h5>Liste des produits en stock</h5>
                <canvas id="lineCahrt" width="100%"></canvas>
            </div>
            <div class="col-md-6">
                <canvas id="pieChart" width="100%"></canvas>
            </div>
           
        </div>
    </div>
@endsection

@section("javascript")

<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function () {
    // Main Template Color
    var brandPrimary = "#33b35a";

    // ------------------------------------------------------- //
    // Line Chart
    // ------------------------------------------------------ //
    var LINECHART = document.getElementById("lineCahrt");

    const label_stoks = @json($label_stoks);

    const qte_stoks = @json($qte_stoks);

    var myLineChart = new Chart(LINECHART, {
        type: "bar",
        options: {
            legend: {
                display: false,
            },
        },
        data: {
            labels: label_stoks,
            datasets: [
                {
                    label: "Quantité en stock # ",
                    fill: true,
                    lineTension: 0.3,
                    backgroundColor: "rgba(77, 193, 75, 0.4)",
                    borderColor: brandPrimary,
                    borderCapStyle: "butt",
                    borderDash: [],
                    borderDashOffset: 0.0,
                    borderJoinStyle: "miter",
                    borderWidth: 1,
                    pointBorderColor: brandPrimary,
                    pointBackgroundColor: "#fff",
                    pointBorderWidth: 1,
                    pointHoverRadius: 5,
                    pointHoverBackgroundColor: brandPrimary,
                    pointHoverBorderColor: "rgba(220,220,220,1)",
                    pointHoverBorderWidth: 2,
                    pointRadius: 1,
                    pointHitRadius: 0,
                    data: qte_stoks,
                    spanGaps: false,
                },

            ],
        },
    });

    // ------------------------------------------------------- //
    // Pie Chart
    // ------------------------------------------------------ //
    var PIECHART = document.getElementById("pieChart");
    var myPieChart = new Chart(PIECHART, {
        type: "line",
        data: {
            labels:  label_stoks,
            datasets: [
                {
                    data: [300, 50, 100],
                    borderWidth: [1, 1, 1],
                    backgroundColor: [brandPrimary, "rgba(75,192,192,1)", "#FFCE56"],
                    hoverBackgroundColor: [brandPrimary, "rgba(75,192,192,1)", "#FFCE56"],
                },
            ],
        },
    });

    // ------------------------------------------------------- //
    // Pie Chart
    // ------------------------------------------------------ //
    var MONTHLYPROGRESS = document.getElementById("monthlyProgress");
    var myPieChart = new Chart(MONTHLYPROGRESS, {
        type: "doughnut",
        options: {
            cutoutPercentage: 93,
            responsive: true,
            maintainAspectRatio: true,
            legend: {
                display: false,
            },
        },
        data: {
            labels: label_stoks,
            datasets: [
                {
                    data: qte_stoks,
                    borderWidth: [1, 1],
                    backgroundColor: [brandPrimary, "#ffffff"],
                    hoverBackgroundColor: [brandPrimary, "#ffffff"],
                },
            ],
        },
    });
});

</script>

@endsection
