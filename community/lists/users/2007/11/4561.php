<?
$subject_val = "Re: [OMPI users] mca_oob_tcp_peer_try_connect problem";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 29 11:35:12 2007" -->
<!-- isoreceived="20071129163512" -->
<!-- sent="Thu, 29 Nov 2007 10:34:48 -0600" -->
<!-- isosent="20071129163448" -->
<!-- name="Bob Soliday" -->
<!-- email="soliday_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mca_oob_tcp_peer_try_connect problem" -->
<!-- id="474EEA28.6030607_at_aps.anl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C3741D5B.B6F4%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Bob Soliday (<em>soliday_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-29 11:34:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4562.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mca_oob_tcp_peer_try_connect problem"</a>
<li><strong>Previous message:</strong> <a href="4560.php">Ralph H Castain: "Re: [OMPI users] mca_oob_tcp_peer_try_connect problem"</a>
<li><strong>In reply to:</strong> <a href="4560.php">Ralph H Castain: "Re: [OMPI users] mca_oob_tcp_peer_try_connect problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4562.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mca_oob_tcp_peer_try_connect problem"</a>
<li><strong>Reply:</strong> <a href="4562.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mca_oob_tcp_peer_try_connect problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I solved the problem by making a change to orte/mca/oob/tcp/oob_tcp_peer.c
<br>
<p>On Linux 2.6 I have read that after a failed connect system call the next
<br>
call to connect can immediately return ECONNABORTED and not try to actually
<br>
connect, the next call to connect will then work. So I changed
<br>
mca_oob_tcp_peer_try_connect to test for ECONNABORTED and then call connect
<br>
again. The hello_c example script is now working.
<br>
<p>I don't think this has solved the underlying cause as to way connect is
<br>
failing in the first place but at least now I move on to the next step. My
<br>
best guess at the moment is that it is using eth0 initially when I want it
<br>
to use eth1. This fails and then when it moves on to eth1 I run into the
<br>
&quot;can't call connect after it just failed bug&quot;.
<br>
<p>--Bob
<br>
<p><p>Ralph H Castain wrote:
<br>
<span class="quotelev1">&gt; Hi Bob
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm afraid the person most familiar with the oob subsystem recently left the
</span><br>
<span class="quotelev1">&gt; project, so we are somewhat hampered at the moment. I don't recognize the
</span><br>
<span class="quotelev1">&gt; &quot;Software caused connection abort&quot; error message - it doesn't appear to be
</span><br>
<span class="quotelev1">&gt; one of ours (at least, I couldn't find it anywhere in our code base, though
</span><br>
<span class="quotelev1">&gt; I can't swear it isn't there in some dark corner), and I don't find it in my
</span><br>
<span class="quotelev1">&gt; own sys/errno.h file.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With those caveats, all I can say is that something appears to be blocking
</span><br>
<span class="quotelev1">&gt; the connection from your remote node back to the head node. Are you sure
</span><br>
<span class="quotelev1">&gt; both nodes are available on IPv4 (since you disabled IPv6)? Can you try
</span><br>
<span class="quotelev1">&gt; ssh'ing to the remote node and doing a ping to the head node using the IPv4
</span><br>
<span class="quotelev1">&gt; interface?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you have another method you could use to check and see if max14 will
</span><br>
<span class="quotelev1">&gt; accept connections from max15? If I interpret the error message correctly,
</span><br>
<span class="quotelev1">&gt; it looks like something in the connect handshake is being aborted. We try a
</span><br>
<span class="quotelev1">&gt; couple of times, but then give up and try other interfaces - since no other
</span><br>
<span class="quotelev1">&gt; interface is available, you get that other error message and we abort.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry I can't be more help - like I said, this is now a weak spot in our
</span><br>
<span class="quotelev1">&gt; coverage that needs to be rebuilt.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 11/28/07 2:41 PM, &quot;Bob Soliday&quot; &lt;soliday_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am new to openmpi and have a problem that I cannot seem to solve.
</span><br>
<span class="quotelev2">&gt;&gt; I am trying to run the hello_c example and I can't get it to work.
</span><br>
<span class="quotelev2">&gt;&gt; I compiled openmpi with:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --prefix=/usr/local/software/openmpi-1.2.4 --disable-ipv6
</span><br>
<span class="quotelev2">&gt;&gt; --with-openib
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The hostname file contains the local host and one other node. When I
</span><br>
<span class="quotelev2">&gt;&gt; run it I get:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [soliday_at_max14 mpi-ex]$ /usr/local/software/openmpi-1.2.4/bin/mpirun --
</span><br>
<span class="quotelev2">&gt;&gt; debug-daemons -mca oob_tcp_debug 1000 -machinefile hostfile -np 2
</span><br>
<span class="quotelev2">&gt;&gt; hello_c
</span><br>
<span class="quotelev2">&gt;&gt; [max14:31465] [0,0,0] accepting connections via event library
</span><br>
<span class="quotelev2">&gt;&gt; [max14:31465] [0,0,0] mca_oob_tcp_init: calling orte_gpr.subscribe
</span><br>
<span class="quotelev2">&gt;&gt; [max14:31466] [0,0,1] accepting connections via event library
</span><br>
<span class="quotelev2">&gt;&gt; [max14:31466] [0,0,1] mca_oob_tcp_init: calling orte_gpr.subscribe
</span><br>
<span class="quotelev2">&gt;&gt; [max14:31466] [0,0,1]-[0,0,0] mca_oob_tcp_send: tag 2
</span><br>
<span class="quotelev2">&gt;&gt; [max14:31466] [0,0,1]-[0,0,0] mca_oob_tcp_peer_try_connect: connecting
</span><br>
<span class="quotelev2">&gt;&gt; port 55152 to: 192.168.2.14:38852
</span><br>
<span class="quotelev2">&gt;&gt; [max14:31466] [0,0,1]-[0,0,0] mca_oob_tcp_peer_complete_connect:
</span><br>
<span class="quotelev2">&gt;&gt; sending ack, 0
</span><br>
<span class="quotelev2">&gt;&gt; [max14:31465] [0,0,0] mca_oob_tcp_accept: 192.168.2.14:37255
</span><br>
<span class="quotelev2">&gt;&gt; [max14:31465] [0,0,0]-[0,0,1] accepted: 192.168.2.14 - 192.168.2.14
</span><br>
<span class="quotelev2">&gt;&gt; nodelay 1 sndbuf 262142 rcvbuf 262142 flags 00000802
</span><br>
<span class="quotelev2">&gt;&gt; [max14:31466] [0,0,1]-[0,0,0] connected: 192.168.2.14 - 192.168.2.14
</span><br>
<span class="quotelev2">&gt;&gt; nodelay 1 sndbuf 262142 rcvbuf 262142 flags 00000802
</span><br>
<span class="quotelev2">&gt;&gt; [max14:31466] [0,0,1]-[0,0,0] mca_oob_tcp_recv: tag 2
</span><br>
<span class="quotelev2">&gt;&gt; [max14:31466] [0,0,1]-[0,0,0] mca_oob_tcp_send: tag 2
</span><br>
<span class="quotelev2">&gt;&gt; [max14:31466] [0,0,1]-[0,0,0] mca_oob_tcp_recv: tag 2
</span><br>
<span class="quotelev2">&gt;&gt; Daemon [0,0,1] checking in as pid 31466 on host max14
</span><br>
<span class="quotelev2">&gt;&gt; [max14:31466] [0,0,1]-[0,0,0] mca_oob_tcp_send: tag 2
</span><br>
<span class="quotelev2">&gt;&gt; [max14:31466] [0,0,1]-[0,0,0] mca_oob_tcp_recv: tag 2
</span><br>
<span class="quotelev2">&gt;&gt; [max15:28222] [0,0,2]-[0,0,0] mca_oob_tcp_peer_try_connect: connect to
</span><br>
<span class="quotelev2">&gt;&gt; 192.168.1.14:38852 failed: Software caused connection abort (103)
</span><br>
<span class="quotelev2">&gt;&gt; [max15:28222] [0,0,2]-[0,0,0] mca_oob_tcp_peer_try_connect: connect to
</span><br>
<span class="quotelev2">&gt;&gt; 192.168.1.14:38852 failed: Software caused connection abort (103)
</span><br>
<span class="quotelev2">&gt;&gt; [max15:28222] [0,0,2]-[0,0,0] mca_oob_tcp_peer_try_connect: connect to
</span><br>
<span class="quotelev2">&gt;&gt; 192.168.1.14:38852 failed, connecting over all interfaces failed!
</span><br>
<span class="quotelev2">&gt;&gt; [max15:28222] OOB: Connection to HNP lost
</span><br>
<span class="quotelev2">&gt;&gt; [max14:31466] [0,0,1] orted_recv_pls: received message from [0,0,0]
</span><br>
<span class="quotelev2">&gt;&gt; [max14:31466] [0,0,1] orted_recv_pls: received kill_local_procs
</span><br>
<span class="quotelev2">&gt;&gt; [max14:31466] [0,0,1]-[0,0,0] mca_oob_tcp_send: tag 15
</span><br>
<span class="quotelev2">&gt;&gt; [max14:31465] [0,0,0] ORTE_ERROR_LOG: Timeout in file base/
</span><br>
<span class="quotelev2">&gt;&gt; pls_base_orted_cmds.c at line 275
</span><br>
<span class="quotelev2">&gt;&gt; [max14:31465] [0,0,0] ORTE_ERROR_LOG: Timeout in file pls_rsh_module.c
</span><br>
<span class="quotelev2">&gt;&gt; at line 1166
</span><br>
<span class="quotelev2">&gt;&gt; [max14:31465] [0,0,0] ORTE_ERROR_LOG: Timeout in file errmgr_hnp.c at
</span><br>
<span class="quotelev2">&gt;&gt; line 90
</span><br>
<span class="quotelev2">&gt;&gt; [max14:31465] ERROR: A daemon on node max15 failed to start as expected.
</span><br>
<span class="quotelev2">&gt;&gt; [max14:31465] ERROR: There may be more information available from
</span><br>
<span class="quotelev2">&gt;&gt; [max14:31465] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev2">&gt;&gt; [max14:31465] ERROR: The daemon exited unexpectedly with status 1.
</span><br>
<span class="quotelev2">&gt;&gt; [max14:31466] [0,0,1] orted_recv_pls: received message from [0,0,0]
</span><br>
<span class="quotelev2">&gt;&gt; [max14:31466] [0,0,1] orted_recv_pls: received exit
</span><br>
<span class="quotelev2">&gt;&gt; [max14:31466] [0,0,1]-[0,0,0] mca_oob_tcp_send: tag 15
</span><br>
<span class="quotelev2">&gt;&gt; [max14:31465] [0,0,0]-[0,0,1] mca_oob_tcp_msg_recv: peer closed
</span><br>
<span class="quotelev2">&gt;&gt; connection
</span><br>
<span class="quotelev2">&gt;&gt; [max14:31465] [0,0,0]-[0,0,1] mca_oob_tcp_peer_close(0x523100) sd 6
</span><br>
<span class="quotelev2">&gt;&gt; state 4
</span><br>
<span class="quotelev2">&gt;&gt; [max14:31465] [0,0,0] ORTE_ERROR_LOG: Timeout in file base/
</span><br>
<span class="quotelev2">&gt;&gt; pls_base_orted_cmds.c at line 188
</span><br>
<span class="quotelev2">&gt;&gt; [max14:31465] [0,0,0] ORTE_ERROR_LOG: Timeout in file pls_rsh_module.c
</span><br>
<span class="quotelev2">&gt;&gt; at line 1198
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun was unable to cleanly terminate the daemons for this job.
</span><br>
<span class="quotelev2">&gt;&gt; Returned value Timeout instead of ORTE_SUCCESS.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I can see that the orted deamon program is starting on both computers
</span><br>
<span class="quotelev2">&gt;&gt; but it looks to
</span><br>
<span class="quotelev2">&gt;&gt; me like they can't talk to each other.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here is the output from ifconfig on one of the nodes, the other node
</span><br>
<span class="quotelev2">&gt;&gt; is similar.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [root_at_max14 ~]# /sbin/ifconfig
</span><br>
<span class="quotelev2">&gt;&gt; eth0      Link encap:Ethernet  HWaddr 00:17:31:9C:93:A1
</span><br>
<span class="quotelev2">&gt;&gt;            inet addr:192.168.2.14  Bcast:192.168.2.255  Mask:
</span><br>
<span class="quotelev2">&gt;&gt; 255.255.255.0
</span><br>
<span class="quotelev2">&gt;&gt;            inet6 addr: fe80::217:31ff:fe9c:93a1/64 Scope:Link
</span><br>
<span class="quotelev2">&gt;&gt;            UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev2">&gt;&gt;            RX packets:1353 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev2">&gt;&gt;            TX packets:9572 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev2">&gt;&gt;            collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev2">&gt;&gt;            RX bytes:188125 (183.7 KiB)  TX bytes:1500567 (1.4 MiB)
</span><br>
<span class="quotelev2">&gt;&gt;            Interrupt:17
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; eth1      Link encap:Ethernet  HWaddr 00:17:31:9C:93:A2
</span><br>
<span class="quotelev2">&gt;&gt;            inet addr:192.168.1.14  Bcast:192.168.1.255  Mask:
</span><br>
<span class="quotelev2">&gt;&gt; 255.255.255.0
</span><br>
<span class="quotelev2">&gt;&gt;            inet6 addr: fe80::217:31ff:fe9c:93a2/64 Scope:Link
</span><br>
<span class="quotelev2">&gt;&gt;            UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev2">&gt;&gt;            RX packets:49652796 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev2">&gt;&gt;            TX packets:49368158 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev2">&gt;&gt;            collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev2">&gt;&gt;            RX bytes:21844618928 (20.3 GiB)  TX bytes:16122676331 (15.0
</span><br>
<span class="quotelev2">&gt;&gt; GiB)
</span><br>
<span class="quotelev2">&gt;&gt;            Interrupt:19
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; lo        Link encap:Local Loopback
</span><br>
<span class="quotelev2">&gt;&gt;            inet addr:127.0.0.1  Mask:255.0.0.0
</span><br>
<span class="quotelev2">&gt;&gt;            inet6 addr: ::1/128 Scope:Host
</span><br>
<span class="quotelev2">&gt;&gt;            UP LOOPBACK RUNNING  MTU:16436  Metric:1
</span><br>
<span class="quotelev2">&gt;&gt;            RX packets:82191 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev2">&gt;&gt;            TX packets:82191 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev2">&gt;&gt;            collisions:0 txqueuelen:0
</span><br>
<span class="quotelev2">&gt;&gt;            RX bytes:7383491 (7.0 MiB)  TX bytes:7383491 (7.0 MiB)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; These machines routinely run mpich2 and mvapich2 programs so I don't
</span><br>
<span class="quotelev2">&gt;&gt; suspect any
</span><br>
<span class="quotelev2">&gt;&gt; problems with the gigabit or infiniband connections.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; --Bob Soliday
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4562.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mca_oob_tcp_peer_try_connect problem"</a>
<li><strong>Previous message:</strong> <a href="4560.php">Ralph H Castain: "Re: [OMPI users] mca_oob_tcp_peer_try_connect problem"</a>
<li><strong>In reply to:</strong> <a href="4560.php">Ralph H Castain: "Re: [OMPI users] mca_oob_tcp_peer_try_connect problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4562.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mca_oob_tcp_peer_try_connect problem"</a>
<li><strong>Reply:</strong> <a href="4562.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mca_oob_tcp_peer_try_connect problem"</a>
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
