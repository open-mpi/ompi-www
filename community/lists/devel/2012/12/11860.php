<?
$subject_val = "[OMPI devel] Duplicated modex issue.";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 20 09:57:11 2012" -->
<!-- isoreceived="20121220145711" -->
<!-- sent="Thu, 20 Dec 2012 18:57:06 +0400" -->
<!-- isosent="20121220145706" -->
<!-- name="Victor Kocheganov" -->
<!-- email="victor.kocheganov_at_[hidden]" -->
<!-- subject="[OMPI devel] Duplicated modex issue." -->
<!-- id="50D32742.7080903_at_itseez.com" -->
<!-- charset="UTF-8" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> [OMPI devel] Duplicated modex issue.<br>
<strong>From:</strong> Victor Kocheganov (<em>victor.kocheganov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-20 09:57:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11861.php">Ralph Castain: "Re: [OMPI devel] Duplicated modex issue."</a>
<li><strong>Previous message:</strong> <a href="11859.php">Jeff Squyres: "Re: [OMPI devel] openmpi-1.7rc5 on cygwin ; results and patches"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11861.php">Ralph Castain: "Re: [OMPI devel] Duplicated modex issue."</a>
<li><strong>Reply:</strong> <a href="11861.php">Ralph Castain: "Re: [OMPI devel] Duplicated modex issue."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi.
<br>
<p>I have an issue with understanding /ompi_mpi_init() /logic. Could you 
<br>
please tell me if you have any guesses about following behavior.
<br>
<p>I wonder if I understand ringh, there is a block in /ompi_mpi_init() 
<br>
/function for exchanging procs information between processes (denote 
<br>
this block 'modex'):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;coll = OBJ_NEW(orte_grpcomm_collective_t);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;coll-&gt;id = orte_process_info.peer_modex;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (ORTE_SUCCESS != (ret = orte_grpcomm.modex(coll))) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;error = &quot;orte_grpcomm_modex failed&quot;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;goto error;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* wait for modex to complete - this may be moved anywhere in
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpi_init
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* so long as it occurs prior to calling a function that needs
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* the modex info!
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while (coll-&gt;active) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_progress();  /* block in progress pending events */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OBJ_RELEASE(coll);
<br>
<p>and several instructions after this there is a block for processes 
<br>
synchronization (denote this block 'barrier'):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;coll = OBJ_NEW(orte_grpcomm_collective_t);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;coll-&gt;id = orte_process_info.peer_init_barrier;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (ORTE_SUCCESS != (ret = orte_grpcomm.barrier(coll))) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;error = &quot;orte_grpcomm_barrier failed&quot;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;goto error;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* wait for barrier to complete */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while (coll-&gt;active) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_progress();  /* block in progress pending events */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OBJ_RELEASE(coll);
<br>
<p>So,//initially///ompi_mpi_init()/ has following structure:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;'modex' block;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;'barrier' block;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;...
<br>
<p>I made several experiments with this code and the following one is of 
<br>
interest: if I add sequence of two additional blocks, 'barrier' and 
<br>
'modex', right after 'modex' block, then///ompi_mpi_init() /hangs in 
<br>
/opal_progress()/ of the last 'modex' block.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;'modex' block;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;'barrier' block;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;'modex' block; &lt;- hangs
<br>
&nbsp;&nbsp;&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;'barrier' block;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;...
<br>
<p>Thanks,
<br>
Victor Kocheganov.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11860/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11861.php">Ralph Castain: "Re: [OMPI devel] Duplicated modex issue."</a>
<li><strong>Previous message:</strong> <a href="11859.php">Jeff Squyres: "Re: [OMPI devel] openmpi-1.7rc5 on cygwin ; results and patches"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11861.php">Ralph Castain: "Re: [OMPI devel] Duplicated modex issue."</a>
<li><strong>Reply:</strong> <a href="11861.php">Ralph Castain: "Re: [OMPI devel] Duplicated modex issue."</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
