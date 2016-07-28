<?
$subject_val = "[OMPI devel] Deadlocks with new (routed) orted launch algorithm";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 17 09:26:30 2009" -->
<!-- isoreceived="20091117142630" -->
<!-- sent="Tue, 17 Nov 2009 17:27:54 +0100 (CET)" -->
<!-- isosent="20091117162754" -->
<!-- name="Sylvain Jeaugey" -->
<!-- email="sylvain.jeaugey_at_[hidden]" -->
<!-- subject="[OMPI devel] Deadlocks with new (routed) orted launch algorithm" -->
<!-- id="alpine.DEB.2.00.0911171705550.12576_at_jeaugeys" -->
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
<strong>Subject:</strong> [OMPI devel] Deadlocks with new (routed) orted launch algorithm<br>
<strong>From:</strong> Sylvain Jeaugey (<em>sylvain.jeaugey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-17 11:27:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7123.php">Ralph Castain: "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
<li><strong>Previous message:</strong> <a href="7121.php">Christopher Yeoh: "Re: [OMPI devel] mpool rdma deadlock - malloc implementation issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7123.php">Ralph Castain: "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
<li><strong>Reply:</strong> <a href="7123.php">Ralph Castain: "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>We are currently experiencing problems at launch on the 1.5 branch on 
<br>
relatively large number of nodes (at least 80). Some processes are not 
<br>
spawned and orted processes are deadlocked.
<br>
<p>When MPI processes are calling MPI_Init before send_relay is complete, the 
<br>
send_relay function and the daemon_collective function are doing a nice 
<br>
interlock :
<br>
<p>Here is the scenario :
<br>
<span class="quotelev1">&gt; send_relay
</span><br>
performs the send tree :
<br>
<span class="quotelev1">   &gt; orte_rml_oob_send_buffer
</span><br>
<span class="quotelev1">     &gt; orte_rml_oob_send
</span><br>
<span class="quotelev1">       &gt; opal_wait_condition
</span><br>
Waiting on completion from send thus calling opal_progress()
<br>
<span class="quotelev1">         &gt; opal_progress()
</span><br>
But since a collective request arrived from the network, entered :
<br>
<span class="quotelev1">           &gt; daemon_collective
</span><br>
However, daemon_collective is waiting for the job to be initialized 
<br>
(wait on jobdat-&gt;launch_msg_processed) before continuing, thus calling :
<br>
<span class="quotelev1">             &gt; opal_progress()
</span><br>
<p>At this time, the send may complete, but since we will never go back to 
<br>
orte_rml_oob_send, we will never perform the launch (setting 
<br>
jobdat-&gt;launch_msg_processed to 1).
<br>
<p>I may try to solve the bug (this is quite a top priority problem for me), 
<br>
but maybe people who are more familiar with orted than I am may propose a 
<br>
nice and clean solution ...
<br>
<p>For those who like real (and complete) gdb stacks, here they are :
<br>
#0  0x0000003b7fed4f38 in poll () from /lib64/libc.so.6
<br>
#1  0x00007fd0de5d861a in poll_dispatch (base=0x930230, arg=0x91a4b0, tv=0x7fff0d977880) at poll.c:167
<br>
#2  0x00007fd0de5d586f in opal_event_base_loop (base=0x930230, flags=1) at event.c:823
<br>
#3  0x00007fd0de5d556b in opal_event_loop (flags=1) at event.c:746
<br>
#4  0x00007fd0de5aeb6d in opal_progress () at runtime/opal_progress.c:189
<br>
#5  0x00007fd0dd340a02 in daemon_collective (sender=0x97af50, data=0x97b010) at grpcomm_bad_module.c:696
<br>
#6  0x00007fd0dd341809 in process_msg (fd=-1, opal_event=1, data=0x97af20) at grpcomm_bad_module.c:901
<br>
#7  0x00007fd0de5d5334 in event_process_active (base=0x930230) at event.c:667
<br>
#8  0x00007fd0de5d597a in opal_event_base_loop (base=0x930230, flags=1) at event.c:839
<br>
#9  0x00007fd0de5d556b in opal_event_loop (flags=1) at event.c:746
<br>
#10 0x00007fd0de5aeb6d in opal_progress () at runtime/opal_progress.c:189
<br>
#11 0x00007fd0dd340a02 in daemon_collective (sender=0x979700, data=0x9676e0) at grpcomm_bad_module.c:696
<br>
#12 0x00007fd0dd341809 in process_msg (fd=-1, opal_event=1, data=0x9796d0) at grpcomm_bad_module.c:901
<br>
#13 0x00007fd0de5d5334 in event_process_active (base=0x930230) at event.c:667
<br>
#14 0x00007fd0de5d597a in opal_event_base_loop (base=0x930230, flags=1) at event.c:839
<br>
#15 0x00007fd0de5d556b in opal_event_loop (flags=1) at event.c:746
<br>
#16 0x00007fd0de5aeb6d in opal_progress () at runtime/opal_progress.c:189
<br>
#17 0x00007fd0dd340a02 in daemon_collective (sender=0x97b420, data=0x97b4e0) at grpcomm_bad_module.c:696
<br>
#18 0x00007fd0dd341809 in process_msg (fd=-1, opal_event=1, data=0x97b3f0) at grpcomm_bad_module.c:901
<br>
#19 0x00007fd0de5d5334 in event_process_active (base=0x930230) at event.c:667
<br>
#20 0x00007fd0de5d597a in opal_event_base_loop (base=0x930230, flags=1) at event.c:839
<br>
#21 0x00007fd0de5d556b in opal_event_loop (flags=1) at event.c:746
<br>
#22 0x00007fd0de5aeb6d in opal_progress () at runtime/opal_progress.c:189
<br>
#23 0x00007fd0dd969a8a in opal_condition_wait (c=0x97b210, m=0x97b1a8) at ../../../../opal/threads/condition.h:99
<br>
#24 0x00007fd0dd96a4bf in orte_rml_oob_send (peer=0x7fff0d9785a0, iov=0x7fff0d978530, count=1, tag=1, flags=16) at rml_oob_send.c:153
<br>
#25 0x00007fd0dd96ac4d in orte_rml_oob_send_buffer (peer=0x7fff0d9785a0, buffer=0x7fff0d9786b0, tag=1, flags=0) at rml_oob_send.c:270
<br>
#26 0x00007fd0de86ed2a in send_relay (buf=0x7fff0d9786b0) at orted/orted_comm.c:127
<br>
#27 0x00007fd0de86f6de in orte_daemon_cmd_processor (fd=-1, opal_event=1, data=0x965fc0) at orted/orted_comm.c:308
<br>
#28 0x00007fd0de5d5334 in event_process_active (base=0x930230) at event.c:667
<br>
#29 0x00007fd0de5d597a in opal_event_base_loop (base=0x930230, flags=0) at event.c:839
<br>
#30 0x00007fd0de5d556b in opal_event_loop (flags=0) at event.c:746
<br>
#31 0x00007fd0de5d5418 in opal_event_dispatch () at event.c:682
<br>
#32 0x00007fd0de86e339 in orte_daemon (argc=19, argv=0x7fff0d979ca8) at orted/orted_main.c:769
<br>
#33 0x00000000004008e2 in main (argc=19, argv=0x7fff0d979ca8) at orted.c:62
<br>
<p>Thanks in advance,
<br>
Sylvain
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7123.php">Ralph Castain: "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
<li><strong>Previous message:</strong> <a href="7121.php">Christopher Yeoh: "Re: [OMPI devel] mpool rdma deadlock - malloc implementation issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7123.php">Ralph Castain: "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
<li><strong>Reply:</strong> <a href="7123.php">Ralph Castain: "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
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
