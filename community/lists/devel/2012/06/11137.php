<?
$subject_val = "Re: [OMPI devel] hang with launch including remote nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 21 07:18:25 2012" -->
<!-- isoreceived="20120621111825" -->
<!-- sent="Thu, 21 Jun 2012 05:18:18 -0600" -->
<!-- isosent="20120621111818" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] hang with launch including remote nodes" -->
<!-- id="CCE87824-8B38-499D-A11B-95BB15194653_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4FE2998D.5020508_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] hang with launch including remote nodes<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-21 07:18:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11138.php">Jeff Squyres: "Re: [OMPI devel] SVN / Trac appears to be down"</a>
<li><strong>Previous message:</strong> <a href="11136.php">Jeff Squyres: "[OMPI devel] SVN / Trac appears to be down"</a>
<li><strong>In reply to:</strong> <a href="11133.php">Eugene Loh: "Re: [OMPI devel] hang with launch including remote nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11148.php">Ralph Castain: "Re: [OMPI devel] hang with launch including remote nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Got it! Will take a little thinking to fix - it's basically a conflict between rollup and tree spawn. For now, you can run with:
<br>
<p>-mca orte_use_common_port 0 -mca plm_rsh_no_tree_spawn 1
<br>
<p>Sorry about that - thanks for letting me know!
<br>
Ralph
<br>
<p><p>On Jun 20, 2012, at 9:48 PM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; On 06/19/12 23:11, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Also, how did you configure this version?
</span><br>
<span class="quotelev1">&gt;  --enable-heterogeneous
</span><br>
<span class="quotelev1">&gt;  --enable-cxx-exceptions
</span><br>
<span class="quotelev1">&gt;  --enable-shared
</span><br>
<span class="quotelev1">&gt;  --enable-orterun-prefix-by-default
</span><br>
<span class="quotelev1">&gt;  --with-sge
</span><br>
<span class="quotelev1">&gt;  --enable-mpi-f90
</span><br>
<span class="quotelev1">&gt;  --with-mpi-f90-size=small
</span><br>
<span class="quotelev1">&gt;  --disable-peruse
</span><br>
<span class="quotelev1">&gt;  --disable-mpi-thread-multiple
</span><br>
<span class="quotelev1">&gt;  --disable-debug
</span><br>
<span class="quotelev1">&gt;  --disable-mem-debug
</span><br>
<span class="quotelev1">&gt;  --disable-mem-profile
</span><br>
<span class="quotelev1">&gt;  --enable-contrib-no-build=vt
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  If you had --disable-static, then there was a bug that would indeed cause a hang. Just committing that fix now.
</span><br>
<span class="quotelev1">&gt; I still get a hang even with r26623.
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 19, 2012, at 9:01 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; See if it works with -mca orte_use_common_port 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I get a segfault:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [remote1:01409] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [remote1:01409] Signal: Segmentation Fault (11)
</span><br>
<span class="quotelev1">&gt; [remote1:01409] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [remote1:01409] Failing at address: 2c
</span><br>
<span class="quotelev1">&gt; /home/eugene/r26609/lib/libopen-rte.so.0.0.0'show_stackframe+0x7d0
</span><br>
<span class="quotelev1">&gt; /lib/amd64/libc.so.1'__sighndlr+0x6
</span><br>
<span class="quotelev1">&gt; /lib/amd64/libc.so.1'call_user_handler+0x2c5
</span><br>
<span class="quotelev1">&gt; /home/eugene/r26609/lib/libopen-rte.so.0.0.0'orte_grpcomm_base_rollup_recv+0x73 [Signal 11 (SEGV)]
</span><br>
<span class="quotelev1">&gt; /home/eugene/r26609/lib/openmpi/mca_rml_oob.so'orte_rml_recv_msg_callback+0x9c 
</span><br>
<span class="quotelev1">&gt; /home/eugene/r26609/lib/openmpi/mca_oob_tcp.so'mca_oob_tcp_msg_data+0x283
</span><br>
<span class="quotelev1">&gt; /home/eugene/r26609/lib/libopen-rte.so.0.0.0'event_process_active_single_queue+0x54c 
</span><br>
<span class="quotelev1">&gt; /home/eugene/r26609/lib/libopen-rte.so.0.0.0'event_process_active+0x41
</span><br>
<span class="quotelev1">&gt; /home/eugene/r26609/lib/libopen-rte.so.0.0.0'opal_libevent2019_event_base_loop+0x606 
</span><br>
<span class="quotelev1">&gt; /home/eugene/r26609/lib/libopen-rte.so.0.0.0'orte_daemon+0xd6d
</span><br>
<span class="quotelev1">&gt; /home/eugene/r26609/bin/orted'0xd4b
</span><br>
<span class="quotelev1">&gt; [remote1:01409] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; Segmentation Fault (core dumped)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jun 19, 2012, at 8:31 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm having bad luck with the trunk starting with r26609.  Basically, things hang if I run
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   mpirun -H remote1,remote2 -n 2 hostname
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; where remote1 and remote2 are remote nodes.
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
<li><strong>Next message:</strong> <a href="11138.php">Jeff Squyres: "Re: [OMPI devel] SVN / Trac appears to be down"</a>
<li><strong>Previous message:</strong> <a href="11136.php">Jeff Squyres: "[OMPI devel] SVN / Trac appears to be down"</a>
<li><strong>In reply to:</strong> <a href="11133.php">Eugene Loh: "Re: [OMPI devel] hang with launch including remote nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11148.php">Ralph Castain: "Re: [OMPI devel] hang with launch including remote nodes"</a>
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
