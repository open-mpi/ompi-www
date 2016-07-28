<?
$subject_val = "[OMPI devel] Compilation error on master";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan  8 15:36:48 2016" -->
<!-- isoreceived="20160108203648" -->
<!-- sent="Fri, 8 Jan 2016 20:36:44 +0000" -->
<!-- isosent="20160108203644" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="[OMPI devel] Compilation error on master" -->
<!-- id="16A66140-6469-4629-9A34-359F9DAD1FA8_at_ornl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] Compilation error on master<br>
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-08 15:36:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18483.php">Gilles Gouaillardet: "Re: [OMPI devel] Compilation error on master"</a>
<li><strong>Previous message:</strong> <a href="18481.php">Ralph Castain: "Re: [OMPI devel] Contributing to mpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18483.php">Gilles Gouaillardet: "Re: [OMPI devel] Compilation error on master"</a>
<li><strong>Reply:</strong> <a href="18483.php">Gilles Gouaillardet: "Re: [OMPI devel] Compilation error on master"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hey Folks
<br>
<p>OpenMPI master appears to be broken for a non-debug build:
<br>
<pre>
---
make[2]: Entering directory `ompi/build/opal'
  CC       runtime/opal_progress.lo
../../opal/runtime/opal_progress.c: In function 'opal_progress_event_users_decrement':
../../opal/runtime/opal_progress.c:249:8: error: 'val' undeclared (first use in this function)
    if (val &gt;= 0) {
        ^
../../opal/runtime/opal_progress.c:249:8: note: each undeclared identifier is reported only once for each function it appears in
---
The error was introduced by this commit: commit 64b695669af03ed4544b2a4dbc62cb9e94eb51c9
&gt;From the code it seems that the non-debug part of the function relies on a variable that is updated only in a debug mode.
Since this does not make sense, I would ask somebody that is familiar with this logic to take a look :)
Thanks !
Pavel (Pasha) Shamis
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18483.php">Gilles Gouaillardet: "Re: [OMPI devel] Compilation error on master"</a>
<li><strong>Previous message:</strong> <a href="18481.php">Ralph Castain: "Re: [OMPI devel] Contributing to mpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18483.php">Gilles Gouaillardet: "Re: [OMPI devel] Compilation error on master"</a>
<li><strong>Reply:</strong> <a href="18483.php">Gilles Gouaillardet: "Re: [OMPI devel] Compilation error on master"</a>
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
