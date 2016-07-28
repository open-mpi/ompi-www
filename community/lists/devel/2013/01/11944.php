<?
$subject_val = "[OMPI devel] Open MPI (not quite) on Cray XC30";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 18 00:22:08 2013" -->
<!-- isoreceived="20130118052208" -->
<!-- sent="Thu, 17 Jan 2013 21:21:58 -0800" -->
<!-- isosent="20130118052158" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] Open MPI (not quite) on Cray XC30" -->
<!-- id="CAAvDA167KVpj26iLNWKbJ7LHjQJqvbLC8sr9PW5xHBLqth71TA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] Open MPI (not quite) on Cray XC30<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-18 00:21:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11945.php">George Bosilca: "Re: [OMPI devel] MPI-2.2 status #2223, #3127"</a>
<li><strong>Previous message:</strong> <a href="11943.php">Paul Hargrove: "Re: [OMPI devel] 1.6.4rc1 has been posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11946.php">George Bosilca: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<li><strong>Reply:</strong> <a href="11946.php">George Bosilca: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My employer has a nice new Cray XC30 (aka Cascade), and I thought I'd give
<br>
Open MPI a quick test.
<br>
<p>Given that it is INTENDED to be API-compatible with the XE series, I began
<br>
configuring with
<br>
&nbsp;&nbsp;&nbsp;&nbsp;CC=cc CXX=CC FC=ftn --with-platform=lanl/cray_xe6/optimized-nopanasas
<br>
However, since this is Intel h/w, I commented-out the following 2 lines in
<br>
the platform file:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;with_wrapper_cflags=&quot;-march=amdfam10&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;CFLAGS=-march=amdfam10
<br>
<p>I am using PrgEnv-gnu/5.0.15, though PrgEnv-intel is the default on our
<br>
system
<br>
<p>As far as I know, use of 1.6.x is out - no ugni at all, right?
<br>
So, I didn't even try.
<br>
<p>I gave openmpi-1.7rc6 a try, but the ALPS headers and libs have moved (as
<br>
mentioned in ompi-trunk/config/orte_check_alps.m4).
<br>
Perhaps one should CMR the updated-for-CLE-5 configure logic to the 1.7
<br>
branch?
<br>
<p>Next, I tried a trunk nightly tarball: openmpi-1.9a1r27862.tar.bz2
<br>
As I mentioned above, the trunk has the right logic for locating ALPS.
<br>
However, it looks like there is some untested code, protected by &quot;#if
<br>
WANT_CRAY_PMI2_EXT&quot;, that needs work:
<br>
<p>make[2]: Entering directory
<br>
`/global/scratch/sd/hargrove/OMPI/openmpi-1.9a1r27862/BUILD/orte/mca/db/pmi'
<br>
&nbsp;&nbsp;CC       db_pmi_component.lo
<br>
&nbsp;&nbsp;CC       db_pmi.lo
<br>
../../../../../orte/mca/db/pmi/db_pmi.c: In function 'store':
<br>
../../../../../orte/mca/db/pmi/db_pmi.c:202: error: 'ptr' undeclared (first
<br>
use in this function)
<br>
../../../../../orte/mca/db/pmi/db_pmi.c:202: error: (Each undeclared
<br>
identifier is reported only once
<br>
../../../../../orte/mca/db/pmi/db_pmi.c:202: error: for each function it
<br>
appears in.)
<br>
make[2]: *** [db_pmi.lo] Error 1
<br>
make[2]: Leaving directory
<br>
`/global/scratch/sd/hargrove/OMPI/openmpi-1.9a1r27862/BUILD/orte/mca/db/pmi'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory
<br>
`/global/scratch/sd/hargrove/OMPI/openmpi-1.9a1r27862/BUILD/orte'
<br>
make: *** [all-recursive] Error 1
<br>
<p>I added the missing &quot;char *ptr&quot; declaration a few lines before it's first
<br>
use, and resumed the build.
<br>
This time the build terminated at
<br>
<p>make[2]: Entering directory
<br>
`/global/scratch/sd/hargrove/OMPI/openmpi-1.9a1r27862/BUILD/opal/tools/wrappers'
<br>
&nbsp;&nbsp;CC       opal_wrapper.o
<br>
&nbsp;&nbsp;CCLD     opal_wrapper
<br>
/usr/bin/ld: attempted static link of dynamic object
<br>
`../../../opal/.libs/libopen-pal.so'
<br>
collect2: error: ld returned 1 exit status
<br>
<p>So I went back to the platform file and changed
<br>
&nbsp;&nbsp;&nbsp;enable_shared=yes
<br>
to
<br>
&nbsp;&nbsp;&nbsp;enable_shared=no
<br>
No big deal there - I had to make the same change for our XE6.
<br>
<p>And so I started back at configure (after a &quot;make distclean&quot;, to be safe),
<br>
and here is the next error:
<br>
<p>Making all in tools/orte-info
<br>
make[2]: Entering directory
<br>
`/global/scratch/sd/hargrove/OMPI/openmpi-1.9a1r27862/BUILD/orte/tools/orte-info'
<br>
&nbsp;&nbsp;CCLD     orte-info
<br>
../../../orte/.libs/libopen-rte.a(orte_info_support.o): In function
<br>
`orte_info_show_orte_version':
<br>
orte_info_support.c:(.text+0xd70): multiple definition of
<br>
`orte_info_show_orte_version'
<br>
version.o:version.c:(.text+0x4b0): first defined here
<br>
../../../orte/.libs/libopen-rte.a(orte_info_support.o):(.data+0x0):
<br>
multiple definition of `orte_info_type_orte'
<br>
orte-info.o:(.data+0x10): first defined here
<br>
/usr/bin/ld: link errors found, deleting executable `orte-info'
<br>
collect2: error: ld returned 1 exit status
<br>
make[2]: *** [orte-info] Error 1
<br>
<p>I am not sure how to fix this, but I would guess this is probably a simple
<br>
fix for somebody who knows OMPI's build infrastructure better than I.
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11944/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11945.php">George Bosilca: "Re: [OMPI devel] MPI-2.2 status #2223, #3127"</a>
<li><strong>Previous message:</strong> <a href="11943.php">Paul Hargrove: "Re: [OMPI devel] 1.6.4rc1 has been posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11946.php">George Bosilca: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<li><strong>Reply:</strong> <a href="11946.php">George Bosilca: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
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
