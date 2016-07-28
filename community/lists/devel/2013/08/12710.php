<?
$subject_val = "[OMPI devel] Bad header guard in &lt;src&gt;/opal/memoryhooks/memory.h";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  9 04:07:29 2013" -->
<!-- isoreceived="20130809080729" -->
<!-- sent="Fri, 09 Aug 2013 10:07:27 +0200" -->
<!-- isosent="20130809080727" -->
<!-- name="Michael Schlottke" -->
<!-- email="m.schlottke_at_[hidden]" -->
<!-- subject="[OMPI devel] Bad header guard in &amp;lt;src&amp;gt;/opal/memoryhooks/memory.h" -->
<!-- id="26D192DD-77B4-4CFA-945D-F4545F902C28_at_aia.rwth-aachen.de" -->
<!-- charset="windows-1252" -->
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
<strong>Subject:</strong> [OMPI devel] Bad header guard in &lt;src&gt;/opal/memoryhooks/memory.h<br>
<strong>From:</strong> Michael Schlottke (<em>m.schlottke_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-09 04:07:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12711.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  OpenSHMEM round 2"</a>
<li><strong>Previous message:</strong> <a href="12709.php">Christopher Samuel: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12715.php">Ralph Castain: "Re: [OMPI devel] Bad header guard in &lt;src&gt;/opal/memoryhooks/memory.h"</a>
<li><strong>Reply:</strong> <a href="12715.php">Ralph Castain: "Re: [OMPI devel] Bad header guard in &lt;src&gt;/opal/memoryhooks/memory.h"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi there,
<br>
<p>I don't know if this is the right place to post this, but it seems like the header guard in &lt;src&gt;/opal/memoryhooks/memory.h does not work as intended: The header guard is written as
<br>
<p>#ifndef OPAL_MEMORY_MEMORY_H
<br>
#define OPAl_MEMORY_MEMORY_H
<br>
<p>where in the second line it probably should read &quot;OPAL_&#133;&quot; and not &quot;OPAl_&#133;&quot;. This is openmpi-1.7.2.
<br>
<p>Regards,
<br>
<p>Michael
<br>
<p><p><pre>
--
Michael Schlottke
SimLab Highly Scalable Fluids &amp; Solids Engineering
J&#252;lich Aachen Research Alliance (JARA-HPC)
RWTH Aachen University
W&#252;llnerstra&#223;e 5a
52062 Aachen
Germany
Phone: +49 (241) 80 95188
Fax: +49 (241) 80 92257
Mail: m.schlottke_at_[hidden]
Web: <a href="http://www.jara.org/jara-hpc">http://www.jara.org/jara-hpc</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12710/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12711.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  OpenSHMEM round 2"</a>
<li><strong>Previous message:</strong> <a href="12709.php">Christopher Samuel: "Re: [OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12715.php">Ralph Castain: "Re: [OMPI devel] Bad header guard in &lt;src&gt;/opal/memoryhooks/memory.h"</a>
<li><strong>Reply:</strong> <a href="12715.php">Ralph Castain: "Re: [OMPI devel] Bad header guard in &lt;src&gt;/opal/memoryhooks/memory.h"</a>
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
