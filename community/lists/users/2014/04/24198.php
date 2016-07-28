<?
$subject_val = "Re: [OMPI users] Cygwin compilation problems for openmpi-1.8";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 15 08:35:32 2014" -->
<!-- isoreceived="20140415123532" -->
<!-- sent="Tue, 15 Apr 2014 14:35:26 +0200" -->
<!-- isosent="20140415123526" -->
<!-- name="Marco Atzeri" -->
<!-- email="marco.atzeri_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Cygwin compilation problems for openmpi-1.8" -->
<!-- id="534D278E.4070407_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1397561486.93799.YahooMailNeo_at_web164901.mail.bf1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Cygwin compilation problems for openmpi-1.8<br>
<strong>From:</strong> Marco Atzeri (<em>marco.atzeri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-15 08:35:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24199.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Cygwin compilation problems for openmpi-1.8"</a>
<li><strong>Previous message:</strong> <a href="24197.php">Cristian Butincu: "Re: [OMPI users] Cygwin compilation problems for openmpi-1.8"</a>
<li><strong>In reply to:</strong> <a href="24197.php">Cristian Butincu: "Re: [OMPI users] Cygwin compilation problems for openmpi-1.8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24199.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Cygwin compilation problems for openmpi-1.8"</a>
<li><strong>Reply:</strong> <a href="24199.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Cygwin compilation problems for openmpi-1.8"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 15/04/2014 13:31, Cristian Butincu wrote:
<br>
<span class="quotelev1">&gt; This is the simple MPI program (test.c) I was talking about:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char* argv[]) {
</span><br>
<span class="quotelev1">&gt;      int my_rank; /* rank of process */
</span><br>
<span class="quotelev1">&gt;      int p; /* number of processes */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* start up MPI */
</span><br>
<span class="quotelev1">&gt;      MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* find out process rank */
</span><br>
<span class="quotelev1">&gt;      MPI_Comm_rank(MPI_COMM_WORLD, &amp;my_rank);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* find out number of processes */
</span><br>
<span class="quotelev1">&gt;      MPI_Comm_size(MPI_COMM_WORLD, &amp;p);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      printf(&quot;Hello MPI World! Num processes: %d\n&quot;, p);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* shut down MPI */
</span><br>
<span class="quotelev1">&gt;      MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Issued commands:
</span><br>
<span class="quotelev1">&gt; $ mpicc test.c
</span><br>
<span class="quotelev1">&gt; $ orterun -np 4 a.exe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>on 64bit 1.7.5,
<br>
as Symantec Endpoint protections, just decided
<br>
that a portion of 32bit MPI is a Trojan...
<br>
<p>$ mpicc test_mpi.c -o test_mpi
<br>
<p>$ mpirun -n 4 ./test_mpi.exe
<br>
Hello MPI World! Num processes: 4
<br>
Hello MPI World! Num processes: 4
<br>
Hello MPI World! Num processes: 4
<br>
Hello MPI World! Num processes: 4
<br>
<p>Regards
<br>
Marco
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24199.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Cygwin compilation problems for openmpi-1.8"</a>
<li><strong>Previous message:</strong> <a href="24197.php">Cristian Butincu: "Re: [OMPI users] Cygwin compilation problems for openmpi-1.8"</a>
<li><strong>In reply to:</strong> <a href="24197.php">Cristian Butincu: "Re: [OMPI users] Cygwin compilation problems for openmpi-1.8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24199.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Cygwin compilation problems for openmpi-1.8"</a>
<li><strong>Reply:</strong> <a href="24199.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Cygwin compilation problems for openmpi-1.8"</a>
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
