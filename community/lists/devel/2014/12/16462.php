<?
$subject_val = "Re: [OMPI devel] Patch proposed: opal_set_using_threads(true) in	ompi/runtime/ompi_mpi_init.c is called to late";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  9 03:32:54 2014" -->
<!-- isoreceived="20141209083254" -->
<!-- sent="Tue, 9 Dec 2014 08:32:52 +0000" -->
<!-- isosent="20141209083252" -->
<!-- name="Pascal Deveze" -->
<!-- email="pascal.deveze_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Patch proposed: opal_set_using_threads(true) in	ompi/runtime/ompi_mpi_init.c is called to late" -->
<!-- id="DC31D20C207C9643AEEE0D83E753E5C98288B9AD_at_BUMSG3WM.fr.ad.bull.net" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="32944A46-999E-4A1A-82C3-2F40E10F736D_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Patch proposed: opal_set_using_threads(true) in	ompi/runtime/ompi_mpi_init.c is called to late<br>
<strong>From:</strong> Pascal Deveze (<em>pascal.deveze_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-09 03:32:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16463.php">Ralph Castain: "Re: [OMPI devel] Patch proposed: opal_set_using_threads(true) in ompi/runtime/ompi_mpi_init.c is called to late"</a>
<li><strong>Previous message:</strong> <a href="16461.php">Ralph Castain: "Re: [OMPI devel] Patch proposed: opal_set_using_threads(true) in ompi/runtime/ompi_mpi_init.c is called to late"</a>
<li><strong>In reply to:</strong> <a href="16461.php">Ralph Castain: "Re: [OMPI devel] Patch proposed: opal_set_using_threads(true) in ompi/runtime/ompi_mpi_init.c is called to late"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16463.php">Ralph Castain: "Re: [OMPI devel] Patch proposed: opal_set_using_threads(true) in ompi/runtime/ompi_mpi_init.c is called to late"</a>
<li><strong>Reply:</strong> <a href="16463.php">Ralph Castain: "Re: [OMPI devel] Patch proposed: opal_set_using_threads(true) in ompi/runtime/ompi_mpi_init.c is called to late"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>This in in the trunk.
<br>
<p>De : devel [mailto:devel-bounces_at_[hidden]] De la part de Ralph Castain
<br>
Envoy&#233; : mardi 9 d&#233;cembre 2014 09:32
<br>
&#192; : Open MPI Developers
<br>
Objet : Re: [OMPI devel] Patch proposed: opal_set_using_threads(true) in ompi/runtime/ompi_mpi_init.c is called to late
<br>
<p>Hi Pascal
<br>
<p>Is this in the trunk or in the 1.8 series (or both)?
<br>
<p><p>On Dec 9, 2014, at 12:28 AM, Pascal Deveze &lt;pascal.deveze_at_[hidden]&lt;mailto:pascal.deveze_at_[hidden]&gt;&gt; wrote:
<br>
<p><p>In case where MPI is compiled with --enable-mpi-thread-multiple, a call to opal_using_threads() always returns 0 in the routine btl_xxx_component_init() of the BTLs, event if the application calls MPI_Init_thread() with MPI_THREAD_MULTIPLE.
<br>
<p>This is because opal_set_using_threads(true) in ompi/runtime/ompi_mpi_init.c is called to late.
<br>
<p>I propose the following patch that solves the problem for me:
<br>
<p>diff --git a/ompi/runtime/ompi_mpi_init.c b/ompi/runtime/ompi_mpi_init.c
<br>
index 35509cf..c2370fc 100644
<br>
--- a/ompi/runtime/ompi_mpi_init.c
<br>
+++ b/ompi/runtime/ompi_mpi_init.c
<br>
@@ -512,6 +512,13 @@ int ompi_mpi_init(int argc, char **argv, int requested, int *provided)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
#endif
<br>
<p>+    /* If thread support was enabled, then setup OPAL to allow for
<br>
+       them. */
<br>
+    if ((OPAL_ENABLE_PROGRESS_THREADS == 1) ||
<br>
+        (*provided != MPI_THREAD_SINGLE)) {
<br>
+        opal_set_using_threads(true);
<br>
+    }
<br>
+
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* initialize datatypes. This step should be done early as it will
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* create the local convertor and local arch used in the proc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* init.
<br>
@@ -724,13 +731,6 @@ int ompi_mpi_init(int argc, char **argv, int requested, int *provided)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;goto error;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>-    /* If thread support was enabled, then setup OPAL to allow for
<br>
-       them. */
<br>
-    if ((OPAL_ENABLE_PROGRESS_THREADS == 1) ||
<br>
-        (*provided != MPI_THREAD_SINGLE)) {
<br>
-        opal_set_using_threads(true);
<br>
-    }
<br>
-
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* start PML/BTL's */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ret = MCA_PML_CALL(enable(true));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if( OMPI_SUCCESS != ret ) {
<br>
_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16459.php">http://www.open-mpi.org/community/lists/devel/2014/12/16459.php</a>
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16462/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16463.php">Ralph Castain: "Re: [OMPI devel] Patch proposed: opal_set_using_threads(true) in ompi/runtime/ompi_mpi_init.c is called to late"</a>
<li><strong>Previous message:</strong> <a href="16461.php">Ralph Castain: "Re: [OMPI devel] Patch proposed: opal_set_using_threads(true) in ompi/runtime/ompi_mpi_init.c is called to late"</a>
<li><strong>In reply to:</strong> <a href="16461.php">Ralph Castain: "Re: [OMPI devel] Patch proposed: opal_set_using_threads(true) in ompi/runtime/ompi_mpi_init.c is called to late"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16463.php">Ralph Castain: "Re: [OMPI devel] Patch proposed: opal_set_using_threads(true) in ompi/runtime/ompi_mpi_init.c is called to late"</a>
<li><strong>Reply:</strong> <a href="16463.php">Ralph Castain: "Re: [OMPI devel] Patch proposed: opal_set_using_threads(true) in ompi/runtime/ompi_mpi_init.c is called to late"</a>
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
