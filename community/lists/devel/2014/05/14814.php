<?
$subject_val = "[OMPI devel] yesterday commits caused a crash in helloworld with --mca btl tcp, self";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 16 00:47:47 2014" -->
<!-- isoreceived="20140516044747" -->
<!-- sent="Fri, 16 May 2014 13:47:59 +0900" -->
<!-- isosent="20140516044759" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="[OMPI devel] yesterday commits caused a crash in helloworld with --mca btl tcp, self" -->
<!-- id="5375987F.2040605_at_iferc.org" -->
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
<strong>Subject:</strong> [OMPI devel] yesterday commits caused a crash in helloworld with --mca btl tcp, self<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-16 00:47:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14815.php">Gilles Gouaillardet: "[OMPI devel] RFC : what is the best way to fix the memory leak in mca/pml/bfo"</a>
<li><strong>Previous message:</strong> <a href="14813.php">Nathan Hjelm: "Re: [OMPI devel] RFC: fix leak of bml endpoints"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14819.php">Thomas Naughton: "Re: [OMPI devel] yesterday commits caused a crash in helloworld with --mca btl tcp, self"</a>
<li><strong>Reply:</strong> <a href="14819.php">Thomas Naughton: "Re: [OMPI devel] yesterday commits caused a crash in helloworld with --mca btl tcp, self"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Folks,
<br>
<p>a simple
<br>
mpirun -np 2 -host localhost --mca btl,tcp mpi_helloworld
<br>
<p>crashes after some of yesterday's commits (i would blame r31778 and/or
<br>
r31782,
<br>
but i am not 100% sure)
<br>
<p>/* a list receives a negative value, so the program takes some time
<br>
before crashing,
<br>
symptom may vary from one system to an other */
<br>
<p>i digged into this, and found what looks like an old bug/typo in
<br>
mca_bml_r2_del_procs().
<br>
the bug has *not* been introduced by yesterday commits.
<br>
i believe this path was not executed since yesterday, that is why we
<br>
(only) now hit the bug
<br>
<p>i fixed this in r31786
<br>
<p>Gilles
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14815.php">Gilles Gouaillardet: "[OMPI devel] RFC : what is the best way to fix the memory leak in mca/pml/bfo"</a>
<li><strong>Previous message:</strong> <a href="14813.php">Nathan Hjelm: "Re: [OMPI devel] RFC: fix leak of bml endpoints"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14819.php">Thomas Naughton: "Re: [OMPI devel] yesterday commits caused a crash in helloworld with --mca btl tcp, self"</a>
<li><strong>Reply:</strong> <a href="14819.php">Thomas Naughton: "Re: [OMPI devel] yesterday commits caused a crash in helloworld with --mca btl tcp, self"</a>
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
