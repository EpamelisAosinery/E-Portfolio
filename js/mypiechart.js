window.onload = function() 
{
      var chart = new CanvasJS.Chart("pieChartContainer", {
            theme: "light2", // "light1", "light2", "dark1", "dark2"
            exportEnabled: true,
            animationEnabled: true,
            title: {
                  text: ""
            },
            data: [{
                  type: "pie",
                  startAngle: 25,
                  toolTipContent: "<b>{label}</b>: {y}%",
                  showInLegend: "true",
                  legendText: "{label}",
                  indexLabelFontSize: 16,
                  indexLabel: "{label} - {y}%",
                  dataPoints: [
                        { y: 25, label: "Analysis" },
                        { y: 20, label: "Design" },
                        { y: 25, label: "Construction" },
                        { y: 20, label: "Tesiting" },
                        { y: 10, label: "Promotion" }
                  ]
            }]
      });
      chart.render();
}

