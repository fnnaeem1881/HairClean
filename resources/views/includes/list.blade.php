<div class="row mt-2">
    <form action="#" method="post">
        @csrf
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
                            <input type="checkbox" class="d-none time_checkbox" name="time[]" id="SelectTime{{ $time }}" data-item-id="{{ $item['id'] }}" data-time="{{ $time }}">
                            <label for="SelectTime{{ $time }}" class="form-label">Select</label>
                            <span>{{ $time }}</span>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="book_appointment_wrap">
                <button type="submit" class="btn btn_custom">Book an appointment</button>
            </div>
        </div>
    </form>
</div>
