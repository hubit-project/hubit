<?php
foreach($arrStates as $state){
//it matches display each as select box
?>
	<option value="<?=$state['id']?>"><?=$state['strName']?></option>
<?php
}
?>