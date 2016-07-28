<?
$subject_val = "[OMPI devel] openib currently broken";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  2 12:22:20 2007" -->
<!-- isoreceived="20071102162220" -->
<!-- sent="Fri, 2 Nov 2007 09:21:46 -0700" -->
<!-- isosent="20071102162146" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] openib currently broken" -->
<!-- id="A979B02C-03C9-4247-8429-97B98406D525_at_cisco.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-02 12:21:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2535.php">Richard Graham: "Re: [OMPI devel] openib currently broken"</a>
<li><strong>Previous message:</strong> <a href="2533.php">Richard Graham: "[OMPI devel] Changes to ompi_free_list initialization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2535.php">Richard Graham: "Re: [OMPI devel] openib currently broken"</a>
<li><strong>Reply:</strong> <a href="2535.php">Richard Graham: "Re: [OMPI devel] openib currently broken"</a>
<li><strong>Maybe reply:</strong> <a href="2538.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openib currently broken"</a>
<li><strong>Maybe reply:</strong> <a href="2542.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openib currently broken"</a>
<li><strong>Maybe reply:</strong> <a href="2543.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openib currently broken"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The freelist changes from yesterday appear to have broken the openib  
<br>
btl.  We didn't get lots of test failures in MTT last night only  
<br>
because there was a separate (unrelated) typo in the ofud BTL that  
<br>
prevented the nightly tarball from building on any IB-capable  
<br>
machines.  :-)
<br>
<p>Rich hopes to look into fixing the openib BTL problem today; he  
<br>
thinks it's a case of a simple oversight: the openib BTL is not using  
<br>
the new freelist init functions.
<br>
<p>Rich: are there other places that are not using the new init  
<br>
functions that need to?
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
<li><strong>Next message:</strong> <a href="2535.php">Richard Graham: "Re: [OMPI devel] openib currently broken"</a>
<li><strong>Previous message:</strong> <a href="2533.php">Richard Graham: "[OMPI devel] Changes to ompi_free_list initialization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2535.php">Richard Graham: "Re: [OMPI devel] openib currently broken"</a>
<li><strong>Reply:</strong> <a href="2535.php">Richard Graham: "Re: [OMPI devel] openib currently broken"</a>
<li><strong>Maybe reply:</strong> <a href="2538.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openib currently broken"</a>
<li><strong>Maybe reply:</strong> <a href="2542.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openib currently broken"</a>
<li><strong>Maybe reply:</strong> <a href="2543.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openib currently broken"</a>
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
