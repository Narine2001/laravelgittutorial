<style>
    table {
        width: 100%;
        margin-top: 50px;
        margin-bottom: 50px;
        background-color: #f1f1f1;
    }

    tr {
        width: 100%;
    }

    td,th {
        border: 1px solid;
        margin: 10px;
        text-align: center;
        padding: 10px;
    }
</style>

<h1 style="text-align: center">You have a new order request</h1>

<table>
    <tbody>
    <tr>
        <th>Name</th>
        <td>{{ $data['name'] }}</td>
    </tr>
    <tr>
        <th>Surname</th>
        <td>{{ $data['surname'] }}</td>
    </tr>
    <tr>
        <th>Email</th>
        <td>{{ $data['email'] }}</td>
    </tr>
    <tr>
        <th>Phone</th>
        <td>{{ $data['phone'] }}</td>
    </tr>
    </tbody>
</table>

Thanks,<br>
