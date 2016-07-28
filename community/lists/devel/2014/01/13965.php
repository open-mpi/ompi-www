<?
$subject_val = "Re: [OMPI devel] Don't try to call orte_show_help() before orte_init() succeeds";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 31 10:00:27 2014" -->
<!-- isoreceived="20140131150027" -->
<!-- sent="Fri, 31 Jan 2014 16:00:26 +0100" -->
<!-- isosent="20140131150026" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Don't try to call orte_show_help() before orte_init() succeeds" -->
<!-- id="4757B534-6BC6-418C-AEBA-D28DBDFF0332_at_icl.utk.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="52EBB7FF.7000406_at_cs.tu-chemnitz.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Don't try to call orte_show_help() before orte_init() succeeds<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-31 10:00:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13966.php">Paul Hargrove: "[OMPI devel] oshmem link failure on trunk"</a>
<li><strong>Previous message:</strong> <a href="13964.php">Ren&#233; Oertel: "[OMPI devel] Don't try to call orte_show_help() before orte_init() succeeds"</a>
<li><strong>In reply to:</strong> <a href="13964.php">Ren&#233; Oertel: "[OMPI devel] Don't try to call orte_show_help() before orte_init() succeeds"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rene,
<br>
<p>The code reads 
<br>
<p><p>+        /* If ORTE was not setup yet, don't use orte_show_help */
<br>
+        if (orte_setup) {
<br>
+            orte_show_help(&quot;help-mpi-runtime&quot;,
<br>
+                           &quot;mpi_init:startup:internal-failure&quot;, true,
<br>
+                           &quot;MPI_INIT&quot;, &quot;MPI_INIT&quot;, error, err_msg, ret);
<br>
+        } else {
<br>
+            opal_show_help(&quot;help-mpi-runtime&quot;,
<br>
+                           &quot;mpi_init:startup:internal-failure&quot;, true,
<br>
+                           &quot;MPI_INIT&quot;, &quot;MPI_INIT&quot;, error, err_msg, ret);
<br>
+        }
<br>
<p><p>The difference is indeed very subtle: in one case we call ORTE_show_help while on the other we call OPAL_show_help. Exactly as the log message indicates. 
<br>
<p>&nbsp;&nbsp;George.
<br>
<p>On Jan 31, 2014, at 15:49 , Ren&#233; Oertel &lt;rene.oertel_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear OpenMPI developers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think the source code modification titled
</span><br>
<span class="quotelev1">&gt; &quot;Ensure that we don't try to call orte_show_help() before orte_init()
</span><br>
<span class="quotelev1">&gt; succeeds.&quot; is buggy (see [1] at lines 755-763).
</span><br>
<span class="quotelev1">&gt; There is no difference between the if and the else path of the code,
</span><br>
<span class="quotelev1">&gt; i.e. checking orte_setup/rte_setup makes no sense.
</span><br>
<span class="quotelev1">&gt; You will find the erroneous code below the 'error' label in
</span><br>
<span class="quotelev1">&gt; ompi/runtime/ompi_mpi_init.c in SVN trunk, too.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kind regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ren&#233;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [1]
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi-svn-mirror/commit/b200ea0e1554d40ed4948f9823fc6dd7b0cc3ba6#diff-3673b21a7f42dc0665ea4470b3171df1">https://github.com/open-mpi/ompi-svn-mirror/commit/b200ea0e1554d40ed4948f9823fc6dd7b0cc3ba6#diff-3673b21a7f42dc0665ea4470b3171df1</a>
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13966.php">Paul Hargrove: "[OMPI devel] oshmem link failure on trunk"</a>
<li><strong>Previous message:</strong> <a href="13964.php">Ren&#233; Oertel: "[OMPI devel] Don't try to call orte_show_help() before orte_init() succeeds"</a>
<li><strong>In reply to:</strong> <a href="13964.php">Ren&#233; Oertel: "[OMPI devel] Don't try to call orte_show_help() before orte_init() succeeds"</a>
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
