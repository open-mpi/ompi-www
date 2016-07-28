<?
$subject_val = "[OMPI users] Open MPI 1.8.3 openmpi-mca-params.conf: old and new parameters";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 14 20:32:51 2014" -->
<!-- isoreceived="20141015003251" -->
<!-- sent="Tue, 14 Oct 2014 20:32:38 -0400" -->
<!-- isosent="20141015003238" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="[OMPI users] Open MPI 1.8.3 openmpi-mca-params.conf: old and new parameters" -->
<!-- id="543DC0A6.40901_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> [OMPI users] Open MPI 1.8.3 openmpi-mca-params.conf: old and new parameters<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-14 20:32:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25498.php">Ralph Castain: "Re: [OMPI users] Open MPI 1.8.3 openmpi-mca-params.conf: old and new parameters"</a>
<li><strong>Previous message:</strong> <a href="25496.php">Jeff Squyres (jsquyres): "Re: [OMPI users] static for tools dynamic for libs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25498.php">Ralph Castain: "Re: [OMPI users] Open MPI 1.8.3 openmpi-mca-params.conf: old and new parameters"</a>
<li><strong>Reply:</strong> <a href="25498.php">Ralph Castain: "Re: [OMPI users] Open MPI 1.8.3 openmpi-mca-params.conf: old and new parameters"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Open MPI fans and experts
<br>
<p>This is just a note in case other people run into the same problem.
<br>
<p>I just built Open MPI 1.8.3.
<br>
As usual I put my old settings on openmpi-mca-params.conf,
<br>
with no further thinking.
<br>
Then I compiled the connectivity_c.c program and tried
<br>
to run it with mpiexec.
<br>
That is a routine that never failed before.
<br>
<p>Bummer!
<br>
I've got a segmentation fault right away.
<br>
<p>After some head scratching, checking my environment, etc,
<br>
I thought I might have configured OMPI incorrectly.
<br>
Hence, I tried to get information from ompi_info.
<br>
Oh well, ompi_info also segfaulted!
<br>
<p>It took me a while to realize that the runtime parameter
<br>
configuration file was the culprit.
<br>
<p>When I inserted the runtime parameter settings one by one,
<br>
the segfault came with this one:
<br>
<p>rmaps_base_schedule_policy = core
<br>
<p>Ompi_info (when I got it to work) told me that the parameter above
<br>
is now a deprecated synonym of:
<br>
<p>rmaps_base_mapping_policy = core
<br>
<p>In any case, the old synonym doesn't work and makes ompi_info and
<br>
mpiexec segfault (and I'd guess anything else that requires the OMPI 
<br>
runtime components).
<br>
Only the new parameter name works.
<br>
<p>***
<br>
<p>I am also missing in the ompi_info output the following
<br>
(OMPI 1.6.5) parameters (not reported by ompi_info --all --all):
<br>
<p>1) orte_process_binding
<br>
2) orte_report_bindings
<br>
3) opal_paffinity_alone
<br>
<p>Are they gone forever?
<br>
<p>Are there replacements for them, with approximately the same functionality?
<br>
<p>Is there a list comparing the new (1.8) vs. old (1.6)
<br>
OMPI runtime parameters, and/or any additional documentation
<br>
about the new style of OMPI 1.8 runtime parameters?
<br>
<p>Since there seems to have been a major revamping of the OMPI
<br>
runtime parameters, that would be a great help.
<br>
<p>Thank you,
<br>
Gus Correa
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25498.php">Ralph Castain: "Re: [OMPI users] Open MPI 1.8.3 openmpi-mca-params.conf: old and new parameters"</a>
<li><strong>Previous message:</strong> <a href="25496.php">Jeff Squyres (jsquyres): "Re: [OMPI users] static for tools dynamic for libs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25498.php">Ralph Castain: "Re: [OMPI users] Open MPI 1.8.3 openmpi-mca-params.conf: old and new parameters"</a>
<li><strong>Reply:</strong> <a href="25498.php">Ralph Castain: "Re: [OMPI users] Open MPI 1.8.3 openmpi-mca-params.conf: old and new parameters"</a>
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
