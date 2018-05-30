<!-- Add Modal -->
<div class="remodal-bg"></div>
<div class="remodal" data-remodal-id="addModal" data-remodal-options="hashTracking: false">
    <button data-remodal-action="close" class="remodal-close"></button>
    <h1>Add transaction</h1>
    <p>
    <form action="#" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label class="control-label">Date of transaction</label>
            <input name="date" type='text' class="form-control" id="datetimepicker-1" placeholder="YYYY-MM-DD HH:mm" required>
        </div>
        @if (is_object($modal_currency))
        <div class="form-group">
            <label class="control-label">Currency</label>
            <select name="currency" class="form-control custom-select">
                @foreach ($modal_currency as $currency)
                <option value="{{ $currency->id }}">{{ $currency->name }}</option>
                @endforeach
            </select>
        </div>
        @endif
        <div class="form-group">
            <label class="control-label">Comment</label>
            <input name="comment" type="text" class="form-control" maxlength="60">
        </div>
        <div class="form-group">
            <label class="control-label">Value</label>
            <input pattern="^([0-9]{1,12}\.[0-9]{1,8})$" name="price" type="text" id="valueCrypt" class="form-control" placeholder="1234.12345678" required>
        </div>
        <div class="form-actions">
            <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
            <button type="button" class="btn btn-inverse" data-remodal-action="cancel">Cancel</button>
        </div>
    </form>
    </p>
    <!--<br>
    <button data-remodal-action="cancel" class="remodal-cancel">Cancel</button>
    <button data-remodal-action="confirm" class="remodal-confirm">OK</button>-->
</div>