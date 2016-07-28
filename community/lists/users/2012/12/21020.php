<?
$subject_val = "Re: [OMPI users] Possible memory error";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 20 08:02:24 2012" -->
<!-- isoreceived="20121220130224" -->
<!-- sent="Thu, 20 Dec 2012 08:01:55 -0500" -->
<!-- isosent="20121220130155" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Possible memory error" -->
<!-- id="CBBD7F8A-ED7F-4ACE-9919-D412E785D216_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5B7E19405479894CB319783A4F404E4802B5292742_at_RNUMSEM722.nala.roche.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Possible memory error<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-20 08:01:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21021.php">Jeff Squyres: "Re: [OMPI users] Windows Open MPI question"</a>
<li><strong>Previous message:</strong> <a href="21019.php">Ralph Castain: "Re: [OMPI users] 1.6.2 affinity failures"</a>
<li><strong>In reply to:</strong> <a href="21013.php">Handerson, Steven: "Re: [OMPI users] Possible memory error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 19, 2012, at 11:26 AM, Handerson, Steven wrote:
<br>
<p><span class="quotelev1">&gt; I fixed the problem we were experiencing by adding a barrier.
</span><br>
<span class="quotelev1">&gt; The bug occurred between a piece of code that uses (many, over a loop) SEND (from the leader)
</span><br>
<span class="quotelev1">&gt; and RECV (in the worker processes) to ship data to the 
</span><br>
<span class="quotelev1">&gt; processing nodes from the head / leader, and I think what might have been happening is
</span><br>
<span class="quotelev1">&gt; that this communication was mixed up with the following allreduce, when there's no barrier.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The bug shows up in Valgrind and dmalloc as a read from freed memory.
</span><br>
<p>Hmm.  This sounds sketchy (meaning: it *sounds* like this is a valid communication pattern, but it's impossible to tell without seeing the code).
<br>
<p><span class="quotelev1">&gt; I might spend some time trying to make a small piece of code that reproduces this,
</span><br>
<p>If you have the time, that would be great.
<br>
<p><span class="quotelev1">&gt; but maybe this gives you some idea of what might be the issue,
</span><br>
<span class="quotelev1">&gt; if it's something that should be fixed.
</span><br>
<span class="quotelev1">&gt; Some more info: it happens even as far back as openMPI 1.3.4, and even in the newest 1.6.3.
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21021.php">Jeff Squyres: "Re: [OMPI users] Windows Open MPI question"</a>
<li><strong>Previous message:</strong> <a href="21019.php">Ralph Castain: "Re: [OMPI users] 1.6.2 affinity failures"</a>
<li><strong>In reply to:</strong> <a href="21013.php">Handerson, Steven: "Re: [OMPI users] Possible memory error"</a>
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
