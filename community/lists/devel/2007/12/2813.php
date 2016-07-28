<?
$subject_val = "Re: [OMPI devel] initial SCTP BTL commit comments?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 12 11:09:13 2007" -->
<!-- isoreceived="20071212160913" -->
<!-- sent="Wed, 12 Dec 2007 08:09:09 -0800" -->
<!-- isosent="20071212160909" -->
<!-- name="Andrew Friedley" -->
<!-- email="afriedle_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] initial SCTP BTL commit comments?" -->
<!-- id="476007A5.8060008_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="473823BF-A8AF-4E4B-8B71-4E7805A111DC_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] initial SCTP BTL commit comments?<br>
<strong>From:</strong> Andrew Friedley (<em>afriedle_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-12 11:09:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2814.php">Karol Mroz: "Re: [OMPI devel] SCTP BTL exclusivity value problem"</a>
<li><strong>Previous message:</strong> <a href="2812.php">Jeff Squyres: "Re: [OMPI devel] SCTP BTL exclusivity value problem"</a>
<li><strong>In reply to:</strong> <a href="2698.php">Jeff Squyres: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2844.php">Jeff Squyres: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<li><strong>Reply:</strong> <a href="2844.php">Jeff Squyres: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Alternatively, you could do what the ofud BTL does (a currently  
</span><br>
<span class="quotelev1">&gt; experimental BTL): look for the string &quot;ofud&quot; in the &quot;btl&quot; MCA  
</span><br>
<span class="quotelev1">&gt; parameter -- i.e., see if the user explicitly asked for the ofud BTL.   
</span><br>
<span class="quotelev1">&gt; If not found (doing the Right Things with the &quot;^&quot; operator, of  
</span><br>
<span class="quotelev1">&gt; course), then disable the ofud BTL by returning NULL from the  
</span><br>
<span class="quotelev1">&gt; component_init() function.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Either seems fine to me; the ofud method seems a little less elegant  
</span><br>
<span class="quotelev1">&gt; -- was there a reason not to use exclusivity here?  Was it just the  
</span><br>
<span class="quotelev1">&gt; fact that TCP's exclusivity is already the lowest possible value (0)?
</span><br>
<p>Sorry.. try putting my name in the email or something so I know you're 
<br>
asking me.
<br>
<p>I think there was but I don't remember right now.  If a low exclusivity 
<br>
for the UD BTL means it won't get used with the RC BTL, then that's 
<br>
fine.  I don't like that string parsing code anyway.  Suggestions on 
<br>
what to set the exclusivity to?
<br>
<p>Andrew
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2814.php">Karol Mroz: "Re: [OMPI devel] SCTP BTL exclusivity value problem"</a>
<li><strong>Previous message:</strong> <a href="2812.php">Jeff Squyres: "Re: [OMPI devel] SCTP BTL exclusivity value problem"</a>
<li><strong>In reply to:</strong> <a href="2698.php">Jeff Squyres: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2844.php">Jeff Squyres: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<li><strong>Reply:</strong> <a href="2844.php">Jeff Squyres: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
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
