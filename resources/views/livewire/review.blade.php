<div>
    @if(session()->has('message'))
        <div class="alert alert-success alert-block">
            {{session('message')}}
        </div>
    @endif


    <form wire:submit.prevent="store">

        @csrf
        <input type="text" wire:model="subject" class="form-control" placeholder="Subject"/>
        @error('subject')<span class="text-danger">{{$message}}</span>@enderror
        <br>
        <textarea type="text" wire:model="review" class="form-control" placeholder="Your review"></textarea>
        @error('review')<span class="text-danger">{{$message}}</span>@enderror
        <br>
        <div class="form-group">
            <div class="input-rating">
                @error('rate')<span class="text-danger">{{$message}}</span>@enderror
                <strong class="text-uppercase">Your Rating: </strong>
                <br>
                <div class="stars">
                    <input type="radio" id="star5" wire:model="rate" value="5"/><label for="star5"></label>
                    <input type="radio" id="star4" wire:model="rate" value="4"/><label for="star4"></label>
                    <input type="radio" id="star3" wire:model="rate" value="3"/><label for="star3"></label>
                    <input type="radio" id="star2" wire:model="rate" value="2"/><label for="star2"></label>
                    <input type="radio" id="star1" wire:model="rate" value="1"/><label for="star1"></label>
                </div>
            </div>
        </div>
        <br>
        @auth
            <input type="submit" class="btn btn-primary" style="background-color: #67b168" value="Kaydet" name="Submit"/>
        @else
           <div style="background-color:#ca3a11; text-align: center"> <a href="/login" class="primary-btn" style=" color: #FFFFFF">For Submit Your Review, Please Login</a></div>
        @endauth
    </form>
</div>
