<?
$subject_val = "Re: [OMPI devel] MXM question";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug  3 09:11:39 2011" -->
<!-- isoreceived="20110803131139" -->
<!-- sent="Wed, 3 Aug 2011 09:11:34 -0400" -->
<!-- isosent="20110803131134" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MXM question" -->
<!-- id="C6588A6B-22B3-4CB3-B328-B5DE72584F82_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAL3GGtphm3Pcs9JpJBh0XQHcphOh19dYFr_faUyi7mViJKbtew_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MXM question<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-03 09:11:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9591.php">Brice Goglin: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<li><strong>Previous message:</strong> <a href="9589.php">Mike Dubman: "Re: [OMPI devel] MXM question"</a>
<li><strong>In reply to:</strong> <a href="9589.php">Mike Dubman: "Re: [OMPI devel] MXM question"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 3, 2011, at 1:20 AM, Mike Dubman wrote:
<br>
<p><span class="quotelev1">&gt; yes, it is for Infiniband only
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If OMPI was compiled with mxm support - it will be always selected. (same selection logic as for other MTL components)
</span><br>
<p>That's not quite right for 2 reasons:
<br>
<p>1. The other MTL's test their underlying init functions, and if they fail, disqualify that MTL (similar to MXM).  PSM does a nice job, for example, returns OPAL_ERR_NOT_AVAILABLE if no PSM hardware is available.  MXM does something similar, but it only checks for /dev/infiniband/uverbs0.  
<br>
<p>This is not sufficient -- it will cause anyone with iWARP or RoCE devices to fail.  Indeed, it doesn't even check if the device is a ConnectX device, so anyone with non-ConnectX HCAs may also fail.
<br>
<p>Verbs unfortunately fronts multiple different kinds of network devices, so you need to be more careful before unilaterally assuming that the entire world only runs ConnectX devices.
<br>
<p><span class="quotelev1">&gt; It should be explicitly disabled to fall back into PML.
</span><br>
<p>I disagree.  There's at least 3 cases that I can think of:
<br>
<p>1. There's only ConnectX OFED devices in the node.
<br>
2. There's only non-ConnectX OFED devices in the node.
<br>
3. There's a mix of ConnectX and non-ConnectX OFED devices in the node.
<br>
<p>In case 1, MXM should probably assume that it should be used (pending any other tradeoffs vs. openib/ob1...?).
<br>
<p>In case 2, MXM should clearly disqualify itself.
<br>
<p>In case 3, it's unclear what should happen, IMHO.  I have several nodes like this myself, for example.  Print a warning message, or no?  Allow MXM to continue, or disqualify itself?  Error out, or no?  ...etc.  I'm not sure what the right answer is here.
<br>
<p><p><span class="quotelev1">&gt; On Tue, Aug 2, 2011 at 10:29 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Is MXM for InfiniBand only?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; E.g., what happens if I have the MXM MTL component available on a machine with iWARP or RoCE devices?
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
<p><p><pre>
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
<li><strong>Next message:</strong> <a href="9591.php">Brice Goglin: "Re: [OMPI devel] Open MPI + HWLOC + Static build  issue"</a>
<li><strong>Previous message:</strong> <a href="9589.php">Mike Dubman: "Re: [OMPI devel] MXM question"</a>
<li><strong>In reply to:</strong> <a href="9589.php">Mike Dubman: "Re: [OMPI devel] MXM question"</a>
<!-- nextthread="start" -->
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
