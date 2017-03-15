<h1>Админка</h1>
<form method="post" action="<?php echo e(route('ThemeCreate')); ?>">
<table>
  <tr>
  <th>Тема</th>
  <th>Вопросов</th>
  <th>Опубликовано</th>
  <th>Требуют ответа</th>
</tr>
<?php foreach($themes as $theme): ?>
<tr>
  <td><a href="<?php echo e(route('Theme',[$theme->theme_id])); ?>"><?php echo e($theme->theme_name); ?></a></td>
</tr>
<?php endforeach; ?>

</table>
<button name ="createtheme" type="submit"value="create">Создать тему</button>
<?php echo e(csrf_field()); ?>

</form>
