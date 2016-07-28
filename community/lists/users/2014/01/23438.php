<?
$subject_val = "Re: [OMPI users] Connection timed out with multiple nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 23 20:38:50 2014" -->
<!-- isoreceived="20140124013850" -->
<!-- sent="Thu, 23 Jan 2014 20:38:49 -0500 (EST)" -->
<!-- isosent="20140124013849" -->
<!-- name="Doug Roberts" -->
<!-- email="roberpj_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Connection timed out with multiple nodes" -->
<!-- id="alpine.LRH.2.02.1401231955030.30917_at_localhost.localdomain" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="mailman.22.1390064404.21784.users_at_open-mpi.org" -->
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
<strong>From:</strong> Doug Roberts (<em>roberpj_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-23 20:38:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23439.php">Ralph Castain: "Re: [OMPI users] Connection timed out with multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="23437.php">Dan Hsu: "[OMPI users] Getting past firewall &amp; something else? in Mac OS X"</a>
<li><strong>Maybe in reply to:</strong> <a href="23404.php">Doug Roberts: "[OMPI users] Connection timed out with multiple nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23439.php">Ralph Castain: "Re: [OMPI users] Connection timed out with multiple nodes"</a>
<li><strong>Reply:</strong> <a href="23439.php">Ralph Castain: "Re: [OMPI users] Connection timed out with multiple nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; Date: Fri, 17 Jan 2014 19:24:50 -0800
</span><br>
<span class="quotelev1">&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The most common cause of this problem is a firewall between the
</span><br>
<span class="quotelev1">&gt; nodes - you can ssh across, but not communicate. Have you checked
</span><br>
<span class="quotelev1">&gt; to see that the firewall is turned off?
</span><br>
<p>Turns out some iptables rules (typical on our clusters) were active.
<br>
They are now turned off for continued testing as suggested. I have
<br>
rerun the mpi_test code, this time using a debug enabled build of 
<br>
openmpi/1.6.5 keeping with the intel compiler.
<br>
<p>As shown below the problem is still there. I'm including some gdb
<br>
output this time. The job is shown to succeed using only eth0 over
<br>
1g but hang nearly immediately when the eth2 over 10g interface is
<br>
included.  Any more suggestions would be greatly appreciated.
<br>
<p>[roberpj_at_bro127:~/samples/mpi_test] mpicc -g mpi_test.c
<br>
<p>o Using eth0 only:
<br>
<p>[roberpj_at_bro127:~/samples/mpi_test] 
<br>
/opt/sharcnet/openmpi/1.6.5/intel-debug/bin/mpirun -np 2 --mca btl 
<br>
tcp,sm,self --mca btl_tcp_i
<br>
f_include eth0 --host bro127,bro128 ./a.out
<br>
Number of processes = 2
<br>
Test repeated 3 times for reliability
<br>
I am process 0 on node bro127
<br>
Run 1 of 3
<br>
P0: Sending to P1
<br>
P0: Waiting to receive from P1
<br>
I am process 1 on node bro128
<br>
P1: Waiting to receive from to P0
<br>
P0: Received from to P1
<br>
Run 2 of 3
<br>
P0: Sending to P1
<br>
P0: Waiting to receive from P1
<br>
P1: Sending to to P0
<br>
P1: Waiting to receive from to P0
<br>
P0: Received from to P1
<br>
Run 3 of 3
<br>
P0: Sending to P1
<br>
P0: Waiting to receive from P1
<br>
P1: Sending to to P0
<br>
P1: Waiting to receive from to P0
<br>
P1: Sending to to P0
<br>
P1: Done
<br>
P0: Received from to P1
<br>
P0: Done
<br>
<p>o Using eth2 only:
<br>
<p>[roberpj_at_bro127:~/samples/mpi_test] 
<br>
/opt/sharcnet/openmpi/1.6.5/intel-debug/bin/mpirun -np 2 --mca btl 
<br>
tcp,sm,self --mca btl_tcp_i
<br>
f_include eth0,eth2 --host bro127,bro128 ./a.out
<br>
Number of processes = 2
<br>
Test repeated 3 times for reliability
<br>
I am process 0 on node bro127
<br>
Run 1 of 3
<br>
P0: Sending to P1
<br>
P0: Waiting to receive from P1
<br>
I am process 1 on node bro128
<br>
P1: Waiting to receive from to P0
<br>
^Cmpirun: killing job...
<br>
<p>o Using eth0,eth2 with verbosity:
<br>
<p>[roberpj_at_bro127:~/samples/mpi_test] 
<br>
/opt/sharcnet/openmpi/1.6.5/intel-debug/bin/mpirun -np 2 --mca btl 
<br>
tcp,sm,self --mca btl_tcp_i
<br>
f_include eth0,eth2 --mca btl_base_verbose 100 --host bro127,bro128 
<br>
./a.out
<br>
[bro127:20157] mca: base: components_open: Looking for btl components
<br>
[bro127:20157] mca: base: components_open: opening btl components
<br>
[bro127:20157] mca: base: components_open: found loaded component self
<br>
[bro127:20157] mca: base: components_open: component self has no register 
<br>
function
<br>
[bro127:20157] mca: base: components_open: component self open function 
<br>
successful
<br>
[bro127:20157] mca: base: components_open: found loaded component sm
<br>
[bro127:20157] mca: base: components_open: component sm has no register 
<br>
function
<br>
[bro128:23354] mca: base: components_open: Looking for btl components
<br>
[bro127:20157] mca: base: components_open: component sm open function 
<br>
successful
<br>
[bro127:20157] mca: base: components_open: found loaded component tcp
<br>
[bro127:20157] mca: base: components_open: component tcp register function 
<br>
successful
<br>
[bro127:20157] mca: base: components_open: component tcp open function 
<br>
successful
<br>
[bro128:23354] mca: base: components_open: opening btl components
<br>
[bro128:23354] mca: base: components_open: found loaded component self
<br>
[bro128:23354] mca: base: components_open: component self has no register 
<br>
function
<br>
[bro128:23354] mca: base: components_open: component self open function 
<br>
successful
<br>
[bro128:23354] mca: base: components_open: found loaded component sm
<br>
[bro128:23354] mca: base: components_open: component sm has no register 
<br>
function
<br>
[bro128:23354] mca: base: components_open: component sm open function 
<br>
successful
<br>
[bro128:23354] mca: base: components_open: found loaded component tcp
<br>
[bro128:23354] mca: base: components_open: component tcp register function 
<br>
successful
<br>
[bro128:23354] mca: base: components_open: component tcp open function 
<br>
successful
<br>
[bro127:20157] select: initializing btl component self
<br>
[bro127:20157] select: init of component self returned success
<br>
[bro127:20157] select: initializing btl component sm
<br>
[bro127:20157] select: init of component sm returned success
<br>
[bro127:20157] select: initializing btl component tcp
<br>
[bro127:20157] select: init of component tcp returned success
<br>
[bro128:23354] select: initializing btl component self
<br>
[bro128:23354] select: init of component self returned success
<br>
[bro128:23354] select: initializing btl component sm
<br>
[bro128:23354] select: init of component sm returned success
<br>
[bro128:23354] select: initializing btl component tcp
<br>
[bro128:23354] select: init of component tcp returned success
<br>
[bro127:20157] btl: tcp: attempting to connect() to address 10.27.2.128 on 
<br>
port 4
<br>
Number of processes = 2
<br>
Test repeated 3 times for reliability
<br>
[bro128:23354] btl: tcp: attempting to connect() to address 10.27.2.127 on 
<br>
port 4
<br>
I am process 0 on node bro127
<br>
Run 1 of 3
<br>
P0: Sending to P1
<br>
[bro127:20157] btl: tcp: attempting to connect() to address 10.29.4.128 on 
<br>
port 4
<br>
P0: Waiting to receive from P1
<br>
I am process 1 on node bro128
<br>
P1: Waiting to receive from to P0
<br>
[bro127][[9184,1],0][../../../../../../openmpi-1.6.5/ompi/mca/btl/tcp/btl_tcp_frag.c:215
<br>
:mca_btl_tcp_frag_recv] mca_btl_tcp_frag_recv: readv failed: Connection 
<br>
timed out (110)
<br>
^C mpirun: killing job...
<br>
<p>o Master node bro127 debugging info:
<br>
<p>[roberpj_at_bro127:~] gdb -p 21067
<br>
(gdb) bt
<br>
#0  0x00002ac7ae4a86f3 in __epoll_wait_nocancel () from /lib64/libc.so.6
<br>
#1  0x00002ac7acc3dedc in epoll_dispatch (base=0x3, arg=0x1916850, 
<br>
tv=0x20) at ../../../../openmpi-1.6.5/opal/event/epoll.c:215
<br>
#2  0x00002ac7acc3f276 in opal_event_base_loop (base=0x3, flags=26306640) 
<br>
at ../../../../openmpi-1.6.5/opal/event/event.c:838
<br>
#3  0x00002ac7acc3f122 in opal_event_loop (flags=3) at 
<br>
../../../../openmpi-1.6.5/opal/event/event.c:766
<br>
#4  0x00002ac7acc82c14 in opal_progress () at 
<br>
../../../openmpi-1.6.5/opal/runtime/opal_progress.c:189
<br>
#5  0x00002ac7b21a8c40 in mca_pml_ob1_recv (addr=0x3, count=26306640, 
<br>
datatype=0x20, src=-1, tag=0, comm=0x80000, status=0x7fff15ad5f38)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at 
<br>
../../../../../../openmpi-1.6.5/ompi/mca/pml/ob1/pml_ob1_irecv.c:105
<br>
#6  0x00002ac7acb830f7 in PMPI_Recv (buf=0x3, count=26306640, type=0x20, 
<br>
source=-1, tag=0, comm=0x80000, status=0x4026e0) at precv.c:78
<br>
#7  0x0000000000402b65 in main (argc=1, argv=0x7fff15ad6098) at 
<br>
mpi_test.c:72
<br>
(gdb) frame 7
<br>
#7  0x0000000000402b65 in main (argc=1, argv=0x7fff15ad6098) at 
<br>
mpi_test.c:72
<br>
72               MPI_Recv(&amp;A[0], M, MPI_DOUBLE, procs-1, msgid, 
<br>
MPI_COMM_WORLD, &amp;stat);
<br>
(gdb)
<br>
<p>confirming ...
<br>
[root_at_bro127:~] iptables --list
<br>
Chain INPUT (policy ACCEPT)
<br>
target     prot opt source               destination
<br>
<p>Chain FORWARD (policy ACCEPT)
<br>
target     prot opt source               destination
<br>
<p>Chain OUTPUT (policy ACCEPT)
<br>
target     prot opt source               destination
<br>
<p>o Slave node bro128 debugging info:
<br>
<p>[roberpj_at_bro128:~]  top -u roberpj
<br>
&nbsp;&nbsp;&nbsp;PID USER      PR  NI  VIRT  RES  SHR S %CPU %MEM    TIME+  COMMAND
<br>
24334 roberpj   20   0  115m 5208 3216 R 100.0  0.0   2:32.12 a.out
<br>
<p>[roberpj_at_bro128:~] gdb -p 24334
<br>
(gdb) bt
<br>
#0  0x00002b7475cc86f3 in __epoll_wait_nocancel () from /lib64/libc.so.6
<br>
#1  0x00002b747445dedc in epoll_dispatch (base=0x3, arg=0x9b6850, tv=0x20) 
<br>
at ../../../../openmpi-1.6.5/opal/event/epoll.c:215
<br>
#2  0x00002b747445f276 in opal_event_base_loop (base=0x3, flags=10184784) 
<br>
at ../../../../openmpi-1.6.5/opal/event/event.c:838
<br>
#3  0x00002b747445f122 in opal_event_loop (flags=3) at 
<br>
../../../../openmpi-1.6.5/opal/event/event.c:766
<br>
#4  0x00002b74744a2c14 in opal_progress () at 
<br>
../../../openmpi-1.6.5/opal/runtime/opal_progress.c:189
<br>
#5  0x00002b74799c8c40 in mca_pml_ob1_recv (addr=0x3, count=10184784, 
<br>
datatype=0x20, src=-1, tag=10899040, comm=0x0, status=0x7fff1ce5e778)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at 
<br>
../../../../../../openmpi-1.6.5/ompi/mca/pml/ob1/pml_ob1_irecv.c:105
<br>
#6  0x00002b74743a30f7 in PMPI_Recv (buf=0x3, count=10184784, type=0x20, 
<br>
source=-1, tag=10899040, comm=0x0, status=0x4026e0) at precv.c:78
<br>
#7  0x0000000000402c40 in main (argc=1, argv=0x7fff1ce5e8d8) at 
<br>
mpi_test.c:76
<br>
(gdb) frame 7
<br>
#7  0x0000000000402c40 in main (argc=1, argv=0x7fff1ce5e8d8) at 
<br>
mpi_test.c:76
<br>
76               MPI_Recv(&amp;A[0], M, MPI_DOUBLE, myid-1, msgid, 
<br>
MPI_COMM_WORLD, &amp;stat);
<br>
(gdb)
<br>
<p>confirming ...
<br>
[root_at_bro128:~] iptables --list
<br>
Chain INPUT (policy ACCEPT)
<br>
target     prot opt source               destination
<br>
<p>Chain FORWARD (policy ACCEPT)
<br>
target     prot opt source               destination
<br>
<p>Chain OUTPUT (policy ACCEPT)
<br>
target     prot opt source               destination
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23439.php">Ralph Castain: "Re: [OMPI users] Connection timed out with multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="23437.php">Dan Hsu: "[OMPI users] Getting past firewall &amp; something else? in Mac OS X"</a>
<li><strong>Maybe in reply to:</strong> <a href="23404.php">Doug Roberts: "[OMPI users] Connection timed out with multiple nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23439.php">Ralph Castain: "Re: [OMPI users] Connection timed out with multiple nodes"</a>
<li><strong>Reply:</strong> <a href="23439.php">Ralph Castain: "Re: [OMPI users] Connection timed out with multiple nodes"</a>
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
