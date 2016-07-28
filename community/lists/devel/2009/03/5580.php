<?
$subject_val = "Re: [OMPI devel] calling sendi earlier in the PML";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  4 20:26:36 2009" -->
<!-- isoreceived="20090305012636" -->
<!-- sent="Wed, 04 Mar 2009 17:26:05 -0800" -->
<!-- isosent="20090305012605" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] calling sendi earlier in the PML" -->
<!-- id="49AF2A2D.7050804_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="alpine.DEB.1.10.0903041811330.4744_at_marvin.we-be-smart.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] calling sendi earlier in the PML<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-04 20:26:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5581.php">Jeff Squyres: "[OMPI devel] Fwd: Mercurial 1.2 released!"</a>
<li><strong>Previous message:</strong> <a href="5579.php">Eugene Loh: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<li><strong>In reply to:</strong> <a href="5578.php">Brian W. Barrett: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5579.php">Eugene Loh: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian W. Barrett wrote:
<br>
<p><span class="quotelev1">&gt; How about removing the MCA parameter from my earlier proposal and just 
</span><br>
<span class="quotelev1">&gt; having r2 filter out the sendi calls if there are multiple BTLs with 
</span><br>
<span class="quotelev1">&gt; heterogeneous BTLs (ie, some with sendi and some without) to the same 
</span><br>
<span class="quotelev1">&gt; peer.  That way, the early sendi will be bypassed in that case.  But 
</span><br>
<span class="quotelev1">&gt; for the cases of BTLs that support sendi in common usage scenarios 
</span><br>
<span class="quotelev1">&gt; (homogeneous nics), we'll get the optimization?  Does that offend you 
</span><br>
<span class="quotelev1">&gt; George? :)
</span><br>
<p>I think I'm just going to punt.  The PML strikes me as very complicated 
<br>
and in a certain sense brittle.  You talked in San Jose about putting 
<br>
the PML on a diet.  Great.  Go for it.  For a newbie like me, it's a 
<br>
labyrinth.
<br>
<p>Here's another example.  Even if you only go for the cases where 
<br>
everyone has (or does not have) a sendi function, they may have 
<br>
different eager limits.  (Though, somehow there is a well-defined list 
<br>
of &quot;eager&quot; BTLs that does not depend on message length.  Ain't life 
<br>
interesting!)  So, you run into the same problem of not preserving 
<br>
today's BTL-looping order.  If you want to preserve the current behavior 
<br>
-- looping over BTLs and trying all your tricks for each one 
<br>
(sendi/send, eager/long, etc.) before moving on to the next BTL -- 
<br>
you're back to diving deep into the PML code, at which point the send 
<br>
request has been initialized and you've eaten up a lot of instructions.
<br>
<p>I don't think I have sufficient expertise, mandate, or remaining energy 
<br>
to be effective here.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5581.php">Jeff Squyres: "[OMPI devel] Fwd: Mercurial 1.2 released!"</a>
<li><strong>Previous message:</strong> <a href="5579.php">Eugene Loh: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<li><strong>In reply to:</strong> <a href="5578.php">Brian W. Barrett: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5579.php">Eugene Loh: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
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
