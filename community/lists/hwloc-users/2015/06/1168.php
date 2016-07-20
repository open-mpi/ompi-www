<?
$subject_val = "Re: [hwloc-users] configure fails to detect cuda";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  3 16:02:30 2015" -->
<!-- isoreceived="20150603200230" -->
<!-- sent="Wed, 03 Jun 2015 17:02:27 -0300" -->
<!-- isosent="20150603200227" -->
<!-- name="Fabricio Cannini" -->
<!-- email="fcannini_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] configure fails to detect cuda" -->
<!-- id="556F5D53.7070605_at_gmail.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="1E4D8129-7603-41D2-A638-922A0E7DCC46_at_indiana.edu" -->
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
<strong>From:</strong> Fabricio Cannini (<em>fcannini_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-03 16:02:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1169.php">Wagner, Mathias: "Re: [hwloc-users] configure fails to detect cuda"</a>
<li><strong>Previous message:</strong> <a href="1167.php">Wagner, Mathias: "[hwloc-users] configure fails to detect cuda"</a>
<li><strong>In reply to:</strong> <a href="1167.php">Wagner, Mathias: "[hwloc-users] configure fails to detect cuda"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1169.php">Wagner, Mathias: "Re: [hwloc-users] configure fails to detect cuda"</a>
<li><strong>Reply:</strong> <a href="1169.php">Wagner, Mathias: "Re: [hwloc-users] configure fails to detect cuda"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 03-06-2015 16:37, Wagner, Mathias wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to build hwloc to use with cuda applications.
</span><br>
<span class="quotelev1">&gt; I have cuda installed on my system but it is not detected by configure.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I included the pkgconfig directory from CUDA in the PKG_CONFIG_PATH on my system and pkg-config called separately detects cuda 6.5.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, when I run configure the checks for cuda return no. I tried with and without the &#226;&#128;&#148;enable-cuda option.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any ideas what I can do?
</span><br>
<p>Hello,
<br>
<p>Try this before './configure --option-x --option-y --enable-cuda' :
<br>
<p>export CPPFLAGS=&quot;-I/cuda/include/dir&quot;
<br>
<p>export LD_FLAGS=&quot;-L/cuda/libs/dir -lcudart&quot;
<br>
<p>[ ]'s
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1169.php">Wagner, Mathias: "Re: [hwloc-users] configure fails to detect cuda"</a>
<li><strong>Previous message:</strong> <a href="1167.php">Wagner, Mathias: "[hwloc-users] configure fails to detect cuda"</a>
<li><strong>In reply to:</strong> <a href="1167.php">Wagner, Mathias: "[hwloc-users] configure fails to detect cuda"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1169.php">Wagner, Mathias: "Re: [hwloc-users] configure fails to detect cuda"</a>
<li><strong>Reply:</strong> <a href="1169.php">Wagner, Mathias: "Re: [hwloc-users] configure fails to detect cuda"</a>
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
