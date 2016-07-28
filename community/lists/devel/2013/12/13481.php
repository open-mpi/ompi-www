<?
$subject_val = "Re: [OMPI devel] Consequence of bind-to-core by default";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 19 09:15:20 2013" -->
<!-- isoreceived="20131219141520" -->
<!-- sent="Thu, 19 Dec 2013 14:15:14 +0000" -->
<!-- isosent="20131219141514" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Consequence of bind-to-core by default" -->
<!-- id="C4791665-3CCD-41A7-821D-805416A90E24_at_pittman.co.uk" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="97635838-A427-42B0-820D-327517F962D6_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Consequence of bind-to-core by default<br>
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-19 09:15:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13482.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Consequence of bind-to-core by default"</a>
<li><strong>Previous message:</strong> <a href="13480.php">Jeff Squyres (jsquyres): "[OMPI devel] Consequence of bind-to-core by default"</a>
<li><strong>In reply to:</strong> <a href="13480.php">Jeff Squyres (jsquyres): "[OMPI devel] Consequence of bind-to-core by default"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13482.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Consequence of bind-to-core by default"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 19 Dec 2013, at 13:59, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - if we oversubscribe, (possibly) warn about the performance loss of oversubscription, and don't bind
</span><br>
<span class="quotelev1">&gt; - don't warn about lack of memory binding
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thoughts?
</span><br>
<p>+1, I hit this myself today.  I typically run on a VM and oversubscribe the cores, until the last update this would work fine, but now I get two error messages when trying this.  I can&#146;t &#147;modify&#148; the binding options used because I don&#146;t know what they are (i.e. I didn&#146;t give any) and even when not over-subscribing there is a warning at startup that I neither understand nor can seemingly disable.
<br>
<p>My thoughts would be:
<br>
<p>Oversubscription is normally bad so by all means issue a warning and/or abort however make the message meaningful and offer the use a &#151;allow-oversubscription flag.
<br>
<p>Jobs running on VMs shouldn&#146;t give warnings to the user.
<br>
<p>Finally, the whitespace alignment of the message is a little odd, it looks like it&#146;s supposed to be a table or two columns however the indentation is all over the place.
<br>
<p>Ashley.<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13482.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Consequence of bind-to-core by default"</a>
<li><strong>Previous message:</strong> <a href="13480.php">Jeff Squyres (jsquyres): "[OMPI devel] Consequence of bind-to-core by default"</a>
<li><strong>In reply to:</strong> <a href="13480.php">Jeff Squyres (jsquyres): "[OMPI devel] Consequence of bind-to-core by default"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13482.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Consequence of bind-to-core by default"</a>
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
