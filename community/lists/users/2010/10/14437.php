<?
$subject_val = "Re: [OMPI users] nonblocking send/receive question";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 11 14:29:23 2010" -->
<!-- isoreceived="20101011182923" -->
<!-- sent="Mon, 11 Oct 2010 14:29:17 -0400" -->
<!-- isosent="20101011182917" -->
<!-- name="Bowen Zhou" -->
<!-- email="bwzhou_at_[hidden]" -->
<!-- subject="Re: [OMPI users] nonblocking send/receive question" -->
<!-- id="BLU0-SMTP121AFABB16BEE4C7251FF5DD2530_at_phx.gbl" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C5FD53FFC7D1704890B0B1FE85A004F6037B4BCF_at_cyclone.aegis.com" -->
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
<strong>From:</strong> Bowen Zhou (<em>bwzhou_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-11 14:29:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14438.php">Jed Brown: "[OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<li><strong>Previous message:</strong> <a href="14436.php">Ed Peddycoart: "[OMPI users] nonblocking send/receive question"</a>
<li><strong>In reply to:</strong> <a href="14436.php">Ed Peddycoart: "[OMPI users] nonblocking send/receive question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14443.php">Jeff Squyres: "Re: [OMPI users] nonblocking send/receive question"</a>
<li><strong>Reply:</strong> <a href="14443.php">Jeff Squyres: "Re: [OMPI users] nonblocking send/receive question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Try MPI_Isend?
<br>
<p><p><span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I have a glut application I am trying to add MPI to.  In the display 
</span><br>
<span class="quotelev1">&gt; callback, for rank &gt;= 1, I want to send data to the rank =0 process.  I 
</span><br>
<span class="quotelev1">&gt; am not concerned at this point about sending data from the rank 0 
</span><br>
<span class="quotelev1">&gt; process back to the rank &gt;= 1 process, so my data is one direction.  I 
</span><br>
<span class="quotelev1">&gt; would like to do this with non-blocking send/receive but I am not having 
</span><br>
<span class="quotelev1">&gt; much success.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Within my display callback I do the following:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; if( myrank == 0 ) {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    MPI_Irecv( receiveData, DATA_SIZE, MPI_DOUBLE, 1, 19, MPI_COMM_WORLD, 
</span><br>
<span class="quotelev1">&gt; &amp;request );
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    MPI_Wait( &amp;request, &amp;status );
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; else if( myrank == 1 ) {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    /* Post a receive, send a message, then wait */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    MPI_Send( sendData, DATA_SIZE, MPI_DOUBLE, 0, 19, MPI_COMM_WORLD );
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    MPI_Wait( &amp;request, &amp;status );
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But it appears that the app is still blocking after the MPI_Send.... (I 
</span><br>
<span class="quotelev1">&gt; have various debug prints in the actual code, this is stripped down for 
</span><br>
<span class="quotelev1">&gt; ease of reading).  A sample app that i have that does this works... Is 
</span><br>
<span class="quotelev1">&gt; doing this from the glut display call back causing the problem? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any suggestions would be greatly appreciated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ed
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14438.php">Jed Brown: "[OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<li><strong>Previous message:</strong> <a href="14436.php">Ed Peddycoart: "[OMPI users] nonblocking send/receive question"</a>
<li><strong>In reply to:</strong> <a href="14436.php">Ed Peddycoart: "[OMPI users] nonblocking send/receive question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14443.php">Jeff Squyres: "Re: [OMPI users] nonblocking send/receive question"</a>
<li><strong>Reply:</strong> <a href="14443.php">Jeff Squyres: "Re: [OMPI users] nonblocking send/receive question"</a>
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
