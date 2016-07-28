<?
$subject_val = "Re: [OMPI devel] PMIX deadlock";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 27 19:11:22 2015" -->
<!-- isoreceived="20151027231122" -->
<!-- sent="Tue, 27 Oct 2015 19:11:18 -0400" -->
<!-- isosent="20151027231118" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] PMIX deadlock" -->
<!-- id="CAMJJpkUWQkcFyUB7H1A=rCbCqWNi81sePVOGJStX1uYGb8xT5Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="597E351B-AB63-41B4-8185-1222B783A144_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] PMIX deadlock<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-27 19:11:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18293.php">Gilles Gouaillardet: "Re: [OMPI devel] Open MPI autogen.pl in tarball"</a>
<li><strong>Previous message:</strong> <a href="18291.php">Ralph Castain: "Re: [OMPI devel] Segv in MTT"</a>
<li><strong>In reply to:</strong> <a href="18284.php">Ralph Castain: "Re: [OMPI devel] PMIX deadlock"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18294.php">Ralph Castain: "Re: [OMPI devel] PMIX deadlock"</a>
<li><strong>Reply:</strong> <a href="18294.php">Ralph Castain: "Re: [OMPI devel] PMIX deadlock"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It appear the branch solve the problem at least partially. I asked one of
<br>
my students to hammer it pretty badly, and he reported that the deadlocks
<br>
still occur. He also graciously provided some stacktraces:
<br>
<p>#0  0x00007f4bd5274aed in nanosleep () from /lib64/libc.so.6
<br>
#1  0x00007f4bd52a9c94 in usleep () from /lib64/libc.so.6
<br>
#2  0x00007f4bd2e42b00 in OPAL_PMIX_PMIX1XX_PMIx_Fence (procs=0x0,
<br>
nprocs=0, info=0x7fff3c561960,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ninfo=1) at src/client/pmix_client_fence.c:100
<br>
#3  0x00007f4bd306e6d2 in pmix1_fence (procs=0x0, collect_data=1) at
<br>
pmix1_client.c:306
<br>
#4  0x00007f4bd57d5cc3 in ompi_mpi_init (argc=3, argv=0x7fff3c561ea8,
<br>
requested=3,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;provided=0x7fff3c561d84) at runtime/ompi_mpi_init.c:644
<br>
#5  0x00007f4bd5813399 in PMPI_Init_thread (argc=0x7fff3c561d7c,
<br>
argv=0x7fff3c561d70, required=3,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;provided=0x7fff3c561d84) at pinit_thread.c:69
<br>
#6  0x0000000000401516 in main (argc=3, argv=0x7fff3c561ea8) at
<br>
osu_mbw_mr.c:86
<br>
<p>And another process:
<br>
<p>#0  0x00007f7b9d7d8bdc in recv () from /lib64/libpthread.so.0
<br>
#1  0x00007f7b9b0aa42d in opal_pmix_pmix1xx_pmix_usock_recv_blocking
<br>
(sd=13, data=0x7ffd62139004 &quot;&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;size=4) at src/usock/usock.c:168
<br>
#2  0x00007f7b9b0af5d9 in recv_connect_ack (sd=13) at
<br>
src/client/pmix_client.c:844
<br>
#3  0x00007f7b9b0b085e in usock_connect (addr=0x7ffd62139330) at
<br>
src/client/pmix_client.c:1110
<br>
#4  0x00007f7b9b0acc24 in connect_to_server (address=0x7ffd62139330,
<br>
cbdata=0x7ffd621390e0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at src/client/pmix_client.c:181
<br>
#5  0x00007f7b9b0ad569 in OPAL_PMIX_PMIX1XX_PMIx_Init (proc=0x7f7b9b4e9b60)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at src/client/pmix_client.c:362
<br>
#6  0x00007f7b9b2dbd9d in pmix1_client_init () at pmix1_client.c:99
<br>
#7  0x00007f7b9b4eb95f in pmi_component_query (module=0x7ffd62139490,
<br>
priority=0x7ffd6213948c)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ess_pmi_component.c:90
<br>
#8  0x00007f7b9ce70ec5 in mca_base_select (type_name=0x7f7b9d20e059 &quot;ess&quot;,
<br>
output_id=-1,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;components_available=0x7f7b9d431eb0, best_module=0x7ffd621394d0,
<br>
best_component=0x7ffd621394d8,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;priority_out=0x0) at mca_base_components_select.c:77
<br>
#9  0x00007f7b9d1a956b in orte_ess_base_select () at
<br>
base/ess_base_select.c:40
<br>
#10 0x00007f7b9d160449 in orte_init (pargc=0x0, pargv=0x0, flags=32) at
<br>
runtime/orte_init.c:219
<br>
#11 0x00007f7b9da4377a in ompi_mpi_init (argc=3, argv=0x7ffd621397f8,
<br>
requested=3,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;provided=0x7ffd621396d4) at runtime/ompi_mpi_init.c:488
<br>
#12 0x00007f7b9da81399 in PMPI_Init_thread (argc=0x7ffd621396cc,
<br>
argv=0x7ffd621396c0, required=3,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;provided=0x7ffd621396d4) at pinit_thread.c:69
<br>
#13 0x0000000000401516 in main (argc=3, argv=0x7ffd621397f8) at
<br>
osu_mbw_mr.c:86
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p><p>On Tue, Oct 27, 2015 at 2:36 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I haven&#226;&#128;&#153;t been able to replicate this when using the branch in this PR:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi/pull/1073">https://github.com/open-mpi/ompi/pull/1073</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Would you mind giving it a try? It fixes some other race conditions and
</span><br>
<span class="quotelev1">&gt; might pick this one up too.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 27, 2015, at 10:04 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Okay, I&#226;&#128;&#153;ll take a look - I&#226;&#128;&#153;ve been chasing a race condition that might be
</span><br>
<span class="quotelev1">&gt; related
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 27, 2015, at 9:54 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No, it's using 2 nodes.
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Oct 27, 2015 at 12:35 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is this on a single node?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 27, 2015, at 9:25 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I get intermittent deadlocks wit the latest trunk. The smallest
</span><br>
<span class="quotelev2">&gt;&gt; reproducer is a shell for loop around a small (2 processes) short (20
</span><br>
<span class="quotelev2">&gt;&gt; seconds) MPI application. After few tens of iterations the MPI_Init will
</span><br>
<span class="quotelev2">&gt;&gt; deadlock with the following backtrace:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #0  0x00007fa94b5d9aed in nanosleep () from /lib64/libc.so.6
</span><br>
<span class="quotelev2">&gt;&gt; #1  0x00007fa94b60ec94 in usleep () from /lib64/libc.so.6
</span><br>
<span class="quotelev2">&gt;&gt; #2  0x00007fa94960ba08 in OPAL_PMIX_PMIX1XX_PMIx_Fence (procs=0x0,
</span><br>
<span class="quotelev2">&gt;&gt; nprocs=0, info=0x7ffd7934fb90,
</span><br>
<span class="quotelev2">&gt;&gt;     ninfo=1) at src/client/pmix_client_fence.c:100
</span><br>
<span class="quotelev2">&gt;&gt; #3  0x00007fa9498376a2 in pmix1_fence (procs=0x0, collect_data=1) at
</span><br>
<span class="quotelev2">&gt;&gt; pmix1_client.c:305
</span><br>
<span class="quotelev2">&gt;&gt; #4  0x00007fa94bb39ba4 in ompi_mpi_init (argc=3, argv=0x7ffd793500a8,
</span><br>
<span class="quotelev2">&gt;&gt; requested=3,
</span><br>
<span class="quotelev2">&gt;&gt;     provided=0x7ffd7934ff94) at runtime/ompi_mpi_init.c:645
</span><br>
<span class="quotelev2">&gt;&gt; #5  0x00007fa94bb77281 in PMPI_Init_thread (argc=0x7ffd7934ff8c,
</span><br>
<span class="quotelev2">&gt;&gt; argv=0x7ffd7934ff80, required=3,
</span><br>
<span class="quotelev2">&gt;&gt;     provided=0x7ffd7934ff94) at pinit_thread.c:69
</span><br>
<span class="quotelev2">&gt;&gt; #6  0x000000000040150f in main (argc=3, argv=0x7ffd793500a8) at
</span><br>
<span class="quotelev2">&gt;&gt; osu_mbw_mr.c:86
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On my machines this is reproducible at 100% after anywhere between 50 and
</span><br>
<span class="quotelev2">&gt;&gt; 100 iterations.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;     George.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18280.php">http://www.open-mpi.org/community/lists/devel/2015/10/18280.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18281.php">http://www.open-mpi.org/community/lists/devel/2015/10/18281.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18282.php">http://www.open-mpi.org/community/lists/devel/2015/10/18282.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18284.php">http://www.open-mpi.org/community/lists/devel/2015/10/18284.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18292/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18293.php">Gilles Gouaillardet: "Re: [OMPI devel] Open MPI autogen.pl in tarball"</a>
<li><strong>Previous message:</strong> <a href="18291.php">Ralph Castain: "Re: [OMPI devel] Segv in MTT"</a>
<li><strong>In reply to:</strong> <a href="18284.php">Ralph Castain: "Re: [OMPI devel] PMIX deadlock"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18294.php">Ralph Castain: "Re: [OMPI devel] PMIX deadlock"</a>
<li><strong>Reply:</strong> <a href="18294.php">Ralph Castain: "Re: [OMPI devel] PMIX deadlock"</a>
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
