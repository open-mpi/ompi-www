<?
$subject_val = "Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 15 11:43:36 2008" -->
<!-- isoreceived="20080915154336" -->
<!-- sent="Mon, 15 Sep 2008 08:46:11 -0700" -->
<!-- isosent="20080915154611" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?" -->
<!-- id="48CE8343.7060805_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="325DAC17-369B-40A8-BA37-CC2279330A17_at_eecs.utk.edu" -->
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
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-15 11:46:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6542.php">Enrico Barausse: "Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ? (Eugene Loh)"</a>
<li><strong>Previous message:</strong> <a href="6540.php">Paul Kapinos: "Re: [OMPI users] Why compilig in global paths (only) for	configuretion files?"</a>
<li><strong>In reply to:</strong> <a href="6538.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6533.php">Enrico Barausse: "Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Aur&#233;lien Bouteiller wrote:
<br>
<p><span class="quotelev1">&gt; You can't assume that MPI_Send does buffering.
</span><br>
<p>Yes, but I think this is what Eric meant by misinterpreting Enrico's 
<br>
problem.  The communication pattern is to send a message, which is 
<br>
received remotely.  There is remote computation, and then data is sent 
<br>
back.  No buffering is needed for such a pattern.  The code is 
<br>
&quot;apparently&quot; legal.  There is apparently something else going on in the 
<br>
&quot;real&quot; code that is not captured in the example Enrico sent.
<br>
<p>Further, if I understand correctly, the remote process actually receives 
<br>
the data!  If  this is true, the example is as simple as:
<br>
<p>process 1:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send()     // this call blocks
<br>
<p>process 0:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv()    // this call actually receives the data sent by 
<br>
MPI_Send!!!
<br>
<p>Enrico originally explained that process 0 actually receives the data.  
<br>
So, MPI's internal buffering is presumably not a problem at all!  An 
<br>
MPI_Send effectively sends data to a remote process, but simply never 
<br>
returns control to the user program.
<br>
<p><span class="quotelev1">&gt; Without buffering, you  are in a possible deadlock situation. This 
</span><br>
<span class="quotelev1">&gt; pathological case is the  exact motivation for the existence of 
</span><br>
<span class="quotelev1">&gt; MPI_Sendrecv. You can also  consider Isend Recv Wait, then the Send 
</span><br>
<span class="quotelev1">&gt; will never block, even if the  destination is not ready to receive, or 
</span><br>
<span class="quotelev1">&gt; MPI_Bsend that will add  explicit buffering and therefore return 
</span><br>
<span class="quotelev1">&gt; control to you before the  message transmission actually begun.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Aurelien
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 15 sept. 08 &#224; 01:08, Eric Thibodeau a &#233;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sorry about that, I had misinterpreted your original post as being  
</span><br>
<span class="quotelev2">&gt;&gt; the pair of send-receive. The example you give below does seem  
</span><br>
<span class="quotelev2">&gt;&gt; correct indeed, which means you might have to show us the code that  
</span><br>
<span class="quotelev2">&gt;&gt; doesn't work. Note that I am in no way a Fortran expert, I'm more  
</span><br>
<span class="quotelev2">&gt;&gt; versed in C. The only hint I'd give a C programmer in this case is  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;make sure your receiving structures are indeed large enough (ie:  
</span><br>
<span class="quotelev2">&gt;&gt; you send 3d but eventually receive 4d...did you allocate for 3d or  
</span><br>
<span class="quotelev2">&gt;&gt; 4d for receiving the converted array...).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Eric
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Enrico Barausse wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sorry, I hadn't changed the subject. I'm reposting:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think it's correct. what I want to to is to send a 3d array from  the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process 1 to process 0 =root):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; call MPI_Send(toroot,3,MPI_DOUBLE_PRECISION,root,n,MPI_COMM_WORLD
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in some other part of the code process 0 acts on the 3d array and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; turns it into a 4d one and sends it back to process 1, which receives
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it with
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; call MPI_RECV(tonode, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4,MPI_DOUBLE_PRECISION,root,n,MPI_COMM_WORLD,status,ierr)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in practice, what I do i basically give by this simple code (which
</span><br>
<span class="quotelev3">&gt;&gt;&gt; doesn't give the segmentation fault unfortunately):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       a=(/1,2,3,4,5/)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       call MPI_INIT(ierr)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       call MPI_COMM_RANK(MPI_COMM_WORLD, id, ierr)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       call MPI_COMM_SIZE(MPI_COMM_WORLD, numprocs, ierr)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       if(numprocs/=2) stop
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       if(id==0) then
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               do k=1,5
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       a=a+1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       call MPI_SEND(a,5,MPI_INTEGER, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1,k,MPI_COMM_WORLD,ierr)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       call
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_RECV(b,4,MPI_INTEGER,1,k,MPI_COMM_WORLD,status,ierr)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               end do
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               do k=1,5
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       call
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_RECV(a,5,MPI_INTEGER,0,k,MPI_COMM_WORLD,status,ierr)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       b=a(1:4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                       call MPI_SEND(b,4,MPI_INTEGER, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0,k,MPI_COMM_WORLD,ierr)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               end do
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       end if
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; * Dr. Aur&#233;lien Bouteiller
</span><br>
<span class="quotelev1">&gt; * Sr. Research Associate at Innovative Computing Laboratory
</span><br>
<span class="quotelev1">&gt; * University of Tennessee
</span><br>
<span class="quotelev1">&gt; * 1122 Volunteer Boulevard, suite 350
</span><br>
<span class="quotelev1">&gt; * Knoxville, TN 37996
</span><br>
<span class="quotelev1">&gt; * 865 974 6321
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/user">http://www.open-mpi.org/mailman/listinfo.cgi/user</a>
</span><br>
<span class="quotelev1">&gt; s
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6542.php">Enrico Barausse: "Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ? (Eugene Loh)"</a>
<li><strong>Previous message:</strong> <a href="6540.php">Paul Kapinos: "Re: [OMPI users] Why compilig in global paths (only) for	configuretion files?"</a>
<li><strong>In reply to:</strong> <a href="6538.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6533.php">Enrico Barausse: "Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?"</a>
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
