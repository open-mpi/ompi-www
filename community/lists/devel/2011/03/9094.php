<?
$subject_val = "Re: [OMPI devel] Bug btl:tcp with grpcomm:hier";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 16 20:15:57 2011" -->
<!-- isoreceived="20110317001557" -->
<!-- sent="Wed, 16 Mar 2011 20:15:51 -0400" -->
<!-- isosent="20110317001551" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Bug btl:tcp with grpcomm:hier" -->
<!-- id="888C0F8E-511D-42B0-A02C-A384D17CFBBE_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="0DD8324F-4C70-4542-8753-E33071C6DEC7_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Bug btl:tcp with grpcomm:hier<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-16 20:15:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9095.php">Ralph Castain: "Re: [OMPI devel] Bug btl:tcp with grpcomm:hier"</a>
<li><strong>Previous message:</strong> <a href="9093.php">George Bosilca: "Re: [OMPI devel] Bug btl:tcp with grpcomm:hier"</a>
<li><strong>In reply to:</strong> <a href="9093.php">George Bosilca: "Re: [OMPI devel] Bug btl:tcp with grpcomm:hier"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9095.php">Ralph Castain: "Re: [OMPI devel] Bug btl:tcp with grpcomm:hier"</a>
<li><strong>Reply:</strong> <a href="9095.php">Ralph Castain: "Re: [OMPI devel] Bug btl:tcp with grpcomm:hier"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 16, 2011, at 5:37 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; I just checked and IB does work correctly. But then I remembered that IB is different, the connection are peer based, so they don't happens during the modex exchange. The data is exchanged over RML messages, but outside the modex.
</span><br>
<p>Not quite.  The openib BTL does use the modex to send around connection information.  The actual connections are made lazily -- just like the TCP BTL -- but the OOB CPC (i.e., the default connection mode in the openib BTL) uses RML to do the 2/3 way handshake.  That's all.
<br>
<p>But the point here is: the openib BTL does rely on the modex.
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
<li><strong>Next message:</strong> <a href="9095.php">Ralph Castain: "Re: [OMPI devel] Bug btl:tcp with grpcomm:hier"</a>
<li><strong>Previous message:</strong> <a href="9093.php">George Bosilca: "Re: [OMPI devel] Bug btl:tcp with grpcomm:hier"</a>
<li><strong>In reply to:</strong> <a href="9093.php">George Bosilca: "Re: [OMPI devel] Bug btl:tcp with grpcomm:hier"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9095.php">Ralph Castain: "Re: [OMPI devel] Bug btl:tcp with grpcomm:hier"</a>
<li><strong>Reply:</strong> <a href="9095.php">Ralph Castain: "Re: [OMPI devel] Bug btl:tcp with grpcomm:hier"</a>
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
