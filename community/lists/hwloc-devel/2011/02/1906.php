<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3157";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  4 06:58:00 2011" -->
<!-- isoreceived="20110204115800" -->
<!-- sent="Fri, 4 Feb 2011 12:57:55 +0100" -->
<!-- isosent="20110204115755" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3157" -->
<!-- id="20110204115755.GE5539_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1682242818.1764703.1296817430853.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3157<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-04 06:57:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1907.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.2a1r3159)"</a>
<li><strong>Previous message:</strong> <a href="1905.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3157"</a>
<li><strong>Maybe in reply to:</strong> <a href="1904.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3157"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice Goglin, le Fri 04 Feb 2011 12:03:50 +0100, a &#233;crit :
<br>
<span class="quotelev2">&gt; &gt; Mmm, I then wonder whether we should really provide a flag, then, if
</span><br>
<span class="quotelev2">&gt; &gt; it's a matter of calling restrict() afterwards. What would be more
</span><br>
<span class="quotelev2">&gt; &gt; generic and useful is a topology configuration option which restricts
</span><br>
<span class="quotelev2">&gt; &gt; detection to a given cpuset: the core filters out objects outside from
</span><br>
<span class="quotelev2">&gt; &gt; that cpuset, and OS backends can also avoid trying to detect them,
</span><br>
<span class="quotelev2">&gt; &gt; making detection faster.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Right, we can optimize these things later. The above is just an easy implem.
</span><br>
<p>Sure, but the very fact that it can be easily obtained another way makes
<br>
me wonder whether it is worth adding a flag when there is another way.
<br>
(I'm not saying the flag shouldn't be added, but just whether it's worth
<br>
it).
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1907.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.2a1r3159)"</a>
<li><strong>Previous message:</strong> <a href="1905.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3157"</a>
<li><strong>Maybe in reply to:</strong> <a href="1904.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3157"</a>
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
