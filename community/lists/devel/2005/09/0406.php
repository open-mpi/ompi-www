<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Sep 23 12:22:06 2005" -->
<!-- isoreceived="20050923172206" -->
<!-- sent="Fri, 23 Sep 2005 13:21:56 -0400" -->
<!-- isosent="20050923172156" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re:  why do we need the backward dependencies ?" -->
<!-- id="4c79dae89b78b8081be00b91ca209773_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="433427C8.8000907_at_cs.utk.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-09-23 12:21:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0407.php">Galen M. Shipman: "p2p linpack ---"</a>
<li><strong>Previous message:</strong> <a href="0405.php">Ralf Wildenhues: "Re:  why do we need the backward dependencies ?"</a>
<li><strong>In reply to:</strong> <a href="0402.php">George Bosilca: "Re:  why do we need the backward dependencies ?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As we saw it, it was 6 of one and a half-dozen of the other.  
<br>
Specifically:
<br>
<p>- Almost everything is going to require libopal.  Let's swag and say 
<br>
90% of components will need libopal.
<br>
- All ORTE components will need liborte.  Maybe half of OMPI components 
<br>
need it (WAG).
<br>
<p>So really, all we're talking about here are a handful of OMPI 
<br>
components that don't need liborte.  And *maybe* a very, very small 
<br>
number of components that don't need libopal (WAG: less than 5).
<br>
<p>So all things being equal, it was tremendously easier [and faster] to 
<br>
just add all the libraries (libopal to OPAL components, liborte/opal to 
<br>
ORTE components, and libmpi/orte/opal to MPI components) rather than 
<br>
try to figure out exactly which ones each component needed.
<br>
<p>So -- for the components who had an extra library linked in, who cares?
<br>
<p>- In the static case, no additional code is linked into the component 
<br>
(i.e., the component is identical to whether you linked in the 
<br>
additional library or not)
<br>
- In the dynamic case, the extra library is listed in the component's 
<br>
linker section.  So yes, this is wasteful, but really only by a few 
<br>
bytes (literally) -- and it potentially allows for faster loading at 
<br>
run-time.
<br>
<p>What exactly is the harm?  It creates a small number of artificial 
<br>
dependencies, but we figured it would be much safer than sorry (i.e., 
<br>
better than *not* relinking a component when it was needed).
<br>
<p>As for why we listed all three in the MPI case (and both in the ORTE 
<br>
case), it was actually to make things simpler for developers.  True, 
<br>
because Libtool is cool, you could just list libmpi for MPI components 
<br>
(and liborte and libopal will be picked up automatically; similarly for 
<br>
ORTE components), but I'll bet you $10 that most other OMPI developers 
<br>
stopped reading this e-mail 5 paragraphs ago and would not spend any 
<br>
cycles on why this was so, and would probably list all 3 libraries for 
<br>
MPI components anyway (because that's typically how Unix linking works 
<br>
-- you -l all the libraries that you need and don't rely on the linker 
<br>
to automatically pick them up for you).  :D
<br>
<p>We have other things to worry about right now, and real problems to 
<br>
fix.  So who cares?
<br>
<p><p><p>On Sep 23, 2005, at 12:05 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt;  That was the problem that trigger my question. If we remove the 
</span><br>
<span class="quotelev1">&gt; dependence to the libopal in the malloc_interpose we can compile the 
</span><br>
<span class="quotelev1">&gt; module. Otherwise the compilation fails because the generation of the 
</span><br>
<span class="quotelev1">&gt; mca_memory_malloc_interpose happens priori to the libopal.so. However, 
</span><br>
<span class="quotelev1">&gt; reading the last email I now understand why we need the backward 
</span><br>
<span class="quotelev1">&gt; dependence to the libopal and liborte.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  But I still see a problem. **Just to refresh the memories, I'm the 
</span><br>
<span class="quotelev1">&gt; only complaining on a regular base about the useless dependencies**. 
</span><br>
<span class="quotelev1">&gt; And there are a lot. I know that most of the shared libraries in ompi 
</span><br>
<span class="quotelev1">&gt; use functions in the opal section. But few of them rely on any of the 
</span><br>
<span class="quotelev1">&gt; orte shared libraries. If the dependencies are set correctly then we 
</span><br>
<span class="quotelev1">&gt; don't have to add
</span><br>
<span class="quotelev1">&gt; $(top_ompi_builddir)/ompi/libmpi.la
</span><br>
<span class="quotelev1">&gt; $(top_ompi_builddir)/orte/liborte.la
</span><br>
<span class="quotelev1">&gt; $(top_ompi_builddir)/opal/libopal.la
</span><br>
<span class="quotelev1">&gt;  all over the Makefiles.
</span><br>
<span class="quotelev1">&gt;  &#160; george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Ralf Wildenhues wrote:Andrew,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; * Ralf Wildenhues wrote on Fri, Sep 23, 2005 at 10:42:34AM CEST:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * Andrew Friedley wrote on Thu, Sep 22, 2005 at 09:09:11PM CEST:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Sep 22, 2005, at 12:56 PM, George Bosilca wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Now we get this message for all .so file we generate:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     libtool: install: warning: relinking `*.la'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think I found a small error in the patch, see proposed fix below.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; Ralf
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Index: opal/mca/memory/malloc_interpose/Makefile.am
</span><br>
<span class="quotelev2">&gt;&gt; ===================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- opal/mca/memory/malloc_interpose/Makefile.am        (revision 
</span><br>
<span class="quotelev2">&gt;&gt; 7493)
</span><br>
<span class="quotelev2">&gt;&gt; +++ opal/mca/memory/malloc_interpose/Makefile.am        (working copy)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -22,6 +22,5 @@
</span><br>
<span class="quotelev2">&gt;&gt;  libmca_memory_malloc_interpose_la_SOURCES = \
</span><br>
<span class="quotelev2">&gt;&gt;         memory_malloc_interpose.c
</span><br>
<span class="quotelev2">&gt;&gt;  libmca_memory_malloc_interpose_la_LIBADD = \
</span><br>
<span class="quotelev2">&gt;&gt; -   $(memory_malloc_interpose_LIBS) \
</span><br>
<span class="quotelev2">&gt;&gt; -   $(top_ompi_builddir)/opal/libopal.la
</span><br>
<span class="quotelev2">&gt;&gt; +   $(memory_malloc_interpose_LIBS)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0407.php">Galen M. Shipman: "p2p linpack ---"</a>
<li><strong>Previous message:</strong> <a href="0405.php">Ralf Wildenhues: "Re:  why do we need the backward dependencies ?"</a>
<li><strong>In reply to:</strong> <a href="0402.php">George Bosilca: "Re:  why do we need the backward dependencies ?"</a>
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
