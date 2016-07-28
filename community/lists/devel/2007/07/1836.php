<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 10 11:31:42 2007" -->
<!-- isoreceived="20070710153142" -->
<!-- sent="Tue, 10 Jul 2007 11:31:28 -0400" -->
<!-- isosent="20070710153128" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ticket 1023" -->
<!-- id="96DE10F7-3462-41F0-BC0D-F6A8CBC198BA_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="39C75744D164D948A170E9792AF8E7CA02B3EF_at_exil.voltaire.com" -->
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
<strong>Date:</strong> 2007-07-10 11:31:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1837.php">Jeff Squyres: "Re: [OMPI devel] Multi-environment builds"</a>
<li><strong>Previous message:</strong> <a href="1835.php">Ralph H Castain: "Re: [OMPI devel] ticket 1023"</a>
<li><strong>In reply to:</strong> <a href="1834.php">Sharon Melamed: "Re: [OMPI devel] ticket 1023"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 10, 2007, at 11:18 AM, Sharon Melamed wrote:
<br>
<p><span class="quotelev1">&gt; The responsibility for mapping rank to processor is in the ODLS
</span><br>
<span class="quotelev1">&gt; component.
</span><br>
<span class="quotelev1">&gt; I didn't touch the orted code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you doesn't use orted - you steel use the ODLS component (like ODLS
</span><br>
<span class="quotelev1">&gt; bproc). Any way you mast have a component in the end machine that  
</span><br>
<span class="quotelev1">&gt; builds
</span><br>
<span class="quotelev1">&gt; the orte_odls_child_t structure from the RMAPS information and launch
</span><br>
<span class="quotelev1">&gt; the local processes. Currently this component is the ODLS. Most of my
</span><br>
<span class="quotelev1">&gt; work is in the ODLS component so if you decide to eliminate the orteds
</span><br>
<span class="quotelev1">&gt; you mast, somehow, preserve the ODLS functionality.
</span><br>
<p>...if you want processor affinity.
<br>
<p>Is that correct?  If you don't care about processor affinity and  
<br>
you're not using orted's/ODLS, then any extra mappings will be safely  
<br>
ignored, right?
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
<li><strong>Next message:</strong> <a href="1837.php">Jeff Squyres: "Re: [OMPI devel] Multi-environment builds"</a>
<li><strong>Previous message:</strong> <a href="1835.php">Ralph H Castain: "Re: [OMPI devel] ticket 1023"</a>
<li><strong>In reply to:</strong> <a href="1834.php">Sharon Melamed: "Re: [OMPI devel] ticket 1023"</a>
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
