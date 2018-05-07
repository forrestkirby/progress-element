<?php

$id    = $element['id'];
$class = $element['class'];
$attrs = $element['attrs'];

?>

<div<?= $this->attrs(compact('id', 'class'), $attrs) ?>>

	<div class="uk-margin"><?= $element['field_content'] ?></div>

	<div class="uk-margin">
		<progress id="<?= $uniqid = uniqid('progress-'); ?>" class="uk-progress" value="<?= $element['field_value'] ?>" max="<?= $element['field_max'] ?>" data-stop="<?= $element['field_stop'] ?>"><?= $element['field_stop'] ?>/<?= $element['field_max'] ?></progress>
		<script>
			UIkit.util.ready(function() {

				var bar = document.getElementById('<?= $uniqid; ?>');

				var animate = setInterval(function() {

					bar.value += <?= $element['field_animation_step'] ?>;

					if (bar.value >= bar.getAttribute('data-stop')) {
						clearInterval(animate);
					}

				}, <?= $element['field_animation_speed'] ?>);

			});
		</script>
	</div>

</div>
