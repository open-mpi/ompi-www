<?
$subject_val = "Re: [OMPI devel] trunk hang (when remote orted has to spawn another orted?)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  8 09:39:54 2012" -->
<!-- isoreceived="20120508133954" -->
<!-- sent="Tue, 8 May 2012 07:39:45 -0600" -->
<!-- isosent="20120508133945" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk hang (when remote orted has to spawn another orted?)" -->
<!-- id="55B706D9-78C5-436B-A5DD-E44718175820_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4FA8A2AF.1060207_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] trunk hang (when remote orted has to spawn another orted?)<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-08 09:39:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10981.php">Jeff Squyres (jsquyres): "[OMPI devel] The Architecture of Open Source Applications (vol 2)"</a>
<li><strong>Previous message:</strong> <a href="10979.php">Eugene Loh: "[OMPI devel] trunk hang (when remote orted has to spawn another orted?)"</a>
<li><strong>In reply to:</strong> <a href="10979.php">Eugene Loh: "[OMPI devel] trunk hang (when remote orted has to spawn another orted?)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fixed - r26406
<br>
<p><p>On May 7, 2012, at 10:35 PM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; Here is another trunk hang.  I get it if I use at least three remote nodes.  E.g., with r26385:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; % mpirun -H remoteA,remoteB,remoteC -n 2 hostname
</span><br>
<span class="quotelev1">&gt; [remoteA:20508] [[54625,0],1] ORTE_ERROR_LOG: Not found in file base/ess_base_fns.c at line 135
</span><br>
<span class="quotelev1">&gt; [remoteA:20508] [[54625,0],1] unable to get hostname for daemon 3
</span><br>
<span class="quotelev1">&gt; [remoteA:20508] [[54625,0],1] ORTE_ERROR_LOG: Not found in file orted/orted_comm.c at line 345
</span><br>
<span class="quotelev1">&gt; [hang]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think the problem first appeared with r26359.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I guess if a remote orted has to spawn another orted, it gets here:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  opal_pointer_array_get_item(table = 0x7e410, element_index = 3), line 136 in &quot;opal_pointer_array.h&quot;
</span><br>
<span class="quotelev1">&gt;  find_proc(proc = 0xffbff264), line 51 in &quot;ess_base_fns.c&quot;
</span><br>
<span class="quotelev1">&gt;  orte_ess_base_proc_get_hostname(proc = 0xffbff264), line 134 in &quot;ess_base_fns.c&quot;
</span><br>
<span class="quotelev1">&gt;  remote_spawn(launch = 0x85f30), line 812 in &quot;plm_rsh_module.c&quot;
</span><br>
<span class="quotelev1">&gt;  orte_daemon_recv(status = 0, sender = 0x85f54, buffer = 0x85f30, tag = 1U, cbdata = (nil)), line 344 in &quot;orted_comm.c&quot;
</span><br>
<span class="quotelev1">&gt;  orte_rml_recv_msg_callback(status = 0, peer = 0x69014, iov = 0x7d7e0, count = 2, tag = 1U, cbdata = 0x85ec0), line 68 in &quot;rml_oob_recv.c&quot;
</span><br>
<span class="quotelev1">&gt;  mca_oob_tcp_msg_data(msg = 0x85310, peer = 0x69000), line 436 in &quot;oob_tcp_msg.c&quot;
</span><br>
<span class="quotelev1">&gt;  mca_oob_tcp_msg_recv_complete(msg = 0x85310, peer = 0x69000), line 322 in &quot;oob_tcp_msg.c&quot;
</span><br>
<span class="quotelev1">&gt;  mca_oob_tcp_peer_recv_handler(sd = 13, flags = 2, user = 0x69000), line 942 in &quot;oob_tcp_peer.c&quot;
</span><br>
<span class="quotelev1">&gt;  event_persist_closure(base = 0x3c600, ev = 0x647a8), line 1280 in &quot;event.c&quot;
</span><br>
<span class="quotelev1">&gt;  event_process_active_single_queue(base = 0x3c600, activeq = 0x3c4f0), line 1324 in &quot;event.c&quot;
</span><br>
<span class="quotelev1">&gt;  event_process_active(base = 0x3c600), line 1396 in &quot;event.c&quot;
</span><br>
<span class="quotelev1">&gt;  opal_libevent2013_event_base_loop(base = 0x3c600, flags = 1), line 1593 in &quot;event.c&quot;
</span><br>
<span class="quotelev1">&gt;  orte_daemon(argc = 19, argv = 0xffbff97c), line 729 in &quot;orted_main.c&quot;
</span><br>
<span class="quotelev1">&gt;  main(argc = 19, argv = 0xffbff97c), line 62 in &quot;orted.c&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, in my case, I'm trying to look up item 3 while only item 1 in the array appears to be initialized.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10981.php">Jeff Squyres (jsquyres): "[OMPI devel] The Architecture of Open Source Applications (vol 2)"</a>
<li><strong>Previous message:</strong> <a href="10979.php">Eugene Loh: "[OMPI devel] trunk hang (when remote orted has to spawn another orted?)"</a>
<li><strong>In reply to:</strong> <a href="10979.php">Eugene Loh: "[OMPI devel] trunk hang (when remote orted has to spawn another orted?)"</a>
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
