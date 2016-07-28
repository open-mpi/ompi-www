<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Feb  7 19:04:14 2006" -->
<!-- isoreceived="20060208000414" -->
<!-- sent="Tue, 07 Feb 2006 16:03:03 -0800" -->
<!-- isosent="20060208000303" -->
<!-- name="Jean-Christophe Hugly" -->
<!-- email="jice_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] does btl_openib work with multiple ports ?" -->
<!-- id="1139356983.1494.118.camel_at_jhugly.pantasys.com" -->
<!-- inreplyto="89454A8B-5EE0-4408-9925-C5FCB503968D_at_lanl.gov" -->
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
<strong>From:</strong> Jean-Christophe Hugly (<em>jice_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-07 19:03:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0597.php">Galen M. Shipman: "Re: [O-MPI users] does btl_openib work with multiple ports ?"</a>
<li><strong>Previous message:</strong> <a href="0595.php">Bill Saphir: "[O-MPI users] Multiply-defined munmap on OSX"</a>
<li><strong>In reply to:</strong> <a href="0569.php">Galen M. Shipman: "Re: [O-MPI users] does btl_openib work ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0597.php">Galen M. Shipman: "Re: [O-MPI users] does btl_openib work with multiple ports ?"</a>
<li><strong>Reply:</strong> <a href="0597.php">Galen M. Shipman: "Re: [O-MPI users] does btl_openib work with multiple ports ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 2006-02-02 at 21:49 -0700, Galen M. Shipman wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I suspect the problem may be in the bcast,  
</span><br>
<span class="quotelev1">&gt; ompi_coll_tuned_bcast_intra_basic_linear. Can you try the same run using
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -prefix /opt/ompi -wdir `pwd` -machinefile /root/machines -np   
</span><br>
<span class="quotelev1">&gt; 2 -mca coll self,basic -d xterm -e gdb PMB-MPI1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This will use the basic collectives and may isolate the problem.
</span><br>
<p>Hi Galen,
<br>
<p>After much fiddling around, running with verbose, trace etc. I found one
<br>
way of making it work. That might explain why it normally works for you
<br>
and not me: I have two active ports on each of my nodes, not 1.
<br>
<p>After disconnecting port1 on each node, open-mpi works.
<br>
<p>What caused me to try that is the traces I got while running the trivial
<br>
osu_lat test:
<br>
bench1:~ # mpirun -prefix /opt/ompi -wdir `pwd` -mca btl_base_debug 2 -mca btl_base_verbose 10 -mca coll basic -machinefile /root/machines -np 2 osu_lat
<br>
[0,1,0][btl_openib.c:150:mca_btl_openib_del_procs] TODO
<br>
<p>[0,1,0][btl_openib.c:150:mca_btl_openib_del_procs] TODO
<br>
<p>[0,1,1][btl_openib.c:150:mca_btl_openib_del_procs] TODO
<br>
<p>[0,1,1][btl_openib.c:150:mca_btl_openib_del_procs] TODO
<br>
<p># OSU MPI Latency Test (Version 2.1)
<br>
# Size          Latency (us)
<br>
[0,1,1][btl_openib_endpoint.c:756:mca_btl_openib_endpoint_send] Connection to endpoint closed ... connecting ...
<br>
[0,1,1][btl_openib_endpoint.c:394:mca_btl_openib_endpoint_start_connect] Initialized High Priority QP num = 263174, Low Priority QP num = 263175,  LID = 5
<br>
[0,1,1][btl_openib_endpoint.c:317:mca_btl_openib_endpoint_send_connect_data] Sending High Priority QP num = 263174, Low Priority QP num = 263175, LID = 5
<br>
[0,1,0][btl_openib_endpoint.c:594:mca_btl_openib_endpoint_recv] Received High Priority QP num = 263174, Low Priority QP num 263175,  LID = 5
<br>
[0,1,0][btl_openib_endpoint.c:450:mca_btl_openib_endpoint_reply_start_connect] Initialized High Priority QP num = 4719622, Low Priority QP num = 4719623,  LID = 3
<br>
[0,1,0][btl_openib_endpoint.c:339:mca_btl_openib_endpoint_set_remote_info] Setting High Priority QP num = 263174, Low Priority QP num 263175,  LID = 5
<br>
[0,1,0][btl_openib_endpoint.c:317:mca_btl_openib_endpoint_send_connect_data] Sending High Priority QP num = 4719622, Low Priority QP num = 4719623, LID = 3
<br>
[0,1,1][btl_openib_endpoint.c:594:mca_btl_openib_endpoint_recv] Received High Priority QP num = 4719622, Low Priority QP num 4719623,  LID = 3
<br>
[0,1,1][btl_openib_endpoint.c:339:mca_btl_openib_endpoint_set_remote_info] Setting High Priority QP num = 4719622, Low Priority QP num 4719623,  LID = 3
<br>
[0,1,1][btl_openib_endpoint.c:317:mca_btl_openib_endpoint_send_connect_data] Sending High Priority QP num = 263174, Low Priority QP num = 263175, LID = 5
<br>
[0,1,0][btl_openib_endpoint.c:594:mca_btl_openib_endpoint_recv] Received High Priority QP num = 263174, Low Priority QP num 263175,  LID = 5
<br>
[0,1,0][btl_openib_endpoint.c:317:mca_btl_openib_endpoint_send_connect_data] Sending High Priority QP num = 4719622, Low Priority QP num = 4719623, LID = 3
<br>
[0,1,1][btl_openib_endpoint.c:594:mca_btl_openib_endpoint_recv] Received High Priority QP num = 4719622, Low Priority QP num 4719623,  LID = 3
<br>
[0,1,0][btl_openib_endpoint.c:773:mca_btl_openib_endpoint_send] Send to : 1, len : 32768, frag : 0xdb7080
<br>
[0,1,0][btl_openib_endpoint.c:756:mca_btl_openib_endpoint_send] Connection to endpoint closed ... connecting ...
<br>
[0,1,0][btl_openib_endpoint.c:394:mca_btl_openib_endpoint_start_connect] Initialized High Priority QP num = 4719624, Low Priority QP num = 4719625,  LID = 4
<br>
[0,1,0][btl_openib_endpoint.c:317:mca_btl_openib_endpoint_send_connect_data] Sending High Priority QP num = 4719624, Low Priority QP num = 4719625, LID = 4
<br>
[0,1,1][btl_openib_endpoint.c:594:mca_btl_openib_endpoint_recv] Received High Priority QP num = 4719624, Low Priority QP num 4719625,  LID = 4
<br>
<p>...Then noting else happens.
<br>
<p>You'll notice the appearance of LID = 4 towards the end.
<br>
In this context, port1 of node 0 has LID 3, port2 of node 0 has LID 4, port1 of node 1 has LID 5, and port2 of node 1 has LID 6
<br>
<p>In case it is usefull to you, the topology of the fabric is as follows:
<br>
there are two IB switches, one switch connects to port 1 of all nodes,
<br>
and the other connects to port 2 of all nodes. Two nodes are used to run
<br>
MPI apps. The third is where opensm and other stuff runs. The two
<br>
switches are normally cross-connected many times over. I tried the same
<br>
experiment both with the cross-connection and with the two planes
<br>
seggregated. In the later case, I ran a second opensm bound to the
<br>
second plane.
<br>
<p>The test ran to completion only after I suppressed the second plane
<br>
completely by disconnecting the second switch. In that case the tuned
<br>
collectives work just as well, btw.
<br>
<p>The ability to run with two ports active is very important to us. Not
<br>
only are we very much interrested by ompi's multi-rail feature, but also
<br>
we use IB for other things than MPI and spread the load over the two
<br>
ports.
<br>
<p>Is there a special way of configuring ompi for it to work properly with
<br>
multiple ports ?
<br>
<p><p><pre>
-- 
Jean-Christophe Hugly &lt;jice_at_[hidden]&gt;
PANTA
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0597.php">Galen M. Shipman: "Re: [O-MPI users] does btl_openib work with multiple ports ?"</a>
<li><strong>Previous message:</strong> <a href="0595.php">Bill Saphir: "[O-MPI users] Multiply-defined munmap on OSX"</a>
<li><strong>In reply to:</strong> <a href="0569.php">Galen M. Shipman: "Re: [O-MPI users] does btl_openib work ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0597.php">Galen M. Shipman: "Re: [O-MPI users] does btl_openib work with multiple ports ?"</a>
<li><strong>Reply:</strong> <a href="0597.php">Galen M. Shipman: "Re: [O-MPI users] does btl_openib work with multiple ports ?"</a>
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
