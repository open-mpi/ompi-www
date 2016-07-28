<?
$subject_val = "Re: [OMPI devel] adding new functions to a BTL";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 23 08:15:19 2008" -->
<!-- isoreceived="20081023121519" -->
<!-- sent="Thu, 23 Oct 2008 08:14:19 -0400" -->
<!-- isosent="20081023121419" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] adding new functions to a BTL" -->
<!-- id="93F59C0C-20D1-4BA4-8465-95147C05827D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20081022215133.GA9160_at_ins.uni-bonn.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] adding new functions to a BTL<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-23 08:14:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4805.php">Jeff Squyres: "Re: [OMPI devel] Component open"</a>
<li><strong>Previous message:</strong> <a href="4803.php">Leonardo Fialho: "Re: [OMPI devel] Restarting processes on different node"</a>
<li><strong>In reply to:</strong> <a href="4798.php">Ralf Wildenhues: "Re: [OMPI devel] adding new functions to a BTL"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 22, 2008, at 5:51 PM, Ralf Wildenhues wrote:
<br>
<p><span class="quotelev1">&gt; Shouldn't it work to re-dlopen the lib with RTLD_GLOBAL?
</span><br>
<p>I actually don't know -- what will the linker do in this scenario?   
<br>
(now I'm curious :-) )
<br>
<p><span class="quotelev1">&gt; Also, recent libltdl should allow you to choose which scope you want  
</span><br>
<span class="quotelev1">&gt; in
</span><br>
<span class="quotelev1">&gt; the first place, local or global, through lt_dladvise.
</span><br>
<p><p>We've opted to keep LT opening DSOs in a private scope.  What Eugene  
<br>
is doing is just some hacking around and testing; he's not doing any  
<br>
real coding yet.  We certainly want to preserve all of our  
<br>
abstractions and linking barriers, so keeping the DSOs in private  
<br>
scopes is a Good Thing.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4805.php">Jeff Squyres: "Re: [OMPI devel] Component open"</a>
<li><strong>Previous message:</strong> <a href="4803.php">Leonardo Fialho: "Re: [OMPI devel] Restarting processes on different node"</a>
<li><strong>In reply to:</strong> <a href="4798.php">Ralf Wildenhues: "Re: [OMPI devel] adding new functions to a BTL"</a>
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
