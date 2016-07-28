<?
$subject_val = "[OMPI users] MPI_Gather bug with reproducer code attached";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Nov 16 19:41:15 2008" -->
<!-- isoreceived="20081117004115" -->
<!-- sent="Mon, 17 Nov 2008 01:41:02 +0100" -->
<!-- isosent="20081117004102" -->
<!-- name="Peter Kjellstrom" -->
<!-- email="cap_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Gather bug with reproducer code attached" -->
<!-- id="200811170141.07215.cap_at_nsc.liu.se" -->
<!-- charset="iso 8859-15" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Gather bug with reproducer code attached<br>
<strong>From:</strong> Peter Kjellstrom (<em>cap_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-16 19:41:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7319.php">Ravi Manumachu: "[OMPI users] OpenMPI-1.2.8 issues on 64-bit Itanium platforms (IA64)"</a>
<li><strong>Previous message:</strong> <a href="7317.php">Jeff Squyres: "Re: [OMPI users] Bus Error in ompi_free_list_grow"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7372.php">Jeff Squyres: "Re: [OMPI users] MPI_Gather bug with reproducer code attached"</a>
<li><strong>Reply:</strong> <a href="7372.php">Jeff Squyres: "Re: [OMPI users] MPI_Gather bug with reproducer code attached"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Problem description:
<br>
Elements from all ranks are gathered correctly except for the
<br>
element belonging to the root/target rank of the gather operation
<br>
when using certain custom MPI-datatypes (see reproducer code).
<br>
<p>The bug can be toggled by commenting/uncommenting line 11 in the .F90-file.
<br>
<p>Even though all this is for MPI_Gather the same seems to go for MPI_Gatherv 
<br>
too.
<br>
<p>I have verified the bad behaviour with several OpenMPI versions from 1.2.3 to 
<br>
1.3b2. Correct behaviour has been observed on mvapich2 and PlatformMPI. Both 
<br>
gfortran and ifort has been tried.
<br>
<p>Attached files:
<br>
&nbsp;BUILD                      Build instructions
<br>
&nbsp;RUN                        Run instructions
<br>
&nbsp;mpi_gather_test.F90        Reproducer source code
<br>
&nbsp;4rank_bad_output.txt       Bad output
<br>
&nbsp;4rank_expected_output.txt  Good output
<br>
<p>/Peter
<br>
<p>




<br><p>
<p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7318/BUILD">BUILD</a>
</ul>
<!-- attachment="BUILD" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7318/RUN">RUN</a>
</ul>
<!-- attachment="RUN" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7318/mpi_gather_test.F90">mpi_gather_test.F90</a>
</ul>
<!-- attachment="mpi_gather_test.F90" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7318/4rank_bad_output.txt">4rank_bad_output.txt</a>
</ul>
<!-- attachment="4rank_bad_output.txt" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7318/4rank_expected_output.txt">4rank_expected_output.txt</a>
</ul>
<!-- attachment="4rank_expected_output.txt" -->
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7318/signature.asc_">This is a digitally signed message part.</a>
</ul>
<!-- attachment="signature.asc_" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7319.php">Ravi Manumachu: "[OMPI users] OpenMPI-1.2.8 issues on 64-bit Itanium platforms (IA64)"</a>
<li><strong>Previous message:</strong> <a href="7317.php">Jeff Squyres: "Re: [OMPI users] Bus Error in ompi_free_list_grow"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7372.php">Jeff Squyres: "Re: [OMPI users] MPI_Gather bug with reproducer code attached"</a>
<li><strong>Reply:</strong> <a href="7372.php">Jeff Squyres: "Re: [OMPI users] MPI_Gather bug with reproducer code attached"</a>
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
