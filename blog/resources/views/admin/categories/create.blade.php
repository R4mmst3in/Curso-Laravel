<x-layouts.app>
  <flux:breadcrumbs class="mb-4">
    <flux:breadcrumbs.item href="{{route('dashboard')}}">Dashboard</flux:breadcrumbs.item>
    <flux:breadcrumbs.item href="{{route('admin.categories.index')}}">Categories</flux:breadcrumbs.item>
    <flux:breadcrumbs.item href="#">Nuevo</flux:breadcrumbs.item>
  </flux:breadcrumbs>
  <div class="card">
    <form action="{{route('admin.categories.store')}}" method="POST">
      @csrf
        <div>
          <flux:input class="mb-4" label="Nombre" name="name" placeholder="Introduzca la categoria" value="{{old('name')}}"/>
          <div class="flex justify-end mt-4">
            <flux:button class="btn bg-amber-500" variant="primary" type="submit">Insertar</flux:button>
          </div>
        </div>
    </form>
  </div>
</x-layouts.app>