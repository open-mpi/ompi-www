<?
$subject_val = "Re: [hwloc-devel] Memory affinity";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 28 16:38:03 2011" -->
<!-- isoreceived="20110228213803" -->
<!-- sent="Tue, 01 Mar 2011 08:37:52 +1100" -->
<!-- isosent="20110228213752" -->
<!-- name="David Singleton" -->
<!-- email="David.Singleton_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Memory affinity" -->
<!-- id="4D6C15B0.30504_at_anu.edu.au" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EB4EE502-AB36-49D2-8A6F-B5FBD8A47864_at_cisco.com" -->
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
<strong>Date:</strong> 2011-02-28 16:37:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2021.php">Brice Goglin: "Re: [hwloc-devel] Memory affinity"</a>
<li><strong>Previous message:</strong> <a href="2019.php">Jeff Squyres: "Re: [hwloc-devel] Memory affinity"</a>
<li><strong>In reply to:</strong> <a href="2014.php">Jeff Squyres: "Re: [hwloc-devel] Memory affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2018.php">Brice Goglin: "Re: [hwloc-devel] Memory affinity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 03/01/2011 08:01 AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Feb 28, 2011, at 3:47 PM, David Singleton wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I dont think you can avoid the problem.  Unless it has changed very recently, Linux swapin_readahead is the main culprit in messing with NUMA locality on that platform.  Faulting a single page causes 8 or 16 or whatever contiguous pages to be read from swap.  An arbitrary contiguous range of pages in swap may not even come from the same process far less the same NUMA node.  My understanding is that since there is no NUMA info with the swap entry, the only policy that can be applied to is that of the faulting vma in the faulting process.  The faulted page will have the desired NUMA placement but possibly not the rest. So swapping mixes different process' NUMA policies leading to a &quot;NUMA diffusion process&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That is terrible!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is the only way to avoid this to pin the memory so that it doesn't get swapped out?  (which is evil in its own way)
</span><br>
<p>AFAIK, yes.  I understand various heuristics have been added to the swap code to improve the probability of good NUMA placement but still no guarantees.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here's a contrived example on a 2.6.27 kernel.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #  Grab 3 lots of 10000MB on a 24GB Nehalem node:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; v1100:~&gt;  numactl --membind=0 ./memory_grabber 10000&amp;
</span><br>
<span class="quotelev2">&gt;&gt; [1] 434
</span><br>
<span class="quotelev2">&gt;&gt; v1100:~&gt;  numactl --membind=1 ./memory_grabber 10000&amp;
</span><br>
<span class="quotelev2">&gt;&gt; [2] 435
</span><br>
<span class="quotelev2">&gt;&gt; v1100:~&gt;  ./memory_grabber 10000&amp;
</span><br>
<span class="quotelev2">&gt;&gt; [3] 436
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # Time sequence of NUMA page locality for the 3 processes:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; v1100:~&gt;  cat /proc/43?/numa_maps | grep 7ffd861da000
</span><br>
<span class="quotelev2">&gt;&gt; 7ffd861da000 bind:0 anon=2184075 dirty=2184075 active=1104219 N0=2184075
</span><br>
<span class="quotelev2">&gt;&gt; 7ffd861da000 bind:1 anon=1709350 dirty=1709350 active=918142 N1=1709350
</span><br>
<span class="quotelev2">&gt;&gt; 7ffd861da000 default anon=2086028 dirty=2086028 active=1194354 N0=774151 N1=1311877
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; v1100:~&gt;  cat /proc/43?/numa_maps | grep 7ffd861da000
</span><br>
<span class="quotelev2">&gt;&gt; 7ffd861da000 bind:0 anon=1777593 dirty=1678821 swapcache=98772 active=744021 N0=1777524 N1=69
</span><br>
<span class="quotelev2">&gt;&gt; 7ffd861da000 bind:1 anon=1649256 dirty=1649256 active=797862 N1=1649256
</span><br>
<span class="quotelev2">&gt;&gt; 7ffd861da000 default anon=2313532 dirty=2143102 swapcache=170430 active=1928372 N0=982483 N1=1331049
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; v1100:~&gt;  cat /proc/43?/numa_maps | grep 7ffd861da000
</span><br>
<span class="quotelev2">&gt;&gt; 7ffd861da000 bind:0 anon=1619803 dirty=1521031 swapcache=98772 active=652729 N0=1617878 N1=1925
</span><br>
<span class="quotelev2">&gt;&gt; 7ffd861da000 bind:1 anon=1616983 dirty=1616983 active=771814 N1=1616983
</span><br>
<span class="quotelev2">&gt;&gt; 7ffd861da000 default anon=2393655 dirty=2223225 swapcache=170430 active=2147908 N0=1052167 N1=1341488
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; v1100:~&gt;  cat /proc/43?/numa_maps | grep 7ffd861da000
</span><br>
<span class="quotelev2">&gt;&gt; 7ffd861da000 bind:0 anon=1490293 dirty=1391521 swapcache=98772 active=679807 N0=1482914 N1=7379
</span><br>
<span class="quotelev2">&gt;&gt; 7ffd861da000 bind:1 anon=1850875 dirty=1850873 swapcache=2 active=996836 N0=256407 N1=1594468
</span><br>
<span class="quotelev2">&gt;&gt; 7ffd861da000 default anon=2484496 dirty=2314066 swapcache=170430 active=2396456 N0=1083215 N1=1401281
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm sorry; I'm not too familiar with the output of /proc/*/numa_maps -- what is this showing?  I see some entries switching from active=X to swapcache=X, assumedly meaning that they have been swapped out...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Apologies. It's the N0 and N1 that are of interest - the number of pages on the two NUMA nodes.  We start with the distribution in each process aligned with 
<br>
their memory policy. But as swapping occurs we see pages allocated on the &quot;other&quot; NUMA node in the two processes that are supposed bound to one NUMA node. (The
<br>
third process is just there to cause paging.)
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2021.php">Brice Goglin: "Re: [hwloc-devel] Memory affinity"</a>
<li><strong>Previous message:</strong> <a href="2019.php">Jeff Squyres: "Re: [hwloc-devel] Memory affinity"</a>
<li><strong>In reply to:</strong> <a href="2014.php">Jeff Squyres: "Re: [hwloc-devel] Memory affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2018.php">Brice Goglin: "Re: [hwloc-devel] Memory affinity"</a>
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
