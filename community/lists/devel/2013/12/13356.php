<?
$subject_val = "Re: [OMPI devel] SC13 birds of a feather";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  4 06:39:30 2013" -->
<!-- isoreceived="20131204113930" -->
<!-- sent="Wed, 4 Dec 2013 11:39:29 +0000" -->
<!-- isosent="20131204113929" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SC13 birds of a feather" -->
<!-- id="DFCD8401-D8C7-45E7-B27B-EE406B750824_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="529E7D35.9020205_at_unimelb.edu.au" -->
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
<strong>Subject:</strong> Re: [OMPI devel] SC13 birds of a feather<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-04 06:39:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13357.php">Chris Samuel: "Re: [OMPI devel] SC13 birds of a feather"</a>
<li><strong>Previous message:</strong> <a href="13355.php">Isa&#237;as A. Compr&#233;s Ure&#241;a: "Re: [OMPI devel] SC13 birds of a feather"</a>
<li><strong>In reply to:</strong> <a href="13352.php">Christopher Samuel: "Re: [OMPI devel] SC13 birds of a feather"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13357.php">Chris Samuel: "Re: [OMPI devel] SC13 birds of a feather"</a>
<li><strong>Reply:</strong> <a href="13357.php">Chris Samuel: "Re: [OMPI devel] SC13 birds of a feather"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 3, 2013, at 7:54 PM, Christopher Samuel &lt;samuel_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev2">&gt;&gt; 2. The MPI_T performance variables are new.  There's only a few 
</span><br>
<span class="quotelev2">&gt;&gt; created right now (e.g., in the Cisco usnic BTL).  But the field
</span><br>
<span class="quotelev2">&gt;&gt; is pretty wide open here -- the infrastructure is there, but we're 
</span><br>
<span class="quotelev2">&gt;&gt; really not exposing much information yet.  There's lots that can
</span><br>
<span class="quotelev2">&gt;&gt; be done here.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Would it make any sense to expose system/environmental/thermal
</span><br>
<span class="quotelev1">&gt; information to the application via MPI_T ?
</span><br>
<p>Hmm.  Interesting idea.
<br>
<p>Is the best way to grab such stuff via IPMI?
<br>
<p>That might well be do-able, since there's no performance penalty for reading such values until you actually read the values (i.e., we don't actively monitor these values in OMPI's overall progression engine; they're only read when the application invokes an MPI_T read function).
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13357.php">Chris Samuel: "Re: [OMPI devel] SC13 birds of a feather"</a>
<li><strong>Previous message:</strong> <a href="13355.php">Isa&#237;as A. Compr&#233;s Ure&#241;a: "Re: [OMPI devel] SC13 birds of a feather"</a>
<li><strong>In reply to:</strong> <a href="13352.php">Christopher Samuel: "Re: [OMPI devel] SC13 birds of a feather"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13357.php">Chris Samuel: "Re: [OMPI devel] SC13 birds of a feather"</a>
<li><strong>Reply:</strong> <a href="13357.php">Chris Samuel: "Re: [OMPI devel] SC13 birds of a feather"</a>
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
