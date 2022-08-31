<form action="{{ route('products.search') }}" class="">

    <input type="text" name="q"  class="form-control" value="{{ request()->q ?? '' }}">

    <button type="submit" class ="btn btn-info" ><i class="fa fa-search" aria-hidden="true"></i></button>
</form>

