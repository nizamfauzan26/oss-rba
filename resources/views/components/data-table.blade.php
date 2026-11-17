@props(['columns', 'rows', 'route'])

<form method="GET" action="{{ route($route) }}" class="row g-2 mb-3">
    <div class="col-auto">
        <input type="text" name="search" value="{{ request('search') }}"
               class="form-control" placeholder="Cari data...">
    </div>
    <div class="col-auto">
        <button type="submit" class="btn btn-primary">Cari</button>
        <a href="{{ route($route) }}" class="btn btn-secondary">Reset</a>
    </div>
</form>

<div class="table-responsive">
    <table class="table table-bordered table-striped table-hover table-sm align-middle text-nowrap">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                @foreach ($columns as $label)
                    <th>{{ $label }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @forelse ($rows as $i => $row)
                <tr>
                    <td>{{ $rows->firstItem() + $i }}</td>
                    @foreach ($columns as $key => $label)
                        <td>{{ $row->{$key} }}</td>
                    @endforeach
                </tr>
            @empty
                <tr>
                    <td colspan="{{ count($columns) + 1 }}" class="text-center">Belum ada data.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

{{ $rows->links() }}