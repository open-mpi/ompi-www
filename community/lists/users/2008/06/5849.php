<?
$subject_val = "[OMPI users] Different CC for orte and opmi?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  9 07:34:42 2008" -->
<!-- isoreceived="20080609113442" -->
<!-- sent="Mon, 09 Jun 2008 12:34:33 +0100" -->
<!-- isosent="20080609113433" -->
<!-- name="Ashley Pittman" -->
<!-- email="apittman_at_[hidden]" -->
<!-- subject="[OMPI users] Different CC for orte and opmi?" -->
<!-- id="1213011273.8064.28.camel_at_bruce.priv.wark.uk.streamline-computing.com" -->
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
<strong>Subject:</strong> [OMPI users] Different CC for orte and opmi?<br>
<strong>From:</strong> Ashley Pittman (<em>apittman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-09 07:34:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5850.php">Bill Johnstone: "[OMPI users] mpirun (orte ?) not shutting down cleanly on job aborts"</a>
<li><strong>Previous message:</strong> <a href="5848.php">Reuti: "Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5851.php">Doug Reeder: "Re: [OMPI users] Different CC for orte and opmi?"</a>
<li><strong>Reply:</strong> <a href="5851.php">Doug Reeder: "Re: [OMPI users] Different CC for orte and opmi?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is there a way to use a different compiler for the orte component and
<br>
the shared library component when using openmpi?  We are finding that if
<br>
we use icc to compile openmpi then orted fails with link errors when I
<br>
try and launch a job as the intel environment isn't loaded by default.
<br>
<p>We use the module command heavily and have modules for openmpi-gnu and
<br>
openmpi-intel as well as a intel_compiler module.  To use openmpi-intel
<br>
we have to load intel_compiler by default on the compute nodes which
<br>
isn't ideal, is it possible to compile the orte component with gcc and
<br>
the library component with icc?
<br>
<p>Yours,
<br>
<p>Ashley Pittman,
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5850.php">Bill Johnstone: "[OMPI users] mpirun (orte ?) not shutting down cleanly on job aborts"</a>
<li><strong>Previous message:</strong> <a href="5848.php">Reuti: "Re: [OMPI users] using OpenMPI + SGE in a heterogeneous network"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5851.php">Doug Reeder: "Re: [OMPI users] Different CC for orte and opmi?"</a>
<li><strong>Reply:</strong> <a href="5851.php">Doug Reeder: "Re: [OMPI users] Different CC for orte and opmi?"</a>
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
