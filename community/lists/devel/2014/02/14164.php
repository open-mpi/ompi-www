<?
$subject_val = "[OMPI devel] RFC: new OMPI RTE define:";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 17 17:03:46 2014" -->
<!-- isoreceived="20140217220346" -->
<!-- sent="Mon, 17 Feb 2014 22:03:44 +0000" -->
<!-- isosent="20140217220344" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: new OMPI RTE define:" -->
<!-- id="57F6166C-AB1D-4FDE-9332-FBFEF1B04FED_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: new OMPI RTE define:<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-17 17:03:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14165.php">Brian Barrett: "Re: [OMPI devel] RFC: new OMPI RTE define:"</a>
<li><strong>Previous message:</strong> <a href="14163.php">Josh Hursey: "Re: [OMPI devel] CRS/CRIU: add code to actually checkpoint a process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14165.php">Brian Barrett: "Re: [OMPI devel] RFC: new OMPI RTE define:"</a>
<li><strong>Reply:</strong> <a href="14165.php">Brian Barrett: "Re: [OMPI devel] RFC: new OMPI RTE define:"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: New OMPI_RTE_EVENT_BASE define
<br>
<p>WHY: The usnic BTL needs to run some events asynchronously; the ORTE event base already exists and is running asynchronously in MPI processes
<br>
<p>WHERE: in ompi/mca/rte/rte.h and rte_orte.h
<br>
<p>TIMEOUT: COB Friday, 21 Feb 2014
<br>
<p>MORE DETAIL:
<br>
<p>The WHY line described it pretty well: we want to run some things asynchronously in the usnic BTL and we don't really want to re-invent the wheel (or add yet another thread in each MPI process).  The ORTE event base is already there, there's already a thread servicing it, and Ralph tells me that it is safe to add our own events on to it.
<br>
<p>The patch below adds the new OMPI_RTE_EVENT_BASE #define.
<br>
<p><p>diff --git a/ompi/mca/rte/orte/rte_orte.h b/ompi/mca/rte/orte/rte_orte.h
<br>
index 3c88c6d..3ceadb8 100644
<br>
--- a/ompi/mca/rte/orte/rte_orte.h
<br>
+++ b/ompi/mca/rte/orte/rte_orte.h
<br>
@@ -142,6 +142,9 @@ typedef struct {
<br>
&nbsp;} ompi_orte_tracker_t;
<br>
&nbsp;OBJ_CLASS_DECLARATION(ompi_orte_tracker_t);
<br>
&nbsp;
<br>
+/* define the event base that the RTE exports */
<br>
+#define OMPI_RTE_EVENT_BASE orte_event_base
<br>
+
<br>
&nbsp;END_C_DECLS
<br>
&nbsp;
<br>
&nbsp;#endif /* MCA_OMPI_RTE_ORTE_H */
<br>
diff --git a/ompi/mca/rte/rte.h b/ompi/mca/rte/rte.h
<br>
index 69ad488..de10dff 100644
<br>
--- a/ompi/mca/rte/rte.h
<br>
+++ b/ompi/mca/rte/rte.h
<br>
@@ -150,7 +150,9 @@
<br>
&nbsp;&nbsp;*        a. OMPI_DB_HOSTNAME
<br>
&nbsp;&nbsp;*        b. OMPI_DB_LOCALITY
<br>
&nbsp;&nbsp;*
<br>
- * (g) Communication support
<br>
+ * (g) Asynchronous / event support
<br>
+ *     1. OMPI_RTE_EVENT_BASE - the libevent base that executes in a
<br>
+ *        separate thread
<br>
&nbsp;&nbsp;*
<br>
&nbsp;&nbsp;*/
<br>
&nbsp;
<br>
@@ -162,6 +164,7 @@
<br>
&nbsp;#include &quot;opal/dss/dss_types.h&quot;
<br>
&nbsp;#include &quot;opal/mca/mca.h&quot;
<br>
&nbsp;#include &quot;opal/mca/base/base.h&quot;
<br>
+#include &quot;opal/mca/event/event.h&quot;
<br>
&nbsp;
<br>
&nbsp;BEGIN_C_DECLS
<br>
&nbsp;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14165.php">Brian Barrett: "Re: [OMPI devel] RFC: new OMPI RTE define:"</a>
<li><strong>Previous message:</strong> <a href="14163.php">Josh Hursey: "Re: [OMPI devel] CRS/CRIU: add code to actually checkpoint a process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14165.php">Brian Barrett: "Re: [OMPI devel] RFC: new OMPI RTE define:"</a>
<li><strong>Reply:</strong> <a href="14165.php">Brian Barrett: "Re: [OMPI devel] RFC: new OMPI RTE define:"</a>
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
