<?
$subject_val = "Re: [OMPI devel] Fake Modex";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  3 10:16:12 2011" -->
<!-- isoreceived="20110603141612" -->
<!-- sent="Fri, 3 Jun 2011 10:16:06 -0400" -->
<!-- isosent="20110603141606" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fake Modex" -->
<!-- id="C63E25FB-F552-465B-8C66-E98FC3236278_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="39BB11D8-FAB2-4725-B4F1-0E12783E0531_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Fake Modex<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-03 10:16:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9296.php">Hugo Meyer: "Re: [OMPI devel] Fake Modex"</a>
<li><strong>Previous message:</strong> <a href="9294.php">Ralph Castain: "Re: [OMPI devel] Fake Modex"</a>
<li><strong>In reply to:</strong> <a href="9294.php">Ralph Castain: "Re: [OMPI devel] Fake Modex"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9296.php">Hugo Meyer: "Re: [OMPI devel] Fake Modex"</a>
<li><strong>Reply:</strong> <a href="9296.php">Hugo Meyer: "Re: [OMPI devel] Fake Modex"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 3, 2011, at 10:12 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; When an MPI proc calls MPI_Init, each btl pushes its contact info into the modex database - one example is the btl.tcp.1.7 info you found there. That entry is for the TCP btl, which is probably what you are looking for. There is no way for you to edit that data - each btl encodes it in its own way and then adds it to the modex.
</span><br>
<p>More specifically, whatever each entity puts into the modex is a blob that is only readable by other entities just like itself.  For example, what one TCP BTL puts in the modex can really only be read by another TCP BTL. The contents of what the TCP BTL puts in there is an opaque binary blob from the modex's point of view.
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
<li><strong>Next message:</strong> <a href="9296.php">Hugo Meyer: "Re: [OMPI devel] Fake Modex"</a>
<li><strong>Previous message:</strong> <a href="9294.php">Ralph Castain: "Re: [OMPI devel] Fake Modex"</a>
<li><strong>In reply to:</strong> <a href="9294.php">Ralph Castain: "Re: [OMPI devel] Fake Modex"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9296.php">Hugo Meyer: "Re: [OMPI devel] Fake Modex"</a>
<li><strong>Reply:</strong> <a href="9296.php">Hugo Meyer: "Re: [OMPI devel] Fake Modex"</a>
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
