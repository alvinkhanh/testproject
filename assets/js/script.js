// chart pie
const mahasiswa_masuk = document.querySelector('.masuk');
const mahasiswa_alfa = document.querySelector('.alfa');
const mahasiswa_sakit = document.querySelector('.sakit');

var ctx = document.getElementById("PieChart").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['masuk','alfa','sakit'],
        datasets: [
            {
                label: '# of Votes',
                data: [10,10,10],
                backgroundColor: ['red','yellow','blue'],
                borderWidth: 1
            }
        ]
    }
});

const updateChartValue = (input, dataOrder) => {
    input.addEventListener('change' , e => {
        myChart.data.datasets[0].data[dataOrder] = e.target.value;
        myChart.update();
    });
};



// grapif chart
var ctx = document.getElementById("MyChart").getContext('2d');
		var MyChart = new Chart(ctx, {
			type: 'horizontalBar',
			data: {
				labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
				datasets: [{
					label: '# of Votes',
					data: [12, 19, 3, 23, 2, 3],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(153, 102, 255, 0.2)',
					'rgba(255, 159, 64, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(153, 102, 255, 1)',
					'rgba(255, 159, 64, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});