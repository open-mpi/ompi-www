<?
$subject_val = "[OMPI devel] libevent updated";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  6 19:39:42 2015" -->
<!-- isoreceived="20150107003942" -->
<!-- sent="Tue, 6 Jan 2015 16:39:38 -0800" -->
<!-- isosent="20150107003938" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] libevent updated" -->
<!-- id="2705E82A-0AF2-4A76-8883-8D065151E241_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI devel] libevent updated<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-06 19:39:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16745.php">Gilles Gouaillardet: "Re: [OMPI devel] ompi-master build error : make can	require	autotools"</a>
<li><strong>Previous message:</strong> <a href="16743.php">George Bosilca: "Re: [OMPI devel] RFC: remove --disable-smp-locks"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Per the telecon today, I updated libevent to the 2.0.22-stable release as there is a bug fix of a race condition when using event_active, which we use in a lot of places.
<br>
<p>Remember to &quot;rm -rf opal/mca/event/libevent2021&#226;&#128;&#157; after you pull the update as the stale directory will remain.
<br>
<p>Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16745.php">Gilles Gouaillardet: "Re: [OMPI devel] ompi-master build error : make can	require	autotools"</a>
<li><strong>Previous message:</strong> <a href="16743.php">George Bosilca: "Re: [OMPI devel] RFC: remove --disable-smp-locks"</a>
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
