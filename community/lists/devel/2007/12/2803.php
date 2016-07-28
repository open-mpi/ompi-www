<?
$subject_val = "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for	new cm's";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 12 08:37:32 2007" -->
<!-- isoreceived="20071212133732" -->
<!-- sent="Wed, 12 Dec 2007 15:37:26 +0200" -->
<!-- isosent="20071212133726" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pasha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for	new cm's" -->
<!-- id="475FE416.6010009_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20071212132853.GM3360_at_minantech.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for	new cm's<br>
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pasha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-12 08:37:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2804.php">Gleb Natapov: "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new	cm's"</a>
<li><strong>Previous message:</strong> <a href="2802.php">Gleb Natapov: "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new	cm's"</a>
<li><strong>In reply to:</strong> <a href="2802.php">Gleb Natapov: "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new	cm's"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2804.php">Gleb Natapov: "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new	cm's"</a>
<li><strong>Reply:</strong> <a href="2804.php">Gleb Natapov: "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new	cm's"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gleb Natapov wrote:
<br>
<span class="quotelev1">&gt; On Tue, Dec 11, 2007 at 08:16:07PM -0500, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Isn't there a better way somehow?  Perhaps we should have &quot;select&quot;  
</span><br>
<span class="quotelev2">&gt;&gt; call *all* the functions and accept back a priority.  The one with the  
</span><br>
<span class="quotelev2">&gt;&gt; highest priority then wins.  This is quite similar to much of the  
</span><br>
<span class="quotelev2">&gt;&gt; other selection logic in OMPI.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sidenote: Keep in mind that there are some changes coming to select  
</span><br>
<span class="quotelev2">&gt;&gt; CPCs on a per-endpoint basis (I can't look up the trac ticket right  
</span><br>
<span class="quotelev2">&gt;&gt; now...).  This makes things a little complicated -- do we need  
</span><br>
<span class="quotelev2">&gt;&gt; btl_openib_cpc_include and btl_openib_cpc_exclude MCA params to  
</span><br>
<span class="quotelev2">&gt;&gt; include/exclude CPCs (because you might need more than one CPC in a  
</span><br>
<span class="quotelev2">&gt;&gt; single job)?  That wouldn't be hard to do.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But then what to do about if someone sets to use some XRC QPs and  
</span><br>
<span class="quotelev2">&gt;&gt; selects to use OOB or RDMA CM?  How do we catch this and print an  
</span><br>
<span class="quotelev2">&gt;&gt; error?  It doesn't seem right to put the &quot;if num_xrc_qps&gt;0&quot; check in  
</span><br>
<span class="quotelev2">&gt;&gt; every CPC.  What happens if you try to make an XRC QP when not using  
</span><br>
<span class="quotelev2">&gt;&gt; xoob?  Where is the error detected and what kind of error message do  
</span><br>
<span class="quotelev2">&gt;&gt; we print?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt; In my opinion &quot;X&quot; notation for QP specification should be removed. I
</span><br>
<span class="quotelev1">&gt; didn't want this to prevent XRC merging so I haven't raced this point.
</span><br>
<span class="quotelev1">&gt; It is enough to have two types of QPs &quot;P&quot; - SW credit management &quot;S&quot; -
</span><br>
<span class="quotelev1">&gt; HW credit management. 
</span><br>
How will you decide witch QP type to use ? (SRQ or XRC)
<br>
<p><span class="quotelev1">&gt; I think connection management should work like
</span><br>
<span class="quotelev1">&gt; this: Each BTL knows what type of CPC it can use and it should share
</span><br>
<span class="quotelev1">&gt; this info during modex stage. During connection establishment modex info
</span><br>
<span class="quotelev1">&gt; is used to figure out the list of CPCs that both endpoints support and one
</span><br>
<span class="quotelev1">&gt; with highest prio is selected.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
ok for me.
<br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; 			Gleb.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2804.php">Gleb Natapov: "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new	cm's"</a>
<li><strong>Previous message:</strong> <a href="2802.php">Gleb Natapov: "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new	cm's"</a>
<li><strong>In reply to:</strong> <a href="2802.php">Gleb Natapov: "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new	cm's"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2804.php">Gleb Natapov: "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new	cm's"</a>
<li><strong>Reply:</strong> <a href="2804.php">Gleb Natapov: "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new	cm's"</a>
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
