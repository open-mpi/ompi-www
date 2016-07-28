<?
$subject_val = "Re: [OMPI devel] PMIX deadlock";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 28 01:14:54 2015" -->
<!-- isoreceived="20151028051454" -->
<!-- sent="Wed, 28 Oct 2015 01:14:50 -0400" -->
<!-- isosent="20151028051450" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] PMIX deadlock" -->
<!-- id="CAMJJpkWrePnwix6b0fdMTviKrbBw3K22tHQ5vr3HPg+=rysazQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="DE1440F5-7EF9-42AD-8FAA-5DC1878664DE_at_open-mpi.org" -->
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
<strong>Date:</strong> 2015-10-28 01:14:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18303.php">George Bosilca: "Re: [OMPI devel] Fwd: [OMPI commits] Git: open-mpi/ompi branch master updated. dev-2921-gb603307"</a>
<li><strong>Previous message:</strong> <a href="18301.php">Gilles Gouaillardet: "Re: [OMPI devel] Fwd: [OMPI commits] Git: open-mpi/ompi branch master updated. dev-2921-gb603307"</a>
<li><strong>In reply to:</strong> <a href="18294.php">Ralph Castain: "Re: [OMPI devel] PMIX deadlock"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18306.php">Ralph Castain: "Re: [OMPI devel] PMIX deadlock"</a>
<li><strong>Reply:</strong> <a href="18306.php">Ralph Castain: "Re: [OMPI devel] PMIX deadlock"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Interesting. Do you have a pointer to the commit (or/and to the discussion)?
<br>
<p>I looked at the PMIX code, and I have identified few issues, but
<br>
unfortunately none of them seem to fix the problem for good. However, now I
<br>
need more than 1000 runs to get a deadlock (instead of few tens).
<br>
<p>Looking with &quot;netstat -ax&quot; at the status of the UDS while the processes are
<br>
deadlocked, I see 2 UDS with the same name: one from the server which is in
<br>
LISTEN state, and one for the client which is being in CONNECTING state
<br>
(while the client already sent a message in the socket and is now waiting
<br>
in a blocking receive). This somehow suggest that the server has not yet
<br>
called accept on the UDS. Unfortunately, there are 3 threads all doing
<br>
different flavors of even_base and select, so I have a hard time tracking
<br>
the path of the UDS on the server side.
<br>
<p>So in order to validate my assumption I wrote a minimalistic UDS client and
<br>
server application and tried different scenarios. The conclusion is that in
<br>
order to see the same type of output from &quot;netstat -ax&quot; I have to call
<br>
listen on the server, connect on the client and do not call accept on the
<br>
server.
<br>
<p>With the same occasion I also confirmed that the UDS are holding the data
<br>
sent so there is no need for further synchronization for the case where the
<br>
data is sent first. We only need to find out how the server forgets to call
<br>
accept.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p><p>On Tue, Oct 27, 2015 at 7:52 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hmmm&#226;&#128;&#166;this looks like it might be that problem we previously saw where the
</span><br>
<span class="quotelev1">&gt; blocking recv hangs in a proc when the blocking send tries to send before
</span><br>
<span class="quotelev1">&gt; the domain socket is actually ready, and so the send fails on the other
</span><br>
<span class="quotelev1">&gt; end. As I recall, it was something to do with the socketoptions - and then
</span><br>
<span class="quotelev1">&gt; Paul had a problem on some of his machines, and we backed it out?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I wonder if that&#226;&#128;&#153;s what is biting us here again, and what we need is to
</span><br>
<span class="quotelev1">&gt; either remove the blocking send/recv&#226;&#128;&#153;s altogether, or figure out a way to
</span><br>
<span class="quotelev1">&gt; wait until the socket is really ready.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any thoughts?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 27, 2015, at 4:11 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It appear the branch solve the problem at least partially. I asked one of
</span><br>
<span class="quotelev1">&gt; my students to hammer it pretty badly, and he reported that the deadlocks
</span><br>
<span class="quotelev1">&gt; still occur. He also graciously provided some stacktraces:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #0  0x00007f4bd5274aed in nanosleep () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #1  0x00007f4bd52a9c94 in usleep () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #2  0x00007f4bd2e42b00 in OPAL_PMIX_PMIX1XX_PMIx_Fence (procs=0x0,
</span><br>
<span class="quotelev1">&gt; nprocs=0, info=0x7fff3c561960,
</span><br>
<span class="quotelev1">&gt;     ninfo=1) at src/client/pmix_client_fence.c:100
</span><br>
<span class="quotelev1">&gt; #3  0x00007f4bd306e6d2 in pmix1_fence (procs=0x0, collect_data=1) at
</span><br>
<span class="quotelev1">&gt; pmix1_client.c:306
</span><br>
<span class="quotelev1">&gt; #4  0x00007f4bd57d5cc3 in ompi_mpi_init (argc=3, argv=0x7fff3c561ea8,
</span><br>
<span class="quotelev1">&gt; requested=3,
</span><br>
<span class="quotelev1">&gt;     provided=0x7fff3c561d84) at runtime/ompi_mpi_init.c:644
</span><br>
<span class="quotelev1">&gt; #5  0x00007f4bd5813399 in PMPI_Init_thread (argc=0x7fff3c561d7c,
</span><br>
<span class="quotelev1">&gt; argv=0x7fff3c561d70, required=3,
</span><br>
<span class="quotelev1">&gt;     provided=0x7fff3c561d84) at pinit_thread.c:69
</span><br>
<span class="quotelev1">&gt; #6  0x0000000000401516 in main (argc=3, argv=0x7fff3c561ea8) at
</span><br>
<span class="quotelev1">&gt; osu_mbw_mr.c:86
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And another process:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #0  0x00007f7b9d7d8bdc in recv () from /lib64/libpthread.so.0
</span><br>
<span class="quotelev1">&gt; #1  0x00007f7b9b0aa42d in opal_pmix_pmix1xx_pmix_usock_recv_blocking
</span><br>
<span class="quotelev1">&gt; (sd=13, data=0x7ffd62139004 &quot;&quot;,
</span><br>
<span class="quotelev1">&gt;     size=4) at src/usock/usock.c:168
</span><br>
<span class="quotelev1">&gt; #2  0x00007f7b9b0af5d9 in recv_connect_ack (sd=13) at
</span><br>
<span class="quotelev1">&gt; src/client/pmix_client.c:844
</span><br>
<span class="quotelev1">&gt; #3  0x00007f7b9b0b085e in usock_connect (addr=0x7ffd62139330) at
</span><br>
<span class="quotelev1">&gt; src/client/pmix_client.c:1110
</span><br>
<span class="quotelev1">&gt; #4  0x00007f7b9b0acc24 in connect_to_server (address=0x7ffd62139330,
</span><br>
<span class="quotelev1">&gt; cbdata=0x7ffd621390e0)
</span><br>
<span class="quotelev1">&gt;     at src/client/pmix_client.c:181
</span><br>
<span class="quotelev1">&gt; #5  0x00007f7b9b0ad569 in OPAL_PMIX_PMIX1XX_PMIx_Init (proc=0x7f7b9b4e9b60)
</span><br>
<span class="quotelev1">&gt;     at src/client/pmix_client.c:362
</span><br>
<span class="quotelev1">&gt; #6  0x00007f7b9b2dbd9d in pmix1_client_init () at pmix1_client.c:99
</span><br>
<span class="quotelev1">&gt; #7  0x00007f7b9b4eb95f in pmi_component_query (module=0x7ffd62139490,
</span><br>
<span class="quotelev1">&gt; priority=0x7ffd6213948c)
</span><br>
<span class="quotelev1">&gt;     at ess_pmi_component.c:90
</span><br>
<span class="quotelev1">&gt; #8  0x00007f7b9ce70ec5 in mca_base_select (type_name=0x7f7b9d20e059 &quot;ess&quot;,
</span><br>
<span class="quotelev1">&gt; output_id=-1,
</span><br>
<span class="quotelev1">&gt;     components_available=0x7f7b9d431eb0, best_module=0x7ffd621394d0,
</span><br>
<span class="quotelev1">&gt; best_component=0x7ffd621394d8,
</span><br>
<span class="quotelev1">&gt;     priority_out=0x0) at mca_base_components_select.c:77
</span><br>
<span class="quotelev1">&gt; #9  0x00007f7b9d1a956b in orte_ess_base_select () at
</span><br>
<span class="quotelev1">&gt; base/ess_base_select.c:40
</span><br>
<span class="quotelev1">&gt; #10 0x00007f7b9d160449 in orte_init (pargc=0x0, pargv=0x0, flags=32) at
</span><br>
<span class="quotelev1">&gt; runtime/orte_init.c:219
</span><br>
<span class="quotelev1">&gt; #11 0x00007f7b9da4377a in ompi_mpi_init (argc=3, argv=0x7ffd621397f8,
</span><br>
<span class="quotelev1">&gt; requested=3,
</span><br>
<span class="quotelev1">&gt;     provided=0x7ffd621396d4) at runtime/ompi_mpi_init.c:488
</span><br>
<span class="quotelev1">&gt; #12 0x00007f7b9da81399 in PMPI_Init_thread (argc=0x7ffd621396cc,
</span><br>
<span class="quotelev1">&gt; argv=0x7ffd621396c0, required=3,
</span><br>
<span class="quotelev1">&gt;     provided=0x7ffd621396d4) at pinit_thread.c:69
</span><br>
<span class="quotelev1">&gt; #13 0x0000000000401516 in main (argc=3, argv=0x7ffd621397f8) at
</span><br>
<span class="quotelev1">&gt; osu_mbw_mr.c:86
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Oct 27, 2015 at 2:36 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I haven&#226;&#128;&#153;t been able to replicate this when using the branch in this PR:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://github.com/open-mpi/ompi/pull/1073">https://github.com/open-mpi/ompi/pull/1073</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Would you mind giving it a try? It fixes some other race conditions and
</span><br>
<span class="quotelev2">&gt;&gt; might pick this one up too.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 27, 2015, at 10:04 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Okay, I&#226;&#128;&#153;ll take a look - I&#226;&#128;&#153;ve been chasing a race condition that might be
</span><br>
<span class="quotelev2">&gt;&gt; related
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 27, 2015, at 9:54 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; No, it's using 2 nodes.
</span><br>
<span class="quotelev2">&gt;&gt;   George.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Oct 27, 2015 at 12:35 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is this on a single node?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Oct 27, 2015, at 9:25 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I get intermittent deadlocks wit the latest trunk. The smallest
</span><br>
<span class="quotelev3">&gt;&gt;&gt; reproducer is a shell for loop around a small (2 processes) short (20
</span><br>
<span class="quotelev3">&gt;&gt;&gt; seconds) MPI application. After few tens of iterations the MPI_Init will
</span><br>
<span class="quotelev3">&gt;&gt;&gt; deadlock with the following backtrace:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #0  0x00007fa94b5d9aed in nanosleep () from /lib64/libc.so.6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #1  0x00007fa94b60ec94 in usleep () from /lib64/libc.so.6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #2  0x00007fa94960ba08 in OPAL_PMIX_PMIX1XX_PMIx_Fence (procs=0x0,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nprocs=0, info=0x7ffd7934fb90,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     ninfo=1) at src/client/pmix_client_fence.c:100
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #3  0x00007fa9498376a2 in pmix1_fence (procs=0x0, collect_data=1) at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pmix1_client.c:305
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #4  0x00007fa94bb39ba4 in ompi_mpi_init (argc=3, argv=0x7ffd793500a8,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; requested=3,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     provided=0x7ffd7934ff94) at runtime/ompi_mpi_init.c:645
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #5  0x00007fa94bb77281 in PMPI_Init_thread (argc=0x7ffd7934ff8c,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; argv=0x7ffd7934ff80, required=3,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     provided=0x7ffd7934ff94) at pinit_thread.c:69
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #6  0x000000000040150f in main (argc=3, argv=0x7ffd793500a8) at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; osu_mbw_mr.c:86
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On my machines this is reproducible at 100% after anywhere between 50
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and 100 iterations.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     George.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18280.php">http://www.open-mpi.org/community/lists/devel/2015/10/18280.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18281.php">http://www.open-mpi.org/community/lists/devel/2015/10/18281.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18282.php">http://www.open-mpi.org/community/lists/devel/2015/10/18282.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18284.php">http://www.open-mpi.org/community/lists/devel/2015/10/18284.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18292.php">http://www.open-mpi.org/community/lists/devel/2015/10/18292.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18294.php">http://www.open-mpi.org/community/lists/devel/2015/10/18294.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18302/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18303.php">George Bosilca: "Re: [OMPI devel] Fwd: [OMPI commits] Git: open-mpi/ompi branch master updated. dev-2921-gb603307"</a>
<li><strong>Previous message:</strong> <a href="18301.php">Gilles Gouaillardet: "Re: [OMPI devel] Fwd: [OMPI commits] Git: open-mpi/ompi branch master updated. dev-2921-gb603307"</a>
<li><strong>In reply to:</strong> <a href="18294.php">Ralph Castain: "Re: [OMPI devel] PMIX deadlock"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18306.php">Ralph Castain: "Re: [OMPI devel] PMIX deadlock"</a>
<li><strong>Reply:</strong> <a href="18306.php">Ralph Castain: "Re: [OMPI devel] PMIX deadlock"</a>
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
