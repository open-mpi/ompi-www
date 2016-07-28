<?
$subject_val = "Re: [OMPI devel] Open MPI (not quite) on Cray XC30";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 18 06:52:22 2013" -->
<!-- isoreceived="20130118115222" -->
<!-- sent="Fri, 18 Jan 2013 12:52:14 +0100" -->
<!-- isosent="20130118115214" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open MPI (not quite) on Cray XC30" -->
<!-- id="00BC460A-E779-448C-8862-325F424CBDE0_at_icl.utk.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA167KVpj26iLNWKbJ7LHjQJqvbLC8sr9PW5xHBLqth71TA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Open MPI (not quite) on Cray XC30<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-18 06:52:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11947.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MPI-2.2 status #2223, #3127"</a>
<li><strong>Previous message:</strong> <a href="11945.php">George Bosilca: "Re: [OMPI devel] MPI-2.2 status #2223, #3127"</a>
<li><strong>In reply to:</strong> <a href="11944.php">Paul Hargrove: "[OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11960.php">Paul Hargrove: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<li><strong>Reply:</strong> <a href="11960.php">Paul Hargrove: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Luckily for us all the definitions contain the same constant (orte). r27864 should fix this.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Jan 18, 2013, at 06:21 , Paul Hargrove &lt;PHHargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; My employer has a nice new Cray XC30 (aka Cascade), and I thought I'd give Open MPI a quick test.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Given that it is INTENDED to be API-compatible with the XE series, I began configuring with
</span><br>
<span class="quotelev1">&gt;     CC=cc CXX=CC FC=ftn --with-platform=lanl/cray_xe6/optimized-nopanasas
</span><br>
<span class="quotelev1">&gt; However, since this is Intel h/w, I commented-out the following 2 lines in the platform file:
</span><br>
<span class="quotelev1">&gt;     with_wrapper_cflags=&quot;-march=amdfam10&quot;
</span><br>
<span class="quotelev1">&gt;     CFLAGS=-march=amdfam10
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am using PrgEnv-gnu/5.0.15, though PrgEnv-intel is the default on our system
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As far as I know, use of 1.6.x is out - no ugni at all, right?
</span><br>
<span class="quotelev1">&gt; So, I didn't even try.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I gave openmpi-1.7rc6 a try, but the ALPS headers and libs have moved (as mentioned in ompi-trunk/config/orte_check_alps.m4).
</span><br>
<span class="quotelev1">&gt; Perhaps one should CMR the updated-for-CLE-5 configure logic to the 1.7 branch?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Next, I tried a trunk nightly tarball: openmpi-1.9a1r27862.tar.bz2
</span><br>
<span class="quotelev1">&gt; As I mentioned above, the trunk has the right logic for locating ALPS.
</span><br>
<span class="quotelev1">&gt; However, it looks like there is some untested code, protected by &quot;#if WANT_CRAY_PMI2_EXT&quot;, that needs work:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/global/scratch/sd/hargrove/OMPI/openmpi-1.9a1r27862/BUILD/orte/mca/db/pmi'
</span><br>
<span class="quotelev1">&gt;   CC       db_pmi_component.lo
</span><br>
<span class="quotelev1">&gt;   CC       db_pmi.lo
</span><br>
<span class="quotelev1">&gt; ../../../../../orte/mca/db/pmi/db_pmi.c: In function 'store':
</span><br>
<span class="quotelev1">&gt; ../../../../../orte/mca/db/pmi/db_pmi.c:202: error: 'ptr' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; ../../../../../orte/mca/db/pmi/db_pmi.c:202: error: (Each undeclared identifier is reported only once
</span><br>
<span class="quotelev1">&gt; ../../../../../orte/mca/db/pmi/db_pmi.c:202: error: for each function it appears in.)
</span><br>
<span class="quotelev1">&gt; make[2]: *** [db_pmi.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/global/scratch/sd/hargrove/OMPI/openmpi-1.9a1r27862/BUILD/orte/mca/db/pmi'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/global/scratch/sd/hargrove/OMPI/openmpi-1.9a1r27862/BUILD/orte'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I added the missing &quot;char *ptr&quot; declaration a few lines before it's first use, and resumed the build.
</span><br>
<span class="quotelev1">&gt; This time the build terminated at
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/global/scratch/sd/hargrove/OMPI/openmpi-1.9a1r27862/BUILD/opal/tools/wrappers'
</span><br>
<span class="quotelev1">&gt;   CC       opal_wrapper.o
</span><br>
<span class="quotelev1">&gt;   CCLD     opal_wrapper
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: attempted static link of dynamic object `../../../opal/.libs/libopen-pal.so'
</span><br>
<span class="quotelev1">&gt; collect2: error: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So I went back to the platform file and changed
</span><br>
<span class="quotelev1">&gt;    enable_shared=yes
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev1">&gt;    enable_shared=no
</span><br>
<span class="quotelev1">&gt; No big deal there - I had to make the same change for our XE6.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And so I started back at configure (after a &quot;make distclean&quot;, to be safe), and here is the next error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Making all in tools/orte-info
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/global/scratch/sd/hargrove/OMPI/openmpi-1.9a1r27862/BUILD/orte/tools/orte-info'
</span><br>
<span class="quotelev1">&gt;   CCLD     orte-info
</span><br>
<span class="quotelev1">&gt; ../../../orte/.libs/libopen-rte.a(orte_info_support.o): In function `orte_info_show_orte_version':
</span><br>
<span class="quotelev1">&gt; orte_info_support.c:(.text+0xd70): multiple definition of `orte_info_show_orte_version'
</span><br>
<span class="quotelev1">&gt; version.o:version.c:(.text+0x4b0): first defined here
</span><br>
<span class="quotelev1">&gt; ../../../orte/.libs/libopen-rte.a(orte_info_support.o):(.data+0x0): multiple definition of `orte_info_type_orte'
</span><br>
<span class="quotelev1">&gt; orte-info.o:(.data+0x10): first defined here
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: link errors found, deleting executable `orte-info'
</span><br>
<span class="quotelev1">&gt; collect2: error: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; make[2]: *** [orte-info] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am not sure how to fix this, but I would guess this is probably a simple fix for somebody who knows OMPI's build infrastructure better than I.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11946/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11947.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MPI-2.2 status #2223, #3127"</a>
<li><strong>Previous message:</strong> <a href="11945.php">George Bosilca: "Re: [OMPI devel] MPI-2.2 status #2223, #3127"</a>
<li><strong>In reply to:</strong> <a href="11944.php">Paul Hargrove: "[OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11960.php">Paul Hargrove: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<li><strong>Reply:</strong> <a href="11960.php">Paul Hargrove: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
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
