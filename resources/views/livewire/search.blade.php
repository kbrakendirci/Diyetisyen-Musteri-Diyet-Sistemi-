<div>
    <input wire:model="search" name="search" type="text" class="input search-input" list="mylist" placeholder="Search diet..."  style="height: 67px; width: 150px"/><button class="Search_btn" style="background-color: #43960f; margin-right: 50px">Search</button>
    <br>
    <br>

    @if(!empty($query))
        <datalist id="mylist">
            @foreach($datalist as $rs)
                <option value="{{$rs->title}}">{{$rs->category->title}}</option>
            @endforeach
        </datalist>
    @endif
</div>
