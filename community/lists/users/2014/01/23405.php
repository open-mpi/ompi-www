<?
$subject_val = "Re: [OMPI users] Connection timed out with multiple nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 17 22:24:58 2014" -->
<!-- isoreceived="20140118032458" -->
<!-- sent="Fri, 17 Jan 2014 19:24:50 -0800" -->
<!-- isosent="20140118032450" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Connection timed out with multiple nodes" -->
<!-- id="8F96457C-9F4D-4B8A-8BF0-A91FF992090C_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="alpine.LRH.2.02.1401171900170.16853_at_localhost.localdomain" -->
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
<strong>Date:</strong> 2014-01-17 22:24:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23406.php">Siegmar Gross: "Re: [OMPI users] How to use non-primitive types with Java binding"</a>
<li><strong>Previous message:</strong> <a href="23404.php">Doug Roberts: "[OMPI users] Connection timed out with multiple nodes"</a>
<li><strong>In reply to:</strong> <a href="23404.php">Doug Roberts: "[OMPI users] Connection timed out with multiple nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23438.php">Doug Roberts: "Re: [OMPI users] Connection timed out with multiple nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The most common cause of this problem is a firewall between the nodes - you can ssh across, but not communicate. Have you checked to see that the firewall is turned off?
<br>
<p>On Jan 17, 2014, at 4:59 PM, Doug Roberts &lt;roberpj_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1) When openmpi programs run across multiple nodes they hang
</span><br>
<span class="quotelev1">&gt; rather  quickly as shown in the mpi_test example below. Note
</span><br>
<span class="quotelev1">&gt; that I am assuming the initital topology error message is a
</span><br>
<span class="quotelev1">&gt; separate issue since single node openmpi jobs run just fine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [roberpj_at_bro127:~/samples/mpi_test] /opt/sharcnet/openmpi/1.6.5/intel/bin/mpirun -np 2 --mca btl tcp,sm,self --mca btl_tcp_if_include eth0,eth2 --mc
</span><br>
<span class="quotelev1">&gt; a btl_base_verbose 30 --debug-daemons --host bro127,bro128 ./a.out
</span><br>
<span class="quotelev1">&gt; Daemon was launched on bro128 - beginning to initialize
</span><br>
<span class="quotelev1">&gt; ****************************************************************************
</span><br>
<span class="quotelev1">&gt; * Hwloc has encountered what looks like an error from the operating system.
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; * object intersection without inclusion!
</span><br>
<span class="quotelev1">&gt; * Error occurred in topology.c line 594
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; * Please report this error message to the hwloc user's mailing list,
</span><br>
<span class="quotelev1">&gt; * along with the output from the hwloc-gather-topology.sh script.
</span><br>
<span class="quotelev1">&gt; ****************************************************************************
</span><br>
<span class="quotelev1">&gt; Daemon [[9945,0],1] checking in as pid 20978 on host bro128
</span><br>
<span class="quotelev1">&gt; [bro127:19340] [[9945,0],0] orted_cmd: received add_local_procs
</span><br>
<span class="quotelev1">&gt; [bro128:20978] [[9945,0],1] orted: up and running - waiting for commands!
</span><br>
<span class="quotelev1">&gt; [bro128:20978] [[9945,0],1] node[0].name bro127 daemon 0
</span><br>
<span class="quotelev1">&gt; [bro128:20978] [[9945,0],1] node[1].name bro128 daemon 1
</span><br>
<span class="quotelev1">&gt; [bro128:20978] [[9945,0],1] orted_cmd: received add_local_procs
</span><br>
<span class="quotelev1">&gt;  MPIR_being_debugged = 0
</span><br>
<span class="quotelev1">&gt;  MPIR_debug_state = 1
</span><br>
<span class="quotelev1">&gt;  MPIR_partial_attach_ok = 1
</span><br>
<span class="quotelev1">&gt;  MPIR_i_am_starter = 0
</span><br>
<span class="quotelev1">&gt;  MPIR_forward_output = 0
</span><br>
<span class="quotelev1">&gt;  MPIR_proctable_size = 2
</span><br>
<span class="quotelev1">&gt;  MPIR_proctable:
</span><br>
<span class="quotelev1">&gt;    (i, host, exe, pid) = (0, bro127, /home/roberpj/samples/mpi_test/./a.out, 19348)
</span><br>
<span class="quotelev1">&gt;    (i, host, exe, pid) = (1, bro128, /home/roberpj/samples/mpi_test/./a.out, 20979)
</span><br>
<span class="quotelev1">&gt; MPIR_executable_path: NULL
</span><br>
<span class="quotelev1">&gt; MPIR_server_arguments: NULL
</span><br>
<span class="quotelev1">&gt; [bro128:20978] [[9945,0],1] orted_recv: received sync+nidmap from local proc [[9945,1],1]
</span><br>
<span class="quotelev1">&gt; [bro127:19340] [[9945,0],0] orted_recv: received sync+nidmap from local proc [[9945,1],0]
</span><br>
<span class="quotelev1">&gt; [bro128:20979] mca: base: components_open: Looking for btl components
</span><br>
<span class="quotelev1">&gt; [bro127:19348] mca: base: components_open: Looking for btl components
</span><br>
<span class="quotelev1">&gt; [bro128:20979] mca: base: components_open: opening btl components
</span><br>
<span class="quotelev1">&gt; [bro128:20979] mca: base: components_open: found loaded component self
</span><br>
<span class="quotelev1">&gt; [bro128:20979] mca: base: components_open: component self has no register function
</span><br>
<span class="quotelev1">&gt; [bro128:20979] mca: base: components_open: component self open function successful
</span><br>
<span class="quotelev1">&gt; [bro128:20979] mca: base: components_open: found loaded component sm
</span><br>
<span class="quotelev1">&gt; [bro128:20979] mca: base: components_open: component sm has no register function
</span><br>
<span class="quotelev1">&gt; [bro128:20979] mca: base: components_open: component sm open function successful
</span><br>
<span class="quotelev1">&gt; [bro128:20979] mca: base: components_open: found loaded component tcp
</span><br>
<span class="quotelev1">&gt; [bro128:20979] mca: base: components_open: component tcp register function successful
</span><br>
<span class="quotelev1">&gt; [bro128:20979] mca: base: components_open: component tcp open function successful
</span><br>
<span class="quotelev1">&gt; [bro127:19348] mca: base: components_open: opening btl components
</span><br>
<span class="quotelev1">&gt; [bro127:19348] mca: base: components_open: found loaded component self
</span><br>
<span class="quotelev1">&gt; [bro127:19348] mca: base: components_open: component self has no register function
</span><br>
<span class="quotelev1">&gt; [bro127:19348] mca: base: components_open: component self open function successful
</span><br>
<span class="quotelev1">&gt; [bro127:19348] mca: base: components_open: found loaded component sm
</span><br>
<span class="quotelev1">&gt; [bro127:19348] mca: base: components_open: component sm has no register function
</span><br>
<span class="quotelev1">&gt; [bro127:19348] mca: base: components_open: component sm open function successful
</span><br>
<span class="quotelev1">&gt; [bro127:19348] mca: base: components_open: found loaded component tcp
</span><br>
<span class="quotelev1">&gt; [bro127:19348] mca: base: components_open: component tcp register function successful
</span><br>
<span class="quotelev1">&gt; [bro127:19348] mca: base: components_open: component tcp open function successful
</span><br>
<span class="quotelev1">&gt; [bro128:20979] select: initializing btl component self
</span><br>
<span class="quotelev1">&gt; [bro128:20979] select: init of component self returned success
</span><br>
<span class="quotelev1">&gt; [bro128:20979] select: initializing btl component sm
</span><br>
<span class="quotelev1">&gt; [bro128:20979] select: init of component sm returned success
</span><br>
<span class="quotelev1">&gt; [bro128:20979] select: initializing btl component tcp
</span><br>
<span class="quotelev1">&gt; [bro128:20979] select: init of component tcp returned success
</span><br>
<span class="quotelev1">&gt; [bro127:19348] select: initializing btl component self
</span><br>
<span class="quotelev1">&gt; [bro127:19348] select: init of component self returned success
</span><br>
<span class="quotelev1">&gt; [bro127:19348] select: initializing btl component sm
</span><br>
<span class="quotelev1">&gt; [bro127:19348] select: init of component sm returned success
</span><br>
<span class="quotelev1">&gt; [bro127:19348] select: initializing btl component tcp
</span><br>
<span class="quotelev1">&gt; [bro127:19348] select: init of component tcp returned success
</span><br>
<span class="quotelev1">&gt; [bro127:19340] [[9945,0],0] orted_cmd: received message_local_procs
</span><br>
<span class="quotelev1">&gt; [bro128:20978] [[9945,0],1] orted_cmd: received message_local_procs
</span><br>
<span class="quotelev1">&gt; [bro127:19340] [[9945,0],0] orted_cmd: received message_local_procs
</span><br>
<span class="quotelev1">&gt; [bro128:20978] [[9945,0],1] orted_cmd: received message_local_procs
</span><br>
<span class="quotelev1">&gt; [bro127:19348] btl: tcp: attempting to connect() to address 10.27.2.128 on port 4
</span><br>
<span class="quotelev1">&gt; Number of processes = 2
</span><br>
<span class="quotelev1">&gt; Test repeated 3 times for reliability
</span><br>
<span class="quotelev1">&gt; [bro128:20979] btl: tcp: attempting to connect() to address 10.27.2.127 on port 4
</span><br>
<span class="quotelev1">&gt; [bro127:19348] btl: tcp: attempting to connect() to address 10.29.4.128 on port 4
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
<span class="quotelev1">&gt; [bro127][[9945,1],0][../../../../../../openmpi-1.6.5/ompi/mca/btl/tcp/btl_tcp_frag.c:215:mca_btl_tcp_frag_recv]
</span><br>
<span class="quotelev1">&gt;  mca_btl_tcp_frag_recv: readv failed: Connection timed out (110)
</span><br>
<span class="quotelev1">&gt; ^C
</span><br>
<span class="quotelev1">&gt; mpirun: killing job...
</span><br>
<span class="quotelev1">&gt; Killed by signal 2.
</span><br>
<span class="quotelev1">&gt; [bro127:19340] [[9945,0],0] orted_cmd: received exit cmd
</span><br>
<span class="quotelev1">&gt; [bro127:19340] [[9945,0],0] orted_cmd: received iof_complete cmd
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2) The interfaces on bro127, bro128 compute nodes include a 1g network on eth0 and a high speed 10GB network on eth2 such as ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [roberpj_at_bro127:~] ifconfig
</span><br>
<span class="quotelev1">&gt; eth0      Link encap:Ethernet  HWaddr 00:E0:81:C7:A8:E3
</span><br>
<span class="quotelev1">&gt;          inet addr:10.27.2.127  Bcast:10.27.2.255  Mask:255.255.254.0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; eth2      Link encap:Ethernet  HWaddr 90:E2:BA:2D:83:F0
</span><br>
<span class="quotelev1">&gt;          inet addr:10.29.4.127  Bcast:10.29.63.255  Mask:255.255.192.0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; lo        Link encap:Local Loopback
</span><br>
<span class="quotelev1">&gt;          inet addr:127.0.0.1  Mask:255.0.0.0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3) Hostnames resolve and can connect between the 10. addresses
</span><br>
<span class="quotelev1">&gt; using ssh without passwords on the internal network ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [roberpj_at_bro127:~] host bro127
</span><br>
<span class="quotelev1">&gt; bro127.brown.sharcnet has address 10.27.2.127
</span><br>
<span class="quotelev1">&gt; [roberpj_at_bro127:~] host bro128
</span><br>
<span class="quotelev1">&gt; bro128.brown.sharcnet has address 10.27.2.128
</span><br>
<span class="quotelev1">&gt; [roberpj_at_bro127:~] host ic-bro127
</span><br>
<span class="quotelev1">&gt; ic-bro127.brown.sharcnet has address 10.29.4.127
</span><br>
<span class="quotelev1">&gt; [roberpj_at_bro127:~] host ic-bro128
</span><br>
<span class="quotelev1">&gt; ic-bro128.brown.sharcnet has address 10.29.4.128
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [roberpj_at_bro127:~] ssh bro128
</span><br>
<span class="quotelev1">&gt; [roberpj_at_bro128:~]
</span><br>
<span class="quotelev1">&gt; [roberpj_at_bro127:~] ssh ic-bro128
</span><br>
<span class="quotelev1">&gt; [roberpj_at_bro128:~]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 4) I'm attaching the output file &quot;ompi_info--all_bro127.out.bz2&quot; created
</span><br>
<span class="quotelev1">&gt; by running command:  ompi_info --all &gt;&amp; ompi_info--all_bro127.out in case
</span><br>
<span class="quotelev1">&gt; that helps.  If anything else is needed pls let me know, thankyou. -Doug&lt;ompi_info--all_bro127.out.bz2&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="23406.php">Siegmar Gross: "Re: [OMPI users] How to use non-primitive types with Java binding"</a>
<li><strong>Previous message:</strong> <a href="23404.php">Doug Roberts: "[OMPI users] Connection timed out with multiple nodes"</a>
<li><strong>In reply to:</strong> <a href="23404.php">Doug Roberts: "[OMPI users] Connection timed out with multiple nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23438.php">Doug Roberts: "Re: [OMPI users] Connection timed out with multiple nodes"</a>
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
