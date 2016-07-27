<?
$subject_val = "Re: [hwloc-devel] 1.3.2rc1 has escaped";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  8 20:54:18 2012" -->
<!-- isoreceived="20120209015418" -->
<!-- sent="Wed, 08 Feb 2012 17:53:55 -0800" -->
<!-- isosent="20120209015355" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] 1.3.2rc1 has escaped" -->
<!-- id="4F332733.7040405_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F33179B.1010504_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] 1.3.2rc1 has escaped<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-08 20:53:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2837.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.4.1a1r4284)"</a>
<li><strong>Previous message:</strong> <a href="2835.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>In reply to:</strong> <a href="2835.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2844.php">Jeff Squyres: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 2/8/2012 4:47 PM, Paul H. Hargrove wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2/8/2012 4:41 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I do agree w/ Samuel that the BEST solution is to apply &quot;-qhalt=e&quot; 
</span><br>
<span class="quotelev2">&gt;&gt; ONLY to the test(s) where one expects the compiler to through errors 
</span><br>
<span class="quotelev2">&gt;&gt; (rather than warnings) for function calls with argument counts which 
</span><br>
<span class="quotelev2">&gt;&gt; don't match the prototypes.  At the moment, I am 90% certain that the 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;old sched_setaffinity()&quot; probe is the only one fitting that 
</span><br>
<span class="quotelev2">&gt;&gt; description. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am hoping to be able contribute  patch for this soon.
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Patch is attached and is general enough to drop in additional compilers 
<br>
and/or apply the flags to additional configure tests.
<br>
It is also designed to NOT make badly behaving compilers fatal unless 
<br>
sched_setaffinity() is found.
<br>
<p>I believe that this patch either includes or replaces all previously 
<br>
discussed changes for this particular issue.
<br>
NOTE however that this patch is INEFFECTIVE until the setting of 
<br>
$hwloc_c_vendor is fixed (see 
<br>
<a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/02/2827.php">http://www.open-mpi.org/community/lists/hwloc-devel/2012/02/2827.php</a> )
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
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-2836/hwloc_auto_qhalt.patch">hwloc_auto_qhalt.patch</a>
</ul>
<!-- attachment="hwloc_auto_qhalt.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2837.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.4.1a1r4284)"</a>
<li><strong>Previous message:</strong> <a href="2835.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>In reply to:</strong> <a href="2835.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2844.php">Jeff Squyres: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
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
