<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Jul 14 16:43:22 2007" -->
<!-- isoreceived="20070714204322" -->
<!-- sent="Sat, 14 Jul 2007 14:43:07 -0600" -->
<!-- isosent="20070714204307" -->
<!-- name="Brian Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k" -->
<!-- id="FE4CB48A-4C46-4A30-92E3-3430D699B90C_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="047FF7B3-E14D-4A70-A443-D6C1278EEC7A_at_cs.utk.edu" -->
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
<strong>From:</strong> Brian Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-14 16:43:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1894.php">Dirk Eddelbuettel: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#433142: openmpi: FTBFS on GNU/kFreeBSD"</a>
<li><strong>Previous message:</strong> <a href="1892.php">Matthew Moskewicz: "[OMPI devel] lsf support / farm use models"</a>
<li><strong>In reply to:</strong> <a href="1890.php">George Bosilca: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
the availability of functionality is set by the header files for each  
<br>
platform, not by configure.  So we'd have to play some games to get  
<br>
at the information, but it should be possible.
<br>
<p>Brian
<br>
<p>On Jul 14, 2007, at 12:41 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; Brian,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We should be able to use these defines in the configure.m4 files for
</span><br>
<span class="quotelev1">&gt; each component right ? I think the asm section is detected before we
</span><br>
<span class="quotelev1">&gt; go in the component configuration.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So far we know about the following components that have to disable
</span><br>
<span class="quotelev1">&gt; themselves if no atomic or memory barrier is detected:
</span><br>
<span class="quotelev1">&gt;   - MPOOL: sm
</span><br>
<span class="quotelev1">&gt;   - BTL: sm, openib (completely or partially?)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anybody knows about any other components with atomic requirements ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 14, 2007, at 1:59 PM, Brian Barrett wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 14, 2007, at 11:51 AM, Gleb Natapov wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sat, Jul 14, 2007 at 01:16:42PM -0400, George Bosilca wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Instead of failing at configure time, we might want to disable the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; threading features and the shared memory device if we detect  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that we
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; don't have support for atomics on a specified platform. In a non
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; threaded build, the shared memory device is the only place where we
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; need support for memory barrier. I'll look in the code to see  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; why we
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; need support for compare-and-swap on a non threaded build.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Proper memory barrier is also needed for openib BTL eager RDMA
</span><br>
<span class="quotelev3">&gt;&gt;&gt; support.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Removed all the platform lists, since they won't care about this
</span><br>
<span class="quotelev2">&gt;&gt; part :).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ah, true.  The eager RDMA code should check that the preprocessor
</span><br>
<span class="quotelev2">&gt;&gt; symbol OPAL_HAVE_ATOMIC_MEM_BARRIER is 1 and disable itself if that
</span><br>
<span class="quotelev2">&gt;&gt; isn't the case.  All the &quot;sections&quot; of ASM support (memory barriers,
</span><br>
<span class="quotelev2">&gt;&gt; locks, compare-and-swap, and atomic math) have preprocessor symbols
</span><br>
<span class="quotelev2">&gt;&gt; indicating whether support exists or not in the current build.  These
</span><br>
<span class="quotelev2">&gt;&gt; should really be used :).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brian
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1894.php">Dirk Eddelbuettel: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#433142: openmpi: FTBFS on GNU/kFreeBSD"</a>
<li><strong>Previous message:</strong> <a href="1892.php">Matthew Moskewicz: "[OMPI devel] lsf support / farm use models"</a>
<li><strong>In reply to:</strong> <a href="1890.php">George Bosilca: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
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
