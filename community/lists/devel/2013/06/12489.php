<?
$subject_val = "[OMPI devel] RFC MPI 2.2 Dist_graph addition";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 24 15:39:28 2013" -->
<!-- isoreceived="20130624193928" -->
<!-- sent="Mon, 24 Jun 2013 21:39:15 +0200" -->
<!-- isosent="20130624193915" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC MPI 2.2 Dist_graph addition" -->
<!-- id="A490EDFA-3384-4E2F-894B-65155ACD3AD0_at_icl.utk.edu" -->
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
<strong>Subject:</strong> [OMPI devel] RFC MPI 2.2 Dist_graph addition<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-24 15:39:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12490.php">Kenneth A. Lloyd: "Re: [OMPI devel] RFC MPI 2.2 Dist_graph addition"</a>
<li><strong>Previous message:</strong> <a href="12488.php">George Bosilca: "Re: [OMPI devel] Problem when using MPI_Type_create_struct + MPI_Type_dup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12490.php">Kenneth A. Lloyd: "Re: [OMPI devel] RFC MPI 2.2 Dist_graph addition"</a>
<li><strong>Reply:</strong> <a href="12490.php">Kenneth A. Lloyd: "Re: [OMPI devel] RFC MPI 2.2 Dist_graph addition"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/07/12498.php">Kawashima, Takahiro: "Re: [OMPI devel] RFC MPI 2.2 Dist_graph addition"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT:    Support for MPI 2.2 dist_graph
<br>
<p>WHY:     To become [almost entierly] MPI 2.2 compliant
<br>
<p>WHEN:    Monday July 1st
<br>
<p>As discussed during the last phone call, a missing functionality of the MPI 2.2 standard (the distributed graph topology) is ready for prime-time. The attached patch provide a minimal version (no components supporting reordering), that will complete the topology support in Open MPI.
<br>
<p>It is somehow a major change compared with what we had before and it reshape the way we deal with topologies completely. Where our topologies were mainly storage components (they were not capable of creating the new communicator as an example), the new version is built around a [possibly] common representation (in mca/topo/topo.h), but the functions to attach and retrieve the topological information are specific to each component. As a result the ompi_create_cart and ompi_create_graph functions become useless and have been removed.
<br>
<p>In addition to adding the internal infrastructure to manage the topology information, it updates the MPI interface, and the debuggers support and provides all Fortran interfaces. From a correctness point of view it passes all the tests we have in ompi-tests for the cart and graph topology, and some tests/applications for the dist_graph interface.
<br>
<p>I don't think there is a need for a long wait on this one so I would like to propose a short deadline, a week from now on Monday July 1st. A patch based on Open MPI trunk r28670 is attached below.
<br>
<p>Thanks,
<br>
&nbsp;&nbsp;George.
<br>
<p><p><p><p><p>
<br><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12489/dist_graph.patch">dist_graph.patch</a>
</ul>
<!-- attachment="dist_graph.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12490.php">Kenneth A. Lloyd: "Re: [OMPI devel] RFC MPI 2.2 Dist_graph addition"</a>
<li><strong>Previous message:</strong> <a href="12488.php">George Bosilca: "Re: [OMPI devel] Problem when using MPI_Type_create_struct + MPI_Type_dup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12490.php">Kenneth A. Lloyd: "Re: [OMPI devel] RFC MPI 2.2 Dist_graph addition"</a>
<li><strong>Reply:</strong> <a href="12490.php">Kenneth A. Lloyd: "Re: [OMPI devel] RFC MPI 2.2 Dist_graph addition"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/07/12498.php">Kawashima, Takahiro: "Re: [OMPI devel] RFC MPI 2.2 Dist_graph addition"</a>
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
