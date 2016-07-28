<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug 17 08:27:04 2007" -->
<!-- isoreceived="20070817122704" -->
<!-- sent="Fri, 17 Aug 2007 08:26:50 -0400" -->
<!-- isosent="20070817122650" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#435581: [uwe@hermann-uwe.de: Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]" -->
<!-- id="B93838E5-DEEE-45B5-BDCF-25D42043A26A_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20070817121048.GB13352_at_ltw.loris.tv" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-17 08:26:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2179.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15881"</a>
<li><strong>Previous message:</strong> <a href="2177.php">Sven Stork: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15881"</a>
<li><strong>In reply to:</strong> <a href="2175.php">Adrian Knoth: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#435581: [uwe@hermann-uwe.de: Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2181.php">Adrian Knoth: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#435581: [uwe@hermann-uwe.de: Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<li><strong>Reply:</strong> <a href="2181.php">Adrian Knoth: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#435581: [uwe@hermann-uwe.de: Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 17, 2007, at 8:10 AM, Adrian Knoth wrote:
<br>
<p><span class="quotelev1">&gt; Ok, --enable-progress-threads and --enable-mpi-threads cause the
</span><br>
<span class="quotelev1">&gt; segfaults. If you compile without, everything works.
</span><br>
<p><span class="quotelev1">&gt; I'll now try if it's mpi-threads or the progress-threads, and also  
</span><br>
<span class="quotelev1">&gt; check
</span><br>
<span class="quotelev1">&gt; the upcoming v1.2.4.
</span><br>
<p>The --enable-progress-threads and --enable-mpi-threads configure  
<br>
options result in broken-ness on the v1.2 branch; you should not use  
<br>
them.  There is ongoing development work in the trunk to fix the code  
<br>
associated with these options.  The current goal is to have them  
<br>
working for the v1.3 release.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2179.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15881"</a>
<li><strong>Previous message:</strong> <a href="2177.php">Sven Stork: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15881"</a>
<li><strong>In reply to:</strong> <a href="2175.php">Adrian Knoth: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#435581: [uwe@hermann-uwe.de: Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2181.php">Adrian Knoth: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#435581: [uwe@hermann-uwe.de: Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<li><strong>Reply:</strong> <a href="2181.php">Adrian Knoth: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#435581: [uwe@hermann-uwe.de: Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
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
