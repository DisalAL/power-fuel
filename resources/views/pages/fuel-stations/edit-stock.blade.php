<x-layout bodyClass="bg-gray-200">

    <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">
            </div>
        </div>
    </div>
    <main class="main-content  mt-0">
        <div class="page-header align-items-start min-vh-100"
            style="background-image: url('{{URL('images/gas-shed-cover.jpg')}}');">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container mt-5">
                <div class="row signin-margin">
                    <div class="col-lg-4 col-md-8 col-12 mx-auto">
                        <div class="card z-index-0 fadeIn3 fadeInBottom">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                                    <h2 class="text-white font-weight-bolder text-center mt-2 mb-0">Update Stock!</h2>
                                </div>
                            </div>
                            <div class="card-body">
                                <form role="form" method="POST" action="/fuel-stations" class="text-start">
                                    @csrf
                                    @method('PUT')
                                    <div class="input-group input-group-outline mt-3">
                                        <label class="form-label">Branch ID</label>
                                        <input type="number" readonly min="0" class="form-control" name="branch_id" value="{{$fuelStation['id']}}">
                                    </div>
                                    <div class="input-group input-group-outline mt-3">
                                        <label class="form-label">Current Amount</label>
                                        <input type="number" readonly min="0" class="form-control" name="old_amount" value="{{$fuelStation['stock']}}">
                                    </div>
                                    <div class="input-group input-group-outline mt-3">
                                        <label class="form-label">New Amount in Litres</label>
                                        <input type="number" min="0" class="form-control" name="new_amount" value="">
                                    </div>
                                    @error('amount')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                    @enderror
                                    <div class="text-center">
                                        <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Confirm Amount</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <x-footers.guest></x-footers.guest>
        </div>
    </main>
    @push('js')
<script src="{{ asset('assets') }}/js/jquery.min.js"></script>
<script>
$(function() {

var text_val = $(".input-group input").val();
if (text_val === "") {
  $(".input-group").removeClass('is-filled');
} else {
  $(".input-group").addClass('is-filled');
}
});
</script>
@endpush
</x-layout>
