<?
$subject_val = "Re: [OMPI users] MPI and DRMAA";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 10 22:52:22 2010" -->
<!-- isoreceived="20100311035222" -->
<!-- sent="Wed, 10 Mar 2010 20:52:13 -0700" -->
<!-- isosent="20100311035213" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI and DRMAA" -->
<!-- id="24D3F139-2A13-43AC-86E8-E09380AA52C0_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1268273004.19891.36.camel_at_plato" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI and DRMAA<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-10 22:52:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12315.php">abc def: "Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)"</a>
<li><strong>Previous message:</strong> <a href="12313.php">Gus Correa: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<li><strong>In reply to:</strong> <a href="12312.php">Brian Smith: "[OMPI users] MPI and DRMAA"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12319.php">Reuti: "Re: [OMPI users] MPI and DRMAA"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Since I wrote and/or support most of the OMPI DRM interface code at one time or another, guess I'll add my $0.02 here. :-)
<br>
<p>There is no simple, nor obvious &quot;winning&quot;, answer here. There really aren't all that many DRMs out there when you filter the list according to the number of places that use them. Once you do, you find that only a very few see enough usage to merit a lot of support. We chose to provide support for a broader set of DRMs solely because (a) it wasn't all that hard to do so, and (b) we wanted to make OMPI available to as wide an audience as we could.
<br>
<p>Launching MPI jobs directly from the scheduler is not only possible, but available today with most (if not all) the MPI implementations. Not all DRMs support it, but some do. To understand why some choose not to support that mode, you have to understand that startup of an MPI job consists of two very distinct phases:
<br>
<p>1. mapping of the process to the allocated nodes (defining what ranks go where), and subsequent spawning of those procs; and
<br>
<p>2. wireup of the MPI interconnects across the processes.
<br>
<p>All of the DRMs/schedulers can do step 1. Doing the second step in a scalable, fast way is non-trivial. Some vendors provide specific interconnects that are tightly coupled to the DRM such that step 2 can be done without exchanging messages to pass contact info - but that introduces some constraints on portability of the DRM itself, requires development of specialized interconnects for a limited market, etc.
<br>
<p>Other DRMs provide software support for step 2 - with an attendant required investment for development and maintenance. You are correct in that it raises a question of return on investment, but I don't find that many DRM &quot;vendors&quot; are motivated by such things. Instead, they appear to be motivated primarily by ego (&quot;we can build it better than anyone else&quot;) and competition (in many cases, the DRM is developed under a funding grant that continues so long as the developing organization can win grants). There is, therefore, little motivation to standardize DRM interfaces or support.
<br>
<p>So I very much doubt you'll see a consolidation of DRM interfaces any time soon.
<br>
<p>Of course, the various DRMs do provide differing levels of support (e.g., fault tolerance). We at OMPI made the decision to expend the effort to try and provide an even user-level experience by filling any differences in DRM capability from within OMPI. So there is a -lot- of code within OMPI's RTE dedicated to providing capabilities found in one environment that might be missing in another. We do that in our modular architecture, though, so where a capability is available via the DRM, we exploit it - and where it isn't, we implement it ourselves.
<br>
<p>Some DRM providers wonder at times as to why we do that - after all, if we only used what the DRM provided, our lives would be easier. But we believe the user would not benefit from that approach, and so we continue to make the effort. Our &quot;reward&quot; is that users can run an OMPI program on nearly every system we know about and have it behave exactly the same way (some setting of MCA params may be required).
<br>
<p>Long winded answer - hope it provides some insight into the decisions we make.
<br>
Ralph
<br>
<p>On Mar 10, 2010, at 7:03 PM, Brian Smith wrote:
<br>
<p><span class="quotelev1">&gt; Hi, All,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This may seem like an odd query (or not; perhaps it has been brought up
</span><br>
<span class="quotelev1">&gt; before).  My work recently involves HPC usability i.e. making things
</span><br>
<span class="quotelev1">&gt; easier for new users by abstracting away the scheduler.  I've been
</span><br>
<span class="quotelev1">&gt; working with DRMAA for interfacing with DRMs and it occurred to me: what
</span><br>
<span class="quotelev1">&gt; would be the advantage to letting the scheduler itself handle farming
</span><br>
<span class="quotelev1">&gt; out MPI processes as individual tasks rather than having a wrapper like
</span><br>
<span class="quotelev1">&gt; mpirun to handle this task via ssh/rsh/etc.?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I thought about MPI2's ability to do dynamic process management and how
</span><br>
<span class="quotelev1">&gt; scheduling environments tend to allocate static pools of resources for
</span><br>
<span class="quotelev1">&gt; parallel tasks.  A DRMAA-driven MPI would be able to request that the
</span><br>
<span class="quotelev1">&gt; scheduler launch these tasks as resources become available enabling
</span><br>
<span class="quotelev1">&gt; scheduled MPI jobs to dynamically add and remove processors during
</span><br>
<span class="quotelev1">&gt; execution.  Several applications that I have worked with come to mind,
</span><br>
<span class="quotelev1">&gt; where pre-processing and other tasks are non-parallel whereas the
</span><br>
<span class="quotelev1">&gt; various solvers are.  Being able to dynamically spawn processes based on
</span><br>
<span class="quotelev1">&gt; where you are in this work-flow could be very useful here.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It also occurred to me that commercial application vendors tend to
</span><br>
<span class="quotelev1">&gt; roll-their-own when it comes to integrating their applications with an
</span><br>
<span class="quotelev1">&gt; MPI library.  I've seen applications use HP-MPI, MPICH, MPICH2,
</span><br>
<span class="quotelev1">&gt; Intel-MPI, (and thankfully, recently) OpenMPI and then proceed to
</span><br>
<span class="quotelev1">&gt; butcher the execution mechanisms to such an extent that it makes
</span><br>
<span class="quotelev1">&gt; integration with common DRM systems quite a task.  With the exception of
</span><br>
<span class="quotelev1">&gt; OpenMPI, none of these libraries provides turn-key compatibility with
</span><br>
<span class="quotelev1">&gt; most of the major DRMs and each require some degree of manual
</span><br>
<span class="quotelev1">&gt; integration and testing for use in a multi-user production environment.
</span><br>
<span class="quotelev1">&gt; I would think that vendors would be falling over themselves to integrate
</span><br>
<span class="quotelev1">&gt; OpenMPI with their applications for this very reason alone.  Instead,
</span><br>
<span class="quotelev1">&gt; some opt to develop their own scheduling environments!  Don't they have
</span><br>
<span class="quotelev1">&gt; bean counters that sit around and gripe about duplicated work?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Then it occurred to me: with the exception of being able to easily
</span><br>
<span class="quotelev1">&gt; launch an MPI job with OpenMPI, the ability to monitor it from within
</span><br>
<span class="quotelev1">&gt; the application is still dependent on the vendor integrating with
</span><br>
<span class="quotelev1">&gt; various DRMs!  This is another area where a DRMAA RAS can come in handy.
</span><br>
<span class="quotelev1">&gt; There are nice bindings for monitoring tasks and getting an idea of
</span><br>
<span class="quotelev1">&gt; where you are in execution without having to resort to kludgey
</span><br>
<span class="quotelev1">&gt; shell-script wrappers tailing output files.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Anyway, its been a frustrating couple of weeks dealing with several
</span><br>
<span class="quotelev1">&gt; commercial vendors and integrating their applications with our DRM and
</span><br>
<span class="quotelev1">&gt; my mind has been trying to think of a solution that could save all of us
</span><br>
<span class="quotelev1">&gt; a lot of work (though, at the same time, raise job security concerns in
</span><br>
<span class="quotelev1">&gt; such turbulent times ;-/ ).  What say you, MPI experts?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Many thanks for your thoughts!
</span><br>
<span class="quotelev1">&gt; -Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12315.php">abc def: "Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)"</a>
<li><strong>Previous message:</strong> <a href="12313.php">Gus Correa: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<li><strong>In reply to:</strong> <a href="12312.php">Brian Smith: "[OMPI users] MPI and DRMAA"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12319.php">Reuti: "Re: [OMPI users] MPI and DRMAA"</a>
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
