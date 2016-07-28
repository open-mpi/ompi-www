<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun 21 07:58:44 2006" -->
<!-- isoreceived="20060621115844" -->
<!-- sent="Wed, 21 Jun 2006 07:58:33 -0400" -->
<!-- isosent="20060621115833" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Wtime" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AFA43F6B_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] MPI_Wtime" -->
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
<strong>Date:</strong> 2006-06-21 07:58:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1457.php">shen T.T.: "[OMPI users] rsh/ssh is work but mpirun hang ?"</a>
<li><strong>Previous message:</strong> <a href="1455.php">Eric Thibodeau: "Re: [OMPI users] Installing OpenMPI on a solaris"</a>
<li><strong>Maybe in reply to:</strong> <a href="1448.php">Michael Kluskens: "[OMPI users] MPI_Wtime"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Why, it's because you found yet another bug in our F90 bindings, of
<br>
course.  :-)
<br>
<p>I see the problem -- I should be able to have a fix within the next few
<br>
hours.
<br>
<p>Thanks! 
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Michael Kluskens
</span><br>
<span class="quotelev1">&gt; Sent: Monday, June 19, 2006 1:33 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] MPI_Wtime
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is anyone using MPI_Wtime with any version of OpenMPI under 
</span><br>
<span class="quotelev1">&gt; Fortran 90?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I got my program to compile with MPI_Wtime commands but the  
</span><br>
<span class="quotelev1">&gt; difference between two different times in the process is always zero.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When compiling against OpenMPI I have to specify
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mytime = MPI_Wtime
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For other MPI's I specify:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mytime = MPI_Wtime()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This has been tested on a dual-opteron with PGI 6.1-5 and a G4 with  
</span><br>
<span class="quotelev1">&gt; g95, I'm currently using OpenMPI 1.2a1r10297.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The same code works fine on the dual-operton with PGI 6.1-5 and  
</span><br>
<span class="quotelev1">&gt; MPICH2, SGI Altix with Intel compilers and SGI MPI library, and SGI  
</span><br>
<span class="quotelev1">&gt; IRIX with SGI MPI library.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Michael
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1457.php">shen T.T.: "[OMPI users] rsh/ssh is work but mpirun hang ?"</a>
<li><strong>Previous message:</strong> <a href="1455.php">Eric Thibodeau: "Re: [OMPI users] Installing OpenMPI on a solaris"</a>
<li><strong>Maybe in reply to:</strong> <a href="1448.php">Michael Kluskens: "[OMPI users] MPI_Wtime"</a>
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
