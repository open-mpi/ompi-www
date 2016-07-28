<?
$subject_val = "Re: [hwloc-devel] comments on API changes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  2 10:16:09 2010" -->
<!-- isoreceived="20100402141609" -->
<!-- sent="Fri, 2 Apr 2010 16:16:03 +0200" -->
<!-- isosent="20100402141603" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] comments on API changes" -->
<!-- id="20100402141603.GN4935_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="6A9BE30E-8702-433B-ABA2-75237DEBEF17_at_gmx.ch" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] comments on API changes<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-02 10:16:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0871.php">Samuel Thibault: "Re: [hwloc-devel] comments on API changes"</a>
<li><strong>Previous message:</strong> <a href="0869.php">Fawzi Mohamed: "Re: [hwloc-devel] comments on API changes"</a>
<li><strong>In reply to:</strong> <a href="0863.php">Fawzi Mohamed: "[hwloc-devel] comments on API changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0872.php">Fawzi Mohamed: "Re: [hwloc-devel] comments on API changes"</a>
<li><strong>Reply:</strong> <a href="0872.php">Fawzi Mohamed: "Re: [hwloc-devel] comments on API changes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fawzi Mohamed, le Fri 02 Apr 2010 12:34:58 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; flags attributes:
</span><br>
<span class="quotelev1">&gt; C bitfields are used, normally they are avoided because they are slow  
</span><br>
<span class="quotelev1">&gt; (a compiler can bit or at compile time the constants and check/set  
</span><br>
<span class="quotelev1">&gt; several at once.
</span><br>
<span class="quotelev1">&gt; Speed is not a concern here, but in any case I am wrapping to D that  
</span><br>
<span class="quotelev1">&gt; does not support bitfields directly, so I used flags, I was just  
</span><br>
<span class="quotelev1">&gt; wondering why bitfields were used...
</span><br>
<p>Mmm, thinking twice about it.  As Brice mentioned, this is not really
<br>
performance-critical.  But since it's not performance-critical, it is
<br>
probably not a problem to just use chars here.  Also, maybe we can use a
<br>
level of pointer to avoid any ABI issue when adding fields?
<br>
<p><span class="quotelev1">&gt; HWLOC_OBJ_SYSTEM seems on the way out
</span><br>
<p>It isn't :)
<br>
<p><span class="quotelev1">&gt; I treated it just as a MACHINE anyway,
</span><br>
<p>What do you mean by this?  They really are not supposed to be the same,
<br>
as Brice explained.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0871.php">Samuel Thibault: "Re: [hwloc-devel] comments on API changes"</a>
<li><strong>Previous message:</strong> <a href="0869.php">Fawzi Mohamed: "Re: [hwloc-devel] comments on API changes"</a>
<li><strong>In reply to:</strong> <a href="0863.php">Fawzi Mohamed: "[hwloc-devel] comments on API changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0872.php">Fawzi Mohamed: "Re: [hwloc-devel] comments on API changes"</a>
<li><strong>Reply:</strong> <a href="0872.php">Fawzi Mohamed: "Re: [hwloc-devel] comments on API changes"</a>
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
