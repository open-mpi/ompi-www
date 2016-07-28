<?
$subject_val = "Re: [OMPI devel] VT problems on Debian";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 21 16:26:19 2009" -->
<!-- isoreceived="20090121212619" -->
<!-- sent="Wed, 21 Jan 2009 13:25:46 -0800" -->
<!-- isosent="20090121212546" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] VT problems on Debian" -->
<!-- id="497792DA.8010507_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="0238526D-9B7C-4104-A9E5-C91E7B490770_at_cisco.com" -->
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
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-21 16:25:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5263.php">David Robertson: "[OMPI devel] Fortran 90 Interface"</a>
<li><strong>Previous message:</strong> <a href="5261.php">Ralph Castain: "Re: [OMPI devel] RFC: Use of ompi_proc_t flags field"</a>
<li><strong>In reply to:</strong> <a href="5259.php">Jeff Squyres: "[OMPI devel] VT problems on Debian"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5269.php">Matthias Jurenz: "Re: [OMPI devel] VT problems on Debian"</a>
<li><strong>Reply:</strong> <a href="5269.php">Matthias Jurenz: "Re: [OMPI devel] VT problems on Debian"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can't speak officially for the VT folks, but it looks like the following 
<br>
bits in ompi/vt/vt/acinclude.m4 needs to list SPARC and Alpha (maybe 
<br>
ARM?) along side MIPS as gettimeofday() platforms.  Alternatively 
<br>
(perhaps preferred) one should turn this around to explicitly list the 
<br>
platforms that *do* have cycle counter support (ppc64, ppc32, ia64, x86 
<br>
IIRC) rather than listing those that don't.
<br>
<p>-Paul
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case $PLATFORM in
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;linux)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_DEFINE([TIMER_GETTIMEOFDAY], [1], [Use `gettimeofday' 
<br>
function])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_DEFINE([TIMER_CLOCK_GETTIME], [2], [Use 
<br>
`clock_gettime' function])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case $host_cpu in
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mips*)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_DEFINE([TIMER], [TIMER_GETTIMEOFDAY], 
<br>
[Use timer (see below)])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_MSG_NOTICE([selected timer: 
<br>
TIMER_GETTIMEOFDAY])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_DEFINE([TIMER_CYCLE_COUNTER], [3], 
<br>
[Cycle counter (e.g. TSC)])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_DEFINE([TIMER], 
<br>
[TIMER_CYCLE_COUNTER], [Use timer (see below)])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_MSG_NOTICE([selected timer: 
<br>
TIMER_CYCLE_COUNTER])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;esac
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;;;
<br>
<p><p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; The Debian OMPI maintainers raised a few failures on some of their 
</span><br>
<span class="quotelev1">&gt; architectures to my attention -- it looks like there's some wonkyness 
</span><br>
<span class="quotelev1">&gt; on Debian on SPARC and Alpha -- scroll to the bottom of these two pages:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://buildd.debian.org/fetch.cgi?&amp;pkg=openmpi&amp;ver=1.3-1&amp;arch=sparc&amp;stamp=1232513504&amp;file=log">http://buildd.debian.org/fetch.cgi?&amp;pkg=openmpi&amp;ver=1.3-1&amp;arch=sparc&amp;stamp=1232513504&amp;file=log</a> 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://buildd.debian.org/fetch.cgi?&amp;pkg=openmpi&amp;ver=1.3-1&amp;arch=alpha&amp;stamp=1232510796&amp;file=log">http://buildd.debian.org/fetch.cgi?&amp;pkg=openmpi&amp;ver=1.3-1&amp;arch=alpha&amp;stamp=1232510796&amp;file=log</a> 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; They both seem to incur the same error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; gcc -DHAVE_CONFIG_H -I. 
</span><br>
<span class="quotelev1">&gt; -I../../../../../../../ompi/contrib/vt/vt/vtlib -I.. 
</span><br>
<span class="quotelev1">&gt; -I../../../../../../../ompi/contrib/vt/vt/tools/opari/lib 
</span><br>
<span class="quotelev1">&gt; -I../../../../../../../ompi/contrib/vt/vt/extlib/otf/otflib 
</span><br>
<span class="quotelev1">&gt; -I../extlib/otf/otflib     -I../../../../../../../ompi/contrib/vt/vt  
</span><br>
<span class="quotelev1">&gt; -D_GNU_SOURCE -DBINDIR=\&quot;/usr/bin\&quot; 
</span><br>
<span class="quotelev1">&gt; -DDATADIR=\&quot;/usr/share/vampirtrace\&quot; -DRFG  -DVT_MEMHOOK -DVT_IOWRAP  
</span><br>
<span class="quotelev1">&gt; -Wall -g -O2 -MT vt_pform_linux.o -MD -MP -MF .deps/vt_pform_linux.Tpo 
</span><br>
<span class="quotelev1">&gt; -c -o vt_pform_linux.o 
</span><br>
<span class="quotelev1">&gt; ../../../../../../../ompi/contrib/vt/vt/vtlib/vt_pform_linux.c
</span><br>
<span class="quotelev1">&gt; ../../../../../../../ompi/contrib/vt/vt/vtlib/vt_pform_linux.c: In 
</span><br>
<span class="quotelev1">&gt; function 'vt_pform_wtime':
</span><br>
<span class="quotelev1">&gt; ../../../../../../../ompi/contrib/vt/vt/vtlib/vt_pform_linux.c:179: 
</span><br>
<span class="quotelev1">&gt; error: impossible constraint in 'asm'
</span><br>
<span class="quotelev1">&gt; make[6]: *** [vt_pform_linux.o] Error 1
</span><br>
<span class="quotelev1">&gt; make[6]: Leaving directory 
</span><br>
<span class="quotelev1">&gt; `/build/buildd/openmpi-1.3/build/shared/ompi/contrib/vt/vt/vtlib'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; VT guys -- any ideas?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group                 Tel: +1-510-495-2352
HPC Research Department                   Fax: +1-510-486-6900
Lawrence Berkeley National Laboratory     
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5263.php">David Robertson: "[OMPI devel] Fortran 90 Interface"</a>
<li><strong>Previous message:</strong> <a href="5261.php">Ralph Castain: "Re: [OMPI devel] RFC: Use of ompi_proc_t flags field"</a>
<li><strong>In reply to:</strong> <a href="5259.php">Jeff Squyres: "[OMPI devel] VT problems on Debian"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5269.php">Matthias Jurenz: "Re: [OMPI devel] VT problems on Debian"</a>
<li><strong>Reply:</strong> <a href="5269.php">Matthias Jurenz: "Re: [OMPI devel] VT problems on Debian"</a>
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
