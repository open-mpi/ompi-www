<?
$subject_val = "Re: [OMPI users] OMPI 1.4.x ignores hostfile and launches all the processes on just one node in Grid Engine";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  7 12:02:38 2010" -->
<!-- isoreceived="20100407160238" -->
<!-- sent="Wed, 07 Apr 2010 13:02:30 -0300" -->
<!-- isosent="20100407160230" -->
<!-- name="Serge" -->
<!-- email="skhan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI 1.4.x ignores hostfile and launches all the processes on just one node in Grid Engine" -->
<!-- id="4BBCAC96.3040200_at_ap.smu.ca" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C5ABBC78-34AF-43F5-9953-353CE5C2E71F_at_open-mpi.org" -->
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
<strong>Date:</strong> 2010-04-07 12:02:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12584.php">Gus Correa: "Re: [OMPI users] Best way to reduce 3D array"</a>
<li><strong>Previous message:</strong> <a href="12582.php">Robert Collyer: "Re: [OMPI users] Problem in remote nodes"</a>
<li><strong>In reply to:</strong> <a href="12580.php">Ralph Castain: "Re: [OMPI users] OMPI 1.4.x ignores hostfile and launches all the processes on just one node in Grid Engine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12578.php">Dave Love: "Re: [OMPI users] OMPI 1.4.x ignores hostfile and launches all the processes on just one node in Grid Engine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you, Ralph.
<br>
<p>I have read the wiki and the man pages. But I am still not sure I 
<br>
understand what is going on in my example. I cannot filter the slots 
<br>
allocated by SGE. I also think that there is a deviation from the 
<br>
behavior described on the wiki (precisely example 5 from the top in 
<br>
section &quot;NOW RUNNING FROM THE INTERACTIVE SHELL&quot;).
<br>
<p>So, below, I am copy-pasting my session, and I am asking if you could 
<br>
please follow my line of thought and correct me where I am mistaken?
<br>
<p>Here I request an interactive session with 16 slots on 4 four-core nodes 
<br>
like so:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;$ qrsh -cwd -V -pe ompi* 16 -l h_rt=10:00:00,h_vmem=2G bash
<br>
<p>Now, I show that all 16 slots are available and everything is working as 
<br>
expected with both OMPI 1.2.9 and OMPI 1.4.1:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;graphics01 $ ~/openmpi/gnu141/bin/mpirun hostname
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[graphics01:24837] ras:gridengine: JOB_ID: 89052
<br>
&nbsp;&nbsp;&nbsp;&nbsp;graphics01
<br>
&nbsp;&nbsp;&nbsp;&nbsp;graphics01
<br>
&nbsp;&nbsp;&nbsp;&nbsp;graphics01
<br>
&nbsp;&nbsp;&nbsp;&nbsp;graphics01
<br>
&nbsp;&nbsp;&nbsp;&nbsp;graphics04
<br>
&nbsp;&nbsp;&nbsp;&nbsp;graphics04
<br>
&nbsp;&nbsp;&nbsp;&nbsp;graphics02
<br>
&nbsp;&nbsp;&nbsp;&nbsp;graphics02
<br>
&nbsp;&nbsp;&nbsp;&nbsp;graphics04
<br>
&nbsp;&nbsp;&nbsp;&nbsp;graphics02
<br>
&nbsp;&nbsp;&nbsp;&nbsp;graphics04
<br>
&nbsp;&nbsp;&nbsp;&nbsp;graphics02
<br>
&nbsp;&nbsp;&nbsp;&nbsp;graphics03
<br>
&nbsp;&nbsp;&nbsp;&nbsp;graphics03
<br>
&nbsp;&nbsp;&nbsp;&nbsp;graphics03
<br>
&nbsp;&nbsp;&nbsp;&nbsp;graphics03
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;graphics01 $ ~/openmpi/gnu129/bin/mpirun hostname
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[graphics01:24849] ras:gridengine: JOB_ID: 89052
<br>
&nbsp;&nbsp;&nbsp;&nbsp;graphics01
<br>
&nbsp;&nbsp;&nbsp;&nbsp;graphics04
<br>
&nbsp;&nbsp;&nbsp;&nbsp;graphics02
<br>
&nbsp;&nbsp;&nbsp;&nbsp;graphics03
<br>
&nbsp;&nbsp;&nbsp;&nbsp;graphics01
<br>
&nbsp;&nbsp;&nbsp;&nbsp;graphics04
<br>
&nbsp;&nbsp;&nbsp;&nbsp;graphics02
<br>
&nbsp;&nbsp;&nbsp;&nbsp;graphics03
<br>
&nbsp;&nbsp;&nbsp;&nbsp;graphics01
<br>
&nbsp;&nbsp;&nbsp;&nbsp;graphics03
<br>
&nbsp;&nbsp;&nbsp;&nbsp;graphics01
<br>
&nbsp;&nbsp;&nbsp;&nbsp;graphics04
<br>
&nbsp;&nbsp;&nbsp;&nbsp;graphics03
<br>
&nbsp;&nbsp;&nbsp;&nbsp;graphics04
<br>
&nbsp;&nbsp;&nbsp;&nbsp;graphics02
<br>
&nbsp;&nbsp;&nbsp;&nbsp;graphics02
<br>
<p>Now, I want to filter the list of 16 slots by using the host file. I 
<br>
want to run 1 process per node.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;graphics01 $ cat hosts
<br>
&nbsp;&nbsp;&nbsp;&nbsp;graphics01 slots=1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;graphics02 slots=1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;graphics03 slots=1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;graphics04 slots=1
<br>
<p>And I try to use it with OMPI 1.2.9 and 1.4.1
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;graphics01 $ ~/openmpi/gnu129/bin/mpirun -hostfile hosts hostname
<br>
&nbsp;&nbsp;&nbsp;&nbsp;graphics04
<br>
&nbsp;&nbsp;&nbsp;&nbsp;graphics01
<br>
&nbsp;&nbsp;&nbsp;&nbsp;graphics03
<br>
&nbsp;&nbsp;&nbsp;&nbsp;graphics02
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;graphics01 $ ~/openmpi/gnu141/bin/mpirun -hostfile hosts hostname
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[graphics01:24903] ras:gridengine: JOB_ID: 89052
<br>
&nbsp;&nbsp;&nbsp;&nbsp;graphics01
<br>
<p>So, as you can see OMPI1.4.1 did not recognize any hosts except the 
<br>
current shepherd host.
<br>
<p>Moreover, similarly to the example down below on 
<br>
<a href="https://svn.open-mpi.org/trac/ompi/wiki/HostFilePlan">https://svn.open-mpi.org/trac/ompi/wiki/HostFilePlan</a>,
<br>
I create two other host files:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;graphics01 $ cat hosts1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;graphics02
<br>
&nbsp;&nbsp;&nbsp;&nbsp;graphics02
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;graphics01 $ cat hosts2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;graphics02 slots=2
<br>
<p>And then try to use them with both versions of Open MPI:
<br>
<p>It works properly with OMPI 1.2.9 (the same way as showed on the wiki!), 
<br>
but does NOT with 1.4.1
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;graphics01 $ ~/openmpi/gnu129/bin/mpirun -hostfile hosts1 hostname
<br>
&nbsp;&nbsp;&nbsp;&nbsp;graphics02
<br>
&nbsp;&nbsp;&nbsp;&nbsp;graphics02
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;graphics01 $ ~/openmpi/gnu129/bin/mpirun -hostfile hosts2 hostname
<br>
&nbsp;&nbsp;&nbsp;&nbsp;graphics02
<br>
&nbsp;&nbsp;&nbsp;&nbsp;graphics02
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;graphics01 $ ~/openmpi/gnu141/bin/mpirun -hostfile hosts1 hostname
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[graphics01:25756] ras:gridengine: JOB_ID: 89055
<br>
&nbsp;
<br>
--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;There are no allocated resources for the application
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hostname
<br>
&nbsp;&nbsp;&nbsp;&nbsp;that match the requested mapping:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hosts1
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Verify that you have mapped the allocated resources properly using the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--host or --hostfile specification.
<br>
&nbsp;
<br>
--------------------------------------------------------------------------
<br>
&nbsp;
<br>
--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;A daemon (pid unknown) died unexpectedly on signal 1  while 
<br>
attempting to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;launch so we are aborting.
<br>
<p>= Serge
<br>
<p><p>Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; I should have read your original note more closely and I would have spotted the issue. How a hostfile is used changed between OMPI 1.2 and the 1.3 (and above) releases per user requests. It was actually the SGE side of the community that led the change :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can get a full description of how OMPI uses hostfiles in two ways:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * from the man pages:  man orte_hosts
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * from the wiki: <a href="https://svn.open-mpi.org/trac/ompi/wiki/HostFilePlan">https://svn.open-mpi.org/trac/ompi/wiki/HostFilePlan</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As far as I can tell, OMPI 1.4.x is behaving per that specification. You get four slots on your submission script because that is what SGE allocated to you. The hostfile filters that when launching, using the provided info to tell it how many slots on each node within the allocation to use for that application.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I suggest reading the above documentation to see how OMPI uses hostfiles, and then let us know if you have any questions, concerns, or see a deviation from the described behavior.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; HTH
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 7, 2010, at 5:36 AM, Serge wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If you run your cmd with the hostfile option and add
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --display-allocation, what does it say?
</span><br>
<span class="quotelev2">&gt;&gt; Thank you, Ralph.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is the command I used inside my submission script:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  mpirun --display-allocation -np 4 -hostfile hosts ./program
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; And this is the output I got.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Data for node: Name: node03  Num slots: 4    Max slots: 0
</span><br>
<span class="quotelev2">&gt;&gt; Data for node: Name: node02  Num slots: 4    Max slots: 0
</span><br>
<span class="quotelev2">&gt;&gt; Data for node: Name: node04  Num slots: 4    Max slots: 0
</span><br>
<span class="quotelev2">&gt;&gt; Data for node: Name: node01  Num slots: 4    Max slots: 0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If I run the same mpirun command on the cluster head node &quot;clhead&quot; then this is what I get:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Data for node: Name: clhead  Num slots: 0    Max slots: 0
</span><br>
<span class="quotelev2">&gt;&gt; Data for node: Name: node01  Num slots: 1    Max slots: 0
</span><br>
<span class="quotelev2">&gt;&gt; Data for node: Name: node02  Num slots: 1    Max slots: 0
</span><br>
<span class="quotelev2">&gt;&gt; Data for node: Name: node03  Num slots: 1    Max slots: 0
</span><br>
<span class="quotelev2">&gt;&gt; Data for node: Name: node04  Num slots: 1    Max slots: 0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The content of the 'hosts' file:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; node01 slots=1
</span><br>
<span class="quotelev2">&gt;&gt; node02 slots=1
</span><br>
<span class="quotelev2">&gt;&gt; node03 slots=1
</span><br>
<span class="quotelev2">&gt;&gt; node04 slots=1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; = Serge
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 6, 2010, at 12:18 PM, Serge wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenMPI integrates with Sun Grid Engine really well, and one does not need to specify any parameters for the mpirun command to launch the processes on the compute nodes, that is having in the submission script &quot;mpirun ./program&quot; is enough; there is no need for &quot;-np XX&quot; or &quot;-hostfile file_name&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, there are cases when being able to specify the hostfile is important (hybrid jobs, users with MPICH jobs, etc.). For example, with Grid Engine I can request four 4-core nodes, that is total of 16 slots. But I also want to specify how to distribute processes on the nodes, so I create the file 'hosts'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node01 slots=1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node02 slots=1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node03 slots=1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node04 slots=1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and modify the line in the submission script to:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -hostfile hosts ./program
</span><br>
<span class="quotelev3">&gt;&gt;&gt; With Open MPI 1.2.x everything worked properly, meaning that Open MPI could count the number of slots specified in the 'hosts' file - 4 (i.e. effectively supplying the mpirun command with the -np parameter), as well as properly distribute processes on the compute nodes (one process per host).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It's different with Open MPI 1.4.1. It cannot process the 'hosts' file properly at all. All the processes get launched on just one node -- the shepherd host.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The format of the 'hosts' file does not matter. It can be, say
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node01
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node01
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node02
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node02
</span><br>
<span class="quotelev3">&gt;&gt;&gt; meaning 2 slots on each node. Open MPI 1.2.x would handle that with no problem, however Open MPI 1.4.x would not.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The problem appears with OMPI 1.4.1, SGE 6.1u6. It was also tested with OMPI 1.3.4 and SGE 6.2u4.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It's important to notice that if the mpirun command is run interactively, not from inside the Grid Engine script, then it interprets the content of the host file just fine.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am wondering what changed from OMPI 1.2.x to OMPI 1.4.x that prevents expected behavior, and is it possible to get it from OMPI 1.4.x by, say, tuning some parameters?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = Serge
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12584.php">Gus Correa: "Re: [OMPI users] Best way to reduce 3D array"</a>
<li><strong>Previous message:</strong> <a href="12582.php">Robert Collyer: "Re: [OMPI users] Problem in remote nodes"</a>
<li><strong>In reply to:</strong> <a href="12580.php">Ralph Castain: "Re: [OMPI users] OMPI 1.4.x ignores hostfile and launches all the processes on just one node in Grid Engine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12578.php">Dave Love: "Re: [OMPI users] OMPI 1.4.x ignores hostfile and launches all the processes on just one node in Grid Engine"</a>
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
