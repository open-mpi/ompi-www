<?
$subject_val = "Re: [OMPI users] Beginner Problem with OpenMPI (MPI_Waitall)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 27 11:51:46 2008" -->
<!-- isoreceived="20080627155146" -->
<!-- sent="Fri, 27 Jun 2008 12:51:27 -0300" -->
<!-- isosent="20080627155127" -->
<!-- name="Joao Marcelo" -->
<!-- email="jmarcelo.alencar_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Beginner Problem with OpenMPI (MPI_Waitall)" -->
<!-- id="3175cc9c0806270851w22b2dd26s20b643e746d5a483_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="d105ee120806270744l5248e4ebj5dcb3ca1658e9db7_at_mail.gmail.com" -->
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
<strong>From:</strong> Joao Marcelo (<em>jmarcelo.alencar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-27 11:51:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5998.php">Azhar Ali Shah: "[OMPI users] cat: /tmp/174.1.all.q/machines: No such file or directory"</a>
<li><strong>Previous message:</strong> <a href="5996.php">Matt Hughes: "Re: [OMPI users] Beginner Problem with OpenMPI (MPI_Waitall)"</a>
<li><strong>In reply to:</strong> <a href="5996.php">Matt Hughes: "Re: [OMPI users] Beginner Problem with OpenMPI (MPI_Waitall)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Rainer and Matt, your suggestions solved my problem.
<br>
<p>On Fri, Jun 27, 2008 at 11:44 AM, Matt Hughes
<br>
&lt;matt.c.hughes+ompi_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 2008/6/27 Joao Marcelo &lt;jmarcelo.alencar_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm starting to code with MPI and decided to use openmpi. I'm using
</span><br>
<span class="quotelev2">&gt;&gt; Ubuntu Linux with GCC version 4.2.3  and OpenMPI 1.2.5 (distribution
</span><br>
<span class="quotelev2">&gt;&gt; package). The output of &quot;ompi_info -- all&quot; is attached. I'm also
</span><br>
<span class="quotelev2">&gt;&gt; sending a copy of the source code I'm trying to run.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; One problem I see is that you are incorrectly indexing the reqs array:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        for ( i = 1; i &lt; numtasks; ++i){
</span><br>
<span class="quotelev1">&gt;                rc = MPI_Isend(&amp;a , 1 , MPI_INT , i , 0 , MPI_COMM_WORLD , &amp;reqs[i]);
</span><br>
<span class="quotelev1">&gt;        }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        MPI_Waitall(numtasks - 1 , reqs , stats);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If size = 3, you allocate enough space for two items in reqs but you
</span><br>
<span class="quotelev1">&gt; index starting at one, so you access memory past the end of the array.
</span><br>
<span class="quotelev1">&gt;  Additional, MPI_Waitall will be looking at uninitialized memory in
</span><br>
<span class="quotelev1">&gt; the first element of reqs.  This is not immediately causing the crash,
</span><br>
<span class="quotelev1">&gt; but it may be messing with MPI enough that Finalize crashes.  Try:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        for ( i = 0; i &lt; numtasks-1; ++i)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Fixing that *might* fix your crash.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mch
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
<p><p><p><pre>
-- 
__________________________________
Jo&#227;o Marcelo Uch&#244;a de Alencar
Computer Science BSc.
jmarcelo.alencar(at)gmail.com
Linux User 398939
__________________________________
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5998.php">Azhar Ali Shah: "[OMPI users] cat: /tmp/174.1.all.q/machines: No such file or directory"</a>
<li><strong>Previous message:</strong> <a href="5996.php">Matt Hughes: "Re: [OMPI users] Beginner Problem with OpenMPI (MPI_Waitall)"</a>
<li><strong>In reply to:</strong> <a href="5996.php">Matt Hughes: "Re: [OMPI users] Beginner Problem with OpenMPI (MPI_Waitall)"</a>
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
