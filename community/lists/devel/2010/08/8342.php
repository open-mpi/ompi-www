<?
$subject_val = "[OMPI devel] 1.5rc5: warning from gcc-4.0.1 on Mac OS 10.4.11 (x86 and ppc)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 25 00:44:18 2010" -->
<!-- isoreceived="20100825044418" -->
<!-- sent="Tue, 24 Aug 2010 21:44:01 -0700" -->
<!-- isosent="20100825044401" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.5rc5: warning from gcc-4.0.1 on Mac OS 10.4.11 (x86 and ppc)" -->
<!-- id="4C749F91.4010502_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] 1.5rc5: warning from gcc-4.0.1 on Mac OS 10.4.11 (x86 and ppc)<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-25 00:44:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8343.php">Paul H. Hargrove: "[OMPI devel] 1.5rc5 and 1.4.3rc1: type size warnings in ompi_rb_tree test"</a>
<li><strong>Previous message:</strong> <a href="8341.php">Paul H. Hargrove: "[OMPI devel] Suspicious warnings from gcc-4.5.0 (both 1.4.3rc1 and 1.5rc5)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8377.php">Rainer Keller: "Re: [OMPI devel] 1.5rc5: warning from gcc-4.0.1 on Mac OS 10.4.11 (x86 and ppc)"</a>
<li><strong>Reply:</strong> <a href="8377.php">Rainer Keller: "Re: [OMPI devel] 1.5rc5: warning from gcc-4.0.1 on Mac OS 10.4.11 (x86 and ppc)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I get a warning building 1.5rc5 that appears unique to this Mac OS version.
<br>
It does NOT occur with
<br>
&nbsp;&nbsp;Mac OS 10.5.8 for x86
<br>
&nbsp;&nbsp;Mac OS 10.6.1 for x86
<br>
&nbsp;&nbsp;Mac OS 10.5.8 for ppc
<br>
Nor does this occur with Open MPI 1.4.3rc1.
<br>
<p>$ uname -a
<br>
Darwin irun.lbl.gov 8.11.1 Darwin Kernel Version 8.11.1: Wed Oct 10 
<br>
18:23:28 PDT 2007; root:xnu-792.25.20~1/RELEASE_I386 i386 i386
<br>
<p>$ sw_vers
<br>
ProductName:    Mac OS X
<br>
ProductVersion: 10.4.11
<br>
BuildVersion:   8S2167
<br>
<p>$ gcc --version
<br>
i686-apple-darwin8-gcc-4.0.1 (GCC) 4.0.1 (Apple Computer, Inc. build 5367)
<br>
Copyright (C) 2005 Free Software Foundation, Inc.
<br>
This is free software; see the source for copying conditions.  There is NO
<br>
warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
<br>
<p>$ [path_to]/openmpi-1.5rc5/configure
<br>
[...]
<br>
<p>$ make
<br>
[...]
<br>
&nbsp;&nbsp;CC     libvt_mt_la-vt_pthreadwrap.lo
<br>
../../../../../../ompi/contrib/vt/vt/vtlib/vt_pthreadwrap.c: In function 
<br>
'VT_pthread_attr_getscope__':
<br>
../../../../../../ompi/contrib/vt/vt/vtlib/vt_pthreadwrap.c:365: 
<br>
warning: passing argument 1 of 'pthread_attr_getscope' discards 
<br>
qualifiers from pointer target type
<br>
[...]
<br>
<p><p><p>Same for the equivalent ppc platform:
<br>
<p>$ uname -a; echo; sw_vers; echo; gcc --version
<br>
Darwin iwalk.lbl.gov 8.11.0 Darwin Kernel Version 8.11.0: Wed Oct 10 
<br>
18:26:00 PDT 2007; root:xnu-792.24.17~1/RELEASE_PPC Power Macintosh powerpc
<br>
<p>ProductName:    Mac OS X
<br>
ProductVersion: 10.4.11
<br>
BuildVersion:   8S165
<br>
<p>powerpc-apple-darwin8-gcc-4.0.1 (GCC) 4.0.1 (Apple Computer, Inc. build 
<br>
5341)
<br>
Copyright (C) 2005 Free Software Foundation, Inc.
<br>
This is free software; see the source for copying conditions.  There is NO
<br>
warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
<br>
<p>-Paul
<br>
<p><p><p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8343.php">Paul H. Hargrove: "[OMPI devel] 1.5rc5 and 1.4.3rc1: type size warnings in ompi_rb_tree test"</a>
<li><strong>Previous message:</strong> <a href="8341.php">Paul H. Hargrove: "[OMPI devel] Suspicious warnings from gcc-4.5.0 (both 1.4.3rc1 and 1.5rc5)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8377.php">Rainer Keller: "Re: [OMPI devel] 1.5rc5: warning from gcc-4.0.1 on Mac OS 10.4.11 (x86 and ppc)"</a>
<li><strong>Reply:</strong> <a href="8377.php">Rainer Keller: "Re: [OMPI devel] 1.5rc5: warning from gcc-4.0.1 on Mac OS 10.4.11 (x86 and ppc)"</a>
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
