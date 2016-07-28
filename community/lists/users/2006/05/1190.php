<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue May  2 05:19:56 2006" -->
<!-- isoreceived="20060502091956" -->
<!-- sent="Tue, 2 May 2006 02:19:53 -0700" -->
<!-- isosent="20060502091953" -->
<!-- name="Ali Soleimani" -->
<!-- email="alis_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI TCP no-route-to-host error" -->
<!-- id="20060502091953.GA11353_at_lira.ugcs.caltech.edu" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Ali Soleimani (<em>alis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-02 05:19:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1191.php">Michael Kluskens: "Re: [OMPI users] fortran flags using Absoft compilers"</a>
<li><strong>Previous message:</strong> <a href="1189.php">Rolf Vandevaart: "[OMPI users] tcp and sm btl parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1194.php">George Bosilca: "Re: [OMPI users] OpenMPI TCP no-route-to-host error"</a>
<li><strong>Reply:</strong> <a href="1194.php">George Bosilca: "Re: [OMPI users] OpenMPI TCP no-route-to-host error"</a>
<li><strong>Maybe reply:</strong> <a href="1200.php">Ali Soleimani: "Re: [OMPI users] OpenMPI TCP no-route-to-host error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I recently got OpenMPI 1.0.2 (rev 9571) compiled and running on a
<br>
small EM64T-based cluster.  Everything works fine when running on a single
<br>
host, or when running simple commands or testscripts on multiple hosts.  But
<br>
when I try and run a major program (cosmomc), I get the following error:
<br>
<p><p>[alis_at_darwin cosmomc_mpi]$ mpirun  -np 2 cosmomc params.ini
<br>
Number of MPI processes:           2
<br>
[0,1,0][btl_tcp_endpoint.c:559:mca_btl_tcp_endpoint_complete_connect] connect() failed with errno=113
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I do not have more than one network interface (just eth0 and lo) and I
<br>
tried the various options suggested in the FAQ for disabling interfaces.  My
<br>
machines have only one IP address each.  It does not seem to matter whether I
<br>
use single hostnames, fully-qualfied hostnames, or IP addresses in the host
<br>
list.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Curiously, even though it reports this error, the processes still seem
<br>
to start up on the remote machines, though they do not produce output
<br>
properly.  The relevant ps line on the non-host machine:
<br>
<p>alis      4393  0.0  0.0 37124 2896 ?        S    05:10   0:00 sshd: alis_at_notty
<br>
alis      4394  0.1  0.0 36396 1964 ?        Ss   05:10   0:00 orted --debug
<br>
--bootproxy 1 --name 0.0.2 --num_procs 3 --vpid_start 0
<br>
alis      4411 99.9  0.1 628872 5520 ?       R    05:10   0:14 cosmomc params.ini
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Any suggestions?  A copy of the mpi_run output with --debug is
<br>
included below.
<br>
<p><p>-----
<br>
<p><p>[alis_at_darwin cosmomc_mpi]$ mpirun --debug -np 2 cosmomc params.ini
<br>
[darwin.phsx.ku.edu:25140] procdir: (null)
<br>
[darwin.phsx.ku.edu:25140] jobdir: (null)
<br>
[darwin.phsx.ku.edu:25140] unidir: /tmp/openmpi-sessions-alis_at_[hidden]_0/default-universe
<br>
[darwin.phsx.ku.edu:25140] top: openmpi-sessions-alis_at_[hidden]_0
<br>
[darwin.phsx.ku.edu:25140] tmp: /tmp
<br>
[darwin.phsx.ku.edu:25140] connect_uni: contact info read
<br>
[darwin.phsx.ku.edu:25140] connect_uni: connection not allowed
<br>
[darwin.phsx.ku.edu:25140] [0,0,0] setting up session dir with
<br>
[darwin.phsx.ku.edu:25140]      tmpdir /tmp
<br>
[darwin.phsx.ku.edu:25140]      universe default-universe-25140
<br>
[darwin.phsx.ku.edu:25140]      user alis
<br>
[darwin.phsx.ku.edu:25140]      host darwin.phsx.ku.edu
<br>
[darwin.phsx.ku.edu:25140]      jobid 0
<br>
[darwin.phsx.ku.edu:25140]      procid 0
<br>
[darwin.phsx.ku.edu:25140] procdir: /tmp/openmpi-sessions-alis_at_[hidden]_0/default-universe-25140/0/0
<br>
[darwin.phsx.ku.edu:25140] jobdir: /tmp/openmpi-sessions-alis_at_[hidden]_0/default-universe-25140/0
<br>
[darwin.phsx.ku.edu:25140] unidir: /tmp/openmpi-sessions-alis_at_[hidden]_0/default-universe-25140
<br>
[darwin.phsx.ku.edu:25140] top: openmpi-sessions-alis_at_[hidden]_0
<br>
[darwin.phsx.ku.edu:25140] tmp: /tmp
<br>
[darwin.phsx.ku.edu:25140] [0,0,0] contact_file /tmp/openmpi-sessions-alis_at_[hidden]_0/default-universe-25140/universe-setup.txt
<br>
[darwin.phsx.ku.edu:25140] [0,0,0] wrote setup file
<br>
[darwin.phsx.ku.edu:25140] spawn: in job_state_callback(jobid = 1, state = 0x1)
<br>
[darwin.phsx.ku.edu:25140] pls:rsh: local csh: 0, local bash: 1
<br>
[darwin.phsx.ku.edu:25140] pls:rsh: assuming same remote shell as local shell
<br>
[darwin.phsx.ku.edu:25140] pls:rsh: remote csh: 0, remote bash: 1
<br>
[darwin.phsx.ku.edu:25140] pls:rsh: final template argv:
<br>
[darwin.phsx.ku.edu:25140] pls:rsh:     /usr/bin/ssh &lt;template&gt; orted --debug --bootproxy 1 --name &lt;template&gt; --num_procs 3 --vpid_start 0 --nodename &lt;template&gt; --universe alis_at_[hidden]:default-universe-25140 --nsreplica &quot;0.0.0;tcp://129.237.98.242:37853&quot; --gprreplica &quot;0.0.0;tcp://129.237.98.242:37853&quot; --mpi-call-yield 0
<br>
[darwin.phsx.ku.edu:25140] pls:rsh: launching on node 129.237.98.242
<br>
[darwin.phsx.ku.edu:25140] pls:rsh: not oversubscribed -- setting mpi_yield_when_idle to 0
<br>
[darwin.phsx.ku.edu:25140] pls:rsh: 129.237.98.242 is a LOCAL node
<br>
[darwin.phsx.ku.edu:25140] pls:rsh: changing to directory /home/alis
<br>
[darwin.phsx.ku.edu:25140] pls:rsh: executing: orted --debug --bootproxy 1 --name 0.0.1 --num_procs 3 --vpid_start 0 --nodename 129.237.98.242 --universe alis_at_[hidden]:default-universe-25140 --nsreplica &quot;0.0.0;tcp://129.237.98.242:37853&quot; --gprreplica &quot;0.0.0;tcp://129.237.98.242:37853&quot; --mpi-call-yield 0
<br>
[darwin.phsx.ku.edu:25141] [0,0,1] setting up session dir with
<br>
[darwin.phsx.ku.edu:25141]      universe default-universe-25140
<br>
[darwin.phsx.ku.edu:25141]      user alis
<br>
[darwin.phsx.ku.edu:25141]      host 129.237.98.242
<br>
[darwin.phsx.ku.edu:25141]      jobid 0
<br>
[darwin.phsx.ku.edu:25141]      procid 1
<br>
[darwin.phsx.ku.edu:25141] procdir: /tmp/openmpi-sessions-alis_at_129.237.98.242_0/default-universe-25140/0/1
<br>
[darwin.phsx.ku.edu:25141] jobdir: /tmp/openmpi-sessions-alis_at_129.237.98.242_0/default-universe-25140/0
<br>
[darwin.phsx.ku.edu:25141] unidir: /tmp/openmpi-sessions-alis_at_129.237.98.242_0/default-universe-25140
<br>
[darwin.phsx.ku.edu:25141] top: openmpi-sessions-alis_at_129.237.98.242_0
<br>
[darwin.phsx.ku.edu:25141] tmp: /tmp
<br>
[darwin.phsx.ku.edu:25140] pls:rsh: launching on node 129.237.98.243
<br>
[darwin.phsx.ku.edu:25140] pls:rsh: not oversubscribed -- setting mpi_yield_when_idle to 0
<br>
[darwin.phsx.ku.edu:25140] pls:rsh: 129.237.98.243 is a REMOTE node
<br>
[darwin.phsx.ku.edu:25140] pls:rsh: executing: /usr/bin/ssh 129.237.98.243 orted --debug --bootproxy 1 --name 0.0.2 --num_procs 3 --vpid_start 0 --nodename 129.237.98.243 --universe alis_at_[hidden]:default-universe-25140 --nsreplica &quot;0.0.0;tcp://129.237.98.242:37853&quot; --gprreplica &quot;0.0.0;tcp://129.237.98.242:37853&quot; --mpi-call-yield 0
<br>
[fisher.phsx.ku.edu:04445] [0,0,2] setting up session dir with
<br>
[fisher.phsx.ku.edu:04445]      universe default-universe-25140
<br>
[fisher.phsx.ku.edu:04445]      user alis
<br>
[fisher.phsx.ku.edu:04445]      host 129.237.98.243
<br>
[fisher.phsx.ku.edu:04445]      jobid 0
<br>
[fisher.phsx.ku.edu:04445]      procid 2
<br>
[fisher.phsx.ku.edu:04445] procdir: /tmp/openmpi-sessions-alis_at_129.237.98.243_0/default-universe-25140/0/2
<br>
[fisher.phsx.ku.edu:04445] jobdir: /tmp/openmpi-sessions-alis_at_129.237.98.243_0/default-universe-25140/0
<br>
[fisher.phsx.ku.edu:04445] unidir: /tmp/openmpi-sessions-alis_at_129.237.98.243_0/default-universe-25140
<br>
[fisher.phsx.ku.edu:04445] top: openmpi-sessions-alis_at_129.237.98.243_0
<br>
[fisher.phsx.ku.edu:04445] tmp: /tmp
<br>
[darwin.phsx.ku.edu:25143] [0,1,0] setting up session dir with
<br>
[darwin.phsx.ku.edu:25143]      universe default-universe-25140
<br>
[darwin.phsx.ku.edu:25143]      user alis
<br>
[darwin.phsx.ku.edu:25143]      host 129.237.98.242
<br>
[darwin.phsx.ku.edu:25143]      jobid 1
<br>
[darwin.phsx.ku.edu:25143]      procid 0
<br>
[darwin.phsx.ku.edu:25143] procdir: /tmp/openmpi-sessions-alis_at_129.237.98.242_0/default-universe-25140/1/0
<br>
[darwin.phsx.ku.edu:25143] jobdir: /tmp/openmpi-sessions-alis_at_129.237.98.242_0/default-universe-25140/1
<br>
[darwin.phsx.ku.edu:25143] unidir: /tmp/openmpi-sessions-alis_at_129.237.98.242_0/default-universe-25140
<br>
[darwin.phsx.ku.edu:25143] top: openmpi-sessions-alis_at_129.237.98.242_0
<br>
[darwin.phsx.ku.edu:25143] tmp: /tmp
<br>
[fisher.phsx.ku.edu:04462] [0,1,1] setting up session dir with
<br>
[fisher.phsx.ku.edu:04462]      universe default-universe-25140
<br>
[fisher.phsx.ku.edu:04462]      user alis
<br>
[fisher.phsx.ku.edu:04462]      host 129.237.98.243
<br>
[fisher.phsx.ku.edu:04462]      jobid 1
<br>
[fisher.phsx.ku.edu:04462]      procid 1
<br>
[fisher.phsx.ku.edu:04462] procdir: /tmp/openmpi-sessions-alis_at_129.237.98.243_0/default-universe-25140/1/1
<br>
[fisher.phsx.ku.edu:04462] jobdir: /tmp/openmpi-sessions-alis_at_129.237.98.243_0/default-universe-25140/1
<br>
[fisher.phsx.ku.edu:04462] unidir: /tmp/openmpi-sessions-alis_at_129.237.98.243_0/default-universe-25140
<br>
[fisher.phsx.ku.edu:04462] top: openmpi-sessions-alis_at_129.237.98.243_0
<br>
[fisher.phsx.ku.edu:04462] tmp: /tmp
<br>
[darwin.phsx.ku.edu:25140] spawn: in job_state_callback(jobid = 1, state = 0x3)
<br>
[darwin.phsx.ku.edu:25140] Info: Setting up debugger process table for applications
<br>
&nbsp;&nbsp;MPIR_being_debugged = 0
<br>
&nbsp;&nbsp;MPIR_debug_gate = 0
<br>
&nbsp;&nbsp;MPIR_debug_state = 1
<br>
&nbsp;&nbsp;MPIR_acquired_pre_main = 0
<br>
&nbsp;&nbsp;MPIR_i_am_starter = 0
<br>
&nbsp;&nbsp;MPIR_proctable_size = 2
<br>
&nbsp;&nbsp;MPIR_proctable:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (0, 129.237.98.243, cosmomc, 4462)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (1, 129.237.98.242, cosmomc, 25143)
<br>
[darwin.phsx.ku.edu:25141] orted: job_state_callback(jobid = 1, state = 5453392)
<br>
[darwin.phsx.ku.edu:25140] spawn: in job_state_callback(jobid = 1, state = 0x4)
<br>
[darwin.phsx.ku.edu:25141] orted: job_state_callback(jobid = 1, state = 5389856)
<br>
[darwin.phsx.ku.edu:25143] [0,1,0] ompi_mpi_init completed
<br>
[fisher.phsx.ku.edu:04462] [0,1,1] ompi_mpi_init completed
<br>
[fisher.phsx.ku.edu:04445] orted: job_state_callback(jobid = 1, state = 5449344)
<br>
[fisher.phsx.ku.edu:04445] orted: job_state_callback(jobid = 1, state = 5379136)
<br>
&nbsp;Number of MPI processes:           2
<br>
[0,1,0][btl_tcp_endpoint.c:559:mca_btl_tcp_endpoint_complete_connect] connect() failed with errno=113
<br>
<p><pre>
---
At this point I have to kill the proc with Ctrl-C.
---
[darwin.phsx.ku.edu:25141] sess_dir_finalize: found job session dir empty - deleting
[darwin.phsx.ku.edu:25141] sess_dir_finalize: univ session dir not empty - leaving
Killed by signal 2.
[darwin.phsx.ku.edu:25140] sess_dir_finalize: proc session dir not empty - leaving
[darwin.phsx.ku.edu:25141] orted: job_state_callback(jobid = 1, state = ORTE_PROC_STATE_ABORTED)
[darwin.phsx.ku.edu:25140] spawn: in job_state_callback(jobid = 1, state = 0xa)
[darwin.phsx.ku.edu:25140] ERROR: A daemon on node 129.237.98.243 failed to start as expected.
[darwin.phsx.ku.edu:25140] ERROR: There may be more information available from
[darwin.phsx.ku.edu:25140] ERROR: the remote shell (see above).
[darwin.phsx.ku.edu:25140] ERROR: The daemon exited unexpectedly with status 255.
mpirun: killing job...
[darwin.phsx.ku.edu:25140] [0,0,0]-[0,0,2] mca_oob_tcp_msg_send_handler: writev failed with errno=104
[darwin.phsx.ku.edu:25140] [0,0,0] ORTE_ERROR_LOG: Connection failed in file pls_base_proxy.c at line 140
forrtl: error (69): process interrupted (SIGINT)
--------------------------------------------------------------------------
WARNING: A process refused to die!
Host: darwin.phsx.ku.edu
PID:  25143
This process may still be running and/or consuming resources.
--------------------------------------------------------------------------
--------------------------------------------------------------------------
WARNING: A process refused to die!
Host: darwin.phsx.ku.edu
PID:  25143
This process may still be running and/or consuming resources.
--------------------------------------------------------------------------
--------------------------------------------------------------------------
WARNING: A process refused to die!
Host: darwin.phsx.ku.edu
PID:  25143
This process may still be running and/or consuming resources.
--------------------------------------------------------------------------
[darwin.phsx.ku.edu:25141] sess_dir_finalize: proc session dir not empty - leaving
[darwin.phsx.ku.edu:25141] orted: job_state_callback(jobid = 1, state = ORTE_PROC_STATE_TERMINATED)
[darwin.phsx.ku.edu:25141] sess_dir_finalize: found proc session dir empty - deleting
[darwin.phsx.ku.edu:25141] sess_dir_finalize: found job session dir empty - deleting
[darwin.phsx.ku.edu:25141] sess_dir_finalize: found univ session dir empty - deleting
[darwin.phsx.ku.edu:25141] sess_dir_finalize: top session dir not empty - leaving
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1191.php">Michael Kluskens: "Re: [OMPI users] fortran flags using Absoft compilers"</a>
<li><strong>Previous message:</strong> <a href="1189.php">Rolf Vandevaart: "[OMPI users] tcp and sm btl parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1194.php">George Bosilca: "Re: [OMPI users] OpenMPI TCP no-route-to-host error"</a>
<li><strong>Reply:</strong> <a href="1194.php">George Bosilca: "Re: [OMPI users] OpenMPI TCP no-route-to-host error"</a>
<li><strong>Maybe reply:</strong> <a href="1200.php">Ali Soleimani: "Re: [OMPI users] OpenMPI TCP no-route-to-host error"</a>
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
