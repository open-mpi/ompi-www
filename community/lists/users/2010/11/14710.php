<?
$subject_val = "Re: [OMPI users] Question about collective messages implementation";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  8 10:48:53 2010" -->
<!-- isoreceived="20101108154853" -->
<!-- sent="Mon, 8 Nov 2010 15:48:36 +0000 (UTC)" -->
<!-- isosent="20101108154836" -->
<!-- name="Jerome Reybert" -->
<!-- email="jreybert_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question about collective messages implementation" -->
<!-- id="loom.20101108T124910-307_at_post.gmane.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="1ACCC1AC-61E6-474B-9D95-EBD4B1C87392_at_pittman.co.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] Question about collective messages implementation<br>
<strong>From:</strong> Jerome Reybert (<em>jreybert_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-08 10:48:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14711.php">Price, Brian M (N-KCI): "[OMPI users] Creating 64-bit objects?"</a>
<li><strong>Previous message:</strong> <a href="14709.php">Jed Brown: "Re: [OMPI users] Open MPI data transfer error"</a>
<li><strong>In reply to:</strong> <a href="14678.php">Ashley Pittman: "Re: [OMPI users] Question about collective messages implementation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14936.php">George Bosilca: "Re: [OMPI users] Question about collective messages implementation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ashley Pittman &lt;ashley &lt;at&gt; pittman.co.uk&gt; writes:
<br>
<p><span class="quotelev1">&gt; MPI_Comm_split() is an expensive operation, sure the manual says it's low cost
</span><br>
but it shouldn't be used
<br>
<span class="quotelev1">&gt; inside any critical loops so be sure you are doing the Comm_Split() at startup
</span><br>
and then re-using it as and
<br>
<span class="quotelev1">&gt; when needed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any blocking call into OpenMPI will poll consuming CPU cycles until the call
</span><br>
is complete, you can mitigate
<br>
<span class="quotelev1">&gt; against this by telling OpenMPI to aggressively call yield whilst polling
</span><br>
which would mean that your
<br>
<span class="quotelev1">&gt; parallel Lapack function could get the CPU resources it required.  Have a look
</span><br>
at this FAQ entry for details
<br>
<span class="quotelev1">&gt; of the option and what you can expect it to do.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=running#force-aggressive-degraded">http://www.open-mpi.org/faq/?category=running#force-aggressive-degraded</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ashley.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Thanks for your detailed responses. Actually, the problem came from a stupied
<br>
error of me...
<br>
<p>However, I'll have a depth look about the active waiting you describe. I'll try
<br>
to see if it affects my performances.
<br>
<p>J&#195;&#169;r&#195;&#180;me
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14711.php">Price, Brian M (N-KCI): "[OMPI users] Creating 64-bit objects?"</a>
<li><strong>Previous message:</strong> <a href="14709.php">Jed Brown: "Re: [OMPI users] Open MPI data transfer error"</a>
<li><strong>In reply to:</strong> <a href="14678.php">Ashley Pittman: "Re: [OMPI users] Question about collective messages implementation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14936.php">George Bosilca: "Re: [OMPI users] Question about collective messages implementation"</a>
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
