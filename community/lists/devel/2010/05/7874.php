<?
$subject_val = "Re: [OMPI devel] System V Shared Memory for Open MPI:Request	for	Community Input and Testing";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  3 11:18:16 2010" -->
<!-- isoreceived="20100503151816" -->
<!-- sent="Mon, 3 May 2010 09:18:12 -0600" -->
<!-- isosent="20100503151812" -->
<!-- name="Samuel K. Gutierrez" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] System V Shared Memory for Open MPI:Request	for	Community Input and Testing" -->
<!-- id="2087E6BC-C0FB-4609-A0A4-854152901364_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="BA2BA7E1-AFF0-4C39-B110-9DD4051AF7D4_at_cisco.com" -->
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
<strong>From:</strong> Samuel K. Gutierrez (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-03 11:18:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7875.php">N.M. Maclaren: "Re: [OMPI devel] System V Shared Memory for Open	MPI:Request	for	Community Input and Testing"</a>
<li><strong>Previous message:</strong> <a href="7873.php">Jeff Squyres: "Re: [OMPI devel] System V Shared Memory for Open MPI:Request	for	Community Input and Testing"</a>
<li><strong>In reply to:</strong> <a href="7873.php">Jeff Squyres: "Re: [OMPI devel] System V Shared Memory for Open MPI:Request	for	Community Input and Testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7879.php">Samuel K. Gutierrez: "Re: [OMPI devel] System V Shared Memory for Open MPI:Request	for	Community Input and Testing"</a>
<li><strong>Reply:</strong> <a href="7879.php">Samuel K. Gutierrez: "Re: [OMPI devel] System V Shared Memory for Open MPI:Request	for	Community Input and Testing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>Sounds like a plan :-).
<br>
<p>Thanks!
<br>
<p><pre>
--
Samuel K. Gutierrez
Los Alamos National Laboratory
On May 3, 2010, at 9:12 AM, Jeff Squyres wrote:
&gt; It might well be that you need a configure test to determine whether  
&gt; this behavior occurs or not.  Heck, it may even need to be a run- 
&gt; time test!  Hrm.
&gt;
&gt; Write a small C program that does something like the following (this  
&gt; is off the top of my head):
&gt;
&gt; fork a child
&gt; child goes to sleep immediately
&gt; sysv alloc a segment
&gt; attach to it
&gt; ipc rm it
&gt; parent wakes up child
&gt; child tries to attach to segment
&gt;
&gt; If that succeeds, then all is good.  If not, then don't use this  
&gt; stuff.
&gt;
&gt;
&gt; On May 3, 2010, at 10:55 AM, Samuel K. Gutierrez wrote:
&gt;
&gt;&gt; Hi all,
&gt;&gt;
&gt;&gt; Does anyone know of a relatively portable solution for querying a
&gt;&gt; given system for the shmctl behavior that I am relying on, or is this
&gt;&gt; going to be a nightmare?  Because, if I am reading this thread
&gt;&gt; correctly, the presence of shmget and Linux is not sufficient for
&gt;&gt; determining an adequate level of sysv support.
&gt;&gt;
&gt;&gt; Thanks!
&gt;&gt;
&gt;&gt; --
&gt;&gt; Samuel K. Gutierrez
&gt;&gt; Los Alamos National Laboratory
&gt;&gt;
&gt;&gt; On May 2, 2010, at 7:48 AM, N.M. Maclaren wrote:
&gt;&gt;
&gt;&gt;&gt; On May 2 2010, Ashley Pittman wrote:
&gt;&gt;&gt;&gt; On 2 May 2010, at 04:03, Samuel K. Gutierrez wrote:
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; As to performance there should be no difference in use between sys-
&gt;&gt;&gt;&gt; V shared memory and file-backed shared memory, the instructions
&gt;&gt;&gt;&gt; issued and the MMU flags for the page should both be the same so
&gt;&gt;&gt;&gt; the performance should be identical.
&gt;&gt;&gt;
&gt;&gt;&gt; Not necessarily, and possibly not so even for far-future Linuces.
&gt;&gt;&gt; On at least one system I used, the poxious kernel wrote the complete
&gt;&gt;&gt; file to disk before returning - all right, it did that for System V
&gt;&gt;&gt; shared memory, too, just to a 'hidden' file!  But, if I recall, on
&gt;&gt;&gt; another it did that only for file-backed shared memory - however,  
&gt;&gt;&gt; it's
&gt;&gt;&gt; a decade ago now and I may be misremembering.
&gt;&gt;&gt;
&gt;&gt;&gt; Of course, that's a serious issue mainly for large segments.  I was
&gt;&gt;&gt; using multi-GB ones.  I don't know how big the ones you need are.
&gt;&gt;&gt;
&gt;&gt;&gt;&gt; The one area you do need to keep an eye on for performance is on
&gt;&gt;&gt;&gt; numa machines where it's important which process on a node touches
&gt;&gt;&gt;&gt; each page first, you can end up using different areas (pages, not
&gt;&gt;&gt;&gt; regions) for communicating in different directions between the same
&gt;&gt;&gt;&gt; pair of processes. I don't believe this is any different to mmap
&gt;&gt;&gt;&gt; backed shared memory though.
&gt;&gt;&gt;
&gt;&gt;&gt; On some systems it may be, but in bizarre, inconsistent,  
&gt;&gt;&gt; undocumented
&gt;&gt;&gt; and unpredictable ways :-(  Also, there are usually several system
&gt;&gt;&gt; (and
&gt;&gt;&gt; sometimes user) configuration options that change the behaviour, so
&gt;&gt;&gt; you
&gt;&gt;&gt; have to allow for that.  My experience of trying to use those is  
&gt;&gt;&gt; that
&gt;&gt;&gt; different uses have incompatible requirements, and most of the
&gt;&gt;&gt; critical
&gt;&gt;&gt; configuration parameters apply to ALL uses!
&gt;&gt;&gt;
&gt;&gt;&gt; In my view, the configuration variability is the number one  
&gt;&gt;&gt; nightmare
&gt;&gt;&gt; for trying to write portable code that uses any form of shared  
&gt;&gt;&gt; memory.
&gt;&gt;&gt; ARMCI seem to agree.
&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; Because of this, sysv support may be limited to Linux systems -
&gt;&gt;&gt;&gt;&gt; that is,
&gt;&gt;&gt;&gt;&gt; until we can get a better sense of which systems provide the  
&gt;&gt;&gt;&gt;&gt; shmctl
&gt;&gt;&gt;&gt;&gt; IPC_RMID behavior that I am relying on.
&gt;&gt;&gt;
&gt;&gt;&gt; And, I suggest, whether they have an evil gotcha on one of the areas
&gt;&gt;&gt; that
&gt;&gt;&gt; Ashley Pittman noted.
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; Regards,
&gt;&gt;&gt; Nick Maclaren.
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt; devel mailing list
&gt;&gt;&gt; devel_at_[hidden]
&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;&gt;
&gt;&gt; _______________________________________________
&gt;&gt; devel mailing list
&gt;&gt; devel_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;&gt;
&gt;
&gt;
&gt; -- 
&gt; Jeff Squyres
&gt; jsquyres_at_[hidden]
&gt; For corporate legal information go to:
&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<li><strong>Next message:</strong> <a href="7875.php">N.M. Maclaren: "Re: [OMPI devel] System V Shared Memory for Open	MPI:Request	for	Community Input and Testing"</a>
<li><strong>Previous message:</strong> <a href="7873.php">Jeff Squyres: "Re: [OMPI devel] System V Shared Memory for Open MPI:Request	for	Community Input and Testing"</a>
<li><strong>In reply to:</strong> <a href="7873.php">Jeff Squyres: "Re: [OMPI devel] System V Shared Memory for Open MPI:Request	for	Community Input and Testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7879.php">Samuel K. Gutierrez: "Re: [OMPI devel] System V Shared Memory for Open MPI:Request	for	Community Input and Testing"</a>
<li><strong>Reply:</strong> <a href="7879.php">Samuel K. Gutierrez: "Re: [OMPI devel] System V Shared Memory for Open MPI:Request	for	Community Input and Testing"</a>
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
