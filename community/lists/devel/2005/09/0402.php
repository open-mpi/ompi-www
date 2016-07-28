<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Sep 23 11:05:33 2005" -->
<!-- isoreceived="20050923160533" -->
<!-- sent="Fri, 23 Sep 2005 18:05:28 +0200" -->
<!-- isosent="20050923160528" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re:  why do we need the backward dependencies ?" -->
<!-- id="433427C8.8000907_at_cs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20050923101837.GB19908_at_iam.uni-bonn.de" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-09-23 11:05:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0403.php">George Bosilca: "mpi.h and mpif.h"</a>
<li><strong>Previous message:</strong> <a href="0401.php">George Bosilca: "Re:  mca selection"</a>
<li><strong>In reply to:</strong> <a href="0395.php">Ralf Wildenhues: "Re:  why do we need the backward dependencies ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0405.php">Ralf Wildenhues: "Re:  why do we need the backward dependencies ?"</a>
<li><strong>Reply:</strong> <a href="0405.php">Ralf Wildenhues: "Re:  why do we need the backward dependencies ?"</a>
<li><strong>Reply:</strong> <a href="0406.php">Jeff Squyres: "Re:  why do we need the backward dependencies ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That was the problem that trigger my question. If we remove the 
<br>
dependence to the libopal in the malloc_interpose we can compile the 
<br>
module. Otherwise the compilation fails because the generation of the 
<br>
mca_memory_malloc_interpose happens priori to the libopal.so. However, 
<br>
reading the last email I now understand why we need the backward 
<br>
dependence to the libopal and liborte.
<br>
<p>But I still see a problem. **Just to refresh the memories, I'm the only 
<br>
complaining on a regular base about the useless dependencies**. And 
<br>
there are a lot. I know that most of the shared libraries in ompi use 
<br>
functions in the opal section. But few of them rely on any of the orte 
<br>
shared libraries. If the dependencies are set correctly then we don't 
<br>
have to add
<br>
<p>$(top_ompi_builddir)/ompi/libmpi.la
<br>
$(top_ompi_builddir)/orte/liborte.la
<br>
$(top_ompi_builddir)/opal/libopal.la
<br>
<p>all over the Makefiles.
<br>
&nbsp;&nbsp;george.
<br>
<p>Ralf Wildenhues wrote:
<br>
<span class="quotelev1">&gt; Andrew,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * Ralf Wildenhues wrote on Fri, Sep 23, 2005 at 10:42:34AM CEST:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; * Andrew Friedley wrote on Thu, Sep 22, 2005 at 09:09:11PM CEST:
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sep 22, 2005, at 12:56 PM, George Bosilca wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Now we get this message for all .so file we generate:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     libtool: install: warning: relinking `*.la'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think I found a small error in the patch, see proposed fix below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Ralf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Index: opal/mca/memory/malloc_interpose/Makefile.am
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- opal/mca/memory/malloc_interpose/Makefile.am	(revision 7493)
</span><br>
<span class="quotelev1">&gt; +++ opal/mca/memory/malloc_interpose/Makefile.am	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -22,6 +22,5 @@
</span><br>
<span class="quotelev1">&gt;  libmca_memory_malloc_interpose_la_SOURCES = \
</span><br>
<span class="quotelev1">&gt;  	memory_malloc_interpose.c
</span><br>
<span class="quotelev1">&gt;  libmca_memory_malloc_interpose_la_LIBADD = \
</span><br>
<span class="quotelev1">&gt; -   $(memory_malloc_interpose_LIBS) \
</span><br>
<span class="quotelev1">&gt; -   $(top_ompi_builddir)/opal/libopal.la
</span><br>
<span class="quotelev1">&gt; +   $(memory_malloc_interpose_LIBS)
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="../../att-0402/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0403.php">George Bosilca: "mpi.h and mpif.h"</a>
<li><strong>Previous message:</strong> <a href="0401.php">George Bosilca: "Re:  mca selection"</a>
<li><strong>In reply to:</strong> <a href="0395.php">Ralf Wildenhues: "Re:  why do we need the backward dependencies ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0405.php">Ralf Wildenhues: "Re:  why do we need the backward dependencies ?"</a>
<li><strong>Reply:</strong> <a href="0405.php">Ralf Wildenhues: "Re:  why do we need the backward dependencies ?"</a>
<li><strong>Reply:</strong> <a href="0406.php">Jeff Squyres: "Re:  why do we need the backward dependencies ?"</a>
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
