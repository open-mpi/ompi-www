<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug 17 08:57:31 2007" -->
<!-- isoreceived="20070817125731" -->
<!-- sent="Fri, 17 Aug 2007 14:57:24 +0200" -->
<!-- isosent="20070817125724" -->
<!-- name="Manuel Prinz" -->
<!-- email="debian_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#435581:	[uwe@hermann-uwe.de: Bug#435581: openmpi-bin: Segfault on Debian	GNU/kFreeBSD]" -->
<!-- id="1187355444.3881.14.camel_at_zmb-155.zmb.uni-essen.de" -->
<!-- inreplyto="20070817124949.GD13352_at_ltw.loris.tv" -->
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
<strong>From:</strong> Manuel Prinz (<em>debian_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-17 08:57:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2183.php">Jeff Squyres: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#435581:	[uwe@hermann-uwe.de: Bug#435581: openmpi-bin: Segfault on Debian	GNU/kFreeBSD]"</a>
<li><strong>Previous message:</strong> <a href="2181.php">Adrian Knoth: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#435581: [uwe@hermann-uwe.de: Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<li><strong>In reply to:</strong> <a href="2181.php">Adrian Knoth: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#435581: [uwe@hermann-uwe.de: Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2183.php">Jeff Squyres: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#435581:	[uwe@hermann-uwe.de: Bug#435581: openmpi-bin: Segfault on Debian	GNU/kFreeBSD]"</a>
<li><strong>Reply:</strong> <a href="2183.php">Jeff Squyres: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#435581:	[uwe@hermann-uwe.de: Bug#435581: openmpi-bin: Segfault on Debian	GNU/kFreeBSD]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am Freitag, den 17.08.2007, 14:49 +0200 schrieb Adrian Knoth:
<br>
<span class="quotelev1">&gt; On Fri, Aug 17, 2007 at 08:26:50AM -0400, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Ok, --enable-progress-threads and --enable-mpi-threads cause the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; segfaults. If you compile without, everything works.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I'll now try if it's mpi-threads or the progress-threads, and also  
</span><br>
<span class="quotelev3">&gt; &gt; &gt; check
</span><br>
<span class="quotelev3">&gt; &gt; &gt; the upcoming v1.2.4.
</span><br>
<span class="quotelev2">&gt; &gt; The --enable-progress-threads and --enable-mpi-threads configure  
</span><br>
<span class="quotelev2">&gt; &gt; options result in broken-ness on the v1.2 branch; you should not use  
</span><br>
<span class="quotelev2">&gt; &gt; them.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That's why I wondered why Debian has enabled them.
</span><br>
<p>We enabled it because it was requested (<a href="http://bugs.debian.org/419867">http://bugs.debian.org/419867</a>).
<br>
<p><span class="quotelev1">&gt; Dirk: Do you mind removing them from debian/rules, thus fixing the
</span><br>
<span class="quotelev1">&gt; issue?
</span><br>
<p>I personally think it's best to disable it for now then and document it
<br>
in README.Debian. We can enable it again as soon as it works correctly.
<br>
<p>Jeff, do you know for which architectures it's (not) working? I haven't
<br>
experienced problems so far, or at least didn't notice them.
<br>
<p>Best regards
<br>
Manuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2183.php">Jeff Squyres: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#435581:	[uwe@hermann-uwe.de: Bug#435581: openmpi-bin: Segfault on Debian	GNU/kFreeBSD]"</a>
<li><strong>Previous message:</strong> <a href="2181.php">Adrian Knoth: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#435581: [uwe@hermann-uwe.de: Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<li><strong>In reply to:</strong> <a href="2181.php">Adrian Knoth: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#435581: [uwe@hermann-uwe.de: Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2183.php">Jeff Squyres: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#435581:	[uwe@hermann-uwe.de: Bug#435581: openmpi-bin: Segfault on Debian	GNU/kFreeBSD]"</a>
<li><strong>Reply:</strong> <a href="2183.php">Jeff Squyres: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#435581:	[uwe@hermann-uwe.de: Bug#435581: openmpi-bin: Segfault on Debian	GNU/kFreeBSD]"</a>
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
