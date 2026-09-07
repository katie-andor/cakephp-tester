<h1><?= h($artist->name) ?></h1>
<p><?= h($artist->bio) ?></p>
<p><small>Created: <?= $artist->created->format(DATE_RFC850) ?></small></p>
<p><?= $this->Html->link('Edit', ['action' => 'edit', $artist->id]) ?></p>