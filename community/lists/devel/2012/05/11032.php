<?
$subject_val = "Re: [OMPI devel] MPI_Cart_coords_f segv with Intel compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 24 14:06:11 2012" -->
<!-- isoreceived="20120524180611" -->
<!-- sent="Thu, 24 May 2012 11:06:05 -0700" -->
<!-- isosent="20120524180605" -->
<!-- name="Larry Baker" -->
<!-- email="baker_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Cart_coords_f segv with Intel compiler" -->
<!-- id="637F7A4C-99A1-44CF-B5BC-4B88818F16B5_at_usgs.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4FBE3D9B.3090102_at_oracle.com" -->
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
<strong>Date:</strong> 2012-05-24 14:06:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11033.php">TERRY DONTJE: "Re: [OMPI devel] MPI_Cart_coords_f segv with Intel compiler"</a>
<li><strong>Previous message:</strong> <a href="11031.php">Jeff Squyres: "Re: [OMPI devel] [EXTERNAL]  SVN trunk PSM MTL is busted"</a>
<li><strong>In reply to:</strong> <a href="11028.php">TERRY DONTJE: "[OMPI devel] MPI_Cart_coords_f segv with Intel compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11033.php">TERRY DONTJE: "Re: [OMPI devel] MPI_Cart_coords_f segv with Intel compiler"</a>
<li><strong>Reply:</strong> <a href="11033.php">TERRY DONTJE: "Re: [OMPI devel] MPI_Cart_coords_f segv with Intel compiler"</a>
<li><strong>Reply:</strong> <a href="11034.php">TERRY DONTJE: "Re: [OMPI devel] MPI_Cart_coords_f segv with Intel compiler"</a>
<li><strong>Reply:</strong> <a href="11036.php">Jeff Squyres: "Re: [OMPI devel] MPI_Cart_coords_f segv with Intel compiler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Terry,
<br>
<p>What you are seeing is a bug in the vectorizer in the Intel 2011.6.233 release.  We've talked about this before.  You should probably remove that compiler from your system(s).  I think the new release of OpenMPI describes this problem, but does not stop if from occurring.  I write a patch for ptmalloc2/malloc.c for OpenMPI 1.4.3 which automatically adjusts the optimization level for _int_malloc(), which is where the bug occurs.
<br>
<p>Larry Baker
<br>
US Geological Survey
<br>
650-329-5608
<br>
baker_at_[hidden]
<br>
<p>---------- Start of Patch ----------
<br>
--- opal/mca/memory/ptmalloc2/malloc.c.original	2010-04-13 10:30:26.000000000 -0700
<br>
+++ opal/mca/memory/ptmalloc2/malloc.c	2011-11-04 15:01:37.000000000 -0700
<br>
@@ -2,6 +2,17 @@
<br>
&nbsp;/* Copyright (c) 2010      Cisco Systems, Inc.  All rights reserved.
<br>
&nbsp;&nbsp;*/
<br>
&nbsp;
<br>
+/* With Intel Composer XE V12.1.0, release 2011.6.233, any launch   */
<br>
+/* fails, even before main(), due to a bug in the vectorizer (see   */
<br>
+/* <a href="https://svn.open-mpi.org/trac/ompi/changeset/25290">https://svn.open-mpi.org/trac/ompi/changeset/25290</a>).  The fix is */
<br>
+/* to disable vectorization by reducing the optimization level to   */
<br>
+/* -O1 for _int_malloc().  The only reliable method to identify     */
<br>
+/* release 2011.6.233 is the predefined __INTEL_COMPILER_BUILD_DATE */
<br>
+/* macro, which will have the value 20110811 (Linux, Windows, and   */
<br>
+/* Mac OS X).  (The predefined __INTEL_COMPILER macro is nonsense,  */
<br>
+/* 9999, and both the 2011.6.233 and 2011.7.256 releases identify   */
<br>
+/* themselves as V12.1.0 from the -v command line option.)          */
<br>
+
<br>
&nbsp;#define OPAL_DISABLE_ENABLE_MEM_DEBUG 1
<br>
&nbsp;#include &quot;opal_config.h&quot;
<br>
&nbsp;
<br>
@@ -3945,6 +3956,12 @@
<br>
&nbsp;&nbsp;&nbsp;------------------------------ malloc ------------------------------
<br>
&nbsp;*/
<br>
&nbsp;
<br>
+#ifdef __INTEL_COMPILER_BUILD_DATE
<br>
+#if __INTEL_COMPILER_BUILD_DATE == 20110811
<br>
+#pragma GCC optimization_level 1
<br>
+#endif
<br>
+#endif
<br>
+
<br>
&nbsp;Void_t*
<br>
&nbsp;_int_malloc(mstate av, size_t bytes)
<br>
&nbsp;{
<br>
---------- End of Patch ----------
<br>
<p>On 24 May 2012, at 6:54 AM, TERRY DONTJE wrote:
<br>
<p><span class="quotelev1">&gt; I am seeing several Cart Fortran tests (like MPI_Cart_coords_f) segv in opal_memory_ptmalloc2_int_free when OMPI trunk is compiled with icc 12.1.0 for 64 bit on linux.   Just wondering if anyone has seen anything similar to this with a different version of icc.  Other non-Intel compilers seem to not exhibit this issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev1">&gt; Developer Tools Engineering | +1.781.442.2631
</span><br>
<span class="quotelev1">&gt; Oracle - Performance Technologies
</span><br>
<span class="quotelev1">&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev1">&gt; Email terry.dontje_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11032/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11033.php">TERRY DONTJE: "Re: [OMPI devel] MPI_Cart_coords_f segv with Intel compiler"</a>
<li><strong>Previous message:</strong> <a href="11031.php">Jeff Squyres: "Re: [OMPI devel] [EXTERNAL]  SVN trunk PSM MTL is busted"</a>
<li><strong>In reply to:</strong> <a href="11028.php">TERRY DONTJE: "[OMPI devel] MPI_Cart_coords_f segv with Intel compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11033.php">TERRY DONTJE: "Re: [OMPI devel] MPI_Cart_coords_f segv with Intel compiler"</a>
<li><strong>Reply:</strong> <a href="11033.php">TERRY DONTJE: "Re: [OMPI devel] MPI_Cart_coords_f segv with Intel compiler"</a>
<li><strong>Reply:</strong> <a href="11034.php">TERRY DONTJE: "Re: [OMPI devel] MPI_Cart_coords_f segv with Intel compiler"</a>
<li><strong>Reply:</strong> <a href="11036.php">Jeff Squyres: "Re: [OMPI devel] MPI_Cart_coords_f segv with Intel compiler"</a>
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
