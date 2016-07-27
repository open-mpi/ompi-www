<?
$subject_val = "Re: [hwloc-devel] hwloc-1.7 issue roundup";
include("../../include/msg-header.inc");
?>
<!-- received="Sun May  5 13:09:34 2013" -->
<!-- isoreceived="20130505170934" -->
<!-- sent="Sun, 05 May 2013 12:08:56 -0500" -->
<!-- isosent="20130505170856" -->
<!-- name="Pavan Balaji" -->
<!-- email="balaji_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-1.7 issue roundup" -->
<!-- id="51869228.5000003_at_mcs.anl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="51869150.6060303_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc-1.7 issue roundup<br>
<strong>From:</strong> Pavan Balaji (<em>balaji_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-05 13:08:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3683.php">Pavan Balaji: "[hwloc-devel] hwloc patch suggestions"</a>
<li><strong>Previous message:</strong> <a href="3681.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.7 issue roundup"</a>
<li><strong>In reply to:</strong> <a href="3681.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.7 issue roundup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3684.php">Pavan Balaji: "Re: [hwloc-devel] hwloc-1.7 issue roundup"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 05/05/2013 12:05 PM US Central Time, Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Le 05/05/2013 18:18, Pavan Balaji a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt;  - hwloc's check for whether an explicitly function declaration is
</span><br>
<span class="quotelev2">&gt;&gt; needed (using _HWLOC_CHECK_DECL) was relying on whether a dummy call to
</span><br>
<span class="quotelev2">&gt;&gt; the function throws an error.  This only works if the function
</span><br>
<span class="quotelev2">&gt;&gt; declaration is already present in one of the headers.  If such a
</span><br>
<span class="quotelev2">&gt;&gt; declaration is not present, the test might fail with &quot;implicit function
</span><br>
<span class="quotelev2">&gt;&gt; declaration&quot; with the right CFLAGS.  This leads the m4 macro to think
</span><br>
<span class="quotelev2">&gt;&gt; that the declaration is already there in one of the headers and an
</span><br>
<span class="quotelev2">&gt;&gt; additional declaration is not needed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'll look at this, when/where did you need this? (for documentation and
</span><br>
<span class="quotelev1">&gt; maybe testing one day)
</span><br>
<p>Sorry, forgot to mention.  The fls and flsl function checks fail without
<br>
this in our strict builds.
<br>
<p><span class="quotelev2">&gt;&gt; 2. I had reported an issue with libltdl in embedded mode (also in the
</span><br>
<span class="quotelev2">&gt;&gt; above thread).  I believe Brice is looking into this, so I didn't
</span><br>
<span class="quotelev2">&gt;&gt; investigate it further. 
</span><br>
<span class="quotelev2">&gt;&gt; [...]
</span><br>
<span class="quotelev2">&gt;&gt; I'd appreciate a cleaner fix to this issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am waiting for Jeff's feedback in thread &quot;hwloc embedding vs libltdl&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Not sure yet I will backport this into v1.7.1 since it is somehow
</span><br>
<span class="quotelev1">&gt; intrusive. To be discussed
</span><br>
<p>Ok, I'll carry our workaround forward in the mpich-3.1.x series.
<br>
<p><span class="quotelev1">&gt; To summarize:
</span><br>
<span class="quotelev1">&gt; * 1 partially applied, and the rest will likely be taken care of
</span><br>
<span class="quotelev1">&gt; * 2 needs review by Jeff
</span><br>
<span class="quotelev1">&gt; * 3-4 are fixed
</span><br>
<p>Great.  Thanks.
<br>
<p>&nbsp;-- Pavan
<br>
<p><pre>
-- 
Pavan Balaji
<a href="http://www.mcs.anl.gov/~balaji">http://www.mcs.anl.gov/~balaji</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3683.php">Pavan Balaji: "[hwloc-devel] hwloc patch suggestions"</a>
<li><strong>Previous message:</strong> <a href="3681.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.7 issue roundup"</a>
<li><strong>In reply to:</strong> <a href="3681.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.7 issue roundup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3684.php">Pavan Balaji: "Re: [hwloc-devel] hwloc-1.7 issue roundup"</a>
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
