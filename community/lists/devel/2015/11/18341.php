<?
$subject_val = "Re: [OMPI devel] PMIX deadlock";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Nov  8 23:53:20 2015" -->
<!-- isoreceived="20151109045320" -->
<!-- sent="Mon, 9 Nov 2015 10:23:14 +0530" -->
<!-- isosent="20151109045314" -->
<!-- name="Nysal Jan K A" -->
<!-- email="jnysal_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] PMIX deadlock" -->
<!-- id="CAMQsnobkDJ=zm7qXm6wFAstxV6jBa4epat5Pp0hjeh+yovnk1g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAMJJpkWPYd=8yBLc90PsZAyR7A9E6bFMkgWT4U4YZyQa3_ns8A_at_mail.gmail.com" -->
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
<strong>From:</strong> Nysal Jan K A (<em>jnysal_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-08 23:53:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18342.php">Ralph Castain: "Re: [OMPI devel] Master won't build"</a>
<li><strong>Previous message:</strong> <a href="18340.php">George Bosilca: "Re: [OMPI devel] PMIX deadlock"</a>
<li><strong>In reply to:</strong> <a href="18340.php">George Bosilca: "Re: [OMPI devel] PMIX deadlock"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18343.php">Ralph Castain: "Re: [OMPI devel] PMIX deadlock"</a>
<li><strong>Reply:</strong> <a href="18343.php">Ralph Castain: "Re: [OMPI devel] PMIX deadlock"</a>
<li><strong>Reply:</strong> <a href="18344.php">Artem Polyakov: "Re: [OMPI devel] PMIX deadlock"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In listen_thread():
<br>
194     while (pmix_server_globals.listen_thread_active) {
<br>
195         FD_ZERO(&amp;readfds);
<br>
196         FD_SET(pmix_server_globals.listen_socket, &amp;readfds);
<br>
197         max = pmix_server_globals.listen_socket;
<br>
<p>Is it possible that pmix_server_globals.listen_thread_active can be false,
<br>
in which case the thread just exits and will never call accept() ?
<br>
<p>In pmix_start_listening():
<br>
147         /* fork off the listener thread */
<br>
148         if (0 &gt; pthread_create(&amp;engine, NULL, listen_thread, NULL)) {
<br>
149             return PMIX_ERROR;
<br>
150         }
<br>
151         pmix_server_globals.listen_thread_active = true;
<br>
<p>pmix_server_globals.listen_thread_active is set to true after the thread is
<br>
created, could this cause a race ?
<br>
listen_thread_active might also need to be declared as volatile.
<br>
<p>Regards
<br>
--Nysal
<br>
<p>On Sun, Nov 8, 2015 at 10:38 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; We had a power outage last week and the local disks on our cluster were
</span><br>
<span class="quotelev1">&gt; wiped out. My tester was in there. But, I can rewrite it after SC.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sat, Nov 7, 2015 at 12:04 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Could you send me your stress test? I&#226;&#128;&#153;m wondering if it is just something
</span><br>
<span class="quotelev2">&gt;&gt; about how we set socket options
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 7, 2015, at 8:58 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I has to postpone this until after SC. However, I ran for 3 days a stress
</span><br>
<span class="quotelev2">&gt;&gt; test of UDS reproducing the opening and sending of data (what Ralph said in
</span><br>
<span class="quotelev2">&gt;&gt; his email) and I never could get a deadlock.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   George.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sat, Nov 7, 2015 at 11:26 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; George was looking into it, but I don&#226;&#128;&#153;t know if he has had time recently
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to continue the investigation. We understand &#226;&#128;&#156;what&#226;&#128;&#157; is happening (accept
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sometimes ignores the connection), but we don&#226;&#128;&#153;t yet know &#226;&#128;&#156;why&#226;&#128;&#157;. I&#226;&#128;&#153;ve done
</span><br>
<span class="quotelev3">&gt;&gt;&gt; some digging around the web, and found that sometimes you can try to talk
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to a Unix Domain Socket too quickly - i.e., you open it and then send to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it, but the OS hasn&#226;&#128;&#153;t yet set it up. In those cases, you can hang the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket. However, I&#226;&#128;&#153;ve tried adding some artificial delay, and while it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; helped, it didn&#226;&#128;&#153;t completely solve the problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have an idea for a workaround (set a timer and retry after awhile),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but would obviously prefer a real solution. I&#226;&#128;&#153;m not even sure it will work
</span><br>
<span class="quotelev3">&gt;&gt;&gt; as it is unclear that the server (who is the one hung in accept) will break
</span><br>
<span class="quotelev3">&gt;&gt;&gt; free if the client closes the socket and retries.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Nov 6, 2015, at 10:53 PM, Artem Polyakov &lt;artpol84_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello, is there any progress on this topic? This affects our PMIx
</span><br>
<span class="quotelev3">&gt;&gt;&gt; measurements.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2015-10-30 21:21 GMT+06:00 Ralph Castain &lt;rhc_at_[hidden]&gt;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I&#226;&#128;&#153;ve verified that the orte/util/listener thread is not being started,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; so I don&#226;&#128;&#153;t think it should be involved in this problem.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; HTH
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Oct 30, 2015, at 8:07 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hmmm&#226;&#128;&#166;there is a hook that would allow the PMIx server to utilize that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; listener thread, but we aren&#226;&#128;&#153;t currently using it. Each daemon plus mpirun
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; will call orte_start_listener, but nothing is currently registering and so
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the listener in that code is supposed to just return without starting the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; thread.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So the only listener thread that should exist is the one inside the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PMIx server itself. If something else is happening, then that would be a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; bug. I can look at the orte listener code to ensure that the thread isn&#226;&#128;&#153;t
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; incorrectly starting.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Oct 29, 2015, at 10:03 PM, George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Some progress, that puzzles me but might help you understand. Once the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; deadlock appears, if I manually kill the MPI process on the node where the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; deadlock was created, the local orte daemon doesn't notice and will just
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; keep waiting.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Quick question: I am under the impression that the issue is not in the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PMIX server but somewhere around the listener_thread_fn in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; orte/util/listener.c. Possible ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   George.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Wed, Oct 28, 2015 at 3:56 AM, Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Should have also clarified: the prior fixes are indeed in the current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; master.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Oct 28, 2015, at 12:42 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Nope - I was wrong. The correction on the client side consisted of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; attempting to timeout if the blocking recv failed. We then modified the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; blocking send/recv so they would handle errors.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; So that problem occurred -after- the server had correctly called
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; accept. The listener code is in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; opal/mca/pmix/pmix1xx/pmix/src/server/pmix_server_listener.c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; It looks to me like the only way we could drop the accept (assuming
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the OS doesn&#226;&#128;&#153;t lose it) is if the file descriptor lies outside the expected
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; range once we fall out of select:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         /* Spin accepting connections until all active listen sockets
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;          * do not have any incoming connections, pushing each
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; connection
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;          * onto the event queue for processing
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;          */
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         do {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             accepted_connections = 0;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             /* according to the man pages, select replaces the given
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; descriptor
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;              * set with a subset consisting of those descriptors that
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; are ready
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;              * for the specified operation - in this case, a read. So
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; we need to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;              * first check to see if this file descriptor is included
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; in the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;              * returned subset
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;              */
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             if (0 == FD_ISSET(pmix_server_globals.listen_socket,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &amp;readfds)) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 /* this descriptor is not included */
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 continue;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             /* this descriptor is ready to be read, which means a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; connection
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;              * request has been received - so harvest it. All we want
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to do
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;              * here is accept the connection and push the info onto
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the event
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;              * library for subsequent processing - we don't want to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; actually
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;              * process the connection here as it takes too long, and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; so the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;              * OS might start rejecting connections due to timeout.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;              */
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             pending_connection = PMIX_NEW(pmix_pending_connection_t);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             event_assign(&amp;pending_connection-&gt;ev, pmix_globals.evbase,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -1,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                          EV_WRITE, connection_handler,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; pending_connection);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             pending_connection-&gt;sd =
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; accept(pmix_server_globals.listen_socket,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                                             (struct
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; sockaddr*)&amp;(pending_connection-&gt;addr),
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                                             &amp;addrlen);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             if (pending_connection-&gt;sd &lt; 0) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 PMIX_RELEASE(pending_connection);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 if (pmix_socket_errno != EAGAIN ||
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     pmix_socket_errno != EWOULDBLOCK) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     if (EMFILE == pmix_socket_errno) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                         PMIX_ERROR_LOG(PMIX_ERR_OUT_OF_RESOURCE);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     } else {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                         pmix_output(0, &quot;listen_thread: accept()
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; failed: %s (%d).&quot;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                                     strerror(pmix_socket_errno),
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; pmix_socket_errno);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                     goto done;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                 continue;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             pmix_output_verbose(8, pmix_globals.debug_output,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                                 &quot;listen_thread: new connection: (%d,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; %d)&quot;,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                                 pending_connection-&gt;sd,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; pmix_socket_errno);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             /* activate the event */
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             event_active(&amp;pending_connection-&gt;ev, EV_WRITE, 1);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             accepted_connections++;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         } while (accepted_connections &gt; 0);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Oct 28, 2015, at 12:25 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Looking at the code, it appears that a fix was committed for this
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; problem, and that we correctly resolved the issue found by Paul. The
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; problem is that the fix didn&#226;&#128;&#153;t get upstreamed, and so it was lost the next
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; time we refreshed PMIx. Sigh.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Let me try to recreate the fix and have you take a gander at it.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Oct 28, 2015, at 12:22 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Here is the discussion - afraid it is fairly lengthy. Ignore the hwloc
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; references in it as that was a separate issue:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/09/18074.php">http://www.open-mpi.org/community/lists/devel/2015/09/18074.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; It definitely sounds like the same issue creeping in again. I&#226;&#128;&#153;d
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; appreciate any thoughts on how to correct it. If it helps, you could look
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; at the PMIx master - there are standalone tests in the test/simple
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; directory that fork/exec a child and just do the connection.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="https://github.com/pmix/master">https://github.com/pmix/master</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The test server is simptest.c - it will spawn a single copy of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; simpclient.c by default.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Oct 27, 2015, at 10:14 PM, George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Interesting. Do you have a pointer to the commit (or/and to the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; discussion)?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I looked at the PMIX code, and I have identified few issues, but
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; unfortunately none of them seem to fix the problem for good. However, now I
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; need more than 1000 runs to get a deadlock (instead of few tens).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Looking with &quot;netstat -ax&quot; at the status of the UDS while the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; processes are deadlocked, I see 2 UDS with the same name: one from the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; server which is in LISTEN state, and one for the client which is being in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; CONNECTING state (while the client already sent a message in the socket and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; is now waiting in a blocking receive). This somehow suggest that the server
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; has not yet called accept on the UDS. Unfortunately, there are 3 threads
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; all doing different flavors of even_base and select, so I have a hard time
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; tracking the path of the UDS on the server side.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; So in order to validate my assumption I wrote a minimalistic UDS
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; client and server application and tried different scenarios. The conclusion
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; is that in order to see the same type of output from &quot;netstat -ax&quot; I have
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to call listen on the server, connect on the client and do not call accept
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; on the server.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; With the same occasion I also confirmed that the UDS are holding the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; data sent so there is no need for further synchronization for the case
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; where the data is sent first. We only need to find out how the server
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; forgets to call accept.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   George.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Tue, Oct 27, 2015 at 7:52 PM, Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hmmm&#226;&#128;&#166;this looks like it might be that problem we previously saw where
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the blocking recv hangs in a proc when the blocking send tries to send
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; before the domain socket is actually ready, and so the send fails on the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; other end. As I recall, it was something to do with the socketoptions - and
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; then Paul had a problem on some of his machines, and we backed it out?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I wonder if that&#226;&#128;&#153;s what is biting us here again, and what we need is
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; to either remove the blocking send/recv&#226;&#128;&#153;s altogether, or figure out a way
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; to wait until the socket is really ready.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Any thoughts?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Oct 27, 2015, at 4:11 PM, George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; It appear the branch solve the problem at least partially. I asked
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; one of my students to hammer it pretty badly, and he reported that the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; deadlocks still occur. He also graciously provided some stacktraces:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #0  0x00007f4bd5274aed in nanosleep () from /lib64/libc.so.6
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #1  0x00007f4bd52a9c94 in usleep () from /lib64/libc.so.6
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #2  0x00007f4bd2e42b00 in OPAL_PMIX_PMIX1XX_PMIx_Fence (procs=0x0,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; nprocs=0, info=0x7fff3c561960,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     ninfo=1) at src/client/pmix_client_fence.c:100
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #3  0x00007f4bd306e6d2 in pmix1_fence (procs=0x0, collect_data=1) at
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; pmix1_client.c:306
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #4  0x00007f4bd57d5cc3 in ompi_mpi_init (argc=3, argv=0x7fff3c561ea8,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; requested=3,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     provided=0x7fff3c561d84) at runtime/ompi_mpi_init.c:644
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #5  0x00007f4bd5813399 in PMPI_Init_thread (argc=0x7fff3c561d7c,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; argv=0x7fff3c561d70, required=3,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     provided=0x7fff3c561d84) at pinit_thread.c:69
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #6  0x0000000000401516 in main (argc=3, argv=0x7fff3c561ea8) at
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; osu_mbw_mr.c:86
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; And another process:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #0  0x00007f7b9d7d8bdc in recv () from /lib64/libpthread.so.0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #1  0x00007f7b9b0aa42d in opal_pmix_pmix1xx_pmix_usock_recv_blocking
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; (sd=13, data=0x7ffd62139004 &quot;&quot;,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     size=4) at src/usock/usock.c:168
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #2  0x00007f7b9b0af5d9 in recv_connect_ack (sd=13) at
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; src/client/pmix_client.c:844
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #3  0x00007f7b9b0b085e in usock_connect (addr=0x7ffd62139330) at
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; src/client/pmix_client.c:1110
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #4  0x00007f7b9b0acc24 in connect_to_server (address=0x7ffd62139330,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; cbdata=0x7ffd621390e0)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     at src/client/pmix_client.c:181
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #5  0x00007f7b9b0ad569 in OPAL_PMIX_PMIX1XX_PMIx_Init
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; (proc=0x7f7b9b4e9b60)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     at src/client/pmix_client.c:362
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #6  0x00007f7b9b2dbd9d in pmix1_client_init () at pmix1_client.c:99
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #7  0x00007f7b9b4eb95f in pmi_component_query (module=0x7ffd62139490,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; priority=0x7ffd6213948c)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     at ess_pmi_component.c:90
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #8  0x00007f7b9ce70ec5 in mca_base_select (type_name=0x7f7b9d20e059
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &quot;ess&quot;, output_id=-1,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     components_available=0x7f7b9d431eb0, best_module=0x7ffd621394d0,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; best_component=0x7ffd621394d8,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     priority_out=0x0) at mca_base_components_select.c:77
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #9  0x00007f7b9d1a956b in orte_ess_base_select () at
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; base/ess_base_select.c:40
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #10 0x00007f7b9d160449 in orte_init (pargc=0x0, pargv=0x0, flags=32)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; at runtime/orte_init.c:219
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #11 0x00007f7b9da4377a in ompi_mpi_init (argc=3, argv=0x7ffd621397f8,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; requested=3,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     provided=0x7ffd621396d4) at runtime/ompi_mpi_init.c:488
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #12 0x00007f7b9da81399 in PMPI_Init_thread (argc=0x7ffd621396cc,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; argv=0x7ffd621396c0, required=3,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     provided=0x7ffd621396d4) at pinit_thread.c:69
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #13 0x0000000000401516 in main (argc=3, argv=0x7ffd621397f8) at
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; osu_mbw_mr.c:86
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   George.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Tue, Oct 27, 2015 at 2:36 PM, Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I haven&#226;&#128;&#153;t been able to replicate this when using the branch in this
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; PR:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="https://github.com/open-mpi/ompi/pull/1073">https://github.com/open-mpi/ompi/pull/1073</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Would you mind giving it a try? It fixes some other race conditions
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; and might pick this one up too.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Oct 27, 2015, at 10:04 AM, Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Okay, I&#226;&#128;&#153;ll take a look - I&#226;&#128;&#153;ve been chasing a race condition that
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; might be related
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Oct 27, 2015, at 9:54 AM, George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; No, it's using 2 nodes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   George.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Tue, Oct 27, 2015 at 12:35 PM, Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Is this on a single node?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Oct 27, 2015, at 9:25 AM, George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I get intermittent deadlocks wit the latest trunk. The smallest
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; reproducer is a shell for loop around a small (2 processes) short (20
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; seconds) MPI application. After few tens of iterations the MPI_Init will
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; deadlock with the following backtrace:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #0  0x00007fa94b5d9aed in nanosleep () from /lib64/libc.so.6
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #1  0x00007fa94b60ec94 in usleep () from /lib64/libc.so.6
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #2  0x00007fa94960ba08 in OPAL_PMIX_PMIX1XX_PMIx_Fence (procs=0x0,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; nprocs=0, info=0x7ffd7934fb90,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;     ninfo=1) at src/client/pmix_client_fence.c:100
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #3  0x00007fa9498376a2 in pmix1_fence (procs=0x0, collect_data=1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; at pmix1_client.c:305
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #4  0x00007fa94bb39ba4 in ompi_mpi_init (argc=3,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; argv=0x7ffd793500a8, requested=3,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;     provided=0x7ffd7934ff94) at runtime/ompi_mpi_init.c:645
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #5  0x00007fa94bb77281 in PMPI_Init_thread (argc=0x7ffd7934ff8c,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; argv=0x7ffd7934ff80, required=3,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;     provided=0x7ffd7934ff94) at pinit_thread.c:69
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #6  0x000000000040150f in main (argc=3, argv=0x7ffd793500a8) at
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; osu_mbw_mr.c:86
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On my machines this is reproducible at 100% after anywhere between
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 50 and 100 iterations.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;     George.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18280.php">http://www.open-mpi.org/community/lists/devel/2015/10/18280.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18281.php">http://www.open-mpi.org/community/lists/devel/2015/10/18281.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18282.php">http://www.open-mpi.org/community/lists/devel/2015/10/18282.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18284.php">http://www.open-mpi.org/community/lists/devel/2015/10/18284.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18292.php">http://www.open-mpi.org/community/lists/devel/2015/10/18292.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18294.php">http://www.open-mpi.org/community/lists/devel/2015/10/18294.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18302.php">http://www.open-mpi.org/community/lists/devel/2015/10/18302.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
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
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18309.php">http://www.open-mpi.org/community/lists/devel/2015/10/18309.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
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
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18320.php">http://www.open-mpi.org/community/lists/devel/2015/10/18320.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
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
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18323.php">http://www.open-mpi.org/community/lists/devel/2015/10/18323.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#208;&#161; &#208;&#163;&#208;&#178;&#208;&#176;&#208;&#182;&#208;&#181;&#208;&#189;&#208;&#184;&#208;&#181;&#208;&#188;, &#208;&#159;&#208;&#190;&#208;&#187;&#209;&#143;&#208;&#186;&#208;&#190;&#208;&#178; &#208;&#144;&#209;&#128;&#209;&#130;&#208;&#181;&#208;&#188; &#208;&#174;&#209;&#128;&#209;&#140;&#208;&#181;&#208;&#178;&#208;&#184;&#209;&#135;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best regards, Artem Y. Polyakov
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
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/11/18334.php">http://www.open-mpi.org/community/lists/devel/2015/11/18334.php</a>
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
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/11/18335.php">http://www.open-mpi.org/community/lists/devel/2015/11/18335.php</a>
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/11/18336.php">http://www.open-mpi.org/community/lists/devel/2015/11/18336.php</a>
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/11/18337.php">http://www.open-mpi.org/community/lists/devel/2015/11/18337.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/11/18340.php">http://www.open-mpi.org/community/lists/devel/2015/11/18340.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18341/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18342.php">Ralph Castain: "Re: [OMPI devel] Master won't build"</a>
<li><strong>Previous message:</strong> <a href="18340.php">George Bosilca: "Re: [OMPI devel] PMIX deadlock"</a>
<li><strong>In reply to:</strong> <a href="18340.php">George Bosilca: "Re: [OMPI devel] PMIX deadlock"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18343.php">Ralph Castain: "Re: [OMPI devel] PMIX deadlock"</a>
<li><strong>Reply:</strong> <a href="18343.php">Ralph Castain: "Re: [OMPI devel] PMIX deadlock"</a>
<li><strong>Reply:</strong> <a href="18344.php">Artem Polyakov: "Re: [OMPI devel] PMIX deadlock"</a>
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
