<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Jul 14 13:27:59 2007" -->
<!-- isoreceived="20070714172759" -->
<!-- sent="Sat, 14 Jul 2007 11:27:34 -0600" -->
<!-- isosent="20070714172734" -->
<!-- name="Brian Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k" -->
<!-- id="CA43F409-B459-4F12-96DE-405E866DA4D9_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1C9A0185-662E-4DEB-BF19-4DCF01C19CD8_at_cs.utk.edu" -->
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
<strong>Date:</strong> 2007-07-14 13:27:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1888.php">Gleb Natapov: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<li><strong>Previous message:</strong> <a href="1886.php">George Bosilca: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<li><strong>In reply to:</strong> <a href="1886.php">George Bosilca: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1891.php">George Bosilca: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<li><strong>Reply:</strong> <a href="1891.php">George Bosilca: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 14, 2007, at 11:16 AM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; Instead of failing at configure time, we might want to disable the
</span><br>
<span class="quotelev1">&gt; threading features and the shared memory device if we detect that we
</span><br>
<span class="quotelev1">&gt; don't have support for atomics on a specified platform. In a non
</span><br>
<span class="quotelev1">&gt; threaded build, the shared memory device is the only place where we
</span><br>
<span class="quotelev1">&gt; need support for memory barrier. I'll look in the code to see why we
</span><br>
<span class="quotelev1">&gt; need support for compare-and-swap on a non threaded build.
</span><br>
<p>George -
<br>
<p>Disabling SM and threads if there's no atomic support would  
<br>
definitely be one option.  The compare-and-swap is used by the LIFO  
<br>
used for ompi free lists.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1888.php">Gleb Natapov: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<li><strong>Previous message:</strong> <a href="1886.php">George Bosilca: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<li><strong>In reply to:</strong> <a href="1886.php">George Bosilca: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1891.php">George Bosilca: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<li><strong>Reply:</strong> <a href="1891.php">George Bosilca: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
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
