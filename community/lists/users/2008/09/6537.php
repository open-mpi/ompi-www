<?
$subject_val = "Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 15 01:08:12 2008" -->
<!-- isoreceived="20080915050812" -->
<!-- sent="Mon, 15 Sep 2008 01:08:08 -0400" -->
<!-- isosent="20080915050808" -->
<!-- name="Eric Thibodeau" -->
<!-- email="kyron_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?" -->
<!-- id="48CDEDB8.3070106_at_neuralbs.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="845f51b10809140413q780c336t461a1fb5d80b5106_at_mail.gmail.com" -->
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
<strong>From:</strong> Eric Thibodeau (<em>kyron_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-15 01:08:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6538.php">Aurélien Bouteiller: "Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?"</a>
<li><strong>Previous message:</strong> <a href="6536.php">Shafagh Jafer: "Re: [OMPI users] ompi_info command not working"</a>
<li><strong>In reply to:</strong> <a href="6532.php">Enrico Barausse: "Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6538.php">Aurélien Bouteiller: "Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?"</a>
<li><strong>Reply:</strong> <a href="6538.php">Aurélien Bouteiller: "Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry about that, I had misinterpreted your original post as being the 
<br>
pair of send-receive. The example you give below does seem correct 
<br>
indeed, which means you might have to show us the code that doesn't 
<br>
work. Note that I am in no way a Fortran expert, I'm more versed in C. 
<br>
The only hint I'd give a C programmer in this case is &quot;make sure your 
<br>
receiving structures are indeed large enough (ie: you send 3d but 
<br>
eventually receive 4d...did you allocate for 3d or 4d for receiving the 
<br>
converted array...).
<br>
<p>Eric
<br>
<p>Enrico Barausse wrote:
<br>
<span class="quotelev1">&gt; sorry, I hadn't changed the subject. I'm reposting:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think it's correct. what I want to to is to send a 3d array from the
</span><br>
<span class="quotelev1">&gt; process 1 to process 0 =root):
</span><br>
<span class="quotelev1">&gt; call MPI_Send(toroot,3,MPI_DOUBLE_PRECISION,root,n,MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; in some other part of the code process 0 acts on the 3d array and
</span><br>
<span class="quotelev1">&gt; turns it into a 4d one and sends it back to process 1, which receives
</span><br>
<span class="quotelev1">&gt; it with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; call MPI_RECV(tonode,4,MPI_DOUBLE_PRECISION,root,n,MPI_COMM_WORLD,status,ierr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; in practice, what I do i basically give by this simple code (which
</span><br>
<span class="quotelev1">&gt; doesn't give the segmentation fault unfortunately):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        a=(/1,2,3,4,5/)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        call MPI_INIT(ierr)
</span><br>
<span class="quotelev1">&gt;        call MPI_COMM_RANK(MPI_COMM_WORLD, id, ierr)
</span><br>
<span class="quotelev1">&gt;        call MPI_COMM_SIZE(MPI_COMM_WORLD, numprocs, ierr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        if(numprocs/=2) stop
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        if(id==0) then
</span><br>
<span class="quotelev1">&gt;                do k=1,5
</span><br>
<span class="quotelev1">&gt;                        a=a+1
</span><br>
<span class="quotelev1">&gt;                        call MPI_SEND(a,5,MPI_INTEGER,1,k,MPI_COMM_WORLD,ierr)
</span><br>
<span class="quotelev1">&gt;                        call
</span><br>
<span class="quotelev1">&gt; MPI_RECV(b,4,MPI_INTEGER,1,k,MPI_COMM_WORLD,status,ierr)
</span><br>
<span class="quotelev1">&gt;                end do
</span><br>
<span class="quotelev1">&gt;        else
</span><br>
<span class="quotelev1">&gt;                do k=1,5
</span><br>
<span class="quotelev1">&gt;                        call
</span><br>
<span class="quotelev1">&gt; MPI_RECV(a,5,MPI_INTEGER,0,k,MPI_COMM_WORLD,status,ierr)
</span><br>
<span class="quotelev1">&gt;                        b=a(1:4)
</span><br>
<span class="quotelev1">&gt;                        call MPI_SEND(b,4,MPI_INTEGER,0,k,MPI_COMM_WORLD,ierr)
</span><br>
<span class="quotelev1">&gt;                end do
</span><br>
<span class="quotelev1">&gt;        end if
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6538.php">Aurélien Bouteiller: "Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?"</a>
<li><strong>Previous message:</strong> <a href="6536.php">Shafagh Jafer: "Re: [OMPI users] ompi_info command not working"</a>
<li><strong>In reply to:</strong> <a href="6532.php">Enrico Barausse: "Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6538.php">Aurélien Bouteiller: "Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?"</a>
<li><strong>Reply:</strong> <a href="6538.php">Aurélien Bouteiller: "Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?"</a>
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
