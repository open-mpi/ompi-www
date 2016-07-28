<?
$subject_val = "Re: [OMPI users] OMPI 1.4.x ignores hostfile and launches all the processes on just one node in Grid Engine";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  7 07:36:51 2010" -->
<!-- isoreceived="20100407113651" -->
<!-- sent="Wed, 07 Apr 2010 08:36:44 -0300" -->
<!-- isosent="20100407113644" -->
<!-- name="Serge" -->
<!-- email="skhan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI 1.4.x ignores hostfile and launches all the processes on just one node in Grid Engine" -->
<!-- id="4BBC6E4C.7090807_at_ap.smu.ca" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Serge (<em>skhan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-07 07:36:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12576.php">Tim Prince: "Re: [OMPI users] OpenMPI multithreaded performance"</a>
<li><strong>Previous message:</strong> <a href="12574.php">Piero Lanucara: "[OMPI users] OpenMPI multithreaded performance"</a>
<li><strong>In reply to:</strong> <a href="12561.php">Serge: "[OMPI users] OMPI 1.4.x ignores hostfile and launches all the processes on just one node in Grid Engine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12580.php">Ralph Castain: "Re: [OMPI users] OMPI 1.4.x ignores hostfile and launches all the processes on just one node in Grid Engine"</a>
<li><strong>Reply:</strong> <a href="12580.php">Ralph Castain: "Re: [OMPI users] OMPI 1.4.x ignores hostfile and launches all the processes on just one node in Grid Engine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1"> &gt; If you run your cmd with the hostfile option and add
</span><br>
<span class="quotelev1"> &gt; --display-allocation, what does it say?
</span><br>
<p>Thank you, Ralph.
<br>
<p>This is the command I used inside my submission script:
<br>
<p>&nbsp;&nbsp;&nbsp;mpirun --display-allocation -np 4 -hostfile hosts ./program
<br>
<p>And this is the output I got.
<br>
<p>&nbsp;&nbsp;Data for node: Name: node03  Num slots: 4    Max slots: 0
<br>
&nbsp;&nbsp;Data for node: Name: node02  Num slots: 4    Max slots: 0
<br>
&nbsp;&nbsp;Data for node: Name: node04  Num slots: 4    Max slots: 0
<br>
&nbsp;&nbsp;Data for node: Name: node01  Num slots: 4    Max slots: 0
<br>
<p>If I run the same mpirun command on the cluster head node &quot;clhead&quot; then 
<br>
this is what I get:
<br>
<p>&nbsp;&nbsp;Data for node: Name: clhead  Num slots: 0    Max slots: 0
<br>
&nbsp;&nbsp;Data for node: Name: node01  Num slots: 1    Max slots: 0
<br>
&nbsp;&nbsp;Data for node: Name: node02  Num slots: 1    Max slots: 0
<br>
&nbsp;&nbsp;Data for node: Name: node03  Num slots: 1    Max slots: 0
<br>
&nbsp;&nbsp;Data for node: Name: node04  Num slots: 1    Max slots: 0
<br>
<p>The content of the 'hosts' file:
<br>
<p>&nbsp;&nbsp;node01 slots=1
<br>
&nbsp;&nbsp;node02 slots=1
<br>
&nbsp;&nbsp;node03 slots=1
<br>
&nbsp;&nbsp;node04 slots=1
<br>
<p>= Serge
<br>
<p><p>On Apr 6, 2010, at 12:18 PM, Serge wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OpenMPI integrates with Sun Grid Engine really well, and one does not 
</span><br>
<span class="quotelev1">&gt; need to specify any parameters for the mpirun command to launch the 
</span><br>
<span class="quotelev1">&gt; processes on the compute nodes, that is having in the submission script 
</span><br>
<span class="quotelev1">&gt; &quot;mpirun ./program&quot; is enough; there is no need for &quot;-np XX&quot; or 
</span><br>
<span class="quotelev1">&gt; &quot;-hostfile file_name&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, there are cases when being able to specify the hostfile is 
</span><br>
<span class="quotelev1">&gt; important (hybrid jobs, users with MPICH jobs, etc.). For example, with 
</span><br>
<span class="quotelev1">&gt; Grid Engine I can request four 4-core nodes, that is total of 16 slots. 
</span><br>
<span class="quotelev1">&gt; But I also want to specify how to distribute processes on the nodes, so 
</span><br>
<span class="quotelev1">&gt; I create the file 'hosts'
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
<span class="quotelev1">&gt; With Open MPI 1.2.x everything worked properly, meaning that Open MPI 
</span><br>
<span class="quotelev1">&gt; could count the number of slots specified in the 'hosts' file - 4 (i.e. 
</span><br>
<span class="quotelev1">&gt; effectively supplying the mpirun command with the -np parameter), as 
</span><br>
<span class="quotelev1">&gt; well as properly distribute processes on the compute nodes (one process 
</span><br>
<span class="quotelev1">&gt; per host).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's different with Open MPI 1.4.1. It cannot process the 'hosts' file 
</span><br>
<span class="quotelev1">&gt; properly at all. All the processes get launched on just one node -- the 
</span><br>
<span class="quotelev1">&gt; shepherd host.
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
<span class="quotelev1">&gt; meaning 2 slots on each node. Open MPI 1.2.x would handle that with no 
</span><br>
<span class="quotelev1">&gt; problem, however Open MPI 1.4.x would not.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem appears with OMPI 1.4.1, SGE 6.1u6. It was also tested with 
</span><br>
<span class="quotelev1">&gt; OMPI 1.3.4 and SGE 6.2u4.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's important to notice that if the mpirun command is run 
</span><br>
<span class="quotelev1">&gt; interactively, not from inside the Grid Engine script, then it 
</span><br>
<span class="quotelev1">&gt; interprets the content of the host file just fine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am wondering what changed from OMPI 1.2.x to OMPI 1.4.x that prevents 
</span><br>
<span class="quotelev1">&gt; expected behavior, and is it possible to get it from OMPI 1.4.x by, say, 
</span><br>
<span class="quotelev1">&gt; tuning some parameters?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; = Serge
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12576.php">Tim Prince: "Re: [OMPI users] OpenMPI multithreaded performance"</a>
<li><strong>Previous message:</strong> <a href="12574.php">Piero Lanucara: "[OMPI users] OpenMPI multithreaded performance"</a>
<li><strong>In reply to:</strong> <a href="12561.php">Serge: "[OMPI users] OMPI 1.4.x ignores hostfile and launches all the processes on just one node in Grid Engine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12580.php">Ralph Castain: "Re: [OMPI users] OMPI 1.4.x ignores hostfile and launches all the processes on just one node in Grid Engine"</a>
<li><strong>Reply:</strong> <a href="12580.php">Ralph Castain: "Re: [OMPI users] OMPI 1.4.x ignores hostfile and launches all the processes on just one node in Grid Engine"</a>
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
