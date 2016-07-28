<?
$subject_val = "Re: [OMPI users] Openmpi 1.10.x, mpirun and Slurm 15.08 problem";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  1 10:16:50 2016" -->
<!-- isoreceived="20160401141650" -->
<!-- sent="Fri, 1 Apr 2016 14:16:47 +0000" -->
<!-- isosent="20160401141647" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Openmpi 1.10.x, mpirun and Slurm 15.08 problem" -->
<!-- id="DE14C391-926A-4BE5-BEAD-D6DA086253F5_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="908140574.168165.1459412684143.JavaMail.yahoo_at_mail.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Openmpi 1.10.x, mpirun and Slurm 15.08 problem<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-01 10:16:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28868.php">Siegmar Gross: "[OMPI users] error for openmpi-dev-3762-gf2e33c7 with Solaris"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/03/28866.php">Tommi T: "[OMPI users] Openmpi 1.10.x, mpirun and Slurm 15.08 problem"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/03/28866.php">Tommi T: "[OMPI users] Openmpi 1.10.x, mpirun and Slurm 15.08 problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph --
<br>
<p>What's the state of PMI integration with SLURM in the v1.10.x series?  (I haven't kept up with SLURM's recent releases to know if something broke between existing Open MPI releases and their new releases...?)
<br>
<p><p><p><span class="quotelev1">&gt; On Mar 31, 2016, at 4:24 AM, Tommi T &lt;tommi_t77_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; stack:
</span><br>
<span class="quotelev1">&gt; el6.7, mlnx ofed 3.1 (IB FDR) and slurm 15.08.9 (whithout *.la libs).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; problem:
</span><br>
<span class="quotelev1">&gt; OpenMPI 1.10.x built with pmi support does not work when trying to use sbatch/salloc - mpirun combination. srun ompi_mpi_app works fine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Older 1.8.x version works fine under same salloc session.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --with-slurm --with-verbs --with-hwloc=internal --with-pmi --with-cuda=/appl/opt/cuda/7.5/ --with-pic --enable-shared --enable-mpi-thread-multiple --enable-contrib-no-build=vt
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried 1.10.3a from git also.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun  -debug-daemons ./1103aompitest 
</span><br>
<span class="quotelev1">&gt; Daemon [[44437,0],1] checking in as pid 40979 on host g59
</span><br>
<span class="quotelev1">&gt; Daemon [[44437,0],2] checking in as pid 23566 on host g60
</span><br>
<span class="quotelev1">&gt; [g59:40979] [[44437,0],1] orted: up and running - waiting for commands!
</span><br>
<span class="quotelev1">&gt; [g60:23566] [[44437,0],2] orted: up and running - waiting for commands!
</span><br>
<span class="quotelev1">&gt; [g59:40979] [[44437,0],1] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32)
</span><br>
<span class="quotelev1">&gt; [g59:40979] [[44437,0],1]:errmgr_default_orted.c(260) updating exit status to 1
</span><br>
<span class="quotelev1">&gt; [g60:23566] [[44437,0],2] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32)
</span><br>
<span class="quotelev1">&gt; [g60:23566] [[44437,0],2]:errmgr_default_orted.c(260) updating exit status to 1
</span><br>
<span class="quotelev1">&gt; srun: error: g59: task 0: Exited with exit code 1
</span><br>
<span class="quotelev1">&gt; srun: Terminating job step 8922923.1
</span><br>
<span class="quotelev1">&gt; srun: Job step aborted: Waiting up to 12 seconds for job step to finish.
</span><br>
<span class="quotelev1">&gt; srun: error: g60: task 1: Exited with exit code 1
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; An ORTE daemon has unexpectedly failed after launch and before
</span><br>
<span class="quotelev1">&gt; communicating back to mpirun. This could be caused by a number
</span><br>
<span class="quotelev1">&gt; of factors, including an inability to create a connection back
</span><br>
<span class="quotelev1">&gt; to mpirun due to a lack of common network interfaces and/or no
</span><br>
<span class="quotelev1">&gt; route found between them. Please check network connectivity
</span><br>
<span class="quotelev1">&gt; (including firewalls and network routing requirements).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [login2:48425] [[44437,0],0] orted:comm:process_commands() Processing Command: ORTE_DAEMON_HALT_VM_CMD
</span><br>
<span class="quotelev1">&gt; [login2:48425] [[44437,0],0] orted_cmd: received halt_vm cmd
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [GPU-Env mpi]$ srun ./1103aompitest 
</span><br>
<span class="quotelev1">&gt; g59: Before MPI_INIT 
</span><br>
<span class="quotelev1">&gt; g59: After MPI_INIT 
</span><br>
<span class="quotelev1">&gt; Hello world! I'm 0 of 2 on g59
</span><br>
<span class="quotelev1">&gt; g60: Before MPI_INIT 
</span><br>
<span class="quotelev1">&gt; g60: After MPI_INIT 
</span><br>
<span class="quotelev1">&gt; Hello world! I'm 1 of 2 on g60
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ompi_info  --parsable |grep pmi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mca:db:pmi:version:mca:2.0.0
</span><br>
<span class="quotelev1">&gt; mca:db:pmi:version:api:1.0.0
</span><br>
<span class="quotelev1">&gt; mca:db:pmi:version:component:1.10.3
</span><br>
<span class="quotelev1">&gt; mca:ess:pmi:version:mca:2.0.0
</span><br>
<span class="quotelev1">&gt; mca:ess:pmi:version:api:3.0.0
</span><br>
<span class="quotelev1">&gt; mca:ess:pmi:version:component:1.10.3
</span><br>
<span class="quotelev1">&gt; mca:grpcomm:pmi:version:mca:2.0.0
</span><br>
<span class="quotelev1">&gt; mca:grpcomm:pmi:version:api:2.0.0
</span><br>
<span class="quotelev1">&gt; mca:grpcomm:pmi:version:component:1.10.3
</span><br>
<span class="quotelev1">&gt; mca:pubsub:pmi:version:mca:2.0.0
</span><br>
<span class="quotelev1">&gt; mca:pubsub:pmi:version:api:2.0.0
</span><br>
<span class="quotelev1">&gt; mca:pubsub:pmi:version:component:1.10.3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; module swap openmpi openmpi/1.8.6
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [GPU-Env mpi]$ mpirun -debug-daemons ./ompigcc184 
</span><br>
<span class="quotelev1">&gt; Daemon [[810,0],2] checking in as pid 55443 on host g60
</span><br>
<span class="quotelev1">&gt; Daemon [[810,0],1] checking in as pid 73091 on host g59
</span><br>
<span class="quotelev1">&gt; [g60:55443] [[810,0],2] orted: up and running - waiting for commands!
</span><br>
<span class="quotelev1">&gt; [g59:73091] [[810,0],1] orted: up and running - waiting for commands!
</span><br>
<span class="quotelev1">&gt; [login2:05014] [[810,0],0] orted_cmd: received add_local_procs
</span><br>
<span class="quotelev1">&gt; [g59:73091] [[810,0],1] orted_cmd: received add_local_procs
</span><br>
<span class="quotelev1">&gt; [g60:55443] [[810,0],2] orted_cmd: received add_local_procs
</span><br>
<span class="quotelev1">&gt; g60: Before MPI_INIT 
</span><br>
<span class="quotelev1">&gt; g59: Before MPI_INIT 
</span><br>
<span class="quotelev1">&gt; [g60:55443] [[810,0],2] orted_recv: received sync+nidmap from local proc [[810,1],1]
</span><br>
<span class="quotelev1">&gt; [g59:73091] [[810,0],1] orted_recv: received sync+nidmap from local proc [[810,1],0]
</span><br>
<span class="quotelev1">&gt; MPIR_being_debugged = 0
</span><br>
<span class="quotelev1">&gt; MPIR_debug_state = 1
</span><br>
<span class="quotelev1">&gt; MPIR_partial_attach_ok = 1
</span><br>
<span class="quotelev1">&gt; MPIR_i_am_starter = 0
</span><br>
<span class="quotelev1">&gt; MPIR_forward_output = 0
</span><br>
<span class="quotelev1">&gt; MPIR_proctable_size = 2
</span><br>
<span class="quotelev1">&gt; MPIR_proctable:
</span><br>
<span class="quotelev1">&gt; (i, host, exe, pid) = (0, g59, ompigcc184, 73096)
</span><br>
<span class="quotelev1">&gt; (i, host, exe, pid) = (1, g60, ompigcc184, 55448)
</span><br>
<span class="quotelev1">&gt; MPIR_executable_path: NULL
</span><br>
<span class="quotelev1">&gt; MPIR_server_arguments: NULL
</span><br>
<span class="quotelev1">&gt; [login2:05014] [[810,0],0] orted_cmd: received message_local_procs
</span><br>
<span class="quotelev1">&gt; [g59:73091] [[810,0],1] orted_cmd: received message_local_procs
</span><br>
<span class="quotelev1">&gt; [g60:55443] [[810,0],2] orted_cmd: received message_local_procs
</span><br>
<span class="quotelev1">&gt; [taito-login2.csc.fi:05014] [[810,0],0] orted_cmd: received message_local_procs
</span><br>
<span class="quotelev1">&gt; [g59:73091] [[810,0],1] orted_cmd: received message_local_procs
</span><br>
<span class="quotelev1">&gt; [g60:55443] [[810,0],2] orted_cmd: received message_local_procs
</span><br>
<span class="quotelev1">&gt; g59: After MPI_INIT 
</span><br>
<span class="quotelev1">&gt; Hello world! I'm 0 of 2 on g59
</span><br>
<span class="quotelev1">&gt; g60: After MPI_INIT 
</span><br>
<span class="quotelev1">&gt; Hello world! I'm 1 of 2 on g60
</span><br>
<span class="quotelev1">&gt; [login2:5014] [[810,0],0] orted_cmd: received message_local_procs
</span><br>
<span class="quotelev1">&gt; [g60:55443] [[810,0],2] orted_cmd: received message_local_procs
</span><br>
<span class="quotelev1">&gt; [g59:73091] [[810,0],1] orted_cmd: received message_local_procs
</span><br>
<span class="quotelev1">&gt; [g59:73091] [[810,0],1] orted_recv: received sync from local proc [[810,1],0]
</span><br>
<span class="quotelev1">&gt; [g60:55443] [[810,0],2] orted_recv: received sync from local proc [[810,1],1]
</span><br>
<span class="quotelev1">&gt; [login2:05014] [[810,0],0] orted_cmd: received exit cmd
</span><br>
<span class="quotelev1">&gt; [g60:55443] [[810,0],2] orted_cmd: received exit cmd
</span><br>
<span class="quotelev1">&gt; [g59:73091] [[810,0],1] orted_cmd: received exit cmd
</span><br>
<span class="quotelev1">&gt; [g60:55443] [[810,0],2] orted_cmd: all routes and children gone - exiting
</span><br>
<span class="quotelev1">&gt; [g59:73091] [[810,0],1] orted_cmd: all routes and children gone - exiting
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [GPU-Env mpi]$ ompi_info -parsable |grep pmi
</span><br>
<span class="quotelev1">&gt; mca:db:pmi:version:mca:2.0
</span><br>
<span class="quotelev1">&gt; mca:db:pmi:version:api:1.0
</span><br>
<span class="quotelev1">&gt; mca:db:pmi:version:component:1.8.6
</span><br>
<span class="quotelev1">&gt; mca:ess:pmi:version:mca:2.0
</span><br>
<span class="quotelev1">&gt; mca:ess:pmi:version:api:3.0
</span><br>
<span class="quotelev1">&gt; mca:ess:pmi:version:component:1.8.6
</span><br>
<span class="quotelev1">&gt; mca:grpcomm:pmi:version:mca:2.0
</span><br>
<span class="quotelev1">&gt; mca:grpcomm:pmi:version:api:2.0
</span><br>
<span class="quotelev1">&gt; mca:grpcomm:pmi:version:component:1.8.6
</span><br>
<span class="quotelev1">&gt; mca:pubsub:pmi:version:mca:2.0
</span><br>
<span class="quotelev1">&gt; mca:pubsub:pmi:version:api:2.0
</span><br>
<span class="quotelev1">&gt; mca:pubsub:pmi:version:component:1.8.6
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/03/28866.php">http://www.open-mpi.org/community/lists/users/2016/03/28866.php</a>
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
<li><strong>Next message:</strong> <a href="28868.php">Siegmar Gross: "[OMPI users] error for openmpi-dev-3762-gf2e33c7 with Solaris"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/03/28866.php">Tommi T: "[OMPI users] Openmpi 1.10.x, mpirun and Slurm 15.08 problem"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/03/28866.php">Tommi T: "[OMPI users] Openmpi 1.10.x, mpirun and Slurm 15.08 problem"</a>
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
