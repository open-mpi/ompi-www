<?
$subject_val = "Re: [OMPI devel] BTL add procs errors";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  2 12:18:25 2010" -->
<!-- isoreceived="20100602161825" -->
<!-- sent="Wed, 2 Jun 2010 12:18:21 -0400" -->
<!-- isosent="20100602161821" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] BTL add procs errors" -->
<!-- id="2EC0211C-982C-4D50-8711-F337F4A56589_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="D6F9293C-1B4F-42C3-8623-B818502CD316_at_pittman.co.uk" -->
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
<strong>Subject:</strong> Re: [OMPI devel] BTL add procs errors<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-02 12:18:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8034.php">George Bosilca: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Previous message:</strong> <a href="8032.php">Ashley Pittman: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>In reply to:</strong> <a href="8032.php">Ashley Pittman: "Re: [OMPI devel] BTL add procs errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8034.php">George Bosilca: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Reply:</strong> <a href="8034.php">George Bosilca: "Re: [OMPI devel] BTL add procs errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 2, 2010, at 12:02 PM, Ashley Pittman wrote:
<br>
<p><span class="quotelev2">&gt; &gt; Ah, this is the key.  If I have one process (out of many) fail the create_cq() function, I get a segv during finalize.  I'll dig.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there an assumption that if process A claims to be able to communicate with process B that process B can also communicate with process A.  It almost sounds like the code needs to do a allreduce on the bitmask returned by the btls.
</span><br>
<p>Actually, this is exactly the case (I just dug into the code and verified this).
<br>
<p>In this case, we're already well beyond the point where we synchronized and decided who can connect to whom.  I.e., the modex is already done -- the openib BTL in process X has decided that it is available and has advertised its RDMACM CPC and OOB CPC contact info.
<br>
<p>But then later in process X during the openib BTL add_procs, something fails.  So the openib clears the connect bits and transparently fails over to TCP.  No problem.
<br>
<p>The problem is the other peers who think that they can still connect to process X via the openib BTL.
<br>
<p>1. In this case, the openib BTL was not finalized, so there was a stub still there listening on the RDMACM CPC.  When another process tried to connect to X's RDMACM CPC port, Bad Things happened (because it was only half setup) and we segv'ed.
<br>
<p>Obviously, this should be fixed.  &quot;Fixed&quot; in this case probably means closing down the RDMACM CPC listening port.  But then that leads to another form of Badness.
<br>
<p>2. If the openib BTL cleanly shuts down and is *not* still listening on its modex-advertised RDMACM CPC contact port, then if some other process tries to contact process X via the modex info, it'll fail.  This will then be judged to be a fatal error.  Failover in the BML will simply have delayed the job abort until someone tries to contact X via the openib BTL.
<br>
<p>I think that the majority of this discussion about the BML failure (or not) behavior assumed that *all* processes had the same failure (at least: *I* assumed this).  But if only *some* of the processes fail a given BTL add_procs, we have a problem because we're beyond the point of deciding who can connect to whom.  Shutting down a single BTL module at that point will create an inconsistency of the distributed data.
<br>
<p>That seems wrong.
<br>
<p>What to do?
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
<li><strong>Next message:</strong> <a href="8034.php">George Bosilca: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Previous message:</strong> <a href="8032.php">Ashley Pittman: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>In reply to:</strong> <a href="8032.php">Ashley Pittman: "Re: [OMPI devel] BTL add procs errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8034.php">George Bosilca: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Reply:</strong> <a href="8034.php">George Bosilca: "Re: [OMPI devel] BTL add procs errors"</a>
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
