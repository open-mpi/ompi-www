<?
$subject_val = "Re: [OMPI devel] sm_coll segv";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 11 10:33:58 2009" -->
<!-- isoreceived="20090811143358" -->
<!-- sent="Tue, 11 Aug 2009 10:33:53 -0400" -->
<!-- isosent="20090811143353" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] sm_coll segv" -->
<!-- id="40859280-C181-47EC-8EF9-802CE4732832_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="453d39990908100847h4059843ck1c3deb2e71e61e9a_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2009-08-11 10:33:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6615.php">Mike Dubman: "[OMPI devel] Error: system limit exceeded on number of pipes that can be open"</a>
<li><strong>Previous message:</strong> <a href="6613.php">Jeff Squyres: "Re: [OMPI devel] sm_coll segv"</a>
<li><strong>In reply to:</strong> <a href="6612.php">Lenny Verkhovsky: "Re: [OMPI devel] sm_coll segv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6613.php">Jeff Squyres: "Re: [OMPI devel] sm_coll segv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 10, 2009, at 11:47 AM, Lenny Verkhovsky wrote:
<br>
<p><span class="quotelev1">&gt; I also have another question
</span><br>
<span class="quotelev1">&gt; $ompi_info -aa|grep mpool |grep sm
</span><br>
<span class="quotelev1">&gt;   MCA coll: parameter &quot;coll_sm_mpool&quot; (current value: &quot;sm&quot;, data  
</span><br>
<span class="quotelev1">&gt; source: default value)
</span><br>
<span class="quotelev1">&gt;   MCA mpool: parameter &quot;mpool_sm_allocator&quot; (current value:  
</span><br>
<span class="quotelev1">&gt; &quot;bucket&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; what do these names mean, and dont they have to be the same ?
</span><br>
<p>mpool != allocator.
<br>
<p>mpool is the thing that gets new memory.  allocator is the thing that  
<br>
doles out chunks from the memory that came from the mpool.
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
<li><strong>Next message:</strong> <a href="6615.php">Mike Dubman: "[OMPI devel] Error: system limit exceeded on number of pipes that can be open"</a>
<li><strong>Previous message:</strong> <a href="6613.php">Jeff Squyres: "Re: [OMPI devel] sm_coll segv"</a>
<li><strong>In reply to:</strong> <a href="6612.php">Lenny Verkhovsky: "Re: [OMPI devel] sm_coll segv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6613.php">Jeff Squyres: "Re: [OMPI devel] sm_coll segv"</a>
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
