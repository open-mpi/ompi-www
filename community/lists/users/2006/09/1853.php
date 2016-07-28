<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep 12 05:17:43 2006" -->
<!-- isoreceived="20060912091743" -->
<!-- sent="Tue, 12 Sep 2006 10:17:36 +0100" -->
<!-- isosent="20060912091736" -->
<!-- name="Renato Golin" -->
<!-- email="rengolin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Wtime return a value less than 1?" -->
<!-- id="d9b9d95f0609120217qa53102fma41546e6171ec47e_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="d55fb1a90609120021x6ec30eb6qfa8a105acee75e9d_at_mail.gmail.com" -->
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
<strong>From:</strong> Renato Golin (<em>rengolin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-12 05:17:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1854.php">Rob Aulwes: "[OMPI users] mpi_spawn"</a>
<li><strong>Previous message:</strong> <a href="1852.php">Aidaros Dev: "[OMPI users] MPI_Wtime return a value less than 1?"</a>
<li><strong>In reply to:</strong> <a href="1852.php">Aidaros Dev: "[OMPI users] MPI_Wtime return a value less than 1?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 9/12/06, Aidaros Dev &lt;aidaros.dev_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;  Im using cluster and mpich in Redhat.
</span><br>
<span class="quotelev1">&gt;  When i printf MPI_Wtime value, it return such like 0.224554 or 0.755654,
</span><br>
<span class="quotelev1">&gt; even sometime return 0.00000.
</span><br>
<span class="quotelev1">&gt;  I check my system time
</span><br>
<span class="quotelev1">&gt;  $date
</span><br>
<span class="quotelev1">&gt;  Tue Sep 12 15:15:16 MYT 2006 , means system time is ok.
</span><br>
<span class="quotelev1">&gt;  Any idea?
</span><br>
<p>MPI_Wtime shows you the amount of wall clock your program is running
<br>
since a point in the past and not your date/time. You should use
<br>
gettimeofday() instead.
<br>
<p>cheers,
<br>
--renato
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1854.php">Rob Aulwes: "[OMPI users] mpi_spawn"</a>
<li><strong>Previous message:</strong> <a href="1852.php">Aidaros Dev: "[OMPI users] MPI_Wtime return a value less than 1?"</a>
<li><strong>In reply to:</strong> <a href="1852.php">Aidaros Dev: "[OMPI users] MPI_Wtime return a value less than 1?"</a>
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
