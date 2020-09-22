<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/mdb.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">


</head>
<body>

    <div class="col-md mt-3 ml-4 d-flex justify-content-center">
        <canvas id="myChart" height="270" width="1000" ></canvas>
    </div>
<script>
    
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['09.10', '09.11', '09.12', '09.13', '09.14', '09.15'],
            datasets: [{
                label: '# Fatigue Status',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: 'rgba(0, 0, 0, 0)',
                borderColor: 'rgba(252, 3, 136, 1)',             
                borderWidth: 2,
            },{
                label: '# Alcohol Level',
                data: [80, 16, 8, 7, 3, 1],
                backgroundColor: 'rgba(0, 0, 0, 0)',
                borderColor: 'rgba(3, 115, 252, 1)',            
                borderWidth: 2,
        }]
    },
            
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>
</body>
</html>