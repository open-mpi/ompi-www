<?
$subject_val = "Re: [OMPI devel] Threading";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 12 12:30:32 2010" -->
<!-- isoreceived="20101012163032" -->
<!-- sent="Tue, 12 Oct 2010 10:30:19 -0600" -->
<!-- isosent="20101012163019" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Threading" -->
<!-- id="770A06F4-69A9-436D-8F97-964F444539AF_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="004a01cb6a26$73da77f0$5b8f67d0$_at_lloyd@wattsys.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Threading<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-12 12:30:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8605.php">Jeff Squyres: "Re: [OMPI devel] v1.5.1: one idea"</a>
<li><strong>Previous message:</strong> <a href="8603.php">Kenneth Lloyd: "Re: [OMPI devel] Threading"</a>
<li><strong>In reply to:</strong> <a href="8603.php">Kenneth Lloyd: "Re: [OMPI devel] Threading"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks - that helps clarify a great deal!
<br>
<p>I'll keep you posted, pending any further input on the initial question.
<br>
<p>FWIW: I'm also using OMPI/ORTE in an embedded environment, so I suspect some of our issues are common.
<br>
<p><p>On Oct 12, 2010, at 9:59 AM, Kenneth Lloyd wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think I understand the problem very well.  My point is that it is easier
</span><br>
<span class="quotelev1">&gt; for us researchers to &quot;bit-twiddle&quot; than to ask accommodation from a more
</span><br>
<span class="quotelev1">&gt; &quot;orthodox&quot; implementation.  If you believe that an OS threading approach
</span><br>
<span class="quotelev1">&gt; better addresses your concerns, then by all means, drop the single threading
</span><br>
<span class="quotelev1">&gt; concern.  It truly doesn't inconvenience us much at all.  Perhaps some
</span><br>
<span class="quotelev1">&gt; logical bifurcation point has been reached.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Our work involves a re-visitation of the hwloc and carto modules in new and
</span><br>
<span class="quotelev1">&gt; interesting ways.  You have touched on a major performance issue - the
</span><br>
<span class="quotelev1">&gt; asynchronous nature, not only of message passing and certain RDMA, but of
</span><br>
<span class="quotelev1">&gt; the generally asynchronous nature we face in MPP computation across myriad
</span><br>
<span class="quotelev1">&gt; hardware platforms (FPGAs, CPUs of various stripes, GPUs, memories, IO hubs,
</span><br>
<span class="quotelev1">&gt; HCAs and bridges thereof), not to mention different software and middleware.
</span><br>
<span class="quotelev1">&gt; We discovered we were playing &quot;wack-a-mole&quot; or Theory of Constraints in
</span><br>
<span class="quotelev1">&gt; optimizing efficiency and effectiveness of the many configurations, given
</span><br>
<span class="quotelev1">&gt; the different software stacks (esp. w/ hard-coded task rollouts) and various
</span><br>
<span class="quotelev1">&gt; data partitioning schemes.  IOW, trust me, we KNOW about hanging.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There are probably several ways of addressing this issue. Ours is not yours.
</span><br>
<span class="quotelev1">&gt; When we get some reliable data, we'll be happy to push out a whitepaper
</span><br>
<span class="quotelev1">&gt; describing some of the experiments that lead us to our conclusions.  That
</span><br>
<span class="quotelev1">&gt; way, others can experiment to see which solutions work best for them.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ken
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt; Behalf Of Ralph Castain
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, October 12, 2010 9:28 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] Threading
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I honestly wasn't casting aspersions - just sounds like a very strange
</span><br>
<span class="quotelev1">&gt; operational mode. Never heard of something like that before.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem is that we continue to have issues with clean termination and
</span><br>
<span class="quotelev1">&gt; &quot;hangs&quot;, largely because the program counter gets &quot;hung&quot; as we try to work
</span><br>
<span class="quotelev1">&gt; with an event-driven system constrained to a single thread. We also have
</span><br>
<span class="quotelev1">&gt; performance problems because we cannot progress communications
</span><br>
<span class="quotelev1">&gt; asynchronously.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So the movement is to threading mpirun and the orte daemons to solve the
</span><br>
<span class="quotelev1">&gt; problems. Maintaining both threaded and unthreaded operations inside a
</span><br>
<span class="quotelev1">&gt; single code becomes a study in spaghetti, and so it may prove intractable.
</span><br>
<span class="quotelev1">&gt; In that case, I'll &quot;freeze&quot; an unthreaded version at the current level, and
</span><br>
<span class="quotelev1">&gt; we'll focus further development on the threaded version.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If we go that route (and that isn't a given yet), then I'll rig the build
</span><br>
<span class="quotelev1">&gt; system so configuring without threads generates the unthreaded version, with
</span><br>
<span class="quotelev1">&gt; the correct accompanying man page.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; HTH
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 12, 2010, at 9:15 AM, Kenneth Lloyd wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; There is really no need to do anything different to accommodate us
</span><br>
<span class="quotelev1">&gt; &quot;oddball&quot;
</span><br>
<span class="quotelev2">&gt;&gt; cases.  Continue to &quot;do what you do&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ken
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On
</span><br>
<span class="quotelev2">&gt;&gt; Behalf Of Ralph Castain
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Tuesday, October 12, 2010 9:01 AM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Developers
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI devel] Threading
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hmmm...I don't understand what you just said, but it definitely sounds
</span><br>
<span class="quotelev2">&gt;&gt; -ugly-! :-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'll take your word for it - we may have to provide a lower performance
</span><br>
<span class="quotelev2">&gt;&gt; version for such oddball purposes, and offer a higher capability version
</span><br>
<span class="quotelev1">&gt; for
</span><br>
<span class="quotelev2">&gt;&gt; everyone else. I'll see if I can keep a single version, though, assuming
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; code doesn't get too convoluted so as to become unmaintainable.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Otherwise, I'll branch it and &quot;freeze&quot; a non-threaded version for the
</span><br>
<span class="quotelev2">&gt;&gt; unusual case.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 12, 2010, at 8:51 AM, Kenneth Lloyd wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In certain hybrid, heterogeneous HPC configurations, mpirun often cannot
</span><br>
<span class="quotelev2">&gt;&gt; or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; should not be threaded through the OS under which OpenMPI runs. The
</span><br>
<span class="quotelev2">&gt;&gt; primary
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OS and MPI can configure management nodes and topologies (even other MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; layers) that subsequently spawn various OSes and other lightweight
</span><br>
<span class="quotelev2">&gt;&gt; kernels.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; These share memory spaces and indirectly access the program stacks in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; various devices.  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In short, yes, there are environments where this would cause a problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Kenneth A. Lloyd
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Watt Systems Technologies Inc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Behalf Of Barrett, Brian W
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: Tuesday, October 12, 2010 8:24 AM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Developers
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI devel] Threading
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Oct 11, 2010, at 11:41 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Does anyone know of a reason why mpirun can -not- be threaded, assuming
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that all threads block and do not continuously chew cpu? Is there an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; environment where this would cause a problem?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We don't have any machines at Sandia where I could see this being a
</span><br>
<span class="quotelev2">&gt;&gt; problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brian
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brian W. Barrett
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dept. 1423: Scalable System Software
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sandia National Laboratories
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8605.php">Jeff Squyres: "Re: [OMPI devel] v1.5.1: one idea"</a>
<li><strong>Previous message:</strong> <a href="8603.php">Kenneth Lloyd: "Re: [OMPI devel] Threading"</a>
<li><strong>In reply to:</strong> <a href="8603.php">Kenneth Lloyd: "Re: [OMPI devel] Threading"</a>
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
