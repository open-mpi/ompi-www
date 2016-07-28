<?
$subject_val = "Re: [OMPI users] Question about scheduler support";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 14 18:27:31 2014" -->
<!-- isoreceived="20140514222731" -->
<!-- sent="Wed, 14 May 2014 15:25:51 -0700" -->
<!-- isosent="20140514222551" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question about scheduler support" -->
<!-- id="84E4F7F4-4A6C-462C-9F38-D12680DA5AC2_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="F8BA1900-80C9-4E7A-AC0C-BDAB2CBB463A_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Question about scheduler support<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-14 18:25:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24368.php">Ralph Castain: "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>Previous message:</strong> <a href="24366.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>In reply to:</strong> <a href="24366.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question about scheduler support"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 14, 2014, at 3:21 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On May 14, 2014, at 6:09 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; FWIW: I believe we no longer build the slurm support by default, though I'd have to check to be sure. The intent is definitely not to do so.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The srun-based support builds by default.  I like it that way.  :-)
</span><br>
<p>Yeah, because you actually use Slurm - but that isn't much comfort to all those who don't, but still get a slurm module.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; PMI-based support is a different animal, right?
</span><br>
<p>Yes, it is.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The plan we adjusted to a while back was to *only* build support for schedulers upon request. Can't swear that they are all correctly updated, but that was the intent.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Why would we do that?  I'm all for a minimal ./configure line... did I miss something?
</span><br>
<p>As per my other note, we are getting a continually increasing number of &quot;default&quot; builds due to included files in the distro when there is zero intent to actually install/use the scheduler.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24368.php">Ralph Castain: "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>Previous message:</strong> <a href="24366.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>In reply to:</strong> <a href="24366.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question about scheduler support"</a>
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
