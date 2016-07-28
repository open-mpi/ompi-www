<?
$subject_val = "[OMPI devel] Fwd: [Open MPI] #2092: libopen-rte and libopen-pal shared library versioning issues";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  4 15:48:18 2009" -->
<!-- isoreceived="20091104204818" -->
<!-- sent="Wed, 4 Nov 2009 15:48:13 -0500" -->
<!-- isosent="20091104204813" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Fwd: [Open MPI] #2092: libopen-rte and libopen-pal shared library versioning issues" -->
<!-- id="747AFE4B-FCE8-4DC8-B98C-F982C62F7CDD_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="044.6fc62217a9919de4cb41ccf20dff9b04_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI devel] Fwd: [Open MPI] #2092: libopen-rte and libopen-pal shared library versioning issues<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-04 15:48:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7087.php">Jeff Squyres: "[OMPI devel] Open MPI v1.3.4rc4 is out"</a>
<li><strong>Previous message:</strong> <a href="7085.php">Jeff Squyres: "Re: [OMPI devel] === CREATE FAILURE (v1.5) ==="</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FYI -- there is a complex issue about shared library versioning and  
<br>
binary compatibility that we have punted on for v1.3.4.  Hopefully  
<br>
we'll think of a proper solution for v1.4.
<br>
<p>If you care about such things, please read #2092.
<br>
<p><p>Begin forwarded message:
<br>
<p><span class="quotelev1">&gt; From: &quot;Open MPI&quot; &lt;bugs_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: November 4, 2009 3:44:06 PM EST
</span><br>
<span class="quotelev1">&gt; Cc: &lt;bugs_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [Open MPI] #2092: libopen-rte and libopen-pal shared  
</span><br>
<span class="quotelev1">&gt; library versioning issues
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #2092: libopen-rte and libopen-pal shared library versioning issues
</span><br>
<span class="quotelev1">&gt; --------------------- 
</span><br>
<span class="quotelev1">&gt; +------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Reporter:  jsquyres  |       Owner:
</span><br>
<span class="quotelev1">&gt;     Type:  defect    |      Status:  new
</span><br>
<span class="quotelev1">&gt; Priority:  critical  |   Milestone:  Open MPI 1.4
</span><br>
<span class="quotelev1">&gt;  Version:  trunk     |    Keywords:
</span><br>
<span class="quotelev1">&gt; --------------------- 
</span><br>
<span class="quotelev1">&gt; +------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;  mpicc currently links all of OMPI's libraries:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  {{{
</span><br>
<span class="quotelev1">&gt;  -lmpi -lopen-rte -lopen-pal
</span><br>
<span class="quotelev1">&gt;  }}}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  (similar for the other wrappers)  When linking against shared  
</span><br>
<span class="quotelev1">&gt; libraries,
</span><br>
<span class="quotelev1">&gt;  this is both unnecessary and Bad -- the MPI application ends up
</span><br>
<span class="quotelev1">&gt;  ''explicitly'' depending on libopen-rte and libopen-pal rather than
</span><br>
<span class="quotelev1">&gt;  ''implicitly'' depending on them.  The difference is that with  
</span><br>
<span class="quotelev1">&gt; explicit
</span><br>
<span class="quotelev1">&gt;  dependencies, the MPI app is then chained to the .so version  
</span><br>
<span class="quotelev1">&gt; numbers of
</span><br>
<span class="quotelev1">&gt;  libopen-rte and libopen-pal -- even though MPI apps don't  
</span><br>
<span class="quotelev1">&gt; explicitly call
</span><br>
<span class="quotelev1">&gt;  anything down in those libraries.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  (see [wiki:ReleaseProcedures the Libtool .so version rules] before  
</span><br>
<span class="quotelev1">&gt; reading
</span><br>
<span class="quotelev1">&gt;  further)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  This can be problematic -- consider:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   * OMPI version A: has libmpi 0:0:0, libopen-rte 0:0:0, libopen-pal  
</span><br>
<span class="quotelev1">&gt; 0:0:0
</span><br>
<span class="quotelev1">&gt;   * OMPI version B: has libmpi 0:1:0, libopen-rte 1:0:0, libopen-pal  
</span><br>
<span class="quotelev1">&gt; 1:0:0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  An MPI app compiled against OMPI vA ''should'' be forward  
</span><br>
<span class="quotelev1">&gt; compatible with
</span><br>
<span class="quotelev1">&gt;  OMPI vB because the MPI interfaces haven't changed.  But since the  
</span><br>
<span class="quotelev1">&gt; MPI app
</span><br>
<span class="quotelev1">&gt;  is explicitly dependent on libopen-rte and libopen-pal, it  
</span><br>
<span class="quotelev1">&gt; ''won't'' be
</span><br>
<span class="quotelev1">&gt;  binary compatible (even though the MPI app doesn't call anything  
</span><br>
<span class="quotelev1">&gt; down in
</span><br>
<span class="quotelev1">&gt;  libopen-rte or libopen-pal -- only libmpi does, and libmpi  
</span><br>
<span class="quotelev1">&gt; presumably has
</span><br>
<span class="quotelev1">&gt;  been adjusted for any ORTE/OPAL interface changes).  This is Bad.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Unfortunately, listing -lopen-rte and -lopen-pal in the wrappers is
</span><br>
<span class="quotelev1">&gt;  necessary because of the case of static linking -- where all the  
</span><br>
<span class="quotelev1">&gt; libs are
</span><br>
<span class="quotelev1">&gt;  .a's, and therefore need to be explicitly mentioned.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  So -- how to fix this?  We kicked around a few ideas, but none of  
</span><br>
<span class="quotelev1">&gt; them are
</span><br>
<span class="quotelev1">&gt;  good.  Recording them here for posterity:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   1. Collapse libopen-rte and libopen-pal into a single libmpi.  We  
</span><br>
<span class="quotelev1">&gt; don't
</span><br>
<span class="quotelev1">&gt;  like this because:
</span><br>
<span class="quotelev1">&gt;     * We like 3 libs because it prevents developers from making  
</span><br>
<span class="quotelev1">&gt; abstraction
</span><br>
<span class="quotelev1">&gt;  violations.
</span><br>
<span class="quotelev1">&gt;     * Other projects are now depending on libopen-rte and libopen-pal.
</span><br>
<span class="quotelev1">&gt;   1. Only collapse libopen-rte/libopen-pal -&gt; libmpi in production  
</span><br>
<span class="quotelev1">&gt; builds;
</span><br>
<span class="quotelev1">&gt;  keep the 3 libs for developer builds.
</span><br>
<span class="quotelev1">&gt;     * This seems confusing, and still has the problem that other  
</span><br>
<span class="quotelev1">&gt; projects
</span><br>
<span class="quotelev1">&gt;  depend on these libraries.
</span><br>
<span class="quotelev1">&gt;   1. We could figure out in configure whether we're building static or
</span><br>
<span class="quotelev1">&gt;  dynamic in configure and adjust Makefile.am-isms to build one big  
</span><br>
<span class="quotelev1">&gt; libmpi
</span><br>
<span class="quotelev1">&gt;  for static and 3 libs for dynamic -- and then just have the wrappers
</span><br>
<span class="quotelev1">&gt;  always only -lmpi (not -lopen-rte, etc.).
</span><br>
<span class="quotelev1">&gt;     * But what to do when users --enable-static --enable-shared?
</span><br>
<span class="quotelev1">&gt;   1. We could only allow building static ''or'' shared -- not both
</span><br>
<span class="quotelev1">&gt;  simultaneously.
</span><br>
<span class="quotelev1">&gt;     * This might annoy some people...?
</span><br>
<span class="quotelev1">&gt;   1. We could add logic to the wrappers to look at the libraries in  
</span><br>
<span class="quotelev1">&gt; $libdir
</span><br>
<span class="quotelev1">&gt;  and figure out whether to list just -lmpi or also -lopen-rte, etc.
</span><br>
<span class="quotelev1">&gt;     * The wrapper would have to know what the shared library  
</span><br>
<span class="quotelev1">&gt; extension(s)
</span><br>
<span class="quotelev1">&gt;  are for that platform (and they vary).  This is possible, but icky.
</span><br>
<span class="quotelev1">&gt;     * The wrapper then has to parse the compiler and linker flags  
</span><br>
<span class="quotelev1">&gt; passed
</span><br>
<span class="quotelev1">&gt;  via argv to see if static or dynamic linking is being forced.   
</span><br>
<span class="quotelev1">&gt; These flags
</span><br>
<span class="quotelev1">&gt;  vary wildly on different platforms and different compilers.  It  
</span><br>
<span class="quotelev1">&gt; seems like
</span><br>
<span class="quotelev1">&gt;  the only winning move here is not to play.
</span><br>
<span class="quotelev1">&gt;   1. We could leave the libopen-rte and libopen-pal .so version  
</span><br>
<span class="quotelev1">&gt; numbers as
</span><br>
<span class="quotelev1">&gt;  0:0:0 and avoid the issue.
</span><br>
<span class="quotelev1">&gt;     * We're doing this to get v1.3.4 out the door.
</span><br>
<span class="quotelev1">&gt;     * But we really should figure out something &quot;better&quot; for v1.4 --
</span><br>
<span class="quotelev1">&gt;  because we're doing a disservice to projects using these libraries.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  '''NOTE:''' This issue potentially has ramifications about binary
</span><br>
<span class="quotelev1">&gt;  compatibility of MPI applications in the v1.3 and v1.4 series with  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt;  upcoming v1.5 series.  Meaning that if we ''do'' properly version  
</span><br>
<span class="quotelev1">&gt; libopen-
</span><br>
<span class="quotelev1">&gt;  rte/pal in v1.5, apps linked against rte/pal .so libs from the v1.3/ 
</span><br>
<span class="quotelev1">&gt; v1.4
</span><br>
<span class="quotelev1">&gt;  series may have incompatible &quot;current&quot; and &quot;age&quot; values.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Ticket URL: &lt;<a href="https://svn.open-mpi.org/trac/ompi/ticket/2092">https://svn.open-mpi.org/trac/ompi/ticket/2092</a>&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI &lt;<a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7087.php">Jeff Squyres: "[OMPI devel] Open MPI v1.3.4rc4 is out"</a>
<li><strong>Previous message:</strong> <a href="7085.php">Jeff Squyres: "Re: [OMPI devel] === CREATE FAILURE (v1.5) ==="</a>
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
