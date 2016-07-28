<?
$subject_val = "[OMPI users] Error building openmpi-v2.x-dev-1020-ge2a53b3 on Solaris";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 26 06:39:54 2016" -->
<!-- isoreceived="20160126113954" -->
<!-- sent="Tue, 26 Jan 2016 12:37:12 +0100" -->
<!-- isosent="20160126113712" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] Error building openmpi-v2.x-dev-1020-ge2a53b3 on Solaris" -->
<!-- id="56A75A68.2080602_at_informatik.hs-fulda.de" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] Error building openmpi-v2.x-dev-1020-ge2a53b3 on Solaris<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-26 06:37:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28378.php">Gilles Gouaillardet: "Re: [OMPI users] Error building openmpi-v2.x-dev-1020-ge2a53b3 on Solaris"</a>
<li><strong>Previous message:</strong> <a href="28376.php">Gilles Gouaillardet: "Re: [OMPI users] openmpi-1.10.2 cores at mca_coll_libnbc.so"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28378.php">Gilles Gouaillardet: "Re: [OMPI users] Error building openmpi-v2.x-dev-1020-ge2a53b3 on Solaris"</a>
<li><strong>Reply:</strong> <a href="28378.php">Gilles Gouaillardet: "Re: [OMPI users] Error building openmpi-v2.x-dev-1020-ge2a53b3 on Solaris"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>yesterday I tried to build openmpi-v2.x-dev-1020-ge2a53b3 on my
<br>
machines (Solaris 10 Sparc, Solaris 10 x86_64, and openSUSE Linux
<br>
12.1 x86_64) with gcc-5.1.0 and Sun C 5.13. I was successful on
<br>
my Linux machine, but I got the following errors on both Solaris
<br>
platforms.
<br>
<p><p><p>tyr openmpi-v2.x-dev-1020-ge2a53b3-SunOS.sparc.64_cc 33 tail -15 
<br>
log.make.SunOS.sparc.64_cc
<br>
&nbsp;&nbsp;&nbsp;CCLD     mca_fs_ufs.la
<br>
make[2]: Leaving directory 
<br>
`/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-1020-ge2a53b3-SunOS.sparc.64_cc/ompi/mca/fs/ufs'
<br>
Making all in mca/io/ompio
<br>
make[2]: Entering directory 
<br>
`/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-1020-ge2a53b3-SunOS.sparc.64_cc/ompi/mca/io/ompio'
<br>
&nbsp;&nbsp;&nbsp;CC       io_ompio.lo
<br>
&nbsp;&nbsp;&nbsp;CC       io_ompio_component.lo
<br>
&quot;../../../../../openmpi-v2.x-dev-1020-ge2a53b3/ompi/mca/io/ompio/io_ompio_component.c&quot;, 
<br>
line 285: prototype mismatch: 2 args passed, 4 expected
<br>
&quot;../../../../../openmpi-v2.x-dev-1020-ge2a53b3/ompi/mca/io/ompio/io_ompio_component.c&quot;, 
<br>
line 290: prototype mismatch: 2 args passed, 4 expected
<br>
&quot;../../../../../openmpi-v2.x-dev-1020-ge2a53b3/ompi/mca/io/ompio/io_ompio_component.c&quot;, 
<br>
line 296: undefined struct/union member: f_type
<br>
cc: acomp failed for 
<br>
../../../../../openmpi-v2.x-dev-1020-ge2a53b3/ompi/mca/io/ompio/io_ompio_component.c
<br>
make[2]: *** [io_ompio_component.lo] Error 1
<br>
make[2]: Leaving directory 
<br>
`/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-1020-ge2a53b3-SunOS.sparc.64_cc/ompi/mca/io/ompio'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory 
<br>
`/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-1020-ge2a53b3-SunOS.sparc.64_cc/ompi'
<br>
make: *** [all-recursive] Error 1
<br>
tyr openmpi-v2.x-dev-1020-ge2a53b3-SunOS.sparc.64_cc 34
<br>
<p><p><p><p><p>tyr openmpi-v2.x-dev-1020-ge2a53b3-SunOS.sparc.64_gcc 37 tail -29 
<br>
log.make.SunOS.sparc.64_gcc
<br>
&nbsp;&nbsp;&nbsp;CCLD     mca_fs_ufs.la
<br>
make[2]: Leaving directory 
<br>
`/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-1020-ge2a53b3-SunOS.sparc.64_gcc/ompi/mca/fs/ufs'
<br>
Making all in mca/io/ompio
<br>
make[2]: Entering directory 
<br>
`/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-1020-ge2a53b3-SunOS.sparc.64_gcc/ompi/mca/io/ompio'
<br>
&nbsp;&nbsp;&nbsp;CC       io_ompio.lo
<br>
&nbsp;&nbsp;&nbsp;CC       io_ompio_component.lo
<br>
../../../../../openmpi-v2.x-dev-1020-ge2a53b3/ompi/mca/io/ompio/io_ompio_component.c: 
<br>
In function 'file_query':
<br>
../../../../../openmpi-v2.x-dev-1020-ge2a53b3/ompi/mca/io/ompio/io_ompio_component.c:285:23: 
<br>
error: too few arguments to function 'statfs'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;err = statfs (file-&gt;f_filename, &amp;fsbuf);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
In file included from 
<br>
../../../../../openmpi-v2.x-dev-1020-ge2a53b3/ompi/mca/io/ompio/io_ompio_component.c:36:0:
<br>
/usr/include/sys/statfs.h:53:5: note: declared here
<br>
&nbsp;&nbsp;int statfs(const char *, struct statfs *, int, int);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
../../../../../openmpi-v2.x-dev-1020-ge2a53b3/ompi/mca/io/ompio/io_ompio_component.c:290:23: 
<br>
error: too few arguments to function 'statfs'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;err = statfs (dir, &amp;fsbuf);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
In file included from 
<br>
../../../../../openmpi-v2.x-dev-1020-ge2a53b3/ompi/mca/io/ompio/io_ompio_component.c:36:0:
<br>
/usr/include/sys/statfs.h:53:5: note: declared here
<br>
&nbsp;&nbsp;int statfs(const char *, struct statfs *, int, int);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
../../../../../openmpi-v2.x-dev-1020-ge2a53b3/ompi/mca/io/ompio/io_ompio_component.c:296:22: 
<br>
error: 'struct statfs' has no member named 'f_type'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (fsbuf.f_type == LL_SUPER_MAGIC) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
make[2]: *** [io_ompio_component.lo] Error 1
<br>
make[2]: Leaving directory 
<br>
`/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-1020-ge2a53b3-SunOS.sparc.64_gcc/ompi/mca/io/ompio'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory 
<br>
`/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-1020-ge2a53b3-SunOS.sparc.64_gcc/ompi'
<br>
make: *** [all-recursive] Error 1
<br>
tyr openmpi-v2.x-dev-1020-ge2a53b3-SunOS.sparc.64_gcc 38
<br>
<p><p>I would be grateful if somebody can fix the problem. Thank you
<br>
very much for any help in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28378.php">Gilles Gouaillardet: "Re: [OMPI users] Error building openmpi-v2.x-dev-1020-ge2a53b3 on Solaris"</a>
<li><strong>Previous message:</strong> <a href="28376.php">Gilles Gouaillardet: "Re: [OMPI users] openmpi-1.10.2 cores at mca_coll_libnbc.so"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28378.php">Gilles Gouaillardet: "Re: [OMPI users] Error building openmpi-v2.x-dev-1020-ge2a53b3 on Solaris"</a>
<li><strong>Reply:</strong> <a href="28378.php">Gilles Gouaillardet: "Re: [OMPI users] Error building openmpi-v2.x-dev-1020-ge2a53b3 on Solaris"</a>
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
