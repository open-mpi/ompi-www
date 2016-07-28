<?
$subject_val = "Re: [OMPI devel] MPI_Cart_coords_f segv with Intel compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 24 16:23:23 2012" -->
<!-- isoreceived="20120524202323" -->
<!-- sent="Thu, 24 May 2012 13:23:18 -0700" -->
<!-- isosent="20120524202318" -->
<!-- name="Larry Baker" -->
<!-- email="baker_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Cart_coords_f segv with Intel compiler" -->
<!-- id="2BCF8654-593E-4581-8330-9B213678627E_at_usgs.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5F307308-536D-4348-8128-AA51C256EF98_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI_Cart_coords_f segv with Intel compiler<br>
<strong>From:</strong> Larry Baker (<em>baker_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-24 16:23:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11038.php">Eugene Loh: "[OMPI devel] orte_util_decode_pidmap and hwloc"</a>
<li><strong>Previous message:</strong> <a href="11036.php">Jeff Squyres: "Re: [OMPI devel] MPI_Cart_coords_f segv with Intel compiler"</a>
<li><strong>In reply to:</strong> <a href="11036.php">Jeff Squyres: "Re: [OMPI devel] MPI_Cart_coords_f segv with Intel compiler"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dang!  You're absolutely right!  Mea culpa.
<br>
<p>Thanks,
<br>
<p>Larry Baker
<br>
US Geological Survey
<br>
650-329-5608
<br>
baker_at_[hidden]
<br>
<p><p><p>On 24 May 2012, at 1:19 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; FWIW, I think we imported your patch a while ago.  Here it is on the trunk:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/browser/trunk/opal/mca/memory/linux/malloc.c#L3933">https://svn.open-mpi.org/trac/ompi/browser/trunk/opal/mca/memory/linux/malloc.c#L3933</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And here it is on v1.6:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/browser/branches/v1.6/opal/mca/memory/linux/malloc.c#L3933">https://svn.open-mpi.org/trac/ompi/browser/branches/v1.6/opal/mca/memory/linux/malloc.c#L3933</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 24, 2012, at 2:06 PM, Larry Baker wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Terry,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What you are seeing is a bug in the vectorizer in the Intel 2011.6.233 release.  We've talked about this before.  You should probably remove that compiler from your system(s).  I think the new release of OpenMPI describes this problem, but does not stop if from occurring.  I write a patch for ptmalloc2/malloc.c for OpenMPI 1.4.3 which automatically adjusts the optimization level for _int_malloc(), which is where the bug occurs.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Larry Baker
</span><br>
<span class="quotelev2">&gt;&gt; US Geological Survey
</span><br>
<span class="quotelev2">&gt;&gt; 650-329-5608
</span><br>
<span class="quotelev2">&gt;&gt; baker_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ---------- Start of Patch ----------
</span><br>
<span class="quotelev2">&gt;&gt; --- opal/mca/memory/ptmalloc2/malloc.c.original	2010-04-13 10:30:26.000000000 -0700
</span><br>
<span class="quotelev2">&gt;&gt; +++ opal/mca/memory/ptmalloc2/malloc.c	2011-11-04 15:01:37.000000000 -0700
</span><br>
<span class="quotelev2">&gt;&gt; @@ -2,6 +2,17 @@
</span><br>
<span class="quotelev2">&gt;&gt; /* Copyright (c) 2010      Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev2">&gt;&gt;  */
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; +/* With Intel Composer XE V12.1.0, release 2011.6.233, any launch   */
</span><br>
<span class="quotelev2">&gt;&gt; +/* fails, even before main(), due to a bug in the vectorizer (see   */
</span><br>
<span class="quotelev2">&gt;&gt; +/* <a href="https://svn.open-mpi.org/trac/ompi/changeset/25290">https://svn.open-mpi.org/trac/ompi/changeset/25290</a>).  The fix is */
</span><br>
<span class="quotelev2">&gt;&gt; +/* to disable vectorization by reducing the optimization level to   */
</span><br>
<span class="quotelev2">&gt;&gt; +/* -O1 for _int_malloc().  The only reliable method to identify     */
</span><br>
<span class="quotelev2">&gt;&gt; +/* release 2011.6.233 is the predefined __INTEL_COMPILER_BUILD_DATE */
</span><br>
<span class="quotelev2">&gt;&gt; +/* macro, which will have the value 20110811 (Linux, Windows, and   */
</span><br>
<span class="quotelev2">&gt;&gt; +/* Mac OS X).  (The predefined __INTEL_COMPILER macro is nonsense,  */
</span><br>
<span class="quotelev2">&gt;&gt; +/* 9999, and both the 2011.6.233 and 2011.7.256 releases identify   */
</span><br>
<span class="quotelev2">&gt;&gt; +/* themselves as V12.1.0 from the -v command line option.)          */
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; #define OPAL_DISABLE_ENABLE_MEM_DEBUG 1
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;opal_config.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; @@ -3945,6 +3956,12 @@
</span><br>
<span class="quotelev2">&gt;&gt;   ------------------------------ malloc ------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; */
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; +#ifdef __INTEL_COMPILER_BUILD_DATE
</span><br>
<span class="quotelev2">&gt;&gt; +#if __INTEL_COMPILER_BUILD_DATE == 20110811
</span><br>
<span class="quotelev2">&gt;&gt; +#pragma GCC optimization_level 1
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; Void_t*
</span><br>
<span class="quotelev2">&gt;&gt; _int_malloc(mstate av, size_t bytes)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt; ---------- End of Patch ----------
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 24 May 2012, at 6:54 AM, TERRY DONTJE wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am seeing several Cart Fortran tests (like MPI_Cart_coords_f) segv in opal_memory_ptmalloc2_int_free when OMPI trunk is compiled with icc 12.1.0 for 64 bit on linux.   Just wondering if anyone has seen anything similar to this with a different version of icc.  Other non-Intel compilers seem to not exhibit this issue.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Developer Tools Engineering | +1.781.442.2631
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Oracle - Performance Technologies
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Email terry.dontje_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11037/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11038.php">Eugene Loh: "[OMPI devel] orte_util_decode_pidmap and hwloc"</a>
<li><strong>Previous message:</strong> <a href="11036.php">Jeff Squyres: "Re: [OMPI devel] MPI_Cart_coords_f segv with Intel compiler"</a>
<li><strong>In reply to:</strong> <a href="11036.php">Jeff Squyres: "Re: [OMPI devel] MPI_Cart_coords_f segv with Intel compiler"</a>
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
