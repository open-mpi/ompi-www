<?
$subject_val = "[OMPI devel] RFC: remove internal copies of libevent and hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 10 05:27:17 2015" -->
<!-- isoreceived="20151210102717" -->
<!-- sent="Thu, 10 Dec 2015 02:27:11 -0800" -->
<!-- isosent="20151210102711" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: remove internal copies of libevent and hwloc" -->
<!-- id="CAMD57odiE9WMm=tk9iBx0XJNbv7d-MC+-uPePxhCnm5EbSZDxA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: remove internal copies of libevent and hwloc<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-10 05:27:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18414.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: remove internal copies of libevent and hwloc"</a>
<li><strong>Previous message:</strong> <a href="18412.php">Federico Reghenzani: "Re: [OMPI devel] Add an orte tool"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18414.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: remove internal copies of libevent and hwloc"</a>
<li><strong>Reply:</strong> <a href="18414.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: remove internal copies of libevent and hwloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks
<br>
<p>Several of us (Igor, Artem, and myself) have recently been investigating
<br>
cross-library problems involving conflicts between our internal copies of
<br>
libevent and hwloc vs components in OMPI that are linked against external
<br>
copies of those libraries. It turns out that our linker friends are
<br>
generating some interesting (and troubling) cross-connections, even with
<br>
our internal renaming efforts.
<br>
<p>After digging into this a bunch, we would like to propose that OMPI remove
<br>
the internal copies of these two libraries. We originally included them
<br>
because they weren't prevalent in the upstream distributions, and we didn't
<br>
want to make users download and install additional packages to use OMPI. We
<br>
wanted them to just download OMPI, build and &quot;go&quot;.
<br>
<p>Twelve years later, this is no longer the case. Both libevent and hwloc are
<br>
typically part of the base distribution, or at the worst easily installed.
<br>
The packagers have kept up with their versions, and so the problem of
<br>
whether or not the distributed version of the library contains all our
<br>
required functionality isn't an issue.
<br>
<p>So perhaps it is time for us to re-evaluate the need for including the
<br>
libevent and hwloc source code in OMPI?
<br>
<p>Ralph
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18413/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18414.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: remove internal copies of libevent and hwloc"</a>
<li><strong>Previous message:</strong> <a href="18412.php">Federico Reghenzani: "Re: [OMPI devel] Add an orte tool"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18414.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: remove internal copies of libevent and hwloc"</a>
<li><strong>Reply:</strong> <a href="18414.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: remove internal copies of libevent and hwloc"</a>
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
