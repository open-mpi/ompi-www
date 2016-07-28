<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Feb  2 00:14:19 2007" -->
<!-- isoreceived="20070202051419" -->
<!-- sent="Fri, 2 Feb 2007 00:14:06 -0500" -->
<!-- isosent="20070202051406" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [OMPI Users] OpenMPI 1.1.4 over ethernet fails" -->
<!-- id="2089FA8A-9DDD-4503-8063-3DA835F9F4C4_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="2453e2900702011929g5dc4b5fes62b10428a0a4f153_at_mail.gmail.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-02 00:14:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2585.php">Bert Wesarg: "Re: [OMPI users] Suggestion: adding OMPI_ versions macros in mpi.h"</a>
<li><strong>Previous message:</strong> <a href="2583.php">Alex Tumanov: "Re: [OMPI users] [OMPI Users] OpenMPI 1.1.4 over ethernet fails"</a>
<li><strong>In reply to:</strong> <a href="2583.php">Alex Tumanov: "Re: [OMPI users] [OMPI Users] OpenMPI 1.1.4 over ethernet fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2587.php">Alex Tumanov: "Re: [OMPI users] [OMPI Users] OpenMPI 1.1.4 over ethernet fails"</a>
<li><strong>Reply:</strong> <a href="2587.php">Alex Tumanov: "Re: [OMPI users] [OMPI Users] OpenMPI 1.1.4 over ethernet fails"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Alex,
<br>
<p>Can should try to limit the ethernet devices used by Open MPI during  
<br>
the execution. Please add &quot;--mca btl_tcp_if_exclude eth1,ib0,ib1&quot; to  
<br>
your mpirun command line and give it a try.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Feb 1, 2007, at 10:29 PM, Alex Tumanov wrote:
<br>
<p><span class="quotelev1">&gt; On 2/1/07, Galen Shipman &lt;gshipman_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; What does ifconfig report on both nodes?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Galen,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On headnode:
</span><br>
<span class="quotelev1">&gt; # ifconfig
</span><br>
<span class="quotelev1">&gt; eth0      Link encap:Ethernet  HWaddr 00:11:43:EF:5D:6C
</span><br>
<span class="quotelev1">&gt;           inet addr:10.1.1.11  Bcast:10.1.1.255  Mask:255.255.255.0
</span><br>
<span class="quotelev1">&gt;           inet6 addr: fe80::211:43ff:feef:5d6c/64 Scope:Link
</span><br>
<span class="quotelev1">&gt;           UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt;           RX packets:279965 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;           TX packets:785652 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;           collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev1">&gt;           RX bytes:28422663 (27.1 MiB)  TX bytes:999981228 (953.6 MiB)
</span><br>
<span class="quotelev1">&gt;           Base address:0xecc0 Memory:dfae0000-dfb00000
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; eth1      Link encap:Ethernet  HWaddr 00:11:43:EF:5D:6D
</span><br>
<span class="quotelev1">&gt;           inet addr:&lt;public IP&gt;  Bcast:172.25.238.255  Mask: 
</span><br>
<span class="quotelev1">&gt; 255.255.255.0
</span><br>
<span class="quotelev1">&gt;           inet6 addr: fe80::211:43ff:feef:5d6d/64 Scope:Link
</span><br>
<span class="quotelev1">&gt;           UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt;           RX packets:1763252 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;           TX packets:133260 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;           collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev1">&gt;           RX bytes:1726135418 (1.6 GiB)  TX bytes:40990369 (39.0 MiB)
</span><br>
<span class="quotelev1">&gt;           Base address:0xdcc0 Memory:df8e0000-df900000
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ib0       Link encap:UNSPEC  HWaddr
</span><br>
<span class="quotelev1">&gt; 00-00-00-00-00-00-00-00-00-00-00-00-00-00-00-00
</span><br>
<span class="quotelev1">&gt;           inet addr:20.1.0.11  Bcast:20.1.0.255  Mask:255.255.255.0
</span><br>
<span class="quotelev1">&gt;           UP BROADCAST RUNNING MULTICAST  MTU:2044  Metric:1
</span><br>
<span class="quotelev1">&gt;           RX packets:9746 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;           TX packets:9746 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;           collisions:0 txqueuelen:128
</span><br>
<span class="quotelev1">&gt;           RX bytes:576988 (563.4 KiB)  TX bytes:462432 (451.5 KiB)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ib1       Link encap:UNSPEC  HWaddr
</span><br>
<span class="quotelev1">&gt; 00-00-00-00-00-00-00-00-00-00-00-00-00-00-00-00
</span><br>
<span class="quotelev1">&gt;           inet addr:30.5.0.11  Bcast:30.5.0.255  Mask:255.255.255.0
</span><br>
<span class="quotelev1">&gt;           UP BROADCAST MULTICAST  MTU:2044  Metric:1
</span><br>
<span class="quotelev1">&gt;           RX packets:0 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;           TX packets:0 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;           collisions:0 txqueuelen:128
</span><br>
<span class="quotelev1">&gt;           RX bytes:0 (0.0 b)  TX bytes:0 (0.0 b)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; on COMPUTE node:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # ifconfig
</span><br>
<span class="quotelev1">&gt; eth0      Link encap:Ethernet  HWaddr 00:11:43:D1:C0:80
</span><br>
<span class="quotelev1">&gt;           inet addr:10.1.1.254  Bcast:10.1.1.255  Mask:255.255.255.0
</span><br>
<span class="quotelev1">&gt;           inet6 addr: fe80::211:43ff:fed1:c080/64 Scope:Link
</span><br>
<span class="quotelev1">&gt;           UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt;           RX packets:145725 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;           TX packets:85136 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;           collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev1">&gt;           RX bytes:46506800 (44.3 MiB)  TX bytes:14722190 (14.0 MiB)
</span><br>
<span class="quotelev1">&gt;           Base address:0xbcc0 Memory:df7e0000-df800000
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ib0       Link encap:UNSPEC  HWaddr
</span><br>
<span class="quotelev1">&gt; 00-00-00-00-00-00-00-00-00-00-00-00-00-00-00-00
</span><br>
<span class="quotelev1">&gt;           inet addr:20.1.0.254  Bcast:20.1.0.255  Mask:255.255.255.0
</span><br>
<span class="quotelev1">&gt;           UP BROADCAST RUNNING MULTICAST  MTU:2044  Metric:1
</span><br>
<span class="quotelev1">&gt;           RX packets:9773 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;           TX packets:9773 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;           collisions:0 txqueuelen:128
</span><br>
<span class="quotelev1">&gt;           RX bytes:424624 (414.6 KiB)  TX bytes:617676 (603.1 KiB)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ib1       Link encap:UNSPEC  HWaddr
</span><br>
<span class="quotelev1">&gt; 00-00-00-00-00-00-00-00-00-00-00-00-00-00-00-00
</span><br>
<span class="quotelev1">&gt;           inet addr:30.5.0.254  Bcast:30.5.0.255  Mask:255.255.255.0
</span><br>
<span class="quotelev1">&gt;           UP BROADCAST MULTICAST  MTU:2044  Metric:1
</span><br>
<span class="quotelev1">&gt;           RX packets:0 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;           TX packets:0 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;           collisions:0 txqueuelen:128
</span><br>
<span class="quotelev1">&gt;           RX bytes:0 (0.0 b)  TX bytes:0 (0.0 b)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Additionally, I've discovered that this problem is specific to either
</span><br>
<span class="quotelev1">&gt; Dell hardware or Gig-E, because I cannot reproduce it in my VMware
</span><br>
<span class="quotelev1">&gt; cluster. Output of lspci for ethernet devices:
</span><br>
<span class="quotelev1">&gt; [headnode]# lspci |grep -i &quot;ether&quot;; ssh -x compute-0-0 'lspci |grep  
</span><br>
<span class="quotelev1">&gt; -i ether'
</span><br>
<span class="quotelev1">&gt; 06:07.0 Ethernet controller: Intel Corporation 82541GI/PI Gigabit
</span><br>
<span class="quotelev1">&gt; Ethernet Controller (rev 05)
</span><br>
<span class="quotelev1">&gt; 07:08.0 Ethernet controller: Intel Corporation 82541GI/PI Gigabit
</span><br>
<span class="quotelev1">&gt; Ethernet Controller (rev 05)
</span><br>
<span class="quotelev1">&gt; 07:07.0 Ethernet controller: Intel Corporation 82541GI/PI Gigabit
</span><br>
<span class="quotelev1">&gt; Ethernet Controller (rev 05)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i.e. headnode has 2 gig-e interfaces and compute - one, and all are  
</span><br>
<span class="quotelev1">&gt; the same.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Alex.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2/1/07, Galen Shipman &lt;gshipman_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; What does ifconfig report on both nodes?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - Galen
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 1, 2007, at 2:50 PM, Alex Tumanov wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have kept doing my own investigation and recompiled OpenMPI to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have
</span><br>
<span class="quotelev3">&gt;&gt;&gt; only the barebones functionality with no support for any  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; interconnects
</span><br>
<span class="quotelev3">&gt;&gt;&gt; other than ethernet:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # rpmbuild --rebuild --define=&quot;configure_options
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --prefix=/opt/openmpi/1.1.4&quot; --define=&quot;install_in_opt 1&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --define=&quot;mflags all&quot; openmpi-1.1.4-1.src.rpm
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The error detailed in my previous message persisted, which  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; eliminates
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the possibility of interconnect support interfering with ethernet
</span><br>
<span class="quotelev3">&gt;&gt;&gt; support. Here's an excerpt from ompi_info:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # ompi_info
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 Open MPI: 1.1.4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Open MPI SVN revision: r13362
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 Open RTE: 1.1.4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Open RTE SVN revision: r13362
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     OPAL: 1.1.4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        OPAL SVN revision: r13362
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                   Prefix: /opt/openmpi/1.1.4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Configured architecture: x86_64-redhat-linux-gnu
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              . . .
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           Thread support: posix (mpi: no, progress: no)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Internal debug support: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      MPI parameter check: runtime
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              . . .
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 MCA btl: self (MCA v1.0, API v1.0, Component v1.1.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA btl: sm (MCA v1.0, API v1.0, Component v1.1.4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  MCA btl: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Again, to replicate the error, I ran
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # mpirun -hostfile ~/testdir/hosts  --mca btl tcp,self ~/testdir/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hello
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In this case, you can even omit the runtime mca param  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; specifications:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # mpirun -hostfile ~/testdir/hosts  ~/testdir/hello
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for reading this. I hope I've provided enough information.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sincerely,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Alex.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 2/1/07, Alex Tumanov &lt;atumanov_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have tried a very basic test on a 2 node &quot;cluster&quot; consisting  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; of 2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; dell boxes. One of them is dual CPU Intel(R) Xeon(TM) CPU 2.80GHz
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1GB of RAM and the slave node is quad-CPU Intel(R) Xeon(TM) CPU
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 3.40GHz with 2GB of RAM. Both have Infiniband cards and Gig-E. The
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; slave node is connected directly to the headnode.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OpenMPI version 1.1.4 was compiled with support for the following
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; btl's: openib,mx,gm, and mvapi. I got it to work over openib, but,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ironically, the same trivial hello world job fails over tcp (please
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; see the log below). I found that the same problem was already
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; discussed on this list here:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2006/06/1347.php">http://www.open-mpi.org/community/lists/users/2006/06/1347.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The discussion mentioned that there could be something wrong  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; TCP setup of the nodes. Unfortunately it was taken offline. Could
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; someone help me with this?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Alex.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; # mpirun -hostfile ~/testdir/hosts --mca btl tcp,self ~/testdir/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hello
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello from Alex' MPI test program
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Process 0 on headnode out of 2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello from Alex' MPI test program
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Process 1 on compute-0-0.local out of 2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Failing at addr:0xdebdf8
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [0] func:/opt/openmpi/1.1.4/lib/libopal.so.0 [0x2a9587e0e5]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [1] func:/lib64/tls/libpthread.so.0 [0x3d1a00c430]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [2] func:/opt/openmpi/1.1.4/lib/libopal.so.0 [0x2a95880729]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [3] func:/opt/openmpi/1.1.4/lib/libopal.so.0(_int_free+0x24a)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [0x2a95880d7a]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [4] func:/opt/openmpi/1.1.4/lib/libopal.so.0(free+0xbf)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [0x2a9588303f]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [5] func:/opt/openmpi/1.1.4/lib/libmpi.so.0 [0x2a955949ca]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [6] func:/opt/openmpi/1.1.4/lib/openmpi/mca_btl_tcp.so
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (mca_btl_tcp_component_close+0x34f)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [0x2a988ee8ef]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [7] func:/opt/openmpi/1.1.4/lib/libopal.so.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (mca_base_components_close+0xde)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [0x2a95872e1e]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [8] func:/opt/openmpi/1.1.4/lib/libmpi.so.0(mca_btl_base_close 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +0xe9)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [0x2a955e5159]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [9] func:/opt/openmpi/1.1.4/lib/libmpi.so.0(mca_bml_base_close+0x9)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [0x2a955e5029]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [10] func:/opt/openmpi/1.1.4/lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (mca_pml_ob1_component_close+0x25)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [0x2a97f4dc55]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [11] func:/opt/openmpi/1.1.4/lib/libopal.so.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (mca_base_components_close+0xde)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [0x2a95872e1e]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [12] func:/opt/openmpi/1.1.4/lib/libmpi.so.0(mca_pml_base_close 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +0x69)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [0x2a955ea3e9]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [13] func:/opt/openmpi/1.1.4/lib/libmpi.so.0(ompi_mpi_finalize 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +0xfe)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [0x2a955ab57e]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [14] func:/root/testdir/hello(main+0x7b) [0x4009d3]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [15] func:/lib64/tls/libc.so.6(__libc_start_main+0xdb)  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [0x3d1951c3fb]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [16] func:/root/testdir/hello [0x4008ca]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *** End of error message ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun noticed that job rank 0 with PID 15573 on node &quot;dr11.local&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; exited on signal 11.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2 additional processes aborted (not shown)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
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
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="2585.php">Bert Wesarg: "Re: [OMPI users] Suggestion: adding OMPI_ versions macros in mpi.h"</a>
<li><strong>Previous message:</strong> <a href="2583.php">Alex Tumanov: "Re: [OMPI users] [OMPI Users] OpenMPI 1.1.4 over ethernet fails"</a>
<li><strong>In reply to:</strong> <a href="2583.php">Alex Tumanov: "Re: [OMPI users] [OMPI Users] OpenMPI 1.1.4 over ethernet fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2587.php">Alex Tumanov: "Re: [OMPI users] [OMPI Users] OpenMPI 1.1.4 over ethernet fails"</a>
<li><strong>Reply:</strong> <a href="2587.php">Alex Tumanov: "Re: [OMPI users] [OMPI Users] OpenMPI 1.1.4 over ethernet fails"</a>
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
