<?
$subject_val = "Re: [OMPI users] multipath support for infiniband";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 22 07:39:38 2010" -->
<!-- isoreceived="20100922113938" -->
<!-- sent="Wed, 22 Sep 2010 07:39:32 -0400" -->
<!-- isosent="20100922113932" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] multipath support for infiniband" -->
<!-- id="ACEA25EE-4367-41FC-83C3-D3007DBD5745_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4C98D315.5000109_at_zih.tu-dresden.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] multipath support for infiniband<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-22 07:39:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14270.php">Jeff Squyres: "Re: [OMPI users] PathScale problems persist"</a>
<li><strong>Previous message:</strong> <a href="14268.php">Jeff Squyres: "Re: [OMPI users] BTL layer"</a>
<li><strong>In reply to:</strong> <a href="14259.php">Jens Domke: "[OMPI users] multipath support for infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14272.php">Jens Domke: "Re: [OMPI users] multipath support for infiniband"</a>
<li><strong>Reply:</strong> <a href="14272.php">Jens Domke: "Re: [OMPI users] multipath support for infiniband"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, check out the btl_openib_max_lmc MCA parameter:
<br>
<p>shell$ ompi_info --param btl openib --parsable | grep lmc
<br>
<p><p>On Sep 21, 2010, at 11:45 AM, Jens Domke wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the InfiniBand architecture has a LMC feature to assign mutiple virtual LIDs to one port and so provides multiple paths between two ports. Is there a methode in openmpi to enable message-striping over these paths to increase bandwidth or avoid congestions?
</span><br>
<span class="quotelev1">&gt; (I don't mean the multirail feature, to split traffic across two ports of one Hca)
</span><br>
<span class="quotelev1">&gt; The only function I have found, was to enable automatic path migration over lmc, but this is only for failover, if I remember rightly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Jens
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="14270.php">Jeff Squyres: "Re: [OMPI users] PathScale problems persist"</a>
<li><strong>Previous message:</strong> <a href="14268.php">Jeff Squyres: "Re: [OMPI users] BTL layer"</a>
<li><strong>In reply to:</strong> <a href="14259.php">Jens Domke: "[OMPI users] multipath support for infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14272.php">Jens Domke: "Re: [OMPI users] multipath support for infiniband"</a>
<li><strong>Reply:</strong> <a href="14272.php">Jens Domke: "Re: [OMPI users] multipath support for infiniband"</a>
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
