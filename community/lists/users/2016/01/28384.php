<?
$subject_val = "[OMPI users] many return codes not checked in the source";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 26 09:53:07 2016" -->
<!-- isoreceived="20160126145307" -->
<!-- sent="Tue, 26 Jan 2016 14:53:06 +0000" -->
<!-- isosent="20160126145306" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="[OMPI users] many return codes not checked in the source" -->
<!-- id="87fuxke6jx.fsf_at_pc102091.liv.ac.uk" -->
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
<strong>Subject:</strong> [OMPI users] many return codes not checked in the source<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-26 09:53:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28385.php">Dave Love: "[OMPI users] build failure with NAG Fortran"</a>
<li><strong>Previous message:</strong> <a href="28383.php">Dave Love: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you build with gcc -Wall, e.g. with the default RHEL rpm flags,
<br>
you'll see a lot of warnings about ignored return values of functions,
<br>
and a good fraction of the ones I've checked look as if they should be
<br>
fixed.
<br>
<p>The most frequently-reported is asprintf, where the code checks for
<br>
errors by looking for a NULL buffer afterwards.  That's apparently OK
<br>
for BSD, but the glibc documentation says the buffer is undefined on
<br>
error.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28385.php">Dave Love: "[OMPI users] build failure with NAG Fortran"</a>
<li><strong>Previous message:</strong> <a href="28383.php">Dave Love: "Re: [OMPI users] Open MPI MPI-OpenMP Hybrid Binding Question"</a>
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
