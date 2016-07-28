<?
$subject_val = "[OMPI users] No output when adding host to hostfile";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  9 08:30:19 2014" -->
<!-- isoreceived="20140509123019" -->
<!-- sent="Fri, 9 May 2014 14:30:18 +0200" -->
<!-- isosent="20140509123018" -->
<!-- name="Wijnberg, Tom" -->
<!-- email="TWij_at_[hidden]" -->
<!-- subject="[OMPI users] No output when adding host to hostfile" -->
<!-- id="A210B65968E5994895DD3EAB8AC49C5F018C8CC5_at_FS22.APPLIKON.LOCAL" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] No output when adding host to hostfile<br>
<strong>From:</strong> Wijnberg, Tom (<em>TWij_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-09 08:30:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24332.php">Ralph Castain: "Re: [OMPI users] No output when adding host to hostfile"</a>
<li><strong>Previous message:</strong> <a href="24330.php">Spenser Gilliland: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24332.php">Ralph Castain: "Re: [OMPI users] No output when adding host to hostfile"</a>
<li><strong>Reply:</strong> <a href="24332.php">Ralph Castain: "Re: [OMPI users] No output when adding host to hostfile"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have encountered a problem with openmpi I can't seem to be able to
<br>
diagnose or find precedence in in the mailing-list. I have two pc's with
<br>
a fresh install of Arch linux and openmpi 1.8.1. One is a dedicated PC
<br>
and the other is a virtualbox installation. The virtualbox install is
<br>
the master and I'm able to use mpirun without a problem (compiled a
<br>
small program that prints to stdout). In and output are as follows:
<br>
<p><span class="quotelev1">&gt; $ mpirun -n 4 -hostfile mpiHosts myprogram 
</span><br>
<span class="quotelev1">&gt; hello MPI user: from process = 1 on machine=vArch, of NCPU=4 processes
</span><br>
<span class="quotelev1">&gt; hello MPI user: from process = 0 on machine=vArch, of NCPU=4 processes
</span><br>
<span class="quotelev1">&gt; hello MPI user: from process = 2 on machine=vArch, of NCPU=4 processes
</span><br>
<span class="quotelev1">&gt; hello MPI user: from  process = 3 on machine=vArch, of NCPU=4
</span><br>
processes
<br>
<p>Running programs on a single machine is not a problem. Also I'm able to
<br>
log into both machines using ssh without the need for a password so
<br>
communication between the machines should be oke. However when I add the
<br>
second host to the hostfile the I get no more feedback. What I mean with
<br>
this is that I get the following.
<br>
<p><span class="quotelev1">&gt; $ echo &quot;10.5.10.224 slots=4&quot; &gt;&gt; mpiHosts $ mpirun -n 8 -hostfile 
</span><br>
<span class="quotelev1">&gt; $ mpirun -n 4 -hostfile mpiHosts myprogram 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>No output is returned. I'm not sure if this is intended behavior but it
<br>
seems incorrect to me. Can anyone provide me with some insight as to why
<br>
I'm observing this en how I can diagnose the problem.
<br>
<p>Regards,
<br>
TWij
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24332.php">Ralph Castain: "Re: [OMPI users] No output when adding host to hostfile"</a>
<li><strong>Previous message:</strong> <a href="24330.php">Spenser Gilliland: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24332.php">Ralph Castain: "Re: [OMPI users] No output when adding host to hostfile"</a>
<li><strong>Reply:</strong> <a href="24332.php">Ralph Castain: "Re: [OMPI users] No output when adding host to hostfile"</a>
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
