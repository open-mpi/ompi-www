<?
$subject_val = "[OMPI devel] MCA param aliases/etc.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 16 07:02:36 2008" -->
<!-- isoreceived="20080716110236" -->
<!-- sent="Wed, 16 Jul 2008 07:02:31 -0400" -->
<!-- isosent="20080716110231" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] MCA param aliases/etc." -->
<!-- id="A071C381-92FF-4602-B3A5-FD41E03B29FA_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] MCA param aliases/etc.<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-16 07:02:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4366.php">Jeff Squyres: "Re: [OMPI devel] ompi_ignore dr pml?"</a>
<li><strong>Previous message:</strong> <a href="4364.php">Mark Debbage: "[OMPI devel] Insufficient lockable memory leads to osu_bibw hang using OpenIB BTL"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brad / George --
<br>
<p>As part of the MCA param review (v1.2 vs. v1.3), if we want to use the  
<br>
&quot;deprecated&quot; or &quot;alias&quot; features, I can bring over the new  
<br>
functionality from the trunk to the v1.3 tree.
<br>
<p>Perhaps we should have a first cut of the MCA param comparison next  
<br>
Tuesday.  It would be helpful if the RMs could present:
<br>
<p>- what MCA params disappeared v1.2-&gt;v1.3
<br>
- what MCA params appeared v1.2-&gt;v1.3
<br>
<p>Developers can then comment on some of the more specific  
<br>
relationships.  For example, developers can identify if an MCA param  
<br>
was simply renamed (i.e., the functionality is identical), and/or if  
<br>
an MCA param was replaced with a new one (i.e., the functionality  
<br>
changed and therefore the old MCA params are no longer relevant;  
<br>
perhaps replaced with new ones).
<br>
<p>This information can be used to help decide if it's worth it to bring  
<br>
over the new MCA param alias/deprecated functionality to v1.3.
<br>
<p>Howzat?
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
<li><strong>Next message:</strong> <a href="4366.php">Jeff Squyres: "Re: [OMPI devel] ompi_ignore dr pml?"</a>
<li><strong>Previous message:</strong> <a href="4364.php">Mark Debbage: "[OMPI devel] Insufficient lockable memory leads to osu_bibw hang using OpenIB BTL"</a>
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
