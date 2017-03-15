<table>
  <tr>
    <th>
      Вопрос
    </th>
    <th>
      Автор
    </th>
    <th>
      Дата
    </th>
    <th>
      Статус
    </th>
  </tr>
<?php foreach($question as $field): ?>
  <tr>
    <td><a href="<?php echo e(route('Question')); ?>"><?php echo e($field->question_text); ?></a></td>
    <td><?php echo e($field->author); ?></td>
    <td><?php echo e($field->date); ?></td>
    <td><?php echo e($field->status); ?></td>
  </tr>
<?php endforeach; ?>
</table>
<button name ="deletetheme" type="submit"value="delete">Удалить тему</button>
