<?
$subject_val = "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 27 16:10:27 2014" -->
<!-- isoreceived="20140327201027" -->
<!-- sent="Thu, 27 Mar 2014 21:10:17 +0100" -->
<!-- isosent="20140327201017" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)" -->
<!-- id="0CAC4E5C-139C-4CE4-9F1C-D383C0CBA35A_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="533478EF.1010909_at_ldeo.columbia.edu" -->
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
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-27 16:10:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24002.php">Gus Correa: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>Previous message:</strong> <a href="24000.php">Sasso, John (GE Power &amp; Water, Non-GE): "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>In reply to:</strong> <a href="23997.php">Gus Correa: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24002.php">Gus Correa: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>Reply:</strong> <a href="24002.php">Gus Correa: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>Reply:</strong> <a href="24008.php">Dave Love: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 27.03.2014 um 20:15 schrieb Gus Correa:
<br>
<p><span class="quotelev1">&gt; &lt;snip&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Awesome, but now here is my concern.
</span><br>
<span class="quotelev1">&gt; If we have OpenMPI-based applications launched as batch jobs
</span><br>
<span class="quotelev1">&gt; via a batch scheduler like SLURM, PBS, LSF, etc.
</span><br>
<span class="quotelev1">&gt; (which decides the placement of the app and dispatches it to the compute hosts),
</span><br>
<span class="quotelev1">&gt; then will including &quot;--report-bindings --bind-to-core&quot; cause problems?
</span><br>
<p>Do all of them have an internal bookkeeping of granted cores to slots - i.e. not only the number of scheduled slots per job per node, but also which core was granted to which job? Does Open MPI read this information would be the next question then.
<br>
<p><p><span class="quotelev1">&gt; I don't know all resource managers and schedulers.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I use Torque+Maui here.
</span><br>
<span class="quotelev1">&gt; OpenMPI is built with Torque support, and will use the nodes and cpus/cores provided by Torque.
</span><br>
<p>Same question here.
<br>
<p><p><span class="quotelev1">&gt; My understanding is that Torque delegates to OpenMPI the process placement and binding (beyond the list of nodes/cpus available for
</span><br>
<span class="quotelev1">&gt; the job).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My guess is that OpenPBS behaves the same as Torque.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; SLURM and SGE/OGE *probably* have pretty much the same behavior.
</span><br>
<p>SGE/OGE: no, any binding request is only a soft request.
<br>
UGE: here you can request a hard binding. But I have no clue whether this information is read by Open MPI too.
<br>
<p>If in doubt: use only complete nodes for each job (which is often done for massively parallel jobs anyway).
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; A cursory reading of the SLURM web page suggested to me that it
</span><br>
<span class="quotelev1">&gt; does core binding by default, but don't quote me on that.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't know what LSF does, but I would guess there is a
</span><br>
<span class="quotelev1">&gt; way to do the appropriate bindings, either at the resource manager level, or at the OpenMPI level (or a combination of both).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Certainly I can test this, but concerned there may be a case where inclusion of
</span><br>
<span class="quotelev1">&gt; --bind-to-core would cause an unexpected problem I did not account for.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --john
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Well, testing and failing is part of this game!
</span><br>
<span class="quotelev1">&gt; Would the GE manager buy that? :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I hope this helps,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Thursday, March 27, 2014 2:06 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi John
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Take a look at the mpiexec/mpirun options:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -report-bindings (this one should report what you want)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; and maybe also also:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -bycore, -bysocket, -bind-to-core, -bind-to-socket, ...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; and similar, if you want more control on where your MPI processes run.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;man mpiexec&quot; is your friend!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I hope this helps,
</span><br>
<span class="quotelev2">&gt;&gt; Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 03/27/2014 01:53 PM, Sasso, John (GE Power &amp; Water, Non-GE) wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When a piece of software built against OpenMPI fails, I will see an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; error referring to the rank of the MPI task which incurred the failure.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For example:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_ABORT was invoked on rank 1236 in communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with errorcode 1.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Unfortunately, I do not have access to the software code, just the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; installation directory tree for OpenMPI.  My question is:  Is there a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; flag that can be passed to mpirun, or an environment variable set,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; which would reveal the mapping of ranks to the hosts they are on?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I do understand that one could have multiple MPI ranks running on the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; same host, but finding a way to determine which rank ran on what host
</span><br>
<span class="quotelev3">&gt;&gt;&gt; would go a long way in help troubleshooting problems which may be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; central to the host.  Thanks!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    --john
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24002.php">Gus Correa: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>Previous message:</strong> <a href="24000.php">Sasso, John (GE Power &amp; Water, Non-GE): "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>In reply to:</strong> <a href="23997.php">Gus Correa: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24002.php">Gus Correa: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>Reply:</strong> <a href="24002.php">Gus Correa: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>Reply:</strong> <a href="24008.php">Dave Love: "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
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
