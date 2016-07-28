<?
$subject_val = "Re: [OMPI users] openmpi 1.2.9 with Xgrid support more information";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 25 15:45:52 2009" -->
<!-- isoreceived="20090225204552" -->
<!-- sent="Wed, 25 Feb 2009 15:45:47 -0500 (EST)" -->
<!-- isosent="20090225204547" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi 1.2.9 with Xgrid support more information" -->
<!-- id="alpine.DEB.1.10.0902251543550.21683_at_marvin.we-be-smart.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="ebd2bd0b0902251014s669f01b3uf3037787ecc9d51b_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi 1.2.9 with Xgrid support more information<br>
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-25 15:45:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8203.php">doriankrause: "Re: [OMPI users] 3.5 seconds before application launches"</a>
<li><strong>Previous message:</strong> <a href="8201.php">Jeff Squyres: "Re: [OMPI users] Signal: Segmentation fault (11); Signal code: Address not mapped (1)"</a>
<li><strong>In reply to:</strong> <a href="8200.php">Ricardo Fern&#225;ndez-Perea: "[OMPI users] openmpi 1.2.9 with Xgrid support more information"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8208.php">Ricardo Fernández-Perea: "Re: [OMPI users] openmpi 1.2.9 with Xgrid support more information"</a>
<li><strong>Reply:</strong> <a href="8208.php">Ricardo Fernández-Perea: "Re: [OMPI users] openmpi 1.2.9 with Xgrid support more information"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ricardo -
<br>
<p>That's really interesting.  THis is on a Leopard system, right?  I'm the 
<br>
author/maintainer of the xgrid code.  Unfortunately, I've been hiding 
<br>
trying to finish my dissertation the last couple of months.  I can't offer 
<br>
much advice without digging into it in more detail than I have time to do 
<br>
in the near future.
<br>
<p>Brian
<br>
<p>On Wed, 25 Feb 2009, Ricardo Fern&#225;ndez-Perea wrote:
<br>
<p><span class="quotelev1">&gt; HI
</span><br>
<span class="quotelev1">&gt; I Have checked the crash log.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the result is bellow.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I am reading it and following the mpirun code correctly the release of
</span><br>
<span class="quotelev1">&gt; the last
</span><br>
<span class="quotelev1">&gt; mca_pls_xgrid_component.client
</span><br>
<span class="quotelev1">&gt; &#160;by orte_pls_xgrid_finalize
</span><br>
<span class="quotelev1">&gt; causes a call to method dealloc for PlsXGridClient
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; where a&#160;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [connection finalize] &#160;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; is call that ends as a &#160;[NSObject finalize]
</span><br>
<span class="quotelev1">&gt; I think is as intended, &#160;anyone knows if that is correct?
</span><br>
<span class="quotelev1">&gt; but for some unknown reason is not liked for my configuration.
</span><br>
<span class="quotelev1">&gt; The only thing that I can find is that the behaviour of the finalize
</span><br>
<span class="quotelev1">&gt; method in NSObject &#160;depends of the status of&#160;garbage collection.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am using gcc-4.4 and Xcode 3.1.2.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ricardo
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Process: &#160; &#160; &#160; &#160; mpirun [854]
</span><br>
<span class="quotelev1">&gt; Path: &#160; &#160; &#160; &#160; &#160; &#160;/opt/openmpi/bin/mpirun
</span><br>
<span class="quotelev1">&gt; Identifier: &#160; &#160; &#160;mpirun
</span><br>
<span class="quotelev1">&gt; Version: &#160; &#160; &#160; &#160; ??? (???)
</span><br>
<span class="quotelev1">&gt; Code Type: &#160; &#160; &#160; X86 (Native)
</span><br>
<span class="quotelev1">&gt; Parent Process: &#160;bash [829]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Date/Time: &#160; &#160; &#160; 2009-02-25 17:09:53.411 +0100
</span><br>
<span class="quotelev1">&gt; OS Version: &#160; &#160; &#160;Mac OS X Server 10.5.6 (9G71)
</span><br>
<span class="quotelev1">&gt; Report Version: &#160;6
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Exception Type: &#160;EXC_BREAKPOINT (SIGTRAP)
</span><br>
<span class="quotelev1">&gt; Exception Codes: 0x0000000000000002, 0x0000000000000000
</span><br>
<span class="quotelev1">&gt; Crashed Thread: &#160;0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Application Specific Information:
</span><br>
<span class="quotelev1">&gt; *** Terminating app due to uncaught exception
</span><br>
<span class="quotelev1">&gt; 'NSInvalidArgumentException', reason: '***
</span><br>
<span class="quotelev1">&gt; -[NSKVONotifying_XGConnection&lt;0x216910&gt; finalize]: called when collecting
</span><br>
<span class="quotelev1">&gt; not enabled'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thread 0 Crashed:
</span><br>
<span class="quotelev1">&gt; 0 &#160; com.apple.CoreFoundation &#160; &#160; &#160; 0x917dffb4
</span><br>
<span class="quotelev1">&gt; ___TERMINATING_DUE_TO_UNCAUGHT_EXCEPTION___ + 4
</span><br>
<span class="quotelev1">&gt; 1 &#160; libobjc.A.dylib &#160; &#160; &#160; &#160; &#160; &#160; &#160; 0x91255e3b objc_exception_throw + 40
</span><br>
<span class="quotelev1">&gt; 2 &#160; com.apple.CoreFoundation &#160; &#160; &#160; 0x917e701d -[NSObject finalize] + 157
</span><br>
<span class="quotelev1">&gt; 3 &#160; mca_pls_xgrid.so &#160; &#160; &#160; &#160; &#160; &#160; &#160; 0x0019bf8b -[PlsXGridClient dealloc] +
</span><br>
<span class="quotelev1">&gt; 59 (opal_object.h:403)
</span><br>
<span class="quotelev1">&gt; 4 &#160; mca_pls_xgrid.so &#160; &#160; &#160; &#160; &#160; &#160; &#160; 0x0019a120 orte_pls_xgrid_finalize +
</span><br>
<span class="quotelev1">&gt; 48 (pls_xgrid_module.m:219)
</span><br>
<span class="quotelev1">&gt; 5 &#160; libopen-rte.0.dylib &#160; &#160; &#160; &#160; &#160; 0x0007b093 orte_pls_base_close + 35
</span><br>
<span class="quotelev1">&gt; 6 &#160; libopen-rte.0.dylib &#160; &#160; &#160; &#160; &#160; 0x0005cb5e orte_system_finalize + 142
</span><br>
<span class="quotelev1">&gt; 7 &#160; libopen-rte.0.dylib &#160; &#160; &#160; &#160; &#160; 0x0005932f orte_finalize + 47
</span><br>
<span class="quotelev1">&gt; 8 &#160; mpirun &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; 0x00002702 orterun + 2202
</span><br>
<span class="quotelev1">&gt; (orterun.c:496)
</span><br>
<span class="quotelev1">&gt; 9 &#160; mpirun &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; 0x00001b06 main + 24 (main.c:14)
</span><br>
<span class="quotelev1">&gt; 10 &#160;mpirun &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; 0x00001ac2 start + 54
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8203.php">doriankrause: "Re: [OMPI users] 3.5 seconds before application launches"</a>
<li><strong>Previous message:</strong> <a href="8201.php">Jeff Squyres: "Re: [OMPI users] Signal: Segmentation fault (11); Signal code: Address not mapped (1)"</a>
<li><strong>In reply to:</strong> <a href="8200.php">Ricardo Fern&#225;ndez-Perea: "[OMPI users] openmpi 1.2.9 with Xgrid support more information"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8208.php">Ricardo Fernández-Perea: "Re: [OMPI users] openmpi 1.2.9 with Xgrid support more information"</a>
<li><strong>Reply:</strong> <a href="8208.php">Ricardo Fernández-Perea: "Re: [OMPI users] openmpi 1.2.9 with Xgrid support more information"</a>
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
