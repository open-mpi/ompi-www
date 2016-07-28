<?
$subject_val = "Re: [OMPI users] btl_openib_ipaddr_include broken in 1.4.4rc2?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 13 07:27:02 2011" -->
<!-- isoreceived="20110913112702" -->
<!-- sent="Tue, 13 Sep 2011 07:26:54 -0400" -->
<!-- isosent="20110913112654" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] btl_openib_ipaddr_include broken in 1.4.4rc2?" -->
<!-- id="690C330B-9A1A-4707-B34A-F9EA3B0E35AB_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4E631C7C.5000509_at_dev.mellanox.co.il" -->
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
<strong>Subject:</strong> Re: [OMPI users] btl_openib_ipaddr_include broken in 1.4.4rc2?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-13 07:26:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17252.php">nn3003: "Re: [OMPI users] #cpus/socket"</a>
<li><strong>Previous message:</strong> <a href="17250.php">Brice Goglin: "Re: [OMPI users] #cpus/socket"</a>
<li><strong>In reply to:</strong> <a href="17149.php">Yevgeny Kliteynik: "Re: [OMPI users] btl_openib_ipaddr_include broken in 1.4.4rc2?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mike --
<br>
<p>This fix has since been included in rc3.  Can you confirm that it is working for you?
<br>
<p><p>On Sep 4, 2011, at 2:36 AM, Yevgeny Kliteynik wrote:
<br>
<p><span class="quotelev1">&gt; On 30-Aug-11 4:50 PM, Michael Shuey wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I'm using RoCE (or rather, attempting to) and need to select a
</span><br>
<span class="quotelev2">&gt;&gt; non-default GID to get my traffic properly classified.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You probably saw it, but just making sure:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=openfabrics#ompi-over-roce">http://www.open-mpi.org/faq/?category=openfabrics#ompi-over-roce</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Both 1.4.4rc2
</span><br>
<span class="quotelev2">&gt;&gt; and 1.5.4 support the btl_openib_ipaddr_include option, but only 1.5.4
</span><br>
<span class="quotelev2">&gt;&gt; causes my traffic to use the proper GID and VLAN.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is there something broken with ipaddr_include in 1.4.4rc2?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, there is.
</span><br>
<span class="quotelev1">&gt; It is already fixed, but RC2 doesn't have the fix yet.
</span><br>
<span class="quotelev1">&gt; It will be included in the next build.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- YK
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Mike Shuey
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17252.php">nn3003: "Re: [OMPI users] #cpus/socket"</a>
<li><strong>Previous message:</strong> <a href="17250.php">Brice Goglin: "Re: [OMPI users] #cpus/socket"</a>
<li><strong>In reply to:</strong> <a href="17149.php">Yevgeny Kliteynik: "Re: [OMPI users] btl_openib_ipaddr_include broken in 1.4.4rc2?"</a>
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
