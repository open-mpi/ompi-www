<?
$subject_val = "Re: [OMPI devel] PMIX deadlock";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 30 01:03:18 2015" -->
<!-- isoreceived="20151030050318" -->
<!-- sent="Fri, 30 Oct 2015 01:03:14 -0400" -->
<!-- isosent="20151030050314" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] PMIX deadlock" -->
<!-- id="CAMJJpkUqa-4cfcY7f5AVVLJgBCT3H0A_MieiVTOAjZdszO46zA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="236F1E51-5089-49FC-8201-A05DAE95DE57_at_open-mpi.org" -->
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
<strong>Date:</strong> 2015-10-30 01:03:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18321.php">Kawashima, Takahiro: "Re: [OMPI devel] Please test: v1.10.1rc3"</a>
<li><strong>Previous message:</strong> <a href="18319.php">Paul Hargrove: "Re: [OMPI devel] Please test: v1.10.1rc3"</a>
<li><strong>In reply to:</strong> <a href="18309.php">Ralph Castain: "Re: [OMPI devel] PMIX deadlock"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18322.php">Ralph Castain: "Re: [OMPI devel] PMIX deadlock"</a>
<li><strong>Reply:</strong> <a href="18322.php">Ralph Castain: "Re: [OMPI devel] PMIX deadlock"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Some progress, that puzzles me but might help you understand. Once the
<br>
deadlock appears, if I manually kill the MPI process on the node where the
<br>
deadlock was created, the local orte daemon doesn't notice and will just
<br>
keep waiting.
<br>
<p>Quick question: I am under the impression that the issue is not in the PMIX
<br>
server but somewhere around the listener_thread_fn in orte/util/listener.c.
<br>
Possible ?
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Wed, Oct 28, 2015 at 3:56 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Should have also clarified: the prior fixes are indeed in the current
</span><br>
<span class="quotelev1">&gt; master.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 28, 2015, at 12:42 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Nope - I was wrong. The correction on the client side consisted of
</span><br>
<span class="quotelev1">&gt; attempting to timeout if the blocking recv failed. We then modified the
</span><br>
<span class="quotelev1">&gt; blocking send/recv so they would handle errors.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So that problem occurred -after- the server had correctly called accept.
</span><br>
<span class="quotelev1">&gt; The listener code is in
</span><br>
<span class="quotelev1">&gt; opal/mca/pmix/pmix1xx/pmix/src/server/pmix_server_listener.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It looks to me like the only way we could drop the accept (assuming the OS
</span><br>
<span class="quotelev1">&gt; doesn&#226;&#128;&#153;t lose it) is if the file descriptor lies outside the expected range
</span><br>
<span class="quotelev1">&gt; once we fall out of select:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         /* Spin accepting connections until all active listen sockets
</span><br>
<span class="quotelev1">&gt;          * do not have any incoming connections, pushing each connection
</span><br>
<span class="quotelev1">&gt;          * onto the event queue for processing
</span><br>
<span class="quotelev1">&gt;          */
</span><br>
<span class="quotelev1">&gt;         do {
</span><br>
<span class="quotelev1">&gt;             accepted_connections = 0;
</span><br>
<span class="quotelev1">&gt;             /* according to the man pages, select replaces the given
</span><br>
<span class="quotelev1">&gt; descriptor
</span><br>
<span class="quotelev1">&gt;              * set with a subset consisting of those descriptors that are
</span><br>
<span class="quotelev1">&gt; ready
</span><br>
<span class="quotelev1">&gt;              * for the specified operation - in this case, a read. So we
</span><br>
<span class="quotelev1">&gt; need to
</span><br>
<span class="quotelev1">&gt;              * first check to see if this file descriptor is included in
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt;              * returned subset
</span><br>
<span class="quotelev1">&gt;              */
</span><br>
<span class="quotelev1">&gt;             if (0 == FD_ISSET(pmix_server_globals.listen_socket,
</span><br>
<span class="quotelev1">&gt; &amp;readfds)) {
</span><br>
<span class="quotelev1">&gt;                 /* this descriptor is not included */
</span><br>
<span class="quotelev1">&gt;                 continue;
</span><br>
<span class="quotelev1">&gt;             }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             /* this descriptor is ready to be read, which means a
</span><br>
<span class="quotelev1">&gt; connection
</span><br>
<span class="quotelev1">&gt;              * request has been received - so harvest it. All we want to do
</span><br>
<span class="quotelev1">&gt;              * here is accept the connection and push the info onto the
</span><br>
<span class="quotelev1">&gt; event
</span><br>
<span class="quotelev1">&gt;              * library for subsequent processing - we don't want to
</span><br>
<span class="quotelev1">&gt; actually
</span><br>
<span class="quotelev1">&gt;              * process the connection here as it takes too long, and so the
</span><br>
<span class="quotelev1">&gt;              * OS might start rejecting connections due to timeout.
</span><br>
<span class="quotelev1">&gt;              */
</span><br>
<span class="quotelev1">&gt;             pending_connection = PMIX_NEW(pmix_pending_connection_t);
</span><br>
<span class="quotelev1">&gt;             event_assign(&amp;pending_connection-&gt;ev, pmix_globals.evbase, -1,
</span><br>
<span class="quotelev1">&gt;                          EV_WRITE, connection_handler, pending_connection);
</span><br>
<span class="quotelev1">&gt;             pending_connection-&gt;sd =
</span><br>
<span class="quotelev1">&gt; accept(pmix_server_globals.listen_socket,
</span><br>
<span class="quotelev1">&gt;                                             (struct
</span><br>
<span class="quotelev1">&gt; sockaddr*)&amp;(pending_connection-&gt;addr),
</span><br>
<span class="quotelev1">&gt;                                             &amp;addrlen);
</span><br>
<span class="quotelev1">&gt;             if (pending_connection-&gt;sd &lt; 0) {
</span><br>
<span class="quotelev1">&gt;                 PMIX_RELEASE(pending_connection);
</span><br>
<span class="quotelev1">&gt;                 if (pmix_socket_errno != EAGAIN ||
</span><br>
<span class="quotelev1">&gt;                     pmix_socket_errno != EWOULDBLOCK) {
</span><br>
<span class="quotelev1">&gt;                     if (EMFILE == pmix_socket_errno) {
</span><br>
<span class="quotelev1">&gt;                         PMIX_ERROR_LOG(PMIX_ERR_OUT_OF_RESOURCE);
</span><br>
<span class="quotelev1">&gt;                     } else {
</span><br>
<span class="quotelev1">&gt;                         pmix_output(0, &quot;listen_thread: accept() failed: %s
</span><br>
<span class="quotelev1">&gt; (%d).&quot;,
</span><br>
<span class="quotelev1">&gt;                                     strerror(pmix_socket_errno),
</span><br>
<span class="quotelev1">&gt; pmix_socket_errno);
</span><br>
<span class="quotelev1">&gt;                     }
</span><br>
<span class="quotelev1">&gt;                     goto done;
</span><br>
<span class="quotelev1">&gt;                 }
</span><br>
<span class="quotelev1">&gt;                 continue;
</span><br>
<span class="quotelev1">&gt;             }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             pmix_output_verbose(8, pmix_globals.debug_output,
</span><br>
<span class="quotelev1">&gt;                                 &quot;listen_thread: new connection: (%d, %d)&quot;,
</span><br>
<span class="quotelev1">&gt;                                 pending_connection-&gt;sd, pmix_socket_errno);
</span><br>
<span class="quotelev1">&gt;             /* activate the event */
</span><br>
<span class="quotelev1">&gt;             event_active(&amp;pending_connection-&gt;ev, EV_WRITE, 1);
</span><br>
<span class="quotelev1">&gt;             accepted_connections++;
</span><br>
<span class="quotelev1">&gt;         } while (accepted_connections &gt; 0);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 28, 2015, at 12:25 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Looking at the code, it appears that a fix was committed for this problem,
</span><br>
<span class="quotelev1">&gt; and that we correctly resolved the issue found by Paul. The problem is that
</span><br>
<span class="quotelev1">&gt; the fix didn&#226;&#128;&#153;t get upstreamed, and so it was lost the next time we
</span><br>
<span class="quotelev1">&gt; refreshed PMIx. Sigh.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Let me try to recreate the fix and have you take a gander at it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 28, 2015, at 12:22 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is the discussion - afraid it is fairly lengthy. Ignore the hwloc
</span><br>
<span class="quotelev1">&gt; references in it as that was a separate issue:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/09/18074.php">http://www.open-mpi.org/community/lists/devel/2015/09/18074.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It definitely sounds like the same issue creeping in again. I&#226;&#128;&#153;d appreciate
</span><br>
<span class="quotelev1">&gt; any thoughts on how to correct it. If it helps, you could look at the PMIx
</span><br>
<span class="quotelev1">&gt; master - there are standalone tests in the test/simple directory that
</span><br>
<span class="quotelev1">&gt; fork/exec a child and just do the connection.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/pmix/master">https://github.com/pmix/master</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The test server is simptest.c - it will spawn a single copy of
</span><br>
<span class="quotelev1">&gt; simpclient.c by default.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 27, 2015, at 10:14 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Interesting. Do you have a pointer to the commit (or/and to the
</span><br>
<span class="quotelev1">&gt; discussion)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I looked at the PMIX code, and I have identified few issues, but
</span><br>
<span class="quotelev1">&gt; unfortunately none of them seem to fix the problem for good. However, now I
</span><br>
<span class="quotelev1">&gt; need more than 1000 runs to get a deadlock (instead of few tens).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Looking with &quot;netstat -ax&quot; at the status of the UDS while the processes
</span><br>
<span class="quotelev1">&gt; are deadlocked, I see 2 UDS with the same name: one from the server which
</span><br>
<span class="quotelev1">&gt; is in LISTEN state, and one for the client which is being in CONNECTING
</span><br>
<span class="quotelev1">&gt; state (while the client already sent a message in the socket and is now
</span><br>
<span class="quotelev1">&gt; waiting in a blocking receive). This somehow suggest that the server has
</span><br>
<span class="quotelev1">&gt; not yet called accept on the UDS. Unfortunately, there are 3 threads all
</span><br>
<span class="quotelev1">&gt; doing different flavors of even_base and select, so I have a hard time
</span><br>
<span class="quotelev1">&gt; tracking the path of the UDS on the server side.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So in order to validate my assumption I wrote a minimalistic UDS client
</span><br>
<span class="quotelev1">&gt; and server application and tried different scenarios. The conclusion is
</span><br>
<span class="quotelev1">&gt; that in order to see the same type of output from &quot;netstat -ax&quot; I have to
</span><br>
<span class="quotelev1">&gt; call listen on the server, connect on the client and do not call accept on
</span><br>
<span class="quotelev1">&gt; the server.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With the same occasion I also confirmed that the UDS are holding the data
</span><br>
<span class="quotelev1">&gt; sent so there is no need for further synchronization for the case where the
</span><br>
<span class="quotelev1">&gt; data is sent first. We only need to find out how the server forgets to call
</span><br>
<span class="quotelev1">&gt; accept.
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
<span class="quotelev1">&gt; On Tue, Oct 27, 2015 at 7:52 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hmmm&#226;&#128;&#166;this looks like it might be that problem we previously saw where the
</span><br>
<span class="quotelev2">&gt;&gt; blocking recv hangs in a proc when the blocking send tries to send before
</span><br>
<span class="quotelev2">&gt;&gt; the domain socket is actually ready, and so the send fails on the other
</span><br>
<span class="quotelev2">&gt;&gt; end. As I recall, it was something to do with the socketoptions - and then
</span><br>
<span class="quotelev2">&gt;&gt; Paul had a problem on some of his machines, and we backed it out?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I wonder if that&#226;&#128;&#153;s what is biting us here again, and what we need is to
</span><br>
<span class="quotelev2">&gt;&gt; either remove the blocking send/recv&#226;&#128;&#153;s altogether, or figure out a way to
</span><br>
<span class="quotelev2">&gt;&gt; wait until the socket is really ready.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any thoughts?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 27, 2015, at 4:11 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It appear the branch solve the problem at least partially. I asked one of
</span><br>
<span class="quotelev2">&gt;&gt; my students to hammer it pretty badly, and he reported that the deadlocks
</span><br>
<span class="quotelev2">&gt;&gt; still occur. He also graciously provided some stacktraces:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #0  0x00007f4bd5274aed in nanosleep () from /lib64/libc.so.6
</span><br>
<span class="quotelev2">&gt;&gt; #1  0x00007f4bd52a9c94 in usleep () from /lib64/libc.so.6
</span><br>
<span class="quotelev2">&gt;&gt; #2  0x00007f4bd2e42b00 in OPAL_PMIX_PMIX1XX_PMIx_Fence (procs=0x0,
</span><br>
<span class="quotelev2">&gt;&gt; nprocs=0, info=0x7fff3c561960,
</span><br>
<span class="quotelev2">&gt;&gt;     ninfo=1) at src/client/pmix_client_fence.c:100
</span><br>
<span class="quotelev2">&gt;&gt; #3  0x00007f4bd306e6d2 in pmix1_fence (procs=0x0, collect_data=1) at
</span><br>
<span class="quotelev2">&gt;&gt; pmix1_client.c:306
</span><br>
<span class="quotelev2">&gt;&gt; #4  0x00007f4bd57d5cc3 in ompi_mpi_init (argc=3, argv=0x7fff3c561ea8,
</span><br>
<span class="quotelev2">&gt;&gt; requested=3,
</span><br>
<span class="quotelev2">&gt;&gt;     provided=0x7fff3c561d84) at runtime/ompi_mpi_init.c:644
</span><br>
<span class="quotelev2">&gt;&gt; #5  0x00007f4bd5813399 in PMPI_Init_thread (argc=0x7fff3c561d7c,
</span><br>
<span class="quotelev2">&gt;&gt; argv=0x7fff3c561d70, required=3,
</span><br>
<span class="quotelev2">&gt;&gt;     provided=0x7fff3c561d84) at pinit_thread.c:69
</span><br>
<span class="quotelev2">&gt;&gt; #6  0x0000000000401516 in main (argc=3, argv=0x7fff3c561ea8) at
</span><br>
<span class="quotelev2">&gt;&gt; osu_mbw_mr.c:86
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; And another process:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #0  0x00007f7b9d7d8bdc in recv () from /lib64/libpthread.so.0
</span><br>
<span class="quotelev2">&gt;&gt; #1  0x00007f7b9b0aa42d in opal_pmix_pmix1xx_pmix_usock_recv_blocking
</span><br>
<span class="quotelev2">&gt;&gt; (sd=13, data=0x7ffd62139004 &quot;&quot;,
</span><br>
<span class="quotelev2">&gt;&gt;     size=4) at src/usock/usock.c:168
</span><br>
<span class="quotelev2">&gt;&gt; #2  0x00007f7b9b0af5d9 in recv_connect_ack (sd=13) at
</span><br>
<span class="quotelev2">&gt;&gt; src/client/pmix_client.c:844
</span><br>
<span class="quotelev2">&gt;&gt; #3  0x00007f7b9b0b085e in usock_connect (addr=0x7ffd62139330) at
</span><br>
<span class="quotelev2">&gt;&gt; src/client/pmix_client.c:1110
</span><br>
<span class="quotelev2">&gt;&gt; #4  0x00007f7b9b0acc24 in connect_to_server (address=0x7ffd62139330,
</span><br>
<span class="quotelev2">&gt;&gt; cbdata=0x7ffd621390e0)
</span><br>
<span class="quotelev2">&gt;&gt;     at src/client/pmix_client.c:181
</span><br>
<span class="quotelev2">&gt;&gt; #5  0x00007f7b9b0ad569 in OPAL_PMIX_PMIX1XX_PMIx_Init
</span><br>
<span class="quotelev2">&gt;&gt; (proc=0x7f7b9b4e9b60)
</span><br>
<span class="quotelev2">&gt;&gt;     at src/client/pmix_client.c:362
</span><br>
<span class="quotelev2">&gt;&gt; #6  0x00007f7b9b2dbd9d in pmix1_client_init () at pmix1_client.c:99
</span><br>
<span class="quotelev2">&gt;&gt; #7  0x00007f7b9b4eb95f in pmi_component_query (module=0x7ffd62139490,
</span><br>
<span class="quotelev2">&gt;&gt; priority=0x7ffd6213948c)
</span><br>
<span class="quotelev2">&gt;&gt;     at ess_pmi_component.c:90
</span><br>
<span class="quotelev2">&gt;&gt; #8  0x00007f7b9ce70ec5 in mca_base_select (type_name=0x7f7b9d20e059
</span><br>
<span class="quotelev2">&gt;&gt; &quot;ess&quot;, output_id=-1,
</span><br>
<span class="quotelev2">&gt;&gt;     components_available=0x7f7b9d431eb0, best_module=0x7ffd621394d0,
</span><br>
<span class="quotelev2">&gt;&gt; best_component=0x7ffd621394d8,
</span><br>
<span class="quotelev2">&gt;&gt;     priority_out=0x0) at mca_base_components_select.c:77
</span><br>
<span class="quotelev2">&gt;&gt; #9  0x00007f7b9d1a956b in orte_ess_base_select () at
</span><br>
<span class="quotelev2">&gt;&gt; base/ess_base_select.c:40
</span><br>
<span class="quotelev2">&gt;&gt; #10 0x00007f7b9d160449 in orte_init (pargc=0x0, pargv=0x0, flags=32) at
</span><br>
<span class="quotelev2">&gt;&gt; runtime/orte_init.c:219
</span><br>
<span class="quotelev2">&gt;&gt; #11 0x00007f7b9da4377a in ompi_mpi_init (argc=3, argv=0x7ffd621397f8,
</span><br>
<span class="quotelev2">&gt;&gt; requested=3,
</span><br>
<span class="quotelev2">&gt;&gt;     provided=0x7ffd621396d4) at runtime/ompi_mpi_init.c:488
</span><br>
<span class="quotelev2">&gt;&gt; #12 0x00007f7b9da81399 in PMPI_Init_thread (argc=0x7ffd621396cc,
</span><br>
<span class="quotelev2">&gt;&gt; argv=0x7ffd621396c0, required=3,
</span><br>
<span class="quotelev2">&gt;&gt;     provided=0x7ffd621396d4) at pinit_thread.c:69
</span><br>
<span class="quotelev2">&gt;&gt; #13 0x0000000000401516 in main (argc=3, argv=0x7ffd621397f8) at
</span><br>
<span class="quotelev2">&gt;&gt; osu_mbw_mr.c:86
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   George.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Oct 27, 2015 at 2:36 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I haven&#226;&#128;&#153;t been able to replicate this when using the branch in this PR:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="https://github.com/open-mpi/ompi/pull/1073">https://github.com/open-mpi/ompi/pull/1073</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Would you mind giving it a try? It fixes some other race conditions and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; might pick this one up too.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Oct 27, 2015, at 10:04 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Okay, I&#226;&#128;&#153;ll take a look - I&#226;&#128;&#153;ve been chasing a race condition that might
</span><br>
<span class="quotelev3">&gt;&gt;&gt; be related
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Oct 27, 2015, at 9:54 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; No, it's using 2 nodes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   George.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Tue, Oct 27, 2015 at 12:35 PM, Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is this on a single node?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Oct 27, 2015, at 9:25 AM, George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I get intermittent deadlocks wit the latest trunk. The smallest
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; reproducer is a shell for loop around a small (2 processes) short (20
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; seconds) MPI application. After few tens of iterations the MPI_Init will
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; deadlock with the following backtrace:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #0  0x00007fa94b5d9aed in nanosleep () from /lib64/libc.so.6
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #1  0x00007fa94b60ec94 in usleep () from /lib64/libc.so.6
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #2  0x00007fa94960ba08 in OPAL_PMIX_PMIX1XX_PMIx_Fence (procs=0x0,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; nprocs=0, info=0x7ffd7934fb90,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     ninfo=1) at src/client/pmix_client_fence.c:100
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #3  0x00007fa9498376a2 in pmix1_fence (procs=0x0, collect_data=1) at
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pmix1_client.c:305
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #4  0x00007fa94bb39ba4 in ompi_mpi_init (argc=3, argv=0x7ffd793500a8,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; requested=3,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     provided=0x7ffd7934ff94) at runtime/ompi_mpi_init.c:645
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #5  0x00007fa94bb77281 in PMPI_Init_thread (argc=0x7ffd7934ff8c,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; argv=0x7ffd7934ff80, required=3,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     provided=0x7ffd7934ff94) at pinit_thread.c:69
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #6  0x000000000040150f in main (argc=3, argv=0x7ffd793500a8) at
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; osu_mbw_mr.c:86
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On my machines this is reproducible at 100% after anywhere between 50
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and 100 iterations.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     George.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18280.php">http://www.open-mpi.org/community/lists/devel/2015/10/18280.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18281.php">http://www.open-mpi.org/community/lists/devel/2015/10/18281.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
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
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18282.php">http://www.open-mpi.org/community/lists/devel/2015/10/18282.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18284.php">http://www.open-mpi.org/community/lists/devel/2015/10/18284.php</a>
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18292.php">http://www.open-mpi.org/community/lists/devel/2015/10/18292.php</a>
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18294.php">http://www.open-mpi.org/community/lists/devel/2015/10/18294.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18302.php">http://www.open-mpi.org/community/lists/devel/2015/10/18302.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18309.php">http://www.open-mpi.org/community/lists/devel/2015/10/18309.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18320/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18321.php">Kawashima, Takahiro: "Re: [OMPI devel] Please test: v1.10.1rc3"</a>
<li><strong>Previous message:</strong> <a href="18319.php">Paul Hargrove: "Re: [OMPI devel] Please test: v1.10.1rc3"</a>
<li><strong>In reply to:</strong> <a href="18309.php">Ralph Castain: "Re: [OMPI devel] PMIX deadlock"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18322.php">Ralph Castain: "Re: [OMPI devel] PMIX deadlock"</a>
<li><strong>Reply:</strong> <a href="18322.php">Ralph Castain: "Re: [OMPI devel] PMIX deadlock"</a>
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
