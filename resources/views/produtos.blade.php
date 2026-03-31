<table>     
    <tr>
        <th>Nome</th>
        <th>Email</th>
        <th> # </th>
        <th> # </th>
    </tr>
    @foreach($usuarios as $usuario)
    <tr>
        <td>{{ $usuario->nome }}</td>
        <td>{{ $usuario->email }}</td>
        <td>
            <form action="/produtos_remover/{{ $usuario->id }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit">Excluir</button>
            </form> 
        </td>
        <td>
            <form action="/produtos_editar/{{ $usuario->id }}" method="get">
                @csrf
                <button type="submit">Editar</button>
            </form> 
        </td>
    </tr>
    @endforeach 
    
</table>

<a href="/">Voltar para a tela inicial</a>