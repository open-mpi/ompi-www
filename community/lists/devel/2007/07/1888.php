<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Jul 14 13:51:14 2007" -->
<!-- isoreceived="20070714175114" -->
<!-- sent="Sat, 14 Jul 2007 20:51:08 +0300" -->
<!-- isosent="20070714175108" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k" -->
<!-- id="20070714175108.GB10398_at_minantech.com" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-14 13:51:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1889.php">Brian Barrett: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<li><strong>Previous message:</strong> <a href="1887.php">Brian Barrett: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<li><strong>In reply to:</strong> <a href="1886.php">George Bosilca: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1889.php">Brian Barrett: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<li><strong>Reply:</strong> <a href="1889.php">Brian Barrett: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sat, Jul 14, 2007 at 01:16:42PM -0400, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; Instead of failing at configure time, we might want to disable the  
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
Proper memory barrier is also needed for openib BTL eager RDMA support.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Thanks,
</span><br>
<span class="quotelev1">&gt;      george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 14, 2007, at 1:06 PM, Brian Barrett wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Jul 14, 2007, at 10:53 AM, Dirk Eddelbuettel wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Methinks we need to fill in a few blanks here, or make do with non- 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; asm
</span><br>
<span class="quotelev3">&gt; &gt;&gt; solutions. I don't know the problem space that well (being a
</span><br>
<span class="quotelev3">&gt; &gt;&gt; maintainer
</span><br>
<span class="quotelev3">&gt; &gt;&gt; rather than upstream developer) and am looking for guidance.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Either way is an option.  There are really only a couple of functions
</span><br>
<span class="quotelev2">&gt; &gt; that have to be implemented:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    * atomic word-size compare and swap
</span><br>
<span class="quotelev2">&gt; &gt;    * memory barrier
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; We'll emulte atomic adds and spin-locks with compare and swap if not
</span><br>
<span class="quotelev2">&gt; &gt; directly implemented.  The memory barrier functions have to exist,
</span><br>
<span class="quotelev2">&gt; &gt; even if they don't do anything.  We require compare-and-swap for a
</span><br>
<span class="quotelev2">&gt; &gt; couple of pieces of code, which is why we lost our Sparc v8 support a
</span><br>
<span class="quotelev2">&gt; &gt; couple of releases ago.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; For what it's worth, lam (7.1.2, currently) us available on all build
</span><br>
<span class="quotelev3">&gt; &gt;&gt; architectures for Debian, but it may not push the (hardware)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; envelope as
</span><br>
<span class="quotelev3">&gt; &gt;&gt; hard.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Correct, LAM only had very limited ASM requirements (basically,
</span><br>
<span class="quotelev2">&gt; &gt; memory barrier on platforms that required it -- like PowerPC).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Brian
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1889.php">Brian Barrett: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<li><strong>Previous message:</strong> <a href="1887.php">Brian Barrett: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<li><strong>In reply to:</strong> <a href="1886.php">George Bosilca: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1889.php">Brian Barrett: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<li><strong>Reply:</strong> <a href="1889.php">Brian Barrett: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
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
