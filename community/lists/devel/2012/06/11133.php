<?
$subject_val = "Re: [OMPI devel] hang with launch including remote nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 20 23:48:39 2012" -->
<!-- isoreceived="20120621034839" -->
<!-- sent="Wed, 20 Jun 2012 23:48:29 -0400" -->
<!-- isosent="20120621034829" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] hang with launch including remote nodes" -->
<!-- id="4FE2998D.5020508_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B6FE533C-DF5C-49B5-A53B-20AA5289B193_at_open-mpi.org" -->
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
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-20 23:48:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11134.php">TERRY DONTJE: "Re: [OMPI devel] OpenIB compile error"</a>
<li><strong>Previous message:</strong> <a href="11132.php">Jeff Squyres: "Re: [OMPI devel] OpenIB compile error"</a>
<li><strong>In reply to:</strong> <a href="11127.php">Ralph Castain: "Re: [OMPI devel] hang with launch including remote nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11137.php">Ralph Castain: "Re: [OMPI devel] hang with launch including remote nodes"</a>
<li><strong>Reply:</strong> <a href="11137.php">Ralph Castain: "Re: [OMPI devel] hang with launch including remote nodes"</a>
<li><strong>Reply:</strong> <a href="11148.php">Ralph Castain: "Re: [OMPI devel] hang with launch including remote nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 06/19/12 23:11, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Also, how did you configure this version?
</span><br>
&nbsp;&nbsp;&nbsp;--enable-heterogeneous
<br>
&nbsp;&nbsp;&nbsp;--enable-cxx-exceptions
<br>
&nbsp;&nbsp;&nbsp;--enable-shared
<br>
&nbsp;&nbsp;&nbsp;--enable-orterun-prefix-by-default
<br>
&nbsp;&nbsp;&nbsp;--with-sge
<br>
&nbsp;&nbsp;&nbsp;--enable-mpi-f90
<br>
&nbsp;&nbsp;&nbsp;--with-mpi-f90-size=small
<br>
&nbsp;&nbsp;&nbsp;--disable-peruse
<br>
&nbsp;&nbsp;&nbsp;--disable-mpi-thread-multiple
<br>
&nbsp;&nbsp;&nbsp;--disable-debug
<br>
&nbsp;&nbsp;&nbsp;--disable-mem-debug
<br>
&nbsp;&nbsp;&nbsp;--disable-mem-profile
<br>
&nbsp;&nbsp;&nbsp;--enable-contrib-no-build=vt
<br>
<p><span class="quotelev1">&gt;   If you had --disable-static, then there was a bug that would indeed cause a hang. Just committing that fix now.
</span><br>
I still get a hang even with r26623.
<br>
<span class="quotelev1">&gt; On Jun 19, 2012, at 9:01 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; See if it works with -mca orte_use_common_port 0
</span><br>
<p>I get a segfault:
<br>
<p>[remote1:01409] *** Process received signal ***
<br>
[remote1:01409] Signal: Segmentation Fault (11)
<br>
[remote1:01409] Signal code: Address not mapped (1)
<br>
[remote1:01409] Failing at address: 2c
<br>
/home/eugene/r26609/lib/libopen-rte.so.0.0.0'show_stackframe+0x7d0
<br>
/lib/amd64/libc.so.1'__sighndlr+0x6
<br>
/lib/amd64/libc.so.1'call_user_handler+0x2c5
<br>
/home/eugene/r26609/lib/libopen-rte.so.0.0.0'orte_grpcomm_base_rollup_recv+0x73 
<br>
[Signal 11 (SEGV)]
<br>
/home/eugene/r26609/lib/openmpi/mca_rml_oob.so'orte_rml_recv_msg_callback+0x9c 
<br>
<p>/home/eugene/r26609/lib/openmpi/mca_oob_tcp.so'mca_oob_tcp_msg_data+0x283
<br>
/home/eugene/r26609/lib/libopen-rte.so.0.0.0'event_process_active_single_queue+0x54c 
<br>
<p>/home/eugene/r26609/lib/libopen-rte.so.0.0.0'event_process_active+0x41
<br>
/home/eugene/r26609/lib/libopen-rte.so.0.0.0'opal_libevent2019_event_base_loop+0x606 
<br>
<p>/home/eugene/r26609/lib/libopen-rte.so.0.0.0'orte_daemon+0xd6d
<br>
/home/eugene/r26609/bin/orted'0xd4b
<br>
[remote1:01409] *** End of error message ***
<br>
Segmentation Fault (core dumped)
<br>
<p><span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 19, 2012, at 8:31 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm having bad luck with the trunk starting with r26609.  Basically, things hang if I run
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    mpirun -H remote1,remote2 -n 2 hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; where remote1 and remote2 are remote nodes.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11134.php">TERRY DONTJE: "Re: [OMPI devel] OpenIB compile error"</a>
<li><strong>Previous message:</strong> <a href="11132.php">Jeff Squyres: "Re: [OMPI devel] OpenIB compile error"</a>
<li><strong>In reply to:</strong> <a href="11127.php">Ralph Castain: "Re: [OMPI devel] hang with launch including remote nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11137.php">Ralph Castain: "Re: [OMPI devel] hang with launch including remote nodes"</a>
<li><strong>Reply:</strong> <a href="11137.php">Ralph Castain: "Re: [OMPI devel] hang with launch including remote nodes"</a>
<li><strong>Reply:</strong> <a href="11148.php">Ralph Castain: "Re: [OMPI devel] hang with launch including remote nodes"</a>
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
