<?
$subject_val = "[OMPI devel] trunk hang (when remote orted has to spawn another orted?)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  8 00:36:08 2012" -->
<!-- isoreceived="20120508043608" -->
<!-- sent="Tue, 08 May 2012 00:35:59 -0400" -->
<!-- isosent="20120508043559" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="[OMPI devel] trunk hang (when remote orted has to spawn another orted?)" -->
<!-- id="4FA8A2AF.1060207_at_oracle.com" -->
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
<strong>Subject:</strong> [OMPI devel] trunk hang (when remote orted has to spawn another orted?)<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-08 00:35:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10980.php">Ralph Castain: "Re: [OMPI devel] trunk hang (when remote orted has to spawn another orted?)"</a>
<li><strong>Previous message:</strong> <a href="10978.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] algorithm selection in open mpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10980.php">Ralph Castain: "Re: [OMPI devel] trunk hang (when remote orted has to spawn another orted?)"</a>
<li><strong>Reply:</strong> <a href="10980.php">Ralph Castain: "Re: [OMPI devel] trunk hang (when remote orted has to spawn another orted?)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here is another trunk hang.  I get it if I use at least three remote 
<br>
nodes.  E.g., with r26385:
<br>
<p>% mpirun -H remoteA,remoteB,remoteC -n 2 hostname
<br>
[remoteA:20508] [[54625,0],1] ORTE_ERROR_LOG: Not found in file 
<br>
base/ess_base_fns.c at line 135
<br>
[remoteA:20508] [[54625,0],1] unable to get hostname for daemon 3
<br>
[remoteA:20508] [[54625,0],1] ORTE_ERROR_LOG: Not found in file 
<br>
orted/orted_comm.c at line 345
<br>
[hang]
<br>
<p>I think the problem first appeared with r26359.
<br>
<p>I guess if a remote orted has to spawn another orted, it gets here:
<br>
<p>&nbsp;&nbsp;&nbsp;opal_pointer_array_get_item(table = 0x7e410, element_index = 3), line 
<br>
136 in &quot;opal_pointer_array.h&quot;
<br>
&nbsp;&nbsp;&nbsp;find_proc(proc = 0xffbff264), line 51 in &quot;ess_base_fns.c&quot;
<br>
&nbsp;&nbsp;&nbsp;orte_ess_base_proc_get_hostname(proc = 0xffbff264), line 134 in 
<br>
&quot;ess_base_fns.c&quot;
<br>
&nbsp;&nbsp;&nbsp;remote_spawn(launch = 0x85f30), line 812 in &quot;plm_rsh_module.c&quot;
<br>
&nbsp;&nbsp;&nbsp;orte_daemon_recv(status = 0, sender = 0x85f54, buffer = 0x85f30, tag 
<br>
= 1U, cbdata = (nil)), line 344 in &quot;orted_comm.c&quot;
<br>
&nbsp;&nbsp;&nbsp;orte_rml_recv_msg_callback(status = 0, peer = 0x69014, iov = 0x7d7e0, 
<br>
count = 2, tag = 1U, cbdata = 0x85ec0), line 68 in &quot;rml_oob_recv.c&quot;
<br>
&nbsp;&nbsp;&nbsp;mca_oob_tcp_msg_data(msg = 0x85310, peer = 0x69000), line 436 in 
<br>
&quot;oob_tcp_msg.c&quot;
<br>
&nbsp;&nbsp;&nbsp;mca_oob_tcp_msg_recv_complete(msg = 0x85310, peer = 0x69000), line 
<br>
322 in &quot;oob_tcp_msg.c&quot;
<br>
&nbsp;&nbsp;&nbsp;mca_oob_tcp_peer_recv_handler(sd = 13, flags = 2, user = 0x69000), 
<br>
line 942 in &quot;oob_tcp_peer.c&quot;
<br>
&nbsp;&nbsp;&nbsp;event_persist_closure(base = 0x3c600, ev = 0x647a8), line 1280 in 
<br>
&quot;event.c&quot;
<br>
&nbsp;&nbsp;&nbsp;event_process_active_single_queue(base = 0x3c600, activeq = 0x3c4f0), 
<br>
line 1324 in &quot;event.c&quot;
<br>
&nbsp;&nbsp;&nbsp;event_process_active(base = 0x3c600), line 1396 in &quot;event.c&quot;
<br>
&nbsp;&nbsp;&nbsp;opal_libevent2013_event_base_loop(base = 0x3c600, flags = 1), line 
<br>
1593 in &quot;event.c&quot;
<br>
&nbsp;&nbsp;&nbsp;orte_daemon(argc = 19, argv = 0xffbff97c), line 729 in &quot;orted_main.c&quot;
<br>
&nbsp;&nbsp;&nbsp;main(argc = 19, argv = 0xffbff97c), line 62 in &quot;orted.c&quot;
<br>
<p>So, in my case, I'm trying to look up item 3 while only item 1 in the 
<br>
array appears to be initialized.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10980.php">Ralph Castain: "Re: [OMPI devel] trunk hang (when remote orted has to spawn another orted?)"</a>
<li><strong>Previous message:</strong> <a href="10978.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] algorithm selection in open mpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10980.php">Ralph Castain: "Re: [OMPI devel] trunk hang (when remote orted has to spawn another orted?)"</a>
<li><strong>Reply:</strong> <a href="10980.php">Ralph Castain: "Re: [OMPI devel] trunk hang (when remote orted has to spawn another orted?)"</a>
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
