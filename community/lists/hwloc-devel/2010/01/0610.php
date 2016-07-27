<?
$subject_val = "Re: [hwloc-devel] memory size attributes";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 16 08:04:56 2010" -->
<!-- isoreceived="20100116130456" -->
<!-- sent="Sat, 16 Jan 2010 06:59:40 -0600" -->
<!-- isosent="20100116125940" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] memory size attributes" -->
<!-- id="58D723FE08DC6A4398E6596E38F3FA1705669D_at_XMB-RCD-205.cisco.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="[hwloc-devel] memory size attributes" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] memory size attributes<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-16 07:59:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0611.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] memory size attributes"</a>
<li><strong>Previous message:</strong> <a href="0609.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] parent vs father"</a>
<li><strong>Maybe in reply to:</strong> <a href="0599.php">Brice Goglin: "[hwloc-devel] memory size attributes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0611.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] memory size attributes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Perhaps we should distinguish between memory in this object and memory that is accessible by this object...?
<br>

<br>
I.e., cache and numa node can have x local memory. System/machine may have 0 local memory but (sum of children) accessible memory. 
<br>

<br>
Specifically:
<br>

<br>
1 I think it is a common enough action to want to know how much memory there is on a machine/system that hwloc should do the sum. 
<br>

<br>
2 maybe local-kb can be an attribute of relevant objects, but total-kb can be an attribute of machine/system/whatever (i.e., anything that can have children that have local-kb). This keeps the values and meanings separate. 
<br>

<br>

<br>
-jms
<br>
Sent from my PDA.  No type good.
<br>

<br>
----- Original Message -----
<br>
From: hwloc-devel-bounces_at_[hidden] &lt;hwloc-devel-bounces_at_[hidden]&gt;
<br>
To: hwloc development &lt;hwloc-devel_at_[hidden]&gt;
<br>
Sent: Wed Jan 13 08:40:49 2010
<br>
Subject: [hwloc-devel] memory size attributes
<br>

<br>
Hello,
<br>

<br>
While cleaning the System/Machine root types, I wondered what we
<br>
actually want to store in memory_kB attributes. It looks obvious for
<br>
Caches and NUMA nodes. But I am not sure about Machines and Systems.
<br>

<br>
If we have a machine with 2 NUMA nodes, should the machine memory size
<br>
be the sum the sizes of both NUMA node sizes? Or should it be 0 since
<br>
the machine has no memory except in NUMA nodes? Same question for a
<br>
Kerrighed system assembling 2 machines.
<br>

<br>
Then, if we have 1 Misc object grouping some NUMA nodes that are close
<br>
to each other: Should we store the total memory size of these nodes in
<br>
the Misc object attribute as well? We have the total memory size in the
<br>
NUMA node object (below misc) and in the machine object (above misc),
<br>
why not in Misc too? I am not saying that I want it, I am saying that
<br>
it's not very consistent.
<br>

<br>
So I wonder if we should just not sum anymore and let the application do
<br>
the math when it actually needs the sum. A quick helper with
<br>
get_next_obj_by_type( ... NODE) would work.
<br>

<br>
Or we need to document memory size attributes better:
<br>
* NUMA node: set of memory that can be accessed with the same access
<br>
time from other objects
<br>
* machine: set of cache-coherent memory, can be made of multiple NUMA nodes
<br>
* system: set of memory that is virtually accessible, but may not be
<br>
cache-coherent
<br>

<br>
Brice
<br>

<br>
_______________________________________________
<br>
hwloc-devel mailing list
<br>
hwloc-devel_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-0610/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0611.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] memory size attributes"</a>
<li><strong>Previous message:</strong> <a href="0609.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] parent vs father"</a>
<li><strong>Maybe in reply to:</strong> <a href="0599.php">Brice Goglin: "[hwloc-devel] memory size attributes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0611.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] memory size attributes"</a>
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
