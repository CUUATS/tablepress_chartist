<aside role="complementary" id="chartist-<?php echo $chart_id; ?>-wrapper" class="ct-wrapper">
  <?php if ( $table_name ): ?>
    <h2 class="ct-title"><?php echo $table_name; ?></h2>
  <?php endif; ?>
  <div id="chartist-<?php echo $chart_id; ?>"
    class="ct-chart <?php echo $aspect_ratio; ?>" aria-hidden="true"></div>
  <?php if ( $legend_position ): ?>
    <div id="chartist-<?php echo $chart_id; ?>-legend" aria-hidden="true"
      class="ct-legend-container ct-legend-container-<?php echo $chart_type; ?> ct-legend-container-<?php echo $legend_position; ?>">
      <?php if ( !empty($legend_items) ): ?>
        <span class="ct-legend-title"><?php echo array_shift($legend_items); ?></span>
        <ul class="ct-legend">
          <?php foreach ($legend_items as $item_idx => $item): ?>
            <li class="ct-legend-item ct-legend-item-<?php echo chr(97 + $item_idx); ?>"><span class="ct-legend-symbol"></span><span class="ct-legend-label"><?php echo $item; ?></span></li>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>
    </div>
  <?php endif; ?>
  <script type="text/javascript">
    jQuery(document).ready(function(){
    	var	sum = function(a, b) {return a + b;};
    	new Chartist.<?php echo $chart; ?>(
        '#chartist-<?php echo $chart_id; ?>', <?php echo $chart_data; ?>, <?php echo $chart_options; ?>);
    });
  </script>
</aside>
