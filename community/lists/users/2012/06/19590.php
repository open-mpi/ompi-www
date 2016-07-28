<?
$subject_val = "Re: [OMPI users] openib_reg_mr";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 15 10:03:02 2012" -->
<!-- isoreceived="20120615140302" -->
<!-- sent="Fri, 15 Jun 2012 10:02:57 -0400" -->
<!-- isosent="20120615140257" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openib_reg_mr" -->
<!-- id="8B3AFE89-4B63-4F6C-B574-947807628B2A_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="0463FECC-D649-463D-8E89-B26C93D23932_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] openib_reg_mr<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-15 10:02:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19591.php">Daniels, Marcus G: "Re: [OMPI users] openib_reg_mr"</a>
<li><strong>Previous message:</strong> <a href="19589.php">Jeff Squyres: "Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6"</a>
<li><strong>In reply to:</strong> <a href="19489.php">Daniels, Marcus G: "[OMPI users] openib_reg_mr"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19591.php">Daniels, Marcus G: "Re: [OMPI users] openib_reg_mr"</a>
<li><strong>Reply:</strong> <a href="19591.php">Daniels, Marcus G: "Re: [OMPI users] openib_reg_mr"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Were there any clues in /var/log/messages or dmesg?
<br>
<p>You might also want to check out this IBM writeup about some Mellanox parameters:
<br>
<p><a href="http://www.ibm.com/developerworks/wikis/display/hpccentral/Using+RDMA+with+pagepool+larger+than+8GB">http://www.ibm.com/developerworks/wikis/display/hpccentral/Using+RDMA+with+pagepool+larger+than+8GB</a>
<br>
<p>That IBM server seems to be misbehaving right now (500/internal server error), but I see that the Google cached version of it is available.
<br>
<p><p>On Jun 9, 2012, at 2:42 PM, Daniels, Marcus G wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there anything I can do about this?  I don't have any locked memory limits.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Marcus
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Creating ensight file: EnSight6.geo000001  elapsed secs=      6.84
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; The OpenFabrics (openib) BTL failed to register memory in the driver.
</span><br>
<span class="quotelev1">&gt; Please check /var/log/messages or dmesg for driver specific failure
</span><br>
<span class="quotelev1">&gt; reason.
</span><br>
<span class="quotelev1">&gt; The failure occured here:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Local host:    mlx4_0
</span><br>
<span class="quotelev1">&gt;  Device:        openib_reg_mr
</span><br>
<span class="quotelev1">&gt;  Function:      Resource temporarily unavailable()
</span><br>
<span class="quotelev1">&gt;  Errno says:    &#239;&#191;&#189;&#239;&#191;&#189;&#239;&#191;&#189;&#239;&#191;&#189;&#239;&#191;&#189;`&#239;&#191;&#189;&#239;&#191;&#189;6+
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You may need to consult with your system administrator to get this
</span><br>
<span class="quotelev1">&gt; problem fixed.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19591.php">Daniels, Marcus G: "Re: [OMPI users] openib_reg_mr"</a>
<li><strong>Previous message:</strong> <a href="19589.php">Jeff Squyres: "Re: [OMPI users] Myricom MX2G Segmentation fault on OMPI 1.6"</a>
<li><strong>In reply to:</strong> <a href="19489.php">Daniels, Marcus G: "[OMPI users] openib_reg_mr"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19591.php">Daniels, Marcus G: "Re: [OMPI users] openib_reg_mr"</a>
<li><strong>Reply:</strong> <a href="19591.php">Daniels, Marcus G: "Re: [OMPI users] openib_reg_mr"</a>
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
