<?
$subject_val = "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new cm's";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 12 09:08:37 2007" -->
<!-- isoreceived="20071212140837" -->
<!-- sent="Wed, 12 Dec 2007 16:08:31 +0200" -->
<!-- isosent="20071212140831" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pasha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new cm's" -->
<!-- id="475FEB5F.3060507_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20071212134117.GN3360_at_minantech.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new cm's<br>
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pasha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-12 09:08:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2806.php">Gleb Natapov: "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new	cm's"</a>
<li><strong>Previous message:</strong> <a href="2804.php">Gleb Natapov: "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new	cm's"</a>
<li><strong>In reply to:</strong> <a href="2804.php">Gleb Natapov: "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new	cm's"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2806.php">Gleb Natapov: "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new	cm's"</a>
<li><strong>Reply:</strong> <a href="2806.php">Gleb Natapov: "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new	cm's"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gleb Natapov wrote:
<br>
<span class="quotelev1">&gt; On Wed, Dec 12, 2007 at 03:37:26PM +0200, Pavel Shamis (Pasha) wrote:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Gleb Natapov wrote:
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Tue, Dec 11, 2007 at 08:16:07PM -0500, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Isn't there a better way somehow?  Perhaps we should have &quot;select&quot;  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; call *all* the functions and accept back a priority.  The one with the  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; highest priority then wins.  This is quite similar to much of the  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; other selection logic in OMPI.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sidenote: Keep in mind that there are some changes coming to select  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; CPCs on a per-endpoint basis (I can't look up the trac ticket right  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; now...).  This makes things a little complicated -- do we need  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; btl_openib_cpc_include and btl_openib_cpc_exclude MCA params to  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; include/exclude CPCs (because you might need more than one CPC in a  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; single job)?  That wouldn't be hard to do.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; But then what to do about if someone sets to use some XRC QPs and  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; selects to use OOB or RDMA CM?  How do we catch this and print an  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; error?  It doesn't seem right to put the &quot;if num_xrc_qps&gt;0&quot; check in  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; every CPC.  What happens if you try to make an XRC QP when not using  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; xoob?  Where is the error detected and what kind of error message do  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; we print?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In my opinion &quot;X&quot; notation for QP specification should be removed. I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; didn't want this to prevent XRC merging so I haven't raced this point.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It is enough to have two types of QPs &quot;P&quot; - SW credit management &quot;S&quot; -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HW credit management. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; How will you decide witch QP type to use ? (SRQ or XRC)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt; If both sides support XOOB and priority of XOOB is higher then all other CPC
</span><br>
<span class="quotelev1">&gt; then create XRC, otherwise use regular RC.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
If some body have connectX hca but  he want to use SRQ and not XRC ?
<br>
I guess anyway we will be need some additional parameter that will allow 
<br>
enable/disable XRC, correct ? (So why just not leave the X qp type ?)
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2806.php">Gleb Natapov: "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new	cm's"</a>
<li><strong>Previous message:</strong> <a href="2804.php">Gleb Natapov: "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new	cm's"</a>
<li><strong>In reply to:</strong> <a href="2804.php">Gleb Natapov: "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new	cm's"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2806.php">Gleb Natapov: "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new	cm's"</a>
<li><strong>Reply:</strong> <a href="2806.php">Gleb Natapov: "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new	cm's"</a>
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
