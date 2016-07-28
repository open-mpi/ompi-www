<?
$subject_val = "Re: [OMPI devel] RFC MPI 2.2 Dist_graph addition";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  1 09:51:45 2013" -->
<!-- isoreceived="20130701135145" -->
<!-- sent="Mon, 1 Jul 2013 13:51:39 +0000" -->
<!-- isosent="20130701135139" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC MPI 2.2 Dist_graph addition" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F6C8A87_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="C3273B0F-E0B8-4435-A272-2CFB1E7C21AC_at_icl.utk.edu" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-01 09:51:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12503.php">George Bosilca: "Re: [OMPI devel] RFC MPI 2.2 Dist_graph addition"</a>
<li><strong>Previous message:</strong> <a href="12501.php">George Bosilca: "Re: [OMPI devel] Barrier Implementation Oddity"</a>
<li><strong>In reply to:</strong> <a href="12500.php">George Bosilca: "Re: [OMPI devel] RFC MPI 2.2 Dist_graph addition"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12518.php">George Bosilca: "Re: [OMPI devel] RFC MPI 2.2 Dist_graph addition"</a>
<li><strong>Reply:</strong> <a href="12518.php">George Bosilca: "Re: [OMPI devel] RFC MPI 2.2 Dist_graph addition"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George --
<br>
<p>All 4 tests fail for me -- can you have a look?
<br>
<p>-----
<br>
[6:50] savbu-usnic-a:~/s/o/dist_graph &#226;&#157;&#175;&#226;&#157;&#175;&#226;&#157;&#175; mpirun --mca btl tcp,sm,self --host mpi001,mpi002,mpi003,mpi004 -np 5 --bynode distgraph_test_1
<br>
[mpi002:5304] *** An error occurred in MPI_Dist_graph_create
<br>
[mpi002:5304] *** reported by process [46910457249793,46909632806913]
<br>
[mpi002:5304] *** on communicator MPI_COMM_WORLD
<br>
[mpi002:5304] *** MPI_ERR_OTHER: known error not in list
<br>
[mpi002:5304] *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
<br>
[mpi002:5304] ***    and potentially your MPI job)
<br>
[savbu-usnic-a:24610] 4 more processes have sent help message help-mpi-errors.txt / mpi_errors_are_fatal
<br>
[savbu-usnic-a:24610] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
<br>
[6:50] savbu-usnic-a:~/s/o/dist_graph &#226;&#157;&#175;&#226;&#157;&#175;&#226;&#157;&#175; mpirun --mca btl tcp,sm,self --host mpi001,mpi002,mpi003,mpi004 -np 5 --bynode distgraph_test_2
<br>
[mpi002:5316] *** An error occurred in MPI_Dist_graph_create_adjacent
<br>
[mpi002:5316] *** reported by process [46910457053185,46909632806913]
<br>
[mpi002:5316] *** on communicator MPI_COMM_WORLD
<br>
[mpi002:5316] *** MPI_ERR_OTHER: known error not in list
<br>
[mpi002:5316] *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
<br>
[mpi002:5316] ***    and potentially your MPI job)
<br>
[savbu-usnic-a:24615] 4 more processes have sent help message help-mpi-errors.txt / mpi_errors_are_fatal
<br>
[savbu-usnic-a:24615] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
<br>
[6:51] savbu-usnic-a:~/s/o/dist_graph &#226;&#157;&#175;&#226;&#157;&#175;&#226;&#157;&#175; mpirun --mca btl tcp,sm,self --host mpi001,mpi002,mpi003,mpi004 -np 5 --bynode distgraph_test_3
<br>
[mpi001:5338] *** An error occurred in MPI_Dist_graph_create_adjacent
<br>
[mpi001:5338] *** reported by process [46910469242881,46909632806916]
<br>
[mpi001:5338] *** on communicator MPI_COMM_WORLD
<br>
[mpi001:5338] *** MPI_ERR_OTHER: known error not in list
<br>
[mpi001:5338] *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
<br>
[mpi001:5338] ***    and potentially your MPI job)
<br>
[savbu-usnic-a:24797] 4 more processes have sent help message help-mpi-errors.txt / mpi_errors_are_fatal
<br>
[savbu-usnic-a:24797] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
<br>
[6:51] savbu-usnic-a:~/s/o/dist_graph &#226;&#157;&#175;&#226;&#157;&#175;&#226;&#157;&#175; mpirun --mca btl tcp,sm,self --host mpi001,mpi002,mpi003,mpi004 -np 5 --bynode distgraph_test_4
<br>
[mpi001:5351] *** An error occurred in MPI_Dist_graph_create
<br>
[mpi001:5351] *** reported by process [46910442110977,46909632806912]
<br>
[mpi001:5351] *** on communicator MPI_COMM_WORLD
<br>
[mpi001:5351] *** MPI_ERR_OTHER: known error not in list
<br>
[mpi001:5351] *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
<br>
[mpi001:5351] ***    and potentially your MPI job)
<br>
[savbu-usnic-a:24891] 4 more processes have sent help message help-mpi-errors.txt / mpi_errors_are_fatal
<br>
[savbu-usnic-a:24891] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
<br>
[6:51] savbu-usnic-a:~/s/o/dist_graph &#226;&#157;&#175;&#226;&#157;&#175;&#226;&#157;&#175; 
<br>
-----
<br>
<p><p><p>On Jul 1, 2013, at 8:41 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; The patch has been pushed into the trunk in r28687.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  George.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 1, 2013, at 13:55 , George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Guys,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for the patch and for the tests. All these changes/cleanups are correct, I have incorporate them all in the patch. Please find below the new patch.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; As the deadline for the RFC is today, I'll move forward and push the changes into the trunk, and if there are still issues we can work them out directly in the trunk.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; George.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; PS: I will push your tests in our tests base as well.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 1, 2013, at 06:39 , &quot;Kawashima, Takahiro&quot; &lt;t-kawashima_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; George,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My colleague was working on your ompi-topo bitbucket repository
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but it was not completed. But he found bugs in your patch attached
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in your previous mail and created the fixing patch. See the attached
</span><br>
<span class="quotelev3">&gt;&gt;&gt; patch, which is a patch against Open MPI trunk + your patch.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; His test programs are also attached. test_1 and test_2 can run
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with nprocs=5, and test_3 and test_4 can run with nprocs&gt;=3.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Though I'm not sure about the contents of the patch and the test
</span><br>
<span class="quotelev3">&gt;&gt;&gt; programs, I can ask him if you have any questions.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Takahiro Kawashima,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI development team,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fujitsu
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; WHAT:    Support for MPI 2.2 dist_graph
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; WHY:     To become [almost entierly] MPI 2.2 compliant
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; WHEN:    Monday July 1st
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; As discussed during the last phone call, a missing functionality of the MPI 2.2 standard (the distributed graph topology) is ready for prime-time. The attached patch provide a minimal version (no components supporting reordering), that will complete the topology support in Open MPI.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It is somehow a major change compared with what we had before and it reshape the way we deal with topologies completely. Where our topologies were mainly storage components (they were not capable of creating the new communicator as an example), the new version is built around a [possibly] common representation (in mca/topo/topo.h), but the functions to attach and retrieve the topological information are specific to each component. As a result the ompi_create_cart and ompi_create_graph functions become useless and have been removed.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In addition to adding the internal infrastructure to manage the topology information, it updates the MPI interface, and the debuggers support and provides all Fortran interfaces. From a correctness point of view it passes all the tests we have in ompi-tests for the cart and graph topology, and some tests/applications for the dist_graph interface.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I don't think there is a need for a long wait on this one so I would like to propose a short deadline, a week from now on Monday July 1st. A patch based on Open MPI trunk r28670 is attached below.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;dist-graph-fix.patch&gt;&lt;dist-graph-test.tar.gz&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12503.php">George Bosilca: "Re: [OMPI devel] RFC MPI 2.2 Dist_graph addition"</a>
<li><strong>Previous message:</strong> <a href="12501.php">George Bosilca: "Re: [OMPI devel] Barrier Implementation Oddity"</a>
<li><strong>In reply to:</strong> <a href="12500.php">George Bosilca: "Re: [OMPI devel] RFC MPI 2.2 Dist_graph addition"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12518.php">George Bosilca: "Re: [OMPI devel] RFC MPI 2.2 Dist_graph addition"</a>
<li><strong>Reply:</strong> <a href="12518.php">George Bosilca: "Re: [OMPI devel] RFC MPI 2.2 Dist_graph addition"</a>
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
