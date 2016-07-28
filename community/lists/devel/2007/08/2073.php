<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug  2 11:58:05 2007" -->
<!-- isoreceived="20070802155805" -->
<!-- sent="Thu, 2 Aug 2007 09:56:55 -0600" -->
<!-- isosent="20070802155655" -->
<!-- name="Brian Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers]	Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]" -->
<!-- id="8D62E53F-8044-49CB-BF97-9A4D08DAF4C7_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20070802153827.GC23143_at_greenwood" -->
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
<strong>Date:</strong> 2007-08-02 11:56:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2074.php">Mohamad Chaarawi: "[OMPI devel] Sparse Branch (Heads up Commit)"</a>
<li><strong>Previous message:</strong> <a href="2072.php">George Bosilca: "Re: [OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers]	Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<li><strong>In reply to:</strong> <a href="2071.php">Uwe Hermann: "Re: [OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers]	Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2139.php">Adrian Knoth: "Re: [OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers] Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 2, 2007, at 9:38 AM, Uwe Hermann wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Aug 02, 2007 at 10:51:13AM +0200, Adrian Knoth wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Uwe, could you please recompile with --enable-debug and rerun the  
</span><br>
<span class="quotelev2">&gt;&gt; test?
</span><br>
<span class="quotelev2">&gt;&gt; If possible, also provide a gdb backtrace, probably with details  
</span><br>
<span class="quotelev2">&gt;&gt; about
</span><br>
<span class="quotelev2">&gt;&gt; the failing frame.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OK, I'll recompile with --enable-debug and see what happens.
</span><br>
<p>One other thing I would try is --without-memory-manager.  We do some  
<br>
evil hacks on Linux to intercept malloc/free so that we can getting  
<br>
better performance out of InfiniBand and Myrinet.  It causes problems  
<br>
on some non-GLIBC systems (and is generally not used on non-linux).   
<br>
It might be that your platform is just on the wrong side of &quot;linux  
<br>
enough&quot; to cause problems.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2074.php">Mohamad Chaarawi: "[OMPI devel] Sparse Branch (Heads up Commit)"</a>
<li><strong>Previous message:</strong> <a href="2072.php">George Bosilca: "Re: [OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers]	Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<li><strong>In reply to:</strong> <a href="2071.php">Uwe Hermann: "Re: [OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers]	Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2139.php">Adrian Knoth: "Re: [OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers] Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
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
