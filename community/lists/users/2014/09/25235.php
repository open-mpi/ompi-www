<?
$subject_val = "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  2 20:38:25 2014" -->
<!-- isoreceived="20140903003825" -->
<!-- sent="Wed, 3 Sep 2014 00:38:21 +0000" -->
<!-- isosent="20140903003821" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs" -->
<!-- id="4ECBF12E-BFE3-48B6-97F8-02BFA790C04C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AB610FDB-E31F-4498-8123-608C91790648_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-02 20:38:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25236.php">Siegmar Gross: "[OMPI users] shmem.jar not available for Solaris"</a>
<li><strong>Previous message:</strong> <a href="25234.php">Ralph Castain: "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
<li><strong>In reply to:</strong> <a href="25234.php">Ralph Castain: "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25248.php">Matt Thompson: "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
<li><strong>Reply:</strong> <a href="25248.php">Matt Thompson: "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah, I see the &quot;sh: tcp://10.1.25.142,172.31.1.254,10.12.25.142:41686: No such file or directory&quot; message now -- I was looking for something like that when I replied before and missed it.
<br>
<p>I really wish I understood why the heck that is happening; it doesn't seem to make sense.  
<br>
<p>Matt: Random thought -- is your &quot;srun&quot; a shell script, perchance?  (it shouldn't be, but perhaps there's some kind of local override...?)
<br>
<p>Ralph's point on the call today is that it doesn't matter *how* this problem is happening.  It *is* happening to real users, and so we need to account for it.
<br>
<p>But it really bothers me that we don't understand *how/why* this is happening (e.g., is this OMPI's fault somehow?  I don't think so, but then again, we don't understand how it's happening).  *Somewhere* in there, a shell is getting invoked.  But &quot;srun&quot; shouldn't be invoking a shell on the remote side -- it should be directly fork/exec'ing the tokens with no shell interpretation at all.
<br>
<p><p><p><p>On Sep 2, 2014, at 7:04 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I can answer that for you right now. The launch of the orted's is what is failing, and they are &quot;silently&quot; failing at this time. The reason is simple:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. we are failing due to truncation of the HNP uri at the first semicolon. This causes the orted to emit an ORTE_ERROR_LOG message and then abort with a non-zero exit status
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. we throw away the error message unless someone adds --debug-daemons because we redirect the srun output to /dev/null. This is done because slurm spits out other things during our normal operation that confuse users
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3. srun detects the non-zero exit status of the orted and aborts the rest of the job.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So when Matt adds --debug-daemons, he then sees the error messages. When he further adds the oob and plm verbosity, the true error is fully exposed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 2, 2014, at 2:35 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Matt --
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We were discussing this issue on our weekly OMPI engineering call today.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Can you check one thing for me?  With the un-edited 1.8.2 tarball installation, I see that you're getting no output for commands that you run -- but also no errors.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Can you verify and see if your commands are actually *running*?  E.g, try:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; $ cat &gt; script.sh &lt;&lt;EOF
</span><br>
<span class="quotelev2">&gt;&gt; #!/bin/sh
</span><br>
<span class="quotelev2">&gt;&gt; echo hello world
</span><br>
<span class="quotelev2">&gt;&gt; sleep 600
</span><br>
<span class="quotelev2">&gt;&gt; echo goodbye world
</span><br>
<span class="quotelev2">&gt;&gt; EOF
</span><br>
<span class="quotelev2">&gt;&gt; $ chmod +x script.sh
</span><br>
<span class="quotelev2">&gt;&gt; $ setenv OMPI_MCA_shmem_mmap_enable_nfs_warning 0
</span><br>
<span class="quotelev2">&gt;&gt; $ /discover/nobackup/mathomp4/MPI/gcc_4.9.1-openmpi_1.8.2-clean/bin/mpirun -np 8 script.sh
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; and then go &quot;ps&quot; on the back-end nodes and see if there is an &quot;orted&quot; process and N &quot;sleep 600&quot; processes running on them.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm *assuming* you won't see the &quot;hello world&quot; output.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The purpose of this test is that I want to see if OMPI is just totally erring out and not even running your job (which is quite unlikely; OMPI should be much more noisy when this happens), or whether we're simply not seeing the stdout from the job.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 2, 2014, at 9:36 AM, Matt Thompson &lt;fortran_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On that machine, it would be SLES 11 SP1. I think it's soon transitioning to SLES 11 SP3.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I also use Open MPI on an RHEL 6.5 box (possibly soon to be RHEL 7).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mon, Sep 1, 2014 at 8:41 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks - I expect we'll have to release 1.8.3 soon to fix this in case others have similar issues. Out of curiosity, what OS are you using?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sep 1, 2014, at 9:00 AM, Matt Thompson &lt;fortran_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Okay that seems to have done it here (well, minus the usual shmem_mmap_enable_nfs_warning that our system always generates):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (1033) $ setenv OMPI_MCA_shmem_mmap_enable_nfs_warning 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (1034) $ /discover/nobackup/mathomp4/MPI/gcc_4.9.1-openmpi_1.8.2-debug-patch/bin/mpirun -np 8 ./helloWorld.182-debug-patch.x
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Process    7 of    8 is on borg01w218
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Process    5 of    8 is on borg01w218
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Process    1 of    8 is on borg01w218
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Process    3 of    8 is on borg01w218
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Process    0 of    8 is on borg01w218
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Process    2 of    8 is on borg01w218
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Process    4 of    8 is on borg01w218
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Process    6 of    8 is on borg01w218
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'll ask the admin to apply the patch locally...and wait for 1.8.3, I suppose.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Matt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Sun, Aug 31, 2014 at 10:08 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hmmm....I may see the problem. Would you be so kind as to apply the attached patch to your 1.8.2 code, rebuild, and try again?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Much appreciate the help. Everyone's system is slightly different, and I think you've uncovered one of those differences.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Aug 31, 2014, at 6:25 AM, Matt Thompson &lt;fortran_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Sorry it took me a bit of time. Here you go:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (1002) $ /discover/nobackup/mathomp4/MPI/gcc_4.9.1-openmpi_1.8.2-debug/bin/mpirun --leave-session-attached --debug-daemons --mca oob_base_verbose 10 -mca plm_base_verbose 5 -np 8 ./helloWorld.182-debug.x
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w063:03815] mca:base:select:(  plm) Querying component [isolated]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w063:03815] mca:base:select:(  plm) Query of component [isolated] set priority to 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w063:03815] mca:base:select:(  plm) Querying component [rsh]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w063:03815] [[INVALID],INVALID] plm:rsh_lookup on agent ssh : rsh path NULL
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w063:03815] mca:base:select:(  plm) Query of component [rsh] set priority to 10
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w063:03815] mca:base:select:(  plm) Querying component [slurm]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w063:03815] [[INVALID],INVALID] plm:slurm: available for selection
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w063:03815] mca:base:select:(  plm) Query of component [slurm] set priority to 75
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w063:03815] mca:base:select:(  plm) Selected component [slurm]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w063:03815] plm:base:set_hnp_name: initial bias 3815 nodename hash 1757783593
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w063:03815] plm:base:set_hnp_name: final jobfam 49163
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w063:03815] mca: base: components_register: registering oob components
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w063:03815] mca: base: components_register: found loaded component tcp
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w063:03815] mca: base: components_register: component tcp register function successful
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w063:03815] mca: base: components_open: opening oob components
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w063:03815] mca: base: components_open: found loaded component tcp
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w063:03815] mca: base: components_open: component tcp open function successful
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w063:03815] mca:oob:select: checking available component tcp
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w063:03815] mca:oob:select: Querying component [tcp]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w063:03815] oob:tcp: component_available called
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w063:03815] WORKING INTERFACE 1 KERNEL INDEX 1 FAMILY: V4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w063:03815] WORKING INTERFACE 2 KERNEL INDEX 1 FAMILY: V4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w063:03815] WORKING INTERFACE 3 KERNEL INDEX 2 FAMILY: V4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w063:03815] [[49163,0],0] oob:tcp:init adding 10.1.24.63 to our list of V4 connections
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w063:03815] WORKING INTERFACE 4 KERNEL INDEX 4 FAMILY: V4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w063:03815] [[49163,0],0] oob:tcp:init adding 172.31.1.254 to our list of V4 connections
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w063:03815] WORKING INTERFACE 5 KERNEL INDEX 5 FAMILY: V4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w063:03815] [[49163,0],0] oob:tcp:init adding 10.12.24.63 to our list of V4 connections
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w063:03815] [[49163,0],0] TCP STARTUP
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w063:03815] [[49163,0],0] attempting to bind to IPv4 port 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w063:03815] [[49163,0],0] assigned IPv4 port 41373
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w063:03815] mca:oob:select: Adding component to end
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w063:03815] mca:oob:select: Found 1 active transports
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w063:03815] [[49163,0],0] plm:base:receive start comm
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w063:03815] [[49163,0],0] plm:base:setup_job
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w063:03815] [[49163,0],0] plm:slurm: LAUNCH DAEMONS CALLED
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w063:03815] [[49163,0],0] plm:base:setup_vm
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w063:03815] [[49163,0],0] plm:base:setup_vm creating map
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w063:03815] [[49163,0],0] plm:base:setup_vm add new daemon [[49163,0],1]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w063:03815] [[49163,0],0] plm:base:setup_vm assigning new daemon [[49163,0],1] to node borg01w064
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w063:03815] [[49163,0],0] plm:base:setup_vm add new daemon [[49163,0],2]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w063:03815] [[49163,0],0] plm:base:setup_vm assigning new daemon [[49163,0],2] to node borg01w065
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w063:03815] [[49163,0],0] plm:base:setup_vm add new daemon [[49163,0],3]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w063:03815] [[49163,0],0] plm:base:setup_vm assigning new daemon [[49163,0],3] to node borg01w069
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w063:03815] [[49163,0],0] plm:base:setup_vm add new daemon [[49163,0],4]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w063:03815] [[49163,0],0] plm:base:setup_vm assigning new daemon [[49163,0],4] to node borg01w070
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w063:03815] [[49163,0],0] plm:base:setup_vm add new daemon [[49163,0],5]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w063:03815] [[49163,0],0] plm:base:setup_vm assigning new daemon [[49163,0],5] to node borg01w071
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w063:03815] [[49163,0],0] plm:slurm: launching on nodes borg01w064,borg01w065,borg01w069,borg01w070,borg01w071
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w063:03815] [[49163,0],0] plm:slurm: Set prefix:/discover/nobackup/mathomp4/MPI/gcc_4.9.1-openmpi_1.8.2-debug
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w063:03815] [[49163,0],0] plm:slurm: final top-level argv:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 	srun --ntasks-per-node=1 --kill-on-bad-exit --cpu_bind=none --nodes=5 --nodelist=borg01w064,borg01w065,borg01w069,borg01w070,borg01w071 --ntasks=5 orted -mca orte_debug_daemons 1 -mca orte_leave_session_attached 1 -mca orte_ess_jobid 3221946368 -mca orte_ess_vpid 1 -mca orte_ess_num_procs 6 -mca orte_hnp_uri 3221946368.0;tcp://10.1.24.63,172.31.1.254,10.12.24.63:41373 --mca oob_base_verbose 10 -mca plm_base_verbose 5
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w063:03815] [[49163,0],0] plm:slurm: reset PATH: /discover/nobackup/mathomp4/MPI/gcc_4.9.1-openmpi_1.8.2-debug/bin:/usr/local/other/SLES11/gcc/4.9.1/bin:/usr/local/other/SLES11.1/git/1.8.5.2/libexec/git-core:/usr/local/other/SLES11.1/git/1.8.5.2/bin:/usr/local/other/SLES11/svn/1.6.17/bin:/usr/local/other/SLES11/tkcvs/8.2.3/gcc-4.3.2/bin:.:/home/mathomp4/bin:/home/mathomp4/cvstools:/discover/nobackup/projects/gmao/share/dasilva/opengrads/Contents:/usr/local/other/Htop/1.0/bin:/usr/local/other/SLES11/gnuplot/4.6.0/gcc-4.3.2/bin:/usr/local/other/SLES11/xpdf/3.03-gcc-4.3.2/bin:/home/mathomp4/src/pdtoolkit-3.16/x86_64/bin:/discover/nobackup/mathomp4/WavewatchIII-GMAO/bin:/discover/nobackup/mathomp4/WavewatchIII-GMAO/exe:/usr/local/other/pods:/usr/local/other/SLES11.1/R/3.1.0/gcc-4.3.4/lib64/R/bin:.:/home/mathomp4/bin:/home/mathomp4/cvstools:/discover/nobackup/projects/gmao/share/dasilva/opengrads/Contents:/usr/local/other/Htop/1.0/bin:/usr/local/other/SLES11/gnuplot/4.
</span><br>
<span class="quotelev1">&gt; 6
</span><br>
<span class="quotelev2">&gt;&gt; .0/gcc-4.3.2/bin:/usr/local/other/SLES11/xpdf/3.03-gcc-4.3.2/bin:/home/mathomp4/src/pdtoolkit-3.16/x86_64/bin:/discover/nobackup/mathomp4/WavewatchIII-GMAO/bin:/discover/nobackup/mathomp4/WavewatchIII-GMAO/exe:/usr/local/other/pods:/usr/local/other/SLES11.1/R/3.1.0/gcc-4.3.4/lib64/R/bin:/home/mathomp4/bin:/usr/bin:/bin:/usr/sbin:/sbin:/usr/local/bin:/usr/bin/X11:/usr/X11R6/bin:/usr/games:/opt/kde3/bin:/usr/lib/mit/bin:/usr/lib/mit/sbin:/usr/slurm/bin
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w063:03815] [[49163,0],0] plm:slurm: reset LD_LIBRARY_PATH: /discover/nobackup/mathomp4/MPI/gcc_4.9.1-openmpi_1.8.2-debug/lib:/usr/local/other/SLES11/gcc/4.9.1/lib64:/usr/local/other/SLES11.1/git/1.8.5.2/lib:/usr/local/other/SLES11/svn/1.6.17/lib:/usr/local/other/SLES11/tkcvs/8.2.3/gcc-4.3.2/lib
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; srun.slurm: cluster configuration lacks support for cpu binding
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; srun.slurm: cluster configuration lacks support for cpu binding
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w065:15893] mca: base: components_register: registering oob components
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w065:15893] mca: base: components_register: found loaded component tcp
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w065:15893] mca: base: components_register: component tcp register function successful
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w065:15893] mca: base: components_open: opening oob components
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w065:15893] mca: base: components_open: found loaded component tcp
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w065:15893] mca: base: components_open: component tcp open function successful
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w065:15893] mca:oob:select: checking available component tcp
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w065:15893] mca:oob:select: Querying component [tcp]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w065:15893] oob:tcp: component_available called
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w065:15893] WORKING INTERFACE 1 KERNEL INDEX 1 FAMILY: V4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w065:15893] WORKING INTERFACE 2 KERNEL INDEX 1 FAMILY: V4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w065:15893] WORKING INTERFACE 3 KERNEL INDEX 2 FAMILY: V4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w065:15893] [[49163,0],2] oob:tcp:init adding 10.1.24.65 to our list of V4 connections
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w065:15893] WORKING INTERFACE 4 KERNEL INDEX 4 FAMILY: V4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w065:15893] [[49163,0],2] oob:tcp:init adding 172.31.1.254 to our list of V4 connections
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w065:15893] WORKING INTERFACE 5 KERNEL INDEX 5 FAMILY: V4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w065:15893] [[49163,0],2] oob:tcp:init adding 10.12.24.65 to our list of V4 connections
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w065:15893] [[49163,0],2] TCP STARTUP
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w065:15893] [[49163,0],2] attempting to bind to IPv4 port 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w065:15893] [[49163,0],2] assigned IPv4 port 43456
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w065:15893] mca:oob:select: Adding component to end
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w065:15893] mca:oob:select: Found 1 active transports
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w070:12645] mca: base: components_register: registering oob components
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w070:12645] mca: base: components_register: found loaded component tcp
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w070:12645] mca: base: components_register: component tcp register function successful
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w070:12645] mca: base: components_open: opening oob components
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w070:12645] mca: base: components_open: found loaded component tcp
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w070:12645] mca: base: components_open: component tcp open function successful
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w070:12645] mca:oob:select: checking available component tcp
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w070:12645] mca:oob:select: Querying component [tcp]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w070:12645] oob:tcp: component_available called
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w070:12645] WORKING INTERFACE 1 KERNEL INDEX 1 FAMILY: V4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w070:12645] WORKING INTERFACE 2 KERNEL INDEX 1 FAMILY: V4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w070:12645] WORKING INTERFACE 3 KERNEL INDEX 2 FAMILY: V4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w070:12645] [[49163,0],4] oob:tcp:init adding 10.1.24.70 to our list of V4 connections
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w070:12645] WORKING INTERFACE 4 KERNEL INDEX 4 FAMILY: V4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w070:12645] [[49163,0],4] oob:tcp:init adding 172.31.1.254 to our list of V4 connections
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w070:12645] WORKING INTERFACE 5 KERNEL INDEX 5 FAMILY: V4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w070:12645] [[49163,0],4] oob:tcp:init adding 10.12.24.70 to our list of V4 connections
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w070:12645] [[49163,0],4] TCP STARTUP
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w070:12645] [[49163,0],4] attempting to bind to IPv4 port 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w070:12645] [[49163,0],4] assigned IPv4 port 53062
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w070:12645] mca:oob:select: Adding component to end
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w070:12645] mca:oob:select: Found 1 active transports
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w064:16565] mca: base: components_register: registering oob components
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w064:16565] mca: base: components_register: found loaded component tcp
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w064:16565] mca: base: components_register: component tcp register function successful
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w071:14879] mca: base: components_register: registering oob components
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w071:14879] mca: base: components_register: found loaded component tcp
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w064:16565] mca: base: components_open: opening oob components
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w064:16565] mca: base: components_open: found loaded component tcp
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w064:16565] mca: base: components_open: component tcp open function successful
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w064:16565] mca:oob:select: checking available component tcp
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w064:16565] mca:oob:select: Querying component [tcp]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w064:16565] oob:tcp: component_available called
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w064:16565] WORKING INTERFACE 1 KERNEL INDEX 1 FAMILY: V4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w064:16565] WORKING INTERFACE 2 KERNEL INDEX 1 FAMILY: V4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w064:16565] WORKING INTERFACE 3 KERNEL INDEX 2 FAMILY: V4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w064:16565] [[49163,0],1] oob:tcp:init adding 10.1.24.64 to our list of V4 connections
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w064:16565] WORKING INTERFACE 4 KERNEL INDEX 4 FAMILY: V4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w064:16565] [[49163,0],1] oob:tcp:init adding 172.31.1.254 to our list of V4 connections
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w064:16565] WORKING INTERFACE 5 KERNEL INDEX 5 FAMILY: V4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w064:16565] [[49163,0],1] oob:tcp:init adding 10.12.24.64 to our list of V4 connections
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w064:16565] [[49163,0],1] TCP STARTUP
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w064:16565] [[49163,0],1] attempting to bind to IPv4 port 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w064:16565] [[49163,0],1] assigned IPv4 port 43828
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w064:16565] mca:oob:select: Adding component to end
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w069:30276] mca: base: components_register: registering oob components
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w069:30276] mca: base: components_register: found loaded component tcp
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w071:14879] mca: base: components_register: component tcp register function successful
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w069:30276] mca: base: components_register: component tcp register function successful
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w071:14879] mca: base: components_open: opening oob components
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w071:14879] mca: base: components_open: found loaded component tcp
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w071:14879] mca: base: components_open: component tcp open function successful
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w071:14879] mca:oob:select: checking available component tcp
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w071:14879] mca:oob:select: Querying component [tcp]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w071:14879] oob:tcp: component_available called
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w069:30276] mca: base: components_open: opening oob components
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w069:30276] mca: base: components_open: found loaded component tcp
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w069:30276] mca: base: components_open: component tcp open function successful
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w071:14879] WORKING INTERFACE 1 KERNEL INDEX 1 FAMILY: V4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w071:14879] WORKING INTERFACE 2 KERNEL INDEX 1 FAMILY: V4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w071:14879] WORKING INTERFACE 3 KERNEL INDEX 2 FAMILY: V4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w071:14879] [[49163,0],5] oob:tcp:init adding 10.1.24.71 to our list of V4 connections
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w071:14879] WORKING INTERFACE 4 KERNEL INDEX 4 FAMILY: V4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w069:30276] mca:oob:select: checking available component tcp
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w069:30276] mca:oob:select: Querying component [tcp]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w069:30276] oob:tcp: component_available called
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w071:14879] [[49163,0],5] oob:tcp:init adding 172.31.1.254 to our list of V4 connections
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w071:14879] WORKING INTERFACE 5 KERNEL INDEX 5 FAMILY: V4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w071:14879] [[49163,0],5] oob:tcp:init adding 10.12.24.71 to our list of V4 connections
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w071:14879] [[49163,0],5] TCP STARTUP
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w069:30276] WORKING INTERFACE 1 KERNEL INDEX 1 FAMILY: V4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w069:30276] WORKING INTERFACE 2 KERNEL INDEX 1 FAMILY: V4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w069:30276] WORKING INTERFACE 3 KERNEL INDEX 2 FAMILY: V4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w069:30276] [[49163,0],3] oob:tcp:init adding 10.1.24.69 to our list of V4 connections
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w069:30276] WORKING INTERFACE 4 KERNEL INDEX 4 FAMILY: V4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w069:30276] [[49163,0],3] oob:tcp:init adding 172.31.1.254 to our list of V4 connections
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w069:30276] WORKING INTERFACE 5 KERNEL INDEX 5 FAMILY: V4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w069:30276] [[49163,0],3] oob:tcp:init adding 10.12.24.69 to our list of V4 connections
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w069:30276] [[49163,0],3] TCP STARTUP
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w071:14879] [[49163,0],5] attempting to bind to IPv4 port 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w069:30276] [[49163,0],3] attempting to bind to IPv4 port 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w069:30276] [[49163,0],3] assigned IPv4 port 39299
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w064:16565] mca:oob:select: Found 1 active transports
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w069:30276] mca:oob:select: Adding component to end
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w069:30276] mca:oob:select: Found 1 active transports
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w071:14879] [[49163,0],5] assigned IPv4 port 56113
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w071:14879] mca:oob:select: Adding component to end
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w071:14879] mca:oob:select: Found 1 active transports
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; srun.slurm: error: borg01w064: task 0: Exited with exit code 213
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; srun.slurm: Terminating job step 2347743.3
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; srun.slurm: Job step aborted: Waiting up to 2 seconds for job step to finish.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w070:12645] [[49163,0],4] ORTE_ERROR_LOG: Bad parameter in file base/rml_base_contact.c at line 161
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w070:12645] [[49163,0],4] ORTE_ERROR_LOG: Bad parameter in file routed_binomial.c at line 498
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w070:12645] [[49163,0],4] ORTE_ERROR_LOG: Bad parameter in file base/ess_base_std_orted.c at line 539
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w065:15893] [[49163,0],2] ORTE_ERROR_LOG: Bad parameter in file base/rml_base_contact.c at line 161
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w065:15893] [[49163,0],2] ORTE_ERROR_LOG: Bad parameter in file routed_binomial.c at line 498
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w065:15893] [[49163,0],2] ORTE_ERROR_LOG: Bad parameter in file base/ess_base_std_orted.c at line 539
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; slurmd[borg01w065]: *** STEP 2347743.3 KILLED AT 2014-08-31T09:24:17 WITH SIGNAL 9 ***
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; slurmd[borg01w070]: *** STEP 2347743.3 KILLED AT 2014-08-31T09:24:17 WITH SIGNAL 9 ***
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w064:16565] [[49163,0],1] ORTE_ERROR_LOG: Bad parameter in file base/rml_base_contact.c at line 161
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w064:16565] [[49163,0],1] ORTE_ERROR_LOG: Bad parameter in file routed_binomial.c at line 498
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w064:16565] [[49163,0],1] ORTE_ERROR_LOG: Bad parameter in file base/ess_base_std_orted.c at line 539
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w069:30276] [[49163,0],3] ORTE_ERROR_LOG: Bad parameter in file base/rml_base_contact.c at line 161
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w069:30276] [[49163,0],3] ORTE_ERROR_LOG: Bad parameter in file routed_binomial.c at line 498
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w069:30276] [[49163,0],3] ORTE_ERROR_LOG: Bad parameter in file base/ess_base_std_orted.c at line 539
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; slurmd[borg01w069]: *** STEP 2347743.3 KILLED AT 2014-08-31T09:24:17 WITH SIGNAL 9 ***
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w071:14879] [[49163,0],5] ORTE_ERROR_LOG: Bad parameter in file base/rml_base_contact.c at line 161
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w071:14879] [[49163,0],5] ORTE_ERROR_LOG: Bad parameter in file routed_binomial.c at line 498
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w071:14879] [[49163,0],5] ORTE_ERROR_LOG: Bad parameter in file base/ess_base_std_orted.c at line 539
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; slurmd[borg01w071]: *** STEP 2347743.3 KILLED AT 2014-08-31T09:24:17 WITH SIGNAL 9 ***
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; slurmd[borg01w065]: *** STEP 2347743.3 KILLED AT 2014-08-31T09:24:17 WITH SIGNAL 9 ***
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; slurmd[borg01w069]: *** STEP 2347743.3 KILLED AT 2014-08-31T09:24:17 WITH SIGNAL 9 ***
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; slurmd[borg01w070]: *** STEP 2347743.3 KILLED AT 2014-08-31T09:24:17 WITH SIGNAL 9 ***
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; slurmd[borg01w071]: *** STEP 2347743.3 KILLED AT 2014-08-31T09:24:17 WITH SIGNAL 9 ***
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; srun.slurm: error: borg01w069: task 2: Exited with exit code 213
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; srun.slurm: error: borg01w065: task 1: Exited with exit code 213
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; srun.slurm: error: borg01w071: task 4: Exited with exit code 213
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; srun.slurm: error: borg01w070: task 3: Exited with exit code 213
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; sh: tcp://10.1.24.63,172.31.1.254,10.12.24.63:41373: No such file or directory
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w063:03815] [[49163,0],0] plm:slurm: primary daemons complete!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w063:03815] [[49163,0],0] plm:base:receive stop comm
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w063:03815] [[49163,0],0] TCP SHUTDOWN
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w063:03815] mca: base: close: component tcp closed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [borg01w063:03815] mca: base: close: unloading component tcp
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Fri, Aug 29, 2014 at 3:18 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Rats - I also need &quot;-mca plm_base_verbose 5&quot; on there so I can see the cmd line being executed. Can you add it?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Aug 29, 2014, at 11:16 AM, Matt Thompson &lt;fortran_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Here you go:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; (1080) $ /discover/nobackup/mathomp4/MPI/gcc_4.9.1-openmpi_1.8.2-debug/bin/mpirun --leave-session-attached --debug-daemons --mca oob_base_verbose 10 -np 8 ./helloWorld.182-debug.x
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x142:29232] mca: base: components_register: registering oob components
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x142:29232] mca: base: components_register: found loaded component tcp
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x142:29232] mca: base: components_register: component tcp register function successful
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x142:29232] mca: base: components_open: opening oob components
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x142:29232] mca: base: components_open: found loaded component tcp
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x142:29232] mca: base: components_open: component tcp open function successful
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x142:29232] mca:oob:select: checking available component tcp
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x142:29232] mca:oob:select: Querying component [tcp]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x142:29232] oob:tcp: component_available called
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x142:29232] WORKING INTERFACE 1 KERNEL INDEX 1 FAMILY: V4
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x142:29232] WORKING INTERFACE 2 KERNEL INDEX 1 FAMILY: V4
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x142:29232] WORKING INTERFACE 3 KERNEL INDEX 2 FAMILY: V4
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x142:29232] [[52298,0],0] oob:tcp:init adding 10.1.25.142 to our list of V4 connections
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x142:29232] WORKING INTERFACE 4 KERNEL INDEX 4 FAMILY: V4
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x142:29232] [[52298,0],0] oob:tcp:init adding 172.31.1.254 to our list of V4 connections
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x142:29232] WORKING INTERFACE 5 KERNEL INDEX 5 FAMILY: V4
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x142:29232] [[52298,0],0] oob:tcp:init adding 10.12.25.142 to our list of V4 connections
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x142:29232] [[52298,0],0] TCP STARTUP
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x142:29232] [[52298,0],0] attempting to bind to IPv4 port 0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x142:29232] [[52298,0],0] assigned IPv4 port 41686
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x142:29232] mca:oob:select: Adding component to end
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x142:29232] mca:oob:select: Found 1 active transports
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; srun.slurm: cluster configuration lacks support for cpu binding
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; srun.slurm: cluster configuration lacks support for cpu binding
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x153:01290] mca: base: components_register: registering oob components
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x153:01290] mca: base: components_register: found loaded component tcp
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x143:13793] mca: base: components_register: registering oob components
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x143:13793] mca: base: components_register: found loaded component tcp
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x153:01290] mca: base: components_register: component tcp register function successful
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x153:01290] mca: base: components_open: opening oob components
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x153:01290] mca: base: components_open: found loaded component tcp
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x153:01290] mca: base: components_open: component tcp open function successful
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x153:01290] mca:oob:select: checking available component tcp
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x153:01290] mca:oob:select: Querying component [tcp]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x153:01290] oob:tcp: component_available called
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x153:01290] WORKING INTERFACE 1 KERNEL INDEX 1 FAMILY: V4
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x153:01290] WORKING INTERFACE 2 KERNEL INDEX 1 FAMILY: V4
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x153:01290] WORKING INTERFACE 3 KERNEL INDEX 2 FAMILY: V4
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x153:01290] [[52298,0],4] oob:tcp:init adding 10.1.25.153 to our list of V4 connections
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x153:01290] WORKING INTERFACE 4 KERNEL INDEX 4 FAMILY: V4
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x153:01290] [[52298,0],4] oob:tcp:init adding 172.31.1.254 to our list of V4 connections
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x153:01290] WORKING INTERFACE 5 KERNEL INDEX 5 FAMILY: V4
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x153:01290] [[52298,0],4] oob:tcp:init adding 10.12.25.153 to our list of V4 connections
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x153:01290] [[52298,0],4] TCP STARTUP
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x153:01290] [[52298,0],4] attempting to bind to IPv4 port 0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x143:13793] mca: base: components_register: component tcp register function successful
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x153:01290] [[52298,0],4] assigned IPv4 port 38028
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x143:13793] mca: base: components_open: opening oob components
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x143:13793] mca: base: components_open: found loaded component tcp
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x143:13793] mca: base: components_open: component tcp open function successful
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x143:13793] mca:oob:select: checking available component tcp
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x143:13793] mca:oob:select: Querying component [tcp]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x143:13793] oob:tcp: component_available called
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x143:13793] WORKING INTERFACE 1 KERNEL INDEX 1 FAMILY: V4
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x143:13793] WORKING INTERFACE 2 KERNEL INDEX 1 FAMILY: V4
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x143:13793] WORKING INTERFACE 3 KERNEL INDEX 2 FAMILY: V4
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x143:13793] [[52298,0],1] oob:tcp:init adding 10.1.25.143 to our list of V4 connections
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x143:13793] WORKING INTERFACE 4 KERNEL INDEX 4 FAMILY: V4
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x143:13793] [[52298,0],1] oob:tcp:init adding 172.31.1.254 to our list of V4 connections
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x143:13793] WORKING INTERFACE 5 KERNEL INDEX 5 FAMILY: V4
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x143:13793] [[52298,0],1] oob:tcp:init adding 10.12.25.143 to our list of V4 connections
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x143:13793] [[52298,0],1] TCP STARTUP
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x143:13793] [[52298,0],1] attempting to bind to IPv4 port 0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x153:01290] mca:oob:select: Adding component to end
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x153:01290] mca:oob:select: Found 1 active transports
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x143:13793] [[52298,0],1] assigned IPv4 port 44719
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x143:13793] mca:oob:select: Adding component to end
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x143:13793] mca:oob:select: Found 1 active transports
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x144:30878] mca: base: components_register: registering oob components
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x144:30878] mca: base: components_register: found loaded component tcp
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x144:30878] mca: base: components_register: component tcp register function successful
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x144:30878] mca: base: components_open: opening oob components
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x144:30878] mca: base: components_open: found loaded component tcp
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x144:30878] mca: base: components_open: component tcp open function successful
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x144:30878] mca:oob:select: checking available component tcp
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x144:30878] mca:oob:select: Querying component [tcp]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x144:30878] oob:tcp: component_available called
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x144:30878] WORKING INTERFACE 1 KERNEL INDEX 1 FAMILY: V4
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x144:30878] WORKING INTERFACE 2 KERNEL INDEX 1 FAMILY: V4
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x144:30878] WORKING INTERFACE 3 KERNEL INDEX 2 FAMILY: V4
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x144:30878] [[52298,0],2] oob:tcp:init adding 10.1.25.144 to our list of V4 connections
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x144:30878] WORKING INTERFACE 4 KERNEL INDEX 4 FAMILY: V4
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x144:30878] [[52298,0],2] oob:tcp:init adding 172.31.1.254 to our list of V4 connections
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x144:30878] WORKING INTERFACE 5 KERNEL INDEX 5 FAMILY: V4
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x144:30878] [[52298,0],2] oob:tcp:init adding 10.12.25.144 to our list of V4 connections
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x144:30878] [[52298,0],2] TCP STARTUP
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x144:30878] [[52298,0],2] attempting to bind to IPv4 port 0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x144:30878] [[52298,0],2] assigned IPv4 port 40700
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x144:30878] mca:oob:select: Adding component to end
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x144:30878] mca:oob:select: Found 1 active transports
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x154:01154] mca: base: components_register: registering oob components
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x154:01154] mca: base: components_register: found loaded component tcp
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x154:01154] mca: base: components_register: component tcp register function successful
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x154:01154] mca: base: components_open: opening oob components
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x154:01154] mca: base: components_open: found loaded component tcp
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x154:01154] mca: base: components_open: component tcp open function successful
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x154:01154] mca:oob:select: checking available component tcp
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x154:01154] mca:oob:select: Querying component [tcp]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x154:01154] oob:tcp: component_available called
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x154:01154] WORKING INTERFACE 1 KERNEL INDEX 1 FAMILY: V4
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x154:01154] WORKING INTERFACE 2 KERNEL INDEX 1 FAMILY: V4
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x154:01154] WORKING INTERFACE 3 KERNEL INDEX 2 FAMILY: V4
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x154:01154] [[52298,0],5] oob:tcp:init adding 10.1.25.154 to our list of V4 connections
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x154:01154] WORKING INTERFACE 4 KERNEL INDEX 4 FAMILY: V4
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x154:01154] [[52298,0],5] oob:tcp:init adding 172.31.1.254 to our list of V4 connections
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x154:01154] WORKING INTERFACE 5 KERNEL INDEX 5 FAMILY: V4
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x154:01154] [[52298,0],5] oob:tcp:init adding 10.12.25.154 to our list of V4 connections
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x154:01154] [[52298,0],5] TCP STARTUP
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x154:01154] [[52298,0],5] attempting to bind to IPv4 port 0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x154:01154] [[52298,0],5] assigned IPv4 port 41191
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x154:01154] mca:oob:select: Adding component to end
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x154:01154] mca:oob:select: Found 1 active transports
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x145:02419] mca: base: components_register: registering oob components
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x145:02419] mca: base: components_register: found loaded component tcp
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x145:02419] mca: base: components_register: component tcp register function successful
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x145:02419] mca: base: components_open: opening oob components
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x145:02419] mca: base: components_open: found loaded component tcp
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x145:02419] mca: base: components_open: component tcp open function successful
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x145:02419] mca:oob:select: checking available component tcp
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x145:02419] mca:oob:select: Querying component [tcp]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x145:02419] oob:tcp: component_available called
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x145:02419] WORKING INTERFACE 1 KERNEL INDEX 1 FAMILY: V4
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x145:02419] WORKING INTERFACE 2 KERNEL INDEX 1 FAMILY: V4
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x145:02419] WORKING INTERFACE 3 KERNEL INDEX 2 FAMILY: V4
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x145:02419] [[52298,0],3] oob:tcp:init adding 10.1.25.145 to our list of V4 connections
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x145:02419] WORKING INTERFACE 4 KERNEL INDEX 4 FAMILY: V4
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x145:02419] [[52298,0],3] oob:tcp:init adding 172.31.1.254 to our list of V4 connections
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x145:02419] WORKING INTERFACE 5 KERNEL INDEX 5 FAMILY: V4
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x145:02419] [[52298,0],3] oob:tcp:init adding 10.12.25.145 to our list of V4 connections
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x145:02419] [[52298,0],3] TCP STARTUP
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x145:02419] [[52298,0],3] attempting to bind to IPv4 port 0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x145:02419] [[52298,0],3] assigned IPv4 port 51079
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x145:02419] mca:oob:select: Adding component to end
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x145:02419] mca:oob:select: Found 1 active transports
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x144:30878] [[52298,0],2] ORTE_ERROR_LOG: Bad parameter in file base/rml_base_contact.c at line 161
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x144:30878] [[52298,0],2] ORTE_ERROR_LOG: Bad parameter in file routed_binomial.c at line 498
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x144:30878] [[52298,0],2] ORTE_ERROR_LOG: Bad parameter in file base/ess_base_std_orted.c at line 539
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; srun.slurm: error: borg01x143: task 0: Exited with exit code 213
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; srun.slurm: Terminating job step 2332583.24
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; slurmd[borg01x144]: *** STEP 2332583.24 KILLED AT 2014-08-29T13:59:30 WITH SIGNAL 9 ***
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; srun.slurm: Job step aborted: Waiting up to 2 seconds for job step to finish.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; srun.slurm: error: borg01x153: task 3: Exited with exit code 213
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x153:01290] [[52298,0],4] ORTE_ERROR_LOG: Bad parameter in file base/rml_base_contact.c at line 161
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x153:01290] [[52298,0],4] ORTE_ERROR_LOG: Bad parameter in file routed_binomial.c at line 498
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x153:01290] [[52298,0],4] ORTE_ERROR_LOG: Bad parameter in file base/ess_base_std_orted.c at line 539
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x143:13793] [[52298,0],1] ORTE_ERROR_LOG: Bad parameter in file base/rml_base_contact.c at line 161
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x143:13793] [[52298,0],1] ORTE_ERROR_LOG: Bad parameter in file routed_binomial.c at line 498
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x143:13793] [[52298,0],1] ORTE_ERROR_LOG: Bad parameter in file base/ess_base_std_orted.c at line 539
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; slurmd[borg01x144]: *** STEP 2332583.24 KILLED AT 2014-08-29T13:59:30 WITH SIGNAL 9 ***
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; srun.slurm: error: borg01x144: task 1: Exited with exit code 213
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x154:01154] [[52298,0],5] ORTE_ERROR_LOG: Bad parameter in file base/rml_base_contact.c at line 161
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x154:01154] [[52298,0],5] ORTE_ERROR_LOG: Bad parameter in file routed_binomial.c at line 498
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x154:01154] [[52298,0],5] ORTE_ERROR_LOG: Bad parameter in file base/ess_base_std_orted.c at line 539
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; slurmd[borg01x154]: *** STEP 2332583.24 KILLED AT 2014-08-29T13:59:30 WITH SIGNAL 9 ***
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; slurmd[borg01x154]: *** STEP 2332583.24 KILLED AT 2014-08-29T13:59:30 WITH SIGNAL 9 ***
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; srun.slurm: error: borg01x154: task 4: Exited with exit code 213
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; srun.slurm: error: borg01x145: task 2: Exited with exit code 213
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x145:02419] [[52298,0],3] ORTE_ERROR_LOG: Bad parameter in file base/rml_base_contact.c at line 161
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x145:02419] [[52298,0],3] ORTE_ERROR_LOG: Bad parameter in file routed_binomial.c at line 498
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x145:02419] [[52298,0],3] ORTE_ERROR_LOG: Bad parameter in file base/ess_base_std_orted.c at line 539
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; slurmd[borg01x145]: *** STEP 2332583.24 KILLED AT 2014-08-29T13:59:30 WITH SIGNAL 9 ***
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; slurmd[borg01x145]: *** STEP 2332583.24 KILLED AT 2014-08-29T13:59:30 WITH SIGNAL 9 ***
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; sh: tcp://10.1.25.142,172.31.1.254,10.12.25.142:41686: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x142:29232] [[52298,0],0] TCP SHUTDOWN
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x142:29232] mca: base: close: component tcp closed
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [borg01x142:29232] mca: base: close: unloading component tcp
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Note, if I can get the allocation today, I want to try doing all this on a single SandyBridge node, rather than on 6. It might make comparing various runs a bit easier!
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Matt
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Fri, Aug 29, 2014 at 12:42 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Okay, something quite weird is happening here. I can't replicate using the 1.8.2 release tarball on a slurm machine, so my guess is that something else is going on here.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Could you please rebuild the 1.8.2 code with --enable-debug on the configure line (assuming you haven't already done so), and then rerun that version as before but adding &quot;--mca oob_base_verbose 10&quot; to the cmd line?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Aug 29, 2014, at 4:22 AM, Matt Thompson &lt;fortran_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Ralph,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; For 1.8.2rc4 I get:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; (1003) $ /discover/nobackup/mathomp4/MPI/gcc_4.9.1-openmpi_1.8.2rc4/bin/mpirun --leave-session-attached --debug-daemons -np 8 ./helloWorld.182.x
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; srun.slurm: cluster configuration lacks support for cpu binding
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; srun.slurm: cluster configuration lacks support for cpu binding
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Daemon [[47143,0],5] checking in as pid 10990 on host borg01x154
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [borg01x154:10990] [[47143,0],5] orted: up and running - waiting for commands!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Daemon [[47143,0],1] checking in as pid 23473 on host borg01x143
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Daemon [[47143,0],2] checking in as pid 8250 on host borg01x144
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [borg01x144:08250] [[47143,0],2] orted: up and running - waiting for commands!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [borg01x143:23473] [[47143,0],1] orted: up and running - waiting for commands!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Daemon [[47143,0],3] checking in as pid 12320 on host borg01x145
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Daemon [[47143,0],4] checking in as pid 10902 on host borg01x153
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [borg01x153:10902] [[47143,0],4] orted: up and running - waiting for commands!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [borg01x145:12320] [[47143,0],3] orted: up and running - waiting for commands!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [borg01x142:01629] [[47143,0],0] orted_cmd: received add_local_procs
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [borg01x144:08250] [[47143,0],2] orted_cmd: received add_local_procs
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [borg01x153:10902] [[47143,0],4] orted_cmd: received add_local_procs
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [borg01x143:23473] [[47143,0],1] orted_cmd: received add_local_procs
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [borg01x145:12320] [[47143,0],3] orted_cmd: received add_local_procs
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [borg01x154:10990] [[47143,0],5] orted_cmd: received add_local_procs
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [borg01x142:01629] [[47143,0],0] orted_recv: received sync+nidmap from local proc [[47143,1],0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [borg01x142:01629] [[47143,0],0] orted_recv: received sync+nidmap from local proc [[47143,1],2]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [borg01x142:01629] [[47143,0],0] orted_recv: received sync+nidmap from local proc [[47143,1],3]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [borg01x142:01629] [[47143,0],0] orted_recv: received sync+nidmap from local proc [[47143,1],1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [borg01x142:01629] [[47143,0],0] orted_recv: received sync+nidmap from local proc [[47143,1],5]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [borg01x142:01629] [[47143,0],0] orted_recv: received sync+nidmap from local proc [[47143,1],4]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [borg01x142:01629] [[47143,0],0] orted_recv: received sync+nidmap from local proc [[47143,1],6]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [borg01x142:01629] [[47143,0],0] orted_recv: received sync+nidmap from local proc [[47143,1],7]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; MPIR_being_debugged = 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; MPIR_debug_state = 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; MPIR_partial_attach_ok = 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; MPIR_i_am_starter = 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; MPIR_forward_output = 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; MPIR_proctable_size = 8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; MPIR_proctable:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   (i, host, exe, pid) = (0, borg01x142, /home/mathomp4/HelloWorldTest/./helloWorld.182.x, 1647)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   (i, host, exe, pid) = (1, borg01x142, /home/mathomp4/HelloWorldTest/./helloWorld.182.x, 1648)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   (i, host, exe, pid) = (2, borg01x142, /home/mathomp4/HelloWorldTest/./helloWorld.182.x, 1650)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   (i, host, exe, pid) = (3, borg01x142, /home/mathomp4/HelloWorldTest/./helloWorld.182.x, 1652)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   (i, host, exe, pid) = (4, borg01x142, /home/mathomp4/HelloWorldTest/./helloWorld.182.x, 1654)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   (i, host, exe, pid) = (5, borg01x142, /home/mathomp4/HelloWorldTest/./helloWorld.182.x, 1656)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   (i, host, exe, pid) = (6, borg01x142, /home/mathomp4/HelloWorldTest/./helloWorld.182.x, 1658)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   (i, host, exe, pid) = (7, borg01x142, /home/mathomp4/HelloWorldTest/./helloWorld.182.x, 1660)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; MPIR_executable_path: NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; MPIR_server_arguments: NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [borg01x142:01629] [[47143,0],0] orted_cmd: received message_local_procs
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [borg01x144:08250] [[47143,0],2] orted_cmd: received message_local_procs
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [borg01x143:23473] [[47143,0],1] orted_cmd: received message_local_procs
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [borg01x153:10902] [[47143,0],4] orted_cmd: received message_local_procs
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [borg01x154:10990] [[47143,0],5] orted_cmd: received message_local_procs
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [borg01x145:12320] [[47143,0],3] orted_cmd: received message_local_procs
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [borg01x142:01629] [[47143,0],0] orted_cmd: received message_local_procs
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [borg01x143:23473] [[47143,0],1] orted_cmd: received message_local_procs
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [borg01x144:08250] [[47143,0],2] orted_cmd: received message_local_procs
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [borg01x153:10902] [[47143,0],4] orted_cmd: received message_local_procs
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [borg01x145:12320] [[47143,0],3] orted_cmd: received message_local_procs
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Process    2 of    8 is on borg01x142
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Process    5 of    8 is on borg01x142
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Process    4 of    8 is on borg01x142
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Process    1 of    8 is on borg01x142
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Process    0 of    8 is on borg01x142
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Process    3 of    8 is on borg01x142
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Process    6 of    8 is on borg01x142
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Process    7 of    8 is on borg01x142
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [borg01x154:10990] [[47143,0],5] orted_cmd: received message_local_procs
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [borg01x142:01629] [[47143,0],0] orted_cmd: received message_local_procs
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [borg01x144:08250] [[47143,0],2] orted_cmd: received message_local_procs
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [borg01x143:23473] [[47143,0],1] orted_cmd: received message_local_procs
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [borg01x153:10902] [[47143,0],4] orted_cmd: received message_local_procs
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [borg01x154:10990] [[47143,0],5] orted_cmd: received message_local_procs
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [borg01x145:12320] [[47143,0],3] orted_cmd: received message_local_procs
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [borg01x142:01629] [[47143,0],0] orted_recv: received sync from local proc [[47143,1],2]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [borg01x142:01629] [[47143,0],0] orted_recv: received sync from local proc [[47143,1],1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [borg01x142:01629] [[47143,0],0] orted_recv: received sync from local proc [[47143,1],3]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [borg01x142:01629] [[47143,0],0] orted_recv: received sync from local proc [[47143,1],0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [borg01x142:01629] [[47143,0],0] orted_recv: received sync from local proc [[47143,1],4]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [borg01x142:01629] [[47143,0],0] orted_recv: received sync from local proc [[47143,1],6]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [borg01x142:01629] [[47143,0],0] orted_recv: received sync from local proc [[47143,1],5]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [borg01x142:01629] [[47143,0],0] orted_recv: received sync from local proc [[47143,1],7]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [borg01x142:01629] [[47143,0],0] orted_cmd: received exit cmd
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [borg01x144:08250] [[47143,0],2] orted_cmd: received exit cmd
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [borg01x144:08250] [[47143,0],2] orted_cmd: all routes and children gone - exiting
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [borg01x153:10902] [[47143,0],4] orted_cmd: received exit cmd
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [borg01x153:10902] [[47143,0],4] orted_cmd: all routes and children gone - exiting
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [borg01x143:23473] [[47143,0],1] orted_cmd: received exit cmd
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [borg01x154:10990] [[47143,0],5] orted_cmd: received exit cmd
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [borg01x154:10990] [[47143,0],5] orted_cmd: all routes and children gone - exiting
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [borg01x145:12320] [[47143,0],3] orted_cmd: received exit cmd
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [borg01x145:12320] [[47143,0],3] orted_cmd: all routes and children gone - exiting
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Using the 1.8.2 mpirun:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; (1004) $ /discover/nobackup/mathomp4/MPI/gcc_4.9.1-openmpi_1.8.2/bin/mpirun --leave-session-attached --debug-daemons -np 8 ./helloWorld.182.x
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; srun.slurm: cluster configuration lacks support for cpu binding
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; srun.slurm: cluster configuration lacks support for cpu binding
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [borg01x143:23494] [[47330,0],1] ORTE_ERROR_LOG: Bad parameter in file base/rml_base_contact.c at line 161
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [borg01x143:23494] [[47330,0],1] ORTE_ERROR_LOG: Bad parameter in file routed_binomial.c at line 498
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [borg01x143:23494] [[47330,0],1] ORTE_ERROR_LOG: Bad parameter in file base/ess_base_std_orted.c at line 539
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; srun.slurm: error: borg01x143: task 0: Exited with exit code 213
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; srun.slurm: Terminating job step 2332583.4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [borg01x153:10915] [[47330,0],4] ORTE_ERROR_LOG: Bad parameter in file base/rml_base_contact.c at line 161
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [borg01x153:10915] [[47330,0],4] ORTE_ERROR_LOG: Bad parameter in file routed_binomial.c at line 498
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [borg01x153:10915] [[47330,0],4] ORTE_ERROR_LOG: Bad parameter in file base/ess_base_std_orted.c at line 539
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [borg01x144:08263] [[47330,0],2] ORTE_ERROR_LOG: Bad parameter in file base/rml_base_contact.c at line 161
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [borg01x144:08263] [[47330,0],2] ORTE_ERROR_LOG: Bad parameter in file routed_binomial.c at line 498
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [borg01x144:08263] [[47330,0],2] ORTE_ERROR_LOG: Bad parameter in file base/ess_base_std_orted.c at line 539
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; srun.slurm: Job step aborted: Waiting up to 2 seconds for job step to finish.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; slurmd[borg01x145]: *** STEP 2332583.4 KILLED AT 2014-08-29T07:16:20 WITH SIGNAL 9 ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; slurmd[borg01x154]: *** STEP 2332583.4 KILLED AT 2014-08-29T07:16:20 WITH SIGNAL 9 ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; slurmd[borg01x153]: *** STEP 2332583.4 KILLED AT 2014-08-29T07:16:20 WITH SIGNAL 9 ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; slurmd[borg01x153]: *** STEP 2332583.4 KILLED AT 2014-08-29T07:16:20 WITH SIGNAL 9 ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; srun.slurm: error: borg01x144: task 1: Exited with exit code 213
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; slurmd[borg01x144]: *** STEP 2332583.4 KILLED AT 2014-08-29T07:16:20 WITH SIGNAL 9 ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; slurmd[borg01x144]: *** STEP 2332583.4 KILLED AT 2014-08-29T07:16:20 WITH SIGNAL 9 ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; srun.slurm: error: borg01x153: task 3: Exited with exit code 213
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; slurmd[borg01x154]: *** STEP 2332583.4 KILLED AT 2014-08-29T07:16:20 WITH SIGNAL 9 ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; slurmd[borg01x145]: *** STEP 2332583.4 KILLED AT 2014-08-29T07:16:20 WITH SIGNAL 9 ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; srun.slurm: error: borg01x154: task 4: Killed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; srun.slurm: error: borg01x145: task 2: Killed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; sh: tcp://10.1.25.142,172.31.1.254,10.12.25.142:34169: No such file or directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Thu, Aug 28, 2014 at 7:17 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I'm unaware of any changes to the Slurm integration between rc4 and final release. It sounds like this might be something else going on - try adding &quot;--leave-session-attached --debug-daemons&quot; to your 1.8.2 command line and let's see if any errors get reported.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Aug 28, 2014, at 12:20 PM, Matt Thompson &lt;fortran_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Open MPI List,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I recently encountered an odd bug with Open MPI 1.8.1 and GCC 4.9.1 on our cluster (reported on this list), and decided to try it with 1.8.2. However, we seem to be having an issue with Open MPI 1.8.2 and SLURM. Even weirder, Open MPI 1.8.2rc4 doesn't show the bug. And the bug is: I get no stdout with Open MPI 1.8.2. That is, HelloWorld doesn't work.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; To wit, our sysadmin has two tarballs:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (1441) $ sha1sum openmpi-1.8.2rc4.tar.bz2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 7e7496913c949451f546f22a1a159df25f8bb683  openmpi-1.8.2rc4.tar.bz2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (1442) $ sha1sum openmpi-1.8.2.tar.gz
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; cf2b1e45575896f63367406c6c50574699d8b2e1  openmpi-1.8.2.tar.gz
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I then build each with a script in the method our sysadmin usually does:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #!/bin/sh 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; set -x
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; export PREFIX=/discover/nobackup/mathomp4/MPI/gcc_4.9.1-openmpi_1.8.2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; export LD_LIBRARY_PATH=${LD_LIBRARY_PATH}:/usr/nlocal/slurm/2.6.3/lib64
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; build() {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; echo `pwd`
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ./configure --with-slurm --disable-wrapper-rpath --enable-shared --enable-mca-no-build=btl-usnic \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;     CC=gcc CXX=g++ F77=gfortran FC=gfortran \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;     CFLAGS=&quot;-mtune=generic -fPIC -m64&quot; CXXFLAGS=&quot;-mtune=generic -fPIC -m64&quot; FFLAGS=&quot;-mtune=generic -fPIC -m64&quot; \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;     F77FLAGS=&quot;-mtune=generic -fPIC -m64&quot; FCFLAGS=&quot;-mtune=generic -fPIC -m64&quot; F90FLAGS=&quot;-mtune=generic -fPIC -m64&quot; \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;     LDFLAGS=&quot;-L/usr/nlocal/slurm/2.6.3/lib64&quot; CPPFLAGS=&quot;-I/usr/nlocal/slurm/2.6.3/include&quot; LIBS=&quot;-lpciaccess&quot; \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;    --prefix=${PREFIX} 2&gt;&amp;1 | tee configure.1.8.2.log
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; make 2&gt;&amp;1 | tee make.1.8.2.log
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; make check 2&gt;&amp;1 | tee makecheck.1.8.2.log
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; make install 2&gt;&amp;1 | tee makeinstall.1.8.2.log
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; echo &quot;calling build&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; build
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; echo &quot;exiting&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; The only difference between the two is '1.8.2' or '1.8.2rc4' in the PREFIX and log file tees.  Now, let us test. First, I grab some nodes with slurm:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; $ salloc --nodes=6 --ntasks-per-node=16 --constraint=sand --time=09:00:00 --account=g0620 --mail-type=BEGIN
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Once I get my nodes, I run with 1.8.2rc4:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (1142) $ /discover/nobackup/mathomp4/MPI/gcc_4.9.1-openmpi_1.8.2rc4/bin/mpifort -o helloWorld.182rc4.x helloWorld.F90
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (1143) $ /discover/nobackup/mathomp4/MPI/gcc_4.9.1-openmpi_1.8.2rc4/bin/mpirun -np 8 ./helloWorld.182rc4.x
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Process    0 of    8 is on borg01w044
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Process    5 of    8 is on borg01w044
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Process    3 of    8 is on borg01w044
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Process    7 of    8 is on borg01w044
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Process    1 of    8 is on borg01w044
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Process    2 of    8 is on borg01w044
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Process    4 of    8 is on borg01w044
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Process    6 of    8 is on borg01w044
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Now 1.8.2:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (1144) $ /discover/nobackup/mathomp4/MPI/gcc_4.9.1-openmpi_1.8.2/bin/mpifort -o helloWorld.182.x helloWorld.F90
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (1145) $ /discover/nobackup/mathomp4/MPI/gcc_4.9.1-openmpi_1.8.2/bin/mpirun -np 8 ./helloWorld.182.x
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (1146) $
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; No output at all. But, if I take the helloWorld.x from 1.8.2 and run it with 1.8.2rc4's mpirun:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (1146) $ /discover/nobackup/mathomp4/MPI/gcc_4.9.1-openmpi_1.8.2rc4/bin/mpirun -np 8 ./helloWorld.182.x
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Process    5 of    8 is on borg01w044
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Process    7 of    8 is on borg01w044
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Process    2 of    8 is on borg01w044
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Process    4 of    8 is on borg01w044
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Process    1 of    8 is on borg01w044
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Process    3 of    8 is on borg01w044
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Process    6 of    8 is on borg01w044
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Process    0 of    8 is on borg01w044
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; So...any idea what is happening here? There did seem to be a few SLURM related changes between the two tarballs involving /dev/null but it's a bit above me to decipher.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; You can find the ompi_info, build, make, config, etc logs at these links (they are ~300kB which is over the mailing list limit according to the Open MPI web page):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="https://dl.dropboxusercontent.com/u/61696/OMPI-1.8.2rc4-Output.tar.bz2">https://dl.dropboxusercontent.com/u/61696/OMPI-1.8.2rc4-Output.tar.bz2</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="https://dl.dropboxusercontent.com/u/61696/OMPI-1.8.2-Output.tar.bz2">https://dl.dropboxusercontent.com/u/61696/OMPI-1.8.2-Output.tar.bz2</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thank you for any help and please let me know if you need more information,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Matt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &quot;And, isn't sanity really just a one-trick pony anyway? I mean all you
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; get is one trick: rational thinking. But when you're good and crazy, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; oooh, oooh, oooh, the sky is the limit!&quot; -- The Tick
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25182.php">http://www.open-mpi.org/community/lists/users/2014/08/25182.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25184.php">http://www.open-mpi.org/community/lists/users/2014/08/25184.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &quot;And, isn't sanity really just a one-trick pony anyway? I mean all you
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; get is one trick: rational thinking. But when you're good and crazy, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; oooh, oooh, oooh, the sky is the limit!&quot; -- The Tick
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25187.php">http://www.open-mpi.org/community/lists/users/2014/08/25187.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25193.php">http://www.open-mpi.org/community/lists/users/2014/08/25193.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &quot;And, isn't sanity really just a one-trick pony anyway? I mean all you
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; get is one trick: rational thinking. But when you're good and crazy, 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; oooh, oooh, oooh, the sky is the limit!&quot; -- The Tick
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25196.php">http://www.open-mpi.org/community/lists/users/2014/08/25196.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25197.php">http://www.open-mpi.org/community/lists/users/2014/08/25197.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;And, isn't sanity really just a one-trick pony anyway? I mean all you
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; get is one trick: rational thinking. But when you're good and crazy, 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; oooh, oooh, oooh, the sky is the limit!&quot; -- The Tick
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25204.php">http://www.open-mpi.org/community/lists/users/2014/08/25204.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25205.php">http://www.open-mpi.org/community/lists/users/2014/08/25205.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;And, isn't sanity really just a one-trick pony anyway? I mean all you
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; get is one trick: rational thinking. But when you're good and crazy, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; oooh, oooh, oooh, the sky is the limit!&quot; -- The Tick
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25210.php">http://www.open-mpi.org/community/lists/users/2014/09/25210.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25211.php">http://www.open-mpi.org/community/lists/users/2014/09/25211.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;And, isn't sanity really just a one-trick pony anyway? I mean all you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; get is one trick: rational thinking. But when you're good and crazy, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; oooh, oooh, oooh, the sky is the limit!&quot; -- The Tick
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25219.php">http://www.open-mpi.org/community/lists/users/2014/09/25219.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25232.php">http://www.open-mpi.org/community/lists/users/2014/09/25232.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25234.php">http://www.open-mpi.org/community/lists/users/2014/09/25234.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25236.php">Siegmar Gross: "[OMPI users] shmem.jar not available for Solaris"</a>
<li><strong>Previous message:</strong> <a href="25234.php">Ralph Castain: "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
<li><strong>In reply to:</strong> <a href="25234.php">Ralph Castain: "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25248.php">Matt Thompson: "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
<li><strong>Reply:</strong> <a href="25248.php">Matt Thompson: "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
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
