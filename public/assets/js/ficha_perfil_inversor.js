//% de Ahorro
var options = {
    series: [100000, 40000, 60000],
    chart: {
    width: 380,
    type: 'pie',
  },
  labels: ['Capital', 'Ahorro', 'Inversión'],
  responsive: [{
    breakpoint: 480,
    options: {
      chart: {
        width: 200
      },
      legend: {
        position: 'bottom'
      }
    }
  }]
  };

  var chart = new ApexCharts(document.querySelector("#pie_chart"), options);
  chart.render();

//Capacidad de Endeudamiento
var options = {
    series: [33,77],
    chart: {
    width: 380,
    type: 'donut',
  },
  labels: ['Endeudamiento', 'Ingresos'],
  responsive: [{
    breakpoint: 480,
    options: {
      chart: {
        width: 200
      },
      legend: {
        position: 'bottom'
      }
    }
  }]
  };
  var chart = new ApexCharts(document.querySelector("#donut_chart"), options);
  chart.render();

  //Zonas Objetivo
  var options = {
    series: [20, 25, 35,20],
    chart: {
    width: 380,
    type: 'pie',
  },
  labels: ['Granada', 'Cadiz', 'Sevilla','Málaga'],
  responsive: [{
    breakpoint: 480,
    options: {
      chart: {
        width: 200
      },
      legend: {
        position: 'bottom'
      }
    }
  }]
  };

  var chart = new ApexCharts(document.querySelector("#pie_chart_2"), options);
  chart.render();

  //Mapa
  !function(){var e=L.map("map").setView([40.453191, -3.509236],6);
  L.tileLayer("https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw",{maxZoom:18,id:"mapbox/streets-v11",tileSize:512,zoomOffset:-1}).addTo(e)}();

