<div class="table-responsive">
    <table class="table" id="districts-table">
        <thead>
        <tr>
            <th>Ur</th>
        <th>Unite</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($districts as $district)
            <tr>
                <td>{{ $district->ur }}</td>
            <td>{{ $district->unite }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['districts.destroy', $district->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('districts.show', [$district->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('districts.edit', [$district->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
