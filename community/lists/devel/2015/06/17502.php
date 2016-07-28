<?
$subject_val = "[OMPI devel] Typo in opal/mca/dl/dl.h";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 15 15:43:37 2015" -->
<!-- isoreceived="20150615194337" -->
<!-- sent="Mon, 15 Jun 2015 19:43:35 +0000" -->
<!-- isosent="20150615194335" -->
<!-- name="Atchley, Scott" -->
<!-- email="atchleyes_at_[hidden]" -->
<!-- subject="[OMPI devel] Typo in opal/mca/dl/dl.h" -->
<!-- id="DA7C4755-FE89-41C6-98E2-9262845AC7EA_at_ornl.gov" -->
<!-- charset="Windows-1252" -->
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
<strong>Subject:</strong> [OMPI devel] Typo in opal/mca/dl/dl.h<br>
<strong>From:</strong> Atchley, Scott (<em>atchleyes_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-15 15:43:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17503.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Typo in opal/mca/dl/dl.h"</a>
<li><strong>Previous message:</strong> <a href="17501.php">Howard Pritchard: "Re: [OMPI devel] ompi forking tomorrow"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17503.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Typo in opal/mca/dl/dl.h"</a>
<li><strong>Reply:</strong> <a href="17503.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Typo in opal/mca/dl/dl.h"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This header file&#146;s macro name does not match OMPI style.
<br>
<p>Typically, the macro name is FRAMEWORK_COMPONENT_H. Note, the #endif at the 
<br>
end of the file is correct (i.e. OPAL_DL_H).
<br>
<p>Signed-off-by: Scott Atchley &lt;atchleyes_at_[hidden]&gt;
<br>
<p>diff --git a/opal/mca/dl/dl.h b/opal/mca/dl/dl.h
<br>
index 7c6d2ef..1e92c1a 100644
<br>
--- a/opal/mca/dl/dl.h
<br>
+++ b/opal/mca/dl/dl.h
<br>
@@ -44,8 +44,8 @@
<br>
&nbsp;&nbsp;* like a good solution.
<br>
&nbsp;&nbsp;*/
<br>
&nbsp;
<br>
-#ifndef MCA_DLOPEN_H
<br>
-#define MCA_DLOPEN_H
<br>
+#ifndef OPAL_DL_H
<br>
+#define OPAL_DL_H
<br>
&nbsp;
<br>
&nbsp;#include &quot;opal_config.h&quot;
<br>
&nbsp;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17503.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Typo in opal/mca/dl/dl.h"</a>
<li><strong>Previous message:</strong> <a href="17501.php">Howard Pritchard: "Re: [OMPI devel] ompi forking tomorrow"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17503.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Typo in opal/mca/dl/dl.h"</a>
<li><strong>Reply:</strong> <a href="17503.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Typo in opal/mca/dl/dl.h"</a>
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
