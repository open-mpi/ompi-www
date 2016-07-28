<?
$subject_val = "[OMPI users] MPI_ALLREDUCE bug with 1.5.2rc3r24441";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  1 16:16:22 2011" -->
<!-- isoreceived="20110301211622" -->
<!-- sent="Tue, 01 Mar 2011 22:16:30 +0100" -->
<!-- isosent="20110301211630" -->
<!-- name="Harald Anlauf" -->
<!-- email="anlauf_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_ALLREDUCE bug with 1.5.2rc3r24441" -->
<!-- id="4D6D622E.601_at_gmx.de" -->
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
<strong>Subject:</strong> [OMPI users] MPI_ALLREDUCE bug with 1.5.2rc3r24441<br>
<strong>From:</strong> Harald Anlauf (<em>anlauf_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-01 16:16:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15779.php">Ralph Castain: "Re: [OMPI users] Mac OS X Static PGI"</a>
<li><strong>Previous message:</strong> <a href="15777.php">David Robertson: "Re: [OMPI users] Mac OS X Static PGI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15790.php">Jeff Squyres: "Re: [OMPI users] MPI_ALLREDUCE bug with 1.5.2rc3r24441"</a>
<li><strong>Reply:</strong> <a href="15790.php">Jeff Squyres: "Re: [OMPI users] MPI_ALLREDUCE bug with 1.5.2rc3r24441"</a>
<li><strong>Reply:</strong> <a href="15792.php">Harald Anlauf: "Re: [OMPI users] MPI_ALLREDUCE bug with 1.5.2rc3r24441"</a>
<li><strong>Maybe reply:</strong> <a href="15826.php">Harald Anlauf: "Re: [OMPI users] MPI_ALLREDUCE bug with 1.5.2rc3r24441"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>there appears to be a regression in revision 1.5.2rc3r24441.
<br>
The attached program crashes even with 1 PE with:
<br>
<p>&nbsp;Default real, digits:           4          24
<br>
&nbsp;Real kind,    digits:           8          53
<br>
&nbsp;Integer kind,   bits:           8                   64
<br>
&nbsp;Default Integer     :           4          32
<br>
&nbsp;Sum[real]:   1.0000000       2.0000000       3.0000000
<br>
&nbsp;Sum[real(8)]:   1.0000000000000000        2.0000000000000000
<br>
3.0000000000000000
<br>
&nbsp;Sum[integer(4)]:           1           2           3
<br>
[proton:24826] *** An error occurred in MPI_Allreduce: the reduction
<br>
operation MPI_SUM is not defined on the MPI_INTEGER8 datatype
<br>
<p><p>On the other hand,
<br>
<p>% ompi_info --arch
<br>
&nbsp;Configured architecture: i686-pc-linux-gnu
<br>
% ompi_info --all |grep 'integer[48]'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort have integer4: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort have integer8: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort integer4 size: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort integer8 size: 8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort integer4 align: 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort integer8 align: 8
<br>
<p>There are no problems with 1.4.x and earlier revisions.
<br>
<p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15778/mpiallreducetest.f90">mpiallreducetest.f90</a>
</ul>
<!-- attachment="mpiallreducetest.f90" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15779.php">Ralph Castain: "Re: [OMPI users] Mac OS X Static PGI"</a>
<li><strong>Previous message:</strong> <a href="15777.php">David Robertson: "Re: [OMPI users] Mac OS X Static PGI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15790.php">Jeff Squyres: "Re: [OMPI users] MPI_ALLREDUCE bug with 1.5.2rc3r24441"</a>
<li><strong>Reply:</strong> <a href="15790.php">Jeff Squyres: "Re: [OMPI users] MPI_ALLREDUCE bug with 1.5.2rc3r24441"</a>
<li><strong>Reply:</strong> <a href="15792.php">Harald Anlauf: "Re: [OMPI users] MPI_ALLREDUCE bug with 1.5.2rc3r24441"</a>
<li><strong>Maybe reply:</strong> <a href="15826.php">Harald Anlauf: "Re: [OMPI users] MPI_ALLREDUCE bug with 1.5.2rc3r24441"</a>
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
