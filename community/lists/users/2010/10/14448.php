<?
$subject_val = "Re: [OMPI users] nonblocking send/receive question";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 12 13:12:13 2010" -->
<!-- isoreceived="20101012171213" -->
<!-- sent="Tue, 12 Oct 2010 12:12:06 -0500" -->
<!-- isosent="20101012171206" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] nonblocking send/receive question" -->
<!-- id="B96C5DF1-4CD3-4E00-8AAA-F47B8C0E7A6D_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C5FD53FFC7D1704890B0B1FE85A004F6037B4BD0_at_cyclone.aegis.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] nonblocking send/receive question<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-12 13:12:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14449.php">Jeff Squyres: "Re: [OMPI users] Send data structures"</a>
<li><strong>Previous message:</strong> <a href="14447.php">Ed Peddycoart: "[OMPI users] Send data structures"</a>
<li><strong>In reply to:</strong> <a href="14444.php">Ed Peddycoart: "Re: [OMPI users] nonblocking send/receive question"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The code you showed was incorrect -- you were waiting on an uninitialized variable.  Perhaps that code was only a snipit...?
<br>
<p><p>On Oct 12, 2010, at 8:00 AM, Ed Peddycoart wrote:
<br>
<p><span class="quotelev1">&gt; Actually, that wasn't the problem.  My code is working now with no changes to it.  Not sure what the problem was but it wasn't the called to MPI_Send blocking.
</span><br>
<span class="quotelev1">&gt; Ed
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] on behalf of Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Sent: Tue 10/12/2010 6:52 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] nonblocking send/receive question
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 11, 2010, at 1:29 PM, Bowen Zhou wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Try MPI_Isend?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 'zactly correct.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You currently have an MPI_Wait on the sender side for no reason -- the request is only filled in on the receiver.  So you're waiting on an uninitialized variable on the sender.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_Send is a &quot;blocking&quot; send.  MPI_Isend is a non-blocking send.
</span><br>
<span class="quotelev1">&gt; MPI_Recv is a blocking receiver.  MPI_Irecv is a non-blocking receiver.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_Send is more-or-less equivalent to MPI_Isend immediately followed by an MPI_Wait on the corresponding request.  Ditto with MPI_Recv / MPI_Irecv.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I have a glut application I am trying to add MPI to.  In the display callback, for rank &gt;= 1, I want to send data to the rank =0 process.  I am not concerned at this point about sending data from the rank 0 process back to the rank &gt;= 1 process, so my data is one direction.  I would like to do this with non-blocking send/receive but I am not having much success.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Within my display callback I do the following:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; if( myrank == 0 ) {
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   MPI_Irecv( receiveData, DATA_SIZE, MPI_DOUBLE, 1, 19, MPI_COMM_WORLD, &amp;request );
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   MPI_Wait( &amp;request, &amp;status );
</span><br>
<span class="quotelev3">&gt; &gt;&gt; }
</span><br>
<span class="quotelev3">&gt; &gt;&gt; else if( myrank == 1 ) {
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   /* Post a receive, send a message, then wait */
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   MPI_Send( sendData, DATA_SIZE, MPI_DOUBLE, 0, 19, MPI_COMM_WORLD );
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   MPI_Wait( &amp;request, &amp;status );
</span><br>
<span class="quotelev3">&gt; &gt;&gt; }
</span><br>
<span class="quotelev3">&gt; &gt;&gt; But it appears that the app is still blocking after the MPI_Send.... (I have various debug prints in the actual code, this is stripped down for ease of reading).  A sample app that i have that does this works... Is doing this from the glut display call back causing the problem? Any suggestions would be greatly appreciated.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Ed
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14449.php">Jeff Squyres: "Re: [OMPI users] Send data structures"</a>
<li><strong>Previous message:</strong> <a href="14447.php">Ed Peddycoart: "[OMPI users] Send data structures"</a>
<li><strong>In reply to:</strong> <a href="14444.php">Ed Peddycoart: "Re: [OMPI users] nonblocking send/receive question"</a>
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
