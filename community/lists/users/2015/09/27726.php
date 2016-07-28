<?
$subject_val = "[OMPI users]  send_request error with allocate";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 30 06:34:01 2015" -->
<!-- isoreceived="20150930103401" -->
<!-- sent="Wed, 30 Sep 2015 19:33:59 +0900" -->
<!-- isosent="20150930103359" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="[OMPI users]  send_request error with allocate" -->
<!-- id="CAAkFZ5vLZL-hOsfL+xiFZGuTUfT7MKPk54d6o0toJUEW+pMAYA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAG8o1y7eFXUbgyBkxxMj9gg-ARzdCzbQSZU3kx4q3CMhF31w1g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users]  send_request error with allocate<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-30 06:33:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27727.php">Jeff Squyres (jsquyres): "Re: [OMPI users] send_request error with allocate"</a>
<li><strong>Previous message:</strong> <a href="27725.php">Dave Love: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<li><strong>In reply to:</strong> <a href="27721.php">Diego Avesani: "Re: [OMPI users] send_request error with allocate"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27727.php">Jeff Squyres (jsquyres): "Re: [OMPI users] send_request error with allocate"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Diego,
<br>
<p>if you invoke 3 times Isend with three different send__request() and sane
<br>
thing for Irecv, then you do not have to worry about MPI_REQUEST_NULL
<br>
<p>Based on your snippet, there could be an issue on ranks 0 and n-1,
<br>
also the index of send_request is MPIdata%rank+1
<br>
if MPIdata%rank is MPi_Comm_rank, that makes no sense to me, and your
<br>
indexes should likely be hard coded from 1 to 3
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Wednesday, September 30, 2015, Diego Avesani &lt;diego.avesani_at_[hidden]
<br>
&lt;javascript:_e(%7B%7D,'cvml','diego.avesani_at_[hidden]');&gt;&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear Gilles, Dear All,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What do you mean that the array of requests has to be initialize via
</span><br>
<span class="quotelev1">&gt; MPI_Isend or MPI_Irecv?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In my code I use three times MPI_Isend and MPI_Irecv so I have
</span><br>
<span class="quotelev1">&gt; a send_request(3).  According to this, do I have to use MPI_REQUEST_NULL?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the meantime I check my code
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Diego
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 29 September 2015 at 16:33, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev1">&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Diego,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; if you invoke MPI_Waitall on three requests, and some of them have not
</span><br>
<span class="quotelev2">&gt;&gt; been initialized
</span><br>
<span class="quotelev2">&gt;&gt; (manually, or via MPI_Isend or MPI_Irecv), then the behavior of your
</span><br>
<span class="quotelev2">&gt;&gt; program is undetermined.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; if you want to use array of requests (because it make the program simple)
</span><br>
<span class="quotelev2">&gt;&gt; but you know not all of them are actually used, then you have to initialize
</span><br>
<span class="quotelev2">&gt;&gt; them with MPI_REQUEST_NULL
</span><br>
<span class="quotelev2">&gt;&gt; (it might be zero on ompi, but you cannot take this for granted)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tuesday, September 29, 2015, Diego Avesani &lt;diego.avesani_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; dear Jeff, dear all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have notice that if I initialize the variables, I do not have the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; error anymore:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; !
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   ALLOCATE(SEND_REQUEST(nMsg),RECV_REQUEST(nMsg))
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   SEND_REQUEST=0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   RECV_REQUEST=0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; !
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Could you please explain me why?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Diego
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 29 September 2015 at 16:08, Diego Avesani &lt;diego.avesani_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Dear Jeff, Dear all,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the code is very long, here something. I hope that this could help.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; What do you think?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; SUBROUTINE MATOPQN
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; USE VARS_COMMON,ONLY:COMM_CART,send_messageR,recv_messageL,nMsg
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; USE MPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; INTEGER :: send_request(nMsg), recv_request(nMsg)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; INTEGER ::
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; send_status_list(MPI_STATUS_SIZE,nMsg),recv_status_list(MPI_STATUS_SIZE,nMsg)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  !send message to right CPU
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     IF(MPIdata%rank.NE.MPIdata%nCPU-1)THEN
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         MsgLength = MPIdata%jmaxN
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         DO icount=1,MPIdata%jmaxN
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             iNode = MPIdata%nodeList2right(icount)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             send_messageR(icount) = RIS_2(iNode)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         ENDDO
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         CALL MPI_ISEND(send_messageR, MsgLength, MPI_DOUBLE_COMPLEX,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPIdata%rank+1, MPIdata%rank+1, MPI_COMM_WORLD,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; send_request(MPIdata%rank+1), MPIdata%iErr)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     ENDIF
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     !
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     !recive message FROM left CPU
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     IF(MPIdata%rank.NE.0)THEN
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         MsgLength = MPIdata%jmaxN
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         CALL MPI_IRECV(recv_messageL, MsgLength, MPI_DOUBLE_COMPLEX,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPIdata%rank-1, MPIdata%rank, MPI_COMM_WORLD, recv_request(MPIdata%rank),
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPIdata%iErr)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         write(*,*) MPIdata%rank-1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     ENDIF
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     !
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     !
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     CALL MPI_WAITALL(nMsg,send_request,send_status_list,MPIdata%iErr)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     CALL MPI_WAITALL(nMsg,recv_request,recv_status_list,MPIdata%iErr)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Diego
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 29 September 2015 at 00:15, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Can you send a small reproducer program?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; On Sep 28, 2015, at 4:45 PM, Diego Avesani &lt;diego.avesani_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; Dear all,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; I have to use a send_request in a MPI_WAITALL.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; Here the strange things:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; If I use at the begging of the SUBROUTINE:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; INTEGER :: send_request(3), recv_request(3)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; I have no problem, but if I use
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; USE COMONVARS,ONLY : nMsg
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; with nMsg=3
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; and after that I declare
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; INTEGER :: send_request(nMsg), recv_request(nMsg), I get the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; following error:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; [Lap] *** An error occurred in MPI_Waitall
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; [Lap] *** reported by process [139726485585921,0]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; [Lap] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; [Lap] *** MPI_ERR_REQUEST: invalid request
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; [Lap] *** MPI_ERRORS_ARE_FATAL (processes in this communicator will
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; now abort,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; [Lap] ***    and potentially your MPI job)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; forrtl: error (78): process killed (SIGTERM)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; Someone could please explain to me where I am wrong?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; Diego
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/09/27703.php">http://www.open-mpi.org/community/lists/users/2015/09/27703.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/09/27704.php">http://www.open-mpi.org/community/lists/users/2015/09/27704.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/09/27710.php">http://www.open-mpi.org/community/lists/users/2015/09/27710.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27726/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27727.php">Jeff Squyres (jsquyres): "Re: [OMPI users] send_request error with allocate"</a>
<li><strong>Previous message:</strong> <a href="27725.php">Dave Love: "Re: [OMPI users] Using OpenMPI (1.8, 1.10) with Mellanox MXM, ulimits ?"</a>
<li><strong>In reply to:</strong> <a href="27721.php">Diego Avesani: "Re: [OMPI users] send_request error with allocate"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27727.php">Jeff Squyres (jsquyres): "Re: [OMPI users] send_request error with allocate"</a>
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
