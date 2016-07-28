<?
$subject_val = "[hwloc-devel] CPU Model and type";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  8 14:57:31 2011" -->
<!-- isoreceived="20110908185731" -->
<!-- sent="Thu, 08 Sep 2011 14:57:25 -0400" -->
<!-- isosent="20110908185725" -->
<!-- name="TERRY DONTJE" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="[hwloc-devel] CPU Model and type" -->
<!-- id="4E691015.2060800_at_oracle.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [hwloc-devel] CPU Model and type<br>
<strong>From:</strong> TERRY DONTJE (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-08 14:57:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2403.php">Brice Goglin: "Re: [hwloc-devel] CPU Model and type"</a>
<li><strong>Previous message:</strong> <a href="2401.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3rc2r3771)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2403.php">Brice Goglin: "Re: [hwloc-devel] CPU Model and type"</a>
<li><strong>Reply:</strong> <a href="2403.php">Brice Goglin: "Re: [hwloc-devel] CPU Model and type"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I wanted to verify that I am not overlooking something, but is there any 
<br>
information stored in the hwloc topology tree that contains the CPU 
<br>
Model and Type of chips in a machine?  The closest I came was the 
<br>
Machine &quot;Architecture&quot; info object.  Unfortunately this object is not 
<br>
specific enough so I am considering adding a couple info objects 
<br>
(CPU_Model and CPU_Type) to the HWLOC_OBJ_SOCKET objects or maybe to the 
<br>
Machine object in topology_solaris.c in the OMPI hwloc source base.
<br>
<p>First does that make sense and secondly does this sound like it might be 
<br>
useful enough outside of OMPI that you'd want to buy back the changes?  
<br>
There is similar data that can be gotten for Linux too.  Though I 
<br>
personally only need this for Solaris/SPARC systems.
<br>
<p>thanks,
<br>
<pre>
-- 
Oracle
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-2402/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/hwloc-devel/att-2402/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2403.php">Brice Goglin: "Re: [hwloc-devel] CPU Model and type"</a>
<li><strong>Previous message:</strong> <a href="2401.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3rc2r3771)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2403.php">Brice Goglin: "Re: [hwloc-devel] CPU Model and type"</a>
<li><strong>Reply:</strong> <a href="2403.php">Brice Goglin: "Re: [hwloc-devel] CPU Model and type"</a>
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
