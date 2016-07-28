<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug 17 08:11:02 2007" -->
<!-- isoreceived="20070817121102" -->
<!-- sent="Fri, 17 Aug 2007 14:10:48 +0200" -->
<!-- isosent="20070817121048" -->
<!-- name="Adrian Knoth" -->
<!-- email="adi_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#435581: [uwe@hermann-uwe.de: Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]" -->
<!-- id="20070817121048.GB13352_at_ltw.loris.tv" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20070817072505.GZ21086_at_ltw.loris.tv" -->
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
<strong>Date:</strong> 2007-08-17 08:10:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2176.php">Jeff Squyres: "Re: [OMPI devel] Public tmp branches"</a>
<li><strong>Previous message:</strong> <a href="2174.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15881"</a>
<li><strong>In reply to:</strong> <a href="2172.php">Adrian Knoth: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#435581: [uwe@hermann-uwe.de: Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2178.php">Jeff Squyres: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#435581: [uwe@hermann-uwe.de: Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<li><strong>Reply:</strong> <a href="2178.php">Jeff Squyres: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#435581: [uwe@hermann-uwe.de: Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Aug 17, 2007 at 09:25:05AM +0200, Adrian Knoth wrote:
<br>
&nbsp;
<br>
<span class="quotelev1">&gt; I've tried both: the tarball works fine, the Debian package
</span><br>
<span class="quotelev1">&gt; segfaults. I suspect it's the threading support, so someone (Uwe?) could
</span><br>
<span class="quotelev1">&gt; try to remove it from debian/rules.
</span><br>
<p>Ok, --enable-progress-threads and --enable-mpi-threads cause the
<br>
segfaults. If you compile without, everything works.
<br>
<p>I'll now try if it's mpi-threads or the progress-threads, and also check
<br>
the upcoming v1.2.4.
<br>
<p><p>How does Debian feel about disabling threads on kFreeBSD? Are there
<br>
known issues with pthreads on kFreeBSD?
<br>
<p><pre>
-- 
Cluster and Metacomputing Working Group
Friedrich-Schiller-Universit&#228;t Jena, Germany
private: <a href="http://adi.thur.de">http://adi.thur.de</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2176.php">Jeff Squyres: "Re: [OMPI devel] Public tmp branches"</a>
<li><strong>Previous message:</strong> <a href="2174.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15881"</a>
<li><strong>In reply to:</strong> <a href="2172.php">Adrian Knoth: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#435581: [uwe@hermann-uwe.de: Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2178.php">Jeff Squyres: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#435581: [uwe@hermann-uwe.de: Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<li><strong>Reply:</strong> <a href="2178.php">Jeff Squyres: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#435581: [uwe@hermann-uwe.de: Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
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
