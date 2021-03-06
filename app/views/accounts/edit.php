<?php echo View::make('layouts/header'); ?>

<div class="main">

    <div class="main-inner">

        <div class="container">

            <div class="row">

                <div class="span12">      		

                   <div class="widget ">

                        <div class="widget-header">
                            <i class="icon-credit-card"></i>
                            <h3>Add Your Account</h3>
                        </div> <!-- /widget-header -->

                        <div class="widget-content">

                            <form id="edit-profile" class="form-horizontal" method="post" action="<?= action('AccountController@update', $account->account_id) ?>">
                                <input name="_method" type="hidden" value="PUT">
                                  <fieldset>
                                    
                                      <div class="control-group">											
                                        <label class="control-label" for="firstname">Bank Name</label>
                                        <div class="controls">
                                            <input type="text" class="span6" id="firstname" name="bank_name" placeholder="NBK Kuwait" value="<?=$account->bank_name?>" required>
                                        </div> <!-- /controls -->				
                                    </div> <!-- /control-group -->

                                    <div class="control-group">											
                                        <label class="control-label" for="lastname">Account NO</label>
                                        <div class="controls">
                                            <input type="text" class="span6" id="lastname" name="ac_no" placeholder="6897523456897" value="<?=$account->ac_no?>" required>
                                        </div> <!-- /controls -->				
                                    </div> <!-- /control-group -->

                                    <div class="control-group">											
                                        <label class="control-label" for="lastname">Beneficiary Name</label>
                                        <div class="controls">
                                            <input type="text" class="span6" id="lastname" name="benef_name" placeholder="Mohammed Eiden" value="<?=$account->benef_name?>" required>
                                        </div> <!-- /controls -->				
                                    </div> <!-- /control-group -->

                                    <div class="control-group">											
                                        <label class="control-label" for="radiobtns">Deposit Amount</label>

                                        <div class="controls">
                                            <div class="input-prepend input-append">
                                                <span class="add-on">$</span>
                                                <input class="span2" id="appendedPrependedInput" name="balance"  placeholder="100.50" type="text" value="<?=$account->balance?>" required>
<!--                                                <span class="add-on">.00</span>-->
                                            </div>
                                        </div>	<!-- /controls -->			
                                    </div> <!-- /control-group -->

                                    <input type="hidden" name="member_id" value="<?= Session::get('uid') ?>" />
                                    <div class="controls">
                                        <button type="submit" class="btn btn-primary">Save</button></div>
                                </fieldset>
                            </form>

                        </div> <!-- /widget-content -->

                    </div> <!-- /widget -->

                </div> <!-- /span8 -->




            </div> <!-- /row -->

        </div> <!-- /container -->

    </div> <!-- /main-inner -->

</div> <!-- /main -->


<?php echo View::make('layouts/footer'); ?>