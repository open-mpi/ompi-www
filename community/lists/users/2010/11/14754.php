<?
$subject_val = "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Nov 13 10:04:59 2010" -->
<!-- isoreceived="20101113150459" -->
<!-- sent="Sat, 13 Nov 2010 08:04:49 -0700" -->
<!-- isosent="20101113150449" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts" -->
<!-- id="8D5EFBEC-3423-4B71-B713-BF9D3B736C7D_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="671D8819-015E-4369-AC4C-18F180E1E153_at_warwick.ac.uk" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-13 10:04:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14755.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Previous message:</strong> <a href="14753.php">Chris Jewell: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>In reply to:</strong> <a href="14753.php">Chris Jewell: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14755.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am not a grid engine expert by any means, but I do know a bit about OMPI's internals for binding processes.
<br>
<p>Here is what we do:
<br>
<p>1. mpirun gets its list of hosts from the environment, or from your machine file. It then maps the processes across the machines.
<br>
<p>2. mpirun launches a daemon on each node that will host mpi processes. This launch is done with --inherit set.
<br>
<p>3. each daemon &quot;senses&quot; the local binding constraint by querying the OS to get a list of processors available to it on this node.
<br>
<p>4. each daemon spawns its local mpi processes, directly telling the OS to bind each process to one of the available processors. The processors are selected on a round robin basis determined by their relative MPI rank. So you should never get two processes assigned to the same processor if adequate processors are available. If you are, then that is an OMPI bug.
<br>
<p>So SGE is responsible for setting up the global binding (i.e., telling each SGE node how many processors we are allowed to use on that node), and then OMPI uses that info to set the binding on the individual procs via the local OS.
<br>
<p>The key thing to understand here is that SGE has zero visibility or knowledge of the individual MPI procs. All SGE ever sees is mpirun and its daemons.
<br>
<p>HTH
<br>
Ralph
<br>
<p>On Nov 13, 2010, at 7:39 AM, Chris Jewell wrote:
<br>
<p><span class="quotelev1">&gt; Hi Dave, Reuti,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry for kicking off this thread, and then disappearing.  I've been away for a bit.  Anyway, Dave, I'm glad you experienced the same issue as I had with my installation of SGE 6.2u5 and OpenMPI with core binding -- namely that with 'qsub -pe openmpi 8 -binding set linear:1 &lt;myscript.com&gt;', if two or more of the parallel processes get scheduled to the same execution node, then the processes end up being bound to the same core.  Not good!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've been playing around quite a bit trying to understand this issue, and ended up on the GE dev list:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://gridengine.sunsource.net/ds/viewMessage.do?dsForumId=39&amp;dsMessageId=285878">http://gridengine.sunsource.net/ds/viewMessage.do?dsForumId=39&amp;dsMessageId=285878</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It seems that most people expect that calls to 'qrsh -inherit' (that I assume OpenMPI uses to bind parallel processes to reserved GE slots) activates a separate binding.  This does not appear to be the case.  I *was* hoping that using -binding pe linear:1 might enable me to write a script that read the pe_hostfile and created a machine file for OpenMPI, but this fails as GE does not appear to give information as to which cores are unbound, only the number required.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, for now, my solution has been to use a JSV to remove core binding for the MPI jobs (but retain it for serial and SMP jobs).  Any more ideas??
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Chris
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (PS. Dave: how is my alma mater these days??)
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Dr Chris Jewell
</span><br>
<span class="quotelev1">&gt; Department of Statistics
</span><br>
<span class="quotelev1">&gt; University of Warwick
</span><br>
<span class="quotelev1">&gt; Coventry
</span><br>
<span class="quotelev1">&gt; CV4 7AL
</span><br>
<span class="quotelev1">&gt; UK
</span><br>
<span class="quotelev1">&gt; Tel: +44 (0)24 7615 0778
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="14755.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Previous message:</strong> <a href="14753.php">Chris Jewell: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>In reply to:</strong> <a href="14753.php">Chris Jewell: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14755.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
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
