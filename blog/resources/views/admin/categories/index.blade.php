<x-layouts.app>
  <div class="mb-4 flex justify-between items-center">
    <flux:breadcrumbs>
      <flux:breadcrumbs.item href="{{route('dashboard')}}">Dashboard</flux:breadcrumbs.item>
      <flux:breadcrumbs.item href="#">Categories</flux:breadcrumbs.item>
    </flux:breadcrumbs>
    <a href="{{route('admin.categories.create')}}" class="btn btn-blue text-xs">
      Nuevo
    </a>
  </div>
  <div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-body">
      <thead class="text-sm text-body bg-neutral-secondary-soft">
        <tr>
          <th scope="col" class="px-6 py-3">
            ID
          </th>
          <th scope="col" class="px-6 py-3">
            Name
          </th>
          <th scope="col" class="px-6 py-3" width="10px">
            Edit
          </th>
        </tr>
      </thead>
      <tbody>
        @foreach($categories as $category)
          <tr class="bg-neutral-primary">
            <th scope="row" class="px-6 py-4 text-heading whitespace-nowrap">
              {{$category->id}}
            </th>
            <td class="px-6 py-4">
              {{$category->name}}
            </td>
            <td class="px-6 py-4">
              <a href="{{route('admin.categories.edit',$category)}}" class="btn text-xs bg-amber-500">
                Editar
              </a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
</div>
</x-layouts.app>