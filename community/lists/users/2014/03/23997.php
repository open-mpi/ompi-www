<?
$subject_val = "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 27 15:16:00 2014" -->
<!-- isoreceived="20140327191600" -->
<!-- sent="Thu, 27 Mar 2014 15:15:59 -0400" -->
<!-- isosent="20140327191559" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)" -->
<!-- id="533478EF.1010909_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F505D9A84D1D74E9397FB427DDF95BC3FE48C29_at_ALPMBAPA12.e2k.ad.ge.com" -->
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
<strong>Date:</strong> 2014-03-27 15:15:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23998.php">Sasso, John (GE Power & Water, Non-GE): "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>Previous message:</strong> <a href="23996.php">Ralph Castain: "Re: [OMPI users] How to replace --cpus-per-proc by --map-by"</a>
<li><strong>In reply to:</strong> <a href="23993.php">Sasso, John (GE Power &amp; Water, Non-GE): "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24001.php">Reuti: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>Reply:</strong> <a href="24001.php">Reuti: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi John
<br>
<p>I just set a PS message ...
<br>
<p>On 03/27/2014 02:41 PM, Sasso, John (GE Power &amp; Water, Non-GE) wrote:
<br>
<span class="quotelev1">&gt; Thank you, Gus!  I did go through the mpiexec/mpirun man pages but
</span><br>
wasn't quite clear that -report-bindings was what I was looking for.
<br>
So what I did is rerun a program w/ --report-bindings but no bindings
<br>
were reported.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Scratching my head, I decided to include --bind-to-core as well.
</span><br>
Voila, the bindings are reported!
<br>
<p>The OMPI runtime environment is great.
<br>
It adds a lot of information and flexibility to what MPI alone provides.
<br>
<p>I don't know your code, so is hard to tell if
<br>
-bycore and -bind-to-core are good choices, though.
<br>
<p>Here we use those two options for pure MPI jobs.
<br>
Minimally you need to make sure there is enough memory per core for each 
<br>
task, otherwise you may need to skip some cores, to leave enough
<br>
RAM for each process (say, with -cpus-per-proc).
<br>
<p>If the code is MPI+OpenMP hybrid you may perhaps use -by-socket and
<br>
-bind-to-socket, and set
<br>
OMP_NUM_THREADS=&lt;the_number_of_cores_in_one_socket&gt;
<br>
(assuming there are no nested OpenMP regions, which would complicate 
<br>
matters)
<br>
<p>You can get finer control with the -rankfile option.
<br>
<p>Apparently all or most of this syntax is changing in
<br>
the latest OMPI 1.7.X, though.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Awesome, but now here is my concern.
</span><br>
If we have OpenMPI-based applications launched as batch jobs
<br>
via a batch scheduler like SLURM, PBS, LSF, etc.
<br>
(which decides the placement of the app and dispatches it to the compute 
<br>
hosts),
<br>
then will including &quot;--report-bindings --bind-to-core&quot; cause problems?
<br>
<p>I don't know all resource managers and schedulers.
<br>
<p>I use Torque+Maui here.
<br>
OpenMPI is built with Torque support, and will use the nodes and 
<br>
cpus/cores provided by Torque.
<br>
My understanding is that Torque delegates to OpenMPI the process 
<br>
placement and binding (beyond the list of nodes/cpus available for
<br>
the job).
<br>
<p>My guess is that OpenPBS behaves the same as Torque.
<br>
<p>SLURM and SGE/OGE *probably* have pretty much the same behavior.
<br>
A cursory reading of the SLURM web page suggested to me that it
<br>
does core binding by default, but don't quote me on that.
<br>
<p>I don't know what LSF does, but I would guess there is a
<br>
way to do the appropriate bindings, either at the resource manager 
<br>
level, or at the OpenMPI level (or a combination of both).
<br>
<p><p>Certainly I can test this, but concerned there may be a case where 
<br>
inclusion of
<br>
--bind-to-core would cause an unexpected problem I did not account for.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --john
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Well, testing and failing is part of this game!
<br>
Would the GE manager buy that? :)
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Gus Correa
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, March 27, 2014 2:06 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi John
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Take a look at the mpiexec/mpirun options:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -report-bindings (this one should report what you want)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and maybe also also:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -bycore, -bysocket, -bind-to-core, -bind-to-socket, ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and similar, if you want more control on where your MPI processes run.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;man mpiexec&quot; is your friend!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope this helps,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 03/27/2014 01:53 PM, Sasso, John (GE Power &amp; Water, Non-GE) wrote:
</span><br>
<span class="quotelev2">&gt;&gt; When a piece of software built against OpenMPI fails, I will see an
</span><br>
<span class="quotelev2">&gt;&gt; error referring to the rank of the MPI task which incurred the failure.
</span><br>
<span class="quotelev2">&gt;&gt; For example:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPI_ABORT was invoked on rank 1236 in communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; with errorcode 1.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Unfortunately, I do not have access to the software code, just the
</span><br>
<span class="quotelev2">&gt;&gt; installation directory tree for OpenMPI.  My question is:  Is there a
</span><br>
<span class="quotelev2">&gt;&gt; flag that can be passed to mpirun, or an environment variable set,
</span><br>
<span class="quotelev2">&gt;&gt; which would reveal the mapping of ranks to the hosts they are on?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I do understand that one could have multiple MPI ranks running on the
</span><br>
<span class="quotelev2">&gt;&gt; same host, but finding a way to determine which rank ran on what host
</span><br>
<span class="quotelev2">&gt;&gt; would go a long way in help troubleshooting problems which may be
</span><br>
<span class="quotelev2">&gt;&gt; central to the host.  Thanks!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                     --john
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="23998.php">Sasso, John (GE Power & Water, Non-GE): "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>Previous message:</strong> <a href="23996.php">Ralph Castain: "Re: [OMPI users] How to replace --cpus-per-proc by --map-by"</a>
<li><strong>In reply to:</strong> <a href="23993.php">Sasso, John (GE Power &amp; Water, Non-GE): "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24001.php">Reuti: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>Reply:</strong> <a href="24001.php">Reuti: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
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
