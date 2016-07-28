<?
$subject_val = "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 21 12:25:35 2009" -->
<!-- isoreceived="20091021162535" -->
<!-- sent="Wed, 21 Oct 2009 12:25:30 -0400" -->
<!-- isosent="20091021162530" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] ibverbs -&amp;gt; not just infiniband!" -->
<!-- id="15431AEB-EDAD-48FD-A36F-76F7B4ACB546_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20091021142652.GG4693_at_const.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] ibverbs -&gt; not just infiniband!<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-21 12:25:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0207.php">Jeff Squyres: "Re: [hwloc-devel] MPICH2 question"</a>
<li><strong>Previous message:</strong> <a href="0205.php">Pavan Balaji: "Re: [hwloc-devel] MPICH2 question"</a>
<li><strong>In reply to:</strong> <a href="0200.php">Samuel Thibault: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 21, 2009, at 10:26 AM, Samuel Thibault wrote:
<br>
<p><span class="quotelev2">&gt; &gt; What I meant is that *our* ibverbs.h code is Linux specific (it  
</span><br>
<span class="quotelev1">&gt; uses a
</span><br>
<span class="quotelev2">&gt; &gt; sysfs specific nice feature of OFED/Linux).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can't we just make it a real function and not an inline?  As it is now
</span><br>
<span class="quotelev1">&gt; it will not include the linux version in applications since LINUX_SYS
</span><br>
<span class="quotelev1">&gt; won't be defined.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Yep; I have no objection to this.  I don't see much of a need for this  
<br>
function to be inlined.
<br>
<p>Do you want to do it?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0207.php">Jeff Squyres: "Re: [hwloc-devel] MPICH2 question"</a>
<li><strong>Previous message:</strong> <a href="0205.php">Pavan Balaji: "Re: [hwloc-devel] MPICH2 question"</a>
<li><strong>In reply to:</strong> <a href="0200.php">Samuel Thibault: "Re: [hwloc-devel] ibverbs -&gt; not just infiniband!"</a>
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
