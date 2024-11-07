@forelse($brands as $key=>$item)
    <tr>
        <td>@serial</td>
        <td><img src="{{ asset($item->image) }}" style="max-height: 100px;" alt=""> {{ $item->name }}</td>
        <td>
            @if($item->status == 1)
                <span class="btn btn-success btn-sm text-white">@lang('Active')</span>
            @else
                <span class="btn btn-danger btn-sm text-white">@lang('Inactive')</span>
            @endif
        </td>
        <td>
            <a href="{{ route('brand.edit',$item) }}" class="btn btn-info btn-sm">@lang('Edit')</a>
            <form method="post" action="{{ route('brand.destroy',$item) }}">
                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger btn-sm">@lang('Delete')</button>

            </form>
        </td>
    </tr>
@empty
@endforelse

