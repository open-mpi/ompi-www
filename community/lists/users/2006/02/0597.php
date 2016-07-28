<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Feb  7 22:59:14 2006" -->
<!-- isoreceived="20060208035914" -->
<!-- sent="Tue, 7 Feb 2006 20:59:05 -0700 (MST)" -->
<!-- isosent="20060208035905" -->
<!-- name="Galen M. Shipman" -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] does btl_openib work with multiple ports ?" -->
<!-- id="Pine.LNX.4.62.0602072056440.20304_at_io.cs.unm.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1139356983.1494.118.camel_at_jhugly.pantasys.com" -->
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
<strong>From:</strong> Galen M. Shipman (<em>gshipman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-07 22:59:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0598.php">Graham E Fagg: "Re: [O-MPI users] does btl_openib work with multiple ports ?"</a>
<li><strong>Previous message:</strong> <a href="0596.php">Jean-Christophe Hugly: "Re: [O-MPI users] does btl_openib work with multiple ports ?"</a>
<li><strong>In reply to:</strong> <a href="0596.php">Jean-Christophe Hugly: "Re: [O-MPI users] does btl_openib work with multiple ports ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0598.php">Graham E Fagg: "Re: [O-MPI users] does btl_openib work with multiple ports ?"</a>
<li><strong>Reply:</strong> <a href="0598.php">Graham E Fagg: "Re: [O-MPI users] does btl_openib work with multiple ports ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is very helpfull, I will try to obtain a system wired for dual port 
<br>
in order to correct this.
<br>
<p>Thanks,
<br>
<p>Galen
<br>
<p><p>On Tue, 7 Feb 2006, Jean-Christophe Hugly wrote:
<br>
<p><span class="quotelev1">&gt; On Thu, 2006-02-02 at 21:49 -0700, Galen M. Shipman wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I suspect the problem may be in the bcast,
</span><br>
<span class="quotelev2">&gt;&gt; ompi_coll_tuned_bcast_intra_basic_linear. Can you try the same run using
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -prefix /opt/ompi -wdir `pwd` -machinefile /root/machines -np
</span><br>
<span class="quotelev2">&gt;&gt; 2 -mca coll self,basic -d xterm -e gdb PMB-MPI1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This will use the basic collectives and may isolate the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Galen,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; After much fiddling around, running with verbose, trace etc. I found one
</span><br>
<span class="quotelev1">&gt; way of making it work. That might explain why it normally works for you
</span><br>
<span class="quotelev1">&gt; and not me: I have two active ports on each of my nodes, not 1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; After disconnecting port1 on each node, open-mpi works.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What caused me to try that is the traces I got while running the trivial
</span><br>
<span class="quotelev1">&gt; osu_lat test:
</span><br>
<span class="quotelev1">&gt; bench1:~ # mpirun -prefix /opt/ompi -wdir `pwd` -mca btl_base_debug 2 -mca btl_base_verbose 10 -mca coll basic -machinefile /root/machines -np 2 osu_lat
</span><br>
<span class="quotelev1">&gt; [0,1,0][btl_openib.c:150:mca_btl_openib_del_procs] TODO
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [0,1,0][btl_openib.c:150:mca_btl_openib_del_procs] TODO
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [0,1,1][btl_openib.c:150:mca_btl_openib_del_procs] TODO
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [0,1,1][btl_openib.c:150:mca_btl_openib_del_procs] TODO
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # OSU MPI Latency Test (Version 2.1)
</span><br>
<span class="quotelev1">&gt; # Size          Latency (us)
</span><br>
<span class="quotelev1">&gt; [0,1,1][btl_openib_endpoint.c:756:mca_btl_openib_endpoint_send] Connection to endpoint closed ... connecting ...
</span><br>
<span class="quotelev1">&gt; [0,1,1][btl_openib_endpoint.c:394:mca_btl_openib_endpoint_start_connect] Initialized High Priority QP num = 263174, Low Priority QP num = 263175,  LID = 5
</span><br>
<span class="quotelev1">&gt; [0,1,1][btl_openib_endpoint.c:317:mca_btl_openib_endpoint_send_connect_data] Sending High Priority QP num = 263174, Low Priority QP num = 263175, LID = 5
</span><br>
<span class="quotelev1">&gt; [0,1,0][btl_openib_endpoint.c:594:mca_btl_openib_endpoint_recv] Received High Priority QP num = 263174, Low Priority QP num 263175,  LID = 5
</span><br>
<span class="quotelev1">&gt; [0,1,0][btl_openib_endpoint.c:450:mca_btl_openib_endpoint_reply_start_connect] Initialized High Priority QP num = 4719622, Low Priority QP num = 4719623,  LID = 3
</span><br>
<span class="quotelev1">&gt; [0,1,0][btl_openib_endpoint.c:339:mca_btl_openib_endpoint_set_remote_info] Setting High Priority QP num = 263174, Low Priority QP num 263175,  LID = 5
</span><br>
<span class="quotelev1">&gt; [0,1,0][btl_openib_endpoint.c:317:mca_btl_openib_endpoint_send_connect_data] Sending High Priority QP num = 4719622, Low Priority QP num = 4719623, LID = 3
</span><br>
<span class="quotelev1">&gt; [0,1,1][btl_openib_endpoint.c:594:mca_btl_openib_endpoint_recv] Received High Priority QP num = 4719622, Low Priority QP num 4719623,  LID = 3
</span><br>
<span class="quotelev1">&gt; [0,1,1][btl_openib_endpoint.c:339:mca_btl_openib_endpoint_set_remote_info] Setting High Priority QP num = 4719622, Low Priority QP num 4719623,  LID = 3
</span><br>
<span class="quotelev1">&gt; [0,1,1][btl_openib_endpoint.c:317:mca_btl_openib_endpoint_send_connect_data] Sending High Priority QP num = 263174, Low Priority QP num = 263175, LID = 5
</span><br>
<span class="quotelev1">&gt; [0,1,0][btl_openib_endpoint.c:594:mca_btl_openib_endpoint_recv] Received High Priority QP num = 263174, Low Priority QP num 263175,  LID = 5
</span><br>
<span class="quotelev1">&gt; [0,1,0][btl_openib_endpoint.c:317:mca_btl_openib_endpoint_send_connect_data] Sending High Priority QP num = 4719622, Low Priority QP num = 4719623, LID = 3
</span><br>
<span class="quotelev1">&gt; [0,1,1][btl_openib_endpoint.c:594:mca_btl_openib_endpoint_recv] Received High Priority QP num = 4719622, Low Priority QP num 4719623,  LID = 3
</span><br>
<span class="quotelev1">&gt; [0,1,0][btl_openib_endpoint.c:773:mca_btl_openib_endpoint_send] Send to : 1, len : 32768, frag : 0xdb7080
</span><br>
<span class="quotelev1">&gt; [0,1,0][btl_openib_endpoint.c:756:mca_btl_openib_endpoint_send] Connection to endpoint closed ... connecting ...
</span><br>
<span class="quotelev1">&gt; [0,1,0][btl_openib_endpoint.c:394:mca_btl_openib_endpoint_start_connect] Initialized High Priority QP num = 4719624, Low Priority QP num = 4719625,  LID = 4
</span><br>
<span class="quotelev1">&gt; [0,1,0][btl_openib_endpoint.c:317:mca_btl_openib_endpoint_send_connect_data] Sending High Priority QP num = 4719624, Low Priority QP num = 4719625, LID = 4
</span><br>
<span class="quotelev1">&gt; [0,1,1][btl_openib_endpoint.c:594:mca_btl_openib_endpoint_recv] Received High Priority QP num = 4719624, Low Priority QP num 4719625,  LID = 4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ...Then noting else happens.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You'll notice the appearance of LID = 4 towards the end.
</span><br>
<span class="quotelev1">&gt; In this context, port1 of node 0 has LID 3, port2 of node 0 has LID 4, port1 of node 1 has LID 5, and port2 of node 1 has LID 6
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In case it is usefull to you, the topology of the fabric is as follows:
</span><br>
<span class="quotelev1">&gt; there are two IB switches, one switch connects to port 1 of all nodes,
</span><br>
<span class="quotelev1">&gt; and the other connects to port 2 of all nodes. Two nodes are used to run
</span><br>
<span class="quotelev1">&gt; MPI apps. The third is where opensm and other stuff runs. The two
</span><br>
<span class="quotelev1">&gt; switches are normally cross-connected many times over. I tried the same
</span><br>
<span class="quotelev1">&gt; experiment both with the cross-connection and with the two planes
</span><br>
<span class="quotelev1">&gt; seggregated. In the later case, I ran a second opensm bound to the
</span><br>
<span class="quotelev1">&gt; second plane.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The test ran to completion only after I suppressed the second plane
</span><br>
<span class="quotelev1">&gt; completely by disconnecting the second switch. In that case the tuned
</span><br>
<span class="quotelev1">&gt; collectives work just as well, btw.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The ability to run with two ports active is very important to us. Not
</span><br>
<span class="quotelev1">&gt; only are we very much interrested by ompi's multi-rail feature, but also
</span><br>
<span class="quotelev1">&gt; we use IB for other things than MPI and spread the load over the two
</span><br>
<span class="quotelev1">&gt; ports.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there a special way of configuring ompi for it to work properly with
</span><br>
<span class="quotelev1">&gt; multiple ports ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jean-Christophe Hugly &lt;jice_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; PANTA
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0598.php">Graham E Fagg: "Re: [O-MPI users] does btl_openib work with multiple ports ?"</a>
<li><strong>Previous message:</strong> <a href="0596.php">Jean-Christophe Hugly: "Re: [O-MPI users] does btl_openib work with multiple ports ?"</a>
<li><strong>In reply to:</strong> <a href="0596.php">Jean-Christophe Hugly: "Re: [O-MPI users] does btl_openib work with multiple ports ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0598.php">Graham E Fagg: "Re: [O-MPI users] does btl_openib work with multiple ports ?"</a>
<li><strong>Reply:</strong> <a href="0598.php">Graham E Fagg: "Re: [O-MPI users] does btl_openib work with multiple ports ?"</a>
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
