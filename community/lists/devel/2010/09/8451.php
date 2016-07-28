<?
$subject_val = "Re: [OMPI devel] 1.5rc5 over MX";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  3 08:20:19 2010" -->
<!-- isoreceived="20100903122019" -->
<!-- sent="Fri, 3 Sep 2010 08:20:14 -0400" -->
<!-- isosent="20100903122014" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.5rc5 over MX" -->
<!-- id="FD6A8223-A86E-400A-B730-DCDACFF565C7_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E6FB5C85-C7DC-4EF7-BBDD-30B594153543_at_myri.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-03 08:20:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8452.php">Scott Atchley: "Re: [OMPI devel] 1/4/3rc1 over MX"</a>
<li><strong>Previous message:</strong> <a href="8450.php">Jeff Squyres: "Re: [OMPI devel] 1/4/3rc1 over MX"</a>
<li><strong>In reply to:</strong> <a href="8437.php">Scott Atchley: "Re: [OMPI devel] 1.5rc5 over MX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8453.php">Scott Atchley: "Re: [OMPI devel] 1.5rc5 over MX"</a>
<li><strong>Reply:</strong> <a href="8453.php">Scott Atchley: "Re: [OMPI devel] 1.5rc5 over MX"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ditto for the v1.5 patch -- it wasn't committed anywhere and no CMR was filed, so I re-opened the ticket.
<br>
<p>Plus you mentioned a 2us (!) latency increase.  Doesn't that need attention, too?
<br>
<p><p>On Sep 1, 2010, at 9:09 AM, Scott Atchley wrote:
<br>
<p><span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I posted a patch on the ticket.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Scott
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 27, 2010, at 3:08 PM, Scott Atchley wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Sure, I need to register to file the tickets.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have not had a chance yet. I will try to look at them first thing next week.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Scott
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 27, 2010, at 2:41 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Scott --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can you file tickets for this against 1.4 and 1.5?  These should probably be blockers.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Have you been able to track these down any further, perchance?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Aug 26, 2010, at 10:38 AM, Scott Atchley wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi all,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Testing 1.5rc5 over MX with the same setup as 1.4.3rc1 (RHEL 5.4 and MX 1.2.12).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This version also dies during init due to the memory manager if I do not specify which pml to use. If I specify pml ob1 or pml cm, the tests start but die with segfaults:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    131072          320       166.86       749.15
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [rain15:14939] *** Process received signal ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [rain15:14939] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [rain15:14939] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [rain15:14939] Failing at address: 0x3b20
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Again, configuring without the memory manager or setting OMPI_MCA_memory_ptmalloc2_disable=1 before calling mpirun work.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Similar latency issues with the BTl and not with the MTL.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Scott
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="8452.php">Scott Atchley: "Re: [OMPI devel] 1/4/3rc1 over MX"</a>
<li><strong>Previous message:</strong> <a href="8450.php">Jeff Squyres: "Re: [OMPI devel] 1/4/3rc1 over MX"</a>
<li><strong>In reply to:</strong> <a href="8437.php">Scott Atchley: "Re: [OMPI devel] 1.5rc5 over MX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8453.php">Scott Atchley: "Re: [OMPI devel] 1.5rc5 over MX"</a>
<li><strong>Reply:</strong> <a href="8453.php">Scott Atchley: "Re: [OMPI devel] 1.5rc5 over MX"</a>
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
