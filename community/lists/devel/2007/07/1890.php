<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Jul 14 14:41:49 2007" -->
<!-- isoreceived="20070714184149" -->
<!-- sent="Sat, 14 Jul 2007 14:41:31 -0400" -->
<!-- isosent="20070714184131" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k" -->
<!-- id="047FF7B3-E14D-4A70-A443-D6C1278EEC7A_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="985D597A-9833-4EE5-9411-83CAC67FD8D6_at_lanl.gov" -->
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
<strong>Date:</strong> 2007-07-14 14:41:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1891.php">George Bosilca: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<li><strong>Previous message:</strong> <a href="1889.php">Brian Barrett: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<li><strong>In reply to:</strong> <a href="1889.php">Brian Barrett: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1893.php">Brian Barrett: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<li><strong>Reply:</strong> <a href="1893.php">Brian Barrett: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian,
<br>
<p>We should be able to use these defines in the configure.m4 files for  
<br>
each component right ? I think the asm section is detected before we  
<br>
go in the component configuration.
<br>
<p>So far we know about the following components that have to disable  
<br>
themselves if no atomic or memory barrier is detected:
<br>
&nbsp;&nbsp;- MPOOL: sm
<br>
&nbsp;&nbsp;- BTL: sm, openib (completely or partially?)
<br>
<p>Anybody knows about any other components with atomic requirements ?
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jul 14, 2007, at 1:59 PM, Brian Barrett wrote:
<br>
<p><span class="quotelev1">&gt; On Jul 14, 2007, at 11:51 AM, Gleb Natapov wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sat, Jul 14, 2007 at 01:16:42PM -0400, George Bosilca wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Instead of failing at configure time, we might want to disable the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; threading features and the shared memory device if we detect that we
</span><br>
<span class="quotelev3">&gt;&gt;&gt; don't have support for atomics on a specified platform. In a non
</span><br>
<span class="quotelev3">&gt;&gt;&gt; threaded build, the shared memory device is the only place where we
</span><br>
<span class="quotelev3">&gt;&gt;&gt; need support for memory barrier. I'll look in the code to see why we
</span><br>
<span class="quotelev3">&gt;&gt;&gt; need support for compare-and-swap on a non threaded build.
</span><br>
<span class="quotelev2">&gt;&gt; Proper memory barrier is also needed for openib BTL eager RDMA
</span><br>
<span class="quotelev2">&gt;&gt; support.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Removed all the platform lists, since they won't care about this
</span><br>
<span class="quotelev1">&gt; part :).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ah, true.  The eager RDMA code should check that the preprocessor
</span><br>
<span class="quotelev1">&gt; symbol OPAL_HAVE_ATOMIC_MEM_BARRIER is 1 and disable itself if that
</span><br>
<span class="quotelev1">&gt; isn't the case.  All the &quot;sections&quot; of ASM support (memory barriers,
</span><br>
<span class="quotelev1">&gt; locks, compare-and-swap, and atomic math) have preprocessor symbols
</span><br>
<span class="quotelev1">&gt; indicating whether support exists or not in the current build.  These
</span><br>
<span class="quotelev1">&gt; should really be used :).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
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
<li><strong>Next message:</strong> <a href="1891.php">George Bosilca: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<li><strong>Previous message:</strong> <a href="1889.php">Brian Barrett: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<li><strong>In reply to:</strong> <a href="1889.php">Brian Barrett: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1893.php">Brian Barrett: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<li><strong>Reply:</strong> <a href="1893.php">Brian Barrett: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
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
