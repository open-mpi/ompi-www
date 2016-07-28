<?
$subject_val = "Re: [OMPI users] difference between OpenMPI - intel MPI mpi_waitall";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 29 06:11:36 2016" -->
<!-- isoreceived="20160129111136" -->
<!-- sent="Fri, 29 Jan 2016 12:11:27 +0100" -->
<!-- isosent="20160129111127" -->
<!-- name="Diego Avesani" -->
<!-- email="diego.avesani_at_[hidden]" -->
<!-- subject="Re: [OMPI users] difference between OpenMPI - intel MPI mpi_waitall" -->
<!-- id="CAG8o1y7pVPGtDDhh4Uit6g-W8XwGw2FrWHe3VYqf6=BpQwa48w_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAkFZ5uUJ1M0qnXDQPpkYdtcYJRt+3R1dssW1SXwGO6Je0FMdg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] difference between OpenMPI - intel MPI mpi_waitall<br>
<strong>From:</strong> Diego Avesani (<em>diego.avesani_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-29 06:11:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28414.php">Jeff Squyres (jsquyres): "Re: [OMPI users] difference between OpenMPI - intel MPI mpi_waitall"</a>
<li><strong>Previous message:</strong> <a href="28412.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI against multiple, evolving SLURM versions"</a>
<li><strong>In reply to:</strong> <a href="28411.php">Gilles Gouaillardet: "Re: [OMPI users] difference between OpenMPI - intel MPI mpi_waitall"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28414.php">Jeff Squyres (jsquyres): "Re: [OMPI users] difference between OpenMPI - intel MPI mpi_waitall"</a>
<li><strong>Reply:</strong> <a href="28414.php">Jeff Squyres (jsquyres): "Re: [OMPI users] difference between OpenMPI - intel MPI mpi_waitall"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all, Dear Gilles,
<br>
<p>I do not understand, I am sorry.
<br>
I did a &quot;grep&quot; on my code and I find only &quot;MPI_WAITALL(2&quot;, so I am not able
<br>
to find the error.
<br>
<p><p>Thanks a lot
<br>
<p><p><p>Diego
<br>
<p><p>On 29 January 2016 at 11:58, Gilles Gouaillardet &lt;
<br>
gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Diego,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; your code snippet does MPI_Waitall(2,...)
</span><br>
<span class="quotelev1">&gt; but the error is about MPI_Waitall(3,...)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Friday, January 29, 2016, Diego Avesani &lt;diego.avesani_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have created a program in fortran and OpenMPI, I test it on my laptop
</span><br>
<span class="quotelev2">&gt;&gt; and it works.
</span><br>
<span class="quotelev2">&gt;&gt; I would like to use it on a cluster that has, unfortunately, intel MPI.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The program crushes on the cluster and I get the following error:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *Fatal error in MPI_Waitall: Invalid MPI_Request, error stack:*
</span><br>
<span class="quotelev2">&gt;&gt; *MPI_Waitall(271): MPI_Waitall(count=3, req_array=0x7445f0,
</span><br>
<span class="quotelev2">&gt;&gt; status_array=0x744600) failed*
</span><br>
<span class="quotelev2">&gt;&gt; *MPI_Waitall(119): The supplied request in array element 2 was invalid
</span><br>
<span class="quotelev2">&gt;&gt; (kind=0)*
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Do OpenMPI and MPI have some difference that I do not know?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; this is my code
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  REQUEST = MPI_REQUEST_NULL
</span><br>
<span class="quotelev2">&gt;&gt;  !send data share with left
</span><br>
<span class="quotelev2">&gt;&gt;  IF(MPIdata%rank.NE.0)THEN
</span><br>
<span class="quotelev2">&gt;&gt;     MsgLength = MPIdata%imaxN
</span><br>
<span class="quotelev2">&gt;&gt;     DO icount=1,MPIdata%imaxN
</span><br>
<span class="quotelev2">&gt;&gt;             iNode = MPIdata%nodeFromUp(icount)
</span><br>
<span class="quotelev2">&gt;&gt;             send_messageL(icount) = R1(iNode)
</span><br>
<span class="quotelev2">&gt;&gt;     ENDDO
</span><br>
<span class="quotelev2">&gt;&gt;     CALL MPI_ISEND(send_messageL, MsgLength, MPIdata%AUTO_COMP,
</span><br>
<span class="quotelev2">&gt;&gt; MPIdata%rank-1, MPIdata%rank, MPI_COMM_WORLD, REQUEST(1), MPIdata%iErr)
</span><br>
<span class="quotelev2">&gt;&gt;  ENDIF
</span><br>
<span class="quotelev2">&gt;&gt;  !
</span><br>
<span class="quotelev2">&gt;&gt;  !recive message FROM RIGHT CPU
</span><br>
<span class="quotelev2">&gt;&gt;  IF(MPIdata%rank.NE.MPIdata%nCPU-1)THEN
</span><br>
<span class="quotelev2">&gt;&gt;     MsgLength = MPIdata%imaxN
</span><br>
<span class="quotelev2">&gt;&gt;     CALL MPI_IRECV(recv_messageR, MsgLength, MPIdata%AUTO_COMP,
</span><br>
<span class="quotelev2">&gt;&gt; MPIdata%rank+1, MPIdata%rank+1, MPI_COMM_WORLD, REQUEST(2), MPIdata%iErr)
</span><br>
<span class="quotelev2">&gt;&gt;  ENDIF
</span><br>
<span class="quotelev2">&gt;&gt;  CALL MPI_WAITALL(2,REQUEST,send_status_list,MPIdata%iErr)
</span><br>
<span class="quotelev2">&gt;&gt;  IF(MPIdata%rank.NE.MPIdata%nCPU-1)THEN
</span><br>
<span class="quotelev2">&gt;&gt;     DO i=1,MPIdata%imaxN
</span><br>
<span class="quotelev2">&gt;&gt;        iNode=MPIdata%nodeList2Up(i)
</span><br>
<span class="quotelev2">&gt;&gt;        R1(iNode)=recv_messageR(i)
</span><br>
<span class="quotelev2">&gt;&gt;     ENDDO
</span><br>
<span class="quotelev2">&gt;&gt;  ENDIF
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank a lot your help
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Diego
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28411.php">http://www.open-mpi.org/community/lists/users/2016/01/28411.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28413/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28414.php">Jeff Squyres (jsquyres): "Re: [OMPI users] difference between OpenMPI - intel MPI mpi_waitall"</a>
<li><strong>Previous message:</strong> <a href="28412.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI against multiple, evolving SLURM versions"</a>
<li><strong>In reply to:</strong> <a href="28411.php">Gilles Gouaillardet: "Re: [OMPI users] difference between OpenMPI - intel MPI mpi_waitall"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28414.php">Jeff Squyres (jsquyres): "Re: [OMPI users] difference between OpenMPI - intel MPI mpi_waitall"</a>
<li><strong>Reply:</strong> <a href="28414.php">Jeff Squyres (jsquyres): "Re: [OMPI users] difference between OpenMPI - intel MPI mpi_waitall"</a>
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
