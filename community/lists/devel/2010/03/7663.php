<?
$subject_val = "Re: [OMPI devel] Some questions about checkpoint/restart (7)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 26 05:24:58 2010" -->
<!-- isoreceived="20100326092458" -->
<!-- sent="Fri, 26 Mar 2010 18:25:17 +0900" -->
<!-- isosent="20100326092517" -->
<!-- name="Takayuki Seki" -->
<!-- email="seki_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Some questions about checkpoint/restart (7)" -->
<!-- id="4BAC7D7D.4050307_at_np.css.fujitsu.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B85F5CB5-0DCF-493C-B726-31A4B7123FAE_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Some questions about checkpoint/restart (7)<br>
<strong>From:</strong> Takayuki Seki (<em>seki_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-26 05:25:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7664.php">Jeff Squyres: "Re: [OMPI devel] process migration on openmpi"</a>
<li><strong>Previous message:</strong> <a href="7662.php">luyang dong: "[OMPI devel] process migration on openmpi"</a>
<li><strong>In reply to:</strong> <a href="7635.php">Josh Hursey: "Re: [OMPI devel] Some questions about checkpoint/restart (7)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, Josh, George,
<br>
<p>Thank you very much for your answers about my questions.
<br>
<p>Now I have 3 more questions.
<br>
I would like to post them one of these days.
<br>
<p>I will try to use checkpoint/restart after this as much as possible.
<br>
<p>I tried to fix some bugs.
<br>
But I could not fix them smartly.
<br>
For reference, I put temporary ugly concept patch in this mail.
<br>
<p>In 7th question,
<br>
My debugging was mistaken.
<br>
<p>Using ompi_ddt_type_size may be correct.
<br>
And receiver received the 14bytes messages correctly in the bkrmk.
<br>
<p>DEBUG:wait_quiesce_drained:WCH x=1 a=4329.100098 y=2 b=8474.730469 c=48
<br>
--&gt; Received messages are contiguous.
<br>
<p>DEBUG:drain_message_find:My=1 drain_msg=184a280 [peer=0/0 count=1/1 comm=602500 ID 0/0/0 R=1/1 tag=1000/1000 ddt_size=14/14 [datatype-&gt;size=1]]
<br>
[done=1 active=0 already_posted=0]
<br>
--&gt; Matching is correct.
<br>
<p>DEBUG:ompi_ddt_copy_content_same_ddt:Start size=14 flag=102/4 count=1
<br>
<p>I think that problem is in ompi_ddt_copy_content_same_ddt function,
<br>
when copying message from drain_list to user buffer.
<br>
<p>Please check my 8th question later too.
<br>
I think that 8th question(problem) is like 7th.
<br>
<p>
<br><p>
--- crcp_bkmrk_pml.c_orig	2009-12-09 05:36:26.000000000 +0900
<br>
+++ crcp_bkmrk_pml.c	2010-03-23 17:59:48.412809557 +0900
<br>
@@ -175,7 +175,10 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_list_t * to_list,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_crcp_bkmrk_pml_traffic_message_ref_t **new_msg_ref,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bool keep_active, /* If you have to create a new context, should it be initialized to active? */
<br>
-                                bool remove); /* Remove the original? - false = copy() */
<br>
+                                bool remove
<br>
+,int tag  /* seki : for Q5 */
<br>
+,int rank /* seki : for Q5 */
<br>
+); /* Remove the original? - false = copy() */
<br>
&nbsp;
<br>
&nbsp;/*
<br>
&nbsp;&nbsp;* Traffic Message: Strip off the first matching request
<br>
@@ -829,6 +832,9 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;msg_ref-&gt;tag        = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;msg_ref-&gt;rank       = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;msg_ref-&gt;comm       = NULL;
<br>
+msg_ref-&gt;c_contextid = 0; /* seki  : for Q4 */
<br>
+msg_ref-&gt;c_my_rank   = 0; /* seki  : for Q4 */
<br>
+msg_ref-&gt;c_flags     = 0; /* seki  : for Q4 */
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OBJ_CONSTRUCT(&amp;msg_ref-&gt;msg_contents, opal_list_t);
<br>
&nbsp;
<br>
@@ -853,6 +859,9 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;msg_ref-&gt;tag        = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;msg_ref-&gt;rank       = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;msg_ref-&gt;comm       = NULL;
<br>
+msg_ref-&gt;c_contextid = 0; /* seki  : for Q4 */
<br>
+msg_ref-&gt;c_my_rank   = 0; /* seki  : for Q4 */
<br>
+msg_ref-&gt;c_flags     = 0; /* seki  : for Q4 */
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while( NULL != (item = opal_list_remove_first(&amp;(msg_ref-&gt;msg_contents)) ) ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HOKE_CONTENT_REF_RETURN(item);
<br>
@@ -917,6 +926,9 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;msg_ref-&gt;tag        = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;msg_ref-&gt;rank       = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;msg_ref-&gt;comm       = NULL;
<br>
+msg_ref-&gt;c_contextid = 0; /* seki  : for Q4 */
<br>
+msg_ref-&gt;c_my_rank   = 0; /* seki  : for Q4 */
<br>
+msg_ref-&gt;c_flags     = 0; /* seki  : for Q4 */
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while( NULL != (item = opal_list_remove_first(&amp;(msg_ref-&gt;msg_contents)) ) ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HOKE_CONTENT_REF_RETURN(item);
<br>
@@ -1019,6 +1031,8 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;msg_ref-&gt;tag     = v_tag;                                     \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;msg_ref-&gt;rank    = v_rank;                                    \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;msg_ref-&gt;comm    = v_comm;                                    \
<br>
+msg_ref-&gt;c_contextid = v_comm-&gt;c_contextid; /* seki : for Q4 */\
<br>
+msg_ref-&gt;c_my_rank   = v_comm-&gt;c_my_rank;   /* seki : for Q4 */\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;msg_ref-&gt;proc_name.jobid  = p_jobid;                          \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;msg_ref-&gt;proc_name.vpid   = p_vpid;                           \
<br>
@@ -1047,6 +1061,8 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;msg_ref-&gt;tag     = v_tag;                                     \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;msg_ref-&gt;rank    = v_rank;                                    \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;msg_ref-&gt;comm    = v_comm;                                    \
<br>
+msg_ref-&gt;c_contextid = v_comm-&gt;c_contextid; /* seki : for Q4 */\
<br>
+msg_ref-&gt;c_my_rank   = v_comm-&gt;c_my_rank;   /* seki : for Q4 */\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;msg_ref-&gt;proc_name.jobid  = p_jobid;                          \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;msg_ref-&gt;proc_name.vpid   = p_vpid;                           \
<br>
@@ -2313,7 +2329,10 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;peer_ref, &amp;(peer_ref-&gt;recv_init_list),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;new_msg_ref,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;true,
<br>
-                                 false);
<br>
+                                 false
<br>
+,(int)request-&gt;req_status.MPI_TAG    /* seki for Q5 */
<br>
+,(int)request-&gt;req_status.MPI_SOURCE /* seki for Q5 */
<br>
+);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;msg_ref = new_msg_ref;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
@@ -2558,7 +2577,10 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;peer_ref, &amp;(peer_ref-&gt;irecv_list),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;new_msg_ref,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;true,
<br>
-                                 true);
<br>
+                                 true
<br>
+,(int)request-&gt;req_status.MPI_TAG    /* seki : for Q5 */
<br>
+,(int)request-&gt;req_status.MPI_SOURCE /* seki : for Q5 */
<br>
+);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;msg_ref = new_msg_ref;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
@@ -2735,7 +2757,10 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;peer_ref, &amp;(peer_ref-&gt;recv_list),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;new_msg_ref,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;false,
<br>
-                                 true);
<br>
+                                 true
<br>
+,(int)status-&gt;MPI_TAG
<br>
+,(int)status-&gt;MPI_SOURCE
<br>
+);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;new_msg_ref-&gt;done++;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;new_msg_ref-&gt;active--;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
@@ -3269,12 +3294,16 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_list_t * to_list,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_crcp_bkmrk_pml_traffic_message_ref_t **new_msg_ref,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bool keep_active,
<br>
-                                bool remove)
<br>
+                                bool remove
<br>
+,int work_tag  /* seki : for Q5 */
<br>
+,int work_rank /* seki : for Q5 */
<br>
+)
<br>
&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int ret, exit_status = ORTE_SUCCESS;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_crcp_bkmrk_pml_message_content_ref_t *new_content = NULL, *prev_content = NULL;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_request_t *request = NULL;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bool loc_already_drained = false;
<br>
+int temp_tag,temp_rank; /* seki : for Q5 */
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Append to the to_peer_ref */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if( COORD_MSG_TYPE_B_RECV != msg_type ) {
<br>
@@ -3289,13 +3318,15 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;
<br>
+temp_tag  = (old_msg_ref-&gt;tag == MPI_ANY_TAG)     ? work_tag  : old_msg_ref-&gt;tag; /* seki : for Q5 */
<br>
+temp_rank = (old_msg_ref-&gt;rank == MPI_ANY_SOURCE) ? work_rank : old_msg_ref-&gt;rank; /* seki : for Q5 */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ret = traffic_message_append(to_peer_ref, to_list,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;old_msg_ref-&gt;msg_type,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;old_msg_ref-&gt;count,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NULL,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;old_msg_ref-&gt;ddt_size,
<br>
-                                 old_msg_ref-&gt;tag,
<br>
-                                 old_msg_ref-&gt;rank,
<br>
+                                 temp_tag,   /* seki : for Q5 */
<br>
+                                 temp_rank,  /* seki : for Q5 */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;old_msg_ref-&gt;comm,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;new_msg_ref);
<br>
&nbsp;
<br>
@@ -3713,7 +3744,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(msg_ref-&gt;count == count  &amp;&amp;
<br>
-           (NULL != msg_ref-&gt;comm &amp;&amp; msg_ref-&gt;comm-&gt;c_contextid == comm_id) &amp;&amp; 
<br>
+(msg_ref-&gt;c_contextid == comm_id) &amp;&amp; /* seki : for Q4 */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(msg_ref-&gt;tag  == MPI_ANY_TAG || msg_ref-&gt;tag  == tag)   &amp;&amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(peer          == INVALID_INT || msg_ref-&gt;rank == peer)  &amp;&amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;msg_ref-&gt;ddt_size == ddt_size) {
<br>
@@ -4036,6 +4067,7 @@
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;memcpy(&amp;(content_ref-&gt;status), &amp;drain_content_ref-&gt;status, sizeof(ompi_status_public_t)); 
<br>
&nbsp;
<br>
+#if 0 /* seki */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if( 0 != (ret = ompi_ddt_copy_content_same_ddt(drain_msg_ref-&gt;datatype,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;drain_msg_ref-&gt;count,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;content_ref-&gt;buffer,
<br>
@@ -4045,6 +4077,10 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ret);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;exit_status = ret;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
+#else
<br>
+/* seki : for Q2 : it is CONTIGUOUS message only! */
<br>
+memcpy((char *)content_ref-&gt;buffer,(char *)drain_content_ref-&gt;buffer,drain_msg_ref-&gt;ddt_size);
<br>
+#endif
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Remove the message from the list */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;drain_content_ref-&gt;request = NULL;
<br>
@@ -4081,7 +4117,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* The buffer could be NULL - More likely when doing a count=0 type of message (e.g., Barrier) */
<br>
-    if( OPAL_LIKELY(NULL != buf) ) {
<br>
+    if( OPAL_LIKELY(NULL != buf) &amp;&amp; (count != 0) ) { /* seki : for Q10 */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if( 0 != (ret = ompi_ddt_copy_content_same_ddt(datatype, count,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(void*)buf, drain_content_ref-&gt;buffer) ) ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_output( mca_crcp_bkmrk_component.super.output_handle,
<br>
@@ -4332,8 +4368,8 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Clear send_init_list */
<br>
-        for(rm_item  = opal_list_get_last(&amp;peer_ref-&gt;send_list);
<br>
-            rm_item != opal_list_get_begin(&amp;peer_ref-&gt;send_list);
<br>
+        for(rm_item  = opal_list_get_last(&amp;peer_ref-&gt;send_init_list); /* seki : for Q1 */
<br>
+            rm_item != opal_list_get_begin(&amp;peer_ref-&gt;send_init_list); /* seki : for Q1 */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rm_item  = opal_list_get_prev(rm_item) ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;msg_ref = (ompi_crcp_bkmrk_pml_traffic_message_ref_t*)rm_item;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;msg_ref-&gt;matched = 0;
<br>
@@ -4370,8 +4406,8 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Clear recv_init_list */
<br>
-        for(rm_item  = opal_list_get_last(&amp;peer_ref-&gt;recv_list);
<br>
-            rm_item != opal_list_get_begin(&amp;peer_ref-&gt;recv_list);
<br>
+        for(rm_item  = opal_list_get_last(&amp;peer_ref-&gt;recv_init_list); /* seki : for Q1 */
<br>
+            rm_item != opal_list_get_begin(&amp;peer_ref-&gt;recv_init_list); /* seki : for Q1 */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rm_item  = opal_list_get_prev(rm_item) ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;msg_ref = (ompi_crcp_bkmrk_pml_traffic_message_ref_t*)rm_item;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;msg_ref-&gt;matched = 0;
<br>
@@ -5523,9 +5559,9 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* - Communicator Context ID
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* - My Rank in Communicator
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
<br>
-    comm_my_rank  = ompi_comm_rank(msg_ref-&gt;comm);
<br>
+comm_my_rank  = msg_ref-&gt;c_my_rank; /* seki : for Q4 */
<br>
&nbsp;
<br>
-    PACK_BUFFER(buffer, msg_ref-&gt;comm-&gt;c_contextid, 1, OPAL_UINT32,
<br>
+    PACK_BUFFER(buffer, msg_ref-&gt;c_contextid, 1, OPAL_UINT32, /* seki : for Q4 */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;crcp:bkmrk: send_msg_details: Unable to pack communicator ID&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PACK_BUFFER(buffer, comm_my_rank, 1, OPAL_INT,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;crcp:bkmrk: send_msg_details: Unable to pack comm rank ID&quot;);
<br>
@@ -5794,6 +5830,14 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return exit_status;
<br>
&nbsp;}
<br>
&nbsp;
<br>
+/* seki : for Q3 This fix may be not correct. */
<br>
+#define WORK_GET_UNRES(n_l_u,d,m)       \
<br>
+{                                       \
<br>
+work1 = (n_l_u &lt; (d-m)) ? n_l_u : (d-m);\
<br>
+if (work1 &lt; 0) { work1=0; }             \
<br>
+  m     += work1;                       \
<br>
+  n_l_u -= work1;                       \
<br>
+}
<br>
&nbsp;static int do_recv_msg_detail_check_drain(ompi_crcp_bkmrk_pml_peer_ref_t *peer_ref,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int rank, uint32_t comm_id, int tag,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size_t count, size_t datatype_size,
<br>
@@ -5813,6 +5857,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int num_still_active = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Number of drain messages posted */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int num_posted = 0;
<br>
+int work1; /* seki : for Q3 This fix may be not correct. */
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*num_resolved = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;num_left_unresolved = p_num_sent;
<br>
@@ -5865,28 +5910,28 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* First pass: Count all 'done'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if( NULL != posted_recv_msg_ref ) {
<br>
-        posted_recv_msg_ref-&gt;matched += posted_recv_msg_ref-&gt;done;
<br>
-        num_left_unresolved          -= posted_recv_msg_ref-&gt;done;
<br>
+/* seki : for Q3 This fix may be not correct. */
<br>
+WORK_GET_UNRES(num_left_unresolved,posted_recv_msg_ref-&gt;done,posted_recv_msg_ref-&gt;matched)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TRAFFIC_MSG_DUMP_MSG_INDV(11, (posted_recv_msg_ref, &quot;Ck.  Recv&quot;, true));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if( NULL != posted_irecv_msg_ref ) {
<br>
-        posted_irecv_msg_ref-&gt;matched += posted_irecv_msg_ref-&gt;done;
<br>
-        num_left_unresolved           -= posted_irecv_msg_ref-&gt;done;
<br>
+/* seki : for Q3 This fix may be not correct. */
<br>
+WORK_GET_UNRES(num_left_unresolved,posted_irecv_msg_ref-&gt;done,posted_irecv_msg_ref-&gt;matched)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TRAFFIC_MSG_DUMP_MSG_INDV(11, (posted_irecv_msg_ref, &quot;Ck. iRecv&quot;, true));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if( NULL != posted_precv_msg_ref ) {
<br>
-        posted_precv_msg_ref-&gt;matched += posted_precv_msg_ref-&gt;done;
<br>
-        num_left_unresolved           -= posted_precv_msg_ref-&gt;done;
<br>
+/* seki : for Q3 This fix may be not correct. */
<br>
+WORK_GET_UNRES(num_left_unresolved,posted_precv_msg_ref-&gt;done,posted_precv_msg_ref-&gt;matched)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TRAFFIC_MSG_DUMP_MSG_INDV(11, (posted_precv_msg_ref, &quot;Ck. pRecv&quot;, true));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if( NULL != posted_unknown_recv_msg_ref ) {
<br>
-        posted_unknown_recv_msg_ref-&gt;matched += posted_unknown_recv_msg_ref-&gt;done;
<br>
-        num_left_unresolved                  -= posted_unknown_recv_msg_ref-&gt;done;
<br>
+/* seki : for Q3 This fix may be not correct. */
<br>
+WORK_GET_UNRES(num_left_unresolved,posted_unknown_recv_msg_ref-&gt;done,posted_unknown_recv_msg_ref-&gt;matched)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TRAFFIC_MSG_DUMP_MSG_INDV(11, (posted_unknown_recv_msg_ref, &quot;Ck. uRecv&quot;, true));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if( NULL != posted_unknown_precv_msg_ref ) {
<br>
-        posted_unknown_precv_msg_ref-&gt;matched += posted_unknown_precv_msg_ref-&gt;done;
<br>
-        num_left_unresolved                   -= posted_unknown_precv_msg_ref-&gt;done;
<br>
+/* seki : for Q3 This fix may be not correct. */
<br>
+WORK_GET_UNRES(num_left_unresolved,posted_unknown_precv_msg_ref-&gt;done,posted_unknown_precv_msg_ref-&gt;matched)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TRAFFIC_MSG_DUMP_MSG_INDV(11, (posted_unknown_precv_msg_ref, &quot;Ck. upRecv&quot;, true));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;
<br>
<p>
<br><p>
--- crcp_bkmrk_pml.h_orig	2009-12-09 05:36:26.000000000 +0900
<br>
+++ crcp_bkmrk_pml.h	2010-03-23 10:24:42.531147723 +0900
<br>
@@ -222,6 +222,9 @@
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/** Communicator pointer */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_communicator_t* comm;
<br>
+uint32_t c_contextid;  /* seki: for Q4 */
<br>
+int c_my_rank;         /* seki: for Q4 */
<br>
+uint32_t c_flags;      /* seki: for Q4 */
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/** Message Contents */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_list_t msg_contents;
<br>
@@ -303,6 +306,9 @@
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/** Communicator pointer */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_communicator_t* comm;
<br>
+uint32_t c_contextid;  /* seki: for Q4 */
<br>
+int c_my_rank;         /* seki: for Q4 */
<br>
+uint32_t c_flags;      /* seki: for Q4 */
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/** Message Contents */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_list_t msg_contents;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7664.php">Jeff Squyres: "Re: [OMPI devel] process migration on openmpi"</a>
<li><strong>Previous message:</strong> <a href="7662.php">luyang dong: "[OMPI devel] process migration on openmpi"</a>
<li><strong>In reply to:</strong> <a href="7635.php">Josh Hursey: "Re: [OMPI devel] Some questions about checkpoint/restart (7)"</a>
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
