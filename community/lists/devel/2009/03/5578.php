<?
$subject_val = "Re: [OMPI devel] calling sendi earlier in the PML";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  4 18:32:27 2009" -->
<!-- isoreceived="20090304233227" -->
<!-- sent="Wed, 4 Mar 2009 18:32:23 -0500 (EST)" -->
<!-- isosent="20090304233223" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] calling sendi earlier in the PML" -->
<!-- id="alpine.DEB.1.10.0903041811330.4744_at_marvin.we-be-smart.org" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-04 18:32:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5579.php">Eugene Loh: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<li><strong>Previous message:</strong> <a href="5577.php">George Bosilca: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<li><strong>In reply to:</strong> <a href="5577.php">George Bosilca: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5580.php">Eugene Loh: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<li><strong>Reply:</strong> <a href="5580.php">Eugene Loh: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 4 Mar 2009, George Bosilca wrote:
<br>
<p><span class="quotelev2">&gt;&gt; I'm churning a lot and not making much progress, but I'll try chewing on 
</span><br>
<span class="quotelev2">&gt;&gt; that idea (unless someone points out it's utterly ridiculous).  I'll look 
</span><br>
<span class="quotelev2">&gt;&gt; into having PML ignore sendi functions altogether and just make the 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;send-immediate&quot; path work fast with normal send functions.  If that works, 
</span><br>
<span class="quotelev2">&gt;&gt; then we can get rid of sendi functions and hopefully have a solution that 
</span><br>
<span class="quotelev2">&gt;&gt; makes sense for everyone.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is utterly ridiculous (I hope you really expect someone to say it). As I 
</span><br>
<span class="quotelev1">&gt; said before, SM is only one of the networks supported by Open MPI. 
</span><br>
<span class="quotelev1">&gt; Independent on how much I would like to have better shared memory 
</span><br>
<span class="quotelev1">&gt; performance, I will not agree with any PML modifications that are SM 
</span><br>
<span class="quotelev1">&gt; oriented. We did that in the past with other BTLs and it turned out to be a 
</span><br>
<span class="quotelev1">&gt; bad idea, so I'm clearly not in favor of doing the same mistake twice.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regarding the sendi there are at least 3 networks that can take advantage of 
</span><br>
<span class="quotelev1">&gt; it: Portals, MX and Sicortex. Some of them do this right now, some others in 
</span><br>
<span class="quotelev1">&gt; the near future. Moreover, for these particular networks there is no way to 
</span><br>
<span class="quotelev1">&gt; avoid extra overhead without this feature (for very obscure reasons such as 
</span><br>
<span class="quotelev1">&gt; non contiguous pieces of memory only known by the BTL that can decrease the 
</span><br>
<span class="quotelev1">&gt; number of network operations).
</span><br>
<p>How about removing the MCA parameter from my earlier proposal and just 
<br>
having r2 filter out the sendi calls if there are multiple BTLs with 
<br>
heterogeneous BTLs (ie, some with sendi and some without) to the same 
<br>
peer.  That way, the early sendi will be bypassed in that case.  But for 
<br>
the cases of BTLs that support sendi in common usage scenarios 
<br>
(homogeneous nics), we'll get the optimization?  Does that offend you 
<br>
George? :)
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5579.php">Eugene Loh: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<li><strong>Previous message:</strong> <a href="5577.php">George Bosilca: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<li><strong>In reply to:</strong> <a href="5577.php">George Bosilca: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5580.php">Eugene Loh: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<li><strong>Reply:</strong> <a href="5580.php">Eugene Loh: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
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
