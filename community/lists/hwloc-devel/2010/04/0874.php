<?
$subject_val = "Re: [hwloc-devel] comments on API changes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  2 11:46:22 2010" -->
<!-- isoreceived="20100402154622" -->
<!-- sent="Fri, 2 Apr 2010 17:46:17 +0200" -->
<!-- isosent="20100402154617" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] comments on API changes" -->
<!-- id="20100402154617.GY4935_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="59C2C4DB-9F3A-4804-8CE0-63F9D85F7678_at_gmx.ch" -->
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
<strong>Date:</strong> 2010-04-02 11:46:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0875.php">Jeff Squyres: "[hwloc-devel] Embedding: is it worth it?"</a>
<li><strong>Previous message:</strong> <a href="0873.php">Fawzi Mohamed: "Re: [hwloc-devel] comments on API changes"</a>
<li><strong>In reply to:</strong> <a href="0872.php">Fawzi Mohamed: "Re: [hwloc-devel] comments on API changes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fawzi Mohamed, le Fri 02 Apr 2010 17:34:20 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; would be fine with me, planning to add al lot of flags? because there  
</span><br>
<span class="quotelev1">&gt; is still lot of space to grow (and one can later switch to 64 bit... :)
</span><br>
<p>Just switching to 64bits would break the ABI. It's better to just use
<br>
chars and be done with the ABI :)
<br>
<p><span class="quotelev3">&gt; &gt;&gt;HWLOC_OBJ_SYSTEM seems on the way out
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;It isn't :)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;I treated it just as a MACHINE anyway,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;What do you mean by this?  They really are not supposed to be the  
</span><br>
<span class="quotelev2">&gt; &gt;same,
</span><br>
<span class="quotelev2">&gt; &gt;as Brice explained.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I understand, but in the end I am just interested in building a  
</span><br>
<span class="quotelev1">&gt; structure to have a sequence where you first look at neighbors, and  
</span><br>
<span class="quotelev1">&gt; then further and further away, so I use both just as a way got keep  
</span><br>
<span class="quotelev1">&gt; together things that have the same &quot;distance&quot;.
</span><br>
<p>Mmm, I don't understand.  Why would you need to have a look at the type?
<br>
Can't you test the parent pointer to know whether you got at the top of
<br>
the hierarchy?
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0875.php">Jeff Squyres: "[hwloc-devel] Embedding: is it worth it?"</a>
<li><strong>Previous message:</strong> <a href="0873.php">Fawzi Mohamed: "Re: [hwloc-devel] comments on API changes"</a>
<li><strong>In reply to:</strong> <a href="0872.php">Fawzi Mohamed: "Re: [hwloc-devel] comments on API changes"</a>
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
