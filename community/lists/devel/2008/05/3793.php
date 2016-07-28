<?
$subject_val = "Re: [OMPI devel] MCA component open";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  2 09:56:24 2008" -->
<!-- isoreceived="20080502135624" -->
<!-- sent="Fri, 2 May 2008 09:53:41 -0400" -->
<!-- isosent="20080502135341" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MCA component open" -->
<!-- id="1BE85D0A-B5FB-4B0C-959C-E457AC65ADA4_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C44077C5.5043%rhc_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MCA component open<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-02 09:53:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3794.php">Jeff Squyres: "[OMPI devel] cpc openib stuff"</a>
<li><strong>Previous message:</strong> <a href="3792.php">Brad Penoff: "Re: [OMPI devel] Build failure on FreeBSD 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3795.php">Ralph Castain: "Re: [OMPI devel] MCA component open"</a>
<li><strong>Reply:</strong> <a href="3795.php">Ralph Castain: "Re: [OMPI devel] MCA component open"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
(moving to devel list for wider audience)
<br>
<p>Hmm.  I thought the UTK stuff from a while ago supposedly changed this  
<br>
behavior to only open the components that were specifically requested.
<br>
<p>This behavior looks like the *original* MCA behavior -- open them all,  
<br>
then discard what we don't want (but doesn't necessarily reclaim the  
<br>
memory because of how dlclose works).
<br>
<p><p>On May 2, 2008, at 9:48 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Yo guys
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've noticed something on the trunk that just doesn't strike me as  
</span><br>
<span class="quotelev1">&gt; correct.
</span><br>
<span class="quotelev1">&gt; If I specify &quot;-mca plm rsh&quot;, it is my expectation that (a) only the  
</span><br>
<span class="quotelev1">&gt; rsh
</span><br>
<span class="quotelev1">&gt; component will be opened, and (b) only the rsh module will be  
</span><br>
<span class="quotelev1">&gt; selected,
</span><br>
<span class="quotelev1">&gt; unless that component indicates that it cannot run.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What I am seeing, though, is that -all- the plm components are being  
</span><br>
<span class="quotelev1">&gt; opened.
</span><br>
<span class="quotelev1">&gt; This is not only unnecessary, but consumes memory and leads to  
</span><br>
<span class="quotelev1">&gt; concern over
</span><br>
<span class="quotelev1">&gt; whether or not some other module could become active.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this the intended behavior? If so, may I suggest we change it in  
</span><br>
<span class="quotelev1">&gt; Josh's
</span><br>
<span class="quotelev1">&gt; branch prior to bringing it over?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3794.php">Jeff Squyres: "[OMPI devel] cpc openib stuff"</a>
<li><strong>Previous message:</strong> <a href="3792.php">Brad Penoff: "Re: [OMPI devel] Build failure on FreeBSD 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3795.php">Ralph Castain: "Re: [OMPI devel] MCA component open"</a>
<li><strong>Reply:</strong> <a href="3795.php">Ralph Castain: "Re: [OMPI devel] MCA component open"</a>
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
