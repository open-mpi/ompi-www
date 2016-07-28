<?
$subject_val = "Re: [OMPI devel] sm_coll segv";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 11 10:33:18 2009" -->
<!-- isoreceived="20090811143318" -->
<!-- sent="Tue, 11 Aug 2009 10:33:13 -0400" -->
<!-- isosent="20090811143313" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] sm_coll segv" -->
<!-- id="6EEFA4BB-3621-48B4-B7C7-AA4DCBC87828_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="453d39990908100711p7dbd5646q2867fea22c8c59d_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] sm_coll segv<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-11 10:33:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6614.php">Jeff Squyres: "Re: [OMPI devel] sm_coll segv"</a>
<li><strong>Previous message:</strong> <a href="6612.php">Lenny Verkhovsky: "Re: [OMPI devel] sm_coll segv"</a>
<li><strong>In reply to:</strong> <a href="6611.php">Lenny Verkhovsky: "Re: [OMPI devel] sm_coll segv"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 10, 2009, at 10:11 AM, Lenny Verkhovsky wrote:
<br>
<p><span class="quotelev1">&gt; Don't these allocations of  bshe-&gt;smbhe_keys require some kind of  
</span><br>
<span class="quotelev1">&gt; memory translation from 1 proc's memory space to another ( in  
</span><br>
<span class="quotelev1">&gt; bootstrap_init function /ompi/mca/coll/sm/coll_sm_module.c )
</span><br>
<span class="quotelev1">&gt; If local rank0 allocates ( get attached to ) memory, others can't  
</span><br>
<span class="quotelev1">&gt; read it without proper tranlsation.
</span><br>
<p>Ugh -- you may be completely right here.  If that's the case, I'm a  
<br>
total bozo; I don't know how I would have missed that when I wrote  
<br>
this stuff several years ago.  But it would explain some of the  
<br>
behavior that we have been seeing.  I'll dig; thanks.
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
<li><strong>Next message:</strong> <a href="6614.php">Jeff Squyres: "Re: [OMPI devel] sm_coll segv"</a>
<li><strong>Previous message:</strong> <a href="6612.php">Lenny Verkhovsky: "Re: [OMPI devel] sm_coll segv"</a>
<li><strong>In reply to:</strong> <a href="6611.php">Lenny Verkhovsky: "Re: [OMPI devel] sm_coll segv"</a>
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
