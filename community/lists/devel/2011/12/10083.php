<?
$subject_val = "Re: [OMPI devel] OMPI 1.4.5rc1 posted";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 13 20:59:28 2011" -->
<!-- isoreceived="20111214015928" -->
<!-- sent="Tue, 13 Dec 2011 20:59:23 -0500" -->
<!-- isosent="20111214015923" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI 1.4.5rc1 posted" -->
<!-- id="2E9B5BC6-44D3-4E00-9A2F-1AC239F76829_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4EE7D835.5030205_at_unimelb.edu.au" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OMPI 1.4.5rc1 posted<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-13 20:59:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10084.php">Y.MATSUMOTO: "Re: [OMPI devel] Incorrect and undefined return code/function/data type at C++ header"</a>
<li><strong>Previous message:</strong> <a href="10082.php">Jeff Squyres: "Re: [OMPI devel] Invalid free (btl_openib_endpoint.c, 448) in v1.5"</a>
<li><strong>In reply to:</strong> <a href="10078.php">Christopher Samuel: "Re: [OMPI devel] OMPI 1.4.5rc1 posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10085.php">Christopher Samuel: "Re: [OMPI devel] OMPI 1.4.5rc1 posted"</a>
<li><strong>Reply:</strong> <a href="10085.php">Christopher Samuel: "Re: [OMPI devel] OMPI 1.4.5rc1 posted"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 13, 2011, at 5:56 PM, Christopher Samuel wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Did David's suggestion help?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It did, thanks - though I take David's point that there doesn't seem to
</span><br>
<span class="quotelev1">&gt; be any measurable difference between using local storage (or even tmpfs)
</span><br>
<span class="quotelev1">&gt; and Lustre for this so it seems like a warning that should be configurable.
</span><br>
<p>Fair enough.  We've definitely seen cases where the /tmp filesystem *did* matter, so perhaps it's a kernel version issue, or a phase of the moon issue, or...
<br>
<p>But yet, the point is valid that the message should be disable-able.  Let me file a ticket about it...  Done:
<br>
<p>&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/2937">https://svn.open-mpi.org/trac/ompi/ticket/2937</a>
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
<li><strong>Next message:</strong> <a href="10084.php">Y.MATSUMOTO: "Re: [OMPI devel] Incorrect and undefined return code/function/data type at C++ header"</a>
<li><strong>Previous message:</strong> <a href="10082.php">Jeff Squyres: "Re: [OMPI devel] Invalid free (btl_openib_endpoint.c, 448) in v1.5"</a>
<li><strong>In reply to:</strong> <a href="10078.php">Christopher Samuel: "Re: [OMPI devel] OMPI 1.4.5rc1 posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10085.php">Christopher Samuel: "Re: [OMPI devel] OMPI 1.4.5rc1 posted"</a>
<li><strong>Reply:</strong> <a href="10085.php">Christopher Samuel: "Re: [OMPI devel] OMPI 1.4.5rc1 posted"</a>
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
