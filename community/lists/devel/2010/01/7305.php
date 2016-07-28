<?
$subject_val = "Re: [OMPI devel] Howto pause BTL's sending at runtime - hope mail is working again";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 11 17:08:30 2010" -->
<!-- isoreceived="20100111220830" -->
<!-- sent="Mon, 11 Jan 2010 17:08:25 -0500" -->
<!-- isosent="20100111220825" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Howto pause BTL's sending at runtime - hope mail is working again" -->
<!-- id="EF81046B-3F85-4ED2-9F92-83D0F1EDFB61_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B4B8FBE.2060909_at_upb.de" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-11 17:08:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7306.php">Josh Hursey: "Re: [OMPI devel] Howto pause BTL's sending at runtime - hope mail is working again"</a>
<li><strong>Previous message:</strong> <a href="7304.php">Christoph Konersmann: "Re: [OMPI devel] Howto pause BTL's sending at runtime - hope mail is working again"</a>
<li><strong>In reply to:</strong> <a href="7304.php">Christoph Konersmann: "Re: [OMPI devel] Howto pause BTL's sending at runtime - hope mail is working again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7306.php">Josh Hursey: "Re: [OMPI devel] Howto pause BTL's sending at runtime - hope mail is working again"</a>
<li><strong>Reply:</strong> <a href="7306.php">Josh Hursey: "Re: [OMPI devel] Howto pause BTL's sending at runtime - hope mail is working again"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Additionally, I believe that the FT system already does something like what you describe (although perhaps not exactly the same thing) -- there is a phase where the FT system pauses and quiesces all BTLs.
<br>
<p>Did you look at that part of the code, perchance, and see if it meets your needs?
<br>
<p><p>On Jan 11, 2010, at 3:53 PM, Christoph Konersmann wrote:
<br>
<p><span class="quotelev1">&gt; Thanks a lot for your help! I will give it a try.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Christoph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph Castain schrieb:
</span><br>
<span class="quotelev2">&gt; &gt; You've got this a tad wrong, but that's okay - let me try to clarify a couple of things that may help.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; First, you don't want to add this as a separate orted command. As you noted, orte has no direct way to tell the OMPI layer to do anything. Instead, you want to pass a message to the process that is received in the OMPI layer. That is easy to do.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1. add a message tag in ompi/mca/dpm/dpm.h - perhaps something like OMPI_RML_TAG_BTL_CTL
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2. in the btl, add a call to orte_rml.recv_nb() that identifies the above tag and specifies a callback function to use when such a message arrives
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 3. in that callback function, toggle your &quot;paused&quot; flag - or you can unpack the buffer to get a flag telling you what value to set. Your choice.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Now, when you want to pause the BTL, you do an orte_grpcomm.xcast() to the above message tag. ORTE will deliver that message to every process, which will then have its callback function called.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; HTH
</span><br>
<span class="quotelev2">&gt; &gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Paderborn Center for Parallel Computing - PC2
</span><br>
<span class="quotelev1">&gt; University of Paderborn - Germany
</span><br>
<span class="quotelev1">&gt; <a href="http://www.pc2.de">http://www.pc2.de</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Christoph Konersmann &lt;c_k_at_[hidden]&gt;
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7306.php">Josh Hursey: "Re: [OMPI devel] Howto pause BTL's sending at runtime - hope mail is working again"</a>
<li><strong>Previous message:</strong> <a href="7304.php">Christoph Konersmann: "Re: [OMPI devel] Howto pause BTL's sending at runtime - hope mail is working again"</a>
<li><strong>In reply to:</strong> <a href="7304.php">Christoph Konersmann: "Re: [OMPI devel] Howto pause BTL's sending at runtime - hope mail is working again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7306.php">Josh Hursey: "Re: [OMPI devel] Howto pause BTL's sending at runtime - hope mail is working again"</a>
<li><strong>Reply:</strong> <a href="7306.php">Josh Hursey: "Re: [OMPI devel] Howto pause BTL's sending at runtime - hope mail is working again"</a>
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
