<?
$subject_val = "Re: [OMPI devel] 1.7.4rc1 build failure: FreeBSD-9";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 19 19:43:25 2013" -->
<!-- isoreceived="20131220004325" -->
<!-- sent="Thu, 19 Dec 2013 16:43:07 -0800" -->
<!-- isosent="20131220004307" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4rc1 build failure: FreeBSD-9" -->
<!-- id="45B56320-6865-470A-B569-13550E9C9BA8_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA15-sbapPFrjCxxSoXaQsm3B+uz3+3VmFWzsC72MvY+=Sg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7.4rc1 build failure: FreeBSD-9<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-19 19:43:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13511.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc1 build failure: OpenBSD-5 and NetBSD-6"</a>
<li><strong>Previous message:</strong> <a href="13509.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc1 build failure: OpenBSD-5 and NetBSD-6"</a>
<li><strong>In reply to:</strong> <a href="13502.php">Paul Hargrove: "[OMPI devel] 1.7.4rc1 build failure: FreeBSD-9"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fixed and cmr'd
<br>
<p>thanks!
<br>
<p>On Dec 19, 2013, at 3:10 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I see the failure below when building 1.7.4rc1 on FreeBSD-9 (amd64).
</span><br>
<span class="quotelev1">&gt; It looks to be just a missing header, probably sys/stat.h.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ gcc --version
</span><br>
<span class="quotelev1">&gt; gcc (GCC) 4.2.1 20070831 patched [FreeBSD]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Only configure option passed was --prefix-...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Making all in mca/sharedfp/sm
</span><br>
<span class="quotelev1">&gt;   CC       sharedfp_sm.lo
</span><br>
<span class="quotelev1">&gt;   CC       sharedfp_sm_component.lo
</span><br>
<span class="quotelev1">&gt;   CC       sharedfp_sm_seek.lo
</span><br>
<span class="quotelev1">&gt;   CC       sharedfp_sm_get_position.lo
</span><br>
<span class="quotelev1">&gt;   CC       sharedfp_sm_request_position.lo
</span><br>
<span class="quotelev1">&gt;   CC       sharedfp_sm_write.lo
</span><br>
<span class="quotelev1">&gt;   CC       sharedfp_sm_iwrite.lo
</span><br>
<span class="quotelev1">&gt;   CC       sharedfp_sm_read.lo
</span><br>
<span class="quotelev1">&gt;   CC       sharedfp_sm_iread.lo
</span><br>
<span class="quotelev1">&gt;   CC       sharedfp_sm_file_open.lo
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-1.7.4rc1-freebsd9-amd64/openmpi-1.7.4rc1/ompi/mca/sharedfp/sm/sharedfp_sm_file_open.c: In function 'mca_sharedfp_sm_file_open':
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-1.7.4rc1-freebsd9-amd64/openmpi-1.7.4rc1/ompi/mca/sharedfp/sm/sharedfp_sm_file_open.c:121: error: 'S_IRUSR' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-1.7.4rc1-freebsd9-amd64/openmpi-1.7.4rc1/ompi/mca/sharedfp/sm/sharedfp_sm_file_open.c:121: error: (Each undeclared identifier is reported only once
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-1.7.4rc1-freebsd9-amd64/openmpi-1.7.4rc1/ompi/mca/sharedfp/sm/sharedfp_sm_file_open.c:121: error: for each function it appears in.)
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-1.7.4rc1-freebsd9-amd64/openmpi-1.7.4rc1/ompi/mca/sharedfp/sm/sharedfp_sm_file_open.c:121: error: 'S_IWUSR' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-1.7.4rc1-freebsd9-amd64/openmpi-1.7.4rc1/ompi/mca/sharedfp/sm/sharedfp_sm_file_open.c:121: error: 'S_IRGRP' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-1.7.4rc1-freebsd9-amd64/openmpi-1.7.4rc1/ompi/mca/sharedfp/sm/sharedfp_sm_file_open.c:121: error: 'S_IROTH' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; *** [sharedfp_sm_file_open.lo] Error code 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13510/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13511.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc1 build failure: OpenBSD-5 and NetBSD-6"</a>
<li><strong>Previous message:</strong> <a href="13509.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc1 build failure: OpenBSD-5 and NetBSD-6"</a>
<li><strong>In reply to:</strong> <a href="13502.php">Paul Hargrove: "[OMPI devel] 1.7.4rc1 build failure: FreeBSD-9"</a>
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
