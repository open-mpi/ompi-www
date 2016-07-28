<?
$subject_val = "Re: [OMPI devel] Neighbor collectives with periodic Cartesian topologies of size one";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 26 15:54:13 2014" -->
<!-- isoreceived="20140826195413" -->
<!-- sent="Tue, 26 Aug 2014 13:54:12 -0600" -->
<!-- isosent="20140826195412" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Neighbor collectives with periodic Cartesian topologies of size one" -->
<!-- id="20140826195412.GC17148_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAEcYPwC82emtzf-WwkvdD6TmSOHRfkb6OgR--Ch1KYM3S2jNuw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Neighbor collectives with periodic Cartesian topologies of size one<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-26 15:54:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15723.php">George Bosilca: "Re: [OMPI devel] MPI calls in callback functions during MPI_Finalize()"</a>
<li><strong>Previous message:</strong> <a href="15721.php">Ralph Castain: "[OMPI devel] Fast MPI startup"</a>
<li><strong>In reply to:</strong> <a href="15713.php">Lisandro Dalcin: "[OMPI devel] Neighbor collectives with periodic Cartesian topologies of size one"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15915.php">Nathan Hjelm: "Re: [OMPI devel] Neighbor collectives with periodic Cartesian topologies of size one"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Good catch. I will take a look and see how best to fix this.
<br>
<p>-Nathan
<br>
<p>On Tue, Aug 26, 2014 at 07:03:24PM +0300, Lisandro Dalcin wrote:
<br>
<span class="quotelev1">&gt; I finally managed to track down some issues in mpi4py's test suite
</span><br>
<span class="quotelev1">&gt; using Open MPI 1.8+. The code below should be enough to reproduce the
</span><br>
<span class="quotelev1">&gt; problem. Run it under valgrind to make sense of my following
</span><br>
<span class="quotelev1">&gt; diagnostics.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In this code I'm creating a 2D, periodic Cartesian topology out of
</span><br>
<span class="quotelev1">&gt; COMM_SELF. In this case, the process in COMM_SELF has 4 logical in/out
</span><br>
<span class="quotelev1">&gt; links to itself. So we have size=1 but indegree=outdegree=4. However,
</span><br>
<span class="quotelev1">&gt; in ompi/mca/coll/basic/coll_basic_module.c, &quot;size * 2&quot; request are
</span><br>
<span class="quotelev1">&gt; being allocated to manage communication:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     if (OMPI_COMM_IS_INTER(comm)) {
</span><br>
<span class="quotelev1">&gt;         size = ompi_comm_remote_size(comm);
</span><br>
<span class="quotelev1">&gt;     } else {
</span><br>
<span class="quotelev1">&gt;         size = ompi_comm_size(comm);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;     basic_module-&gt;mccb_num_reqs = size * 2;
</span><br>
<span class="quotelev1">&gt;     basic_module-&gt;mccb_reqs = (ompi_request_t**)
</span><br>
<span class="quotelev1">&gt;         malloc(sizeof(ompi_request_t *) * basic_module-&gt;mccb_num_reqs);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I guess you have to also special-case for topologies and allocate
</span><br>
<span class="quotelev1">&gt; indegree+outdegree requests (not sure about this number, just
</span><br>
<span class="quotelev1">&gt; guessing).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main(int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;   MPI_Comm comm;
</span><br>
<span class="quotelev1">&gt;   int ndims = 2, dims[2] = {1,1}, periods[2] = {1,1};
</span><br>
<span class="quotelev1">&gt;   int sendbuf = 7, recvbuf[5] = {0,0,0,0,0};
</span><br>
<span class="quotelev1">&gt;   MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   MPI_Cart_create(MPI_COMM_SELF, ndims, dims, periods, 0, &amp;comm);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   MPI_Neighbor_allgather(&amp;sendbuf, 1, MPI_INT,
</span><br>
<span class="quotelev1">&gt;                          recvbuf,  1, MPI_INT,
</span><br>
<span class="quotelev1">&gt;                          comm);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   {int i; for (i=0;i&lt;5;i++) printf(&quot;%d &quot;,recvbuf[i]); printf(&quot;\n&quot;);}
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;   return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Lisandro Dalcin
</span><br>
<span class="quotelev1">&gt; ============
</span><br>
<span class="quotelev1">&gt; Research Scientist
</span><br>
<span class="quotelev1">&gt; Computer, Electrical and Mathematical Sciences &amp; Engineering (CEMSE)
</span><br>
<span class="quotelev1">&gt; Numerical Porous Media Center (NumPor)
</span><br>
<span class="quotelev1">&gt; King Abdullah University of Science and Technology (KAUST)
</span><br>
<span class="quotelev1">&gt; <a href="http://numpor.kaust.edu.sa/">http://numpor.kaust.edu.sa/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 4700 King Abdullah University of Science and Technology
</span><br>
<span class="quotelev1">&gt; al-Khawarizmi Bldg (Bldg 1), Office # 4332
</span><br>
<span class="quotelev1">&gt; Thuwal 23955-6900, Kingdom of Saudi Arabia
</span><br>
<span class="quotelev1">&gt; <a href="http://www.kaust.edu.sa">http://www.kaust.edu.sa</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Office Phone: +966 12 808-0459
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15713.php">http://www.open-mpi.org/community/lists/devel/2014/08/15713.php</a>
</span><br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15722/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15723.php">George Bosilca: "Re: [OMPI devel] MPI calls in callback functions during MPI_Finalize()"</a>
<li><strong>Previous message:</strong> <a href="15721.php">Ralph Castain: "[OMPI devel] Fast MPI startup"</a>
<li><strong>In reply to:</strong> <a href="15713.php">Lisandro Dalcin: "[OMPI devel] Neighbor collectives with periodic Cartesian topologies of size one"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15915.php">Nathan Hjelm: "Re: [OMPI devel] Neighbor collectives with periodic Cartesian topologies of size one"</a>
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
