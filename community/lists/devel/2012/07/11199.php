<?
$subject_val = "[OMPI devel] Trunk compilation broken";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  2 11:00:57 2012" -->
<!-- isoreceived="20120702150057" -->
<!-- sent="Mon, 2 Jul 2012 09:00:52 -0600" -->
<!-- isosent="20120702150052" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="[OMPI devel] Trunk compilation broken" -->
<!-- id="20120702150051.GA84484_at_panthera.lanl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] Trunk compilation broken<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-02 11:00:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11200.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26707 - in trunk/ompi: config mca/btl/ofud mca/btl/openib mca/common/ofacm mca/common/ofautils mca/dpm"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/06/11198.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  u_int32_t typo in nbc_internal.h?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11204.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  Trunk compilation broken"</a>
<li><strong>Reply:</strong> <a href="11204.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  Trunk compilation broken"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
With platform contrib/platform/lanl/tlss/debug-panasus I get an error:
<br>
make[2]: Entering directory `/panfs/scratch/vol7/hjelmn/turing/ompi-trunk-git/ompi/tools/ompi_info'
<br>
&nbsp;&nbsp;CCLD   ompi_info
<br>
../../../ompi/.libs/libmpi.so: undefined reference to `NBC_Operation'
<br>
<p><p>Brian, can you take a look?
<br>
<p>-Nathan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11200.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26707 - in trunk/ompi: config mca/btl/ofud mca/btl/openib mca/common/ofacm mca/common/ofautils mca/dpm"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/06/11198.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  u_int32_t typo in nbc_internal.h?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11204.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  Trunk compilation broken"</a>
<li><strong>Reply:</strong> <a href="11204.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  Trunk compilation broken"</a>
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
