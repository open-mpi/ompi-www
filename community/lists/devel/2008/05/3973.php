<?
$subject_val = "Re: [OMPI devel] RFC: Linuxes shipping libibverbs";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 21 16:36:39 2008" -->
<!-- isoreceived="20080521203639" -->
<!-- sent="Wed, 21 May 2008 16:36:28 -0400" -->
<!-- isosent="20080521203628" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Linuxes shipping libibverbs" -->
<!-- id="951B3BD3-61E1-4B1E-977B-28D548F79270_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="48344C1F.20207_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Linuxes shipping libibverbs<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-21 16:36:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3974.php">Brian W. Barrett: "Re: [OMPI devel] openib btl build question"</a>
<li><strong>Previous message:</strong> <a href="3972.php">Brian W. Barrett: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>In reply to:</strong> <a href="3964.php">Terry Dontje: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 21, 2008, at 12:21 PM, Terry Dontje wrote:
<br>
<p><span class="quotelev1">&gt; So are you proposing to set btl_base_warn_component_unused to 0 or
</span><br>
<span class="quotelev1">&gt; something more BTL specific?
</span><br>
<p>Probably something more btl-specific.  The libibverbs-being-shipped-in- 
<br>
main-line-Linux-distro's issue doesn't really affect other BTLs, so I  
<br>
don't think it's appropriate to make this a global-to-all-of-OMPI issue.
<br>
<p>But the question of when exactly the openib BTL should call the  
<br>
function that displays that message is up in the air.  Brian and I  
<br>
seem to disagree.  :-)
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
<li><strong>Next message:</strong> <a href="3974.php">Brian W. Barrett: "Re: [OMPI devel] openib btl build question"</a>
<li><strong>Previous message:</strong> <a href="3972.php">Brian W. Barrett: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>In reply to:</strong> <a href="3964.php">Terry Dontje: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
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
