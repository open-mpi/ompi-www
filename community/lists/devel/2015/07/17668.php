<?
$subject_val = "Re: [OMPI devel] race condition in finalize";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 21 03:22:29 2015" -->
<!-- isoreceived="20150721072229" -->
<!-- sent="Tue, 21 Jul 2015 16:22:12 +0900" -->
<!-- isosent="20150721072212" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] race condition in finalize" -->
<!-- id="55ADF324.4000206_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="B4C85838-13E4-4F9A-B292-53BA2F2A1A46_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] race condition in finalize<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-21 03:22:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17669.php">Ralph Castain: "Re: [OMPI devel] race condition in finalize"</a>
<li><strong>Previous message:</strong> <a href="17667.php">Ralph Castain: "Re: [OMPI devel] Erroneous test?"</a>
<li><strong>In reply to:</strong> <a href="17655.php">Ralph Castain: "Re: [OMPI devel] race condition in finalize"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17669.php">Ralph Castain: "Re: [OMPI devel] race condition in finalize"</a>
<li><strong>Reply:</strong> <a href="17669.php">Ralph Castain: "Re: [OMPI devel] race condition in finalize"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>here is some more detailed information.
<br>
<p><p>from orte_ess_base_app_finalize()
<br>
first orte_rml_base_close() is invoked(via 
<br>
mca_base_framework_close(&amp;orte_rml_base_framework);
<br>
and it does
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while (NULL != (item = 
<br>
opal_list_remove_first(&amp;orte_rml_base.posted_recvs))) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OBJ_RELEASE(item);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
then, opal_stop_progress_thread() is invoked
<br>
<p>that means that when orte_rml_base_close is invoked, the progress thread 
<br>
is up and running,
<br>
and can potentially invoke orte_rml_base_post_recv that does
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (req-&gt;cancel) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_LIST_FOREACH(recv, &amp;orte_rml_base.posted_recvs, 
<br>
orte_rml_posted_recv_t) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (OPAL_EQUAL == orte_util_compare_name_fields(mask, 
<br>
&amp;post-&gt;peer, &amp;recv-&gt;peer) &amp;&amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;post-&gt;tag == recv-&gt;tag) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_output_verbose(5, 
<br>
orte_rml_base_framework.framework_output,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;%s canceling recv %d for peer %s&quot;,
<br>
ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;post-&gt;tag, 
<br>
ORTE_NAME_PRINT(&amp;recv-&gt;peer));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* got a match - remove it */
<br>
opal_list_remove_item(&amp;orte_rml_base.posted_recvs, &amp;recv-&gt;super);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OBJ_RELEASE(recv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OBJ_RELEASE(req);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>/* this is where the assert fails */
<br>
<p>since there is no lock, there is room for a race condition.
<br>
<p><p>before all that happen, and in orte_ess_base_app_finalize(),
<br>
mca_base_framework_close(&amp;orte_grpcomm_base_framework) invokes finalize 
<br>
from grpcomm_rcd.c
<br>
that does
<br>
orte_rml.recv_cancel(ORTE_NAME_WILDCARD, ORTE_RML_TAG_ALLGATHER_RCD) that is
<br>
orte_rml_oob_recv_cancel that ends up doing opal_event_set(..., 
<br>
orte_rml_base_post_recv)
<br>
<p><p>my first and naive attempt was to stop the opal_async progress thread 
<br>
before closing the rml_base framework:
<br>
diff --git a/orte/mca/ess/base/ess_base_std_app.c 
<br>
b/orte/mca/ess/base/ess_base_std_app.c
<br>
index d3bc6e6..4e09b47 100644
<br>
--- a/orte/mca/ess/base/ess_base_std_app.c
<br>
+++ b/orte/mca/ess/base/ess_base_std_app.c
<br>
@@ -353,18 +353,18 @@ int orte_ess_base_app_finalize(void)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(void) mca_base_framework_close(&amp;orte_dfs_base_framework);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(void) mca_base_framework_close(&amp;orte_routed_base_framework);
<br>
<p>-    (void) mca_base_framework_close(&amp;orte_rml_base_framework);
<br>
-    (void) mca_base_framework_close(&amp;orte_oob_base_framework);
<br>
-    (void) mca_base_framework_close(&amp;orte_state_base_framework);
<br>
-
<br>
-    orte_session_dir_finalize(ORTE_PROC_MY_NAME);
<br>
-
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* release the event base */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (progress_thread_running) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_stop_progress_thread(&quot;opal_async&quot;, true);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;progress_thread_running = false;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>+    (void) mca_base_framework_close(&amp;orte_rml_base_framework);
<br>
+    (void) mca_base_framework_close(&amp;orte_oob_base_framework);
<br>
+    (void) mca_base_framework_close(&amp;orte_state_base_framework);
<br>
+
<br>
+    orte_session_dir_finalize(ORTE_PROC_MY_NAME);
<br>
+
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return ORTE_SUCCESS;
<br>
&nbsp;&nbsp;}
<br>
<p>that did not work : the opal_async progress thread is also used by pmix, 
<br>
so at this stage,
<br>
invoking opal_stop_progress_thread only decrements the refcount (e.g. no 
<br>
pthread_join() )
<br>
<p>my second and dumb attempt was to finalize pmix before ess_base_app, and 
<br>
that did not work
<br>
(crash)
<br>
<p>i ran out of idea on how to fix this issue, but i found a simple 
<br>
workaround :
<br>
adding a short sleep (10 ms) in orte_rml_base_close() seems enough to 
<br>
avoid the race condition.
<br>
<p>diff --git a/orte/mca/rml/base/rml_base_frame.c 
<br>
b/orte/mca/rml/base/rml_base_frame.c
<br>
index 54dc454..050154c 100644
<br>
--- a/orte/mca/rml/base/rml_base_frame.c
<br>
+++ b/orte/mca/rml/base/rml_base_frame.c
<br>
@@ -17,6 +17,7 @@
<br>
<p>&nbsp;&nbsp;#include &quot;orte_config.h&quot;
<br>
<p>+#include &lt;sys/poll.h&gt;
<br>
&nbsp;&nbsp;#include &lt;string.h&gt;
<br>
<p>&nbsp;&nbsp;#include &quot;opal/dss/dss.h&quot;
<br>
@@ -78,6 +79,7 @@ static int orte_rml_base_close(void)
<br>
&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_list_item_t *item;
<br>
<p>+    poll(NULL,0,10);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while (NULL != (item = 
<br>
opal_list_remove_first(&amp;orte_rml_base.posted_recvs))) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OBJ_RELEASE(item);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>incidentally, i found two OPAL_LIST_FOREACH &quot;loops&quot; in which 
<br>
opal_list_remove_item is invoked.
<br>
per a comment in opal_list.h, this is unsafe and OPAL_LIST_FOREACH_SAFE 
<br>
should be used :
<br>
<p>&nbsp;&nbsp;diff --git a/orte/mca/rml/base/rml_base_msg_handlers.c 
<br>
b/orte/mca/rml/base/rml_base_msg_handlers.c
<br>
index 758bf91..22c7601 100644
<br>
--- a/orte/mca/rml/base/rml_base_msg_handlers.c
<br>
+++ b/orte/mca/rml/base/rml_base_msg_handlers.c
<br>
@@ -12,7 +12,9 @@
<br>
&nbsp;&nbsp;&nbsp;*                         All rights reserved.
<br>
&nbsp;&nbsp;&nbsp;* Copyright (c) 2007-2013 Los Alamos National Security, LLC.  All rights
<br>
&nbsp;&nbsp;&nbsp;*                         reserved.
<br>
- * Copyright (c) 2015 Intel, Inc. All rights reserved.
<br>
+ * Copyright (c) 2015      Intel, Inc. All rights reserved.
<br>
+ * Copyright (c) 2015      Research Organization for Information Science
<br>
+ *                         and Technology (RIST). All rights reserved.
<br>
&nbsp;&nbsp;&nbsp;* $COPYRIGHT$
<br>
&nbsp;&nbsp;&nbsp;*
<br>
&nbsp;&nbsp;&nbsp;* Additional copyrights may follow
<br>
@@ -55,7 +57,7 @@ static void msg_match_recv(orte_rml_posted_recv_t 
<br>
*rcv, bool get_all);
<br>
&nbsp;&nbsp;void orte_rml_base_post_recv(int sd, short args, void *cbdata)
<br>
&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;orte_rml_recv_request_t *req = (orte_rml_recv_request_t*)cbdata;
<br>
-    orte_rml_posted_recv_t *post, *recv;
<br>
+    orte_rml_posted_recv_t *post, *recv, *next;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;orte_ns_cmp_bitmask_t mask = ORTE_NS_CMP_ALL | ORTE_NS_CMP_WILD;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_output_verbose(5, orte_rml_base_framework.framework_output,
<br>
@@ -75,7 +77,7 @@ void orte_rml_base_post_recv(int sd, short args, void 
<br>
*cbdata)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* and remove it from our list
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (req-&gt;cancel) {
<br>
-        OPAL_LIST_FOREACH(recv, &amp;orte_rml_base.posted_recvs, 
<br>
orte_rml_posted_recv_t) {
<br>
+        OPAL_LIST_FOREACH_SAFE(recv, next, &amp;orte_rml_base.posted_recvs, 
<br>
orte_rml_posted_recv_t) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (OPAL_EQUAL == orte_util_compare_name_fields(mask, 
<br>
&amp;post-&gt;peer, &amp;recv-&gt;peer) &amp;&amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;post-&gt;tag == recv-&gt;tag) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_output_verbose(5, 
<br>
orte_rml_base_framework.framework_output,
<br>
@@ -120,12 +122,12 @@ void orte_rml_base_post_recv(int sd, short args, 
<br>
void *cbdata)
<br>
<p>&nbsp;&nbsp;void orte_rml_base_complete_recv_msg (orte_rml_recv_t **recv_msg)
<br>
&nbsp;&nbsp;{
<br>
-    orte_rml_posted_recv_t *post;
<br>
+    orte_rml_posted_recv_t *post, *next;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;orte_ns_cmp_bitmask_t mask = ORTE_NS_CMP_ALL | ORTE_NS_CMP_WILD;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_buffer_t buf;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;orte_rml_recv_t *msg = *recv_msg;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* see if we have a waiting recv for this message */
<br>
-    OPAL_LIST_FOREACH(post, &amp;orte_rml_base.posted_recvs, 
<br>
orte_rml_posted_recv_t) {
<br>
+    OPAL_LIST_FOREACH_SAFE(post, next, &amp;orte_rml_base.posted_recvs, 
<br>
orte_rml_posted_recv_t) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* since names could include wildcards, must use
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* the more generalized comparison function
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
<br>
<p>i hope this helps,
<br>
<p>Gilles
<br>
<p>On 7/17/2015 11:04 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; It&#146;s probably a race condition caused by uniting the ORTE and OPAL 
</span><br>
<span class="quotelev1">&gt; async threads, though I can&#146;t confirm that yet.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 17, 2015, at 3:11 AM, Gilles Gouaillardet 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;gilles.gouaillardet_at_[hidden] 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:gilles.gouaillardet_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Folks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I noticed several errors such as 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://mtt.open-mpi.org/index.php?do_redir=2244">http://mtt.open-mpi.org/index.php?do_redir=2244</a>
</span><br>
<span class="quotelev2">&gt;&gt; that did not make any sense to me (at first glance)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I was able to attach one process when the issue occurs.
</span><br>
<span class="quotelev2">&gt;&gt; the sigsegv occurs in thread 2, while thread 1 is invoking 
</span><br>
<span class="quotelev2">&gt;&gt; ompi_rte_finalize.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; All I can think is a scenario in which the progress thread (aka 
</span><br>
<span class="quotelev2">&gt;&gt; thread 2) is still dealing with some memory that was just 
</span><br>
<span class="quotelev2">&gt;&gt; freed/unmapped/corrupted by the main thread.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I empirically noticed the error is more likely to occur when there 
</span><br>
<span class="quotelev2">&gt;&gt; are many tasks on one node
</span><br>
<span class="quotelev2">&gt;&gt; e.g. mpirun --oversubscribe -np 32 a.out
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17652.php">http://www.open-mpi.org/community/lists/devel/2015/07/17652.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17655.php">http://www.open-mpi.org/community/lists/devel/2015/07/17655.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17668/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17669.php">Ralph Castain: "Re: [OMPI devel] race condition in finalize"</a>
<li><strong>Previous message:</strong> <a href="17667.php">Ralph Castain: "Re: [OMPI devel] Erroneous test?"</a>
<li><strong>In reply to:</strong> <a href="17655.php">Ralph Castain: "Re: [OMPI devel] race condition in finalize"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17669.php">Ralph Castain: "Re: [OMPI devel] race condition in finalize"</a>
<li><strong>Reply:</strong> <a href="17669.php">Ralph Castain: "Re: [OMPI devel] race condition in finalize"</a>
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
