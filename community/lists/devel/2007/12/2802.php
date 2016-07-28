<?
$subject_val = "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new	cm's";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 12 08:29:02 2007" -->
<!-- isoreceived="20071212132902" -->
<!-- sent="Wed, 12 Dec 2007 15:28:53 +0200" -->
<!-- isosent="20071212132853" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new	cm's" -->
<!-- id="20071212132853.GM3360_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="99FF924F-280D-4B87-BC95-D118D4C0C895_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new	cm's<br>
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-12 08:28:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2803.php">Pavel Shamis (Pasha): "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for	new cm's"</a>
<li><strong>Previous message:</strong> <a href="2801.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new cm's"</a>
<li><strong>In reply to:</strong> <a href="2799.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new cm's"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2803.php">Pavel Shamis (Pasha): "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for	new cm's"</a>
<li><strong>Reply:</strong> <a href="2803.php">Pavel Shamis (Pasha): "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for	new cm's"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Dec 11, 2007 at 08:16:07PM -0500, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Isn't there a better way somehow?  Perhaps we should have &quot;select&quot;  
</span><br>
<span class="quotelev1">&gt; call *all* the functions and accept back a priority.  The one with the  
</span><br>
<span class="quotelev1">&gt; highest priority then wins.  This is quite similar to much of the  
</span><br>
<span class="quotelev1">&gt; other selection logic in OMPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sidenote: Keep in mind that there are some changes coming to select  
</span><br>
<span class="quotelev1">&gt; CPCs on a per-endpoint basis (I can't look up the trac ticket right  
</span><br>
<span class="quotelev1">&gt; now...).  This makes things a little complicated -- do we need  
</span><br>
<span class="quotelev1">&gt; btl_openib_cpc_include and btl_openib_cpc_exclude MCA params to  
</span><br>
<span class="quotelev1">&gt; include/exclude CPCs (because you might need more than one CPC in a  
</span><br>
<span class="quotelev1">&gt; single job)?  That wouldn't be hard to do.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But then what to do about if someone sets to use some XRC QPs and  
</span><br>
<span class="quotelev1">&gt; selects to use OOB or RDMA CM?  How do we catch this and print an  
</span><br>
<span class="quotelev1">&gt; error?  It doesn't seem right to put the &quot;if num_xrc_qps&gt;0&quot; check in  
</span><br>
<span class="quotelev1">&gt; every CPC.  What happens if you try to make an XRC QP when not using  
</span><br>
<span class="quotelev1">&gt; xoob?  Where is the error detected and what kind of error message do  
</span><br>
<span class="quotelev1">&gt; we print?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
In my opinion &quot;X&quot; notation for QP specification should be removed. I
<br>
didn't want this to prevent XRC merging so I haven't raced this point.
<br>
It is enough to have two types of QPs &quot;P&quot; - SW credit management &quot;S&quot; -
<br>
HW credit management. I think connection management should work like
<br>
this: Each BTL knows what type of CPC it can use and it should share
<br>
this info during modex stage. During connection establishment modex info
<br>
is used to figure out the list of CPCs that both endpoints support and one
<br>
with highest prio is selected.
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2803.php">Pavel Shamis (Pasha): "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for	new cm's"</a>
<li><strong>Previous message:</strong> <a href="2801.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new cm's"</a>
<li><strong>In reply to:</strong> <a href="2799.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new cm's"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2803.php">Pavel Shamis (Pasha): "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for	new cm's"</a>
<li><strong>Reply:</strong> <a href="2803.php">Pavel Shamis (Pasha): "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for	new cm's"</a>
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
