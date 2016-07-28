<?
$subject_val = "Re: [OMPI users] multipath support for infiniband";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 22 08:05:00 2010" -->
<!-- isoreceived="20100922120500" -->
<!-- sent="Wed, 22 Sep 2010 14:04:50 +0200" -->
<!-- isosent="20100922120450" -->
<!-- name="Jens Domke" -->
<!-- email="jens.domke_at_[hidden]" -->
<!-- subject="Re: [OMPI users] multipath support for infiniband" -->
<!-- id="4C99F0E2.20203_at_zih.tu-dresden.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="ACEA25EE-4367-41FC-83C3-D3007DBD5745_at_cisco.com" -->
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
<strong>From:</strong> Jens Domke (<em>jens.domke_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-22 08:04:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14273.php">Ake Sandgren: "Re: [OMPI users] PathScale problems persist"</a>
<li><strong>Previous message:</strong> <a href="14271.php">Jeff Squyres: "Re: [OMPI users] OpenMPI on the ARM processor architecture?"</a>
<li><strong>In reply to:</strong> <a href="14269.php">Jeff Squyres: "Re: [OMPI users] multipath support for infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14274.php">Jeff Squyres: "Re: [OMPI users] multipath support for infiniband"</a>
<li><strong>Reply:</strong> <a href="14274.php">Jeff Squyres: "Re: [OMPI users] multipath support for infiniband"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I already tried this parameter, but I don't see any improvements in the 
<br>
benchmarks. Additionally while doing further investigations into the 
<br>
opensm I didn't see the QP requests for other LIDs than the base LIDs.
<br>
<p>Regards
<br>
Jens
<br>
<p><p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Yes, check out the btl_openib_max_lmc MCA parameter:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; shell$ ompi_info --param btl openib --parsable | grep lmc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 21, 2010, at 11:45 AM, Jens Domke wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; the InfiniBand architecture has a LMC feature to assign mutiple virtual LIDs to one port and so provides multiple paths between two ports. Is there a methode in openmpi to enable message-striping over these paths to increase bandwidth or avoid congestions?
</span><br>
<span class="quotelev2">&gt;&gt; (I don't mean the multirail feature, to split traffic across two ports of one Hca)
</span><br>
<span class="quotelev2">&gt;&gt; The only function I have found, was to enable automatic path migration over lmc, but this is only for failover, if I remember rightly.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Jens
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14273.php">Ake Sandgren: "Re: [OMPI users] PathScale problems persist"</a>
<li><strong>Previous message:</strong> <a href="14271.php">Jeff Squyres: "Re: [OMPI users] OpenMPI on the ARM processor architecture?"</a>
<li><strong>In reply to:</strong> <a href="14269.php">Jeff Squyres: "Re: [OMPI users] multipath support for infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14274.php">Jeff Squyres: "Re: [OMPI users] multipath support for infiniband"</a>
<li><strong>Reply:</strong> <a href="14274.php">Jeff Squyres: "Re: [OMPI users] multipath support for infiniband"</a>
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
