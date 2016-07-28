<?
$subject_val = "Re: [OMPI devel] bug in mca_mpool_base_module_create()";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 21 10:55:23 2009" -->
<!-- isoreceived="20090421145523" -->
<!-- sent="Tue, 21 Apr 2009 10:55:17 -0400" -->
<!-- isosent="20090421145517" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] bug in mca_mpool_base_module_create()" -->
<!-- id="CCEA8EE2-813B-4559-8C90-D75F6EE0C02C_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="36AB621B-B79A-48AF-950C-7D5C215A5B7E_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] bug in mca_mpool_base_module_create()<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-21 10:55:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5850.php">Jeff Squyres: "[OMPI devel] Fwd: RFC: proposed GPLv3 license exception draft"</a>
<li><strong>Previous message:</strong> <a href="5848.php">George Bosilca: "Re: [OMPI devel] bug in mca_mpool_base_module_create()"</a>
<li><strong>In reply to:</strong> <a href="5848.php">George Bosilca: "Re: [OMPI devel] bug in mca_mpool_base_module_create()"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 21, 2009, at 10:51 AM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; I wonder why the mpool is so special that it doesn't inherit the logic
</span><br>
<span class="quotelev1">&gt; from the MCA base with regard to opening only the components that
</span><br>
<span class="quotelev1">&gt; match the user input?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Note the commit message:
<br>
<p>Correctly check for the case where we didn't find the mpool that we
<br>
were looking for. This makes the openib btl fail a little more
<br>
gracefully (for example) if you specify a bogus value to
<br>
btl_openib_mpool.
<br>
<p>The mpool does inherit the same logic for handling of &quot;--mca mpool  
<br>
foo&quot; as the other frameworks (i.e., that case would fail earlier).   
<br>
The patch was for mpool_base_module_create().
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
<li><strong>Next message:</strong> <a href="5850.php">Jeff Squyres: "[OMPI devel] Fwd: RFC: proposed GPLv3 license exception draft"</a>
<li><strong>Previous message:</strong> <a href="5848.php">George Bosilca: "Re: [OMPI devel] bug in mca_mpool_base_module_create()"</a>
<li><strong>In reply to:</strong> <a href="5848.php">George Bosilca: "Re: [OMPI devel] bug in mca_mpool_base_module_create()"</a>
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
