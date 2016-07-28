<?
$subject_val = "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new cm's";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 13 03:49:55 2007" -->
<!-- isoreceived="20071213084955" -->
<!-- sent="Thu, 13 Dec 2007 10:49:45 +0200" -->
<!-- isosent="20071213084945" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pasha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new cm's" -->
<!-- id="4760F229.2050205_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20071212142456.GP3360_at_minantech.com" -->
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
<strong>Date:</strong> 2007-12-13 03:49:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2843.php">Gleb Natapov: "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new	cm's"</a>
<li><strong>Previous message:</strong> <a href="2841.php">Gleb Natapov: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>In reply to:</strong> <a href="2806.php">Gleb Natapov: "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new	cm's"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2843.php">Gleb Natapov: "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new	cm's"</a>
<li><strong>Reply:</strong> <a href="2843.php">Gleb Natapov: "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new	cm's"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gleb Natapov wrote:
<br>
<span class="quotelev1">&gt; On Wed, Dec 12, 2007 at 04:08:31PM +0200, Pavel Shamis (Pasha) wrote:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Gleb Natapov wrote:
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Wed, Dec 12, 2007 at 03:37:26PM +0200, Pavel Shamis (Pasha) wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Gleb Natapov wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Tue, Dec 11, 2007 at 08:16:07PM -0500, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Isn't there a better way somehow?  Perhaps we should have &quot;select&quot;  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; call *all* the functions and accept back a priority.  The one with the  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; highest priority then wins.  This is quite similar to much of the  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; other selection logic in OMPI.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Sidenote: Keep in mind that there are some changes coming to select  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; CPCs on a per-endpoint basis (I can't look up the trac ticket right  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; now...).  This makes things a little complicated -- do we need  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; btl_openib_cpc_include and btl_openib_cpc_exclude MCA params to  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; include/exclude CPCs (because you might need more than one CPC in a  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; single job)?  That wouldn't be hard to do.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; But then what to do about if someone sets to use some XRC QPs and  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; selects to use OOB or RDMA CM?  How do we catch this and print an  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; error?  It doesn't seem right to put the &quot;if num_xrc_qps&gt;0&quot; check in  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; every CPC.  What happens if you try to make an XRC QP when not using  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; xoob?  Where is the error detected and what kind of error message do  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; we print?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; In my opinion &quot;X&quot; notation for QP specification should be removed. I
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; didn't want this to prevent XRC merging so I haven't raced this point.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; It is enough to have two types of QPs &quot;P&quot; - SW credit management &quot;S&quot; -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; HW credit management.       
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; How will you decide witch QP type to use ? (SRQ or XRC)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If both sides support XOOB and priority of XOOB is higher then all other 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CPC
</span><br>
<span class="quotelev3">&gt;&gt;&gt; then create XRC, otherwise use regular RC.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; If some body have connectX hca but  he want to use SRQ and not XRC ?
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt; This will be the default. (prio of OOB will be bigger than of XOOB), but
</span><br>
<span class="quotelev1">&gt; if uses will want to use XRC it will increase XOOB priority by
</span><br>
<span class="quotelev1">&gt; specifying MCA parameter.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; I guess anyway we will be need some additional parameter that will allow 
</span><br>
<span class="quotelev2">&gt;&gt; enable/disable XRC, correct ? (So why just not leave the X qp type ?)
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt; Because we want to support mixed setups and create XRC between nodes that
</span><br>
<span class="quotelev1">&gt; support it and RC between all other nodes.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
Ok, sounds reasonable for me. 
<br>
Just need make sure that the parameters name will be user friendly.
<br>
Some thing like --mca enable-xrc that will cause to XOOB priority be 
<br>
highest (and not something like --mca xoob 10 :-))
<br>
<p>Pasha
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2843.php">Gleb Natapov: "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new	cm's"</a>
<li><strong>Previous message:</strong> <a href="2841.php">Gleb Natapov: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>In reply to:</strong> <a href="2806.php">Gleb Natapov: "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new	cm's"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2843.php">Gleb Natapov: "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new	cm's"</a>
<li><strong>Reply:</strong> <a href="2843.php">Gleb Natapov: "Re: [OMPI devel] [PATCH] openib: clean-up connect to allow for new	cm's"</a>
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
