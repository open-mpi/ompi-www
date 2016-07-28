<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug 13 16:28:46 2007" -->
<!-- isoreceived="20070813202846" -->
<!-- sent="Mon, 13 Aug 2007 22:28:29 +0200" -->
<!-- isosent="20070813202829" -->
<!-- name="Adrian Knoth" -->
<!-- email="adi_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers] Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]" -->
<!-- id="20070813202829.GW21086_at_ltw.loris.tv" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20070802085113.GV30905_at_ltw.loris.tv" -->
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
<strong>Date:</strong> 2007-08-13 16:28:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2140.php">Jeff Squyres: "Re: [OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers] Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<li><strong>Previous message:</strong> <a href="2138.php">Jeff Squyres: "Re: [OMPI devel] Problem in mpool rdma finalize"</a>
<li><strong>In reply to:</strong> <a href="2066.php">Adrian Knoth: "Re: [OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers] Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2140.php">Jeff Squyres: "Re: [OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers] Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<li><strong>Reply:</strong> <a href="2140.php">Jeff Squyres: "Re: [OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers] Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<li><strong>Reply:</strong> <a href="2142.php">Dirk Eddelbuettel: "Re: [OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers]	Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Aug 02, 2007 at 10:51:13AM +0200, Adrian Knoth wrote:
<br>
<p><span class="quotelev2">&gt; &gt; We (as in the Debian maintainer for Open MPI) got this bug report from
</span><br>
<span class="quotelev2">&gt; &gt; Uwe who sees mpi apps segfault on Debian systems with the FreeBSD
</span><br>
<span class="quotelev2">&gt; &gt; kernel.
</span><br>
<span class="quotelev2">&gt; &gt; Any input would be greatly appreciated!
</span><br>
<span class="quotelev1">&gt; I'll follow the QEMU instructions on your website and investigate on
</span><br>
<span class="quotelev1">&gt; my own ;)
</span><br>
<p>I was able to get OMPI running on kfreebsd-amd64. I used a nightly
<br>
snapshot from the trunk, so the problem is &quot;more or less fixed by
<br>
upstream&quot; ;)
<br>
<p>adi_at_debian:~$ ./ompi/bin/mpirun -np 2 ring
<br>
0: sending message (0) to 1
<br>
0: sent message
<br>
1: waiting for message
<br>
1: got message (1) from 0, sending to 0
<br>
0: got message (1) from 1
<br>
<p>adi_at_debian:~$ ./ompi/bin/ompi_info 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.3a1r15820
<br>
&nbsp;&nbsp;&nbsp;Open MPI SVN revision: r15820
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open RTE: 1.3a1r15820
<br>
&nbsp;&nbsp;&nbsp;Open RTE SVN revision: r15820
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL: 1.3a1r15820
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL SVN revision: r15820
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Prefix: /home/adi/ompi
<br>
&nbsp;Configured architecture: x86_64-unknown-kfreebsd6.2-gnu
<br>
<p><p>I'll now compile the 1.2.3 release tarball and see if I can reproduce
<br>
the segfaults. On the other hand, I guess nobody is using OMPI on
<br>
GNU/kFreeBSD, so upgrading the openmpi-package to a subversion snapshot
<br>
would also fix the problem (think of &quot;fixed in experimental&quot;).
<br>
<p><p>JFTR: It's currently not possible to compile OMPI on amd64 (out of the
<br>
box). Though it compiles on i386
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="http://experimental.debian.net/fetch.php?&amp;pkg=openmpi&amp;ver=1.2.3-3&amp;arch=kfreebsd-i386&amp;stamp=1187000200&amp;file=log&amp;as=raw">http://experimental.debian.net/fetch.php?&amp;pkg=openmpi&amp;ver=1.2.3-3&amp;arch=kfreebsd-i386&amp;stamp=1187000200&amp;file=log&amp;as=raw</a>
<br>
<p>it fails on amd64:
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="http://experimental.debian.net/fetch.php?&amp;pkg=openmpi&amp;ver=1.2.3-3&amp;arch=kfreebsd-amd64&amp;stamp=1186969782&amp;file=log&amp;as=raw">http://experimental.debian.net/fetch.php?&amp;pkg=openmpi&amp;ver=1.2.3-3&amp;arch=kfreebsd-amd64&amp;stamp=1186969782&amp;file=log&amp;as=raw</a>
<br>
<p>stacktrace.c: In function 'opal_show_stackframe':
<br>
stacktrace.c:145: error: 'FPE_FLTDIV' undeclared (first use in this
<br>
function)
<br>
stacktrace.c:145: error: (Each undeclared identifier is reported only
<br>
once
<br>
stacktrace.c:145: error: for each function it appears in.)
<br>
stacktrace.c:146: error: 'FPE_FLTOVF' undeclared (first use in this
<br>
function)
<br>
stacktrace.c:147: error: 'FPE_FLTUND' undeclared (first use in this
<br>
function)
<br>
make[4]: *** [stacktrace.lo] Error 1
<br>
make[4]: Leaving directory `/build/buildd/openmpi-1.2.3/opal/util'
<br>
<p><p>This is caused by libc0.1-dev in /usr/include/bits/sigcontext.h, the
<br>
relevant #define's are placed in an #ifdef __i386__ condition. After
<br>
extending this for __x86_64__, everything works fine.
<br>
<p>Should I file a bugreport against libc0.1-dev or will you take care?
<br>
<p><p>I'll keep you posted...
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
<li><strong>Next message:</strong> <a href="2140.php">Jeff Squyres: "Re: [OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers] Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<li><strong>Previous message:</strong> <a href="2138.php">Jeff Squyres: "Re: [OMPI devel] Problem in mpool rdma finalize"</a>
<li><strong>In reply to:</strong> <a href="2066.php">Adrian Knoth: "Re: [OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers] Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2140.php">Jeff Squyres: "Re: [OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers] Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<li><strong>Reply:</strong> <a href="2140.php">Jeff Squyres: "Re: [OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers] Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<li><strong>Reply:</strong> <a href="2142.php">Dirk Eddelbuettel: "Re: [OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers]	Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
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
