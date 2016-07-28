<?
$subject_val = "[OMPI devel] [RFC] Removal of orte_proc_table";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  3 11:51:01 2008" -->
<!-- isoreceived="20080303165101" -->
<!-- sent="Mon, 03 Mar 2008 11:51:00 -0500" -->
<!-- isosent="20080303165100" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="[OMPI devel] [RFC] Removal of orte_proc_table" -->
<!-- id="47CC2C74.7030708_at_cs.indiana.edu" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] [RFC] Removal of orte_proc_table<br>
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-03 11:51:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3331.php">Rainer Keller: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r17681"</a>
<li><strong>Previous message:</strong> <a href="3329.php">Edgar Gabriel: "Re: [OMPI devel] [RFC] Default hostfile MCA param"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: Removal of orte_proc_table
<br>
<p>WHY: It is the last 'orte' class, its implementation is an abstraction 
<br>
violation since it assumes certain things about how the opal_hash_table 
<br>
is implemented, and it is not much code to remove it.
<br>
<p>WHERE: This will necessitate minor changes in:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;btl: tcp, sctp
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;oob: tcp
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;routed: unity, tree
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;grpcomm: basic
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;iof: svc
<br>
<p>TIMEOUT: COB Wednesday, March 5.
<br>
<p>DESCRIPTION:
<br>
After the orte changes, we were left with only one orte 'class' left. So 
<br>
Ralph and I discussed the possibility of removing it, and found that the 
<br>
amount of code change to do so is relatively minor.
<br>
<p>There are also a couple other good reasons to remove or revamp it:
<br>
&nbsp;&nbsp;&nbsp;1. The way the orte_proc_table was used was confusing (since you 
<br>
created an opal_hash_table and then used it as an opal_proc_table).
<br>
&nbsp;&nbsp;&nbsp;2. It assumed things about the implementation of the opal_hash_table.
<br>
<p>So with this in mind, we feel it would be good to remove it.
<br>
<p>Attached is a patch that removes the usage of orte_proc_table. If there 
<br>
are no objections, I will commit it COB Wednesday (likely with a couple 
<br>
minor cleanups).
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>
<p>
Index: orte/mca/oob/tcp/oob_tcp_peer.c
<br>
===================================================================
<br>
--- orte/mca/oob/tcp/oob_tcp_peer.c	(revision 17666)
<br>
+++ orte/mca/oob/tcp/oob_tcp_peer.c	(working copy)
<br>
@@ -55,7 +55,7 @@
<br>
&nbsp;#include &quot;opal/util/net.h&quot;
<br>
&nbsp;#include &quot;opal/util/error.h&quot;
<br>
&nbsp;
<br>
-#include &quot;orte/class/orte_proc_table.h&quot;
<br>
+#include &quot;opal/class/opal_hash_table.h&quot;
<br>
&nbsp;#include &quot;orte/util/name_fns.h&quot;
<br>
&nbsp;#include &quot;orte/runtime/orte_globals.h&quot;
<br>
&nbsp;#include &quot;orte/mca/errmgr/errmgr.h&quot;
<br>
@@ -216,14 +216,14 @@
<br>
&nbsp;mca_oob_tcp_peer_t * mca_oob_tcp_peer_lookup(const orte_process_name_t* name)
<br>
&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int rc;
<br>
-    mca_oob_tcp_peer_t * peer, *old;
<br>
+    mca_oob_tcp_peer_t * peer = NULL, *old;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (NULL == name) { /* can't look this one up */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return NULL;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_THREAD_LOCK(&amp;mca_oob_tcp_component.tcp_lock);
<br>
-    peer = (mca_oob_tcp_peer_t*)orte_hash_table_get_proc(
<br>
-       &amp;mca_oob_tcp_component.tcp_peers, name);
<br>
+    opal_hash_table_get_value_uint64(&amp;mca_oob_tcp_component.tcp_peers,
<br>
+                                     orte_util_hash_name(name), (void**)&amp;peer);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (NULL != peer &amp;&amp; 0 == orte_util_compare_name_fields(ORTE_NS_CMP_ALL, &amp;peer-&gt;peer_name, name)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_THREAD_UNLOCK(&amp;mca_oob_tcp_component.tcp_lock);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return peer;
<br>
@@ -247,8 +247,8 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;peer-&gt;peer_retries = 0;
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* add to lookup table */
<br>
-    if(ORTE_SUCCESS != orte_hash_table_set_proc(&amp;mca_oob_tcp_component.tcp_peers, 
<br>
-        &amp;peer-&gt;peer_name, peer)) {
<br>
+    if(OPAL_SUCCESS != opal_hash_table_set_value_uint64(&amp;mca_oob_tcp_component.tcp_peers, 
<br>
+                                                        orte_util_hash_name(&amp;peer-&gt;peer_name), peer)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA_OOB_TCP_PEER_RETURN(peer);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_THREAD_UNLOCK(&amp;mca_oob_tcp_component.tcp_lock);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return NULL;
<br>
Index: orte/mca/oob/tcp/oob_tcp_peer.h
<br>
===================================================================
<br>
--- orte/mca/oob/tcp/oob_tcp_peer.h	(revision 17666)
<br>
+++ orte/mca/oob/tcp/oob_tcp_peer.h	(working copy)
<br>
@@ -93,7 +93,7 @@
<br>
&nbsp;#define MCA_OOB_TCP_PEER_RETURN(peer)                                   \
<br>
&nbsp;{                                                                       \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_oob_tcp_peer_shutdown(peer);                                    \
<br>
-    orte_hash_table_remove_proc(&amp;mca_oob_tcp_component.tcp_peers, &amp;peer-&gt;peer_name); \
<br>
+    opal_hash_table_remove_value_uint64(&amp;mca_oob_tcp_component.tcp_peers, orte_util_hash_name(&amp;peer-&gt;peer_name)); \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_FREE_LIST_RETURN(&amp;mca_oob_tcp_component.tcp_peer_free,         \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;peer-&gt;super);                                \
<br>
&nbsp;}
<br>
Index: orte/mca/oob/tcp/oob_tcp.c
<br>
===================================================================
<br>
--- orte/mca/oob/tcp/oob_tcp.c	(revision 17666)
<br>
+++ orte/mca/oob/tcp/oob_tcp.c	(working copy)
<br>
@@ -50,7 +50,6 @@
<br>
&nbsp;#include &quot;opal/util/net.h&quot;
<br>
&nbsp;#include &quot;opal/class/opal_hash_table.h&quot;
<br>
&nbsp;
<br>
-#include &quot;orte/class/orte_proc_table.h&quot;
<br>
&nbsp;#include &quot;orte/mca/errmgr/errmgr.h&quot;
<br>
&nbsp;#include &quot;orte/mca/rml/rml.h&quot;
<br>
&nbsp;#include &quot;orte/util/name_fns.h&quot;
<br>
@@ -1125,12 +1124,12 @@
<br>
&nbsp;
<br>
&nbsp;int mca_oob_tcp_resolve(mca_oob_tcp_peer_t* peer)
<br>
&nbsp;{
<br>
-    mca_oob_tcp_addr_t* addr;
<br>
+    mca_oob_tcp_addr_t* addr = NULL;
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* if the address is already cached - simply return it */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_THREAD_LOCK(&amp;mca_oob_tcp_component.tcp_lock);
<br>
-    addr = (mca_oob_tcp_addr_t *)orte_hash_table_get_proc(&amp;mca_oob_tcp_component.tcp_peer_names,
<br>
-         &amp;peer-&gt;peer_name);
<br>
+    opal_hash_table_get_value_uint64(&amp;mca_oob_tcp_component.tcp_peer_names,
<br>
+         orte_util_hash_name(&amp;peer-&gt;peer_name), (void**)&amp;addr);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_THREAD_UNLOCK(&amp;mca_oob_tcp_component.tcp_lock);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(NULL != addr) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_oob_tcp_peer_resolved(peer, addr);
<br>
@@ -1459,23 +1458,26 @@
<br>
&nbsp;int mca_oob_tcp_set_addr(const orte_process_name_t* name, const char* uri)
<br>
&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;struct sockaddr_storage inaddr;
<br>
-    mca_oob_tcp_addr_t* addr;
<br>
-    mca_oob_tcp_peer_t* peer;
<br>
+    mca_oob_tcp_addr_t* addr = NULL;
<br>
+    mca_oob_tcp_peer_t* peer = NULL;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int rc;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if((rc = mca_oob_tcp_parse_uri(uri, (struct sockaddr*) &amp;inaddr)) != ORTE_SUCCESS) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return rc;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_THREAD_LOCK(&amp;mca_oob_tcp_component.tcp_lock);
<br>
-    addr = (mca_oob_tcp_addr_t*)orte_hash_table_get_proc(&amp;mca_oob_tcp_component.tcp_peer_names, name);
<br>
+    opal_hash_table_get_value_uint64(&amp;mca_oob_tcp_component.tcp_peer_names,
<br>
+                                     orte_util_hash_name(name), (void**)&amp;addr);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(NULL == addr) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;addr = OBJ_NEW(mca_oob_tcp_addr_t);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;addr-&gt;addr_name = *name;
<br>
-        orte_hash_table_set_proc(&amp;mca_oob_tcp_component.tcp_peer_names, &amp;addr-&gt;addr_name, addr);
<br>
+        opal_hash_table_set_value_uint64(&amp;mca_oob_tcp_component.tcp_peer_names,
<br>
+                                         orte_util_hash_name(&amp;addr-&gt;addr_name), addr);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rc = mca_oob_tcp_addr_insert(addr, (struct sockaddr*) &amp;inaddr);
<br>
-    peer = (mca_oob_tcp_peer_t *)orte_hash_table_get_proc(
<br>
-        &amp;mca_oob_tcp_component.tcp_peers, &amp;addr-&gt;addr_name);
<br>
+    opal_hash_table_get_value_uint64(&amp;mca_oob_tcp_component.tcp_peers,
<br>
+                                     orte_util_hash_name(&amp;addr-&gt;addr_name), 
<br>
+                                     (void**)&amp;peer);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(NULL != peer) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_oob_tcp_peer_resolved(peer, addr);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
Index: orte/mca/oob/tcp/oob_tcp_msg.c
<br>
===================================================================
<br>
--- orte/mca/oob/tcp/oob_tcp_msg.c	(revision 17666)
<br>
+++ orte/mca/oob/tcp/oob_tcp_msg.c	(working copy)
<br>
@@ -28,7 +28,7 @@
<br>
&nbsp;
<br>
&nbsp;#include &quot;opal/opal_socket_errno.h&quot;
<br>
&nbsp;
<br>
-#include &quot;orte/class/orte_proc_table.h&quot;
<br>
+#include &quot;opal/class/opal_hash_table.h&quot;
<br>
&nbsp;#include &quot;orte/util/name_fns.h&quot;
<br>
&nbsp;#include &quot;orte/mca/errmgr/errmgr.h&quot;
<br>
&nbsp;#include &quot;orte/mca/routed/routed.h&quot;
<br>
@@ -458,9 +458,11 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_THREAD_LOCK(&amp;mca_oob_tcp_component.tcp_lock);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (orte_util_compare_name_fields(ORTE_NS_CMP_ALL, &amp;peer-&gt;peer_name, &amp;src) != OPAL_EQUAL) {
<br>
-        orte_hash_table_remove_proc(&amp;mca_oob_tcp_component.tcp_peers, &amp;peer-&gt;peer_name);
<br>
+        opal_hash_table_remove_value_uint64(&amp;mca_oob_tcp_component.tcp_peers, 
<br>
+                                            orte_util_hash_name(&amp;peer-&gt;peer_name));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;peer-&gt;peer_name = src;
<br>
-        orte_hash_table_set_proc(&amp;mca_oob_tcp_component.tcp_peers, &amp;peer-&gt;peer_name, peer);
<br>
+        opal_hash_table_set_value_uint64(&amp;mca_oob_tcp_component.tcp_peers, 
<br>
+                                         orte_util_hash_name(&amp;peer-&gt;peer_name), peer);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_THREAD_UNLOCK(&amp;mca_oob_tcp_component.tcp_lock);
<br>
&nbsp;}
<br>
Index: orte/mca/routed/tree/routed_tree.c
<br>
===================================================================
<br>
--- orte/mca/routed/tree/routed_tree.c	(revision 17666)
<br>
+++ orte/mca/routed/tree/routed_tree.c	(working copy)
<br>
@@ -14,9 +14,9 @@
<br>
&nbsp;#include &quot;opal/util/output.h&quot;
<br>
&nbsp;#include &quot;opal/threads/condition.h&quot;
<br>
&nbsp;#include &quot;opal/runtime/opal_progress.h&quot;
<br>
+#include &quot;opal/dss/dss.h&quot;
<br>
+#include &quot;opal/class/opal_hash_table.h&quot;
<br>
&nbsp;
<br>
-#include &quot;opal/dss/dss.h&quot;
<br>
-#include &quot;orte/class/orte_proc_table.h&quot;
<br>
&nbsp;#include &quot;orte/mca/errmgr/errmgr.h&quot;
<br>
&nbsp;#include &quot;orte/mca/grpcomm/grpcomm.h&quot;
<br>
&nbsp;#include &quot;orte/mca/rml/rml.h&quot;
<br>
@@ -35,6 +35,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;orte_process_name_t *route)
<br>
&nbsp;{ 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int rc;
<br>
+    orte_process_name_t * route_copy;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (target-&gt;jobid == ORTE_JOBID_INVALID ||
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;target-&gt;vpid == ORTE_VPID_INVALID) {
<br>
@@ -70,12 +71,14 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
+    route_copy = malloc(sizeof(orte_process_name_t));
<br>
+    *route_copy = *route;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* exact match */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (target-&gt;jobid != ORTE_JOBID_WILDCARD &amp;&amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;target-&gt;vpid != ORTE_VPID_WILDCARD) {
<br>
-        if (ORTE_SUCCESS != (rc = orte_hash_table_set_proc_name(&amp;orte_routed_tree_module.peer_list,
<br>
-                                                                target, route,
<br>
-                                                                ORTE_NS_CMP_ALL))) {
<br>
+        rc = opal_hash_table_set_value_uint64(&amp;orte_routed_tree_module.peer_list,
<br>
+                                              orte_util_hash_name(target), route_copy);
<br>
+        if (ORTE_SUCCESS != rc) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ORTE_ERROR_LOG(rc);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return rc;
<br>
@@ -84,13 +87,14 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* vpid wildcard */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (target-&gt;jobid != ORTE_JOBID_WILDCARD &amp;&amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;target-&gt;vpid == ORTE_VPID_WILDCARD) {
<br>
-        if (ORTE_SUCCESS != (rc = orte_hash_table_set_proc_name(&amp;orte_routed_tree_module.vpid_wildcard_list,
<br>
-                                                                target, route,
<br>
-                                                                ORTE_NS_CMP_JOBID))) {
<br>
+        opal_hash_table_set_value_uint32(&amp;orte_routed_tree_module.vpid_wildcard_list,
<br>
+                                         target-&gt;jobid, route_copy);
<br>
+        if (ORTE_SUCCESS != rc) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ORTE_ERROR_LOG(rc);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return rc;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
+    free(route_copy);
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return ORTE_ERR_NOT_SUPPORTED;
<br>
&nbsp;}
<br>
@@ -99,32 +103,35 @@
<br>
&nbsp;orte_process_name_t
<br>
&nbsp;orte_routed_tree_get_route(orte_process_name_t *target)
<br>
&nbsp;{
<br>
-    orte_process_name_t ret;
<br>
+    orte_process_name_t *ret;
<br>
+    int rc;
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* if it is me, then the route is just direct */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (OPAL_EQUAL == opal_dss.compare(ORTE_PROC_MY_NAME, target, ORTE_NAME)) {
<br>
-        ret = *target;
<br>
+        ret = target;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;goto found;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* check exact matches */
<br>
-    ret = orte_hash_table_get_proc_name(&amp;orte_routed_tree_module.peer_list,
<br>
-                                        target, ORTE_NS_CMP_ALL);
<br>
-    if (OPAL_EQUAL != orte_util_compare_name_fields(ORTE_NS_CMP_ALL, &amp;ret, ORTE_NAME_INVALID)) {
<br>
+    rc = opal_hash_table_get_value_uint64(&amp;orte_routed_tree_module.peer_list,
<br>
+                                          orte_util_hash_name(target), (void**)&amp;ret);
<br>
+    if (ORTE_SUCCESS == rc &amp;&amp; 
<br>
+        OPAL_EQUAL != orte_util_compare_name_fields(ORTE_NS_CMP_ALL, ret, ORTE_NAME_INVALID)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* got a good result - return it */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;goto found;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* didn't find an exact match - check to see if a route for this job was defined */
<br>
-    ret = orte_hash_table_get_proc_name(&amp;orte_routed_tree_module.vpid_wildcard_list,
<br>
-                                        target, ORTE_NS_CMP_JOBID);
<br>
-    if (OPAL_EQUAL != orte_util_compare_name_fields(ORTE_NS_CMP_ALL, &amp;ret, ORTE_NAME_INVALID)) {
<br>
+    rc = opal_hash_table_get_value_uint32(&amp;orte_routed_tree_module.vpid_wildcard_list,
<br>
+                                          target-&gt;jobid, (void**)&amp;ret);
<br>
+    if (ORTE_SUCCESS == rc &amp;&amp;
<br>
+        OPAL_EQUAL != orte_util_compare_name_fields(ORTE_NS_CMP_ALL, ret, ORTE_NAME_INVALID)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* got a good result - return it */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;goto found;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* default to wildcard route */
<br>
-    ret = orte_routed_tree_module.wildcard_route;
<br>
+    ret = &amp;orte_routed_tree_module.wildcard_route;
<br>
&nbsp;
<br>
&nbsp;&nbsp;found:
<br>
&nbsp;
<br>
@@ -132,9 +139,9 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;%s routed_tree_get(%s) --&gt; %s&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ORTE_NAME_PRINT(target), 
<br>
-                         ORTE_NAME_PRINT(&amp;ret)));
<br>
+                         ORTE_NAME_PRINT(ret)));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
-    return ret;
<br>
+    return *ret;
<br>
&nbsp;}
<br>
&nbsp;
<br>
&nbsp;static int process_callback(orte_jobid_t job, opal_buffer_t *buffer)
<br>
Index: orte/mca/routed/unity/routed_unity_component.c
<br>
===================================================================
<br>
--- orte/mca/routed/unity/routed_unity_component.c	(revision 17666)
<br>
+++ orte/mca/routed/unity/routed_unity_component.c	(working copy)
<br>
@@ -16,9 +16,8 @@
<br>
&nbsp;#include &quot;opal/mca/base/base.h&quot;
<br>
&nbsp;#include &quot;opal/mca/base/mca_base_param.h&quot;
<br>
&nbsp;#include &quot;opal/threads/condition.h&quot;
<br>
+#include &quot;opal/dss/dss.h&quot;
<br>
&nbsp;
<br>
-#include &quot;opal/dss/dss.h&quot;
<br>
-#include &quot;orte/class/orte_proc_table.h&quot;
<br>
&nbsp;#include &quot;orte/mca/errmgr/errmgr.h&quot;
<br>
&nbsp;#include &quot;orte/mca/grpcomm/grpcomm.h&quot;
<br>
&nbsp;#include &quot;orte/mca/odls/odls_types.h&quot;
<br>
@@ -160,8 +159,8 @@
<br>
&nbsp;orte_routed_unity_update_route(orte_process_name_t *target,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;orte_process_name_t *route)
<br>
&nbsp;{
<br>
-    orte_ns_cmp_bitmask_t mask;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int rc;
<br>
+    orte_process_name_t * route_copy;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (ORTE_JOB_FAMILY(target-&gt;jobid) != ORTE_JOB_FAMILY(ORTE_PROC_MY_NAME-&gt;jobid)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* this message came from a different job family, so we will update
<br>
@@ -180,17 +179,15 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ORTE_NAME_PRINT(target), 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ORTE_NAME_PRINT(route)));
<br>
&nbsp;
<br>
-        /* if we are routing everything for this target through one place, set
<br>
-         * the mask to only compare jobids
<br>
+        route_copy = malloc(sizeof(orte_process_name_t));
<br>
+        *route_copy = *route;
<br>
+        /* if we are routing everything for this target through one place, 
<br>
+         * then the target vpid is ORTE_NS_VPID_WILDCARD. So no need for
<br>
+         * special cases, just add it 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
<br>
-        if (ORTE_VPID_WILDCARD == target-&gt;vpid) {
<br>
-            mask = ORTE_NS_CMP_JOBID;
<br>
-        } else {
<br>
-            mask = ORTE_NS_CMP_ALL;
<br>
-        }
<br>
-        if (ORTE_SUCCESS != (rc = orte_hash_table_set_proc_name(&amp;peer_list,
<br>
-                                                                target, route,
<br>
-                                                                mask))) {
<br>
+        rc = opal_hash_table_set_value_uint64(&amp;peer_list, orte_util_hash_name(target), 
<br>
+                                              route_copy);
<br>
+        if (ORTE_SUCCESS != rc) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ORTE_ERROR_LOG(rc);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return rc;
<br>
@@ -211,32 +208,39 @@
<br>
&nbsp;orte_process_name_t
<br>
&nbsp;orte_routed_unity_get_route(orte_process_name_t *target)
<br>
&nbsp;{
<br>
-    orte_process_name_t ret;
<br>
+    orte_process_name_t *ret, lookup;
<br>
+    int rc;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (ORTE_JOB_FAMILY(target-&gt;jobid) != ORTE_JOB_FAMILY(ORTE_PROC_MY_NAME-&gt;jobid)) {
<br>
-        ret = orte_hash_table_get_proc_name(&amp;peer_list, target, ORTE_NS_CMP_ALL);
<br>
-        if (OPAL_EQUAL != orte_util_compare_name_fields(ORTE_NS_CMP_ALL, &amp;ret, ORTE_NAME_INVALID)) {
<br>
+        rc = opal_hash_table_get_value_uint64(&amp;peer_list, orte_util_hash_name(target),
<br>
+                                              (void**)&amp;ret);
<br>
+        if (ORTE_SUCCESS != rc &amp;&amp;
<br>
+            OPAL_EQUAL != orte_util_compare_name_fields(ORTE_NS_CMP_ALL, ret, ORTE_NAME_INVALID)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* got a good result - return it */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;goto found;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* check to see if we specified the route to be for all vpids in the job */
<br>
-        ret = orte_hash_table_get_proc_name(&amp;peer_list, target, ORTE_NS_CMP_JOBID);
<br>
-        if (OPAL_EQUAL != orte_util_compare_name_fields(ORTE_NS_CMP_ALL, &amp;ret, ORTE_NAME_INVALID)) {
<br>
+        lookup = *target;
<br>
+        lookup.vpid = ORTE_VPID_WILDCARD;
<br>
+        rc = opal_hash_table_get_value_uint64(&amp;peer_list, orte_util_hash_name(&amp;lookup),
<br>
+                                              (void**)&amp;ret);
<br>
+        if (ORTE_SUCCESS == rc &amp;&amp;
<br>
+            OPAL_EQUAL != orte_util_compare_name_fields(ORTE_NS_CMP_ALL, ret, ORTE_NAME_INVALID)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* got a good result - return it */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;goto found;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* if it is our own job family, or we didn't find it on the list, just go direct */
<br>
-    ret = *target;
<br>
+    ret = target;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;found:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_OUTPUT_VERBOSE((5, orte_routed_base_output,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;%s routed_unity_get(%s) --&gt; %s&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ORTE_NAME_PRINT(target), 
<br>
-                         ORTE_NAME_PRINT(&amp;ret)));
<br>
-    return ret;
<br>
+                         ORTE_NAME_PRINT(ret)));
<br>
+    return *ret;
<br>
&nbsp;}
<br>
&nbsp;
<br>
&nbsp;static int process_callback(orte_jobid_t job, opal_buffer_t *buffer)
<br>
Index: orte/mca/grpcomm/basic/grpcomm_basic_module.c
<br>
===================================================================
<br>
--- orte/mca/grpcomm/basic/grpcomm_basic_module.c	(revision 17666)
<br>
+++ orte/mca/grpcomm/basic/grpcomm_basic_module.c	(working copy)
<br>
@@ -30,7 +30,7 @@
<br>
&nbsp;#include &quot;opal/util/output.h&quot;
<br>
&nbsp;#include &quot;opal/util/bit_ops.h&quot;
<br>
&nbsp;
<br>
-#include &quot;orte/class/orte_proc_table.h&quot;
<br>
+#include &quot;opal/class/opal_hash_table.h&quot;
<br>
&nbsp;#include &quot;orte/util/proc_info.h&quot;
<br>
&nbsp;#include &quot;opal/dss/dss.h&quot;
<br>
&nbsp;#include &quot;orte/mca/errmgr/errmgr.h&quot;
<br>
@@ -765,7 +765,7 @@
<br>
&nbsp;&nbsp;* information must be kept for later use, because if accept/connect
<br>
&nbsp;&nbsp;* causes the proc to be added to the ompi_proc_all() list, it could
<br>
&nbsp;&nbsp;* cause a connection storm.  Therefore, we use an
<br>
- * orte_proc_table backing store to contain all modex information.
<br>
+ * opal_hast_table_t backing store to contain all modex information.
<br>
&nbsp;&nbsp;*
<br>
&nbsp;&nbsp;* While we could add the now discovered proc into the ompi_proc_all()
<br>
&nbsp;&nbsp;* list, this has some problems, in that we don't have the
<br>
@@ -937,11 +937,11 @@
<br>
&nbsp;static modex_proc_data_t*
<br>
&nbsp;modex_lookup_orte_proc(const orte_process_name_t *orte_proc)
<br>
&nbsp;{
<br>
-    modex_proc_data_t *proc_data;
<br>
+    modex_proc_data_t *proc_data = NULL;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_THREAD_LOCK(&amp;orte_grpcomm_basic.mutex);
<br>
-    proc_data = (modex_proc_data_t*)
<br>
-        orte_hash_table_get_proc(&amp;orte_grpcomm_basic.modex_data, orte_proc);
<br>
+    opal_hash_table_get_value_uint64(&amp;orte_grpcomm_basic.modex_data, 
<br>
+                    orte_util_hash_name(orte_proc), (void**)&amp;proc_data);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (NULL == proc_data) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* The proc clearly exists, so create a modex structure
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for it */
<br>
@@ -951,7 +951,8 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_THREAD_UNLOCK(&amp;orte_grpcomm_basic.mutex);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return NULL;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
-        orte_hash_table_set_proc(&amp;orte_grpcomm_basic.modex_data, orte_proc, proc_data);
<br>
+        opal_hash_table_set_value_uint64(&amp;orte_grpcomm_basic.modex_data, 
<br>
+                    orte_util_hash_name(orte_proc), proc_data);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_THREAD_UNLOCK(&amp;orte_grpcomm_basic.mutex);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
Index: orte/mca/iof/svc/iof_svc_sub.c
<br>
===================================================================
<br>
--- orte/mca/iof/svc/iof_svc_sub.c	(revision 17666)
<br>
+++ orte/mca/iof/svc/iof_svc_sub.c	(working copy)
<br>
@@ -22,7 +22,7 @@
<br>
&nbsp;
<br>
&nbsp;#include &quot;opal/util/output.h&quot;
<br>
&nbsp;
<br>
-#include &quot;orte/class/orte_proc_table.h&quot;
<br>
+#include &quot;opal/class/opal_hash_table.h&quot;
<br>
&nbsp;#include &quot;orte/mca/rml/rml.h&quot;
<br>
&nbsp;#include &quot;orte/mca/errmgr/errmgr.h&quot;
<br>
&nbsp;#include &quot;orte/runtime/orte_globals.h&quot;
<br>
@@ -269,13 +269,13 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;calculate seq_min anymore.  Otherwise, put its
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;updated value in the table. */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (do_close) {
<br>
-                    orte_hash_table_remove_proc(&amp;fwd-&gt;fwd_seq_hash,
<br>
-                                                &amp;hdr-&gt;msg_origin);
<br>
+                    opal_hash_table_remove_value_uint64(&amp;fwd-&gt;fwd_seq_hash,
<br>
+                                        orte_util_hash_name(&amp;hdr-&gt;msg_origin));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;value_set = false;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;value.uval = hdr-&gt;msg_seq + hdr-&gt;msg_len;
<br>
-                    orte_hash_table_set_proc(&amp;fwd-&gt;fwd_seq_hash,
<br>
-                                             &amp;hdr-&gt;msg_origin, &amp;value.vval);
<br>
+                    opal_hash_table_set_value_uint64(&amp;fwd-&gt;fwd_seq_hash,
<br>
+                                        orte_util_hash_name(&amp;hdr-&gt;msg_origin), &amp;value.vval);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Otherwise, if the publication origin and publication
<br>
@@ -289,8 +289,8 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bytes ACK'ed across all the forwards on this
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;subscription. */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else {
<br>
-                value.vval = orte_hash_table_get_proc(&amp;fwd-&gt;fwd_seq_hash,
<br>
-                                                      &amp;hdr-&gt;msg_origin);
<br>
+                opal_hash_table_get_value_uint64(&amp;fwd-&gt;fwd_seq_hash,
<br>
+                        orte_util_hash_name(&amp;hdr-&gt;msg_origin), (void**)&amp;value.vval);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* If we got a valid value, update the seq_min calculation */
<br>
Index: orte/util/name_fns.c
<br>
===================================================================
<br>
--- orte/util/name_fns.c	(revision 17666)
<br>
+++ orte/util/name_fns.c	(working copy)
<br>
@@ -529,3 +529,14 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return OPAL_EQUAL;
<br>
&nbsp;}
<br>
+
<br>
+
<br>
+uint64_t  orte_util_hash_name(const orte_process_name_t * name) {
<br>
+    uint64_t hash;
<br>
+    
<br>
+    hash = name-&gt;jobid;
<br>
+    hash &lt;&lt;= sizeof(name-&gt;jobid) * 8;
<br>
+    hash += name-&gt;vpid;
<br>
+    
<br>
+    return hash;
<br>
+}
<br>
Index: orte/util/name_fns.h
<br>
===================================================================
<br>
--- orte/util/name_fns.h	(revision 17666)
<br>
+++ orte/util/name_fns.h	(working copy)
<br>
@@ -86,7 +86,8 @@
<br>
&nbsp;ORTE_DECLSPEC int orte_util_compare_name_fields(orte_ns_cmp_bitmask_t fields,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;const orte_process_name_t* name1,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;const orte_process_name_t* name2);
<br>
+/** This funtion returns a guaranteed unique hash value for the passed process name */
<br>
+ORTE_DECLSPEC uint64_t orte_util_hash_name(const orte_process_name_t * name);
<br>
&nbsp;
<br>
-
<br>
&nbsp;END_C_DECLS
<br>
&nbsp;#endif
<br>
Index: ompi/mca/btl/portals/btl_portals.h
<br>
===================================================================
<br>
--- ompi/mca/btl/portals/btl_portals.h	(revision 17666)
<br>
+++ ompi/mca/btl/portals/btl_portals.h	(working copy)
<br>
@@ -28,7 +28,6 @@
<br>
&nbsp;#include &quot;ompi/mca/btl/base/base.h&quot;
<br>
&nbsp;#include &quot;ompi/class/ompi_bitmap.h&quot;
<br>
&nbsp;#include &quot;ompi/class/ompi_free_list.h&quot;
<br>
-#include &quot;orte/class/orte_proc_table.h&quot;
<br>
&nbsp;
<br>
&nbsp;#include &quot;btl_portals_endpoint.h&quot;
<br>
&nbsp;#include &quot;btl_portals_frag.h&quot;
<br>
Index: ompi/mca/btl/tcp/btl_tcp_proc.c
<br>
===================================================================
<br>
--- ompi/mca/btl/tcp/btl_tcp_proc.c	(revision 17666)
<br>
+++ ompi/mca/btl/tcp/btl_tcp_proc.c	(working copy)
<br>
@@ -25,7 +25,7 @@
<br>
&nbsp;#include &lt;netinet/in.h&gt;
<br>
&nbsp;#endif
<br>
&nbsp;
<br>
-#include &quot;orte/class/orte_proc_table.h&quot;
<br>
+#include &quot;opal/class/opal_hash_table.h&quot;
<br>
&nbsp;#include &quot;ompi/mca/btl/base/btl_base_error.h&quot;
<br>
&nbsp;#include &quot;ompi/runtime/ompi_module_exchange.h&quot;
<br>
&nbsp;#include &quot;ompi/datatype/dt_arch.h&quot;
<br>
@@ -74,7 +74,8 @@
<br>
&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* remove from list of all proc instances */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_THREAD_LOCK(&amp;mca_btl_tcp_component.tcp_lock);
<br>
-    orte_hash_table_remove_proc(&amp;mca_btl_tcp_component.tcp_procs, &amp;proc-&gt;proc_name);
<br>
+    opal_hash_table_remove_value_uint64(&amp;mca_btl_tcp_component.tcp_procs, 
<br>
+                                        orte_util_hash_name(&amp;proc-&gt;proc_name));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_THREAD_UNLOCK(&amp;mca_btl_tcp_component.tcp_lock);
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* release resources */
<br>
@@ -97,11 +98,12 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int rc;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size_t size;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_tcp_proc_t* btl_proc;
<br>
+    uint64_t hash = orte_util_hash_name(&amp;ompi_proc-&gt;proc_name);
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_THREAD_LOCK(&amp;mca_btl_tcp_component.tcp_lock);
<br>
-    btl_proc = (mca_btl_tcp_proc_t*)orte_hash_table_get_proc(
<br>
-         &amp;mca_btl_tcp_component.tcp_procs, &amp;ompi_proc-&gt;proc_name);
<br>
-    if(NULL != btl_proc) {
<br>
+    rc = opal_hash_table_get_value_uint64(&amp;mca_btl_tcp_component.tcp_procs, 
<br>
+                                          hash, (void**)&amp;btl_proc);
<br>
+    if(OMPI_SUCCESS == rc) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_THREAD_UNLOCK(&amp;mca_btl_tcp_component.tcp_lock);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return btl_proc;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
@@ -111,11 +113,10 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return NULL;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;btl_proc-&gt;proc_ompi = ompi_proc;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;btl_proc-&gt;proc_name = ompi_proc-&gt;proc_name;
<br>
-
<br>
+    
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* add to hash table of all proc instance */
<br>
-    orte_hash_table_set_proc( &amp;mca_btl_tcp_component.tcp_procs,
<br>
-                              &amp;btl_proc-&gt;proc_name,
<br>
-                              btl_proc );
<br>
+    opal_hash_table_set_value_uint64(&amp;mca_btl_tcp_component.tcp_procs,
<br>
+                                     hash, btl_proc);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_THREAD_UNLOCK(&amp;mca_btl_tcp_component.tcp_lock);
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* lookup tcp parameters exported by this proc */
<br>
@@ -554,10 +555,10 @@
<br>
&nbsp;&nbsp;*/
<br>
&nbsp;mca_btl_tcp_proc_t* mca_btl_tcp_proc_lookup(const orte_process_name_t *name)
<br>
&nbsp;{
<br>
-    mca_btl_tcp_proc_t* proc;
<br>
+    mca_btl_tcp_proc_t* proc = NULL;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_THREAD_LOCK(&amp;mca_btl_tcp_component.tcp_lock);
<br>
-    proc = (mca_btl_tcp_proc_t*)orte_hash_table_get_proc(
<br>
-         &amp;mca_btl_tcp_component.tcp_procs, name);
<br>
+    opal_hash_table_get_value_uint64(&amp;mca_btl_tcp_component.tcp_procs, 
<br>
+                                     orte_util_hash_name(name), (void**)&amp;proc);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_THREAD_UNLOCK(&amp;mca_btl_tcp_component.tcp_lock);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return proc;
<br>
&nbsp;}
<br>
Index: ompi/mca/btl/sctp/btl_sctp_proc.c
<br>
===================================================================
<br>
--- ompi/mca/btl/sctp/btl_sctp_proc.c	(revision 17666)
<br>
+++ ompi/mca/btl/sctp/btl_sctp_proc.c	(working copy)
<br>
@@ -25,7 +25,7 @@
<br>
&nbsp;#include &lt;netinet/in.h&gt;
<br>
&nbsp;#endif
<br>
&nbsp;
<br>
-#include &quot;orte/class/orte_proc_table.h&quot;
<br>
+#include &quot;opal/class/opal_hash_table.h&quot;
<br>
&nbsp;#include &quot;ompi/mca/btl/base/btl_base_error.h&quot;
<br>
&nbsp;#include &quot;ompi/runtime/ompi_module_exchange.h&quot;
<br>
&nbsp;#include &quot;ompi/datatype/dt_arch.h&quot;
<br>
@@ -63,7 +63,8 @@
<br>
&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* remove from list of all proc instances */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_THREAD_LOCK(&amp;mca_btl_sctp_component.sctp_lock);
<br>
-    orte_hash_table_remove_proc(&amp;mca_btl_sctp_component.sctp_procs, &amp;proc-&gt;proc_name);
<br>
+    opal_hash_table_remove_value_uint64(&amp;mca_btl_sctp_component.sctp_procs, 
<br>
+                                        orte_util_hash_name(&amp;proc-&gt;proc_name));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_THREAD_UNLOCK(&amp;mca_btl_sctp_component.sctp_lock);
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* release resources */
<br>
@@ -109,11 +110,12 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int rc;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size_t size;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_sctp_proc_t* btl_proc;
<br>
+    uint64_t hash = orte_util_hash_name(&amp;ompi_proc-&gt;proc_name);
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_THREAD_LOCK(&amp;mca_btl_sctp_component.sctp_lock);
<br>
-    btl_proc = (mca_btl_sctp_proc_t*)orte_hash_table_get_proc(
<br>
-            &amp;mca_btl_sctp_component.sctp_procs, &amp;ompi_proc-&gt;proc_name);
<br>
-    if(NULL != btl_proc) {
<br>
+    rc = opal_hash_table_get_value_uint64(&amp;mca_btl_sctp_component.sctp_procs, 
<br>
+                                          hash, (void**)&amp;btl_proc);
<br>
+    if(OMPI_SUCCESS == rc) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_THREAD_UNLOCK(&amp;mca_btl_sctp_component.sctp_lock);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return btl_proc;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
@@ -126,10 +128,8 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;btl_proc-&gt;proc_name = ompi_proc-&gt;proc_name;
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* add to hash table of all proc instance */
<br>
-    orte_hash_table_set_proc(
<br>
-            &amp;mca_btl_sctp_component.sctp_procs,
<br>
-            &amp;btl_proc-&gt;proc_name,
<br>
-            btl_proc);
<br>
+    opal_hash_table_set_value_uint64(&amp;mca_btl_sctp_component.sctp_procs,
<br>
+                                     hash, btl_proc);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_THREAD_UNLOCK(&amp;mca_btl_sctp_component.sctp_lock);
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* lookup sctp parameters exported by this proc */
<br>
@@ -325,10 +325,10 @@
<br>
&nbsp;&nbsp;*/
<br>
&nbsp;mca_btl_sctp_proc_t* mca_btl_sctp_proc_lookup(const orte_process_name_t *name)
<br>
&nbsp;{
<br>
-    mca_btl_sctp_proc_t* proc;
<br>
+    mca_btl_sctp_proc_t* proc = NULL;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_THREAD_LOCK(&amp;mca_btl_sctp_component.sctp_lock);
<br>
-    proc = (mca_btl_sctp_proc_t*)orte_hash_table_get_proc(
<br>
-            &amp;mca_btl_sctp_component.sctp_procs, name);
<br>
+    opal_hash_table_get_value_uint64(&amp;mca_btl_sctp_component.sctp_procs,
<br>
+                                     orte_util_hash_name(name), (void**)&amp;proc);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_THREAD_UNLOCK(&amp;mca_btl_sctp_component.sctp_lock);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return proc;
<br>
&nbsp;}
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3331.php">Rainer Keller: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r17681"</a>
<li><strong>Previous message:</strong> <a href="3329.php">Edgar Gabriel: "Re: [OMPI devel] [RFC] Default hostfile MCA param"</a>
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
