<?
$subject_val = "Re: [OMPI devel] BTL add procs errors";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  2 13:36:27 2010" -->
<!-- isoreceived="20100602173627" -->
<!-- sent="Wed, 2 Jun 2010 13:36:22 -0400" -->
<!-- isosent="20100602173622" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] BTL add procs errors" -->
<!-- id="C9A20A02-5E8E-420C-8D50-0F74C00E7D82_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AC6EE900-FF59-4A13-8213-5AE33AD82180_at_eecs.utk.edu" -->
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
<strong>Date:</strong> 2010-06-02 13:36:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8039.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Previous message:</strong> <a href="8037.php">Samuel K. Gutierrez: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<li><strong>In reply to:</strong> <a href="8034.php">George Bosilca: "Re: [OMPI devel] BTL add procs errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8051.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Reply:</strong> <a href="8051.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 2, 2010, at 12:42 PM, George Bosilca wrote:
<br>
<p><span class="quotelev2">&gt; &gt; 1. In this case, the openib BTL was not finalized, so there was a stub still there listening on the RDMACM CPC.  When another process tried to connect to X's RDMACM CPC port, Bad Things happened (because it was only half setup) and we segv'ed.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Obviously, this should be fixed.  &quot;Fixed&quot; in this case probably means closing down the RDMACM CPC listening port.  But then that leads to another form of Badness.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I wonder how this is possible. If a process X fails to connect to Y, how can Y succeed to connect to X ? Please enlighten me ...
</span><br>
<p>It doesn't.  Process X segvs after it goes into the RDMACM CPC accept code (because the openib BTL was only half setup).
<br>
<p><span class="quotelev2">&gt; &gt; 2. If the openib BTL cleanly shuts down and is *not* still listening on its modex-advertised RDMACM CPC contact port, then if some other process tries to contact process X via the modex info, it'll fail.  This will then be judged to be a fatal error.  Failover in the BML will simply have delayed the job abort until someone tries to contact X via the openib BTL.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Isn't there any kind of timeout mechanism in the RDMACM CPC? If there is one and the connection fails, then the PML will automatically try to use the next available BTL, so it will eventually fail over TCP (if available).
</span><br>
<p>Yes, there is a timeout.  I forget offhand what we do if the timeout occurs.  We probably report the connect failure in the &quot;normal&quot; way, but I don't know that for sure.
<br>
<p><span class="quotelev2">&gt; &gt; I think that the majority of this discussion about the BML failure (or not) behavior assumed that *all* processes had the same failure (at least: *I* assumed this).  But if only *some* of the processes fail a given BTL add_procs, we have a problem because we're beyond the point of deciding who can connect to whom.  Shutting down a single BTL module at that point will create an inconsistency of the distributed data.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We did assume that at least the errors are symmetric, i.e. if A fails to connect to B then B will fail when trying to connect to A. However, if there are other BTL the connection is supposed to smoothly move over some other BTL. As an example in the MX BTL, if two nodes have MX support, but they do not share the same mapper the add_procs will silently fails.
</span><br>
<p>This sounds dodgy and icky.  We have to wait for a connect timeout to fail over to the next BTL?
<br>
<p>How long is the typical/default TCP timeout?
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
<li><strong>Next message:</strong> <a href="8039.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Previous message:</strong> <a href="8037.php">Samuel K. Gutierrez: "Re: [OMPI devel] RFC: System V Shared Memory for Open MPI"</a>
<li><strong>In reply to:</strong> <a href="8034.php">George Bosilca: "Re: [OMPI devel] BTL add procs errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8051.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Reply:</strong> <a href="8051.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
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
