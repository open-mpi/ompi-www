<?
$subject_val = "Re: [OMPI devel] RFC MPI 2.2 Dist_graph addition";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  1 07:55:52 2013" -->
<!-- isoreceived="20130701115552" -->
<!-- sent="Mon, 1 Jul 2013 13:55:52 +0200" -->
<!-- isosent="20130701115552" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC MPI 2.2 Dist_graph addition" -->
<!-- id="28A0B22E-2D48-43A1-81F1-4FAA434AB4D4_at_icl.utk.edu" -->
<!-- charset="iso-2022-jp" -->
<!-- inreplyto="DF152F4B8E08AE4AAF80927EA5DC03AC18FE0EC0_at_G01JPEXMBYT02" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-01 07:55:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12500.php">George Bosilca: "Re: [OMPI devel] RFC MPI 2.2 Dist_graph addition"</a>
<li><strong>Previous message:</strong> <a href="12498.php">Kawashima, Takahiro: "Re: [OMPI devel] RFC MPI 2.2 Dist_graph addition"</a>
<li><strong>In reply to:</strong> <a href="12498.php">Kawashima, Takahiro: "Re: [OMPI devel] RFC MPI 2.2 Dist_graph addition"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12500.php">George Bosilca: "Re: [OMPI devel] RFC MPI 2.2 Dist_graph addition"</a>
<li><strong>Reply:</strong> <a href="12500.php">George Bosilca: "Re: [OMPI devel] RFC MPI 2.2 Dist_graph addition"</a>
<li><strong>Reply:</strong> <a href="12503.php">George Bosilca: "Re: [OMPI devel] RFC MPI 2.2 Dist_graph addition"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Guys,
<br>
<p>Thanks for the patch and for the tests. All these changes/cleanups are correct, I have incorporate them all in the patch. Please find below the new patch.
<br>
<p>As the deadline for the RFC is today, I'll move forward and push the changes into the trunk, and if there are still issues we can work them out directly in the trunk.
<br>
<p>Thanks,
<br>
&nbsp;&nbsp;George.
<br>
<p>PS: I will push your tests in our tests base as well.
<br>
<p><p>On Jul 1, 2013, at 06:39 , &quot;Kawashima, Takahiro&quot; &lt;t-kawashima_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; George,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My colleague was working on your ompi-topo bitbucket repository
</span><br>
<span class="quotelev1">&gt; but it was not completed. But he found bugs in your patch attached
</span><br>
<span class="quotelev1">&gt; in your previous mail and created the fixing patch. See the attached
</span><br>
<span class="quotelev1">&gt; patch, which is a patch against Open MPI trunk + your patch.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; His test programs are also attached. test_1 and test_2 can run
</span><br>
<span class="quotelev1">&gt; with nprocs=5, and test_3 and test_4 can run with nprocs&gt;=3.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Though I'm not sure about the contents of the patch and the test
</span><br>
<span class="quotelev1">&gt; programs, I can ask him if you have any questions.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Takahiro Kawashima,
</span><br>
<span class="quotelev1">&gt; MPI development team,
</span><br>
<span class="quotelev1">&gt; Fujitsu
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; WHAT:    Support for MPI 2.2 dist_graph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; WHY:     To become [almost entierly] MPI 2.2 compliant
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; WHEN:    Monday July 1st
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; As discussed during the last phone call, a missing functionality of the MPI 2.2 standard (the distributed graph topology) is ready for prime-time. The attached patch provide a minimal version (no components supporting reordering), that will complete the topology support in Open MPI.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It is somehow a major change compared with what we had before and it reshape the way we deal with topologies completely. Where our topologies were mainly storage components (they were not capable of creating the new communicator as an example), the new version is built around a [possibly] common representation (in mca/topo/topo.h), but the functions to attach and retrieve the topological information are specific to each component. As a result the ompi_create_cart and ompi_create_graph functions become useless and have been removed.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In addition to adding the internal infrastructure to manage the topology information, it updates the MPI interface, and the debuggers support and provides all Fortran interfaces. From a correctness point of view it passes all the tests we have in ompi-tests for the cart and graph topology, and some tests/applications for the dist_graph interface.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I don't think there is a need for a long wait on this one so I would like to propose a short deadline, a week from now on Monday July 1st. A patch based on Open MPI trunk r28670 is attached below.
</span><br>
<span class="quotelev1">&gt; &lt;dist-graph-fix.patch&gt;&lt;dist-graph-test.tar.gz&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12500.php">George Bosilca: "Re: [OMPI devel] RFC MPI 2.2 Dist_graph addition"</a>
<li><strong>Previous message:</strong> <a href="12498.php">Kawashima, Takahiro: "Re: [OMPI devel] RFC MPI 2.2 Dist_graph addition"</a>
<li><strong>In reply to:</strong> <a href="12498.php">Kawashima, Takahiro: "Re: [OMPI devel] RFC MPI 2.2 Dist_graph addition"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12500.php">George Bosilca: "Re: [OMPI devel] RFC MPI 2.2 Dist_graph addition"</a>
<li><strong>Reply:</strong> <a href="12500.php">George Bosilca: "Re: [OMPI devel] RFC MPI 2.2 Dist_graph addition"</a>
<li><strong>Reply:</strong> <a href="12503.php">George Bosilca: "Re: [OMPI devel] RFC MPI 2.2 Dist_graph addition"</a>
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
