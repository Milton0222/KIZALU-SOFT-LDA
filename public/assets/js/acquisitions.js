const ctx = document.getElementById('myChart').getContext('2d');
      
        new Chart(ctx, {
          type: 'bar',
          data: {
            labels: ['Janeiro', 'Fevereiro', 'Marc', 'Abril', 'Maio', 'Junho','Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Desembro'],
            datasets: [{
              label: 'Trabalhos Feitas em 2021',
              data: [4, 19, 30, 5, 50, 30, 4, 4,60, 5,10,20],
              borderWidth: 6,
              bordercolor:'green'
            },
            
               {
                  label: 'Trabalhos Feitas em 2022',
                  data: [40, 9, 20, 5, 2, 5, 4, 4,20, 5,23,50],
                  borderWidth: 6,
                  bordercolor: '#000'
                }
        ]
          },
          options: {
            scales: {
              y: {
                beginAtZero: true
              }
            }
          }
        });