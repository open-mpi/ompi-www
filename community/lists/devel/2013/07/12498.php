<?
$subject_val = "Re: [OMPI devel] RFC MPI 2.2 Dist_graph addition";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  1 00:40:29 2013" -->
<!-- isoreceived="20130701044029" -->
<!-- sent="Mon, 1 Jul 2013 04:39:51 +0000" -->
<!-- isosent="20130701043951" -->
<!-- name="Kawashima, Takahiro" -->
<!-- email="t-kawashima_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC MPI 2.2 Dist_graph addition" -->
<!-- id="DF152F4B8E08AE4AAF80927EA5DC03AC18FE0EC0_at_G01JPEXMBYT02" -->
<!-- charset="iso-2022-jp" -->
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
<strong>From:</strong> Kawashima, Takahiro (<em>t-kawashima_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-01 00:39:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12499.php">George Bosilca: "Re: [OMPI devel] RFC MPI 2.2 Dist_graph addition"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/06/12497.php">Ronny Brendel: "[OMPI devel] Barrier Implementation Oddity"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/06/12489.php">George Bosilca: "[OMPI devel] RFC MPI 2.2 Dist_graph addition"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12499.php">George Bosilca: "Re: [OMPI devel] RFC MPI 2.2 Dist_graph addition"</a>
<li><strong>Reply:</strong> <a href="12499.php">George Bosilca: "Re: [OMPI devel] RFC MPI 2.2 Dist_graph addition"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George,
<br>
<p>My colleague was working on your ompi-topo bitbucket repository
<br>
but it was not completed. But he found bugs in your patch attached
<br>
in your previous mail and created the fixing patch. See the attached
<br>
patch, which is a patch against Open MPI trunk + your patch.
<br>
<p>His test programs are also attached. test_1 and test_2 can run
<br>
with nprocs=5, and test_3 and test_4 can run with nprocs&gt;=3.
<br>
<p>Though I'm not sure about the contents of the patch and the test
<br>
programs, I can ask him if you have any questions.
<br>
<p>Regards,
<br>
Takahiro Kawashima,
<br>
MPI development team,
<br>
Fujitsu
<br>
<p><span class="quotelev1">&gt; WHAT:    Support for MPI 2.2 dist_graph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHY:     To become [almost entierly] MPI 2.2 compliant
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHEN:    Monday July 1st
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As discussed during the last phone call, a missing functionality of the MPI 2.2 standard (the distributed graph topology) is ready for prime-time. The attached patch provide a minimal version (no components supporting reordering), that will complete the topology support in Open MPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It is somehow a major change compared with what we had before and it reshape the way we deal with topologies completely. Where our topologies were mainly storage components (they were not capable of creating the new communicator as an example), the new version is built around a [possibly] common representation (in mca/topo/topo.h), but the functions to attach and retrieve the topological information are specific to each component. As a result the ompi_create_cart and ompi_create_graph functions become useless and have been removed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In addition to adding the internal infrastructure to manage the topology information, it updates the MPI interface, and the debuggers support and provides all Fortran interfaces. From a correctness point of view it passes all the tests we have in ompi-tests for the cart and graph topology, and some tests/applications for the dist_graph interface.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't think there is a need for a long wait on this one so I would like to propose a short deadline, a week from now on Monday July 1st. A patch based on Open MPI trunk r28670 is attached below.
</span><br>
<p>

<br><hr>
<ul>
<li>text/x-diff attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12498/dist-graph-fix.patch">dist-graph-fix.patch</a>
</ul>
<!-- attachment="dist-graph-fix.patch" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12498/dist-graph-test.tar.gz">dist-graph-test.tar.gz</a>
</ul>
<!-- attachment="dist-graph-test.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12499.php">George Bosilca: "Re: [OMPI devel] RFC MPI 2.2 Dist_graph addition"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/06/12497.php">Ronny Brendel: "[OMPI devel] Barrier Implementation Oddity"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/06/12489.php">George Bosilca: "[OMPI devel] RFC MPI 2.2 Dist_graph addition"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12499.php">George Bosilca: "Re: [OMPI devel] RFC MPI 2.2 Dist_graph addition"</a>
<li><strong>Reply:</strong> <a href="12499.php">George Bosilca: "Re: [OMPI devel] RFC MPI 2.2 Dist_graph addition"</a>
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
