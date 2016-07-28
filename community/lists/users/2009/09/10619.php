<?
$subject_val = "Re: [OMPI users] Bad MPI_Bcast behaviour when running over openib";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 11 08:24:50 2009" -->
<!-- isoreceived="20090911122450" -->
<!-- sent="Fri, 11 Sep 2009 08:24:41 -0400" -->
<!-- isosent="20090911122441" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bad MPI_Bcast behaviour when running over openib" -->
<!-- id="EFE36892-58A0-4A3F-BD30-6C815317B3D3_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4AAA3DEA.4010004_at_Sun.COM" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-11 08:24:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10620.php">Jean Potsam: "[OMPI users] application hangs when checkpointing application"</a>
<li><strong>Previous message:</strong> <a href="10618.php">Rolf Vandevaart: "Re: [OMPI users] Bad MPI_Bcast behaviour when running over openib"</a>
<li><strong>In reply to:</strong> <a href="10618.php">Rolf Vandevaart: "Re: [OMPI users] Bad MPI_Bcast behaviour when running over openib"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10620.php">Jean Potsam: "[OMPI users] application hangs when checkpointing application"</a>
<li><strong>Reply:</strong> <a href="10620.php">Jean Potsam: "[OMPI users] application hangs when checkpointing application"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Cisco is no longer an IB vendor, but I seem to recall that these kinds  
<br>
of errors typically indicated a fabric problem.  Have you run layer 0  
<br>
and 1 diagnostics to ensure that the fabric is clean?
<br>
<p><p>On Sep 11, 2009, at 8:09 AM, Rolf Vandevaart wrote:
<br>
<p><span class="quotelev1">&gt; Hi, how exactly do you run this to get this error?  I tried and it
</span><br>
<span class="quotelev1">&gt; worked for me.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; burl-ct-x2200-16 50 =&gt;mpirun -mca btl_openib_warn_default_gid_prefix 0
</span><br>
<span class="quotelev1">&gt; -mca btl self,sm,openib -np 2 -host burl-ct-x2200-16,burl-ct-x2200-17
</span><br>
<span class="quotelev1">&gt; -mca btl_openib_ib_timeout 16 a.out
</span><br>
<span class="quotelev1">&gt; I am 0 at 1252670691
</span><br>
<span class="quotelev1">&gt; I am 1 at 1252670559
</span><br>
<span class="quotelev1">&gt; I am 0 at 1252670692
</span><br>
<span class="quotelev1">&gt; I am 1 at 1252670559
</span><br>
<span class="quotelev1">&gt;   burl-ct-x2200-16 51 =&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rolf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 09/11/09 07:18, Ake Sandgren wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The following code shows a bad behaviour when running over openib.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Openmpi: 1.3.3
</span><br>
<span class="quotelev2">&gt; &gt; With openib it dies with &quot;error polling HP CQ with status WORK  
</span><br>
<span class="quotelev1">&gt; REQUEST
</span><br>
<span class="quotelev2">&gt; &gt; FLUSHED ERROR status number 5 &quot;, with tcp or shmem it works as  
</span><br>
<span class="quotelev1">&gt; expected.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;time.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; int main(int argc, char *argv[])
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt;     int          rank;
</span><br>
<span class="quotelev2">&gt; &gt;     int          n;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     MPI_Init( &amp;argc, &amp;argv );
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     MPI_Comm_rank( MPI_COMM_WORLD, &amp;rank );
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     fprintf(stderr, &quot;I am %d at %d\n&quot;, rank, time(NULL));
</span><br>
<span class="quotelev2">&gt; &gt;     fflush(stderr);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     n = 4;
</span><br>
<span class="quotelev2">&gt; &gt;     MPI_Bcast(&amp;n, 1, MPI_INTEGER, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt; &gt;     fprintf(stderr, &quot;I am %d at %d\n&quot;, rank, time(NULL));
</span><br>
<span class="quotelev2">&gt; &gt;     fflush(stderr);
</span><br>
<span class="quotelev2">&gt; &gt;     if (rank == 0) {
</span><br>
<span class="quotelev2">&gt; &gt;       sleep(60);
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt;     MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     MPI_Finalize( );
</span><br>
<span class="quotelev2">&gt; &gt;     exit(0);
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I know about the internal openmpi reason for it do behave as it  
</span><br>
<span class="quotelev1">&gt; does.
</span><br>
<span class="quotelev2">&gt; &gt; But i think that it should be allowed to behave as it does.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This example is a bit engineered but there are codes where a similar
</span><br>
<span class="quotelev2">&gt; &gt; situation can occur, i.e. the Bcast sender doing lots of other work
</span><br>
<span class="quotelev2">&gt; &gt; after the Bcast before the next MPI call. VASP is a candidate for  
</span><br>
<span class="quotelev1">&gt; this.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; =========================
</span><br>
<span class="quotelev1">&gt; rolf.vandevaart_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 781-442-3043
</span><br>
<span class="quotelev1">&gt; =========================
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10620.php">Jean Potsam: "[OMPI users] application hangs when checkpointing application"</a>
<li><strong>Previous message:</strong> <a href="10618.php">Rolf Vandevaart: "Re: [OMPI users] Bad MPI_Bcast behaviour when running over openib"</a>
<li><strong>In reply to:</strong> <a href="10618.php">Rolf Vandevaart: "Re: [OMPI users] Bad MPI_Bcast behaviour when running over openib"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10620.php">Jean Potsam: "[OMPI users] application hangs when checkpointing application"</a>
<li><strong>Reply:</strong> <a href="10620.php">Jean Potsam: "[OMPI users] application hangs when checkpointing application"</a>
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
