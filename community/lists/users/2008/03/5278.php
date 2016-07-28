<?
$subject_val = "Re: [OMPI users] SLURM and OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 27 08:42:01 2008" -->
<!-- isoreceived="20080327124201" -->
<!-- sent="Thu, 27 Mar 2008 13:41:52 +0100" -->
<!-- isosent="20080327124152" -->
<!-- name="Werner Augustin" -->
<!-- email="Werner.Augustin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SLURM and OpenMPI" -->
<!-- id="20080327134152.1f74bf62_at_notebook" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="A14F91CBBBA3014385A806944C9BEF1BAE7DF7_at_maildrd1.nyc.deshaw.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] SLURM and OpenMPI<br>
<strong>From:</strong> Werner Augustin (<em>Werner.Augustin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-27 08:41:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5279.php">Werner Augustin: "Re: [OMPI users] SLURM and OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="5277.php">slimtimmy_at_[hidden]: "Re: [OMPI users] communicating with the caller"</a>
<li><strong>In reply to:</strong> <a href="5254.php">Sacerdoti, Federico: "Re: [OMPI users] SLURM and OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5279.php">Werner Augustin: "Re: [OMPI users] SLURM and OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, 21 Mar 2008 17:41:28 -0400
<br>
&quot;Sacerdoti, Federico&quot; &lt;Federico.Sacerdoti_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph, we wrote a launcher for mvapich that uses srun to launch but
</span><br>
<span class="quotelev1">&gt; keeps tight control of where processes are started. The way we did it
</span><br>
<span class="quotelev1">&gt; was to force srun to launch a single process on a particular node. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The launcher calls many of these:
</span><br>
<span class="quotelev1">&gt;  srun --jobid $JOBID -N 1 -n 1 -w host005 CMD ARGS
</span><br>
<p>My work-around will be an mpirun which looks something like this:
<br>
<p>#!/bin/bash
<br>
<p>hostfile=`mktemp` || exit 1
<br>
<p>srun /bin/hostname | sort | uniq -c | sed -e 's/ *\([0-9]\+\) \+\(.\+\)/\2 slots=\1/' &gt; $hostfile
<br>
<p>/usr/bin/mpirun.openmpi-1.2.4 --hostfile $hostfile $@
<br>
rm $hostfile
<br>
<p><p>i.e. we are collecting all nodes with &quot;srun /bin/hostname&quot;, sort and
<br>
count them and bring them into the format of a hostfile:
<br>
<p>node001 slots=4
<br>
node002 slots=2
<br>
...
<br>
<p><p>But that's definitely not the API to slurm, Ralph was talking about :-)
<br>
<p><p>Werner
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5279.php">Werner Augustin: "Re: [OMPI users] SLURM and OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="5277.php">slimtimmy_at_[hidden]: "Re: [OMPI users] communicating with the caller"</a>
<li><strong>In reply to:</strong> <a href="5254.php">Sacerdoti, Federico: "Re: [OMPI users] SLURM and OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5279.php">Werner Augustin: "Re: [OMPI users] SLURM and OpenMPI"</a>
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
