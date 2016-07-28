<?
$subject_val = "Re: [OMPI devel] failurewithzero-lengthReduce()andbothsbuf=rbuf=NULL";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 11 09:29:11 2010" -->
<!-- isoreceived="20100211142911" -->
<!-- sent="Thu, 11 Feb 2010 09:29:03 -0500" -->
<!-- isosent="20100211142903" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] failurewithzero-lengthReduce()andbothsbuf=rbuf=NULL" -->
<!-- id="40EB69B9-1144-4CD5-B6BC-387A41CD2109_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="58D723FE08DC6A4398E6596E38F3FA170566E4_at_XMB-RCD-205.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] failurewithzero-lengthReduce()andbothsbuf=rbuf=NULL<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-11 09:29:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7407.php">George Bosilca: "Re: [OMPI devel] failure withzero-lengthReduce()andbothsbuf=rbuf=NULL"</a>
<li><strong>Previous message:</strong> <a href="7405.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] failure withzero-lengthReduce()andbothsbuf=rbuf=NULL"</a>
<li><strong>In reply to:</strong> <a href="7405.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] failure withzero-lengthReduce()andbothsbuf=rbuf=NULL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7407.php">George Bosilca: "Re: [OMPI devel] failure withzero-lengthReduce()andbothsbuf=rbuf=NULL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 11, 2010, at 7:10 AM, Jeff Squyres (jsquyres) wrote:
<br>
<p><span class="quotelev1">&gt; I misparsed your reply. Yes, bcast(1) *can* sync if it wants to. I don't have a spec handy to check if bcast(0) is defined or not (similar to reduce). If it is, then sure, it could sync as well. 
</span><br>
<p>FWIW, in looking through MPI-2.2, I don't see any language in the description of MPI_BCAST that prevents 0-byte broadcasts.  Indeed, for the &quot;count&quot; parameter description, it distinctly says &quot;non-negative integer&quot;, which, of course, includes 0.  I'm not sure why a zero-count broadcast is useful, but there it is.  :-)
<br>
<p>That being said, it says &quot;non-negative integer&quot; for the count argument of MPI_REDUCE, too.  Hmm.  But I don't see getting around REDUCE's qualifying statement later in the text about how each process provides one or a sequence of elements.
<br>
<p>Lisandro -- if you feel strongly about this, you might want to bring it up in the context of the Forum and ask about it.  I've provided my personal interpretations, but others certainly may disagree.  
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
<li><strong>Next message:</strong> <a href="7407.php">George Bosilca: "Re: [OMPI devel] failure withzero-lengthReduce()andbothsbuf=rbuf=NULL"</a>
<li><strong>Previous message:</strong> <a href="7405.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] failure withzero-lengthReduce()andbothsbuf=rbuf=NULL"</a>
<li><strong>In reply to:</strong> <a href="7405.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] failure withzero-lengthReduce()andbothsbuf=rbuf=NULL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7407.php">George Bosilca: "Re: [OMPI devel] failure withzero-lengthReduce()andbothsbuf=rbuf=NULL"</a>
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
