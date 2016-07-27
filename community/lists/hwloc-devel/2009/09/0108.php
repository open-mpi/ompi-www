<?
$subject_val = "Re: [hwloc-devel] structure assumptions, duplication";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 29 13:57:52 2009" -->
<!-- isoreceived="20090929175752" -->
<!-- sent="Tue, 29 Sep 2009 19:57:45 +0200" -->
<!-- isosent="20090929175745" -->
<!-- name="Fawzi Mohamed" -->
<!-- email="fawzi_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] structure assumptions, duplication" -->
<!-- id="20C12672-AE7E-4113-B690-67E7060626F8_at_gmx.ch" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20090929170853.GB25109_at_const.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] structure assumptions, duplication<br>
<strong>From:</strong> Fawzi Mohamed (<em>fawzi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-29 13:57:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0109.php">Fawzi Mohamed: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
<li><strong>Previous message:</strong> <a href="0107.php">Samuel Thibault: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
<li><strong>In reply to:</strong> <a href="0105.php">Samuel Thibault: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0113.php">Fawzi Mohamed: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<li><strong>Reply:</strong> <a href="0113.php">Fawzi Mohamed: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 29-set-09, at 19:08, Samuel Thibault wrote:
<br>
<p><span class="quotelev1">&gt; Fawzi Mohamed, le Tue 29 Sep 2009 18:55:27 +0200, a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; cpuset -&gt; cpuset_ptr (or just a flag that says if the structure has
</span><br>
<span class="quotelev2">&gt;&gt; it, and thus two structures, a long one with it and a short one
</span><br>
<span class="quotelev2">&gt;&gt; without, differing only in the tail if you really want to be hacky).
</span><br>
<span class="quotelev2">&gt;&gt; Then cpuset is generated on the fly for the deepest level (like less
</span><br>
<span class="quotelev2">&gt;&gt; than 4-8 proc -&gt;  lots of memory savings on large machines).
</span><br>
<span class="quotelev2">&gt;&gt; (cost 1 function, and copying or building the cpuset)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Even for a machine with 1024 processors that amounts to just 128KB
</span><br>
<span class="quotelev1">&gt; saving.  Even if you replicate it on each NUMA node, such nodes  
</span><br>
<span class="quotelev1">&gt; usually
</span><br>
<span class="quotelev1">&gt; have GBs of memory.  Is it really worth spending efforts to save  
</span><br>
<span class="quotelev1">&gt; it? :)
</span><br>
<p>ok I will stop asking, those were just things that I was thinking when  
<br>
I began to work with the code... because my impression is that the  
<br>
memory per core is not increasing much anymore and some processor  
<br>
design advocate massive multithreading to hide memory latency, but  
<br>
maybe memory starved blue gene/L are indeed of the past, I just  
<br>
checked and the /Q version should have 1GB per core from what they  
<br>
say...
<br>
<p>I did just throw them there, make what you want of them...
<br>
<p>You know the newcomers worry about the investment and choices they are  
<br>
doing :)
<br>
<p>ciao
<br>
Fawzi
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0109.php">Fawzi Mohamed: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
<li><strong>Previous message:</strong> <a href="0107.php">Samuel Thibault: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
<li><strong>In reply to:</strong> <a href="0105.php">Samuel Thibault: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0113.php">Fawzi Mohamed: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<li><strong>Reply:</strong> <a href="0113.php">Fawzi Mohamed: "Re: [hwloc-devel] structure assumptions, duplication"</a>
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
