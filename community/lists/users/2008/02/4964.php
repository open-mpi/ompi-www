<?
$subject_val = "Re: [OMPI users] openmpi credits for eager messages";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  4 14:46:22 2008" -->
<!-- isoreceived="20080204194622" -->
<!-- sent="Mon, 4 Feb 2008 12:39:43 -0700" -->
<!-- isosent="20080204193943" -->
<!-- name="Brightwell, Ronald" -->
<!-- email="rbbrigh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi credits for eager messages" -->
<!-- id="20080204193943.GF20614_at_ratbert.sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="47A76695.70001_at_myri.com" -->
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
<strong>Date:</strong> 2008-02-04 14:39:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4965.php">Richard Treumann: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Previous message:</strong> <a href="4963.php">Patrick Geoffray: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>In reply to:</strong> <a href="4963.php">Patrick Geoffray: "Re: [OMPI users] openmpi credits for eager messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4968.php">Patrick Geoffray: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Reply:</strong> <a href="4968.php">Patrick Geoffray: "Re: [OMPI users] openmpi credits for eager messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev2">&gt; &gt; Not to muddy the point, but if there's enough ambiguity in the Standard
</span><br>
<span class="quotelev2">&gt; &gt; for people to ignore the progress rule, then I think (hope) there's enough
</span><br>
<span class="quotelev2">&gt; &gt; ambiguity for people to ignore the sender throttling issue too ;)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I understand your position, and I used to agree until I was forced to
</span><br>
<span class="quotelev1">&gt; change my mind by naive users :-)
</span><br>
<p>Right.  That's what I meant by:
<br>
<p>&nbsp;&nbsp;&quot;Most of the vendors aren't allowed to have this perspective....&quot;.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Poorly written MPI codes won't likely segfault or deadlock because the
</span><br>
<span class="quotelev1">&gt; progress rule was ignored. However, users will proudly tell you that you
</span><br>
<span class="quotelev1">&gt; have a memory leak if you don't limit the size of the unexpected queue
</span><br>
<span class="quotelev1">&gt; and their codes with no flow control blow up.
</span><br>
<p>Yep.  I don't lose money when I tell these people to go fix their code.  I like
<br>
to think that I actually get paid to tell these people to go fix their code....
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You don't have to make it very efficient (per-sender credits
</span><br>
<span class="quotelev1">&gt; definitively does not scale), but you need to have a way to stall/slow
</span><br>
<span class="quotelev1">&gt; the sender when the unexpected queue gets too big. That's quite easy to
</span><br>
<span class="quotelev1">&gt; do without affecting the common case.
</span><br>
<p>Not on my network.  I don't have the nice situation that the Standard refers
<br>
to where one producer is overwhelming the consumer.  For a reasonable number
<br>
of endpoints and a known offending sender, it's pretty straightforward to
<br>
do a user-level credit-based flow control.
<br>
<p>I'm looking at a network where the number of endpoints is large enough that
<br>
everybody can't have a credit to start with, and the &quot;offender&quot; isn't any
<br>
single process, but rather a combination of processes doing N-to-1 where N
<br>
is sufficiently large.  I can't just tell one process to slow down.  I have
<br>
to tell them all to slow down and do it quickly...
<br>
<p>-Ron
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4965.php">Richard Treumann: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Previous message:</strong> <a href="4963.php">Patrick Geoffray: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>In reply to:</strong> <a href="4963.php">Patrick Geoffray: "Re: [OMPI users] openmpi credits for eager messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4968.php">Patrick Geoffray: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Reply:</strong> <a href="4968.php">Patrick Geoffray: "Re: [OMPI users] openmpi credits for eager messages"</a>
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
