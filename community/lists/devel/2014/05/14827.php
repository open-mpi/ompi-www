<?
$subject_val = "[OMPI devel] RFC: refactor PMI support";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 19 10:21:03 2014" -->
<!-- isoreceived="20140519142103" -->
<!-- sent="Mon, 19 May 2014 07:18:50 -0700" -->
<!-- isosent="20140519141850" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: refactor PMI support" -->
<!-- id="F1EB864D-6E66-4A9F-85F9-7F6B810D55E1_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: refactor PMI support<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-19 10:18:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14828.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31786 - trunk/ompi/mca/bml/r2"</a>
<li><strong>Previous message:</strong> <a href="14826.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC : what is the best way to fix the memory leak in mca/pml/bfo"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/06/14919.php">Artem Polyakov: "Re: [OMPI devel] RFC: refactor PMI support"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/06/14919.php">Artem Polyakov: "Re: [OMPI devel] RFC: refactor PMI support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT:    Refactor the PMI support into something more flexible
<br>
<p>WHY:      We currently support both PMI-1 and PMI-2. However, a number of PMI-2 implementations
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(specifically, in several Slurm releases) have bugs in them that cause significant problems.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In addition, we have new PMI implementations coming along that we would also like to support.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The current support in OMPI is spread across multiple locations, each of which must track which
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PMI version is to be used. Centralizing the PMI integration allows us to avoid that duplication.
<br>
<p>WHERE:  <a href="https://bitbucket.org/rhc/ompi-pmi">https://bitbucket.org/rhc/ompi-pmi</a>
<br>
<p>TIMEOUT:  June 3rd, after the telecon
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14828.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31786 - trunk/ompi/mca/bml/r2"</a>
<li><strong>Previous message:</strong> <a href="14826.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC : what is the best way to fix the memory leak in mca/pml/bfo"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/06/14919.php">Artem Polyakov: "Re: [OMPI devel] RFC: refactor PMI support"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/06/14919.php">Artem Polyakov: "Re: [OMPI devel] RFC: refactor PMI support"</a>
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
