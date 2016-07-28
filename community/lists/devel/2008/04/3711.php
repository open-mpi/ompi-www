<?
$subject_val = "[OMPI devel] Change in btl/tcp";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 16 07:39:32 2008" -->
<!-- isoreceived="20080416113932" -->
<!-- sent="Wed, 16 Apr 2008 13:39:19 +0200" -->
<!-- isosent="20080416113919" -->
<!-- name="Adrian Knoth" -->
<!-- email="adi_at_[hidden]" -->
<!-- subject="[OMPI devel] Change in btl/tcp" -->
<!-- id="20080416113919.GS15077_at_ltw.loris.tv" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] Change in btl/tcp<br>
<strong>From:</strong> Adrian Knoth (<em>adi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-16 07:39:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3712.php">Ralph H Castain: "[OMPI devel] New mapper module"</a>
<li><strong>Previous message:</strong> <a href="3710.php">Jeff Squyres: "[OMPI devel] sm performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3719.php">Tim Prins: "Re: [OMPI devel] Change in btl/tcp"</a>
<li><strong>Reply:</strong> <a href="3719.php">Tim Prins: "Re: [OMPI devel] Change in btl/tcp"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi!
<br>
<p>As of r18169, I've changed the acceptance rules for incoming BTL-TCP
<br>
connections.
<br>
<p>The old code would have denied a connection in case of non-matching
<br>
addresses (comparison between source address and expected source
<br>
address).
<br>
<p>Unfortunately, you cannot always say which source address an incoming
<br>
packet will have (it's the sender's kernel who decides), so rejecting a
<br>
connection due to &quot;wrong&quot; source address caused a complete hang.
<br>
<p>I had several cases, mostly multi-cluster setups, where this has happend
<br>
all the time. (typical scenario: you're expecting the headnode's
<br>
internal address, but since you're talking to another cluster,
<br>
the kernel uses the headnode's external address)
<br>
<p>Though I've tested it as much as possible, I don't know if it breaks
<br>
your setup, especially the multi-rail stuff. George?
<br>
<p><p>Cheerio
<br>
<p><pre>
-- 
Cluster and Metacomputing Working Group
Friedrich-Schiller-Universit&#228;t Jena, Germany
private: <a href="http://adi.thur.de">http://adi.thur.de</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3712.php">Ralph H Castain: "[OMPI devel] New mapper module"</a>
<li><strong>Previous message:</strong> <a href="3710.php">Jeff Squyres: "[OMPI devel] sm performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3719.php">Tim Prins: "Re: [OMPI devel] Change in btl/tcp"</a>
<li><strong>Reply:</strong> <a href="3719.php">Tim Prins: "Re: [OMPI devel] Change in btl/tcp"</a>
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
