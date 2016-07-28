<?
$subject_val = "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 12 09:57:54 2015" -->
<!-- isoreceived="20150812135754" -->
<!-- sent="Wed, 12 Aug 2015 14:57:52 +0100" -->
<!-- isosent="20150812135752" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7" -->
<!-- id="87vbckehi7.fsf_at_pc102091.liv.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="434F2BB0AF80484CA04DE0D8C0738BF293EF3980_at_cshsmsgmbx02.CSMC.EDU" -->
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
<strong>Subject:</strong> Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-12 09:57:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27437.php">Gilles Gouaillardet: "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
<li><strong>Previous message:</strong> <a href="27435.php">Dave Love: "Re: [OMPI users] What Red Hat Enterprise/CentOS NUMA libraries are recommended/required for OpenMPI?"</a>
<li><strong>In reply to:</strong> <a href="27433.php">Lane, William: "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27437.php">Gilles Gouaillardet: "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
<li><strong>Reply:</strong> <a href="27437.php">Gilles Gouaillardet: "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&quot;Lane, William&quot; &lt;William.Lane_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; I can successfully run my OpenMPI 1.8.7 jobs outside of Son-of-Gridengine but not via qrsh. We're
</span><br>
<span class="quotelev1">&gt; using CentOS 6.3 and a heterogeneous cluster of hyperthreaded and non-hyperthreaded blades
</span><br>
<span class="quotelev1">&gt; and x3550 chassis. OpenMPI 1.8.7 has been built w/the debug switch as well.
</span><br>
<p>I think you want to explain exactly why you need this world of pain.  It
<br>
seems unlikely that MPI programs will run efficiently in it.  Our Intel
<br>
nodes mostly have hyperthreading on in BIOS -- or what passes for BIOS
<br>
on them -- but disabled at startup, and we only run MPI across identical
<br>
nodes in the heterogeneous system.
<br>
<p><span class="quotelev1">&gt; Here's my latest errors:
</span><br>
<span class="quotelev1">&gt; qrsh -V -now yes -pe mpi 209 mpirun -np 209 -display-devel-map --prefix /hpc/apps/mpi/openmpi/1.8.7/ --mca btl ^sm --hetero-nodes --bind-to core /hpc/home/lanew/mpi/openmpi/ProcessColors3
</span><br>
<p>[What does --hetero-nodes do?  It's undocumented as far as I can tell.]
<br>
<p><span class="quotelev1">&gt; error: executing task of job 211298 failed: execution daemon on host &quot;csclprd3-0-4&quot; didn't accept task
</span><br>
<span class="quotelev1">&gt; error: executing task of job 211298 failed: execution daemon on host &quot;csclprd3-4-1&quot; didn't accept task
</span><br>
<p>So you need to find out why that was (probably lack of slots on the exec
<br>
host, which might be explained in the execd messages).
<br>
<p><span class="quotelev1">&gt; [...]
</span><br>
<p><span class="quotelev1">&gt; NOTE: the hosts that &quot;didn't accept task&quot; were different in two different runs but the errors were the same.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's the definition of the mpi Parallel Environment on our Son-of-Gridengine cluster:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; pe_name            mpi
</span><br>
<span class="quotelev1">&gt; slots              9999
</span><br>
<span class="quotelev1">&gt; user_lists         NONE
</span><br>
<span class="quotelev1">&gt; xuser_lists        NONE
</span><br>
<span class="quotelev1">&gt; start_proc_args    /opt/sge/mpi/startmpi.sh $pe_hostfile
</span><br>
<span class="quotelev1">&gt; stop_proc_args     /opt/sge/mpi/stopmpi.sh
</span><br>
<p>Why are those two not NONE? 
<br>
<p><span class="quotelev1">&gt; allocation_rule    $fill_up
</span><br>
<p>As I said, that doesn't seem wise (unless you use -l exclusive).
<br>
<p><span class="quotelev1">&gt; control_slaves     FALSE
</span><br>
<span class="quotelev1">&gt; job_is_first_task  TRUE
</span><br>
<span class="quotelev1">&gt; urgency_slots      min
</span><br>
<span class="quotelev1">&gt; accounting_summary TRUE
</span><br>
<span class="quotelev1">&gt; qsort_args         NONE
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Qsort_args is set to NONE, but it's supposed to be set to TRUE right?
</span><br>
<p>No see sge_pe(5).  (I think the text I supplied for the FAQ is accurate,
<br>
but reuti might confirm if he's reading this.)
<br>
<p><span class="quotelev1">&gt; -Bill L.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I can run my OpenMPI 1.8.7 jobs outside of Son-of-Gridengine w/no issues it has to be Son-of-Gridengine that's
</span><br>
<span class="quotelev1">&gt; the issue right?
</span><br>
<p>I don't see any evidence of an SGE bug, if that's what you mean, but
<br>
clearly you have a problem if execds won't accept the jobs, and this
<br>
isn't the place to discuss it.  I asked about SGE core binding, and it's
<br>
presumably also relevant how slots are defined on the compute nodes, but
<br>
I'd just say &quot;Don't do that&quot; without a pressing reason.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27437.php">Gilles Gouaillardet: "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
<li><strong>Previous message:</strong> <a href="27435.php">Dave Love: "Re: [OMPI users] What Red Hat Enterprise/CentOS NUMA libraries are recommended/required for OpenMPI?"</a>
<li><strong>In reply to:</strong> <a href="27433.php">Lane, William: "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27437.php">Gilles Gouaillardet: "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
<li><strong>Reply:</strong> <a href="27437.php">Gilles Gouaillardet: "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
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
