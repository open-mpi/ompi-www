<?
$subject_val = "Re: [OMPI users] OMPI 1.4.x ignores hostfile and launches all the processes on just one node in Grid Engine";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  6 14:49:39 2010" -->
<!-- isoreceived="20100406184939" -->
<!-- sent="Tue, 6 Apr 2010 12:49:30 -0600" -->
<!-- isosent="20100406184930" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI 1.4.x ignores hostfile and launches all the processes on just one node in Grid Engine" -->
<!-- id="47344DD5-30E0-4025-878F-B6E3F4BC16CF_at_open-mpi.org" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-06 14:49:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12564.php">Jeff Squyres: "Re: [OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Previous message:</strong> <a href="12562.php">Richard Treumann: "Re: [OMPI users] Hide Abort output"</a>
<li><strong>In reply to:</strong> <a href="12561.php">Serge: "[OMPI users] OMPI 1.4.x ignores hostfile and launches all the processes on just one node in Grid Engine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12575.php">Serge: "Re: [OMPI users] OMPI 1.4.x ignores hostfile and launches all the processes on just one node in Grid Engine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you run your cmd with the hostfile option and add --display-allocation, what does it say?
<br>
<p>On Apr 6, 2010, at 12:18 PM, Serge wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OpenMPI integrates with Sun Grid Engine really well, and one does not need to specify any parameters for the mpirun command to launch the processes on the compute nodes, that is having in the submission script &quot;mpirun ./program&quot; is enough; there is no need for &quot;-np XX&quot; or &quot;-hostfile file_name&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, there are cases when being able to specify the hostfile is important (hybrid jobs, users with MPICH jobs, etc.). For example, with Grid Engine I can request four 4-core nodes, that is total of 16 slots. But I also want to specify how to distribute processes on the nodes, so I create the file 'hosts'
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With Open MPI 1.2.x everything worked properly, meaning that Open MPI could count the number of slots specified in the 'hosts' file - 4 (i.e. effectively supplying the mpirun command with the -np parameter), as well as properly distribute processes on the compute nodes (one process per host).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's different with Open MPI 1.4.1. It cannot process the 'hosts' file properly at all. All the processes get launched on just one node -- the shepherd host.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The format of the 'hosts' file does not matter. It can be, say
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; node01
</span><br>
<span class="quotelev1">&gt; node01
</span><br>
<span class="quotelev1">&gt; node02
</span><br>
<span class="quotelev1">&gt; node02
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; meaning 2 slots on each node. Open MPI 1.2.x would handle that with no problem, however Open MPI 1.4.x would not.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem appears with OMPI 1.4.1, SGE 6.1u6. It was also tested with OMPI 1.3.4 and SGE 6.2u4.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's important to notice that if the mpirun command is run interactively, not from inside the Grid Engine script, then it interprets the content of the host file just fine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am wondering what changed from OMPI 1.2.x to OMPI 1.4.x that prevents expected behavior, and is it possible to get it from OMPI 1.4.x by, say, tuning some parameters?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; = Serge
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
<li><strong>Next message:</strong> <a href="12564.php">Jeff Squyres: "Re: [OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Previous message:</strong> <a href="12562.php">Richard Treumann: "Re: [OMPI users] Hide Abort output"</a>
<li><strong>In reply to:</strong> <a href="12561.php">Serge: "[OMPI users] OMPI 1.4.x ignores hostfile and launches all the processes on just one node in Grid Engine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12575.php">Serge: "Re: [OMPI users] OMPI 1.4.x ignores hostfile and launches all the processes on just one node in Grid Engine"</a>
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
