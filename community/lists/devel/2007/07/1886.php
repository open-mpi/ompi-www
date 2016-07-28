<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Jul 14 13:17:18 2007" -->
<!-- isoreceived="20070714171718" -->
<!-- sent="Sat, 14 Jul 2007 13:16:42 -0400" -->
<!-- isosent="20070714171642" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k" -->
<!-- id="1C9A0185-662E-4DEB-BF19-4DCF01C19CD8_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A37EAF2-485C-4C73-A19E-D65065BFFDF4_at_lanl.gov" -->
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
<strong>Date:</strong> 2007-07-14 13:16:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1887.php">Brian Barrett: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<li><strong>Previous message:</strong> <a href="1885.php">Dirk Eddelbuettel: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<li><strong>In reply to:</strong> <a href="1884.php">Brian Barrett: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1887.php">Brian Barrett: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<li><strong>Reply:</strong> <a href="1887.php">Brian Barrett: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<li><strong>Reply:</strong> <a href="1888.php">Gleb Natapov: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Instead of failing at configure time, we might want to disable the  
<br>
threading features and the shared memory device if we detect that we  
<br>
don't have support for atomics on a specified platform. In a non  
<br>
threaded build, the shared memory device is the only place where we  
<br>
need support for memory barrier. I'll look in the code to see why we  
<br>
need support for compare-and-swap on a non threaded build.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jul 14, 2007, at 1:06 PM, Brian Barrett wrote:
<br>
<p><span class="quotelev1">&gt; On Jul 14, 2007, at 10:53 AM, Dirk Eddelbuettel wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Methinks we need to fill in a few blanks here, or make do with non- 
</span><br>
<span class="quotelev2">&gt;&gt; asm
</span><br>
<span class="quotelev2">&gt;&gt; solutions. I don't know the problem space that well (being a
</span><br>
<span class="quotelev2">&gt;&gt; maintainer
</span><br>
<span class="quotelev2">&gt;&gt; rather than upstream developer) and am looking for guidance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Either way is an option.  There are really only a couple of functions
</span><br>
<span class="quotelev1">&gt; that have to be implemented:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    * atomic word-size compare and swap
</span><br>
<span class="quotelev1">&gt;    * memory barrier
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We'll emulte atomic adds and spin-locks with compare and swap if not
</span><br>
<span class="quotelev1">&gt; directly implemented.  The memory barrier functions have to exist,
</span><br>
<span class="quotelev1">&gt; even if they don't do anything.  We require compare-and-swap for a
</span><br>
<span class="quotelev1">&gt; couple of pieces of code, which is why we lost our Sparc v8 support a
</span><br>
<span class="quotelev1">&gt; couple of releases ago.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For what it's worth, lam (7.1.2, currently) us available on all build
</span><br>
<span class="quotelev2">&gt;&gt; architectures for Debian, but it may not push the (hardware)
</span><br>
<span class="quotelev2">&gt;&gt; envelope as
</span><br>
<span class="quotelev2">&gt;&gt; hard.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Correct, LAM only had very limited ASM requirements (basically,
</span><br>
<span class="quotelev1">&gt; memory barrier on platforms that required it -- like PowerPC).
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
<li><strong>Next message:</strong> <a href="1887.php">Brian Barrett: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<li><strong>Previous message:</strong> <a href="1885.php">Dirk Eddelbuettel: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<li><strong>In reply to:</strong> <a href="1884.php">Brian Barrett: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1887.php">Brian Barrett: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<li><strong>Reply:</strong> <a href="1887.php">Brian Barrett: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<li><strong>Reply:</strong> <a href="1888.php">Gleb Natapov: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
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
