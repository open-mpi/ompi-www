<?
$subject_val = "Re: [OMPI devel] race condition in finalize";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 22 09:48:01 2015" -->
<!-- isoreceived="20150722134801" -->
<!-- sent="Wed, 22 Jul 2015 06:47:55 -0700" -->
<!-- isosent="20150722134755" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] race condition in finalize" -->
<!-- id="801B4C2F-788C-424F-92A5-B94572B30683_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="55AF4E43.5010208_at_rist.or.jp" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-22 09:47:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17681.php">Burette, Yohann: "Re: [OMPI devel] 1.10.0rc2"</a>
<li><strong>Previous message:</strong> <a href="17679.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc2"</a>
<li><strong>In reply to:</strong> <a href="17678.php">Gilles Gouaillardet: "Re: [OMPI devel] race condition in finalize"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Gilles!
<br>
<p>The &#147;clean&#148; event doesn&#146;t have to go last - any messages that arrive after all recvs have been removed will simply be dropped upon termination. This commit only ensures that the list of posted recvs is cleanly destructed, which will prevent the segfault.
<br>
<p><p><span class="quotelev1">&gt; On Jul 22, 2015, at 1:03 AM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i was unable to reproduce any crash with this fix :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i checked the code that is invoked in the progress thread, and it might queue other events.
</span><br>
<span class="quotelev1">&gt; bottom line, i am not 100% convinced the &quot;clean&quot; event will be executed at the very last.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; that being said, and once again, i was unable to reproduce any crash.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 7/22/2015 12:48 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I believe I have this fixed - please see if this solves the problem:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://github.com/open-mpi/ompi/pull/730">https://github.com/open-mpi/ompi/pull/730</a> &lt;<a href="https://github.com/open-mpi/ompi/pull/730">https://github.com/open-mpi/ompi/pull/730</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jul 21, 2015, at 12:22 AM, Gilles Gouaillardet &lt;gilles_at_[hidden] &lt;mailto:gilles_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; here is some more detailed information.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from orte_ess_base_app_finalize()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; first orte_rml_base_close() is invoked(via mca_base_framework_close(&amp;orte_rml_base_framework);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and it does
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     while (NULL != (item = opal_list_remove_first(&amp;orte_rml_base.posted_recvs))) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         OBJ_RELEASE(item);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; then, opal_stop_progress_thread() is invoked
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that means that when orte_rml_base_close is invoked, the progress thread is up and running,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and can potentially invoke orte_rml_base_post_recv that does
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     if (req-&gt;cancel) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         OPAL_LIST_FOREACH(recv, &amp;orte_rml_base.posted_recvs, orte_rml_posted_recv_t) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             if (OPAL_EQUAL == orte_util_compare_name_fields(mask, &amp;post-&gt;peer, &amp;recv-&gt;peer) &amp;&amp;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 post-&gt;tag == recv-&gt;tag) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 opal_output_verbose(5, orte_rml_base_framework.framework_output,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                     &quot;%s canceling recv %d for peer %s&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                     ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                     post-&gt;tag, ORTE_NAME_PRINT(&amp;recv-&gt;peer));
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 /* got a match - remove it */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 opal_list_remove_item(&amp;orte_rml_base.posted_recvs, &amp;recv-&gt;super);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 OBJ_RELEASE(recv);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 break;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         OBJ_RELEASE(req);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         return;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /* this is where the assert fails */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; since there is no lock, there is room for a race condition.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; before all that happen, and in orte_ess_base_app_finalize(), 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca_base_framework_close(&amp;orte_grpcomm_base_framework) invokes finalize from grpcomm_rcd.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that does
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_rml.recv_cancel(ORTE_NAME_WILDCARD, ORTE_RML_TAG_ALLGATHER_RCD) that is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_rml_oob_recv_cancel that ends up doing opal_event_set(..., orte_rml_base_post_recv)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; my first and naive attempt was to stop the opal_async progress thread before closing the rml_base framework:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; diff --git a/orte/mca/ess/base/ess_base_std_app.c b/orte/mca/ess/base/ess_base_std_app.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; index d3bc6e6..4e09b47 100644
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- a/orte/mca/ess/base/ess_base_std_app.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ b/orte/mca/ess/base/ess_base_std_app.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -353,18 +353,18 @@ int orte_ess_base_app_finalize(void)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      (void) mca_base_framework_close(&amp;orte_dfs_base_framework);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      (void) mca_base_framework_close(&amp;orte_routed_base_framework);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    (void) mca_base_framework_close(&amp;orte_rml_base_framework);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    (void) mca_base_framework_close(&amp;orte_oob_base_framework);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    (void) mca_base_framework_close(&amp;orte_state_base_framework);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    orte_session_dir_finalize(ORTE_PROC_MY_NAME);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      /* release the event base */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      if (progress_thread_running) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          opal_stop_progress_thread(&quot;opal_async&quot;, true);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          progress_thread_running = false;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    (void) mca_base_framework_close(&amp;orte_rml_base_framework);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    (void) mca_base_framework_close(&amp;orte_oob_base_framework);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    (void) mca_base_framework_close(&amp;orte_state_base_framework);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    orte_session_dir_finalize(ORTE_PROC_MY_NAME);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      return ORTE_SUCCESS;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that did not work : the opal_async progress thread is also used by pmix, so at this stage,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; invoking opal_stop_progress_thread only decrements the refcount (e.g. no pthread_join() )
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; my second and dumb attempt was to finalize pmix before ess_base_app, and that did not work
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (crash)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i ran out of idea on how to fix this issue, but i found a simple workaround :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; adding a short sleep (10 ms) in orte_rml_base_close() seems enough to avoid the race condition.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; diff --git a/orte/mca/rml/base/rml_base_frame.c b/orte/mca/rml/base/rml_base_frame.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; index 54dc454..050154c 100644
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- a/orte/mca/rml/base/rml_base_frame.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ b/orte/mca/rml/base/rml_base_frame.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -17,6 +17,7 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #include &quot;orte_config.h&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +#include &lt;sys/poll.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #include &lt;string.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  #include &quot;opal/dss/dss.h&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -78,6 +79,7 @@ static int orte_rml_base_close(void)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      opal_list_item_t *item;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    poll(NULL,0,10);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      while (NULL != (item = opal_list_remove_first(&amp;orte_rml_base.posted_recvs))) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          OBJ_RELEASE(item);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; incidentally, i found two OPAL_LIST_FOREACH &quot;loops&quot; in which opal_list_remove_item is invoked.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; per a comment in opal_list.h, this is unsafe and OPAL_LIST_FOREACH_SAFE should be used :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  diff --git a/orte/mca/rml/base/rml_base_msg_handlers.c b/orte/mca/rml/base/rml_base_msg_handlers.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; index 758bf91..22c7601 100644
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- a/orte/mca/rml/base/rml_base_msg_handlers.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ b/orte/mca/rml/base/rml_base_msg_handlers.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -12,7 +12,9 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   *                         All rights reserved.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   * Copyright (c) 2007-2013 Los Alamos National Security, LLC.  All rights
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   *                         reserved.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - * Copyright (c) 2015 Intel, Inc. All rights reserved.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; + * Copyright (c) 2015      Intel, Inc. All rights reserved.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; + * Copyright (c) 2015      Research Organization for Information Science
</span><br>
<span class="quotelev3">&gt;&gt;&gt; + *                         and Technology (RIST). All rights reserved.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   * $COPYRIGHT$
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   *
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   * Additional copyrights may follow
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -55,7 +57,7 @@ static void msg_match_recv(orte_rml_posted_recv_t *rcv, bool get_all);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  void orte_rml_base_post_recv(int sd, short args, void *cbdata)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      orte_rml_recv_request_t *req = (orte_rml_recv_request_t*)cbdata;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    orte_rml_posted_recv_t *post, *recv;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    orte_rml_posted_recv_t *post, *recv, *next;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      orte_ns_cmp_bitmask_t mask = ORTE_NS_CMP_ALL | ORTE_NS_CMP_WILD;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      opal_output_verbose(5, orte_rml_base_framework.framework_output,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -75,7 +77,7 @@ void orte_rml_base_post_recv(int sd, short args, void *cbdata)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       * and remove it from our list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      if (req-&gt;cancel) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -        OPAL_LIST_FOREACH(recv, &amp;orte_rml_base.posted_recvs, orte_rml_posted_recv_t) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +        OPAL_LIST_FOREACH_SAFE(recv, next, &amp;orte_rml_base.posted_recvs, orte_rml_posted_recv_t) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              if (OPAL_EQUAL == orte_util_compare_name_fields(mask, &amp;post-&gt;peer, &amp;recv-&gt;peer) &amp;&amp;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  post-&gt;tag == recv-&gt;tag) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  opal_output_verbose(5, orte_rml_base_framework.framework_output,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -120,12 +122,12 @@ void orte_rml_base_post_recv(int sd, short args, void *cbdata)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  void orte_rml_base_complete_recv_msg (orte_rml_recv_t **recv_msg)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    orte_rml_posted_recv_t *post;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    orte_rml_posted_recv_t *post, *next;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      orte_ns_cmp_bitmask_t mask = ORTE_NS_CMP_ALL | ORTE_NS_CMP_WILD;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      opal_buffer_t buf;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      orte_rml_recv_t *msg = *recv_msg;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      /* see if we have a waiting recv for this message */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -    OPAL_LIST_FOREACH(post, &amp;orte_rml_base.posted_recvs, orte_rml_posted_recv_t) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +    OPAL_LIST_FOREACH_SAFE(post, next, &amp;orte_rml_base.posted_recvs, orte_rml_posted_recv_t) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          /* since names could include wildcards, must use
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           * the more generalized comparison function
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i hope this helps,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 7/17/2015 11:04 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It&#146;s probably a race condition caused by uniting the ORTE and OPAL async threads, though I can&#146;t confirm that yet.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Jul 17, 2015, at 3:11 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden] &lt;mailto:gilles.gouaillardet_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Folks,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I noticed several errors such as <a href="http://mtt.open-mpi.org/index.php?do_redir=2244">http://mtt.open-mpi.org/index.php?do_redir=2244</a> &lt;<a href="http://mtt.open-mpi.org/index.php?do_redir=2244">http://mtt.open-mpi.org/index.php?do_redir=2244</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that did not make any sense to me (at first glance)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I was able to attach one process when the issue occurs.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the sigsegv occurs in thread 2, while thread 1 is invoking ompi_rte_finalize.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; All I can think is a scenario in which the progress thread (aka thread 2) is still dealing with some memory that was just freed/unmapped/corrupted by the main thread.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I empirically noticed the error is more likely to occur when there are many tasks on one node
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; e.g. mpirun --oversubscribe -np 32 a.out
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17652.php">http://www.open-mpi.org/community/lists/devel/2015/07/17652.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/07/17652.php">http://www.open-mpi.org/community/lists/devel/2015/07/17652.php</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17655.php">http://www.open-mpi.org/community/lists/devel/2015/07/17655.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/07/17655.php">http://www.open-mpi.org/community/lists/devel/2015/07/17655.php</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17668.php">http://www.open-mpi.org/community/lists/devel/2015/07/17668.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/07/17668.php">http://www.open-mpi.org/community/lists/devel/2015/07/17668.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17669.php">http://www.open-mpi.org/community/lists/devel/2015/07/17669.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/07/17669.php">http://www.open-mpi.org/community/lists/devel/2015/07/17669.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17678.php">http://www.open-mpi.org/community/lists/devel/2015/07/17678.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17680/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17681.php">Burette, Yohann: "Re: [OMPI devel] 1.10.0rc2"</a>
<li><strong>Previous message:</strong> <a href="17679.php">Paul Hargrove: "Re: [OMPI devel] 1.10.0rc2"</a>
<li><strong>In reply to:</strong> <a href="17678.php">Gilles Gouaillardet: "Re: [OMPI devel] race condition in finalize"</a>
<!-- nextthread="start" -->
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
