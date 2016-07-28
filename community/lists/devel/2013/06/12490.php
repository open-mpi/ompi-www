<?
$subject_val = "Re: [OMPI devel] RFC MPI 2.2 Dist_graph addition";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 24 18:23:26 2013" -->
<!-- isoreceived="20130624222326" -->
<!-- sent="Mon, 24 Jun 2013 16:23:21 -0600" -->
<!-- isosent="20130624222321" -->
<!-- name="Kenneth A. Lloyd" -->
<!-- email="kenneth.lloyd_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC MPI 2.2 Dist_graph addition" -->
<!-- id="004301ce7129$6f99a0a0$4ecce1e0$_at_wattsys.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="A490EDFA-3384-4E2F-894B-65155ACD3AD0_at_icl.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC MPI 2.2 Dist_graph addition<br>
<strong>From:</strong> Kenneth A. Lloyd (<em>kenneth.lloyd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-24 18:23:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12491.php">Thomas Jahns: "Re: [OMPI devel] Problem when using MPI_Type_create_struct +	MPI_Type_dup"</a>
<li><strong>Previous message:</strong> <a href="12489.php">George Bosilca: "[OMPI devel] RFC MPI 2.2 Dist_graph addition"</a>
<li><strong>In reply to:</strong> <a href="12489.php">George Bosilca: "[OMPI devel] RFC MPI 2.2 Dist_graph addition"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/07/12498.php">Kawashima, Takahiro: "Re: [OMPI devel] RFC MPI 2.2 Dist_graph addition"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank for making this patch available.
<br>
<p>Ken Lloyd
<br>
<p>-----Original Message-----
<br>
From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On
<br>
Behalf Of George Bosilca
<br>
Sent: Monday, June 24, 2013 1:39 PM
<br>
To: Open MPI Developers
<br>
Subject: [OMPI devel] RFC MPI 2.2 Dist_graph addition
<br>
<p>WHAT:    Support for MPI 2.2 dist_graph
<br>
<p>WHY:     To become [almost entierly] MPI 2.2 compliant
<br>
<p>WHEN:    Monday July 1st
<br>
<p>As discussed during the last phone call, a missing functionality of the MPI
<br>
2.2 standard (the distributed graph topology) is ready for prime-time. The
<br>
attached patch provide a minimal version (no components supporting
<br>
reordering), that will complete the topology support in Open MPI.
<br>
<p>It is somehow a major change compared with what we had before and it reshape
<br>
the way we deal with topologies completely. Where our topologies were mainly
<br>
storage components (they were not capable of creating the new communicator
<br>
as an example), the new version is built around a [possibly] common
<br>
representation (in mca/topo/topo.h), but the functions to attach and
<br>
retrieve the topological information are specific to each component. As a
<br>
result the ompi_create_cart and ompi_create_graph functions become useless
<br>
and have been removed.
<br>
<p>In addition to adding the internal infrastructure to manage the topology
<br>
information, it updates the MPI interface, and the debuggers support and
<br>
provides all Fortran interfaces. From a correctness point of view it passes
<br>
all the tests we have in ompi-tests for the cart and graph topology, and
<br>
some tests/applications for the dist_graph interface.
<br>
<p>I don't think there is a need for a long wait on this one so I would like to
<br>
propose a short deadline, a week from now on Monday July 1st. A patch based
<br>
on Open MPI trunk r28670 is attached below.
<br>
<p>Thanks,
<br>
&nbsp;&nbsp;George.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12491.php">Thomas Jahns: "Re: [OMPI devel] Problem when using MPI_Type_create_struct +	MPI_Type_dup"</a>
<li><strong>Previous message:</strong> <a href="12489.php">George Bosilca: "[OMPI devel] RFC MPI 2.2 Dist_graph addition"</a>
<li><strong>In reply to:</strong> <a href="12489.php">George Bosilca: "[OMPI devel] RFC MPI 2.2 Dist_graph addition"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/07/12498.php">Kawashima, Takahiro: "Re: [OMPI devel] RFC MPI 2.2 Dist_graph addition"</a>
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
