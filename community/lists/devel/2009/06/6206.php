<?
$subject_val = "Re: [OMPI devel] [RFC] Low pressure OPAL progress";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  9 12:03:12 2009" -->
<!-- isoreceived="20090609160312" -->
<!-- sent="Tue, 9 Jun 2009 09:03:06 -0700" -->
<!-- isosent="20090609160306" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [RFC] Low pressure OPAL progress" -->
<!-- id="7A5D7951-C450-4A9D-B53A-D6CA461247ED_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="D8A10FC5-05AF-4265-94A5-A81916F08CC1_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [RFC] Low pressure OPAL progress<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-09 12:03:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6207.php">Ralph Castain: "[OMPI devel] Hang in collectives involving shared memory"</a>
<li><strong>Previous message:</strong> <a href="6205.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
<li><strong>In reply to:</strong> <a href="6205.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6208.php">Sylvain Jeaugey: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 9, 2009, at 8:31 AM, Jeff Squyres (jsquyres) wrote:
<br>
<p><span class="quotelev1">&gt; 4. Note, too, that opal_progress() doesn't see *all* progress - the
</span><br>
<span class="quotelev1">&gt; openib BTL doesn't use opal_progress to know when OpenFabrics messages
</span><br>
<span class="quotelev1">&gt; arrive, for example.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Wait, I lied -- sorry.
<br>
<p>opal_progress will call the bml progress, which then calls each of the  
<br>
btl processes (or we changed it so that opal_progress directly calls  
<br>
each btl progres -- I forget which).  So technically opal_progress  
<br>
will see that &quot;something&quot; happened.  But what that &quot;something&quot; is is  
<br>
unknown -- it could be a control message, or somesuch.
<br>
<p>(I don't recall offhand what the openib btl's progress function returns)
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
<li><strong>Next message:</strong> <a href="6207.php">Ralph Castain: "[OMPI devel] Hang in collectives involving shared memory"</a>
<li><strong>Previous message:</strong> <a href="6205.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
<li><strong>In reply to:</strong> <a href="6205.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6208.php">Sylvain Jeaugey: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
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
