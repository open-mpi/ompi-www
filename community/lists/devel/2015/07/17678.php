<?
$subject_val = "Re: [OMPI devel] race condition in finalize";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 22 04:03:22 2015" -->
<!-- isoreceived="20150722080322" -->
<!-- sent="Wed, 22 Jul 2015 17:03:15 +0900" -->
<!-- isosent="20150722080315" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] race condition in finalize" -->
<!-- id="55AF4E43.5010208_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="E4B44CA0-0D3C-4260-A980-BDB39676E49B_at_open-mpi.org" -->
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
<strong>Date:</strong> 2015-07-22 04:03:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17679.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc2"</a>
<li><strong>Previous message:</strong> <a href="17677.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc2"</a>
<li><strong>In reply to:</strong> <a href="17669.php">Ralph Castain: "Re: [OMPI devel] race condition in finalize"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17680.php">Ralph Castain: "Re: [OMPI devel] race condition in finalize"</a>
<li><strong>Reply:</strong> <a href="17680.php">Ralph Castain: "Re: [OMPI devel] race condition in finalize"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Ralph,
<br>
<p>i was unable to reproduce any crash with this fix :-)
<br>
<p>i checked the code that is invoked in the progress thread, and it might 
<br>
queue other events.
<br>
bottom line, i am not 100% convinced the &quot;clean&quot; event will be executed 
<br>
at the very last.
<br>
<p>that being said, and once again, i was unable to reproduce any crash.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 7/22/2015 12:48 AM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; I believe I have this fixed - please see if this solves the problem:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi/pull/730">https://github.com/open-mpi/ompi/pull/730</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 21, 2015, at 12:22 AM, Gilles Gouaillardet &lt;gilles_at_[hidden] 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:gilles_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; here is some more detailed information.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; from orte_ess_base_app_finalize()
</span><br>
<span class="quotelev2">&gt;&gt; first orte_rml_base_close() is invoked(via 
</span><br>
<span class="quotelev2">&gt;&gt; mca_base_framework_close(&amp;orte_rml_base_framework);
</span><br>
<span class="quotelev2">&gt;&gt; and it does
</span><br>
<span class="quotelev2">&gt;&gt;     while (NULL != (item = 
</span><br>
<span class="quotelev2">&gt;&gt; opal_list_remove_first(&amp;orte_rml_base.posted_recvs))) {
</span><br>
<span class="quotelev2">&gt;&gt;         OBJ_RELEASE(item);
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt; then, opal_stop_progress_thread() is invoked
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; that means that when orte_rml_base_close is invoked, the progress 
</span><br>
<span class="quotelev2">&gt;&gt; thread is up and running,
</span><br>
<span class="quotelev2">&gt;&gt; and can potentially invoke orte_rml_base_post_recv that does
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     if (req-&gt;cancel) {
</span><br>
<span class="quotelev2">&gt;&gt;         OPAL_LIST_FOREACH(recv, &amp;orte_rml_base.posted_recvs, 
</span><br>
<span class="quotelev2">&gt;&gt; orte_rml_posted_recv_t) {
</span><br>
<span class="quotelev2">&gt;&gt;             if (OPAL_EQUAL == orte_util_compare_name_fields(mask, 
</span><br>
<span class="quotelev2">&gt;&gt; &amp;post-&gt;peer, &amp;recv-&gt;peer) &amp;&amp;
</span><br>
<span class="quotelev2">&gt;&gt;                 post-&gt;tag == recv-&gt;tag) {
</span><br>
<span class="quotelev2">&gt;&gt;                 opal_output_verbose(5, 
</span><br>
<span class="quotelev2">&gt;&gt; orte_rml_base_framework.framework_output,
</span><br>
<span class="quotelev2">&gt;&gt;                                     &quot;%s canceling recv %d for peer %s&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),
</span><br>
<span class="quotelev2">&gt;&gt;                                     post-&gt;tag, 
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_NAME_PRINT(&amp;recv-&gt;peer));
</span><br>
<span class="quotelev2">&gt;&gt;                 /* got a match - remove it */
</span><br>
<span class="quotelev2">&gt;&gt; opal_list_remove_item(&amp;orte_rml_base.posted_recvs, &amp;recv-&gt;super);
</span><br>
<span class="quotelev2">&gt;&gt;                 OBJ_RELEASE(recv);
</span><br>
<span class="quotelev2">&gt;&gt;                 break;
</span><br>
<span class="quotelev2">&gt;&gt;             }
</span><br>
<span class="quotelev2">&gt;&gt;         }
</span><br>
<span class="quotelev2">&gt;&gt;         OBJ_RELEASE(req);
</span><br>
<span class="quotelev2">&gt;&gt;         return;
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /* this is where the assert fails */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; since there is no lock, there is room for a race condition.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; before all that happen, and in orte_ess_base_app_finalize(),
</span><br>
<span class="quotelev2">&gt;&gt; mca_base_framework_close(&amp;orte_grpcomm_base_framework) invokes 
</span><br>
<span class="quotelev2">&gt;&gt; finalize from grpcomm_rcd.c
</span><br>
<span class="quotelev2">&gt;&gt; that does
</span><br>
<span class="quotelev2">&gt;&gt; orte_rml.recv_cancel(ORTE_NAME_WILDCARD, ORTE_RML_TAG_ALLGATHER_RCD) 
</span><br>
<span class="quotelev2">&gt;&gt; that is
</span><br>
<span class="quotelev2">&gt;&gt; orte_rml_oob_recv_cancel that ends up doing opal_event_set(..., 
</span><br>
<span class="quotelev2">&gt;&gt; orte_rml_base_post_recv)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; my first and naive attempt was to stop the opal_async progress thread 
</span><br>
<span class="quotelev2">&gt;&gt; before closing the rml_base framework:
</span><br>
<span class="quotelev2">&gt;&gt; diff --git a/orte/mca/ess/base/ess_base_std_app.c 
</span><br>
<span class="quotelev2">&gt;&gt; b/orte/mca/ess/base/ess_base_std_app.c
</span><br>
<span class="quotelev2">&gt;&gt; index d3bc6e6..4e09b47 100644
</span><br>
<span class="quotelev2">&gt;&gt; --- a/orte/mca/ess/base/ess_base_std_app.c
</span><br>
<span class="quotelev2">&gt;&gt; +++ b/orte/mca/ess/base/ess_base_std_app.c
</span><br>
<span class="quotelev2">&gt;&gt; @@ -353,18 +353,18 @@ int orte_ess_base_app_finalize(void)
</span><br>
<span class="quotelev2">&gt;&gt;      (void) mca_base_framework_close(&amp;orte_dfs_base_framework);
</span><br>
<span class="quotelev2">&gt;&gt;      (void) mca_base_framework_close(&amp;orte_routed_base_framework);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -    (void) mca_base_framework_close(&amp;orte_rml_base_framework);
</span><br>
<span class="quotelev2">&gt;&gt; -    (void) mca_base_framework_close(&amp;orte_oob_base_framework);
</span><br>
<span class="quotelev2">&gt;&gt; -    (void) mca_base_framework_close(&amp;orte_state_base_framework);
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; -    orte_session_dir_finalize(ORTE_PROC_MY_NAME);
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt;      /* release the event base */
</span><br>
<span class="quotelev2">&gt;&gt;      if (progress_thread_running) {
</span><br>
<span class="quotelev2">&gt;&gt;          opal_stop_progress_thread(&quot;opal_async&quot;, true);
</span><br>
<span class="quotelev2">&gt;&gt;          progress_thread_running = false;
</span><br>
<span class="quotelev2">&gt;&gt;      }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +    (void) mca_base_framework_close(&amp;orte_rml_base_framework);
</span><br>
<span class="quotelev2">&gt;&gt; +    (void) mca_base_framework_close(&amp;orte_oob_base_framework);
</span><br>
<span class="quotelev2">&gt;&gt; +    (void) mca_base_framework_close(&amp;orte_state_base_framework);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +    orte_session_dir_finalize(ORTE_PROC_MY_NAME);
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt;      return ORTE_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt;  }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; that did not work : the opal_async progress thread is also used by 
</span><br>
<span class="quotelev2">&gt;&gt; pmix, so at this stage,
</span><br>
<span class="quotelev2">&gt;&gt; invoking opal_stop_progress_thread only decrements the refcount (e.g. 
</span><br>
<span class="quotelev2">&gt;&gt; no pthread_join() )
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; my second and dumb attempt was to finalize pmix before ess_base_app, 
</span><br>
<span class="quotelev2">&gt;&gt; and that did not work
</span><br>
<span class="quotelev2">&gt;&gt; (crash)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; i ran out of idea on how to fix this issue, but i found a simple 
</span><br>
<span class="quotelev2">&gt;&gt; workaround :
</span><br>
<span class="quotelev2">&gt;&gt; adding a short sleep (10 ms) in orte_rml_base_close() seems enough to 
</span><br>
<span class="quotelev2">&gt;&gt; avoid the race condition.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; diff --git a/orte/mca/rml/base/rml_base_frame.c 
</span><br>
<span class="quotelev2">&gt;&gt; b/orte/mca/rml/base/rml_base_frame.c
</span><br>
<span class="quotelev2">&gt;&gt; index 54dc454..050154c 100644
</span><br>
<span class="quotelev2">&gt;&gt; --- a/orte/mca/rml/base/rml_base_frame.c
</span><br>
<span class="quotelev2">&gt;&gt; +++ b/orte/mca/rml/base/rml_base_frame.c
</span><br>
<span class="quotelev2">&gt;&gt; @@ -17,6 +17,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  #include &quot;orte_config.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +#include &lt;sys/poll.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  #include &lt;string.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  #include &quot;opal/dss/dss.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; @@ -78,6 +79,7 @@ static int orte_rml_base_close(void)
</span><br>
<span class="quotelev2">&gt;&gt;  {
</span><br>
<span class="quotelev2">&gt;&gt;      opal_list_item_t *item;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +    poll(NULL,0,10);
</span><br>
<span class="quotelev2">&gt;&gt;      while (NULL != (item = 
</span><br>
<span class="quotelev2">&gt;&gt; opal_list_remove_first(&amp;orte_rml_base.posted_recvs))) {
</span><br>
<span class="quotelev2">&gt;&gt;          OBJ_RELEASE(item);
</span><br>
<span class="quotelev2">&gt;&gt;      }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; incidentally, i found two OPAL_LIST_FOREACH &quot;loops&quot; in which 
</span><br>
<span class="quotelev2">&gt;&gt; opal_list_remove_item is invoked.
</span><br>
<span class="quotelev2">&gt;&gt; per a comment in opal_list.h, this is unsafe and 
</span><br>
<span class="quotelev2">&gt;&gt; OPAL_LIST_FOREACH_SAFE should be used :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  diff --git a/orte/mca/rml/base/rml_base_msg_handlers.c 
</span><br>
<span class="quotelev2">&gt;&gt; b/orte/mca/rml/base/rml_base_msg_handlers.c
</span><br>
<span class="quotelev2">&gt;&gt; index 758bf91..22c7601 100644
</span><br>
<span class="quotelev2">&gt;&gt; --- a/orte/mca/rml/base/rml_base_msg_handlers.c
</span><br>
<span class="quotelev2">&gt;&gt; +++ b/orte/mca/rml/base/rml_base_msg_handlers.c
</span><br>
<span class="quotelev2">&gt;&gt; @@ -12,7 +12,9 @@
</span><br>
<span class="quotelev2">&gt;&gt;   *                         All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt;   * Copyright (c) 2007-2013 Los Alamos National Security, LLC.  All 
</span><br>
<span class="quotelev2">&gt;&gt; rights
</span><br>
<span class="quotelev2">&gt;&gt;   *                         reserved.
</span><br>
<span class="quotelev2">&gt;&gt; - * Copyright (c) 2015 Intel, Inc. All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; + * Copyright (c) 2015      Intel, Inc. All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt; + * Copyright (c) 2015      Research Organization for Information Science
</span><br>
<span class="quotelev2">&gt;&gt; + *                         and Technology (RIST). All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt;   * $COPYRIGHT$
</span><br>
<span class="quotelev2">&gt;&gt;   *
</span><br>
<span class="quotelev2">&gt;&gt;   * Additional copyrights may follow
</span><br>
<span class="quotelev2">&gt;&gt; @@ -55,7 +57,7 @@ static void msg_match_recv(orte_rml_posted_recv_t 
</span><br>
<span class="quotelev2">&gt;&gt; *rcv, bool get_all);
</span><br>
<span class="quotelev2">&gt;&gt;  void orte_rml_base_post_recv(int sd, short args, void *cbdata)
</span><br>
<span class="quotelev2">&gt;&gt;  {
</span><br>
<span class="quotelev2">&gt;&gt;      orte_rml_recv_request_t *req = (orte_rml_recv_request_t*)cbdata;
</span><br>
<span class="quotelev2">&gt;&gt; -    orte_rml_posted_recv_t *post, *recv;
</span><br>
<span class="quotelev2">&gt;&gt; +    orte_rml_posted_recv_t *post, *recv, *next;
</span><br>
<span class="quotelev2">&gt;&gt;      orte_ns_cmp_bitmask_t mask = ORTE_NS_CMP_ALL | ORTE_NS_CMP_WILD;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      opal_output_verbose(5, orte_rml_base_framework.framework_output,
</span><br>
<span class="quotelev2">&gt;&gt; @@ -75,7 +77,7 @@ void orte_rml_base_post_recv(int sd, short args, 
</span><br>
<span class="quotelev2">&gt;&gt; void *cbdata)
</span><br>
<span class="quotelev2">&gt;&gt;       * and remove it from our list
</span><br>
<span class="quotelev2">&gt;&gt;       */
</span><br>
<span class="quotelev2">&gt;&gt;      if (req-&gt;cancel) {
</span><br>
<span class="quotelev2">&gt;&gt; -        OPAL_LIST_FOREACH(recv, &amp;orte_rml_base.posted_recvs, 
</span><br>
<span class="quotelev2">&gt;&gt; orte_rml_posted_recv_t) {
</span><br>
<span class="quotelev2">&gt;&gt; +        OPAL_LIST_FOREACH_SAFE(recv, next, 
</span><br>
<span class="quotelev2">&gt;&gt; &amp;orte_rml_base.posted_recvs, orte_rml_posted_recv_t) {
</span><br>
<span class="quotelev2">&gt;&gt;              if (OPAL_EQUAL == orte_util_compare_name_fields(mask, 
</span><br>
<span class="quotelev2">&gt;&gt; &amp;post-&gt;peer, &amp;recv-&gt;peer) &amp;&amp;
</span><br>
<span class="quotelev2">&gt;&gt;                  post-&gt;tag == recv-&gt;tag) {
</span><br>
<span class="quotelev2">&gt;&gt;                  opal_output_verbose(5, 
</span><br>
<span class="quotelev2">&gt;&gt; orte_rml_base_framework.framework_output,
</span><br>
<span class="quotelev2">&gt;&gt; @@ -120,12 +122,12 @@ void orte_rml_base_post_recv(int sd, short 
</span><br>
<span class="quotelev2">&gt;&gt; args, void *cbdata)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  void orte_rml_base_complete_recv_msg (orte_rml_recv_t **recv_msg)
</span><br>
<span class="quotelev2">&gt;&gt;  {
</span><br>
<span class="quotelev2">&gt;&gt; -    orte_rml_posted_recv_t *post;
</span><br>
<span class="quotelev2">&gt;&gt; +    orte_rml_posted_recv_t *post, *next;
</span><br>
<span class="quotelev2">&gt;&gt;      orte_ns_cmp_bitmask_t mask = ORTE_NS_CMP_ALL | ORTE_NS_CMP_WILD;
</span><br>
<span class="quotelev2">&gt;&gt;      opal_buffer_t buf;
</span><br>
<span class="quotelev2">&gt;&gt;      orte_rml_recv_t *msg = *recv_msg;
</span><br>
<span class="quotelev2">&gt;&gt;      /* see if we have a waiting recv for this message */
</span><br>
<span class="quotelev2">&gt;&gt; -    OPAL_LIST_FOREACH(post, &amp;orte_rml_base.posted_recvs, 
</span><br>
<span class="quotelev2">&gt;&gt; orte_rml_posted_recv_t) {
</span><br>
<span class="quotelev2">&gt;&gt; +    OPAL_LIST_FOREACH_SAFE(post, next, &amp;orte_rml_base.posted_recvs, 
</span><br>
<span class="quotelev2">&gt;&gt; orte_rml_posted_recv_t) {
</span><br>
<span class="quotelev2">&gt;&gt;          /* since names could include wildcards, must use
</span><br>
<span class="quotelev2">&gt;&gt;           * the more generalized comparison function
</span><br>
<span class="quotelev2">&gt;&gt;           */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; i hope this helps,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 7/17/2015 11:04 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It&#146;s probably a race condition caused by uniting the ORTE and OPAL 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; async threads, though I can&#146;t confirm that yet.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jul 17, 2015, at 3:11 AM, Gilles Gouaillardet 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;gilles.gouaillardet_at_[hidden] 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;mailto:gilles.gouaillardet_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Folks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I noticed several errors such as 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://mtt.open-mpi.org/index.php?do_redir=2244">http://mtt.open-mpi.org/index.php?do_redir=2244</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that did not make any sense to me (at first glance)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I was able to attach one process when the issue occurs.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the sigsegv occurs in thread 2, while thread 1 is invoking 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ompi_rte_finalize.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; All I can think is a scenario in which the progress thread (aka 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; thread 2) is still dealing with some memory that was just 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; freed/unmapped/corrupted by the main thread.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I empirically noticed the error is more likely to occur when there 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; are many tasks on one node
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; e.g. mpirun --oversubscribe -np 32 a.out
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17652.php">http://www.open-mpi.org/community/lists/devel/2015/07/17652.php</a>
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
<span class="quotelev3">&gt;&gt;&gt; Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:<a href="http://www.open-mpi.org/community/lists/devel/2015/07/17655.php">http://www.open-mpi.org/community/lists/devel/2015/07/17655.php</a>
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17668.php">http://www.open-mpi.org/community/lists/devel/2015/07/17668.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17669.php">http://www.open-mpi.org/community/lists/devel/2015/07/17669.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17678/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17679.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc2"</a>
<li><strong>Previous message:</strong> <a href="17677.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc2"</a>
<li><strong>In reply to:</strong> <a href="17669.php">Ralph Castain: "Re: [OMPI devel] race condition in finalize"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17680.php">Ralph Castain: "Re: [OMPI devel] race condition in finalize"</a>
<li><strong>Reply:</strong> <a href="17680.php">Ralph Castain: "Re: [OMPI devel] race condition in finalize"</a>
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
