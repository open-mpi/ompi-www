<?
$subject_val = "Re: [OMPI devel] calling sendi earlier in the PML";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  4 09:16:53 2009" -->
<!-- isoreceived="20090304141653" -->
<!-- sent="Wed, 4 Mar 2009 09:16:10 -0500" -->
<!-- isosent="20090304141610" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] calling sendi earlier in the PML" -->
<!-- id="5E54A940-9688-4B0B-BD1F-ED984BEC687C_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49AD9B4E.9050702_at_sun.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-04 09:16:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5572.php">Ralph H. Castain: "Re: [OMPI devel] 1.3.1rc3 was borked; 1.3.1rc4 is out"</a>
<li><strong>Previous message:</strong> <a href="5570.php">Terry Dontje: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<li><strong>In reply to:</strong> <a href="5568.php">Eugene Loh: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5573.php">Eugene Loh: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<li><strong>Reply:</strong> <a href="5573.php">Eugene Loh: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 3, 2009, at 4:04 PM, Eugene Loh wrote:
<br>
<p><span class="quotelev2">&gt;&gt; How about an MCA parameter to switch between this mechanism (early   
</span><br>
<span class="quotelev2">&gt;&gt; sendi) and the original behavior (late sendi)?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is the usual way that we resolve &quot;I want to do X / I want to  
</span><br>
<span class="quotelev2">&gt;&gt; do  Y&quot; disputes.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I see the smiley face, but am unsure how much of the message to  
</span><br>
<span class="quotelev1">&gt; apply it to.
</span><br>
<p>It applied to that sentence only -- the proposal was genuine.
<br>
<p><span class="quotelev1">&gt; Assuming the MCA proposal is genuine (easy for implementor  
</span><br>
<span class="quotelev1">&gt; consensus? or easy for the user?  gee, lemme see, that's a tough  
</span><br>
<span class="quotelev1">&gt; choice...), I'll note that it's easy enough to do.  I've implemented  
</span><br>
<span class="quotelev1">&gt; the early-sendi-check by adding a function to ob1 to do the right  
</span><br>
<span class="quotelev1">&gt; thing.  So, I can call that function as soon as one enters the PML  
</span><br>
<span class="quotelev1">&gt; send.  The &quot;late sendi&quot; call is at a different call site.  So, one  
</span><br>
<span class="quotelev1">&gt; call site for &quot;early sendi&quot; and another for &quot;late sendi&quot;.  Easy to  
</span><br>
<span class="quotelev1">&gt; turn on/off.  We're not talking about many small codes changes  
</span><br>
<span class="quotelev1">&gt; pervading the source base.
</span><br>
<p>True, but Brian hated it.  :-)
<br>
<p>How about Brian's proposal?
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5572.php">Ralph H. Castain: "Re: [OMPI devel] 1.3.1rc3 was borked; 1.3.1rc4 is out"</a>
<li><strong>Previous message:</strong> <a href="5570.php">Terry Dontje: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<li><strong>In reply to:</strong> <a href="5568.php">Eugene Loh: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5573.php">Eugene Loh: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<li><strong>Reply:</strong> <a href="5573.php">Eugene Loh: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
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
