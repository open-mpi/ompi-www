<?
$subject_val = "[OMPI users] difference between OpenMPI - intel MPI mpi_waitall";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 29 05:45:25 2016" -->
<!-- isoreceived="20160129104525" -->
<!-- sent="Fri, 29 Jan 2016 11:45:24 +0100" -->
<!-- isosent="20160129104524" -->
<!-- name="Diego Avesani" -->
<!-- email="diego.avesani_at_[hidden]" -->
<!-- subject="[OMPI users] difference between OpenMPI - intel MPI mpi_waitall" -->
<!-- id="CAG8o1y5mm_Y0vVQccdw0YNmJcm-cXRUfN0vtFAmDuurmm3BtLA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] difference between OpenMPI - intel MPI mpi_waitall<br>
<strong>From:</strong> Diego Avesani (<em>diego.avesani_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-29 05:45:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28411.php">Gilles Gouaillardet: "Re: [OMPI users] difference between OpenMPI - intel MPI mpi_waitall"</a>
<li><strong>Previous message:</strong> <a href="28409.php">Ralph Castain: "Re: [OMPI users] OpenMPI against multiple, evolving SLURM versions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28411.php">Gilles Gouaillardet: "Re: [OMPI users] difference between OpenMPI - intel MPI mpi_waitall"</a>
<li><strong>Reply:</strong> <a href="28411.php">Gilles Gouaillardet: "Re: [OMPI users] difference between OpenMPI - intel MPI mpi_waitall"</a>
<li><strong>Reply:</strong> <a href="28421.php">Jeff Hammond: "Re: [OMPI users] difference between OpenMPI - intel MPI mpi_waitall"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>I have created a program in fortran and OpenMPI, I test it on my laptop and
<br>
it works.
<br>
I would like to use it on a cluster that has, unfortunately, intel MPI.
<br>
<p>The program crushes on the cluster and I get the following error:
<br>
<p>*Fatal error in MPI_Waitall: Invalid MPI_Request, error stack:*
<br>
*MPI_Waitall(271): MPI_Waitall(count=3, req_array=0x7445f0,
<br>
status_array=0x744600) failed*
<br>
*MPI_Waitall(119): The supplied request in array element 2 was invalid
<br>
(kind=0)*
<br>
<p>Do OpenMPI and MPI have some difference that I do not know?
<br>
<p>this is my code
<br>
<p>&nbsp;REQUEST = MPI_REQUEST_NULL
<br>
&nbsp;!send data share with left
<br>
&nbsp;IF(MPIdata%rank.NE.0)THEN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MsgLength = MPIdata%imaxN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;DO icount=1,MPIdata%imaxN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;iNode = MPIdata%nodeFromUp(icount)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;send_messageL(icount) = R1(iNode)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ENDDO
<br>
&nbsp;&nbsp;&nbsp;&nbsp;CALL MPI_ISEND(send_messageL, MsgLength, MPIdata%AUTO_COMP,
<br>
MPIdata%rank-1, MPIdata%rank, MPI_COMM_WORLD, REQUEST(1), MPIdata%iErr)
<br>
&nbsp;ENDIF
<br>
&nbsp;!
<br>
&nbsp;!recive message FROM RIGHT CPU
<br>
&nbsp;IF(MPIdata%rank.NE.MPIdata%nCPU-1)THEN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MsgLength = MPIdata%imaxN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;CALL MPI_IRECV(recv_messageR, MsgLength, MPIdata%AUTO_COMP,
<br>
MPIdata%rank+1, MPIdata%rank+1, MPI_COMM_WORLD, REQUEST(2), MPIdata%iErr)
<br>
&nbsp;ENDIF
<br>
&nbsp;CALL MPI_WAITALL(2,REQUEST,send_status_list,MPIdata%iErr)
<br>
&nbsp;IF(MPIdata%rank.NE.MPIdata%nCPU-1)THEN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;DO i=1,MPIdata%imaxN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;iNode=MPIdata%nodeList2Up(i)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;R1(iNode)=recv_messageR(i)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ENDDO
<br>
&nbsp;ENDIF
<br>
<p>Thank a lot your help
<br>
<p><p><p>Diego
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28410/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28411.php">Gilles Gouaillardet: "Re: [OMPI users] difference between OpenMPI - intel MPI mpi_waitall"</a>
<li><strong>Previous message:</strong> <a href="28409.php">Ralph Castain: "Re: [OMPI users] OpenMPI against multiple, evolving SLURM versions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28411.php">Gilles Gouaillardet: "Re: [OMPI users] difference between OpenMPI - intel MPI mpi_waitall"</a>
<li><strong>Reply:</strong> <a href="28411.php">Gilles Gouaillardet: "Re: [OMPI users] difference between OpenMPI - intel MPI mpi_waitall"</a>
<li><strong>Reply:</strong> <a href="28421.php">Jeff Hammond: "Re: [OMPI users] difference between OpenMPI - intel MPI mpi_waitall"</a>
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
