<?
$subject_val = "[OMPI devel] RFC: extend MTL API";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  1 10:45:40 2011" -->
<!-- isoreceived="20110701144540" -->
<!-- sent="Fri, 1 Jul 2011 17:45:35 +0300" -->
<!-- isosent="20110701144535" -->
<!-- name="Mike Dubman" -->
<!-- email="mike.ompi_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: extend MTL API" -->
<!-- id="BANLkTinun+5N1TWKoT5g7z_VqJijC7qUrw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: extend MTL API<br>
<strong>From:</strong> Mike Dubman (<em>mike.ompi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-01 10:45:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9453.php">Colon, Joseanibal: "[OMPI devel] Question about hanging mpirun"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/06/9451.php">Ralph Castain: "Re: [OMPI devel] Trunk problem: VT breakage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9472.php">George Bosilca: "Re: [OMPI devel] [devel-core] RFC: extend MTL API"</a>
<li><strong>Reply:</strong> <a href="9472.php">George Bosilca: "Re: [OMPI devel] [devel-core] RFC: extend MTL API"</a>
<li><strong>Reply:</strong> <a href="9508.php">Barrett, Brian W: "Re: [OMPI devel] [devel-core] RFC: extend MTL API"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: Adding communicator add/delete callbacks to MTL.
<br>
<p>WHY: MTL will be able to separate messages on different contexts.
<br>
<p>WHEN: On trunk (later on v1.5 as well), Tuesday telconf, 5 July 2011
<br>
<p>TIMEOUT: Tuesday telconf, 12 July 2011
<br>
DETAILS:
<br>
<p>&nbsp;Currently MTLs do no handle communicator contexts in any special way,
<br>
they only add the context id to the tag selection of the underlying
<br>
messaging meachinsm.
<br>
<p>&nbsp;We would like to enable an MTL to maintain its own context data
<br>
per-communicator. This way an MTL will be able to queue incoming eager
<br>
messages and rendezvous requests per-communicator basis.
<br>
<p>&nbsp;The MTL will be allowed to override comm-&gt;c_pml_comm member,
<br>
since it's unused in pml_cm anyway.
<br>
<p><p>diff -r 0f757f8f3efb -r 8fcf276ee527 ompi/mca/mtl/mtl.h
<br>
--- a/ompi/mca/mtl/mtl.h Thu Jun 30 14:13:33 2011 +0300
<br>
+++ b/ompi/mca/mtl/mtl.h Fri Jul 01 13:54:20 2011 +0300
<br>
@@ -355,6 +355,34 @@
<br>
<p><p>&nbsp;/**
<br>
+ * Downcall from PML layer when a new communicator is created.
<br>
+ *
<br>
+ * @param comm  Communicator
<br>
+ * @return      OMPI_SUCCESS or failure status.
<br>
+ *
<br>
+ * Provides the MTL the opportunity to initialize/cache a data structure
<br>
+ * on the communicator.
<br>
+ */
<br>
+typedef int (*mca_mtl_base_module_add_comm_fn_t)(
<br>
+                          struct mca_mtl_base_module_t* mtl,
<br>
+                          struct ompi_communicator_t* comm);
<br>
+
<br>
+
<br>
+/**
<br>
+ * Downcall from PML layer when a communicator is destroyed.
<br>
+ *
<br>
+ * @param comm  Communicator
<br>
+ * @return      OMPI_SUCCESS or failure status.
<br>
+ *
<br>
+ * Provides the MTL the opportunity to cleanup any datastructures
<br>
+ * associated with the communicator.
<br>
+ */
<br>
+typedef int (*mca_mtl_base_module_del_comm_fn_t)(
<br>
+                          struct mca_mtl_base_module_t* mtl,
<br>
+                          struct ompi_communicator_t* comm);
<br>
+
<br>
+
<br>
+/**
<br>
&nbsp;&nbsp;* MTL module interface functions and attributes.
<br>
&nbsp;&nbsp;*/
<br>
&nbsp;struct mca_mtl_base_module_t {
<br>
@@ -368,7 +396,6 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_mtl_base_module_add_procs_fn_t   mtl_add_procs;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_mtl_base_module_del_procs_fn_t   mtl_del_procs;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_mtl_base_module_finalize_fn_t    mtl_finalize;
<br>
-
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_mtl_base_module_send_fn_t        mtl_send;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_mtl_base_module_isend_fn_t       mtl_isend;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_mtl_base_module_irecv_fn_t       mtl_irecv;
<br>
@@ -376,6 +403,8 @@
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Optional MTL functions */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_mtl_base_module_cancel_fn_t      mtl_cancel;
<br>
+    mca_mtl_base_module_add_comm_fn_t    mtl_add_comm;
<br>
+    mca_mtl_base_module_del_comm_fn_t    mtl_del_comm;
<br>
&nbsp;};
<br>
&nbsp;typedef struct mca_mtl_base_module_t mca_mtl_base_module_t;
<br>
<p>diff -r 0f757f8f3efb -r 8fcf276ee527 ompi/mca/pml/cm/pml_cm.c
<br>
--- a/ompi/mca/pml/cm/pml_cm.c Thu Jun 30 14:13:33 2011 +0300
<br>
+++ b/ompi/mca/pml/cm/pml_cm.c Fri Jul 01 13:54:20 2011 +0300
<br>
@@ -82,14 +82,22 @@
<br>
&nbsp;int
<br>
&nbsp;mca_pml_cm_add_comm(ompi_communicator_t* comm)
<br>
&nbsp;{
<br>
+    int ret;
<br>
+
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* should never happen, but it was, so check */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (comm-&gt;c_contextid &gt; ompi_pml_cm.super.pml_max_contextid) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return OMPI_ERR_OUT_OF_RESOURCE;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>-    /* setup our per-communicator data */
<br>
+    /* initialize per-communicator data. MTLs may override this. */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;comm-&gt;c_pml_comm = NULL;
<br>
<p>+    /* notify the MTL about the added communicator */
<br>
+    if ((NULL != ompi_mtl-&gt;mtl_add_comm) &amp;&amp;
<br>
+        (OMPI_SUCCESS != (ret = OMPI_MTL_CALL(add_comm(ompi_mtl, comm)))))
<br>
{
<br>
+        return ret;
<br>
+    }
<br>
+
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return OMPI_SUCCESS;
<br>
&nbsp;}
<br>
<p>@@ -97,8 +105,13 @@
<br>
&nbsp;int
<br>
&nbsp;mca_pml_cm_del_comm(ompi_communicator_t* comm)
<br>
&nbsp;{
<br>
-    /* clean up our per-communicator data */
<br>
-    comm-&gt;c_pml_comm = NULL;
<br>
+    int ret;
<br>
+
<br>
+    /* notify the MTL about the deleted communicator */
<br>
+    if ((NULL != ompi_mtl-&gt;mtl_del_comm) &amp;&amp;
<br>
+        (OMPI_SUCCESS != (ret = OMPI_MTL_CALL(del_comm(ompi_mtl, comm)))))
<br>
{
<br>
+        return ret;
<br>
+    }
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return OMPI_SUCCESS;
<br>
&nbsp;}
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9452/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9453.php">Colon, Joseanibal: "[OMPI devel] Question about hanging mpirun"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/06/9451.php">Ralph Castain: "Re: [OMPI devel] Trunk problem: VT breakage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9472.php">George Bosilca: "Re: [OMPI devel] [devel-core] RFC: extend MTL API"</a>
<li><strong>Reply:</strong> <a href="9472.php">George Bosilca: "Re: [OMPI devel] [devel-core] RFC: extend MTL API"</a>
<li><strong>Reply:</strong> <a href="9508.php">Barrett, Brian W: "Re: [OMPI devel] [devel-core] RFC: extend MTL API"</a>
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
