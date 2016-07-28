<?
$subject_val = "Re: [OMPI users] difference between OpenMPI - intel MPI mpi_waitall";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 29 09:43:55 2016" -->
<!-- isoreceived="20160129144355" -->
<!-- sent="Fri, 29 Jan 2016 15:43:53 +0100" -->
<!-- isosent="20160129144353" -->
<!-- name="Diego Avesani" -->
<!-- email="diego.avesani_at_[hidden]" -->
<!-- subject="Re: [OMPI users] difference between OpenMPI - intel MPI mpi_waitall" -->
<!-- id="CAG8o1y49gw06sBvkH6ch6bqvjCOgap-Rf3wJft8mu1uOQChnwA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAkFZ5tq-adiQQ2yv7CyBgj5nZzD=LbDo-J-r==d9ozS-DPoSA_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2016-01-29 09:43:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28420.php">Jeff Squyres (jsquyres): "Re: [OMPI users] difference between OpenMPI - intel MPI mpi_waitall"</a>
<li><strong>Previous message:</strong> <a href="28418.php">Gilles Gouaillardet: "Re: [OMPI users] difference between OpenMPI - intel MPI mpi_waitall"</a>
<li><strong>In reply to:</strong> <a href="28418.php">Gilles Gouaillardet: "Re: [OMPI users] difference between OpenMPI - intel MPI mpi_waitall"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28420.php">Jeff Squyres (jsquyres): "Re: [OMPI users] difference between OpenMPI - intel MPI mpi_waitall"</a>
<li><strong>Reply:</strong> <a href="28420.php">Jeff Squyres (jsquyres): "Re: [OMPI users] difference between OpenMPI - intel MPI mpi_waitall"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>I am really sorry for the time that you dedicated to me.
<br>
<p>this is what I found:
<br>
<p>&nbsp;REQUEST = MPI_REQUEST_NULL
<br>
&nbsp;!send data share with UP
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
&nbsp;!recive message FROM up CPU
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
&nbsp;CALL MPI_WAITALL(nMsg,REQUEST,send_status_list,MPIdata%iErr)
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
<p>As you can see there is a nMsg which is set equal to &quot;3&quot;. Do I have to set
<br>
it equal to? Am I right?
<br>
<p><p><p><p><p>Diego
<br>
<p><p>On 29 January 2016 at 14:09, Gilles Gouaillardet &lt;
<br>
gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Diego,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; First, you can double check the program you are running has been compiled
</span><br>
<span class="quotelev1">&gt; from your sources.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; then you can run your program under a debugger, and browse the stack when
</span><br>
<span class="quotelev1">&gt; it crashes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; there could be a bug in intelmpi, that incorrectly translates 2 in Fortran
</span><br>
<span class="quotelev1">&gt; to 3 in C...
</span><br>
<span class="quotelev1">&gt; but as far as I am concerned, this is extremely unlikely.
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
<span class="quotelev1">&gt; On Friday, January 29, 2016, Diego Avesani &lt;diego.avesani_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear all, Dear Jeff, Dear Gilles,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am sorry, porblably I am a stubborn.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In all my code I have
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; CALL MPI_WAITALL(2,REQUEST,send_status_list,MPIdata%iErr)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; how can it became &quot;3&quot;?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; the only thing that I can think is that MPI starts to allocate the vector
</span><br>
<span class="quotelev2">&gt;&gt; from &quot;0&quot;, while fortran starts from 1. Indeed I allocate REQUEST(2)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; what do you think?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Diego
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
<span class="quotelev2">&gt;&gt; On 29 January 2016 at 12:43, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You must have an error elsewhere in your code; as Gilles pointed, the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; error message states that you are calling MPI_WAITALL with a first argument
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of 3:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Waitall(271): MPI_Waitall(count=3, req_array=0x7445f0,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; status_array=0x744600) failed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We can't really help you with problems with Intel MPI; sorry.  You'll
</span><br>
<span class="quotelev3">&gt;&gt;&gt; need to contact their tech support for assistance.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; On Jan 29, 2016, at 6:11 AM, Diego Avesani &lt;diego.avesani_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Dear all, Dear Gilles,
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; I do not understand, I am sorry.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; I did a &quot;grep&quot; on my code and I find only &quot;MPI_WAITALL(2&quot;, so I am not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; able to find the error.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Thanks a lot
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Diego
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; On 29 January 2016 at 11:58, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Diego,
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; your code snippet does MPI_Waitall(2,...)
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; but the error is about MPI_Waitall(3,...)
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Cheers,
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Gilles
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; On Friday, January 29, 2016, Diego Avesani &lt;diego.avesani_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Dear all,
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; I have created a program in fortran and OpenMPI, I test it on my
</span><br>
<span class="quotelev3">&gt;&gt;&gt; laptop and it works.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; I would like to use it on a cluster that has, unfortunately, intel MPI.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; The program crushes on the cluster and I get the following error:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Fatal error in MPI_Waitall: Invalid MPI_Request, error stack:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; MPI_Waitall(271): MPI_Waitall(count=3, req_array=0x7445f0,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; status_array=0x744600) failed
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; MPI_Waitall(119): The supplied request in array element 2 was invalid
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (kind=0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Do OpenMPI and MPI have some difference that I do not know?
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; this is my code
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;  REQUEST = MPI_REQUEST_NULL
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;  !send data share with left
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;  IF(MPIdata%rank.NE.0)THEN
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;     MsgLength = MPIdata%imaxN
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;     DO icount=1,MPIdata%imaxN
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;             iNode = MPIdata%nodeFromUp(icount)
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;             send_messageL(icount) = R1(iNode)
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;     ENDDO
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;     CALL MPI_ISEND(send_messageL, MsgLength, MPIdata%AUTO_COMP,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPIdata%rank-1, MPIdata%rank, MPI_COMM_WORLD, REQUEST(1), MPIdata%iErr)
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;  ENDIF
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;  !
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;  !recive message FROM RIGHT CPU
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;  IF(MPIdata%rank.NE.MPIdata%nCPU-1)THEN
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;     MsgLength = MPIdata%imaxN
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;     CALL MPI_IRECV(recv_messageR, MsgLength, MPIdata%AUTO_COMP,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPIdata%rank+1, MPIdata%rank+1, MPI_COMM_WORLD, REQUEST(2), MPIdata%iErr)
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;  ENDIF
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;  CALL MPI_WAITALL(2,REQUEST,send_status_list,MPIdata%iErr)
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;  IF(MPIdata%rank.NE.MPIdata%nCPU-1)THEN
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;     DO i=1,MPIdata%imaxN
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;        iNode=MPIdata%nodeList2Up(i)
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;        R1(iNode)=recv_messageR(i)
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;     ENDDO
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;  ENDIF
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Thank a lot your help
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Diego
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28411.php">http://www.open-mpi.org/community/lists/users/2016/01/28411.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28413.php">http://www.open-mpi.org/community/lists/users/2016/01/28413.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28414.php">http://www.open-mpi.org/community/lists/users/2016/01/28414.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28418.php">http://www.open-mpi.org/community/lists/users/2016/01/28418.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28419/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28420.php">Jeff Squyres (jsquyres): "Re: [OMPI users] difference between OpenMPI - intel MPI mpi_waitall"</a>
<li><strong>Previous message:</strong> <a href="28418.php">Gilles Gouaillardet: "Re: [OMPI users] difference between OpenMPI - intel MPI mpi_waitall"</a>
<li><strong>In reply to:</strong> <a href="28418.php">Gilles Gouaillardet: "Re: [OMPI users] difference between OpenMPI - intel MPI mpi_waitall"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28420.php">Jeff Squyres (jsquyres): "Re: [OMPI users] difference between OpenMPI - intel MPI mpi_waitall"</a>
<li><strong>Reply:</strong> <a href="28420.php">Jeff Squyres (jsquyres): "Re: [OMPI users] difference between OpenMPI - intel MPI mpi_waitall"</a>
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
