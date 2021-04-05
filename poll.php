<div class=""style="background: #3b1713;
    color: white;
    padding: 10px;
    font-weight: bold;
    font-size: 18px;
    margin-top: 0px;
   text-align:left;
    font-family: Helvetica Neue,Helvetica,Arial,sans-serif;margin-bottom:20px;">
  Live Poll
</div>
<h3 style="font-family:Nunito Sans;">Do you think schools should remain open during the upcoming lockdown?</h3>
<div id="wf-poll-form" <?php if (!empty($answer)) {echo 'style="display:none;"';}?>>
  <ul>
    <li class="wf-poll-option" id="wf-option-y" data-answer="Y" data-uid="<?php echo $uid; ?>">Yes</li>
    <li class="wf-poll-option" id="wf-option-n" data-answer="N" data-uid="<?php echo $uid; ?>">No</li>
    <li class="wf-poll-option" id="wf-option-x" data-answer="X" data-uid="<?php echo $uid; ?>">Not Sure</li>
  </ul>
</div>
<div id="wf-poll-results" <?php if (empty($answer)) {echo 'style="display:none;"';}?>>
  <div class="wf-waiting">
    <h4><b>Updating poll results...</b></h4>
  </div>
  <canvas id="wf-poll-graph" width="100%"></canvas>
  <a href="https://wildfirecomms.typeform.com/to/N0Ir1i7x" target="_blank" id="wf-poll-submit"
    class="btn float-right">TAKE THE SURVEY</a>
</div>