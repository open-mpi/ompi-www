<?
$subject_val = "[OMPI users] Bug with 1.2.5?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 17 12:33:50 2008" -->
<!-- isoreceived="20080317163350" -->
<!-- sent="Mon, 17 Mar 2008 12:33:36 -0400" -->
<!-- isosent="20080317163336" -->
<!-- name="Grismer, Matthew J Civ USAF AFMC AFRL/RBAC" -->
<!-- email="Matthew.Grismer_at_[hidden]" -->
<!-- subject="[OMPI users] Bug with 1.2.5?" -->
<!-- id="2B00361EE3107A4F88383EC1B041DC9A0335E989_at_VFOHMLAO01.Enterprise.afmc.ds.af.mil" -->
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
<strong>Subject:</strong> [OMPI users] Bug with 1.2.5?<br>
<strong>From:</strong> Grismer, Matthew J Civ USAF AFMC AFRL/RBAC (<em>Matthew.Grismer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-17 12:33:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5209.php">Jim Hill: "Re: [OMPI users] What architecture?  X86_64, that's what architecture!"</a>
<li><strong>Previous message:</strong> <a href="5207.php">Jeff Squyres: "Re: [OMPI users] Please help &quot;orte_init failed error&quot; running simple MPI code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5210.php">George Bosilca: "Re: [OMPI users] Bug with 1.2.5?"</a>
<li><strong>Reply:</strong> <a href="5210.php">George Bosilca: "Re: [OMPI users] Bug with 1.2.5?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've attached the requested configuration and ompi_info output, as well
<br>
as the actual error messages that appear (run.out) when the code is run.
<br>
I traced it down to the section of code included that is in
<br>
fail_section.F.
<br>
<p>The platform is a Mac Pro running Mac OS X 10.5.2, but I also tried it
<br>
on Mac OS X Server 10.4.11 (Xserve Xeon) with the same result. Also
<br>
tried compiling OpenMPI with the Intel C/C++ compilers (version
<br>
10.1.012), same result.
<br>
<p>The code has been run without issue on numerous HPC platforms, and runs
<br>
with OpenMPI on this platform for small problems. Issue shows up when
<br>
running larger problems. Using MPICH2 on this platform with same large
<br>
problem runs fine.
<br>
<p>The issue appears to occur when calling the MPI_WAITALL statement at the
<br>
end of the code section; the MPI_IRECV and MPI_ISEND statements
<br>
complete. 
<br>
<p>Any help is greatly appreciated.
<br>
<p>_____________________________________________________
<br>
Matthew Grismer
<br>
<p><p>



<br><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5208/run.out">run.out</a>
</ul>
<!-- attachment="run.out" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5208/config.log.gz">config.log.gz</a>
</ul>
<!-- attachment="config.log.gz" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5208/fail_section.F">fail_section.F</a>
</ul>
<!-- attachment="fail_section.F" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5208/mpi_info.txt.gz">mpi_info.txt.gz</a>
</ul>
<!-- attachment="mpi_info.txt.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5209.php">Jim Hill: "Re: [OMPI users] What architecture?  X86_64, that's what architecture!"</a>
<li><strong>Previous message:</strong> <a href="5207.php">Jeff Squyres: "Re: [OMPI users] Please help &quot;orte_init failed error&quot; running simple MPI code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5210.php">George Bosilca: "Re: [OMPI users] Bug with 1.2.5?"</a>
<li><strong>Reply:</strong> <a href="5210.php">George Bosilca: "Re: [OMPI users] Bug with 1.2.5?"</a>
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
