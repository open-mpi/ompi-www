<?
$subject_val = "Re: [OMPI users] Beginner Problem with OpenMPI (MPI_Waitall)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 27 10:44:21 2008" -->
<!-- isoreceived="20080627144421" -->
<!-- sent="Fri, 27 Jun 2008 08:44:15 -0600" -->
<!-- isosent="20080627144415" -->
<!-- name="Matt Hughes" -->
<!-- email="matt.c.hughes+ompi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Beginner Problem with OpenMPI (MPI_Waitall)" -->
<!-- id="d105ee120806270744l5248e4ebj5dcb3ca1658e9db7_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3175cc9c0806270654q61075a40p3667f25cda8a0a9_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Beginner Problem with OpenMPI (MPI_Waitall)<br>
<strong>From:</strong> Matt Hughes (<em>matt.c.hughes+ompi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-27 10:44:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5997.php">Joao Marcelo: "Re: [OMPI users] Beginner Problem with OpenMPI (MPI_Waitall)"</a>
<li><strong>Previous message:</strong> <a href="5995.php">Rainer Keller: "Re: [OMPI users] Beginner Problem with OpenMPI (MPI_Waitall)"</a>
<li><strong>In reply to:</strong> <a href="5994.php">Joao Marcelo: "[OMPI users] Beginner Problem with OpenMPI (MPI_Waitall)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5997.php">Joao Marcelo: "Re: [OMPI users] Beginner Problem with OpenMPI (MPI_Waitall)"</a>
<li><strong>Reply:</strong> <a href="5997.php">Joao Marcelo: "Re: [OMPI users] Beginner Problem with OpenMPI (MPI_Waitall)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
2008/6/27 Joao Marcelo &lt;jmarcelo.alencar_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm starting to code with MPI and decided to use openmpi. I'm using
</span><br>
<span class="quotelev1">&gt; Ubuntu Linux with GCC version 4.2.3  and OpenMPI 1.2.5 (distribution
</span><br>
<span class="quotelev1">&gt; package). The output of &quot;ompi_info -- all&quot; is attached. I'm also
</span><br>
<span class="quotelev1">&gt; sending a copy of the source code I'm trying to run.
</span><br>
<p>One problem I see is that you are incorrectly indexing the reqs array:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for ( i = 1; i &lt; numtasks; ++i){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rc = MPI_Isend(&amp;a , 1 , MPI_INT , i , 0 , MPI_COMM_WORLD , &amp;reqs[i]);		
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Waitall(numtasks - 1 , reqs , stats);
<br>
<p>If size = 3, you allocate enough space for two items in reqs but you
<br>
index starting at one, so you access memory past the end of the array.
<br>
&nbsp;Additional, MPI_Waitall will be looking at uninitialized memory in
<br>
the first element of reqs.  This is not immediately causing the crash,
<br>
but it may be messing with MPI enough that Finalize crashes.  Try:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for ( i = 0; i &lt; numtasks-1; ++i)
<br>
<p>Fixing that *might* fix your crash.
<br>
<p>mch
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5997.php">Joao Marcelo: "Re: [OMPI users] Beginner Problem with OpenMPI (MPI_Waitall)"</a>
<li><strong>Previous message:</strong> <a href="5995.php">Rainer Keller: "Re: [OMPI users] Beginner Problem with OpenMPI (MPI_Waitall)"</a>
<li><strong>In reply to:</strong> <a href="5994.php">Joao Marcelo: "[OMPI users] Beginner Problem with OpenMPI (MPI_Waitall)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5997.php">Joao Marcelo: "Re: [OMPI users] Beginner Problem with OpenMPI (MPI_Waitall)"</a>
<li><strong>Reply:</strong> <a href="5997.php">Joao Marcelo: "Re: [OMPI users] Beginner Problem with OpenMPI (MPI_Waitall)"</a>
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
