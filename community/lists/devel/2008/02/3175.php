<?
$subject_val = "Re: [OMPI devel] request help debugging openib btl problem";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb  9 08:03:45 2008" -->
<!-- isoreceived="20080209130345" -->
<!-- sent="Sat, 9 Feb 2008 08:03:30 -0500" -->
<!-- isosent="20080209130330" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] request help debugging openib btl problem" -->
<!-- id="4056333F-514B-4594-BA97-DB1D648C57C2_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1202511155.3638.121.camel_at_brick.pathscale.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] request help debugging openib btl problem<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-09 08:03:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3176.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r17398"</a>
<li><strong>Previous message:</strong> <a href="3174.php">Ralph Campbell: "[OMPI devel] request help debugging openib btl problem"</a>
<li><strong>In reply to:</strong> <a href="3174.php">Ralph Campbell: "[OMPI devel] request help debugging openib btl problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Two suggestions:
<br>
<p>1. Have you tried the OMPI development trunk?  (or do you have a need  
<br>
for getting the 1.2 series working?)  The use of OF verbs in the OMPI  
<br>
development trunk has changed quite a bit since the 1.2 series; we're  
<br>
well on our way towards a v1.3 release -- this is where all future  
<br>
work is occurring.
<br>
<p>2. You might want to focus on a single type of messaging at a time;  
<br>
the openib BTL has three:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- eager RDMA
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- send/receive
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- long RDMA
<br>
You might want to disable eager RDMA and long RDMA first, for example,  
<br>
and just debug send/recv.  Use the MCA params  
<br>
btl_openib_use_eager_rdma=0 and btl_openib_flags=1 (that's a trunk  
<br>
flag value; I don't remember offhand if it's the same for the v1.2  
<br>
branch; use &quot;ompi_info --param btl openib --parsable | grep flags:&quot; to  
<br>
see what the flag bit values are in that series).
<br>
<p>Good luck.
<br>
<p><p>On Feb 8, 2008, at 5:52 PM, Ralph Campbell wrote:
<br>
<p><span class="quotelev1">&gt; I'm using openmpi 1.2.5 with a QLogic HCA and using the
</span><br>
<span class="quotelev1">&gt; openib btl (not PSM).  osu_latency and osu_bw work OK but
</span><br>
<span class="quotelev1">&gt; when I run osu_bibw with a message size of 2MB (1&lt;&lt;21),
</span><br>
<span class="quotelev1">&gt; it hangs in btl_openib_component_progress() waiting for something.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried adding printfs at each point where ibv_post_send(),
</span><br>
<span class="quotelev1">&gt; ibv_post_recv(), and ibv_poll_cq() are called and then ran
</span><br>
<span class="quotelev1">&gt; a python script which verified that all sends and recvs got a
</span><br>
<span class="quotelev1">&gt; good completion notice in the posted order
</span><br>
<span class="quotelev1">&gt; (mca_btl_openib_component.use_srq is zero for this test)
</span><br>
<span class="quotelev1">&gt; Note that only RC SEND (12252 byte) messages are being sent
</span><br>
<span class="quotelev1">&gt; at this point.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can send the trace of ibv_* calls if it will help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any suggestions what to look for are welcome.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3176.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r17398"</a>
<li><strong>Previous message:</strong> <a href="3174.php">Ralph Campbell: "[OMPI devel] request help debugging openib btl problem"</a>
<li><strong>In reply to:</strong> <a href="3174.php">Ralph Campbell: "[OMPI devel] request help debugging openib btl problem"</a>
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
