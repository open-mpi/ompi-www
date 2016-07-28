<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 18 11:55:24 2007" -->
<!-- isoreceived="20070718155524" -->
<!-- sent="Wed, 18 Jul 2007 11:55:10 -0400" -->
<!-- isosent="20070718155510" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] optional fortran datatype fixes: 1.2.4?" -->
<!-- id="FD56F511-E1C7-4925-BDA6-5B27B87CFA75_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="F5496568-573C-47EA-BDE3-B65E7059E8E4_at_cisco.com" -->
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
<strong>Date:</strong> 2007-07-18 11:55:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1932.php">Rainer Keller: "Re: [OMPI devel] optional fortran datatype fixes: 1.2.4?"</a>
<li><strong>Previous message:</strong> <a href="1930.php">Jeff Squyres: "[OMPI devel] MPI_BOTTOM fixes: 1.2.4?"</a>
<li><strong>In reply to:</strong> <a href="1929.php">Jeff Squyres: "[OMPI devel] optional fortran datatype fixes: 1.2.4?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1932.php">Rainer Keller: "Re: [OMPI devel] optional fortran datatype fixes: 1.2.4?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry, I should have included links to the commits in question:
<br>
<p><a href="https://svn.open-mpi.org/trac/ompi/changeset/14818">https://svn.open-mpi.org/trac/ompi/changeset/14818</a>
<br>
<a href="https://svn.open-mpi.org/trac/ompi/changeset/15137">https://svn.open-mpi.org/trac/ompi/changeset/15137</a>
<br>
<p><p>On Jul 18, 2007, at 11:46 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Rainer --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Did you want to get r14818 and r15137 into 1.2.4?  There's no CMR for
</span><br>
<span class="quotelev1">&gt; them.  Here's your commit messages:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; r14818:
</span><br>
<span class="quotelev1">&gt;   - The optional Fortran datatypes may not be available
</span><br>
<span class="quotelev1">&gt;     Do not initialize them, if not.
</span><br>
<span class="quotelev1">&gt;     If initializing them, check for the correct C-equivalent type
</span><br>
<span class="quotelev1">&gt;     to copy from...
</span><br>
<span class="quotelev1">&gt;     Issue a warning, when a type (e.g. REAL*16) is not available to
</span><br>
<span class="quotelev1">&gt;     build the type (here COMPLEX*32).
</span><br>
<span class="quotelev1">&gt;     This fixes issues with ompi and pacx.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Works with intel-compiler and FCFLAGS=&quot;-i8 -r8&quot; on ia32.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; r15137:
</span><br>
<span class="quotelev1">&gt; - Add the missing parts: add MPI_REAL2 to the end of the list
</span><br>
<span class="quotelev1">&gt;     of Fortran datatypes (mpif-common.h) and the list of registered
</span><br>
<span class="quotelev1">&gt;     datatypes: MOOG(REAL2).
</span><br>
<span class="quotelev1">&gt;     Configure and Compilation with ia32/gcc just finished, naturally
</span><br>
<span class="quotelev1">&gt;     without real2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1932.php">Rainer Keller: "Re: [OMPI devel] optional fortran datatype fixes: 1.2.4?"</a>
<li><strong>Previous message:</strong> <a href="1930.php">Jeff Squyres: "[OMPI devel] MPI_BOTTOM fixes: 1.2.4?"</a>
<li><strong>In reply to:</strong> <a href="1929.php">Jeff Squyres: "[OMPI devel] optional fortran datatype fixes: 1.2.4?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1932.php">Rainer Keller: "Re: [OMPI devel] optional fortran datatype fixes: 1.2.4?"</a>
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
