<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Dec  5 11:23:38 2005" -->
<!-- isoreceived="20051205162338" -->
<!-- sent="Mon, 5 Dec 2005 18:22:41 +0200" -->
<!-- isosent="20051205162241" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="[PATH] ompi_info doesn't show use_mem_hooks flag" -->
<!-- id="20051205162241.GB19290_at_minantech.com" -->
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
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-12-05 11:22:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0584.php">Galen M. Shipman: "Re:  [PATH] ompi_info doesn't show use_mem_hooks flag"</a>
<li><strong>Previous message:</strong> <a href="0582.php">Jeff Squyres: "Re:  mailing list web archive oddity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0584.php">Galen M. Shipman: "Re:  [PATH] ompi_info doesn't show use_mem_hooks flag"</a>
<li><strong>Reply:</strong> <a href="0584.php">Galen M. Shipman: "Re:  [PATH] ompi_info doesn't show use_mem_hooks flag"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is because there is no &quot;mpool_base&quot; mca (see patch).
<br>
<p>Also there is a code commented out that enables memory hooks if
<br>
leave_pinned is set. Why this code is disabled? Infiniband will
<br>
not work correctly in such setup.
<br>
<p>Index: ompi/mca/mpool/base/mpool_base_open.c
<br>
===================================================================
<br>
--- ompi/mca/mpool/base/mpool_base_open.c	(revision 8378)
<br>
+++ ompi/mca/mpool/base/mpool_base_open.c	(working copy)
<br>
@@ -77,7 +77,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* check for use_mem_hooks (for diagnostics/testing) 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* however if leave_pinned is set we force this to be enabled
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
<br>
-    mca_base_param_reg_int_name(&quot;mpool_base&quot;, 
<br>
+    mca_base_param_reg_int_name(&quot;mpool&quot;, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;use_mem_hooks&quot;, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;use memory hooks for deregistering freed memory&quot;,
<br>
<pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0584.php">Galen M. Shipman: "Re:  [PATH] ompi_info doesn't show use_mem_hooks flag"</a>
<li><strong>Previous message:</strong> <a href="0582.php">Jeff Squyres: "Re:  mailing list web archive oddity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0584.php">Galen M. Shipman: "Re:  [PATH] ompi_info doesn't show use_mem_hooks flag"</a>
<li><strong>Reply:</strong> <a href="0584.php">Galen M. Shipman: "Re:  [PATH] ompi_info doesn't show use_mem_hooks flag"</a>
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
