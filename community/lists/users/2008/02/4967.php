<?
$subject_val = "Re: [OMPI users] openmpi credits for eager messages";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  4 15:17:09 2008" -->
<!-- isoreceived="20080204201709" -->
<!-- sent="Mon, 4 Feb 2008 22:17:01 +0200" -->
<!-- isosent="20080204201701" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi credits for eager messages" -->
<!-- id="20080204201701.GC15424_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="OF49B8F722.08D78CC7-ON852573E5.00697FFF-852573E5.006D6298_at_us.ibm.com" -->
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
<strong>Date:</strong> 2008-02-04 15:17:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4968.php">Patrick Geoffray: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Previous message:</strong> <a href="4966.php">Brian W. Barrett: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>In reply to:</strong> <a href="4965.php">Richard Treumann: "Re: [OMPI users] openmpi credits for eager messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4972.php">George Bosilca: "Re: [OMPI users] openmpi credits for eager messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Feb 04, 2008 at 02:54:46PM -0500, Richard Treumann wrote:
<br>
<span class="quotelev1">&gt; In my example, each sender task 1 to n-1 will have one rendezvous message
</span><br>
<span class="quotelev1">&gt; to task 0 at a time.  The MPI standard suggests descriptors be small enough
</span><br>
<span class="quotelev1">&gt; and  there be enough descriptor space for reasonable programs . The
</span><br>
<span class="quotelev1">&gt; standard is clear that unreasonable programs can run out of space and fail.
</span><br>
<span class="quotelev1">&gt; The standard does not try to quantify reasonableness.
</span><br>
You are right about your example, but I was not talking specifically about it.
<br>
Your example should work with Open MPI over IB/TCP because while rank 0 sleeps
<br>
without calling progress, transport layer flow control should throttle senders.
<br>
(SM doesn't have flow control that is why it fails.) What I was trying to say that
<br>
in MPI a process can't fully control its resource usage.
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4968.php">Patrick Geoffray: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Previous message:</strong> <a href="4966.php">Brian W. Barrett: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>In reply to:</strong> <a href="4965.php">Richard Treumann: "Re: [OMPI users] openmpi credits for eager messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4972.php">George Bosilca: "Re: [OMPI users] openmpi credits for eager messages"</a>
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
