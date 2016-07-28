<?
$subject_val = "Re: [OMPI users] openmpi credits for eager messages";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  4 14:03:26 2008" -->
<!-- isoreceived="20080204190326" -->
<!-- sent="Mon, 4 Feb 2008 21:03:20 +0200" -->
<!-- isosent="20080204190320" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi credits for eager messages" -->
<!-- id="20080204190319.GA15424_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="OF467D467D.25326148-ON852573E5.004D0296-852573E5.004DB4C5_at_us.ibm.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi credits for eager messages<br>
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-04 14:03:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4963.php">Patrick Geoffray: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Previous message:</strong> <a href="4961.php">Brightwell, Ronald: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>In reply to:</strong> <a href="4954.php">Richard Treumann: "Re: [OMPI users] openmpi credits for eager messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4965.php">Richard Treumann: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Reply:</strong> <a href="4965.php">Richard Treumann: "Re: [OMPI users] openmpi credits for eager messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Feb 04, 2008 at 09:08:45AM -0500, Richard Treumann wrote:
<br>
<span class="quotelev1">&gt; To me, the MPI standard is clear that a program like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; task 0:
</span><br>
<span class="quotelev1">&gt; MPI_Init
</span><br>
<span class="quotelev1">&gt; sleep(3000);
</span><br>
<span class="quotelev1">&gt; start receiving messages
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; each of tasks 1 to n-1:
</span><br>
<span class="quotelev1">&gt; MPI_Init
</span><br>
<span class="quotelev1">&gt; loop 5000 times
</span><br>
<span class="quotelev1">&gt;    MPI_Send(small message to 0)
</span><br>
<span class="quotelev1">&gt; end loop
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; May send some small messages eagerly if there is space at task 0 but must
</span><br>
<span class="quotelev1">&gt; block each task 1 to  n-1 before allowing task 0 to run out of eager buffer
</span><br>
<span class="quotelev1">&gt; space.  Doing this requires a token or credit management system in which
</span><br>
<span class="quotelev1">&gt; each task has credits for known buffer space at task 0. Each task will send
</span><br>
<span class="quotelev1">&gt; eagerly to task 0 until the sender runs out of credits and then must switch
</span><br>
<span class="quotelev1">&gt; to rendezvous protocol.
</span><br>
And rendezvous messages are not free either. So this approach will only
<br>
postpone failure a little bit.
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4963.php">Patrick Geoffray: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Previous message:</strong> <a href="4961.php">Brightwell, Ronald: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>In reply to:</strong> <a href="4954.php">Richard Treumann: "Re: [OMPI users] openmpi credits for eager messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4965.php">Richard Treumann: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Reply:</strong> <a href="4965.php">Richard Treumann: "Re: [OMPI users] openmpi credits for eager messages"</a>
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
