// First Chart Example - Area Line Chart

Morris.Area({
  // ID of the element in which to draw the chart.
  element: 'morris-chart-area',
  // Chart data records -- each entry in this array corresponds to a point on
  // the chart.
  data: [
	{ d: '2012-10-01', temperature: 28.02 },
	{ d: '2012-10-02', temperature: 27.83 },
	{ d: '2012-10-03', temperature: 28.20 },
	{ d: '2012-10-04', temperature: 28.39 },
	{ d: '2012-10-05', temperature: 27.92 },
	{ d: '2012-10-06', temperature: 28.59 },
	{ d: '2012-10-07', temperature: 27.90 },
	{ d: '2012-10-08', temperature: 26.80 },
	{ d: '2012-10-09', temperature: 25.92 },
	{ d: '2012-10-10', temperature: 24.20 },
	{ d: '2012-10-11', temperature: 28.82 },
	{ d: '2012-10-12', temperature: 28.89 },
	{ d: '2012-10-13', temperature: 28.19 },
	{ d: '2012-10-14', temperature: 28.49 },
	{ d: '2012-10-15', temperature: 28.70 },
	{ d: '2012-10-16', temperature: 30.63 },
	{ d: '2012-10-17', temperature: 31.92 },
	{ d: '2012-10-18', temperature: 32.24 },
	{ d: '2012-10-19', temperature: 33.29 },
	{ d: '2012-10-20', temperature: 33.29 },
	{ d: '2012-10-21', temperature: 32.39 },
	{ d: '2012-10-22', temperature: 31.90 },
	{ d: '2012-10-23', temperature: 33.12 },
	{ d: '2012-10-24', temperature: 32.93 },
	{ d: '2012-10-25', temperature: 32.83 },
	{ d: '2012-10-26', temperature: 32.48 },
	{ d: '2012-10-27', temperature: 33.23 },
	{ d: '2012-10-28', temperature: 33.90 },
	{ d: '2012-10-29', temperature: 34.20 },
	{ d: '2012-10-30', temperature: 35.29 },
	{ d: '2012-10-31', temperature: 38.92 },
  ],
  // The name of the data record attribute that contains x-temperatures.
  xkey: 'd',
  // A list of names of data record attributes that contain y-temperatures.
  ykeys: ['temperature'],
  // Labels for the ykeys -- will be displayed when you hover over the
  // chart.
  labels: ['temperature'],
  // Disables line smoothing
  smooth: false,
});

Morris.Donut({
  element: 'morris-chart-donut',
  data: [
    {label: "Kwh", value: 42.7},
    {label: "Direct", value: 8.3},
    {label: "Social", value: 12.8},
    {label: "Organic", value: 36.2}
  ],
  formatter: function (y) { return y + "Kwh" ;}
});

Morris.Line({
  // ID of the element in which to draw the chart.
  element: 'morris-chart-line',
  // Chart data records -- each entry in this array corresponds to a point on
  // the chart.
  data: [
	{ d: '2012-10-01', temperature: 802 },
	{ d: '2012-10-02', temperature: 783 },
	{ d: '2012-10-03', temperature:  820 },
	{ d: '2012-10-04', temperature: 839 },
	{ d: '2012-10-05', temperature: 792 },
	{ d: '2012-10-06', temperature: 859 },
	{ d: '2012-10-07', temperature: 790 },
	{ d: '2012-10-08', temperature: 1680 },
	{ d: '2012-10-09', temperature: 1592 },
	{ d: '2012-10-10', temperature: 1420 },
	{ d: '2012-10-11', temperature: 882 },
	{ d: '2012-10-12', temperature: 889 },
	{ d: '2012-10-13', temperature: 819 },
	{ d: '2012-10-14', temperature: 849 },
	{ d: '2012-10-15', temperature: 870 },
	{ d: '2012-10-16', temperature: 1063 },
	{ d: '2012-10-17', temperature: 1192 },
	{ d: '2012-10-18', temperature: 1224 },
	{ d: '2012-10-19', temperature: 1329 },
	{ d: '2012-10-20', temperature: 1329 },
	{ d: '2012-10-21', temperature: 1239 },
	{ d: '2012-10-22', temperature: 1190 },
	{ d: '2012-10-23', temperature: 1312 },
	{ d: '2012-10-24', temperature: 1293 },
	{ d: '2012-10-25', temperature: 1283 },
	{ d: '2012-10-26', temperature: 1248 },
	{ d: '2012-10-27', temperature: 1323 },
	{ d: '2012-10-28', temperature: 1390 },
	{ d: '2012-10-29', temperature: 1420 },
	{ d: '2012-10-30', temperature: 1529 },
	{ d: '2012-10-31', temperature: 1892 },
  ],
  // The name of the data record attribute that contains x-temperatures.
  xkey: 'd',
  // A list of names of data record attributes that contain y-temperatures.
  ykeys: ['temperature'],
  // Labels for the ykeys -- will be displayed when you hover over the
  // chart.
  labels: ['temperature'],
  // Disables line smoothing
  smooth: false,
});

Morris.Bar ({
  element: 'morris-chart-bar',
  data: [
	{device: 'iPhone', geekbench: 136},
	{device: 'iPhone 3G', geekbench: 137},
	{device: 'iPhone 3GS', geekbench: 275},
	{device: 'iPhone 4', geekbench: 380},
	{device: 'iPhone 4S', geekbench: 655},
	{device: 'iPhone 5', geekbench: 1571}
  ],
  xkey: 'device',
  ykeys: ['geekbench'],
  labels: ['Geekbench'],
  barRatio: 0.4,
  xLabelAngle: 35,
  hideHover: 'auto'
});
