<?
$subject_val = "[OMPI users] mca_oob_tcp_peer_try_connect problem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 28 16:41:40 2007" -->
<!-- isoreceived="20071128214140" -->
<!-- sent="Wed, 28 Nov 2007 15:41:20 -0600" -->
<!-- isosent="20071128214120" -->
<!-- name="Bob Soliday" -->
<!-- email="soliday_at_[hidden]" -->
<!-- subject="[OMPI users] mca_oob_tcp_peer_try_connect problem" -->
<!-- id="474DE080.40805_at_aps.anl.gov" -->
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
<strong>Subject:</strong> [OMPI users] mca_oob_tcp_peer_try_connect problem<br>
<strong>From:</strong> Bob Soliday (<em>soliday_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-28 16:41:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4548.php">Brock Palen: "Re: [OMPI users] OpenIB problems"</a>
<li><strong>Previous message:</strong> <a href="4546.php">Terry Frankcombe: "Re: [OMPI users] ./configure error on windows while installing	openmpi-1.2.4(latest)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4560.php">Ralph H Castain: "Re: [OMPI users] mca_oob_tcp_peer_try_connect problem"</a>
<li><strong>Reply:</strong> <a href="4560.php">Ralph H Castain: "Re: [OMPI users] mca_oob_tcp_peer_try_connect problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am new to openmpi and have a problem that I cannot seem to solve.
<br>
I am trying to run the hello_c example and I can't get it to work.
<br>
I compiled openmpi with:
<br>
<p>./configure --prefix=/usr/local/software/openmpi-1.2.4 --disable-ipv6 --with-openib
<br>
<p>The hostname file contains the local host and one other node. When I run it I get:
<br>
<p><p>[soliday_at_max14 mpi-ex]$ /usr/local/software/openmpi-1.2.4/bin/mpirun --debug-daemons -mca oob_tcp_debug 1000 -machinefile hostfile -np 2 hello_c
<br>
[max14:31465] [0,0,0] accepting connections via event library
<br>
[max14:31465] [0,0,0] mca_oob_tcp_init: calling orte_gpr.subscribe
<br>
[max14:31466] [0,0,1] accepting connections via event library
<br>
[max14:31466] [0,0,1] mca_oob_tcp_init: calling orte_gpr.subscribe
<br>
[max14:31466] [0,0,1]-[0,0,0] mca_oob_tcp_send: tag 2
<br>
[max14:31466] [0,0,1]-[0,0,0] mca_oob_tcp_peer_try_connect: connecting port 55152 to: 192.168.2.14:38852
<br>
[max14:31466] [0,0,1]-[0,0,0] mca_oob_tcp_peer_complete_connect: sending ack, 0
<br>
[max14:31465] [0,0,0] mca_oob_tcp_accept: 192.168.2.14:37255
<br>
[max14:31465] [0,0,0]-[0,0,1] accepted: 192.168.2.14 - 192.168.2.14 nodelay 1 sndbuf 262142 rcvbuf 262142 flags 00000802
<br>
[max14:31466] [0,0,1]-[0,0,0] connected: 192.168.2.14 - 192.168.2.14 nodelay 1 sndbuf 262142 rcvbuf 262142 flags 00000802
<br>
[max14:31466] [0,0,1]-[0,0,0] mca_oob_tcp_recv: tag 2
<br>
[max14:31466] [0,0,1]-[0,0,0] mca_oob_tcp_send: tag 2
<br>
[max14:31466] [0,0,1]-[0,0,0] mca_oob_tcp_recv: tag 2
<br>
Daemon [0,0,1] checking in as pid 31466 on host max14
<br>
[max14:31466] [0,0,1]-[0,0,0] mca_oob_tcp_send: tag 2
<br>
[max14:31466] [0,0,1]-[0,0,0] mca_oob_tcp_recv: tag 2
<br>
[max15:28222] [0,0,2]-[0,0,0] mca_oob_tcp_peer_try_connect: connect to 192.168.1.14:38852 failed: Software caused connection abort (103)
<br>
[max15:28222] [0,0,2]-[0,0,0] mca_oob_tcp_peer_try_connect: connect to 192.168.1.14:38852 failed: Software caused connection abort (103)
<br>
[max15:28222] [0,0,2]-[0,0,0] mca_oob_tcp_peer_try_connect: connect to 192.168.1.14:38852 failed, connecting over all interfaces failed!
<br>
[max15:28222] OOB: Connection to HNP lost
<br>
[max14:31466] [0,0,1] orted_recv_pls: received message from [0,0,0]
<br>
[max14:31466] [0,0,1] orted_recv_pls: received kill_local_procs
<br>
[max14:31466] [0,0,1]-[0,0,0] mca_oob_tcp_send: tag 15
<br>
[max14:31465] [0,0,0] ORTE_ERROR_LOG: Timeout in file base/pls_base_orted_cmds.c at line 275
<br>
[max14:31465] [0,0,0] ORTE_ERROR_LOG: Timeout in file pls_rsh_module.c at line 1166
<br>
[max14:31465] [0,0,0] ORTE_ERROR_LOG: Timeout in file errmgr_hnp.c at line 90
<br>
[max14:31465] ERROR: A daemon on node max15 failed to start as expected.
<br>
[max14:31465] ERROR: There may be more information available from
<br>
[max14:31465] ERROR: the remote shell (see above).
<br>
[max14:31465] ERROR: The daemon exited unexpectedly with status 1.
<br>
[max14:31466] [0,0,1] orted_recv_pls: received message from [0,0,0]
<br>
[max14:31466] [0,0,1] orted_recv_pls: received exit
<br>
[max14:31466] [0,0,1]-[0,0,0] mca_oob_tcp_send: tag 15
<br>
[max14:31465] [0,0,0]-[0,0,1] mca_oob_tcp_msg_recv: peer closed connection
<br>
[max14:31465] [0,0,0]-[0,0,1] mca_oob_tcp_peer_close(0x523100) sd 6 state 4
<br>
[max14:31465] [0,0,0] ORTE_ERROR_LOG: Timeout in file base/pls_base_orted_cmds.c at line 188
<br>
[max14:31465] [0,0,0] ORTE_ERROR_LOG: Timeout in file pls_rsh_module.c at line 1198
<br>
--------------------------------------------------------------------------
<br>
mpirun was unable to cleanly terminate the daemons for this job. Returned value Timeout instead of ORTE_SUCCESS.
<br>
--------------------------------------------------------------------------
<br>
<p><p><p>I can see that the orted deamon program is starting on both computers but it looks to
<br>
me like they can't talk to each other.
<br>
<p>Here is the output from ifconfig on one of the nodes, the other node is similar.
<br>
<p>[root_at_max14 ~]# /sbin/ifconfig
<br>
eth0      Link encap:Ethernet  HWaddr 00:17:31:9C:93:A1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:192.168.2.14  Bcast:192.168.2.255  Mask:255.255.255.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 addr: fe80::217:31ff:fe9c:93a1/64 Scope:Link
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:1353 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:9572 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:1000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:188125 (183.7 KiB)  TX bytes:1500567 (1.4 MiB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Interrupt:17
<br>
<p>eth1      Link encap:Ethernet  HWaddr 00:17:31:9C:93:A2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:192.168.1.14  Bcast:192.168.1.255  Mask:255.255.255.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 addr: fe80::217:31ff:fe9c:93a2/64 Scope:Link
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:49652796 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:49368158 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:1000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:21844618928 (20.3 GiB)  TX bytes:16122676331 (15.0 GiB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Interrupt:19
<br>
<p>lo        Link encap:Local Loopback
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:127.0.0.1  Mask:255.0.0.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 addr: ::1/128 Scope:Host
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP LOOPBACK RUNNING  MTU:16436  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:82191 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:82191 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:7383491 (7.0 MiB)  TX bytes:7383491 (7.0 MiB)
<br>
<p><p>These machines routinely run mpich2 and mvapich2 programs so I don't suspect any
<br>
problems with the gigabit or infiniband connections.
<br>
<p>Thanks,
<br>
--Bob Soliday
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4548.php">Brock Palen: "Re: [OMPI users] OpenIB problems"</a>
<li><strong>Previous message:</strong> <a href="4546.php">Terry Frankcombe: "Re: [OMPI users] ./configure error on windows while installing	openmpi-1.2.4(latest)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4560.php">Ralph H Castain: "Re: [OMPI users] mca_oob_tcp_peer_try_connect problem"</a>
<li><strong>Reply:</strong> <a href="4560.php">Ralph H Castain: "Re: [OMPI users] mca_oob_tcp_peer_try_connect problem"</a>
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
