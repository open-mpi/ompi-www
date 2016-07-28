<?
$subject_val = "[OMPI devel] [2.0.0rc2] misleading error message from configure";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  2 23:19:18 2016" -->
<!-- isoreceived="20160503031918" -->
<!-- sent="Mon, 2 May 2016 20:19:11 -0700" -->
<!-- isosent="20160503031911" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] [2.0.0rc2] misleading error message from configure" -->
<!-- id="CAAvDA14qg2WjG4huGhKhTjwrEHzMgKrsbyJgoQ5msDyDqBMCDQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] [2.0.0rc2] misleading error message from configure<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-02 23:19:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18890.php">Paul Hargrove: "[OMPI devel] [2.0.0rc2] NetBSD build failure (ompio)"</a>
<li><strong>Previous message:</strong> <a href="18888.php">Ralph Castain: "Re: [OMPI devel] [2.0.0rc2] xlc build failure (pmix)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18901.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [2.0.0rc2] misleading error message from configure"</a>
<li><strong>Reply:</strong> <a href="18901.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [2.0.0rc2] misleading error message from configure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I can see why no competent OMPI developer ever encountered the following
<br>
cut-and-paste error:
<br>
<p>diff --git a/config/opal_mca.m4 b/config/opal_mca.m4
<br>
index 1ec342c..d3a7075 100644
<br>
--- a/config/opal_mca.m4
<br>
+++ b/config/opal_mca.m4
<br>
@@ -86,7 +86,7 @@ AC_DEFUN([OPAL_MCA],[
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if test &quot;$enable_mca_no_build&quot; = &quot;yes&quot;; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_MSG_RESULT([yes])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_MSG_ERROR([*** The enable-mca-no-build flag requires an
<br>
explicit list
<br>
-*** of type-component pairs.  For example, --enable-mca-direct=pml-ob1])
<br>
+*** of type-component pairs.  For example, --enable-mca-no-build=pml-ob1])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ifs_save=&quot;$IFS&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IFS=&quot;${IFS}$PATH_SEPARATOR,&quot;
<br>
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18889/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18890.php">Paul Hargrove: "[OMPI devel] [2.0.0rc2] NetBSD build failure (ompio)"</a>
<li><strong>Previous message:</strong> <a href="18888.php">Ralph Castain: "Re: [OMPI devel] [2.0.0rc2] xlc build failure (pmix)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18901.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [2.0.0rc2] misleading error message from configure"</a>
<li><strong>Reply:</strong> <a href="18901.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [2.0.0rc2] misleading error message from configure"</a>
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
