<?
$subject_val = "[OMPI devel] bcol basesmuma maintainer?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  2 16:37:53 2013" -->
<!-- isoreceived="20130102213753" -->
<!-- sent="Wed, 2 Jan 2013 21:37:22 +0000" -->
<!-- isosent="20130102213722" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="[OMPI devel] bcol basesmuma maintainer?" -->
<!-- id="69A29AB53D57F54D81061A9E4E45B8FD31794093_at_EXMB01.srn.sandia.gov" -->
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
<strong>Subject:</strong> [OMPI devel] bcol basesmuma maintainer?<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-02 16:37:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11890.php">Shamis, Pavel: "Re: [OMPI devel] bcol basesmuma maintainer?"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/12/11888.php">Jeff Squyres: "[OMPI devel] Planned outage: delayed 1 day"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11890.php">Shamis, Pavel: "Re: [OMPI devel] bcol basesmuma maintainer?"</a>
<li><strong>Reply:</strong> <a href="11890.php">Shamis, Pavel: "Re: [OMPI devel] bcol basesmuma maintainer?"</a>
<li><strong>Reply:</strong> <a href="11891.php">Shamis, Pavel: "Re: [OMPI devel] bcol basesmuma maintainer?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all -
<br>
<p>Who's maintaining the bcol basesmuma component?  I'd like to commit the
<br>
attached patch, which cleans up some usage of process names, but want a
<br>
second pair of eyeballs.  The orte_namelist_t type is meant for places
<br>
where the orte_process_na me_t needs to be put on a list.  In basesmuma,
<br>
it's being used like an rote_process_name_t.  While it doesn't really
<br>
matter, it means one more thing that has to be in the API between the
<br>
runtime and the MPI layer, so I'd like to clean it up.
<br>
<p>Thanks,
<br>
<p>Brian
<br>
<p><pre>
--
  Brian W. Barrett
  Scalable System Software Group
  Sandia National Laboratories

</pre>
<p>
<p><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11889/bcol_namelist.diff__size_2783__creation-date_">bcol_namelist.diff</a>
</ul>
<!-- attachment="bcol_namelist.diff__size_2783__creation-date_" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11890.php">Shamis, Pavel: "Re: [OMPI devel] bcol basesmuma maintainer?"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/12/11888.php">Jeff Squyres: "[OMPI devel] Planned outage: delayed 1 day"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11890.php">Shamis, Pavel: "Re: [OMPI devel] bcol basesmuma maintainer?"</a>
<li><strong>Reply:</strong> <a href="11890.php">Shamis, Pavel: "Re: [OMPI devel] bcol basesmuma maintainer?"</a>
<li><strong>Reply:</strong> <a href="11891.php">Shamis, Pavel: "Re: [OMPI devel] bcol basesmuma maintainer?"</a>
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
