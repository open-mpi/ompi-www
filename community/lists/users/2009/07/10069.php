<?
$subject_val = "Re: [OMPI users] Open-MPI-1.3.2 compatibility with old torque?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 23 15:10:40 2009" -->
<!-- isoreceived="20090723191040" -->
<!-- sent="Thu, 23 Jul 2009 12:10:07 -0700" -->
<!-- isosent="20090723191007" -->
<!-- name="Song, Kai Song" -->
<!-- email="KSong_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open-MPI-1.3.2 compatibility with old torque?" -->
<!-- id="f0d882635a58.4a68531f_at_lbl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2F1F9A54-3C09-496A-B4BD-0088733CEE4F_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open-MPI-1.3.2 compatibility with old torque?<br>
<strong>From:</strong> Song, Kai Song (<em>KSong_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-23 15:10:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10070.php">Ralph Castain: "Re: [OMPI users] Open-MPI-1.3.2 compatibility with old torque?"</a>
<li><strong>Previous message:</strong> <a href="10068.php">Eric Thibodeau: "[OMPI users] TCP btl misbehaves if btl_tcp_port_min_v4 is not set."</a>
<li><strong>In reply to:</strong> <a href="10044.php">Ralph Castain: "Re: [OMPI users] Open-MPI-1.3.2 compatibility with old torque?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10070.php">Ralph Castain: "Re: [OMPI users] Open-MPI-1.3.2 compatibility with old torque?"</a>
<li><strong>Reply:</strong> <a href="10070.php">Ralph Castain: "Re: [OMPI users] Open-MPI-1.3.2 compatibility with old torque?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>Thanks for the fast reply! I put the --display-allocation and --display-map flags on and it looks like the nodes allocation is just fine, but the job still hang. 
<br>
<p>The output looks like this:
<br>
&nbsp;/home/kaisong/test
<br>
node0001
<br>
node0001
<br>
node0000
<br>
node0000
<br>
Starting parallel job
<br>
<p>======================   ALLOCATED NODES   ======================
<br>
<p>&nbsp;Data for node: Name: node0001	Num slots: 2	Max slots: 0
<br>
&nbsp;Data for node: Name: node0000	Num slots: 2	Max slots: 0
<br>
<p>=================================================================
<br>
<p>&nbsp;========================   JOB MAP   ========================
<br>
<p>&nbsp;Data for node: Name: node0001	Num procs: 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [16591,1] Process rank: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [16591,1] Process rank: 1
<br>
<p>&nbsp;Data for node: Name: node0000	Num procs: 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [16591,1] Process rank: 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [16591,1] Process rank: 3
<br>
<p>&nbsp;=============================================================
<br>
(no hello wrold output, job just hang here until timeout).
<br>
And similar thing in the error output:
<br>
node0000 - daemon did not report back when launched
<br>
<p><p>Then, I ran the job manually by adding &quot;-mca btl gm&quot; flag for mpirun:
<br>
/home/software/ompi/1.3.2-pgi/bin/mpirun -mca gm --display-allocation --display-map -v -machinefile ./node -np 4 ./hello-hostname
<br>
<p>MPI crashed with the following output/error:
<br>
======================   ALLOCATED NODES   ======================
<br>
<p>&nbsp;&nbsp;Data for node: Name: hbar.lbl.gov      Num slots: 0    Max slots: 0
<br>
&nbsp;&nbsp;Data for node: Name: node0045  Num slots: 4    Max slots: 0
<br>
&nbsp;&nbsp;Data for node: Name: node0046  Num slots: 4    Max slots: 0
<br>
&nbsp;&nbsp;Data for node: Name: node0047  Num slots: 4    Max slots: 0
<br>
&nbsp;&nbsp;Data for node: Name: node0048  Num slots: 4    Max slots: 0
<br>
<p>=================================================================
<br>
<p>&nbsp;&nbsp;========================   JOB MAP   ========================
<br>
<p>&nbsp;&nbsp;Data for node: Name: node0045  Num procs: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [62741,1] Process rank: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [62741,1] Process rank: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [62741,1] Process rank: 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [62741,1] Process rank: 3
<br>
<p>&nbsp;&nbsp;=============================================================
<br>
--------------------------------------------------------------------------
<br>
At least one pair of MPI processes are unable to reach each other for
<br>
MPI communications.  This means that no Open MPI device has indicated
<br>
that it can be used to communicate between these processes.  This is
<br>
an error; Open MPI requires that all MPI processes be able to reach
<br>
each other.  This error can sometimes be the result of forgetting to
<br>
specify the &quot;self&quot; BTL.
<br>
<p>&nbsp;&nbsp;&nbsp;Process 1 ([[62741,1],1]) is on host: node0045
<br>
&nbsp;&nbsp;&nbsp;Process 2 ([[62741,1],1]) is on host: node0045
<br>
&nbsp;&nbsp;&nbsp;BTLs attempted: gm
<br>
<p>Your MPI job is now going to abort; sorry.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
It looks like MPI_INIT failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during MPI_INIT; some of which are due to configuration or 
<br>
environment
<br>
problems.  This failure appears to be an internal failure; here's some
<br>
additional information (which may only be relevant to an Open MPI
<br>
developer):
<br>
<p>&nbsp;&nbsp;&nbsp;PML add procs failed
<br>
&nbsp;&nbsp;&nbsp;--&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[node0045:366] Abort before MPI_INIT completed successfully; not able 
<br>
to guarantee that all other process
<br>
!
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[node0045:367] Abort before MPI_INIT completed successfully; not able 
<br>
to guarantee that all other process
<br>
!
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[node0045:368] Abort before MPI_INIT completed successfully; not able 
<br>
to guarantee that all other process
<br>
!
<br>
<p><p>*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[node0045:365] Abort before MPI_INIT completed successfully; not able 
<br>
to guarantee that all other process
<br>
!
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 3 with PID 368 on
<br>
node node0045 exiting without calling &quot;finalize&quot;. This may
<br>
have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>
--------------------------------------------------------------------------
<br>
[hbar.lbl.gov:07770] 3 more processes have sent help message help-mca-
<br>
bml-r2.txt / unreachable proc
<br>
[hbar.lbl.gov:07770] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 
<br>
to see all help / error messages
<br>
[hbar.lbl.gov:07770] 3 more processes have sent help message help-mpi-
<br>
runtime / mpi_init:startup:internal
<br>
<p><p><p>However, it works if I add &quot;self&quot; to the -mca flag:
<br>
/home/software/ompi/1.3.2-pgi/bin/mpirun -mca btl gm,tcp,self --display-allocation --display-map -v -machinefile ./node -np 16 ./hello-hostname
<br>
<p>======================   ALLOCATED NODES   ======================
<br>
<p>&nbsp;Data for node: Name: node0045	Num slots: 4	Max slots: 0
<br>
&nbsp;Data for node: Name: node0046	Num slots: 4	Max slots: 0
<br>
&nbsp;Data for node: Name: node0047	Num slots: 4	Max slots: 0
<br>
&nbsp;Data for node: Name: node0048	Num slots: 4	Max slots: 0
<br>
<p>=================================================================
<br>
<p>&nbsp;========================   JOB MAP   ========================
<br>
<p>&nbsp;Data for node: Name: node0045	Num procs: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [49981,1] Process rank: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [49981,1] Process rank: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [49981,1] Process rank: 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [49981,1] Process rank: 3
<br>
<p>&nbsp;Data for node: Name: node0046	Num procs: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [49981,1] Process rank: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [49981,1] Process rank: 5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [49981,1] Process rank: 6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [49981,1] Process rank: 7
<br>
<p>&nbsp;Data for node: Name: node0047	Num procs: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [49981,1] Process rank: 8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [49981,1] Process rank: 9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [49981,1] Process rank: 10
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [49981,1] Process rank: 11
<br>
<p>&nbsp;Data for node: Name: node0048	Num procs: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [49981,1] Process rank: 12
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [49981,1] Process rank: 13
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [49981,1] Process rank: 14
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [49981,1] Process rank: 15
<br>
<p>&nbsp;=============================================================
<br>
Hello world from process 13 of 16
<br>
Hostname: node0048
<br>
Hello world from process 15 of 16
<br>
Hostname: node0048
<br>
Hello world from process 12 of 16
<br>
Hostname: node0048
<br>
Hello world from process 3 of 16
<br>
Hostname: node0045
<br>
Hello world from process 6 of 16
<br>
Hostname: node0046
<br>
Hello world from process 8 of 16
<br>
Hostname: node0047
<br>
Hello world from process 0 of 16
<br>
Hostname: node0045
<br>
Hello world from process 4 of 16
<br>
Hostname: node0046
<br>
Hello world from process 2 of 16
<br>
Hostname: node0045
<br>
Hello world from process 5 of 16
<br>
Hostname: node0046
<br>
Hello world from process 9 of 16
<br>
Hostname: node0047
<br>
Hello world from process 10 of 16
<br>
Hostname: node0047
<br>
Hello world from process 11 of 16
<br>
Hostname: node0047
<br>
Hello world from process 14 of 16
<br>
Hostname: node0048
<br>
Hello world from process 1 of 16
<br>
Hostname: node0045
<br>
Hello world from process 7 of 16
<br>
Hostname: node0046
<br>
<p><p>So, I suspect it is not the parsing problem of the -machinefile flag. Somehow the nodes don't communicate with &quot;-mca btl gm&quot; option on. Do you think it is the compatibility problem with myrinet driver?
<br>
<p>Thanks again for you help!
<br>
<p>Kai
<br>
--------------------
<br>
Kai Song
<br>
&lt;ksong_at_[hidden]&gt; 1.510.486.4894
<br>
High Performance Computing Services (HPCS) Intern
<br>
Lawrence Berkeley National Laboratory - <a href="http://scs.lbl.gov">http://scs.lbl.gov</a>
<br>
<p><p>----- Original Message -----
<br>
From: Ralph Castain &lt;rhc_at_[hidden]&gt;
<br>
Date: Wednesday, July 22, 2009 5:03 pm
<br>
Subject: Re: [OMPI users] Open-MPI-1.3.2 compatibility with old torque?
<br>
To: Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Cc: &quot;Song, Kai Song&quot; &lt;KSong_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; mpirun --display-allocation --display-map
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Run a batch job that just prints out $PBS_NODEFILE. I'll bet that 
</span><br>
<span class="quotelev1">&gt; it  
</span><br>
<span class="quotelev1">&gt; isn't what we are expecting, and that the problem comes from it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In a Torque environment, we read that file to get the list of nodes 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and #slots/node that are allocated to your job. We then filter that 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; through any hostfile you provide. So all the nodes have to be in 
</span><br>
<span class="quotelev1">&gt; the  
</span><br>
<span class="quotelev1">&gt; $PBS_NODEFILE, which has to be in the expected format.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm a little suspicious, though, because of your reported error. It 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sounds like we are indeed trying to launch a daemon on a known 
</span><br>
<span class="quotelev1">&gt; node. I  
</span><br>
<span class="quotelev1">&gt; can only surmise a couple of possible reasons for the failure:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. this is a node that is not allocated for your use. Was node0006 
</span><br>
<span class="quotelev1">&gt; in  
</span><br>
<span class="quotelev1">&gt; your allocation?? If not, then the launch would fail. This would  
</span><br>
<span class="quotelev1">&gt; indicate we are not parsing the nodefile correctly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. if the node is in your allocation, then I would wonder if you 
</span><br>
<span class="quotelev1">&gt; have  
</span><br>
<span class="quotelev1">&gt; a TCP connection between that node and the one where mpirun exists. 
</span><br>
<span class="quotelev1">&gt; Is  
</span><br>
<span class="quotelev1">&gt; there a firewall in the way? Or something that would preclude a  
</span><br>
<span class="quotelev1">&gt; connection? Frankly, I doubt this possibility because it works when 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; run manually.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My money is on option #1. :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If it is #1 and you send me a copy of a sample $PBS_NODEFILE on 
</span><br>
<span class="quotelev1">&gt; your  
</span><br>
<span class="quotelev1">&gt; system, I can create a way to parse it so we can provide support 
</span><br>
<span class="quotelev1">&gt; for  
</span><br>
<span class="quotelev1">&gt; that older version.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 21, 2009, at 4:44 PM, Song, Kai Song wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi Ralph,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks a lot for the fast response.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Could you give me more instructions on which command do I put &quot;-- 
</span><br>
<span class="quotelev2">&gt; &gt; display-allocation&quot; and &quot;--display-map&quot; with? mpirun? 
</span><br>
<span class="quotelev1">&gt; ./configure?...&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Also,we have tested that in our PBS script, if we put node=1, the 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; helloworld works. But, when I put node=2 or more, it will hang 
</span><br>
<span class="quotelev1">&gt; until  
</span><br>
<span class="quotelev2">&gt; &gt; timeout . And the error message will be something like:
</span><br>
<span class="quotelev2">&gt; &gt; node0006 - daemon did not report back when launched
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; However, if we don't go through the scheduler and run mpi 
</span><br>
<span class="quotelev1">&gt; manually,  
</span><br>
<span class="quotelev2">&gt; &gt; everything works fine too.
</span><br>
<span class="quotelev2">&gt; &gt; /home/software/ompi/1.3.2-pgi/bin/mpirun -machinefile ./nodes -np 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 16 ./a.out
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; What do you think the problem would be? It's not the network 
</span><br>
<span class="quotelev1">&gt; issue,  
</span><br>
<span class="quotelev2">&gt; &gt; because manually running MPI works. That is why we question about 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; torque compatibility.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks again,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Kai
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --------------------
</span><br>
<span class="quotelev2">&gt; &gt; Kai Song
</span><br>
<span class="quotelev2">&gt; &gt; &lt;ksong_at_[hidden]&gt; 1.510.486.4894
</span><br>
<span class="quotelev2">&gt; &gt; High Performance Computing Services (HPCS) Intern
</span><br>
<span class="quotelev2">&gt; &gt; Lawrence Berkeley National Laboratory - <a href="http://scs.lbl.gov">http://scs.lbl.gov</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ----- Original Message -----
</span><br>
<span class="quotelev2">&gt; &gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Date: Tuesday, July 21, 2009 12:12 pm
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] Open-MPI-1.3.2 compatibility with old  
</span><br>
<span class="quotelev2">&gt; &gt; torque?
</span><br>
<span class="quotelev2">&gt; &gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I'm afraid I have no idea - I've never seen a Torque version 
</span><br>
<span class="quotelev1">&gt; that  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; old,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; however, so it is quite possible that we don't work with it. It
</span><br>
<span class="quotelev3">&gt; &gt;&gt; also looks
</span><br>
<span class="quotelev3">&gt; &gt;&gt; like it may have been modified (given the p2-aspen3 on the end), so
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I have
</span><br>
<span class="quotelev3">&gt; &gt;&gt; no idea how the system would behave.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; First thing you could do is verify that the allocation is being 
</span><br>
<span class="quotelev1">&gt; read&gt;&gt; correctly. Add a --display-allocation to the cmd line and 
</span><br>
<span class="quotelev1">&gt; see what
</span><br>
<span class="quotelev3">&gt; &gt;&gt; we think
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Torque gave us. Then add --display-map to see where it plans to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; place the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; processes.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; If all that looks okay, and if you allow ssh, then try -mca plm rsh
</span><br>
<span class="quotelev3">&gt; &gt;&gt; on the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; cmd line and see if that works.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; HTH
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Tue, Jul 21, 2009 at 12:57 PM, Song, Kai Song &lt;KSong_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hi All,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I am building open-mpi-1.3.2 on centos-3.4, with torque-1.1.0p2-
</span><br>
<span class="quotelev3">&gt; &gt;&gt; aspen3 and
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; myrinet. I compiled it just fine with this configuration:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ./configure --prefix=/home/software/ompi/1.3.2-pgi --with-
</span><br>
<span class="quotelev3">&gt; &gt;&gt; gm=/usr/local/&gt; --with-gm-libdir=/usr/local/lib64/ --enable-
</span><br>
<span class="quotelev1">&gt; static -
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -disable-shared
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --with-tm=/usr/ --without-threads CC=pgcc CXX=pgCC FC=pgf90
</span><br>
<span class="quotelev3">&gt; &gt;&gt; F77=pgf77&gt; LDFLAGS=-L/usr/lib64/torque/
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; However, when I submit jobs for 2 or more nodes through the torque
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; schedular, the jobs just hang here. It shows the RUN state, but no
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; communication between the nodes, then jobs will die with timeout.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; We have comfirmed that the myrinet is working because our lam-
</span><br>
<span class="quotelev1">&gt; mpi-
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 7.1 works
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; just fine. We are having a really hard time determining what are
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the causes
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; for this problem. So, we suspect it's because our torque is too 
</span><br>
<span class="quotelev1">&gt; old.&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; What is the lowest version requirement of torque for open-mpi-
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 1.3.2? The
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; README file didn't specify this detail. Does anyone know more
</span><br>
<span class="quotelev3">&gt; &gt;&gt; about it?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Thanks in advance,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Kai
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --------------------
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Kai Song
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; &lt;ksong_at_[hidden]&gt; 1.510.486.4894
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; High Performance Computing Services (HPCS) Intern
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Lawrence Berkeley National Laboratory - <a href="http://scs.lbl.gov">http://scs.lbl.gov</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
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
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10070.php">Ralph Castain: "Re: [OMPI users] Open-MPI-1.3.2 compatibility with old torque?"</a>
<li><strong>Previous message:</strong> <a href="10068.php">Eric Thibodeau: "[OMPI users] TCP btl misbehaves if btl_tcp_port_min_v4 is not set."</a>
<li><strong>In reply to:</strong> <a href="10044.php">Ralph Castain: "Re: [OMPI users] Open-MPI-1.3.2 compatibility with old torque?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10070.php">Ralph Castain: "Re: [OMPI users] Open-MPI-1.3.2 compatibility with old torque?"</a>
<li><strong>Reply:</strong> <a href="10070.php">Ralph Castain: "Re: [OMPI users] Open-MPI-1.3.2 compatibility with old torque?"</a>
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
