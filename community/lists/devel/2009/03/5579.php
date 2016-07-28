<?
$subject_val = "Re: [OMPI devel] calling sendi earlier in the PML";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  4 18:40:48 2009" -->
<!-- isoreceived="20090304234048" -->
<!-- sent="Wed, 04 Mar 2009 15:40:13 -0800" -->
<!-- isosent="20090304234013" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] calling sendi earlier in the PML" -->
<!-- id="49AF115D.1020904_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="06A6BBBB-D9AE-48A4-880A-83FF6FE518E3_at_eecs.utk.edu" -->
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
<strong>Date:</strong> 2009-03-04 18:40:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5580.php">Eugene Loh: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<li><strong>Previous message:</strong> <a href="5578.php">Brian W. Barrett: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<li><strong>In reply to:</strong> <a href="5577.php">George Bosilca: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; On Mar 4, 2009, at 14:44 , Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Let me try another thought here.  Why do we have BTL sendi functions  
</span><br>
<span class="quotelev2">&gt;&gt; at all?  I'll make an assertion and would appreciate feedback:  a  
</span><br>
<span class="quotelev2">&gt;&gt; BTL sendi function contributes nothing to optimizing send latency.   
</span><br>
<span class="quotelev2">&gt;&gt; To optimize send latency in the &quot;immediate&quot; case, we need *ONLY* PML  
</span><br>
<span class="quotelev2">&gt;&gt; work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Because otherwise you will have to make 2 BTL calls instead of one
</span><br>
<p>What's wrong with that?  It's &quot;just a function call&quot;, and OMPI is 
<br>
littered with those.
<br>
<p><span class="quotelev1">&gt; plus one extra memcpy (or not depending on your network).
</span><br>
<p>Just to check my understanding:  sm does not benefit here.  Right?  So, 
<br>
it makes no sense really for sm to have a sendi function.
<br>
<p>I remain close to giving up, but still am trying to understand the PML 
<br>
somewhat.  I guess there are several send-latency optimizations one 
<br>
could consider:
<br>
<p>1) Not populating the PML send request if the send can be completed 
<br>
&quot;immediately&quot;.  This makes sense for BTLs (like sm) that are very fast 
<br>
(so that shaving off instructions and memory operations makes a 
<br>
difference) and for messages that are very, very short (one or few 
<br>
cachelines).  It does not rely on having a sendi function, which knows 
<br>
nothing about PML send requests anyhow.
<br>
<p>2) Not copying the user data into a buffer.  This makes sense for BTLs 
<br>
(unlike sm) that can move the data &quot;directly&quot; and for &quot;intermediate&quot; 
<br>
message sizes (below the eager limit, but still big enough that saving a 
<br>
memcpy makes a difference).  It does rely on having a sendi function.
<br>
<p>I guess I've been focussing on #1.  I thought that was related to sendi, 
<br>
but now it seems sendi is related more to #2.  So, if I understand 
<br>
correctly (unclear if this is the case), we're both right.  I'm right in 
<br>
that pruning the PML stack (specifically, populating the send request) 
<br>
is unrelated to the existence of sendi.  You're right in that there is 
<br>
still a legitimate role for sendi for some BTLs (sm not among them).
<br>
<p><span class="quotelev1">&gt; First you  will have to call btl_alloc to get back a descriptor with 
</span><br>
<span class="quotelev1">&gt; some BTL  memory attached to it. The you will put your data (including 
</span><br>
<span class="quotelev1">&gt; the  header) in this memory and once ready call btl_send. With sendi 
</span><br>
<span class="quotelev1">&gt; there  is only one call from the PML into the BTL, but this time it is 
</span><br>
<span class="quotelev1">&gt; the  BTL responsibility to prepare the data that will be sent.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm churning a lot and not making much progress, but I'll try  
</span><br>
<span class="quotelev2">&gt;&gt; chewing on that idea (unless someone points out it's utterly  
</span><br>
<span class="quotelev2">&gt;&gt; ridiculous).  I'll look into having PML ignore sendi functions  
</span><br>
<span class="quotelev2">&gt;&gt; altogether and just make the &quot;send-immediate&quot; path work fast with  
</span><br>
<span class="quotelev2">&gt;&gt; normal send functions.  If that works, then we can get rid of sendi  
</span><br>
<span class="quotelev2">&gt;&gt; functions and hopefully have a solution that makes sense for everyone.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is utterly ridiculous (I hope you really expect someone to say  it).
</span><br>
<p>It's fine to say that.  As you can see, I'll push back when I don't 
<br>
understand why it's ridiculous.
<br>
<p><span class="quotelev1">&gt; As I said before, SM is only one of the networks supported by  Open 
</span><br>
<span class="quotelev1">&gt; MPI. Independent on how much I would like to have better shared  
</span><br>
<span class="quotelev1">&gt; memory performance, I will not agree with any PML modifications that  
</span><br>
<span class="quotelev1">&gt; are SM oriented. We did that in the past with other BTLs and it 
</span><br>
<span class="quotelev1">&gt; turned  out to be a bad idea, so I'm clearly not in favor of doing the 
</span><br>
<span class="quotelev1">&gt; same  mistake twice.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regarding the sendi there are at least 3 networks that can take  
</span><br>
<span class="quotelev1">&gt; advantage of it: Portals, MX and Sicortex. Some of them do this right  
</span><br>
<span class="quotelev1">&gt; now, some others in the near future. Moreover, for these particular  
</span><br>
<span class="quotelev1">&gt; networks there is no way to avoid extra overhead without this feature  
</span><br>
<span class="quotelev1">&gt; (for very obscure reasons such as non contiguous pieces of memory 
</span><br>
<span class="quotelev1">&gt; only  known by the BTL that can decrease the number of network 
</span><br>
<span class="quotelev1">&gt; operations).
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5580.php">Eugene Loh: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<li><strong>Previous message:</strong> <a href="5578.php">Brian W. Barrett: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<li><strong>In reply to:</strong> <a href="5577.php">George Bosilca: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
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
