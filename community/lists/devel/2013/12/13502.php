<?
$subject_val = "[OMPI devel] 1.7.4rc1 build failure: FreeBSD-9";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 19 18:10:39 2013" -->
<!-- isoreceived="20131219231039" -->
<!-- sent="Thu, 19 Dec 2013 15:10:36 -0800" -->
<!-- isosent="20131219231036" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.7.4rc1 build failure: FreeBSD-9" -->
<!-- id="CAAvDA15-sbapPFrjCxxSoXaQsm3B+uz3+3VmFWzsC72MvY+=Sg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] 1.7.4rc1 build failure: FreeBSD-9<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-19 18:10:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13503.php">Paul Hargrove: "[OMPI devel] 1.7.4rc1 build failure: OpenBSD-5 and NetBSD-6"</a>
<li><strong>Previous message:</strong> <a href="13501.php">Ralph Castain: "[OMPI devel] 1.7 series release plans"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13510.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc1 build failure: FreeBSD-9"</a>
<li><strong>Reply:</strong> <a href="13510.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc1 build failure: FreeBSD-9"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I see the failure below when building 1.7.4rc1 on FreeBSD-9 (amd64).
<br>
It looks to be just a missing header, probably sys/stat.h.
<br>
<p>$ gcc --version
<br>
gcc (GCC) 4.2.1 20070831 patched [FreeBSD]
<br>
<p>Only configure option passed was --prefix-...
<br>
<p>-Paul
<br>
<p><p><p>Making all in mca/sharedfp/sm
<br>
&nbsp;&nbsp;CC       sharedfp_sm.lo
<br>
&nbsp;&nbsp;CC       sharedfp_sm_component.lo
<br>
&nbsp;&nbsp;CC       sharedfp_sm_seek.lo
<br>
&nbsp;&nbsp;CC       sharedfp_sm_get_position.lo
<br>
&nbsp;&nbsp;CC       sharedfp_sm_request_position.lo
<br>
&nbsp;&nbsp;CC       sharedfp_sm_write.lo
<br>
&nbsp;&nbsp;CC       sharedfp_sm_iwrite.lo
<br>
&nbsp;&nbsp;CC       sharedfp_sm_read.lo
<br>
&nbsp;&nbsp;CC       sharedfp_sm_iread.lo
<br>
&nbsp;&nbsp;CC       sharedfp_sm_file_open.lo
<br>
/home/phargrov/OMPI/openmpi-1.7.4rc1-freebsd9-amd64/openmpi-1.7.4rc1/ompi/mca/sharedfp/sm/sharedfp_sm_file_open.c:
<br>
In function 'mca_sharedfp_sm_file_open':
<br>
/home/phargrov/OMPI/openmpi-1.7.4rc1-freebsd9-amd64/openmpi-1.7.4rc1/ompi/mca/sharedfp/sm/sharedfp_sm_file_open.c:121:
<br>
error: 'S_IRUSR' undeclared (first use in this function)
<br>
/home/phargrov/OMPI/openmpi-1.7.4rc1-freebsd9-amd64/openmpi-1.7.4rc1/ompi/mca/sharedfp/sm/sharedfp_sm_file_open.c:121:
<br>
error: (Each undeclared identifier is reported only once
<br>
/home/phargrov/OMPI/openmpi-1.7.4rc1-freebsd9-amd64/openmpi-1.7.4rc1/ompi/mca/sharedfp/sm/sharedfp_sm_file_open.c:121:
<br>
error: for each function it appears in.)
<br>
/home/phargrov/OMPI/openmpi-1.7.4rc1-freebsd9-amd64/openmpi-1.7.4rc1/ompi/mca/sharedfp/sm/sharedfp_sm_file_open.c:121:
<br>
error: 'S_IWUSR' undeclared (first use in this function)
<br>
/home/phargrov/OMPI/openmpi-1.7.4rc1-freebsd9-amd64/openmpi-1.7.4rc1/ompi/mca/sharedfp/sm/sharedfp_sm_file_open.c:121:
<br>
error: 'S_IRGRP' undeclared (first use in this function)
<br>
/home/phargrov/OMPI/openmpi-1.7.4rc1-freebsd9-amd64/openmpi-1.7.4rc1/ompi/mca/sharedfp/sm/sharedfp_sm_file_open.c:121:
<br>
error: 'S_IROTH' undeclared (first use in this function)
<br>
*** [sharedfp_sm_file_open.lo] Error code 1
<br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13502/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13503.php">Paul Hargrove: "[OMPI devel] 1.7.4rc1 build failure: OpenBSD-5 and NetBSD-6"</a>
<li><strong>Previous message:</strong> <a href="13501.php">Ralph Castain: "[OMPI devel] 1.7 series release plans"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13510.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc1 build failure: FreeBSD-9"</a>
<li><strong>Reply:</strong> <a href="13510.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc1 build failure: FreeBSD-9"</a>
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
