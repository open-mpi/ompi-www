<?
$subject_val = "Re: [OMPI devel] VT problems on Debian";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 22 03:41:27 2009" -->
<!-- isoreceived="20090122084127" -->
<!-- sent="Thu, 22 Jan 2009 09:41:22 +0100" -->
<!-- isosent="20090122084122" -->
<!-- name="Matthias Jurenz" -->
<!-- email="matthias.jurenz_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] VT problems on Debian" -->
<!-- id="1232613682.6800.27.camel_at_ricolap" -->
<!-- inreplyto="497792DA.8010507_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] VT problems on Debian<br>
<strong>From:</strong> Matthias Jurenz (<em>matthias.jurenz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-22 03:41:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5270.php">Dirk Eddelbuettel: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#512616: [openmpi] missing symbols?"</a>
<li><strong>Previous message:</strong> <a href="5268.php">Eugene Loh: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>In reply to:</strong> <a href="5262.php">Paul H. Hargrove: "Re: [OMPI devel] VT problems on Debian"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
A workaround for this problem would be to change the selected timer
<br>
after configure in 'ompi/contrib/vt/vt/config.h'.
<br>
<p>To do this, just replace the line
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#define TIMER TIMER_CYCLE_COUNTER
<br>
by
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#define TIMER TIMER_GETTIMEOFDAY
<br>
<p>I agree with Paul - the correct solution would be to choose the cycle
<br>
counter only if it's ensured that the platform support this.
<br>
<p>I'll fix the faulty timer selection in the VT configure as soon as
<br>
possible.
<br>
<p><p>Matthias
<br>
<p>On Wed, 2009-01-21 at 13:25 -0800, Paul H. Hargrove wrote:
<br>
<span class="quotelev1">&gt; Can't speak officially for the VT folks, but it looks like the following 
</span><br>
<span class="quotelev1">&gt; bits in ompi/vt/vt/acinclude.m4 needs to list SPARC and Alpha (maybe 
</span><br>
<span class="quotelev1">&gt; ARM?) along side MIPS as gettimeofday() platforms.  Alternatively 
</span><br>
<span class="quotelev1">&gt; (perhaps preferred) one should turn this around to explicitly list the 
</span><br>
<span class="quotelev1">&gt; platforms that *do* have cycle counter support (ppc64, ppc32, ia64, x86 
</span><br>
<span class="quotelev1">&gt; IIRC) rather than listing those that don't.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         case $PLATFORM in
</span><br>
<span class="quotelev1">&gt;         linux)
</span><br>
<span class="quotelev1">&gt;                 AC_DEFINE([TIMER_GETTIMEOFDAY], [1], [Use `gettimeofday' 
</span><br>
<span class="quotelev1">&gt; function])
</span><br>
<span class="quotelev1">&gt;                 AC_DEFINE([TIMER_CLOCK_GETTIME], [2], [Use 
</span><br>
<span class="quotelev1">&gt; `clock_gettime' function])
</span><br>
<span class="quotelev1">&gt;                 case $host_cpu in
</span><br>
<span class="quotelev1">&gt;                         mips*)
</span><br>
<span class="quotelev1">&gt;                                 AC_DEFINE([TIMER], [TIMER_GETTIMEOFDAY], 
</span><br>
<span class="quotelev1">&gt; [Use timer (see below)])
</span><br>
<span class="quotelev1">&gt;                                 AC_MSG_NOTICE([selected timer: 
</span><br>
<span class="quotelev1">&gt; TIMER_GETTIMEOFDAY])
</span><br>
<span class="quotelev1">&gt;                                 ;;
</span><br>
<span class="quotelev1">&gt;                         *)
</span><br>
<span class="quotelev1">&gt;                                 AC_DEFINE([TIMER_CYCLE_COUNTER], [3], 
</span><br>
<span class="quotelev1">&gt; [Cycle counter (e.g. TSC)])
</span><br>
<span class="quotelev1">&gt;                                 AC_DEFINE([TIMER], 
</span><br>
<span class="quotelev1">&gt; [TIMER_CYCLE_COUNTER], [Use timer (see below)])
</span><br>
<span class="quotelev1">&gt;                                 AC_MSG_NOTICE([selected timer: 
</span><br>
<span class="quotelev1">&gt; TIMER_CYCLE_COUNTER])
</span><br>
<span class="quotelev1">&gt;                                 ;;
</span><br>
<span class="quotelev1">&gt;                 esac
</span><br>
<span class="quotelev1">&gt;                 ;;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt; The Debian OMPI maintainers raised a few failures on some of their 
</span><br>
<span class="quotelev2">&gt; &gt; architectures to my attention -- it looks like there's some wonkyness 
</span><br>
<span class="quotelev2">&gt; &gt; on Debian on SPARC and Alpha -- scroll to the bottom of these two pages:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://buildd.debian.org/fetch.cgi?&amp;pkg=openmpi&amp;ver=1.3-1&amp;arch=sparc&amp;stamp=1232513504&amp;file=log">http://buildd.debian.org/fetch.cgi?&amp;pkg=openmpi&amp;ver=1.3-1&amp;arch=sparc&amp;stamp=1232513504&amp;file=log</a> 
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://buildd.debian.org/fetch.cgi?&amp;pkg=openmpi&amp;ver=1.3-1&amp;arch=alpha&amp;stamp=1232510796&amp;file=log">http://buildd.debian.org/fetch.cgi?&amp;pkg=openmpi&amp;ver=1.3-1&amp;arch=alpha&amp;stamp=1232510796&amp;file=log</a> 
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; They both seem to incur the same error:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; gcc -DHAVE_CONFIG_H -I. 
</span><br>
<span class="quotelev2">&gt; &gt; -I../../../../../../../ompi/contrib/vt/vt/vtlib -I.. 
</span><br>
<span class="quotelev2">&gt; &gt; -I../../../../../../../ompi/contrib/vt/vt/tools/opari/lib 
</span><br>
<span class="quotelev2">&gt; &gt; -I../../../../../../../ompi/contrib/vt/vt/extlib/otf/otflib 
</span><br>
<span class="quotelev2">&gt; &gt; -I../extlib/otf/otflib     -I../../../../../../../ompi/contrib/vt/vt  
</span><br>
<span class="quotelev2">&gt; &gt; -D_GNU_SOURCE -DBINDIR=\&quot;/usr/bin\&quot; 
</span><br>
<span class="quotelev2">&gt; &gt; -DDATADIR=\&quot;/usr/share/vampirtrace\&quot; -DRFG  -DVT_MEMHOOK -DVT_IOWRAP  
</span><br>
<span class="quotelev2">&gt; &gt; -Wall -g -O2 -MT vt_pform_linux.o -MD -MP -MF .deps/vt_pform_linux.Tpo 
</span><br>
<span class="quotelev2">&gt; &gt; -c -o vt_pform_linux.o 
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../../../ompi/contrib/vt/vt/vtlib/vt_pform_linux.c
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../../../ompi/contrib/vt/vt/vtlib/vt_pform_linux.c: In 
</span><br>
<span class="quotelev2">&gt; &gt; function 'vt_pform_wtime':
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../../../ompi/contrib/vt/vt/vtlib/vt_pform_linux.c:179: 
</span><br>
<span class="quotelev2">&gt; &gt; error: impossible constraint in 'asm'
</span><br>
<span class="quotelev2">&gt; &gt; make[6]: *** [vt_pform_linux.o] Error 1
</span><br>
<span class="quotelev2">&gt; &gt; make[6]: Leaving directory 
</span><br>
<span class="quotelev2">&gt; &gt; `/build/buildd/openmpi-1.3/build/shared/ompi/contrib/vt/vt/vtlib'
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; VT guys -- any ideas?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5270.php">Dirk Eddelbuettel: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#512616: [openmpi] missing symbols?"</a>
<li><strong>Previous message:</strong> <a href="5268.php">Eugene Loh: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>In reply to:</strong> <a href="5262.php">Paul H. Hargrove: "Re: [OMPI devel] VT problems on Debian"</a>
<!-- nextthread="start" -->
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
