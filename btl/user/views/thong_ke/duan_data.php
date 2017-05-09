<?php  
    $thuoc_bo = 100;
    $thuc_pham_chuc_nang = 161;
    $thuoc_tri_benh = 177;
        echo "<script type='text/javascript'>
            //alert(thuc_pham_chuc_nang);
          google.charts.load('current', {packages:['corechart']});
          google.charts.setOnLoadCallback(drawChart);
          function drawChart() {
            var data = google.visualization.arrayToDataTable([
              ['Loại', 'Doanh thu'],
              ['Tháng 1', ".$thuoc_tri_benh."],
              ['Tháng 2', ".$thuc_pham_chuc_nang."],
              ['Tháng 3', ".$thuoc_bo."]
            ]);
            var options = {
              title: 'Tỷ lệ doanh thu theo tháng năm 2017',
              pieHole: 0.4,
              is3D: true
            };

            var chart = new google.visualization.PieChart(document.getElementById('chart'));
            chart.draw(data, options);
          }
    </script>";
    echo "<script type='text/javascript'>
        google.charts.load('current', {packages: ['corechart', 'bar']});
        google.charts.setOnLoadCallback(drawBarColors);

        function drawBarColors() {
              var data = google.visualization.arrayToDataTable([
                ['Loại', 'Doanh thu'],
                ['3', ".$thuoc_bo."],
                ['2', ".$thuc_pham_chuc_nang."],
                ['1', ".$thuoc_tri_benh."]
              ]);

              var options = {
                title: 'Doanh thu theo tháng năm 2017',
                chartArea: {width: '50%'},
                colors: ['#1976D2'],
                hAxis: {
                  title: '',
                  minValue: 0
                },
                vAxis: {
                  title: 'Tháng'
                }
              };
              var chart = new google.visualization.BarChart(document.getElementById('pie_chart'));
              chart.draw(data, options);
            }
    </script>";
    echo "<script type='text/javascript'>
		    google.charts.load('current', {'packages':['corechart', 'bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {

        var data = google.visualization.arrayToDataTable([
          ['Galaxy', 'Doanh thu'],
          ['2015', 8000],
          ['2016', 24000],
          ['2017', 30000]
        ]);

        var classicOptions = {
          width: 900,
          series: {
            0: {targetAxisIndex: 0},
            1: {targetAxisIndex: 1}
          },
          title: 'Doanh thu qua các năm',
          vAxes: {
            // Adds titles to each axis.
            0: {title: 'Doanh thu'},
            1: {title: 'apparent magnitude'}
          }
        };

          var classicChart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
          classicChart.draw(data, classicOptions);

    };
			    </script>";
    ?>