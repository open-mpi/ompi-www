<?
$subject_val = "Re: [OMPI users] Occasional mpirun hang on completion";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 25 14:57:08 2008" -->
<!-- isoreceived="20080125195708" -->
<!-- sent="Fri, 25 Jan 2008 14:56:43 -0500" -->
<!-- isosent="20080125195643" -->
<!-- name="Barry Rountree" -->
<!-- email="rountree_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Occasional mpirun hang on completion" -->
<!-- id="20080125195643.GC19964_at_eponymous" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20080125030951.GA19638_at_eponymous" -->
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
<strong>Subject:</strong> Re: [OMPI users] Occasional mpirun hang on completion<br>
<strong>From:</strong> Barry Rountree (<em>rountree_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-25 14:56:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4887.php">Daniel Pfenniger: "Re: [OMPI users] flash2.5 with openmpi"</a>
<li><strong>Previous message:</strong> <a href="4885.php">Brock Palen: "Re: [OMPI users] flash2.5 with openmpi"</a>
<li><strong>In reply to:</strong> <a href="4879.php">Barry Rountree: "Re: [OMPI users] Occasional mpirun hang on completion"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Jan 24, 2008 at 10:09:51PM -0500, Barry Rountree wrote:
<br>
<span class="quotelev1">&gt; On Thu, Jan 24, 2008 at 04:03:49PM -0500, Tim Mattox wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hello Barry,
</span><br>
<span class="quotelev2">&gt; &gt; I am guessing you are trying to use a threaded build of Open MPI...
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Unfortunately, the threading support in Open MPI 1.2.x is not only not well
</span><br>
<span class="quotelev2">&gt; &gt; tested, it has many known problems.  We do not advise use of threading in
</span><br>
<span class="quotelev2">&gt; &gt; the Open MPI 1.2.x series.  We even added a warning in version 1.2.5 if
</span><br>
<span class="quotelev2">&gt; &gt; you try to use threading... specifically we added run-time warnings during
</span><br>
<span class="quotelev2">&gt; &gt; MPI_INIT when MPI_THREAD_MULTIPLE and/or progression threads are used.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; We are targeting the 1.3 series to have threading support actually working.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Well, I'm happy the problem is obvious and the workaround is easy.  I'll
</span><br>
<span class="quotelev1">&gt; compile that version tonight and try it out when I get some time on the
</span><br>
<span class="quotelev1">&gt; cluster tomorrow.
</span><br>
<p>That fixed it.
<br>
<p>Barry
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for the help!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Barry
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4887.php">Daniel Pfenniger: "Re: [OMPI users] flash2.5 with openmpi"</a>
<li><strong>Previous message:</strong> <a href="4885.php">Brock Palen: "Re: [OMPI users] flash2.5 with openmpi"</a>
<li><strong>In reply to:</strong> <a href="4879.php">Barry Rountree: "Re: [OMPI users] Occasional mpirun hang on completion"</a>
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
