<?
$subject_val = "Re: [OMPI users] OMPI 1.4.x ignores hostfile and launches all the processes on just one node in Grid Engine";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  8 07:31:07 2010" -->
<!-- isoreceived="20100408113107" -->
<!-- sent="Thu, 08 Apr 2010 08:30:57 -0300" -->
<!-- isosent="20100408113057" -->
<!-- name="Serge" -->
<!-- email="skhan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI 1.4.x ignores hostfile and launches all the processes on just one node in Grid Engine" -->
<!-- id="4BBDBE71.8090509_at_ap.smu.ca" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="41A330B0-3FDB-47AA-A721-553C3C4F1F84_at_open-mpi.org" -->
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
<strong>Date:</strong> 2010-04-08 07:30:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12587.php">SLIM H.A.: "[OMPI users] orted: error while loading shared libraries"</a>
<li><strong>Previous message:</strong> <a href="12585.php">Dave Love: "Re: [OMPI users] OMPI 1.4.x ignores hostfile and launches all the processes on just one node in Grid Engine"</a>
<li><strong>Maybe in reply to:</strong> <a href="12561.php">Serge: "[OMPI users] OMPI 1.4.x ignores hostfile and launches all the processes on just one node in Grid Engine"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
1. Ralph, if I try to do my experiment with SGE, then it's the same 
<br>
results with 1.4.2 as with 1.4.1.
<br>
<p>$ qrsh -cwd -V -pe ompi* 16 -l h_rt=10:00:00,h_vmem=2G bash
<br>
<p>graphics03 $ cat hosts
<br>
graphics01 slots=1
<br>
graphics02 slots=1
<br>
graphics03 slots=1
<br>
graphics04 slots=1
<br>
<p>graphics03 $ ~/openmpi/gnu129/bin/mpirun -hostfile hosts hostname
<br>
graphics03
<br>
graphics01
<br>
graphics04
<br>
graphics02
<br>
<p>graphics03 $ ~/openmpi/gnu141/bin/mpirun -hostfile hosts hostname
<br>
[graphics03:08200] ras:gridengine: JOB_ID: 89217
<br>
graphics03
<br>
<p>graphics03 $ ~/openmpi/gnu142/bin/mpirun -hostfile hosts hostname
<br>
graphics03
<br>
<p><p>2. However, if I try to reproduce your experiment then I get the exact 
<br>
same result as you do.
<br>
<p>$ ~/openmpi/gnu141/bin/mpirun --do-not-resolve --do-not-launch 
<br>
--display-map --display-allocation -default-hostfile defserge -hostfile 
<br>
serge hostname
<br>
<p>======================   ALLOCATED NODES   ======================
<br>
<p>&nbsp;&nbsp;Data for node: Name: clhead    Num slots: 0    Max slots: 0
<br>
&nbsp;&nbsp;Data for node: Name: graphics01        Num slots: 4    Max slots: 0
<br>
&nbsp;&nbsp;Data for node: Name: graphics02        Num slots: 4    Max slots: 0
<br>
&nbsp;&nbsp;Data for node: Name: graphics03        Num slots: 4    Max slots: 0
<br>
&nbsp;&nbsp;Data for node: Name: graphics04        Num slots: 4    Max slots: 0
<br>
<p>=================================================================
<br>
<p>&nbsp;&nbsp;========================   JOB MAP   ========================
<br>
<p>&nbsp;&nbsp;Data for node: Name: graphics01        Num procs: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [26782,1] Process rank: 0
<br>
<p>&nbsp;&nbsp;Data for node: Name: graphics02        Num procs: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [26782,1] Process rank: 1
<br>
<p>&nbsp;&nbsp;Data for node: Name: graphics03        Num procs: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [26782,1] Process rank: 2
<br>
<p>&nbsp;&nbsp;Data for node: Name: graphics04        Num procs: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [26782,1] Process rank: 3
<br>
<p>&nbsp;&nbsp;=============================================================
<br>
<p>$ cat defserge
<br>
graphics01 slots=4
<br>
graphics02 slots=4
<br>
graphics03 slots=4
<br>
graphics04 slots=4
<br>
<p>$ cat serge
<br>
graphics01 slots=1
<br>
graphics02 slots=1
<br>
graphics03 slots=1
<br>
graphics04 slots=1
<br>
<p>$ ~/openmpi/gnu141/bin/mpirun -default-hostfile defserge -hostfile serge 
<br>
hostname
<br>
graphics04
<br>
graphics01
<br>
graphics02
<br>
graphics03
<br>
<p><p>3. So, it this point I am wondering if using a default hostfile in place 
<br>
of the sge allocation actually matters.
<br>
<p>Also, as I mentioned, my colleague reports the same problem for OMPI 
<br>
1.3.4 and SGE 6.2u4 on a different cluster. And both of us installed the 
<br>
software completely independently.
<br>
<p>Thank you for the help.
<br>
<p>= Serge
<br>
<p><p>Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Hmmm...not sure what to say. I don't have a copy of 1.4.1 handy, but I did try this on the current 1.4 branch (soon to be released as 1.4.2) and it worked perfectly (had to use a default hostfile in place of your sge allocation, but that doesn't matter to the code):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph:v1.4 rhc$ mpirun --do-not-resolve --do-not-launch --display-map --display-allocation -default-hostfile defserge -hostfile serge foo
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ======================   ALLOCATED NODES   ======================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Data for node: Name: Ralph	Num slots: 0	Max slots: 0
</span><br>
<span class="quotelev1">&gt;  Data for node: Name: node01	Num slots: 4	Max slots: 0
</span><br>
<span class="quotelev1">&gt;  Data for node: Name: node02	Num slots: 4	Max slots: 0
</span><br>
<span class="quotelev1">&gt;  Data for node: Name: node03	Num slots: 4	Max slots: 0
</span><br>
<span class="quotelev1">&gt;  Data for node: Name: node04	Num slots: 4	Max slots: 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; =================================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  ========================   JOB MAP   ========================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Data for node: Name: node01	Num procs: 1
</span><br>
<span class="quotelev1">&gt;  	Process OMPI jobid: [47823,1] Process rank: 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Data for node: Name: node02	Num procs: 1
</span><br>
<span class="quotelev1">&gt;  	Process OMPI jobid: [47823,1] Process rank: 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Data for node: Name: node03	Num procs: 1
</span><br>
<span class="quotelev1">&gt;  	Process OMPI jobid: [47823,1] Process rank: 2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Data for node: Name: node04	Num procs: 1
</span><br>
<span class="quotelev1">&gt;  	Process OMPI jobid: [47823,1] Process rank: 3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  =============================================================
</span><br>
<span class="quotelev1">&gt; Ralph:v1.4 rhc$ cat defserge
</span><br>
<span class="quotelev1">&gt; node01 slots=4
</span><br>
<span class="quotelev1">&gt; node02 slots=4
</span><br>
<span class="quotelev1">&gt; node03 slots=4
</span><br>
<span class="quotelev1">&gt; node04 slots=4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph:v1.4 rhc$ cat serge
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you try it on the 1.4.2 nightly tarball and see if it works okay for you?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/nightly/v1.4/">http://www.open-mpi.org/nightly/v1.4/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 7, 2010, at 10:02 AM, Serge wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thank you, Ralph.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have read the wiki and the man pages. But I am still not sure I understand what is going on in my example. I cannot filter the slots allocated by SGE. I also think that there is a deviation from the behavior described on the wiki (precisely example 5 from the top in section &quot;NOW RUNNING FROM THE INTERACTIVE SHELL&quot;).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So, below, I am copy-pasting my session, and I am asking if you could please follow my line of thought and correct me where I am mistaken?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here I request an interactive session with 16 slots on 4 four-core nodes like so:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   $ qrsh -cwd -V -pe ompi* 16 -l h_rt=10:00:00,h_vmem=2G bash
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Now, I show that all 16 slots are available and everything is working as expected with both OMPI 1.2.9 and OMPI 1.4.1:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   graphics01 $ ~/openmpi/gnu141/bin/mpirun hostname
</span><br>
<span class="quotelev2">&gt;&gt;   [graphics01:24837] ras:gridengine: JOB_ID: 89052
</span><br>
<span class="quotelev2">&gt;&gt;   graphics01
</span><br>
<span class="quotelev2">&gt;&gt;   graphics01
</span><br>
<span class="quotelev2">&gt;&gt;   graphics01
</span><br>
<span class="quotelev2">&gt;&gt;   graphics01
</span><br>
<span class="quotelev2">&gt;&gt;   graphics04
</span><br>
<span class="quotelev2">&gt;&gt;   graphics04
</span><br>
<span class="quotelev2">&gt;&gt;   graphics02
</span><br>
<span class="quotelev2">&gt;&gt;   graphics02
</span><br>
<span class="quotelev2">&gt;&gt;   graphics04
</span><br>
<span class="quotelev2">&gt;&gt;   graphics02
</span><br>
<span class="quotelev2">&gt;&gt;   graphics04
</span><br>
<span class="quotelev2">&gt;&gt;   graphics02
</span><br>
<span class="quotelev2">&gt;&gt;   graphics03
</span><br>
<span class="quotelev2">&gt;&gt;   graphics03
</span><br>
<span class="quotelev2">&gt;&gt;   graphics03
</span><br>
<span class="quotelev2">&gt;&gt;   graphics03
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   graphics01 $ ~/openmpi/gnu129/bin/mpirun hostname
</span><br>
<span class="quotelev2">&gt;&gt;   [graphics01:24849] ras:gridengine: JOB_ID: 89052
</span><br>
<span class="quotelev2">&gt;&gt;   graphics01
</span><br>
<span class="quotelev2">&gt;&gt;   graphics04
</span><br>
<span class="quotelev2">&gt;&gt;   graphics02
</span><br>
<span class="quotelev2">&gt;&gt;   graphics03
</span><br>
<span class="quotelev2">&gt;&gt;   graphics01
</span><br>
<span class="quotelev2">&gt;&gt;   graphics04
</span><br>
<span class="quotelev2">&gt;&gt;   graphics02
</span><br>
<span class="quotelev2">&gt;&gt;   graphics03
</span><br>
<span class="quotelev2">&gt;&gt;   graphics01
</span><br>
<span class="quotelev2">&gt;&gt;   graphics03
</span><br>
<span class="quotelev2">&gt;&gt;   graphics01
</span><br>
<span class="quotelev2">&gt;&gt;   graphics04
</span><br>
<span class="quotelev2">&gt;&gt;   graphics03
</span><br>
<span class="quotelev2">&gt;&gt;   graphics04
</span><br>
<span class="quotelev2">&gt;&gt;   graphics02
</span><br>
<span class="quotelev2">&gt;&gt;   graphics02
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Now, I want to filter the list of 16 slots by using the host file. I want to run 1 process per node.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   graphics01 $ cat hosts
</span><br>
<span class="quotelev2">&gt;&gt;   graphics01 slots=1
</span><br>
<span class="quotelev2">&gt;&gt;   graphics02 slots=1
</span><br>
<span class="quotelev2">&gt;&gt;   graphics03 slots=1
</span><br>
<span class="quotelev2">&gt;&gt;   graphics04 slots=1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; And I try to use it with OMPI 1.2.9 and 1.4.1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   graphics01 $ ~/openmpi/gnu129/bin/mpirun -hostfile hosts hostname
</span><br>
<span class="quotelev2">&gt;&gt;   graphics04
</span><br>
<span class="quotelev2">&gt;&gt;   graphics01
</span><br>
<span class="quotelev2">&gt;&gt;   graphics03
</span><br>
<span class="quotelev2">&gt;&gt;   graphics02
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   graphics01 $ ~/openmpi/gnu141/bin/mpirun -hostfile hosts hostname
</span><br>
<span class="quotelev2">&gt;&gt;   [graphics01:24903] ras:gridengine: JOB_ID: 89052
</span><br>
<span class="quotelev2">&gt;&gt;   graphics01
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So, as you can see OMPI1.4.1 did not recognize any hosts except the current shepherd host.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Moreover, similarly to the example down below on <a href="https://svn.open-mpi.org/trac/ompi/wiki/HostFilePlan">https://svn.open-mpi.org/trac/ompi/wiki/HostFilePlan</a>,
</span><br>
<span class="quotelev2">&gt;&gt; I create two other host files:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   graphics01 $ cat hosts1
</span><br>
<span class="quotelev2">&gt;&gt;   graphics02
</span><br>
<span class="quotelev2">&gt;&gt;   graphics02
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   graphics01 $ cat hosts2
</span><br>
<span class="quotelev2">&gt;&gt;   graphics02 slots=2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; And then try to use them with both versions of Open MPI:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It works properly with OMPI 1.2.9 (the same way as showed on the wiki!), but does NOT with 1.4.1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   graphics01 $ ~/openmpi/gnu129/bin/mpirun -hostfile hosts1 hostname
</span><br>
<span class="quotelev2">&gt;&gt;   graphics02
</span><br>
<span class="quotelev2">&gt;&gt;   graphics02
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   graphics01 $ ~/openmpi/gnu129/bin/mpirun -hostfile hosts2 hostname
</span><br>
<span class="quotelev2">&gt;&gt;   graphics02
</span><br>
<span class="quotelev2">&gt;&gt;   graphics02
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   graphics01 $ ~/openmpi/gnu141/bin/mpirun -hostfile hosts1 hostname
</span><br>
<span class="quotelev2">&gt;&gt;   [graphics01:25756] ras:gridengine: JOB_ID: 89055
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;   There are no allocated resources for the application
</span><br>
<span class="quotelev2">&gt;&gt;     hostname
</span><br>
<span class="quotelev2">&gt;&gt;   that match the requested mapping:
</span><br>
<span class="quotelev2">&gt;&gt;     hosts1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Verify that you have mapped the allocated resources properly using the
</span><br>
<span class="quotelev2">&gt;&gt;   --host or --hostfile specification.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;   A daemon (pid unknown) died unexpectedly on signal 1  while attempting to
</span><br>
<span class="quotelev2">&gt;&gt;   launch so we are aborting.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; = Serge
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I should have read your original note more closely and I would have spotted the issue. How a hostfile is used changed between OMPI 1.2 and the 1.3 (and above) releases per user requests. It was actually the SGE side of the community that led the change :-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You can get a full description of how OMPI uses hostfiles in two ways:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * from the man pages:  man orte_hosts
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * from the wiki: <a href="https://svn.open-mpi.org/trac/ompi/wiki/HostFilePlan">https://svn.open-mpi.org/trac/ompi/wiki/HostFilePlan</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As far as I can tell, OMPI 1.4.x is behaving per that specification. You get four slots on your submission script because that is what SGE allocated to you. The hostfile filters that when launching, using the provided info to tell it how many slots on each node within the allocation to use for that application.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I suggest reading the above documentation to see how OMPI uses hostfiles, and then let us know if you have any questions, concerns, or see a deviation from the described behavior.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HTH
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Apr 7, 2010, at 5:36 AM, Serge wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; If you run your cmd with the hostfile option and add
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --display-allocation, what does it say?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thank you, Ralph.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This is the command I used inside my submission script:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun --display-allocation -np 4 -hostfile hosts ./program
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; And this is the output I got.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Data for node: Name: node03  Num slots: 4    Max slots: 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Data for node: Name: node02  Num slots: 4    Max slots: 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Data for node: Name: node04  Num slots: 4    Max slots: 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Data for node: Name: node01  Num slots: 4    Max slots: 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If I run the same mpirun command on the cluster head node &quot;clhead&quot; then this is what I get:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Data for node: Name: clhead  Num slots: 0    Max slots: 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Data for node: Name: node01  Num slots: 1    Max slots: 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Data for node: Name: node02  Num slots: 1    Max slots: 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Data for node: Name: node03  Num slots: 1    Max slots: 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Data for node: Name: node04  Num slots: 1    Max slots: 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The content of the 'hosts' file:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node01 slots=1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node02 slots=1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node03 slots=1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node04 slots=1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; = Serge
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Apr 6, 2010, at 12:18 PM, Serge wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; OpenMPI integrates with Sun Grid Engine really well, and one does not need to specify any parameters for the mpirun command to launch the processes on the compute nodes, that is having in the submission script &quot;mpirun ./program&quot; is enough; there is no need for &quot;-np XX&quot; or &quot;-hostfile file_name&quot;.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; However, there are cases when being able to specify the hostfile is important (hybrid jobs, users with MPICH jobs, etc.). For example, with Grid Engine I can request four 4-core nodes, that is total of 16 slots. But I also want to specify how to distribute processes on the nodes, so I create the file 'hosts'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; node01 slots=1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; node02 slots=1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; node03 slots=1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; node04 slots=1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and modify the line in the submission script to:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun -hostfile hosts ./program
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; With Open MPI 1.2.x everything worked properly, meaning that Open MPI could count the number of slots specified in the 'hosts' file - 4 (i.e. effectively supplying the mpirun command with the -np parameter), as well as properly distribute processes on the compute nodes (one process per host).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; It's different with Open MPI 1.4.1. It cannot process the 'hosts' file properly at all. All the processes get launched on just one node -- the shepherd host.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The format of the 'hosts' file does not matter. It can be, say
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; node01
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; node01
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; node02
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; node02
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; meaning 2 slots on each node. Open MPI 1.2.x would handle that with no problem, however Open MPI 1.4.x would not.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The problem appears with OMPI 1.4.1, SGE 6.1u6. It was also tested with OMPI 1.3.4 and SGE 6.2u4.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; It's important to notice that if the mpirun command is run interactively, not from inside the Grid Engine script, then it interprets the content of the host file just fine.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I am wondering what changed from OMPI 1.2.x to OMPI 1.4.x that prevents expected behavior, and is it possible to get it from OMPI 1.4.x by, say, tuning some parameters?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; = Serge
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12587.php">SLIM H.A.: "[OMPI users] orted: error while loading shared libraries"</a>
<li><strong>Previous message:</strong> <a href="12585.php">Dave Love: "Re: [OMPI users] OMPI 1.4.x ignores hostfile and launches all the processes on just one node in Grid Engine"</a>
<li><strong>Maybe in reply to:</strong> <a href="12561.php">Serge: "[OMPI users] OMPI 1.4.x ignores hostfile and launches all the processes on just one node in Grid Engine"</a>
<!-- nextthread="start" -->
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
