<?
$subject_val = "Re: [OMPI users] mca_oob_tcp_peer_try_connect problem";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 29 09:40:27 2007" -->
<!-- isoreceived="20071129144027" -->
<!-- sent="Thu, 29 Nov 2007 07:40:11 -0700" -->
<!-- isosent="20071129144011" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mca_oob_tcp_peer_try_connect problem" -->
<!-- id="C3741D5B.B6F4%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="474DE080.40805_at_aps.anl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] mca_oob_tcp_peer_try_connect problem<br>
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-29 09:40:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4561.php">Bob Soliday: "Re: [OMPI users] mca_oob_tcp_peer_try_connect problem"</a>
<li><strong>Previous message:</strong> <a href="4559.php">Jeff Squyres: "Re: [OMPI users] [openMPI-infiniband] openMPI in IB network when openSM with LASH is running"</a>
<li><strong>In reply to:</strong> <a href="4547.php">Bob Soliday: "[OMPI users] mca_oob_tcp_peer_try_connect problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4561.php">Bob Soliday: "Re: [OMPI users] mca_oob_tcp_peer_try_connect problem"</a>
<li><strong>Reply:</strong> <a href="4561.php">Bob Soliday: "Re: [OMPI users] mca_oob_tcp_peer_try_connect problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Bob
<br>
<p>I'm afraid the person most familiar with the oob subsystem recently left the
<br>
project, so we are somewhat hampered at the moment. I don't recognize the
<br>
&quot;Software caused connection abort&quot; error message - it doesn't appear to be
<br>
one of ours (at least, I couldn't find it anywhere in our code base, though
<br>
I can't swear it isn't there in some dark corner), and I don't find it in my
<br>
own sys/errno.h file.
<br>
<p>With those caveats, all I can say is that something appears to be blocking
<br>
the connection from your remote node back to the head node. Are you sure
<br>
both nodes are available on IPv4 (since you disabled IPv6)? Can you try
<br>
ssh'ing to the remote node and doing a ping to the head node using the IPv4
<br>
interface?
<br>
<p>Do you have another method you could use to check and see if max14 will
<br>
accept connections from max15? If I interpret the error message correctly,
<br>
it looks like something in the connect handshake is being aborted. We try a
<br>
couple of times, but then give up and try other interfaces - since no other
<br>
interface is available, you get that other error message and we abort.
<br>
<p>Sorry I can't be more help - like I said, this is now a weak spot in our
<br>
coverage that needs to be rebuilt.
<br>
<p>Ralph
<br>
&nbsp;
<br>
<p><p>On 11/28/07 2:41 PM, &quot;Bob Soliday&quot; &lt;soliday_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I am new to openmpi and have a problem that I cannot seem to solve.
</span><br>
<span class="quotelev1">&gt; I am trying to run the hello_c example and I can't get it to work.
</span><br>
<span class="quotelev1">&gt; I compiled openmpi with:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/usr/local/software/openmpi-1.2.4 --disable-ipv6
</span><br>
<span class="quotelev1">&gt; --with-openib
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The hostname file contains the local host and one other node. When I
</span><br>
<span class="quotelev1">&gt; run it I get:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [soliday_at_max14 mpi-ex]$ /usr/local/software/openmpi-1.2.4/bin/mpirun --
</span><br>
<span class="quotelev1">&gt; debug-daemons -mca oob_tcp_debug 1000 -machinefile hostfile -np 2
</span><br>
<span class="quotelev1">&gt; hello_c
</span><br>
<span class="quotelev1">&gt; [max14:31465] [0,0,0] accepting connections via event library
</span><br>
<span class="quotelev1">&gt; [max14:31465] [0,0,0] mca_oob_tcp_init: calling orte_gpr.subscribe
</span><br>
<span class="quotelev1">&gt; [max14:31466] [0,0,1] accepting connections via event library
</span><br>
<span class="quotelev1">&gt; [max14:31466] [0,0,1] mca_oob_tcp_init: calling orte_gpr.subscribe
</span><br>
<span class="quotelev1">&gt; [max14:31466] [0,0,1]-[0,0,0] mca_oob_tcp_send: tag 2
</span><br>
<span class="quotelev1">&gt; [max14:31466] [0,0,1]-[0,0,0] mca_oob_tcp_peer_try_connect: connecting
</span><br>
<span class="quotelev1">&gt; port 55152 to: 192.168.2.14:38852
</span><br>
<span class="quotelev1">&gt; [max14:31466] [0,0,1]-[0,0,0] mca_oob_tcp_peer_complete_connect:
</span><br>
<span class="quotelev1">&gt; sending ack, 0
</span><br>
<span class="quotelev1">&gt; [max14:31465] [0,0,0] mca_oob_tcp_accept: 192.168.2.14:37255
</span><br>
<span class="quotelev1">&gt; [max14:31465] [0,0,0]-[0,0,1] accepted: 192.168.2.14 - 192.168.2.14
</span><br>
<span class="quotelev1">&gt; nodelay 1 sndbuf 262142 rcvbuf 262142 flags 00000802
</span><br>
<span class="quotelev1">&gt; [max14:31466] [0,0,1]-[0,0,0] connected: 192.168.2.14 - 192.168.2.14
</span><br>
<span class="quotelev1">&gt; nodelay 1 sndbuf 262142 rcvbuf 262142 flags 00000802
</span><br>
<span class="quotelev1">&gt; [max14:31466] [0,0,1]-[0,0,0] mca_oob_tcp_recv: tag 2
</span><br>
<span class="quotelev1">&gt; [max14:31466] [0,0,1]-[0,0,0] mca_oob_tcp_send: tag 2
</span><br>
<span class="quotelev1">&gt; [max14:31466] [0,0,1]-[0,0,0] mca_oob_tcp_recv: tag 2
</span><br>
<span class="quotelev1">&gt; Daemon [0,0,1] checking in as pid 31466 on host max14
</span><br>
<span class="quotelev1">&gt; [max14:31466] [0,0,1]-[0,0,0] mca_oob_tcp_send: tag 2
</span><br>
<span class="quotelev1">&gt; [max14:31466] [0,0,1]-[0,0,0] mca_oob_tcp_recv: tag 2
</span><br>
<span class="quotelev1">&gt; [max15:28222] [0,0,2]-[0,0,0] mca_oob_tcp_peer_try_connect: connect to
</span><br>
<span class="quotelev1">&gt; 192.168.1.14:38852 failed: Software caused connection abort (103)
</span><br>
<span class="quotelev1">&gt; [max15:28222] [0,0,2]-[0,0,0] mca_oob_tcp_peer_try_connect: connect to
</span><br>
<span class="quotelev1">&gt; 192.168.1.14:38852 failed: Software caused connection abort (103)
</span><br>
<span class="quotelev1">&gt; [max15:28222] [0,0,2]-[0,0,0] mca_oob_tcp_peer_try_connect: connect to
</span><br>
<span class="quotelev1">&gt; 192.168.1.14:38852 failed, connecting over all interfaces failed!
</span><br>
<span class="quotelev1">&gt; [max15:28222] OOB: Connection to HNP lost
</span><br>
<span class="quotelev1">&gt; [max14:31466] [0,0,1] orted_recv_pls: received message from [0,0,0]
</span><br>
<span class="quotelev1">&gt; [max14:31466] [0,0,1] orted_recv_pls: received kill_local_procs
</span><br>
<span class="quotelev1">&gt; [max14:31466] [0,0,1]-[0,0,0] mca_oob_tcp_send: tag 15
</span><br>
<span class="quotelev1">&gt; [max14:31465] [0,0,0] ORTE_ERROR_LOG: Timeout in file base/
</span><br>
<span class="quotelev1">&gt; pls_base_orted_cmds.c at line 275
</span><br>
<span class="quotelev1">&gt; [max14:31465] [0,0,0] ORTE_ERROR_LOG: Timeout in file pls_rsh_module.c
</span><br>
<span class="quotelev1">&gt; at line 1166
</span><br>
<span class="quotelev1">&gt; [max14:31465] [0,0,0] ORTE_ERROR_LOG: Timeout in file errmgr_hnp.c at
</span><br>
<span class="quotelev1">&gt; line 90
</span><br>
<span class="quotelev1">&gt; [max14:31465] ERROR: A daemon on node max15 failed to start as expected.
</span><br>
<span class="quotelev1">&gt; [max14:31465] ERROR: There may be more information available from
</span><br>
<span class="quotelev1">&gt; [max14:31465] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev1">&gt; [max14:31465] ERROR: The daemon exited unexpectedly with status 1.
</span><br>
<span class="quotelev1">&gt; [max14:31466] [0,0,1] orted_recv_pls: received message from [0,0,0]
</span><br>
<span class="quotelev1">&gt; [max14:31466] [0,0,1] orted_recv_pls: received exit
</span><br>
<span class="quotelev1">&gt; [max14:31466] [0,0,1]-[0,0,0] mca_oob_tcp_send: tag 15
</span><br>
<span class="quotelev1">&gt; [max14:31465] [0,0,0]-[0,0,1] mca_oob_tcp_msg_recv: peer closed
</span><br>
<span class="quotelev1">&gt; connection
</span><br>
<span class="quotelev1">&gt; [max14:31465] [0,0,0]-[0,0,1] mca_oob_tcp_peer_close(0x523100) sd 6
</span><br>
<span class="quotelev1">&gt; state 4
</span><br>
<span class="quotelev1">&gt; [max14:31465] [0,0,0] ORTE_ERROR_LOG: Timeout in file base/
</span><br>
<span class="quotelev1">&gt; pls_base_orted_cmds.c at line 188
</span><br>
<span class="quotelev1">&gt; [max14:31465] [0,0,0] ORTE_ERROR_LOG: Timeout in file pls_rsh_module.c
</span><br>
<span class="quotelev1">&gt; at line 1198
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun was unable to cleanly terminate the daemons for this job.
</span><br>
<span class="quotelev1">&gt; Returned value Timeout instead of ORTE_SUCCESS.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can see that the orted deamon program is starting on both computers
</span><br>
<span class="quotelev1">&gt; but it looks to
</span><br>
<span class="quotelev1">&gt; me like they can't talk to each other.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is the output from ifconfig on one of the nodes, the other node
</span><br>
<span class="quotelev1">&gt; is similar.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [root_at_max14 ~]# /sbin/ifconfig
</span><br>
<span class="quotelev1">&gt; eth0      Link encap:Ethernet  HWaddr 00:17:31:9C:93:A1
</span><br>
<span class="quotelev1">&gt;            inet addr:192.168.2.14  Bcast:192.168.2.255  Mask:
</span><br>
<span class="quotelev1">&gt; 255.255.255.0
</span><br>
<span class="quotelev1">&gt;            inet6 addr: fe80::217:31ff:fe9c:93a1/64 Scope:Link
</span><br>
<span class="quotelev1">&gt;            UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt;            RX packets:1353 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;            TX packets:9572 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;            collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev1">&gt;            RX bytes:188125 (183.7 KiB)  TX bytes:1500567 (1.4 MiB)
</span><br>
<span class="quotelev1">&gt;            Interrupt:17
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; eth1      Link encap:Ethernet  HWaddr 00:17:31:9C:93:A2
</span><br>
<span class="quotelev1">&gt;            inet addr:192.168.1.14  Bcast:192.168.1.255  Mask:
</span><br>
<span class="quotelev1">&gt; 255.255.255.0
</span><br>
<span class="quotelev1">&gt;            inet6 addr: fe80::217:31ff:fe9c:93a2/64 Scope:Link
</span><br>
<span class="quotelev1">&gt;            UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt;            RX packets:49652796 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;            TX packets:49368158 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;            collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev1">&gt;            RX bytes:21844618928 (20.3 GiB)  TX bytes:16122676331 (15.0
</span><br>
<span class="quotelev1">&gt; GiB)
</span><br>
<span class="quotelev1">&gt;            Interrupt:19
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; lo        Link encap:Local Loopback
</span><br>
<span class="quotelev1">&gt;            inet addr:127.0.0.1  Mask:255.0.0.0
</span><br>
<span class="quotelev1">&gt;            inet6 addr: ::1/128 Scope:Host
</span><br>
<span class="quotelev1">&gt;            UP LOOPBACK RUNNING  MTU:16436  Metric:1
</span><br>
<span class="quotelev1">&gt;            RX packets:82191 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;            TX packets:82191 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;            collisions:0 txqueuelen:0
</span><br>
<span class="quotelev1">&gt;            RX bytes:7383491 (7.0 MiB)  TX bytes:7383491 (7.0 MiB)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; These machines routinely run mpich2 and mvapich2 programs so I don't
</span><br>
<span class="quotelev1">&gt; suspect any
</span><br>
<span class="quotelev1">&gt; problems with the gigabit or infiniband connections.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; --Bob Soliday
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4561.php">Bob Soliday: "Re: [OMPI users] mca_oob_tcp_peer_try_connect problem"</a>
<li><strong>Previous message:</strong> <a href="4559.php">Jeff Squyres: "Re: [OMPI users] [openMPI-infiniband] openMPI in IB network when openSM with LASH is running"</a>
<li><strong>In reply to:</strong> <a href="4547.php">Bob Soliday: "[OMPI users] mca_oob_tcp_peer_try_connect problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4561.php">Bob Soliday: "Re: [OMPI users] mca_oob_tcp_peer_try_connect problem"</a>
<li><strong>Reply:</strong> <a href="4561.php">Bob Soliday: "Re: [OMPI users] mca_oob_tcp_peer_try_connect problem"</a>
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
