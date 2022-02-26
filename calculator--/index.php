<?php $title="Calculator--"; include("./templates/header.php"); ?>
    <h1 class="center"><?php echo $title; ?></h1>
    <div class="calcContainer">
      <form action="" method="get" onsubmit="calculate('screen');">
        <?php
        $out = 0;
        $calculation = null;
        if (isset($_GET['screen'])) {
          $screen = rawurldecode($_GET['screen']);
          $out = null;
          $calculation = $screen.'=';
          //$out = eval("return $screen;");
	  $out = 0;

        }
        ?>
		<div class="screen">
		    <p class="calculation"><?php echo $calculation; ?></p>
		  <textarea class="innerScreen" name="screen" id="screen" placeholder="<?php echo $out; ?>" cols="50" rows="1" autocomplete="off" readonly="readonly"></textarea><br />
    </div>
		<?php
        for($i=0;$i<10;$i++){
        ?>
        <input type="button" class="calc_button" name="number_<?php echo $i; ?>" value="<?php echo $i; ?>" onclick="insert('<?php echo $i; ?>', 'screen');" />
        <?php
        }
        $items = array('.', '*', '/', '+', '-', '(', ')');
        foreach ($items as $item) {
        ?>
        <input type="button" class="calc_button" name="number_<?php echo $item; ?>" value="<?php echo $item; ?>" onclick="insert('<?php echo $item; ?>', 'screen');" />
        <?php
        }
        ?>
        <br />
        <input type="button" class="calc_button" onclick="cls('screen');" value="cls" />
        <input type="button" class="calc_button" onclick="undo('screen');" value="undo" />
        <input type="submit" class="calc_button submit" value="=" />
      </form>
    </div>
<?php include("./templates/footer.php"); ?>
