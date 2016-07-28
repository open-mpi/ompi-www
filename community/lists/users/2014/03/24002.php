<?
$subject_val = "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 27 17:31:21 2014" -->
<!-- isoreceived="20140327213121" -->
<!-- sent="Thu, 27 Mar 2014 17:31:20 -0400" -->
<!-- isosent="20140327213120" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)" -->
<!-- id="533498A8.2080707_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="0CAC4E5C-139C-4CE4-9F1C-D383C0CBA35A_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-27 17:31:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24003.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>Previous message:</strong> <a href="24001.php">Reuti: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>In reply to:</strong> <a href="24001.php">Reuti: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24008.php">Dave Love: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 03/27/2014 04:10 PM, Reuti wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am 27.03.2014 um 20:15 schrieb Gus Correa:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;snip&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Awesome, but now here is my concern.
</span><br>
<span class="quotelev2">&gt;&gt; If we have OpenMPI-based applications launched as batch jobs
</span><br>
<span class="quotelev2">&gt;&gt; via a batch scheduler like SLURM, PBS, LSF, etc.
</span><br>
<span class="quotelev2">&gt;&gt; (which decides the placement of the app and dispatches it to the compute hosts),
</span><br>
<span class="quotelev2">&gt;&gt; then will including &quot;--report-bindings --bind-to-core&quot; cause problems?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do all of them have an internal bookkeeping of granted cores to slots -
</span><br>
i.e. not only the number of scheduled slots per job per node, but also 
<br>
which
<br>
core was granted to which job? Does Open MPI read this information would be
<br>
the next question then.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't know all resource managers and schedulers.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I use Torque+Maui here.
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI is built with Torque support,
</span><br>
and will use the nodes and cpus/cores provided by Torque.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Same question here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Hi Reuti
<br>
<p>On Torque the answer is &quot;it depends&quot;.
<br>
If you configure it with cpuset enabled (which is *not* the default)
<br>
then the job can run only on those cpus/cores listed under
<br>
/dev/cpuset/bla/bla/job_number/bla/bla.
<br>
Otherwise, processes and threads are free to run on any cores inside
<br>
the nodes Torque assigned to the job.
<br>
However, process placement and binding is deferred to MPI.
<br>
What I like about this is that they (Torque and OMPI)
<br>
coexist without interfering with each other.
<br>
<p>My quick reading of some Slurm documents suggested that
<br>
it is configured by default with cpuset enabled,
<br>
and if I understood right &quot;srun&quot; does core binding by default as well
<br>
(which you can override with other types of binding).
<br>
However, I don't understand clearly the interplay
<br>
between srun and mpirun.
<br>
Does srun replace mpirun perhaps,
<br>
and takes over process placement and binding?
<br>
Or do they coexist in harmony?
<br>
However, I am not a Slurm user, so what I wrote
<br>
above are just wild guesses, and may be completely wrong.
<br>
In any case, this discouraged me a bit of trying Slurm.
<br>
<p>IMHO, the resource manager has no business in
<br>
enforcing process/thread placement and binding,
<br>
and minimally should have an option to
<br>
turn it off at the user request, and let MPI and other tools do it.
<br>
As you certainly know, besides MPI (OMPI in particular),
<br>
OpenMP has its own mechanisms for thread binding as well,
<br>
and so do hwloc, taskset, numactl, etc.
<br>
I think these are are the natural baby-sitters of process,
<br>
thread, cpu, core, NUMA, etc.
<br>
The resource manager should keep baby-sitting the jobs and the
<br>
coarse-grained resources, as it always did.
<br>
Otherwise those children will be spoiled by too much attention.
<br>
One tool for each small task, keep it simple,
<br>
aren't these principles that made Unix' success and longevity?
<br>
However, this job baby-sitting job may be high-paid,
<br>
hence there is more and more people applying for it.
<br>
<p>Gus Correa
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My understanding is that Torque delegates to OpenMPI
</span><br>
the process placement and binding
<br>
(beyond the list of nodes/cpus available for
<br>
<span class="quotelev2">&gt;&gt; the job).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My guess is that OpenPBS behaves the same as Torque.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; SLURM and SGE/OGE *probably* have pretty much the same behavior.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SGE/OGE: no, any binding request is only a soft request.
</span><br>
<span class="quotelev1">&gt; UGE: here you can request a hard binding. But I have no clue whether
</span><br>
this information is read by Open MPI too.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If in doubt: use only complete nodes for each job
</span><br>
(which is often done for massively parallel jobs anyway).
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A cursory reading of the SLURM web page suggested to me that it
</span><br>
<span class="quotelev2">&gt;&gt; does core binding by default, but don't quote me on that.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't know what LSF does, but I would guess there is a
</span><br>
<span class="quotelev2">&gt;&gt; way to do the appropriate bindings, either at the resource
</span><br>
manager level, or at the OpenMPI level (or a combination of both).
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Certainly I can test this, but concerned there may be a case where inclusion of
</span><br>
<span class="quotelev2">&gt;&gt; --bind-to-core would cause an unexpected problem I did not account for.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --john
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Well, testing and failing is part of this game!
</span><br>
<span class="quotelev2">&gt;&gt; Would the GE manager buy that? :)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I hope this helps,
</span><br>
<span class="quotelev2">&gt;&gt; Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Gus Correa
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: Thursday, March 27, 2014 2:06 PM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi John
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Take a look at the mpiexec/mpirun options:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -report-bindings (this one should report what you want)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and maybe also also:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -bycore, -bysocket, -bind-to-core, -bind-to-socket, ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and similar, if you want more control on where your MPI processes run.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;man mpiexec&quot; is your friend!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I hope this helps,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gus Correa
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 03/27/2014 01:53 PM, Sasso, John (GE Power &amp; Water, Non-GE) wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; When a piece of software built against OpenMPI fails, I will see an
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; error referring to the rank of the MPI task which incurred the failure.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; For example:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_ABORT was invoked on rank 1236 in communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with errorcode 1.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Unfortunately, I do not have access to the software code, just the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; installation directory tree for OpenMPI.  My question is:  Is there a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; flag that can be passed to mpirun, or an environment variable set,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; which would reveal the mapping of ranks to the hosts they are on?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I do understand that one could have multiple MPI ranks running on the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; same host, but finding a way to determine which rank ran on what host
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; would go a long way in help troubleshooting problems which may be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; central to the host.  Thanks!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     --john
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24003.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>Previous message:</strong> <a href="24001.php">Reuti: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>In reply to:</strong> <a href="24001.php">Reuti: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24008.php">Dave Love: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
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
