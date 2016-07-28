<?
$subject_val = "Re: [OMPI users] Open-MPI-1.3.2 compatibility with old torque?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 23 18:46:50 2009" -->
<!-- isoreceived="20090723224650" -->
<!-- sent="Thu, 23 Jul 2009 15:46:44 -0700" -->
<!-- isosent="20090723224644" -->
<!-- name="Song, Kai Song" -->
<!-- email="KSong_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open-MPI-1.3.2 compatibility with old torque?" -->
<!-- id="f0d888725d47.4a6885e4_at_lbl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="B34258ED-9AEF-44ED-A3F0-E820F20E98D6_at_open-mpi.org" -->
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
<strong>Date:</strong> 2009-07-23 18:46:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10080.php">David Doria: "Re: [OMPI users] Backwards compatibility?"</a>
<li><strong>Previous message:</strong> <a href="10078.php">Ralph Castain: "Re: [OMPI users] Backwards compatibility?"</a>
<li><strong>In reply to:</strong> <a href="10070.php">Ralph Castain: "Re: [OMPI users] Open-MPI-1.3.2 compatibility with old torque?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>With the flag -mca btl gm,sm,self, runnig the job maually works and has a better performance as you said!
<br>
<p>However, it still gangs there when it goes through the PBS scheduler. 
<br>
<p>Here is my PBS script:
<br>
#!/bin/sh
<br>
#PBS -l nodes=2:ppn=2
<br>
#PBS -l walltime=00:02:00
<br>
#PBS -k eo
<br>
<p>cd ~kaisong/test
<br>
echo `pwd`
<br>
cat $PBS_NODEFILE
<br>
echo &quot;Starting parallel job&quot;
<br>
/home/software/ompi/1.3.2-pgi/bin/mpirun -mca btl gm,self --display-allocation --display-map -d 8 -v -machinefile $PBS_NODEFILE -np 4 ./hello-hostname
<br>
echo &quot;ending parallel job&quot;
<br>
<p>The error message and ouput file from torque are same as before. What other problems do you think it could be...? Please let me know if you need more information about our system.
<br>
<p>Thanks a lot for helping me along this far! I hope we are getting close to find out the real problem.
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
Date: Thursday, July 23, 2009 1:06 pm
<br>
Subject: Re: [OMPI users] Open-MPI-1.3.2 compatibility with old torque?
<br>
To: &quot;Song, Kai Song&quot; &lt;KSong_at_[hidden]&gt;
<br>
Cc: Open MPI Users &lt;users_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; My apologies - I had missed that -mca btl flag. That is the source 
</span><br>
<span class="quotelev1">&gt; of  
</span><br>
<span class="quotelev1">&gt; the trouble. IIRC, GM doesn't have a loopback method in it. OMPI  
</span><br>
<span class="quotelev1">&gt; requires that -every- proc be able to reach -every- proc, including 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; itself.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So you must include the &quot;self&quot; btl at a minimum. Also, if you want  
</span><br>
<span class="quotelev1">&gt; more performance, you probably want to include the shared memory 
</span><br>
<span class="quotelev1">&gt; BTL  
</span><br>
<span class="quotelev1">&gt; as well.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So the recommended param would be:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -mca btl gm,sm,self
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Order doesn't matter. I'm disturbed that it would hang when you run 
</span><br>
<span class="quotelev1">&gt; in  
</span><br>
<span class="quotelev1">&gt; batch, though, instead of abort. Try with this new flag and see if 
</span><br>
<span class="quotelev1">&gt; it  
</span><br>
<span class="quotelev1">&gt; runs in both batch and interactive mode.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; HTH
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 23, 2009, at 1:10 PM, Song, Kai Song wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi Ralph,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks for the fast reply! I put the --display-allocation and -- 
</span><br>
<span class="quotelev2">&gt; &gt; display-map flags on and it looks like the nodes allocation is 
</span><br>
<span class="quotelev1">&gt; just  
</span><br>
<span class="quotelev2">&gt; &gt; fine, but the job still hang.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The output looks like this:
</span><br>
<span class="quotelev2">&gt; &gt; /home/kaisong/test
</span><br>
<span class="quotelev2">&gt; &gt; node0001
</span><br>
<span class="quotelev2">&gt; &gt; node0001
</span><br>
<span class="quotelev2">&gt; &gt; node0000
</span><br>
<span class="quotelev2">&gt; &gt; node0000
</span><br>
<span class="quotelev2">&gt; &gt; Starting parallel job
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ======================   ALLOCATED NODES   ======================
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Data for node: Name: node0001	Num slots: 2	Max slots: 0
</span><br>
<span class="quotelev2">&gt; &gt; Data for node: Name: node0000	Num slots: 2	Max slots: 0
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; =================================================================
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ========================   JOB MAP   ========================
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Data for node: Name: node0001	Num procs: 2
</span><br>
<span class="quotelev2">&gt; &gt; 	Process OMPI jobid: [16591,1] Process rank: 0
</span><br>
<span class="quotelev2">&gt; &gt; 	Process OMPI jobid: [16591,1] Process rank: 1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Data for node: Name: node0000	Num procs: 2
</span><br>
<span class="quotelev2">&gt; &gt; 	Process OMPI jobid: [16591,1] Process rank: 2
</span><br>
<span class="quotelev2">&gt; &gt; 	Process OMPI jobid: [16591,1] Process rank: 3
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; =============================================================
</span><br>
<span class="quotelev2">&gt; &gt; (no hello wrold output, job just hang here until timeout).
</span><br>
<span class="quotelev2">&gt; &gt; And similar thing in the error output:
</span><br>
<span class="quotelev2">&gt; &gt; node0000 - daemon did not report back when launched
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Then, I ran the job manually by adding &quot;-mca btl gm&quot; flag for 
</span><br>
<span class="quotelev1">&gt; mpirun:&gt; /home/software/ompi/1.3.2-pgi/bin/mpirun -mca gm --display-
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; allocation --display-map -v -machinefile ./node -np 4 ./hello-
</span><br>
<span class="quotelev1">&gt; hostname&gt;
</span><br>
<span class="quotelev2">&gt; &gt; MPI crashed with the following output/error:
</span><br>
<span class="quotelev2">&gt; &gt; ======================   ALLOCATED NODES   ======================
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  Data for node: Name: hbar.lbl.gov      Num slots: 0    Max 
</span><br>
<span class="quotelev1">&gt; slots: 0
</span><br>
<span class="quotelev2">&gt; &gt;  Data for node: Name: node0045  Num slots: 4    Max slots: 0
</span><br>
<span class="quotelev2">&gt; &gt;  Data for node: Name: node0046  Num slots: 4    Max slots: 0
</span><br>
<span class="quotelev2">&gt; &gt;  Data for node: Name: node0047  Num slots: 4    Max slots: 0
</span><br>
<span class="quotelev2">&gt; &gt;  Data for node: Name: node0048  Num slots: 4    Max slots: 0
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; =================================================================
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  ========================   JOB MAP   ========================
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  Data for node: Name: node0045  Num procs: 4
</span><br>
<span class="quotelev2">&gt; &gt;         Process OMPI jobid: [62741,1] Process rank: 0
</span><br>
<span class="quotelev2">&gt; &gt;         Process OMPI jobid: [62741,1] Process rank: 1
</span><br>
<span class="quotelev2">&gt; &gt;         Process OMPI jobid: [62741,1] Process rank: 2
</span><br>
<span class="quotelev2">&gt; &gt;         Process OMPI jobid: [62741,1] Process rank: 3
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  =============================================================
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------
</span><br>
<span class="quotelev2">&gt; &gt; At least one pair of MPI processes are unable to reach each other 
</span><br>
<span class="quotelev1">&gt; for&gt; MPI communications.  This means that no Open MPI device has 
</span><br>
<span class="quotelev1">&gt; indicated&gt; that it can be used to communicate between these 
</span><br>
<span class="quotelev1">&gt; processes.  This is
</span><br>
<span class="quotelev2">&gt; &gt; an error; Open MPI requires that all MPI processes be able to reach
</span><br>
<span class="quotelev2">&gt; &gt; each other.  This error can sometimes be the result of forgetting to
</span><br>
<span class="quotelev2">&gt; &gt; specify the &quot;self&quot; BTL.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   Process 1 ([[62741,1],1]) is on host: node0045
</span><br>
<span class="quotelev2">&gt; &gt;   Process 2 ([[62741,1],1]) is on host: node0045
</span><br>
<span class="quotelev2">&gt; &gt;   BTLs attempted: gm
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Your MPI job is now going to abort; sorry.
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------
</span><br>
<span class="quotelev2">&gt; &gt; It looks like MPI_INIT failed for some reason; your parallel 
</span><br>
<span class="quotelev1">&gt; process  
</span><br>
<span class="quotelev2">&gt; &gt; is
</span><br>
<span class="quotelev2">&gt; &gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt; &gt; fail during MPI_INIT; some of which are due to configuration or
</span><br>
<span class="quotelev2">&gt; &gt; environment
</span><br>
<span class="quotelev2">&gt; &gt; problems.  This failure appears to be an internal failure; here's 
</span><br>
<span class="quotelev1">&gt; some&gt; additional information (which may only be relevant to an Open 
</span><br>
<span class="quotelev1">&gt; MPI&gt; developer):
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   PML add procs failed
</span><br>
<span class="quotelev2">&gt; &gt;   --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------
</span><br>
<span class="quotelev2">&gt; &gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev2">&gt; &gt; *** before MPI was initialized
</span><br>
<span class="quotelev2">&gt; &gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev2">&gt; &gt; [node0045:366] Abort before MPI_INIT completed successfully; not 
</span><br>
<span class="quotelev1">&gt; able&gt; to guarantee that all other process
</span><br>
<span class="quotelev2">&gt; &gt; !
</span><br>
<span class="quotelev2">&gt; &gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev2">&gt; &gt; *** before MPI was initialized
</span><br>
<span class="quotelev2">&gt; &gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev2">&gt; &gt; [node0045:367] Abort before MPI_INIT completed successfully; not 
</span><br>
<span class="quotelev1">&gt; able&gt; to guarantee that all other process
</span><br>
<span class="quotelev2">&gt; &gt; !
</span><br>
<span class="quotelev2">&gt; &gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev2">&gt; &gt; *** before MPI was initialized
</span><br>
<span class="quotelev2">&gt; &gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev2">&gt; &gt; [node0045:368] Abort before MPI_INIT completed successfully; not 
</span><br>
<span class="quotelev1">&gt; able&gt; to guarantee that all other process
</span><br>
<span class="quotelev2">&gt; &gt; !
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev2">&gt; &gt; *** before MPI was initialized
</span><br>
<span class="quotelev2">&gt; &gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev2">&gt; &gt; [node0045:365] Abort before MPI_INIT completed successfully; not 
</span><br>
<span class="quotelev1">&gt; able&gt; to guarantee that all other process
</span><br>
<span class="quotelev2">&gt; &gt; !
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------
</span><br>
<span class="quotelev2">&gt; &gt; mpirun has exited due to process rank 3 with PID 368 on
</span><br>
<span class="quotelev2">&gt; &gt; node node0045 exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev2">&gt; &gt; have caused other processes in the application to be
</span><br>
<span class="quotelev2">&gt; &gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------
</span><br>
<span class="quotelev2">&gt; &gt; [hbar.lbl.gov:07770] 3 more processes have sent help message help-
</span><br>
<span class="quotelev1">&gt; mca-
</span><br>
<span class="quotelev2">&gt; &gt; bml-r2.txt / unreachable proc
</span><br>
<span class="quotelev2">&gt; &gt; [hbar.lbl.gov:07770] Set MCA parameter &quot;orte_base_help_aggregate&quot; 
</span><br>
<span class="quotelev1">&gt; to 0
</span><br>
<span class="quotelev2">&gt; &gt; to see all help / error messages
</span><br>
<span class="quotelev2">&gt; &gt; [hbar.lbl.gov:07770] 3 more processes have sent help message help-
</span><br>
<span class="quotelev1">&gt; mpi-
</span><br>
<span class="quotelev2">&gt; &gt; runtime / mpi_init:startup:internal
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; However, it works if I add &quot;self&quot; to the -mca flag:
</span><br>
<span class="quotelev2">&gt; &gt; /home/software/ompi/1.3.2-pgi/bin/mpirun -mca btl gm,tcp,self -- 
</span><br>
<span class="quotelev2">&gt; &gt; display-allocation --display-map -v -machinefile ./node -np 16 ./ 
</span><br>
<span class="quotelev2">&gt; &gt; hello-hostname
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ======================   ALLOCATED NODES   ======================
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Data for node: Name: node0045	Num slots: 4	Max slots: 0
</span><br>
<span class="quotelev2">&gt; &gt; Data for node: Name: node0046	Num slots: 4	Max slots: 0
</span><br>
<span class="quotelev2">&gt; &gt; Data for node: Name: node0047	Num slots: 4	Max slots: 0
</span><br>
<span class="quotelev2">&gt; &gt; Data for node: Name: node0048	Num slots: 4	Max slots: 0
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; =================================================================
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ========================   JOB MAP   ========================
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Data for node: Name: node0045	Num procs: 4
</span><br>
<span class="quotelev2">&gt; &gt; 	Process OMPI jobid: [49981,1] Process rank: 0
</span><br>
<span class="quotelev2">&gt; &gt; 	Process OMPI jobid: [49981,1] Process rank: 1
</span><br>
<span class="quotelev2">&gt; &gt; 	Process OMPI jobid: [49981,1] Process rank: 2
</span><br>
<span class="quotelev2">&gt; &gt; 	Process OMPI jobid: [49981,1] Process rank: 3
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Data for node: Name: node0046	Num procs: 4
</span><br>
<span class="quotelev2">&gt; &gt; 	Process OMPI jobid: [49981,1] Process rank: 4
</span><br>
<span class="quotelev2">&gt; &gt; 	Process OMPI jobid: [49981,1] Process rank: 5
</span><br>
<span class="quotelev2">&gt; &gt; 	Process OMPI jobid: [49981,1] Process rank: 6
</span><br>
<span class="quotelev2">&gt; &gt; 	Process OMPI jobid: [49981,1] Process rank: 7
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Data for node: Name: node0047	Num procs: 4
</span><br>
<span class="quotelev2">&gt; &gt; 	Process OMPI jobid: [49981,1] Process rank: 8
</span><br>
<span class="quotelev2">&gt; &gt; 	Process OMPI jobid: [49981,1] Process rank: 9
</span><br>
<span class="quotelev2">&gt; &gt; 	Process OMPI jobid: [49981,1] Process rank: 10
</span><br>
<span class="quotelev2">&gt; &gt; 	Process OMPI jobid: [49981,1] Process rank: 11
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Data for node: Name: node0048	Num procs: 4
</span><br>
<span class="quotelev2">&gt; &gt; 	Process OMPI jobid: [49981,1] Process rank: 12
</span><br>
<span class="quotelev2">&gt; &gt; 	Process OMPI jobid: [49981,1] Process rank: 13
</span><br>
<span class="quotelev2">&gt; &gt; 	Process OMPI jobid: [49981,1] Process rank: 14
</span><br>
<span class="quotelev2">&gt; &gt; 	Process OMPI jobid: [49981,1] Process rank: 15
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; =============================================================
</span><br>
<span class="quotelev2">&gt; &gt; Hello world from process 13 of 16
</span><br>
<span class="quotelev2">&gt; &gt; Hostname: node0048
</span><br>
<span class="quotelev2">&gt; &gt; Hello world from process 15 of 16
</span><br>
<span class="quotelev2">&gt; &gt; Hostname: node0048
</span><br>
<span class="quotelev2">&gt; &gt; Hello world from process 12 of 16
</span><br>
<span class="quotelev2">&gt; &gt; Hostname: node0048
</span><br>
<span class="quotelev2">&gt; &gt; Hello world from process 3 of 16
</span><br>
<span class="quotelev2">&gt; &gt; Hostname: node0045
</span><br>
<span class="quotelev2">&gt; &gt; Hello world from process 6 of 16
</span><br>
<span class="quotelev2">&gt; &gt; Hostname: node0046
</span><br>
<span class="quotelev2">&gt; &gt; Hello world from process 8 of 16
</span><br>
<span class="quotelev2">&gt; &gt; Hostname: node0047
</span><br>
<span class="quotelev2">&gt; &gt; Hello world from process 0 of 16
</span><br>
<span class="quotelev2">&gt; &gt; Hostname: node0045
</span><br>
<span class="quotelev2">&gt; &gt; Hello world from process 4 of 16
</span><br>
<span class="quotelev2">&gt; &gt; Hostname: node0046
</span><br>
<span class="quotelev2">&gt; &gt; Hello world from process 2 of 16
</span><br>
<span class="quotelev2">&gt; &gt; Hostname: node0045
</span><br>
<span class="quotelev2">&gt; &gt; Hello world from process 5 of 16
</span><br>
<span class="quotelev2">&gt; &gt; Hostname: node0046
</span><br>
<span class="quotelev2">&gt; &gt; Hello world from process 9 of 16
</span><br>
<span class="quotelev2">&gt; &gt; Hostname: node0047
</span><br>
<span class="quotelev2">&gt; &gt; Hello world from process 10 of 16
</span><br>
<span class="quotelev2">&gt; &gt; Hostname: node0047
</span><br>
<span class="quotelev2">&gt; &gt; Hello world from process 11 of 16
</span><br>
<span class="quotelev2">&gt; &gt; Hostname: node0047
</span><br>
<span class="quotelev2">&gt; &gt; Hello world from process 14 of 16
</span><br>
<span class="quotelev2">&gt; &gt; Hostname: node0048
</span><br>
<span class="quotelev2">&gt; &gt; Hello world from process 1 of 16
</span><br>
<span class="quotelev2">&gt; &gt; Hostname: node0045
</span><br>
<span class="quotelev2">&gt; &gt; Hello world from process 7 of 16
</span><br>
<span class="quotelev2">&gt; &gt; Hostname: node0046
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; So, I suspect it is not the parsing problem of the -machinefile  
</span><br>
<span class="quotelev2">&gt; &gt; flag. Somehow the nodes don't communicate with &quot;-mca btl gm&quot; 
</span><br>
<span class="quotelev1">&gt; option  
</span><br>
<span class="quotelev2">&gt; &gt; on. Do you think it is the compatibility problem with myrinet 
</span><br>
<span class="quotelev1">&gt; driver?&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks again for you help!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Kai
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
<span class="quotelev2">&gt; &gt; Date: Wednesday, July 22, 2009 5:03 pm
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] Open-MPI-1.3.2 compatibility with old  
</span><br>
<span class="quotelev2">&gt; &gt; torque?
</span><br>
<span class="quotelev2">&gt; &gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Cc: &quot;Song, Kai Song&quot; &lt;KSong_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mpirun --display-allocation --display-map
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Run a batch job that just prints out $PBS_NODEFILE. I'll bet that
</span><br>
<span class="quotelev3">&gt; &gt;&gt; it
</span><br>
<span class="quotelev3">&gt; &gt;&gt; isn't what we are expecting, and that the problem comes from it.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; In a Torque environment, we read that file to get the list of nodes
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; and #slots/node that are allocated to your job. We then filter that
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; through any hostfile you provide. So all the nodes have to be in
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; $PBS_NODEFILE, which has to be in the expected format.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I'm a little suspicious, though, because of your reported error. It
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; sounds like we are indeed trying to launch a daemon on a known
</span><br>
<span class="quotelev3">&gt; &gt;&gt; node. I
</span><br>
<span class="quotelev3">&gt; &gt;&gt; can only surmise a couple of possible reasons for the failure:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 1. this is a node that is not allocated for your use. Was node0006
</span><br>
<span class="quotelev3">&gt; &gt;&gt; in
</span><br>
<span class="quotelev3">&gt; &gt;&gt; your allocation?? If not, then the launch would fail. This would
</span><br>
<span class="quotelev3">&gt; &gt;&gt; indicate we are not parsing the nodefile correctly.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 2. if the node is in your allocation, then I would wonder if you
</span><br>
<span class="quotelev3">&gt; &gt;&gt; have
</span><br>
<span class="quotelev3">&gt; &gt;&gt; a TCP connection between that node and the one where mpirun exists.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Is
</span><br>
<span class="quotelev3">&gt; &gt;&gt; there a firewall in the way? Or something that would preclude a
</span><br>
<span class="quotelev3">&gt; &gt;&gt; connection? Frankly, I doubt this possibility because it works when
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; run manually.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; My money is on option #1. :-)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; If it is #1 and you send me a copy of a sample $PBS_NODEFILE on
</span><br>
<span class="quotelev3">&gt; &gt;&gt; your
</span><br>
<span class="quotelev3">&gt; &gt;&gt; system, I can create a way to parse it so we can provide support
</span><br>
<span class="quotelev3">&gt; &gt;&gt; for
</span><br>
<span class="quotelev3">&gt; &gt;&gt; that older version.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Jul 21, 2009, at 4:44 PM, Song, Kai Song wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Thanks a lot for the fast response.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Could you give me more instructions on which command do I put &quot;-
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; display-allocation&quot; and &quot;--display-map&quot; with? mpirun?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ./configure?...&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Also,we have tested that in our PBS script, if we put node=1, the
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; helloworld works. But, when I put node=2 or more, it will hang
</span><br>
<span class="quotelev3">&gt; &gt;&gt; until
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; timeout . And the error message will be something like:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; node0006 - daemon did not report back when launched
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; However, if we don't go through the scheduler and run mpi
</span><br>
<span class="quotelev3">&gt; &gt;&gt; manually,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; everything works fine too.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; /home/software/ompi/1.3.2-pgi/bin/mpirun -machinefile ./nodes -np
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 16 ./a.out
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; What do you think the problem would be? It's not the network
</span><br>
<span class="quotelev3">&gt; &gt;&gt; issue,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; because manually running MPI works. That is why we question about
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; torque compatibility.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Thanks again,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Kai
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
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
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ----- Original Message -----
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Date: Tuesday, July 21, 2009 12:12 pm
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Subject: Re: [OMPI users] Open-MPI-1.3.2 compatibility with old
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; torque?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I'm afraid I have no idea - I've never seen a Torque version
</span><br>
<span class="quotelev3">&gt; &gt;&gt; that
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; old,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; however, so it is quite possible that we don't work with it. It
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; also looks
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; like it may have been modified (given the p2-aspen3 on the 
</span><br>
<span class="quotelev1">&gt; end), so
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I have
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; no idea how the system would behave.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; First thing you could do is verify that the allocation is being
</span><br>
<span class="quotelev3">&gt; &gt;&gt; read&gt;&gt; correctly. Add a --display-allocation to the cmd line and
</span><br>
<span class="quotelev3">&gt; &gt;&gt; see what
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; we think
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Torque gave us. Then add --display-map to see where it plans to
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; place the
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; processes.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; If all that looks okay, and if you allow ssh, then try -mca 
</span><br>
<span class="quotelev1">&gt; plm rsh
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; on the
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; cmd line and see if that works.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; HTH
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; On Tue, Jul 21, 2009 at 12:57 PM, Song, Kai Song &lt;KSong_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Hi All,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; I am building open-mpi-1.3.2 on centos-3.4, with torque-
</span><br>
<span class="quotelev1">&gt; 1.1.0p2-
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; aspen3 and
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; myrinet. I compiled it just fine with this configuration:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; ./configure --prefix=/home/software/ompi/1.3.2-pgi --with-
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; gm=/usr/local/&gt; --with-gm-libdir=/usr/local/lib64/ --enable-
</span><br>
<span class="quotelev3">&gt; &gt;&gt; static -
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; -disable-shared
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; --with-tm=/usr/ --without-threads CC=pgcc CXX=pgCC FC=pgf90
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; F77=pgf77&gt; LDFLAGS=-L/usr/lib64/torque/
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; However, when I submit jobs for 2 or more nodes through the 
</span><br>
<span class="quotelev1">&gt; torque&gt;&gt;&gt;&gt;&gt; schedular, the jobs just hang here. It shows the RUN 
</span><br>
<span class="quotelev1">&gt; state, but no
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; communication between the nodes, then jobs will die with 
</span><br>
<span class="quotelev1">&gt; timeout.&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; We have comfirmed that the myrinet is working because our lam-
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mpi-
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 7.1 works
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; just fine. We are having a really hard time determining what are
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; the causes
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; for this problem. So, we suspect it's because our torque is too
</span><br>
<span class="quotelev3">&gt; &gt;&gt; old.&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; What is the lowest version requirement of torque for open-mpi-
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 1.3.2? The
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; README file didn't specify this detail. Does anyone know more
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; about it?
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Thanks in advance,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Kai
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; --------------------
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Kai Song
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; &lt;ksong_at_[hidden]&gt; 1.510.486.4894
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; High Performance Computing Services (HPCS) Intern
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Lawrence Berkeley National Laboratory - <a href="http://scs.lbl.gov">http://scs.lbl.gov</a>
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="10080.php">David Doria: "Re: [OMPI users] Backwards compatibility?"</a>
<li><strong>Previous message:</strong> <a href="10078.php">Ralph Castain: "Re: [OMPI users] Backwards compatibility?"</a>
<li><strong>In reply to:</strong> <a href="10070.php">Ralph Castain: "Re: [OMPI users] Open-MPI-1.3.2 compatibility with old torque?"</a>
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
