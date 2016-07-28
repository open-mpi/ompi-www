<?
$subject_val = "Re: [hwloc-devel] comments on API changes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  2 11:34:25 2010" -->
<!-- isoreceived="20100402153425" -->
<!-- sent="Fri, 2 Apr 2010 17:34:20 +0200" -->
<!-- isosent="20100402153420" -->
<!-- name="Fawzi Mohamed" -->
<!-- email="fawzi_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] comments on API changes" -->
<!-- id="59C2C4DB-9F3A-4804-8CE0-63F9D85F7678_at_gmx.ch" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20100402141603.GN4935_at_const.bordeaux.inria.fr" -->
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
<strong>From:</strong> Fawzi Mohamed (<em>fawzi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-02 11:34:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0873.php">Fawzi Mohamed: "Re: [hwloc-devel] comments on API changes"</a>
<li><strong>Previous message:</strong> <a href="0871.php">Samuel Thibault: "Re: [hwloc-devel] comments on API changes"</a>
<li><strong>In reply to:</strong> <a href="0870.php">Samuel Thibault: "Re: [hwloc-devel] comments on API changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0874.php">Samuel Thibault: "Re: [hwloc-devel] comments on API changes"</a>
<li><strong>Reply:</strong> <a href="0874.php">Samuel Thibault: "Re: [hwloc-devel] comments on API changes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 2-apr-10, at 16:16, Samuel Thibault wrote:
<br>
<p><span class="quotelev1">&gt; Fawzi Mohamed, le Fri 02 Apr 2010 12:34:58 +0200, a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; flags attributes:
</span><br>
<span class="quotelev2">&gt;&gt; C bitfields are used, normally they are avoided because they are slow
</span><br>
<span class="quotelev2">&gt;&gt; (a compiler can bit or at compile time the constants and check/set
</span><br>
<span class="quotelev2">&gt;&gt; several at once.
</span><br>
<span class="quotelev2">&gt;&gt; Speed is not a concern here, but in any case I am wrapping to D that
</span><br>
<span class="quotelev2">&gt;&gt; does not support bitfields directly, so I used flags, I was just
</span><br>
<span class="quotelev2">&gt;&gt; wondering why bitfields were used...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mmm, thinking twice about it.  As Brice mentioned, this is not really
</span><br>
<span class="quotelev1">&gt; performance-critical.  But since it's not performance-critical, it is
</span><br>
<span class="quotelev1">&gt; probably not a problem to just use chars here.  Also, maybe we can  
</span><br>
<span class="quotelev1">&gt; use a
</span><br>
<span class="quotelev1">&gt; level of pointer to avoid any ABI issue when adding fields?
</span><br>
<p>would be fine with me, planning to add al lot of flags? because there  
<br>
is still lot of space to grow (and one can later switch to 64 bit... :)
<br>
<p><span class="quotelev2">&gt;&gt; HWLOC_OBJ_SYSTEM seems on the way out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It isn't :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I treated it just as a MACHINE anyway,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What do you mean by this?  They really are not supposed to be the  
</span><br>
<span class="quotelev1">&gt; same,
</span><br>
<span class="quotelev1">&gt; as Brice explained.
</span><br>
<p>I understand, but in the end I am just interested in building a  
<br>
structure to have a sequence where you first look at neighbors, and  
<br>
then further and further away, so I use both just as a way got keep  
<br>
together things that have the same &quot;distance&quot;.
<br>
It is not strictly correct, but seems to work well in practice...
<br>
<p>Fawzi
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0873.php">Fawzi Mohamed: "Re: [hwloc-devel] comments on API changes"</a>
<li><strong>Previous message:</strong> <a href="0871.php">Samuel Thibault: "Re: [hwloc-devel] comments on API changes"</a>
<li><strong>In reply to:</strong> <a href="0870.php">Samuel Thibault: "Re: [hwloc-devel] comments on API changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0874.php">Samuel Thibault: "Re: [hwloc-devel] comments on API changes"</a>
<li><strong>Reply:</strong> <a href="0874.php">Samuel Thibault: "Re: [hwloc-devel] comments on API changes"</a>
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
