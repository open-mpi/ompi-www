<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Jul 14 13:59:53 2007" -->
<!-- isoreceived="20070714175953" -->
<!-- sent="Sat, 14 Jul 2007 11:59:23 -0600" -->
<!-- isosent="20070714175923" -->
<!-- name="Brian Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k" -->
<!-- id="985D597A-9833-4EE5-9411-83CAC67FD8D6_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20070714175108.GB10398_at_minantech.com" -->
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
<strong>Date:</strong> 2007-07-14 13:59:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1890.php">George Bosilca: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<li><strong>Previous message:</strong> <a href="1888.php">Gleb Natapov: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<li><strong>In reply to:</strong> <a href="1888.php">Gleb Natapov: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1890.php">George Bosilca: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<li><strong>Reply:</strong> <a href="1890.php">George Bosilca: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 14, 2007, at 11:51 AM, Gleb Natapov wrote:
<br>
<p><span class="quotelev1">&gt; On Sat, Jul 14, 2007 at 01:16:42PM -0400, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Instead of failing at configure time, we might want to disable the
</span><br>
<span class="quotelev2">&gt;&gt; threading features and the shared memory device if we detect that we
</span><br>
<span class="quotelev2">&gt;&gt; don't have support for atomics on a specified platform. In a non
</span><br>
<span class="quotelev2">&gt;&gt; threaded build, the shared memory device is the only place where we
</span><br>
<span class="quotelev2">&gt;&gt; need support for memory barrier. I'll look in the code to see why we
</span><br>
<span class="quotelev2">&gt;&gt; need support for compare-and-swap on a non threaded build.
</span><br>
<span class="quotelev1">&gt; Proper memory barrier is also needed for openib BTL eager RDMA  
</span><br>
<span class="quotelev1">&gt; support.
</span><br>
<p>Removed all the platform lists, since they won't care about this  
<br>
part :).
<br>
<p>Ah, true.  The eager RDMA code should check that the preprocessor  
<br>
symbol OPAL_HAVE_ATOMIC_MEM_BARRIER is 1 and disable itself if that  
<br>
isn't the case.  All the &quot;sections&quot; of ASM support (memory barriers,  
<br>
locks, compare-and-swap, and atomic math) have preprocessor symbols  
<br>
indicating whether support exists or not in the current build.  These  
<br>
should really be used :).
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1890.php">George Bosilca: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<li><strong>Previous message:</strong> <a href="1888.php">Gleb Natapov: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<li><strong>In reply to:</strong> <a href="1888.php">Gleb Natapov: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1890.php">George Bosilca: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<li><strong>Reply:</strong> <a href="1890.php">George Bosilca: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
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
