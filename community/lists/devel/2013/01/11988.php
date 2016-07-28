<?
$subject_val = "Re: [OMPI devel] Open MPI (not quite) on Cray XC30";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 25 13:51:01 2013" -->
<!-- isoreceived="20130125185101" -->
<!-- sent="Fri, 25 Jan 2013 10:50:29 -0800" -->
<!-- isosent="20130125185029" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open MPI (not quite) on Cray XC30" -->
<!-- id="CAAvDA16FLXffBEpQKbD5wk-QvgTkR=ReF+oW=br0DUc0fftm2g_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="DF942375-68EE-4ACE-B546-DE3D954CC661_at_open-mpi.org" -->
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
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-25 13:50:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11989.php">Ralph Castain: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<li><strong>Previous message:</strong> <a href="11987.php">Steve Wise: "[OMPI devel] openib unloaded before last mem dereg"</a>
<li><strong>In reply to:</strong> <a href="11964.php">Ralph Castain: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11989.php">Ralph Castain: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<li><strong>Reply:</strong> <a href="11989.php">Ralph Castain: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I was able to compile with openmpi-1.9a1r27905.tar.bz
<br>
<p>I'll report again when I've had an opportunity to run something like ring_c.
<br>
<p>Thanks,
<br>
-Paul
<br>
<p><p>On Tue, Jan 22, 2013 at 6:08 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I went ahead and removed the duplicate code, so this should work now. The
</span><br>
<span class="quotelev1">&gt; problem is that we re-factored the ompi_info/orte-info code, but didn't
</span><br>
<span class="quotelev1">&gt; complete the job - specifically, the orte-info tool didn't get updated.
</span><br>
<span class="quotelev1">&gt; It's about to get revamped yet again when the ompi-rte branch gets
</span><br>
<span class="quotelev1">&gt; committed to the trunk, so I'd rather not do any more with it now.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hopefully, this will be the minimum required.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 22, 2013, at 4:20 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am using the openmpi-1.9a1r27886 tarball and I still see an error for
</span><br>
<span class="quotelev1">&gt; one of the two duplicate symbols:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   CCLD     orte-info
</span><br>
<span class="quotelev1">&gt; ../../../orte/.libs/libopen-rte.a(orte_info_support.o): In function
</span><br>
<span class="quotelev1">&gt; `orte_info_show_orte_version':
</span><br>
<span class="quotelev1">&gt; ../../orte/runtime/orte_info_support.c:(.text+0xe10): multiple definition
</span><br>
<span class="quotelev1">&gt; of `orte_info_show_orte_version'
</span><br>
<span class="quotelev1">&gt; version.o:../../../../orte/tools/orte-info/version.c:(.text+0x2370): first
</span><br>
<span class="quotelev1">&gt; defined here
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Jan 18, 2013 at 3:52 AM, George Bosilca &lt;bosilca_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Luckily for us all the definitions contain the same constant (orte).
</span><br>
<span class="quotelev2">&gt;&gt; r27864 should fix this.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   George.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 18, 2013, at 06:21 , Paul Hargrove &lt;PHHargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My employer has a nice new Cray XC30 (aka Cascade), and I thought I'd
</span><br>
<span class="quotelev2">&gt;&gt; give Open MPI a quick test.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Given that it is INTENDED to be API-compatible with the XE series, I
</span><br>
<span class="quotelev2">&gt;&gt; began configuring with
</span><br>
<span class="quotelev2">&gt;&gt;     CC=cc CXX=CC FC=ftn --with-platform=lanl/cray_xe6/optimized-nopanasas
</span><br>
<span class="quotelev2">&gt;&gt; However, since this is Intel h/w, I commented-out the following 2 lines
</span><br>
<span class="quotelev2">&gt;&gt; in the platform file:
</span><br>
<span class="quotelev2">&gt;&gt;     with_wrapper_cflags=&quot;-march=amdfam10&quot;
</span><br>
<span class="quotelev2">&gt;&gt;     CFLAGS=-march=amdfam10
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am using PrgEnv-gnu/5.0.15, though PrgEnv-intel is the default on our
</span><br>
<span class="quotelev2">&gt;&gt; system
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As far as I know, use of 1.6.x is out - no ugni at all, right?
</span><br>
<span class="quotelev2">&gt;&gt; So, I didn't even try.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I gave openmpi-1.7rc6 a try, but the ALPS headers and libs have moved (as
</span><br>
<span class="quotelev2">&gt;&gt; mentioned in ompi-trunk/config/orte_check_alps.m4).
</span><br>
<span class="quotelev2">&gt;&gt; Perhaps one should CMR the updated-for-CLE-5 configure logic to the 1.7
</span><br>
<span class="quotelev2">&gt;&gt; branch?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Next, I tried a trunk nightly tarball: openmpi-1.9a1r27862.tar.bz2
</span><br>
<span class="quotelev2">&gt;&gt; As I mentioned above, the trunk has the right logic for locating ALPS.
</span><br>
<span class="quotelev2">&gt;&gt; However, it looks like there is some untested code, protected by &quot;#if
</span><br>
<span class="quotelev2">&gt;&gt; WANT_CRAY_PMI2_EXT&quot;, that needs work:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory
</span><br>
<span class="quotelev2">&gt;&gt; `/global/scratch/sd/hargrove/OMPI/openmpi-1.9a1r27862/BUILD/orte/mca/db/pmi'
</span><br>
<span class="quotelev2">&gt;&gt;   CC       db_pmi_component.lo
</span><br>
<span class="quotelev2">&gt;&gt;   CC       db_pmi.lo
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../orte/mca/db/pmi/db_pmi.c: In function 'store':
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../orte/mca/db/pmi/db_pmi.c:202: error: 'ptr' undeclared
</span><br>
<span class="quotelev2">&gt;&gt; (first use in this function)
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../orte/mca/db/pmi/db_pmi.c:202: error: (Each undeclared
</span><br>
<span class="quotelev2">&gt;&gt; identifier is reported only once
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../orte/mca/db/pmi/db_pmi.c:202: error: for each function it
</span><br>
<span class="quotelev2">&gt;&gt; appears in.)
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [db_pmi.lo] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt; `/global/scratch/sd/hargrove/OMPI/openmpi-1.9a1r27862/BUILD/orte/mca/db/pmi'
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Leaving directory
</span><br>
<span class="quotelev2">&gt;&gt; `/global/scratch/sd/hargrove/OMPI/openmpi-1.9a1r27862/BUILD/orte'
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I added the missing &quot;char *ptr&quot; declaration a few lines before it's first
</span><br>
<span class="quotelev2">&gt;&gt; use, and resumed the build.
</span><br>
<span class="quotelev2">&gt;&gt; This time the build terminated at
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory
</span><br>
<span class="quotelev2">&gt;&gt; `/global/scratch/sd/hargrove/OMPI/openmpi-1.9a1r27862/BUILD/opal/tools/wrappers'
</span><br>
<span class="quotelev2">&gt;&gt;   CC       opal_wrapper.o
</span><br>
<span class="quotelev2">&gt;&gt;   CCLD     opal_wrapper
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/ld: attempted static link of dynamic object
</span><br>
<span class="quotelev2">&gt;&gt; `../../../opal/.libs/libopen-pal.so'
</span><br>
<span class="quotelev2">&gt;&gt; collect2: error: ld returned 1 exit status
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So I went back to the platform file and changed
</span><br>
<span class="quotelev2">&gt;&gt;    enable_shared=yes
</span><br>
<span class="quotelev2">&gt;&gt; to
</span><br>
<span class="quotelev2">&gt;&gt;    enable_shared=no
</span><br>
<span class="quotelev2">&gt;&gt; No big deal there - I had to make the same change for our XE6.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; And so I started back at configure (after a &quot;make distclean&quot;, to be
</span><br>
<span class="quotelev2">&gt;&gt; safe), and here is the next error:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Making all in tools/orte-info
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory
</span><br>
<span class="quotelev2">&gt;&gt; `/global/scratch/sd/hargrove/OMPI/openmpi-1.9a1r27862/BUILD/orte/tools/orte-info'
</span><br>
<span class="quotelev2">&gt;&gt;   CCLD     orte-info
</span><br>
<span class="quotelev2">&gt;&gt; ../../../orte/.libs/libopen-rte.a(orte_info_support.o): In function
</span><br>
<span class="quotelev2">&gt;&gt; `orte_info_show_orte_version':
</span><br>
<span class="quotelev2">&gt;&gt; orte_info_support.c:(.text+0xd70): multiple definition of
</span><br>
<span class="quotelev2">&gt;&gt; `orte_info_show_orte_version'
</span><br>
<span class="quotelev2">&gt;&gt; version.o:version.c:(.text+0x4b0): first defined here
</span><br>
<span class="quotelev2">&gt;&gt; ../../../orte/.libs/libopen-rte.a(orte_info_support.o):(.data+0x0):
</span><br>
<span class="quotelev2">&gt;&gt; multiple definition of `orte_info_type_orte'
</span><br>
<span class="quotelev2">&gt;&gt; orte-info.o:(.data+0x10): first defined here
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/ld: link errors found, deleting executable `orte-info'
</span><br>
<span class="quotelev2">&gt;&gt; collect2: error: ld returned 1 exit status
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [orte-info] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am not sure how to fix this, but I would guess this is probably a
</span><br>
<span class="quotelev2">&gt;&gt; simple fix for somebody who knows OMPI's build infrastructure better than I.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev2">&gt;&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt;  _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11988/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11989.php">Ralph Castain: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<li><strong>Previous message:</strong> <a href="11987.php">Steve Wise: "[OMPI devel] openib unloaded before last mem dereg"</a>
<li><strong>In reply to:</strong> <a href="11964.php">Ralph Castain: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11989.php">Ralph Castain: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<li><strong>Reply:</strong> <a href="11989.php">Ralph Castain: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
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
