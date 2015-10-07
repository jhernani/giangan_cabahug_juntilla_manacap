

<div class="breadcrumb-panel">
	<div class="ui breadcrumb">
		<i class="right chevron icon divider"></i>
		<div class="active section">Reports</div>
	</div>
</div>

<div class="wrapper">

<div class="ui icon message">
  <i class="notched circle loading icon"></i>
  <div class="content">
    <div class="header">
      Just one second
    </div>
    <p>We're fetching that content for you.</p>
  </div>
</div>

<div class="ui horizontal segments">
  <div class="ui teal inverted segment">
    <div class="chart">
      <div class="ct-line ct-golden-section"></div>
    </div>
  </div>
  <div class="ui brown inverted segment">
    <div class="chart">
      <div class="ct-pie ct-golden-section ct-negative-labels"></div>
    </div>
  </div>
</div>
<div class="ui horizontal segments">
  <div class="ui secondary inverted segment">
    <div class="chart">
      <div class="ct-bar ct-golden-section ct-negative-labels"></div>
    </div>
  </div>
<div class="ui secondary inverted segment">
    <div class="chart">
      <div class="ct-bar2 ct-golden-section ct-negative-labels"></div>
    </div>
  </div>
</div>


</div>


  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/chartist/chartist.min.css">
    <script src="<?php echo base_url(); ?>assets/chartist/chartist.js"></script>


<script type="text/javascript">
    $(function () {

//LINE GRAPH
new Chartist.Line('.ct-line', {
  labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'],
  series: [
    [30, 9, 7, 8, 5],
    [2, 1, 3.5, 7, 3],
    [1, 3, 4, 5, 6]
  ]
}, {
  fullWidth: true,
  chartPadding: {
    right: 40
  }
});


//PIE CHART
var data = {
  series: [5, 3, 4]
};

var sum = function(a, b) { return a + b };

new Chartist.Pie('.ct-pie', data, {
  labelInterpolationFnc: function(value) {
    return Math.round(value / data.series.reduce(sum) * 100) + '%';
  }
});

//BAR GRAPH
new Chartist.Bar('.ct-bar', {
  labels: ['XS', 'S', 'M', 'L', 'XL', 'XXL', 'XXXL'],
  series: [20, 60, 120, 200, 180, 20, 10]
}, {
  distributeSeries: true
});
new Chartist.Bar('.ct-bar2', {
  labels: ['XS', 'S', 'M', 'L', 'XL', 'XXL', 'XXXL'],
  series: [20, 60, 120, 200, 180, 20, 10]
}, {
  distributeSeries: true
});

    });
</script>