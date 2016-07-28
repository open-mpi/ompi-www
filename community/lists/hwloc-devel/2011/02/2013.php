<?
$subject_val = "[hwloc-devel] multiple simultaneous topology inits?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 28 15:52:33 2011" -->
<!-- isoreceived="20110228205233" -->
<!-- sent="Mon, 28 Feb 2011 14:52:28 -0600" -->
<!-- isosent="20110228205228" -->
<!-- name="Guy Streeter" -->
<!-- email="streeter_at_[hidden]" -->
<!-- subject="[hwloc-devel] multiple simultaneous topology inits?" -->
<!-- id="4D6C0B0C.3060307_at_redhat.com" -->
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
<strong>Subject:</strong> [hwloc-devel] multiple simultaneous topology inits?<br>
<strong>From:</strong> Guy Streeter (<em>streeter_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-28 15:52:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2014.php">Jeff Squyres: "Re: [hwloc-devel] Memory affinity"</a>
<li><strong>Previous message:</strong> <a href="2012.php">David Singleton: "Re: [hwloc-devel] Memory affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2015.php">Jeff Squyres: "Re: [hwloc-devel] multiple simultaneous topology inits?"</a>
<li><strong>Reply:</strong> <a href="2015.php">Jeff Squyres: "Re: [hwloc-devel] multiple simultaneous topology inits?"</a>
<li><strong>Maybe reply:</strong> <a href="2016.php">Samuel Thibault: "Re: [hwloc-devel] multiple simultaneous topology inits?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I was considering the design of an administration tool in python, and my 
<br>
original idea was to have each module that needs the topology object create 
<br>
its own. This means that different parts of the same program (but possibly in 
<br>
different threads) would call init and load on their own topology structure, 
<br>
and use that structure in their hwloc routines calls.
<br>
Is this a safe/reasonable/efficient way to go, or should I call init and load 
<br>
on only one structure and pass that one around throughout the application?
<br>
<p>thanks,
<br>
--Guy
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2014.php">Jeff Squyres: "Re: [hwloc-devel] Memory affinity"</a>
<li><strong>Previous message:</strong> <a href="2012.php">David Singleton: "Re: [hwloc-devel] Memory affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2015.php">Jeff Squyres: "Re: [hwloc-devel] multiple simultaneous topology inits?"</a>
<li><strong>Reply:</strong> <a href="2015.php">Jeff Squyres: "Re: [hwloc-devel] multiple simultaneous topology inits?"</a>
<li><strong>Maybe reply:</strong> <a href="2016.php">Samuel Thibault: "Re: [hwloc-devel] multiple simultaneous topology inits?"</a>
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
