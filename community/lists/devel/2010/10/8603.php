<?
$subject_val = "Re: [OMPI devel] Threading";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 12 11:59:32 2010" -->
<!-- isoreceived="20101012155932" -->
<!-- sent="Tue, 12 Oct 2010 09:59:28 -0600" -->
<!-- isosent="20101012155928" -->
<!-- name="Kenneth Lloyd" -->
<!-- email="kenneth.lloyd_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Threading" -->
<!-- id="004a01cb6a26$73da77f0$5b8f67d0$_at_lloyd@wattsys.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CFBA0AC4-B3E8-4FA4-B4CC-19733882F8BC_at_open-mpi.org" -->
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
<strong>From:</strong> Kenneth Lloyd (<em>kenneth.lloyd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-12 11:59:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8604.php">Ralph Castain: "Re: [OMPI devel] Threading"</a>
<li><strong>Previous message:</strong> <a href="8602.php">Ralph Castain: "Re: [OMPI devel] Threading"</a>
<li><strong>In reply to:</strong> <a href="8602.php">Ralph Castain: "Re: [OMPI devel] Threading"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8604.php">Ralph Castain: "Re: [OMPI devel] Threading"</a>
<li><strong>Reply:</strong> <a href="8604.php">Ralph Castain: "Re: [OMPI devel] Threading"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>I think I understand the problem very well.  My point is that it is easier
<br>
for us researchers to &quot;bit-twiddle&quot; than to ask accommodation from a more
<br>
&quot;orthodox&quot; implementation.  If you believe that an OS threading approach
<br>
better addresses your concerns, then by all means, drop the single threading
<br>
concern.  It truly doesn't inconvenience us much at all.  Perhaps some
<br>
logical bifurcation point has been reached.
<br>
<p>Our work involves a re-visitation of the hwloc and carto modules in new and
<br>
interesting ways.  You have touched on a major performance issue - the
<br>
asynchronous nature, not only of message passing and certain RDMA, but of
<br>
the generally asynchronous nature we face in MPP computation across myriad
<br>
hardware platforms (FPGAs, CPUs of various stripes, GPUs, memories, IO hubs,
<br>
HCAs and bridges thereof), not to mention different software and middleware.
<br>
We discovered we were playing &quot;wack-a-mole&quot; or Theory of Constraints in
<br>
optimizing efficiency and effectiveness of the many configurations, given
<br>
the different software stacks (esp. w/ hard-coded task rollouts) and various
<br>
data partitioning schemes.  IOW, trust me, we KNOW about hanging.
<br>
<p>There are probably several ways of addressing this issue. Ours is not yours.
<br>
When we get some reliable data, we'll be happy to push out a whitepaper
<br>
describing some of the experiments that lead us to our conclusions.  That
<br>
way, others can experiment to see which solutions work best for them.
<br>
<p>Ken
<br>
<p><p><p>-----Original Message-----
<br>
From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On
<br>
Behalf Of Ralph Castain
<br>
Sent: Tuesday, October 12, 2010 9:28 AM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] Threading
<br>
<p>I honestly wasn't casting aspersions - just sounds like a very strange
<br>
operational mode. Never heard of something like that before.
<br>
<p>The problem is that we continue to have issues with clean termination and
<br>
&quot;hangs&quot;, largely because the program counter gets &quot;hung&quot; as we try to work
<br>
with an event-driven system constrained to a single thread. We also have
<br>
performance problems because we cannot progress communications
<br>
asynchronously.
<br>
<p>So the movement is to threading mpirun and the orte daemons to solve the
<br>
problems. Maintaining both threaded and unthreaded operations inside a
<br>
single code becomes a study in spaghetti, and so it may prove intractable.
<br>
In that case, I'll &quot;freeze&quot; an unthreaded version at the current level, and
<br>
we'll focus further development on the threaded version.
<br>
<p>If we go that route (and that isn't a given yet), then I'll rig the build
<br>
system so configuring without threads generates the unthreaded version, with
<br>
the correct accompanying man page.
<br>
<p>HTH
<br>
Ralph
<br>
<p><p>On Oct 12, 2010, at 9:15 AM, Kenneth Lloyd wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There is really no need to do anything different to accommodate us
</span><br>
&quot;oddball&quot;
<br>
<span class="quotelev1">&gt; cases.  Continue to &quot;do what you do&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ken
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt; Behalf Of Ralph Castain
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, October 12, 2010 9:01 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] Threading
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hmmm...I don't understand what you just said, but it definitely sounds
</span><br>
<span class="quotelev1">&gt; -ugly-! :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'll take your word for it - we may have to provide a lower performance
</span><br>
<span class="quotelev1">&gt; version for such oddball purposes, and offer a higher capability version
</span><br>
for
<br>
<span class="quotelev1">&gt; everyone else. I'll see if I can keep a single version, though, assuming
</span><br>
the
<br>
<span class="quotelev1">&gt; code doesn't get too convoluted so as to become unmaintainable.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Otherwise, I'll branch it and &quot;freeze&quot; a non-threaded version for the
</span><br>
<span class="quotelev1">&gt; unusual case.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 12, 2010, at 8:51 AM, Kenneth Lloyd wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In certain hybrid, heterogeneous HPC configurations, mpirun often cannot
</span><br>
<span class="quotelev1">&gt; or
</span><br>
<span class="quotelev2">&gt;&gt; should not be threaded through the OS under which OpenMPI runs. The
</span><br>
<span class="quotelev1">&gt; primary
</span><br>
<span class="quotelev2">&gt;&gt; OS and MPI can configure management nodes and topologies (even other MPI
</span><br>
<span class="quotelev2">&gt;&gt; layers) that subsequently spawn various OSes and other lightweight
</span><br>
<span class="quotelev1">&gt; kernels.
</span><br>
<span class="quotelev2">&gt;&gt; These share memory spaces and indirectly access the program stacks in
</span><br>
<span class="quotelev2">&gt;&gt; various devices.  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In short, yes, there are environments where this would cause a problem.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ==================
</span><br>
<span class="quotelev2">&gt;&gt; Kenneth A. Lloyd
</span><br>
<span class="quotelev2">&gt;&gt; Watt Systems Technologies Inc.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On
</span><br>
<span class="quotelev2">&gt;&gt; Behalf Of Barrett, Brian W
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Tuesday, October 12, 2010 8:24 AM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Developers
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI devel] Threading
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 11, 2010, at 11:41 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Does anyone know of a reason why mpirun can -not- be threaded, assuming
</span><br>
<span class="quotelev2">&gt;&gt; that all threads block and do not continuously chew cpu? Is there an
</span><br>
<span class="quotelev2">&gt;&gt; environment where this would cause a problem?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We don't have any machines at Sandia where I could see this being a
</span><br>
<span class="quotelev1">&gt; problem.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Brian W. Barrett
</span><br>
<span class="quotelev2">&gt;&gt; Dept. 1423: Scalable System Software
</span><br>
<span class="quotelev2">&gt;&gt; Sandia National Laboratories
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<p><p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8604.php">Ralph Castain: "Re: [OMPI devel] Threading"</a>
<li><strong>Previous message:</strong> <a href="8602.php">Ralph Castain: "Re: [OMPI devel] Threading"</a>
<li><strong>In reply to:</strong> <a href="8602.php">Ralph Castain: "Re: [OMPI devel] Threading"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8604.php">Ralph Castain: "Re: [OMPI devel] Threading"</a>
<li><strong>Reply:</strong> <a href="8604.php">Ralph Castain: "Re: [OMPI devel] Threading"</a>
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
