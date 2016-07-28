<?
$subject_val = "Re: [OMPI devel] 1.5rc5: warning from gcc-4.0.1 on Mac OS 10.4.11 (x86 and ppc)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 26 08:17:53 2010" -->
<!-- isoreceived="20100826121753" -->
<!-- sent="Thu, 26 Aug 2010 14:17:46 +0200" -->
<!-- isosent="20100826121746" -->
<!-- name="Rainer Keller" -->
<!-- email="keller_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.5rc5: warning from gcc-4.0.1 on Mac OS 10.4.11 (x86 and ppc)" -->
<!-- id="201008261417.46419.keller_at_hlrs.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4C749F91.4010502_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.5rc5: warning from gcc-4.0.1 on Mac OS 10.4.11 (x86 and ppc)<br>
<strong>From:</strong> Rainer Keller (<em>keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-26 08:17:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8378.php">Joshua Hursey: "Re: [OMPI devel] Checkpoint/restart question"</a>
<li><strong>Previous message:</strong> <a href="8376.php">Nysal Jan: "Re: [OMPI devel] 1.5rc5: opal_path_nfs test failure on GPFS filesystem"</a>
<li><strong>In reply to:</strong> <a href="8342.php">Paul H. Hargrove: "[OMPI devel] 1.5rc5: warning from gcc-4.0.1 on Mac OS 10.4.11 (x86 and ppc)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Paul,
<br>
thanks for the exhaustive testing.
<br>
<p>This is due to Mac OS not (yet) including the const in:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int pthread_attr_getscope(const pthread_attr_t *attr, int *scope);
<br>
just verified: MacOS X 10.5.8 does contain the const.
<br>
<p>nptl/glibc does contain it in the headers (but not in the man-page).
<br>
<p>Best regards,
<br>
Rainer
<br>
<p><p>On Wednesday 25 August 2010 06:44:01 Paul H. Hargrove wrote:
<br>
<span class="quotelev1">&gt; I get a warning building 1.5rc5 that appears unique to this Mac OS version.
</span><br>
<span class="quotelev1">&gt; It does NOT occur with
</span><br>
<span class="quotelev1">&gt;   Mac OS 10.5.8 for x86
</span><br>
<span class="quotelev1">&gt;   Mac OS 10.6.1 for x86
</span><br>
<span class="quotelev1">&gt;   Mac OS 10.5.8 for ppc
</span><br>
<span class="quotelev1">&gt; Nor does this occur with Open MPI 1.4.3rc1.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ uname -a
</span><br>
<span class="quotelev1">&gt; Darwin irun.lbl.gov 8.11.1 Darwin Kernel Version 8.11.1: Wed Oct 10
</span><br>
<span class="quotelev1">&gt; 18:23:28 PDT 2007; root:xnu-792.25.20~1/RELEASE_I386 i386 i386
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ sw_vers
</span><br>
<span class="quotelev1">&gt; ProductName:    Mac OS X
</span><br>
<span class="quotelev1">&gt; ProductVersion: 10.4.11
</span><br>
<span class="quotelev1">&gt; BuildVersion:   8S2167
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ gcc --version
</span><br>
<span class="quotelev1">&gt; i686-apple-darwin8-gcc-4.0.1 (GCC) 4.0.1 (Apple Computer, Inc. build 5367)
</span><br>
<span class="quotelev1">&gt; Copyright (C) 2005 Free Software Foundation, Inc.
</span><br>
<span class="quotelev1">&gt; This is free software; see the source for copying conditions.  There is NO
</span><br>
<span class="quotelev1">&gt; warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ [path_to]/openmpi-1.5rc5/configure
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ make
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt;   CC     libvt_mt_la-vt_pthreadwrap.lo
</span><br>
<span class="quotelev1">&gt; ../../../../../../ompi/contrib/vt/vt/vtlib/vt_pthreadwrap.c: In function
</span><br>
<span class="quotelev1">&gt; 'VT_pthread_attr_getscope__':
</span><br>
<span class="quotelev1">&gt; ../../../../../../ompi/contrib/vt/vt/vtlib/vt_pthreadwrap.c:365:
</span><br>
<span class="quotelev1">&gt; warning: passing argument 1 of 'pthread_attr_getscope' discards
</span><br>
<span class="quotelev1">&gt; qualifiers from pointer target type
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Same for the equivalent ppc platform:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ uname -a; echo; sw_vers; echo; gcc --version
</span><br>
<span class="quotelev1">&gt; Darwin iwalk.lbl.gov 8.11.0 Darwin Kernel Version 8.11.0: Wed Oct 10
</span><br>
<span class="quotelev1">&gt; 18:26:00 PDT 2007; root:xnu-792.24.17~1/RELEASE_PPC Power Macintosh powerpc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ProductName:    Mac OS X
</span><br>
<span class="quotelev1">&gt; ProductVersion: 10.4.11
</span><br>
<span class="quotelev1">&gt; BuildVersion:   8S165
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; powerpc-apple-darwin8-gcc-4.0.1 (GCC) 4.0.1 (Apple Computer, Inc. build
</span><br>
<span class="quotelev1">&gt; 5341)
</span><br>
<span class="quotelev1">&gt; Copyright (C) 2005 Free Software Foundation, Inc.
</span><br>
<span class="quotelev1">&gt; This is free software; see the source for copying conditions.  There is NO
</span><br>
<span class="quotelev1">&gt; warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<p><pre>
-- 
----------------------------------------------------------------
 Dr.-Ing. Rainer Keller  <a href="http://www.hlrs.de/people/keller">http://www.hlrs.de/people/keller</a>
 HLRS                         Tel: ++49 (0)711-685 6 5858
 Nobelstrasse 19                 Fax: ++49 (0)711-685 6 5832
 70550 Stuttgart                    email: keller_at_[hidden]     
 Germany                             AIM/Skype:rusraink
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8378.php">Joshua Hursey: "Re: [OMPI devel] Checkpoint/restart question"</a>
<li><strong>Previous message:</strong> <a href="8376.php">Nysal Jan: "Re: [OMPI devel] 1.5rc5: opal_path_nfs test failure on GPFS filesystem"</a>
<li><strong>In reply to:</strong> <a href="8342.php">Paul H. Hargrove: "[OMPI devel] 1.5rc5: warning from gcc-4.0.1 on Mac OS 10.4.11 (x86 and ppc)"</a>
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
