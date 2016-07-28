<?
$subject_val = "Re: [OMPI devel] MPI_Cart_coords_f segv with Intel compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 24 14:17:41 2012" -->
<!-- isoreceived="20120524181741" -->
<!-- sent="Thu, 24 May 2012 14:17:38 -0400" -->
<!-- isosent="20120524181738" -->
<!-- name="TERRY DONTJE" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Cart_coords_f segv with Intel compiler" -->
<!-- id="4FBE7B42.5030703_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="637F7A4C-99A1-44CF-B5BC-4B88818F16B5_at_usgs.gov" -->
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
<strong>From:</strong> TERRY DONTJE (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-24 14:17:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11034.php">TERRY DONTJE: "Re: [OMPI devel] MPI_Cart_coords_f segv with Intel compiler"</a>
<li><strong>Previous message:</strong> <a href="11032.php">Larry Baker: "Re: [OMPI devel] MPI_Cart_coords_f segv with Intel compiler"</a>
<li><strong>In reply to:</strong> <a href="11032.php">Larry Baker: "Re: [OMPI devel] MPI_Cart_coords_f segv with Intel compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11034.php">TERRY DONTJE: "Re: [OMPI devel] MPI_Cart_coords_f segv with Intel compiler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Actually, I don't think the below is the issue.  I think the 
<br>
OMPI_ARRAY_INT_2_LOGICAL macro is doing a free on line 193 when it 
<br>
shouldn't because the OMPI_ARRAY_LOGICAL_2_INT macro calling an empty 
<br>
OMPI_ARRAY_LOGICAL__2_INT_ALLOC macro which in the other case that macro 
<br>
actually does a malloc.
<br>
<p>It was interesting looking at the diff between 26283 and the prior 
<br>
version for fint_2_int.h and seeing commented out &quot;frees&quot; being 
<br>
uncommented.  I suspect only one of the frees should have been commented 
<br>
out.
<br>
<p>--td
<br>
<p>On 5/24/2012 2:06 PM, Larry Baker wrote:
<br>
<span class="quotelev1">&gt; Terry,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What you are seeing is a bug in the vectorizer in the Intel 2011.6.233 
</span><br>
<span class="quotelev1">&gt; release.  We've talked about this before.  You should probably remove 
</span><br>
<span class="quotelev1">&gt; that compiler from your system(s).  I think the new release of OpenMPI 
</span><br>
<span class="quotelev1">&gt; describes this problem, but does not stop if from occurring.  I write 
</span><br>
<span class="quotelev1">&gt; a patch for ptmalloc2/malloc.c for OpenMPI 1.4.3 which automatically 
</span><br>
<span class="quotelev1">&gt; adjusts the optimization level for _int_malloc(), which is where the 
</span><br>
<span class="quotelev1">&gt; bug occurs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Larry Baker
</span><br>
<span class="quotelev1">&gt; US Geological Survey
</span><br>
<span class="quotelev1">&gt; 650-329-5608
</span><br>
<span class="quotelev1">&gt; baker_at_[hidden] &lt;mailto:baker_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---------- Start of Patch ----------
</span><br>
<span class="quotelev1">&gt; --- opal/mca/memory/ptmalloc2/malloc.c.original2010-04-13 
</span><br>
<span class="quotelev1">&gt; 10:30:26.000000000 -0700
</span><br>
<span class="quotelev1">&gt; +++ opal/mca/memory/ptmalloc2/malloc.c2011-11-04 15:01:37.000000000 -0700
</span><br>
<span class="quotelev1">&gt; @@ -2,6 +2,17 @@
</span><br>
<span class="quotelev1">&gt;  /* Copyright (c) 2010      Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;   */
</span><br>
<span class="quotelev1">&gt; +/* With Intel Composer XE V12.1.0, release 2011.6.233, any launch   */
</span><br>
<span class="quotelev1">&gt; +/* fails, even before main(), due to a bug in the vectorizer (see   */
</span><br>
<span class="quotelev1">&gt; +/* <a href="https://svn.open-mpi.org/trac/ompi/changeset/25290">https://svn.open-mpi.org/trac/ompi/changeset/25290</a>).  The fix is */
</span><br>
<span class="quotelev1">&gt; +/* to disable vectorization by reducing the optimization level to   */
</span><br>
<span class="quotelev1">&gt; +/* -O1 for _int_malloc().  The only reliable method to identify     */
</span><br>
<span class="quotelev1">&gt; +/* release 2011.6.233 is the predefined __INTEL_COMPILER_BUILD_DATE */
</span><br>
<span class="quotelev1">&gt; +/* macro, which will have the value 20110811 (Linux, Windows, and   */
</span><br>
<span class="quotelev1">&gt; +/* Mac OS X).  (The predefined __INTEL_COMPILER macro is nonsense,  */
</span><br>
<span class="quotelev1">&gt; +/* 9999, and both the 2011.6.233 and 2011.7.256 releases identify   */
</span><br>
<span class="quotelev1">&gt; +/* themselves as V12.1.0 from the -v command line option.)          */
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;  #define OPAL_DISABLE_ENABLE_MEM_DEBUG 1
</span><br>
<span class="quotelev1">&gt;  #include &quot;opal_config.h&quot;
</span><br>
<span class="quotelev1">&gt; @@ -3945,6 +3956,12 @@
</span><br>
<span class="quotelev1">&gt;    ------------------------------ malloc ------------------------------
</span><br>
<span class="quotelev1">&gt;  */
</span><br>
<span class="quotelev1">&gt; +#ifdef __INTEL_COMPILER_BUILD_DATE
</span><br>
<span class="quotelev1">&gt; +#if __INTEL_COMPILER_BUILD_DATE == 20110811
</span><br>
<span class="quotelev1">&gt; +#pragma GCC optimization_level 1
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;  Void_t*
</span><br>
<span class="quotelev1">&gt;  _int_malloc(mstate av, size_t bytes)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt; ---------- End of Patch ----------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 24 May 2012, at 6:54 AM, TERRY DONTJE wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am seeing several Cart Fortran tests (like MPI_Cart_coords_f) segv 
</span><br>
<span class="quotelev2">&gt;&gt; in opal_memory_ptmalloc2_int_free when OMPI trunk is compiled with 
</span><br>
<span class="quotelev2">&gt;&gt; icc 12.1.0 for 64 bit on linux.   Just wondering if anyone has seen 
</span><br>
<span class="quotelev2">&gt;&gt; anything similar to this with a different version of icc.  Other 
</span><br>
<span class="quotelev2">&gt;&gt; non-Intel compilers seem to not exhibit this issue.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev2">&gt;&gt; Developer Tools Engineering | +1.781.442.2631
</span><br>
<span class="quotelev2">&gt;&gt; Oracle *- Performance Technologies*
</span><br>
<span class="quotelev2">&gt;&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev2">&gt;&gt; Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11033/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11034.php">TERRY DONTJE: "Re: [OMPI devel] MPI_Cart_coords_f segv with Intel compiler"</a>
<li><strong>Previous message:</strong> <a href="11032.php">Larry Baker: "Re: [OMPI devel] MPI_Cart_coords_f segv with Intel compiler"</a>
<li><strong>In reply to:</strong> <a href="11032.php">Larry Baker: "Re: [OMPI devel] MPI_Cart_coords_f segv with Intel compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11034.php">TERRY DONTJE: "Re: [OMPI devel] MPI_Cart_coords_f segv with Intel compiler"</a>
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
