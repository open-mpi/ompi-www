<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Jul 14 13:07:02 2007" -->
<!-- isoreceived="20070714170702" -->
<!-- sent="Sat, 14 Jul 2007 11:06:37 -0600" -->
<!-- isosent="20070714170637" -->
<!-- name="Brian Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k" -->
<!-- id="4A37EAF2-485C-4C73-A19E-D65065BFFDF4_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="18072.65404.644311.220832_at_basebud.nulle.part" -->
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
<strong>Date:</strong> 2007-07-14 13:06:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1885.php">Dirk Eddelbuettel: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<li><strong>Previous message:</strong> <a href="1883.php">Dirk Eddelbuettel: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<li><strong>In reply to:</strong> <a href="1883.php">Dirk Eddelbuettel: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1886.php">George Bosilca: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<li><strong>Reply:</strong> <a href="1886.php">George Bosilca: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 14, 2007, at 10:53 AM, Dirk Eddelbuettel wrote:
<br>
<p><span class="quotelev1">&gt; Methinks we need to fill in a few blanks here, or make do with non-asm
</span><br>
<span class="quotelev1">&gt; solutions. I don't know the problem space that well (being a  
</span><br>
<span class="quotelev1">&gt; maintainer
</span><br>
<span class="quotelev1">&gt; rather than upstream developer) and am looking for guidance.
</span><br>
<p>Either way is an option.  There are really only a couple of functions  
<br>
that have to be implemented:
<br>
<p>&nbsp;&nbsp;&nbsp;* atomic word-size compare and swap
<br>
&nbsp;&nbsp;&nbsp;* memory barrier
<br>
<p>We'll emulte atomic adds and spin-locks with compare and swap if not  
<br>
directly implemented.  The memory barrier functions have to exist,  
<br>
even if they don't do anything.  We require compare-and-swap for a  
<br>
couple of pieces of code, which is why we lost our Sparc v8 support a  
<br>
couple of releases ago.
<br>
<p><span class="quotelev1">&gt; For what it's worth, lam (7.1.2, currently) us available on all build
</span><br>
<span class="quotelev1">&gt; architectures for Debian, but it may not push the (hardware)  
</span><br>
<span class="quotelev1">&gt; envelope as
</span><br>
<span class="quotelev1">&gt; hard.
</span><br>
<p>Correct, LAM only had very limited ASM requirements (basically,  
<br>
memory barrier on platforms that required it -- like PowerPC).
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1885.php">Dirk Eddelbuettel: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<li><strong>Previous message:</strong> <a href="1883.php">Dirk Eddelbuettel: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<li><strong>In reply to:</strong> <a href="1883.php">Dirk Eddelbuettel: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1886.php">George Bosilca: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
<li><strong>Reply:</strong> <a href="1886.php">George Bosilca: "Re: [OMPI devel] Build failures of 1.2.3 on Debian hppa, mips, mipsel, s390, m68k"</a>
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
