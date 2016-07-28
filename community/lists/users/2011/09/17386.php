<?
$subject_val = "[OMPI users] unresolvable R_X86_64_64 relocation against symbol `mpi_fortran_*";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 22 13:21:28 2011" -->
<!-- isoreceived="20110922172128" -->
<!-- sent="Thu, 22 Sep 2011 21:21:21 +0400" -->
<!-- isosent="20110922172121" -->
<!-- name="Dmitry N. Mikushin" -->
<!-- email="maemarcus_at_[hidden]" -->
<!-- subject="[OMPI users] unresolvable R_X86_64_64 relocation against symbol `mpi_fortran_*" -->
<!-- id="CAGR4S9HdacH5Uwb6ybcYypAtPeyUwjmHAughZsw_QKJV2C22Bw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] unresolvable R_X86_64_64 relocation against symbol `mpi_fortran_*<br>
<strong>From:</strong> Dmitry N. Mikushin (<em>maemarcus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-22 13:21:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17387.php">Dmitry N. Mikushin: "Re: [OMPI users] unresolvable R_X86_64_64 relocation against symbol `mpi_fortran_*"</a>
<li><strong>Previous message:</strong> <a href="17385.php">S&#233;bastien Boisvert: "[OMPI users] RE : RE : RE : Latency of 250 microseconds with	Open-MPI	1.4.3, Mellanox Infiniband and 256 MPI ranks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17387.php">Dmitry N. Mikushin: "Re: [OMPI users] unresolvable R_X86_64_64 relocation against symbol `mpi_fortran_*"</a>
<li><strong>Reply:</strong> <a href="17387.php">Dmitry N. Mikushin: "Re: [OMPI users] unresolvable R_X86_64_64 relocation against symbol `mpi_fortran_*"</a>
<li><strong>Reply:</strong> <a href="17388.php">Jeff Squyres: "Re: [OMPI users] unresolvable R_X86_64_64 relocation against symbol `mpi_fortran_*"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>OpenMPI 1.5.4 compiled with gcc 4.6.1 and linked with target app gives
<br>
a load of linker messages like this one:
<br>
<p>/usr/bin/ld: ../../lib/libutil.a(parallel_utilities.o)(.debug_info+0x529d):
<br>
unresolvable R_X86_64_64 relocation against symbol
<br>
`mpi_fortran_argv_null_
<br>
<p>There are a lot of similar messages about other mpi_fortran_ symbols.
<br>
Is it a known issue?
<br>
<p>Thanks,
<br>
- D.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17387.php">Dmitry N. Mikushin: "Re: [OMPI users] unresolvable R_X86_64_64 relocation against symbol `mpi_fortran_*"</a>
<li><strong>Previous message:</strong> <a href="17385.php">S&#233;bastien Boisvert: "[OMPI users] RE : RE : RE : Latency of 250 microseconds with	Open-MPI	1.4.3, Mellanox Infiniband and 256 MPI ranks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17387.php">Dmitry N. Mikushin: "Re: [OMPI users] unresolvable R_X86_64_64 relocation against symbol `mpi_fortran_*"</a>
<li><strong>Reply:</strong> <a href="17387.php">Dmitry N. Mikushin: "Re: [OMPI users] unresolvable R_X86_64_64 relocation against symbol `mpi_fortran_*"</a>
<li><strong>Reply:</strong> <a href="17388.php">Jeff Squyres: "Re: [OMPI users] unresolvable R_X86_64_64 relocation against symbol `mpi_fortran_*"</a>
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
