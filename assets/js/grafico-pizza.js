
     google.charts.load('current', {'packages':['corechart']});
     google.charts.setOnLoadCallback(drawChart);
     function drawChart() {

       // Create the data table.
       var data = new google.visualization.DataTable();
       data.addColumn('string', 'Topping');
       data.addColumn('number', 'Slices');
       data.addRows([
         ['Ouvintes', 20],
         ['META', 200],
       ]);

       // Set chart options
       var options = {'title':'     COMPARAÇÃO OUVINTES NO MÊS     ',
                      'width':330,
                      'height':200};

       // Instantiate and draw our chart, passing in some options.
       var chart = new google.visualization.PieChart(document.getElementById('grafico_pizza'));
       chart.draw(data, options);
 }