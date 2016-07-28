<?
$subject_val = "Re: [OMPI devel] Open MPI nightly tarballs suspended / 1.5.5rc3";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 28 18:40:36 2012" -->
<!-- isoreceived="20120228234036" -->
<!-- sent="Tue, 28 Feb 2012 15:40:19 -0800" -->
<!-- isosent="20120228234019" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open MPI nightly tarballs suspended / 1.5.5rc3" -->
<!-- id="4F4D65E3.4040005_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="FA7E77D2-2137-41A5-B1C6-1D50423513DD_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Open MPI nightly tarballs suspended / 1.5.5rc3<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-28 18:40:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10636.php">Paul H. Hargrove: "[OMPI devel] typo in a copyright message"</a>
<li><strong>Previous message:</strong> <a href="10634.php">Jeffrey Squyres: "[OMPI devel] Open MPI nightly tarballs suspended / 1.5.5rc3"</a>
<li><strong>In reply to:</strong> <a href="10634.php">Jeffrey Squyres: "[OMPI devel] Open MPI nightly tarballs suspended / 1.5.5rc3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10644.php">Jeffrey Squyres: "Re: [OMPI devel] Open MPI nightly tarballs suspended / 1.5.5rc3"</a>
<li><strong>Reply:</strong> <a href="10644.php">Jeffrey Squyres: "Re: [OMPI devel] Open MPI nightly tarballs suspended / 1.5.5rc3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Testing 1.5.5rc3 on a &quot;representative sampling&quot; of my many platforms 
<br>
looks good.
<br>
In particular, I've retested various platforms that showed any 
<br>
significant problems previously and found them to be fixed.
<br>
<p>Though minor, I do see that the following patches I've posted are not 
<br>
applied
<br>
+ Add a Mellanox PCI vendor ID to the device params file
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2012/02/10615.php">http://www.open-mpi.org/community/lists/devel/2012/02/10615.php</a>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Posted 13 hours ago and not yet on trunk
<br>
+ Fix show_help_lex.l to avoid undefined behavior (and silence 
<br>
associated warning from flex)
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2012/02/10521.php">http://www.open-mpi.org/community/lists/devel/2012/02/10521.php</a>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Was applied to trunk as r25983
<br>
+ Reorder includes to avoid &quot;'struct in_addr' declared inside parameter 
<br>
list&quot; warnings
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2012/02/10484.php">http://www.open-mpi.org/community/lists/devel/2012/02/10484.php</a>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Was applied to trunk as r25984
<br>
Sorry if I've messed an exiting CMR for those last two.
<br>
No big deal if these are held back for v1.6, but figured I mention them 
<br>
in case their exclusion was unintended.
<br>
<p>I am assuming there is no interest in the MIPS atomics fixes, or the 
<br>
PPC64 atomics work-around for an XLC bug.
<br>
MIPS 1of2: <a href="http://www.open-mpi.org/community/lists/devel/2012/02/10416.php">http://www.open-mpi.org/community/lists/devel/2012/02/10416.php</a>
<br>
MIPS 2of2: <a href="http://www.open-mpi.org/community/lists/devel/2012/02/10417.php">http://www.open-mpi.org/community/lists/devel/2012/02/10417.php</a>
<br>
PPC64/XLC: <a href="http://www.open-mpi.org/community/lists/devel/2012/02/10603.php">http://www.open-mpi.org/community/lists/devel/2012/02/10603.php</a>
<br>
If there *is* interest in these, let me know if there is any assistance 
<br>
I can lend.
<br>
<p>-Paul
<br>
<p>On 2/28/2012 12:44 PM, Jeffrey Squyres wrote:
<br>
<span class="quotelev1">&gt; There is a serious chilled water issue at IU right now; all non-essential servers (including Open MPI's nightly build server) have been turned off.  So we have no new &quot;official&quot; 1.5.5 RC, and no new nightlies will be produced until further notice.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, to keep the 1.5.5 release train going, I've made an &quot;unofficial&quot; 1.5.5rc3 and posted it in the usual location:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/software/ompi/v1.5/">http://www.open-mpi.org/software/ompi/v1.5/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that since there are no nightly tarballs, this rc will be farther along than the latest 1.5 nightly until the nightlies are resumed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Changes since 1.5.5rc2:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Removed the ofud BTL
</span><br>
<span class="quotelev1">&gt; - Updates to README and some copyright notices
</span><br>
<span class="quotelev1">&gt; - Fix the lt_dladvise search that caused VPATH weirdness
</span><br>
<span class="quotelev1">&gt; - Removed the pcie mpool
</span><br>
<span class="quotelev1">&gt; - Bring in some upstream hwloc v1.3 fixes
</span><br>
<span class="quotelev1">&gt; - VT updates:
</span><br>
<span class="quotelev1">&gt;    - non-GNU compiler _FORTIFY_SOURCE fixes
</span><br>
<span class="quotelev1">&gt;    - VT-specific CXXFLAGS
</span><br>
<span class="quotelev1">&gt;    - BlueGene fixes
</span><br>
<span class="quotelev1">&gt; - Fix processor affinity for some old/weird platforms
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
<li><strong>Next message:</strong> <a href="10636.php">Paul H. Hargrove: "[OMPI devel] typo in a copyright message"</a>
<li><strong>Previous message:</strong> <a href="10634.php">Jeffrey Squyres: "[OMPI devel] Open MPI nightly tarballs suspended / 1.5.5rc3"</a>
<li><strong>In reply to:</strong> <a href="10634.php">Jeffrey Squyres: "[OMPI devel] Open MPI nightly tarballs suspended / 1.5.5rc3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10644.php">Jeffrey Squyres: "Re: [OMPI devel] Open MPI nightly tarballs suspended / 1.5.5rc3"</a>
<li><strong>Reply:</strong> <a href="10644.php">Jeffrey Squyres: "Re: [OMPI devel] Open MPI nightly tarballs suspended / 1.5.5rc3"</a>
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
