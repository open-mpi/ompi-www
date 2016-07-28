<?
$subject_val = "Re: [OMPI devel] calling sendi earlier in the PML";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  3 15:48:05 2009" -->
<!-- isoreceived="20090303204805" -->
<!-- sent="Tue, 3 Mar 2009 15:48:01 -0500 (EST)" -->
<!-- isosent="20090303204801" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] calling sendi earlier in the PML" -->
<!-- id="alpine.DEB.1.10.0903031544160.20458_at_marvin.we-be-smart.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49AD93AB.5000602_at_sun.com" -->
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
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-03 15:48:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5564.php">Jeff Squyres: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<li><strong>Previous message:</strong> <a href="5562.php">Eugene Loh: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<li><strong>In reply to:</strong> <a href="5562.php">Eugene Loh: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5567.php">Eugene Loh: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<li><strong>Reply:</strong> <a href="5567.php">Eugene Loh: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 3 Mar 2009, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; First, this behavior is basically what I was proposing and what George didn't 
</span><br>
<span class="quotelev1">&gt; feel comfortable with.  It is arguably no compromise at all.  (Uggh, why must 
</span><br>
<span class="quotelev1">&gt; I be so honest?)  For eager messages, it favors BTLs with sendi functions, 
</span><br>
<span class="quotelev1">&gt; which could lead to those BTLs becoming overloaded.  I think favoring BTLs 
</span><br>
<span class="quotelev1">&gt; with sendi for short messages is good.  George thinks that load balancing 
</span><br>
<span class="quotelev1">&gt; BTLs is good.
</span><br>
<p>I have two thoughts on the issue:
<br>
<p>1) How often are a btl with a sendi and a btl without a sendi going to be 
<br>
used together?  Keep in mind, this is two BTLs with the same priority and 
<br>
connectivity to the same peer.  My thought is that given the very few 
<br>
heterogeneous networked machines (yes, I know UTK has one, but we're 
<br>
talking percentages), optimizing for that case at the cost of the much 
<br>
more common case is a poor choice.
<br>
<p>2) It seems like a much better idea would be to add sendi calls to all 
<br>
btls that are likely to be used at the same priority.  This seems like 
<br>
good long-term form anyway, so why not optimize the PML for the long term 
<br>
rather than the short term and assume all BTLs will have a sendi function?
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5564.php">Jeff Squyres: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<li><strong>Previous message:</strong> <a href="5562.php">Eugene Loh: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<li><strong>In reply to:</strong> <a href="5562.php">Eugene Loh: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5567.php">Eugene Loh: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<li><strong>Reply:</strong> <a href="5567.php">Eugene Loh: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
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
