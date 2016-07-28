<?
$subject_val = "[OMPI devel] .ompi_info dependency files";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  7 13:41:38 2015" -->
<!-- isoreceived="20150407174138" -->
<!-- sent="Tue, 7 Apr 2015 11:41:37 -0600" -->
<!-- isosent="20150407174137" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="[OMPI devel] .ompi_info dependency files" -->
<!-- id="20150407174137.GB1063_at_pn1246003.lanl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] .ompi_info dependency files<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-07 13:41:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17192.php">Marco Atzeri: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<li><strong>Previous message:</strong> <a href="17190.php">Bert Wesarg: "Re: [OMPI devel] 1.8.5rc1 VT-related build failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17196.php">George Bosilca: "Re: [OMPI devel] .ompi_info dependency files"</a>
<li><strong>Reply:</strong> <a href="17196.php">George Bosilca: "Re: [OMPI devel] .ompi_info dependency files"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am working on rewriting some of the MCA component open code to delay
<br>
dlclose until opal_util_finalize () and I ran into something
<br>
interesting. Open MPI supports component dependency files ending in
<br>
.ompi_info. These files can be used to describe dependencies between mca
<br>
components. This feature seems to be a break in the MCA abstration. I
<br>
could, for example, make mca_btl_vader.so &quot;depend&quot; on components in
<br>
ompi (like mca_osc_pt2pt.so).
<br>
<p>What is the history of the .ompi_info dependency file format? Can we
<br>
remove support for it? It would greatly simplify the code in
<br>
mca_base_component_find.c.
<br>
<p>-Nathan
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17191/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17192.php">Marco Atzeri: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<li><strong>Previous message:</strong> <a href="17190.php">Bert Wesarg: "Re: [OMPI devel] 1.8.5rc1 VT-related build failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17196.php">George Bosilca: "Re: [OMPI devel] .ompi_info dependency files"</a>
<li><strong>Reply:</strong> <a href="17196.php">George Bosilca: "Re: [OMPI devel] .ompi_info dependency files"</a>
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
