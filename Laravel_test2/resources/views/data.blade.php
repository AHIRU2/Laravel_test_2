<style>
    th {
        background-color: #289ADC;
        color: white;
        padding: 5px 40px;
    }

    tr:nth-child(odd) td {
        background-color: #FFFFFF;
    }

    td {
        padding: 25px 40px;
        background-color: #EEEEEE;
        text-align: center;
    }
</style>
<table>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>e-mail</th>
    </tr>
    @foreach ($items as $item)
    <tr>
        <td>
            {{$item->id}}
        </td>
        <td>
            {{$item->name}}
        </td>
        <td>
            {{$item->email}}
        </td>
    </tr>
    @endforeach
</table>