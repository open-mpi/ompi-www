<?
$subject_val = "[OMPI devel] Return code and error message problems";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 25 08:35:16 2008" -->
<!-- isoreceived="20080325123516" -->
<!-- sent="Tue, 25 Mar 2008 08:35:13 -0400" -->
<!-- isosent="20080325123513" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="[OMPI devel] Return code and error message problems" -->
<!-- id="47E8F181.3080104_at_cs.indiana.edu" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] Return code and error message problems<br>
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-25 08:35:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3512.php">Ralph H Castain: "Re: [OMPI devel] Return code and error message problems"</a>
<li><strong>Previous message:</strong> <a href="3510.php">Jeff Squyres: "Re: [OMPI devel] Switching away from SVN?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3512.php">Ralph H Castain: "Re: [OMPI devel] Return code and error message problems"</a>
<li><strong>Reply:</strong> <a href="3512.php">Ralph H Castain: "Re: [OMPI devel] Return code and error message problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Something went wrong last night and all our MTT tests had the following 
<br>
output:
<br>
[odin005.cs.indiana.edu:28167] [[46567,0],0] ORTE_ERROR_LOG: Error in file
<br>
base/plm_base_launch_support.c at line 161
<br>
--------------------------------------------------------------------------
<br>
mpirun was unable to start the specified application as it encountered 
<br>
an error.
<br>
More information may be available above.
<br>
--------------------------------------------------------------------------
<br>
<p>I have not tracked down what caused this, but the more immediate problem 
<br>
is that after giving this error mpirun returned '0' instead of a more 
<br>
sane error value.
<br>
<p><p><p>Also, when running the test 'orte/test/mpi/abort' I get the error output:
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 1 with PID 17822 on
<br>
node odin013 exiting without calling &quot;finalize&quot;. This may
<br>
have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>
--------------------------------------------------------------------------
<br>
<p>Which is wrong, it should be saying that the process was aborted. It 
<br>
looks like somehow the job state is being set to 
<br>
ORTE_JOB_STATE_ABORTED_WO_SYNC  instead of ORTE_JOB_STATE_ABORTED.
<br>
<p>Thanks,
<br>
<p>Tim
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3512.php">Ralph H Castain: "Re: [OMPI devel] Return code and error message problems"</a>
<li><strong>Previous message:</strong> <a href="3510.php">Jeff Squyres: "Re: [OMPI devel] Switching away from SVN?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3512.php">Ralph H Castain: "Re: [OMPI devel] Return code and error message problems"</a>
<li><strong>Reply:</strong> <a href="3512.php">Ralph H Castain: "Re: [OMPI devel] Return code and error message problems"</a>
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
