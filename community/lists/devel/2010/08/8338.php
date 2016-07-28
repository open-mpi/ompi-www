<?
$subject_val = "[OMPI devel] mixed OpenBSD 4.6/i386 results: 1.5rc5 GOOD but 1.4.3rc1 BAD";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 24 22:49:29 2010" -->
<!-- isoreceived="20100825024929" -->
<!-- sent="Tue, 24 Aug 2010 19:49:10 -0700" -->
<!-- isosent="20100825024910" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] mixed OpenBSD 4.6/i386 results: 1.5rc5 GOOD but 1.4.3rc1 BAD" -->
<!-- id="4C7484A6.5080801_at_lbl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] mixed OpenBSD 4.6/i386 results: 1.5rc5 GOOD but 1.4.3rc1 BAD<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-24 22:49:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8339.php">Paul H. Hargrove: "[OMPI devel] OpenBSD-4.6/i386 warns malloc.h is obsolete for 1.4.3rc1 and 1.5rc5"</a>
<li><strong>Previous message:</strong> <a href="8337.php">Paul H. Hargrove: "[OMPI devel] Gcc warnings in datatype test code in 1.5rc5"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have not sifted through logs for warnings, but can report that 1.5rc5 
<br>
builds and passes &quot;gmake check&quot; w/ gcc-3.3.5 on OpenBSD 4.6 on an i386.  
<br>
HOWEVER, 1.4.3rc1 fails to build due to errors in ROMIO:
<br>
<p>$ uname -a
<br>
OpenBSD obsd46-i386.my.domain 4.6 GENERIC#58 i386
<br>
<p>$ gcc --version
<br>
gcc (GCC) 3.3.5 (propolice)
<br>
Copyright (C) 2003 Free Software Foundation, Inc.
<br>
This is free software; see the source for copying conditions.  There is NO
<br>
warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
<br>
<p>$ [path_to]/openmpi-1.4.3rc1/configure
<br>
[...]
<br>
<p>$ gmake
<br>
[...]
<br>
libtool: compile:  gcc -DHAVE_CONFIG_H -I. 
<br>
-I../../../../../../../../ompi/mca/io/romio/romio/adio/common 
<br>
-I../../adio/include -DOMPI_BUILDING=1 
<br>
-I../../../../../../../../ompi/mca/io/romio/romio/../../../../.. 
<br>
-I../../../../../../../../ompi/mca/io/romio/romio/../../../../../opal/include 
<br>
-I../../../../../../../opal/include -I../../../../../../../ompi/include 
<br>
-I../../../../../../../../ompi/mca/io/romio/romio/include 
<br>
-I../../../../../../../../ompi/mca/io/romio/romio/adio/include -O3 
<br>
-DNDEBUG -finline-functions -fno-strict-aliasing -pthread 
<br>
-DHAVE_ROMIOCONF_H -DHAVE_ROMIOCONF_H -I../../include -MT ad_fstype.lo 
<br>
-MD -MP -MF .deps/ad_fstype.Tpo -c 
<br>
../../../../../../../../ompi/mca/io/romio/romio/adio/common/ad_fstype.c  
<br>
-fPIC -DPIC -o .libs/ad_fstype.o
<br>
../../../../../../../../ompi/mca/io/romio/romio/adio/common/ad_fstype.c: 
<br>
In function `ADIO_FileSysType_fncall':
<br>
../../../../../../../../ompi/mca/io/romio/romio/adio/common/ad_fstype.c:339: 
<br>
error: structure has no member named `f_type'
<br>
../../../../../../../../ompi/mca/io/romio/romio/adio/common/ad_fstype.c:362: 
<br>
error: structure has no member named `f_type'
<br>
../../../../../../../../ompi/mca/io/romio/romio/adio/common/ad_fstype.c:383: 
<br>
error: structure has no member named `f_type'
<br>
<p><p>If I configure with --disable-io-romio then there are no errors in 
<br>
&quot;gmake&quot; or in &quot;gmake check&quot;.
<br>
<p>-Paul
<br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="8339.php">Paul H. Hargrove: "[OMPI devel] OpenBSD-4.6/i386 warns malloc.h is obsolete for 1.4.3rc1 and 1.5rc5"</a>
<li><strong>Previous message:</strong> <a href="8337.php">Paul H. Hargrove: "[OMPI devel] Gcc warnings in datatype test code in 1.5rc5"</a>
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
