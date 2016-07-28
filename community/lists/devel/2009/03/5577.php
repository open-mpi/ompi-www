<?
$subject_val = "Re: [OMPI devel] calling sendi earlier in the PML";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  4 17:29:07 2009" -->
<!-- isoreceived="20090304222907" -->
<!-- sent="Wed, 4 Mar 2009 17:29:01 -0500" -->
<!-- isosent="20090304222901" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] calling sendi earlier in the PML" -->
<!-- id="06A6BBBB-D9AE-48A4-880A-83FF6FE518E3_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49AEDA0F.3040700_at_sun.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-04 17:29:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5578.php">Brian W. Barrett: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<li><strong>Previous message:</strong> <a href="5576.php">Ralph Castain: "Re: [OMPI devel] trunk problem for large-SMP startup?"</a>
<li><strong>In reply to:</strong> <a href="5573.php">Eugene Loh: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5578.php">Brian W. Barrett: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<li><strong>Reply:</strong> <a href="5578.php">Brian W. Barrett: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<li><strong>Reply:</strong> <a href="5579.php">Eugene Loh: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 4, 2009, at 14:44 , Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; Let me try another thought here.  Why do we have BTL sendi functions  
</span><br>
<span class="quotelev1">&gt; at all?  I'll make an assertion and would appreciate feedback:  a  
</span><br>
<span class="quotelev1">&gt; BTL sendi function contributes nothing to optimizing send latency.   
</span><br>
<span class="quotelev1">&gt; To optimize send latency in the &quot;immediate&quot; case, we need *ONLY* PML  
</span><br>
<span class="quotelev1">&gt; work.
</span><br>
<p>Because otherwise you will have to make 2 BTL calls instead of one  
<br>
plus one extra memcpy (or not depending on your network). First you  
<br>
will have to call btl_alloc to get back a descriptor with some BTL  
<br>
memory attached to it. The you will put your data (including the  
<br>
header) in this memory and once ready call btl_send. With sendi there  
<br>
is only one call from the PML into the BTL, but this time it is the  
<br>
BTL responsibility to prepare the data that will be sent.
<br>
<p><span class="quotelev1">&gt; I'm churning a lot and not making much progress, but I'll try  
</span><br>
<span class="quotelev1">&gt; chewing on that idea (unless someone points out it's utterly  
</span><br>
<span class="quotelev1">&gt; ridiculous).  I'll look into having PML ignore sendi functions  
</span><br>
<span class="quotelev1">&gt; altogether and just make the &quot;send-immediate&quot; path work fast with  
</span><br>
<span class="quotelev1">&gt; normal send functions.  If that works, then we can get rid of sendi  
</span><br>
<span class="quotelev1">&gt; functions and hopefully have a solution that makes sense for everyone.
</span><br>
<p>This is utterly ridiculous (I hope you really expect someone to say  
<br>
it). As I said before, SM is only one of the networks supported by  
<br>
Open MPI. Independent on how much I would like to have better shared  
<br>
memory performance, I will not agree with any PML modifications that  
<br>
are SM oriented. We did that in the past with other BTLs and it turned  
<br>
out to be a bad idea, so I'm clearly not in favor of doing the same  
<br>
mistake twice.
<br>
<p>Regarding the sendi there are at least 3 networks that can take  
<br>
advantage of it: Portals, MX and Sicortex. Some of them do this right  
<br>
now, some others in the near future. Moreover, for these particular  
<br>
networks there is no way to avoid extra overhead without this feature  
<br>
(for very obscure reasons such as non contiguous pieces of memory only  
<br>
known by the BTL that can decrease the number of network operations).
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5578.php">Brian W. Barrett: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<li><strong>Previous message:</strong> <a href="5576.php">Ralph Castain: "Re: [OMPI devel] trunk problem for large-SMP startup?"</a>
<li><strong>In reply to:</strong> <a href="5573.php">Eugene Loh: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5578.php">Brian W. Barrett: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<li><strong>Reply:</strong> <a href="5578.php">Brian W. Barrett: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<li><strong>Reply:</strong> <a href="5579.php">Eugene Loh: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
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
