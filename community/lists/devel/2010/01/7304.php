<?
$subject_val = "Re: [OMPI devel] Howto pause BTL's sending at runtime - hope mail is working again";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 11 15:53:25 2010" -->
<!-- isoreceived="20100111205325" -->
<!-- sent="Mon, 11 Jan 2010 21:53:18 +0100" -->
<!-- isosent="20100111205318" -->
<!-- name="Christoph Konersmann" -->
<!-- email="c_k_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Howto pause BTL's sending at runtime - hope mail is working again" -->
<!-- id="4B4B8FBE.2060909_at_upb.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7FC62AB3-051A-4296-9C56-635D092FB3C4_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Howto pause BTL's sending at runtime - hope mail is working again<br>
<strong>From:</strong> Christoph Konersmann (<em>c_k_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-11 15:53:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7305.php">Jeff Squyres: "Re: [OMPI devel] Howto pause BTL's sending at runtime - hope mail is working again"</a>
<li><strong>Previous message:</strong> <a href="7303.php">Josh Hursey: "Re: [OMPI devel] How can I achieve node fail over"</a>
<li><strong>In reply to:</strong> <a href="7292.php">Ralph Castain: "Re: [OMPI devel] Howto pause BTL's sending at runtime - hope mail is working again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7305.php">Jeff Squyres: "Re: [OMPI devel] Howto pause BTL's sending at runtime - hope mail is working again"</a>
<li><strong>Reply:</strong> <a href="7305.php">Jeff Squyres: "Re: [OMPI devel] Howto pause BTL's sending at runtime - hope mail is working again"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks a lot for your help! I will give it a try.
<br>
<p>Christoph
<br>
<p>Ralph Castain schrieb:
<br>
<span class="quotelev1">&gt; You've got this a tad wrong, but that's okay - let me try to clarify a couple of things that may help.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; First, you don't want to add this as a separate orted command. As you noted, orte has no direct way to tell the OMPI layer to do anything. Instead, you want to pass a message to the process that is received in the OMPI layer. That is easy to do.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. add a message tag in ompi/mca/dpm/dpm.h - perhaps something like OMPI_RML_TAG_BTL_CTL
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. in the btl, add a call to orte_rml.recv_nb() that identifies the above tag and specifies a callback function to use when such a message arrives
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3. in that callback function, toggle your &quot;paused&quot; flag - or you can unpack the buffer to get a flag telling you what value to set. Your choice.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now, when you want to pause the BTL, you do an orte_grpcomm.xcast() to the above message tag. ORTE will deliver that message to every process, which will then have its callback function called.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; HTH
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<p><pre>
-- 
Paderborn Center for Parallel Computing - PC2
University of Paderborn - Germany
<a href="http://www.pc2.de">http://www.pc2.de</a>
Christoph Konersmann &lt;c_k_at_[hidden]&gt;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7305.php">Jeff Squyres: "Re: [OMPI devel] Howto pause BTL's sending at runtime - hope mail is working again"</a>
<li><strong>Previous message:</strong> <a href="7303.php">Josh Hursey: "Re: [OMPI devel] How can I achieve node fail over"</a>
<li><strong>In reply to:</strong> <a href="7292.php">Ralph Castain: "Re: [OMPI devel] Howto pause BTL's sending at runtime - hope mail is working again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7305.php">Jeff Squyres: "Re: [OMPI devel] Howto pause BTL's sending at runtime - hope mail is working again"</a>
<li><strong>Reply:</strong> <a href="7305.php">Jeff Squyres: "Re: [OMPI devel] Howto pause BTL's sending at runtime - hope mail is working again"</a>
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
