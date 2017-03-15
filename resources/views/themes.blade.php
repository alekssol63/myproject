<h1>Админка</h1>
<form method="post" action="{{route('ThemeCreate')}}">
<table>
  <tr>
  <th>Тема</th>
  <th>Вопросов</th>
  <th>Опубликовано</th>
  <th>Требуют ответа</th>
</tr>
@foreach($themes as $theme)
<tr>
  <td><a href="{{route('Theme',[$theme->theme_id])}}">{{$theme->theme_name}}</a></td>
</tr>
@endforeach

</table>
<button name ="createtheme" type="submit"value="create">Создать тему</button>
{{ csrf_field() }}
</form>
