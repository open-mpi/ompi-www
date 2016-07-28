<?
$subject_val = "[OMPI users] OpenMPI Remote Execution Problem (Application does not start)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 27 03:15:29 2014" -->
<!-- isoreceived="20140827071529" -->
<!-- sent="Wed, 27 Aug 2014 09:15:12 +0200" -->
<!-- isosent="20140827071512" -->
<!-- name="Benjamin Giehle" -->
<!-- email="giehle_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI Remote Execution Problem (Application does not start)" -->
<!-- id="77371F2938F4A84EAE592A132FF27D19AE673FC5DA_at_RZ-MERKUR.hs-ulm.de" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI Remote Execution Problem (Application does not start)<br>
<strong>From:</strong> Benjamin Giehle (<em>giehle_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-27 03:15:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25160.php">Benjamin Giehle: "Re: [OMPI users] OpenMPI Remote Execution Problem (Application does not start)"</a>
<li><strong>Previous message:</strong> <a href="25158.php">Zhang,Lei(Ecom): "[OMPI users] &#180;&#240;&#184;&#180;:  Does multiple Irecv means concurrent receiving ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25160.php">Benjamin Giehle: "Re: [OMPI users] OpenMPI Remote Execution Problem (Application does not start)"</a>
<li><strong>Maybe reply:</strong> <a href="25160.php">Benjamin Giehle: "Re: [OMPI users] OpenMPI Remote Execution Problem (Application does not start)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you,
<br>
<p>i added the parameters and I figured out, that the ip table firewall was messing up something, so I disabled it on both machines.
<br>
But now I get another error:
<br>
<p>[superuser_at_localhost ~]$ mpirun --host 192.168.54.56 --leave-session-attached -mca plm_base_verbose 5 -mca oob_base_verbose 5 hostname clear
<br>
[localhost.localdomain:10884] mca:base:select:(  plm) Querying component [isolated]
<br>
[localhost.localdomain:10884] mca:base:select:(  plm) Query of component [isolated] set priority to 0
<br>
[localhost.localdomain:10884] mca:base:select:(  plm) Querying component [rsh]
<br>
[localhost.localdomain:10884] [[INVALID],INVALID] plm:rsh_lookup on agent ssh : rsh path NULL
<br>
[localhost.localdomain:10884] mca:base:select:(  plm) Query of component [rsh] set priority to 10
<br>
[localhost.localdomain:10884] mca:base:select:(  plm) Querying component [slurm]
<br>
[localhost.localdomain:10884] mca:base:select:(  plm) Skipping component [slurm]. Query failed to return a module
<br>
[localhost.localdomain:10884] mca:base:select:(  plm) Selected component [rsh]
<br>
[localhost.localdomain:10884] plm:base:set_hnp_name: initial bias 10884 nodename hash 724106151
<br>
[localhost.localdomain:10884] plm:base:set_hnp_name: final jobfam 64011
<br>
[localhost.localdomain:10884] mca:oob:select: checking available component tcp
<br>
[localhost.localdomain:10884] mca:oob:select: Querying component [tcp]
<br>
[localhost.localdomain:10884] oob:tcp: component_available called
<br>
[localhost.localdomain:10884] [[64011,0],0] creating OOB-TCP module for interface eth0
<br>
[localhost.localdomain:10884] [[64011,0],0] creating OOB-TCP module for interface virbr0
<br>
[localhost.localdomain:10884] [[64011,0],0] TCP STARTUP
<br>
[localhost.localdomain:10884] [[64011,0],0] attempting to bind to IPv4 port 0
<br>
[localhost.localdomain:10884] mca:oob:select: Adding component to end
<br>
[localhost.localdomain:10884] mca:oob:select: Found 1 active transports
<br>
[localhost.localdomain:10884] [[64011,0],0] plm:rsh_setup on agent ssh : rsh path NULL
<br>
[localhost.localdomain:10884] [[64011,0],0] plm:base:receive start comm
<br>
[localhost.localdomain:10884] [[64011,0],0] plm:base:setup_job
<br>
[localhost.localdomain:10884] [[64011,0],0] plm:base:setup_vm
<br>
[localhost.localdomain:10884] [[64011,0],0] plm:base:setup_vm creating map
<br>
[localhost.localdomain:10884] [[64011,0],0] setup:vm: working unmanaged allocation
<br>
[localhost.localdomain:10884] [[64011,0],0] using dash_host
<br>
[localhost.localdomain:10884] [[64011,0],0] checking node 192.168.54.56
<br>
[localhost.localdomain:10884] [[64011,0],0] plm:base:setup_vm add new daemon [[64011,0],1]
<br>
[localhost.localdomain:10884] [[64011,0],0] plm:base:setup_vm assigning new daemon [[64011,0],1] to node 192.168.54.56
<br>
[localhost.localdomain:10884] [[64011,0],0] plm:rsh: launching vm
<br>
[localhost.localdomain:10884] [[64011,0],0] plm:rsh: local shell: 0 (bash)
<br>
[localhost.localdomain:10884] [[64011,0],0] plm:rsh: assuming same remote shell as local shell
<br>
[localhost.localdomain:10884] [[64011,0],0] plm:rsh: remote shell: 0 (bash)
<br>
[localhost.localdomain:10884] [[64011,0],0] plm:rsh: final template argv:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/usr/bin/ssh &lt;template&gt;  orted -mca ess env -mca orte_ess_jobid 4195024896 -mca orte_ess_vpid &lt;template&gt; -mca orte_ess_num_procs 2 -mca orte_hnp_uri &quot;4195024896.0;tcp://192.168.54.137,192.168.122.1:45032&quot; --tree-spawn -mca plm_base_verbose 5 -mca oob_base_verbose 5 -mca plm rsh -mca orte_leave_session_attached 1
<br>
[localhost.localdomain:10884] [[64011,0],0] plm:rsh:launch daemon 0 not a child of mine
<br>
[localhost.localdomain:10884] [[64011,0],0] plm:rsh: adding node 192.168.54.56 to launch list
<br>
[localhost.localdomain:10884] [[64011,0],0] plm:rsh: activating launch event
<br>
[localhost.localdomain:10884] [[64011,0],0] plm:rsh: recording launch of daemon [[64011,0],1]
<br>
[localhost.localdomain:10884] [[64011,0],0] plm:rsh: executing: (/usr/bin/ssh) [/usr/bin/ssh 192.168.54.56  orted -mca ess env -mca orte_ess_jobid 4195024896 -mca orte_ess_vpid 1 -mca orte_ess_num_procs 2 -mca orte_hnp_uri &quot;4195024896.0;tcp://192.168.54.137,192.168.122.1:45032&quot; --tree-spawn -mca plm_base_verbose 5 -mca oob_base_verbose 5 -mca plm rsh -mca orte_leave_session_attached 1]
<br>
[CUDAServer:04970] mca:base:select:(  plm) Querying component [rsh]
<br>
[CUDAServer:04970] mca:base:select:(  plm) Query of component [rsh] set priority to 10
<br>
[CUDAServer:04970] mca:base:select:(  plm) Selected component [rsh]
<br>
[CUDAServer:04970] mca:oob:select: checking available component tcp
<br>
[CUDAServer:04970] mca:oob:select: Querying component [tcp]
<br>
[CUDAServer:04970] oob:tcp: component_available called
<br>
[CUDAServer:04970] [[64011,0],1] TCP STARTUP
<br>
[CUDAServer:04970] [[64011,0],1] attempting to bind to IPv4 port 0
<br>
[CUDAServer:04970] mca:oob:select: Adding component to end
<br>
[CUDAServer:04970] mca:oob:select: Found 1 active transports
<br>
[CUDAServer:04970] [[64011,0],1]: set_addr to uri 4195024896.0;tcp://192.168.54.137,192.168.122.1:45032
<br>
[CUDAServer:04970] [[64011,0],1]:set_addr checking if peer [[64011,0],0] is reachable via component tcp
<br>
[CUDAServer:04970] [[64011,0],1] oob:tcp: working peer [[64011,0],0] address tcp://192.168.54.137,192.168.122.1:45032
<br>
[CUDAServer:04970] [[64011,0],1]:tcp set addr for peer [[64011,0],0]
<br>
[CUDAServer:04970] [[64011,0],1]: peer [[64011,0],0] is reachable via component tcp
<br>
[CUDAServer:04970] [[64011,0],1] OOB_SEND: rml_oob_send.c:199
<br>
[CUDAServer:04970] [[64011,0],1] oob:base:send to target [[64011,0],0]
<br>
[CUDAServer:04970] [[64011,0],1] oob:tcp:send_nb to peer [[64011,0],0]:10
<br>
[CUDAServer:04970] [[64011,0],1] tcp:send_nb to peer [[64011,0],0]
<br>
[CUDAServer:04970] [[64011,0],1]:[oob_tcp.c:508] post send to [[64011,0],0]
<br>
[CUDAServer:04970] [[64011,0],1]:[oob_tcp.c:442] processing send to peer [[64011,0],0]:10
<br>
[CUDAServer:04970] [[64011,0],1]:[oob_tcp.c:476] queue pending to [[64011,0],0]
<br>
[CUDAServer:04970] [[64011,0],1] tcp:send_nb: initiating connection to [[64011,0],0]
<br>
[CUDAServer:04970] [[64011,0],1]:[oob_tcp.c:490] connect to [[64011,0],0]
<br>
[localhost.localdomain:10884] [[64011,0],0] connection_handler: working connection (12, 0) 192.168.54.56:38362
<br>
[CUDAServer:04970] [[64011,0],1] MESSAGE SEND COMPLETE TO [[64011,0],0] OF 12963 BYTES ON SOCKET 9
<br>
[localhost.localdomain:10884] [[64011,0],0] ORTE_ERROR_LOG: Data unpack failed in file base/plm_base_launch_support.c at line 964  &lt;==ERROR=============================================
<br>
[localhost.localdomain:10884] [[64011,0],0] plm:base:orted_cmd sending orted_exit commands
<br>
[localhost.localdomain:10884] [[64011,0],0] plm:base:receive stop comm
<br>
[localhost.localdomain:10884] [[64011,0],0] TCP SHUTDOWN
<br>
[localhost.localdomain:10884] [[64011,0],0] RELEASING PEER OBJ [[64011,0],1]
<br>
[localhost.localdomain:10884] [[64011,0],0] CLOSING SOCKET 12
<br>
[CUDAServer:04970] [[64011,0],1]-[[64011,0],0] mca_oob_tcp_msg_recv: peer closed connection
<br>
[CUDAServer:04970] [[64011,0],1] TCP SHUTDOWN
<br>
[CUDAServer:04970] [[64011,0],1] RELEASING PEER OBJ [[64011,0],0]
<br>
[CUDAServer:04970] [[64011,0],1] CLOSING SOCKET 9
<br>
<p><p>Regards
<br>
<p>Benjamin Giehle
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25160.php">Benjamin Giehle: "Re: [OMPI users] OpenMPI Remote Execution Problem (Application does not start)"</a>
<li><strong>Previous message:</strong> <a href="25158.php">Zhang,Lei(Ecom): "[OMPI users] &#180;&#240;&#184;&#180;:  Does multiple Irecv means concurrent receiving ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25160.php">Benjamin Giehle: "Re: [OMPI users] OpenMPI Remote Execution Problem (Application does not start)"</a>
<li><strong>Maybe reply:</strong> <a href="25160.php">Benjamin Giehle: "Re: [OMPI users] OpenMPI Remote Execution Problem (Application does not start)"</a>
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
