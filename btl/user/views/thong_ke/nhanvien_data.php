<?php  
    $thuoc_bo = 100;
    $thuc_pham_chuc_nang = 161;
    $thuoc_tri_benh = 177;
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
                colors: ['green'],
                hAxis: {
                  title: '',
                  minValue: 0
                },
                vAxis: {
                  title: 'Tháng'
                }
              };
              var chart = new google.visualization.BarChart(document.getElementById('doanhthu_nhanvien'));
              chart.draw(data, options);
            }
    </script>";
    echo "<script type='text/javascript'>
        google.charts.load('current', {packages: ['corechart', 'bar']});
        google.charts.setOnLoadCallback(drawBarColors);

        function drawBarColors() {
              var data = google.visualization.arrayToDataTable([
                ['Loại', 'Hợp đồng'],
                ['3', ".$thuoc_bo."],
                ['2', ".$thuc_pham_chuc_nang."],
                ['1', ".$thuoc_tri_benh."]
              ]);

              var options = {
                title: 'Số hợp đồng theo tháng năm 2017',
                chartArea: {width: '50%'},
                colors: ['pink'],
                hAxis: {
                  title: '',
                  minValue: 0
                },
                vAxis: {
                  title: 'Tháng'
                }
              };
              var chart = new google.visualization.BarChart(document.getElementById('hopdong_nhanvien'));
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
          series: {
            0: {targetAxisIndex: 0},
            1: {targetAxisIndex: 1}
          },
          colors: ['orange'],
          title: 'Doanh thu qua các năm',
          vAxes: {
            // Adds titles to each axis.
            0: {title: ''},
            1: {title: 'apparent magnitude'}
          }
        };

          var classicChart = new google.visualization.ColumnChart(document.getElementById('nam_doanhthu_nhanvien'));
          classicChart.draw(data, classicOptions);

    };
			    </script>";
          echo "<script type='text/javascript'>
        google.charts.load('current', {'packages':['corechart', 'bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {

        var data = google.visualization.arrayToDataTable([
          ['Galaxy', 'Hợp đồng'],
          ['2015', 12],
          ['2016', 16],
          ['2017', 13]
        ]);

        var classicOptions = {
          series: {
            0: {targetAxisIndex: 0},
            1: {targetAxisIndex: 1}
          },
          title: 'Số hợp đồng qua các năm',
          vAxes: {
            // Adds titles to each axis.
            0: {title: 'Doanh thu'},
            1: {title: 'apparent magnitude'}
          }
        };

          var classicChart = new google.visualization.ColumnChart(document.getElementById('nam_hopdong_nhanvien'));
          classicChart.draw(data, classicOptions);

    };
          </script>";
    ?>