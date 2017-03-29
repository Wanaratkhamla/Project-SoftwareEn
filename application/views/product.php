<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>itOffside.com CodeIgniter Pagination</title>
        <style type="text/css">

a {
	color: #003399;
	background-color: transparent;
	font-weight: normal;
  margin: 3px;
  border: 1px solid #000000;
  padding: 2px;
}

h1 {
	color: #444;
	background-color: transparent;
	border-bottom: 1px solid #D0D0D0;
	font-size: 19px;
	font-weight: normal;
	margin: 0 0 14px 0;
	padding: 14px 15px 10px 15px;
}

#container {
	margin: 10px;
	border: 1px solid #D0D0D0;
	box-shadow: 0 0 8px #D0D0D0;
  padding: 5px;
}

p {
	margin: 12px 15px 12px 15px;
}

.grid {
  display: flex;                       /* establish flex container */
  flex-wrap: wrap;                     /* enable flex items to wrap */
  justify-content: flex-start;
                                      /*flex-start*/
}
.cell {
  flex: 0 0 32%;                       /* don't grow, don't shrink, width */
  height: 50px;
  margin-bottom: 5px;
  background-color: #999;
}
</style>
    </head>
    <body style="margin-top: 10px;">
      <div id="container">
        <h1>Product</h1>
        <div id="body" class="grid">
      <?php
      foreach($results as $data) { ?>
          <div class="cell"><?php echo "{" . $data->id . "}" . $data->name . " - " . $data->price . "<br>"; ?></div>

      <?php
      }
      ?>

       </div><br>
       <br><p><?php echo '<br>' . $links; ?></p>
        <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
       </div>
    </body>
</html>
