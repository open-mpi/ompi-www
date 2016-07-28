<?
$subject_val = "Re: [OMPI devel] System V Shared Memory for Open MPI:Request	for	Community Input and Testing";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  3 11:12:36 2010" -->
<!-- isoreceived="20100503151236" -->
<!-- sent="Mon, 3 May 2010 11:12:30 -0400" -->
<!-- isosent="20100503151230" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] System V Shared Memory for Open MPI:Request	for	Community Input and Testing" -->
<!-- id="BA2BA7E1-AFF0-4C39-B110-9DD4051AF7D4_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5E97F811-E190-432A-A871-EBCD1CF21C85_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] System V Shared Memory for Open MPI:Request	for	Community Input and Testing<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-03 11:12:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7874.php">Samuel K. Gutierrez: "Re: [OMPI devel] System V Shared Memory for Open MPI:Request	for	Community Input and Testing"</a>
<li><strong>Previous message:</strong> <a href="7872.php">Jeff Squyres: "Re: [OMPI devel] Unchecked malloc()'s in OMPI 1.4.x"</a>
<li><strong>In reply to:</strong> <a href="7871.php">Samuel K. Gutierrez: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request	for	Community Input and Testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7874.php">Samuel K. Gutierrez: "Re: [OMPI devel] System V Shared Memory for Open MPI:Request	for	Community Input and Testing"</a>
<li><strong>Reply:</strong> <a href="7874.php">Samuel K. Gutierrez: "Re: [OMPI devel] System V Shared Memory for Open MPI:Request	for	Community Input and Testing"</a>
<li><strong>Reply:</strong> <a href="7875.php">N.M. Maclaren: "Re: [OMPI devel] System V Shared Memory for Open	MPI:Request	for	Community Input and Testing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It might well be that you need a configure test to determine whether this behavior occurs or not.  Heck, it may even need to be a run-time test!  Hrm.
<br>
<p>Write a small C program that does something like the following (this is off the top of my head):
<br>
<p>fork a child
<br>
child goes to sleep immediately
<br>
sysv alloc a segment
<br>
attach to it
<br>
ipc rm it
<br>
parent wakes up child
<br>
child tries to attach to segment
<br>
<p>If that succeeds, then all is good.  If not, then don't use this stuff.  
<br>
<p><p>On May 3, 2010, at 10:55 AM, Samuel K. Gutierrez wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does anyone know of a relatively portable solution for querying a 
</span><br>
<span class="quotelev1">&gt; given system for the shmctl behavior that I am relying on, or is this 
</span><br>
<span class="quotelev1">&gt; going to be a nightmare?  Because, if I am reading this thread 
</span><br>
<span class="quotelev1">&gt; correctly, the presence of shmget and Linux is not sufficient for 
</span><br>
<span class="quotelev1">&gt; determining an adequate level of sysv support.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Samuel K. Gutierrez
</span><br>
<span class="quotelev1">&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 2, 2010, at 7:48 AM, N.M. Maclaren wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On May 2 2010, Ashley Pittman wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On 2 May 2010, at 04:03, Samuel K. Gutierrez wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; As to performance there should be no difference in use between sys-
</span><br>
<span class="quotelev3">&gt; &gt;&gt; V shared memory and file-backed shared memory, the instructions 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; issued and the MMU flags for the page should both be the same so 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the performance should be identical.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Not necessarily, and possibly not so even for far-future Linuces.
</span><br>
<span class="quotelev2">&gt; &gt; On at least one system I used, the poxious kernel wrote the complete
</span><br>
<span class="quotelev2">&gt; &gt; file to disk before returning - all right, it did that for System V
</span><br>
<span class="quotelev2">&gt; &gt; shared memory, too, just to a 'hidden' file!  But, if I recall, on
</span><br>
<span class="quotelev2">&gt; &gt; another it did that only for file-backed shared memory - however, it's
</span><br>
<span class="quotelev2">&gt; &gt; a decade ago now and I may be misremembering.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Of course, that's a serious issue mainly for large segments.  I was
</span><br>
<span class="quotelev2">&gt; &gt; using multi-GB ones.  I don't know how big the ones you need are.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The one area you do need to keep an eye on for performance is on 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; numa machines where it's important which process on a node touches 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; each page first, you can end up using different areas (pages, not 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; regions) for communicating in different directions between the same 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; pair of processes. I don't believe this is any different to mmap 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; backed shared memory though.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On some systems it may be, but in bizarre, inconsistent, undocumented
</span><br>
<span class="quotelev2">&gt; &gt; and unpredictable ways :-(  Also, there are usually several system 
</span><br>
<span class="quotelev2">&gt; &gt; (and
</span><br>
<span class="quotelev2">&gt; &gt; sometimes user) configuration options that change the behaviour, so 
</span><br>
<span class="quotelev2">&gt; &gt; you
</span><br>
<span class="quotelev2">&gt; &gt; have to allow for that.  My experience of trying to use those is that
</span><br>
<span class="quotelev2">&gt; &gt; different uses have incompatible requirements, and most of the 
</span><br>
<span class="quotelev2">&gt; &gt; critical
</span><br>
<span class="quotelev2">&gt; &gt; configuration parameters apply to ALL uses!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; In my view, the configuration variability is the number one nightmare
</span><br>
<span class="quotelev2">&gt; &gt; for trying to write portable code that uses any form of shared memory.
</span><br>
<span class="quotelev2">&gt; &gt; ARMCI seem to agree.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Because of this, sysv support may be limited to Linux systems - 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; that is,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; until we can get a better sense of which systems provide the shmctl
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; IPC_RMID behavior that I am relying on.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; And, I suggest, whether they have an evil gotcha on one of the areas 
</span><br>
<span class="quotelev2">&gt; &gt; that
</span><br>
<span class="quotelev2">&gt; &gt; Ashley Pittman noted.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt; Nick Maclaren.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
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
<li><strong>Next message:</strong> <a href="7874.php">Samuel K. Gutierrez: "Re: [OMPI devel] System V Shared Memory for Open MPI:Request	for	Community Input and Testing"</a>
<li><strong>Previous message:</strong> <a href="7872.php">Jeff Squyres: "Re: [OMPI devel] Unchecked malloc()'s in OMPI 1.4.x"</a>
<li><strong>In reply to:</strong> <a href="7871.php">Samuel K. Gutierrez: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request	for	Community Input and Testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7874.php">Samuel K. Gutierrez: "Re: [OMPI devel] System V Shared Memory for Open MPI:Request	for	Community Input and Testing"</a>
<li><strong>Reply:</strong> <a href="7874.php">Samuel K. Gutierrez: "Re: [OMPI devel] System V Shared Memory for Open MPI:Request	for	Community Input and Testing"</a>
<li><strong>Reply:</strong> <a href="7875.php">N.M. Maclaren: "Re: [OMPI devel] System V Shared Memory for Open	MPI:Request	for	Community Input and Testing"</a>
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
