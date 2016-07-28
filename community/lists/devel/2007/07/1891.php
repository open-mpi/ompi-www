<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Jul 14 14:42:55 2007" -->
<!-- isoreceived="20070714184255" -->
<!-- sent="Sat, 14 Jul 2007 14:42:39 -0400" -->
<!-- isosent="20070714184239" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k" -->
<!-- id="76417390-2932-40E4-973C-CCCC4FF2623F_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="CA43F409-B459-4F12-96DE-405E866DA4D9_at_lanl.gov" -->
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
<strong>Date:</strong> 2007-07-14 14:42:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1892.php">Matthew Moskewicz: "[OMPI devel] lsf support / farm use models"</a>
<li><strong>Previous message:</strong> <a href="1890.php">George Bosilca: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<li><strong>In reply to:</strong> <a href="1887.php">Brian Barrett: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1888.php">Gleb Natapov: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If the OMPI_HAVE_THREAD_SUPPORT is not set the LIFO fall back to a  
<br>
default version where atomic operations are not required. We can even  
<br>
remove the dependency on the atomic.h header if the thread support is  
<br>
not enabled.
<br>
<p>Unfortunately, our shared memory device require the atomic operations  
<br>
plus the memory barriers. Therefore, we cannot do anything more fine  
<br>
grained (such as non-existence of atomic compare-and-swap disable  
<br>
only the threading support and the non-existence of the memory  
<br>
barrier disable only the shared memory support).
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jul 14, 2007, at 1:27 PM, Brian Barrett wrote:
<br>
<p><span class="quotelev1">&gt; On Jul 14, 2007, at 11:16 AM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; George -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Disabling SM and threads if there's no atomic support would
</span><br>
<span class="quotelev1">&gt; definitely be one option.  The compare-and-swap is used by the LIFO
</span><br>
<span class="quotelev1">&gt; used for ompi free lists.
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
<li><strong>Next message:</strong> <a href="1892.php">Matthew Moskewicz: "[OMPI devel] lsf support / farm use models"</a>
<li><strong>Previous message:</strong> <a href="1890.php">George Bosilca: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<li><strong>In reply to:</strong> <a href="1887.php">Brian Barrett: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1888.php">Gleb Natapov: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
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
