<?
$subject_val = "Re: [OMPI users] Odd MPI_Bcast behavior";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 17 11:56:04 2008" -->
<!-- isoreceived="20080917155604" -->
<!-- sent="Wed, 17 Sep 2008 11:55:58 -0400" -->
<!-- isosent="20080917155558" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Odd MPI_Bcast behavior" -->
<!-- id="5DAC983A-5204-4BC5-8F8E-147ED0815CF2_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="OF6A8C071E.BF875778-ON852574C7.004F0EFA-852574C7.005007F5_at_us.ibm.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Odd MPI_Bcast behavior<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-17 11:55:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6582.php">Jeff Squyres: "Re: [OMPI users] Why compilig in global paths	(only)	for	configuretion files?"</a>
<li><strong>Previous message:</strong> <a href="6580.php">Terry Dontje: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>In reply to:</strong> <a href="6577.php">Gregory D Abram: "[OMPI users] Odd MPI_Bcast behavior"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6586.php">Gregory D Abram: "Re: [OMPI users] Odd MPI_Bcast behavior"</a>
<li><strong>Reply:</strong> <a href="6586.php">Gregory D Abram: "Re: [OMPI users] Odd MPI_Bcast behavior"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Are you using IB, perchance?
<br>
<p>We have an &quot;early completion&quot; optimization in the 1.2 series that can  
<br>
cause this kind of behavior.  For apps that dip into the MPI layer  
<br>
frequently, it doesn't matter.  But for those that do not dip into the  
<br>
MPI layer frequently, it can cause delays like this.  See <a href="http://www.open-mpi.org/faq/?category=openfabrics#v1.2-use-early-completion">http://www.open-mpi.org/faq/?category=openfabrics#v1.2-use-early-completion</a> 
<br>
&nbsp;&nbsp;for a few more details.
<br>
<p>If you're not using IB, let us know.
<br>
<p><p>On Sep 17, 2008, at 10:34 AM, Gregory D Abram wrote:
<br>
<p><span class="quotelev1">&gt; I have a little program which initializes, calls MPI_Bcast, prints a  
</span><br>
<span class="quotelev1">&gt; message, waits five seconds, and finalized. I sure thought that each  
</span><br>
<span class="quotelev1">&gt; participating process would print the message immediately, then all  
</span><br>
<span class="quotelev1">&gt; would wait and exit - thats what happens with mvapich 1.0.0.  On  
</span><br>
<span class="quotelev1">&gt; OpenMPI 1.2.5, though, I get the message immediately from proc 0,  
</span><br>
<span class="quotelev1">&gt; then 5 seconds later, from proc 1, and then 5 seconds later, it  
</span><br>
<span class="quotelev1">&gt; exits- as if MPI_Finalize on proc 0 flushed the MPI_Bcast. If I add  
</span><br>
<span class="quotelev1">&gt; a MPI_Barrier after the MPI_Bcast, it works as I'd expect. Is this  
</span><br>
<span class="quotelev1">&gt; behavior correct? If so, I so I have a bunch of code to change in  
</span><br>
<span class="quotelev1">&gt; order to work correctly on OpenMPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Greg
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's the code:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; main(int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; char hostname[256]; int r, s;
</span><br>
<span class="quotelev1">&gt; MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; gethostname(hostname, sizeof(hostname));
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Comm_rank(MPI_COMM_WORLD, &amp;r);
</span><br>
<span class="quotelev1">&gt; MPI_Comm_size(MPI_COMM_WORLD, &amp;s);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; fprintf(stderr, &quot;%d of %d: %s\n&quot;, r, s, hostname);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int i = 99999;
</span><br>
<span class="quotelev1">&gt; MPI_Bcast(&amp;i, sizeof(i), MPI_UNSIGNED_CHAR, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; // MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; fprintf(stderr, &quot;%d: got it\n&quot;, r);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; sleep(5);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; }
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6582.php">Jeff Squyres: "Re: [OMPI users] Why compilig in global paths	(only)	for	configuretion files?"</a>
<li><strong>Previous message:</strong> <a href="6580.php">Terry Dontje: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>In reply to:</strong> <a href="6577.php">Gregory D Abram: "[OMPI users] Odd MPI_Bcast behavior"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6586.php">Gregory D Abram: "Re: [OMPI users] Odd MPI_Bcast behavior"</a>
<li><strong>Reply:</strong> <a href="6586.php">Gregory D Abram: "Re: [OMPI users] Odd MPI_Bcast behavior"</a>
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
