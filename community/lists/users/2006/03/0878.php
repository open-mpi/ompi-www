<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar 16 16:32:54 2006" -->
<!-- isoreceived="20060316213254" -->
<!-- sent="Thu, 16 Mar 2006 15:32:53 -0600" -->
<!-- isosent="20060316213253" -->
<!-- name="Charles Wright" -->
<!-- email="charles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mca_oob_tcp_peer_complete_connect: connection	failed" -->
<!-- id="4419D985.8070203_at_asc.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="Pine.OSX.4.61.0603161537040.14245_at_applebasket.cs.utk.edu" -->
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
<strong>From:</strong> Charles Wright (<em>charles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-16 16:32:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0879.php">George Bosilca: "Re: [OMPI users] mca_oob_tcp_peer_complete_connect:	connection	failed"</a>
<li><strong>Previous message:</strong> <a href="0877.php">George Bosilca: "Re: [OMPI users] mca_oob_tcp_peer_complete_connect: connection failed"</a>
<li><strong>In reply to:</strong> <a href="0877.php">George Bosilca: "Re: [OMPI users] mca_oob_tcp_peer_complete_connect: connection failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0879.php">George Bosilca: "Re: [OMPI users] mca_oob_tcp_peer_complete_connect:	connection	failed"</a>
<li><strong>Reply:</strong> <a href="0879.php">George Bosilca: "Re: [OMPI users] mca_oob_tcp_peer_complete_connect:	connection	failed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the tip.
<br>
<p>I see that both number 1 and 2 are true.
<br>
Openmpi is insisting on using my eth0 (I know this by watching the
<br>
firewall log on the node it is trying to go to)
<br>
<p>This is despite the fact that I have the first dns entry go to eth1,
<br>
normally that is all pbs would need to do the right thing and use the
<br>
network I prefer.
<br>
<p>Ok so I see there are some options to in/exclude interfaces.
<br>
<p>however mpiexec is igorning my requests.
<br>
I tried it two ways.  Neither worked.   Firewall rejects traffic coming
<br>
into 1.0.x.x. network in both cases.
<br>
<p>/opt/asn/apps/openmpi-1.0.1/bin/mpiexec --gmca btl_tcp_if_include eth1
<br>
-n 2 $XD1LAUNCHER ./mpimeasure
<br>
/opt/asn/apps/openmpi-1.0.1/bin/mpiexec --gmca btl_tcp_if_exclude eth0
<br>
-n 2 $XD1LAUNCHER ./mpimeasure
<br>
<p>(see dns works... not over eth0)
<br>
uahrcw_at_c344-6:~/mpi-benchmarks&gt; /sbin/ifconfig
<br>
eth0      Link encap:Ethernet  HWaddr 00:0E:AB:01:58:60
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:1.0.21.134  Bcast:1.127.255.255  Mask:255.128.0.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:6596091 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:316165 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:1000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:560395541 (534.4 Mb)  TX bytes:34367848 (32.7 Mb)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Interrupt:16
<br>
<p>eth1      Link encap:Ethernet  HWaddr 00:0E:AB:01:58:61
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:1.128.21.134  Mask:255.128.0.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP RUNNING NOARP  MTU:1500  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:5600487 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:4863441 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:1000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:6203028277 (5915.6 Mb)  TX bytes:566471561 (540.2 Mb)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Interrupt:25
<br>
<p>eth2      Link encap:Ethernet  HWaddr 00:0E:AB:01:58:62
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:829064 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:181572 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:1000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:61216408 (58.3 Mb)  TX bytes:19079579 (18.1 Mb)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Base address:0x2000 Memory:fea80000-feaa0000
<br>
<p>eth2:2    Link encap:Ethernet  HWaddr 00:0E:AB:01:58:62
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:129.66.9.146  Bcast:129.66.9.255  Mask:255.255.255.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Base address:0x2000 Memory:fea80000-feaa0000
<br>
<p>lo        Link encap:Local Loopback
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:127.0.0.1  Mask:255.0.0.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP LOOPBACK RUNNING  MTU:16436  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:14259 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:14259 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:879631 (859.0 Kb)  TX bytes:879631 (859.0 Kb)
<br>
<p>uahrcw_at_c344-6:~/mpi-benchmarks&gt; ping c344-5
<br>
PING c344-5.x.asc.edu (1.128.21.133) 56(84) bytes of data.
<br>
64 bytes from c344-5.x.asc.edu (1.128.21.133): icmp_seq=1 ttl=64
<br>
time=0.067 ms
<br>
64 bytes from c344-5.x.asc.edu (1.128.21.133): icmp_seq=2 ttl=64
<br>
time=0.037 ms
<br>
64 bytes from c344-5.x.asc.edu (1.128.21.133): icmp_seq=3 ttl=64
<br>
time=0.022 ms
<br>
<p>--- c344-5.x.asc.edu ping statistics ---
<br>
3 packets transmitted, 3 received, 0% packet loss, time 1999ms
<br>
rtt min/avg/max/mdev = 0.022/0.042/0.067/0.018 ms
<br>
<p><p><p>George Bosilca wrote:
<br>
<span class="quotelev1">&gt;I see only 2 possibilities:
</span><br>
<span class="quotelev1">&gt;1. your trying to run Open MPI on nodes having multiple IP 
</span><br>
<span class="quotelev1">&gt;addresses.
</span><br>
<span class="quotelev1">&gt;2. your nodes are behind firewalls and Open MPI is unable to pass through.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Please check the FAQ on <a href="http://www.open-mpi.org/faq/">http://www.open-mpi.org/faq/</a> to find out the full 
</span><br>
<span class="quotelev1">&gt;answer to your question.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Thanks,
</span><br>
<span class="quotelev1">&gt;     george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Thu, 16 Mar 2006, Charles Wright wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;Hello,
</span><br>
<span class="quotelev2">&gt;&gt;   I'm just compiled open-mpi and tried to run my code which just
</span><br>
<span class="quotelev2">&gt;&gt;measures bandwidth from one node to another.   (Code compile fine and
</span><br>
<span class="quotelev2">&gt;&gt;runs under other mpi implementations)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;When I did I got this.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;uahrcw_at_c275-6:~/mpi-benchmarks&gt; cat openmpitcp.o15380
</span><br>
<span class="quotelev2">&gt;&gt;c317-6
</span><br>
<span class="quotelev2">&gt;&gt;c317-5
</span><br>
<span class="quotelev2">&gt;&gt;[c317-5:24979] [0,0,2]-[0,0,0] mca_oob_tcp_peer_complete_connect:
</span><br>
<span class="quotelev2">&gt;&gt;connection failed (errno=110) - retrying (pid=24979)
</span><br>
<span class="quotelev2">&gt;&gt;[c317-5:24979] mca_oob_tcp_peer_timer_handler
</span><br>
<span class="quotelev2">&gt;&gt;[c317-5:24997] [0,1,1]-[0,0,0] mca_oob_tcp_peer_complete_connect:
</span><br>
<span class="quotelev2">&gt;&gt;connection failed (errno=110) - retrying (pid=24997)
</span><br>
<span class="quotelev2">&gt;&gt;[c317-5:24997] mca_oob_tcp_peer_timer_handler
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;[0,1,1][btl_tcp_endpoint.c:559:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev2">&gt;&gt;connect() failed with errno=110
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;I compiled open-mpi with Pbspro 5.4-4 and I'm guessing that has
</span><br>
<span class="quotelev2">&gt;&gt;something to do with it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;I've attached my config.log
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Any help with this would be appreciated.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;uahrcw_at_c275-6:~/mpi-benchmarks&gt; ompi_info
</span><br>
<span class="quotelev2">&gt;&gt;               Open MPI: 1.0.1r8453
</span><br>
<span class="quotelev2">&gt;&gt;  Open MPI SVN revision: r8453
</span><br>
<span class="quotelev2">&gt;&gt;               Open RTE: 1.0.1r8453
</span><br>
<span class="quotelev2">&gt;&gt;  Open RTE SVN revision: r8453
</span><br>
<span class="quotelev2">&gt;&gt;                   OPAL: 1.0.1r8453
</span><br>
<span class="quotelev2">&gt;&gt;      OPAL SVN revision: r8453
</span><br>
<span class="quotelev2">&gt;&gt;                 Prefix: /opt/asn/apps/openmpi-1.0.1
</span><br>
<span class="quotelev2">&gt;&gt;Configured architecture: x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev2">&gt;&gt;          Configured by: asnrcw
</span><br>
<span class="quotelev2">&gt;&gt;          Configured on: Fri Feb 24 15:19:37 CST 2006
</span><br>
<span class="quotelev2">&gt;&gt;         Configure host: c275-6
</span><br>
<span class="quotelev2">&gt;&gt;               Built by: asnrcw
</span><br>
<span class="quotelev2">&gt;&gt;               Built on: Fri Feb 24 15:40:09 CST 2006
</span><br>
<span class="quotelev2">&gt;&gt;             Built host: c275-6
</span><br>
<span class="quotelev2">&gt;&gt;             C bindings: yes
</span><br>
<span class="quotelev2">&gt;&gt;           C++ bindings: yes
</span><br>
<span class="quotelev2">&gt;&gt;     Fortran77 bindings: yes (all)
</span><br>
<span class="quotelev2">&gt;&gt;     Fortran90 bindings: no
</span><br>
<span class="quotelev2">&gt;&gt;             C compiler: gcc
</span><br>
<span class="quotelev2">&gt;&gt;    C compiler absolute: /usr/bin/gcc
</span><br>
<span class="quotelev2">&gt;&gt;           C++ compiler: g++
</span><br>
<span class="quotelev2">&gt;&gt;  C++ compiler absolute: /usr/bin/g++
</span><br>
<span class="quotelev2">&gt;&gt;     Fortran77 compiler: g77
</span><br>
<span class="quotelev2">&gt;&gt; Fortran77 compiler abs: /usr/bin/g77
</span><br>
<span class="quotelev2">&gt;&gt;     Fortran90 compiler: ifort
</span><br>
<span class="quotelev2">&gt;&gt; Fortran90 compiler abs: /opt/asn/intel/fce/9.0/bin/ifort
</span><br>
<span class="quotelev2">&gt;&gt;            C profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;          C++ profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;    Fortran77 profiling: yes
</span><br>
<span class="quotelev2">&gt;&gt;    Fortran90 profiling: no
</span><br>
<span class="quotelev2">&gt;&gt;         C++ exceptions: no
</span><br>
<span class="quotelev2">&gt;&gt;         Thread support: posix (mpi: no, progress: no)
</span><br>
<span class="quotelev2">&gt;&gt; Internal debug support: no
</span><br>
<span class="quotelev2">&gt;&gt;    MPI parameter check: runtime
</span><br>
<span class="quotelev2">&gt;&gt;Memory profiling support: no
</span><br>
<span class="quotelev2">&gt;&gt;Memory debugging support: no
</span><br>
<span class="quotelev2">&gt;&gt;        libltdl support: 1
</span><br>
<span class="quotelev2">&gt;&gt;             MCA memory: malloc_hooks (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev2">&gt;&gt;v1.0.1)
</span><br>
<span class="quotelev2">&gt;&gt;          MCA paffinity: linux (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev2">&gt;&gt;          MCA maffinity: first_use (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev2">&gt;&gt;          MCA maffinity: libnuma (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev2">&gt;&gt;              MCA timer: linux (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev2">&gt;&gt;          MCA allocator: basic (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;          MCA allocator: bucket (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA coll: basic (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA coll: self (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA coll: sm (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA io: romio (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev2">&gt;&gt;              MCA mpool: sm (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA pml: teg (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA ptl: self (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA ptl: sm (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA ptl: tcp (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA btl: self (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA btl: sm (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA btl: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA topo: unity (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA gpr: null (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA gpr: proxy (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA gpr: replica (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA iof: proxy (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA iof: svc (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA ns: proxy (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev2">&gt;&gt;                 MCA ns: replica (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA ras: dash_host (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA ras: hostfile (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA ras: localhost (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA ras: slurm (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA ras: tm (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA rds: hostfile (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA rds: resfile (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev2">&gt;&gt;              MCA rmaps: round_robin (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA rmgr: proxy (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev2">&gt;&gt;               MCA rmgr: urm (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA rml: oob (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA pls: daemon (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA pls: proxy (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA pls: fork (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA pls: rsh (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA pls: slurm (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA pls: tm (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA sds: env (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA sds: seed (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA sds: singleton (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA sds: slurm (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA sds: pipe (MCA v1.0, API v1.0, Component v1.0.1)
</span><br>
<span class="quotelev2">&gt;&gt;uahrcw_at_c275-6:~/mpi-benchmarks&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&quot;We must accept finite disappointment, but we must never lose infinite
</span><br>
<span class="quotelev1">&gt;hope.&quot;
</span><br>
<span class="quotelev1">&gt;                                   Martin Luther King
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<p><p><pre>
-- 
Charles Wright, HPC Systems Administrator
Alabama Research and Education Network
Computer Sciences Corporation 
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0879.php">George Bosilca: "Re: [OMPI users] mca_oob_tcp_peer_complete_connect:	connection	failed"</a>
<li><strong>Previous message:</strong> <a href="0877.php">George Bosilca: "Re: [OMPI users] mca_oob_tcp_peer_complete_connect: connection failed"</a>
<li><strong>In reply to:</strong> <a href="0877.php">George Bosilca: "Re: [OMPI users] mca_oob_tcp_peer_complete_connect: connection failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0879.php">George Bosilca: "Re: [OMPI users] mca_oob_tcp_peer_complete_connect:	connection	failed"</a>
<li><strong>Reply:</strong> <a href="0879.php">George Bosilca: "Re: [OMPI users] mca_oob_tcp_peer_complete_connect:	connection	failed"</a>
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
