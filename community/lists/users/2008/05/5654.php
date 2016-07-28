<?
$subject_val = "Re: [OMPI users] A simple mpi code hangs at MPI_Init?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 12 13:51:38 2008" -->
<!-- isoreceived="20080512175138" -->
<!-- sent="Mon, 12 May 2008 13:51:27 -0400" -->
<!-- isosent="20080512175127" -->
<!-- name="Sang Chul Choi" -->
<!-- email="goshng_at_[hidden]" -->
<!-- subject="Re: [OMPI users] A simple mpi code hangs at MPI_Init?" -->
<!-- id="33f36270805121051w42ffd61ufca536f732b611ee_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20080507214801.GB9226_at_eponymous" -->
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
<strong>Subject:</strong> Re: [OMPI users] A simple mpi code hangs at MPI_Init?<br>
<strong>From:</strong> Sang Chul Choi (<em>goshng_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-12 13:51:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5655.php">Jeff Squyres: "Re: [OMPI users] [OMPI devel] OpenMPI-v1.3.1 Tentatives dates release eversion"</a>
<li><strong>Previous message:</strong> <a href="5653.php">Juan Carlos Larroya Huguet: "[OMPI users] Help configuring openmpi"</a>
<li><strong>In reply to:</strong> <a href="5632.php">Barry Rountree: "Re: [OMPI users] A simple mpi code hangs at MPI_Init?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I think that ubuntu's package version might have some problem. I just
<br>
downloaded source code from open mpi and it just worked after source
<br>
installation.
<br>
<p>Thank you,
<br>
<p>Sang Chul
<br>
<p>P.S. The code was as follows. I ran it with $ mpirun -n 2 hello
<br>
<p>===============================================================================
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
<p>int
<br>
main (int argc, char *argv[])
<br>
{
<br>
<p>&nbsp;&nbsp;int myrank, size;
<br>
<p>&nbsp;&nbsp;fprintf (stderr, &quot;Before MPI_Init\n&quot;);
<br>
&nbsp;&nbsp;MPI_Init (&amp;argc, &amp;argv);	/* Initialize MPI       */
<br>
&nbsp;&nbsp;MPI_Comm_rank (MPI_COMM_WORLD, &amp;myrank);	/* Get my rank          */
<br>
&nbsp;&nbsp;MPI_Comm_size (MPI_COMM_WORLD, &amp;size);	/* Get the total
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;number of processors */
<br>
&nbsp;&nbsp;fprintf (stderr, &quot;MPI_Comm_size\n&quot;);
<br>
&nbsp;&nbsp;printf (&quot;Processor %d of %d: Hello World!\n&quot;, myrank, size);
<br>
<p>&nbsp;&nbsp;MPI_Finalize ();		/* Terminate MPI        */
<br>
<p>&nbsp;&nbsp;return 0;
<br>
}
<br>
===============================================================================
<br>
<p><p><p>On Wed, May 7, 2008 at 5:48 PM, Barry Rountree &lt;rountree_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Wed, May 07, 2008 at 03:47:24PM -0400, Sang Chul Choi wrote:
</span><br>
<span class="quotelev2">&gt;  &gt; Hi,
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; I tried to run a hello world example of mpi code. It just hangs at
</span><br>
<span class="quotelev2">&gt;  &gt; MPI_Init. My machine is installed with Ubuntu linux and I install some
</span><br>
<span class="quotelev2">&gt;  &gt; package of open mpi. Compiling was okay, but running the code hangs at
</span><br>
<span class="quotelev2">&gt;  &gt; MPI_Init. Is there any specific things that I should do before running
</span><br>
<span class="quotelev2">&gt;  &gt; mpi code such as &quot;mpd&quot; setup?
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; I will appreciate any help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Could you post the code and how you're executing it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; Thank you,
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; Sang Chul
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; --
</span><br>
<span class="quotelev2">&gt;  &gt; ===============================
</span><br>
<span class="quotelev2">&gt;  &gt; Live, Learn, and Love!
</span><br>
<span class="quotelev2">&gt;  &gt; Sang Chul is at Piscataway.
</span><br>
<span class="quotelev2">&gt;  &gt; Work: +1-732-445-2681
</span><br>
<span class="quotelev2">&gt;  &gt; ===============================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;  &gt; users mailing list
</span><br>
<span class="quotelev2">&gt;  &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;  &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;  _______________________________________________
</span><br>
<span class="quotelev1">&gt;  users mailing list
</span><br>
<span class="quotelev1">&gt;  users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;  <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5655.php">Jeff Squyres: "Re: [OMPI users] [OMPI devel] OpenMPI-v1.3.1 Tentatives dates release eversion"</a>
<li><strong>Previous message:</strong> <a href="5653.php">Juan Carlos Larroya Huguet: "[OMPI users] Help configuring openmpi"</a>
<li><strong>In reply to:</strong> <a href="5632.php">Barry Rountree: "Re: [OMPI users] A simple mpi code hangs at MPI_Init?"</a>
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
