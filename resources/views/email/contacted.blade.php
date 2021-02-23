<table>
    @foreach ($data as $key=>$item)
        @if ($key!="_token")
            <tr>
                <th>
                    {{$key}}
                </th>
                <td>
                    {{$item}}
                </td>
            </tr>
        @endif
    @endforeach
</table>