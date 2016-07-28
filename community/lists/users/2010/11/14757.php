<?
$subject_val = "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 15 07:13:54 2010" -->
<!-- isoreceived="20101115121354" -->
<!-- sent="Mon, 15 Nov 2010 12:13:46 +0000" -->
<!-- isosent="20101115121346" -->
<!-- name="Chris Jewell" -->
<!-- email="chris.jewell_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts" -->
<!-- id="019FDDDF-C1CB-4DBC-B398-894D15396132_at_warwick.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] Error when using OpenMPI with SGE multiple hosts" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts<br>
<strong>From:</strong> Chris Jewell (<em>chris.jewell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-15 07:13:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14758.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Previous message:</strong> <a href="14756.php">Joshua Hursey: "[OMPI users] Fwd: BLCR at SC10"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/10/14371.php">Chris Jewell: "[OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14758.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Reply:</strong> <a href="14758.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Reuti,
<br>
<p>Okay so I tried what you suggested.  You essentially get the requested number of bound cores on each execution node, so if I use
<br>
<p>$ qsub -pe openmpi 8 -binding linear:2 &lt;myscript.com&gt;
<br>
<p>then I get 2 bound cores per node, irrespective of the number of slots (and hence parallel) processes allocated by GE.  This is irrespective of which setting I use for the allocation_rule.
<br>
<p>My aim with this was to deal with badly behaved multithreaded algorithms which end up spreading across more cores on an execution node than the number of GE-allocated slots (thereby interfering with other GE scheduled tasks running on the same exec node).  By binding a process to one or more cores, one can &quot;box in&quot; processes and prevent them from spawning erroneous sub-processes and threads.  Unfortunately, the above solution sets the same core binding for each execution node to be the same.
<br>
<p><span class="quotelev1">&gt;From exploring the software (both OpenMPI and GE) further, I have two comments:
</span><br>
<p>1) The core binding feature in GE appears to apply the requested core-binding topology to every execution node involved in a parallel job, rather than assuming that the topology requested is *per parallel process*.  So, if I request 'qsub -pe mpi 8 -binding linear:1 &lt;myscript.com&gt;' with the intention of getting each of the 8 parallel processes to be bound to 1 core, I actually get all processes associated with the job_id on one exec node bound to 1 core.  Oops!
<br>
<p>2) OpenMPI has its own core-binding feature (-mca mpi_paffinity_alone 1) which works well to bind each parallel process to one processor.  Unfortunately, the binding framework (hwloc) is different to that which GE uses (PLPA), resulting in binding overlaps between GE-bound tasks (eg serial and smp jobs) and OpenMPI-bound processes (ie my mpi jobs).  Again, oops ;-)
<br>
<p><p>If, indeed, it is not possible currently to implement this type of core-binding in tightly integrated OpenMPI/GE, then a solution might lie in a custom script run in the parallel environment's 'start proc args'.  This script would have to find out which slots are allocated where on the cluster, and write an OpenMPI rankfile.
<br>
<p>Any thoughts on that?
<br>
<p>Cheers,
<br>
<p>Chris
<br>
<p><p><pre>
--
Dr Chris Jewell
Department of Statistics
University of Warwick
Coventry
CV4 7AL
UK
Tel: +44 (0)24 7615 0778
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14758.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Previous message:</strong> <a href="14756.php">Joshua Hursey: "[OMPI users] Fwd: BLCR at SC10"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/10/14371.php">Chris Jewell: "[OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14758.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Reply:</strong> <a href="14758.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
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
