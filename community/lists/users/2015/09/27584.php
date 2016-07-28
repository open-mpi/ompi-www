<?
$subject_val = "Re: [OMPI users] runtime MCA parameters";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 16 08:22:06 2015" -->
<!-- isoreceived="20150916122206" -->
<!-- sent="Wed, 16 Sep 2015 14:22:02 +0200" -->
<!-- isosent="20150916122202" -->
<!-- name="marcin.krotkiewski" -->
<!-- email="marcin.krotkiewski_at_[hidden]" -->
<!-- subject="Re: [OMPI users] runtime MCA parameters" -->
<!-- id="55F95EEA.80304_at_gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="20150915175835.GF89926_at_pn1246003.lanl.gov" -->
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
<strong>From:</strong> marcin.krotkiewski (<em>marcin.krotkiewski_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-16 08:22:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27585.php">marcin.krotkiewski: "[OMPI users] bug in MPI_Comm_accept?"</a>
<li><strong>Previous message:</strong> <a href="27583.php">Patrick Begou: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<li><strong>In reply to:</strong> <a href="27578.php">Nathan Hjelm: "Re: [OMPI users] runtime MCA parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27591.php">Jeff Squyres (jsquyres): "Re: [OMPI users] runtime MCA parameters"</a>
<li><strong>Reply:</strong> <a href="27591.php">Jeff Squyres (jsquyres): "Re: [OMPI users] runtime MCA parameters"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks a lot, that looks right! Looks like some reading to do..
<br>
<p>Do you know if in the OpenMPI implementation the MPI_T-interfaced MCA 
<br>
settings are thread-local, or rank-local?
<br>
<p>Thanks!
<br>
<p>Marcin
<br>
<p><p>On 09/15/2015 07:58 PM, Nathan Hjelm wrote:
<br>
<span class="quotelev1">&gt; You can use MPI_T to set any MCA variable before MPI_Init. At this time
</span><br>
<span class="quotelev1">&gt; we lock down all MCA variable during MPI_Init. You will need to call
</span><br>
<span class="quotelev1">&gt; MPI_T_init_thread before MPI_Init and make sure to call MPI_T_finalize
</span><br>
<span class="quotelev1">&gt; any time after you are finished setting MCA variables. For more
</span><br>
<span class="quotelev1">&gt; information see MPI-3.1 chapter 14.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Sep 15, 2015 at 07:40:56PM +0200, marcin.krotkiewski wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I was wondering if it is possible, or considered to make it possible to
</span><br>
<span class="quotelev2">&gt;&gt; change the various MCA parameters by individual ranks during runtime in
</span><br>
<span class="quotelev2">&gt;&gt; addition to the command line?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I tried to google a bit, but did not get any indication that such topic has
</span><br>
<span class="quotelev2">&gt;&gt; even been discussed. It would be a very useful thing, especially in
</span><br>
<span class="quotelev2">&gt;&gt; multi-threaded applications when using MPI_THREAD_MULTIPLE, but I could come
</span><br>
<span class="quotelev2">&gt;&gt; up with plenty uses in usual single-threaded ranks setups.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Marcin
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/09/27576.php">http://www.open-mpi.org/community/lists/users/2015/09/27576.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/09/27578.php">http://www.open-mpi.org/community/lists/users/2015/09/27578.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27584/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27585.php">marcin.krotkiewski: "[OMPI users] bug in MPI_Comm_accept?"</a>
<li><strong>Previous message:</strong> <a href="27583.php">Patrick Begou: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<li><strong>In reply to:</strong> <a href="27578.php">Nathan Hjelm: "Re: [OMPI users] runtime MCA parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27591.php">Jeff Squyres (jsquyres): "Re: [OMPI users] runtime MCA parameters"</a>
<li><strong>Reply:</strong> <a href="27591.php">Jeff Squyres (jsquyres): "Re: [OMPI users] runtime MCA parameters"</a>
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
