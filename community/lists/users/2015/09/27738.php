<?
$subject_val = "Re: [OMPI users] send_request error with allocate";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 30 10:50:19 2015" -->
<!-- isoreceived="20150930145019" -->
<!-- sent="Wed, 30 Sep 2015 14:50:13 +0000" -->
<!-- isosent="20150930145013" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] send_request error with allocate" -->
<!-- id="9C1D9CD8-AFB2-4AC6-AAE7-0BA5C9B66A43_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAG8o1y4aTgzLTYokMRyYgtKj1i4eKYJpSzp4-8CviyUEqwvdzQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] send_request error with allocate<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-30 10:50:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27739.php">Jeff Squyres (jsquyres): "Re: [OMPI users] understanding mpi_gather-mpi_gatherv"</a>
<li><strong>Previous message:</strong> <a href="27737.php">Diego Avesani: "[OMPI users] understanding mpi_gather-mpi_gatherv"</a>
<li><strong>In reply to:</strong> <a href="27732.php">Diego Avesani: "Re: [OMPI users] send_request error with allocate"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27741.php">Diego Avesani: "Re: [OMPI users] send_request error with allocate"</a>
<li><strong>Reply:</strong> <a href="27741.php">Diego Avesani: "Re: [OMPI users] send_request error with allocate"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't think that this pattern was obvious from the code snippet you sent, which is why I asked for a small, self-contained reproducer.  :-)
<br>
<p>I don't know offhand how send_request(:) will be passed to C.
<br>
<p><p><span class="quotelev1">&gt; On Sep 30, 2015, at 10:16 AM, Diego Avesani &lt;diego.avesani_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt; thank for the explanation, but something is not clear to me.
</span><br>
<span class="quotelev1">&gt; I have 4 CPUs. I use only three of them to send, let say:
</span><br>
<span class="quotelev1">&gt; CPU 0 send to CPU 1
</span><br>
<span class="quotelev1">&gt; CPU 1 send to CPU 2
</span><br>
<span class="quotelev1">&gt; CPU 2 send to CPU 3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; only three revive, let's say;
</span><br>
<span class="quotelev1">&gt; CPU 1 from CPU 0
</span><br>
<span class="quotelev1">&gt; CPU 2 from CPU 1
</span><br>
<span class="quotelev1">&gt; CPU 3 from CPU 2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; so I use ALLOCATE(send_request(3))
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; this mean that in the call I have:
</span><br>
<span class="quotelev1">&gt; CALL MPI_ISEND(send_messageL, MsgLength, MPI_DOUBLE_COMPLEX, MPIdata%rank-1, MPIdata%rank, MPI_COMM_WORLD, send_request(MPIdata%rank), MPIdata%iErr)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is what my code does. Problably, the use of send_request(:) as a vectror and the use of WAITALL  is not correct, I am right?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; what do you suggest?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks a lot,
</span><br>
<span class="quotelev1">&gt; Diego
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Diego
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 30 September 2015 at 12:42, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Put differently:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - You have an array of N requests
</span><br>
<span class="quotelev1">&gt; - If you're only filling up M of them (where N&lt;M)
</span><br>
<span class="quotelev1">&gt; - And then you pass the whole array of size N to MPI
</span><br>
<span class="quotelev1">&gt; - Then N-M of them will have garbage values (unless you initialize them to MPI_REQUEST_NULL)
</span><br>
<span class="quotelev1">&gt; - And MPI's behavior with garbage values will be unpredictable / undefined
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can either pass M (i.e., the number of requests that you have *actually* filled) to MPI, or you can ensure that the N-M unused requests in the array are filled with MPI_REQUEST_NULL (which MPI_WAITANY and friends will safely ignore).  One way of doing the latter is initializing the entire array with MPI_REQUEST_NULL and then only filling in the M entries with real requests.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It seems much simpler / faster to just pass in M to MPI_WAITANY (any friends), not N.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Sep 30, 2015, at 3:43 AM, Diego Avesani &lt;diego.avesani_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Dear Gilles, Dear All,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; What do you mean that the array of requests has to be initialize via MPI_Isend or MPI_Irecv?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; In my code I use three times MPI_Isend and MPI_Irecv so I have a send_request(3).  According to this, do I have to use MPI_REQUEST_NULL?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; In the meantime I check my code
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Diego
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 29 September 2015 at 16:33, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Diego,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; if you invoke MPI_Waitall on three requests, and some of them have not been initialized
</span><br>
<span class="quotelev2">&gt; &gt; (manually, or via MPI_Isend or MPI_Irecv), then the behavior of your program is undetermined.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; if you want to use array of requests (because it make the program simple) but you know not all of them are actually used, then you have to initialize them with MPI_REQUEST_NULL
</span><br>
<span class="quotelev2">&gt; &gt; (it might be zero on ompi, but you cannot take this for granted)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Cheers,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Gilles
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Tuesday, September 29, 2015, Diego Avesani &lt;diego.avesani_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; dear Jeff, dear all,
</span><br>
<span class="quotelev2">&gt; &gt; I have notice that if I initialize the variables, I do not have the error anymore:
</span><br>
<span class="quotelev2">&gt; &gt; !
</span><br>
<span class="quotelev2">&gt; &gt;   ALLOCATE(SEND_REQUEST(nMsg),RECV_REQUEST(nMsg))
</span><br>
<span class="quotelev2">&gt; &gt;   SEND_REQUEST=0
</span><br>
<span class="quotelev2">&gt; &gt;   RECV_REQUEST=0
</span><br>
<span class="quotelev2">&gt; &gt; !
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Could you please explain me why?
</span><br>
<span class="quotelev2">&gt; &gt; Thanks
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Diego
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 29 September 2015 at 16:08, Diego Avesani &lt;diego.avesani_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Dear Jeff, Dear all,
</span><br>
<span class="quotelev2">&gt; &gt; the code is very long, here something. I hope that this could help.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; What do you think?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; SUBROUTINE MATOPQN
</span><br>
<span class="quotelev2">&gt; &gt; USE VARS_COMMON,ONLY:COMM_CART,send_messageR,recv_messageL,nMsg
</span><br>
<span class="quotelev2">&gt; &gt; USE MPI
</span><br>
<span class="quotelev2">&gt; &gt; INTEGER :: send_request(nMsg), recv_request(nMsg)
</span><br>
<span class="quotelev2">&gt; &gt; INTEGER :: send_status_list(MPI_STATUS_SIZE,nMsg),recv_status_list(MPI_STATUS_SIZE,nMsg)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  !send message to right CPU
</span><br>
<span class="quotelev2">&gt; &gt;     IF(MPIdata%rank.NE.MPIdata%nCPU-1)THEN
</span><br>
<span class="quotelev2">&gt; &gt;         MsgLength = MPIdata%jmaxN
</span><br>
<span class="quotelev2">&gt; &gt;         DO icount=1,MPIdata%jmaxN
</span><br>
<span class="quotelev2">&gt; &gt;             iNode = MPIdata%nodeList2right(icount)
</span><br>
<span class="quotelev2">&gt; &gt;             send_messageR(icount) = RIS_2(iNode)
</span><br>
<span class="quotelev2">&gt; &gt;         ENDDO
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         CALL MPI_ISEND(send_messageR, MsgLength, MPI_DOUBLE_COMPLEX, MPIdata%rank+1, MPIdata%rank+1, MPI_COMM_WORLD, send_request(MPIdata%rank+1), MPIdata%iErr)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     ENDIF
</span><br>
<span class="quotelev2">&gt; &gt;     !
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     !recive message FROM left CPU
</span><br>
<span class="quotelev2">&gt; &gt;     IF(MPIdata%rank.NE.0)THEN
</span><br>
<span class="quotelev2">&gt; &gt;         MsgLength = MPIdata%jmaxN
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         CALL MPI_IRECV(recv_messageL, MsgLength, MPI_DOUBLE_COMPLEX, MPIdata%rank-1, MPIdata%rank, MPI_COMM_WORLD, recv_request(MPIdata%rank), MPIdata%iErr)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         write(*,*) MPIdata%rank-1
</span><br>
<span class="quotelev2">&gt; &gt;     ENDIF
</span><br>
<span class="quotelev2">&gt; &gt;     !
</span><br>
<span class="quotelev2">&gt; &gt;     !
</span><br>
<span class="quotelev2">&gt; &gt;     CALL MPI_WAITALL(nMsg,send_request,send_status_list,MPIdata%iErr)
</span><br>
<span class="quotelev2">&gt; &gt;     CALL MPI_WAITALL(nMsg,recv_request,recv_status_list,MPIdata%iErr)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Diego
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 29 September 2015 at 00:15, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Can you send a small reproducer program?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Sep 28, 2015, at 4:45 PM, Diego Avesani &lt;diego.avesani_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Dear all,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I have to use a send_request in a MPI_WAITALL.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Here the strange things:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; If I use at the begging of the SUBROUTINE:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; INTEGER :: send_request(3), recv_request(3)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I have no problem, but if I use
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; USE COMONVARS,ONLY : nMsg
</span><br>
<span class="quotelev3">&gt; &gt; &gt; with nMsg=3
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; and after that I declare
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; INTEGER :: send_request(nMsg), recv_request(nMsg), I get the following error:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [Lap] *** An error occurred in MPI_Waitall
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [Lap] *** reported by process [139726485585921,0]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [Lap] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [Lap] *** MPI_ERR_REQUEST: invalid request
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [Lap] *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [Lap] ***    and potentially your MPI job)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; forrtl: error (78): process killed (SIGTERM)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Someone could please explain to me where I am wrong?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thanks
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Diego
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/09/27703.php">http://www.open-mpi.org/community/lists/users/2015/09/27703.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/09/27704.php">http://www.open-mpi.org/community/lists/users/2015/09/27704.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/09/27710.php">http://www.open-mpi.org/community/lists/users/2015/09/27710.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/09/27721.php">http://www.open-mpi.org/community/lists/users/2015/09/27721.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/09/27727.php">http://www.open-mpi.org/community/lists/users/2015/09/27727.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/09/27732.php">http://www.open-mpi.org/community/lists/users/2015/09/27732.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27739.php">Jeff Squyres (jsquyres): "Re: [OMPI users] understanding mpi_gather-mpi_gatherv"</a>
<li><strong>Previous message:</strong> <a href="27737.php">Diego Avesani: "[OMPI users] understanding mpi_gather-mpi_gatherv"</a>
<li><strong>In reply to:</strong> <a href="27732.php">Diego Avesani: "Re: [OMPI users] send_request error with allocate"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27741.php">Diego Avesani: "Re: [OMPI users] send_request error with allocate"</a>
<li><strong>Reply:</strong> <a href="27741.php">Diego Avesani: "Re: [OMPI users] send_request error with allocate"</a>
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
