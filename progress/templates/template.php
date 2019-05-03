<?php

$el = $this->el('div', [

	//

]);

?>

<?= $el($props, $attrs) ?>

	<div class="uk-margin"><?= $props['field_content'] ?></div>

	<div class="uk-margin">
		<progress id="<?= $uniqid = uniqid('progress-'); ?>" class="uk-progress" value="<?= $props['field_value'] ?>" max="<?= $props['field_max'] ?>" data-stop="<?= $props['field_stop'] ?>"><?= $props['field_stop'] ?>/<?= $props['field_max'] ?></progress>
		<script>
			UIkit.util.ready(function() {

				var bar = document.getElementById('<?= $uniqid; ?>');
				
				var animate = setInterval(function() {

					bar.value += <?= $props['field_animation_step'] ?>;

					if (bar.value >= bar.getAttribute('data-stop')) {
						clearInterval(animate);
					}

				}, <?= $props['field_animation_speed'] ?>);
				
			});
		</script>
	</div>

</div>
