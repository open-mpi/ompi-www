<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar 25 18:16:55 2005" -->
<!-- isoreceived="20050325231655" -->
<!-- sent="Fri, 25 Mar 2005 15:16:46 -0800" -->
<!-- isosent="20050325231646" -->
<!-- name="Greg Lindahl" -->
<!-- email="lindahl_at_[hidden]" -->
<!-- subject="[O-MPI users] Re: [Beowulf] Alternative to MPI ABI" -->
<!-- id="20050325231646.GB3269_at_greglaptop.internal.keyresearch.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="424498B3.80802_at_myri.com" -->
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
<strong>From:</strong> Greg Lindahl (<em>lindahl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-03-25 18:16:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0037.php">Greg Lindahl: "Re: [O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<li><strong>Previous message:</strong> <a href="0035.php">Patrick Geoffray: "[O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<li><strong>In reply to:</strong> <a href="0035.php">Patrick Geoffray: "[O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0039.php">Patrick Geoffray: "[O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<li><strong>Reply:</strong> <a href="0039.php">Patrick Geoffray: "[O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Mar 25, 2005 at 06:03:15PM -0500, Patrick Geoffray wrote:
<br>
<p><span class="quotelev1">&gt; What Jeff thought is a nightmare, I believe, is to have to decide a 
</span><br>
<span class="quotelev1">&gt; common interface and then force the MPI implementations to adopt this 
</span><br>
<span class="quotelev1">&gt; interface internally instead of having them translating on the fly.
</span><br>
<p>Ah. But no one ever suggested that, so we're all set -- it's an
<br>
artifact of the poor communication content of PowerPoint slides that
<br>
anyone thought I had suggested altering everyone's internals.
<br>
<p><span class="quotelev2">&gt; &gt; something?  Does this somehow save a significant amount of work for
</span><br>
<span class="quotelev2">&gt; &gt; anyone?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It does not, but the pill is much easier to swallow because nobody has 
</span><br>
<span class="quotelev1">&gt; to fight to try to impose the interface they happen to use. Am I still 
</span><br>
<span class="quotelev1">&gt; drunk and missing something big ?
</span><br>
<p>If I understand it correctly, MorphMPI imposes the same interface as
<br>
an ABI -- a common mpi.h. The only thing it avoids is having a shared
<br>
library with a common name and interface; instead it will have a
<br>
separate routine per MPI implementation that dlopens all the
<br>
appropriate libs for the implementation in use, with the usual chaos
<br>
of trying to find where they are located.
<br>
<p>In any case, I think this sort of discussion is more of an
<br>
implementation detail than a fundamental thing that would obviate
<br>
having an ABI... either way you're going to want to pick the right
<br>
contents for mpi.h. Apple or Orange, it's the same committee process.
<br>
<p>-- greg
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0037.php">Greg Lindahl: "Re: [O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<li><strong>Previous message:</strong> <a href="0035.php">Patrick Geoffray: "[O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<li><strong>In reply to:</strong> <a href="0035.php">Patrick Geoffray: "[O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0039.php">Patrick Geoffray: "[O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<li><strong>Reply:</strong> <a href="0039.php">Patrick Geoffray: "[O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
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
