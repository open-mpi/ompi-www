<?
$subject_val = "Re: [OMPI users] Possible bug in MPI_Barrier() ?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 18 00:06:33 2016" -->
<!-- isoreceived="20160418040633" -->
<!-- sent="Mon, 18 Apr 2016 00:06:22 -0400" -->
<!-- isosent="20160418040622" -->
<!-- name="dpchoudh ." -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Possible bug in MPI_Barrier() ?" -->
<!-- id="CAHXxYDhJsUmt4oTzFdVzO-xUjzqxznwFjsd-UHW93gYw3E1DaA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="64640D0E-C41F-473E-BEEF-F68E7DDDE767_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Possible bug in MPI_Barrier() ?<br>
<strong>From:</strong> dpchoudh . (<em>dpchoudh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-18 00:06:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28945.php">dpchoudh .: "Re: [OMPI users] Possible bug in MPI_Barrier() ?"</a>
<li><strong>Previous message:</strong> <a href="28943.php">Ralph Castain: "Re: [OMPI users] Possible bug in MPI_Barrier() ?"</a>
<li><strong>In reply to:</strong> <a href="28943.php">Ralph Castain: "Re: [OMPI users] Possible bug in MPI_Barrier() ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28945.php">dpchoudh .: "Re: [OMPI users] Possible bug in MPI_Barrier() ?"</a>
<li><strong>Reply:</strong> <a href="28945.php">dpchoudh .: "Re: [OMPI users] Possible bug in MPI_Barrier() ?"</a>
<li><strong>Reply:</strong> <a href="28946.php">Gilles Gouaillardet: "Re: [OMPI users] Possible bug in MPI_Barrier() ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you for your suggestion, Ralph. But it did not make any difference.
<br>
<p>Let me say that my code is about a week stale. I just did a git pull and am
<br>
building it right now. The build takes quite a bit of time, so I avoid
<br>
doing that unless there is a reason. But what I am trying out is the most
<br>
basic functionality, so I'd think a week or so of lag would not make a
<br>
difference.
<br>
<p>Does the stack trace suggest something to you? It seems that the send
<br>
hangs; but a 4 byte send should be sent eagerly.
<br>
<p>Best regards
<br>
'Durga
<br>
<p>1% of the executables have 99% of CPU privilege!
<br>
Userspace code! Unite!! Occupy the kernel!!!
<br>
<p>On Sun, Apr 17, 2016 at 11:55 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Try adding -mca oob_tcp_if_include eno1 to your cmd line and see if that
</span><br>
<span class="quotelev1">&gt; makes a difference
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 17, 2016, at 8:43 PM, dpchoudh . &lt;dpchoudh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello Gilles and all
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am sorry to be bugging the developers, but this issue seems to be
</span><br>
<span class="quotelev1">&gt; nagging me, and I am surprised it does not seem to affect anybody else. But
</span><br>
<span class="quotelev1">&gt; then again, I am using the master branch, and most users are probably using
</span><br>
<span class="quotelev1">&gt; a released version.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This time I am using a totally different cluster. This has NO verbs
</span><br>
<span class="quotelev1">&gt; capable interface; just 2 Ethernet (1 of which has no IP address and hence
</span><br>
<span class="quotelev1">&gt; is unusable) plus 1 proprietary interface that currently supports only IP
</span><br>
<span class="quotelev1">&gt; traffic. The two IP interfaces (Ethernet and proprietary) are on different
</span><br>
<span class="quotelev1">&gt; IP subnets.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My test program is as follows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; char host[128];
</span><br>
<span class="quotelev1">&gt; int n;
</span><br>
<span class="quotelev1">&gt; MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt; MPI_Get_processor_name(host, &amp;n);
</span><br>
<span class="quotelev1">&gt; printf(&quot;Hello from %s\n&quot;, host);
</span><br>
<span class="quotelev1">&gt; MPI_Comm_size(MPI_COMM_WORLD, &amp;n);
</span><br>
<span class="quotelev1">&gt; printf(&quot;The world has %d nodes\n&quot;, n);
</span><br>
<span class="quotelev1">&gt; MPI_Comm_rank(MPI_COMM_WORLD, &amp;n);
</span><br>
<span class="quotelev1">&gt; printf(&quot;My rank is %d\n&quot;,n);
</span><br>
<span class="quotelev1">&gt; //#if 0
</span><br>
<span class="quotelev1">&gt; if (n == 0)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; strcpy(host, &quot;ha!&quot;);
</span><br>
<span class="quotelev1">&gt; MPI_Send(host, strlen(host) + 1, MPI_CHAR, 1, 1, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; printf(&quot;sent %s\n&quot;, host);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; else
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; //int len = strlen(host) + 1;
</span><br>
<span class="quotelev1">&gt; bzero(host, 128);
</span><br>
<span class="quotelev1">&gt; MPI_Recv(host,  4, MPI_CHAR, 0, 1, MPI_COMM_WORLD, MPI_STATUS_IGNORE);
</span><br>
<span class="quotelev1">&gt; printf(&quot;Received %s from rank 0\n&quot;, host);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; //#endif
</span><br>
<span class="quotelev1">&gt; MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This program, when run between two nodes, hangs. The command was:
</span><br>
<span class="quotelev1">&gt; [durga_at_b-1 ~]$ mpirun -np 2 -hostfile ~/hostfile -mca btl self,tcp -mca
</span><br>
<span class="quotelev1">&gt; pml ob1 -mca btl_tcp_if_include eno1 ./mpitest
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And the hang is with the following output: (eno1 is one of the gigEth
</span><br>
<span class="quotelev1">&gt; interfaces, that takes OOB traffic as well)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello from b-1
</span><br>
<span class="quotelev1">&gt; The world has 2 nodes
</span><br>
<span class="quotelev1">&gt; My rank is 0
</span><br>
<span class="quotelev1">&gt; Hello from b-2
</span><br>
<span class="quotelev1">&gt; The world has 2 nodes
</span><br>
<span class="quotelev1">&gt; My rank is 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that if I uncomment the #if 0 - #endif (i.e. comment out the
</span><br>
<span class="quotelev1">&gt; MPI_Send()/MPI_Recv() part, the program runs to completion. Also note that
</span><br>
<span class="quotelev1">&gt; the printfs following MPI_Send()/MPI_Recv() do not show up on console.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Upon attaching gdb, the stack trace from the master node is as follows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Missing separate debuginfos, use: debuginfo-install
</span><br>
<span class="quotelev1">&gt; glibc-2.17-78.el7.x86_64 libpciaccess-0.13.4-2.el7.x86_64
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0x00007f72a533eb7d in poll () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #1  0x00007f72a4cb7146 in poll_dispatch (base=0xee33d0, tv=0x7fff81057b70)
</span><br>
<span class="quotelev1">&gt;     at poll.c:165
</span><br>
<span class="quotelev1">&gt; #2  0x00007f72a4caede0 in opal_libevent2022_event_base_loop (base=0xee33d0,
</span><br>
<span class="quotelev1">&gt;     flags=2) at event.c:1630
</span><br>
<span class="quotelev1">&gt; #3  0x00007f72a4c4e692 in opal_progress () at runtime/opal_progress.c:171
</span><br>
<span class="quotelev1">&gt; #4  0x00007f72a0d07ac1 in opal_condition_wait (
</span><br>
<span class="quotelev1">&gt;     c=0x7f72a5bb1e00 &lt;ompi_request_cond&gt;, m=0x7f72a5bb1d80
</span><br>
<span class="quotelev1">&gt; &lt;ompi_request_lock&gt;)
</span><br>
<span class="quotelev1">&gt;     at ../../../../opal/threads/condition.h:76
</span><br>
<span class="quotelev1">&gt; #5  0x00007f72a0d07ca2 in ompi_request_wait_completion (req=0x113eb80)
</span><br>
<span class="quotelev1">&gt;     at ../../../../ompi/request/request.h:383
</span><br>
<span class="quotelev1">&gt; #6  0x00007f72a0d09cd5 in mca_pml_ob1_send (buf=0x7fff81057db0, count=4,
</span><br>
<span class="quotelev1">&gt;     datatype=0x601080 &lt;ompi_mpi_char&gt;, dst=1, tag=1,
</span><br>
<span class="quotelev1">&gt;     sendmode=MCA_PML_BASE_SEND_STANDARD, comm=0x601280
</span><br>
<span class="quotelev1">&gt; &lt;ompi_mpi_comm_world&gt;)
</span><br>
<span class="quotelev1">&gt;     at pml_ob1_isend.c:251
</span><br>
<span class="quotelev1">&gt; #7  0x00007f72a58d6be3 in PMPI_Send (buf=0x7fff81057db0, count=4,
</span><br>
<span class="quotelev1">&gt;     type=0x601080 &lt;ompi_mpi_char&gt;, dest=1, tag=1,
</span><br>
<span class="quotelev1">&gt;     comm=0x601280 &lt;ompi_mpi_comm_world&gt;) at psend.c:78
</span><br>
<span class="quotelev1">&gt; #8  0x0000000000400afa in main (argc=1, argv=0x7fff81057f18) at
</span><br>
<span class="quotelev1">&gt; mpitest.c:19
</span><br>
<span class="quotelev1">&gt; (gdb)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And the backtrace on the non-master node is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0x00007ff3b377e48d in nanosleep () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #1  0x00007ff3b37af014 in usleep () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #2  0x00007ff3b0c922de in OPAL_PMIX_PMIX120_PMIx_Fence (procs=0x0,
</span><br>
<span class="quotelev1">&gt; nprocs=0,
</span><br>
<span class="quotelev1">&gt;     info=0x0, ninfo=0) at src/client/pmix_client_fence.c:100
</span><br>
<span class="quotelev1">&gt; #3  0x00007ff3b0c5f1a6 in pmix120_fence (procs=0x0, collect_data=0)
</span><br>
<span class="quotelev1">&gt;     at pmix120_client.c:258
</span><br>
<span class="quotelev1">&gt; #4  0x00007ff3b3cf8f4b in ompi_mpi_finalize ()
</span><br>
<span class="quotelev1">&gt;     at runtime/ompi_mpi_finalize.c:242
</span><br>
<span class="quotelev1">&gt; #5  0x00007ff3b3d23295 in PMPI_Finalize () at pfinalize.c:47
</span><br>
<span class="quotelev1">&gt; #6  0x0000000000400958 in main (argc=1, argv=0x7fff785e8788) at
</span><br>
<span class="quotelev1">&gt; mpitest.c:30
</span><br>
<span class="quotelev1">&gt; (gdb)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The hostfile is as follows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [durga_at_b-1 ~]$ cat hostfile
</span><br>
<span class="quotelev1">&gt; 10.4.70.10 slots=1
</span><br>
<span class="quotelev1">&gt; 10.4.70.11 slots=1
</span><br>
<span class="quotelev1">&gt; #10.4.70.12 slots=1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And the ifconfig output from the master node is as follows (the other node
</span><br>
<span class="quotelev1">&gt; is similar; all the IP interfaces are in their respective subnets) :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [durga_at_b-1 ~]$ ifconfig
</span><br>
<span class="quotelev1">&gt; eno1: flags=4163&lt;UP,BROADCAST,RUNNING,MULTICAST&gt;  mtu 1500
</span><br>
<span class="quotelev1">&gt;         inet 10.4.70.10  netmask 255.255.255.0  broadcast 10.4.70.255
</span><br>
<span class="quotelev1">&gt;         inet6 fe80::21e:c9ff:fefe:13df  prefixlen 64  scopeid 0x20&lt;link&gt;
</span><br>
<span class="quotelev1">&gt;         ether 00:1e:c9:fe:13:df  txqueuelen 1000  (Ethernet)
</span><br>
<span class="quotelev1">&gt;         RX packets 48215  bytes 27842846 (26.5 MiB)
</span><br>
<span class="quotelev1">&gt;         RX errors 0  dropped 0  overruns 0  frame 0
</span><br>
<span class="quotelev1">&gt;         TX packets 52746  bytes 7817568 (7.4 MiB)
</span><br>
<span class="quotelev1">&gt;         TX errors 0  dropped 0 overruns 0  carrier 0  collisions 0
</span><br>
<span class="quotelev1">&gt;         device interrupt 16
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; eno2: flags=4099&lt;UP,BROADCAST,MULTICAST&gt;  mtu 1500
</span><br>
<span class="quotelev1">&gt;         ether 00:1e:c9:fe:13:e0  txqueuelen 1000  (Ethernet)
</span><br>
<span class="quotelev1">&gt;         RX packets 0  bytes 0 (0.0 B)
</span><br>
<span class="quotelev1">&gt;         RX errors 0  dropped 0  overruns 0  frame 0
</span><br>
<span class="quotelev1">&gt;         TX packets 0  bytes 0 (0.0 B)
</span><br>
<span class="quotelev1">&gt;         TX errors 0  dropped 0 overruns 0  carrier 0  collisions 0
</span><br>
<span class="quotelev1">&gt;         device interrupt 17
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; lf0: flags=4163&lt;UP,BROADCAST,RUNNING,MULTICAST&gt;  mtu 2016
</span><br>
<span class="quotelev1">&gt;         inet 192.168.1.2  netmask 255.255.255.0  broadcast 192.168.1.255
</span><br>
<span class="quotelev1">&gt;         inet6 fe80::3002:ff:fe33:3333  prefixlen 64  scopeid 0x20&lt;link&gt;
</span><br>
<span class="quotelev1">&gt;         ether 32:02:00:33:33:33  txqueuelen 1000  (Ethernet)
</span><br>
<span class="quotelev1">&gt;         RX packets 10  bytes 512 (512.0 B)
</span><br>
<span class="quotelev1">&gt;         RX errors 0  dropped 0  overruns 0  frame 0
</span><br>
<span class="quotelev1">&gt;         TX packets 22  bytes 1536 (1.5 KiB)
</span><br>
<span class="quotelev1">&gt;         TX errors 0  dropped 0 overruns 0  carrier 0  collisions 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; lo: flags=73&lt;UP,LOOPBACK,RUNNING&gt;  mtu 65536
</span><br>
<span class="quotelev1">&gt;         inet 127.0.0.1  netmask 255.0.0.0
</span><br>
<span class="quotelev1">&gt;         inet6 ::1  prefixlen 128  scopeid 0x10&lt;host&gt;
</span><br>
<span class="quotelev1">&gt;         loop  txqueuelen 0  (Local Loopback)
</span><br>
<span class="quotelev1">&gt;         RX packets 26  bytes 1378 (1.3 KiB)
</span><br>
<span class="quotelev1">&gt;         RX errors 0  dropped 0  overruns 0  frame 0
</span><br>
<span class="quotelev1">&gt;         TX packets 26  bytes 1378 (1.3 KiB)
</span><br>
<span class="quotelev1">&gt;         TX errors 0  dropped 0 overruns 0  carrier 0  collisions 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please help me with this. I am stuck with the TCP transport, which is the
</span><br>
<span class="quotelev1">&gt; most basic of all transports.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance
</span><br>
<span class="quotelev1">&gt; Durga
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1% of the executables have 99% of CPU privilege!
</span><br>
<span class="quotelev1">&gt; Userspace code! Unite!! Occupy the kernel!!!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Apr 12, 2016 at 9:32 PM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is quite unlikely, and fwiw, your test program works for me.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; i suggest you check your 3 TCP networks are usable, for example
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ mpirun -np 2 -hostfile ~/hostfile -mca btl self,tcp -mca pml ob1 --mca
</span><br>
<span class="quotelev2">&gt;&gt; btl_tcp_if_include xxx ./mpitest
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; in which xxx is a [list of] interface name :
</span><br>
<span class="quotelev2">&gt;&gt; eth0
</span><br>
<span class="quotelev2">&gt;&gt; eth1
</span><br>
<span class="quotelev2">&gt;&gt; ib0
</span><br>
<span class="quotelev2">&gt;&gt; eth0,eth1
</span><br>
<span class="quotelev2">&gt;&gt; eth0,ib0
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; eth0,eth1,ib0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and see where problem start occuring.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; btw, are your 3 interfaces in 3 different subnet ? is routing required
</span><br>
<span class="quotelev2">&gt;&gt; between two interfaces of the same type ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 4/13/2016 7:15 AM, dpchoudh . wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi all
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have reported this issue before, but then had brushed it off as
</span><br>
<span class="quotelev2">&gt;&gt; something that was caused by my modifications to the source tree. It looks
</span><br>
<span class="quotelev2">&gt;&gt; like that is not the case.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Just now, I did the following:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. Cloned a fresh copy from master.
</span><br>
<span class="quotelev2">&gt;&gt; 2. Configured with the following flags, built and installed it in my
</span><br>
<span class="quotelev2">&gt;&gt; two-node &quot;cluster&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; --enable-debug --enable-debug-symbols --disable-dlopen
</span><br>
<span class="quotelev2">&gt;&gt; 3. Compiled the following program, mpitest.c with these flags: -g3 -Wall
</span><br>
<span class="quotelev2">&gt;&gt; -Wextra
</span><br>
<span class="quotelev2">&gt;&gt; 4. Ran it like this:
</span><br>
<span class="quotelev2">&gt;&gt; [durga_at_smallMPI ~]$ mpirun -np 2 -hostfile ~/hostfile -mca btl self,tcp
</span><br>
<span class="quotelev2">&gt;&gt; -mca pml ob1 ./mpitest
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; With this, the code hangs at MPI_Barrier() on both nodes, after
</span><br>
<span class="quotelev2">&gt;&gt; generating the following output:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello world from processor smallMPI, rank 0 out of 2 processors
</span><br>
<span class="quotelev2">&gt;&gt; Hello world from processor bigMPI, rank 1 out of 2 processors
</span><br>
<span class="quotelev2">&gt;&gt; smallMPI sent haha!
</span><br>
<span class="quotelev2">&gt;&gt; bigMPI received haha!
</span><br>
<span class="quotelev2">&gt;&gt; &lt;Hangs until killed by ^C&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Attaching to the hung process at one node gives the following backtrace:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (gdb) bt
</span><br>
<span class="quotelev2">&gt;&gt; #0  0x00007f55b0f41c3d in poll () from /lib64/libc.so.6
</span><br>
<span class="quotelev2">&gt;&gt; #1  0x00007f55b03ccde6 in poll_dispatch (base=0x70e7b0,
</span><br>
<span class="quotelev2">&gt;&gt; tv=0x7ffd1bb551c0) at poll.c:165
</span><br>
<span class="quotelev2">&gt;&gt; #2  0x00007f55b03c4a90 in opal_libevent2022_event_base_loop
</span><br>
<span class="quotelev2">&gt;&gt; (base=0x70e7b0, flags=2) at event.c:1630
</span><br>
<span class="quotelev2">&gt;&gt; #3  0x00007f55b02f0144 in opal_progress () at runtime/opal_progress.c:171
</span><br>
<span class="quotelev2">&gt;&gt; #4  0x00007f55b14b4d8b in opal_condition_wait (c=0x7f55b19fec40
</span><br>
<span class="quotelev2">&gt;&gt; &lt;ompi_request_cond&gt;, m=0x7f55b19febc0 &lt;ompi_request_lock&gt;) at
</span><br>
<span class="quotelev2">&gt;&gt; ../opal/threads/condition.h:76
</span><br>
<span class="quotelev2">&gt;&gt; #5  0x00007f55b14b531b in ompi_request_default_wait_all (count=2,
</span><br>
<span class="quotelev2">&gt;&gt; requests=0x7ffd1bb55370, statuses=0x7ffd1bb55340) at request/req_wait.c:287
</span><br>
<span class="quotelev2">&gt;&gt; #6  0x00007f55b157a225 in ompi_coll_base_sendrecv_zero (dest=1, stag=-16,
</span><br>
<span class="quotelev2">&gt;&gt; source=1, rtag=-16, comm=0x601280 &lt;ompi_mpi_comm_world&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;     at base/coll_base_barrier.c:63
</span><br>
<span class="quotelev2">&gt;&gt; #7  0x00007f55b157a92a in ompi_coll_base_barrier_intra_two_procs
</span><br>
<span class="quotelev2">&gt;&gt; (comm=0x601280 &lt;ompi_mpi_comm_world&gt;, module=0x7c2630) at
</span><br>
<span class="quotelev2">&gt;&gt; base/coll_base_barrier.c:308
</span><br>
<span class="quotelev2">&gt;&gt; #8  0x00007f55b15aafec in ompi_coll_tuned_barrier_intra_dec_fixed
</span><br>
<span class="quotelev2">&gt;&gt; (comm=0x601280 &lt;ompi_mpi_comm_world&gt;, module=0x7c2630) at
</span><br>
<span class="quotelev2">&gt;&gt; coll_tuned_decision_fixed.c:196
</span><br>
<span class="quotelev2">&gt;&gt; #9  0x00007f55b14d36fd in PMPI_Barrier (comm=0x601280
</span><br>
<span class="quotelev2">&gt;&gt; &lt;ompi_mpi_comm_world&gt;) at pbarrier.c:63
</span><br>
<span class="quotelev2">&gt;&gt; #10 0x0000000000400b0b in main (argc=1, argv=0x7ffd1bb55658) at
</span><br>
<span class="quotelev2">&gt;&gt; mpitest.c:26
</span><br>
<span class="quotelev2">&gt;&gt; (gdb)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thinking that this might be a bug in tuned collectives, since that is
</span><br>
<span class="quotelev2">&gt;&gt; what the stack shows, I ran the program like this (basically adding the
</span><br>
<span class="quotelev2">&gt;&gt; ^tuned part)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [durga_at_smallMPI ~]$ mpirun -np 2 -hostfile ~/hostfile -mca btl self,tcp
</span><br>
<span class="quotelev2">&gt;&gt; -mca pml ob1 -mca coll ^tuned ./mpitest
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It still hangs, but now with a different stack trace:
</span><br>
<span class="quotelev2">&gt;&gt; (gdb) bt
</span><br>
<span class="quotelev2">&gt;&gt; #0  0x00007f910d38ac3d in poll () from /lib64/libc.so.6
</span><br>
<span class="quotelev2">&gt;&gt; #1  0x00007f910c815de6 in poll_dispatch (base=0x1a317b0,
</span><br>
<span class="quotelev2">&gt;&gt; tv=0x7fff43ee3610) at poll.c:165
</span><br>
<span class="quotelev2">&gt;&gt; #2  0x00007f910c80da90 in opal_libevent2022_event_base_loop
</span><br>
<span class="quotelev2">&gt;&gt; (base=0x1a317b0, flags=2) at event.c:1630
</span><br>
<span class="quotelev2">&gt;&gt; #3  0x00007f910c739144 in opal_progress () at runtime/opal_progress.c:171
</span><br>
<span class="quotelev2">&gt;&gt; #4  0x00007f910db130f7 in opal_condition_wait (c=0x7f910de47c40
</span><br>
<span class="quotelev2">&gt;&gt; &lt;ompi_request_cond&gt;, m=0x7f910de47bc0 &lt;ompi_request_lock&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;     at ../../../../opal/threads/condition.h:76
</span><br>
<span class="quotelev2">&gt;&gt; #5  0x00007f910db132d8 in ompi_request_wait_completion (req=0x1b07680) at
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../ompi/request/request.h:383
</span><br>
<span class="quotelev2">&gt;&gt; #6  0x00007f910db1533b in mca_pml_ob1_send (buf=0x0, count=0,
</span><br>
<span class="quotelev2">&gt;&gt; datatype=0x7f910de1e340 &lt;ompi_mpi_byte&gt;, dst=1, tag=-16,
</span><br>
<span class="quotelev2">&gt;&gt; sendmode=MCA_PML_BASE_SEND_STANDARD,
</span><br>
<span class="quotelev2">&gt;&gt;     comm=0x601280 &lt;ompi_mpi_comm_world&gt;) at pml_ob1_isend.c:259
</span><br>
<span class="quotelev2">&gt;&gt; #7  0x00007f910d9c3b38 in ompi_coll_base_barrier_intra_basic_linear
</span><br>
<span class="quotelev2">&gt;&gt; (comm=0x601280 &lt;ompi_mpi_comm_world&gt;, module=0x1b092c0) at
</span><br>
<span class="quotelev2">&gt;&gt; base/coll_base_barrier.c:368
</span><br>
<span class="quotelev2">&gt;&gt; #8  0x00007f910d91c6fd in PMPI_Barrier (comm=0x601280
</span><br>
<span class="quotelev2">&gt;&gt; &lt;ompi_mpi_comm_world&gt;) at pbarrier.c:63
</span><br>
<span class="quotelev2">&gt;&gt; #9  0x0000000000400b0b in main (argc=1, argv=0x7fff43ee3a58) at
</span><br>
<span class="quotelev2">&gt;&gt; mpitest.c:26
</span><br>
<span class="quotelev2">&gt;&gt; (gdb)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The mpitest.c program is as follows:
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int main(int argc, char** argv)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;     int world_size, world_rank, name_len;
</span><br>
<span class="quotelev2">&gt;&gt;     char hostname[MPI_MAX_PROCESSOR_NAME], buf[8];
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Comm_size(MPI_COMM_WORLD, &amp;world_size);
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Comm_rank(MPI_COMM_WORLD, &amp;world_rank);
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Get_processor_name(hostname, &amp;name_len);
</span><br>
<span class="quotelev2">&gt;&gt;     printf(&quot;Hello world from processor %s, rank %d out of %d
</span><br>
<span class="quotelev2">&gt;&gt; processors\n&quot;, hostname, world_rank, world_size);
</span><br>
<span class="quotelev2">&gt;&gt;     if (world_rank == 1)
</span><br>
<span class="quotelev2">&gt;&gt;     {
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Recv(buf, 6, MPI_CHAR, 0, 99, MPI_COMM_WORLD, MPI_STATUS_IGNORE);
</span><br>
<span class="quotelev2">&gt;&gt;     printf(&quot;%s received %s\n&quot;, hostname, buf);
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt;     else
</span><br>
<span class="quotelev2">&gt;&gt;     {
</span><br>
<span class="quotelev2">&gt;&gt;     strcpy(buf, &quot;haha!&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Send(buf, 6, MPI_CHAR, 1, 99, MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt;     printf(&quot;%s sent %s\n&quot;, hostname, buf);
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt;     return 0;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The hostfile is as follows:
</span><br>
<span class="quotelev2">&gt;&gt; 10.10.10.10 slots=1
</span><br>
<span class="quotelev2">&gt;&gt; 10.10.10.11 slots=1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The two nodes are connected by three physical and 3 logical networks:
</span><br>
<span class="quotelev2">&gt;&gt; Physical: Gigabit Ethernet, 10G iWARP, 20G Infiniband
</span><br>
<span class="quotelev2">&gt;&gt; Logical: IP (all 3), PSM (Qlogic Infiniband), Verbs (iWARP and Infiniband)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please note again that this is a fresh, brand new clone.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is this a bug (perhaps a side effect of --disable-dlopen) or something I
</span><br>
<span class="quotelev2">&gt;&gt; am doing wrong?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Durga
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We learn from history that we never learn from history.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/04/28930.php">http://www.open-mpi.org/community/lists/users/2016/04/28930.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/04/28932.php">http://www.open-mpi.org/community/lists/users/2016/04/28932.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/04/28942.php">http://www.open-mpi.org/community/lists/users/2016/04/28942.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/04/28943.php">http://www.open-mpi.org/community/lists/users/2016/04/28943.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28944/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28945.php">dpchoudh .: "Re: [OMPI users] Possible bug in MPI_Barrier() ?"</a>
<li><strong>Previous message:</strong> <a href="28943.php">Ralph Castain: "Re: [OMPI users] Possible bug in MPI_Barrier() ?"</a>
<li><strong>In reply to:</strong> <a href="28943.php">Ralph Castain: "Re: [OMPI users] Possible bug in MPI_Barrier() ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28945.php">dpchoudh .: "Re: [OMPI users] Possible bug in MPI_Barrier() ?"</a>
<li><strong>Reply:</strong> <a href="28945.php">dpchoudh .: "Re: [OMPI users] Possible bug in MPI_Barrier() ?"</a>
<li><strong>Reply:</strong> <a href="28946.php">Gilles Gouaillardet: "Re: [OMPI users] Possible bug in MPI_Barrier() ?"</a>
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
