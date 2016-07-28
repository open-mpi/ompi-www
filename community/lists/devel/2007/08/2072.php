<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug  2 11:56:53 2007" -->
<!-- isoreceived="20070802155653" -->
<!-- sent="Thu, 2 Aug 2007 11:56:41 -0400" -->
<!-- isosent="20070802155641" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers]	Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]" -->
<!-- id="6E6C539A-4AF7-4B3B-B3B0-F492918600F9_at_cs.utk.edu" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-02 11:56:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2073.php">Brian Barrett: "Re: [OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers]	Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<li><strong>Previous message:</strong> <a href="2071.php">Uwe Hermann: "Re: [OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers]	Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<li><strong>In reply to:</strong> <a href="2071.php">Uwe Hermann: "Re: [OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers]	Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2073.php">Brian Barrett: "Re: [OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers]	Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Once you attach with gdb to the mpirun process, before getting the  
<br>
stack information please type &quot;shared&quot;. I want to be sure that gdb  
<br>
will correctly load the symbols from all shared libraries (which is  
<br>
not the default everywhere). The previously reported stack, doesn't  
<br>
really seems consistent, as there is no reason to go in any function  
<br>
from the pthread library from the mca_base_component_find function.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Aug 2, 2007, at 11:38 AM, Uwe Hermann wrote:
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks, Uwe.
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.hermann-uwe.de">http://www.hermann-uwe.de</a>  | <a href="http://www.holsham-traders.de">http://www.holsham-traders.de</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://www.crazy-hacks.org">http://www.crazy-hacks.org</a> | <a href="http://www.unmaintained-free-software.org">http://www.unmaintained-free-software.org</a>
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
<li><strong>Next message:</strong> <a href="2073.php">Brian Barrett: "Re: [OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers]	Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<li><strong>Previous message:</strong> <a href="2071.php">Uwe Hermann: "Re: [OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers]	Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<li><strong>In reply to:</strong> <a href="2071.php">Uwe Hermann: "Re: [OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers]	Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2073.php">Brian Barrett: "Re: [OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers]	Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
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
