<?
$subject_val = "[OMPI users] MPI_Put/Get with many nested derived type";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May 21 04:50:12 2016" -->
<!-- isoreceived="20160521085012" -->
<!-- sent="Sat, 21 May 2016 17:50:07 +0900" -->
<!-- isosent="20160521085007" -->
<!-- name="Akihiro Tabuchi" -->
<!-- email="tabuchi_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Put/Get with many nested derived type" -->
<!-- id="5740213F.20608_at_hpcs.cs.tsukuba.ac.jp" -->
<!-- charset="iso-2022-jp" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Put/Get with many nested derived type<br>
<strong>From:</strong> Akihiro Tabuchi (<em>tabuchi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-21 04:50:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29261.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_Put/Get with many nested derived type"</a>
<li><strong>Previous message:</strong> <a href="29259.php">Damien: "Re: [OMPI users] [slightly off topic] hardware solutions with monetary cost in mind"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29261.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_Put/Get with many nested derived type"</a>
<li><strong>Reply:</strong> <a href="29261.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_Put/Get with many nested derived type"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>At OpenMPI 1.10.2, MPI_Type_free crashes with a many nested derived type after using MPI_Put/Get
<br>
with the datatype as target_datatype.
<br>
The test code is attached.
<br>
In the code, MPI_Type_free crashes if N_NEST &gt;= 4.
<br>
<p>This problem occurs at OpenMPI 1.8.5 or later.
<br>
There is no problem at OpenMPI 1.8.4, MPICH 3.2, and MVAPICH 2.1.
<br>
<p>Does anyone know about the problem?
<br>
<p>Regards,
<br>
Akihiro
<br>
<p><pre>
-- 
Akihiro Tabuchi
HPCS Lab, Univ. of Tsukuba
tabuchi_at_[hidden]

</pre>
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29260/test_derivedtype.c">test_derivedtype.c</a>
</ul>
<!-- attachment="test_derivedtype.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29261.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_Put/Get with many nested derived type"</a>
<li><strong>Previous message:</strong> <a href="29259.php">Damien: "Re: [OMPI users] [slightly off topic] hardware solutions with monetary cost in mind"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29261.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_Put/Get with many nested derived type"</a>
<li><strong>Reply:</strong> <a href="29261.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_Put/Get with many nested derived type"</a>
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
