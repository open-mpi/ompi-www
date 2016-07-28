<?
$subject_val = "Re: [OMPI devel] orte_barrier: Assertion `0 == item-&gt;opal_list_item_refcount' failed.";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  9 17:46:31 2014" -->
<!-- isoreceived="20140109224631" -->
<!-- sent="Thu, 9 Jan 2014 23:46:31 +0100" -->
<!-- isosent="20140109224631" -->
<!-- name="Adrian Reber" -->
<!-- email="adrian_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] orte_barrier: Assertion `0 == item-&amp;gt;opal_list_item_refcount' failed." -->
<!-- id="20140109224631.GI20741_at_lisas.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140109162801.GD20741_at_lisas.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] orte_barrier: Assertion `0 == item-&gt;opal_list_item_refcount' failed.<br>
<strong>From:</strong> Adrian Reber (<em>adrian_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-09 17:46:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13645.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<li><strong>Previous message:</strong> <a href="13643.php">Ralph Castain: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<li><strong>In reply to:</strong> <a href="13628.php">Adrian Reber: "[OMPI devel] orte_barrier: Assertion `0 == item-&gt;opal_list_item_refcount' failed."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13646.php">Ralph Castain: "Re: [OMPI devel] orte_barrier: Assertion `0 == item-&gt;opal_list_item_refcount' failed."</a>
<li><strong>Reply:</strong> <a href="13646.php">Ralph Castain: "Re: [OMPI devel] orte_barrier: Assertion `0 == item-&gt;opal_list_item_refcount' failed."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
For my CR work this can probably ignored. I think I was looking at the
<br>
wrong place.
<br>
<p>On Thu, Jan 09, 2014 at 05:28:01PM +0100, Adrian Reber wrote:
<br>
<span class="quotelev1">&gt; Continuing with the CR code I now get a crash which can be easily reproduced
</span><br>
<span class="quotelev1">&gt; using orte/test/system/orte_barrier.c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I get:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; orte_barrier: ../../../../../opal/class/opal_list.h:547: _opal_list_append: Assertion `0 == item-&gt;opal_list_item_refcount' failed.
</span><br>
<span class="quotelev1">&gt; [dcbz:05085] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [dcbz:05085] Signal: Aborted (6)
</span><br>
<span class="quotelev1">&gt; [dcbz:05085] Signal code:  (-6)
</span><br>
<span class="quotelev1">&gt; [dcbz:05085] [ 0] /lib64/libpthread.so.0(+0xf750)[0x7f95bca0b750]
</span><br>
<span class="quotelev1">&gt; [dcbz:05085] [ 1] /lib64/libc.so.6(gsignal+0x39)[0x7f95bc672c59]
</span><br>
<span class="quotelev1">&gt; [dcbz:05085] [ 2] /lib64/libc.so.6(abort+0x148)[0x7f95bc674368]
</span><br>
<span class="quotelev1">&gt; [dcbz:05085] [ 3] /lib64/libc.so.6(+0x2ebb6)[0x7f95bc66bbb6]
</span><br>
<span class="quotelev1">&gt; [dcbz:05085] [ 4] /lib64/libc.so.6(+0x2ec62)[0x7f95bc66bc62]
</span><br>
<span class="quotelev1">&gt; [dcbz:05085] [ 5] /home/adrian/devel/openmpi-trunk/lib/libopen-rte.so.0(+0x86975)[0x7f95bcfbd975]
</span><br>
<span class="quotelev1">&gt; [dcbz:05085] [ 6] /home/adrian/devel/openmpi-trunk/lib/libopen-rte.so.0(+0x86d9a)[0x7f95bcfbdd9a]
</span><br>
<span class="quotelev1">&gt; [dcbz:05085] [ 7] /home/adrian/devel/openmpi-trunk/lib/libopen-pal.so.0(+0x8c831)[0x7f95bcca5831]
</span><br>
<span class="quotelev1">&gt; [dcbz:05085] [ 8] /home/adrian/devel/openmpi-trunk/lib/libopen-pal.so.0(+0x8caa3)[0x7f95bcca5aa3]
</span><br>
<span class="quotelev1">&gt; [dcbz:05085] [ 9] /home/adrian/devel/openmpi-trunk/lib/libopen-pal.so.0(opal_libevent2021_event_base_loop+0x2c1)[0x7f95bcca611f]
</span><br>
<span class="quotelev1">&gt; [dcbz:05085] [10] /home/adrian/devel/openmpi-trunk/lib/libopen-rte.so.0(+0x2233b)[0x7f95bcf5933b]
</span><br>
<span class="quotelev1">&gt; [dcbz:05085] [11] /lib64/libpthread.so.0(+0x7f33)[0x7f95bca03f33]
</span><br>
<span class="quotelev1">&gt; [dcbz:05085] [12] /lib64/libc.so.6(clone+0x6d)[0x7f95bc731ead]
</span><br>
<span class="quotelev1">&gt; [dcbz:05085] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; orterun noticed that process rank 0 with PID 5085 on node dcbz exited on signal 6 (Aborted).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and in gdb
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [New LWP 5086]
</span><br>
<span class="quotelev1">&gt; [New LWP 5085]
</span><br>
<span class="quotelev1">&gt; [Thread debugging using libthread_db enabled]
</span><br>
<span class="quotelev1">&gt; Using host libthread_db library &quot;/lib64/libthread_db.so.1&quot;.
</span><br>
<span class="quotelev1">&gt; Core was generated by `system/orte_barrier'.
</span><br>
<span class="quotelev1">&gt; Program terminated with signal SIGABRT, Aborted.
</span><br>
<span class="quotelev1">&gt; #0  0x00007f95bc672c59 in __GI_raise (sig=sig_at_entry=6) at ../nptl/sysdeps/unix/sysv/linux/raise.c:56
</span><br>
<span class="quotelev1">&gt; 56	  return INLINE_SYSCALL (tgkill, 3, pid, selftid, sig);
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0x00007f95bc672c59 in __GI_raise (sig=sig_at_entry=6) at ../nptl/sysdeps/unix/sysv/linux/raise.c:56
</span><br>
<span class="quotelev1">&gt; #1  0x00007f95bc6744a8 in __GI_abort () at abort.c:118
</span><br>
<span class="quotelev1">&gt; #2  0x00007f95bc66bbb6 in __assert_fail_base (fmt=0x7f95bc7b8ea8 &quot;%s%s%s:%u: %s%sAssertion `%s' failed.\n%n&quot;, 
</span><br>
<span class="quotelev1">&gt;     assertion=assertion_at_entry=0x7f95bd06d6c0 &quot;0 == item-&gt;opal_list_item_refcount&quot;, 
</span><br>
<span class="quotelev1">&gt;     file=file_at_entry=0x7f95bd06d600 &quot;../../../../../opal/class/opal_list.h&quot;, line=line_at_entry=547, 
</span><br>
<span class="quotelev1">&gt;     function=function_at_entry=0x7f95bd06d9d0 &lt;__PRETTY_FUNCTION__.4605&gt; &quot;_opal_list_append&quot;) at assert.c:92
</span><br>
<span class="quotelev1">&gt; #3  0x00007f95bc66bc62 in __GI___assert_fail (assertion=0x7f95bd06d6c0 &quot;0 == item-&gt;opal_list_item_refcount&quot;, 
</span><br>
<span class="quotelev1">&gt;     file=0x7f95bd06d600 &quot;../../../../../opal/class/opal_list.h&quot;, line=547, 
</span><br>
<span class="quotelev1">&gt;     function=0x7f95bd06d9d0 &lt;__PRETTY_FUNCTION__.4605&gt; &quot;_opal_list_append&quot;) at assert.c:101
</span><br>
<span class="quotelev1">&gt; #4  0x00007f95bcfbd975 in _opal_list_append (list=0x7f95bd2b9408 &lt;orte_grpcomm_base+8&gt;, item=0x1f35be0, 
</span><br>
<span class="quotelev1">&gt;     FILE_NAME=0x7f95bd06d718 &quot;../../../../../orte/mca/grpcomm/bad/grpcomm_bad_module.c&quot;, LINENO=163)
</span><br>
<span class="quotelev1">&gt;     at ../../../../../opal/class/opal_list.h:547
</span><br>
<span class="quotelev1">&gt; #5  0x00007f95bcfbdd9a in process_barrier (fd=-1, args=4, cbdata=0x1f35ed0) at ../../../../../orte/mca/grpcomm/bad/grpcomm_bad_module.c:163
</span><br>
<span class="quotelev1">&gt; #6  0x00007f95bcca5831 in event_process_active_single_queue (base=0x1ef63a0, activeq=0x1ef6360)
</span><br>
<span class="quotelev1">&gt;     at ../../../../../../opal/mca/event/libevent2021/libevent/event.c:1367
</span><br>
<span class="quotelev1">&gt; #7  0x00007f95bcca5aa3 in event_process_active (base=0x1ef63a0) at ../../../../../../opal/mca/event/libevent2021/libevent/event.c:1437
</span><br>
<span class="quotelev1">&gt; #8  0x00007f95bcca611f in opal_libevent2021_event_base_loop (base=0x1ef63a0, flags=1)
</span><br>
<span class="quotelev1">&gt;     at ../../../../../../opal/mca/event/libevent2021/libevent/event.c:1645
</span><br>
<span class="quotelev1">&gt; #9  0x00007f95bcf5933b in orte_progress_thread_engine (obj=0x7f95bd2b9160 &lt;orte_progress_thread&gt;) at ../../orte/runtime/orte_init.c:180
</span><br>
<span class="quotelev1">&gt; #10 0x00007f95bca03f33 in start_thread (arg=0x7f95bbb0d700) at pthread_create.c:309
</span><br>
<span class="quotelev1">&gt; #11 0x00007f95bc731ead in clone () at ../sysdeps/unix/sysv/linux/x86_64/clone.S:111
</span><br>
<span class="quotelev1">&gt; (gdb) 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As far as I understand it seems to call opal_list_append() twice in
</span><br>
<span class="quotelev1">&gt; orte/mca/grpcomm/bad/grpcomm_bad_module.c:163
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; opal_list_append(&amp;orte_grpcomm_base.active_colls, &amp;coll-&gt;super);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have no idea how to fix this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 		Adrian
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
<li><strong>Next message:</strong> <a href="13645.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<li><strong>Previous message:</strong> <a href="13643.php">Ralph Castain: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<li><strong>In reply to:</strong> <a href="13628.php">Adrian Reber: "[OMPI devel] orte_barrier: Assertion `0 == item-&gt;opal_list_item_refcount' failed."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13646.php">Ralph Castain: "Re: [OMPI devel] orte_barrier: Assertion `0 == item-&gt;opal_list_item_refcount' failed."</a>
<li><strong>Reply:</strong> <a href="13646.php">Ralph Castain: "Re: [OMPI devel] orte_barrier: Assertion `0 == item-&gt;opal_list_item_refcount' failed."</a>
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
