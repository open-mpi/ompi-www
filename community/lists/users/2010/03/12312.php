<?
$subject_val = "[OMPI users] MPI and DRMAA";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 10 21:03:31 2010" -->
<!-- isoreceived="20100311020331" -->
<!-- sent="Wed, 10 Mar 2010 21:03:24 -0500" -->
<!-- isosent="20100311020324" -->
<!-- name="Brian Smith" -->
<!-- email="brs_at_[hidden]" -->
<!-- subject="[OMPI users] MPI and DRMAA" -->
<!-- id="1268273004.19891.36.camel_at_plato" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] MPI and DRMAA<br>
<strong>From:</strong> Brian Smith (<em>brs_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-10 21:03:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12313.php">Gus Correa: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<li><strong>Previous message:</strong> <a href="12311.php">Gus Correa: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12314.php">Ralph Castain: "Re: [OMPI users] MPI and DRMAA"</a>
<li><strong>Reply:</strong> <a href="12314.php">Ralph Castain: "Re: [OMPI users] MPI and DRMAA"</a>
<li><strong>Reply:</strong> <a href="12319.php">Reuti: "Re: [OMPI users] MPI and DRMAA"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, All,
<br>
<p>This may seem like an odd query (or not; perhaps it has been brought up
<br>
before).  My work recently involves HPC usability i.e. making things
<br>
easier for new users by abstracting away the scheduler.  I've been
<br>
working with DRMAA for interfacing with DRMs and it occurred to me: what
<br>
would be the advantage to letting the scheduler itself handle farming
<br>
out MPI processes as individual tasks rather than having a wrapper like
<br>
mpirun to handle this task via ssh/rsh/etc.?
<br>
<p>I thought about MPI2's ability to do dynamic process management and how
<br>
scheduling environments tend to allocate static pools of resources for
<br>
parallel tasks.  A DRMAA-driven MPI would be able to request that the
<br>
scheduler launch these tasks as resources become available enabling
<br>
scheduled MPI jobs to dynamically add and remove processors during
<br>
execution.  Several applications that I have worked with come to mind,
<br>
where pre-processing and other tasks are non-parallel whereas the
<br>
various solvers are.  Being able to dynamically spawn processes based on
<br>
where you are in this work-flow could be very useful here.
<br>
<p>It also occurred to me that commercial application vendors tend to
<br>
roll-their-own when it comes to integrating their applications with an
<br>
MPI library.  I've seen applications use HP-MPI, MPICH, MPICH2,
<br>
Intel-MPI, (and thankfully, recently) OpenMPI and then proceed to
<br>
butcher the execution mechanisms to such an extent that it makes
<br>
integration with common DRM systems quite a task.  With the exception of
<br>
OpenMPI, none of these libraries provides turn-key compatibility with
<br>
most of the major DRMs and each require some degree of manual
<br>
integration and testing for use in a multi-user production environment.
<br>
I would think that vendors would be falling over themselves to integrate
<br>
OpenMPI with their applications for this very reason alone.  Instead,
<br>
some opt to develop their own scheduling environments!  Don't they have
<br>
bean counters that sit around and gripe about duplicated work?
<br>
<p>Then it occurred to me: with the exception of being able to easily
<br>
launch an MPI job with OpenMPI, the ability to monitor it from within
<br>
the application is still dependent on the vendor integrating with
<br>
various DRMs!  This is another area where a DRMAA RAS can come in handy.
<br>
There are nice bindings for monitoring tasks and getting an idea of
<br>
where you are in execution without having to resort to kludgey
<br>
shell-script wrappers tailing output files.
<br>
<p>Anyway, its been a frustrating couple of weeks dealing with several
<br>
commercial vendors and integrating their applications with our DRM and
<br>
my mind has been trying to think of a solution that could save all of us
<br>
a lot of work (though, at the same time, raise job security concerns in
<br>
such turbulent times ;-/ ).  What say you, MPI experts?
<br>
<p>Many thanks for your thoughts!
<br>
-Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12313.php">Gus Correa: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<li><strong>Previous message:</strong> <a href="12311.php">Gus Correa: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12314.php">Ralph Castain: "Re: [OMPI users] MPI and DRMAA"</a>
<li><strong>Reply:</strong> <a href="12314.php">Ralph Castain: "Re: [OMPI users] MPI and DRMAA"</a>
<li><strong>Reply:</strong> <a href="12319.php">Reuti: "Re: [OMPI users] MPI and DRMAA"</a>
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
