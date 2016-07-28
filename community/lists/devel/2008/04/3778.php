<?
$subject_val = "[OMPI devel] forgetting to run ./autogen.sh should not be fatal";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 29 14:46:14 2008" -->
<!-- isoreceived="20080429184614" -->
<!-- sent="Tue, 29 Apr 2008 20:45:59 +0200" -->
<!-- isosent="20080429184559" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="[OMPI devel] forgetting to run ./autogen.sh should not be fatal" -->
<!-- id="20080429184559.GF26023_at_ins.uni-bonn.de" -->
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
<strong>Subject:</strong> [OMPI devel] forgetting to run ./autogen.sh should not be fatal<br>
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-29 14:45:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3779.php">Josh Hursey: "[OMPI devel] [RFC] mca_base_select()"</a>
<li><strong>Previous message:</strong> <a href="3777.php">Pak Lui: "Re: [OMPI devel] Mercurial demo OMPI repository"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/05/3791.php">Jeff Squyres: "Re: [OMPI devel] forgetting to run ./autogen.sh should not be fatal"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/05/3791.php">Jeff Squyres: "Re: [OMPI devel] forgetting to run ./autogen.sh should not be fatal"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I just forgot to run ./autogen.sh after svn update.  It caused aclocal
<br>
to warn about missing libtool macros, and automake to fail later.  The
<br>
following change to Makefile.am fixes this by allowing aclocal to find
<br>
config/libtool.m4 and the other libtool macro files.
<br>
<p>The ompi_functions.m4 change fixes a trivial unnecessary escaping.
<br>
<p>Cheers,
<br>
Ralf
<br>
<p>Index: Makefile.am
<br>
===================================================================
<br>
--- Makefile.am	(revision 18324)
<br>
+++ Makefile.am	(working copy)
<br>
@@ -24,3 +24,5 @@
<br>
&nbsp;
<br>
&nbsp;dist-hook:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;csh &quot;$(top_srcdir)/config/distscript.csh&quot; &quot;$(top_srcdir)&quot; &quot;$(distdir)&quot; &quot;$(OMPI_VERSION)&quot; &quot;$(OMPI_SVN_R)&quot;
<br>
+
<br>
+ACLOCAL_AMFLAGS = -I config
<br>
Index: config/ompi_functions.m4
<br>
===================================================================
<br>
--- config/ompi_functions.m4	(revision 18324)
<br>
+++ config/ompi_functions.m4	(working copy)
<br>
@@ -132,7 +132,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo installing to directory \&quot;$prefix\&quot; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;;;
<br>
&nbsp;&nbsp;&nbsp;*) 
<br>
-    AC_MSG_ERROR(prefix \&quot;$prefix\&quot; must be an absolute directory path) 
<br>
+    AC_MSG_ERROR(prefix &quot;$prefix&quot; must be an absolute directory path) 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;;;
<br>
&nbsp;esac
<br>
&nbsp;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3779.php">Josh Hursey: "[OMPI devel] [RFC] mca_base_select()"</a>
<li><strong>Previous message:</strong> <a href="3777.php">Pak Lui: "Re: [OMPI devel] Mercurial demo OMPI repository"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/05/3791.php">Jeff Squyres: "Re: [OMPI devel] forgetting to run ./autogen.sh should not be fatal"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/05/3791.php">Jeff Squyres: "Re: [OMPI devel] forgetting to run ./autogen.sh should not be fatal"</a>
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
