<?
$subject_val = "Re: [OMPI users] Bad MPI_Bcast behaviour when running over openib";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 11 08:09:20 2009" -->
<!-- isoreceived="20090911120920" -->
<!-- sent="Fri, 11 Sep 2009 08:09:14 -0400" -->
<!-- isosent="20090911120914" -->
<!-- name="Rolf Vandevaart" -->
<!-- email="Rolf.Vandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bad MPI_Bcast behaviour when running over openib" -->
<!-- id="4AAA3DEA.4010004_at_Sun.COM" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1252667904.30154.778.camel_at_skalman.hpc2n.umu.se" -->
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
<strong>Subject:</strong> Re: [OMPI users] Bad MPI_Bcast behaviour when running over openib<br>
<strong>From:</strong> Rolf Vandevaart (<em>Rolf.Vandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-11 08:09:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10619.php">Jeff Squyres: "Re: [OMPI users] Bad MPI_Bcast behaviour when running over openib"</a>
<li><strong>Previous message:</strong> <a href="10617.php">Jeff Squyres: "Re: [OMPI users] undefined symbol error when built as asharedlibrary"</a>
<li><strong>In reply to:</strong> <a href="10615.php">Ake Sandgren: "[OMPI users] Bad MPI_Bcast behaviour when running over openib"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10619.php">Jeff Squyres: "Re: [OMPI users] Bad MPI_Bcast behaviour when running over openib"</a>
<li><strong>Reply:</strong> <a href="10619.php">Jeff Squyres: "Re: [OMPI users] Bad MPI_Bcast behaviour when running over openib"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, how exactly do you run this to get this error?  I tried and it 
<br>
worked for me.
<br>
<p>burl-ct-x2200-16 50 =&gt;mpirun -mca btl_openib_warn_default_gid_prefix 0 
<br>
-mca btl self,sm,openib -np 2 -host burl-ct-x2200-16,burl-ct-x2200-17 
<br>
-mca btl_openib_ib_timeout 16 a.out
<br>
I am 0 at 1252670691
<br>
I am 1 at 1252670559
<br>
I am 0 at 1252670692
<br>
I am 1 at 1252670559
<br>
&nbsp;&nbsp;burl-ct-x2200-16 51 =&gt;
<br>
<p>Rolf
<br>
<p>On 09/11/09 07:18, Ake Sandgren wrote:
<br>
<span class="quotelev1">&gt; Hi!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The following code shows a bad behaviour when running over openib.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Openmpi: 1.3.3
</span><br>
<span class="quotelev1">&gt; With openib it dies with &quot;error polling HP CQ with status WORK REQUEST
</span><br>
<span class="quotelev1">&gt; FLUSHED ERROR status number 5 &quot;, with tcp or shmem it works as expected.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;time.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main(int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     int          rank;
</span><br>
<span class="quotelev1">&gt;     int          n;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     MPI_Init( &amp;argc, &amp;argv );
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_rank( MPI_COMM_WORLD, &amp;rank );
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     fprintf(stderr, &quot;I am %d at %d\n&quot;, rank, time(NULL));
</span><br>
<span class="quotelev1">&gt;     fflush(stderr);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     n = 4;
</span><br>
<span class="quotelev1">&gt;     MPI_Bcast(&amp;n, 1, MPI_INTEGER, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;     fprintf(stderr, &quot;I am %d at %d\n&quot;, rank, time(NULL));
</span><br>
<span class="quotelev1">&gt;     fflush(stderr);
</span><br>
<span class="quotelev1">&gt;     if (rank == 0) {
</span><br>
<span class="quotelev1">&gt; 	sleep(60);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;     MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     MPI_Finalize( );
</span><br>
<span class="quotelev1">&gt;     exit(0);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I know about the internal openmpi reason for it do behave as it does.
</span><br>
<span class="quotelev1">&gt; But i think that it should be allowed to behave as it does.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This example is a bit engineered but there are codes where a similar
</span><br>
<span class="quotelev1">&gt; situation can occur, i.e. the Bcast sender doing lots of other work
</span><br>
<span class="quotelev1">&gt; after the Bcast before the next MPI call. VASP is a candidate for this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
=========================
rolf.vandevaart_at_[hidden]
781-442-3043
=========================
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10619.php">Jeff Squyres: "Re: [OMPI users] Bad MPI_Bcast behaviour when running over openib"</a>
<li><strong>Previous message:</strong> <a href="10617.php">Jeff Squyres: "Re: [OMPI users] undefined symbol error when built as asharedlibrary"</a>
<li><strong>In reply to:</strong> <a href="10615.php">Ake Sandgren: "[OMPI users] Bad MPI_Bcast behaviour when running over openib"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10619.php">Jeff Squyres: "Re: [OMPI users] Bad MPI_Bcast behaviour when running over openib"</a>
<li><strong>Reply:</strong> <a href="10619.php">Jeff Squyres: "Re: [OMPI users] Bad MPI_Bcast behaviour when running over openib"</a>
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
