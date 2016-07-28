<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 31 06:47:02 2005" -->
<!-- isoreceived="20050831114702" -->
<!-- sent="Wed, 31 Aug 2005 13:46:59 +0200" -->
<!-- isosent="20050831114659" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re:  Small ltdl use update" -->
<!-- id="20050831114659.GC12613_at_iam.uni-bonn.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="42b3b220b426fb1761fa38a85521df74_at_open-mpi.org" -->
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
<strong>Date:</strong> 2005-08-31 06:46:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0277.php">Jeff Squyres: "Re:  pml vs bml vs btl"</a>
<li><strong>Previous message:</strong> <a href="0275.php">Ralf Wildenhues: "&quot;fix&quot; for romio configure.in"</a>
<li><strong>In reply to:</strong> <a href="0274.php">Jeff Squyres: "Re:  Small ltdl use update"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="../../2005/09/0287.php">Jeff Squyres: "Re:  Small ltdl use update"</a>
<li><strong>Reply:</strong> <a href="../../2005/09/0287.php">Jeff Squyres: "Re:  Small ltdl use update"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>* Jeff Squyres wrote on Wed, Aug 31, 2005 at 12:58:05PM CEST:
<br>
<span class="quotelev1">&gt; On Aug 31, 2005, at 2:48 AM, Ralf Wildenhues wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Please apply the first patch (or a similar solution) to include
</span><br>
<span class="quotelev2">&gt; &gt; ltdl.h directly.  This is both how it's documented and how
</span><br>
<span class="quotelev2">&gt; &gt; it will work with Libtool 1.5.x and 2.x: the latter has other
</span><br>
<span class="quotelev2">&gt; &gt; included files, which live one directory level further down
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Done, thanks.
</span><br>
<p>I missed another instance of this (exposed by &quot;make check&quot;), sorry.
<br>
See below.
<br>
<p><span class="quotelev2">&gt; &gt; Below is another tiny patch to please &quot;make distcheck&quot;
</span><br>
<span class="quotelev2">&gt; &gt; (on my machine all there is left to make it pass is one failing test
</span><br>
<span class="quotelev2">&gt; &gt; and the tarballs not being removed properly; the latter will be fixed
</span><br>
<span class="quotelev2">&gt; &gt; by computing the VERSION argument to AC_INIT properly.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian's still working on this.  Given that our goal is to start making 
</span><br>
<span class="quotelev1">&gt; release candidates in the near future, we opted to not bring over any 
</span><br>
<span class="quotelev1">&gt; of that stuff to the trunk until after we branch for 1.0.
</span><br>
<p>Oh, that's fine.  I just thought I'd let you know about the reason.
<br>
<p>Cheers,
<br>
Ralf
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* test/support/components.c, test/support/Makefile.am:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adjust include paths for ltdl.h.
<br>
<p>Index: test/support/components.c
<br>
===================================================================
<br>
--- test/support/components.c	(revision 7107)
<br>
+++ test/support/components.c	(working copy)
<br>
@@ -20,7 +20,7 @@
<br>
&nbsp;
<br>
&nbsp;#include &quot;ompi/include/constants.h&quot;
<br>
&nbsp;#include &quot;opal/include/constants.h&quot;
<br>
-#include &quot;libltdl/ltdl.h&quot;
<br>
+#include &quot;ltdl.h&quot;
<br>
&nbsp;#include &quot;components.h&quot;
<br>
&nbsp;#include &quot;mca/mca.h&quot;
<br>
&nbsp;
<br>
Index: test/support/Makefile.am
<br>
===================================================================
<br>
--- test/support/Makefile.am	(revision 7107)
<br>
+++ test/support/Makefile.am	(working copy)
<br>
@@ -16,7 +16,8 @@
<br>
&nbsp;
<br>
&nbsp;AM_CPPFLAGS = \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-DBUILDDIR=\&quot;$(OMPI_TOP_BUILDDIR)\&quot; \
<br>
-        -DSRCDIR=\&quot;$(OMPI_TOP_SRCDIR)\&quot;
<br>
+        -DSRCDIR=\&quot;$(OMPI_TOP_SRCDIR)\&quot; \
<br>
+	-I$(srcdir)/opal/libltdl
<br>
&nbsp;
<br>
&nbsp;#
<br>
&nbsp;# This should be libsupport.a, not libsupport.la.  Automake doesn't
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0277.php">Jeff Squyres: "Re:  pml vs bml vs btl"</a>
<li><strong>Previous message:</strong> <a href="0275.php">Ralf Wildenhues: "&quot;fix&quot; for romio configure.in"</a>
<li><strong>In reply to:</strong> <a href="0274.php">Jeff Squyres: "Re:  Small ltdl use update"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="../../2005/09/0287.php">Jeff Squyres: "Re:  Small ltdl use update"</a>
<li><strong>Reply:</strong> <a href="../../2005/09/0287.php">Jeff Squyres: "Re:  Small ltdl use update"</a>
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
