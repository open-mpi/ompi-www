<?
$subject_val = "[hwloc-devel] hwloc-distrib: how to start at lower hiearchy level?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul  4 20:41:17 2010" -->
<!-- isoreceived="20100705004117" -->
<!-- sent="Mon, 5 Jul 2010 02:41:07 +0200" -->
<!-- isosent="20100705004107" -->
<!-- name="Jirka Hladky" -->
<!-- email="jhladky_at_[hidden]" -->
<!-- subject="[hwloc-devel] hwloc-distrib: how to start at lower hiearchy level?" -->
<!-- id="201007050241.08296.jhladky_at_redhat.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [hwloc-devel] hwloc-distrib: how to start at lower hiearchy level?<br>
<strong>From:</strong> Jirka Hladky (<em>jhladky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-04 20:41:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1129.php">Brice Goglin: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<li><strong>Previous message:</strong> <a href="1127.php">Jirka Hladky: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1130.php">Brice Goglin: "Re: [hwloc-devel] hwloc-distrib: how to start at lower hiearchy level?"</a>
<li><strong>Reply:</strong> <a href="1130.php">Brice Goglin: "Re: [hwloc-devel] hwloc-distrib: how to start at lower hiearchy level?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I'm using hwloc-distrib quite often to distribute jobs optimally on NUMA 
<br>
boxes. I use it to test linux kernel task - scheduler by comparing runtime of 
<br>
jobs bound to best possible CPU configuration (keeping CPU cache in mind) with 
<br>
runs without CPU affinity set. 
<br>
<p>I just run into strange issue on box with newest Intel's Nehalem CPUs. There 
<br>
are 4 Sockets, each with 8 physical cores and hyper-threading enabled, which 
<br>
gives you 64 OS processors.
<br>
<p>The box has strange NUMA layout - I will need to check why it is so. 
<br>
Basically, there are 3 NUMA nodes - one includes 2 Sockets, other 2 have one 
<br>
Socket associated to each of it.
<br>
<p>hwloc-distrib --single 8 will distribute jobs in the following way:
<br>
3 jobs on NUMANode #0
<br>
3 jobs on NUMANode #1
<br>
2 jobs on NUMANode #2
<br>
<p>lstopo 64.pdf
<br>
for A in $(hwloc-distrib --single 8); do taskset ${A} sleep 100 &amp; done
<br>
lstopo --top top.pdf
<br>
<p>hwloc-distrib does it in fact right but this is not what I want. It's not the 
<br>
best configuration when you consider CPU cache!
<br>
<p>I have figured-out following way how to tell hwloc-distrib to avoid using 
<br>
NUMANodes when computing CPU distribution:
<br>
<p>lstopo --ignore NUMANode No_NUMA.xml
<br>
for A in $(hwloc-distrib --xml No_NUMA.xml --single 8); do taskset ${A} sleep 
<br>
100 &amp; done
<br>
lstopo --top fix.pdf
<br>
<p>I'm wondering if there is a better way how to make &quot;Socket&quot; the top object. 
<br>
Something like:
<br>
hwloc-distrib --ignore NUMANode --single 8
<br>
or
<br>
hwloc-distrib --top_level Socket --single 8
<br>
<p>would be very useful. Is there something like this already? If not would you 
<br>
consider this as an enhancement? 
<br>
<p>Thanks!
<br>
Jirka
<br>
<p><p>


<br><hr>
<ul>
<li>application/pdf attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-1128/fix.pdf">fix.pdf</a>
</ul>
<!-- attachment="fix.pdf" -->
<hr>
<ul>
<li>application/pdf attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-1128/top.pdf">top.pdf</a>
</ul>
<!-- attachment="top.pdf" -->
<hr>
<ul>
<li>application/pdf attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-1128/64.pdf">64.pdf</a>
</ul>
<!-- attachment="64.pdf" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1129.php">Brice Goglin: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<li><strong>Previous message:</strong> <a href="1127.php">Jirka Hladky: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1130.php">Brice Goglin: "Re: [hwloc-devel] hwloc-distrib: how to start at lower hiearchy level?"</a>
<li><strong>Reply:</strong> <a href="1130.php">Brice Goglin: "Re: [hwloc-devel] hwloc-distrib: how to start at lower hiearchy level?"</a>
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
