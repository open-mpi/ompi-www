<?
$subject_val = "[OMPI devel] f08 bindings and weak symbols";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  5 06:00:54 2014" -->
<!-- isoreceived="20140905100054" -->
<!-- sent="Fri, 05 Sep 2014 19:00:53 +0900" -->
<!-- isosent="20140905100053" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="[OMPI devel] f08 bindings and weak symbols" -->
<!-- id="540989D5.6010502_at_iferc.org" -->
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
<strong>Subject:</strong> [OMPI devel] f08 bindings and weak symbols<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-05 06:00:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15775.php">Gilles Gouaillardet: "[OMPI devel] about r32685"</a>
<li><strong>Previous message:</strong> <a href="15773.php">Dave Goodell (dgoodell): "[OMPI devel] cisco MTT test results"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Folks,
<br>
<p>when OpenMPI is configured with --disable-weak-symbols and a fortran
<br>
2008 capable compiler (e.g. gcc 4.9),
<br>
MPI_STATUSES_IGNORE invoked from Fortran is not correctly interpreted as
<br>
it should.
<br>
/* instead of being a special array of statuses, it is an array of one
<br>
status, which can lead to buffer overflow and memory corruption */
<br>
<p>A simple workaround is the attached workaround.patch
<br>
<p>i could not find any reason why :
<br>
a) weak symbols matter here, since none of these are weak symbols
<br>
b) all 4 symbols are always defined no matter what
<br>
<p>so i tried to improve this and came up with a much larger patch.
<br>
it comes in two patches :
<br>
1) fortran.patch : only compile some files and some piece of code if
<br>
fortran is supported
<br>
/* while i was working on a fix, that came as a pre-requisite for the
<br>
following patch */
<br>
2) weak.patch : only define the required symbols in fortran
<br>
&nbsp;&nbsp;&nbsp;(e.g. one of CAPS, PLAIN, SINGLE_UNDERSCORE and DOUBLE_UNDERSCORE)
<br>
&nbsp;&nbsp;&nbsp;and bind the f08 symbols to the correct C defined symbol
<br>
<p>Since this is quite an important changeset, i did not commit it yet.
<br>
<p>Could someone (Jeff ?) please review and comment ?
<br>
<p>If the last two patches can be commited into the trunk, what about v1.8 ?
<br>
- should these patches land into the v1.8 branch as well ?
<br>
- is the workaround.patch enough for the v1.8 branch ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p><p>


<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15774/workaround.patch">workaround.patch</a>
</ul>
<!-- attachment="workaround.patch" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15774/fortran.patch">fortran.patch</a>
</ul>
<!-- attachment="fortran.patch" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15774/weak.patch">weak.patch</a>
</ul>
<!-- attachment="weak.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15775.php">Gilles Gouaillardet: "[OMPI devel] about r32685"</a>
<li><strong>Previous message:</strong> <a href="15773.php">Dave Goodell (dgoodell): "[OMPI devel] cisco MTT test results"</a>
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
