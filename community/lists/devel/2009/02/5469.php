<?
$subject_val = "[OMPI devel] [PATCH] printf.h: fix typo";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 19 07:29:59 2009" -->
<!-- isoreceived="20090219122959" -->
<!-- sent="Thu, 19 Feb 2009 13:29:45 +0100" -->
<!-- isosent="20090219122945" -->
<!-- name="Bert Wesarg" -->
<!-- email="bert.wesarg_at_[hidden]" -->
<!-- subject="[OMPI devel] [PATCH] printf.h: fix typo" -->
<!-- id="1235046585-20248-5-git-send-email-bert.wesarg_at_googlemail.com" -->
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
<strong>Subject:</strong> [OMPI devel] [PATCH] printf.h: fix typo<br>
<strong>From:</strong> Bert Wesarg (<em>bert.wesarg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-19 07:29:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5470.php">Bert Wesarg: "[OMPI devel] [PATCH 2/4] opal-ps: fix header length calculus"</a>
<li><strong>Previous message:</strong> <a href="5468.php">Bert Wesarg: "[OMPI devel] [PATCH 4/4] opal-ps: function for printing dahsed line."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
From: Bert Wesarg &lt;Bert.Wesarg_at_[hidden]&gt;
<br>
<p>Regards,
<br>
Bert Wesarg
<br>
<pre>
---
 opal/util/printf.h |    4 ++--
 1 file changed, 2 insertions(+), 2 deletions(-)
diff --quilt old/opal/util/printf.h new/opal/util/printf.h
--- old/opal/util/printf.h
+++ new/opal/util/printf.h
@@ -83,7 +83,7 @@ OPAL_DECLSPEC int  opal_vsnprintf(char *
  * string that specifies how subsequent arguments are converted for
  * output.
  *
- * @param *ptr  Pointer to utput string buffer
+ * @param *ptr  Pointer to output string buffer
  * @param fmt   Output format
  * @return      Length of output string
  *
@@ -106,7 +106,7 @@ OPAL_DECLSPEC int  opal_asprintf(char **
  * variable-length argument facilities of stdarg(3) are converted for
  * output.
  *
- * @param *ptr  Pointer to utput string buffer
+ * @param *ptr  Pointer to output string buffer
  * @param fmt   Output format
  * @param ap    Variable argument list pointer
  * @return      Length of output string
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5470.php">Bert Wesarg: "[OMPI devel] [PATCH 2/4] opal-ps: fix header length calculus"</a>
<li><strong>Previous message:</strong> <a href="5468.php">Bert Wesarg: "[OMPI devel] [PATCH 4/4] opal-ps: function for printing dahsed line."</a>
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
