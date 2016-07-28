<?
$subject_val = "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 17 09:56:21 2009" -->
<!-- isoreceived="20091117145621" -->
<!-- sent="Tue, 17 Nov 2009 07:56:05 -0700" -->
<!-- isosent="20091117145605" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm" -->
<!-- id="503D35EA-7970-4FB0-A7A3-B6DE228129B7_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="alpine.DEB.2.00.0911171705550.12576_at_jeaugeys" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-17 09:56:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7124.php">Sylvain Jeaugey: "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
<li><strong>Previous message:</strong> <a href="7122.php">Sylvain Jeaugey: "[OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
<li><strong>In reply to:</strong> <a href="7122.php">Sylvain Jeaugey: "[OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7124.php">Sylvain Jeaugey: "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
<li><strong>Reply:</strong> <a href="7124.php">Sylvain Jeaugey: "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We routinely launch across thousands of nodes without a problem...I have never seen it stick in this fashion.
<br>
<p>Did you build and/or are using ORTE threaded by any chance? If so, that definitely won't work.
<br>
<p>On Nov 17, 2009, at 9:27 AM, Sylvain Jeaugey wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We are currently experiencing problems at launch on the 1.5 branch on relatively large number of nodes (at least 80). Some processes are not spawned and orted processes are deadlocked.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When MPI processes are calling MPI_Init before send_relay is complete, the send_relay function and the daemon_collective function are doing a nice interlock :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is the scenario :
</span><br>
<span class="quotelev2">&gt;&gt; send_relay
</span><br>
<span class="quotelev1">&gt; performs the send tree :
</span><br>
<span class="quotelev2">&gt;  &gt; orte_rml_oob_send_buffer
</span><br>
<span class="quotelev2">&gt;    &gt; orte_rml_oob_send
</span><br>
<span class="quotelev2">&gt;      &gt; opal_wait_condition
</span><br>
<span class="quotelev1">&gt; Waiting on completion from send thus calling opal_progress()
</span><br>
<span class="quotelev2">&gt;        &gt; opal_progress()
</span><br>
<span class="quotelev1">&gt; But since a collective request arrived from the network, entered :
</span><br>
<span class="quotelev2">&gt;          &gt; daemon_collective
</span><br>
<span class="quotelev1">&gt; However, daemon_collective is waiting for the job to be initialized (wait on jobdat-&gt;launch_msg_processed) before continuing, thus calling :
</span><br>
<span class="quotelev2">&gt;            &gt; opal_progress()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; At this time, the send may complete, but since we will never go back to orte_rml_oob_send, we will never perform the launch (setting jobdat-&gt;launch_msg_processed to 1).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I may try to solve the bug (this is quite a top priority problem for me), but maybe people who are more familiar with orted than I am may propose a nice and clean solution ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For those who like real (and complete) gdb stacks, here they are :
</span><br>
<span class="quotelev1">&gt; #0  0x0000003b7fed4f38 in poll () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #1  0x00007fd0de5d861a in poll_dispatch (base=0x930230, arg=0x91a4b0, tv=0x7fff0d977880) at poll.c:167
</span><br>
<span class="quotelev1">&gt; #2  0x00007fd0de5d586f in opal_event_base_loop (base=0x930230, flags=1) at event.c:823
</span><br>
<span class="quotelev1">&gt; #3  0x00007fd0de5d556b in opal_event_loop (flags=1) at event.c:746
</span><br>
<span class="quotelev1">&gt; #4  0x00007fd0de5aeb6d in opal_progress () at runtime/opal_progress.c:189
</span><br>
<span class="quotelev1">&gt; #5  0x00007fd0dd340a02 in daemon_collective (sender=0x97af50, data=0x97b010) at grpcomm_bad_module.c:696
</span><br>
<span class="quotelev1">&gt; #6  0x00007fd0dd341809 in process_msg (fd=-1, opal_event=1, data=0x97af20) at grpcomm_bad_module.c:901
</span><br>
<span class="quotelev1">&gt; #7  0x00007fd0de5d5334 in event_process_active (base=0x930230) at event.c:667
</span><br>
<span class="quotelev1">&gt; #8  0x00007fd0de5d597a in opal_event_base_loop (base=0x930230, flags=1) at event.c:839
</span><br>
<span class="quotelev1">&gt; #9  0x00007fd0de5d556b in opal_event_loop (flags=1) at event.c:746
</span><br>
<span class="quotelev1">&gt; #10 0x00007fd0de5aeb6d in opal_progress () at runtime/opal_progress.c:189
</span><br>
<span class="quotelev1">&gt; #11 0x00007fd0dd340a02 in daemon_collective (sender=0x979700, data=0x9676e0) at grpcomm_bad_module.c:696
</span><br>
<span class="quotelev1">&gt; #12 0x00007fd0dd341809 in process_msg (fd=-1, opal_event=1, data=0x9796d0) at grpcomm_bad_module.c:901
</span><br>
<span class="quotelev1">&gt; #13 0x00007fd0de5d5334 in event_process_active (base=0x930230) at event.c:667
</span><br>
<span class="quotelev1">&gt; #14 0x00007fd0de5d597a in opal_event_base_loop (base=0x930230, flags=1) at event.c:839
</span><br>
<span class="quotelev1">&gt; #15 0x00007fd0de5d556b in opal_event_loop (flags=1) at event.c:746
</span><br>
<span class="quotelev1">&gt; #16 0x00007fd0de5aeb6d in opal_progress () at runtime/opal_progress.c:189
</span><br>
<span class="quotelev1">&gt; #17 0x00007fd0dd340a02 in daemon_collective (sender=0x97b420, data=0x97b4e0) at grpcomm_bad_module.c:696
</span><br>
<span class="quotelev1">&gt; #18 0x00007fd0dd341809 in process_msg (fd=-1, opal_event=1, data=0x97b3f0) at grpcomm_bad_module.c:901
</span><br>
<span class="quotelev1">&gt; #19 0x00007fd0de5d5334 in event_process_active (base=0x930230) at event.c:667
</span><br>
<span class="quotelev1">&gt; #20 0x00007fd0de5d597a in opal_event_base_loop (base=0x930230, flags=1) at event.c:839
</span><br>
<span class="quotelev1">&gt; #21 0x00007fd0de5d556b in opal_event_loop (flags=1) at event.c:746
</span><br>
<span class="quotelev1">&gt; #22 0x00007fd0de5aeb6d in opal_progress () at runtime/opal_progress.c:189
</span><br>
<span class="quotelev1">&gt; #23 0x00007fd0dd969a8a in opal_condition_wait (c=0x97b210, m=0x97b1a8) at ../../../../opal/threads/condition.h:99
</span><br>
<span class="quotelev1">&gt; #24 0x00007fd0dd96a4bf in orte_rml_oob_send (peer=0x7fff0d9785a0, iov=0x7fff0d978530, count=1, tag=1, flags=16) at rml_oob_send.c:153
</span><br>
<span class="quotelev1">&gt; #25 0x00007fd0dd96ac4d in orte_rml_oob_send_buffer (peer=0x7fff0d9785a0, buffer=0x7fff0d9786b0, tag=1, flags=0) at rml_oob_send.c:270
</span><br>
<span class="quotelev1">&gt; #26 0x00007fd0de86ed2a in send_relay (buf=0x7fff0d9786b0) at orted/orted_comm.c:127
</span><br>
<span class="quotelev1">&gt; #27 0x00007fd0de86f6de in orte_daemon_cmd_processor (fd=-1, opal_event=1, data=0x965fc0) at orted/orted_comm.c:308
</span><br>
<span class="quotelev1">&gt; #28 0x00007fd0de5d5334 in event_process_active (base=0x930230) at event.c:667
</span><br>
<span class="quotelev1">&gt; #29 0x00007fd0de5d597a in opal_event_base_loop (base=0x930230, flags=0) at event.c:839
</span><br>
<span class="quotelev1">&gt; #30 0x00007fd0de5d556b in opal_event_loop (flags=0) at event.c:746
</span><br>
<span class="quotelev1">&gt; #31 0x00007fd0de5d5418 in opal_event_dispatch () at event.c:682
</span><br>
<span class="quotelev1">&gt; #32 0x00007fd0de86e339 in orte_daemon (argc=19, argv=0x7fff0d979ca8) at orted/orted_main.c:769
</span><br>
<span class="quotelev1">&gt; #33 0x00000000004008e2 in main (argc=19, argv=0x7fff0d979ca8) at orted.c:62
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance,
</span><br>
<span class="quotelev1">&gt; Sylvain
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
<li><strong>Next message:</strong> <a href="7124.php">Sylvain Jeaugey: "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
<li><strong>Previous message:</strong> <a href="7122.php">Sylvain Jeaugey: "[OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
<li><strong>In reply to:</strong> <a href="7122.php">Sylvain Jeaugey: "[OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7124.php">Sylvain Jeaugey: "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
<li><strong>Reply:</strong> <a href="7124.php">Sylvain Jeaugey: "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
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
