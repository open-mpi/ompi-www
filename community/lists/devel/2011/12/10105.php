<?
$subject_val = "[OMPI devel] 1.5.5rc1 tested: Solaris 11 hwloc link failure";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 14 04:20:23 2011" -->
<!-- isoreceived="20111214092023" -->
<!-- sent="Wed, 14 Dec 2011 01:19:58 -0800" -->
<!-- isosent="20111214091958" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.5.5rc1 tested: Solaris 11 hwloc link failure" -->
<!-- id="4EE86A3E.5030402_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4EE8588B.5030106_at_lbl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] 1.5.5rc1 tested: Solaris 11 hwloc link failure<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-14 04:19:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10106.php">Paul H. Hargrove: "[OMPI devel] 1.5.5rc1: all my hwloc-related failures"</a>
<li><strong>Previous message:</strong> <a href="10104.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5.5rc1 tested: MacOS 10.4 x86-64 hwloc build failure"</a>
<li><strong>In reply to:</strong> <a href="10104.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5.5rc1 tested: MacOS 10.4 x86-64 hwloc build failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10106.php">Paul H. Hargrove: "[OMPI devel] 1.5.5rc1: all my hwloc-related failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Grumble.  This is getting old.
<br>
<p>Add Solaris 11 on x86-64 to the list of platforms where OMPI is 
<br>
incorrectly trying to link Linux-specific hwloc symbols, even though I 
<br>
can build a stand-alone hwloc w/o problems:
<br>
<span class="quotelev1">&gt; $ uname -a
</span><br>
<span class="quotelev1">&gt; SunOS pcp-j-20 5.11 snv_151a i86pc i386 i86pc Solaris
</span><br>
<span class="quotelev1">&gt; $ gcc --version | head -1
</span><br>
<span class="quotelev1">&gt; gcc (GCC) 3.4.3 (csl-sol210-3_4-20050802)
</span><br>
<span class="quotelev1">&gt; $ make
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt;   CC     opal_wrapper.o
</span><br>
<span class="quotelev1">&gt;   CCLD   opal_wrapper
</span><br>
<span class="quotelev1">&gt; Undefined                       first referenced
</span><br>
<span class="quotelev1">&gt;  symbol                             in file
</span><br>
<span class="quotelev1">&gt; opal_hwloc122_hwloc_set_linux_hooks ../../../opal/.libs/libopen-pal.so
</span><br>
<span class="quotelev1">&gt; opal_hwloc122_hwloc_look_linux      ../../../opal/.libs/libopen-pal.so
</span><br>
<span class="quotelev1">&gt; opal_hwloc122_hwloc_backend_sysfs_exit ../../../opal/.libs/libopen-pal.so
</span><br>
<span class="quotelev1">&gt; opal_hwloc122_hwloc_backend_sysfs_init ../../../opal/.libs/libopen-pal.so
</span><br>
<span class="quotelev1">&gt; ld: fatal: symbol referencing errors. No output written to 
</span><br>
<span class="quotelev1">&gt; .libs/opal_wrapper
</span><br>
<span class="quotelev1">&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; make[2]: *** [opal_wrapper] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory 
</span><br>
<span class="quotelev1">&gt; `/home/phargrov/openmpi-1.5.5rc1/BUILD-dflt/opal/tools/wrappers'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory 
</span><br>
<span class="quotelev1">&gt; `/home/phargrov/openmpi-1.5.5rc1/BUILD-dflt/opal'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<p><p><p><p><p>On 12/14/2011 12:04 AM, Paul H. Hargrove wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, I agree w/ Brice that OMPI is getting something wrong, as 
</span><br>
<span class="quotelev1">&gt; evidenced by the failures to link linux-specific hwloc symbols.
</span><br>
<span class="quotelev1">&gt; My reports (other than the one for RHL8) have been unfairly pointing 
</span><br>
<span class="quotelev1">&gt; at hwloc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
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
<li><strong>Next message:</strong> <a href="10106.php">Paul H. Hargrove: "[OMPI devel] 1.5.5rc1: all my hwloc-related failures"</a>
<li><strong>Previous message:</strong> <a href="10104.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5.5rc1 tested: MacOS 10.4 x86-64 hwloc build failure"</a>
<li><strong>In reply to:</strong> <a href="10104.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5.5rc1 tested: MacOS 10.4 x86-64 hwloc build failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10106.php">Paul H. Hargrove: "[OMPI devel] 1.5.5rc1: all my hwloc-related failures"</a>
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
