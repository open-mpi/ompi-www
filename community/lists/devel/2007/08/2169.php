<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug 16 20:11:05 2007" -->
<!-- isoreceived="20070817001105" -->
<!-- sent="Fri, 17 Aug 2007 02:11:02 +0200" -->
<!-- isosent="20070817001102" -->
<!-- name="Uwe Hermann" -->
<!-- email="uwe_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#435581: [uwe@hermann-uwe.de: Bug#435581: openmpi-bin: Segfault on Debian	GNU/kFreeBSD]" -->
<!-- id="20070817001101.GE13640_at_greenwood" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="18112.65447.555423.143134_at_ron.nulle.part" -->
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
<strong>From:</strong> Uwe Hermann (<em>uwe_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-16 20:11:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2170.php">Tim Prins: "[OMPI devel] [RFC] Runtime Services Layer"</a>
<li><strong>Previous message:</strong> <a href="2168.php">George Bosilca: "Re: [OMPI devel] simple compilation error"</a>
<li><strong>In reply to:</strong> <a href="2144.php">Dirk Eddelbuettel: "Re: [OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers] Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2172.php">Adrian Knoth: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#435581: [uwe@hermann-uwe.de: Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<li><strong>Reply:</strong> <a href="2172.php">Adrian Knoth: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#435581: [uwe@hermann-uwe.de: Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<li><strong>Reply:</strong> <a href="2173.php">Jeff Squyres: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#435581: [uwe@hermann-uwe.de: Bug#435581: openmpi-bin: Segfault on Debian	GNU/kFreeBSD]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Aug 13, 2007 at 08:04:39PM -0500, Dirk Eddelbuettel wrote:
<br>
<span class="quotelev1">&gt; On 14 August 2007 at 00:08, Adrian Knoth wrote:
</span><br>
<span class="quotelev1">&gt; | On Mon, Aug 13, 2007 at 04:26:31PM -0500, Dirk Eddelbuettel wrote:
</span><br>
<span class="quotelev1">&gt; | 
</span><br>
<span class="quotelev1">&gt; | &gt; &gt; I'll now compile the 1.2.3 release tarball and see if I can reproduce
</span><br>
<span class="quotelev1">&gt; | 
</span><br>
<span class="quotelev1">&gt; | The 1.2.3 release also works fine:
</span><br>
<span class="quotelev1">&gt; | 
</span><br>
<span class="quotelev1">&gt; | adi_at_debian:~$ ./ompi123/bin/mpirun -np 2 ring
</span><br>
<span class="quotelev1">&gt; | 0: sending message (0) to 1
</span><br>
<span class="quotelev1">&gt; | 0: sent message
</span><br>
<span class="quotelev1">&gt; | 1: waiting for message
</span><br>
<span class="quotelev1">&gt; | 1: got message (1) from 0, sending to 0
</span><br>
<span class="quotelev1">&gt; | 0: got message (1) from 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now I'm even more confused. I though the bug was that it segfaulted when used
</span><br>
<span class="quotelev1">&gt; on a Debian-on-freebsd-kernel system ?
</span><br>
<p>I think Adrian used a tarball, not the Debian package?
<br>
I'll try a local, manual install too, maybe the bug is Debian-related only?
<br>
<p><p><span class="quotelev1">&gt; | adi_at_debian:~$ ./ompi123/bin/ompi_info 
</span><br>
<span class="quotelev1">&gt; |                 Open MPI: 1.2.3
</span><br>
<span class="quotelev1">&gt; |    Open MPI SVN revision: r15136
</span><br>
<span class="quotelev1">&gt; |                 Open RTE: 1.2.3
</span><br>
<span class="quotelev1">&gt; |    Open RTE SVN revision: r15136
</span><br>
<span class="quotelev1">&gt; |                     OPAL: 1.2.3
</span><br>
<span class="quotelev1">&gt; |        OPAL SVN revision: r15136
</span><br>
<span class="quotelev1">&gt; |                   Prefix: /home/adi/ompi123
</span><br>
<span class="quotelev1">&gt; |  Configured architecture: x86_64-unknown-kfreebsd6.2-gnu
</span><br>
<p>Same here.
<br>
<p><p><span class="quotelev1">&gt; | &gt; | JFTR: It's currently not possible to compile OMPI on amd64 (out of the
</span><br>
<span class="quotelev1">&gt; | &gt; | box). Though it compiles on i386
</span><br>
<span class="quotelev1">&gt; | &gt; | 
</span><br>
<span class="quotelev1">&gt; | &gt; |    <a href="http://experimental.debian.net/fetch.php?&amp;pkg=openmpi&amp;ver=1.2.3-3&amp;arch=kfreebsd-i386&amp;stamp=1187000200&amp;file=log&amp;as=raw">http://experimental.debian.net/fetch.php?&amp;pkg=openmpi&amp;ver=1.2.3-3&amp;arch=kfreebsd-i386&amp;stamp=1187000200&amp;file=log&amp;as=raw</a>
</span><br>
<span class="quotelev1">&gt; | &gt; | 
</span><br>
<span class="quotelev1">&gt; | &gt; | it fails on amd64:
</span><br>
<span class="quotelev1">&gt; | &gt; | 
</span><br>
<span class="quotelev1">&gt; | &gt; |    <a href="http://experimental.debian.net/fetch.php?&amp;pkg=openmpi&amp;ver=1.2.3-3&amp;arch=kfreebsd-amd64&amp;stamp=1186969782&amp;file=log&amp;as=raw">http://experimental.debian.net/fetch.php?&amp;pkg=openmpi&amp;ver=1.2.3-3&amp;arch=kfreebsd-amd64&amp;stamp=1186969782&amp;file=log&amp;as=raw</a>
</span><br>
<span class="quotelev1">&gt; | &gt; | 
</span><br>
<span class="quotelev1">&gt; | &gt; | stacktrace.c: In function 'opal_show_stackframe':
</span><br>
<span class="quotelev1">&gt; | &gt; | stacktrace.c:145: error: 'FPE_FLTDIV' undeclared (first use in this
</span><br>
<span class="quotelev1">&gt; | &gt; | function)
</span><br>
<span class="quotelev1">&gt; | &gt; | stacktrace.c:145: error: (Each undeclared identifier is reported only
</span><br>
<span class="quotelev1">&gt; | &gt; | once
</span><br>
<span class="quotelev1">&gt; | &gt; | stacktrace.c:145: error: for each function it appears in.)
</span><br>
<span class="quotelev1">&gt; | &gt; | stacktrace.c:146: error: 'FPE_FLTOVF' undeclared (first use in this
</span><br>
<span class="quotelev1">&gt; | &gt; | function)
</span><br>
<span class="quotelev1">&gt; | &gt; | stacktrace.c:147: error: 'FPE_FLTUND' undeclared (first use in this
</span><br>
<span class="quotelev1">&gt; | &gt; | function)
</span><br>
<span class="quotelev1">&gt; | &gt; | make[4]: *** [stacktrace.lo] Error 1
</span><br>
<span class="quotelev1">&gt; | &gt; | make[4]: Leaving directory `/build/buildd/openmpi-1.2.3/opal/util'
</span><br>
<span class="quotelev1">&gt; | &gt; | 
</span><br>
<span class="quotelev1">&gt; | &gt; | 
</span><br>
<span class="quotelev1">&gt; | &gt; | This is caused by libc0.1-dev in /usr/include/bits/sigcontext.h, the
</span><br>
<span class="quotelev1">&gt; | &gt; | relevant #define's are placed in an #ifdef __i386__ condition. After
</span><br>
<span class="quotelev1">&gt; | &gt; | extending this for __x86_64__, everything works fine.
</span><br>
<span class="quotelev1">&gt; | &gt; | 
</span><br>
<span class="quotelev1">&gt; | &gt; | Should I file a bugreport against libc0.1-dev or will you take care?
</span><br>
<span class="quotelev1">&gt; | &gt; I'm confused. What is libc0.1-dev?
</span><br>
<span class="quotelev1">&gt; | 
</span><br>
<span class="quotelev1">&gt; | 
</span><br>
<span class="quotelev1">&gt; |    <a href="http://packages.debian.org/unstable/libdevel/libc0.1-dev">http://packages.debian.org/unstable/libdevel/libc0.1-dev</a>
</span><br>
<span class="quotelev1">&gt; | 
</span><br>
<span class="quotelev1">&gt; | It's the &quot;libc6-dev&quot; for GNU/kFreeBSD, at least that's how I understand
</span><br>
<span class="quotelev1">&gt; | it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I see, thanks.  Well if the bug is in the header files supplied by that
</span><br>
<span class="quotelev1">&gt; package, please go ahead and file a bug report.
</span><br>
<p>I talked to Aurelien Jarno on IRC and he fixed this issue in svn (an
<br>
updated libc0.1 package will soon be uploaded).
<br>
<p>I guess the openmpi Debian packages should then depend on the new, fixed
<br>
version. I verified that with the fixed version openmpi compiles on
<br>
kfreebsd-i386 and kfreebsd-amd64.
<br>
<p><p><span class="quotelev1">&gt; | If you follow my two links and read their headlines, you can see that
</span><br>
<span class="quotelev1">&gt; | these are the buildlogs of 1.2.3-3 on kfreebsd, working for i386, but
</span><br>
<span class="quotelev1">&gt; | failing for amd64.
</span><br>
<span class="quotelev1">&gt; | 
</span><br>
<span class="quotelev1">&gt; | This is caused by &quot;wrong&quot; libc headers on kfreebsd, that's why I thought
</span><br>
<span class="quotelev1">&gt; | Uwe might want to have a look at it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ok. Back to the initial bug of Open MPI on Debian/kFreeBSD. What exactly is
</span><br>
<span class="quotelev1">&gt; the status now?
</span><br>
<p>With the libc0.1 fix (and another small patch for Debian which I'll send soon)
<br>
both the kfreebsd-i386 and kfreebsd-amd64 packages build fine.
<br>
<p>However, on my systems, both i386 and amd64 still segfault. I'm using
<br>
the openmpi Debian packages, version 1.2.3-3.
<br>
<p>I'll try the stock tarballs soon, and/or wait for 1.2.4 to see if the
<br>
bug is already fixed there...
<br>
<p><p>HTH, Uwe.
<br>
<pre>
-- 
<a href="http://www.hermann-uwe.de">http://www.hermann-uwe.de</a>  | <a href="http://www.holsham-traders.de">http://www.holsham-traders.de</a>
<a href="http://www.crazy-hacks.org">http://www.crazy-hacks.org</a> | <a href="http://www.unmaintained-free-software.org">http://www.unmaintained-free-software.org</a>

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-2169/signature.asc">Digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2170.php">Tim Prins: "[OMPI devel] [RFC] Runtime Services Layer"</a>
<li><strong>Previous message:</strong> <a href="2168.php">George Bosilca: "Re: [OMPI devel] simple compilation error"</a>
<li><strong>In reply to:</strong> <a href="2144.php">Dirk Eddelbuettel: "Re: [OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers] Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2172.php">Adrian Knoth: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#435581: [uwe@hermann-uwe.de: Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<li><strong>Reply:</strong> <a href="2172.php">Adrian Knoth: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#435581: [uwe@hermann-uwe.de: Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<li><strong>Reply:</strong> <a href="2173.php">Jeff Squyres: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#435581: [uwe@hermann-uwe.de: Bug#435581: openmpi-bin: Segfault on Debian	GNU/kFreeBSD]"</a>
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
