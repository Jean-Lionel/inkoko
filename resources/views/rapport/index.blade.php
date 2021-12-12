@extends('layouts.app')

@section('content')
    <div class="">
        <div class="row">
            @include('rapport.sidebar')
            <div class="col-md-9">
                <div class="card">
                </div>
            </div>
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
