<?
$subject_val = "Re: [OMPI users] openmpi credits for eager messages";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  4 15:23:51 2008" -->
<!-- isoreceived="20080204202351" -->
<!-- sent="Mon, 04 Feb 2008 15:23:44 -0500" -->
<!-- isosent="20080204202344" -->
<!-- name="Patrick Geoffray" -->
<!-- email="patrick_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi credits for eager messages" -->
<!-- id="47A77450.4070903_at_myri.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20080204193943.GF20614_at_ratbert.sandia.gov" -->
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
<strong>From:</strong> Patrick Geoffray (<em>patrick_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-04 15:23:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4969.php">Brightwell, Ronald: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Previous message:</strong> <a href="4967.php">Gleb Natapov: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>In reply to:</strong> <a href="4964.php">Brightwell, Ronald: "Re: [OMPI users] openmpi credits for eager messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4969.php">Brightwell, Ronald: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Reply:</strong> <a href="4969.php">Brightwell, Ronald: "Re: [OMPI users] openmpi credits for eager messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brightwell, Ronald wrote:
<br>
<span class="quotelev1">&gt; I'm looking at a network where the number of endpoints is large enough that
</span><br>
<span class="quotelev1">&gt; everybody can't have a credit to start with, and the &quot;offender&quot; isn't any
</span><br>
<span class="quotelev1">&gt; single process, but rather a combination of processes doing N-to-1 where N
</span><br>
<span class="quotelev1">&gt; is sufficiently large.  I can't just tell one process to slow down.  I have
</span><br>
<span class="quotelev1">&gt; to tell them all to slow down and do it quickly...
</span><br>
<p>When you have N-&gt;1 patterns, then the hardware flow-control will 
<br>
throttle the senders, or drop packets if there is no hardware 
<br>
flow-control. If you don't have HOL blocking but the receiver does not 
<br>
consume for any reasons (busy, sleeping, dead, whatever), then you can 
<br>
still drop packets on the receiver (NIC, driver, thread) at a last 
<br>
resort, this is what TCP does. The key is have exponential backoff (or a 
<br>
reasonably large resend timeout) to no continue the hammering.
<br>
<p>It costs nothing in the common case (unlike the credits approach), but 
<br>
it does handle corner cases without affecting too much other nodes 
<br>
(unlike hardware flow-control).
<br>
<p>But you know all that. You are just being mean to your users because you 
<br>
can :-) The sick part is that I think I envy you...
<br>
<p>Patrick
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4969.php">Brightwell, Ronald: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Previous message:</strong> <a href="4967.php">Gleb Natapov: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>In reply to:</strong> <a href="4964.php">Brightwell, Ronald: "Re: [OMPI users] openmpi credits for eager messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4969.php">Brightwell, Ronald: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Reply:</strong> <a href="4969.php">Brightwell, Ronald: "Re: [OMPI users] openmpi credits for eager messages"</a>
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
