<?
$subject_val = "Re: [OMPI devel] System V Shared Memory for Open MPI:Request	for Community Input and Testing";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  4 05:46:16 2010" -->
<!-- isoreceived="20100504094616" -->
<!-- sent="Tue, 04 May 2010 05:45:25 -0400" -->
<!-- isosent="20100504094525" -->
<!-- name="Terry Dontje" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] System V Shared Memory for Open MPI:Request	for Community Input and Testing" -->
<!-- id="4BDFECB5.5050000_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="357BA59E-BC7C-4D39-9E88-8A8447D54BEE_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] System V Shared Memory for Open MPI:Request	for Community Input and Testing<br>
<strong>From:</strong> Terry Dontje (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-04 05:45:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7881.php">N.M. Maclaren: "Re: [OMPI devel] System V Shared Memory for Open MPI:Request	for Community Input and Testing"</a>
<li><strong>Previous message:</strong> <a href="7879.php">Samuel K. Gutierrez: "Re: [OMPI devel] System V Shared Memory for Open MPI:Request	for	Community Input and Testing"</a>
<li><strong>In reply to:</strong> <a href="7879.php">Samuel K. Gutierrez: "Re: [OMPI devel] System V Shared Memory for Open MPI:Request	for	Community Input and Testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7881.php">N.M. Maclaren: "Re: [OMPI devel] System V Shared Memory for Open MPI:Request	for Community Input and Testing"</a>
<li><strong>Reply:</strong> <a href="7881.php">N.M. Maclaren: "Re: [OMPI devel] System V Shared Memory for Open MPI:Request	for Community Input and Testing"</a>
<li><strong>Reply:</strong> <a href="7882.php">Ralph Castain: "Re: [OMPI devel] System V Shared Memory for Open MPI:Request	for Community Input and Testing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is a configure-time test good enough?  For example, are all Linuxes the 
<br>
same in this regard.  That is if you built OMPI on RH and it configured 
<br>
in the new SysV SM will those bits actually run on other Linux systems 
<br>
correctly?  I think Jeff had hinted to this similarly when suggesting 
<br>
this may need to be a runtime test. 
<br>
<p>--td
<br>
<p>Samuel K. Gutierrez wrote:
<br>
<span class="quotelev1">&gt; Hi All,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; New configure-time test added - thanks for the suggestion, Jeff.  
</span><br>
<span class="quotelev1">&gt; Update and give it a whirl.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ethan - could you please try again?  This time, I'm hoping sysv 
</span><br>
<span class="quotelev1">&gt; support will be disabled ;-).
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
<span class="quotelev1">&gt; On May 3, 2010, at 9:18 AM, Samuel K. Gutierrez wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Jeff,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sounds like a plan :-).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Samuel K. Gutierrez
</span><br>
<span class="quotelev2">&gt;&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On May 3, 2010, at 9:12 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It might well be that you need a configure test to determine whether 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this behavior occurs or not.  Heck, it may even need to be a 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; run-time test!  Hrm.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Write a small C program that does something like the following (this 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is off the top of my head):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fork a child
</span><br>
<span class="quotelev3">&gt;&gt;&gt; child goes to sleep immediately
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sysv alloc a segment
</span><br>
<span class="quotelev3">&gt;&gt;&gt; attach to it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ipc rm it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parent wakes up child
</span><br>
<span class="quotelev3">&gt;&gt;&gt; child tries to attach to segment
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If that succeeds, then all is good.  If not, then don't use this stuff.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On May 3, 2010, at 10:55 AM, Samuel K. Gutierrez wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi all,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Does anyone know of a relatively portable solution for querying a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; given system for the shmctl behavior that I am relying on, or is this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; going to be a nightmare?  Because, if I am reading this thread
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; correctly, the presence of shmget and Linux is not sufficient for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; determining an adequate level of sysv support.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Samuel K. Gutierrez
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On May 2, 2010, at 7:48 AM, N.M. Maclaren wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On May 2 2010, Ashley Pittman wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On 2 May 2010, at 04:03, Samuel K. Gutierrez wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; As to performance there should be no difference in use between sys-
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; V shared memory and file-backed shared memory, the instructions
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; issued and the MMU flags for the page should both be the same so
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the performance should be identical.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Not necessarily, and possibly not so even for far-future Linuces.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On at least one system I used, the poxious kernel wrote the complete
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; file to disk before returning - all right, it did that for System V
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; shared memory, too, just to a 'hidden' file!  But, if I recall, on
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; another it did that only for file-backed shared memory - however, 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; it's
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; a decade ago now and I may be misremembering.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Of course, that's a serious issue mainly for large segments.  I was
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; using multi-GB ones.  I don't know how big the ones you need are.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The one area you do need to keep an eye on for performance is on
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; numa machines where it's important which process on a node touches
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; each page first, you can end up using different areas (pages, not
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; regions) for communicating in different directions between the same
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; pair of processes. I don't believe this is any different to mmap
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; backed shared memory though.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On some systems it may be, but in bizarre, inconsistent, undocumented
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and unpredictable ways :-(  Also, there are usually several system
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; sometimes user) configuration options that change the behaviour, so
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; you
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; have to allow for that.  My experience of trying to use those is that
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; different uses have incompatible requirements, and most of the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; critical
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; configuration parameters apply to ALL uses!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; In my view, the configuration variability is the number one nightmare
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; for trying to write portable code that uses any form of shared 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; memory.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ARMCI seem to agree.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Because of this, sysv support may be limited to Linux systems -
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; that is,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; until we can get a better sense of which systems provide the shmctl
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; IPC_RMID behavior that I am relying on.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; And, I suggest, whether they have an evil gotcha on one of the areas
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Ashley Pittman noted.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Nick Maclaren.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<p><p><pre>
-- 
Oracle
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.650.633.7054
Oracle * - Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7880/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/devel/att-7880/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7881.php">N.M. Maclaren: "Re: [OMPI devel] System V Shared Memory for Open MPI:Request	for Community Input and Testing"</a>
<li><strong>Previous message:</strong> <a href="7879.php">Samuel K. Gutierrez: "Re: [OMPI devel] System V Shared Memory for Open MPI:Request	for	Community Input and Testing"</a>
<li><strong>In reply to:</strong> <a href="7879.php">Samuel K. Gutierrez: "Re: [OMPI devel] System V Shared Memory for Open MPI:Request	for	Community Input and Testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7881.php">N.M. Maclaren: "Re: [OMPI devel] System V Shared Memory for Open MPI:Request	for Community Input and Testing"</a>
<li><strong>Reply:</strong> <a href="7881.php">N.M. Maclaren: "Re: [OMPI devel] System V Shared Memory for Open MPI:Request	for Community Input and Testing"</a>
<li><strong>Reply:</strong> <a href="7882.php">Ralph Castain: "Re: [OMPI devel] System V Shared Memory for Open MPI:Request	for Community Input and Testing"</a>
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
