<?
$subject_val = "Re: [OMPI devel] System V Shared Memory for Open MPI: Request	for	Community Input and Testing";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  3 10:55:06 2010" -->
<!-- isoreceived="20100503145506" -->
<!-- sent="Mon, 3 May 2010 08:55:01 -0600" -->
<!-- isosent="20100503145501" -->
<!-- name="Samuel K. Gutierrez" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] System V Shared Memory for Open MPI: Request	for	Community Input and Testing" -->
<!-- id="5E97F811-E190-432A-A871-EBCD1CF21C85_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Prayer.1.3.2.1005021448260.9709_at_hermes-2.csi.cam.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI devel] System V Shared Memory for Open MPI: Request	for	Community Input and Testing<br>
<strong>From:</strong> Samuel K. Gutierrez (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-03 10:55:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7872.php">Jeff Squyres: "Re: [OMPI devel] Unchecked malloc()'s in OMPI 1.4.x"</a>
<li><strong>Previous message:</strong> <a href="7870.php">Jeff Squyres: "Re: [OMPI devel] bug with /bin/sh and /bin/ksh"</a>
<li><strong>In reply to:</strong> <a href="7866.php">N.M. Maclaren: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request	for	Community Input and Testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7873.php">Jeff Squyres: "Re: [OMPI devel] System V Shared Memory for Open MPI:Request	for	Community Input and Testing"</a>
<li><strong>Reply:</strong> <a href="7873.php">Jeff Squyres: "Re: [OMPI devel] System V Shared Memory for Open MPI:Request	for	Community Input and Testing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>Does anyone know of a relatively portable solution for querying a  
<br>
given system for the shmctl behavior that I am relying on, or is this  
<br>
going to be a nightmare?  Because, if I am reading this thread  
<br>
correctly, the presence of shmget and Linux is not sufficient for  
<br>
determining an adequate level of sysv support.
<br>
<p>Thanks!
<br>
<p><pre>
--
Samuel K. Gutierrez
Los Alamos National Laboratory
On May 2, 2010, at 7:48 AM, N.M. Maclaren wrote:
&gt; On May 2 2010, Ashley Pittman wrote:
&gt;&gt; On 2 May 2010, at 04:03, Samuel K. Gutierrez wrote:
&gt;&gt;
&gt;&gt; As to performance there should be no difference in use between sys- 
&gt;&gt; V shared memory and file-backed shared memory, the instructions  
&gt;&gt; issued and the MMU flags for the page should both be the same so  
&gt;&gt; the performance should be identical.
&gt;
&gt; Not necessarily, and possibly not so even for far-future Linuces.
&gt; On at least one system I used, the poxious kernel wrote the complete
&gt; file to disk before returning - all right, it did that for System V
&gt; shared memory, too, just to a 'hidden' file!  But, if I recall, on
&gt; another it did that only for file-backed shared memory - however, it's
&gt; a decade ago now and I may be misremembering.
&gt;
&gt; Of course, that's a serious issue mainly for large segments.  I was
&gt; using multi-GB ones.  I don't know how big the ones you need are.
&gt;
&gt;&gt; The one area you do need to keep an eye on for performance is on  
&gt;&gt; numa machines where it's important which process on a node touches  
&gt;&gt; each page first, you can end up using different areas (pages, not  
&gt;&gt; regions) for communicating in different directions between the same  
&gt;&gt; pair of processes. I don't believe this is any different to mmap  
&gt;&gt; backed shared memory though.
&gt;
&gt; On some systems it may be, but in bizarre, inconsistent, undocumented
&gt; and unpredictable ways :-(  Also, there are usually several system  
&gt; (and
&gt; sometimes user) configuration options that change the behaviour, so  
&gt; you
&gt; have to allow for that.  My experience of trying to use those is that
&gt; different uses have incompatible requirements, and most of the  
&gt; critical
&gt; configuration parameters apply to ALL uses!
&gt;
&gt; In my view, the configuration variability is the number one nightmare
&gt; for trying to write portable code that uses any form of shared memory.
&gt; ARMCI seem to agree.
&gt;
&gt;&gt;&gt; Because of this, sysv support may be limited to Linux systems -  
&gt;&gt;&gt; that is,
&gt;&gt;&gt; until we can get a better sense of which systems provide the shmctl
&gt;&gt;&gt; IPC_RMID behavior that I am relying on.
&gt;
&gt; And, I suggest, whether they have an evil gotcha on one of the areas  
&gt; that
&gt; Ashley Pittman noted.
&gt;
&gt;
&gt; Regards,
&gt; Nick Maclaren.
&gt;
&gt;
&gt; _______________________________________________
&gt; devel mailing list
&gt; devel_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7872.php">Jeff Squyres: "Re: [OMPI devel] Unchecked malloc()'s in OMPI 1.4.x"</a>
<li><strong>Previous message:</strong> <a href="7870.php">Jeff Squyres: "Re: [OMPI devel] bug with /bin/sh and /bin/ksh"</a>
<li><strong>In reply to:</strong> <a href="7866.php">N.M. Maclaren: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request	for	Community Input and Testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7873.php">Jeff Squyres: "Re: [OMPI devel] System V Shared Memory for Open MPI:Request	for	Community Input and Testing"</a>
<li><strong>Reply:</strong> <a href="7873.php">Jeff Squyres: "Re: [OMPI devel] System V Shared Memory for Open MPI:Request	for	Community Input and Testing"</a>
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
