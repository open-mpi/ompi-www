<?
$subject_val = "[OMPI devel] [PATCH] orte: Do not call tcgetattr on pipe descriptor";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 10 16:40:37 2013" -->
<!-- isoreceived="20130910204037" -->
<!-- sent="Tue, 10 Sep 2013 22:40:31 +0200" -->
<!-- isosent="20130910204031" -->
<!-- name="Micha&#197;&#130; Pecio" -->
<!-- email="michal.pecio_at_[hidden]" -->
<!-- subject="[OMPI devel] [PATCH] orte: Do not call tcgetattr on pipe descriptor" -->
<!-- id="20130910224031.5ca8b6a7_at_gmail.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20130910223156.5cef91d7_at_gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] [PATCH] orte: Do not call tcgetattr on pipe descriptor<br>
<strong>From:</strong> Micha&#197;&#130; Pecio (<em>michal.pecio_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-10 16:40:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12883.php">Max Staufer: "[OMPI devel] Nearly unlimited growth of pml free list"</a>
<li><strong>Previous message:</strong> <a href="12881.php">Rolf vandeVaart: "[OMPI devel] RFC: Remove alignment code from rcache"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12904.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH] orte: Do not call tcgetattr on pipe descriptor"</a>
<li><strong>Reply:</strong> <a href="12904.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH] orte: Do not call tcgetattr on pipe descriptor"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The function orte_iof_base_setup_prefork attempts to create a pty for
<br>
child stdout and falls back to plain pipe if openpty fails. Child uses
<br>
the 'usepty' flag to decide whether to treat this descriptor as a pty
<br>
or as a pipe.
<br>
Set 'usepty' flag to 0 upon openpty failure to inform the child that
<br>
it isn't dealing with a pty even though pty has been requested.
<br>
<p><p>Patch applies against svn trunk and v1.6.5, where I found this issue.
<br>
<p><p>Index: orte/mca/iof/base/iof_base_setup.c
<br>
===================================================================
<br>
--- orte/mca/iof/base/iof_base_setup.c  (revision 29155)
<br>
+++ orte/mca/iof/base/iof_base_setup.c  (working copy)
<br>
@@ -94,6 +94,7 @@
<br>
&nbsp;#endif
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (ret &lt; 0) {
<br>
+        opts-&gt;usepty = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (pipe(opts-&gt;p_stdout) &lt; 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ORTE_ERROR_LOG(ORTE_ERR_SYS_LIMITS_PIPES);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return ORTE_ERR_SYS_LIMITS_PIPES;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12883.php">Max Staufer: "[OMPI devel] Nearly unlimited growth of pml free list"</a>
<li><strong>Previous message:</strong> <a href="12881.php">Rolf vandeVaart: "[OMPI devel] RFC: Remove alignment code from rcache"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12904.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH] orte: Do not call tcgetattr on pipe descriptor"</a>
<li><strong>Reply:</strong> <a href="12904.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH] orte: Do not call tcgetattr on pipe descriptor"</a>
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
