<?
$subject_val = "Re: [hwloc-devel] Change bind API.";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 22 07:10:32 2010" -->
<!-- isoreceived="20100322111032" -->
<!-- sent="Mon, 22 Mar 2010 12:10:26 +0100" -->
<!-- isosent="20100322111026" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Change bind API." -->
<!-- id="20100322111025.GD5203_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4BA749BE.5030603_at_inria.fr" -->
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
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-22 07:10:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0782.php">Bert Wesarg: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1840"</a>
<li><strong>Previous message:</strong> <a href="0780.php">Bert Wesarg: "Re: [hwloc-devel] Change bind API."</a>
<li><strong>In reply to:</strong> <a href="0779.php">Brice Goglin: "Re: [hwloc-devel] Change bind API."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0780.php">Bert Wesarg: "Re: [hwloc-devel] Change bind API."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice Goglin, le Mon 22 Mar 2010 11:43:10 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; Samuel Thibault wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Bert Wesarg, le Sun 21 Mar 2010 13:31:14 +0100, a &#233;crit :
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I would like to propose an interface change for these function, so
</span><br>
<span class="quotelev3">&gt; &gt;&gt; that the caller provide the to-be-filled cpuset, to reduce the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; alloc/free frequency.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This is indeed better (and actually reduces the amount of code in
</span><br>
<span class="quotelev2">&gt; &gt; hwloc), I have implemented it.
</span><br>
<span class="quotelev2">&gt; &gt;   
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Should we also convert some other functions that previously returned a
</span><br>
<span class="quotelev1">&gt; newly allocated cpuset ? For instance hwloc_cpuset_from_string and some
</span><br>
<span class="quotelev1">&gt; helpers in the glibc/libnuma/openfabrics headers
</span><br>
<p>Mmm, I'd tend to say so. They were already exposed previously, but at
<br>
least adding a parameter will not go unnoticed.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0782.php">Bert Wesarg: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1840"</a>
<li><strong>Previous message:</strong> <a href="0780.php">Bert Wesarg: "Re: [hwloc-devel] Change bind API."</a>
<li><strong>In reply to:</strong> <a href="0779.php">Brice Goglin: "Re: [hwloc-devel] Change bind API."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0780.php">Bert Wesarg: "Re: [hwloc-devel] Change bind API."</a>
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
