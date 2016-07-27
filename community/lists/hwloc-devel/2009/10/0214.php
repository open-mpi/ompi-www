<?
$subject_val = "Re: [hwloc-devel] MPICH2 question";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 21 13:50:48 2009" -->
<!-- isoreceived="20091021175048" -->
<!-- sent="Wed, 21 Oct 2009 13:50:42 -0400" -->
<!-- isosent="20091021175042" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] MPICH2 question" -->
<!-- id="DBE8E335-91D9-4A4F-A4C0-9DF08F9D4796_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20091021171844.GB11538_at_const.famille.thibault.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] MPICH2 question<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-21 13:50:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0215.php">Jeff Squyres: "[hwloc-devel] Trac ticket mails"</a>
<li><strong>Previous message:</strong> <a href="0213.php">Pavan Balaji: "Re: [hwloc-devel] [hwloc] #16: hwloc build fails with strict	compiler flags"</a>
<li><strong>In reply to:</strong> <a href="0211.php">Samuel Thibault: "Re: [hwloc-devel] MPICH2 question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0212.php">Pavan Balaji: "Re: [hwloc-devel] MPICH2 question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 21, 2009, at 1:18 PM, Samuel Thibault wrote:
<br>
<p><span class="quotelev2">&gt; &gt; configuring/building hwloc with icc results in a *lot*
</span><br>
<span class="quotelev2">&gt; &gt; of warnings; I didn't test functionality).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mmm, I have already successfully tested with icc9.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The kind of warnings I've seen were not worth fixing to my mind:  
</span><br>
<span class="quotelev1">&gt; unused
</span><br>
<span class="quotelev1">&gt; parameters, mostly, are you using some particular option?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>I didn't look closely at what the warnings were -- I just saw a lot of  
<br>
them go by.  I can look closer.
<br>
<p>I didn't use any particular configure options -- just --prefix.  This  
<br>
was on RHEL4 using icc 11.1.056 (I just updated my intel compilers  
<br>
this morning to the latest latest latest).
<br>
<p>(/me looks closer)
<br>
<p>Wow, you're right -- there's *truckloads* of variable-never-referenced  
<br>
and variable-set-but-not-used warnings.  Those should be cleaned up  
<br>
IMHO, but they can wait until after 0.9.1, also IMHO.  I'll file a  
<br>
ticket against 1.0.
<br>
<p>My pathscale compiler license has expired, and the license server for  
<br>
my PGI license has gone down -- so I can't check any other compilers  
<br>
at the moment.
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
<li><strong>Next message:</strong> <a href="0215.php">Jeff Squyres: "[hwloc-devel] Trac ticket mails"</a>
<li><strong>Previous message:</strong> <a href="0213.php">Pavan Balaji: "Re: [hwloc-devel] [hwloc] #16: hwloc build fails with strict	compiler flags"</a>
<li><strong>In reply to:</strong> <a href="0211.php">Samuel Thibault: "Re: [hwloc-devel] MPICH2 question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0212.php">Pavan Balaji: "Re: [hwloc-devel] MPICH2 question"</a>
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
