<table width="100%" border="1">
  <tr>
    <th>officecode</th>
    <th>city/th>
    <th>DNI</th>
    <th>phone</th>
    <th>addressLine1</th>
    <th>addressLine2</th>
    <th>state</th>
    <th>country</th>
    <th>postalCode</th>
    <th>territory</th>
  </tr>
  @foreach ($oficinas as $oficina)
  <tr>
    <td>{{ $oficina->officeCode }}</td>
    <td>{{ $oficina->city}}</td>
    <td>{{ $oficina->phone }}</td>
    <td>{{ $oficina->addressLine1}}</td>
    <td>{{ $oficina->addressLine2}}</td>
    <td>{{ $oficina->state}}</td>
    <td>{{ $oficina->country}}</td>
    <td>{{ $oficina->postalCode}}</td>
    <td>{{ $oficina->territory}}</td>
  </tr>
  @endforeach

</table>