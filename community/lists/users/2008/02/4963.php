<?
$subject_val = "Re: [OMPI users] openmpi credits for eager messages";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  4 14:25:20 2008" -->
<!-- isoreceived="20080204192520" -->
<!-- sent="Mon, 04 Feb 2008 14:25:09 -0500" -->
<!-- isosent="20080204192509" -->
<!-- name="Patrick Geoffray" -->
<!-- email="patrick_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi credits for eager messages" -->
<!-- id="47A76695.70001_at_myri.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20080204184938.GD20614_at_ratbert.sandia.gov" -->
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
<strong>Date:</strong> 2008-02-04 14:25:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4964.php">Brightwell, Ronald: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Previous message:</strong> <a href="4962.php">Gleb Natapov: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>In reply to:</strong> <a href="4961.php">Brightwell, Ronald: "Re: [OMPI users] openmpi credits for eager messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4964.php">Brightwell, Ronald: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Reply:</strong> <a href="4964.php">Brightwell, Ronald: "Re: [OMPI users] openmpi credits for eager messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ron,
<br>
<p>Brightwell, Ronald wrote:
<br>
<span class="quotelev1">&gt; Not to muddy the point, but if there's enough ambiguity in the Standard
</span><br>
<span class="quotelev1">&gt; for people to ignore the progress rule, then I think (hope) there's enough
</span><br>
<span class="quotelev1">&gt; ambiguity for people to ignore the sender throttling issue too ;)
</span><br>
<p>I understand your position, and I used to agree until I was forced to 
<br>
change my mind by naive users :-)
<br>
<p>Poorly written MPI codes won't likely segfault or deadlock because the 
<br>
progress rule was ignored. However, users will proudly tell you that you 
<br>
have a memory leak if you don't limit the size of the unexpected queue 
<br>
and their codes with no flow control blow up.
<br>
<p>You don't have to make it very efficient (per-sender credits 
<br>
definitively does not scale), but you need to have a way to stall/slow 
<br>
the sender when the unexpected queue gets too big. That's quite easy to 
<br>
do without affecting the common case.
<br>
<p>Patrick
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4964.php">Brightwell, Ronald: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Previous message:</strong> <a href="4962.php">Gleb Natapov: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>In reply to:</strong> <a href="4961.php">Brightwell, Ronald: "Re: [OMPI users] openmpi credits for eager messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4964.php">Brightwell, Ronald: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Reply:</strong> <a href="4964.php">Brightwell, Ronald: "Re: [OMPI users] openmpi credits for eager messages"</a>
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
