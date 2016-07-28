<?
$subject_val = "Re: [OMPI users] meaning of MPI_THREAD_*";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 14 17:52:45 2010" -->
<!-- isoreceived="20101214225245" -->
<!-- sent="Tue, 14 Dec 2010 17:52:40 -0500" -->
<!-- isosent="20101214225240" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] meaning of MPI_THREAD_*" -->
<!-- id="0EDC0C39-F0D9-4232-AB27-D174CA0088AD_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20101206092642.27229_at_web001.roc2.bluetie.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] meaning of MPI_THREAD_*<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-14 17:52:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15137.php">Gilbert Grosdidier: "[OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)"</a>
<li><strong>Previous message:</strong> <a href="15135.php">Jeff Squyres: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a	single machine?"</a>
<li><strong>In reply to:</strong> <a href="15007.php">Hicham Mouline: "Re: [OMPI users] meaning of MPI_THREAD_*"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 6, 2010, at 9:26 AM, Hicham Mouline wrote:
<br>
<p><span class="quotelev1">&gt; Thanks, it is now clarified that  a call to MPI_INIT has the same effect as a call to MPI_INIT_THREAD with
</span><br>
<span class="quotelev1">&gt; a required = MPI_THREAD_SINGLE.  Perhaps it should be added here:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/doc/v1.4/man3/MPI_Init_thread.3.php">http://www.open-mpi.org/doc/v1.4/man3/MPI_Init_thread.3.php</a>
</span><br>
<span class="quotelev1">&gt; as well.
</span><br>
<p>Done.
<br>
<p><span class="quotelev1">&gt; It is still unclear to me the difference between MPI_THREAD_SINGLE and MPI_THREAD_FUNNELED.
</span><br>
<p>In Open MPI, there's no difference.  In other MPI's there may be.  The language defining these levels in the MPI spec is intentionally squirrely so that implementations can do different things if they want/need to.
<br>
<p><span class="quotelev1">&gt; Whether a program is or no multi threaded, if using MPI only from 1 thread (the one that calls MPI_INIT) would have no bearing on the mpi implementation, or?
</span><br>
<p>In Open MPI, it's ok if you a) have a multi-threaded program that b) uses MPI_THREAD_SINGLE and c) only uses MPI from one thread.
<br>
<p>Technically, that's not what the standard says, though -- MPI_THREAD_SINGLE is supposed to be used only with single-threaded applications.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15137.php">Gilbert Grosdidier: "[OMPI users] Issue with : btl_openib.c (OMPI 1.4.3)"</a>
<li><strong>Previous message:</strong> <a href="15135.php">Jeff Squyres: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a	single machine?"</a>
<li><strong>In reply to:</strong> <a href="15007.php">Hicham Mouline: "Re: [OMPI users] meaning of MPI_THREAD_*"</a>
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
