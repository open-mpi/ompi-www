<?
$subject_val = "Re: [OMPI users] OMPI 1.4.x ignores hostfile and launches all the processes on just one node in Grid Engine";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  7 10:47:17 2010" -->
<!-- isoreceived="20100407144717" -->
<!-- sent="Wed, 7 Apr 2010 08:47:07 -0600" -->
<!-- isosent="20100407144707" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI 1.4.x ignores hostfile and launches all the processes on just one node in Grid Engine" -->
<!-- id="C5ABBC78-34AF-43F5-9953-353CE5C2E71F_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4BBC6E4C.7090807_at_ap.smu.ca" -->
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
<strong>Date:</strong> 2010-04-07 10:47:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12581.php">Cole, Derek E: "Re: [OMPI users] Best way to reduce 3D array"</a>
<li><strong>Previous message:</strong> <a href="12579.php">Serge: "Re: [OMPI users] OMPI 1.4.x ignores hostfile and launches all the processes on just one node in Grid Engine"</a>
<li><strong>In reply to:</strong> <a href="12575.php">Serge: "Re: [OMPI users] OMPI 1.4.x ignores hostfile and launches all the processes on just one node in Grid Engine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12583.php">Serge: "Re: [OMPI users] OMPI 1.4.x ignores hostfile and launches all the processes on just one node in Grid Engine"</a>
<li><strong>Reply:</strong> <a href="12583.php">Serge: "Re: [OMPI users] OMPI 1.4.x ignores hostfile and launches all the processes on just one node in Grid Engine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I should have read your original note more closely and I would have spotted the issue. How a hostfile is used changed between OMPI 1.2 and the 1.3 (and above) releases per user requests. It was actually the SGE side of the community that led the change :-)
<br>
<p>You can get a full description of how OMPI uses hostfiles in two ways:
<br>
<p>* from the man pages:  man orte_hosts
<br>
<p>* from the wiki: <a href="https://svn.open-mpi.org/trac/ompi/wiki/HostFilePlan">https://svn.open-mpi.org/trac/ompi/wiki/HostFilePlan</a>
<br>
<p>As far as I can tell, OMPI 1.4.x is behaving per that specification. You get four slots on your submission script because that is what SGE allocated to you. The hostfile filters that when launching, using the provided info to tell it how many slots on each node within the allocation to use for that application.
<br>
<p>I suggest reading the above documentation to see how OMPI uses hostfiles, and then let us know if you have any questions, concerns, or see a deviation from the described behavior.
<br>
<p>HTH
<br>
Ralph
<br>
<p>On Apr 7, 2010, at 5:36 AM, Serge wrote:
<br>
<p><span class="quotelev2">&gt; &gt; If you run your cmd with the hostfile option and add
</span><br>
<span class="quotelev2">&gt; &gt; --display-allocation, what does it say?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you, Ralph.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is the command I used inside my submission script:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  mpirun --display-allocation -np 4 -hostfile hosts ./program
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And this is the output I got.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Data for node: Name: node03  Num slots: 4    Max slots: 0
</span><br>
<span class="quotelev1">&gt; Data for node: Name: node02  Num slots: 4    Max slots: 0
</span><br>
<span class="quotelev1">&gt; Data for node: Name: node04  Num slots: 4    Max slots: 0
</span><br>
<span class="quotelev1">&gt; Data for node: Name: node01  Num slots: 4    Max slots: 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I run the same mpirun command on the cluster head node &quot;clhead&quot; then this is what I get:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Data for node: Name: clhead  Num slots: 0    Max slots: 0
</span><br>
<span class="quotelev1">&gt; Data for node: Name: node01  Num slots: 1    Max slots: 0
</span><br>
<span class="quotelev1">&gt; Data for node: Name: node02  Num slots: 1    Max slots: 0
</span><br>
<span class="quotelev1">&gt; Data for node: Name: node03  Num slots: 1    Max slots: 0
</span><br>
<span class="quotelev1">&gt; Data for node: Name: node04  Num slots: 1    Max slots: 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The content of the 'hosts' file:
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
<span class="quotelev1">&gt; = Serge
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 6, 2010, at 12:18 PM, Serge wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI integrates with Sun Grid Engine really well, and one does not need to specify any parameters for the mpirun command to launch the processes on the compute nodes, that is having in the submission script &quot;mpirun ./program&quot; is enough; there is no need for &quot;-np XX&quot; or &quot;-hostfile file_name&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; However, there are cases when being able to specify the hostfile is important (hybrid jobs, users with MPICH jobs, etc.). For example, with Grid Engine I can request four 4-core nodes, that is total of 16 slots. But I also want to specify how to distribute processes on the nodes, so I create the file 'hosts'
</span><br>
<span class="quotelev2">&gt;&gt; node01 slots=1
</span><br>
<span class="quotelev2">&gt;&gt; node02 slots=1
</span><br>
<span class="quotelev2">&gt;&gt; node03 slots=1
</span><br>
<span class="quotelev2">&gt;&gt; node04 slots=1
</span><br>
<span class="quotelev2">&gt;&gt; and modify the line in the submission script to:
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -hostfile hosts ./program
</span><br>
<span class="quotelev2">&gt;&gt; With Open MPI 1.2.x everything worked properly, meaning that Open MPI could count the number of slots specified in the 'hosts' file - 4 (i.e. effectively supplying the mpirun command with the -np parameter), as well as properly distribute processes on the compute nodes (one process per host).
</span><br>
<span class="quotelev2">&gt;&gt; It's different with Open MPI 1.4.1. It cannot process the 'hosts' file properly at all. All the processes get launched on just one node -- the shepherd host.
</span><br>
<span class="quotelev2">&gt;&gt; The format of the 'hosts' file does not matter. It can be, say
</span><br>
<span class="quotelev2">&gt;&gt; node01
</span><br>
<span class="quotelev2">&gt;&gt; node01
</span><br>
<span class="quotelev2">&gt;&gt; node02
</span><br>
<span class="quotelev2">&gt;&gt; node02
</span><br>
<span class="quotelev2">&gt;&gt; meaning 2 slots on each node. Open MPI 1.2.x would handle that with no problem, however Open MPI 1.4.x would not.
</span><br>
<span class="quotelev2">&gt;&gt; The problem appears with OMPI 1.4.1, SGE 6.1u6. It was also tested with OMPI 1.3.4 and SGE 6.2u4.
</span><br>
<span class="quotelev2">&gt;&gt; It's important to notice that if the mpirun command is run interactively, not from inside the Grid Engine script, then it interprets the content of the host file just fine.
</span><br>
<span class="quotelev2">&gt;&gt; I am wondering what changed from OMPI 1.2.x to OMPI 1.4.x that prevents expected behavior, and is it possible to get it from OMPI 1.4.x by, say, tuning some parameters?
</span><br>
<span class="quotelev2">&gt;&gt; = Serge
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
<li><strong>Next message:</strong> <a href="12581.php">Cole, Derek E: "Re: [OMPI users] Best way to reduce 3D array"</a>
<li><strong>Previous message:</strong> <a href="12579.php">Serge: "Re: [OMPI users] OMPI 1.4.x ignores hostfile and launches all the processes on just one node in Grid Engine"</a>
<li><strong>In reply to:</strong> <a href="12575.php">Serge: "Re: [OMPI users] OMPI 1.4.x ignores hostfile and launches all the processes on just one node in Grid Engine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12583.php">Serge: "Re: [OMPI users] OMPI 1.4.x ignores hostfile and launches all the processes on just one node in Grid Engine"</a>
<li><strong>Reply:</strong> <a href="12583.php">Serge: "Re: [OMPI users] OMPI 1.4.x ignores hostfile and launches all the processes on just one node in Grid Engine"</a>
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
