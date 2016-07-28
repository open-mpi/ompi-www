<?
$subject_val = "[OMPI devel] Dynamically Turning On and Off Memory Manager of Open MPI at Runtime??";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 10 17:58:36 2007" -->
<!-- isoreceived="20071210225836" -->
<!-- sent="Mon, 10 Dec 2007 16:58:16 -0600" -->
<!-- isosent="20071210225816" -->
<!-- name="Peter Wong" -->
<!-- email="wpeter_at_[hidden]" -->
<!-- subject="[OMPI devel] Dynamically Turning On and Off Memory Manager of Open MPI at Runtime??" -->
<!-- id="OFEA1CC824.231BB406-ON852573AD.007C15CC-862573AD.007E34B2_at_us.ibm.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] Dynamically Turning On and Off Memory Manager of Open MPI at Runtime??<br>
<strong>From:</strong> Peter Wong (<em>wpeter_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-10 17:58:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2779.php">Brian W. Barrett: "Re: [OMPI devel] Dynamically Turning On and Off Memory Manager of Open MPI at Runtime??"</a>
<li><strong>Previous message:</strong> <a href="2777.php">Ralph Castain: "Re: [OMPI devel] openmpi-1.2.4 compilation error in orte_abort.c on Fedora 8 - patch included"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2779.php">Brian W. Barrett: "Re: [OMPI devel] Dynamically Turning On and Off Memory Manager of Open MPI at Runtime??"</a>
<li><strong>Reply:</strong> <a href="2779.php">Brian W. Barrett: "Re: [OMPI devel] Dynamically Turning On and Off Memory Manager of Open MPI at Runtime??"</a>
<li><strong>Reply:</strong> <a href="2780.php">Patrick Geoffray: "Re: [OMPI devel] Dynamically Turning On and Off Memory Manager of Open	MPI at Runtime??"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Open MPI defines its own malloc (by default), so malloc of glibc
<br>
is not called.
<br>
<p>But, without calling malloc of glibc, the allocator of libhugetlbfs
<br>
to back text and dynamic data by large pages, e.g., 16MB pages on
<br>
POWER systems, is not used.
<br>
<p>Indeed, we can build Open MPI with --with-memory-manager=none.
<br>
<p>I am wondering the feasibility of turning the memory manger on
<br>
and off dynamically at runtime as a new feature?
<br>
<p>Thanks,
<br>
Peter Wong
<br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-2778/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2779.php">Brian W. Barrett: "Re: [OMPI devel] Dynamically Turning On and Off Memory Manager of Open MPI at Runtime??"</a>
<li><strong>Previous message:</strong> <a href="2777.php">Ralph Castain: "Re: [OMPI devel] openmpi-1.2.4 compilation error in orte_abort.c on Fedora 8 - patch included"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2779.php">Brian W. Barrett: "Re: [OMPI devel] Dynamically Turning On and Off Memory Manager of Open MPI at Runtime??"</a>
<li><strong>Reply:</strong> <a href="2779.php">Brian W. Barrett: "Re: [OMPI devel] Dynamically Turning On and Off Memory Manager of Open MPI at Runtime??"</a>
<li><strong>Reply:</strong> <a href="2780.php">Patrick Geoffray: "Re: [OMPI devel] Dynamically Turning On and Off Memory Manager of Open	MPI at Runtime??"</a>
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
