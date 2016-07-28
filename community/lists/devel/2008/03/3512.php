<?
$subject_val = "Re: [OMPI devel] Return code and error message problems";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 25 08:46:41 2008" -->
<!-- isoreceived="20080325124641" -->
<!-- sent="Tue, 25 Mar 2008 06:46:26 -0600" -->
<!-- isosent="20080325124626" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Return code and error message problems" -->
<!-- id="C40E5042.CC99%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="47E8F181.3080104_at_cs.indiana.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Return code and error message problems<br>
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-25 08:46:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3513.php">Tim Prins: "[OMPI devel] iof/libevent failures?"</a>
<li><strong>Previous message:</strong> <a href="3511.php">Tim Prins: "[OMPI devel] Return code and error message problems"</a>
<li><strong>In reply to:</strong> <a href="3511.php">Tim Prins: "[OMPI devel] Return code and error message problems"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Interesting! I was running it on odin last night until around 11pm your time
<br>
without problems.
<br>
<p>I'll take a look....
<br>
<p><p>On 3/25/08 6:35 AM, &quot;Tim Prins&quot; &lt;tprins_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Something went wrong last night and all our MTT tests had the following
</span><br>
<span class="quotelev1">&gt; output:
</span><br>
<span class="quotelev1">&gt; [odin005.cs.indiana.edu:28167] [[46567,0],0] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev1">&gt; base/plm_base_launch_support.c at line 161
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun was unable to start the specified application as it encountered
</span><br>
<span class="quotelev1">&gt; an error.
</span><br>
<span class="quotelev1">&gt; More information may be available above.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have not tracked down what caused this, but the more immediate problem
</span><br>
<span class="quotelev1">&gt; is that after giving this error mpirun returned '0' instead of a more
</span><br>
<span class="quotelev1">&gt; sane error value.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also, when running the test 'orte/test/mpi/abort' I get the error output:
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun has exited due to process rank 1 with PID 17822 on
</span><br>
<span class="quotelev1">&gt; node odin013 exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev1">&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Which is wrong, it should be saying that the process was aborted. It
</span><br>
<span class="quotelev1">&gt; looks like somehow the job state is being set to
</span><br>
<span class="quotelev1">&gt; ORTE_JOB_STATE_ABORTED_WO_SYNC  instead of ORTE_JOB_STATE_ABORTED.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3513.php">Tim Prins: "[OMPI devel] iof/libevent failures?"</a>
<li><strong>Previous message:</strong> <a href="3511.php">Tim Prins: "[OMPI devel] Return code and error message problems"</a>
<li><strong>In reply to:</strong> <a href="3511.php">Tim Prins: "[OMPI devel] Return code and error message problems"</a>
<!-- nextthread="start" -->
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
