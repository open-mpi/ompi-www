<?
$subject_val = "Re: [hwloc-devel] multiple simultaneous topology inits?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 28 16:06:16 2011" -->
<!-- isoreceived="20110228210616" -->
<!-- sent="Mon, 28 Feb 2011 22:06:11 +0100" -->
<!-- isosent="20110228210611" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] multiple simultaneous topology inits?" -->
<!-- id="20110228210611.GG5171_at_const.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="917493661.248850.1298926367564.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] multiple simultaneous topology inits?<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-28 16:06:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2017.php">Brice Goglin: "Re: [hwloc-devel] multiple simultaneous topology inits?"</a>
<li><strong>Previous message:</strong> <a href="2015.php">Jeff Squyres: "Re: [hwloc-devel] multiple simultaneous topology inits?"</a>
<li><strong>Maybe in reply to:</strong> <a href="2013.php">Guy Streeter: "[hwloc-devel] multiple simultaneous topology inits?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Guy Streeter, le Mon 28 Feb 2011 21:52:47 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; I was considering the design of an administration tool in python, and my 
</span><br>
<span class="quotelev1">&gt; original idea was to have each module that needs the topology object create 
</span><br>
<span class="quotelev1">&gt; its own. This means that different parts of the same program (but possibly 
</span><br>
<span class="quotelev1">&gt; in different threads) would call init and load on their own topology 
</span><br>
<span class="quotelev1">&gt; structure, and use that structure in their hwloc routines calls.
</span><br>
<p>This is not a problem.  Did you have a look at the Thread Safety section
<br>
of the doxygen documentation?
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2017.php">Brice Goglin: "Re: [hwloc-devel] multiple simultaneous topology inits?"</a>
<li><strong>Previous message:</strong> <a href="2015.php">Jeff Squyres: "Re: [hwloc-devel] multiple simultaneous topology inits?"</a>
<li><strong>Maybe in reply to:</strong> <a href="2013.php">Guy Streeter: "[hwloc-devel] multiple simultaneous topology inits?"</a>
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
