<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 31 01:48:47 2005" -->
<!-- isoreceived="20050831064847" -->
<!-- sent="Wed, 31 Aug 2005 08:48:44 +0200" -->
<!-- isosent="20050831064844" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Small ltdl use update" -->
<!-- id="20050831064844.GC9686_at_iam.uni-bonn.de" -->
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
<strong>Date:</strong> 2005-08-31 01:48:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0274.php">Jeff Squyres: "Re:  Small ltdl use update"</a>
<li><strong>Previous message:</strong> <a href="0272.php">David Daniel: "Re:  Fortran peculiarities on Mac OS X 10.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0274.php">Jeff Squyres: "Re:  Small ltdl use update"</a>
<li><strong>Reply:</strong> <a href="0274.php">Jeff Squyres: "Re:  Small ltdl use update"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Please apply the first patch (or a similar solution) to include 
<br>
ltdl.h directly.  This is both how it's documented and how
<br>
it will work with Libtool 1.5.x and 2.x: the latter has other
<br>
included files, which live one directory level further down.
<br>
<p>Below is another tiny patch to please &quot;make distcheck&quot; 
<br>
(on my machine all there is left to make it pass is one failing test
<br>
and the tarballs not being removed properly; the latter will be fixed
<br>
by computing the VERSION argument to AC_INIT properly.)
<br>
<p>Cheers,
<br>
Ralf
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* opal/mca/base/base.h, opal/mca/base/Makefile.am:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adjust include paths for ltdl.h
<br>
<p>Index: opal/mca/base/base.h
<br>
===================================================================
<br>
--- opal/mca/base/base.h	(revision 7092)
<br>
+++ opal/mca/base/base.h	(working copy)
<br>
@@ -20,7 +20,7 @@
<br>
&nbsp;#include &quot;ompi_config.h&quot;
<br>
&nbsp;
<br>
&nbsp;#if OMPI_WANT_LIBLTDL
<br>
-#include &quot;libltdl/ltdl.h&quot;
<br>
+#include &quot;ltdl.h&quot;
<br>
&nbsp;#endif
<br>
&nbsp;
<br>
&nbsp;#include &quot;opal/class/opal_object.h&quot;
<br>
Index: opal/mca/base/Makefile.am
<br>
===================================================================
<br>
--- opal/mca/base/Makefile.am	(revision 7092)
<br>
+++ opal/mca/base/Makefile.am	(working copy)
<br>
@@ -21,7 +21,8 @@
<br>
&nbsp;
<br>
&nbsp;AM_CPPFLAGS = \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-DOMPI_PKGLIBDIR=\&quot;$(pkglibdir)\&quot; \
<br>
-        -DOMPI_SYSCONFDIR=\&quot;$(sysconfdir)\&quot;
<br>
+        -DOMPI_SYSCONFDIR=\&quot;$(sysconfdir)\&quot; \
<br>
+	-I$(top_srcdir)/opal/libltdl
<br>
&nbsp;AM_LFLAGS = -Pmca_base_yy
<br>
&nbsp;LEX_OUTPUT_ROOT = lex.mca_base_yy
<br>
&nbsp;
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* ompi/mpi/f90/Makefile.am: remove built header.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
Index: ompi/mpi/f90/Makefile.am
<br>
===================================================================
<br>
--- ompi/mpi/f90/Makefile.am	(revision 7092)
<br>
+++ ompi/mpi/f90/Makefile.am	(working copy)
<br>
@@ -93,6 +93,8 @@
<br>
&nbsp;
<br>
&nbsp;mpi-f90-interfaces.h: fortran_kinds.sh
<br>
&nbsp;
<br>
+CLEANFILES += mpi-f90-interfaces.h
<br>
+
<br>
&nbsp;# Run scripts to generate the f90 source files.  We only need to
<br>
&nbsp;# generate the .f90 files once, so the &quot;test&quot; checks to see if the
<br>
&nbsp;# file exists before running the script.  However, the
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0274.php">Jeff Squyres: "Re:  Small ltdl use update"</a>
<li><strong>Previous message:</strong> <a href="0272.php">David Daniel: "Re:  Fortran peculiarities on Mac OS X 10.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0274.php">Jeff Squyres: "Re:  Small ltdl use update"</a>
<li><strong>Reply:</strong> <a href="0274.php">Jeff Squyres: "Re:  Small ltdl use update"</a>
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
