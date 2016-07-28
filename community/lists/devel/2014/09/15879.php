<?
$subject_val = "[OMPI devel] v1.8 does not compile any more";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 19 04:52:42 2014" -->
<!-- isoreceived="20140919085242" -->
<!-- sent="Fri, 19 Sep 2014 17:52:48 +0900" -->
<!-- isosent="20140919085248" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="[OMPI devel] v1.8 does not compile any more" -->
<!-- id="541BEEE0.4020801_at_iferc.org" -->
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
<strong>Subject:</strong> [OMPI devel] v1.8 does not compile any more<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-19 04:52:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15880.php">Gilles Gouaillardet: "Re: [OMPI devel] race condition in oob/tcp"</a>
<li><strong>Previous message:</strong> <a href="15878.php">Todd Kordenbrock: "Re: [OMPI devel] Need to know your Github ID"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15881.php">Ralph Castain: "Re: [OMPI devel] v1.8 does not compile any more"</a>
<li><strong>Reply:</strong> <a href="15881.php">Ralph Castain: "Re: [OMPI devel] v1.8 does not compile any more"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Folks,
<br>
<p>r32716 broke v1.8 :-(
<br>
<p>the root cause it it included MCA_BASE_VAR_TYPE_VERSION_STRING which has
<br>
not yet landed into v1.8
<br>
<p>the attached trivial patch fixes this issue
<br>
<p>Can the RM/GK please review it and apply it ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15879/mca_base_var.patch">mca_base_var.patch</a>
</ul>
<!-- attachment="mca_base_var.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15880.php">Gilles Gouaillardet: "Re: [OMPI devel] race condition in oob/tcp"</a>
<li><strong>Previous message:</strong> <a href="15878.php">Todd Kordenbrock: "Re: [OMPI devel] Need to know your Github ID"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15881.php">Ralph Castain: "Re: [OMPI devel] v1.8 does not compile any more"</a>
<li><strong>Reply:</strong> <a href="15881.php">Ralph Castain: "Re: [OMPI devel] v1.8 does not compile any more"</a>
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
