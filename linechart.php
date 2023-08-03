<!DOCTYPE html>
<html>
<head>
   <script
   src="http://code.jquery.com/jquery-3.3.1.js"
   integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
   crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://finaiot.netlify.app/res/jquery.min.js"></script>
    <script type="text/javascript" src="https://finaiot.netlify.app/res/Chart.min.js"></script>
</head>
<body>
  <canvas id="myChart" height="50"></canvas>

  <script>
    $(document).ready(function(){
      $.ajax({
        url : "https://finaiot.netlify.app/sensor1.php",
        type : "GET",
        dataType: "json",
        success : function(data){
          // Memproses data yang diterima
          var labels = [];
          var suhu_node1 = [];
          var suhu_node2 = [];
          var suhu_node3 = [];

          for (var i = 0; i < data.length; i++) {
            labels.push(data[i].waktu);
            suhu_node1.push(parseFloat(data[i].suhu_node1));
            suhu_node2.push(parseFloat(data[i].suhu_node2));
            suhu_node3.push(parseFloat(data[i].suhu_node3));
          }

          // Konfigurasi chart
          var chartConfig = {
            type: 'line',
            data: {
              labels: labels,
              datasets: [
                {
                  label: 'Suhu Node 1',
                  data: suhu_node1,
                  fill: false,
                  lineTension: 0.1,
                  backgroundColor: "rgba(59, 89, 152, 0.75)",
                  borderColor: "rgba(59, 89, 152, 1)",
                  pointHoverBackgroundColor: "rgba(59, 89, 152, 1)",
                  pointHoverBorderColor: "rgba(59, 89, 152, 1)",
                      },
                {
                  label: 'Suhu Node 2',
                  data: suhu_node2,
                  fill: false,
                  lineTension: 0.1,
                  backgroundColor: "rgba(29, 202, 255, 0.75)",
                  borderColor: "rgba(29, 202, 255, 1)",
                  pointHoverBackgroundColor: "rgba(29, 202, 255, 1)",
                  pointHoverBorderColor: "rgba(29, 202, 255, 1)"
                },
                {
                  label: 'Suhu Node 3',
                  data: suhu_node3,
                  fill: false,
                  lineTension: 0.1,
                  backgroundColor: "rgba(211, 72, 54, 0.75)",
                  borderColor: "rgba(211, 72, 54, 1)",
                  pointHoverBackgroundColor: "rgba(211, 72, 54, 1)",
                  pointHoverBorderColor: "rgba(211, 72, 54, 1)"
                }
              ]
            },
            options: {
              responsive: true
            }
          };

          // Menggambar chart
          var ctx = document.getElementById('myChart').getContext('2d');
          new Chart(ctx, chartConfig);
        },
        error : function(xhr, status, error) {
          console.log(error);
        }
      });
    });
  </script>
</body>
</html>
