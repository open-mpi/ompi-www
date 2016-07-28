<?
$subject_val = "Re: [OMPI users] PathScale problems persist";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 22 08:16:14 2010" -->
<!-- isoreceived="20100922121614" -->
<!-- sent="Wed, 22 Sep 2010 14:16:08 +0200" -->
<!-- isosent="20100922121608" -->
<!-- name="Ake Sandgren" -->
<!-- email="ake.sandgren_at_[hidden]" -->
<!-- subject="Re: [OMPI users] PathScale problems persist" -->
<!-- id="1285157768.5595.145.camel_at_skalman.hpc2n.umu.se" -->
<!-- inreplyto="BD25D037-E006-4D78-8BFA-EFA1EBAAACA3_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] PathScale problems persist<br>
<strong>From:</strong> Ake Sandgren (<em>ake.sandgren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-22 08:16:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14274.php">Jeff Squyres: "Re: [OMPI users] multipath support for infiniband"</a>
<li><strong>Previous message:</strong> <a href="14272.php">Jens Domke: "Re: [OMPI users] multipath support for infiniband"</a>
<li><strong>In reply to:</strong> <a href="14270.php">Jeff Squyres: "Re: [OMPI users] PathScale problems persist"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14275.php">Ake Sandgren: "Re: [OMPI users] PathScale problems persist"</a>
<li><strong>Reply:</strong> <a href="14275.php">Ake Sandgren: "Re: [OMPI users] PathScale problems persist"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 2010-09-22 at 07:42 -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; This is a problem with the Pathscale compiler and old versions of GCC.  See:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/faq/?category=building#pathscale-broken-with-mpi-c%2B%2B-api">http://www.open-mpi.org/faq/?category=building#pathscale-broken-with-mpi-c%2B%2B-api</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I note that you said you're already using GCC 4.x, but it's not clear from your text whether pathscale is using that compiler or a different GCC on the back-end.  If you can confirm that pathscale *is* using GCC 4.x on the back-end, then this is worth reporting to the pathscale support people.
</span><br>
<p>I have no problem running the code below compiled with openmpi 1.4.2 and
<br>
pathscale 3.2.
<br>
<p><span class="quotelev2">&gt; &gt; However, now we are having trouble with the 1.4.2, PathScale 3.2, and
</span><br>
<span class="quotelev2">&gt; &gt; the C++ bindings. The following code:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;iostream&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; int main(int argc, char* argv[]) {
</span><br>
<span class="quotelev2">&gt; &gt;  int node, size;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;  MPI::Init(argc, argv);
</span><br>
<span class="quotelev2">&gt; &gt;  MPI::COMM_WORLD.Set_errhandler(MPI::ERRORS_THROW_EXCEPTIONS);
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;  try {
</span><br>
<span class="quotelev2">&gt; &gt;    int rank = MPI::COMM_WORLD.Get_rank();
</span><br>
<span class="quotelev2">&gt; &gt;    int size = MPI::COMM_WORLD.Get_size();
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;    std::cout &lt;&lt; &quot;Hello world from process &quot; &lt;&lt; rank &lt;&lt; &quot; out of &quot;
</span><br>
<span class="quotelev2">&gt; &gt;      &lt;&lt; size &lt;&lt; &quot;!&quot; &lt;&lt; std::endl;
</span><br>
<span class="quotelev2">&gt; &gt;  }
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;  catch(MPI::Exception e) {
</span><br>
<span class="quotelev2">&gt; &gt;    std::cerr &lt;&lt; &quot;MPI Error: &quot; &lt;&lt; e.Get_error_code()
</span><br>
<span class="quotelev2">&gt; &gt;      &lt;&lt; &quot; - &quot; &lt;&lt; e.Get_error_string() &lt;&lt; std::endl;
</span><br>
<span class="quotelev2">&gt; &gt;  }
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;  MPI::Finalize();
</span><br>
<span class="quotelev2">&gt; &gt;  return 0;
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; generates the following output:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [host1:29934] *** An error occurred in MPI_Comm_set_errhandler
</span><br>
<span class="quotelev2">&gt; &gt; [host1:29934] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt; &gt; [host1:29934] *** MPI_ERR_COMM: invalid communicator
</span><br>
<span class="quotelev2">&gt; &gt; [host1:29934] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; mpirun has exited due to process rank 2 with PID 29934 on
</span><br>
<span class="quotelev2">&gt; &gt; node host1 exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev2">&gt; &gt; have caused other processes in the application to be
</span><br>
<span class="quotelev2">&gt; &gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; [host1:29931] 3 more processes have sent help message
</span><br>
<span class="quotelev2">&gt; &gt; help-mpi-errors.txt / mpi_errors_are_fatal
</span><br>
<span class="quotelev2">&gt; &gt; [host1:29931] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see
</span><br>
<span class="quotelev2">&gt; &gt; all help / error messages
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; There are no problems when Open MPI 1.4.2 is built with GCC (GCC 4.1.2).
</span><br>
<span class="quotelev2">&gt; &gt; No problems are found with Open MPI 1.2.6 and PathScale either.
</span><br>
<p><pre>
-- 
Ake Sandgren, HPC2N, Umea University, S-90187 Umea, Sweden
Internet: ake_at_[hidden]   Phone: +46 90 7866134 Fax: +46 90 7866126
Mobile: +46 70 7716134 WWW: <a href="http://www.hpc2n.umu.se">http://www.hpc2n.umu.se</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14274.php">Jeff Squyres: "Re: [OMPI users] multipath support for infiniband"</a>
<li><strong>Previous message:</strong> <a href="14272.php">Jens Domke: "Re: [OMPI users] multipath support for infiniband"</a>
<li><strong>In reply to:</strong> <a href="14270.php">Jeff Squyres: "Re: [OMPI users] PathScale problems persist"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14275.php">Ake Sandgren: "Re: [OMPI users] PathScale problems persist"</a>
<li><strong>Reply:</strong> <a href="14275.php">Ake Sandgren: "Re: [OMPI users] PathScale problems persist"</a>
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
