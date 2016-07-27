<?
$subject_val = "Re: [hwloc-devel] Memory affinity";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 28 15:47:20 2011" -->
<!-- isoreceived="20110228204720" -->
<!-- sent="Tue, 01 Mar 2011 07:47:13 +1100" -->
<!-- isosent="20110228204713" -->
<!-- name="David Singleton" -->
<!-- email="David.Singleton_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Memory affinity" -->
<!-- id="4D6C09D1.6010506_at_anu.edu.au" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="31493_1298919264_4D6BEF5A_31493_1_1_B5D514A5-86B7-478F-95C1-38527C3D4DCB_at_cisco.com" -->
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
<strong>Date:</strong> 2011-02-28 15:47:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2013.php">Guy Streeter: "[hwloc-devel] multiple simultaneous topology inits?"</a>
<li><strong>Previous message:</strong> <a href="2011.php">Brice Goglin: "Re: [hwloc-devel] Memory affinity"</a>
<li><strong>Maybe in reply to:</strong> <a href="2002.php">Jeff Squyres: "[hwloc-devel] Memory affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2014.php">Jeff Squyres: "Re: [hwloc-devel] Memory affinity"</a>
<li><strong>Reply:</strong> <a href="2014.php">Jeff Squyres: "Re: [hwloc-devel] Memory affinity"</a>
<li><strong>Reply:</strong> <a href="2018.php">Brice Goglin: "Re: [hwloc-devel] Memory affinity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 03/01/2011 05:51 AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Feb 28, 2011, at 12:24 PM, Bernd Kallies wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. I have no reason to doubt this person, but was wondering if someone could confirm this (for Linux).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; set_mempolicy(2) of recent 2.6 kernels says:
</span><br>
<span class="quotelev2">&gt;&gt; Process policy is not remembered if the page is swapped out. When such a
</span><br>
<span class="quotelev2">&gt;&gt; page is paged back in, it will use the policy of the process or memory
</span><br>
<span class="quotelev2">&gt;&gt; range that is in effect at the time the page is allocated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ah, interesting.  That implies two different scenarios:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. I set a policy, malloc some memory, that memory gets swapped out, I change the policy, then the memory gets swapped back in.  And it now obeys the new policy.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. I malloc some memory and set an explicit policy with hwloc_set_area_membind*().  That memory then gets swapped out, and later gets swapped back in.  Since the memory will be the same memory range, it'll keep the same policy as I set with hwloc_set_area_membind(), right?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That would seem to imply that I should always hwloc_set_area_membind() if I want it to persist beyond any potential future swapping.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does that sound right?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I dont think you can avoid the problem.  Unless it has changed very recently, Linux swapin_readahead is the main culprit in messing with NUMA locality on that 
<br>
platform.  Faulting a single page causes 8 or 16 or whatever contiguous pages to be read from swap.  An arbitrary contiguous range of pages in swap may not even 
<br>
come from the same process far less the same NUMA node.  My understanding is that since there is no NUMA info with the swap entry, the only policy that can be 
<br>
applied to is that of the faulting vma in the faulting process.  The faulted page will have the desired NUMA placement but possibly not the rest. So swapping 
<br>
mixes different process' NUMA policies leading to a &quot;NUMA diffusion process&quot;.  Here's a contrived example on a 2.6.27 kernel.
<br>
<p>#  Grab 3 lots of 10000MB on a 24GB Nehalem node:
<br>
<p>v1100:~ &gt; numactl --membind=0 ./memory_grabber 10000 &amp;
<br>
[1] 434
<br>
v1100:~ &gt; numactl --membind=1 ./memory_grabber 10000 &amp;
<br>
[2] 435
<br>
v1100:~ &gt; ./memory_grabber 10000  &amp;
<br>
[3] 436
<br>
<p># Time sequence of NUMA page locality for the 3 processes:
<br>
<p>v1100:~ &gt; cat /proc/43?/numa_maps | grep 7ffd861da000
<br>
7ffd861da000 bind:0 anon=2184075 dirty=2184075 active=1104219 N0=2184075
<br>
7ffd861da000 bind:1 anon=1709350 dirty=1709350 active=918142 N1=1709350
<br>
7ffd861da000 default anon=2086028 dirty=2086028 active=1194354 N0=774151 N1=1311877
<br>
<p>v1100:~ &gt; cat /proc/43?/numa_maps | grep 7ffd861da000
<br>
7ffd861da000 bind:0 anon=1777593 dirty=1678821 swapcache=98772 active=744021 N0=1777524 N1=69
<br>
7ffd861da000 bind:1 anon=1649256 dirty=1649256 active=797862 N1=1649256
<br>
7ffd861da000 default anon=2313532 dirty=2143102 swapcache=170430 active=1928372 N0=982483 N1=1331049
<br>
<p>v1100:~ &gt; cat /proc/43?/numa_maps | grep 7ffd861da000
<br>
7ffd861da000 bind:0 anon=1619803 dirty=1521031 swapcache=98772 active=652729 N0=1617878 N1=1925
<br>
7ffd861da000 bind:1 anon=1616983 dirty=1616983 active=771814 N1=1616983
<br>
7ffd861da000 default anon=2393655 dirty=2223225 swapcache=170430 active=2147908 N0=1052167 N1=1341488
<br>
<p>v1100:~ &gt; cat /proc/43?/numa_maps | grep 7ffd861da000
<br>
7ffd861da000 bind:0 anon=1490293 dirty=1391521 swapcache=98772 active=679807 N0=1482914 N1=7379
<br>
7ffd861da000 bind:1 anon=1850875 dirty=1850873 swapcache=2 active=996836 N0=256407 N1=1594468
<br>
7ffd861da000 default anon=2484496 dirty=2314066 swapcache=170430 active=2396456 N0=1083215 N1=1401281
<br>
<p><p>I suspect hwloc_set_area_membind() will do no more than set MPOL_BIND policy for the vma as has happened here.
<br>
<p>One way around this problem is to switch off swapin_readahead but this has a large impact on swap performance and, AFAIK, there's not even a kernel tunable to 
<br>
do so.  As an alternative, we have toyed with running an &quot;anti-entropy&quot; daemon that occasionally runs numa_migrate_pages() on jobs to scoop pages back to where 
<br>
they belong - not pretty.
<br>
<p>Cheers,
<br>
David
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2013.php">Guy Streeter: "[hwloc-devel] multiple simultaneous topology inits?"</a>
<li><strong>Previous message:</strong> <a href="2011.php">Brice Goglin: "Re: [hwloc-devel] Memory affinity"</a>
<li><strong>Maybe in reply to:</strong> <a href="2002.php">Jeff Squyres: "[hwloc-devel] Memory affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2014.php">Jeff Squyres: "Re: [hwloc-devel] Memory affinity"</a>
<li><strong>Reply:</strong> <a href="2014.php">Jeff Squyres: "Re: [hwloc-devel] Memory affinity"</a>
<li><strong>Reply:</strong> <a href="2018.php">Brice Goglin: "Re: [hwloc-devel] Memory affinity"</a>
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
