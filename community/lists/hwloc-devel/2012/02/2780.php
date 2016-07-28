<?
$subject_val = "Re: [hwloc-devel] Status of &quot;Paul's bugs&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  1 20:43:46 2012" -->
<!-- isoreceived="20120202014346" -->
<!-- sent="Wed, 01 Feb 2012 17:43:07 -0800" -->
<!-- isosent="20120202014307" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Status of &amp;quot;Paul's bugs&amp;quot;" -->
<!-- id="4F29EA2B.3070201_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F29B295.4080609_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Status of &quot;Paul's bugs&quot;<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-01 20:43:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2781.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.5a1r4237)"</a>
<li><strong>Previous message:</strong> <a href="2779.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.4 &quot;gmake check&quot; failure on Solaris-10/SPARC/gccfss [PATCH]"</a>
<li><strong>In reply to:</strong> <a href="2768.php">Paul H. Hargrove: "[hwloc-devel] Status of &quot;Paul's bugs&quot;"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Updates as of 17:30 US Pacific time
<br>
<p>On 2/1/2012 1:45 PM, Paul H. Hargrove wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The following two remain, as far as I know, UNRESOLVED:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; + hwloc-1.3.1 &quot;gmake check&quot; failure on Solaris-10/SPARC/gccfss
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/01/2729.php">http://www.open-mpi.org/community/lists/hwloc-devel/2012/01/2729.php</a>
</span><br>
<span class="quotelev1">&gt; For this compiler the ffs() implementation is missing from libgcc 
</span><br>
<span class="quotelev1">&gt; (<a href="https://forums.oracle.com/forums/thread.jspa?threadID=1997328">https://forums.oracle.com/forums/thread.jspa?threadID=1997328</a>)
</span><br>
<span class="quotelev1">&gt; Hwloc could either:
</span><br>
<span class="quotelev1">&gt; 1) Detect this compiler at configure time and modify misc.h to pretend 
</span><br>
<span class="quotelev1">&gt; ffs() is missing
</span><br>
<span class="quotelev1">&gt; 2) Document this compiler as broken/unsupported
</span><br>
<p>I've posted a patch to implement approach #1.
<br>
Others will need to decide if the approach is acceptable.
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; + hwloc-1.3.1 assertion failures on Linux/POWER7
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/01/2733.php">http://www.open-mpi.org/community/lists/hwloc-devel/2012/01/2733.php</a>
</span><br>
<span class="quotelev1">&gt; Brice has requested more info off-list, which I have provided.
</span><br>
<span class="quotelev1">&gt; There are actually 2 issues in that thread:
</span><br>
<span class="quotelev1">&gt; 1) XLC appears to be doing bad things w/ the set_affinity code (also 
</span><br>
<span class="quotelev1">&gt; seen by Chris Samuel).
</span><br>
<p>I tracked this down to xlc passing a configure test that should have failed.
<br>
The work-around is &quot;CFLAGS=-qhalt=e&quot;, and there have been discussions 
<br>
about how to enforce that.
<br>
Approaches range from just documentation to various levels of &quot;enforcement&quot;.
<br>
The discussion has not moved toward a specific resolution.
<br>
<p><span class="quotelev1">&gt; 2) Assertion failures, possibly related to IBM's virtualization, and 
</span><br>
<span class="quotelev1">&gt; present w/ both gcc and xlc.
</span><br>
<p>Brice has stated that use of Linux cgroups can reproduce something 
<br>
similar to my virtual node.
<br>
He says that has exposed problems that may or may not be related to mine.
<br>
<p><p>-Paul
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-2780/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2781.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.5a1r4237)"</a>
<li><strong>Previous message:</strong> <a href="2779.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.4 &quot;gmake check&quot; failure on Solaris-10/SPARC/gccfss [PATCH]"</a>
<li><strong>In reply to:</strong> <a href="2768.php">Paul H. Hargrove: "[hwloc-devel] Status of &quot;Paul's bugs&quot;"</a>
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
