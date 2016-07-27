<?
$subject_val = "[hwloc-devel] dplace";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 20 11:41:40 2010" -->
<!-- isoreceived="20100420154140" -->
<!-- sent="Tue, 20 Apr 2010 17:41:35 +0200" -->
<!-- isosent="20100420154135" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-devel] dplace" -->
<!-- id="4BCDCB2F.6020309_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [hwloc-devel] dplace<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-20 11:41:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0911.php">Michael Raymond: "Re: [hwloc-devel] dplace"</a>
<li><strong>Previous message:</strong> <a href="0909.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1960"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0911.php">Michael Raymond: "Re: [hwloc-devel] dplace"</a>
<li><strong>Reply:</strong> <a href="0911.php">Michael Raymond: "Re: [hwloc-devel] dplace"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I discovered &quot;dplace&quot; today. I don't know how many people install/use it
<br>
on their cluster, but it's something that looks interesting when you
<br>
don't have advanced binding capabilities in the MPI implementation. For
<br>
instance, you could do:
<br>
&nbsp;&nbsp;$ mpirun -np 8 dplace 0,4,2,6,1,5,3,7 myprogram
<br>
to bind process ranks according to the machine topology.
<br>
<p>hwloc-calc can easily generate such list of physical processors, for
<br>
instance:
<br>
&nbsp;&nbsp;$ hwloc-calc --physical proc:all --pulist
<br>
&nbsp;&nbsp;0,4,2,6,1,5,3,7
<br>
or even restrict of one PU per socket with:
<br>
&nbsp;&nbsp;$ hwloc-calc --physical socket:all.core:0 --pulist
<br>
&nbsp;&nbsp;0,1
<br>
<p>So hwloc-calc could help dplace significantly. Maybe we should put such
<br>
examples somewhere in the doc.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0911.php">Michael Raymond: "Re: [hwloc-devel] dplace"</a>
<li><strong>Previous message:</strong> <a href="0909.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1960"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0911.php">Michael Raymond: "Re: [hwloc-devel] dplace"</a>
<li><strong>Reply:</strong> <a href="0911.php">Michael Raymond: "Re: [hwloc-devel] dplace"</a>
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
