<?
$subject_val = "Re: [OMPI devel] BTL add procs errors";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  2 12:42:42 2010" -->
<!-- isoreceived="20100602164242" -->
<!-- sent="Wed, 2 Jun 2010 12:42:28 -0400" -->
<!-- isosent="20100602164228" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] BTL add procs errors" -->
<!-- id="AC6EE900-FF59-4A13-8213-5AE33AD82180_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2EC0211C-982C-4D50-8711-F337F4A56589_at_cisco.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-02 12:42:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8035.php">Eugene Loh: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Previous message:</strong> <a href="8033.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>In reply to:</strong> <a href="8033.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8035.php">Eugene Loh: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Reply:</strong> <a href="8035.php">Eugene Loh: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Reply:</strong> <a href="8038.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 2, 2010, at 12:18 , Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Jun 2, 2010, at 12:02 PM, Ashley Pittman wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ah, this is the key.  If I have one process (out of many) fail the create_cq() function, I get a segv during finalize.  I'll dig.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is there an assumption that if process A claims to be able to communicate with process B that process B can also communicate with process A.  It almost sounds like the code needs to do a allreduce on the bitmask returned by the btls.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Actually, this is exactly the case (I just dug into the code and verified this).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In this case, we're already well beyond the point where we synchronized and decided who can connect to whom.  I.e., the modex is already done -- the openib BTL in process X has decided that it is available and has advertised its RDMACM CPC and OOB CPC contact info.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But then later in process X during the openib BTL add_procs, something fails.  So the openib clears the connect bits and transparently fails over to TCP.  No problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem is the other peers who think that they can still connect to process X via the openib BTL.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. In this case, the openib BTL was not finalized, so there was a stub still there listening on the RDMACM CPC.  When another process tried to connect to X's RDMACM CPC port, Bad Things happened (because it was only half setup) and we segv'ed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Obviously, this should be fixed.  &quot;Fixed&quot; in this case probably means closing down the RDMACM CPC listening port.  But then that leads to another form of Badness.
</span><br>
<p>I wonder how this is possible. If a process X fails to connect to Y, how can Y succeed to connect to X ? Please enlighten me ...
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. If the openib BTL cleanly shuts down and is *not* still listening on its modex-advertised RDMACM CPC contact port, then if some other process tries to contact process X via the modex info, it'll fail.  This will then be judged to be a fatal error.  Failover in the BML will simply have delayed the job abort until someone tries to contact X via the openib BTL.
</span><br>
<p>Isn't there any kind of timeout mechanism in the RDMACM CPC? If there is one and the connection fails, then the PML will automatically try to use the next available BTL, so it will eventually fail over TCP (if available).
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think that the majority of this discussion about the BML failure (or not) behavior assumed that *all* processes had the same failure (at least: *I* assumed this).  But if only *some* of the processes fail a given BTL add_procs, we have a problem because we're beyond the point of deciding who can connect to whom.  Shutting down a single BTL module at that point will create an inconsistency of the distributed data.
</span><br>
<p>We did assume that at least the errors are symmetric, i.e. if A fails to connect to B then B will fail when trying to connect to A. However, if there are other BTL the connection is supposed to smoothly move over some other BTL. As an example in the MX BTL, if two nodes have MX support, but they do not share the same mapper the add_procs will silently fails.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That seems wrong.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What to do?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8035.php">Eugene Loh: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Previous message:</strong> <a href="8033.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>In reply to:</strong> <a href="8033.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8035.php">Eugene Loh: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Reply:</strong> <a href="8035.php">Eugene Loh: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Reply:</strong> <a href="8038.php">Jeff Squyres: "Re: [OMPI devel] BTL add procs errors"</a>
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
