<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Nov  9 12:13:17 2005" -->
<!-- isoreceived="20051109171317" -->
<!-- sent="Wed, 09 Nov 2005 10:13:02 -0700" -->
<!-- isosent="20051109171302" -->
<!-- name="Troy Telford" -->
<!-- email="ttelford_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] OpenIB module problem/questions:" -->
<!-- id="op.szzgr0gfies9li_at_rygel.lnxi.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="F6CC2373-2B24-4657-B125-ED42C1F33705_at_lanl.gov" -->
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
<strong>From:</strong> Troy Telford (<em>ttelford_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-09 12:13:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0297.php">Charles Williams: "Re: [O-MPI users] Questions about pmpi_wtick and pmpi_wtime"</a>
<li><strong>Previous message:</strong> <a href="0295.php">Galen M. Shipman: "Re: [O-MPI users] OpenIB module problem/questions:"</a>
<li><strong>In reply to:</strong> <a href="0295.php">Galen M. Shipman: "Re: [O-MPI users] OpenIB module problem/questions:"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 09 Nov 2005 08:44:50 -0700, Galen M. Shipman &lt;gshipman_at_[hidden]&gt;  
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; This error is occurring when Open MPI attempts to open the Infiniband
</span><br>
<span class="quotelev1">&gt; device mthca0. This doesn't appear to be an Open MPI issue, it looks
</span><br>
<span class="quotelev1">&gt; like a configuration issue with OpenIB. What do you find under /sys/
</span><br>
<span class="quotelev1">&gt; class/infiniband/ ?
</span><br>
<p>Under sys/class/infiniband, there's anohter folder named 'mthca0'; the  
<br>
folder itself is also far from empty; containing things like the board_id,  
<br>
firmware version fw_ver, etc.
<br>
<p><span class="quotelev1">&gt; You might also want to recheck your OpenIB installation.
</span><br>
<p>Everything is fine.... Except for that one little omission:
<br>
<p>KERNEL=&quot;umad*&quot;, NAME=&quot;infiniband/%k&quot;
<br>
KERNEL=&quot;issm*&quot;, NAME=&quot;infiniband/%k&quot;
<br>
KERNEL=&quot;uverbs*&quot;, NAME=&quot;infiniband/%k&quot;, MODE=&quot;0666&quot;
<br>
KERNEL=&quot;ucm&quot;, NAME=&quot;infiniband/%k&quot;, MODE=&quot;0666&quot;
<br>
<p>in my udev configuration.
<br>
<p>&lt;insert soundbyte of Homer Simpson:  D'oh!!!!&gt;
<br>
<p>So now I'll go pound on it.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0297.php">Charles Williams: "Re: [O-MPI users] Questions about pmpi_wtick and pmpi_wtime"</a>
<li><strong>Previous message:</strong> <a href="0295.php">Galen M. Shipman: "Re: [O-MPI users] OpenIB module problem/questions:"</a>
<li><strong>In reply to:</strong> <a href="0295.php">Galen M. Shipman: "Re: [O-MPI users] OpenIB module problem/questions:"</a>
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
