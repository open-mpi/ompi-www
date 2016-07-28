<?
$subject_val = "Re: [OMPI users] PathScale problems persist";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 22 07:42:28 2010" -->
<!-- isoreceived="20100922114228" -->
<!-- sent="Wed, 22 Sep 2010 07:42:22 -0400" -->
<!-- isosent="20100922114222" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] PathScale problems persist" -->
<!-- id="BD25D037-E006-4D78-8BFA-EFA1EBAAACA3_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1285068694.9741.5.camel_at_boabdilmec" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-22 07:42:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14271.php">Jeff Squyres: "Re: [OMPI users] OpenMPI on the ARM processor architecture?"</a>
<li><strong>Previous message:</strong> <a href="14269.php">Jeff Squyres: "Re: [OMPI users] multipath support for infiniband"</a>
<li><strong>In reply to:</strong> <a href="14256.php">Rafael Arco Arredondo: "[OMPI users] PathScale problems persist"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14273.php">Ake Sandgren: "Re: [OMPI users] PathScale problems persist"</a>
<li><strong>Reply:</strong> <a href="14273.php">Ake Sandgren: "Re: [OMPI users] PathScale problems persist"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is a problem with the Pathscale compiler and old versions of GCC.  See:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=building#pathscale-broken-with-mpi-c%2B%2B-api">http://www.open-mpi.org/faq/?category=building#pathscale-broken-with-mpi-c%2B%2B-api</a>
<br>
<p>I note that you said you're already using GCC 4.x, but it's not clear from your text whether pathscale is using that compiler or a different GCC on the back-end.  If you can confirm that pathscale *is* using GCC 4.x on the back-end, then this is worth reporting to the pathscale support people.
<br>
<p><p><p>On Sep 21, 2010, at 7:31 AM, Rafael Arco Arredondo wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In January, I reported a problem with Open MPI 1.4.1 and PathScale 3.2
</span><br>
<span class="quotelev1">&gt; about a simple Hello World that hung on initialization
</span><br>
<span class="quotelev1">&gt; ( <a href="http://www.open-mpi.org/community/lists/users/2010/01/11863.php">http://www.open-mpi.org/community/lists/users/2010/01/11863.php</a> ).
</span><br>
<span class="quotelev1">&gt; Open MPI 1.4.2 does not show this problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, now we are having trouble with the 1.4.2, PathScale 3.2, and
</span><br>
<span class="quotelev1">&gt; the C++ bindings. The following code:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;iostream&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main(int argc, char* argv[]) {
</span><br>
<span class="quotelev1">&gt;  int node, size;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  MPI::Init(argc, argv);
</span><br>
<span class="quotelev1">&gt;  MPI::COMM_WORLD.Set_errhandler(MPI::ERRORS_THROW_EXCEPTIONS);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  try {
</span><br>
<span class="quotelev1">&gt;    int rank = MPI::COMM_WORLD.Get_rank();
</span><br>
<span class="quotelev1">&gt;    int size = MPI::COMM_WORLD.Get_size();
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    std::cout &lt;&lt; &quot;Hello world from process &quot; &lt;&lt; rank &lt;&lt; &quot; out of &quot;
</span><br>
<span class="quotelev1">&gt;      &lt;&lt; size &lt;&lt; &quot;!&quot; &lt;&lt; std::endl;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  catch(MPI::Exception e) {
</span><br>
<span class="quotelev1">&gt;    std::cerr &lt;&lt; &quot;MPI Error: &quot; &lt;&lt; e.Get_error_code()
</span><br>
<span class="quotelev1">&gt;      &lt;&lt; &quot; - &quot; &lt;&lt; e.Get_error_string() &lt;&lt; std::endl;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  MPI::Finalize();
</span><br>
<span class="quotelev1">&gt;  return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; generates the following output:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [host1:29934] *** An error occurred in MPI_Comm_set_errhandler
</span><br>
<span class="quotelev1">&gt; [host1:29934] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [host1:29934] *** MPI_ERR_COMM: invalid communicator
</span><br>
<span class="quotelev1">&gt; [host1:29934] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun has exited due to process rank 2 with PID 29934 on
</span><br>
<span class="quotelev1">&gt; node host1 exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev1">&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [host1:29931] 3 more processes have sent help message
</span><br>
<span class="quotelev1">&gt; help-mpi-errors.txt / mpi_errors_are_fatal
</span><br>
<span class="quotelev1">&gt; [host1:29931] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see
</span><br>
<span class="quotelev1">&gt; all help / error messages
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There are no problems when Open MPI 1.4.2 is built with GCC (GCC 4.1.2).
</span><br>
<span class="quotelev1">&gt; No problems are found with Open MPI 1.2.6 and PathScale either.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rafa
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Rafael Arco Arredondo
</span><br>
<span class="quotelev1">&gt; Centro de Servicios de Inform&#225;tica y Redes de Comunicaciones
</span><br>
<span class="quotelev1">&gt; Campus de Fuentenueva - Edificio Mecenas
</span><br>
<span class="quotelev1">&gt; Universidad de Granada
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14271.php">Jeff Squyres: "Re: [OMPI users] OpenMPI on the ARM processor architecture?"</a>
<li><strong>Previous message:</strong> <a href="14269.php">Jeff Squyres: "Re: [OMPI users] multipath support for infiniband"</a>
<li><strong>In reply to:</strong> <a href="14256.php">Rafael Arco Arredondo: "[OMPI users] PathScale problems persist"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14273.php">Ake Sandgren: "Re: [OMPI users] PathScale problems persist"</a>
<li><strong>Reply:</strong> <a href="14273.php">Ake Sandgren: "Re: [OMPI users] PathScale problems persist"</a>
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
