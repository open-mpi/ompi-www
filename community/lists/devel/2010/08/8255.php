<?
$subject_val = "[OMPI devel] Trunk appears broken";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 11 12:41:20 2010" -->
<!-- isoreceived="20100811164120" -->
<!-- sent="Wed, 11 Aug 2010 10:41:02 -0600" -->
<!-- isosent="20100811164102" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Trunk appears broken" -->
<!-- id="D3BD0B14-3ECE-463E-862C-612CBDD3C137_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI devel] Trunk appears broken<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-11 12:41:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8256.php">Ralph Castain: "[OMPI devel] Trunk is okay"</a>
<li><strong>Previous message:</strong> <a href="8254.php">Samuel K. Gutierrez: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm still investigating the rev that caused the break, but I wanted to warn everyone that the current trunk is broken:
<br>
<p>Ralph:ompi-trunk rhc$ mpirun -n 3 hostname
<br>
Ralph
<br>
Ralph:ompi-trunk rhc$ 
<br>
<p><p>Note only the one output. I have confirmed that all three processes ran, so this appears to be a case of lost IO. Not entirely sure of the reason yet.
<br>
<p>Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8256.php">Ralph Castain: "[OMPI devel] Trunk is okay"</a>
<li><strong>Previous message:</strong> <a href="8254.php">Samuel K. Gutierrez: "Re: [OMPI devel] Trunk Commit Heads-up: New Common Shared Memory Component"</a>
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
