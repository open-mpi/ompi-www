<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jun 13 10:18:47 2006" -->
<!-- isoreceived="20060613141847" -->
<!-- sent="Tue, 13 Jun 2006 10:17:30 -0400" -->
<!-- isosent="20060613141730" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Errors with MPI_Cart_create" -->
<!-- id="A1867121-2D4E-482E-89DE-5846A47C7674_at_umich.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C835B9C9CB0F1C4E9DA48913C9E8F8AF9F19FF_at_xmb-rtp-215.amer.cisco.com" -->
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
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-13 10:17:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1402.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Errors with MPI_Cart_create"</a>
<li><strong>Previous message:</strong> <a href="1400.php">Galen M. Shipman: "Re: [OMPI users] gm bandwidth results disappointing"</a>
<li><strong>In reply to:</strong> <a href="1399.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Errors with MPI_Cart_create"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1402.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Errors with MPI_Cart_create"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
After allot of work,  the same problem occurred with lam-7.1.1,  i  
<br>
have passed this on to the vasp devs the best i could.  It does not  
<br>
appear to be a OMPI problem.
<br>
<p>Brock Palen
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p>On Jun 13, 2006, at 10:11 AM, Jeff Squyres ((jsquyres)) wrote:
<br>
<p><span class="quotelev1">&gt; This type of error *usually* indicates a programming error, but in  
</span><br>
<span class="quotelev1">&gt; this
</span><br>
<span class="quotelev1">&gt; case, it's so non-specific that it's not entirely clear that this  
</span><br>
<span class="quotelev1">&gt; is the
</span><br>
<span class="quotelev1">&gt; case.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The Vasp code seems to be not entirely open, so I can't try this  
</span><br>
<span class="quotelev1">&gt; myself.
</span><br>
<span class="quotelev1">&gt; Can you try running vasp through a debugger and putting a  
</span><br>
<span class="quotelev1">&gt; breakpoint in
</span><br>
<span class="quotelev1">&gt; MPI_Cart_create?  The routine itself is not very long -- you should be
</span><br>
<span class="quotelev1">&gt; able to step through it and see where it is generating this error.
</span><br>
<span class="quotelev1">&gt; Having a back trace of where this error is occurring would be  
</span><br>
<span class="quotelev1">&gt; extremely
</span><br>
<span class="quotelev1">&gt; helpful in diagnosing the real problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Brock Palen
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Thursday, June 08, 2006 2:38 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [OMPI users] Errors with MPI_Cart_create
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have build vasp (<a href="http://cms.mpi.univie.ac.at/vasp/">http://cms.mpi.univie.ac.at/vasp/</a>)  for a user
</span><br>
<span class="quotelev2">&gt;&gt; using openMPI-1.0.2 with teh PGI 6.1 compilers,  At runtime I am
</span><br>
<span class="quotelev2">&gt;&gt; getting the following OMPI errors,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; bash-3.00$ mpirun -np 2  vasp
</span><br>
<span class="quotelev2">&gt;&gt; running on    2 nodes
</span><br>
<span class="quotelev2">&gt;&gt; [nyx.engin.umich.edu:16167] *** An error occurred in MPI_Cart_create
</span><br>
<span class="quotelev2">&gt;&gt; [nyx.engin.umich.edu:16167] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt;&gt; [nyx.engin.umich.edu:16167] *** MPI_ERR_OTHER: known error not in  
</span><br>
<span class="quotelev2">&gt;&gt; list
</span><br>
<span class="quotelev2">&gt;&gt; [nyx.engin.umich.edu:16167] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is regular OMPI error messages,  is this a problem with the
</span><br>
<span class="quotelev2">&gt;&gt; build? (its very complicated)  or with vasp as writen? Or OMPI?
</span><br>
<span class="quotelev2">&gt;&gt; Direction is very much appreciated.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brock
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1402.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Errors with MPI_Cart_create"</a>
<li><strong>Previous message:</strong> <a href="1400.php">Galen M. Shipman: "Re: [OMPI users] gm bandwidth results disappointing"</a>
<li><strong>In reply to:</strong> <a href="1399.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Errors with MPI_Cart_create"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1402.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Errors with MPI_Cart_create"</a>
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
