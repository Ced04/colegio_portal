<!-- Modal For Faculty Login--> 
<div class="modal fade" id="viewCourse" tabindex="-1" role="dialog"   aria-labelledby="myModalLabel" aria-hidden="true" >    
  <div class="modal-dialog">       
    <div class="modal-content" style="border-color: #dimgray;border-radius: 2px;">          
      <div class="modal-header" style="background-color: dimgray;color: #fff">               
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>           
        <h4 class="modal-title" id="myModalLabel">Cashin</h4>          
      </div>     
      <form id="cashinForm">     
      <div class="modal-body">
        <div class="form-inline">
          <label>Invoice  No.</label>
          <input type="text" class="form-control flat-form" id="invoice_no" value="<?= $vn ?>" readonly>
          <label>Date</label>
          <input type="text" class="form-control flat-form" id="date" value="<?= $date ?>" readonly>
        </div>
        <hr>
        <div class="form-inline">
          <label>Amount</label>
          <input type="number" min="0" class="form-control flat-form" id="amount">
          <small id="amount-alert"></small>
          <input type="hidden" class="form-control flat-form" id="uid" value="<?= $_SESSION['user_id']; ?>">
        </div>
      </div>
      <div class="panel-footer">
        <div class="form-group">
          <button class="btn btn-success btn-sm" id="cashinSubmit">Submit</button>
        </div>
      </div>
      </form>  
    </div><!-- /.modal-content --> 
  </div><!-- /.modal -->
</div>