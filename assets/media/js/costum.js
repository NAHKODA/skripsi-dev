$(function () {
	$('#chart-grafik').highcharts({
	chart: {
	plotBackgroundColor: null,
	plotBorderWidth: 1,//null,
	plotShadow: false
	},
	title: {
	text: 'Kamen Rider Heisei Favorit 2014 Menurut Admin'
	},
	tooltip: {
	pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
	},
	plotOptions: {
	pie: {
	allowPointSelect: true,
	cursor: 'pointer',
	dataLabels: {
	enabled: true,
	format: '<b>{point.name}</b>: {point.percentage:.1f} %',
	style: {
	color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
	}
	}
	}
	},
	series: [{
	type: 'column',
	name: 'Kamen Rider Favorit',
	data: [
		['Kabuto',   35.0],
		['Gaim',       30.0],
		['Decade',       20.0],
		['Den-O',    10.5],
		['Kiva',     4.5],
	]

	}]
	});
	});
$(function () {
	$('#chart-pie').highcharts({
	chart: {
	plotBackgroundColor: null,
	plotBorderWidth: 1,//null,
	plotShadow: false
	},
	title: {
	text: 'Kamen Rider Heisei Favorit 2014 Menurut Admin'
	},
	tooltip: {
	pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
	},
	plotOptions: {
	pie: {
	allowPointSelect: true,
	cursor: 'pointer',
	dataLabels: {
	enabled: true,
	format: '<b>{point.name}</b>: {point.percentage:.1f} %',
	style: {
	color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
	}
	}
	}
	},
	series: [{
	type: 'pie',
	name: 'Kamen Rider Favorit',
	data: [
		['Kabuto',   35.0],
		['Gaim',       30.0],
		['Decade',       20.0],
		['Den-O',    10.5],
		['Kiva',     4.5],
	]

	}]
	});
	});