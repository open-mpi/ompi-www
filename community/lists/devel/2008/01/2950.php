<?
$subject_val = "[OMPI devel] [PATCH] openib btl: extensable cpc selection enablement";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  9 18:38:02 2008" -->
<!-- isoreceived="20080109233802" -->
<!-- sent="Wed, 9 Jan 2008 17:37:54 -0600" -->
<!-- isosent="20080109233754" -->
<!-- name="Jon Mason" -->
<!-- email="jon_at_[hidden]" -->
<!-- subject="[OMPI devel] [PATCH] openib btl: extensable cpc selection enablement" -->
<!-- id="20080109233754.GB30920_at_opengridcomputing.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] [PATCH] openib btl: extensable cpc selection enablement<br>
<strong>From:</strong> Jon Mason (<em>jon_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-09 18:37:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2951.php">Pavel Shamis (Pasha): "Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection enablement"</a>
<li><strong>Previous message:</strong> <a href="2949.php">Rayson Ho: "[OMPI devel] processor affinity -- OpenMPI/batch system integration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2951.php">Pavel Shamis (Pasha): "Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection enablement"</a>
<li><strong>Reply:</strong> <a href="2951.php">Pavel Shamis (Pasha): "Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection enablement"</a>
<li><strong>Reply:</strong> <a href="2953.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection enablement"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The new cpc selection framework is now in place.  The patch below allows
<br>
for dynamic selection of cpc methods based on what is available.  It
<br>
also allows for inclusion/exclusions of methods.  It even futher allows
<br>
for modifying the priorities of certain cpc methods to better determine
<br>
the optimal cpc method.
<br>
<p>This patch also contains XRC compile time disablement (per Jeff's
<br>
patch).
<br>
<p>At a high level, the cpc selections works by walking through each cpc
<br>
and allowing it to test to see if it is permissable to run on this
<br>
mpirun.  It returns a priority if it is permissable or a -1 if not.  All
<br>
of the cpc names and priorities are rolled into a string.  This string
<br>
is then encapsulated in a message and passed around all the ompi
<br>
processes.  Once received and unpacked, the list received is compared
<br>
to a local copy of the list.  The connection method is chosen by
<br>
comparing the lists passed around to all nodes via modex with the list
<br>
generated locally.  Any non-negative number is a potentially valid
<br>
connection method.  The method below of determining the optimal
<br>
connection method is to take the cross-section of the two lists.  The
<br>
highest single value (and the other side being non-negative) is selected
<br>
as the cpc method.
<br>
<p>Please test it out.  The tree can be found at
<br>
<a href="https://svn.open-mpi.org/svn/ompi/tmp-public/openib-cpc/">https://svn.open-mpi.org/svn/ompi/tmp-public/openib-cpc/</a>
<br>
<p>This patch has been tested with IB and iWARP adapters on a 2 node system
<br>
(with it correctly choosing to use oob and happily ignoring iWARP
<br>
adapters).  It needs XRC testing and testing of larger node systems.
<br>
<p>Many thanks to Jeff for all of his help.
<br>
<p>Thanks,
<br>
Jon
<br>
<p>Index: ompi/mca/btl/openib/btl_openib_component.c
<br>
===================================================================
<br>
--- ompi/mca/btl/openib/btl_openib_component.c	(revision 17101)
<br>
+++ ompi/mca/btl/openib/btl_openib_component.c	(working copy)
<br>
@@ -155,30 +155,70 @@
<br>
&nbsp;&nbsp;*/
<br>
&nbsp;static int btl_openib_modex_send(void)
<br>
&nbsp;{
<br>
-    int         rc, i;
<br>
-    size_t      size;
<br>
-    mca_btl_openib_port_info_t *ports = NULL;
<br>
+    int    rc, i;
<br>
+    char *message, *offset;
<br>
+    uint32_t size, size_save;
<br>
+    size_t msg_size;
<br>
&nbsp;
<br>
-    size = mca_btl_openib_component.ib_num_btls * sizeof (mca_btl_openib_port_info_t);
<br>
-    if (size != 0) {
<br>
-        ports = (mca_btl_openib_port_info_t *)malloc (size);
<br>
-        if (NULL == ports) {
<br>
-            BTL_ERROR((&quot;Failed malloc: %s:%d\n&quot;, __FILE__, __LINE__));
<br>
-            return OMPI_ERR_OUT_OF_RESOURCE;
<br>
-        }
<br>
+    /* The message is packed into 2 parts:
<br>
+     * 1. a uint32_t indicating the number of ports in the message
<br>
+     * 2. for each port:
<br>
+     *    a. the port data
<br>
+     *    b. a uint32_t indicating a string length
<br>
+     *    c. the string cpc list for that port, length specified by 2b.
<br>
+     */
<br>
+    msg_size = sizeof(uint32_t) + mca_btl_openib_component.ib_num_btls * (sizeof(uint32_t) + sizeof(mca_btl_openib_port_info_t));
<br>
+    for (i = 0; i &lt; mca_btl_openib_component.ib_num_btls; i++) {
<br>
+        msg_size += strlen(mca_btl_openib_component.openib_btls[i]-&gt;port_info.cpclist);
<br>
+    }
<br>
&nbsp;
<br>
-        for (i = 0; i &lt; mca_btl_openib_component.ib_num_btls; i++) {
<br>
-            mca_btl_openib_module_t *btl = mca_btl_openib_component.openib_btls[i];
<br>
-            ports[i] = btl-&gt;port_info;
<br>
+    if (0 == msg_size) {
<br>
+        return 0;
<br>
+    }
<br>
+
<br>
+    message = malloc(msg_size);
<br>
+    if (NULL == message) {
<br>
+        BTL_ERROR((&quot;Failed malloc: %s:%d\n&quot;, __FILE__, __LINE__));
<br>
+        return OMPI_ERR_OUT_OF_RESOURCE;
<br>
+    } 
<br>
+
<br>
+    /* Pack the number of ports */
<br>
+    size = mca_btl_openib_component.ib_num_btls;
<br>
&nbsp;#if !defined(WORDS_BIGENDIAN) &amp;&amp; OMPI_ENABLE_HETEROGENEOUS_SUPPORT
<br>
-            MCA_BTL_OPENIB_PORT_INFO_HTON(ports[i]);
<br>
+    size = htonl(size);
<br>
&nbsp;#endif
<br>
-        }
<br>
+    memcpy(message, &amp;size, sizeof(size));
<br>
+    offset = message + sizeof(size);
<br>
+
<br>
+    /* Pack each of the ports */
<br>
+    for (i = 0; i &lt; mca_btl_openib_component.ib_num_btls; i++) {
<br>
+        /* Pack the port struct */
<br>
+        memcpy(offset, &amp;mca_btl_openib_component.openib_btls[i]-&gt;port_info, sizeof(mca_btl_openib_port_info_t));
<br>
+#if !defined(WORDS_BIGENDIAN) &amp;&amp; OMPI_ENABLE_HETEROGENEOUS_SUPPORT
<br>
+        MCA_BTL_OPENIB_PORT_INFO_HTON(*(mca_btl_openib_port_info_t *)offset);
<br>
+#endif
<br>
+        offset += sizeof(mca_btl_openib_port_info_t);
<br>
+
<br>
+        /* Pack the strlen of the cpclist */
<br>
+        size = size_save =
<br>
+            strlen(mca_btl_openib_component.openib_btls[i]-&gt;port_info.cpclist);
<br>
+#if !defined(WORDS_BIGENDIAN) &amp;&amp; OMPI_ENABLE_HETEROGENEOUS_SUPPORT
<br>
+        size = htonl(size);
<br>
+#endif
<br>
+        memcpy(offset, &amp;size, sizeof(size));
<br>
+        offset += sizeof(size);
<br>
+
<br>
+        /* Pack the string */
<br>
+        memcpy(offset, 
<br>
+               mca_btl_openib_component.openib_btls[i]-&gt;port_info.cpclist, 
<br>
+               size_save);
<br>
+        offset += size_save;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
-    rc = ompi_modex_send (&amp;mca_btl_openib_component.super.btl_version, ports, size);
<br>
-    if (NULL != ports) {
<br>
-        free (ports);
<br>
-    }
<br>
+
<br>
+    rc = ompi_modex_send(&amp;mca_btl_openib_component.super.btl_version, 
<br>
+                         message, msg_size);
<br>
+    free(message);
<br>
+
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return rc;
<br>
&nbsp;}
<br>
&nbsp;
<br>
@@ -357,6 +397,8 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lid &lt; ib_port_attr-&gt;lid + lmc; lid++){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(i = 0; i &lt; mca_btl_openib_component.btls_per_lid; i++){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char param[40];
<br>
+            int rc;
<br>
+
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;openib_btl = malloc(sizeof(mca_btl_openib_module_t));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(NULL == openib_btl) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BTL_ERROR((&quot;Failed malloc: %s:%d\n&quot;, __FILE__, __LINE__));
<br>
@@ -383,6 +425,11 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;openib_btl-&gt;port_info.lid = lid;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;#endif
<br>
+            rc = ompi_btl_openib_connect_base_query(&amp;openib_btl-&gt;port_info.cpclist, hca);
<br>
+            if (rc != OMPI_SUCCESS) {
<br>
+                continue;
<br>
+            }
<br>
+
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;openib_btl-&gt;ib_reg[MCA_BTL_TAG_BTL].cbfunc = btl_openib_control;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;openib_btl-&gt;ib_reg[MCA_BTL_TAG_BTL].cbdata = NULL;
<br>
&nbsp;
<br>
@@ -1295,10 +1342,6 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return NULL;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;
<br>
-    /* Setup connect module */
<br>
-    if (OMPI_SUCCESS != ompi_btl_openib_connect_base_select()) {
<br>
-        return NULL;
<br>
-    }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;btl_openib_modex_send();
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*num_btl_modules = mca_btl_openib_component.ib_num_btls;
<br>
Index: ompi/mca/btl/openib/btl_openib_proc.c
<br>
===================================================================
<br>
--- ompi/mca/btl/openib/btl_openib_proc.c	(revision 17101)
<br>
+++ ompi/mca/btl/openib/btl_openib_proc.c	(working copy)
<br>
@@ -100,17 +100,19 @@
<br>
&nbsp;mca_btl_openib_proc_t* mca_btl_openib_proc_create(ompi_proc_t* ompi_proc)
<br>
&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_openib_proc_t* module_proc = NULL;
<br>
-    size_t size;
<br>
+    size_t msg_size;
<br>
+    uint32_t size;
<br>
&nbsp;#if !defined(WORDS_BIGENDIAN) &amp;&amp; OMPI_ENABLE_HETEROGENEOUS_SUPPORT
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size_t i;
<br>
&nbsp;#endif
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int rc;
<br>
+    void *message;
<br>
+    char *offset;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Check if we have already created a IB proc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* structure for this ompi process */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;module_proc = mca_btl_openib_proc_lookup_ompi(ompi_proc);
<br>
-
<br>
-    if(module_proc != NULL) {
<br>
+    if (NULL != module_proc) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Gotcha! */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return module_proc;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
@@ -126,48 +128,67 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* size) to represent the proc */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;module_proc-&gt;proc_guid = ompi_proc-&gt;proc_name;
<br>
&nbsp;
<br>
-    
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* query for the peer address info */ 
<br>
-    rc = ompi_modex_recv(
<br>
-                                 &amp;mca_btl_openib_component.super.btl_version, 
<br>
-                                 ompi_proc, 
<br>
-                                 (void*)&amp;module_proc-&gt;proc_ports, 
<br>
-                                 &amp;size
<br>
-                                 ); 
<br>
-    
<br>
-    
<br>
-
<br>
-    if(OMPI_SUCCESS != rc) {
<br>
+    rc = ompi_modex_recv(&amp;mca_btl_openib_component.super.btl_version, 
<br>
+                         ompi_proc,
<br>
+                         &amp;message,
<br>
+                         &amp;msg_size); 
<br>
+    if (OMPI_SUCCESS != rc) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BTL_ERROR((&quot;[%s:%d] ompi_modex_recv failed for peer %s&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;__FILE__, __LINE__,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ORTE_NAME_PRINT(&amp;ompi_proc-&gt;proc_name)));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OBJ_RELEASE(module_proc);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return NULL;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
-
<br>
-    if((size % sizeof(mca_btl_openib_port_info_t)) != 0) {
<br>
-        BTL_ERROR((&quot;[%s:%d] invalid module address for peer %s&quot;,
<br>
-                   __FILE__, __LINE__,
<br>
-                   ORTE_NAME_PRINT(&amp;ompi_proc-&gt;proc_name)));
<br>
-        OBJ_RELEASE(module_proc);
<br>
+    if (0 == msg_size) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return NULL;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;
<br>
-    module_proc-&gt;proc_port_count = size/sizeof(mca_btl_openib_port_info_t);
<br>
+    /* Message was packed in btl_openib_component.c; the format is
<br>
+       listed in a comment in that file */
<br>
+    /* Unpack the number of ports in the message */
<br>
+    offset = message;
<br>
+    memcpy(&amp;(module_proc-&gt;proc_port_count), offset, sizeof(uint32_t));
<br>
+#if !defined(WORDS_BIGENDIAN) &amp;&amp; OMPI_ENABLE_HETEROGENEOUS_SUPPORT
<br>
+    module_proc-&gt;proc_port_count = ntohl(module_proc-&gt;proc_port_count);
<br>
+#endif
<br>
+    module_proc-&gt;proc_ports = (mca_btl_openib_port_info_t *)malloc(sizeof(mca_btl_openib_port_info_t) * module_proc-&gt;proc_port_count);
<br>
+    offset += sizeof(uint32_t);
<br>
&nbsp;
<br>
+    /* Loop over unpacking all the ports */
<br>
+    for (i = 0; i &lt; module_proc-&gt;proc_port_count; i++) {
<br>
+        /* Unpack the port */
<br>
+        memcpy(&amp;module_proc-&gt;proc_ports[i], offset, 
<br>
+               sizeof(mca_btl_openib_port_info_t));
<br>
+#if !defined(WORDS_BIGENDIAN) &amp;&amp; OMPI_ENABLE_HETEROGENEOUS_SUPPORT
<br>
+        MCA_BTL_OPENIB_PORT_INFO_NTOH(module_proc-&gt;proc_ports[i]);
<br>
+#endif
<br>
+        offset += sizeof(mca_btl_openib_port_info_t);
<br>
+
<br>
+        /* Unpack the string length */
<br>
+        memcpy(&amp;size, offset, sizeof(size));
<br>
+#if !defined(WORDS_BIGENDIAN) &amp;&amp; OMPI_ENABLE_HETEROGENEOUS_SUPPORT
<br>
+        size = ntohl(size);
<br>
+#endif
<br>
+        offset += sizeof(size);
<br>
+
<br>
+        /* Unpack the string */
<br>
+        module_proc-&gt;proc_ports[i].cpclist = malloc(size + 1);
<br>
+        if (NULL == module_proc-&gt;proc_ports[i].cpclist) {
<br>
+            /* JMS some error */
<br>
+        }
<br>
+        memcpy(module_proc-&gt;proc_ports[i].cpclist, offset, size);
<br>
+        module_proc-&gt;proc_ports[i].cpclist[size] = '\0';
<br>
+        offset += size;
<br>
+    }
<br>
+
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (0 == module_proc-&gt;proc_port_count) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;module_proc-&gt;proc_endpoints = NULL;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;module_proc-&gt;proc_endpoints = (mca_btl_base_endpoint_t**)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;malloc(module_proc-&gt;proc_port_count * sizeof(mca_btl_base_endpoint_t*));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
-#if !defined(WORDS_BIGENDIAN) &amp;&amp; OMPI_ENABLE_HETEROGENEOUS_SUPPORT
<br>
-    for(i=0; i &lt; module_proc-&gt;proc_port_count; ++i) {
<br>
-        MCA_BTL_OPENIB_PORT_INFO_NTOH(module_proc-&gt;proc_ports[i]);
<br>
-    }
<br>
-#endif
<br>
-
<br>
-    if(NULL == module_proc-&gt;proc_endpoints) {
<br>
+    if (NULL == module_proc-&gt;proc_endpoints) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OBJ_RELEASE(module_proc);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return NULL;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
Index: ompi/mca/btl/openib/connect/connect.h
<br>
===================================================================
<br>
--- ompi/mca/btl/openib/connect/connect.h	(revision 17102)
<br>
+++ ompi/mca/btl/openib/connect/connect.h	(working copy)
<br>
@@ -62,16 +62,23 @@
<br>
&nbsp;&nbsp;* main openib BTL will start sending out fragments that were queued
<br>
&nbsp;&nbsp;* while the connection was establing, etc.).
<br>
&nbsp;&nbsp;*/
<br>
-
<br>
&nbsp;#ifndef BTL_OPENIB_CONNECT_H
<br>
&nbsp;#define BTL_OPENIB_CONNECT_H
<br>
&nbsp;
<br>
&nbsp;BEGIN_C_DECLS
<br>
&nbsp;
<br>
+#define BCF_MAX_NAME 64
<br>
+
<br>
&nbsp;/**
<br>
+ * Must forward declare mca_btl_openib_hca_t; it's defined in
<br>
+ * btl_openib.h, but that file includes this file.
<br>
+ */
<br>
+struct mca_btl_openib_hca_t;
<br>
+
<br>
+/**
<br>
&nbsp;&nbsp;* Function to register MCA params in the connect functions
<br>
&nbsp;&nbsp;*/
<br>
-typedef int (*ompi_btl_openib_connect_base_func_open_t)(void);
<br>
+typedef void (*ompi_btl_openib_connect_base_func_open_t)(void);
<br>
&nbsp;
<br>
&nbsp;/**
<br>
&nbsp;&nbsp;* Function to intialize the connection functions (i.e., it's been
<br>
@@ -86,12 +93,15 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(struct mca_btl_base_endpoint_t *e);
<br>
&nbsp;
<br>
&nbsp;/**
<br>
+ * Query the CPC to see if it wants to run on a specific HCA
<br>
+ */
<br>
+typedef int (*ompi_btl_openib_connect_base_func_query_t)(struct mca_btl_openib_hca_t *hca);
<br>
+
<br>
+/**
<br>
&nbsp;&nbsp;* Function to finalize the connection functions
<br>
&nbsp;&nbsp;*/
<br>
&nbsp;typedef int (*ompi_btl_openib_connect_base_func_finalize_t)(void);
<br>
&nbsp;
<br>
-#define BCF_MAX_NAME 64
<br>
-
<br>
&nbsp;struct ompi_btl_openib_connect_base_funcs_t {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/** Name of this set of connection functions */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char bcf_name[BCF_MAX_NAME];
<br>
@@ -105,8 +115,11 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/** Connect function */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_btl_openib_connect_base_func_start_connect_t bcf_start_connect;
<br>
&nbsp;
<br>
+    /** Query function */
<br>
+    ompi_btl_openib_connect_base_func_query_t bcf_query;
<br>
+
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/** Finalize function */
<br>
-    ompi_btl_openib_connect_base_func_open_t bcf_finalize;
<br>
+    ompi_btl_openib_connect_base_func_finalize_t bcf_finalize;
<br>
&nbsp;};
<br>
&nbsp;typedef struct ompi_btl_openib_connect_base_funcs_t ompi_btl_openib_connect_base_funcs_t;
<br>
&nbsp;
<br>
Index: ompi/mca/btl/openib/connect/base.h
<br>
===================================================================
<br>
--- ompi/mca/btl/openib/connect/base.h	(revision 17102)
<br>
+++ ompi/mca/btl/openib/connect/base.h	(working copy)
<br>
@@ -28,7 +28,8 @@
<br>
&nbsp;/*
<br>
&nbsp;&nbsp;* Select function
<br>
&nbsp;&nbsp;*/
<br>
-int ompi_btl_openib_connect_base_select(void);
<br>
+int ompi_btl_openib_connect_base_select(char*, char*);
<br>
+int ompi_btl_openib_connect_base_query(char**, mca_btl_openib_hca_t*);
<br>
&nbsp;
<br>
&nbsp;END_C_DECLS
<br>
&nbsp;
<br>
Index: ompi/mca/btl/openib/connect/btl_openib_connect_base.c
<br>
===================================================================
<br>
--- ompi/mca/btl/openib/connect/btl_openib_connect_base.c	(revision 17102)
<br>
+++ ompi/mca/btl/openib/connect/btl_openib_connect_base.c	(working copy)
<br>
@@ -33,7 +33,9 @@
<br>
&nbsp;&nbsp;*/
<br>
&nbsp;static ompi_btl_openib_connect_base_funcs_t *all[] = {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;ompi_btl_openib_connect_oob,
<br>
+#if HAVE_XRC
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;ompi_btl_openib_connect_xoob,
<br>
+#endif
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;ompi_btl_openib_connect_rdma_cm,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;ompi_btl_openib_connect_ibcm,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NULL
<br>
@@ -42,7 +44,8 @@
<br>
&nbsp;/*
<br>
&nbsp;&nbsp;* MCA parameter value
<br>
&nbsp;&nbsp;*/
<br>
-static char *param = NULL;
<br>
+static char *cpc_include = NULL;
<br>
+static char *cpc_exclude = NULL;
<br>
&nbsp;
<br>
&nbsp;/*
<br>
&nbsp;&nbsp;* Register MCA parameters
<br>
@@ -60,38 +63,26 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a = opal_argv_join(temp, ',');
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_argv_free(temp);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;asprintf(&amp;b,
<br>
-             &quot;Method used to make OpenFabrics connections (valid values: %s)&quot;,
<br>
+             &quot;Method used to select OpenFabrics connections (valid values: %s)&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a);
<br>
&nbsp;
<br>
-    /* For XRC qps we must to use XOOB connection manager */
<br>
-    if (mca_btl_openib_component.num_xrc_qps &gt; 0) {
<br>
-        mca_base_param_reg_string(&amp;mca_btl_openib_component.super.btl_version,
<br>
-                &quot;connect&quot;,
<br>
-                b, false, false,
<br>
-                &quot;xoob&quot;, &amp;param);
<br>
-        if (0 != strcmp(&quot;xoob&quot;, param)) {
<br>
-            opal_show_help(&quot;help-mpi-btl-openib.txt&quot;,
<br>
-                    &quot;XRC with wrong OOB&quot;, true,
<br>
-                    orte_system_info.nodename,
<br>
-                    mca_btl_openib_component.num_xrc_qps);
<br>
-            return OMPI_ERROR;
<br>
-        }
<br>
-    } else { /* For all others we should use OOB */
<br>
-        mca_base_param_reg_string(&amp;mca_btl_openib_component.super.btl_version,
<br>
-                &quot;connect&quot;,
<br>
-                b, false, false,
<br>
-                &quot;oob&quot;, &amp;param);
<br>
-        if (0 != strcmp(&quot;oob&quot;, param)) {
<br>
-            opal_show_help(&quot;help-mpi-btl-openib.txt&quot;,
<br>
-                    &quot;SRQ or PP with wrong OOB&quot;, true,
<br>
-                    orte_system_info.nodename,
<br>
-                    mca_btl_openib_component.num_srq_qps,
<br>
-                    mca_btl_openib_component.num_pp_qps);
<br>
-            return OMPI_ERROR;
<br>
-        }
<br>
-    }
<br>
+    mca_base_param_reg_string(&amp;mca_btl_openib_component.super.btl_version,
<br>
+                &quot;cpc_include&quot;, b, false, false, NULL, &amp;cpc_include);
<br>
+    free(a);
<br>
+    free(b);
<br>
&nbsp;
<br>
-    /* Call the open function on all the connect modules */
<br>
+    asprintf(&amp;b,
<br>
+             &quot;Method used to exclude OpenFabrics connections (valid values: %s)&quot;,
<br>
+             a);
<br>
+
<br>
+    mca_base_param_reg_string(&amp;mca_btl_openib_component.super.btl_version,
<br>
+                &quot;cpc_exclude&quot;, b, false, false, NULL, &amp;cpc_exclude);
<br>
+    free(a);
<br>
+    free(b);
<br>
+
<br>
+    /* Call the open function on all the connect modules so that they
<br>
+     * may setup any MCA params specific to the connection type
<br>
+     */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (i = 0; NULL != all[i]; ++i) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (NULL != all[i]-&gt;bcf_open) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;all[i]-&gt;bcf_open();
<br>
@@ -101,33 +92,134 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return OMPI_SUCCESS;
<br>
&nbsp;}
<br>
&nbsp;
<br>
+/* 
<br>
+ * The connection method is chosen by comparing the lists passed around
<br>
+ * to all nodes via modex with the list generated locally.  Any
<br>
+ * non-negative number is a potentially valid connection method.  The
<br>
+ * method below of determining the optimal connection method is to take
<br>
+ * the cross-section of the two lists.  The highest single value (and
<br>
+ * the other side being non-negative) is selected as the cpc method.
<br>
+ */
<br>
+int ompi_btl_openib_connect_base_select(char *remotelist, char *locallist)
<br>
+{
<br>
+    int i, j, max = -1;
<br>
+    char **localist_formatted, **remotelist_formatted;
<br>
+    char *name;
<br>
&nbsp;
<br>
-int ompi_btl_openib_connect_base_select(void)
<br>
+    BTL_VERBOSE((&quot;remotelist = %s locallist = %s\n&quot;, remotelist, locallist));
<br>
+
<br>
+    localist_formatted = opal_argv_split(locallist, ',');
<br>
+    remotelist_formatted = opal_argv_split(remotelist, ',');
<br>
+
<br>
+    for (i = 0; NULL != localist_formatted[i] &amp;&amp; NULL != localist_formatted[i+1]; i+=2) {
<br>
+        for (j = 0; NULL != remotelist_formatted[j] &amp;&amp; NULL != remotelist_formatted[j+1]; j+=2) {
<br>
+            int local_val, remote_val;
<br>
+
<br>
+            local_val = atoi(localist_formatted[i+1]);
<br>
+            remote_val = atoi(remotelist_formatted[j+1]);
<br>
+
<br>
+            if (0 == strcmp(localist_formatted[i], remotelist_formatted[j]) &amp;&amp;
<br>
+                (-1 != local_val &amp;&amp; -1 != remote_val)) {
<br>
+                if (local_val &gt; max) {
<br>
+                    max = local_val;
<br>
+                    name = localist_formatted[i];
<br>
+                }
<br>
+                if (remote_val &gt; max) {
<br>
+                    max = remote_val;
<br>
+                    name = remotelist_formatted[j];
<br>
+                }
<br>
+            }
<br>
+        }
<br>
+    }
<br>
+
<br>
+    if (-1 == max) {
<br>
+        BTL_ERROR((&quot;Failed to find any working connections&quot;));
<br>
+        return OMPI_ERROR;
<br>
+    }
<br>
+
<br>
+    for (i = 0; NULL != all[i]; i++) {
<br>
+        if (0 == strcmp(all[i]-&gt;bcf_name, name)) {
<br>
+            all[i]-&gt;bcf_init();
<br>
+            ompi_btl_openib_connect = *(all[i]);
<br>
+            break;
<br>
+        }
<br>
+    }
<br>
+
<br>
+    BTL_VERBOSE((&quot;%s selected as transport\n&quot;, all[i]-&gt;bcf_name));
<br>
+
<br>
+    opal_argv_free(localist_formatted);
<br>
+    opal_argv_free(remotelist_formatted);
<br>
+
<br>
+    return OMPI_SUCCESS;
<br>
+}
<br>
+
<br>
+static inline int cpc_specific_query(char ***cpclist, mca_btl_openib_hca_t *hca, int cpc_counter, bool *valid)
<br>
&nbsp;{
<br>
-    int i;
<br>
+    char *temp;
<br>
+    int rc;
<br>
&nbsp;
<br>
-    /* Go through all the pseudo-components; if the btl_openib_connect
<br>
-       param is empty, then take the first one that returns
<br>
-       OMPI_SUCCESS from its init function.  If
<br>
-       btl_openib_connect_param is not empty, find that one and ensure
<br>
-       that its init function returns OMPI_SUCCESS. */
<br>
-    if (NULL != param &amp;&amp; '\0' == param[0]) {
<br>
-        param = NULL;
<br>
+    if (NULL == all[cpc_counter]-&gt;bcf_query) {
<br>
+        return OMPI_SUCCESS;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
+
<br>
+    rc = all[cpc_counter]-&gt;bcf_query(hca);
<br>
+    if (rc &gt; 0) {
<br>
+        *valid = 1;
<br>
+    }
<br>
+
<br>
+    asprintf(&amp;temp, &quot;%s,%d&quot;, all[cpc_counter]-&gt;bcf_name, rc);
<br>
+    opal_argv_append_nosize(cpclist, temp);
<br>
+    return OMPI_SUCCESS;
<br>
+}
<br>
+
<br>
+int ompi_btl_openib_connect_base_query(char **cpclist, mca_btl_openib_hca_t *hca)
<br>
+{
<br>
+    int i, rc;
<br>
+    bool valid = 0;
<br>
+    char **cpclist_include, **cpclist_exclude, **namepriority_list = NULL;
<br>
+
<br>
+    cpclist_include = opal_argv_split(cpc_include, ',');
<br>
+    cpclist_exclude = opal_argv_split(cpc_exclude, ',');
<br>
+
<br>
+    /* Go through all the CMs to create a list of usable CPCs */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (i = 0; NULL != all[i]; ++i) {
<br>
-        if ((NULL != param &amp;&amp; 0 == strcmp(all[i]-&gt;bcf_name, param)) ||
<br>
-            (NULL == param)) {
<br>
-            if (NULL != all[i]-&gt;bcf_init &amp;&amp; 
<br>
-                OMPI_SUCCESS == all[i]-&gt;bcf_init()) {
<br>
-                ompi_btl_openib_connect = *(all[i]);
<br>
-                break;
<br>
+        if (NULL != cpclist_include) {
<br>
+            int j;
<br>
+            for (j = 0; NULL != cpclist_include[j]; ++j) {
<br>
+                if (0 == strcmp(cpclist_include[j], all[i]-&gt;bcf_name)) { 
<br>
+                    rc = cpc_specific_query(&amp;namepriority_list, hca, i, &amp;valid);
<br>
+                    if (OMPI_ERROR == rc) {
<br>
+                        return OMPI_ERROR;
<br>
+                    }
<br>
+                }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
+        } else if (NULL != cpclist_exclude) {
<br>
+            int j;
<br>
+            for (j = 0; NULL != cpclist_exclude[j]; ++j) {
<br>
+                if (0 != strcmp(cpclist_exclude[j], all[i]-&gt;bcf_name)) {
<br>
+                    rc = cpc_specific_query(&amp;namepriority_list, hca, i, &amp;valid);
<br>
+                    if (OMPI_ERROR == rc) {
<br>
+                        return OMPI_ERROR;
<br>
+                    }
<br>
+                }
<br>
+            }
<br>
+        } else {
<br>
+            rc = cpc_specific_query(&amp;namepriority_list, hca, i, &amp;valid);
<br>
+            if (OMPI_ERROR == rc) {
<br>
+                return OMPI_ERROR;
<br>
+            }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
-    if (NULL == all[i]) {
<br>
-        /* JMS opal_show_help */
<br>
-        return OMPI_ERR_NOT_FOUND;
<br>
+
<br>
+    if (0 == valid) {
<br>
+        BTL_ERROR((&quot;Failed to find any valid connections for %s, not &quot;
<br>
+                   &quot;using it for this run&quot;,
<br>
+                   ibv_get_device_name(hca-&gt;ib_dev)));
<br>
+        return OMPI_ERROR;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;
<br>
+    *cpclist = opal_argv_join(namepriority_list, ',');
<br>
+    opal_argv_free(namepriority_list);
<br>
+
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return OMPI_SUCCESS;
<br>
&nbsp;}
<br>
Index: ompi/mca/btl/openib/connect/btl_openib_connect_ibcm.c
<br>
===================================================================
<br>
--- ompi/mca/btl/openib/connect/btl_openib_connect_ibcm.c	(revision 17102)
<br>
+++ ompi/mca/btl/openib/connect/btl_openib_connect_ibcm.c	(working copy)
<br>
@@ -13,7 +13,7 @@
<br>
&nbsp;#include &quot;btl_openib_endpoint.h&quot;
<br>
&nbsp;#include &quot;connect/connect.h&quot;
<br>
&nbsp;
<br>
-static int ibcm_open(void);
<br>
+static void ibcm_open(void);
<br>
&nbsp;static int ibcm_init(void);
<br>
&nbsp;static int ibcm_connect(mca_btl_base_endpoint_t *e);
<br>
&nbsp;static int ibcm_finalize(void);
<br>
@@ -23,17 +23,16 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ibcm_open,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ibcm_init,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ibcm_connect,
<br>
+    NULL,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ibcm_finalize,
<br>
&nbsp;};
<br>
&nbsp;
<br>
-static int ibcm_open(void)
<br>
+static void ibcm_open(void)
<br>
&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_base_param_reg_int(&amp;mca_btl_openib_component.super.btl_version,
<br>
-                           &quot;btl_openib_connect_ibcm_foo&quot;,
<br>
+                           &quot;connect_ibcm_foo&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;A dummy help message&quot;, false, false,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;17, NULL);
<br>
-
<br>
-    return OMPI_SUCCESS;
<br>
&nbsp;}
<br>
&nbsp;
<br>
&nbsp;static int ibcm_init(void)
<br>
Index: ompi/mca/btl/openib/connect/btl_openib_connect_oob.c
<br>
===================================================================
<br>
--- ompi/mca/btl/openib/connect/btl_openib_connect_oob.c	(revision 17102)
<br>
+++ ompi/mca/btl/openib/connect/btl_openib_connect_oob.c	(working copy)
<br>
@@ -39,8 +39,12 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ENDPOINT_CONNECT_ACK
<br>
&nbsp;} connect_message_type_t;
<br>
&nbsp;
<br>
+static int oob_priority = 50;
<br>
+
<br>
+static void oob_open(void);
<br>
&nbsp;static int oob_init(void);
<br>
&nbsp;static int oob_start_connect(mca_btl_base_endpoint_t *e);
<br>
+static int oob_query(mca_btl_openib_hca_t *hca);
<br>
&nbsp;static int oob_finalize(void);
<br>
&nbsp;
<br>
&nbsp;static int reply_start_connect(mca_btl_openib_endpoint_t *endpoint,
<br>
@@ -67,16 +71,33 @@
<br>
&nbsp;&nbsp;*/
<br>
&nbsp;ompi_btl_openib_connect_base_funcs_t ompi_btl_openib_connect_oob = {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;oob&quot;,
<br>
-    /* No need for &quot;open */
<br>
-    NULL,
<br>
+    /* Open */
<br>
+    oob_open,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Init */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;oob_init,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Connect */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;oob_start_connect,
<br>
+    /* Query */
<br>
+    oob_query,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Finalize */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;oob_finalize,
<br>
&nbsp;};
<br>
&nbsp;
<br>
+/* Open - this functions sets up any oob specific commandline params */
<br>
+static void oob_open(void)
<br>
+{
<br>
+    mca_base_param_reg_int(&amp;mca_btl_openib_component.super.btl_version,
<br>
+                           &quot;connect_oob_priority&quot;,
<br>
+                           &quot;The selection method priority for oob&quot;,
<br>
+                           false, false, oob_priority, &amp;oob_priority);
<br>
+
<br>
+    if (oob_priority &gt; 100) {
<br>
+        oob_priority = 100;
<br>
+    } else if (oob_priority &lt; -1) {
<br>
+        oob_priority = -1;
<br>
+    }
<br>
+}
<br>
+
<br>
&nbsp;/*
<br>
&nbsp;&nbsp;* Init function.  Post non-blocking RML receive to accept incoming
<br>
&nbsp;&nbsp;* connection requests.
<br>
@@ -118,6 +139,15 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return OMPI_SUCCESS;
<br>
&nbsp;}
<br>
&nbsp;
<br>
+static int oob_query(mca_btl_openib_hca_t *hca)
<br>
+{
<br>
+    if (IBV_TRANSPORT_IB == hca-&gt;ib_dev-&gt;transport_type) {
<br>
+        return oob_priority;
<br>
+    }
<br>
+
<br>
+    return -1;
<br>
+}
<br>
+
<br>
&nbsp;/*
<br>
&nbsp;&nbsp;* Finalize function.  Cleanup RML non-blocking receive.
<br>
&nbsp;&nbsp;*/
<br>
Index: ompi/mca/btl/openib/connect/btl_openib_connect_rdma_cm.c
<br>
===================================================================
<br>
--- ompi/mca/btl/openib/connect/btl_openib_connect_rdma_cm.c	(revision 17102)
<br>
+++ ompi/mca/btl/openib/connect/btl_openib_connect_rdma_cm.c	(working copy)
<br>
@@ -13,9 +13,10 @@
<br>
&nbsp;#include &quot;btl_openib_endpoint.h&quot;
<br>
&nbsp;#include &quot;connect/connect.h&quot;
<br>
&nbsp;
<br>
-static int rdma_cm_open(void);
<br>
+static void rdma_cm_open(void);
<br>
&nbsp;static int rdma_cm_init(void);
<br>
&nbsp;static int rdma_cm_connect(mca_btl_base_endpoint_t *e);
<br>
+static int rdma_cm_query(mca_btl_openib_hca_t *hca);
<br>
&nbsp;static int rdma_cm_finalize(void);
<br>
&nbsp;
<br>
&nbsp;ompi_btl_openib_connect_base_funcs_t ompi_btl_openib_connect_rdma_cm = {
<br>
@@ -23,17 +24,17 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rdma_cm_open,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rdma_cm_init,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rdma_cm_connect,
<br>
+    rdma_cm_query,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rdma_cm_finalize,
<br>
&nbsp;};
<br>
&nbsp;
<br>
-static int rdma_cm_open(void)
<br>
+/* Open - this functions sets up any rdma_cm specific commandline params */
<br>
+static void rdma_cm_open(void)
<br>
&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_base_param_reg_int(&amp;mca_btl_openib_component.super.btl_version,
<br>
-                           &quot;btl_openib_connect_rdma_cm_foo&quot;,
<br>
+                           &quot;connect_rdma_cm_foo&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;A dummy help message&quot;, false, false,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;17, NULL);
<br>
-
<br>
-    return OMPI_SUCCESS;
<br>
&nbsp;}
<br>
&nbsp;
<br>
&nbsp;static int rdma_cm_init(void)
<br>
@@ -48,6 +49,16 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return OMPI_ERR_NOT_IMPLEMENTED;
<br>
&nbsp;}
<br>
&nbsp;
<br>
+static int rdma_cm_query(mca_btl_openib_hca_t *hca)
<br>
+{
<br>
+    if (IBV_TRANSPORT_IWARP == hca-&gt;ib_dev-&gt;transport_type) {
<br>
+	/* Not currently supported */
<br>
+        return -1;
<br>
+    }
<br>
+
<br>
+    return -1;
<br>
+}
<br>
+
<br>
&nbsp;static int rdma_cm_finalize(void)
<br>
&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;rdma cm finalize\n&quot;);
<br>
Index: ompi/mca/btl/openib/connect/btl_openib_connect_xoob.c
<br>
===================================================================
<br>
--- ompi/mca/btl/openib/connect/btl_openib_connect_xoob.c	(revision 17102)
<br>
+++ ompi/mca/btl/openib/connect/btl_openib_connect_xoob.c	(working copy)
<br>
@@ -22,8 +22,10 @@
<br>
&nbsp;#include &quot;btl_openib_xrc.h&quot;
<br>
&nbsp;#include &quot;connect/connect.h&quot;
<br>
&nbsp;
<br>
+static void xoob_open(void);
<br>
&nbsp;static int xoob_init(void);
<br>
&nbsp;static int xoob_start_connect(mca_btl_base_endpoint_t *e);
<br>
+static int xoob_query(mca_btl_openib_hca_t *hca);
<br>
&nbsp;static int xoob_finalize(void);
<br>
&nbsp;
<br>
&nbsp;/*
<br>
@@ -32,18 +34,18 @@
<br>
&nbsp;&nbsp;*/
<br>
&nbsp;ompi_btl_openib_connect_base_funcs_t ompi_btl_openib_connect_xoob = {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;xoob&quot;,
<br>
-    /* No need for &quot;open */
<br>
-    NULL,
<br>
+    /* Open */
<br>
+    xoob_open,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Init */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;xoob_init,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Connect */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;xoob_start_connect,
<br>
+    /* Query */
<br>
+    xoob_query,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Finalize */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;xoob_finalize,
<br>
&nbsp;};
<br>
&nbsp;
<br>
-#if HAVE_XRC
<br>
-
<br>
&nbsp;typedef enum {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SEND,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RECV
<br>
@@ -99,6 +101,24 @@
<br>
&nbsp;
<br>
&nbsp;static int init_rem_info(mca_btl_openib_rem_info_t *rem_info);
<br>
&nbsp;static void free_rem_info(mca_btl_openib_rem_info_t *rem_info);
<br>
+
<br>
+static int xoob_priority = 60;
<br>
+
<br>
+/* Open - this functions sets up any xoob specific commandline params */
<br>
+static void xoob_open(void)
<br>
+{
<br>
+    mca_base_param_reg_int(&amp;mca_btl_openib_component.super.btl_version,
<br>
+                           &quot;connect_xoob_priority&quot;,
<br>
+                           &quot;The selection method priority for xoob&quot;,
<br>
+                           false, false, xoob_priority, &amp;xoob_priority);
<br>
+
<br>
+    if (xoob_priority &gt; 100) {
<br>
+        xoob_priority = 100;
<br>
+    } else if (xoob_priority &lt; -1) {
<br>
+        xoob_priority = -1;
<br>
+    }
<br>
+}
<br>
+
<br>
&nbsp;/*
<br>
&nbsp;&nbsp;* Init function.  Post non-blocking RML receive to accept incoming
<br>
&nbsp;&nbsp;* connection requests.
<br>
@@ -173,6 +193,15 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return rc;
<br>
&nbsp;}
<br>
&nbsp;
<br>
+static int xoob_query(btl_openib_hca_t *hca)
<br>
+{
<br>
+    if (mca_btl_openib_component.num_xrc_qps &gt; 0) {
<br>
+        return xoob_priority;
<br>
+    }
<br>
+
<br>
+    return -1;
<br>
+}
<br>
+
<br>
&nbsp;/*
<br>
&nbsp;&nbsp;* Finalize function.  Cleanup RML non-blocking receive.
<br>
&nbsp;&nbsp;*/
<br>
@@ -836,24 +865,3 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;free(rem_info-&gt;rem_srqs);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;}
<br>
-
<br>
-#else
<br>
-/* In case if the XRC was disabled during compilation we will print message and return error */
<br>
-static int xoob_init(void)
<br>
-{
<br>
-    printf(&quot;xoob init\n&quot;);
<br>
-    return OMPI_ERR_NOT_IMPLEMENTED;
<br>
-}
<br>
-
<br>
-static int xoob_start_connect(mca_btl_base_endpoint_t *e)
<br>
-{
<br>
-    printf(&quot;xoob start connect\n&quot;);
<br>
-    return OMPI_ERR_NOT_IMPLEMENTED;
<br>
-}
<br>
-
<br>
-static int xoob_finalize(void)
<br>
-{
<br>
-    printf(&quot;xoob finalize\n&quot;);
<br>
-    return OMPI_ERR_NOT_IMPLEMENTED;
<br>
-}
<br>
-#endif
<br>
Index: ompi/mca/btl/openib/btl_openib.c
<br>
===================================================================
<br>
--- ompi/mca/btl/openib/btl_openib.c	(revision 17101)
<br>
+++ ompi/mca/btl/openib/btl_openib.c	(working copy)
<br>
@@ -322,6 +322,15 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* check if the remote proc has a reachable subnet first */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BTL_VERBOSE((&quot;got %d port_infos \n&quot;, ib_proc-&gt;proc_port_count));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(j = 0; j &lt; (int) ib_proc-&gt;proc_port_count; j++){
<br>
+            int rc;
<br>
+
<br>
+            /* Setup connect module */
<br>
+            rc = ompi_btl_openib_connect_base_select(ib_proc-&gt;proc_ports[j].cpclist,
<br>
+                                                     openib_btl-&gt;port_info.cpclist);
<br>
+            if (rc != OMPI_SUCCESS) {
<br>
+                continue;
<br>
+            }
<br>
+
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BTL_VERBOSE((&quot;got a subnet %016x\n&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ib_proc-&gt;proc_ports[j].subnet_id));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(ib_proc-&gt;proc_ports[j].subnet_id ==
<br>
Index: ompi/mca/btl/openib/configure.m4
<br>
===================================================================
<br>
--- ompi/mca/btl/openib/configure.m4	(revision 17101)
<br>
+++ ompi/mca/btl/openib/configure.m4	(working copy)
<br>
@@ -18,7 +18,15 @@
<br>
&nbsp;# $HEADER$
<br>
&nbsp;#
<br>
&nbsp;
<br>
+# MCA_btl_openib_POST_CONFIG([should_build])
<br>
+# ------------------------------------------
<br>
+AC_DEFUN([MCA_btl_openib_POST_CONFIG], [
<br>
+    AS_IF([test $1 -eq 0 -a &quot;$enable_dist&quot; = &quot;yes&quot;],
<br>
+          [AC_MSG_ERROR([BTL openib is disabled but --enable-dist specifed.  This will result in a bad tarball.  Aborting configure.])])
<br>
+    AM_CONDITIONAL([MCA_btl_openib_have_xrc], [test $1 -eq 1 -a &quot;x$btl_openib_have_xrc&quot; = &quot;x1&quot; -a &quot;x$ompi_want_connectx_xrc&quot; = &quot;x1&quot;])
<br>
+])
<br>
&nbsp;
<br>
+
<br>
&nbsp;# MCA_btl_openib_CONFIG([action-if-can-compile], 
<br>
&nbsp;#                      [action-if-cant-compile])
<br>
&nbsp;# ------------------------------------------------
<br>
Index: ompi/mca/btl/openib/btl_openib.h
<br>
===================================================================
<br>
--- ompi/mca/btl/openib/btl_openib.h	(revision 17101)
<br>
+++ ompi/mca/btl/openib/btl_openib.h	(working copy)
<br>
@@ -46,6 +46,8 @@
<br>
&nbsp;#include &quot;ompi/mca/btl/btl.h&quot;
<br>
&nbsp;#include &quot;ompi/mca/btl/base/base.h&quot; 
<br>
&nbsp;
<br>
+#include &quot;connect/connect.h&quot;
<br>
+
<br>
&nbsp;BEGIN_C_DECLS
<br>
&nbsp;
<br>
&nbsp;#define HAVE_XRC (defined(HAVE_IBV_OPEN_XRC_DOMAIN) &amp;&amp; (1 == OMPI_ENABLE_CONNECTX_XRC_SUPPORT))
<br>
@@ -229,6 +231,7 @@
<br>
&nbsp;#if HAVE_XRC
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;uint16_t lid; /* used only in xrc */
<br>
&nbsp;#endif
<br>
+    char *cpclist;
<br>
&nbsp;};
<br>
&nbsp;typedef struct mca_btl_openib_port_info mca_btl_openib_port_info_t;
<br>
&nbsp;
<br>
Index: ompi/mca/btl/openib/Makefile.am
<br>
===================================================================
<br>
--- ompi/mca/btl/openib/Makefile.am	(revision 17101)
<br>
+++ ompi/mca/btl/openib/Makefile.am	(working copy)
<br>
@@ -53,14 +53,18 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;connect/btl_openib_connect_base.c \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;connect/btl_openib_connect_oob.c \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;connect/btl_openib_connect_oob.h \
<br>
-    connect/btl_openib_connect_xoob.c \
<br>
-    connect/btl_openib_connect_xoob.h \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;connect/btl_openib_connect_rdma_cm.c \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;connect/btl_openib_connect_rdma_cm.h \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;connect/btl_openib_connect_ibcm.c \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;connect/btl_openib_connect_ibcm.h \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;connect/connect.h
<br>
&nbsp;
<br>
+if MCA_btl_openib_have_xrc
<br>
+sources += \
<br>
+    connect/btl_openib_connect_xoob.c \
<br>
+    connect/btl_openib_connect_xoob.h
<br>
+endif
<br>
+
<br>
&nbsp;# Make the output library in this directory, and name it either
<br>
&nbsp;# mca_&lt;type&gt;_&lt;name&gt;.la (for DSO builds) or libmca_&lt;type&gt;_&lt;name&gt;.la
<br>
&nbsp;# (for static builds).
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2951.php">Pavel Shamis (Pasha): "Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection enablement"</a>
<li><strong>Previous message:</strong> <a href="2949.php">Rayson Ho: "[OMPI devel] processor affinity -- OpenMPI/batch system integration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2951.php">Pavel Shamis (Pasha): "Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection enablement"</a>
<li><strong>Reply:</strong> <a href="2951.php">Pavel Shamis (Pasha): "Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection enablement"</a>
<li><strong>Reply:</strong> <a href="2953.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection enablement"</a>
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
