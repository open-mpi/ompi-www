<?
$subject_val = "Re: [OMPI devel] RFC MPI 2.2 Dist_graph addition";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  1 13:50:27 2013" -->
<!-- isoreceived="20130701175027" -->
<!-- sent="Mon, 1 Jul 2013 19:50:20 +0200" -->
<!-- isosent="20130701175020" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC MPI 2.2 Dist_graph addition" -->
<!-- id="25DDC7C6-1FAC-4A56-98C6-8C5762C043D4_at_icl.utk.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F6C8A87_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Date:</strong> 2013-07-01 13:50:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12519.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28694 - in trunk/ompi/mca/coll/hcoll: . .deps"</a>
<li><strong>Previous message:</strong> <a href="12517.php">Joshua Ladd: "Re: [OMPI devel] aclocal-1.14: error: ../../config/autogen_found_items.m4:274: file 'opal/mca/backtrace/configure.m4' does not exist"</a>
<li><strong>In reply to:</strong> <a href="12502.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC MPI 2.2 Dist_graph addition"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12503.php">George Bosilca: "Re: [OMPI devel] RFC MPI 2.2 Dist_graph addition"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As all examples are working perfectly in my version of the code I was puzzled by Jeff's issue. It turns out it's a side effect of trying to push as few items as possible instead of just pushing everything in the trunk. I'll fix it in few minutes, meanwhile I'll drop few words about what was the issue.
<br>
<p>One might have notice that this framework came without any component. The reason is that all the components in development are still in &quot;paper in progress&quot; stage, and thus not being pushed in the trunk. However, the level of functionality required by the MPI 2.2 standard is provided by the functions in the base, so it will work reasonably well as is. However, it need a &quot;module&quot;, otherwise the functions in the base done't have a placeholder to attach to. Thus it is crucial to have a decoy component, one that can provide the empty module to have the base functions copied over.
<br>
<p>So the problem Jeff noticed was the lack of a basic component in the topo framework.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p><p>On Jul 1, 2013, at 15:51 , &quot;Jeff Squyres (esquires)&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; George --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; All 4 tests fail for me -- can you have a look?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; [6:50] savbu-usnic-a:~/s/o/dist_graph &#226;&#157;&#175;&#226;&#157;&#175;&#226;&#157;&#175; mpirun --mca btl tcp,sm,self --host mpi001,mpi002,mpi003,mpi004 -np 5 --bynode distgraph_test_1
</span><br>
<span class="quotelev1">&gt; [mpi002:5304] *** An error occurred in MPI_Dist_graph_create
</span><br>
<span class="quotelev1">&gt; [mpi002:5304] *** reported by process [46910457249793,46909632806913]
</span><br>
<span class="quotelev1">&gt; [mpi002:5304] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [mpi002:5304] *** MPI_ERR_OTHER: known error not in list
</span><br>
<span class="quotelev1">&gt; [mpi002:5304] *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev1">&gt; [mpi002:5304] ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt; [savbu-usnic-a:24610] 4 more processes have sent help message help-mpi-errors.txt / mpi_errors_are_fatal
</span><br>
<span class="quotelev1">&gt; [savbu-usnic-a:24610] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
</span><br>
<span class="quotelev1">&gt; [6:50] savbu-usnic-a:~/s/o/dist_graph &#226;&#157;&#175;&#226;&#157;&#175;&#226;&#157;&#175; mpirun --mca btl tcp,sm,self --host mpi001,mpi002,mpi003,mpi004 -np 5 --bynode distgraph_test_2
</span><br>
<span class="quotelev1">&gt; [mpi002:5316] *** An error occurred in MPI_Dist_graph_create_adjacent
</span><br>
<span class="quotelev1">&gt; [mpi002:5316] *** reported by process [46910457053185,46909632806913]
</span><br>
<span class="quotelev1">&gt; [mpi002:5316] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [mpi002:5316] *** MPI_ERR_OTHER: known error not in list
</span><br>
<span class="quotelev1">&gt; [mpi002:5316] *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev1">&gt; [mpi002:5316] ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt; [savbu-usnic-a:24615] 4 more processes have sent help message help-mpi-errors.txt / mpi_errors_are_fatal
</span><br>
<span class="quotelev1">&gt; [savbu-usnic-a:24615] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
</span><br>
<span class="quotelev1">&gt; [6:51] savbu-usnic-a:~/s/o/dist_graph &#226;&#157;&#175;&#226;&#157;&#175;&#226;&#157;&#175; mpirun --mca btl tcp,sm,self --host mpi001,mpi002,mpi003,mpi004 -np 5 --bynode distgraph_test_3
</span><br>
<span class="quotelev1">&gt; [mpi001:5338] *** An error occurred in MPI_Dist_graph_create_adjacent
</span><br>
<span class="quotelev1">&gt; [mpi001:5338] *** reported by process [46910469242881,46909632806916]
</span><br>
<span class="quotelev1">&gt; [mpi001:5338] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [mpi001:5338] *** MPI_ERR_OTHER: known error not in list
</span><br>
<span class="quotelev1">&gt; [mpi001:5338] *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev1">&gt; [mpi001:5338] ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt; [savbu-usnic-a:24797] 4 more processes have sent help message help-mpi-errors.txt / mpi_errors_are_fatal
</span><br>
<span class="quotelev1">&gt; [savbu-usnic-a:24797] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
</span><br>
<span class="quotelev1">&gt; [6:51] savbu-usnic-a:~/s/o/dist_graph &#226;&#157;&#175;&#226;&#157;&#175;&#226;&#157;&#175; mpirun --mca btl tcp,sm,self --host mpi001,mpi002,mpi003,mpi004 -np 5 --bynode distgraph_test_4
</span><br>
<span class="quotelev1">&gt; [mpi001:5351] *** An error occurred in MPI_Dist_graph_create
</span><br>
<span class="quotelev1">&gt; [mpi001:5351] *** reported by process [46910442110977,46909632806912]
</span><br>
<span class="quotelev1">&gt; [mpi001:5351] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [mpi001:5351] *** MPI_ERR_OTHER: known error not in list
</span><br>
<span class="quotelev1">&gt; [mpi001:5351] *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev1">&gt; [mpi001:5351] ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt; [savbu-usnic-a:24891] 4 more processes have sent help message help-mpi-errors.txt / mpi_errors_are_fatal
</span><br>
<span class="quotelev1">&gt; [savbu-usnic-a:24891] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
</span><br>
<span class="quotelev1">&gt; [6:51] savbu-usnic-a:~/s/o/dist_graph &#226;&#157;&#175;&#226;&#157;&#175;&#226;&#157;&#175; 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 1, 2013, at 8:41 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The patch has been pushed into the trunk in r28687.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; George.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 1, 2013, at 13:55 , George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Guys,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for the patch and for the tests. All these changes/cleanups are correct, I have incorporate them all in the patch. Please find below the new patch.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As the deadline for the RFC is today, I'll move forward and push the changes into the trunk, and if there are still issues we can work them out directly in the trunk.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; George.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PS: I will push your tests in our tests base as well.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jul 1, 2013, at 06:39 , &quot;Kawashima, Takahiro&quot; &lt;t-kawashima_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; George,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; My colleague was working on your ompi-topo bitbucket repository
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; but it was not completed. But he found bugs in your patch attached
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in your previous mail and created the fixing patch. See the attached
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; patch, which is a patch against Open MPI trunk + your patch.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; His test programs are also attached. test_1 and test_2 can run
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with nprocs=5, and test_3 and test_4 can run with nprocs&gt;=3.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Though I'm not sure about the contents of the patch and the test
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; programs, I can ask him if you have any questions.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Takahiro Kawashima,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI development team,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Fujitsu
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; WHAT:    Support for MPI 2.2 dist_graph
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; WHY:     To become [almost entierly] MPI 2.2 compliant
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; WHEN:    Monday July 1st
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; As discussed during the last phone call, a missing functionality of the MPI 2.2 standard (the distributed graph topology) is ready for prime-time. The attached patch provide a minimal version (no components supporting reordering), that will complete the topology support in Open MPI.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; It is somehow a major change compared with what we had before and it reshape the way we deal with topologies completely. Where our topologies were mainly storage components (they were not capable of creating the new communicator as an example), the new version is built around a [possibly] common representation (in mca/topo/topo.h), but the functions to attach and retrieve the topological information are specific to each component. As a result the ompi_create_cart and ompi_create_graph functions become useless and have been removed.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; In addition to adding the internal infrastructure to manage the topology information, it updates the MPI interface, and the debuggers support and provides all Fortran interfaces. From a correctness point of view it passes all the tests we have in ompi-tests for the cart and graph topology, and some tests/applications for the dist_graph interface.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I don't think there is a need for a long wait on this one so I would like to propose a short deadline, a week from now on Monday July 1st. A patch based on Open MPI trunk r28670 is attached below.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;dist-graph-fix.patch&gt;&lt;dist-graph-test.tar.gz&gt;_______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12519.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28694 - in trunk/ompi/mca/coll/hcoll: . .deps"</a>
<li><strong>Previous message:</strong> <a href="12517.php">Joshua Ladd: "Re: [OMPI devel] aclocal-1.14: error: ../../config/autogen_found_items.m4:274: file 'opal/mca/backtrace/configure.m4' does not exist"</a>
<li><strong>In reply to:</strong> <a href="12502.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC MPI 2.2 Dist_graph addition"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12503.php">George Bosilca: "Re: [OMPI devel] RFC MPI 2.2 Dist_graph addition"</a>
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
