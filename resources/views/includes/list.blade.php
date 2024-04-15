<div class="row mt-2 mb-4">
    <form action="{{route('appoinment')}}" class="ListForm" method="post">
        @csrf
        <input type="hidden" class="d-none" value="{{ $item['email'] }}" name="email">
        <input type="hidden" class="d-none" value="{{ $item['id'] }}" name="id">
        <input type="hidden" class="d-none" value="{{ $item['price'] }}" name="price">
        <div class="list_wrap" id="item_{{ $item['id'] }}">
            <div class="logo_des_wrap">
                <div class="logo_sub_wrap">
                    <div class="logo_wrap">
                        <img src="{{ asset($item['logo']) }}" alt="Logo" srcset="">
                    </div>
                    <div class="title_sub_wra">
                        <h4>{{ $item['title'] }}</h4>
                        <h6>{{ $item['subtitle'] }}</h6>
                    </div>
                </div>
                <div class="des_wrap">
                    <span>{{ $item['paragraph'] }}</span>
                </div>
            </div>
            <div class="time_slot_wrap">
                <div class="row">
                    @foreach ($item['time_schedule'] as $time)
                    <div class="col-md-12">
                        <div class="time_wrap">
                            <input type="checkbox" class="d-none time_checkbox" name="time" value="{{$time }}" id="SelectTime{{ $time }}{{ $item['id'] }}" data-item-id="{{ $item['id'] }}" data-time="{{ $time }}{{ $item['id'] }}">
                            <label for="SelectTime{{ $time }}{{ $item['id'] }}" class="form-label">Select</label>
                            <span>{{ $time }}</span>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="book_appointment_wrap">
                <span>
                Price: {{$item['price']}}$
                     </span>
                <button type="submit" class="btn btn_custom">Book an appointment</button>
            </div>
        </div>
    </form>
</div>
