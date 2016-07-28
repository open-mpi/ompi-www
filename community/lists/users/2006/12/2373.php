<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Dec 16 00:15:13 2006" -->
<!-- isoreceived="20061216051513" -->
<!-- sent="Fri, 15 Dec 2006 19:41:14 -0500" -->
<!-- isosent="20061216004114" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Barrier Error?" -->
<!-- id="1B0DABB1-5AF0-4699-AE9D-C10099418CC1_at_cisco.com" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="AF3852B8E5337749823CCFC6889EA8AA039C8BE1_at_WS-BCO-MSE7.milky-way.battelle.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-15 19:41:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2374.php">Jeff Squyres: "Re: [OMPI users] Can OpenMPI be used with R?"</a>
<li><strong>Previous message:</strong> <a href="2372.php">Nader Ahmadi: "[OMPI users] OpenMPI output problem, for IBM AIX 5.3"</a>
<li><strong>In reply to:</strong> <a href="2272.php">Cupp, Matthew R: "[OMPI users] MPI_Barrier Error?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have no idea how this e-mail slipped by me -- I'm sorry for the  
<br>
delay in replying.
<br>
<p>Can you run your code through a memory-checking debugger such as  
<br>
valgrind and see if it turns up any ancillary memory problems?
<br>
<p><p>On Dec 1, 2006, at 1:52 PM, Cupp, Matthew R wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In my program I am calling MPI_Barrier(MPI_COMM_WORLD), but it  
</span><br>
<span class="quotelev1">&gt; seems to cause an error on one node.  The node changes depending on  
</span><br>
<span class="quotelev1">&gt; how many total nodes I have (it could be 4 or 2).  I&#146;m thinking  
</span><br>
<span class="quotelev1">&gt; it&#146;s MPI_Barrier because I put print statements around it and  
</span><br>
<span class="quotelev1">&gt; that&#146;s where the program terminates.  This is the error message  
</span><br>
<span class="quotelev1">&gt; that I get:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Failing at addr:0xc900000002
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [0] func:/opt/openmpi/st/lib/libopal.so.0 [0x2aaaab04dbc8]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [1] func:/lib64/libpthread.so.0 [0x3be4f0c530]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [2] func:/opt/openmpi/st/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_recv 
</span><br>
<span class="quotelev1">&gt; +0x2a3) [0x2aaaacf26f33]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [3] func:/opt/openmpi/st/lib/openmpi/mca_coll_tuned.so 
</span><br>
<span class="quotelev1">&gt; (ompi_coll_tuned_barrier_intra_recursivedoubling+0x14a)  
</span><br>
<span class="quotelev1">&gt; [0x2aaaad8699ba]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [4] func:/opt/openmpi/st/lib/libmpi.so.0(PMPI_Barrier+0xa4)  
</span><br>
<span class="quotelev1">&gt; [0x2aaaaad87294]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [5] func:Debug/BioRiskAssessmentMpiLibTest 
</span><br>
<span class="quotelev1">&gt; (_ZN2BL14CMpiTestRunner11SynchronizeEv+0xe) [0x490846]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [6] func:Debug/BioRiskAssessmentMpiLibTest 
</span><br>
<span class="quotelev1">&gt; (_ZN2BL8CMpiTest12FinishedTestEi+0x3c) [0x490884]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [7] func:Debug/BioRiskAssessmentMpiLibTest 
</span><br>
<span class="quotelev1">&gt; (_ZN15CMpiProcessTest8RunTestsEv+0x269) [0x490297]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [8] func:Debug/BioRiskAssessmentMpiLibTest 
</span><br>
<span class="quotelev1">&gt; (_ZN29CMpiConsequenceCalculatorTest3RunEP19ompi_communicator_t 
</span><br>
<span class="quotelev1">&gt; +0xdf) [0x45a8e7]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [9] func:Debug/BioRiskAssessmentMpiLibTest 
</span><br>
<span class="quotelev1">&gt; (_ZN2BL14CMpiTestRunner3RunEv+0x60) [0x4909ba]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [10] func:Debug/BioRiskAssessmentMpiLibTest(main+0x42) [0x44558a]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [11] func:/lib64/libc.so.6(__libc_start_main+0xef) [0x3be481c40f]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [12] func:Debug/BioRiskAssessmentMpiLibTest(__gxx_personality_v0 
</span><br>
<span class="quotelev1">&gt; +0x99) [0x4454b9]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *** End of error message ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I&#146;m using version 1.1.2.  Not sure if it matters, but before I call  
</span><br>
<span class="quotelev1">&gt; the MPI_Barrier I create a comm subset (which in this case happens  
</span><br>
<span class="quotelev1">&gt; to be all of the same processes that are in MPI_COMM_WORLD).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does anybody have an idea what might be my problem?  Or what I  
</span><br>
<span class="quotelev1">&gt; should do to get more information?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Matt
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ______________________________
</span><br>
<span class="quotelev1">&gt; Matt Cupp
</span><br>
<span class="quotelev1">&gt; Battelle Memorial Institute
</span><br>
<span class="quotelev1">&gt; Statistics and Information Analysis
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2374.php">Jeff Squyres: "Re: [OMPI users] Can OpenMPI be used with R?"</a>
<li><strong>Previous message:</strong> <a href="2372.php">Nader Ahmadi: "[OMPI users] OpenMPI output problem, for IBM AIX 5.3"</a>
<li><strong>In reply to:</strong> <a href="2272.php">Cupp, Matthew R: "[OMPI users] MPI_Barrier Error?"</a>
<!-- nextthread="start" -->
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
