<?
$subject_val = "Re: [OMPI users] Connection timed out with multiple nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 23 23:17:17 2014" -->
<!-- isoreceived="20140124041717" -->
<!-- sent="Thu, 23 Jan 2014 20:16:27 -0800" -->
<!-- isosent="20140124041627" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Connection timed out with multiple nodes" -->
<!-- id="F63634E9-F2AD-4B88-8CE7-8FD10DE1C1AB_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="alpine.LRH.2.02.1401231955030.30917_at_localhost.localdomain" -->
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
<strong>Subject:</strong> Re: [OMPI users] Connection timed out with multiple nodes<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-23 23:16:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23440.php">Jeff Squyres (jsquyres): "Re: [OMPI users] simple test problem hangs	on	mpi_finalize	and	consumes all system resources"</a>
<li><strong>Previous message:</strong> <a href="23438.php">Doug Roberts: "Re: [OMPI users] Connection timed out with multiple nodes"</a>
<li><strong>In reply to:</strong> <a href="23438.php">Doug Roberts: "Re: [OMPI users] Connection timed out with multiple nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23518.php">Doug Roberts: "Re: [OMPI users] Connection timed out with multiple nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It's the failure on readv that's the source of the trouble. What happens if you only if_include eth2? Does it work then?
<br>
<p><p>On Jan 23, 2014, at 5:38 PM, Doug Roberts &lt;roberpj_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Date: Fri, 17 Jan 2014 19:24:50 -0800
</span><br>
<span class="quotelev2">&gt;&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The most common cause of this problem is a firewall between the
</span><br>
<span class="quotelev2">&gt;&gt; nodes - you can ssh across, but not communicate. Have you checked
</span><br>
<span class="quotelev2">&gt;&gt; to see that the firewall is turned off?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Turns out some iptables rules (typical on our clusters) were active.
</span><br>
<span class="quotelev1">&gt; They are now turned off for continued testing as suggested. I have
</span><br>
<span class="quotelev1">&gt; rerun the mpi_test code, this time using a debug enabled build of openmpi/1.6.5 keeping with the intel compiler.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As shown below the problem is still there. I'm including some gdb
</span><br>
<span class="quotelev1">&gt; output this time. The job is shown to succeed using only eth0 over
</span><br>
<span class="quotelev1">&gt; 1g but hang nearly immediately when the eth2 over 10g interface is
</span><br>
<span class="quotelev1">&gt; included.  Any more suggestions would be greatly appreciated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [roberpj_at_bro127:~/samples/mpi_test] mpicc -g mpi_test.c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; o Using eth0 only:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [roberpj_at_bro127:~/samples/mpi_test] /opt/sharcnet/openmpi/1.6.5/intel-debug/bin/mpirun -np 2 --mca btl tcp,sm,self --mca btl_tcp_i
</span><br>
<span class="quotelev1">&gt; f_include eth0 --host bro127,bro128 ./a.out
</span><br>
<span class="quotelev1">&gt; Number of processes = 2
</span><br>
<span class="quotelev1">&gt; Test repeated 3 times for reliability
</span><br>
<span class="quotelev1">&gt; I am process 0 on node bro127
</span><br>
<span class="quotelev1">&gt; Run 1 of 3
</span><br>
<span class="quotelev1">&gt; P0: Sending to P1
</span><br>
<span class="quotelev1">&gt; P0: Waiting to receive from P1
</span><br>
<span class="quotelev1">&gt; I am process 1 on node bro128
</span><br>
<span class="quotelev1">&gt; P1: Waiting to receive from to P0
</span><br>
<span class="quotelev1">&gt; P0: Received from to P1
</span><br>
<span class="quotelev1">&gt; Run 2 of 3
</span><br>
<span class="quotelev1">&gt; P0: Sending to P1
</span><br>
<span class="quotelev1">&gt; P0: Waiting to receive from P1
</span><br>
<span class="quotelev1">&gt; P1: Sending to to P0
</span><br>
<span class="quotelev1">&gt; P1: Waiting to receive from to P0
</span><br>
<span class="quotelev1">&gt; P0: Received from to P1
</span><br>
<span class="quotelev1">&gt; Run 3 of 3
</span><br>
<span class="quotelev1">&gt; P0: Sending to P1
</span><br>
<span class="quotelev1">&gt; P0: Waiting to receive from P1
</span><br>
<span class="quotelev1">&gt; P1: Sending to to P0
</span><br>
<span class="quotelev1">&gt; P1: Waiting to receive from to P0
</span><br>
<span class="quotelev1">&gt; P1: Sending to to P0
</span><br>
<span class="quotelev1">&gt; P1: Done
</span><br>
<span class="quotelev1">&gt; P0: Received from to P1
</span><br>
<span class="quotelev1">&gt; P0: Done
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; o Using eth2 only:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [roberpj_at_bro127:~/samples/mpi_test] /opt/sharcnet/openmpi/1.6.5/intel-debug/bin/mpirun -np 2 --mca btl tcp,sm,self --mca btl_tcp_i
</span><br>
<span class="quotelev1">&gt; f_include eth0,eth2 --host bro127,bro128 ./a.out
</span><br>
<span class="quotelev1">&gt; Number of processes = 2
</span><br>
<span class="quotelev1">&gt; Test repeated 3 times for reliability
</span><br>
<span class="quotelev1">&gt; I am process 0 on node bro127
</span><br>
<span class="quotelev1">&gt; Run 1 of 3
</span><br>
<span class="quotelev1">&gt; P0: Sending to P1
</span><br>
<span class="quotelev1">&gt; P0: Waiting to receive from P1
</span><br>
<span class="quotelev1">&gt; I am process 1 on node bro128
</span><br>
<span class="quotelev1">&gt; P1: Waiting to receive from to P0
</span><br>
<span class="quotelev1">&gt; ^Cmpirun: killing job...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; o Using eth0,eth2 with verbosity:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [roberpj_at_bro127:~/samples/mpi_test] /opt/sharcnet/openmpi/1.6.5/intel-debug/bin/mpirun -np 2 --mca btl tcp,sm,self --mca btl_tcp_i
</span><br>
<span class="quotelev1">&gt; f_include eth0,eth2 --mca btl_base_verbose 100 --host bro127,bro128 ./a.out
</span><br>
<span class="quotelev1">&gt; [bro127:20157] mca: base: components_open: Looking for btl components
</span><br>
<span class="quotelev1">&gt; [bro127:20157] mca: base: components_open: opening btl components
</span><br>
<span class="quotelev1">&gt; [bro127:20157] mca: base: components_open: found loaded component self
</span><br>
<span class="quotelev1">&gt; [bro127:20157] mca: base: components_open: component self has no register function
</span><br>
<span class="quotelev1">&gt; [bro127:20157] mca: base: components_open: component self open function successful
</span><br>
<span class="quotelev1">&gt; [bro127:20157] mca: base: components_open: found loaded component sm
</span><br>
<span class="quotelev1">&gt; [bro127:20157] mca: base: components_open: component sm has no register function
</span><br>
<span class="quotelev1">&gt; [bro128:23354] mca: base: components_open: Looking for btl components
</span><br>
<span class="quotelev1">&gt; [bro127:20157] mca: base: components_open: component sm open function successful
</span><br>
<span class="quotelev1">&gt; [bro127:20157] mca: base: components_open: found loaded component tcp
</span><br>
<span class="quotelev1">&gt; [bro127:20157] mca: base: components_open: component tcp register function successful
</span><br>
<span class="quotelev1">&gt; [bro127:20157] mca: base: components_open: component tcp open function successful
</span><br>
<span class="quotelev1">&gt; [bro128:23354] mca: base: components_open: opening btl components
</span><br>
<span class="quotelev1">&gt; [bro128:23354] mca: base: components_open: found loaded component self
</span><br>
<span class="quotelev1">&gt; [bro128:23354] mca: base: components_open: component self has no register function
</span><br>
<span class="quotelev1">&gt; [bro128:23354] mca: base: components_open: component self open function successful
</span><br>
<span class="quotelev1">&gt; [bro128:23354] mca: base: components_open: found loaded component sm
</span><br>
<span class="quotelev1">&gt; [bro128:23354] mca: base: components_open: component sm has no register function
</span><br>
<span class="quotelev1">&gt; [bro128:23354] mca: base: components_open: component sm open function successful
</span><br>
<span class="quotelev1">&gt; [bro128:23354] mca: base: components_open: found loaded component tcp
</span><br>
<span class="quotelev1">&gt; [bro128:23354] mca: base: components_open: component tcp register function successful
</span><br>
<span class="quotelev1">&gt; [bro128:23354] mca: base: components_open: component tcp open function successful
</span><br>
<span class="quotelev1">&gt; [bro127:20157] select: initializing btl component self
</span><br>
<span class="quotelev1">&gt; [bro127:20157] select: init of component self returned success
</span><br>
<span class="quotelev1">&gt; [bro127:20157] select: initializing btl component sm
</span><br>
<span class="quotelev1">&gt; [bro127:20157] select: init of component sm returned success
</span><br>
<span class="quotelev1">&gt; [bro127:20157] select: initializing btl component tcp
</span><br>
<span class="quotelev1">&gt; [bro127:20157] select: init of component tcp returned success
</span><br>
<span class="quotelev1">&gt; [bro128:23354] select: initializing btl component self
</span><br>
<span class="quotelev1">&gt; [bro128:23354] select: init of component self returned success
</span><br>
<span class="quotelev1">&gt; [bro128:23354] select: initializing btl component sm
</span><br>
<span class="quotelev1">&gt; [bro128:23354] select: init of component sm returned success
</span><br>
<span class="quotelev1">&gt; [bro128:23354] select: initializing btl component tcp
</span><br>
<span class="quotelev1">&gt; [bro128:23354] select: init of component tcp returned success
</span><br>
<span class="quotelev1">&gt; [bro127:20157] btl: tcp: attempting to connect() to address 10.27.2.128 on port 4
</span><br>
<span class="quotelev1">&gt; Number of processes = 2
</span><br>
<span class="quotelev1">&gt; Test repeated 3 times for reliability
</span><br>
<span class="quotelev1">&gt; [bro128:23354] btl: tcp: attempting to connect() to address 10.27.2.127 on port 4
</span><br>
<span class="quotelev1">&gt; I am process 0 on node bro127
</span><br>
<span class="quotelev1">&gt; Run 1 of 3
</span><br>
<span class="quotelev1">&gt; P0: Sending to P1
</span><br>
<span class="quotelev1">&gt; [bro127:20157] btl: tcp: attempting to connect() to address 10.29.4.128 on port 4
</span><br>
<span class="quotelev1">&gt; P0: Waiting to receive from P1
</span><br>
<span class="quotelev1">&gt; I am process 1 on node bro128
</span><br>
<span class="quotelev1">&gt; P1: Waiting to receive from to P0
</span><br>
<span class="quotelev1">&gt; [bro127][[9184,1],0][../../../../../../openmpi-1.6.5/ompi/mca/btl/tcp/btl_tcp_frag.c:215
</span><br>
<span class="quotelev1">&gt; :mca_btl_tcp_frag_recv] mca_btl_tcp_frag_recv: readv failed: Connection timed out (110)
</span><br>
<span class="quotelev1">&gt; ^C mpirun: killing job...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; o Master node bro127 debugging info:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [roberpj_at_bro127:~] gdb -p 21067
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0x00002ac7ae4a86f3 in __epoll_wait_nocancel () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #1  0x00002ac7acc3dedc in epoll_dispatch (base=0x3, arg=0x1916850, tv=0x20) at ../../../../openmpi-1.6.5/opal/event/epoll.c:215
</span><br>
<span class="quotelev1">&gt; #2  0x00002ac7acc3f276 in opal_event_base_loop (base=0x3, flags=26306640) at ../../../../openmpi-1.6.5/opal/event/event.c:838
</span><br>
<span class="quotelev1">&gt; #3  0x00002ac7acc3f122 in opal_event_loop (flags=3) at ../../../../openmpi-1.6.5/opal/event/event.c:766
</span><br>
<span class="quotelev1">&gt; #4  0x00002ac7acc82c14 in opal_progress () at ../../../openmpi-1.6.5/opal/runtime/opal_progress.c:189
</span><br>
<span class="quotelev1">&gt; #5  0x00002ac7b21a8c40 in mca_pml_ob1_recv (addr=0x3, count=26306640, datatype=0x20, src=-1, tag=0, comm=0x80000, status=0x7fff15ad5f38)
</span><br>
<span class="quotelev1">&gt;    at ../../../../../../openmpi-1.6.5/ompi/mca/pml/ob1/pml_ob1_irecv.c:105
</span><br>
<span class="quotelev1">&gt; #6  0x00002ac7acb830f7 in PMPI_Recv (buf=0x3, count=26306640, type=0x20, source=-1, tag=0, comm=0x80000, status=0x4026e0) at precv.c:78
</span><br>
<span class="quotelev1">&gt; #7  0x0000000000402b65 in main (argc=1, argv=0x7fff15ad6098) at mpi_test.c:72
</span><br>
<span class="quotelev1">&gt; (gdb) frame 7
</span><br>
<span class="quotelev1">&gt; #7  0x0000000000402b65 in main (argc=1, argv=0x7fff15ad6098) at mpi_test.c:72
</span><br>
<span class="quotelev1">&gt; 72               MPI_Recv(&amp;A[0], M, MPI_DOUBLE, procs-1, msgid, MPI_COMM_WORLD, &amp;stat);
</span><br>
<span class="quotelev1">&gt; (gdb)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; confirming ...
</span><br>
<span class="quotelev1">&gt; [root_at_bro127:~] iptables --list
</span><br>
<span class="quotelev1">&gt; Chain INPUT (policy ACCEPT)
</span><br>
<span class="quotelev1">&gt; target     prot opt source               destination
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Chain FORWARD (policy ACCEPT)
</span><br>
<span class="quotelev1">&gt; target     prot opt source               destination
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Chain OUTPUT (policy ACCEPT)
</span><br>
<span class="quotelev1">&gt; target     prot opt source               destination
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; o Slave node bro128 debugging info:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [roberpj_at_bro128:~]  top -u roberpj
</span><br>
<span class="quotelev1">&gt;  PID USER      PR  NI  VIRT  RES  SHR S %CPU %MEM    TIME+  COMMAND
</span><br>
<span class="quotelev1">&gt; 24334 roberpj   20   0  115m 5208 3216 R 100.0  0.0   2:32.12 a.out
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [roberpj_at_bro128:~] gdb -p 24334
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0x00002b7475cc86f3 in __epoll_wait_nocancel () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #1  0x00002b747445dedc in epoll_dispatch (base=0x3, arg=0x9b6850, tv=0x20) at ../../../../openmpi-1.6.5/opal/event/epoll.c:215
</span><br>
<span class="quotelev1">&gt; #2  0x00002b747445f276 in opal_event_base_loop (base=0x3, flags=10184784) at ../../../../openmpi-1.6.5/opal/event/event.c:838
</span><br>
<span class="quotelev1">&gt; #3  0x00002b747445f122 in opal_event_loop (flags=3) at ../../../../openmpi-1.6.5/opal/event/event.c:766
</span><br>
<span class="quotelev1">&gt; #4  0x00002b74744a2c14 in opal_progress () at ../../../openmpi-1.6.5/opal/runtime/opal_progress.c:189
</span><br>
<span class="quotelev1">&gt; #5  0x00002b74799c8c40 in mca_pml_ob1_recv (addr=0x3, count=10184784, datatype=0x20, src=-1, tag=10899040, comm=0x0, status=0x7fff1ce5e778)
</span><br>
<span class="quotelev1">&gt;    at ../../../../../../openmpi-1.6.5/ompi/mca/pml/ob1/pml_ob1_irecv.c:105
</span><br>
<span class="quotelev1">&gt; #6  0x00002b74743a30f7 in PMPI_Recv (buf=0x3, count=10184784, type=0x20, source=-1, tag=10899040, comm=0x0, status=0x4026e0) at precv.c:78
</span><br>
<span class="quotelev1">&gt; #7  0x0000000000402c40 in main (argc=1, argv=0x7fff1ce5e8d8) at mpi_test.c:76
</span><br>
<span class="quotelev1">&gt; (gdb) frame 7
</span><br>
<span class="quotelev1">&gt; #7  0x0000000000402c40 in main (argc=1, argv=0x7fff1ce5e8d8) at mpi_test.c:76
</span><br>
<span class="quotelev1">&gt; 76               MPI_Recv(&amp;A[0], M, MPI_DOUBLE, myid-1, msgid, MPI_COMM_WORLD, &amp;stat);
</span><br>
<span class="quotelev1">&gt; (gdb)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; confirming ...
</span><br>
<span class="quotelev1">&gt; [root_at_bro128:~] iptables --list
</span><br>
<span class="quotelev1">&gt; Chain INPUT (policy ACCEPT)
</span><br>
<span class="quotelev1">&gt; target     prot opt source               destination
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Chain FORWARD (policy ACCEPT)
</span><br>
<span class="quotelev1">&gt; target     prot opt source               destination
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Chain OUTPUT (policy ACCEPT)
</span><br>
<span class="quotelev1">&gt; target     prot opt source               destination
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
<li><strong>Next message:</strong> <a href="23440.php">Jeff Squyres (jsquyres): "Re: [OMPI users] simple test problem hangs	on	mpi_finalize	and	consumes all system resources"</a>
<li><strong>Previous message:</strong> <a href="23438.php">Doug Roberts: "Re: [OMPI users] Connection timed out with multiple nodes"</a>
<li><strong>In reply to:</strong> <a href="23438.php">Doug Roberts: "Re: [OMPI users] Connection timed out with multiple nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23518.php">Doug Roberts: "Re: [OMPI users] Connection timed out with multiple nodes"</a>
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
