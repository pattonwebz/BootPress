      <div id="footer"> 
        <div class="footnote"> 
          <p class="text-center">
            <a href="http://www.pattonwebz.com/" title="PattonWebz">BootPress is a project from PattonWebz</a>

<a href= "#myModal"  role="button" class="btn btn-primary pull-right" data-toggle="modal">Get BootPress</a>
 </p>
<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Download BootPress</h3>
  </div>
  <div class="modal-body">
    <p>Bottpress isn't actually publically available in a completed form yet. You can check out the development on <a href="htttp://www.github.com/pattonwebz/bootpress/" title="BootPress on Github">Github</a> or sign-up to the beta to be told as soon as a completed version is available for you to try.</p>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    <a href="http://www.theme-dev.com/BootPress/"><button type="button" id="loading" class="btn btn-primary" data-loading-text="Loading..." data-complete-text="Done">Beta Test BootPress</button></a>
  </div>
</div>
		  </p>
        </div> <!-- .links --> 
      </div>  <!-- #footer -->  
	<?php wp_footer(); ?>  
<script type="text/javascript">
	var $ = jQuery.noConflict ();
	$(document).ready(function() {
        $('.carousel').carousel({
            interval: 3000
        });
    });
</script>
<script type="text/javascript">
var $ = jQuery.noConflict ();
$( '#loading' )
    .click(function () {
        var btn = $(this)
        btn.button('loading')
    });
</script>
  </body>
  
</html>