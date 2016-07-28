<?
$subject_val = "Re: [hwloc-devel] structure assumptions, duplication";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 30 04:10:53 2009" -->
<!-- isoreceived="20090930081053" -->
<!-- sent="Wed, 30 Sep 2009 10:10:47 +0200" -->
<!-- isosent="20090930081047" -->
<!-- name="Fawzi Mohamed" -->
<!-- email="fawzi_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] structure assumptions, duplication" -->
<!-- id="4EA63EC8-C1F9-406E-98AD-181B71304943_at_gmx.ch" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20090930072927.GI5922_at_const.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] structure assumptions, duplication<br>
<strong>From:</strong> Fawzi Mohamed (<em>fawzi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-30 04:10:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0121.php">Brice Goglin: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<li><strong>Previous message:</strong> <a href="0119.php">Fawzi Mohamed: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<li><strong>In reply to:</strong> <a href="0118.php">Samuel Thibault: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0123.php">Samuel Thibault: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<li><strong>Reply:</strong> <a href="0123.php">Samuel Thibault: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 30-set-09, at 09:29, Samuel Thibault wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<p>Hi Samuel,
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Fawzi Mohamed, le Wed 30 Sep 2009 09:16:36 +0200, a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; 1) a fully hierarchical representation of the machine/hardware  
</span><br>
<span class="quotelev2">&gt;&gt; where each level
</span><br>
<span class="quotelev2">&gt;&gt; is a partition, and each level fully covers the previous one (from  
</span><br>
<span class="quotelev2">&gt;&gt; any node you
</span><br>
<span class="quotelev2">&gt;&gt; go through all levels using father/childrens, father/child are just  
</span><br>
<span class="quotelev2">&gt;&gt; one level
</span><br>
<span class="quotelev2">&gt;&gt; away from each other.
</span><br>
<span class="quotelev2">&gt;&gt; This is basically what is there now.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2) outside the hierarchy 1 (but built using its object, probably  
</span><br>
<span class="quotelev2">&gt;&gt; the NUMA
</span><br>
<span class="quotelev2">&gt;&gt; nodes) there will be
</span><br>
<span class="quotelev2">&gt;&gt; 2.1) maybe the full connection graph
</span><br>
<span class="quotelev2">&gt;&gt; 2.2) a hierarchical view of it, like the lgroups, where the levels  
</span><br>
<span class="quotelev2">&gt;&gt; are not
</span><br>
<span class="quotelev2">&gt;&gt; necessarily a partition, and that could also refer not to the  
</span><br>
<span class="quotelev2">&gt;&gt; sublevel, but
</span><br>
<span class="quotelev2">&gt;&gt; directly to lower levels. Going up the hierarchy you get the next  
</span><br>
<span class="quotelev2">&gt;&gt; neighbors.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Err, no, in our plans 2.2 was in 1) already, and levels are thus still
</span><br>
<span class="quotelev1">&gt; partitions, but somehow arbitrary ones, according to heuristics  
</span><br>
<span class="quotelev1">&gt; based on
</span><br>
<span class="quotelev1">&gt; the graph. Isn't that the case with lgroups ? (I haven't ever had  
</span><br>
<span class="quotelev1">&gt; access
</span><br>
<span class="quotelev1">&gt; to a solaris numa machine)
</span><br>
<p>If you look at the example described in the document that I had linked
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://opensolaris.org/os/community/performance/mpo_overview.pdf">http://opensolaris.org/os/community/performance/mpo_overview.pdf</a>
<br>
<p>you see the that for a ring topology some level (that you always get  
<br>
adding the next neighbors) do not form a partition (i.e. they  
<br>
overlap), such an overlap unavoidable if to build the next higher  
<br>
hierarchy you simply add the next neighbors.
<br>
Having a partition is very useful when, for instance instead of  
<br>
looking for a resource you want to restrict/pin a thread, for this  
<br>
reasons there are psets and lpls (lgroup partition loads, intersection  
<br>
of lgrops and processor partition, which are again a partition), and  
<br>
both are used on opensolaris.
<br>
Well you don't have to mirror what solaris does, but I found that  
<br>
quite nice, so I was thinking you wanted to go in that direction.
<br>
For a the ring topology a-b-c-d-a is difficult to find a good  
<br>
partition... and having both partition and non partition views (one  
<br>
used for resource allocation/distribution, the other for resource  
<br>
finding/stealing), is quite clean imho.
<br>
<p>ciao
<br>
Fawzi
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-0120/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0121.php">Brice Goglin: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<li><strong>Previous message:</strong> <a href="0119.php">Fawzi Mohamed: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<li><strong>In reply to:</strong> <a href="0118.php">Samuel Thibault: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0123.php">Samuel Thibault: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<li><strong>Reply:</strong> <a href="0123.php">Samuel Thibault: "Re: [hwloc-devel] structure assumptions, duplication"</a>
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
