<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Mar 13 12:57:49 2006" -->
<!-- isoreceived="20060313175749" -->
<!-- sent="Mon, 13 Mar 2006 10:57:46 -0700" -->
<!-- isosent="20060313175746" -->
<!-- name="Galen Shipman" -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI and MultiRail InfiniBand" -->
<!-- id="762c6781d986369c4358f2192b89caf8_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="op.s6c13sikies9li_at_rygel.lnxi.com" -->
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
<strong>From:</strong> Galen Shipman (<em>gshipman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-13 12:57:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0843.php">Jean-Christophe Hugly: "Re: [OMPI users] Open MPI and MultiRail InfiniBand"</a>
<li><strong>Previous message:</strong> <a href="0841.php">Troy Telford: "Re: [OMPI users] Open MPI and MultiRail InfiniBand"</a>
<li><strong>In reply to:</strong> <a href="0841.php">Troy Telford: "Re: [OMPI users] Open MPI and MultiRail InfiniBand"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0843.php">Jean-Christophe Hugly: "Re: [OMPI users] Open MPI and MultiRail InfiniBand"</a>
<li><strong>Reply:</strong> <a href="0843.php">Jean-Christophe Hugly: "Re: [OMPI users] Open MPI and MultiRail InfiniBand"</a>
<li><strong>Reply:</strong> <a href="0845.php">Troy Telford: "Re: [OMPI users] Open MPI and MultiRail InfiniBand"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev2">&gt;&gt; This was my oversight, I am getting to it know, should have something
</span><br>
<span class="quotelev2">&gt;&gt; in just a bit.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - Galen
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can live with that, certainly.  Fortunately, there's a couple months
</span><br>
<span class="quotelev1">&gt; until I have a real /need/ for this.
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<p>Hi Troy,
<br>
<p>I have added max_btls to the openib component on the trunk, try:
<br>
<p>mpirun --mca btl_openib_max_btls 1 ...etc
<br>
<p>I don't have a dual nic machine handy to test on, if this checks out we 
<br>
can patch the release branch.
<br>
<p>Thanks,
<br>
<p>Galen
<br>
<p><p><span class="quotelev1">&gt; Troy Telford
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0843.php">Jean-Christophe Hugly: "Re: [OMPI users] Open MPI and MultiRail InfiniBand"</a>
<li><strong>Previous message:</strong> <a href="0841.php">Troy Telford: "Re: [OMPI users] Open MPI and MultiRail InfiniBand"</a>
<li><strong>In reply to:</strong> <a href="0841.php">Troy Telford: "Re: [OMPI users] Open MPI and MultiRail InfiniBand"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0843.php">Jean-Christophe Hugly: "Re: [OMPI users] Open MPI and MultiRail InfiniBand"</a>
<li><strong>Reply:</strong> <a href="0843.php">Jean-Christophe Hugly: "Re: [OMPI users] Open MPI and MultiRail InfiniBand"</a>
<li><strong>Reply:</strong> <a href="0845.php">Troy Telford: "Re: [OMPI users] Open MPI and MultiRail InfiniBand"</a>
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
