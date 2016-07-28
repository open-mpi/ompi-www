<?
$subject_val = "Re: [hwloc-users] Re :  lstopo on multiple machines";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 16 10:27:03 2011" -->
<!-- isoreceived="20110816142703" -->
<!-- sent="Tue, 16 Aug 2011 16:26:58 +0200" -->
<!-- isosent="20110816142658" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Re :  lstopo on multiple machines" -->
<!-- id="20110816142658.GD18853_at_type.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="909753241.2016829.1313503764600.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Re :  lstopo on multiple machines<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-16 10:26:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0411.php">Marcelo Alaniz: "Re: [hwloc-users] Re :  lstopo on multiple machines"</a>
<li><strong>Previous message:</strong> <a href="0409.php">Jeff Squyres: "Re: [hwloc-users] Re :  lstopo on multiple machines"</a>
<li><strong>Maybe in reply to:</strong> <a href="0408.php">Brice Goglin: "[hwloc-users] Re :  lstopo on multiple machines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0411.php">Marcelo Alaniz: "Re: [hwloc-users] Re :  lstopo on multiple machines"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres, le Tue 16 Aug 2011 16:09:24 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; I'd be against hwloc automatically spreading across multiple machines.  I think there are plenty of tools to do that already.
</span><br>
<p>I fully agree. There is no way to be able to interact with each and
<br>
every job scheduler anyway.
<br>
<p><span class="quotelev1">&gt; That being said, having better support for being able to aggregate data from multiple hwloc instances (e.g., lstopo) on multiple machines into a single, cohesive map, would be great (waving hands here; I have no specific suggestions).
</span><br>
<p>This is ticket <a href="https://svn.open-mpi.org/trac/hwloc/ticket/23">https://svn.open-mpi.org/trac/hwloc/ticket/23</a>
<br>
We actually already have the basic support for this: SYSTEM and MACHINE
<br>
are different objects, and it is possible (though we don't ship a tool
<br>
for this) to merge existing xml files. There is an example of output in
<br>
tests/xml/8em64t-2mi2ma2c.xml
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0411.php">Marcelo Alaniz: "Re: [hwloc-users] Re :  lstopo on multiple machines"</a>
<li><strong>Previous message:</strong> <a href="0409.php">Jeff Squyres: "Re: [hwloc-users] Re :  lstopo on multiple machines"</a>
<li><strong>Maybe in reply to:</strong> <a href="0408.php">Brice Goglin: "[hwloc-users] Re :  lstopo on multiple machines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0411.php">Marcelo Alaniz: "Re: [hwloc-users] Re :  lstopo on multiple machines"</a>
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
