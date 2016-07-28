<?
$subject_val = "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 15 13:49:48 2012" -->
<!-- isoreceived="20120315174948" -->
<!-- sent="Thu, 15 Mar 2012 11:49:39 -0600" -->
<!-- isosent="20120315174939" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE" -->
<!-- id="8D51868D-B374-440C-B0DD-03DBE39142DA_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="alpine.LRH.2.02.1203151340410.31702_at_hogwarts.egr.duke.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-15 13:49:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18789.php">Reuti: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Previous message:</strong> <a href="18787.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>In reply to:</strong> <a href="18787.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18792.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Reply:</strong> <a href="18792.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here's the patch: I've set it up to go into 1.5, but not 1.4 as that series is being closed out. Please let me know if this solves the problem for you.
<br>
<p><p>Modified: orte/mca/ras/gridengine/ras_gridengine_module.c
<br>
==============================================================================
<br>
--- orte/mca/ras/gridengine/ras_gridengine_module.c	(original)
<br>
+++ orte/mca/ras/gridengine/ras_gridengine_module.c	2012-03-15 13:45:50 EDT (Thu, 15 Mar 2012)
<br>
@@ -64,6 +64,8 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int rc;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;FILE *fp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;orte_node_t *node;
<br>
+    opal_list_item_t *item;
<br>
+    bool found;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;/* show the Grid Engine's JOB_ID */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (mca_ras_gridengine_component.show_jobid ||
<br>
@@ -92,22 +94,36 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;queue = strtok_r(NULL, &quot; \n&quot;, &amp;tok);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;arch = strtok_r(NULL, &quot; \n&quot;, &amp;tok);
<br>
<p>-        /* create a new node entry */
<br>
-        node = OBJ_NEW(orte_node_t);
<br>
-        if (NULL == node) {
<br>
-            fclose(fp);
<br>
-            return ORTE_ERR_OUT_OF_RESOURCE;
<br>
+        /* see if we already have this node */
<br>
+        found = false;
<br>
+        for (item = opal_list_get_first(nodelist);
<br>
+             item != opal_list_get_end(nodelist);
<br>
+             item = opal_list_get_next(item)) {
<br>
+            node = (orte_node_t*)item;
<br>
+            if (0 == strcmp(ptr, node-&gt;name)) {
<br>
+                /* just add the slots */
<br>
+                node-&gt;slots += (int)strtol(num, (char **)NULL, 10);
<br>
+                found = true;
<br>
+                break;
<br>
+            }
<br>
+        }
<br>
+        if (!found) {
<br>
+            /* create a new node entry */
<br>
+            node = OBJ_NEW(orte_node_t);
<br>
+            if (NULL == node) {
<br>
+                fclose(fp);
<br>
+                return ORTE_ERR_OUT_OF_RESOURCE;
<br>
+            }
<br>
+            node-&gt;name = strdup(ptr);
<br>
+            node-&gt;state = ORTE_NODE_STATE_UP;
<br>
+            node-&gt;slots_inuse = 0;
<br>
+            node-&gt;slots_max = 0;
<br>
+            node-&gt;slots = (int)strtol(num, (char **)NULL, 10);
<br>
+            opal_output(mca_ras_gridengine_component.verbose,
<br>
+                        &quot;ras:gridengine: %s: PE_HOSTFILE shows slots=%d&quot;,
<br>
+                        node-&gt;name, node-&gt;slots);
<br>
+            opal_list_append(nodelist, &amp;node-&gt;super);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
-        node-&gt;name = strdup(ptr);
<br>
-        node-&gt;state = ORTE_NODE_STATE_UP;
<br>
-        node-&gt;slots_inuse = 0;
<br>
-        node-&gt;slots_max = 0;
<br>
-        node-&gt;slots = (int)strtol(num, (char **)NULL, 10);
<br>
-        opal_output(mca_ras_gridengine_component.verbose,
<br>
-            &quot;ras:gridengine: %s: PE_HOSTFILE shows slots=%d&quot;,
<br>
-            node-&gt;name, node-&gt;slots);
<br>
-        opal_list_append(nodelist, &amp;node-&gt;super);
<br>
-
<br>
&nbsp;&nbsp;&nbsp;&nbsp;} /* finished reading the $PE_HOSTFILE */
<br>
<p>cleanup:
<br>
<p>On Mar 15, 2012, at 11:41 AM, Joshua Baker-LePain wrote:
<br>
<p><span class="quotelev1">&gt; On Thu, 15 Mar 2012 at 11:38am, Ralph Castain wrote
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; No, I'll fix the parser as we should be able to run anyway. Just can't guarantee which queue the job will end up in, but at least it -will- run.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Makes sense to me.  Thanks!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Joshua Baker-LePain
</span><br>
<span class="quotelev1">&gt; QB3 Shared Cluster Sysadmin
</span><br>
<span class="quotelev1">&gt; UCSF
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18789.php">Reuti: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Previous message:</strong> <a href="18787.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>In reply to:</strong> <a href="18787.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18792.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
<li><strong>Reply:</strong> <a href="18792.php">Joshua Baker-LePain: "Re: [OMPI users] Segfaults w/ both 1.4 and 1.5 on CentOS 6.2/SGE"</a>
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
