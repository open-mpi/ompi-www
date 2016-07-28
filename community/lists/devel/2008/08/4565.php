<?
$subject_val = "[OMPI devel] Checkpoint/Restart svn trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 11 15:06:39 2008" -->
<!-- isoreceived="20080811190639" -->
<!-- sent="Mon, 11 Aug 2008 16:06:34 -0300" -->
<!-- isosent="20080811190634" -->
<!-- name="Caciano Machado" -->
<!-- email="caciano_at_[hidden]" -->
<!-- subject="[OMPI devel] Checkpoint/Restart svn trunk" -->
<!-- id="4226a8f0808111206n1a7c8393i261c8220eefaa4a6_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] Checkpoint/Restart svn trunk<br>
<strong>From:</strong> Caciano Machado (<em>caciano_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-11 15:06:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4566.php">Caciano Machado: "Re: [OMPI devel] Checkpoint/Restart svn trunk"</a>
<li><strong>Previous message:</strong> <a href="4564.php">Don Kerr: "Re: [OMPI devel] Trunk Heads Up"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4566.php">Caciano Machado: "Re: [OMPI devel] Checkpoint/Restart svn trunk"</a>
<li><strong>Reply:</strong> <a href="4566.php">Caciano Machado: "Re: [OMPI devel] Checkpoint/Restart svn trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm trying to run the last checkpoint/restart (rev 19235) but ompi is
<br>
showing the following error in &quot;ompi-checkpoint&quot;.
<br>
<p>It seems to be something in function &quot;orte_list_local_hnps&quot; of the
<br>
file orte/util/hnp_contact.c. I'm using BLCR 0.7.2 and it's working
<br>
correctly with the example applications.
<br>
<p>################################################################
<br>
root_at_debian:~/pp# ompi-clean
<br>
root_at_debian:~/pp# mpirun -machinefile machinefile -np 2 -am
<br>
ft-enable-cr -v -d pp 1 2 1000000
<br>
[debian:27936] procdir: /tmp/openmpi-sessions-root_at_debian_0/31810/0/0
<br>
[debian:27936] jobdir: /tmp/openmpi-sessions-root_at_debian_0/31810/0
<br>
[debian:27936] top: openmpi-sessions-root_at_debian_0
<br>
[debian:27936] tmp: /tmp
<br>
[debian:27936] [[31810,0],0] hostfile: checking hostfile machinefile for nodes
<br>
[debian:27936] [[31810,0],0] hostfile: filtering nodes through
<br>
hostfile machinefile
<br>
[debian:27936] progressed_wait: base/plm_base_launch_support.c 436
<br>
[debian:27940] procdir: /tmp/openmpi-sessions-root_at_debian_0/31810/0/1
<br>
[debian:27940] jobdir: /tmp/openmpi-sessions-root_at_debian_0/31810/0
<br>
[debian:27940] top: openmpi-sessions-root_at_debian_0
<br>
[debian:27940] tmp: /tmp
<br>
[debian:27936] defining message event: base/plm_base_launch_support.c 400
<br>
[debian:27936] defining message event: grpcomm_bad_module.c 183
<br>
[debian:27936] progressed_wait: base/plm_base_launch_support.c 679
<br>
[debian:27936] [[31810,0],0] orte:daemon:cmd:processor called by
<br>
[[31810,0],0] for tag 1
<br>
[debian:27936] defining message event: orted/orted_comm.c 382
<br>
[debian:27936] [[31810,0],0] node[0].name debian daemon 0 arch ffca0200
<br>
[debian:27936] [[31810,0],0] node[1].name debian daemon 1 arch ffca0200
<br>
[debian:27936] defining message event: base/odls_base_default_fns.c 1060
<br>
[debian:27936] [[31810,0],0] orte:daemon:cmd:processor: processing
<br>
commands completed
<br>
[debian:27936] [[31810,0],0] orte:daemon:send_relay
<br>
[debian:27936] [[31810,0],0] orte:daemon:send_relay sending relay msg
<br>
to [[31810,0],1]
<br>
[debian:27940] [[31810,0],1] orted_recv_cmd: received message from [[31810,0],0]
<br>
[debian:27940] defining message event: orted/orted_comm.c 277
<br>
[debian:27940] [[31810,0],1] orted_recv_cmd: reissued recv
<br>
[debian:27940] [[31810,0],1] orte:daemon:cmd:processor called by
<br>
[[31810,0],0] for tag 1
<br>
[debian:27940] defining message event: orted/orted_comm.c 382
<br>
[debian:27940] [[31810,0],1] node[0].name debian daemon 0 arch ffca0200
<br>
[debian:27940] [[31810,0],1] node[1].name debian daemon 1 arch ffca0200
<br>
[debian:27940] [[31810,0],1] orte:daemon:cmd:processor: processing
<br>
commands completed
<br>
[debian:27940] [[31810,0],1] orte:daemon:send_relay
<br>
[debian:27940] [[31810,0],1] orte:daemon:send_relay - recipient list is empty!
<br>
[debian:27936] defining message event: base/plm_base_launch_support.c 635
<br>
[debian:27936] Info: Setting up debugger process table for applications
<br>
&nbsp;&nbsp;MPIR_being_debugged = 0
<br>
&nbsp;&nbsp;MPIR_debug_state = 1
<br>
&nbsp;&nbsp;MPIR_partial_attach_ok = 1
<br>
&nbsp;&nbsp;MPIR_i_am_starter = 0
<br>
&nbsp;&nbsp;MPIR_proctable_size = 2
<br>
&nbsp;&nbsp;MPIR_proctable:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (0, debian, /root/pp/pp, 27941)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (1, debian, /root/pp/pp, 27942)
<br>
[debian:27942] procdir: /tmp/openmpi-sessions-root_at_debian_0/31810/1/1
<br>
[debian:27941] procdir: /tmp/openmpi-sessions-root_at_debian_0/31810/1/0
<br>
[debian:27941] jobdir: /tmp/openmpi-sessions-root_at_debian_0/31810/1
<br>
[debian:27941] top: openmpi-sessions-root_at_debian_0
<br>
[debian:27941] tmp: /tmp
<br>
[debian:27942] jobdir: /tmp/openmpi-sessions-root_at_debian_0/31810/1
<br>
[debian:27942] top: openmpi-sessions-root_at_debian_0
<br>
[debian:27942] tmp: /tmp
<br>
[debian:27940] [[31810,0],1] orted_recv_cmd: received message from [[31810,1],0]
<br>
[debian:27940] defining message event: orted/orted_comm.c 277
<br>
[debian:27940] [[31810,0],1] orted_recv_cmd: reissued recv
<br>
[debian:27940] [[31810,0],1] orte:daemon:cmd:processor called by
<br>
[[31810,1],0] for tag 1
<br>
[debian:27940] [[31810,0],1] orte:daemon:cmd:processor: processing
<br>
commands completed
<br>
[debian:27940] [[31810,0],1] orted_recv_cmd: received message from [[31810,1],1]
<br>
[debian:27940] defining message event: orted/orted_comm.c 277
<br>
[debian:27940] [[31810,0],1] orted_recv_cmd: reissued recv
<br>
[debian:27940] [[31810,0],1] orte:daemon:cmd:processor called by
<br>
[[31810,1],1] for tag 1
<br>
[debian:27936] defining message event: base/routed_base_receive.c 153
<br>
[debian:27940] [[31810,0],1] orte:daemon:cmd:processor: processing
<br>
commands completed
<br>
[debian:27941] progressed_wait: base/routed_base_register_sync.c 104
<br>
[debian:27942] progressed_wait: base/routed_base_register_sync.c 104
<br>
[debian:27941] [[31810,1],0] node[0].name debian daemon 0 arch ffca0200
<br>
[debian:27941] [[31810,1],0] node[1].name debian daemon 1 arch ffca0200
<br>
[debian:27942] [[31810,1],1] node[0].name debian daemon 0 arch ffca0200
<br>
[debian:27942] [[31810,1],1] node[1].name debian daemon 1 arch ffca0200
<br>
[debian:27940] [[31810,0],1] orted_recv_cmd: received message from [[31810,1],0]
<br>
[debian:27940] defining message event: orted/orted_comm.c 277
<br>
[debian:27940] [[31810,0],1] orted_recv_cmd: reissued recv
<br>
[debian:27940] [[31810,0],1] orte:daemon:cmd:processor called by
<br>
[[31810,1],0] for tag 1
<br>
[debian:27940] [[31810,0],1] orte:daemon:cmd:processor: processing
<br>
commands completed
<br>
[debian:27941] progressed_wait: grpcomm_bad_module.c 394
<br>
[debian:27936] [[31810,0],0] orted_recv_cmd: received message from [[31810,0],1]
<br>
[debian:27936] defining message event: orted/orted_comm.c 277
<br>
[debian:27936] [[31810,0],0] orted_recv_cmd: reissued recv
<br>
[debian:27936] [[31810,0],0] orte:daemon:cmd:processor called by
<br>
[[31810,0],1] for tag 1
<br>
[debian:27936] defining message event: grpcomm_bad_module.c 183
<br>
[debian:27936] [[31810,0],0] orte:daemon:cmd:processor: processing
<br>
commands completed
<br>
[debian:27936] [[31810,0],0] orte:daemon:cmd:processor called by
<br>
[[31810,0],0] for tag 1
<br>
[debian:27936] defining message event: orted/orted_comm.c 382
<br>
[debian:27936] [[31810,0],0] orted:comm:message_local_procs delivering
<br>
message to job [31810,1] tag 15
<br>
[debian:27936] [[31810,0],0] orte:daemon:cmd:processor: processing
<br>
commands completed
<br>
[debian:27936] [[31810,0],0] orte:daemon:send_relay
<br>
[debian:27936] [[31810,0],0] orte:daemon:send_relay sending relay msg
<br>
to [[31810,0],1]
<br>
[debian:27940] [[31810,0],1] orted_recv_cmd: received message from [[31810,1],1]
<br>
[debian:27940] defining message event: orted/orted_comm.c 277
<br>
[debian:27940] [[31810,0],1] orted_recv_cmd: reissued recv
<br>
[debian:27940] [[31810,0],1] orte:daemon:cmd:processor called by
<br>
[[31810,1],1] for tag 1
<br>
[debian:27940] [[31810,0],1] orte:daemon:cmd:processor: processing
<br>
commands completed
<br>
[debian:27940] [[31810,0],1] orted_recv_cmd: received message from [[31810,0],0]
<br>
[debian:27940] defining message event: orted/orted_comm.c 277
<br>
[debian:27940] [[31810,0],1] orted_recv_cmd: reissued recv
<br>
[debian:27940] [[31810,0],1] orte:daemon:cmd:processor called by
<br>
[[31810,0],0] for tag 1
<br>
[debian:27940] defining message event: orted/orted_comm.c 382
<br>
[debian:27940] [[31810,0],1] orted:comm:message_local_procs delivering
<br>
message to job [31810,1] tag 15
<br>
[debian:27940] [[31810,0],1] orte:daemon:cmd:processor: processing
<br>
commands completed
<br>
[debian:27940] [[31810,0],1] orte:daemon:send_relay
<br>
[debian:27940] [[31810,0],1] orte:daemon:send_relay - recipient list is empty!
<br>
[debian:27942] progressed_wait: grpcomm_bad_module.c 394
<br>
[debian:27940] [[31810,0],1] orted_recv_cmd: received message from [[31810,1],1]
<br>
[debian:27940] defining message event: orted/orted_comm.c 277
<br>
[debian:27940] [[31810,0],1] orted_recv_cmd: reissued recv
<br>
[debian:27940] [[31810,0],1] orte:daemon:cmd:processor called by
<br>
[[31810,1],1] for tag 1
<br>
[debian:27940] [[31810,0],1] orte:daemon:cmd:processor: processing
<br>
commands completed
<br>
[debian:27942] progressed_wait: grpcomm_bad_module.c 270
<br>
[debian:27936] [[31810,0],0] orted_recv_cmd: received message from [[31810,0],1]
<br>
[debian:27936] defining message event: orted/orted_comm.c 277
<br>
[debian:27936] [[31810,0],0] orted_recv_cmd: reissued recv
<br>
[debian:27936] [[31810,0],0] orte:daemon:cmd:processor called by
<br>
[[31810,0],1] for tag 1
<br>
[debian:27936] defining message event: grpcomm_bad_module.c 183
<br>
[debian:27936] [[31810,0],0] orte:daemon:cmd:processor: processing
<br>
commands completed
<br>
[debian:27936] [[31810,0],0] orte:daemon:cmd:processor called by
<br>
[[31810,0],0] for tag 1
<br>
[debian:27936] defining message event: orted/orted_comm.c 382
<br>
[debian:27936] [[31810,0],0] orted:comm:message_local_procs delivering
<br>
message to job [31810,1] tag 17
<br>
[debian:27936] [[31810,0],0] orte:daemon:cmd:processor: processing
<br>
commands completed
<br>
[debian:27936] [[31810,0],0] orte:daemon:send_relay
<br>
[debian:27936] [[31810,0],0] orte:daemon:send_relay sending relay msg
<br>
to [[31810,0],1]
<br>
[debian:27940] [[31810,0],1] orted_recv_cmd: received message from [[31810,1],0]
<br>
[debian:27940] defining message event: orted/orted_comm.c 277
<br>
[debian:27940] [[31810,0],1] orted_recv_cmd: reissued recv
<br>
[debian:27940] [[31810,0],1] orte:daemon:cmd:processor called by
<br>
[[31810,1],0] for tag 1
<br>
[debian:27940] [[31810,0],1] orte:daemon:cmd:processor: processing
<br>
commands completed
<br>
[debian:27940] [[31810,0],1] orted_recv_cmd: received message from [[31810,0],0]
<br>
[debian:27940] defining message event: orted/orted_comm.c 277
<br>
[debian:27940] [[31810,0],1] orted_recv_cmd: reissued recv
<br>
[debian:27940] [[31810,0],1] orte:daemon:cmd:processor called by
<br>
[[31810,0],0] for tag 1
<br>
[debian:27940] defining message event: orted/orted_comm.c 382
<br>
[debian:27940] [[31810,0],1] orted:comm:message_local_procs delivering
<br>
message to job [31810,1] tag 17
<br>
[debian:27940] [[31810,0],1] orte:daemon:cmd:processor: processing
<br>
commands completed
<br>
[debian:27940] [[31810,0],1] orte:daemon:send_relay
<br>
[debian:27940] [[31810,0],1] orte:daemon:send_relay - recipient list is empty!
<br>
[debian:27941] progressed_wait: grpcomm_bad_module.c 270
<br>
#
<br>
# ping-pong com MPI
<br>
#
<br>
# msgs from 1 to 2 bytes
<br>
# results are the mean of 1000000 repetitions for each msg size
<br>
# Tue Aug 12 06:26:29 2008
<br>
#
<br>
#   size       lat (us)      bw (MB/s)
<br>
<p>################################################################
<br>
27936 pts/1    S+     0:00 mpirun -machinefile machinefile -np 2 -am
<br>
ft-enable-cr -v -d pp 1 2 1000000
<br>
27937 pts/1    S+     0:00 /usr/bin/ssh -x debian  orted --debug
<br>
--heartbeat 0 -mca ess env -mca orte_ess_jobid 2084700160
<br>
27938 ?        Ss     0:00 sshd: root_at_notty
<br>
27940 ?        Ss     0:00 orted --debug --heartbeat 0 -mca ess env
<br>
-mca orte_ess_jobid 2084700160 -mca orte_ess_vpid 1 -mc
<br>
27941 ?        Rl     0:21 pp 1 2 1000000
<br>
27942 ?        Rl     0:21 pp 1 2 1000000
<br>
28021 pts/0    R+     0:00 ps xa
<br>
<p>root_at_debian:~/pp# ompi-checkpoint 27936 -v
<br>
[debian:28022] [[31764,0],0] ORTE_ERROR_LOG: Not found in file
<br>
orte-checkpoint.c at line 395
<br>
[debian:28022] HNP with PID 27936 Not found!
<br>
<p>################################################################
<br>
<p>Regards,
<br>
Caciano Machado
<br>
Computer Science Graduate Student/UFRGS
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4566.php">Caciano Machado: "Re: [OMPI devel] Checkpoint/Restart svn trunk"</a>
<li><strong>Previous message:</strong> <a href="4564.php">Don Kerr: "Re: [OMPI devel] Trunk Heads Up"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4566.php">Caciano Machado: "Re: [OMPI devel] Checkpoint/Restart svn trunk"</a>
<li><strong>Reply:</strong> <a href="4566.php">Caciano Machado: "Re: [OMPI devel] Checkpoint/Restart svn trunk"</a>
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
