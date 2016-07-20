<?
$subject_val = "Re: [hwloc-users] configure fails to detect cuda";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  3 16:14:20 2015" -->
<!-- isoreceived="20150603201420" -->
<!-- sent="Wed, 3 Jun 2015 20:14:19 +0000" -->
<!-- isosent="20150603201419" -->
<!-- name="Wagner, Mathias" -->
<!-- email="mathwagn_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] configure fails to detect cuda" -->
<!-- id="60C0943D-97FF-49A9-90C7-7D981B29A23A_at_indiana.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="556F5D53.7070605_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] configure fails to detect cuda<br>
<strong>From:</strong> Wagner, Mathias (<em>mathwagn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-03 16:14:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1170.php">Fabricio Cannini: "Re: [hwloc-users] linking libcudart and libnvml only to the plugins"</a>
<li><strong>Previous message:</strong> <a href="1168.php">Fabricio Cannini: "Re: [hwloc-users] configure fails to detect cuda"</a>
<li><strong>In reply to:</strong> <a href="1168.php">Fabricio Cannini: "Re: [hwloc-users] configure fails to detect cuda"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks, Fabricio!
<br>
<p>That worked. 
<br>
<p><span class="quotelev1">&gt; On Jun 3, 2015, at 16:02, Fabricio Cannini &lt;fcannini_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Try this before './configure --option-x --option-y --enable-cuda' :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; export CPPFLAGS=&quot;-I/cuda/include/dir&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; export LD_FLAGS=&quot;-L/cuda/libs/dir -lcudart&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [ ]'s
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1170.php">Fabricio Cannini: "Re: [hwloc-users] linking libcudart and libnvml only to the plugins"</a>
<li><strong>Previous message:</strong> <a href="1168.php">Fabricio Cannini: "Re: [hwloc-users] configure fails to detect cuda"</a>
<li><strong>In reply to:</strong> <a href="1168.php">Fabricio Cannini: "Re: [hwloc-users] configure fails to detect cuda"</a>
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
