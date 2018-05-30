<!--Delete Modal-->
<div class="remodal" data-remodal-id="deleteModal" data-remodal-options="hashTracking: false">
    <button data-remodal-action="close" class="remodal-close"></button>
    <h1>Delete transaction</h1>
    <p>
    <form action="#" method="post">
        {{ csrf_field() }}
        <h3>Are you sure?</h3>
        <button type="submit" class="btn btn-danger"> <i class="fa fa-check"></i> OK</button>
        <button type="button" class="btn btn-inverse" data-remodal-action="cancel">Cancel</button>
    </form>
    </p>
    <!--<br>
    <button data-remodal-action="cancel" class="remodal-cancel">Cancel</button>
    <button data-remodal-action="confirm" class="remodal-confirm">OK</button>-->
</div>