<?
$subject_val = "[OMPI users] ISEND + IRECV in a cycle stuck";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 29 10:56:59 2014" -->
<!-- isoreceived="20141229155659" -->
<!-- sent="Mon, 29 Dec 2014 16:56:59 +0100" -->
<!-- isosent="20141229155659" -->
<!-- name="Diego Avesani" -->
<!-- email="diego.avesani_at_[hidden]" -->
<!-- subject="[OMPI users] ISEND + IRECV in a cycle stuck" -->
<!-- id="CAG8o1y6SL87=Jv+3vCh5G42=nM6xP4W_pyJbk-BLspEHPDYhRA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] ISEND + IRECV in a cycle stuck<br>
<strong>From:</strong> Diego Avesani (<em>diego.avesani_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-29 10:56:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26085.php">Diego Avesani: "Re: [OMPI users] ISEND + IRECV in a cycle stuck"</a>
<li><strong>Previous message:</strong> <a href="26083.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] OMPI users] What could cause a segfault in OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26085.php">Diego Avesani: "Re: [OMPI users] ISEND + IRECV in a cycle stuck"</a>
<li><strong>Reply:</strong> <a href="26085.php">Diego Avesani: "Re: [OMPI users] ISEND + IRECV in a cycle stuck"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>I have the following problem:
<br>
<p>In my program each rank has a vector, where the position indicates where I
<br>
have to send the data.
<br>
<p>For example for rank 0, I have:
<br>
<p>*ALLOCATE(Ndata2send(0,MPI%nCPU-1)*
<br>
<p>*Ndata2send(:) = 0,10,10,16*
<br>
<p>where MPI%nCPU is the number of cPU, in my case 4
<br>
<p>Thins means that I have to send 10 to rank 1, 10 to rank 2 and 16 to rank 3
<br>
<p>I have the following cycle:
<br>
<p>&nbsp;&nbsp;icount=1
<br>
&nbsp;&nbsp;DO iCPU=0,MPI%nCPU-1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IF(iCPU.NE.MPI%rank)THEN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;iTag=iCPU
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL
<br>
MPI_ISEND(Ndata2send(iCPU),1,MPI_INTEGER,iCPU,iTag,MPI_COMM_WORLD,send_request(icount),MPI%iErr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;icount=icount+1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ENDIF
<br>
&nbsp;&nbsp;ENDDO
<br>
<p>&nbsp;&nbsp;icount=1
<br>
&nbsp;&nbsp;DO iCPU=0,MPI%nCPU-1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IF(iCPU.NE.MPI%rank)THEN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;iTag=iCPU
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL
<br>
MPI_IRECV(Ndata2recv(iCPU),1,MPI_INTEGER,iCPU,iTag,MPI_COMM_WORLD,recv_request(icount),MPI%iErr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;icount=icount+1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ENDIF
<br>
&nbsp;&nbsp;ENDDO
<br>
<p>and then, to wait all comunication I have:
<br>
<p>* CALL MPI_WAITALL(3,send_request,send_status_list,MPI%iErr)*
<br>
* CALL MPI_WAITALL(3,recv_request,recv_status_list,MPI%iErr)*
<br>
<p><p>The problem is that comunication never stops.
<br>
<p>Have I missed something? Please help me to understand what I havent't
<br>
understood.
<br>
<p>Thanks
<br>
<p><p><p><p><p>Diego
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26084/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26085.php">Diego Avesani: "Re: [OMPI users] ISEND + IRECV in a cycle stuck"</a>
<li><strong>Previous message:</strong> <a href="26083.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] OMPI users] What could cause a segfault in OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26085.php">Diego Avesani: "Re: [OMPI users] ISEND + IRECV in a cycle stuck"</a>
<li><strong>Reply:</strong> <a href="26085.php">Diego Avesani: "Re: [OMPI users] ISEND + IRECV in a cycle stuck"</a>
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
