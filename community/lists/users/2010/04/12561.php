<?
$subject_val = "[OMPI users] OMPI 1.4.x ignores hostfile and launches all the processes on just one node in Grid Engine";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  6 14:18:14 2010" -->
<!-- isoreceived="20100406181814" -->
<!-- sent="Tue, 06 Apr 2010 15:18:02 -0300" -->
<!-- isosent="20100406181802" -->
<!-- name="Serge" -->
<!-- email="skhan_at_[hidden]" -->
<!-- subject="[OMPI users] OMPI 1.4.x ignores hostfile and launches all the processes on just one node in Grid Engine" -->
<!-- id="4BBB7ADA.4010100_at_ap.smu.ca" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] OMPI 1.4.x ignores hostfile and launches all the processes on just one node in Grid Engine<br>
<strong>From:</strong> Serge (<em>skhan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-06 14:18:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12562.php">Richard Treumann: "Re: [OMPI users] Hide Abort output"</a>
<li><strong>Previous message:</strong> <a href="12560.php">Oliver Geisler: "Re: [OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12563.php">Ralph Castain: "Re: [OMPI users] OMPI 1.4.x ignores hostfile and launches all the processes on just one node in Grid Engine"</a>
<li><strong>Reply:</strong> <a href="12563.php">Ralph Castain: "Re: [OMPI users] OMPI 1.4.x ignores hostfile and launches all the processes on just one node in Grid Engine"</a>
<li><strong>Reply:</strong> <a href="12575.php">Serge: "Re: [OMPI users] OMPI 1.4.x ignores hostfile and launches all the processes on just one node in Grid Engine"</a>
<li><strong>Reply:</strong> <a href="12578.php">Dave Love: "Re: [OMPI users] OMPI 1.4.x ignores hostfile and launches all the processes on just one node in Grid Engine"</a>
<li><strong>Reply:</strong> <a href="12579.php">Serge: "Re: [OMPI users] OMPI 1.4.x ignores hostfile and launches all the processes on just one node in Grid Engine"</a>
<li><strong>Maybe reply:</strong> <a href="12586.php">Serge: "Re: [OMPI users] OMPI 1.4.x ignores hostfile and launches all the processes on just one node in Grid Engine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>OpenMPI integrates with Sun Grid Engine really well, and one does not 
<br>
need to specify any parameters for the mpirun command to launch the 
<br>
processes on the compute nodes, that is having in the submission script 
<br>
&quot;mpirun ./program&quot; is enough; there is no need for &quot;-np XX&quot; or 
<br>
&quot;-hostfile file_name&quot;.
<br>
<p>However, there are cases when being able to specify the hostfile is 
<br>
important (hybrid jobs, users with MPICH jobs, etc.). For example, with 
<br>
Grid Engine I can request four 4-core nodes, that is total of 16 slots. 
<br>
But I also want to specify how to distribute processes on the nodes, so 
<br>
I create the file 'hosts'
<br>
<p>node01 slots=1
<br>
node02 slots=1
<br>
node03 slots=1
<br>
node04 slots=1
<br>
<p>and modify the line in the submission script to:
<br>
mpirun -hostfile hosts ./program
<br>
<p>With Open MPI 1.2.x everything worked properly, meaning that Open MPI 
<br>
could count the number of slots specified in the 'hosts' file - 4 (i.e. 
<br>
effectively supplying the mpirun command with the -np parameter), as 
<br>
well as properly distribute processes on the compute nodes (one process 
<br>
per host).
<br>
<p>It's different with Open MPI 1.4.1. It cannot process the 'hosts' file 
<br>
properly at all. All the processes get launched on just one node -- the 
<br>
shepherd host.
<br>
<p>The format of the 'hosts' file does not matter. It can be, say
<br>
<p>node01
<br>
node01
<br>
node02
<br>
node02
<br>
<p>meaning 2 slots on each node. Open MPI 1.2.x would handle that with no 
<br>
problem, however Open MPI 1.4.x would not.
<br>
<p>The problem appears with OMPI 1.4.1, SGE 6.1u6. It was also tested with 
<br>
OMPI 1.3.4 and SGE 6.2u4.
<br>
<p>It's important to notice that if the mpirun command is run 
<br>
interactively, not from inside the Grid Engine script, then it 
<br>
interprets the content of the host file just fine.
<br>
<p>I am wondering what changed from OMPI 1.2.x to OMPI 1.4.x that prevents 
<br>
expected behavior, and is it possible to get it from OMPI 1.4.x by, say, 
<br>
tuning some parameters?
<br>
<p>= Serge
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12562.php">Richard Treumann: "Re: [OMPI users] Hide Abort output"</a>
<li><strong>Previous message:</strong> <a href="12560.php">Oliver Geisler: "Re: [OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12563.php">Ralph Castain: "Re: [OMPI users] OMPI 1.4.x ignores hostfile and launches all the processes on just one node in Grid Engine"</a>
<li><strong>Reply:</strong> <a href="12563.php">Ralph Castain: "Re: [OMPI users] OMPI 1.4.x ignores hostfile and launches all the processes on just one node in Grid Engine"</a>
<li><strong>Reply:</strong> <a href="12575.php">Serge: "Re: [OMPI users] OMPI 1.4.x ignores hostfile and launches all the processes on just one node in Grid Engine"</a>
<li><strong>Reply:</strong> <a href="12578.php">Dave Love: "Re: [OMPI users] OMPI 1.4.x ignores hostfile and launches all the processes on just one node in Grid Engine"</a>
<li><strong>Reply:</strong> <a href="12579.php">Serge: "Re: [OMPI users] OMPI 1.4.x ignores hostfile and launches all the processes on just one node in Grid Engine"</a>
<li><strong>Maybe reply:</strong> <a href="12586.php">Serge: "Re: [OMPI users] OMPI 1.4.x ignores hostfile and launches all the processes on just one node in Grid Engine"</a>
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
