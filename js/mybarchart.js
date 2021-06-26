window.onload = function() 
{
      var chart = new CanvasJS.Chart("barChartContainer", {
            animationEnabled: true,
            theme: "light2", // "light1", "light2", "dark1", "dark2"
            title:
            {
                  text: ""
            },
            axisY: 
            {
                  title: "Impacted Users"
            },
            data: [{
                  type: "column",  
                  showInLegend: true, 
                  legendMarkerColor: "grey",
                  legendText: "Users Impacted",
                  dataPoints: [      
                        { y: 40000000, label: "Microsoft" },
                        { y: 419000000,  label: "Facebook" },
                        { y: 383000000,  label: "Marriot Hotels" },
                        { y: 330000000,  label: "Twitter" },
                        { y: 150000000,  label: "myFitnessPal" }
                  ]
            }]
      });
      chart.render();
}