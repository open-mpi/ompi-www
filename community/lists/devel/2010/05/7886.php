<?
$subject_val = "Re: [OMPI devel] System V Shared Memory for Open MPI:Request	forCommunity Input and Testing";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  4 10:27:10 2010" -->
<!-- isoreceived="20100504142710" -->
<!-- sent="Tue, 4 May 2010 09:27:00 -0500" -->
<!-- isosent="20100504142700" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] System V Shared Memory for Open MPI:Request	forCommunity Input and Testing" -->
<!-- id="2B66593B-FACA-4AD5-B6A7-DE55BFFA1D57_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="Prayer.1.3.2.1005041514560.30322_at_hermes-2.csi.cam.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI devel] System V Shared Memory for Open MPI:Request	forCommunity Input and Testing<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-04 10:27:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7887.php">Ashley Pittman: "Re: [OMPI devel] System V Shared Memory for Open MPI:Request	forCommunity Input and Testing"</a>
<li><strong>Previous message:</strong> <a href="7885.php">N.M. Maclaren: "Re: [OMPI devel] System V Shared Memory for Open MPI:Request	for Community Input and Testing"</a>
<li><strong>In reply to:</strong> <a href="7885.php">N.M. Maclaren: "Re: [OMPI devel] System V Shared Memory for Open MPI:Request	for Community Input and Testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7887.php">Ashley Pittman: "Re: [OMPI devel] System V Shared Memory for Open MPI:Request	forCommunity Input and Testing"</a>
<li><strong>Reply:</strong> <a href="7887.php">Ashley Pittman: "Re: [OMPI devel] System V Shared Memory for Open MPI:Request	forCommunity Input and Testing"</a>
<li><strong>Reply:</strong> <a href="7890.php">N.M. Maclaren: "Re: [OMPI devel] System V Shared Memory for Open	MPI:Request	forCommunity Input and Testing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If there's a sleep(1) in the run-time test, that would be an annoying source of delay in the startup of a job. This is not a deal-breaker, but it would be nice(r) if there was a &quot;fast&quot; run-time check that could be checked during the sysv selection logic (i.e., sysv could disqualify itself if the feature is not available at runtime).   Keep in mind that the run-time check will be run in parallel across the whole job, so it's (more or less) a constant amount of time that is added to job startup.
<br>
<p>One thing to be careful with a run-time check is that you might not want *all* processes on a box to try to alloc a sysv segment, fork a child, try to connect, ...etc.  With large count boxen, you might run out of sysv shmem segments if all procs try the test and/or run into OS serialization issues (someone here at the Forum cited a 96 core box).  So you might want to have local rank 0 (or the orted? ...but that wouldn't work for srun / direct launch, etc.) do a test and communicate the results to the rest of the local procs -- maybe in the modex?
<br>
<p><p><p>On May 4, 2010, at 9:14 AM, N.M. Maclaren wrote:
<br>
<p><span class="quotelev1">&gt; On May 4 2010, Terry Dontje wrote:
</span><br>
<span class="quotelev2">&gt; &gt;Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Is a configure-time test good enough?  For example, are all Linuxes
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; the same in this regard.  That is if you built OMPI on RH and it
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; configured in the new SysV SM will those bits actually run on other
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Linux systems correctly?  I think Jeff had hinted to this similarly
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; when suggesting this may need to be a runtime test.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I don't think we have ever enforced that requirement, nor am I sure
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the current code would meet it. We have a number of components that
</span><br>
<span class="quotelev3">&gt; &gt;&gt; test for ability to build, but don't check again at run-time.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Generally, the project has followed the philosophy of &quot;build on the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; system you intend to run on&quot;.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;There is at least one binary distribution that does build on one linux
</span><br>
<span class="quotelev2">&gt; &gt;and allows to be installed on several others.  That is the reason I
</span><br>
<span class="quotelev2">&gt; &gt;bring up the above.   The community can make a stance that that one
</span><br>
<span class="quotelev2">&gt; &gt;distribution does not matter for this case or needs to handle it on its
</span><br>
<span class="quotelev2">&gt; &gt;own.  In the grand scheme of things it might not matter but I wanted to
</span><br>
<span class="quotelev2">&gt; &gt;at least stand up and be heard.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There is a gradation involved.  Building on one distribution and using
</span><br>
<span class="quotelev1">&gt; on another is one thing.  But the same distribution can use differently
</span><br>
<span class="quotelev1">&gt; built kernels, and the same system can be reconfigured (including both
</span><br>
<span class="quotelev1">&gt; package updating and parameter changing).  It is highly undesirable to
</span><br>
<span class="quotelev1">&gt; use volatile parameters in non-volatile context.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A lot of applications need rebuilding when the administrator updates
</span><br>
<span class="quotelev1">&gt; packages or makes configuration changes; that's not good and should be
</span><br>
<span class="quotelev1">&gt; avoided if at all possible.  Given the way that systems are currently
</span><br>
<span class="quotelev1">&gt; configured, and the design of the autoconfigure mechanism, it's probably
</span><br>
<span class="quotelev1">&gt; not wholly avoidable.  But it's still a very nasty gotcha.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Nick Maclaren.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="7887.php">Ashley Pittman: "Re: [OMPI devel] System V Shared Memory for Open MPI:Request	forCommunity Input and Testing"</a>
<li><strong>Previous message:</strong> <a href="7885.php">N.M. Maclaren: "Re: [OMPI devel] System V Shared Memory for Open MPI:Request	for Community Input and Testing"</a>
<li><strong>In reply to:</strong> <a href="7885.php">N.M. Maclaren: "Re: [OMPI devel] System V Shared Memory for Open MPI:Request	for Community Input and Testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7887.php">Ashley Pittman: "Re: [OMPI devel] System V Shared Memory for Open MPI:Request	forCommunity Input and Testing"</a>
<li><strong>Reply:</strong> <a href="7887.php">Ashley Pittman: "Re: [OMPI devel] System V Shared Memory for Open MPI:Request	forCommunity Input and Testing"</a>
<li><strong>Reply:</strong> <a href="7890.php">N.M. Maclaren: "Re: [OMPI devel] System V Shared Memory for Open	MPI:Request	forCommunity Input and Testing"</a>
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
