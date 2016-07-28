<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jun 13 10:12:01 2006" -->
<!-- isoreceived="20060613141201" -->
<!-- sent="Tue, 13 Jun 2006 10:11:49 -0400" -->
<!-- isosent="20060613141149" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Errors with MPI_Cart_create" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF9F19FF_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] Errors with MPI_Cart_create" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-13 10:11:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1400.php">Galen M. Shipman: "Re: [OMPI users] gm bandwidth results disappointing"</a>
<li><strong>Previous message:</strong> <a href="1398.php">Brock Palen: "[OMPI users] gm bandwidth results disappointing"</a>
<li><strong>Maybe in reply to:</strong> <a href="1386.php">Brock Palen: "[OMPI users] Errors with MPI_Cart_create"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1401.php">Brock Palen: "Re: [OMPI users] Errors with MPI_Cart_create"</a>
<li><strong>Reply:</strong> <a href="1401.php">Brock Palen: "Re: [OMPI users] Errors with MPI_Cart_create"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This type of error *usually* indicates a programming error, but in this
<br>
case, it's so non-specific that it's not entirely clear that this is the
<br>
case.
<br>
<p>The Vasp code seems to be not entirely open, so I can't try this myself.
<br>
Can you try running vasp through a debugger and putting a breakpoint in
<br>
MPI_Cart_create?  The routine itself is not very long -- you should be
<br>
able to step through it and see where it is generating this error.
<br>
Having a back trace of where this error is occurring would be extremely
<br>
helpful in diagnosing the real problem.
<br>
<p><p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Brock Palen
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, June 08, 2006 2:38 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] Errors with MPI_Cart_create
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have build vasp (<a href="http://cms.mpi.univie.ac.at/vasp/">http://cms.mpi.univie.ac.at/vasp/</a>)  for a user  
</span><br>
<span class="quotelev1">&gt; using openMPI-1.0.2 with teh PGI 6.1 compilers,  At runtime I am  
</span><br>
<span class="quotelev1">&gt; getting the following OMPI errors,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; bash-3.00$ mpirun -np 2  vasp
</span><br>
<span class="quotelev1">&gt; running on    2 nodes
</span><br>
<span class="quotelev1">&gt; [nyx.engin.umich.edu:16167] *** An error occurred in MPI_Cart_create
</span><br>
<span class="quotelev1">&gt; [nyx.engin.umich.edu:16167] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [nyx.engin.umich.edu:16167] *** MPI_ERR_OTHER: known error not in list
</span><br>
<span class="quotelev1">&gt; [nyx.engin.umich.edu:16167] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is regular OMPI error messages,  is this a problem with the  
</span><br>
<span class="quotelev1">&gt; build? (its very complicated)  or with vasp as writen? Or OMPI?
</span><br>
<span class="quotelev1">&gt; Direction is very much appreciated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brock
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
<li><strong>Next message:</strong> <a href="1400.php">Galen M. Shipman: "Re: [OMPI users] gm bandwidth results disappointing"</a>
<li><strong>Previous message:</strong> <a href="1398.php">Brock Palen: "[OMPI users] gm bandwidth results disappointing"</a>
<li><strong>Maybe in reply to:</strong> <a href="1386.php">Brock Palen: "[OMPI users] Errors with MPI_Cart_create"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1401.php">Brock Palen: "Re: [OMPI users] Errors with MPI_Cart_create"</a>
<li><strong>Reply:</strong> <a href="1401.php">Brock Palen: "Re: [OMPI users] Errors with MPI_Cart_create"</a>
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
