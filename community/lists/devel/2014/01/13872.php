<?
$subject_val = "[OMPI devel] mca_bml_r2_del_btl incorrect memory size reallocation?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 23 03:57:12 2014" -->
<!-- isoreceived="20140123085712" -->
<!-- sent="Thu, 23 Jan 2014 09:57:09 +0100 (CET)" -->
<!-- isosent="20140123085709" -->
<!-- name="Christoph Niethammer" -->
<!-- email="niethammer_at_[hidden]" -->
<!-- subject="[OMPI devel] mca_bml_r2_del_btl incorrect memory size reallocation?" -->
<!-- id="305888627.552760.1390467429517.JavaMail.root_at_hlrs.de" -->
<!-- charset="utf-8" -->
<!-- inreplyto="1765749621.552480.1390466578730.JavaMail.root_at_hlrs.de" -->
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
<strong>Subject:</strong> [OMPI devel] mca_bml_r2_del_btl incorrect memory size reallocation?<br>
<strong>From:</strong> Christoph Niethammer (<em>niethammer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-23 03:57:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13873.php">Ralph Castain: "Re: [OMPI devel] 1.7.4 status update"</a>
<li><strong>Previous message:</strong> <a href="13871.php">Paul Hargrove: "[OMPI devel] trunk: typo in error message"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13882.php">Ralph Castain: "Re: [OMPI devel] mca_bml_r2_del_btl incorrect memory size reallocation?"</a>
<li><strong>Reply:</strong> <a href="13882.php">Ralph Castain: "Re: [OMPI devel] mca_bml_r2_del_btl incorrect memory size reallocation?"</a>
<li><strong>Reply:</strong> <a href="13885.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mca_bml_r2_del_btl incorrect memory size reallocation?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello
<br>
<p>I think I found a minor memory bug in the bml_r2 code in function mca_bml_r2_del_btl but I could not figure out when this function ever gets called.
<br>
How can I test this function in a proper way?
<br>
<p>Here the diff showing the issue:
<br>
<p>@@ -699,11 +699,11 @@ static int mca_bml_r2_del_btl(mca_btl_base_module_t* btl)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!found) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* doesn't even exist */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;goto CLEANUP;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* remove from bml list */
<br>
-    modules = (mca_btl_base_module_t**)malloc(sizeof(mca_btl_base_module_t*) * mca_bml_r2.num_btl_modules-1);
<br>
+    modules = (mca_btl_base_module_t**)malloc(sizeof(mca_btl_base_module_t*) * (mca_bml_r2.num_btl_modules-1));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(i=0,m=0; i&lt;mca_bml_r2.num_btl_modules; i++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(mca_bml_r2.btl_modules[i] != btl) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;modules[m++] = mca_bml_r2.btl_modules[i];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p><p>Regards
<br>
Christoph
<br>
<p><pre>
--
Christoph Niethammer
High Performance Computing Center Stuttgart (HLRS)
Nobelstrasse 19
70569 Stuttgart
Tel: ++49(0)711-685-87203
email: niethammer_at_[hidden]
<a href="http://www.hlrs.de/people/niethammer">http://www.hlrs.de/people/niethammer</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13873.php">Ralph Castain: "Re: [OMPI devel] 1.7.4 status update"</a>
<li><strong>Previous message:</strong> <a href="13871.php">Paul Hargrove: "[OMPI devel] trunk: typo in error message"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13882.php">Ralph Castain: "Re: [OMPI devel] mca_bml_r2_del_btl incorrect memory size reallocation?"</a>
<li><strong>Reply:</strong> <a href="13882.php">Ralph Castain: "Re: [OMPI devel] mca_bml_r2_del_btl incorrect memory size reallocation?"</a>
<li><strong>Reply:</strong> <a href="13885.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mca_bml_r2_del_btl incorrect memory size reallocation?"</a>
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
