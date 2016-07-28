<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jun 20 13:30:22 2006" -->
<!-- isoreceived="20060620173022" -->
<!-- sent="Tue, 20 Jun 2006 11:30:18 -0600" -->
<!-- isosent="20060620173018" -->
<!-- name="Sushant Sharma" -->
<!-- email="sushant_at_[hidden]" -->
<!-- subject="[OMPI devel] xcpu" -->
<!-- id="449830AA.1020207_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Sushant Sharma (<em>sushant_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-20 13:30:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0947.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r10521"</a>
<li><strong>Previous message:</strong> <a href="0945.php">Matthijs Richard Koot: "Re: [OMPI devel] Does IMPI solve cross-platform endian/size issues?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all,
<br>
I recently checked in code for xcpu, so that now xpcu can be used as one 
<br>
of the launchers within open-mpi.
<br>
It works fine but I am having one problem.
<br>
In file trunk/orte/tools/orterun/totalview.c, on line 402,
<br>
I am getting proc-&gt;proc_node as NULL which is causing mpirun to crash. 
<br>
If I change line 402 from
<br>
<p>MPIR_proctable[i].host_name = proc-&gt;proc_node-&gt;node-&gt;node_name;
<br>
<p>to
<br>
<p>if(proc-&gt;proc_node){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPIR_proctable[i].host_name = proc-&gt;proc_node-&gt;node-&gt;node_name;
<br>
}
<br>
<p><p>it works fine.
<br>
I am not sure why I am getting it as NULL. Any inputs will be appreciated.
<br>
<p>Thanks a lot.
<br>
-Sushant
<br>
<p>----------------------------------------------------------
<br>
<p>Here is the gdb output for mpirun
<br>
<p><p>(gdb) run --mca pls xcpu --hostfile /home/sushant/ompi/my-tests/hostfile 
<br>
-np 1   /home/sushant/ompi/my-tests/hello.o
<br>
Starting program: /home/sushant/ompi/install/bin/mpirun --mca pls xcpu 
<br>
--hostfile /home/sushant/ompi/my-tests/hostfile -np 1 
<br>
/home/sushant/ompi/my-tests/hello.o
<br>
[Thread debugging using libthread_db enabled]
<br>
[New Thread -1210691456 (LWP 8117)]
<br>
[New Thread -1211511888 (LWP 8120)]
<br>
[New Thread -1219900496 (LWP 8126)]
<br>
[New Thread -1228289104 (LWP 8127)]
<br>
<p>Program received signal SIGSEGV, Segmentation fault.
<br>
[Switching to Thread -1210691456 (LWP 8117)]
<br>
0x0804d6b9 in orte_totalview_init_after_spawn (jobid=1) at 
<br>
../../../../trunk/orte/tools/orterun/totalview.c:402
<br>
402                     MPIR_proctable[i].host_name = 
<br>
proc-&gt;proc_node-&gt;node-&gt;node_name;
<br>
(gdb) where
<br>
#0  0x0804d6b9 in orte_totalview_init_after_spawn (jobid=1) at 
<br>
../../../../trunk/orte/tools/orterun/totalview.c:402
<br>
#1  0x0804af92 in job_state_callback (jobid=1, state=4) at 
<br>
../../../../trunk/orte/tools/orterun/orterun.c:638
<br>
#2  0xb7d5b8bc in orte_rmgr_urm_callback (data=0x80c7f00, cbdata=0x804aee8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../../trunk/orte/mca/rmgr/urm/rmgr_urm.c:282
<br>
#3  0xb7ced98d in orte_gpr_replica_deliver_notify_msg (msg=0x80c7ed0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at 
<br>
../../../../../../trunk/orte/mca/gpr/replica/api_layer/gpr_replica_deliver_notify_msg_api.c:134
<br>
#4  0xb7cf68b9 in orte_gpr_replica_process_callbacks ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at 
<br>
../../../../../../trunk/orte/mca/gpr/replica/functional_layer/gpr_replica_messaging_fn.c:80
<br>
#5  0xb7d0221f in orte_gpr_replica_recv (status=1564, sender=0x80670a0, 
<br>
buffer=0xbfbc2820, tag=2, cbdata=0x0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at 
<br>
../../../../../../trunk/orte/mca/gpr/replica/communications/gpr_replica_recv_proxy_msgs.c:85
<br>
#6  0xb7f74b4a in mca_oob_recv_callback (status=1564, peer=0x80670a0, 
<br>
msg=0x8083ec0, count=1, tag=2, cbdata=0x8083ec0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../trunk/orte/mca/oob/base/oob_base_recv_nb.c:159
<br>
#7  0xb7d2e8ec in mca_oob_tcp_msg_data (msg=0x8068460, peer=0x8067080)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../../trunk/orte/mca/oob/tcp/oob_tcp_msg.c:487
<br>
#8  0xb7d2e506 in mca_oob_tcp_msg_recv_complete (msg=0x8068460, 
<br>
peer=0x8067080)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../../trunk/orte/mca/oob/tcp/oob_tcp_msg.c:396
<br>
#9  0xb7d31cf2 in mca_oob_tcp_peer_recv_handler (sd=10, flags=2, 
<br>
user=0x8067080)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../../trunk/orte/mca/oob/tcp/oob_tcp_peer.c:715
<br>
#10 0xb7f0990a in opal_event_process_active () at 
<br>
../../../trunk/opal/event/event.c:428
<br>
#11 0xb7f09bc1 in opal_event_loop (flags=1) at 
<br>
../../../trunk/opal/event/event.c:513
<br>
#12 0xb7f02d81 in opal_progress () at 
<br>
../../trunk/opal/runtime/opal_progress.c:259
<br>
#13 0x0804c976 in opal_condition_wait (c=0x804fa90, m=0x804fa64) at 
<br>
condition.h:81
<br>
#14 0x0804a660 in orterun (argc=9, argv=0xbfbc2b24) at 
<br>
../../../../trunk/orte/tools/orterun/orterun.c:415
<br>
#15 0x08049e76 in main (argc=9, argv=0xbfbc2b24) at 
<br>
../../../../trunk/orte/tools/orterun/main.c:13
<br>
(gdb)
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0947.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r10521"</a>
<li><strong>Previous message:</strong> <a href="0945.php">Matthijs Richard Koot: "Re: [OMPI devel] Does IMPI solve cross-platform endian/size issues?"</a>
<!-- nextthread="start" -->
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
