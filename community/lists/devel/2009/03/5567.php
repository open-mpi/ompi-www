<?
$subject_val = "Re: [OMPI devel] calling sendi earlier in the PML";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  3 15:59:44 2009" -->
<!-- isoreceived="20090303205944" -->
<!-- sent="Tue, 03 Mar 2009 12:59:11 -0800" -->
<!-- isosent="20090303205911" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] calling sendi earlier in the PML" -->
<!-- id="49AD9A1F.9090505_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="alpine.DEB.1.10.0903031544160.20458_at_marvin.we-be-smart.org" -->
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
<strong>Date:</strong> 2009-03-03 15:59:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5568.php">Eugene Loh: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<li><strong>Previous message:</strong> <a href="5566.php">Brian W. Barrett: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<li><strong>In reply to:</strong> <a href="5563.php">Brian W. Barrett: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5564.php">Jeff Squyres: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian W. Barrett wrote:
<br>
<p><span class="quotelev1">&gt; On Tue, 3 Mar 2009, Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; First, this behavior is basically what I was proposing and what 
</span><br>
<span class="quotelev2">&gt;&gt; George didn't feel comfortable with.  It is arguably no compromise at 
</span><br>
<span class="quotelev2">&gt;&gt; all.  (Uggh, why must I be so honest?)  For eager messages, it favors 
</span><br>
<span class="quotelev2">&gt;&gt; BTLs with sendi functions, which could lead to those BTLs becoming 
</span><br>
<span class="quotelev2">&gt;&gt; overloaded.  I think favoring BTLs with sendi for short messages is 
</span><br>
<span class="quotelev2">&gt;&gt; good.  George thinks that load balancing BTLs is good.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have two thoughts on the issue:
</span><br>
<p>I'll see your two thoughts and raise you...  Oh wait.  Maybe I'll win 
<br>
more consensus if I were less shrill/insistent!  :^)
<br>
<p><span class="quotelev1">&gt; 1) How often are a btl with a sendi and a btl without a sendi going to 
</span><br>
<span class="quotelev1">&gt; be used together?  Keep in mind, this is two BTLs with the same 
</span><br>
<span class="quotelev1">&gt; priority and connectivity to the same peer.  My thought is that given 
</span><br>
<span class="quotelev1">&gt; the very few heterogeneous networked machines (yes, I know UTK has 
</span><br>
<span class="quotelev1">&gt; one, but we're talking percentages), optimizing for that case at the 
</span><br>
<span class="quotelev1">&gt; cost of the much more common case is a poor choice.
</span><br>
<p>Today, the only sendi code I see is:
<br>
<p>*) mx (could potentially coexist with another BTL)
<br>
*) sm (was turned off, but I turned it back on... anyhow sm never 
<br>
coexists with another BTL)
<br>
*) portals (turned off, and presumably unlikely to coexist with another BTL)
<br>
<p><span class="quotelev1">&gt; 2) It seems like a much better idea would be to add sendi calls to all 
</span><br>
<span class="quotelev1">&gt; btls that are likely to be used at the same priority.  This seems like 
</span><br>
<span class="quotelev1">&gt; good long-term form anyway, so why not optimize the PML for the long 
</span><br>
<span class="quotelev1">&gt; term rather than the short term and assume all BTLs will have a sendi 
</span><br>
<span class="quotelev1">&gt; function?
</span><br>
<p>I wouldn't assume all BTLs will have a sendi function, but only that 
<br>
low-latency BTLs would.  But, maybe that's what you meant.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5568.php">Eugene Loh: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<li><strong>Previous message:</strong> <a href="5566.php">Brian W. Barrett: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<li><strong>In reply to:</strong> <a href="5563.php">Brian W. Barrett: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5564.php">Jeff Squyres: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
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
