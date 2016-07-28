<?
$subject_val = "[OMPI users] MPI_GATHERV error";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 14 09:51:28 2015" -->
<!-- isoreceived="20151014135128" -->
<!-- sent="Wed, 14 Oct 2015 15:51:24 +0200" -->
<!-- isosent="20151014135124" -->
<!-- name="Diego Avesani" -->
<!-- email="diego.avesani_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_GATHERV error" -->
<!-- id="CAG8o1y4inQXo8-Np_j2a9c6WY1ayn9FWVgrSPcMrKEmaD7=b=w_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] MPI_GATHERV error<br>
<strong>From:</strong> Diego Avesani (<em>diego.avesani_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-14 09:51:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27863.php">Georg Geiser: "Re: [OMPI users] MPI_GATHERV error"</a>
<li><strong>Previous message:</strong> <a href="27861.php">Ralph Castain: "Re: [OMPI users] display-map option in v1.8.8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27863.php">Georg Geiser: "Re: [OMPI users] MPI_GATHERV error"</a>
<li><strong>Reply:</strong> <a href="27863.php">Georg Geiser: "Re: [OMPI users] MPI_GATHERV error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
dear all,
<br>
I have some problem with MPI_GATHERV.
<br>
<p>In my code I generate a complex number
<br>
<p>&nbsp;DO ij=iNS,iNE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;X11(ij) = cmplx(1.,0.)
<br>
&nbsp;ENDDO
<br>
<p>where iNS,INE change according to the CPU rank, in may case
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;cpu 0           1       10050
<br>
&nbsp;&nbsp;&nbsp;&nbsp;cpu 1       10051       20100
<br>
&nbsp;&nbsp;&nbsp;&nbsp;cpu 2       20101       30150
<br>
&nbsp;&nbsp;&nbsp;&nbsp;cpu 3       30151       40401
<br>
<p>according to that I have
<br>
nNodeGLOBAL   = 10050       10050       10050       10251
<br>
IDNodeStartGLOBAL =    1       10051       20101       30151
<br>
<p>After that I apply a  MPI_GATHERV as
<br>
<p>CALL MPI_GATHERV(X11(*iNS:iNE*),MPIdata%nNodes, mpi_double_cpmplex, *PHIH*,
<br>
nNodeGLOBAL,IDNodeStartGLOBAL, mpi_double_cpmplex, 0, MPI_COMM_WORLD, Err)
<br>
<p>but when I plot REAL(PHIH(1)), I get
<br>
<p>0
<br>
<p>I use fortran, do you think that there is an error in nNodeGLOBAL? do I
<br>
have to allocate the vector nNodeGLOBAL and IDNodeStartGLOBAL satrting from
<br>
0 according to the name of the rank?
<br>
<p>really really
<br>
thanks a lot
<br>
<p><p><p><p><p><p><p>Diego
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27862/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27863.php">Georg Geiser: "Re: [OMPI users] MPI_GATHERV error"</a>
<li><strong>Previous message:</strong> <a href="27861.php">Ralph Castain: "Re: [OMPI users] display-map option in v1.8.8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27863.php">Georg Geiser: "Re: [OMPI users] MPI_GATHERV error"</a>
<li><strong>Reply:</strong> <a href="27863.php">Georg Geiser: "Re: [OMPI users] MPI_GATHERV error"</a>
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
