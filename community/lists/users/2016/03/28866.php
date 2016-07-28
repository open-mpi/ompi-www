<?
$subject_val = "[OMPI users] Openmpi 1.10.x, mpirun and Slurm 15.08 problem";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 31 04:27:46 2016" -->
<!-- isoreceived="20160331082746" -->
<!-- sent="Thu, 31 Mar 2016 08:24:44 +0000 (UTC)" -->
<!-- isosent="20160331082444" -->
<!-- name="Tommi T" -->
<!-- email="tommi_t77_at_[hidden]" -->
<!-- subject="[OMPI users] Openmpi 1.10.x, mpirun and Slurm 15.08 problem" -->
<!-- id="908140574.168165.1459412684143.JavaMail.yahoo_at_mail.yahoo.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="908140574.168165.1459412684143.JavaMail.yahoo.ref_at_mail.yahoo.com" -->
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
<strong>Subject:</strong> [OMPI users] Openmpi 1.10.x, mpirun and Slurm 15.08 problem<br>
<strong>From:</strong> Tommi T (<em>tommi_t77_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-31 04:24:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/04/28867.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Openmpi 1.10.x, mpirun and Slurm 15.08 problem"</a>
<li><strong>Previous message:</strong> <a href="28865.php">Justin Luitjens: "Re: [OMPI users] CUDA IPC/RDMA Not Working"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/04/28867.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Openmpi 1.10.x, mpirun and Slurm 15.08 problem"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/04/28867.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Openmpi 1.10.x, mpirun and Slurm 15.08 problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>stack:
<br>
el6.7, mlnx ofed 3.1 (IB FDR) and slurm 15.08.9 (whithout *.la libs).
<br>
<p>problem:
<br>
OpenMPI 1.10.x built with pmi support does not work when trying to use sbatch/salloc - mpirun combination. srun ompi_mpi_app works fine.
<br>
<p>Older 1.8.x version works fine under same salloc session.
<br>
<p>./configure --with-slurm --with-verbs --with-hwloc=internal --with-pmi --with-cuda=/appl/opt/cuda/7.5/ --with-pic --enable-shared --enable-mpi-thread-multiple --enable-contrib-no-build=vt
<br>
<p><p>I tried 1.10.3a from git also.
<br>
<p><p>mpirun  -debug-daemons ./1103aompitest 
<br>
Daemon [[44437,0],1] checking in as pid 40979 on host g59
<br>
Daemon [[44437,0],2] checking in as pid 23566 on host g60
<br>
[g59:40979] [[44437,0],1] orted: up and running - waiting for commands!
<br>
[g60:23566] [[44437,0],2] orted: up and running - waiting for commands!
<br>
[g59:40979] [[44437,0],1] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32)
<br>
[g59:40979] [[44437,0],1]:errmgr_default_orted.c(260) updating exit status to 1
<br>
[g60:23566] [[44437,0],2] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32)
<br>
[g60:23566] [[44437,0],2]:errmgr_default_orted.c(260) updating exit status to 1
<br>
srun: error: g59: task 0: Exited with exit code 1
<br>
srun: Terminating job step 8922923.1
<br>
srun: Job step aborted: Waiting up to 12 seconds for job step to finish.
<br>
srun: error: g60: task 1: Exited with exit code 1
<br>
--------------------------------------------------------------------------
<br>
An ORTE daemon has unexpectedly failed after launch and before
<br>
communicating back to mpirun. This could be caused by a number
<br>
of factors, including an inability to create a connection back
<br>
to mpirun due to a lack of common network interfaces and/or no
<br>
route found between them. Please check network connectivity
<br>
(including firewalls and network routing requirements).
<br>
--------------------------------------------------------------------------
<br>
[login2:48425] [[44437,0],0] orted:comm:process_commands() Processing Command: ORTE_DAEMON_HALT_VM_CMD
<br>
[login2:48425] [[44437,0],0] orted_cmd: received halt_vm cmd
<br>
<p><p>[GPU-Env mpi]$ srun ./1103aompitest 
<br>
g59: Before MPI_INIT 
<br>
g59: After MPI_INIT 
<br>
Hello world! I'm 0 of 2 on g59
<br>
g60: Before MPI_INIT 
<br>
g60: After MPI_INIT 
<br>
Hello world! I'm 1 of 2 on g60
<br>
<p>ompi_info  --parsable |grep pmi
<br>
<p>mca:db:pmi:version:mca:2.0.0
<br>
mca:db:pmi:version:api:1.0.0
<br>
mca:db:pmi:version:component:1.10.3
<br>
mca:ess:pmi:version:mca:2.0.0
<br>
mca:ess:pmi:version:api:3.0.0
<br>
mca:ess:pmi:version:component:1.10.3
<br>
mca:grpcomm:pmi:version:mca:2.0.0
<br>
mca:grpcomm:pmi:version:api:2.0.0
<br>
mca:grpcomm:pmi:version:component:1.10.3
<br>
mca:pubsub:pmi:version:mca:2.0.0
<br>
mca:pubsub:pmi:version:api:2.0.0
<br>
mca:pubsub:pmi:version:component:1.10.3
<br>
<p><p>module swap openmpi openmpi/1.8.6
<br>
<p><p>[GPU-Env mpi]$ mpirun -debug-daemons ./ompigcc184 
<br>
Daemon [[810,0],2] checking in as pid 55443 on host g60
<br>
Daemon [[810,0],1] checking in as pid 73091 on host g59
<br>
[g60:55443] [[810,0],2] orted: up and running - waiting for commands!
<br>
[g59:73091] [[810,0],1] orted: up and running - waiting for commands!
<br>
[login2:05014] [[810,0],0] orted_cmd: received add_local_procs
<br>
[g59:73091] [[810,0],1] orted_cmd: received add_local_procs
<br>
[g60:55443] [[810,0],2] orted_cmd: received add_local_procs
<br>
g60: Before MPI_INIT 
<br>
g59: Before MPI_INIT 
<br>
[g60:55443] [[810,0],2] orted_recv: received sync+nidmap from local proc [[810,1],1]
<br>
[g59:73091] [[810,0],1] orted_recv: received sync+nidmap from local proc [[810,1],0]
<br>
MPIR_being_debugged = 0
<br>
MPIR_debug_state = 1
<br>
MPIR_partial_attach_ok = 1
<br>
MPIR_i_am_starter = 0
<br>
MPIR_forward_output = 0
<br>
MPIR_proctable_size = 2
<br>
MPIR_proctable:
<br>
(i, host, exe, pid) = (0, g59, ompigcc184, 73096)
<br>
(i, host, exe, pid) = (1, g60, ompigcc184, 55448)
<br>
MPIR_executable_path: NULL
<br>
MPIR_server_arguments: NULL
<br>
[login2:05014] [[810,0],0] orted_cmd: received message_local_procs
<br>
[g59:73091] [[810,0],1] orted_cmd: received message_local_procs
<br>
[g60:55443] [[810,0],2] orted_cmd: received message_local_procs
<br>
[taito-login2.csc.fi:05014] [[810,0],0] orted_cmd: received message_local_procs
<br>
[g59:73091] [[810,0],1] orted_cmd: received message_local_procs
<br>
[g60:55443] [[810,0],2] orted_cmd: received message_local_procs
<br>
g59: After MPI_INIT 
<br>
Hello world! I'm 0 of 2 on g59
<br>
g60: After MPI_INIT 
<br>
Hello world! I'm 1 of 2 on g60
<br>
[login2:5014] [[810,0],0] orted_cmd: received message_local_procs
<br>
[g60:55443] [[810,0],2] orted_cmd: received message_local_procs
<br>
[g59:73091] [[810,0],1] orted_cmd: received message_local_procs
<br>
[g59:73091] [[810,0],1] orted_recv: received sync from local proc [[810,1],0]
<br>
[g60:55443] [[810,0],2] orted_recv: received sync from local proc [[810,1],1]
<br>
[login2:05014] [[810,0],0] orted_cmd: received exit cmd
<br>
[g60:55443] [[810,0],2] orted_cmd: received exit cmd
<br>
[g59:73091] [[810,0],1] orted_cmd: received exit cmd
<br>
[g60:55443] [[810,0],2] orted_cmd: all routes and children gone - exiting
<br>
[g59:73091] [[810,0],1] orted_cmd: all routes and children gone - exiting
<br>
<p><p>[GPU-Env mpi]$ ompi_info -parsable |grep pmi
<br>
mca:db:pmi:version:mca:2.0
<br>
mca:db:pmi:version:api:1.0
<br>
mca:db:pmi:version:component:1.8.6
<br>
mca:ess:pmi:version:mca:2.0
<br>
mca:ess:pmi:version:api:3.0
<br>
mca:ess:pmi:version:component:1.8.6
<br>
mca:grpcomm:pmi:version:mca:2.0
<br>
mca:grpcomm:pmi:version:api:2.0
<br>
mca:grpcomm:pmi:version:component:1.8.6
<br>
mca:pubsub:pmi:version:mca:2.0
<br>
mca:pubsub:pmi:version:api:2.0
<br>
mca:pubsub:pmi:version:component:1.8.6
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/04/28867.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Openmpi 1.10.x, mpirun and Slurm 15.08 problem"</a>
<li><strong>Previous message:</strong> <a href="28865.php">Justin Luitjens: "Re: [OMPI users] CUDA IPC/RDMA Not Working"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/04/28867.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Openmpi 1.10.x, mpirun and Slurm 15.08 problem"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/04/28867.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Openmpi 1.10.x, mpirun and Slurm 15.08 problem"</a>
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
