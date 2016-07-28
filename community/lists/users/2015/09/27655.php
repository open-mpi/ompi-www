<?
$subject_val = "[OMPI users] Problem using Open MPI 1.10.0 built with Intel compilers 16.0.0";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 23 12:01:22 2015" -->
<!-- isoreceived="20150923160122" -->
<!-- sent="Wed, 23 Sep 2015 18:00:34 +0200" -->
<!-- isosent="20150923160034" -->
<!-- name="Fabrice Roy" -->
<!-- email="Fabrice.Roy_at_[hidden]" -->
<!-- subject="[OMPI users] Problem using Open MPI 1.10.0 built with Intel compilers 16.0.0" -->
<!-- id="5602CCA2.6060601_at_obspm.fr" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] Problem using Open MPI 1.10.0 built with Intel compilers 16.0.0<br>
<strong>From:</strong> Fabrice Roy (<em>Fabrice.Roy_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-23 12:00:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27656.php">Surivinta Surivinta: "[OMPI users] Problem with implementation of Foxa algorithm"</a>
<li><strong>Previous message:</strong> <a href="27654.php">Kumar, Sudhir: "Re: [OMPI users] OpenMPI 1.8.5 build question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27657.php">Gilles Gouaillardet: "Re: [OMPI users] Problem using Open MPI 1.10.0 built with Intel compilers 16.0.0"</a>
<li><strong>Reply:</strong> <a href="27657.php">Gilles Gouaillardet: "Re: [OMPI users] Problem using Open MPI 1.10.0 built with Intel compilers 16.0.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I have built Open MPI 1.10.0 using Intel compilers 16.0.0.
<br>
When I am trying to compile the following test code:
<br>
<p>&nbsp;&nbsp;&nbsp;program testmpi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;use mpi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;implicit none
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer :: pid
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer :: ierr
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer :: tok
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_init(ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_comm_rank(mpi_comm_world, pid,ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(pid==0) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tok = 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tok = 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end if
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_bcast(tok,1,mpi_integer,0,mpi_comm_world,ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_finalize(ierr)
<br>
&nbsp;&nbsp;&nbsp;end program testmpi
<br>
<p><p>I get the following error message:
<br>
<p>testmpi.f90(21): error #6285: There is no matching specific subroutine 
<br>
for this generic subroutine call.   [MPI_BCAST]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_bcast(tok,1,mpi_integer,0,mpi_comm_world,ierr)
<br>
---------^
<br>
compilation aborted for testmpi.f90 (code 1)
<br>
<p><p>The compilation and execution succeed if I declare tok as
<br>
integer, dimension(1) :: tok
<br>
<p>I have also built Open MPI 1.10.0 with GNU 5.2.0 compilers and both 
<br>
versions of the test code (with tok declared as an integer or as an 
<br>
integer, dimension(1) ) compile and execute.
<br>
Open MPI was configured with the same options with both compilers.
<br>
Do you have any idea how I could solve this problem?
<br>
Thanks,
<br>
<p>Fabrice Roy
<br>
<p><p><pre>
-- 
Fabrice Roy
Ing&#195;&#169;nieur en calcul scientifique
LUTH - CNRS / Observatoire de Paris
5 place Jules Janssen
92190 Meudon
Tel. : 01 45 07 71 20

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27655/smime.p7s">Signature cryptographique S/MIME</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27656.php">Surivinta Surivinta: "[OMPI users] Problem with implementation of Foxa algorithm"</a>
<li><strong>Previous message:</strong> <a href="27654.php">Kumar, Sudhir: "Re: [OMPI users] OpenMPI 1.8.5 build question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27657.php">Gilles Gouaillardet: "Re: [OMPI users] Problem using Open MPI 1.10.0 built with Intel compilers 16.0.0"</a>
<li><strong>Reply:</strong> <a href="27657.php">Gilles Gouaillardet: "Re: [OMPI users] Problem using Open MPI 1.10.0 built with Intel compilers 16.0.0"</a>
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
