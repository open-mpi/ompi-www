<?
$subject_val = "[OMPI users] best way to ALLREDUCE multi-dimensional arrays in Fortran?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 24 17:44:48 2009" -->
<!-- isoreceived="20090924214448" -->
<!-- sent="Thu, 24 Sep 2009 17:44:43 -0400" -->
<!-- isosent="20090924214443" -->
<!-- name="Greg Fischer" -->
<!-- email="greg.a.fischer_at_[hidden]" -->
<!-- subject="[OMPI users] best way to ALLREDUCE multi-dimensional arrays in Fortran?" -->
<!-- id="c615a6650909241444q6116bf7eid334dc9395920a76_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] best way to ALLREDUCE multi-dimensional arrays in Fortran?<br>
<strong>From:</strong> Greg Fischer (<em>greg.a.fischer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-24 17:44:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10759.php">Eugene Loh: "Re: [OMPI users] best way to ALLREDUCE multi-dimensional arrays in Fortran?"</a>
<li><strong>Previous message:</strong> <a href="10757.php">Pallab Datta: "Re: [OMPI users] [OMPI devel] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10759.php">Eugene Loh: "Re: [OMPI users] best way to ALLREDUCE multi-dimensional arrays in Fortran?"</a>
<li><strong>Reply:</strong> <a href="10759.php">Eugene Loh: "Re: [OMPI users] best way to ALLREDUCE multi-dimensional arrays in Fortran?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
(I apologize in advance for the simplistic/newbie question.)
<br>
<p>I'm performing an ALLREDUCE operation on a multi-dimensional array.  This
<br>
operation is the biggest bottleneck in the code, and I'm wondering if
<br>
there's a way to do it more efficiently than what I'm doing now.  Here's a
<br>
representative example of what's happening:
<br>
<p>&nbsp;&nbsp;&nbsp;ir=1
<br>
&nbsp;&nbsp;&nbsp;do ikl=1,km
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do ij=1,jm
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do ii=1,im
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;albuf(ir)=array(ii,ij,ikl,nl,0,ng)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ir=ir+1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;enddo
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;enddo
<br>
&nbsp;&nbsp;&nbsp;enddo
<br>
&nbsp;&nbsp;&nbsp;agbuf=0.0
<br>
&nbsp;&nbsp;&nbsp;call
<br>
mpi_allreduce(albuf,agbuf,im*jm*kmloc(coords(2)+1),mpi_real,mpi_sum,ang_com,ierr)
<br>
&nbsp;&nbsp;&nbsp;ir=1
<br>
&nbsp;&nbsp;&nbsp;do ikl=1,km
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do ij=1,jm
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do ii=1,im
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;phim(ii,ij,ikl,nl,0,ng)=agbuf(ir)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ir=ir+1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;enddo
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;enddo
<br>
&nbsp;&nbsp;&nbsp;enddo
<br>
<p>Is there any way to just do this in one fell swoop, rather than buffering,
<br>
transmitting, and unbuffering?  This operation is looped over many times.
<br>
Are there savings to be had here?
<br>
<p>Thanks,
<br>
Greg
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10758/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10759.php">Eugene Loh: "Re: [OMPI users] best way to ALLREDUCE multi-dimensional arrays in Fortran?"</a>
<li><strong>Previous message:</strong> <a href="10757.php">Pallab Datta: "Re: [OMPI users] [OMPI devel] Open-MPI between Mac and Linux (ubuntu 9.04) over wireless"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10759.php">Eugene Loh: "Re: [OMPI users] best way to ALLREDUCE multi-dimensional arrays in Fortran?"</a>
<li><strong>Reply:</strong> <a href="10759.php">Eugene Loh: "Re: [OMPI users] best way to ALLREDUCE multi-dimensional arrays in Fortran?"</a>
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
