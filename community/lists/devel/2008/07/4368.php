<?
$subject_val = "Re: [OMPI devel] IBCM error";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 16 11:08:28 2008" -->
<!-- isoreceived="20080716150828" -->
<!-- sent="Wed, 16 Jul 2008 11:07:30 -0400" -->
<!-- isosent="20080716150730" -->
<!-- name="Don Kerr" -->
<!-- email="Don.Kerr_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IBCM error" -->
<!-- id="487E0EB2.7070003_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C9942813-D4CA-4B9E-A29B-95EB564CFA64_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] IBCM error<br>
<strong>From:</strong> Don Kerr (<em>Don.Kerr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-16 11:07:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4369.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<li><strong>Previous message:</strong> <a href="4367.php">Lenny Verkhovsky: "[OMPI devel] PathScale compiler ( ticket #1326 )"</a>
<li><strong>In reply to:</strong> <a href="4356.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4369.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<li><strong>Reply:</strong> <a href="4369.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Jul 15, 2008, at 7:30 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Minor clarification: we did not test RDMACM on RoadRunner.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Just for further clarification - I did, and it wasn't a particularly 
</span><br>
<span class="quotelev2">&gt;&gt; good
</span><br>
<span class="quotelev2">&gt;&gt; experience. Encountered several problems, none of them overwhelming, 
</span><br>
<span class="quotelev2">&gt;&gt; hence
</span><br>
<span class="quotelev2">&gt;&gt; my comments.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ah -- I didn't know this.  What went wrong?  We need to fix it if 
</span><br>
<span class="quotelev1">&gt; there are problems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; RDMACM, on the other hand, is *necessary* for iWARP connections.  We
</span><br>
<span class="quotelev3">&gt;&gt;&gt; know it won't scale well because of ARP issues, to which the iWARP
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vendors are publishing their own solutions (pre-populating ARP caches,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; etc.).  Even when built and installed, RDMACM will not be used by
</span><br>
<span class="quotelev3">&gt;&gt;&gt; default for IB hardware (you have to specifically ask for it).  Since
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it's necessary for iWARP, I think we need to build and install it by
</span><br>
<span class="quotelev3">&gt;&gt;&gt; default.  Most importantly: production IB users won't be disturbed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If it is necessary for iWARP, then fine - so long as it is only used if
</span><br>
<span class="quotelev2">&gt;&gt; specifically requested.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, I would also ask that we be able to -not- build it upon 
</span><br>
<span class="quotelev2">&gt;&gt; request so
</span><br>
<span class="quotelev2">&gt;&gt; we can be certain a user doesn't attempt to use it by mistake (&quot;gee, 
</span><br>
<span class="quotelev2">&gt;&gt; that
</span><br>
<span class="quotelev2">&gt;&gt; looks interesting - let Mikey try it!&quot;). Ditto for ibcm support.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Pasha added configure switches for this about a week ago:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     --en|disable-openib-ibcm
</span><br>
<span class="quotelev1">&gt;     --en|disable-openib-rdmacm
</span><br>
I like these flags but I thought there was going to be a run time check 
<br>
for cases where Open MPI is built on a system that has ibcm support but 
<br>
is later run on a system without ibcm support.
<br>
<p>-DON
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4369.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<li><strong>Previous message:</strong> <a href="4367.php">Lenny Verkhovsky: "[OMPI devel] PathScale compiler ( ticket #1326 )"</a>
<li><strong>In reply to:</strong> <a href="4356.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4369.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<li><strong>Reply:</strong> <a href="4369.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
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
