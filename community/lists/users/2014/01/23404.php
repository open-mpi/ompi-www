<?
$subject_val = "[OMPI users] Connection timed out with multiple nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 17 19:59:36 2014" -->
<!-- isoreceived="20140118005936" -->
<!-- sent="Fri, 17 Jan 2014 19:59:36 -0500 (EST)" -->
<!-- isosent="20140118005936" -->
<!-- name="Doug Roberts" -->
<!-- email="roberpj_at_[hidden]" -->
<!-- subject="[OMPI users] Connection timed out with multiple nodes" -->
<!-- id="alpine.LRH.2.02.1401171900170.16853_at_localhost.localdomain" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] Connection timed out with multiple nodes<br>
<strong>From:</strong> Doug Roberts (<em>roberpj_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-17 19:59:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23405.php">Ralph Castain: "Re: [OMPI users] Connection timed out with multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="23403.php">Saliya Ekanayake: "Re: [OMPI users] How to use non-primitive types with Java binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23405.php">Ralph Castain: "Re: [OMPI users] Connection timed out with multiple nodes"</a>
<li><strong>Reply:</strong> <a href="23405.php">Ralph Castain: "Re: [OMPI users] Connection timed out with multiple nodes"</a>
<li><strong>Maybe reply:</strong> <a href="23438.php">Doug Roberts: "Re: [OMPI users] Connection timed out with multiple nodes"</a>
<li><strong>Maybe reply:</strong> <a href="23518.php">Doug Roberts: "Re: [OMPI users] Connection timed out with multiple nodes"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/02/23645.php">Doug Roberts: "Re: [OMPI users] Connection timed out with multiple nodes"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/02/23675.php">Doug Roberts: "Re: [OMPI users] Connection timed out with multiple nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
1) When openmpi programs run across multiple nodes they hang
<br>
rather  quickly as shown in the mpi_test example below. Note
<br>
that I am assuming the initital topology error message is a
<br>
separate issue since single node openmpi jobs run just fine.
<br>
<p>[roberpj_at_bro127:~/samples/mpi_test] 
<br>
/opt/sharcnet/openmpi/1.6.5/intel/bin/mpirun -np 2 --mca btl tcp,sm,self 
<br>
--mca btl_tcp_if_include eth0,eth2 --mc
<br>
a btl_base_verbose 30 --debug-daemons --host bro127,bro128 ./a.out
<br>
Daemon was launched on bro128 - beginning to initialize
<br>
****************************************************************************
<br>
* Hwloc has encountered what looks like an error from the operating 
<br>
system.
<br>
*
<br>
* object intersection without inclusion!
<br>
* Error occurred in topology.c line 594
<br>
*
<br>
* Please report this error message to the hwloc user's mailing list,
<br>
* along with the output from the hwloc-gather-topology.sh script.
<br>
****************************************************************************
<br>
Daemon [[9945,0],1] checking in as pid 20978 on host bro128
<br>
[bro127:19340] [[9945,0],0] orted_cmd: received add_local_procs
<br>
[bro128:20978] [[9945,0],1] orted: up and running - waiting for commands!
<br>
[bro128:20978] [[9945,0],1] node[0].name bro127 daemon 0
<br>
[bro128:20978] [[9945,0],1] node[1].name bro128 daemon 1
<br>
[bro128:20978] [[9945,0],1] orted_cmd: received add_local_procs
<br>
&nbsp;&nbsp;&nbsp;MPIR_being_debugged = 0
<br>
&nbsp;&nbsp;&nbsp;MPIR_debug_state = 1
<br>
&nbsp;&nbsp;&nbsp;MPIR_partial_attach_ok = 1
<br>
&nbsp;&nbsp;&nbsp;MPIR_i_am_starter = 0
<br>
&nbsp;&nbsp;&nbsp;MPIR_forward_output = 0
<br>
&nbsp;&nbsp;&nbsp;MPIR_proctable_size = 2
<br>
&nbsp;&nbsp;&nbsp;MPIR_proctable:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (0, bro127, 
<br>
/home/roberpj/samples/mpi_test/./a.out, 19348)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (1, bro128, 
<br>
/home/roberpj/samples/mpi_test/./a.out, 20979)
<br>
MPIR_executable_path: NULL
<br>
MPIR_server_arguments: NULL
<br>
[bro128:20978] [[9945,0],1] orted_recv: received sync+nidmap from local 
<br>
proc [[9945,1],1]
<br>
[bro127:19340] [[9945,0],0] orted_recv: received sync+nidmap from local 
<br>
proc [[9945,1],0]
<br>
[bro128:20979] mca: base: components_open: Looking for btl components
<br>
[bro127:19348] mca: base: components_open: Looking for btl components
<br>
[bro128:20979] mca: base: components_open: opening btl components
<br>
[bro128:20979] mca: base: components_open: found loaded component self
<br>
[bro128:20979] mca: base: components_open: component self has no register 
<br>
function
<br>
[bro128:20979] mca: base: components_open: component self open function 
<br>
successful
<br>
[bro128:20979] mca: base: components_open: found loaded component sm
<br>
[bro128:20979] mca: base: components_open: component sm has no register 
<br>
function
<br>
[bro128:20979] mca: base: components_open: component sm open function 
<br>
successful
<br>
[bro128:20979] mca: base: components_open: found loaded component tcp
<br>
[bro128:20979] mca: base: components_open: component tcp register function 
<br>
successful
<br>
[bro128:20979] mca: base: components_open: component tcp open function 
<br>
successful
<br>
[bro127:19348] mca: base: components_open: opening btl components
<br>
[bro127:19348] mca: base: components_open: found loaded component self
<br>
[bro127:19348] mca: base: components_open: component self has no register 
<br>
function
<br>
[bro127:19348] mca: base: components_open: component self open function 
<br>
successful
<br>
[bro127:19348] mca: base: components_open: found loaded component sm
<br>
[bro127:19348] mca: base: components_open: component sm has no register 
<br>
function
<br>
[bro127:19348] mca: base: components_open: component sm open function 
<br>
successful
<br>
[bro127:19348] mca: base: components_open: found loaded component tcp
<br>
[bro127:19348] mca: base: components_open: component tcp register function 
<br>
successful
<br>
[bro127:19348] mca: base: components_open: component tcp open function 
<br>
successful
<br>
[bro128:20979] select: initializing btl component self
<br>
[bro128:20979] select: init of component self returned success
<br>
[bro128:20979] select: initializing btl component sm
<br>
[bro128:20979] select: init of component sm returned success
<br>
[bro128:20979] select: initializing btl component tcp
<br>
[bro128:20979] select: init of component tcp returned success
<br>
[bro127:19348] select: initializing btl component self
<br>
[bro127:19348] select: init of component self returned success
<br>
[bro127:19348] select: initializing btl component sm
<br>
[bro127:19348] select: init of component sm returned success
<br>
[bro127:19348] select: initializing btl component tcp
<br>
[bro127:19348] select: init of component tcp returned success
<br>
[bro127:19340] [[9945,0],0] orted_cmd: received message_local_procs
<br>
[bro128:20978] [[9945,0],1] orted_cmd: received message_local_procs
<br>
[bro127:19340] [[9945,0],0] orted_cmd: received message_local_procs
<br>
[bro128:20978] [[9945,0],1] orted_cmd: received message_local_procs
<br>
[bro127:19348] btl: tcp: attempting to connect() to address 10.27.2.128 on 
<br>
port 4
<br>
Number of processes = 2
<br>
Test repeated 3 times for reliability
<br>
[bro128:20979] btl: tcp: attempting to connect() to address 10.27.2.127 on 
<br>
port 4
<br>
[bro127:19348] btl: tcp: attempting to connect() to address 10.29.4.128 on 
<br>
port 4
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
[bro127][[9945,1],0][../../../../../../openmpi-1.6.5/ompi/mca/btl/tcp/btl_tcp_frag.c:215:mca_btl_tcp_frag_recv]
<br>
&nbsp;&nbsp;&nbsp;mca_btl_tcp_frag_recv: readv failed: Connection timed out (110)
<br>
^C
<br>
mpirun: killing job...
<br>
Killed by signal 2.
<br>
[bro127:19340] [[9945,0],0] orted_cmd: received exit cmd
<br>
[bro127:19340] [[9945,0],0] orted_cmd: received iof_complete cmd
<br>
<p><p>2) The interfaces on bro127, bro128 compute nodes include a 1g 
<br>
network on eth0 and a high speed 10GB network on eth2 such as ...
<br>
<p>[roberpj_at_bro127:~] ifconfig
<br>
eth0      Link encap:Ethernet  HWaddr 00:E0:81:C7:A8:E3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:10.27.2.127  Bcast:10.27.2.255  Mask:255.255.254.0
<br>
<p>eth2      Link encap:Ethernet  HWaddr 90:E2:BA:2D:83:F0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:10.29.4.127  Bcast:10.29.63.255  Mask:255.255.192.0
<br>
<p>lo        Link encap:Local Loopback
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:127.0.0.1  Mask:255.0.0.0
<br>
<p><p>3) Hostnames resolve and can connect between the 10. addresses
<br>
using ssh without passwords on the internal network ...
<br>
<p>[roberpj_at_bro127:~] host bro127
<br>
bro127.brown.sharcnet has address 10.27.2.127
<br>
[roberpj_at_bro127:~] host bro128
<br>
bro128.brown.sharcnet has address 10.27.2.128
<br>
[roberpj_at_bro127:~] host ic-bro127
<br>
ic-bro127.brown.sharcnet has address 10.29.4.127
<br>
[roberpj_at_bro127:~] host ic-bro128
<br>
ic-bro128.brown.sharcnet has address 10.29.4.128
<br>
<p>[roberpj_at_bro127:~] ssh bro128
<br>
[roberpj_at_bro128:~]
<br>
[roberpj_at_bro127:~] ssh ic-bro128
<br>
[roberpj_at_bro128:~]
<br>
<p><p>4) I'm attaching the output file &quot;ompi_info--all_bro127.out.bz2&quot; created
<br>
by running command:  ompi_info --all &gt;&amp; ompi_info--all_bro127.out in case
<br>
that helps.  If anything else is needed pls let me know, thankyou. -Doug
<br>

<br><hr>
<ul>
<li>APPLICATION/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23404/ompi_info--all_bro127.out.bz2">ompi_info--all_bro127.out.bz2</a>
</ul>
<!-- attachment="ompi_info--all_bro127.out.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23405.php">Ralph Castain: "Re: [OMPI users] Connection timed out with multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="23403.php">Saliya Ekanayake: "Re: [OMPI users] How to use non-primitive types with Java binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23405.php">Ralph Castain: "Re: [OMPI users] Connection timed out with multiple nodes"</a>
<li><strong>Reply:</strong> <a href="23405.php">Ralph Castain: "Re: [OMPI users] Connection timed out with multiple nodes"</a>
<li><strong>Maybe reply:</strong> <a href="23438.php">Doug Roberts: "Re: [OMPI users] Connection timed out with multiple nodes"</a>
<li><strong>Maybe reply:</strong> <a href="23518.php">Doug Roberts: "Re: [OMPI users] Connection timed out with multiple nodes"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/02/23645.php">Doug Roberts: "Re: [OMPI users] Connection timed out with multiple nodes"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/02/23675.php">Doug Roberts: "Re: [OMPI users] Connection timed out with multiple nodes"</a>
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
