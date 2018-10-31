<div class="uk-grid-match" uk-grid k-height-match="target: > div > .uk-tile; row: false">
<?php foreach ($widgets as $widget) : ?>

<div class="uk-width-1-<?= count($widgets) ?>@s">

    <div class="uk-tile <?= $widget->theme['panel'] ?> <?= $widget->theme['alignment'] ? 'uk-text-center' : '' ?> <?= $widget->theme['html_class'] ?>" uk-height-match>

        <?php if (!$widget->theme['title_hide']) : ?>
        <h3 class="<?= $widget->theme['title_size'] ?>"><?= $widget->title ?></h3>
        <?php endif ?>

        <?= $widget->get('result') ?>

    </div>
  </div>

<?php endforeach ?>
</div>
