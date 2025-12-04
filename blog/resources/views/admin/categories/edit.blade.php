<x-layouts.app>
  <flux:breadcrumbs class="mb-4">
    <flux:breadcrumbs.item href="{{route('dashboard')}}">Dashboard</flux:breadcrumbs.item>
    <flux:breadcrumbs.item href="{{route('admin.categories.index')}}">Categories</flux:breadcrumbs.item>
    <flux:breadcrumbs.item href="">Editar</flux:breadcrumbs.item>

  </flux:breadcrumbs>
  <div class="card">
    <form action="{{route('admin.categories.update',$category)}}" method="POST">
      @csrf
      @method('PUT')

      <div>
        <div class="flex justify-left mt-4">
          <flux:input class="mb-4" label="Id" name="id" placeholder="Id" value="{{old('id',$category->id)}}"/>
          <flux:input class="mb-4" label="Nombre" name="name" placeholder="Nombre" value="{{old('name',$category->name)}}"/>
        </div>
        <div class="flex justify-left mt-4">
          <flux:button class="btn bg-amber-500" variant="primary" type="submit">Actualizar</flux:button>
        </div>
      </div>
    </form>
  </div>
</x-layouts.app>