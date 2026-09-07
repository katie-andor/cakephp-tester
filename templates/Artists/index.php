<h1>Artists</h1>
<table>
    <tr>
        <th>Title</th>
        <th>Created</th>
    </tr>
    <?php foreach ($artists as $artist): ?>
    <tr>
        <td>
            <?= $this->Html->link($artist->name, ['action' => 'view', $artist->id]) ?>
        </td>
        <td>
            <?= $artist->created->format(DATE_RFC850) ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>