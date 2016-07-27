<?
$subject_val = "Re: [hwloc-devel] Memory affinity";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 28 16:52:27 2011" -->
<!-- isoreceived="20110228215227" -->
<!-- sent="Tue, 01 Mar 2011 08:52:21 +1100" -->
<!-- isosent="20110228215221" -->
<!-- name="David Singleton" -->
<!-- email="David.Singleton_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Memory affinity" -->
<!-- id="4D6C1915.5030201_at_anu.edu.au" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="11975_1298929505_4D6C1760_11975_10551_1_165F2250-841A-406C-A1B3-04A4651621CD_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Memory affinity<br>
<strong>From:</strong> David Singleton (<em>David.Singleton_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-28 16:52:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2025.php">Jeff Squyres: "Re: [hwloc-devel] Memory affinity"</a>
<li><strong>Previous message:</strong> <a href="2023.php">David Singleton: "Re: [hwloc-devel] Memory affinity"</a>
<li><strong>Maybe in reply to:</strong> <a href="2002.php">Jeff Squyres: "[hwloc-devel] Memory affinity"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 03/01/2011 08:44 AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Feb 28, 2011, at 4:39 PM, Brice Goglin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So: binding + pinning = binding (as long as you can ensure that the binding + pinning was atomic!).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If the application swaps for real, do you really care about NUMA
</span><br>
<span class="quotelev2">&gt;&gt; locality ? It seems to me that the overhead of accessing distant NUMA
</span><br>
<span class="quotelev2">&gt;&gt; memory may be negligible against the cost of swapping.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; True, but what if the swapping was temporary?  The overhead due to swap out/swap in may be tiny in comparison to the longer-lasting effects that it causes (putting your memory far away, when then sucks up memory and bus bandwidth, etc.).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Exactly our scenario.  We use suspend/resume to run large parallel jobs.  There will be a relatively short period of paging (of suspended jobs) while the 
<br>
incoming job makes room for itself on the NUMA nodes it wants and from then on it has ideal NUMA placement. The killer is when the suspended job is finally 
<br>
resumed - it's ideal NUMA placement gets partially trashed.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2025.php">Jeff Squyres: "Re: [hwloc-devel] Memory affinity"</a>
<li><strong>Previous message:</strong> <a href="2023.php">David Singleton: "Re: [hwloc-devel] Memory affinity"</a>
<li><strong>Maybe in reply to:</strong> <a href="2002.php">Jeff Squyres: "[hwloc-devel] Memory affinity"</a>
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
