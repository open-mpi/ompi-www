<?
$subject_val = "[OMPI devel] Free list warning";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 26 00:00:30 2015" -->
<!-- isoreceived="20150226050030" -->
<!-- sent="Wed, 25 Feb 2015 21:00:26 -0800" -->
<!-- isosent="20150226050026" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Free list warning" -->
<!-- id="B300C433-4C97-44C6-935E-122B08CEC59E_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI devel] Free list warning<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-26 00:00:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17053.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1046-g004160f"</a>
<li><strong>Previous message:</strong> <a href="17051.php">Paul Hargrove: "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17055.php">Nathan Hjelm: "Re: [OMPI devel] Free list warning"</a>
<li><strong>Reply:</strong> <a href="17055.php">Nathan Hjelm: "Re: [OMPI devel] Free list warning"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It looks like everything in ompi_free_list has been tied together and labeled as deprecated. So I&#226;&#128;&#153;m getting this warning:
<br>
<p>In file included from class/ompi_free_list.c:12:0:
<br>
../opal/class/ompi_free_list.h: In function 'ompi_free_list_init_ex':
<br>
../opal/class/ompi_free_list.h:100:5: warning: 'ompi_free_list_init_ex_new' is deprecated (declared at ../opal/class/ompi_free_list.h:61) [-Wdeprecated-declarations]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return ompi_free_list_init_ex_new (free_list, element_size, alignment,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p><p>Can someone please clean this up? It&#226;&#128;&#153;s causing Intel unit tests to abort as they treat warnings as errors.
<br>
<p>Thanks
<br>
Ralph
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17052/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17053.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-1046-g004160f"</a>
<li><strong>Previous message:</strong> <a href="17051.php">Paul Hargrove: "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17055.php">Nathan Hjelm: "Re: [OMPI devel] Free list warning"</a>
<li><strong>Reply:</strong> <a href="17055.php">Nathan Hjelm: "Re: [OMPI devel] Free list warning"</a>
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
