<?
$subject_val = "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 19 09:51:38 2009" -->
<!-- isoreceived="20091119145138" -->
<!-- sent="Thu, 19 Nov 2009 15:52:45 +0100 (CET)" -->
<!-- isosent="20091119145245" -->
<!-- name="Sylvain Jeaugey" -->
<!-- email="sylvain.jeaugey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm" -->
<!-- id="alpine.DEB.2.00.0911191540360.14773_at_jeaugeys" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="A0940272-C146-45EC-ACC6-8B0D8239DA45_at_open-mpi.org" -->
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
<strong>From:</strong> Sylvain Jeaugey (<em>sylvain.jeaugey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-19 09:52:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7134.php">Ralph Castain: "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
<li><strong>Previous message:</strong> <a href="7132.php">Ralph Castain: "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
<li><strong>In reply to:</strong> <a href="7132.php">Ralph Castain: "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7134.php">Ralph Castain: "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
<li><strong>Reply:</strong> <a href="7134.php">Ralph Castain: "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you Ralph for this precious help.
<br>
<p>I setup a quick-and-dirty patch basically postponing process_msg (hence 
<br>
daemon_collective) until the launch is done. In process_msg, I therefore 
<br>
requeue a process_msg handler and return.
<br>
<p>In this &quot;all-must-be-non-blocking-and-done-through-opal_progress&quot; 
<br>
algorithm, I don't think that blocking calls like the one in 
<br>
daemon_collective should be allowed. This also applies to the blocking one 
<br>
in send_relay. [Well, actually, one is okay, 2 may lead to interlocking.]
<br>
<p>If you have time doing a nicer patch, it would be great and I would be 
<br>
happy to test it. Otherwise, I will try to implement your idea properly 
<br>
next week (with my limited knowledge of orted).
<br>
<p>For the record, here is the patch I'm currently testing at large scale :
<br>
<p>diff -r ec68298b3169 -r b622b9e8f1ac orte/mca/grpcomm/bad/grpcomm_bad_module.c
<br>
--- a/orte/mca/grpcomm/bad/grpcomm_bad_module.c Mon Nov 09 13:29:16 2009 +0100
<br>
+++ b/orte/mca/grpcomm/bad/grpcomm_bad_module.c Wed Nov 18 09:27:55 2009 +0100
<br>
@@ -687,14 +687,6 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_list_append(&amp;orte_local_jobdata, &amp;jobdat-&gt;super);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>-    /* it may be possible to get here prior to having actually finished processing our
<br>
-     * local launch msg due to the race condition between different nodes and when
<br>
-     * they start their individual procs. Hence, we have to first ensure that we
<br>
-     * -have- finished processing the launch msg, or else we won't know whether
<br>
-     * or not to wait before sending this on
<br>
-     */
<br>
-    ORTE_PROGRESSED_WAIT(jobdat-&gt;launch_msg_processed, 0, 1);
<br>
-
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* unpack the collective type */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;n = 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (ORTE_SUCCESS != (rc = opal_dss.unpack(data, &amp;jobdat-&gt;collective_type, &amp;n, ORTE_GRPCOMM_COLL_T))) {
<br>
@@ -894,6 +886,28 @@
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;proc = &amp;mev-&gt;sender;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;buf = mev-&gt;buffer;
<br>
+
<br>
+    jobdat = NULL;
<br>
+    for (item = opal_list_get_first(&amp;orte_local_jobdata);
<br>
+         item != opal_list_get_end(&amp;orte_local_jobdata);
<br>
+         item = opal_list_get_next(item)) {
<br>
+        jobdat = (orte_odls_job_t*)item;
<br>
+
<br>
+        /* is this the specified job? */
<br>
+        if (jobdat-&gt;jobid == proc-&gt;jobid) {
<br>
+            break;
<br>
+        }
<br>
+    }
<br>
+    if (NULL == jobdat || jobdat-&gt;launch_msg_processed != 1) {
<br>
+        /* it may be possible to get here prior to having actually finished processing our
<br>
+         * local launch msg due to the race condition between different nodes and when
<br>
+         * they start their individual procs. Hence, we have to first ensure that we
<br>
+         * -have- finished processing the launch msg. Requeue this event until it is done.
<br>
+         */
<br>
+        int tag = &amp;mev-&gt;tag;
<br>
+        ORTE_MESSAGE_EVENT(proc, buf, tag, process_msg);
<br>
+        return;
<br>
+    }
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* is the sender a local proc, or a daemon relaying the collective? */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (ORTE_PROC_MY_NAME-&gt;jobid == proc-&gt;jobid) {
<br>
<p>Sylvain
<br>
<p>On Thu, 19 Nov 2009, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Very strange. As I said, we routinely launch jobs spanning several 
</span><br>
<span class="quotelev1">&gt; hundred nodes without problem. You can see the platform files for that 
</span><br>
<span class="quotelev1">&gt; setup in contrib/platform/lanl/tlcc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That said, it is always possible you are hitting some kind of race 
</span><br>
<span class="quotelev1">&gt; condition we don't hit. In looking at the code, one possibility would be 
</span><br>
<span class="quotelev1">&gt; to make all the communications flow through the daemon cmd processor in 
</span><br>
<span class="quotelev1">&gt; orte/orted_comm.c. This is the way it used to work until I reorganized 
</span><br>
<span class="quotelev1">&gt; the code a year ago for other reasons that never materialized.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Unfortunately, the daemon collective has to wait until the local launch 
</span><br>
<span class="quotelev1">&gt; cmd has been completely processed so it can know whether or not to wait 
</span><br>
<span class="quotelev1">&gt; for contributions from local procs before sending along the collective 
</span><br>
<span class="quotelev1">&gt; message, so this kinda limits our options.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; About the only other thing you could do would be to not send the relay 
</span><br>
<span class="quotelev1">&gt; at all until -after- processing the local launch cmd. You can then 
</span><br>
<span class="quotelev1">&gt; remove the &quot;wait&quot; in the daemon collective as you will know how many 
</span><br>
<span class="quotelev1">&gt; local procs are involved, if any.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I used to do it that way and it guarantees it will work. The negative is 
</span><br>
<span class="quotelev1">&gt; that we lose some launch speed as the next nodes in the tree don't get 
</span><br>
<span class="quotelev1">&gt; the launch message until this node finishes launching all its procs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The way around that, of course, would be to:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1.  process the launch message, thus extracting the number of any local 
</span><br>
<span class="quotelev1">&gt; procs and setting up all data structures...but do -not- launch the procs 
</span><br>
<span class="quotelev1">&gt; at this time (as this is what takes all the time)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. send the relay - the daemon collective can now proceed without a 
</span><br>
<span class="quotelev1">&gt; &quot;wait&quot; in it
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. now launch the local procs
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It would be a fairly simple reorganization of the code in the 
</span><br>
<span class="quotelev1">&gt; orte/mca/odls area. I can do it this weekend if you like, or you can do 
</span><br>
<span class="quotelev1">&gt; it - either way is fine, but if you do it, please contribute it back to 
</span><br>
<span class="quotelev1">&gt; the trunk.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 19, 2009, at 1:39 AM, Sylvain Jeaugey wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I would say I use the default settings, i.e. I don't set anything &quot;special&quot; at configure.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm launching my processes with SLURM (salloc + mpirun).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sylvain
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, 18 Nov 2009, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; How did you configure OMPI?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What launch mechanism are you using - ssh?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Nov 17, 2009, at 9:01 AM, Sylvain Jeaugey wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I don't think so, and I'm not doing it explicitely at least. How do I know ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sylvain
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Tue, 17 Nov 2009, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; We routinely launch across thousands of nodes without a problem...I have never seen it stick in this fashion.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Did you build and/or are using ORTE threaded by any chance? If so, that definitely won't work.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Nov 17, 2009, at 9:27 AM, Sylvain Jeaugey wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hi all,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; We are currently experiencing problems at launch on the 1.5 branch on relatively large number of nodes (at least 80). Some processes are not spawned and orted processes are deadlocked.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; When MPI processes are calling MPI_Init before send_relay is complete, the send_relay function and the daemon_collective function are doing a nice interlock :
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Here is the scenario :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; send_relay
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; performs the send tree :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; orte_rml_oob_send_buffer
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; orte_rml_oob_send
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt; &gt; opal_wait_condition
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Waiting on completion from send thus calling opal_progress()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;   &gt; opal_progress()
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; But since a collective request arrived from the network, entered :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;     &gt; daemon_collective
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; However, daemon_collective is waiting for the job to be initialized (wait on jobdat-&gt;launch_msg_processed) before continuing, thus calling :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;       &gt; opal_progress()
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; At this time, the send may complete, but since we will never go back to orte_rml_oob_send, we will never perform the launch (setting jobdat-&gt;launch_msg_processed to 1).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I may try to solve the bug (this is quite a top priority problem for me), but maybe people who are more familiar with orted than I am may propose a nice and clean solution ...
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; For those who like real (and complete) gdb stacks, here they are :
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #0  0x0000003b7fed4f38 in poll () from /lib64/libc.so.6
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #1  0x00007fd0de5d861a in poll_dispatch (base=0x930230, arg=0x91a4b0, tv=0x7fff0d977880) at poll.c:167
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #2  0x00007fd0de5d586f in opal_event_base_loop (base=0x930230, flags=1) at event.c:823
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #3  0x00007fd0de5d556b in opal_event_loop (flags=1) at event.c:746
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #4  0x00007fd0de5aeb6d in opal_progress () at runtime/opal_progress.c:189
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #5  0x00007fd0dd340a02 in daemon_collective (sender=0x97af50, data=0x97b010) at grpcomm_bad_module.c:696
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #6  0x00007fd0dd341809 in process_msg (fd=-1, opal_event=1, data=0x97af20) at grpcomm_bad_module.c:901
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #7  0x00007fd0de5d5334 in event_process_active (base=0x930230) at event.c:667
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #8  0x00007fd0de5d597a in opal_event_base_loop (base=0x930230, flags=1) at event.c:839
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #9  0x00007fd0de5d556b in opal_event_loop (flags=1) at event.c:746
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #10 0x00007fd0de5aeb6d in opal_progress () at runtime/opal_progress.c:189
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #11 0x00007fd0dd340a02 in daemon_collective (sender=0x979700, data=0x9676e0) at grpcomm_bad_module.c:696
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #12 0x00007fd0dd341809 in process_msg (fd=-1, opal_event=1, data=0x9796d0) at grpcomm_bad_module.c:901
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #13 0x00007fd0de5d5334 in event_process_active (base=0x930230) at event.c:667
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #14 0x00007fd0de5d597a in opal_event_base_loop (base=0x930230, flags=1) at event.c:839
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #15 0x00007fd0de5d556b in opal_event_loop (flags=1) at event.c:746
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #16 0x00007fd0de5aeb6d in opal_progress () at runtime/opal_progress.c:189
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #17 0x00007fd0dd340a02 in daemon_collective (sender=0x97b420, data=0x97b4e0) at grpcomm_bad_module.c:696
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #18 0x00007fd0dd341809 in process_msg (fd=-1, opal_event=1, data=0x97b3f0) at grpcomm_bad_module.c:901
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #19 0x00007fd0de5d5334 in event_process_active (base=0x930230) at event.c:667
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #20 0x00007fd0de5d597a in opal_event_base_loop (base=0x930230, flags=1) at event.c:839
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #21 0x00007fd0de5d556b in opal_event_loop (flags=1) at event.c:746
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #22 0x00007fd0de5aeb6d in opal_progress () at runtime/opal_progress.c:189
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #23 0x00007fd0dd969a8a in opal_condition_wait (c=0x97b210, m=0x97b1a8) at ../../../../opal/threads/condition.h:99
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #24 0x00007fd0dd96a4bf in orte_rml_oob_send (peer=0x7fff0d9785a0, iov=0x7fff0d978530, count=1, tag=1, flags=16) at rml_oob_send.c:153
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #25 0x00007fd0dd96ac4d in orte_rml_oob_send_buffer (peer=0x7fff0d9785a0, buffer=0x7fff0d9786b0, tag=1, flags=0) at rml_oob_send.c:270
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #26 0x00007fd0de86ed2a in send_relay (buf=0x7fff0d9786b0) at orted/orted_comm.c:127
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #27 0x00007fd0de86f6de in orte_daemon_cmd_processor (fd=-1, opal_event=1, data=0x965fc0) at orted/orted_comm.c:308
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #28 0x00007fd0de5d5334 in event_process_active (base=0x930230) at event.c:667
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #29 0x00007fd0de5d597a in opal_event_base_loop (base=0x930230, flags=0) at event.c:839
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #30 0x00007fd0de5d556b in opal_event_loop (flags=0) at event.c:746
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #31 0x00007fd0de5d5418 in opal_event_dispatch () at event.c:682
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #32 0x00007fd0de86e339 in orte_daemon (argc=19, argv=0x7fff0d979ca8) at orted/orted_main.c:769
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #33 0x00000000004008e2 in main (argc=19, argv=0x7fff0d979ca8) at orted.c:62
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Thanks in advance,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Sylvain
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7134.php">Ralph Castain: "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
<li><strong>Previous message:</strong> <a href="7132.php">Ralph Castain: "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
<li><strong>In reply to:</strong> <a href="7132.php">Ralph Castain: "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7134.php">Ralph Castain: "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
<li><strong>Reply:</strong> <a href="7134.php">Ralph Castain: "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
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
