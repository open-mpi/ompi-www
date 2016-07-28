<?
$subject_val = "[OMPI devel] Slurm support in master";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  8 21:49:09 2015" -->
<!-- isoreceived="20150909014909" -->
<!-- sent="Tue, 8 Sep 2015 18:49:06 -0700" -->
<!-- isosent="20150909014906" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Slurm support in master" -->
<!-- id="6849168D-413E-4E3B-BD4D-7C56FF53F2B3_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI devel] Slurm support in master<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-08 21:49:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17988.php">Adrian Reber: "Re: [OMPI devel] MTT failures since the last few days on ppc64"</a>
<li><strong>Previous message:</strong> <a href="17986.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Cross-job disconnect is broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17991.php">Howard Pritchard: "Re: [OMPI devel] Slurm support in master"</a>
<li><strong>Reply:</strong> <a href="17991.php">Howard Pritchard: "Re: [OMPI devel] Slurm support in master"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks
<br>
<p>I&#226;&#128;&#153;ve poked around this evening and gotten the Slurm support in master to at least build, and for mpirun to now work correctly under a Slurm job allocation. This should all be committed as soon as auto-testing completes:
<br>
<p><a href="https://github.com/open-mpi/ompi/pull/877">https://github.com/open-mpi/ompi/pull/877</a>
<br>
<p>Howard/Nathan: I believe I fixed mpirun for ALPS too - please check.
<br>
<p>Direct launch under Slurm still segfaults, and I&#226;&#128;&#153;m out of time chasing it down. Could someone please take a look? It seems to have something to do with the hash table support in the base, but I&#226;&#128;&#153;m not sure of the problem.
<br>
<p>Thanks
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17988.php">Adrian Reber: "Re: [OMPI devel] MTT failures since the last few days on ppc64"</a>
<li><strong>Previous message:</strong> <a href="17986.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Cross-job disconnect is broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17991.php">Howard Pritchard: "Re: [OMPI devel] Slurm support in master"</a>
<li><strong>Reply:</strong> <a href="17991.php">Howard Pritchard: "Re: [OMPI devel] Slurm support in master"</a>
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
