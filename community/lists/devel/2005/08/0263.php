<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug 29 11:30:47 2005" -->
<!-- isoreceived="20050829163047" -->
<!-- sent="Mon, 29 Aug 2005 18:30:45 +0200" -->
<!-- isosent="20050829163045" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="small shell quoting issue" -->
<!-- id="20050829163045.GC23605_at_iam.uni-bonn.de" -->
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
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-29 11:30:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0264.php">Brad Penoff: "Re:  pml vs bml vs btl"</a>
<li><strong>Previous message:</strong> <a href="0262.php">Gleb Natapov: "Re:  OpenIB results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0265.php">Jeff Squyres: "Re:  small shell quoting issue"</a>
<li><strong>Reply:</strong> <a href="0265.php">Jeff Squyres: "Re:  small shell quoting issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
A small patch: On one hand, Bourne shells do not do word splitting after
<br>
parameter expansion and command substitution, of stuff on the right hand
<br>
side of an assignment.  On the other hand, nested quotes within
<br>
backquotes are not portable.  (This is also documented in the Autoconf
<br>
manual).
<br>
<p>Examples:
<br>
&nbsp;foo=&quot;$bar&quot;;  baz=&quot;`ls`&quot;
<br>
is completely equivalent to
<br>
&nbsp;foo=$bar;    baz=`ls`
<br>
<p>and this:
<br>
&nbsp;foo=&quot;`echo \&quot;bla\&quot;`&quot;
<br>
does not work with pdksh in posix mode, but this
<br>
&nbsp;foo=`echo &quot;bla&quot;`
<br>
works everywhere.
<br>
<p>By the way, between the keywords &quot;case&quot; and &quot;in&quot;, word splitting is not
<br>
done either.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* config/ompi_get_version.m4 (OMPI_GET_VERSION): Fix nested
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;quoting.
<br>
<p>Index: config/ompi_get_version.m4
<br>
===================================================================
<br>
--- config/ompi_get_version.m4	(Revision 7073)
<br>
+++ config/ompi_get_version.m4	(Arbeitskopie)
<br>
@@ -58,9 +58,9 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if test &quot;$gv_want_svn&quot; = &quot;1&quot;; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if test &quot;$gv_svn_r&quot; = &quot;-1&quot;; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if test -d &quot;$srcdir/.svn&quot;; then
<br>
-                ver=&quot;r`svnversion \&quot;$srcdir\&quot;`&quot;
<br>
+                ver=r`svnversion &quot;$srcdir&quot;`
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else
<br>
-                ver=&quot;svn`date '+%m%d%Y'`&quot;
<br>
+                ver=svn`date '+%m%d%Y'`
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;gv_svn_r=&quot;$ver&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fi
<br>
<p>&nbsp;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0264.php">Brad Penoff: "Re:  pml vs bml vs btl"</a>
<li><strong>Previous message:</strong> <a href="0262.php">Gleb Natapov: "Re:  OpenIB results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0265.php">Jeff Squyres: "Re:  small shell quoting issue"</a>
<li><strong>Reply:</strong> <a href="0265.php">Jeff Squyres: "Re:  small shell quoting issue"</a>
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
