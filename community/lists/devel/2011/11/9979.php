<?
$subject_val = "[OMPI devel] Rename &quot;vader&quot; BTL to &quot;xpmem&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 17 08:11:46 2011" -->
<!-- isoreceived="20111117131146" -->
<!-- sent="Thu, 17 Nov 2011 05:11:42 -0800" -->
<!-- isosent="20111117131142" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Rename &amp;quot;vader&amp;quot; BTL to &amp;quot;xpmem&amp;quot;" -->
<!-- id="B14FBF30-3147-41DF-ADC6-C89B481B7D8F_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] Rename &quot;vader&quot; BTL to &quot;xpmem&quot;<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-17 08:11:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9980.php">TERRY DONTJE: "Re: [OMPI devel] Rename &quot;vader&quot; BTL to &quot;xpmem&quot;"</a>
<li><strong>Previous message:</strong> <a href="9978.php">Hugo Daniel Meyer: "[OMPI devel] Retrying a MPI_SEND"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9980.php">TERRY DONTJE: "Re: [OMPI devel] Rename &quot;vader&quot; BTL to &quot;xpmem&quot;"</a>
<li><strong>Reply:</strong> <a href="9980.php">TERRY DONTJE: "Re: [OMPI devel] Rename &quot;vader&quot; BTL to &quot;xpmem&quot;"</a>
<li><strong>Reply:</strong> <a href="10017.php">Jeff Squyres: "Re: [OMPI devel] Rename &quot;vader&quot; BTL to &quot;xpmem&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
After having to explain to someone at SC for the umpteenth time this week that the &quot;vader&quot; BTL uses the XPMEM transport under the covers, I'd like to put forth an appeal to rename the &quot;vader&quot; BTL to be &quot;xpmem.&quot;
<br>
<p>Here's my rationale for why:
<br>
<p>1. Although we have a history of Star Wars-related names, the &quot;ob1&quot; and &quot;r2&quot; components got their names because they're mainly algorithms that have no obvious name that describes what they do.
<br>
<p>2. All other components that tie into some back-end system are named reflecting the back-end system (e.g., tcp, mx, portals, ...etc.).  &quot;openib&quot; is the weakest example, but we all know that it was named way back when OFED was named &quot;OpenIB&quot;, and the name has kinda stuck.
<br>
<p>3. The BTL name &quot;xpmem&quot; follows the law of least astonishment from the user's perspective.
<br>
<p>4. Cute names rarely seem so after 6 months.
<br>
<p>I'll even volunteer to do the work to rename it (a bunch of file moves and global search-and-replaces).
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9980.php">TERRY DONTJE: "Re: [OMPI devel] Rename &quot;vader&quot; BTL to &quot;xpmem&quot;"</a>
<li><strong>Previous message:</strong> <a href="9978.php">Hugo Daniel Meyer: "[OMPI devel] Retrying a MPI_SEND"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9980.php">TERRY DONTJE: "Re: [OMPI devel] Rename &quot;vader&quot; BTL to &quot;xpmem&quot;"</a>
<li><strong>Reply:</strong> <a href="9980.php">TERRY DONTJE: "Re: [OMPI devel] Rename &quot;vader&quot; BTL to &quot;xpmem&quot;"</a>
<li><strong>Reply:</strong> <a href="10017.php">Jeff Squyres: "Re: [OMPI devel] Rename &quot;vader&quot; BTL to &quot;xpmem&quot;"</a>
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
