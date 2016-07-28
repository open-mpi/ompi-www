<?
$subject_val = "Re: [hwloc-devel] Change bind API.";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 22 06:43:18 2010" -->
<!-- isoreceived="20100322104318" -->
<!-- sent="Mon, 22 Mar 2010 11:43:10 +0100" -->
<!-- isosent="20100322104310" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Change bind API." -->
<!-- id="4BA749BE.5030603_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20100322102156.GB5203_at_const.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Change bind API.<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-22 06:43:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0780.php">Bert Wesarg: "Re: [hwloc-devel] Change bind API."</a>
<li><strong>Previous message:</strong> <a href="0778.php">Samuel Thibault: "Re: [hwloc-devel] Change bind API."</a>
<li><strong>In reply to:</strong> <a href="0778.php">Samuel Thibault: "Re: [hwloc-devel] Change bind API."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0781.php">Samuel Thibault: "Re: [hwloc-devel] Change bind API."</a>
<li><strong>Reply:</strong> <a href="0781.php">Samuel Thibault: "Re: [hwloc-devel] Change bind API."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Samuel Thibault wrote:
<br>
<span class="quotelev1">&gt; Bert Wesarg, le Sun 21 Mar 2010 13:31:14 +0100, a &#233;crit :
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; I would like to propose an interface change for these function, so
</span><br>
<span class="quotelev2">&gt;&gt; that the caller provide the to-be-filled cpuset, to reduce the
</span><br>
<span class="quotelev2">&gt;&gt; alloc/free frequency.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is indeed better (and actually reduces the amount of code in
</span><br>
<span class="quotelev1">&gt; hwloc), I have implemented it.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Should we also convert some other functions that previously returned a
<br>
newly allocated cpuset ? For instance hwloc_cpuset_from_string and some
<br>
helpers in the glibc/libnuma/openfabrics headers
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0780.php">Bert Wesarg: "Re: [hwloc-devel] Change bind API."</a>
<li><strong>Previous message:</strong> <a href="0778.php">Samuel Thibault: "Re: [hwloc-devel] Change bind API."</a>
<li><strong>In reply to:</strong> <a href="0778.php">Samuel Thibault: "Re: [hwloc-devel] Change bind API."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0781.php">Samuel Thibault: "Re: [hwloc-devel] Change bind API."</a>
<li><strong>Reply:</strong> <a href="0781.php">Samuel Thibault: "Re: [hwloc-devel] Change bind API."</a>
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
