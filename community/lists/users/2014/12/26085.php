<?
$subject_val = "Re: [OMPI users] ISEND + IRECV in a cycle stuck";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 29 11:27:17 2014" -->
<!-- isoreceived="20141229162717" -->
<!-- sent="Mon, 29 Dec 2014 17:27:17 +0100" -->
<!-- isosent="20141229162717" -->
<!-- name="Diego Avesani" -->
<!-- email="diego.avesani_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ISEND + IRECV in a cycle stuck" -->
<!-- id="CAG8o1y4dEZhVZQxh3ZOE++v9HrSZ4izHQerucnYqZuXJsog5+Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAG8o1y6SL87=Jv+3vCh5G42=nM6xP4W_pyJbk-BLspEHPDYhRA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] ISEND + IRECV in a cycle stuck<br>
<strong>From:</strong> Diego Avesani (<em>diego.avesani_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-29 11:27:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26086.php">Deva: "Re: [OMPI users] Icreasing OFED registerable memory"</a>
<li><strong>Previous message:</strong> <a href="26084.php">Diego Avesani: "[OMPI users] ISEND + IRECV in a cycle stuck"</a>
<li><strong>In reply to:</strong> <a href="26084.php">Diego Avesani: "[OMPI users] ISEND + IRECV in a cycle stuck"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
dear All,
<br>
sorry for your time. I have found the solution:
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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL MPI_IRECV(Ndata2recv(iCPU),1,MPI_INTEGER,iCPU,*MPI%rank*
<br>
,MPI_COMM_WORLD,recv_request(icount),MPI%iErr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;icount=icount+1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ENDIF
<br>
&nbsp;&nbsp;ENDDO
<br>
<p><p>* CALL MPI_WAITALL(3,send_request,send_status_list,MPI%iErr)*
<br>
* CALL MPI_WAITALL(3,recv_request,recv_status_list,MPI%iErr)*
<br>
<p>hoping this could help others
<br>
thanks for your time
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26085/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26086.php">Deva: "Re: [OMPI users] Icreasing OFED registerable memory"</a>
<li><strong>Previous message:</strong> <a href="26084.php">Diego Avesani: "[OMPI users] ISEND + IRECV in a cycle stuck"</a>
<li><strong>In reply to:</strong> <a href="26084.php">Diego Avesani: "[OMPI users] ISEND + IRECV in a cycle stuck"</a>
<!-- nextthread="start" -->
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
