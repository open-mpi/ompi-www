<?
$subject_val = "Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 15 08:58:18 2008" -->
<!-- isoreceived="20080915125818" -->
<!-- sent="Mon, 15 Sep 2008 08:58:02 -0400" -->
<!-- isosent="20080915125802" -->
<!-- name="Aur&#233;lien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?" -->
<!-- id="325DAC17-369B-40A8-BA37-CC2279330A17_at_eecs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="48CDEDB8.3070106_at_neuralbs.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?<br>
<strong>From:</strong> Aur&#233;lien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-15 08:58:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6539.php">Thomas Ropars: "Re: [OMPI users] Problem using VampirTrace"</a>
<li><strong>Previous message:</strong> <a href="6537.php">Eric Thibodeau: "Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?"</a>
<li><strong>In reply to:</strong> <a href="6537.php">Eric Thibodeau: "Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6541.php">Eugene Loh: "Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?"</a>
<li><strong>Reply:</strong> <a href="6541.php">Eugene Loh: "Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You can't assume that MPI_Send does buffering. Without buffering, you  
<br>
are in a possible deadlock situation. This pathological case is the  
<br>
exact motivation for the existence of MPI_Sendrecv. You can also  
<br>
consider Isend Recv Wait, then the Send will never block, even if the  
<br>
destination is not ready to receive, or MPI_Bsend that will add  
<br>
explicit buffering and therefore return control to you before the  
<br>
message transmission actually begun.
<br>
<p>Aurelien
<br>
<p><p>Le 15 sept. 08 &#224; 01:08, Eric Thibodeau a &#233;crit :
<br>
<p><span class="quotelev1">&gt; Sorry about that, I had misinterpreted your original post as being  
</span><br>
<span class="quotelev1">&gt; the pair of send-receive. The example you give below does seem  
</span><br>
<span class="quotelev1">&gt; correct indeed, which means you might have to show us the code that  
</span><br>
<span class="quotelev1">&gt; doesn't work. Note that I am in no way a Fortran expert, I'm more  
</span><br>
<span class="quotelev1">&gt; versed in C. The only hint I'd give a C programmer in this case is  
</span><br>
<span class="quotelev1">&gt; &quot;make sure your receiving structures are indeed large enough (ie:  
</span><br>
<span class="quotelev1">&gt; you send 3d but eventually receive 4d...did you allocate for 3d or  
</span><br>
<span class="quotelev1">&gt; 4d for receiving the converted array...).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Eric
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Enrico Barausse wrote:
</span><br>
<span class="quotelev2">&gt;&gt; sorry, I hadn't changed the subject. I'm reposting:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think it's correct. what I want to to is to send a 3d array from  
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; process 1 to process 0 =root):
</span><br>
<span class="quotelev2">&gt;&gt; call MPI_Send(toroot,3,MPI_DOUBLE_PRECISION,root,n,MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; in some other part of the code process 0 acts on the 3d array and
</span><br>
<span class="quotelev2">&gt;&gt; turns it into a 4d one and sends it back to process 1, which receives
</span><br>
<span class="quotelev2">&gt;&gt; it with
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; call MPI_RECV(tonode, 
</span><br>
<span class="quotelev2">&gt;&gt; 4,MPI_DOUBLE_PRECISION,root,n,MPI_COMM_WORLD,status,ierr)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; in practice, what I do i basically give by this simple code (which
</span><br>
<span class="quotelev2">&gt;&gt; doesn't give the segmentation fault unfortunately):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       a=(/1,2,3,4,5/)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       call MPI_INIT(ierr)
</span><br>
<span class="quotelev2">&gt;&gt;       call MPI_COMM_RANK(MPI_COMM_WORLD, id, ierr)
</span><br>
<span class="quotelev2">&gt;&gt;       call MPI_COMM_SIZE(MPI_COMM_WORLD, numprocs, ierr)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       if(numprocs/=2) stop
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       if(id==0) then
</span><br>
<span class="quotelev2">&gt;&gt;               do k=1,5
</span><br>
<span class="quotelev2">&gt;&gt;                       a=a+1
</span><br>
<span class="quotelev2">&gt;&gt;                       call MPI_SEND(a,5,MPI_INTEGER, 
</span><br>
<span class="quotelev2">&gt;&gt; 1,k,MPI_COMM_WORLD,ierr)
</span><br>
<span class="quotelev2">&gt;&gt;                       call
</span><br>
<span class="quotelev2">&gt;&gt; MPI_RECV(b,4,MPI_INTEGER,1,k,MPI_COMM_WORLD,status,ierr)
</span><br>
<span class="quotelev2">&gt;&gt;               end do
</span><br>
<span class="quotelev2">&gt;&gt;       else
</span><br>
<span class="quotelev2">&gt;&gt;               do k=1,5
</span><br>
<span class="quotelev2">&gt;&gt;                       call
</span><br>
<span class="quotelev2">&gt;&gt; MPI_RECV(a,5,MPI_INTEGER,0,k,MPI_COMM_WORLD,status,ierr)
</span><br>
<span class="quotelev2">&gt;&gt;                       b=a(1:4)
</span><br>
<span class="quotelev2">&gt;&gt;                       call MPI_SEND(b,4,MPI_INTEGER, 
</span><br>
<span class="quotelev2">&gt;&gt; 0,k,MPI_COMM_WORLD,ierr)
</span><br>
<span class="quotelev2">&gt;&gt;               end do
</span><br>
<span class="quotelev2">&gt;&gt;       end if
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><pre>
--
* Dr. Aur&#233;lien Bouteiller
* Sr. Research Associate at Innovative Computing Laboratory
* University of Tennessee
* 1122 Volunteer Boulevard, suite 350
* Knoxville, TN 37996
* 865 974 6321
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6539.php">Thomas Ropars: "Re: [OMPI users] Problem using VampirTrace"</a>
<li><strong>Previous message:</strong> <a href="6537.php">Eric Thibodeau: "Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?"</a>
<li><strong>In reply to:</strong> <a href="6537.php">Eric Thibodeau: "Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6541.php">Eugene Loh: "Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?"</a>
<li><strong>Reply:</strong> <a href="6541.php">Eugene Loh: "Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?"</a>
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
