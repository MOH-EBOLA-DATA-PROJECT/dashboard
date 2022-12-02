  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="./assets/jquery-3.6.0.min.js"></script>
    <script src="./bootstrapjs/bootstrap.js"></script>
    <script src="./bootstrapjs/bootstrap.min.js"></script>
    <script src="./assets/chart.js"></script>
    <script src="./assets/chart.min.js"></script>
    
    
    

    <!-- creating link dropdown -->
    <script>
      function dropdown()
      {
        // alert("success");
        document.getElementById('sublinks').style.display = "block";
      }
    </script>
    
    <script> 
    const labels = ['red','blue','green'];

  const data = {
    labels: labels,
    datasets: [{
        label: 'mycolors',
        backgroundColor: 'rgb(10,0,100)',
       borderColor: 'rgb(255, 99, 132)',
       data: [20,30,40],
      },
      
    ]
  };

  

  const config = {
    type: 'pie',
    data: data,
    options: {}
  };

 

  const myChart = new Chart(
    document.getElementById('mychart'),
    config
  );
 
    </script>
   
<script>
      
  const label = ['jan','feb','march','april'];

const data2 = {
  labels: label,
  datasets: [{
      label: 'cases',
      backgroundColor: 'rgb(10,0,100)',
      borderColor: 'rgb(255, 99, 132)',
      data: [10,3,30,100],
    },
    
  ]
};



const config1= {
  type: 'line',
  data: data2,
  options: {}
};



const myChart2 = new Chart(
  document.getElementById('chart2'),
  config1
);

  </script>
    <script src="script.js"></script>  
</body>
  
</html>