<?
$subject_val = "Re: [OMPI devel] 1.5rc5 over MX";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 27 15:08:52 2010" -->
<!-- isoreceived="20100827190852" -->
<!-- sent="Fri, 27 Aug 2010 15:08:38 -0400" -->
<!-- isosent="20100827190838" -->
<!-- name="Scott Atchley" -->
<!-- email="atchley_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.5rc5 over MX" -->
<!-- id="9F347B12-A773-4253-B1BF-3045D57928A4_at_myri.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EEFC4AF7-6F3A-414A-B6EE-B0AB27167B7D_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.5rc5 over MX<br>
<strong>From:</strong> Scott Atchley (<em>atchley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-27 15:08:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8410.php">Larry Baker: "[OMPI devel] OpenMPI 1.4.2 and PathScale 3.2 C++"</a>
<li><strong>Previous message:</strong> <a href="8408.php">Paul H. Hargrove: "[OMPI devel] 1.5rc5 and 1.4.3rc1 tested on elan?"</a>
<li><strong>In reply to:</strong> <a href="8407.php">Jeff Squyres: "Re: [OMPI devel] 1.5rc5 over MX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/09/8437.php">Scott Atchley: "Re: [OMPI devel] 1.5rc5 over MX"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/09/8437.php">Scott Atchley: "Re: [OMPI devel] 1.5rc5 over MX"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>Sure, I need to register to file the tickets.
<br>
<p>I have not had a chance yet. I will try to look at them first thing next week.
<br>
<p>Scott
<br>
<p>On Aug 27, 2010, at 2:41 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Scott --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you file tickets for this against 1.4 and 1.5?  These should probably be blockers.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Have you been able to track these down any further, perchance?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 26, 2010, at 10:38 AM, Scott Atchley wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi all,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Testing 1.5rc5 over MX with the same setup as 1.4.3rc1 (RHEL 5.4 and MX 1.2.12).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This version also dies during init due to the memory manager if I do not specify which pml to use. If I specify pml ob1 or pml cm, the tests start but die with segfaults:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;      131072          320       166.86       749.15
</span><br>
<span class="quotelev2">&gt;&gt; [rain15:14939] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [rain15:14939] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt; [rain15:14939] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt;&gt; [rain15:14939] Failing at address: 0x3b20
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Again, configuring without the memory manager or setting OMPI_MCA_memory_ptmalloc2_disable=1 before calling mpirun work.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Similar latency issues with the BTl and not with the MTL.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Scott
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="8410.php">Larry Baker: "[OMPI devel] OpenMPI 1.4.2 and PathScale 3.2 C++"</a>
<li><strong>Previous message:</strong> <a href="8408.php">Paul H. Hargrove: "[OMPI devel] 1.5rc5 and 1.4.3rc1 tested on elan?"</a>
<li><strong>In reply to:</strong> <a href="8407.php">Jeff Squyres: "Re: [OMPI devel] 1.5rc5 over MX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/09/8437.php">Scott Atchley: "Re: [OMPI devel] 1.5rc5 over MX"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/09/8437.php">Scott Atchley: "Re: [OMPI devel] 1.5rc5 over MX"</a>
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
