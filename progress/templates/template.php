<?php

$el = $this->el('div', [

	//

]);

?>

<?= $el($props, $attrs) ?>

	<div class="uk-margin"><?= $props['content'] ?></div>

	<div class="uk-margin">
		<progress id="<?= $uniqid = uniqid('progress-'); ?>" class="uk-progress" value="<?= $props['value'] ?>" max="<?= $props['max'] ?>" data-stop="<?= $props['stop'] ?>"><?= $props['stop'] ?>/<?= $props['max'] ?></progress>
		<script>
			UIkit.util.ready(function() {

				var bar = document.getElementById('<?= $uniqid; ?>');
				
				var animate = setInterval(function() {

					bar.value += <?= $props['animation_step'] ?>;

					if (bar.value >= bar.getAttribute('data-stop')) {
						clearInterval(animate);
					}

				}, <?= $props['animation_speed'] ?>);
				
			});
		</script>
	</div>

</div>
