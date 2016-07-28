<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jun 13 10:25:25 2006" -->
<!-- isoreceived="20060613142525" -->
<!-- sent="Tue, 13 Jun 2006 10:19:55 -0400" -->
<!-- isosent="20060613141955" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Errors with MPI_Cart_create" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF9F1A11_at_xmb-rtp-215.amer.cisco.com" -->
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
<strong>Date:</strong> 2006-06-13 10:19:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1403.php">George Bosilca: "Re: [OMPI users] gm bandwidth results disappointing"</a>
<li><strong>Previous message:</strong> <a href="1401.php">Brock Palen: "Re: [OMPI users] Errors with MPI_Cart_create"</a>
<li><strong>Maybe in reply to:</strong> <a href="1386.php">Brock Palen: "[OMPI users] Errors with MPI_Cart_create"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Good to know -- thanks! 
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Brock Palen
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, June 13, 2006 10:18 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Errors with MPI_Cart_create
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; After allot of work,  the same problem occurred with lam-7.1.1,  i  
</span><br>
<span class="quotelev1">&gt; have passed this on to the vasp devs the best i could.  It does not  
</span><br>
<span class="quotelev1">&gt; appear to be a OMPI problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brock Palen
</span><br>
<span class="quotelev1">&gt; Center for Advanced Computing
</span><br>
<span class="quotelev1">&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev1">&gt; (734)936-1985
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 13, 2006, at 10:11 AM, Jeff Squyres ((jsquyres)) wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; This type of error *usually* indicates a programming error, but in  
</span><br>
<span class="quotelev2">&gt; &gt; this
</span><br>
<span class="quotelev2">&gt; &gt; case, it's so non-specific that it's not entirely clear that this  
</span><br>
<span class="quotelev2">&gt; &gt; is the
</span><br>
<span class="quotelev2">&gt; &gt; case.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The Vasp code seems to be not entirely open, so I can't try this  
</span><br>
<span class="quotelev2">&gt; &gt; myself.
</span><br>
<span class="quotelev2">&gt; &gt; Can you try running vasp through a debugger and putting a  
</span><br>
<span class="quotelev2">&gt; &gt; breakpoint in
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Cart_create?  The routine itself is not very long -- 
</span><br>
<span class="quotelev1">&gt; you should be
</span><br>
<span class="quotelev2">&gt; &gt; able to step through it and see where it is generating this error.
</span><br>
<span class="quotelev2">&gt; &gt; Having a back trace of where this error is occurring would be  
</span><br>
<span class="quotelev2">&gt; &gt; extremely
</span><br>
<span class="quotelev2">&gt; &gt; helpful in diagnosing the real problem.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt; &gt;&gt; From: users-bounces_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Brock Palen
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Sent: Thursday, June 08, 2006 2:38 PM
</span><br>
<span class="quotelev3">&gt; &gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subject: [OMPI users] Errors with MPI_Cart_create
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I have build vasp (<a href="http://cms.mpi.univie.ac.at/vasp/">http://cms.mpi.univie.ac.at/vasp/</a>)  for a user
</span><br>
<span class="quotelev3">&gt; &gt;&gt; using openMPI-1.0.2 with teh PGI 6.1 compilers,  At runtime I am
</span><br>
<span class="quotelev3">&gt; &gt;&gt; getting the following OMPI errors,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; bash-3.00$ mpirun -np 2  vasp
</span><br>
<span class="quotelev3">&gt; &gt;&gt; running on    2 nodes
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [nyx.engin.umich.edu:16167] *** An error occurred in 
</span><br>
<span class="quotelev1">&gt; MPI_Cart_create
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [nyx.engin.umich.edu:16167] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [nyx.engin.umich.edu:16167] *** MPI_ERR_OTHER: known error not in  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [nyx.engin.umich.edu:16167] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; This is regular OMPI error messages,  is this a problem with the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; build? (its very complicated)  or with vasp as writen? Or OMPI?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Direction is very much appreciated.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Brock
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
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
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1403.php">George Bosilca: "Re: [OMPI users] gm bandwidth results disappointing"</a>
<li><strong>Previous message:</strong> <a href="1401.php">Brock Palen: "Re: [OMPI users] Errors with MPI_Cart_create"</a>
<li><strong>Maybe in reply to:</strong> <a href="1386.php">Brock Palen: "[OMPI users] Errors with MPI_Cart_create"</a>
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
