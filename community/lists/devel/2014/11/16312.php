<?
$subject_val = "[OMPI devel] Question about tight integration with not-yet-supported queuing systems";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 18 02:29:33 2014" -->
<!-- isoreceived="20141118072933" -->
<!-- sent="Tue, 18 Nov 2014 08:31:34 +0100" -->
<!-- isosent="20141118073134" -->
<!-- name="Marc H&#195;&#182;ppner" -->
<!-- email="marc.hoeppner_at_[hidden]" -->
<!-- subject="[OMPI devel] Question about tight integration with not-yet-supported queuing systems" -->
<!-- id="6C2C24E8-4DF4-44FA-94BA-3B413A304C1B_at_bils.se" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI devel] Question about tight integration with not-yet-supported queuing systems<br>
<strong>From:</strong> Marc H&#195;&#182;ppner (<em>marc.hoeppner_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-18 02:31:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16313.php">Gilles Gouaillardet: "Re: [OMPI devel] Question about tight integration with not-yet-supported queuing systems"</a>
<li><strong>Previous message:</strong> <a href="16311.php">Ralph Castain: "[OMPI devel] many-to-one test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16313.php">Gilles Gouaillardet: "Re: [OMPI devel] Question about tight integration with not-yet-supported queuing systems"</a>
<li><strong>Reply:</strong> <a href="16313.php">Gilles Gouaillardet: "Re: [OMPI devel] Question about tight integration with not-yet-supported queuing systems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi list,
<br>
<p>I have recently started to wonder how hard it would be to add support for queuing systems to the tight integration function of OpenMPI (unfortunately, I am not a developer myself). Specifically, we are working with OpenLava (www.openlava.org), which is based on an early version of Lava/LSF and open source. It&#226;&#128;&#153;s proven quite useful in environments where some level of LSF compatibility is needed, but without actually paying for a (rather pricey) LSF license. 
<br>
<p>Given that openLava shares quite a bit of DNA with LSF, I was wondering how hard it would be to add OL tight integration support to OpenMPI. Currently, OL enables OpenMPI jobs through a wrapper script, but that&#226;&#128;&#153;s obviously not ideal and doesn&#226;&#128;&#153;t work for some programs that have MPI support built-in (and thus expect to be able to just execute mpirun). 
<br>
<p>Any thoughts on this would be greatly appreciated!
<br>
<p>Regards,
<br>
<p>Marc
<br>
<p>Marc P. Hoeppner, PhD
<br>
Team Leader
<br>
BILS Genome Annotation Platform
<br>
Department for Medical Biochemistry and Microbiology
<br>
Uppsala University, Sweden
<br>
marc.hoeppner_at_[hidden]
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16313.php">Gilles Gouaillardet: "Re: [OMPI devel] Question about tight integration with not-yet-supported queuing systems"</a>
<li><strong>Previous message:</strong> <a href="16311.php">Ralph Castain: "[OMPI devel] many-to-one test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16313.php">Gilles Gouaillardet: "Re: [OMPI devel] Question about tight integration with not-yet-supported queuing systems"</a>
<li><strong>Reply:</strong> <a href="16313.php">Gilles Gouaillardet: "Re: [OMPI devel] Question about tight integration with not-yet-supported queuing systems"</a>
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
