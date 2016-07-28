<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Apr  2 12:34:34 2007" -->
<!-- isoreceived="20070402163434" -->
<!-- sent="Mon, 02 Apr 2007 18:34:26 +0200" -->
<!-- isosent="20070402163426" -->
<!-- name="Jeremy Buisson" -->
<!-- email="jbuisson_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI error when using MPI_Comm_spawn" -->
<!-- id="46113092.1020107_at_irisa.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C236874F.24C6%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Jeremy Buisson (<em>jbuisson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-02 12:34:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2978.php">Ralph Castain: "Re: [OMPI users] Open MPI error when using MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="2976.php">Prakash Velayutham: "Re: [OMPI users] Open MPI error when using MPI_Comm_spawn"</a>
<li><strong>In reply to:</strong> <a href="2975.php">Ralph Castain: "Re: [OMPI users] Open MPI error when using MPI_Comm_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2978.php">Ralph Castain: "Re: [OMPI users] Open MPI error when using MPI_Comm_spawn"</a>
<li><strong>Reply:</strong> <a href="2978.php">Ralph Castain: "Re: [OMPI users] Open MPI error when using MPI_Comm_spawn"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph Castain a &#233;crit :
<br>
<span class="quotelev1">&gt; The runtime underneath Open MPI (called OpenRTE) will not allow you to spawn
</span><br>
<span class="quotelev1">&gt; processes on nodes outside of your allocation. This is for several reasons,
</span><br>
<span class="quotelev1">&gt; but primarily because (a) we only know about the nodes that were allocated,
</span><br>
<span class="quotelev1">&gt; so we have no idea how to spawn a process anywhere else, and (b) most
</span><br>
<span class="quotelev1">&gt; resource managers wouldn't let us do it anyway.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I gather you have some node that you know about and have hard-coded into
</span><br>
<span class="quotelev1">&gt; your application? How do you know the name of the node if it isn't in your
</span><br>
<span class="quotelev1">&gt; allocation??
</span><br>
<p>Because I can give that names to OpenMPI (or OpenRTE, or whatever). I
<br>
also would like to do the same, and I don't want OpenMPI to restrict to
<br>
what it thinks to be the allocation, while I'm sure to know better than
<br>
it what I am doing.
<br>
The concept of nodes being in allocations fixed at launch-time is really
<br>
rigid; and it prevents the application (or whatever else) to modify the
<br>
allocation at runtime, which may be quite nice.
<br>
<p>Here is an ugly patch I've quickly done for my own use, which changes
<br>
the round-robin rmaps such that is first allocates the hosts to the
<br>
rmgr, as a copy&amp;paste of some code in the dash_host ras component. It's
<br>
far from being bugfree, but it can be a startpoint to hack.
<br>
<p>Jeremy
<br>
<p><span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 4/2/07 10:05 AM, &quot;Prakash Velayutham&quot; &lt;Prakash.Velayutham_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have built Open MPI (1.2) with run-time environment enabled for Torque
</span><br>
<span class="quotelev2">&gt;&gt; (2.1.6) resource manager. Initially I am requesting 4 nodes (1 CPU each)
</span><br>
<span class="quotelev2">&gt;&gt; from Torque. The from inside of my MPI code I am trying to spawn more
</span><br>
<span class="quotelev2">&gt;&gt; processes to nodes outside of Torque-assigned nodes using
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Comm_spawn, but this is failing with an error below:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [wins04:13564] *** An error occurred in MPI_Comm_spawn
</span><br>
<span class="quotelev2">&gt;&gt; [wins04:13564] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt;&gt; [wins04:13564] *** MPI_ERR_ARG: invalid argument of some other kind
</span><br>
<span class="quotelev2">&gt;&gt; [wins04:13564] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that job rank 1 with PID 15070 on node wins03 exited on
</span><br>
<span class="quotelev2">&gt;&gt; signal 15 (Terminated).
</span><br>
<span class="quotelev2">&gt;&gt; 2 additional processes aborted (not shown)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #################################
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         MPI_Info info;
</span><br>
<span class="quotelev2">&gt;&gt;         MPI_Comm comm, *intercomm;
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt;         char *key, *value;
</span><br>
<span class="quotelev2">&gt;&gt;         key = &quot;host&quot;;
</span><br>
<span class="quotelev2">&gt;&gt;         value = &quot;wins08&quot;;
</span><br>
<span class="quotelev2">&gt;&gt;         rc1 = MPI_Info_create(&amp;info);
</span><br>
<span class="quotelev2">&gt;&gt;         rc1 = MPI_Info_set(info, key, value);
</span><br>
<span class="quotelev2">&gt;&gt;         rc1 = MPI_Comm_spawn(slave,MPI_ARGV_NULL, 1, info, 0,
</span><br>
<span class="quotelev2">&gt;&gt; MPI_COMM_WORLD, intercomm, arr);
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ###################################################
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Would this work as it is or is something wrong with my assumption? Is
</span><br>
<span class="quotelev2">&gt;&gt; OpenRTE stopping me from spawning processes outside of the initially
</span><br>
<span class="quotelev2">&gt;&gt; allocated nodes through Torque?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Prakash
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p>
<p>
diff -ru openmpi-1.2/ompi/mca/btl/tcp/btl_tcp.c openmpi-1.2-custom/ompi/mca/btl/tcp/btl_tcp.c
<br>
--- openmpi-1.2/ompi/mca/btl/tcp/btl_tcp.c	2006-11-09 19:53:44.000000000 +0100
<br>
+++ openmpi-1.2-custom/ompi/mca/btl/tcp/btl_tcp.c	2007-03-28 14:02:10.000000000 +0200
<br>
@@ -117,8 +117,8 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tcp_endpoint-&gt;endpoint_btl = tcp_btl;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rc = mca_btl_tcp_proc_insert(tcp_proc, tcp_endpoint);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(rc != OMPI_SUCCESS) {
<br>
-            OBJ_RELEASE(tcp_endpoint);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_THREAD_UNLOCK(&amp;tcp_proc-&gt;proc_lock);
<br>
+            OBJ_RELEASE(tcp_endpoint);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;continue;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;
<br>
diff -ru openmpi-1.2/opal/threads/mutex.c openmpi-1.2-custom/opal/threads/mutex.c
<br>
--- openmpi-1.2/opal/threads/mutex.c	2006-11-09 19:53:32.000000000 +0100
<br>
+++ openmpi-1.2-custom/opal/threads/mutex.c	2007-03-28 15:59:25.000000000 +0200
<br>
@@ -54,6 +54,8 @@
<br>
&nbsp;#elif OMPI_ENABLE_DEBUG &amp;&amp; OMPI_HAVE_PTHREAD_MUTEX_ERRORCHECK
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* set type to ERRORCHECK so that we catch recursive locks */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pthread_mutexattr_settype(&amp;attr, PTHREAD_MUTEX_ERRORCHECK);
<br>
+#else
<br>
+    pthread_mutexattr_settype(&amp;attr, PTHREAD_MUTEX_RECURSIVE);
<br>
&nbsp;#endif
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pthread_mutex_init(&amp;m-&gt;m_lock_pthread, &amp;attr);
<br>
diff -ru openmpi-1.2/opal/threads/mutex_unix.h openmpi-1.2-custom/opal/threads/mutex_unix.h
<br>
--- openmpi-1.2/opal/threads/mutex_unix.h	2006-11-09 19:53:32.000000000 +0100
<br>
+++ openmpi-1.2-custom/opal/threads/mutex_unix.h	2007-03-28 15:36:13.000000000 +0200
<br>
@@ -76,7 +76,7 @@
<br>
&nbsp;
<br>
&nbsp;static inline int opal_mutex_trylock(opal_mutex_t *m)
<br>
&nbsp;{
<br>
-#if OMPI_ENABLE_DEBUG
<br>
+#if 1 // OMPI_ENABLE_DEBUG
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int ret = pthread_mutex_trylock(&amp;m-&gt;m_lock_pthread);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (ret == EDEADLK) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;errno = ret;
<br>
@@ -91,7 +91,7 @@
<br>
&nbsp;
<br>
&nbsp;static inline void opal_mutex_lock(opal_mutex_t *m)
<br>
&nbsp;{
<br>
-#if OMPI_ENABLE_DEBUG
<br>
+#if 1 // OMPI_ENABLE_DEBUG
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int ret = pthread_mutex_lock(&amp;m-&gt;m_lock_pthread);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (ret == EDEADLK) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;errno = ret;
<br>
diff -ru openmpi-1.2/opal/util/stacktrace.c openmpi-1.2-custom/opal/util/stacktrace.c
<br>
--- openmpi-1.2/opal/util/stacktrace.c	2007-01-24 19:16:07.000000000 +0100
<br>
+++ openmpi-1.2-custom/opal/util/stacktrace.c	2007-03-28 14:02:10.000000000 +0200
<br>
@@ -344,6 +344,8 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;stacktrace_hostname, getpid());
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write(fileno(stderr), print_buffer, ret);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fflush(stderr);
<br>
+    for(;;)
<br>
+      pause();
<br>
&nbsp;}
<br>
&nbsp;
<br>
&nbsp;#endif /* OMPI_WANT_PRETTY_PRINT_STACKTRACE &amp;&amp; ! defined(__WINDOWS__) */
<br>
diff -ru openmpi-1.2/orte/mca/rmaps/round_robin/rmaps_rr.c openmpi-1.2-custom/orte/mca/rmaps/round_robin/rmaps_rr.c
<br>
--- openmpi-1.2/orte/mca/rmaps/round_robin/rmaps_rr.c	2007-01-24 19:16:10.000000000 +0100
<br>
+++ openmpi-1.2-custom/orte/mca/rmaps/round_robin/rmaps_rr.c	2007-03-28 15:11:57.000000000 +0200
<br>
@@ -265,6 +265,134 @@
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return ORTE_SUCCESS;
<br>
&nbsp;}
<br>
+
<br>
+static bool orte_rmaps_rr_is_host_allocated(char* name)
<br>
+{
<br>
+  orte_ras_node_t* node;
<br>
+  node = orte_ras_base_node_lookup(0, name);
<br>
+  OBJ_RELEASE(node);
<br>
+  return node != NULL;
<br>
+}
<br>
+
<br>
+static int orte_rmaps_rr_host_allocate(orte_jobid_t jobid)
<br>
+{
<br>
+    opal_list_t nodes;
<br>
+    opal_list_item_t* item;
<br>
+    orte_app_context_t **context;
<br>
+    size_t i, j, k;
<br>
+    orte_std_cntr_t num_context = 0;
<br>
+    int rc;
<br>
+    char **mapped_nodes = NULL, **mini_map;
<br>
+    orte_ras_node_t *node;
<br>
+
<br>
+    /* get the context */
<br>
+
<br>
+    rc = orte_rmgr.get_app_context(jobid, &amp;context, &amp;num_context);
<br>
+    if (ORTE_SUCCESS != rc) {
<br>
+        ORTE_ERROR_LOG(rc);
<br>
+        return rc;
<br>
+    }
<br>
+    OBJ_CONSTRUCT(&amp;nodes, opal_list_t);
<br>
+
<br>
+    /* If there's nothing to do, skip to the end */
<br>
+
<br>
+    if (0 == num_context) {
<br>
+        rc = ORTE_SUCCESS;
<br>
+        goto cleanup;
<br>
+    }
<br>
+
<br>
+    /* Otherwise, go through the contexts */
<br>
+
<br>
+    for (i = 0; i &lt; num_context; ++i) {
<br>
+      if (context[i] != 0) {
<br>
+        if (context[i]-&gt;num_map &gt; 0) {
<br>
+            orte_app_context_map_t** map = context[i]-&gt;map_data;
<br>
+
<br>
+            /* Accumulate all of the host name mappings */
<br>
+            for (j = 0; j &lt; context[i]-&gt;num_map; ++j) {
<br>
+                if (ORTE_APP_CONTEXT_MAP_HOSTNAME == map[j]-&gt;map_type) {
<br>
+                    mini_map = opal_argv_split(map[j]-&gt;map_data, ',');
<br>
+		    for (k = 0; NULL != mini_map[k]; ++k) {
<br>
+		      if(!orte_rmaps_rr_is_host_allocated(mini_map[k]))
<br>
+			{
<br>
+			  rc = opal_argv_append_nosize(&amp;mapped_nodes, 
<br>
+						       mini_map[k]);
<br>
+			  if (OPAL_SUCCESS != rc) {
<br>
+			    goto cleanup;
<br>
+			  }
<br>
+			}
<br>
+                    }
<br>
+		    opal_argv_free(mini_map);
<br>
+                }
<br>
+            }
<br>
+        }
<br>
+      }
<br>
+    }
<br>
+
<br>
+    /* Did we find anything? */
<br>
+
<br>
+    if (NULL != mapped_nodes) {
<br>
+
<br>
+        /* Go through the names found and add them to the host list.
<br>
+           If they're not unique, then bump the slots count for each
<br>
+           duplicate */
<br>
+
<br>
+        for (i = 0; NULL != mapped_nodes[i]; ++i) {
<br>
+            for (item = opal_list_get_first(&amp;nodes); 
<br>
+                 item != opal_list_get_end(&amp;nodes);
<br>
+                 item = opal_list_get_next(item)) {
<br>
+                node = (orte_ras_node_t*) item;
<br>
+                if (0 == strcmp(node-&gt;node_name, mapped_nodes[i])) {
<br>
+                    ++node-&gt;node_slots;
<br>
+                    break;
<br>
+                }
<br>
+            }
<br>
+
<br>
+            /* If we didn't find it, add it to the list */
<br>
+
<br>
+            if (item == opal_list_get_end(&amp;nodes)) {
<br>
+                node = OBJ_NEW(orte_ras_node_t);
<br>
+                if (NULL == node) {
<br>
+                    return ORTE_ERR_OUT_OF_RESOURCE;
<br>
+                }
<br>
+                node-&gt;node_name = strdup(mapped_nodes[i]);
<br>
+                node-&gt;node_arch = NULL;
<br>
+                node-&gt;node_state = ORTE_NODE_STATE_UP;
<br>
+                /* JMS: this should not be hard-wired to 0, but there's no
<br>
+                   other value to put it to [yet]... */
<br>
+                node-&gt;node_cellid = 0;
<br>
+                node-&gt;node_slots_inuse = 0;
<br>
+                node-&gt;node_slots_max = 0;
<br>
+                node-&gt;node_slots = 1;
<br>
+                opal_list_append(&amp;nodes, &amp;node-&gt;super);
<br>
+            }
<br>
+        }
<br>
+
<br>
+        /* Put them on the segment and allocate them */
<br>
+
<br>
+        if (ORTE_SUCCESS != 
<br>
+            (rc = orte_ras_base_node_insert(&amp;nodes)) ||
<br>
+            ORTE_SUCCESS != 
<br>
+            (rc = orte_ras_base_allocate_nodes(jobid, &amp;nodes))) {
<br>
+            goto cleanup;
<br>
+        }
<br>
+    }
<br>
+
<br>
+cleanup:
<br>
+    if (NULL != mapped_nodes) {
<br>
+        opal_argv_free(mapped_nodes);
<br>
+    }
<br>
+
<br>
+    while (NULL != (item = opal_list_remove_first(&amp;nodes))) {
<br>
+        OBJ_RELEASE(item);
<br>
+    }
<br>
+    OBJ_DESTRUCT(&amp;nodes);
<br>
+    for (i = 0; i &lt; num_context; i++) {
<br>
+        OBJ_RELEASE(context[i]);
<br>
+    }
<br>
+    free(context);
<br>
+    return rc;
<br>
+}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;
<br>
&nbsp;/*
<br>
@@ -367,6 +495,11 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;orte_attribute_t *attr;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;orte_std_cntr_t slots_per_node;
<br>
&nbsp;
<br>
+    if(ORTE_SUCCESS != (rc = orte_rmaps_rr_host_allocate(jobid))) {
<br>
+      ORTE_ERROR_LOG(rc);
<br>
+      return rc;
<br>
+    }
<br>
+
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_TRACE(1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* setup the local environment from the attributes */
<br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2977/signature.asc">OpenPGP digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2978.php">Ralph Castain: "Re: [OMPI users] Open MPI error when using MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="2976.php">Prakash Velayutham: "Re: [OMPI users] Open MPI error when using MPI_Comm_spawn"</a>
<li><strong>In reply to:</strong> <a href="2975.php">Ralph Castain: "Re: [OMPI users] Open MPI error when using MPI_Comm_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2978.php">Ralph Castain: "Re: [OMPI users] Open MPI error when using MPI_Comm_spawn"</a>
<li><strong>Reply:</strong> <a href="2978.php">Ralph Castain: "Re: [OMPI users] Open MPI error when using MPI_Comm_spawn"</a>
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
