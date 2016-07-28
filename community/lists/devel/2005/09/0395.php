<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Sep 23 05:18:40 2005" -->
<!-- isoreceived="20050923101840" -->
<!-- sent="Fri, 23 Sep 2005 12:18:37 +0200" -->
<!-- isosent="20050923101837" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re:  why do we need the backward dependencies ?" -->
<!-- id="20050923101837.GB19908_at_iam.uni-bonn.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20050923084234.GD6448_at_iam.uni-bonn.de" -->
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
<strong>Date:</strong> 2005-09-23 05:18:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0396.php">Jeff Squyres: "mca selection"</a>
<li><strong>Previous message:</strong> <a href="0394.php">Ralf Wildenhues: "Re:  why do we need the backward dependencies ?"</a>
<li><strong>In reply to:</strong> <a href="0394.php">Ralf Wildenhues: "Re:  why do we need the backward dependencies ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0397.php">Jeff Squyres: "Re:  why do we need the backward dependencies ?"</a>
<li><strong>Reply:</strong> <a href="0397.php">Jeff Squyres: "Re:  why do we need the backward dependencies ?"</a>
<li><strong>Reply:</strong> <a href="0402.php">George Bosilca: "Re:  why do we need the backward dependencies ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Andrew,
<br>
<p>* Ralf Wildenhues wrote on Fri, Sep 23, 2005 at 10:42:34AM CEST:
<br>
<span class="quotelev1">&gt; * Andrew Friedley wrote on Thu, Sep 22, 2005 at 09:09:11PM CEST:
</span><br>
<span class="quotelev2">&gt; &gt; On Sep 22, 2005, at 12:56 PM, George Bosilca wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Now we get this message for all .so file we generate:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     libtool: install: warning: relinking `*.la'
</span><br>
<p>I think I found a small error in the patch, see proposed fix below.
<br>
<p>Cheers,
<br>
Ralf
<br>
<p>Index: opal/mca/memory/malloc_interpose/Makefile.am
<br>
===================================================================
<br>
--- opal/mca/memory/malloc_interpose/Makefile.am	(revision 7493)
<br>
+++ opal/mca/memory/malloc_interpose/Makefile.am	(working copy)
<br>
@@ -22,6 +22,5 @@
<br>
&nbsp;libmca_memory_malloc_interpose_la_SOURCES = \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;memory_malloc_interpose.c
<br>
&nbsp;libmca_memory_malloc_interpose_la_LIBADD = \
<br>
-   $(memory_malloc_interpose_LIBS) \
<br>
-   $(top_ompi_builddir)/opal/libopal.la
<br>
+   $(memory_malloc_interpose_LIBS)
<br>
&nbsp;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0396.php">Jeff Squyres: "mca selection"</a>
<li><strong>Previous message:</strong> <a href="0394.php">Ralf Wildenhues: "Re:  why do we need the backward dependencies ?"</a>
<li><strong>In reply to:</strong> <a href="0394.php">Ralf Wildenhues: "Re:  why do we need the backward dependencies ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0397.php">Jeff Squyres: "Re:  why do we need the backward dependencies ?"</a>
<li><strong>Reply:</strong> <a href="0397.php">Jeff Squyres: "Re:  why do we need the backward dependencies ?"</a>
<li><strong>Reply:</strong> <a href="0402.php">George Bosilca: "Re:  why do we need the backward dependencies ?"</a>
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
