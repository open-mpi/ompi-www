<?
$subject_val = "Re: [OMPI users] runtime MCA parameters";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 15 13:58:37 2015" -->
<!-- isoreceived="20150915175837" -->
<!-- sent="Tue, 15 Sep 2015 11:58:35 -0600" -->
<!-- isosent="20150915175835" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] runtime MCA parameters" -->
<!-- id="20150915175835.GF89926_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="55F85828.9020908_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] runtime MCA parameters<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-15 13:58:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27579.php">Matt Thompson: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<li><strong>Previous message:</strong> <a href="27577.php">Ralph Castain: "Re: [OMPI users] runtime MCA parameters"</a>
<li><strong>In reply to:</strong> <a href="27576.php">marcin.krotkiewski: "[OMPI users] runtime MCA parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27584.php">marcin.krotkiewski: "Re: [OMPI users] runtime MCA parameters"</a>
<li><strong>Reply:</strong> <a href="27584.php">marcin.krotkiewski: "Re: [OMPI users] runtime MCA parameters"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You can use MPI_T to set any MCA variable before MPI_Init. At this time
<br>
we lock down all MCA variable during MPI_Init. You will need to call
<br>
MPI_T_init_thread before MPI_Init and make sure to call MPI_T_finalize
<br>
any time after you are finished setting MCA variables. For more
<br>
information see MPI-3.1 chapter 14.
<br>
<p>-Nathan
<br>
<p>On Tue, Sep 15, 2015 at 07:40:56PM +0200, marcin.krotkiewski wrote:
<br>
<span class="quotelev1">&gt; I was wondering if it is possible, or considered to make it possible to
</span><br>
<span class="quotelev1">&gt; change the various MCA parameters by individual ranks during runtime in
</span><br>
<span class="quotelev1">&gt; addition to the command line?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried to google a bit, but did not get any indication that such topic has
</span><br>
<span class="quotelev1">&gt; even been discussed. It would be a very useful thing, especially in
</span><br>
<span class="quotelev1">&gt; multi-threaded applications when using MPI_THREAD_MULTIPLE, but I could come
</span><br>
<span class="quotelev1">&gt; up with plenty uses in usual single-threaded ranks setups.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Marcin
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/09/27576.php">http://www.open-mpi.org/community/lists/users/2015/09/27576.php</a>
</span><br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27578/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27579.php">Matt Thompson: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<li><strong>Previous message:</strong> <a href="27577.php">Ralph Castain: "Re: [OMPI users] runtime MCA parameters"</a>
<li><strong>In reply to:</strong> <a href="27576.php">marcin.krotkiewski: "[OMPI users] runtime MCA parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27584.php">marcin.krotkiewski: "Re: [OMPI users] runtime MCA parameters"</a>
<li><strong>Reply:</strong> <a href="27584.php">marcin.krotkiewski: "Re: [OMPI users] runtime MCA parameters"</a>
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
