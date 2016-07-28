<?
$subject_val = "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 15 07:38:22 2010" -->
<!-- isoreceived="20101115123822" -->
<!-- sent="Mon, 15 Nov 2010 13:38:09 +0100" -->
<!-- isosent="20101115123809" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts" -->
<!-- id="44D0B567-EFFB-48F1-B0C3-D1CC21B8F1A5_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="019FDDDF-C1CB-4DBC-B398-894D15396132_at_warwick.ac.uk" -->
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
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-15 07:38:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14759.php">Ralph Castain: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Previous message:</strong> <a href="14757.php">Chris Jewell: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>In reply to:</strong> <a href="14757.php">Chris Jewell: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14759.php">Ralph Castain: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Reply:</strong> <a href="14759.php">Ralph Castain: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 15.11.2010 um 13:13 schrieb Chris Jewell:
<br>
<p><span class="quotelev1">&gt; Okay so I tried what you suggested.  You essentially get the requested number of bound cores on each execution node, so if I use
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ qsub -pe openmpi 8 -binding linear:2 &lt;myscript.com&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; then I get 2 bound cores per node, irrespective of the number of slots (and hence parallel) processes allocated by GE.  This is irrespective of which setting I use for the allocation_rule.
</span><br>
<p>but it should work fine with an &quot;allocation_rule 2&quot; then.
<br>
<p><p><span class="quotelev1">&gt; My aim with this was to deal with badly behaved multithreaded algorithms
</span><br>
<p>Yep, this causes sometimes the overloading of a machine. When I know that I want to compile a parallel Open MPI application, I use non-threaded versions of ATLAS, MKL or other libraries.
<br>
<p><p><span class="quotelev1">&gt; which end up spreading across more cores on an execution node than the number of GE-allocated slots (thereby interfering with other GE scheduled tasks running on the same exec node).  By binding a process to one or more cores, one can &quot;box in&quot; processes and prevent them from spawning erroneous sub-processes and threads.  Unfortunately, the above solution sets the same core binding for each execution node to be the same.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; From exploring the software (both OpenMPI and GE) further, I have two comments:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1) The core binding feature in GE appears to apply the requested core-binding topology to every execution node involved in a parallel job, rather than assuming that the topology requested is *per parallel process*.  So, if I request 'qsub -pe mpi 8 -binding linear:1 &lt;myscript.com&gt;' with the intention of getting each of the 8 parallel processes to be bound to 1 core, I actually get all processes associated with the job_id on one exec node bound to 1 core.  Oops!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2) OpenMPI has its own core-binding feature (-mca mpi_paffinity_alone 1) which works well to bind each parallel process to one processor.  Unfortunately, the binding framework (hwloc) is different to that which GE uses (PLPA), resulting in binding overlaps between GE-bound tasks (eg serial and smp jobs) and OpenMPI-bound processes (ie my mpi jobs).  Again, oops ;-)
</span><br>
<p><span class="quotelev1">&gt; If, indeed, it is not possible currently to implement this type of core-binding in tightly integrated OpenMPI/GE, then a solution might lie in a custom script run in the parallel environment's 'start proc args'.  This script would have to find out which slots are allocated where on the cluster, and write an OpenMPI rankfile.
</span><br>
<p>Exactly this should work.
<br>
<p>If you use &quot;binding_instance&quot; &quot;pe&quot; and reformat the information in the $PE_HOSTFILE to a &quot;rankfile&quot;, it should work to get the desired allocation. Maybe you can share the script with this list once you got it working.
<br>
<p>-- Reuti
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14759.php">Ralph Castain: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Previous message:</strong> <a href="14757.php">Chris Jewell: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>In reply to:</strong> <a href="14757.php">Chris Jewell: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14759.php">Ralph Castain: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Reply:</strong> <a href="14759.php">Ralph Castain: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
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
