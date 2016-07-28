<?
$subject_val = "[OMPI devel] padb and spawned jobs";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 22 09:36:19 2009" -->
<!-- isoreceived="20091222143619" -->
<!-- sent="Tue, 22 Dec 2009 14:36:12 +0000" -->
<!-- isosent="20091222143612" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="[OMPI devel] padb and spawned jobs" -->
<!-- id="1261492572.3600.122.camel_at_alpha" -->
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
<strong>Subject:</strong> [OMPI devel] padb and spawned jobs<br>
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-22 09:36:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7267.php">Ralph Castain: "[OMPI devel] ORTE thread safety"</a>
<li><strong>Previous message:</strong> <a href="7265.php">Ralph Castain: "Re: [OMPI devel] using hnp_always_use_plm"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
All,
<br>
<p>Just thought you should know I've updated padb so that it works
<br>
correctly with spawned jobs running under orte, before it didn't
<br>
distinguish between different steps in the same job and it would
<br>
probably have behaved wrong in a number of different situations.
<br>
<p>I've now added a configuration option called 'orte-job-step' which tells
<br>
it which program to target, the default being undef which expands to the
<br>
lowest numbered step which is most likely 1.
<br>
<p>I've copied the nomenclature here from Slurm which enumerates jobs in a
<br>
similar manner, there doesn't seem to be a specific name orte gives to
<br>
multiple &quot;jobs&quot; within the same job, if there is and I've missed one I'm
<br>
happy to change the name of the option to something more appropriate.
<br>
<p>Ashley,
<br>
<p><pre>
-- 
Ashley Pittman, Bath, UK.
Padb - A parallel job inspection tool for cluster computing
<a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7267.php">Ralph Castain: "[OMPI devel] ORTE thread safety"</a>
<li><strong>Previous message:</strong> <a href="7265.php">Ralph Castain: "Re: [OMPI devel] using hnp_always_use_plm"</a>
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
