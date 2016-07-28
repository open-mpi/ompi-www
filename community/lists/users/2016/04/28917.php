<?
$subject_val = "Re: [OMPI users] What about MPI-3 shared memory features?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 11 12:07:45 2016" -->
<!-- isoreceived="20160411160745" -->
<!-- sent="Mon, 11 Apr 2016 10:07:43 -0600" -->
<!-- isosent="20160411160743" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] What about MPI-3 shared memory features?" -->
<!-- id="20160411160743.GA83815_at_mordor.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAGKz=uKFrFvYW4nrfVqFwr5y5yyOXrWuvmEJY1+0PYAZ90ZHeA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] What about MPI-3 shared memory features?<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-11 12:07:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28918.php">Dave Love: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>Previous message:</strong> <a href="28916.php">Jeff Hammond: "Re: [OMPI users] What about MPI-3 shared memory features?"</a>
<li><strong>In reply to:</strong> <a href="28916.php">Jeff Hammond: "Re: [OMPI users] What about MPI-3 shared memory features?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
For two-sided Open MPI uses CMA, XPMEM, or KNEM for single-copy shared
<br>
memory if available. Otherwise it does two copies.
<br>
<p>-Nathan
<br>
<p>On Mon, Apr 11, 2016 at 09:02:38AM -0700, Jeff Hammond wrote:
<br>
<span class="quotelev1">&gt;    MPI-3 shared memory gives you direct access, meaning potentially zero
</span><br>
<span class="quotelev1">&gt;    copies if you eg just read shared state. 
</span><br>
<span class="quotelev1">&gt;    Optimizing intranode MPI comm just reduces copies. Since MPI
</span><br>
<span class="quotelev1">&gt;    comm semantics require one copy, you can't do better in RMA. In Send-Recv,
</span><br>
<span class="quotelev1">&gt;    I guess you can do only one copy with a CMA implementation, else probably
</span><br>
<span class="quotelev1">&gt;    two copies (to and from shared memory).
</span><br>
<span class="quotelev1">&gt;    So there is definitely an advantage to MPI shared memory.
</span><br>
<span class="quotelev1">&gt;    Jeff 
</span><br>
<span class="quotelev1">&gt;    On Monday, April 11, 2016, Tom Rosmond &lt;rosmond_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      I have been looking into the MPI-3 extensions that added ways to do
</span><br>
<span class="quotelev1">&gt;      direct memory copying on multi-core 'nodes' that share memory.
</span><br>
<span class="quotelev1">&gt;      Architectures constructed from these nodes are universal now, so
</span><br>
<span class="quotelev1">&gt;      improved ways to exploit them are certainly needed.  However, it is my
</span><br>
<span class="quotelev1">&gt;      understanding that Open-MPI and other widely used MPI implementations,
</span><br>
<span class="quotelev1">&gt;      e.g. Intel, MPICH, use hardware locality to identify shared memory
</span><br>
<span class="quotelev1">&gt;      regions and do direct memory copies between processes in these cases,
</span><br>
<span class="quotelev1">&gt;      rather than network communication.  If this is the case, are there any
</span><br>
<span class="quotelev1">&gt;      additional advantages from explicit programming of memory copying using
</span><br>
<span class="quotelev1">&gt;      MPI-3 shared memory features?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      T. Rosmond
</span><br>
<span class="quotelev1">&gt;      _______________________________________________
</span><br>
<span class="quotelev1">&gt;      users mailing list
</span><br>
<span class="quotelev1">&gt;      users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;      Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;      Link to this post:
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/community/lists/users/2016/04/28915.php">http://www.open-mpi.org/community/lists/users/2016/04/28915.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    --
</span><br>
<span class="quotelev1">&gt;    Jeff Hammond
</span><br>
<span class="quotelev1">&gt;    jeff.science_at_[hidden]
</span><br>
<span class="quotelev1">&gt;    <a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/04/28916.php">http://www.open-mpi.org/community/lists/users/2016/04/28916.php</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28917/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28918.php">Dave Love: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>Previous message:</strong> <a href="28916.php">Jeff Hammond: "Re: [OMPI users] What about MPI-3 shared memory features?"</a>
<li><strong>In reply to:</strong> <a href="28916.php">Jeff Hammond: "Re: [OMPI users] What about MPI-3 shared memory features?"</a>
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
