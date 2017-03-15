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
@foreach($question as $field)
  <tr>
    <td><a href="{{route('Question')}}">{{$field->question_text}}</a></td>
    <td>{{$field->author}}</td>
    <td>{{$field->date}}</td>
    <td>{{$field->status}}</td>
  </tr>
@endforeach
</table>
<button name ="deletetheme" type="submit"value="delete">Удалить тему</button>
