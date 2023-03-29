<?php if (isset($view['bookmarks']) && count($view['bookmarks'])) : ?>
    <table>
        <?php foreach($view['bookmarks'] as $bookmark) : ?>
            <tr>
            <td><?php echo $bookmark['title']; ?></td>
            <td><?php echo $bookmark['url']; ?></td>
            <td><?php echo implode(', ', $bookmark['tags']); ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php else: ?>
    <p>List is empty</p>
<?php endif; ?>