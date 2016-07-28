<?
$subject_val = "Re: [OMPI users] orted: error while loading shared libraries";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  8 09:36:55 2010" -->
<!-- isoreceived="20100408133655" -->
<!-- sent="Thu, 8 Apr 2010 10:36:50 -0300" -->
<!-- isosent="20100408133650" -->
<!-- name="Fernando Lemos" -->
<!-- email="fernandotcl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orted: error while loading shared libraries" -->
<!-- id="i2t9108753b1004080636vf46e6094p3457d6b34a2c3ccb_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C13343D3-26C6-4563-85D9-197C9FCD5C43_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] orted: error while loading shared libraries<br>
<strong>From:</strong> Fernando Lemos (<em>fernandotcl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-08 09:36:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12590.php">Fernando Lemos: "[OMPI users] Using a rankfile for ompi-restart"</a>
<li><strong>Previous message:</strong> <a href="12588.php">Jeff Squyres: "Re: [OMPI users] orted: error while loading shared libraries"</a>
<li><strong>In reply to:</strong> <a href="12588.php">Jeff Squyres: "Re: [OMPI users] orted: error while loading shared libraries"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Apr 8, 2010 at 10:31 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Yes. &#160;There is usually a difference between interactive logins and non-interactive logins on which paths, etc. get set. &#160;Look in your shell startup and see if there is somewhere that it exits early (or otherwise doesn't process) for non-interactive logins.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In short: you need to ensure that your paths (etc.) are setup properly for both interactive and non-interactive logins.
</span><br>
<p>Here's a tip: take a look at your shell's man page. If I recall
<br>
correctly, bash only reads .bashrc on interative shells, .bash_profile
<br>
on all shells, or something like that. So you might want to export
<br>
LD_LIBRARY_PATH on .bash_profile too.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12590.php">Fernando Lemos: "[OMPI users] Using a rankfile for ompi-restart"</a>
<li><strong>Previous message:</strong> <a href="12588.php">Jeff Squyres: "Re: [OMPI users] orted: error while loading shared libraries"</a>
<li><strong>In reply to:</strong> <a href="12588.php">Jeff Squyres: "Re: [OMPI users] orted: error while loading shared libraries"</a>
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
