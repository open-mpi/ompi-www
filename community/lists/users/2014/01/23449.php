<?
$subject_val = "Re: [OMPI users] simple	test	problem	hangs	on	mpi_finalize	and	consumes all	system resources";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 24 13:04:14 2014" -->
<!-- isoreceived="20140124180414" -->
<!-- sent="Fri, 24 Jan 2014 18:04:12 +0000" -->
<!-- isosent="20140124180412" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] simple	test	problem	hangs	on	mpi_finalize	and	consumes all	system resources" -->
<!-- id="3A3750A4-EDFE-4FF4-B1A2-9392CF8DDA42_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C86C7F6037A63C44BCCD0D77E9D59BFE13FBF4CDE6_at_SWEC9985.w-intra.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] simple	test	problem	hangs	on	mpi_finalize	and	consumes all	system resources<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-24 13:04:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23450.php">Kenneth Adam Miller: "Re: [OMPI users] Specific use case - very very new to MPI"</a>
<li><strong>Previous message:</strong> <a href="23448.php">Ralph Castain: "Re: [OMPI users] Connection to lifeline lost"</a>
<li><strong>In reply to:</strong> <a href="23447.php">Fischer, Greg A.: "Re: [OMPI users] simple	test	problem	hangs	on	mpi_finalize	and	consumes all system resources"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23451.php">Gus Correa: "Re: [OMPI users] simple	test	problem	hangs	on	mpi_finalize	and	consumes all system resources"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 24, 2014, at 12:50 PM, &quot;Fischer, Greg A.&quot; &lt;fischega_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Yep. That was the problem. It works beautifully now.
</span><br>
<p>Great!
<br>
<p><span class="quotelev1">&gt; Thanks for prodding me to take another look.
</span><br>
<p>I'd be embarrassed to admit how many times I make the same mistake.  And I've been working on Open MPI for over 10 years.  :-)
<br>
<p><span class="quotelev1">&gt; With regards to openmpi-1.6.5, the system that I'm compiling and running on, SLES10, contains some pretty dated software (e.g. Linux 2.6.x, python 2.4, gcc 4.1.2). Is it possible there's simply an incompatibility lurking in there somewhere that would trip openmpi-1.6.5 but not openmpi-1.4.3?
</span><br>
<p>Possibly, but I'd be a bit surprised if that were the case.
<br>
<p>So are we back to the state of: stuck in MPI_Finalize in 1.6.x for hello_c.c?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23450.php">Kenneth Adam Miller: "Re: [OMPI users] Specific use case - very very new to MPI"</a>
<li><strong>Previous message:</strong> <a href="23448.php">Ralph Castain: "Re: [OMPI users] Connection to lifeline lost"</a>
<li><strong>In reply to:</strong> <a href="23447.php">Fischer, Greg A.: "Re: [OMPI users] simple	test	problem	hangs	on	mpi_finalize	and	consumes all system resources"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23451.php">Gus Correa: "Re: [OMPI users] simple	test	problem	hangs	on	mpi_finalize	and	consumes all system resources"</a>
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
