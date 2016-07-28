<?
$subject_val = "Re: [OMPI users] MPI and DRMAA";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 11 07:57:33 2010" -->
<!-- isoreceived="20100311125733" -->
<!-- sent="Thu, 11 Mar 2010 13:57:04 +0100" -->
<!-- isosent="20100311125704" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI and DRMAA" -->
<!-- id="CB97D1E9-56F6-4AA6-9488-3F78660FB0BB_at_staff.uni-marburg.de" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-11 07:57:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12320.php">Jeff Squyres: "Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)"</a>
<li><strong>Previous message:</strong> <a href="12318.php">Olivier Riff: "Re: [OMPI users] OPenMpi: How to specify login name in machinefile passed to mpirun"</a>
<li><strong>In reply to:</strong> <a href="12312.php">Brian Smith: "[OMPI users] MPI and DRMAA"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 11.03.2010 um 03:03 schrieb Brian Smith:
<br>
<p><span class="quotelev1">&gt; This may seem like an odd query (or not; perhaps it has been  
</span><br>
<span class="quotelev1">&gt; brought up
</span><br>
<span class="quotelev1">&gt; before).  My work recently involves HPC usability i.e. making things
</span><br>
<span class="quotelev1">&gt; easier for new users by abstracting away the scheduler.  I've been
</span><br>
<span class="quotelev1">&gt; working with DRMAA for interfacing with DRMs and it occurred to me:  
</span><br>
<span class="quotelev1">&gt; what
</span><br>
<span class="quotelev1">&gt; would be the advantage to letting the scheduler itself handle farming
</span><br>
<span class="quotelev1">&gt; out MPI processes as individual tasks rather than having a wrapper  
</span><br>
<span class="quotelev1">&gt; like
</span><br>
<span class="quotelev1">&gt; mpirun to handle this task via ssh/rsh/etc.?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I thought about MPI2's ability to do dynamic process management and  
</span><br>
<span class="quotelev1">&gt; how
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
<span class="quotelev1">&gt; various solvers are.  Being able to dynamically spawn processes  
</span><br>
<span class="quotelev1">&gt; based on
</span><br>
<span class="quotelev1">&gt; where you are in this work-flow could be very useful here.
</span><br>
<p>when I get you in the correct direction of the calls, the MPI library  
<br>
should issue via DRMAA the startup of tasks to the DRM. So the  
<br>
complete flow would be:
<br>
<p>user =&gt; DRMAA.a for MPI application =&gt; scheduled MPI application =&gt;  
<br>
DRMAA.b for tasks =&gt; scheduled MPI tasks
<br>
<p>IMO the DRMAA.b must be available at some point, as none of the  
<br>
queuingsystems I have access to can cope with varying needs of a job  
<br>
during a jobs lifetime. Besides rising and lowering the number of  
<br>
cores you need, the same applies to memory requests. It was quite  
<br>
some often on the SGE mailing list, that a job needs a certain amount  
<br>
of memory for some time:
<br>
<p>- 2 GB for 4 hrs
<br>
- 4 GB for 20 min
<br>
- 1 GB for 6 hrs
<br>
<p>There is no interface for now to let a running application tell the  
<br>
DRM the changed needs - you can only submit it with the maximum  
<br>
request. As you wouldn't like to have your job halted in the middle,  
<br>
it would need a new syntax in DRMAA to let the DRM know the maximum  
<br>
and current needs, so that the gaps could be filled with other jobs.  
<br>
These other jobs would also need one extension: some kind of flag  
<br>
&quot;suspendable&quot; . These nice jobs could then run in some way in the  
<br>
leftover resources but would be halted at any point (or pushed out of  
<br>
the system) for some time.
<br>
<p><p><span class="quotelev1">&gt; It also occurred to me that commercial application vendors tend to
</span><br>
<span class="quotelev1">&gt; roll-their-own when it comes to integrating their applications with an
</span><br>
<span class="quotelev1">&gt; MPI library.  I've seen applications use HP-MPI, MPICH, MPICH2,
</span><br>
<span class="quotelev1">&gt; Intel-MPI, (and thankfully, recently) OpenMPI and then proceed to
</span><br>
<span class="quotelev1">&gt; butcher the execution mechanisms to such an extent that it makes
</span><br>
<span class="quotelev1">&gt; integration with common DRM systems quite a task.  With the  
</span><br>
<span class="quotelev1">&gt; exception of
</span><br>
<span class="quotelev1">&gt; OpenMPI, none of these libraries provides turn-key compatibility with
</span><br>
<span class="quotelev1">&gt; most of the major DRMs and each require some degree of manual
</span><br>
<span class="quotelev1">&gt; integration and testing for use in a multi-user production  
</span><br>
<span class="quotelev1">&gt; environment.
</span><br>
<span class="quotelev1">&gt; I would think that vendors would be falling over themselves to  
</span><br>
<span class="quotelev1">&gt; integrate
</span><br>
<span class="quotelev1">&gt; OpenMPI with their applications for this very reason alone.  Instead,
</span><br>
<span class="quotelev1">&gt; some opt to develop their own scheduling environments!  Don't they  
</span><br>
<span class="quotelev1">&gt; have
</span><br>
<span class="quotelev1">&gt; bean counters that sit around and gripe about duplicated work?
</span><br>
<p>I think there are some reasons: a) history - maybe their custom built  
<br>
scheduling was already available at a time when there was no wide  
<br>
spread use of a DRM, b) at that time it was one big machine with many  
<br>
users and not the nowadays common clusters with nodes and maybe also  
<br>
a third point c) due to limited resources they were on the opinion  
<br>
that the user will use only their application and is also the only  
<br>
user of a cluster. d) they wanted to provide a workflow solution,  
<br>
even if someone don't like to install a queuing system just on a  
<br>
local workstation (I install SGE even local on each users machine for  
<br>
small things - same syntax like in the cluster, and their machines  
<br>
won't get overloaded - but I'm sure it's not common practice).
<br>
<p>But you are right, this leads to a situation where you have to  
<br>
combine two queuingsystems. Let's say one example: the applications  
<br>
from Schrodinger. When you have machines with only their software,  
<br>
then you can teach your users to use their commands. When you want to  
<br>
use a DRM anyway because you have other applications and groups of  
<br>
users: there are hocks available to forwards Schrodinger's &quot;foobar  
<br>
kill&quot; to a &quot;qdel&quot; to integrate it with various queuingsystems. But  
<br>
this means the users have to think about: I kill job type A and D  
<br>
with &quot;qdel&quot;, but for B and C I have to use &quot;foobar kill&quot; - not to  
<br>
mention that you have two &lt;jobid&gt;s to handle. For now I failed to  
<br>
leave their queuing system out and start the jobs directly.
<br>
<p><p><span class="quotelev1">&gt; Then it occurred to me: with the exception of being able to easily
</span><br>
<span class="quotelev1">&gt; launch an MPI job with OpenMPI, the ability to monitor it from within
</span><br>
<span class="quotelev1">&gt; the application is still dependent on the vendor integrating with
</span><br>
<span class="quotelev1">&gt; various DRMs!  This is another area where a DRMAA RAS can come in  
</span><br>
<span class="quotelev1">&gt; handy.
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
<span class="quotelev1">&gt; commercial vendors and integrating their applications with
</span><br>
<p>Yeah, I know...
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; our DRM and
</span><br>
<span class="quotelev1">&gt; my mind has been trying to think of a solution that could save all  
</span><br>
<span class="quotelev1">&gt; of us
</span><br>
<span class="quotelev1">&gt; a lot of work (though, at the same time, raise job security  
</span><br>
<span class="quotelev1">&gt; concerns in
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
<li><strong>Next message:</strong> <a href="12320.php">Jeff Squyres: "Re: [OMPI users] running externalprogram	on	same	processor	(Fortran)"</a>
<li><strong>Previous message:</strong> <a href="12318.php">Olivier Riff: "Re: [OMPI users] OPenMpi: How to specify login name in machinefile passed to mpirun"</a>
<li><strong>In reply to:</strong> <a href="12312.php">Brian Smith: "[OMPI users] MPI and DRMAA"</a>
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
