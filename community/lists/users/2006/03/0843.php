<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Mar 13 13:57:50 2006" -->
<!-- isoreceived="20060313185750" -->
<!-- sent="Mon, 13 Mar 2006 10:56:21 -0800" -->
<!-- isosent="20060313185621" -->
<!-- name="Jean-Christophe Hugly" -->
<!-- email="jice_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI and MultiRail InfiniBand" -->
<!-- id="1142276181.7558.458.camel_at_jhugly.pantasys.com" -->
<!-- inreplyto="762c6781d986369c4358f2192b89caf8_at_lanl.gov" -->
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
<strong>From:</strong> Jean-Christophe Hugly (<em>jice_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-13 13:56:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0844.php">Pierre Valiron: "Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11"</a>
<li><strong>Previous message:</strong> <a href="0842.php">Galen Shipman: "Re: [OMPI users] Open MPI and MultiRail InfiniBand"</a>
<li><strong>In reply to:</strong> <a href="0842.php">Galen Shipman: "Re: [OMPI users] Open MPI and MultiRail InfiniBand"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0845.php">Troy Telford: "Re: [OMPI users] Open MPI and MultiRail InfiniBand"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 2006-03-13 at 10:57 -0700, Galen Shipman wrote:
<br>
<span class="quotelev3">&gt; &gt;&gt; This was my oversight, I am getting to it know, should have something
</span><br>
<span class="quotelev3">&gt; &gt;&gt; in just a bit.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; - Galen
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I can live with that, certainly.  Fortunately, there's a couple months
</span><br>
<span class="quotelev2">&gt; &gt; until I have a real /need/ for this.
</span><br>
<span class="quotelev2">&gt; &gt; -- 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Troy,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have added max_btls to the openib component on the trunk, try:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun --mca btl_openib_max_btls 1 ...etc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't have a dual nic machine handy to test on, if this checks out we 
</span><br>
<span class="quotelev1">&gt; can patch the release branch.
</span><br>
<p>Actually you do...:-)
<br>
<p>Please let me know if you ever intend to use that system. I am now
<br>
letting someone else use it, but it can be shared.
<br>
<p><pre>
-- 
Jean-Christophe Hugly &lt;jice_at_[hidden]&gt;
PANTA
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0844.php">Pierre Valiron: "Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11"</a>
<li><strong>Previous message:</strong> <a href="0842.php">Galen Shipman: "Re: [OMPI users] Open MPI and MultiRail InfiniBand"</a>
<li><strong>In reply to:</strong> <a href="0842.php">Galen Shipman: "Re: [OMPI users] Open MPI and MultiRail InfiniBand"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0845.php">Troy Telford: "Re: [OMPI users] Open MPI and MultiRail InfiniBand"</a>
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
