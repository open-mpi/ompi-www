<?
$subject_val = "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  3 11:33:51 2010" -->
<!-- isoreceived="20100903153351" -->
<!-- sent="Fri, 3 Sep 2010 11:33:42 -0400" -->
<!-- isosent="20100903153342" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH] fix mx btl_bandwidth" -->
<!-- id="029D7491-E39B-4EB8-8CE8-A1C841E27304_at_eecs.utk.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4C80FD08.1070303_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [PATCH] fix mx btl_bandwidth<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-03 11:33:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8459.php">Jeff Squyres: "Re: [OMPI devel] 1.5rc5 over MX"</a>
<li><strong>Previous message:</strong> <a href="8457.php">Brice Goglin: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<li><strong>In reply to:</strong> <a href="8457.php">Brice Goglin: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8462.php">Brice Goglin: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<li><strong>Reply:</strong> <a href="8462.php">Brice Goglin: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 3, 2010, at 09:50 , Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; Le 03/09/2010 15:38, George Bosilca a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Jeff,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I think you will have to revert this patch as the btl_bandwidth __IS__ supposed to be in Mbs and not MBs. We usually talk about networks in Mbs (there is a pattern in Ethernet 1G/10G, Myricom 10G). In addition the original design of the multi-rail was based on this assumption, and the multi-rail handling code deal with these values (at that level I don't think it really matters, but at least it needs consistent values from all BTLs).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; However, going over the existing BTLs I can see that some BTLs do not correctly set this value:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; BTL     Bandwidth        Auto-detect     Status
</span><br>
<span class="quotelev2">&gt;&gt; Elan    2000                NO           Correct
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2000 looks strange to me. Last time I played with Elan4, bandwidth was
</span><br>
<span class="quotelev1">&gt; 900MB/s or so.
</span><br>
<p>Lucky you ;) The 2000 was the bandwidth of the last Elan device we had.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; GM      250                 NO           Doubtful
</span><br>
<span class="quotelev2">&gt;&gt; MX      2000/10000          YES (Mbs)    Correct (before the patch)
</span><br>
<span class="quotelev2">&gt;&gt; OFUD    800                 NO           Doubtful
</span><br>
<span class="quotelev2">&gt;&gt; OpenIB  2000/4000/8000      YES (Mbs)    Correct (multiplied by the active_width)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I found the problem when using both MX and OpenIB at the same time, so
</span><br>
<span class="quotelev1">&gt; they can't be both wrong or both correct. IB was reporting 800, not
</span><br>
<span class="quotelev1">&gt; 2000/4000/8000. Maybe because auto-detect didn't work and the default is
</span><br>
<span class="quotelev1">&gt; wrong:
</span><br>
<span class="quotelev1">&gt; btl_openib_mca.c:527:    mca_btl_openib_module.super.btl_bandwidth = 800;
</span><br>
<p>It appears that Open IB only auto-detect the bandwidth if the value is explicitly set to zero via the mca parameters. As a last resort: as for the other devices you can set it manually. Use something like btl_openib_bandwidth_%dev_name% to set the bandwidth per device.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
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
<li><strong>Next message:</strong> <a href="8459.php">Jeff Squyres: "Re: [OMPI devel] 1.5rc5 over MX"</a>
<li><strong>Previous message:</strong> <a href="8457.php">Brice Goglin: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<li><strong>In reply to:</strong> <a href="8457.php">Brice Goglin: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8462.php">Brice Goglin: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<li><strong>Reply:</strong> <a href="8462.php">Brice Goglin: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
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
