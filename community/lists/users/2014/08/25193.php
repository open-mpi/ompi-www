<?
$subject_val = "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 29 12:43:40 2014" -->
<!-- isoreceived="20140829164340" -->
<!-- sent="Fri, 29 Aug 2014 09:42:51 -0700" -->
<!-- isosent="20140829164251" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs" -->
<!-- id="5325FE26-C3F3-462B-96E5-C8F5DF1AE201_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAFb48S8aOxtDfK5-nOONRm4e4=aEvykQt3T1RvVrmkTOJEAqvA_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-29 12:42:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25194.php">Ralph Castain: "Re: [OMPI users] Weird error with OMPI 1.6.3"</a>
<li><strong>Previous message:</strong> <a href="25192.php">Maxime Boissonneault: "Re: [OMPI users] Weird error with OMPI 1.6.3"</a>
<li><strong>In reply to:</strong> <a href="25187.php">Matt Thompson: "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25196.php">Matt Thompson: "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
<li><strong>Reply:</strong> <a href="25196.php">Matt Thompson: "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Okay, something quite weird is happening here. I can't replicate using the 1.8.2 release tarball on a slurm machine, so my guess is that something else is going on here.
<br>
<p>Could you please rebuild the 1.8.2 code with --enable-debug on the configure line (assuming you haven't already done so), and then rerun that version as before but adding &quot;--mca oob_base_verbose 10&quot; to the cmd line?
<br>
<p><p>On Aug 29, 2014, at 4:22 AM, Matt Thompson &lt;fortran_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For 1.8.2rc4 I get:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (1003) $ /discover/nobackup/mathomp4/MPI/gcc_4.9.1-openmpi_1.8.2rc4/bin/mpirun --leave-session-attached --debug-daemons -np 8 ./helloWorld.182.x
</span><br>
<span class="quotelev1">&gt; srun.slurm: cluster configuration lacks support for cpu binding
</span><br>
<span class="quotelev1">&gt; srun.slurm: cluster configuration lacks support for cpu binding
</span><br>
<span class="quotelev1">&gt; Daemon [[47143,0],5] checking in as pid 10990 on host borg01x154
</span><br>
<span class="quotelev1">&gt; [borg01x154:10990] [[47143,0],5] orted: up and running - waiting for commands!
</span><br>
<span class="quotelev1">&gt; Daemon [[47143,0],1] checking in as pid 23473 on host borg01x143
</span><br>
<span class="quotelev1">&gt; Daemon [[47143,0],2] checking in as pid 8250 on host borg01x144
</span><br>
<span class="quotelev1">&gt; [borg01x144:08250] [[47143,0],2] orted: up and running - waiting for commands!
</span><br>
<span class="quotelev1">&gt; [borg01x143:23473] [[47143,0],1] orted: up and running - waiting for commands!
</span><br>
<span class="quotelev1">&gt; Daemon [[47143,0],3] checking in as pid 12320 on host borg01x145
</span><br>
<span class="quotelev1">&gt; Daemon [[47143,0],4] checking in as pid 10902 on host borg01x153
</span><br>
<span class="quotelev1">&gt; [borg01x153:10902] [[47143,0],4] orted: up and running - waiting for commands!
</span><br>
<span class="quotelev1">&gt; [borg01x145:12320] [[47143,0],3] orted: up and running - waiting for commands!
</span><br>
<span class="quotelev1">&gt; [borg01x142:01629] [[47143,0],0] orted_cmd: received add_local_procs
</span><br>
<span class="quotelev1">&gt; [borg01x144:08250] [[47143,0],2] orted_cmd: received add_local_procs
</span><br>
<span class="quotelev1">&gt; [borg01x153:10902] [[47143,0],4] orted_cmd: received add_local_procs
</span><br>
<span class="quotelev1">&gt; [borg01x143:23473] [[47143,0],1] orted_cmd: received add_local_procs
</span><br>
<span class="quotelev1">&gt; [borg01x145:12320] [[47143,0],3] orted_cmd: received add_local_procs
</span><br>
<span class="quotelev1">&gt; [borg01x154:10990] [[47143,0],5] orted_cmd: received add_local_procs
</span><br>
<span class="quotelev1">&gt; [borg01x142:01629] [[47143,0],0] orted_recv: received sync+nidmap from local proc [[47143,1],0]
</span><br>
<span class="quotelev1">&gt; [borg01x142:01629] [[47143,0],0] orted_recv: received sync+nidmap from local proc [[47143,1],2]
</span><br>
<span class="quotelev1">&gt; [borg01x142:01629] [[47143,0],0] orted_recv: received sync+nidmap from local proc [[47143,1],3]
</span><br>
<span class="quotelev1">&gt; [borg01x142:01629] [[47143,0],0] orted_recv: received sync+nidmap from local proc [[47143,1],1]
</span><br>
<span class="quotelev1">&gt; [borg01x142:01629] [[47143,0],0] orted_recv: received sync+nidmap from local proc [[47143,1],5]
</span><br>
<span class="quotelev1">&gt; [borg01x142:01629] [[47143,0],0] orted_recv: received sync+nidmap from local proc [[47143,1],4]
</span><br>
<span class="quotelev1">&gt; [borg01x142:01629] [[47143,0],0] orted_recv: received sync+nidmap from local proc [[47143,1],6]
</span><br>
<span class="quotelev1">&gt; [borg01x142:01629] [[47143,0],0] orted_recv: received sync+nidmap from local proc [[47143,1],7]
</span><br>
<span class="quotelev1">&gt;   MPIR_being_debugged = 0
</span><br>
<span class="quotelev1">&gt;   MPIR_debug_state = 1
</span><br>
<span class="quotelev1">&gt;   MPIR_partial_attach_ok = 1
</span><br>
<span class="quotelev1">&gt;   MPIR_i_am_starter = 0
</span><br>
<span class="quotelev1">&gt;   MPIR_forward_output = 0
</span><br>
<span class="quotelev1">&gt;   MPIR_proctable_size = 8
</span><br>
<span class="quotelev1">&gt;   MPIR_proctable:
</span><br>
<span class="quotelev1">&gt;     (i, host, exe, pid) = (0, borg01x142, /home/mathomp4/HelloWorldTest/./helloWorld.182.x, 1647)
</span><br>
<span class="quotelev1">&gt;     (i, host, exe, pid) = (1, borg01x142, /home/mathomp4/HelloWorldTest/./helloWorld.182.x, 1648)
</span><br>
<span class="quotelev1">&gt;     (i, host, exe, pid) = (2, borg01x142, /home/mathomp4/HelloWorldTest/./helloWorld.182.x, 1650)
</span><br>
<span class="quotelev1">&gt;     (i, host, exe, pid) = (3, borg01x142, /home/mathomp4/HelloWorldTest/./helloWorld.182.x, 1652)
</span><br>
<span class="quotelev1">&gt;     (i, host, exe, pid) = (4, borg01x142, /home/mathomp4/HelloWorldTest/./helloWorld.182.x, 1654)
</span><br>
<span class="quotelev1">&gt;     (i, host, exe, pid) = (5, borg01x142, /home/mathomp4/HelloWorldTest/./helloWorld.182.x, 1656)
</span><br>
<span class="quotelev1">&gt;     (i, host, exe, pid) = (6, borg01x142, /home/mathomp4/HelloWorldTest/./helloWorld.182.x, 1658)
</span><br>
<span class="quotelev1">&gt;     (i, host, exe, pid) = (7, borg01x142, /home/mathomp4/HelloWorldTest/./helloWorld.182.x, 1660)
</span><br>
<span class="quotelev1">&gt; MPIR_executable_path: NULL
</span><br>
<span class="quotelev1">&gt; MPIR_server_arguments: NULL
</span><br>
<span class="quotelev1">&gt; [borg01x142:01629] [[47143,0],0] orted_cmd: received message_local_procs
</span><br>
<span class="quotelev1">&gt; [borg01x144:08250] [[47143,0],2] orted_cmd: received message_local_procs
</span><br>
<span class="quotelev1">&gt; [borg01x143:23473] [[47143,0],1] orted_cmd: received message_local_procs
</span><br>
<span class="quotelev1">&gt; [borg01x153:10902] [[47143,0],4] orted_cmd: received message_local_procs
</span><br>
<span class="quotelev1">&gt; [borg01x154:10990] [[47143,0],5] orted_cmd: received message_local_procs
</span><br>
<span class="quotelev1">&gt; [borg01x145:12320] [[47143,0],3] orted_cmd: received message_local_procs
</span><br>
<span class="quotelev1">&gt; [borg01x142:01629] [[47143,0],0] orted_cmd: received message_local_procs
</span><br>
<span class="quotelev1">&gt; [borg01x143:23473] [[47143,0],1] orted_cmd: received message_local_procs
</span><br>
<span class="quotelev1">&gt; [borg01x144:08250] [[47143,0],2] orted_cmd: received message_local_procs
</span><br>
<span class="quotelev1">&gt; [borg01x153:10902] [[47143,0],4] orted_cmd: received message_local_procs
</span><br>
<span class="quotelev1">&gt; [borg01x145:12320] [[47143,0],3] orted_cmd: received message_local_procs
</span><br>
<span class="quotelev1">&gt; Process    2 of    8 is on borg01x142
</span><br>
<span class="quotelev1">&gt; Process    5 of    8 is on borg01x142
</span><br>
<span class="quotelev1">&gt; Process    4 of    8 is on borg01x142
</span><br>
<span class="quotelev1">&gt; Process    1 of    8 is on borg01x142
</span><br>
<span class="quotelev1">&gt; Process    0 of    8 is on borg01x142
</span><br>
<span class="quotelev1">&gt; Process    3 of    8 is on borg01x142
</span><br>
<span class="quotelev1">&gt; Process    6 of    8 is on borg01x142
</span><br>
<span class="quotelev1">&gt; Process    7 of    8 is on borg01x142
</span><br>
<span class="quotelev1">&gt; [borg01x154:10990] [[47143,0],5] orted_cmd: received message_local_procs
</span><br>
<span class="quotelev1">&gt; [borg01x142:01629] [[47143,0],0] orted_cmd: received message_local_procs
</span><br>
<span class="quotelev1">&gt; [borg01x144:08250] [[47143,0],2] orted_cmd: received message_local_procs
</span><br>
<span class="quotelev1">&gt; [borg01x143:23473] [[47143,0],1] orted_cmd: received message_local_procs
</span><br>
<span class="quotelev1">&gt; [borg01x153:10902] [[47143,0],4] orted_cmd: received message_local_procs
</span><br>
<span class="quotelev1">&gt; [borg01x154:10990] [[47143,0],5] orted_cmd: received message_local_procs
</span><br>
<span class="quotelev1">&gt; [borg01x145:12320] [[47143,0],3] orted_cmd: received message_local_procs
</span><br>
<span class="quotelev1">&gt; [borg01x142:01629] [[47143,0],0] orted_recv: received sync from local proc [[47143,1],2]
</span><br>
<span class="quotelev1">&gt; [borg01x142:01629] [[47143,0],0] orted_recv: received sync from local proc [[47143,1],1]
</span><br>
<span class="quotelev1">&gt; [borg01x142:01629] [[47143,0],0] orted_recv: received sync from local proc [[47143,1],3]
</span><br>
<span class="quotelev1">&gt; [borg01x142:01629] [[47143,0],0] orted_recv: received sync from local proc [[47143,1],0]
</span><br>
<span class="quotelev1">&gt; [borg01x142:01629] [[47143,0],0] orted_recv: received sync from local proc [[47143,1],4]
</span><br>
<span class="quotelev1">&gt; [borg01x142:01629] [[47143,0],0] orted_recv: received sync from local proc [[47143,1],6]
</span><br>
<span class="quotelev1">&gt; [borg01x142:01629] [[47143,0],0] orted_recv: received sync from local proc [[47143,1],5]
</span><br>
<span class="quotelev1">&gt; [borg01x142:01629] [[47143,0],0] orted_recv: received sync from local proc [[47143,1],7]
</span><br>
<span class="quotelev1">&gt; [borg01x142:01629] [[47143,0],0] orted_cmd: received exit cmd
</span><br>
<span class="quotelev1">&gt; [borg01x144:08250] [[47143,0],2] orted_cmd: received exit cmd
</span><br>
<span class="quotelev1">&gt; [borg01x144:08250] [[47143,0],2] orted_cmd: all routes and children gone - exiting
</span><br>
<span class="quotelev1">&gt; [borg01x153:10902] [[47143,0],4] orted_cmd: received exit cmd
</span><br>
<span class="quotelev1">&gt; [borg01x153:10902] [[47143,0],4] orted_cmd: all routes and children gone - exiting
</span><br>
<span class="quotelev1">&gt; [borg01x143:23473] [[47143,0],1] orted_cmd: received exit cmd
</span><br>
<span class="quotelev1">&gt; [borg01x154:10990] [[47143,0],5] orted_cmd: received exit cmd
</span><br>
<span class="quotelev1">&gt; [borg01x154:10990] [[47143,0],5] orted_cmd: all routes and children gone - exiting
</span><br>
<span class="quotelev1">&gt; [borg01x145:12320] [[47143,0],3] orted_cmd: received exit cmd
</span><br>
<span class="quotelev1">&gt; [borg01x145:12320] [[47143,0],3] orted_cmd: all routes and children gone - exiting
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Using the 1.8.2 mpirun:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (1004) $ /discover/nobackup/mathomp4/MPI/gcc_4.9.1-openmpi_1.8.2/bin/mpirun --leave-session-attached --debug-daemons -np 8 ./helloWorld.182.x
</span><br>
<span class="quotelev1">&gt; srun.slurm: cluster configuration lacks support for cpu binding
</span><br>
<span class="quotelev1">&gt; srun.slurm: cluster configuration lacks support for cpu binding
</span><br>
<span class="quotelev1">&gt; [borg01x143:23494] [[47330,0],1] ORTE_ERROR_LOG: Bad parameter in file base/rml_base_contact.c at line 161
</span><br>
<span class="quotelev1">&gt; [borg01x143:23494] [[47330,0],1] ORTE_ERROR_LOG: Bad parameter in file routed_binomial.c at line 498
</span><br>
<span class="quotelev1">&gt; [borg01x143:23494] [[47330,0],1] ORTE_ERROR_LOG: Bad parameter in file base/ess_base_std_orted.c at line 539
</span><br>
<span class="quotelev1">&gt; srun.slurm: error: borg01x143: task 0: Exited with exit code 213
</span><br>
<span class="quotelev1">&gt; srun.slurm: Terminating job step 2332583.4
</span><br>
<span class="quotelev1">&gt; [borg01x153:10915] [[47330,0],4] ORTE_ERROR_LOG: Bad parameter in file base/rml_base_contact.c at line 161
</span><br>
<span class="quotelev1">&gt; [borg01x153:10915] [[47330,0],4] ORTE_ERROR_LOG: Bad parameter in file routed_binomial.c at line 498
</span><br>
<span class="quotelev1">&gt; [borg01x153:10915] [[47330,0],4] ORTE_ERROR_LOG: Bad parameter in file base/ess_base_std_orted.c at line 539
</span><br>
<span class="quotelev1">&gt; [borg01x144:08263] [[47330,0],2] ORTE_ERROR_LOG: Bad parameter in file base/rml_base_contact.c at line 161
</span><br>
<span class="quotelev1">&gt; [borg01x144:08263] [[47330,0],2] ORTE_ERROR_LOG: Bad parameter in file routed_binomial.c at line 498
</span><br>
<span class="quotelev1">&gt; [borg01x144:08263] [[47330,0],2] ORTE_ERROR_LOG: Bad parameter in file base/ess_base_std_orted.c at line 539
</span><br>
<span class="quotelev1">&gt; srun.slurm: Job step aborted: Waiting up to 2 seconds for job step to finish.
</span><br>
<span class="quotelev1">&gt; slurmd[borg01x145]: *** STEP 2332583.4 KILLED AT 2014-08-29T07:16:20 WITH SIGNAL 9 ***
</span><br>
<span class="quotelev1">&gt; slurmd[borg01x154]: *** STEP 2332583.4 KILLED AT 2014-08-29T07:16:20 WITH SIGNAL 9 ***
</span><br>
<span class="quotelev1">&gt; slurmd[borg01x153]: *** STEP 2332583.4 KILLED AT 2014-08-29T07:16:20 WITH SIGNAL 9 ***
</span><br>
<span class="quotelev1">&gt; slurmd[borg01x153]: *** STEP 2332583.4 KILLED AT 2014-08-29T07:16:20 WITH SIGNAL 9 ***
</span><br>
<span class="quotelev1">&gt; srun.slurm: error: borg01x144: task 1: Exited with exit code 213
</span><br>
<span class="quotelev1">&gt; slurmd[borg01x144]: *** STEP 2332583.4 KILLED AT 2014-08-29T07:16:20 WITH SIGNAL 9 ***
</span><br>
<span class="quotelev1">&gt; slurmd[borg01x144]: *** STEP 2332583.4 KILLED AT 2014-08-29T07:16:20 WITH SIGNAL 9 ***
</span><br>
<span class="quotelev1">&gt; srun.slurm: error: borg01x153: task 3: Exited with exit code 213
</span><br>
<span class="quotelev1">&gt; slurmd[borg01x154]: *** STEP 2332583.4 KILLED AT 2014-08-29T07:16:20 WITH SIGNAL 9 ***
</span><br>
<span class="quotelev1">&gt; slurmd[borg01x145]: *** STEP 2332583.4 KILLED AT 2014-08-29T07:16:20 WITH SIGNAL 9 ***
</span><br>
<span class="quotelev1">&gt; srun.slurm: error: borg01x154: task 4: Killed
</span><br>
<span class="quotelev1">&gt; srun.slurm: error: borg01x145: task 2: Killed
</span><br>
<span class="quotelev1">&gt; sh: tcp://10.1.25.142,172.31.1.254,10.12.25.142:34169: No such file or directory
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Aug 28, 2014 at 7:17 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; I'm unaware of any changes to the Slurm integration between rc4 and final release. It sounds like this might be something else going on - try adding &quot;--leave-session-attached --debug-daemons&quot; to your 1.8.2 command line and let's see if any errors get reported.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 28, 2014, at 12:20 PM, Matt Thompson &lt;fortran_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI List,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I recently encountered an odd bug with Open MPI 1.8.1 and GCC 4.9.1 on our cluster (reported on this list), and decided to try it with 1.8.2. However, we seem to be having an issue with Open MPI 1.8.2 and SLURM. Even weirder, Open MPI 1.8.2rc4 doesn't show the bug. And the bug is: I get no stdout with Open MPI 1.8.2. That is, HelloWorld doesn't work.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; To wit, our sysadmin has two tarballs:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; (1441) $ sha1sum openmpi-1.8.2rc4.tar.bz2
</span><br>
<span class="quotelev2">&gt;&gt; 7e7496913c949451f546f22a1a159df25f8bb683  openmpi-1.8.2rc4.tar.bz2
</span><br>
<span class="quotelev2">&gt;&gt; (1442) $ sha1sum openmpi-1.8.2.tar.gz
</span><br>
<span class="quotelev2">&gt;&gt; cf2b1e45575896f63367406c6c50574699d8b2e1  openmpi-1.8.2.tar.gz
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I then build each with a script in the method our sysadmin usually does:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #!/bin/sh 
</span><br>
<span class="quotelev2">&gt;&gt; set -x
</span><br>
<span class="quotelev2">&gt;&gt; export PREFIX=/discover/nobackup/mathomp4/MPI/gcc_4.9.1-openmpi_1.8.2
</span><br>
<span class="quotelev2">&gt;&gt; export LD_LIBRARY_PATH=${LD_LIBRARY_PATH}:/usr/nlocal/slurm/2.6.3/lib64
</span><br>
<span class="quotelev2">&gt;&gt; build() {
</span><br>
<span class="quotelev2">&gt;&gt;   echo `pwd`
</span><br>
<span class="quotelev2">&gt;&gt;   ./configure --with-slurm --disable-wrapper-rpath --enable-shared --enable-mca-no-build=btl-usnic \
</span><br>
<span class="quotelev2">&gt;&gt;       CC=gcc CXX=g++ F77=gfortran FC=gfortran \
</span><br>
<span class="quotelev2">&gt;&gt;       CFLAGS=&quot;-mtune=generic -fPIC -m64&quot; CXXFLAGS=&quot;-mtune=generic -fPIC -m64&quot; FFLAGS=&quot;-mtune=generic -fPIC -m64&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;       F77FLAGS=&quot;-mtune=generic -fPIC -m64&quot; FCFLAGS=&quot;-mtune=generic -fPIC -m64&quot; F90FLAGS=&quot;-mtune=generic -fPIC -m64&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;       LDFLAGS=&quot;-L/usr/nlocal/slurm/2.6.3/lib64&quot; CPPFLAGS=&quot;-I/usr/nlocal/slurm/2.6.3/include&quot; LIBS=&quot;-lpciaccess&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;      --prefix=${PREFIX} 2&gt;&amp;1 | tee configure.1.8.2.log
</span><br>
<span class="quotelev2">&gt;&gt;   make 2&gt;&amp;1 | tee make.1.8.2.log
</span><br>
<span class="quotelev2">&gt;&gt;   make check 2&gt;&amp;1 | tee makecheck.1.8.2.log
</span><br>
<span class="quotelev2">&gt;&gt;   make install 2&gt;&amp;1 | tee makeinstall.1.8.2.log
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; echo &quot;calling build&quot;
</span><br>
<span class="quotelev2">&gt;&gt; build
</span><br>
<span class="quotelev2">&gt;&gt; echo &quot;exiting&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The only difference between the two is '1.8.2' or '1.8.2rc4' in the PREFIX and log file tees.  Now, let us test. First, I grab some nodes with slurm:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; $ salloc --nodes=6 --ntasks-per-node=16 --constraint=sand --time=09:00:00 --account=g0620 --mail-type=BEGIN
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Once I get my nodes, I run with 1.8.2rc4:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; (1142) $ /discover/nobackup/mathomp4/MPI/gcc_4.9.1-openmpi_1.8.2rc4/bin/mpifort -o helloWorld.182rc4.x helloWorld.F90
</span><br>
<span class="quotelev2">&gt;&gt; (1143) $ /discover/nobackup/mathomp4/MPI/gcc_4.9.1-openmpi_1.8.2rc4/bin/mpirun -np 8 ./helloWorld.182rc4.x
</span><br>
<span class="quotelev2">&gt;&gt; Process    0 of    8 is on borg01w044
</span><br>
<span class="quotelev2">&gt;&gt; Process    5 of    8 is on borg01w044
</span><br>
<span class="quotelev2">&gt;&gt; Process    3 of    8 is on borg01w044
</span><br>
<span class="quotelev2">&gt;&gt; Process    7 of    8 is on borg01w044
</span><br>
<span class="quotelev2">&gt;&gt; Process    1 of    8 is on borg01w044
</span><br>
<span class="quotelev2">&gt;&gt; Process    2 of    8 is on borg01w044
</span><br>
<span class="quotelev2">&gt;&gt; Process    4 of    8 is on borg01w044
</span><br>
<span class="quotelev2">&gt;&gt; Process    6 of    8 is on borg01w044
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Now 1.8.2:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; (1144) $ /discover/nobackup/mathomp4/MPI/gcc_4.9.1-openmpi_1.8.2/bin/mpifort -o helloWorld.182.x helloWorld.F90
</span><br>
<span class="quotelev2">&gt;&gt; (1145) $ /discover/nobackup/mathomp4/MPI/gcc_4.9.1-openmpi_1.8.2/bin/mpirun -np 8 ./helloWorld.182.x
</span><br>
<span class="quotelev2">&gt;&gt; (1146) $
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; No output at all. But, if I take the helloWorld.x from 1.8.2 and run it with 1.8.2rc4's mpirun:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; (1146) $ /discover/nobackup/mathomp4/MPI/gcc_4.9.1-openmpi_1.8.2rc4/bin/mpirun -np 8 ./helloWorld.182.x
</span><br>
<span class="quotelev2">&gt;&gt; Process    5 of    8 is on borg01w044
</span><br>
<span class="quotelev2">&gt;&gt; Process    7 of    8 is on borg01w044
</span><br>
<span class="quotelev2">&gt;&gt; Process    2 of    8 is on borg01w044
</span><br>
<span class="quotelev2">&gt;&gt; Process    4 of    8 is on borg01w044
</span><br>
<span class="quotelev2">&gt;&gt; Process    1 of    8 is on borg01w044
</span><br>
<span class="quotelev2">&gt;&gt; Process    3 of    8 is on borg01w044
</span><br>
<span class="quotelev2">&gt;&gt; Process    6 of    8 is on borg01w044
</span><br>
<span class="quotelev2">&gt;&gt; Process    0 of    8 is on borg01w044
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So...any idea what is happening here? There did seem to be a few SLURM related changes between the two tarballs involving /dev/null but it's a bit above me to decipher.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You can find the ompi_info, build, make, config, etc logs at these links (they are ~300kB which is over the mailing list limit according to the Open MPI web page):
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://dl.dropboxusercontent.com/u/61696/OMPI-1.8.2rc4-Output.tar.bz2">https://dl.dropboxusercontent.com/u/61696/OMPI-1.8.2rc4-Output.tar.bz2</a>
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://dl.dropboxusercontent.com/u/61696/OMPI-1.8.2-Output.tar.bz2">https://dl.dropboxusercontent.com/u/61696/OMPI-1.8.2-Output.tar.bz2</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thank you for any help and please let me know if you need more information,
</span><br>
<span class="quotelev2">&gt;&gt; Matt
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;And, isn't sanity really just a one-trick pony anyway? I mean all you
</span><br>
<span class="quotelev2">&gt;&gt;  get is one trick: rational thinking. But when you're good and crazy, 
</span><br>
<span class="quotelev2">&gt;&gt;  oooh, oooh, oooh, the sky is the limit!&quot; -- The Tick
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
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25182.php">http://www.open-mpi.org/community/lists/users/2014/08/25182.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25184.php">http://www.open-mpi.org/community/lists/users/2014/08/25184.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; &quot;And, isn't sanity really just a one-trick pony anyway? I mean all you
</span><br>
<span class="quotelev1">&gt;  get is one trick: rational thinking. But when you're good and crazy, 
</span><br>
<span class="quotelev1">&gt;  oooh, oooh, oooh, the sky is the limit!&quot; -- The Tick
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25187.php">http://www.open-mpi.org/community/lists/users/2014/08/25187.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25193/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25194.php">Ralph Castain: "Re: [OMPI users] Weird error with OMPI 1.6.3"</a>
<li><strong>Previous message:</strong> <a href="25192.php">Maxime Boissonneault: "Re: [OMPI users] Weird error with OMPI 1.6.3"</a>
<li><strong>In reply to:</strong> <a href="25187.php">Matt Thompson: "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25196.php">Matt Thompson: "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
<li><strong>Reply:</strong> <a href="25196.php">Matt Thompson: "Re: [OMPI users] Issues with OpenMPI 1.8.2, GCC 4.9.1, and SLURM Interactive Jobs"</a>
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
