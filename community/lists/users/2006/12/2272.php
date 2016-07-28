<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Dec  1 13:53:01 2006" -->
<!-- isoreceived="20061201185301" -->
<!-- sent="Fri, 01 Dec 2006 13:52:45 -0500" -->
<!-- isosent="20061201185245" -->
<!-- name="Cupp, Matthew R" -->
<!-- email="cuppm_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Barrier Error?" -->
<!-- id="AF3852B8E5337749823CCFC6889EA8AA039C8BE1_at_WS-BCO-MSE7.milky-way.battelle.org" -->
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
<strong>From:</strong> Cupp, Matthew R (<em>cuppm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-01 13:52:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2273.php">Greg Lindahl: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<li><strong>Previous message:</strong> <a href="2271.php">Dave Grote: "Re: [OMPI users] x11 forwarding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2373.php">Jeff Squyres: "Re: [OMPI users] MPI_Barrier Error?"</a>
<li><strong>Reply:</strong> <a href="2373.php">Jeff Squyres: "Re: [OMPI users] MPI_Barrier Error?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>&nbsp;
<br>
<p>In my program I am calling MPI_Barrier(MPI_COMM_WORLD), but it seems to
<br>
cause an error on one node.  The node changes depending on how many
<br>
total nodes I have (it could be 4 or 2).  I'm thinking it's MPI_Barrier
<br>
because I put print statements around it and that's where the program
<br>
terminates.  This is the error message that I get:
<br>
<p>&nbsp;
<br>
<p>Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
<br>
<p>Failing at addr:0xc900000002
<br>
<p>[0] func:/opt/openmpi/st/lib/libopal.so.0 [0x2aaaab04dbc8]
<br>
<p>[1] func:/lib64/libpthread.so.0 [0x3be4f0c530]
<br>
<p>[2]
<br>
func:/opt/openmpi/st/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_recv+0x2a3)
<br>
[0x2aaaacf26f33]
<br>
<p>[3]
<br>
func:/opt/openmpi/st/lib/openmpi/mca_coll_tuned.so(ompi_coll_tuned_barri
<br>
er_intra_recursivedoubling+0x14a) [0x2aaaad8699ba]
<br>
<p>[4] func:/opt/openmpi/st/lib/libmpi.so.0(PMPI_Barrier+0xa4)
<br>
[0x2aaaaad87294]
<br>
<p>[5]
<br>
func:Debug/BioRiskAssessmentMpiLibTest(_ZN2BL14CMpiTestRunner11Synchroni
<br>
zeEv+0xe) [0x490846]
<br>
<p>[6]
<br>
func:Debug/BioRiskAssessmentMpiLibTest(_ZN2BL8CMpiTest12FinishedTestEi+0
<br>
x3c) [0x490884]
<br>
<p>[7]
<br>
func:Debug/BioRiskAssessmentMpiLibTest(_ZN15CMpiProcessTest8RunTestsEv+0
<br>
x269) [0x490297]
<br>
<p>[8]
<br>
func:Debug/BioRiskAssessmentMpiLibTest(_ZN29CMpiConsequenceCalculatorTes
<br>
t3RunEP19ompi_communicator_t+0xdf) [0x45a8e7]
<br>
<p>[9]
<br>
func:Debug/BioRiskAssessmentMpiLibTest(_ZN2BL14CMpiTestRunner3RunEv+0x60
<br>
) [0x4909ba]
<br>
<p>[10] func:Debug/BioRiskAssessmentMpiLibTest(main+0x42) [0x44558a]
<br>
<p>[11] func:/lib64/libc.so.6(__libc_start_main+0xef) [0x3be481c40f]
<br>
<p>[12] func:Debug/BioRiskAssessmentMpiLibTest(__gxx_personality_v0+0x99)
<br>
[0x4454b9]
<br>
<p>*** End of error message ***
<br>
<p>&nbsp;
<br>
<p>I'm using version 1.1.2.  Not sure if it matters, but before I call the
<br>
MPI_Barrier I create a comm subset (which in this case happens to be all
<br>
of the same processes that are in MPI_COMM_WORLD).
<br>
<p>&nbsp;
<br>
<p>Does anybody have an idea what might be my problem?  Or what I should do
<br>
to get more information?
<br>
<p>&nbsp;
<br>
<p>Thanks!
<br>
<p>Matt
<br>
<p>______________________________
<br>
Matt Cupp
<br>
Battelle Memorial Institute
<br>
Statistics and Information Analysis
<br>
<p>&nbsp;
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2272/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2273.php">Greg Lindahl: "Re: [OMPI users] How to set paffinity on a multi-cpu node?"</a>
<li><strong>Previous message:</strong> <a href="2271.php">Dave Grote: "Re: [OMPI users] x11 forwarding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2373.php">Jeff Squyres: "Re: [OMPI users] MPI_Barrier Error?"</a>
<li><strong>Reply:</strong> <a href="2373.php">Jeff Squyres: "Re: [OMPI users] MPI_Barrier Error?"</a>
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
