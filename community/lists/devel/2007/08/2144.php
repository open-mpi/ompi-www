<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug 13 21:05:06 2007" -->
<!-- isoreceived="20070814010506" -->
<!-- sent="Mon, 13 Aug 2007 20:04:39 -0500" -->
<!-- isosent="20070814010439" -->
<!-- name="Dirk Eddelbuettel" -->
<!-- email="edd_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers] Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]" -->
<!-- id="18112.65447.555423.143134_at_ron.nulle.part" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20070813220858.GY21086_at_ltw.loris.tv" -->
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
<strong>From:</strong> Dirk Eddelbuettel (<em>edd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-13 21:04:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2145.php">Tim Prins: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15848"</a>
<li><strong>Previous message:</strong> <a href="2143.php">Adrian Knoth: "Re: [OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers] Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<li><strong>In reply to:</strong> <a href="2143.php">Adrian Knoth: "Re: [OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers] Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2169.php">Uwe Hermann: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#435581: [uwe@hermann-uwe.de: Bug#435581: openmpi-bin: Segfault on Debian	GNU/kFreeBSD]"</a>
<li><strong>Reply:</strong> <a href="2169.php">Uwe Hermann: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#435581: [uwe@hermann-uwe.de: Bug#435581: openmpi-bin: Segfault on Debian	GNU/kFreeBSD]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
(adding pkg-openmpi-maintainers_at_[hidden] which I should have
<br>
added earlier, sorry! --Dirk)
<br>
<p>On 14 August 2007 at 00:08, Adrian Knoth wrote:
<br>
| On Mon, Aug 13, 2007 at 04:26:31PM -0500, Dirk Eddelbuettel wrote:
<br>
| 
<br>
| &gt; &gt; I'll now compile the 1.2.3 release tarball and see if I can reproduce
<br>
| 
<br>
| The 1.2.3 release also works fine:
<br>
| 
<br>
| adi_at_debian:~$ ./ompi123/bin/mpirun -np 2 ring
<br>
| 0: sending message (0) to 1
<br>
| 0: sent message
<br>
| 1: waiting for message
<br>
| 1: got message (1) from 0, sending to 0
<br>
| 0: got message (1) from 1
<br>
<p>Now I'm even more confused. I though the bug was that it segfaulted when used
<br>
on a Debian-on-freebsd-kernel system ?
<br>
&nbsp;
<br>
| adi_at_debian:~$ ./ompi123/bin/ompi_info 
<br>
|                 Open MPI: 1.2.3
<br>
|    Open MPI SVN revision: r15136
<br>
|                 Open RTE: 1.2.3
<br>
|    Open RTE SVN revision: r15136
<br>
|                     OPAL: 1.2.3
<br>
|        OPAL SVN revision: r15136
<br>
|                   Prefix: /home/adi/ompi123
<br>
|  Configured architecture: x86_64-unknown-kfreebsd6.2-gnu
<br>
| 
<br>
| &gt; &gt; the segfaults. On the other hand, I guess nobody is using OMPI on
<br>
| &gt; &gt; GNU/kFreeBSD, so upgrading the openmpi-package to a subversion snapshot
<br>
| &gt; &gt; would also fix the problem (think of &quot;fixed in experimental&quot;).
<br>
| &gt; Well, I generally prefer to follow upstream releases, and Jeff from the
<br>
| &gt; upstream team echoed that. Let's wait for 1.2.4, shall we?
<br>
| 
<br>
| That's fine, v1.2 is the production release.
<br>
| 
<br>
| &gt; | JFTR: It's currently not possible to compile OMPI on amd64 (out of the
<br>
| &gt; | box). Though it compiles on i386
<br>
| &gt; | 
<br>
| &gt; |    <a href="http://experimental.debian.net/fetch.php?&amp;pkg=openmpi&amp;ver=1.2.3-3&amp;arch=kfreebsd-i386&amp;stamp=1187000200&amp;file=log&amp;as=raw">http://experimental.debian.net/fetch.php?&amp;pkg=openmpi&amp;ver=1.2.3-3&amp;arch=kfreebsd-i386&amp;stamp=1187000200&amp;file=log&amp;as=raw</a>
<br>
| &gt; | 
<br>
| &gt; | it fails on amd64:
<br>
| &gt; | 
<br>
| &gt; |    <a href="http://experimental.debian.net/fetch.php?&amp;pkg=openmpi&amp;ver=1.2.3-3&amp;arch=kfreebsd-amd64&amp;stamp=1186969782&amp;file=log&amp;as=raw">http://experimental.debian.net/fetch.php?&amp;pkg=openmpi&amp;ver=1.2.3-3&amp;arch=kfreebsd-amd64&amp;stamp=1186969782&amp;file=log&amp;as=raw</a>
<br>
| &gt; | 
<br>
| &gt; | stacktrace.c: In function 'opal_show_stackframe':
<br>
| &gt; | stacktrace.c:145: error: 'FPE_FLTDIV' undeclared (first use in this
<br>
| &gt; | function)
<br>
| &gt; | stacktrace.c:145: error: (Each undeclared identifier is reported only
<br>
| &gt; | once
<br>
| &gt; | stacktrace.c:145: error: for each function it appears in.)
<br>
| &gt; | stacktrace.c:146: error: 'FPE_FLTOVF' undeclared (first use in this
<br>
| &gt; | function)
<br>
| &gt; | stacktrace.c:147: error: 'FPE_FLTUND' undeclared (first use in this
<br>
| &gt; | function)
<br>
| &gt; | make[4]: *** [stacktrace.lo] Error 1
<br>
| &gt; | make[4]: Leaving directory `/build/buildd/openmpi-1.2.3/opal/util'
<br>
| &gt; | 
<br>
| &gt; | 
<br>
| &gt; | This is caused by libc0.1-dev in /usr/include/bits/sigcontext.h, the
<br>
| &gt; | relevant #define's are placed in an #ifdef __i386__ condition. After
<br>
| &gt; | extending this for __x86_64__, everything works fine.
<br>
| &gt; | 
<br>
| &gt; | Should I file a bugreport against libc0.1-dev or will you take care?
<br>
| &gt; I'm confused. What is libc0.1-dev?
<br>
| 
<br>
| 
<br>
|    <a href="http://packages.debian.org/unstable/libdevel/libc0.1-dev">http://packages.debian.org/unstable/libdevel/libc0.1-dev</a>
<br>
| 
<br>
| It's the &quot;libc6-dev&quot; for GNU/kFreeBSD, at least that's how I understand
<br>
| it.
<br>
<p>I see, thanks.  Well if the bug is in the header files supplied by that
<br>
package, please go ahead and file a bug report.
<br>
<p>| &gt; Also note that I happened to have uploaded a third Debian revision of 1.2.3
<br>
| &gt; yesterday, and that Debian release 1.2.3-3 built fine on amd as per:
<br>
| &gt; 
<br>
| &gt; <a href="http://buildd.debian.org/build.php?&amp;pkg=openmpi&amp;ver=1.2.3-3&amp;arch=amd64&amp;file=log">http://buildd.debian.org/build.php?&amp;pkg=openmpi&amp;ver=1.2.3-3&amp;arch=amd64&amp;file=log</a>
<br>
| &gt; 
<br>
| &gt; So are we sure there's a bug?
<br>
| 
<br>
| Yes, absolutely. I was a little bit imprecise: with amd64, I ment
<br>
| kfreebsd-amd64, not Linux-amd64.
<br>
<p>Ack.
<br>
<p>| If you follow my two links and read their headlines, you can see that
<br>
| these are the buildlogs of 1.2.3-3 on kfreebsd, working for i386, but
<br>
| failing for amd64.
<br>
| 
<br>
| This is caused by &quot;wrong&quot; libc headers on kfreebsd, that's why I thought
<br>
| Uwe might want to have a look at it.
<br>
<p>Ok. Back to the initial bug of Open MPI on Debian/kFreeBSD. What exactly is
<br>
the status now?
<br>
<p>Thanks, Dirk
<br>
<p><p><pre>
-- 
Three out of two people have difficulties with fractions.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2145.php">Tim Prins: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15848"</a>
<li><strong>Previous message:</strong> <a href="2143.php">Adrian Knoth: "Re: [OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers] Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<li><strong>In reply to:</strong> <a href="2143.php">Adrian Knoth: "Re: [OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers] Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2169.php">Uwe Hermann: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#435581: [uwe@hermann-uwe.de: Bug#435581: openmpi-bin: Segfault on Debian	GNU/kFreeBSD]"</a>
<li><strong>Reply:</strong> <a href="2169.php">Uwe Hermann: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#435581: [uwe@hermann-uwe.de: Bug#435581: openmpi-bin: Segfault on Debian	GNU/kFreeBSD]"</a>
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
