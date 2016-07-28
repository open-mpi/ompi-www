<?
$subject_val = "[OMPI devel] Problem with monitoring";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  8 06:38:30 2016" -->
<!-- isoreceived="20160608103830" -->
<!-- sent="Wed, 8 Jun 2016 12:38:27 +0200" -->
<!-- isosent="20160608103827" -->
<!-- name="Cyril Bordage" -->
<!-- email="cyril.bordage_at_[hidden]" -->
<!-- subject="[OMPI devel] Problem with monitoring" -->
<!-- id="da2f0e3a-9c6d-8fc5-ccef-08e4c9ae44a9_at_inria.fr" -->
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
<strong>Subject:</strong> [OMPI devel] Problem with monitoring<br>
<strong>From:</strong> Cyril Bordage (<em>cyril.bordage_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-08 06:38:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19092.php">Jeff Squyres (jsquyres): "[OMPI devel] Fwd: Coverity Scan: Analysis completed for Open MPI"</a>
<li><strong>Previous message:</strong> <a href="19090.php">Gilles Gouaillardet: "Re: [OMPI devel] Jenkins testing - what purpose are we striving to achieve?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am trying to use the monitoring in MPI but I haven't any output when I
<br>
run the following command:
<br>
&nbsp;mpirun -np 4 --mca pml_monitoring_enable 2 ./monitoring_test
<br>
The program ends correctly but I haven't the files that should be
<br>
created in the folder &quot;prof&quot;.
<br>
<p>I compiled the master branch (commit 0159162) from the git repo.
<br>
<p><p>Cyril.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19092.php">Jeff Squyres (jsquyres): "[OMPI devel] Fwd: Coverity Scan: Analysis completed for Open MPI"</a>
<li><strong>Previous message:</strong> <a href="19090.php">Gilles Gouaillardet: "Re: [OMPI devel] Jenkins testing - what purpose are we striving to achieve?"</a>
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
