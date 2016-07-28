<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug 13 17:26:56 2007" -->
<!-- isoreceived="20070813212656" -->
<!-- sent="Mon, 13 Aug 2007 16:26:31 -0500" -->
<!-- isosent="20070813212631" -->
<!-- name="Dirk Eddelbuettel" -->
<!-- email="edd_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers]	Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]" -->
<!-- id="18112.52359.892229.124072_at_ron.nulle.part" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20070813202829.GW21086_at_ltw.loris.tv" -->
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
<strong>Date:</strong> 2007-08-13 17:26:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2143.php">Adrian Knoth: "Re: [OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers] Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<li><strong>Previous message:</strong> <a href="2141.php">Li-Ta Lo: "Re: [OMPI devel] Collectives interface change"</a>
<li><strong>In reply to:</strong> <a href="2139.php">Adrian Knoth: "Re: [OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers] Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2143.php">Adrian Knoth: "Re: [OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers] Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<li><strong>Reply:</strong> <a href="2143.php">Adrian Knoth: "Re: [OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers] Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Adrian,
<br>
<p>On 13 August 2007 at 22:28, Adrian Knoth wrote:
<br>
| On Thu, Aug 02, 2007 at 10:51:13AM +0200, Adrian Knoth wrote:
<br>
| 
<br>
| &gt; &gt; We (as in the Debian maintainer for Open MPI) got this bug report from
<br>
| &gt; &gt; Uwe who sees mpi apps segfault on Debian systems with the FreeBSD
<br>
| &gt; &gt; kernel.
<br>
| &gt; &gt; Any input would be greatly appreciated!
<br>
| &gt; I'll follow the QEMU instructions on your website and investigate on
<br>
| &gt; my own ;)
<br>
| 
<br>
| I was able to get OMPI running on kfreebsd-amd64. I used a nightly
<br>
| snapshot from the trunk, so the problem is &quot;more or less fixed by
<br>
| upstream&quot; ;)
<br>
| 
<br>
| adi_at_debian:~$ ./ompi/bin/mpirun -np 2 ring
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
| 
<br>
| adi_at_debian:~$ ./ompi/bin/ompi_info 
<br>
|                 Open MPI: 1.3a1r15820
<br>
|    Open MPI SVN revision: r15820
<br>
|                 Open RTE: 1.3a1r15820
<br>
|    Open RTE SVN revision: r15820
<br>
|                     OPAL: 1.3a1r15820
<br>
|        OPAL SVN revision: r15820
<br>
|                   Prefix: /home/adi/ompi
<br>
|  Configured architecture: x86_64-unknown-kfreebsd6.2-gnu
<br>
| 
<br>
| 
<br>
| I'll now compile the 1.2.3 release tarball and see if I can reproduce
<br>
<p>I really appreciate the help.
<br>
<p>| the segfaults. On the other hand, I guess nobody is using OMPI on
<br>
| GNU/kFreeBSD, so upgrading the openmpi-package to a subversion snapshot
<br>
| would also fix the problem (think of &quot;fixed in experimental&quot;).
<br>
<p>Well, I generally prefer to follow upstream releases, and Jeff from the
<br>
upstream team echoed that. Let's wait for 1.2.4, shall we?
<br>
<p>OTOH if you can back out a patch for 1.2.3, I'd apply that.
<br>
&nbsp;
<br>
| 
<br>
| JFTR: It's currently not possible to compile OMPI on amd64 (out of the
<br>
| box). Though it compiles on i386
<br>
| 
<br>
|    <a href="http://experimental.debian.net/fetch.php?&amp;pkg=openmpi&amp;ver=1.2.3-3&amp;arch=kfreebsd-i386&amp;stamp=1187000200&amp;file=log&amp;as=raw">http://experimental.debian.net/fetch.php?&amp;pkg=openmpi&amp;ver=1.2.3-3&amp;arch=kfreebsd-i386&amp;stamp=1187000200&amp;file=log&amp;as=raw</a>
<br>
| 
<br>
| it fails on amd64:
<br>
| 
<br>
|    <a href="http://experimental.debian.net/fetch.php?&amp;pkg=openmpi&amp;ver=1.2.3-3&amp;arch=kfreebsd-amd64&amp;stamp=1186969782&amp;file=log&amp;as=raw">http://experimental.debian.net/fetch.php?&amp;pkg=openmpi&amp;ver=1.2.3-3&amp;arch=kfreebsd-amd64&amp;stamp=1186969782&amp;file=log&amp;as=raw</a>
<br>
| 
<br>
| stacktrace.c: In function 'opal_show_stackframe':
<br>
| stacktrace.c:145: error: 'FPE_FLTDIV' undeclared (first use in this
<br>
| function)
<br>
| stacktrace.c:145: error: (Each undeclared identifier is reported only
<br>
| once
<br>
| stacktrace.c:145: error: for each function it appears in.)
<br>
| stacktrace.c:146: error: 'FPE_FLTOVF' undeclared (first use in this
<br>
| function)
<br>
| stacktrace.c:147: error: 'FPE_FLTUND' undeclared (first use in this
<br>
| function)
<br>
| make[4]: *** [stacktrace.lo] Error 1
<br>
| make[4]: Leaving directory `/build/buildd/openmpi-1.2.3/opal/util'
<br>
| 
<br>
| 
<br>
| This is caused by libc0.1-dev in /usr/include/bits/sigcontext.h, the
<br>
| relevant #define's are placed in an #ifdef __i386__ condition. After
<br>
| extending this for __x86_64__, everything works fine.
<br>
| 
<br>
| Should I file a bugreport against libc0.1-dev or will you take care?
<br>
<p>I'm confused. What is libc0.1-dev ?
<br>
&nbsp;
<br>
Also note that I happened to have uploaded a third Debian revision of 1.2.3
<br>
yesterday, and that Debian release 1.2.3-3 built fine on amd as per:
<br>
<p><a href="http://buildd.debian.org/build.php?&amp;pkg=openmpi&amp;ver=1.2.3-3&amp;arch=amd64&amp;file=log">http://buildd.debian.org/build.php?&amp;pkg=openmpi&amp;ver=1.2.3-3&amp;arch=amd64&amp;file=log</a>
<br>
<p>So are we sure there's a bug?  Maybe you were just bitten by something in SVN
<br>
that is not yet deemed release quality?
<br>
<p>| I'll keep you posted...
<br>
<p>I appreciate that.
<br>
<p>Cheers, Dirk
<br>
&nbsp;
<br>
| -- 
<br>
| Cluster and Metacomputing Working Group
<br>
| Friedrich-Schiller-Universit&#228;t Jena, Germany
<br>
| 
<br>
| private: <a href="http://adi.thur.de">http://adi.thur.de</a>
<br>
| _______________________________________________
<br>
| devel mailing list
<br>
| devel_at_[hidden]
<br>
| <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
<p><pre>
-- 
Three out of two people have difficulties with fractions.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2143.php">Adrian Knoth: "Re: [OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers] Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<li><strong>Previous message:</strong> <a href="2141.php">Li-Ta Lo: "Re: [OMPI devel] Collectives interface change"</a>
<li><strong>In reply to:</strong> <a href="2139.php">Adrian Knoth: "Re: [OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers] Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2143.php">Adrian Knoth: "Re: [OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers] Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<li><strong>Reply:</strong> <a href="2143.php">Adrian Knoth: "Re: [OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers] Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
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
