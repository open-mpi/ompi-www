<?
$subject_val = "[OMPI users] Should order of implementation matter for MPI_reduce?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  4 17:16:28 2013" -->
<!-- isoreceived="20130304221628" -->
<!-- sent="Mon, 4 Mar 2013 22:16:17 +0000" -->
<!-- isosent="20130304221617" -->
<!-- name="Andrew J Gomes" -->
<!-- email="a-gomes_at_[hidden]" -->
<!-- subject="[OMPI users] Should order of implementation matter for MPI_reduce?" -->
<!-- id="46BF464AC9CF974FB46E457BFE1FB38D49552D_at_evcspmbx4.ads.northwestern.edu" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Andrew J Gomes (<em>a-gomes_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-04 17:16:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21485.php">George Bosilca: "Re: [OMPI users] Should order of implementation matter for MPI_reduce?"</a>
<li><strong>Previous message:</strong> <a href="21483.php">Said Elnoshokaty: "Re: [OMPI users] Windows MPI with Fortran calling programs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21485.php">George Bosilca: "Re: [OMPI users] Should order of implementation matter for MPI_reduce?"</a>
<li><strong>Reply:</strong> <a href="21485.php">George Bosilca: "Re: [OMPI users] Should order of implementation matter for MPI_reduce?"</a>
<li><strong>Reply:</strong> <a href="21486.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Should order of implementation matter for MPI_reduce?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have the following code which does not give the expected result:
<br>
if (mpi_rank!=0)
<br>
{ MPI_Reduce(&amp;intensity,&amp;intensity ,1,MPI_DOUBLE,MPI_SUM,0,MPI_COMM_WORLD);
<br>
MPI_Reduce(&amp;intensity2,&amp;intensity2 ,1,MPI_DOUBLE,MPI_SUM,0,MPI_COMM_WORLD); }
<br>
else
<br>
{
<br>
MPI_Reduce(MPI_IN_PLACE,&amp;intensity2 ,1,MPI_DOUBLE,MPI_SUM,0,MPI_COMM_WORLD);
<br>
MPI_Reduce(MPI_IN_PLACE,&amp;intensity ,1,MPI_DOUBLE,MPI_SUM,0,MPI_COMM_WORLD);}
<br>
<p>However if I change the the order of the else block (reduction of intensity variable before intensity2 variable) to :
<br>
else
<br>
{
<br>
MPI_Reduce(MPI_IN_PLACE,&amp;intensity ,1,MPI_DOUBLE,MPI_SUM,0,MPI_COMM_WORLD);
<br>
MPI_Reduce(MPI_IN_PLACE,&amp;intensity2 ,1,MPI_DOUBLE,MPI_SUM,0,MPI_COMM_WORLD);}
<br>
<p>I get the expected result. This surprised me. Is there a reason the order of the else block should match the order of the if block? Is there a more robust way of implementing this type of code. Thank you
<br>
<p>Andrew
<br>
<p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="../../att-21484/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21485.php">George Bosilca: "Re: [OMPI users] Should order of implementation matter for MPI_reduce?"</a>
<li><strong>Previous message:</strong> <a href="21483.php">Said Elnoshokaty: "Re: [OMPI users] Windows MPI with Fortran calling programs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21485.php">George Bosilca: "Re: [OMPI users] Should order of implementation matter for MPI_reduce?"</a>
<li><strong>Reply:</strong> <a href="21485.php">George Bosilca: "Re: [OMPI users] Should order of implementation matter for MPI_reduce?"</a>
<li><strong>Reply:</strong> <a href="21486.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Should order of implementation matter for MPI_reduce?"</a>
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
