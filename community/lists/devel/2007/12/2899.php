<?
$subject_val = "[OMPI devel] openib xrc CPC minor nit";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 20 17:40:04 2007" -->
<!-- isoreceived="20071220224004" -->
<!-- sent="Thu, 20 Dec 2007 17:39:36 -0500" -->
<!-- isosent="20071220223936" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] openib xrc CPC minor nit" -->
<!-- id="F101A1FF-57C8-46CE-9554-420B2EF5BA23_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] openib xrc CPC minor nit<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-20 17:39:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2900.php">George Bosilca: "Re: [OMPI devel] pointer_array"</a>
<li><strong>Previous message:</strong> <a href="2898.php">Jeff Squyres: "Re: [OMPI devel] inline asm patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2901.php">Gleb Natapov: "Re: [OMPI devel] openib xrc CPC minor nit"</a>
<li><strong>Reply:</strong> <a href="2901.php">Gleb Natapov: "Re: [OMPI devel] openib xrc CPC minor nit"</a>
<li><strong>Reply:</strong> <a href="2907.php">Pavel Shamis (Pasha): "Re: [OMPI devel] openib xrc CPC minor nit"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Pasha --
<br>
<p>I notice in the port info struct that you have a member for the lid,  
<br>
but only #if HAVE_XRC.  Per a comment in the code, this is supposed to  
<br>
save bytes when we're using OOB (because we don't need this value in  
<br>
the OOB CPC).
<br>
<p>I think we should remove this #if and always have this struct member.   
<br>
~4 extra bytes (because it's DSS packed) is no big deal.  It's packed  
<br>
in with all the other modex info, so the message is already large.  4  
<br>
more bytes per port won't make a difference (IMHO).
<br>
<p>And keep in mind that #if HAVE_XRC is true if XRC is supported -- we  
<br>
still send the extra bytes if XRC is supported and not used (which is  
<br>
the default when compiling for OFED 1.3, no?).
<br>
<p>So I think we should remove those #if's and just always have that data  
<br>
member there.  It's up to the CPC's if they want to use that info or  
<br>
not.
<br>
<p>Any objections to me removing this #if on the openib-cpc branch?  (and  
<br>
eventual merge back up to the trunk)
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
<li><strong>Next message:</strong> <a href="2900.php">George Bosilca: "Re: [OMPI devel] pointer_array"</a>
<li><strong>Previous message:</strong> <a href="2898.php">Jeff Squyres: "Re: [OMPI devel] inline asm patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2901.php">Gleb Natapov: "Re: [OMPI devel] openib xrc CPC minor nit"</a>
<li><strong>Reply:</strong> <a href="2901.php">Gleb Natapov: "Re: [OMPI devel] openib xrc CPC minor nit"</a>
<li><strong>Reply:</strong> <a href="2907.php">Pavel Shamis (Pasha): "Re: [OMPI devel] openib xrc CPC minor nit"</a>
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
