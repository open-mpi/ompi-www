<?
$subject_val = "Re: [OMPI users] OMPI 1.4.x ignores hostfile and launches all the processes on just one node in Grid Engine";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  7 09:31:50 2010" -->
<!-- isoreceived="20100407133150" -->
<!-- sent="Wed, 07 Apr 2010 14:31:32 +0100" -->
<!-- isosent="20100407133132" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI 1.4.x ignores hostfile and launches all the processes on just one node in Grid Engine" -->
<!-- id="87tyrngzij.fsf_at_liv.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4BBB7ADA.4010100_at_ap.smu.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] OMPI 1.4.x ignores hostfile and launches all the processes on just one node in Grid Engine<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-07 09:31:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12579.php">Serge: "Re: [OMPI users] OMPI 1.4.x ignores hostfile and launches all the processes on just one node in Grid Engine"</a>
<li><strong>Previous message:</strong> <a href="12577.php">Piero Lanucara: "Re: [OMPI users] OpenMPI multithreaded performance"</a>
<li><strong>In reply to:</strong> <a href="12561.php">Serge: "[OMPI users] OMPI 1.4.x ignores hostfile and launches all the processes on just one node in Grid Engine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12579.php">Serge: "Re: [OMPI users] OMPI 1.4.x ignores hostfile and launches all the processes on just one node in Grid Engine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Serge &lt;skhan_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; However, there are cases when being able to specify the hostfile is
</span><br>
<span class="quotelev1">&gt; important (hybrid jobs, users with MPICH jobs, etc.).
</span><br>
<p>[I don't understand what MPICH has to do with it.]
<br>
<p><span class="quotelev1">&gt; For example,
</span><br>
<span class="quotelev1">&gt; with Grid Engine I can request four 4-core nodes, that is total of 16
</span><br>
<span class="quotelev1">&gt; slots. But I also want to specify how to distribute processes on the
</span><br>
<span class="quotelev1">&gt; nodes, so I create the file 'hosts'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; node01 slots=1
</span><br>
<span class="quotelev1">&gt; node02 slots=1
</span><br>
<span class="quotelev1">&gt; node03 slots=1
</span><br>
<span class="quotelev1">&gt; node04 slots=1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and modify the line in the submission script to:
</span><br>
<span class="quotelev1">&gt; mpirun -hostfile hosts ./program
</span><br>
<p>Regardless of any open-mpi bug, I'd have thought it was easier just to
<br>
use -npernode in that case.  What's the problem with that?  It seems to
<br>
me best generally to control the distribution of processes with mpirun
<br>
on the SGE-allocated nodes than to concoct host files as we used to do
<br>
here, e.g. to get -byslot v. -bynode behaviour (or vice versa).
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12579.php">Serge: "Re: [OMPI users] OMPI 1.4.x ignores hostfile and launches all the processes on just one node in Grid Engine"</a>
<li><strong>Previous message:</strong> <a href="12577.php">Piero Lanucara: "Re: [OMPI users] OpenMPI multithreaded performance"</a>
<li><strong>In reply to:</strong> <a href="12561.php">Serge: "[OMPI users] OMPI 1.4.x ignores hostfile and launches all the processes on just one node in Grid Engine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12579.php">Serge: "Re: [OMPI users] OMPI 1.4.x ignores hostfile and launches all the processes on just one node in Grid Engine"</a>
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
