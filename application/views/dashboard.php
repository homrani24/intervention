<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">
                <?php echo $this->session->userdata('logged_in')['first_name']; ?>
                </h3>
                <html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'project'],
            <?php foreach($reclamations as $r){ ?>

          ['<?php echo $r['name']; ?>',     <?php echo $r['total']; ?>],
          <?php } ?>
          ['sociter 3',     0]

        ]);
        var options = {
          title: 'Societer par réclamation'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
      <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Element", "user", { role: "style" } ],
        <?php foreach($users as $u){
           if($u['id'] == 1) {?>
        ["Chef du projet", <?php echo $u['total']; ?>, "gold"],
            
            <?php } ?>
            <?php if($u['id'] == 2){?>
        ["Intervenant", <?php echo $u['total']; ?>, "#b87333"],
            
            <?php } ?>
            <?php if($u['id'] == 3){?>
        ["Client", <?php echo $u['total']; ?>, "#silver"],
            
            <?php } ?>
        <?php } ?>

      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Utilisateurs",
        width: 600,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
  </script>

  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
    <div id="columnchart_values" style="width: 900px; height: 500px;"></div>
  </body>
</html>

            </div>
        </div>
    </div>
</div>