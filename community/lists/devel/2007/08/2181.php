<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug 17 08:50:01 2007" -->
<!-- isoreceived="20070817125001" -->
<!-- sent="Fri, 17 Aug 2007 14:49:49 +0200" -->
<!-- isosent="20070817124949" -->
<!-- name="Adrian Knoth" -->
<!-- email="adi_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#435581: [uwe@hermann-uwe.de: Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]" -->
<!-- id="20070817124949.GD13352_at_ltw.loris.tv" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="B93838E5-DEEE-45B5-BDCF-25D42043A26A_at_cisco.com" -->
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
<strong>From:</strong> Adrian Knoth (<em>adi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-17 08:49:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2182.php">Manuel Prinz: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#435581:	[uwe@hermann-uwe.de: Bug#435581: openmpi-bin: Segfault on Debian	GNU/kFreeBSD]"</a>
<li><strong>Previous message:</strong> <a href="2180.php">Jeff Squyres: "Re: [OMPI devel] [devel-core] [RFC] Runtime Services Layer"</a>
<li><strong>In reply to:</strong> <a href="2178.php">Jeff Squyres: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#435581: [uwe@hermann-uwe.de: Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2182.php">Manuel Prinz: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#435581:	[uwe@hermann-uwe.de: Bug#435581: openmpi-bin: Segfault on Debian	GNU/kFreeBSD]"</a>
<li><strong>Reply:</strong> <a href="2182.php">Manuel Prinz: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#435581:	[uwe@hermann-uwe.de: Bug#435581: openmpi-bin: Segfault on Debian	GNU/kFreeBSD]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Aug 17, 2007 at 08:26:50AM -0400, Jeff Squyres wrote:
<br>
<p><span class="quotelev2">&gt; &gt; Ok, --enable-progress-threads and --enable-mpi-threads cause the
</span><br>
<span class="quotelev2">&gt; &gt; segfaults. If you compile without, everything works.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I'll now try if it's mpi-threads or the progress-threads, and also  
</span><br>
<span class="quotelev2">&gt; &gt; check
</span><br>
<span class="quotelev2">&gt; &gt; the upcoming v1.2.4.
</span><br>
<span class="quotelev1">&gt; The --enable-progress-threads and --enable-mpi-threads configure  
</span><br>
<span class="quotelev1">&gt; options result in broken-ness on the v1.2 branch; you should not use  
</span><br>
<span class="quotelev1">&gt; them.
</span><br>
<p>That's why I wondered why Debian has enabled them.
<br>
<p>Dirk: Do you mind removing them from debian/rules, thus fixing the
<br>
issue?
<br>
<p><p><p><pre>
-- 
Cluster and Metacomputing Working Group
Friedrich-Schiller-Universit&#228;t Jena, Germany
private: <a href="http://adi.thur.de">http://adi.thur.de</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2182.php">Manuel Prinz: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#435581:	[uwe@hermann-uwe.de: Bug#435581: openmpi-bin: Segfault on Debian	GNU/kFreeBSD]"</a>
<li><strong>Previous message:</strong> <a href="2180.php">Jeff Squyres: "Re: [OMPI devel] [devel-core] [RFC] Runtime Services Layer"</a>
<li><strong>In reply to:</strong> <a href="2178.php">Jeff Squyres: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#435581: [uwe@hermann-uwe.de: Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2182.php">Manuel Prinz: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#435581:	[uwe@hermann-uwe.de: Bug#435581: openmpi-bin: Segfault on Debian	GNU/kFreeBSD]"</a>
<li><strong>Reply:</strong> <a href="2182.php">Manuel Prinz: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#435581:	[uwe@hermann-uwe.de: Bug#435581: openmpi-bin: Segfault on Debian	GNU/kFreeBSD]"</a>
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
