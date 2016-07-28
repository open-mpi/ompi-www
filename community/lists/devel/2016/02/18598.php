<?
$subject_val = "[OMPI devel] Trunk is broken";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 15 23:17:22 2016" -->
<!-- isoreceived="20160216041722" -->
<!-- sent="Mon, 15 Feb 2016 20:17:19 -0800" -->
<!-- isosent="20160216041719" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Trunk is broken" -->
<!-- id="18A44BA9-C2DD-49BC-B0BF-6E686CC8D7C2_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI devel] Trunk is broken<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-15 23:17:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18599.php">Gilles Gouaillardet: "Re: [OMPI devel] Trunk is broken"</a>
<li><strong>Previous message:</strong> <a href="18597.php">George Bosilca: "Re: [OMPI devel] Failure calling MPI_Type_set_attr(datatype, keyval, NULL)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18599.php">Gilles Gouaillardet: "Re: [OMPI devel] Trunk is broken"</a>
<li><strong>Reply:</strong> <a href="18599.php">Gilles Gouaillardet: "Re: [OMPI devel] Trunk is broken"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Looks like someone broke the master build on Linux:
<br>
<p>../../../ompi/.libs/libmpi.so: undefined reference to `opal_memory_linux_malloc_init_hook'
<br>
<p><p>I suspect it was a hard-coded reference to some component&#226;&#128;&#153;s variable?
<br>
Ralph
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18598/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18599.php">Gilles Gouaillardet: "Re: [OMPI devel] Trunk is broken"</a>
<li><strong>Previous message:</strong> <a href="18597.php">George Bosilca: "Re: [OMPI devel] Failure calling MPI_Type_set_attr(datatype, keyval, NULL)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18599.php">Gilles Gouaillardet: "Re: [OMPI devel] Trunk is broken"</a>
<li><strong>Reply:</strong> <a href="18599.php">Gilles Gouaillardet: "Re: [OMPI devel] Trunk is broken"</a>
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
