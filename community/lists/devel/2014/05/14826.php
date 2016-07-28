<?
$subject_val = "Re: [OMPI devel] RFC : what is the best way to fix the memory leak in mca/pml/bfo";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 19 06:49:16 2014" -->
<!-- isoreceived="20140519104916" -->
<!-- sent="Mon, 19 May 2014 19:49:14 +0900" -->
<!-- isosent="20140519104914" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC : what is the best way to fix the memory leak in mca/pml/bfo" -->
<!-- id="CAAkFZ5u5Wu8+egmDOZKFOG+TQfSf-xgTvf39oyqu=OU5mSZAfg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAMJJpkUNy7BeiFfC-SFAnETYz8PRFGmE9Xp1OsJkVevnRhswfg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC : what is the best way to fix the memory leak in mca/pml/bfo<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-19 06:49:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14827.php">Ralph Castain: "[OMPI devel] RFC: refactor PMI support"</a>
<li><strong>Previous message:</strong> <a href="14825.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31786 - trunk/ompi/mca/bml/r2"</a>
<li><strong>In reply to:</strong> <a href="14818.php">George Bosilca: "Re: [OMPI devel] RFC : what is the best way to fix the memory leak in mca/pml/bfo"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks guys !
<br>
<p>i commited r31816 (bfo: allocate the allocator in init rather than open)
<br>
and made a CMR
<br>
<p>based on mtt results, i will push George's commit tomorrow.
<br>
and based on Rolf recommendation, i will do the CMR by the end of the week
<br>
if everything
<br>
works fine
<br>
<p>Gilles
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14826/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14827.php">Ralph Castain: "[OMPI devel] RFC: refactor PMI support"</a>
<li><strong>Previous message:</strong> <a href="14825.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31786 - trunk/ompi/mca/bml/r2"</a>
<li><strong>In reply to:</strong> <a href="14818.php">George Bosilca: "Re: [OMPI devel] RFC : what is the best way to fix the memory leak in mca/pml/bfo"</a>
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
