
  <link href="<?php echo base_url(); ?>assets/footable/css/footable.core.css?v=2-0-1" rel="stylesheet" type="text/css"/>
  <link href="<?php echo base_url(); ?>assets/footable/css/footable.metro.css?v=2-0-1" rel="stylesheet" type="text/css"/>

  <script src="<?php echo base_url(); ?>assets/footable/js/footable.js?v=2-0-1" type="text/javascript"></script>
  <script src="<?php echo base_url(); ?>assets/footable/js/footable.sort.js?v=2-0-1" type="text/javascript"></script>
  <script src="<?php echo base_url(); ?>assets/footable/js/footable.filter.js?v=2-0-1" type="text/javascript"></script>
  <script src="<?php echo base_url(); ?>assets/footable/js/footable.paginate.js?v=2-0-1" type="text/javascript"></script>


<script type="text/javascript">
    $(function () {
       $('table').footable({ bookmarkable: { enabled: true }}).bind({
            'footable_filtering': function (e) {
                var selected = $('.filter-status').find(':selected').text();
                if (selected && selected.length > 0) {
                    e.filter += (e.filter && e.filter.length > 0) ? ' ' + selected : selected;
                    e.clear = !e.filter;
                }
            },
            'footable_filtered': function() {
                var count = $('table.demo tbody tr:not(.footable-filtered)').length;
                $('.row-count').html(count + ' rows found');
            }
        });

        $('.clear-filter').click(function (e) {
            e.preventDefault();
            $('.filter-status').val('');
            $('table.demo').trigger('footable_clear_filter');
            $('.row-count').html('');
        });

        $('.filter-status').change(function (e) {
            e.preventDefault();
            $('table.demo').data('footable-filter').filter( $('#filter').val() );
        });

        $('.filter-api').click(function (e) {
            e.preventDefault();

            //get the footable filter object
            var footableFilter = $('table').data('footable-filter');

            alert('about to filter table by "tech"');
            //filter by 'tech'
            footableFilter.filter('both');

            //clear the filter
            if (confirm('clear filter now?')) {
                footableFilter.clearFilter();
            }
        });

    });
</script>


  
