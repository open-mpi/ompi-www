<?
$subject_val = "Re: [OMPI users] mca_oob_tcp_peer_try_connect problem";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 29 12:49:02 2007" -->
<!-- isoreceived="20071129174902" -->
<!-- sent="Thu, 29 Nov 2007 10:48:40 -0700" -->
<!-- isosent="20071129174840" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mca_oob_tcp_peer_try_connect problem" -->
<!-- id="C3744988.3FFF%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C835B9C9CB0F1C4E9DA48913C9E8F8AF03295342_at_xmb-rtp-215.amer.cisco.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-29 12:48:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4566.php">Edgar Gabriel: "Re: [OMPI users] Reinitialize MPI_COMM_WORLD"</a>
<li><strong>Previous message:</strong> <a href="4564.php">Rajesh Sudarsan: "[OMPI users] Reinitialize MPI_COMM_WORLD"</a>
<li><strong>In reply to:</strong> <a href="4562.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mca_oob_tcp_peer_try_connect problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4567.php">Bob Soliday: "Re: [OMPI users] mca_oob_tcp_peer_try_connect problem"</a>
<li><strong>Reply:</strong> <a href="4567.php">Bob Soliday: "Re: [OMPI users] mca_oob_tcp_peer_try_connect problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you wanted it to use eth1, your other option would be to simply tell it
<br>
to do so using the mca param. I believe it is something like -mca
<br>
oob_tcp_if_include eth1 -mca oob_tcp_if_exclude eth0
<br>
<p>You may only need the latter since you only have the two interfaces.
<br>
Ralph
<br>
<p><p><p>On 11/29/07 9:47 AM, &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Interesting.  Would you mind sharing your patch?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt; Behalf Of Bob Soliday
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, November 29, 2007 11:35 AM
</span><br>
<span class="quotelev1">&gt; To: Ralph H Castain
</span><br>
<span class="quotelev1">&gt; Cc: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] mca_oob_tcp_peer_try_connect problem
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I solved the problem by making a change to
</span><br>
<span class="quotelev1">&gt; orte/mca/oob/tcp/oob_tcp_peer.c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Linux 2.6 I have read that after a failed connect system call the
</span><br>
<span class="quotelev1">&gt; next call to connect can immediately return ECONNABORTED and not try to
</span><br>
<span class="quotelev1">&gt; actually connect, the next call to connect will then work. So I changed
</span><br>
<span class="quotelev1">&gt; mca_oob_tcp_peer_try_connect to test for ECONNABORTED and then call
</span><br>
<span class="quotelev1">&gt; connect again. The hello_c example script is now working.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't think this has solved the underlying cause as to way connect is
</span><br>
<span class="quotelev1">&gt; failing in the first place but at least now I move on to the next step.
</span><br>
<span class="quotelev1">&gt; My best guess at the moment is that it is using eth0 initially when I
</span><br>
<span class="quotelev1">&gt; want it to use eth1. This fails and then when it moves on to eth1 I run
</span><br>
<span class="quotelev1">&gt; into the &quot;can't call connect after it just failed bug&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --Bob
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph H Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Bob
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm afraid the person most familiar with the oob subsystem recently
</span><br>
<span class="quotelev2">&gt;&gt; left the project, so we are somewhat hampered at the moment. I don't
</span><br>
<span class="quotelev2">&gt;&gt; recognize the &quot;Software caused connection abort&quot; error message - it
</span><br>
<span class="quotelev2">&gt;&gt; doesn't appear to be one of ours (at least, I couldn't find it
</span><br>
<span class="quotelev2">&gt;&gt; anywhere in our code base, though I can't swear it isn't there in some
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; dark corner), and I don't find it in my own sys/errno.h file.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; With those caveats, all I can say is that something appears to be
</span><br>
<span class="quotelev2">&gt;&gt; blocking the connection from your remote node back to the head node.
</span><br>
<span class="quotelev2">&gt;&gt; Are you sure both nodes are available on IPv4 (since you disabled
</span><br>
<span class="quotelev2">&gt;&gt; IPv6)? Can you try ssh'ing to the remote node and doing a ping to the
</span><br>
<span class="quotelev2">&gt;&gt; head node using the IPv4 interface?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Do you have another method you could use to check and see if max14
</span><br>
<span class="quotelev2">&gt;&gt; will accept connections from max15? If I interpret the error message
</span><br>
<span class="quotelev2">&gt;&gt; correctly, it looks like something in the connect handshake is being
</span><br>
<span class="quotelev2">&gt;&gt; aborted. We try a couple of times, but then give up and try other
</span><br>
<span class="quotelev2">&gt;&gt; interfaces - since no other interface is available, you get that other
</span><br>
<span class="quotelev1">&gt; error message and we abort.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Sorry I can't be more help - like I said, this is now a weak spot in
</span><br>
<span class="quotelev2">&gt;&gt; our coverage that needs to be rebuilt.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 11/28/07 2:41 PM, &quot;Bob Soliday&quot; &lt;soliday_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am new to openmpi and have a problem that I cannot seem to solve.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am trying to run the hello_c example and I can't get it to work.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I compiled openmpi with:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure --prefix=/usr/local/software/openmpi-1.2.4 --disable-ipv6
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --with-openib
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The hostname file contains the local host and one other node. When I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; run it I get:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [soliday_at_max14 mpi-ex]$ /usr/local/software/openmpi-1.2.4/bin/mpirun
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- debug-daemons -mca oob_tcp_debug 1000 -machinefile hostfile -np 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hello_c [max14:31465] [0,0,0] accepting connections via event library
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [max14:31465] [0,0,0] mca_oob_tcp_init: calling orte_gpr.subscribe
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [max14:31466] [0,0,1] accepting connections via event library
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [max14:31466] [0,0,1] mca_oob_tcp_init: calling orte_gpr.subscribe
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [max14:31466] [0,0,1]-[0,0,0] mca_oob_tcp_send: tag 2 [max14:31466]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0,0,1]-[0,0,0] mca_oob_tcp_peer_try_connect: connecting port 55152
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to: 192.168.2.14:38852 [max14:31466] [0,0,1]-[0,0,0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca_oob_tcp_peer_complete_connect:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sending ack, 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [max14:31465] [0,0,0] mca_oob_tcp_accept: 192.168.2.14:37255
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [max14:31465] [0,0,0]-[0,0,1] accepted: 192.168.2.14 - 192.168.2.14
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nodelay 1 sndbuf 262142 rcvbuf 262142 flags 00000802 [max14:31466]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0,0,1]-[0,0,0] connected: 192.168.2.14 - 192.168.2.14 nodelay 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sndbuf 262142 rcvbuf 262142 flags 00000802 [max14:31466]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0,0,1]-[0,0,0] mca_oob_tcp_recv: tag 2 [max14:31466] [0,0,1]-[0,0,0]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca_oob_tcp_send: tag 2 [max14:31466] [0,0,1]-[0,0,0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca_oob_tcp_recv: tag 2 Daemon [0,0,1] checking in as pid 31466 on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; host max14 [max14:31466] [0,0,1]-[0,0,0] mca_oob_tcp_send: tag 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [max14:31466] [0,0,1]-[0,0,0] mca_oob_tcp_recv: tag 2 [max15:28222]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0,0,2]-[0,0,0] mca_oob_tcp_peer_try_connect: connect to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 192.168.1.14:38852 failed: Software caused connection abort (103)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [max15:28222] [0,0,2]-[0,0,0] mca_oob_tcp_peer_try_connect: connect
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 192.168.1.14:38852 failed: Software caused connection abort (103)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [max15:28222] [0,0,2]-[0,0,0] mca_oob_tcp_peer_try_connect: connect
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 192.168.1.14:38852 failed, connecting over all interfaces failed!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [max15:28222] OOB: Connection to HNP lost [max14:31466] [0,0,1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orted_recv_pls: received message from [0,0,0] [max14:31466] [0,0,1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orted_recv_pls: received kill_local_procs [max14:31466]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0,0,1]-[0,0,0] mca_oob_tcp_send: tag 15 [max14:31465] [0,0,0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ORTE_ERROR_LOG: Timeout in file base/ pls_base_orted_cmds.c at line
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 275 [max14:31465] [0,0,0] ORTE_ERROR_LOG: Timeout in file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pls_rsh_module.c at line 1166 [max14:31465] [0,0,0] ORTE_ERROR_LOG:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Timeout in file errmgr_hnp.c at line 90 [max14:31465] ERROR: A daemon
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on node max15 failed to start as expected.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [max14:31465] ERROR: There may be more information available from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [max14:31465] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [max14:31465] ERROR: The daemon exited unexpectedly with status 1.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [max14:31466] [0,0,1] orted_recv_pls: received message from [0,0,0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [max14:31466] [0,0,1] orted_recv_pls: received exit [max14:31466]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0,0,1]-[0,0,0] mca_oob_tcp_send: tag 15 [max14:31465]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0,0,0]-[0,0,1] mca_oob_tcp_msg_recv: peer closed connection
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [max14:31465] [0,0,0]-[0,0,1] mca_oob_tcp_peer_close(0x523100) sd 6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; state 4 [max14:31465] [0,0,0] ORTE_ERROR_LOG: Timeout in file base/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pls_base_orted_cmds.c at line 188 [max14:31465] [0,0,0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ORTE_ERROR_LOG: Timeout in file pls_rsh_module.c at line 1198
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----- mpirun was unable to cleanly terminate the daemons for this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; job.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Returned value Timeout instead of ORTE_SUCCESS.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I can see that the orted deamon program is starting on both computers
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but it looks to me like they can't talk to each other.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here is the output from ifconfig on one of the nodes, the other node
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is similar.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [root_at_max14 ~]# /sbin/ifconfig
</span><br>
<span class="quotelev3">&gt;&gt;&gt; eth0      Link encap:Ethernet  HWaddr 00:17:31:9C:93:A1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            inet addr:192.168.2.14  Bcast:192.168.2.255  Mask:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 255.255.255.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            inet6 addr: fe80::217:31ff:fe9c:93a1/64 Scope:Link
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            RX packets:1353 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            TX packets:9572 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            RX bytes:188125 (183.7 KiB)  TX bytes:1500567 (1.4 MiB)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            Interrupt:17
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; eth1      Link encap:Ethernet  HWaddr 00:17:31:9C:93:A2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            inet addr:192.168.1.14  Bcast:192.168.1.255  Mask:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 255.255.255.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            inet6 addr: fe80::217:31ff:fe9c:93a2/64 Scope:Link
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            RX packets:49652796 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            TX packets:49368158 errors:0 dropped:0 overruns:0
</span><br>
<span class="quotelev1">&gt; carrier:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            RX bytes:21844618928 (20.3 GiB)  TX bytes:16122676331
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (15.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; GiB)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            Interrupt:19
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lo        Link encap:Local Loopback
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            inet addr:127.0.0.1  Mask:255.0.0.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            inet6 addr: ::1/128 Scope:Host
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            UP LOOPBACK RUNNING  MTU:16436  Metric:1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            RX packets:82191 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            TX packets:82191 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            collisions:0 txqueuelen:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            RX bytes:7383491 (7.0 MiB)  TX bytes:7383491 (7.0 MiB)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; These machines routinely run mpich2 and mvapich2 programs so I don't
</span><br>
<span class="quotelev3">&gt;&gt;&gt; suspect any problems with the gigabit or infiniband connections.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --Bob Soliday
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="4566.php">Edgar Gabriel: "Re: [OMPI users] Reinitialize MPI_COMM_WORLD"</a>
<li><strong>Previous message:</strong> <a href="4564.php">Rajesh Sudarsan: "[OMPI users] Reinitialize MPI_COMM_WORLD"</a>
<li><strong>In reply to:</strong> <a href="4562.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mca_oob_tcp_peer_try_connect problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4567.php">Bob Soliday: "Re: [OMPI users] mca_oob_tcp_peer_try_connect problem"</a>
<li><strong>Reply:</strong> <a href="4567.php">Bob Soliday: "Re: [OMPI users] mca_oob_tcp_peer_try_connect problem"</a>
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
