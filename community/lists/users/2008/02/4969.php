<?
$subject_val = "Re: [OMPI users] openmpi credits for eager messages";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  4 15:36:42 2008" -->
<!-- isoreceived="20080204203642" -->
<!-- sent="Mon, 4 Feb 2008 13:29:50 -0700" -->
<!-- isosent="20080204202950" -->
<!-- name="Brightwell, Ronald" -->
<!-- email="rbbrigh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi credits for eager messages" -->
<!-- id="20080204202950.GH20614_at_ratbert.sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="47A77450.4070903_at_myri.com" -->
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
<strong>From:</strong> Brightwell, Ronald (<em>rbbrigh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-04 15:29:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4970.php">Sacerdoti, Federico: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Previous message:</strong> <a href="4968.php">Patrick Geoffray: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>In reply to:</strong> <a href="4968.php">Patrick Geoffray: "Re: [OMPI users] openmpi credits for eager messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4970.php">Sacerdoti, Federico: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Reply:</strong> <a href="4970.php">Sacerdoti, Federico: "Re: [OMPI users] openmpi credits for eager messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev2">&gt; &gt; I'm looking at a network where the number of endpoints is large enough that
</span><br>
<span class="quotelev2">&gt; &gt; everybody can't have a credit to start with, and the &quot;offender&quot; isn't any
</span><br>
<span class="quotelev2">&gt; &gt; single process, but rather a combination of processes doing N-to-1 where N
</span><br>
<span class="quotelev2">&gt; &gt; is sufficiently large.  I can't just tell one process to slow down.  I have
</span><br>
<span class="quotelev2">&gt; &gt; to tell them all to slow down and do it quickly...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When you have N-&gt;1 patterns, then the hardware flow-control will
</span><br>
<span class="quotelev1">&gt; throttle the senders, or drop packets if there is no hardware
</span><br>
<span class="quotelev1">&gt; flow-control. If you don't have HOL blocking but the receiver does not
</span><br>
<span class="quotelev1">&gt; consume for any reasons (busy, sleeping, dead, whatever), then you can
</span><br>
<span class="quotelev1">&gt; still drop packets on the receiver (NIC, driver, thread) at a last
</span><br>
<span class="quotelev1">&gt; resort, this is what TCP does. The key is have exponential backoff (or a
</span><br>
<span class="quotelev1">&gt; reasonably large resend timeout) to no continue the hammering.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It costs nothing in the common case (unlike the credits approach), but
</span><br>
<span class="quotelev1">&gt; it does handle corner cases without affecting too much other nodes
</span><br>
<span class="quotelev1">&gt; (unlike hardware flow-control).
</span><br>
<p>Right.  For a sufficiently large number of endpoints, flow control has to get
<br>
pushed out of MPI and down into the network, which is why I don't necesarily
<br>
want an MPI that does flow control at the user-level.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But you know all that. You are just being mean to your users because you
</span><br>
<span class="quotelev1">&gt; can :-) The sick part is that I think I envy you...
</span><br>
<p>You know it :)
<br>
<p>-Ron
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4970.php">Sacerdoti, Federico: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Previous message:</strong> <a href="4968.php">Patrick Geoffray: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>In reply to:</strong> <a href="4968.php">Patrick Geoffray: "Re: [OMPI users] openmpi credits for eager messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4970.php">Sacerdoti, Federico: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Reply:</strong> <a href="4970.php">Sacerdoti, Federico: "Re: [OMPI users] openmpi credits for eager messages"</a>
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
