<?
$subject_val = "Re: [OMPI users] openmpi 1.2.9 with Xgrid support more information";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 26 04:40:58 2009" -->
<!-- isoreceived="20090226094058" -->
<!-- sent="Thu, 26 Feb 2009 10:40:53 +0100" -->
<!-- isosent="20090226094053" -->
<!-- name="Ricardo Fern&#225;ndez-Perea" -->
<!-- email="rfernandezperea_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi 1.2.9 with Xgrid support more information" -->
<!-- id="ebd2bd0b0902260140u7fa676c0le7da036e9664468a_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="alpine.DEB.1.10.0902251543550.21683_at_marvin.we-be-smart.org" -->
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
<strong>From:</strong> Ricardo Fern&#225;ndez-Perea (<em>rfernandezperea_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-26 04:40:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8209.php">Reuti: "Re: [OMPI users] Ompi runs thru cmd line but fails when run thru SGE"</a>
<li><strong>Previous message:</strong> <a href="8207.php">Sangamesh B: "Re: [OMPI users] Ompi runs thru cmd line but fails when run thru SGE"</a>
<li><strong>In reply to:</strong> <a href="8202.php">Brian W. Barrett: "Re: [OMPI users] openmpi 1.2.9 with Xgrid support more information"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8210.php">Ricardo Fernández-Perea: "Re: [OMPI users] openmpi 1.2.9 with Xgrid support more information"</a>
<li><strong>Reply:</strong> <a href="8210.php">Ricardo Fernández-Perea: "Re: [OMPI users] openmpi 1.2.9 with Xgrid support more information"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes Brian
<br>
Its in Leopard.
<br>
<p>thanks for your interest.
<br>
<p>Ricardo
<br>
<p>On Wed, Feb 25, 2009 at 9:45 PM, Brian W. Barrett &lt;brbarret_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Ricardo -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That's really interesting.  THis is on a Leopard system, right?  I'm the
</span><br>
<span class="quotelev1">&gt; author/maintainer of the xgrid code.  Unfortunately, I've been hiding trying
</span><br>
<span class="quotelev1">&gt; to finish my dissertation the last couple of months.  I can't offer much
</span><br>
<span class="quotelev1">&gt; advice without digging into it in more detail than I have time to do in the
</span><br>
<span class="quotelev1">&gt; near future.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, 25 Feb 2009, Ricardo Fern&#225;ndez-Perea wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  HI
</span><br>
<span class="quotelev2">&gt;&gt; I Have checked the crash log.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; the result is bellow.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If I am reading it and following the mpirun code correctly the release of
</span><br>
<span class="quotelev2">&gt;&gt; the last
</span><br>
<span class="quotelev2">&gt;&gt; mca_pls_xgrid_component.client
</span><br>
<span class="quotelev2">&gt;&gt;  by orte_pls_xgrid_finalize
</span><br>
<span class="quotelev2">&gt;&gt; causes a call to method dealloc for PlsXGridClient
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; where a
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [connection finalize]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; is call that ends as a  [NSObject finalize]
</span><br>
<span class="quotelev2">&gt;&gt; I think is as intended,  anyone knows if that is correct?
</span><br>
<span class="quotelev2">&gt;&gt; but for some unknown reason is not liked for my configuration.
</span><br>
<span class="quotelev2">&gt;&gt; The only thing that I can find is that the behaviour of the finalize
</span><br>
<span class="quotelev2">&gt;&gt; method in NSObject  depends of the status of garbage collection.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am using gcc-4.4 and Xcode 3.1.2.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ricardo
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Process:         mpirun [854]
</span><br>
<span class="quotelev2">&gt;&gt; Path:            /opt/openmpi/bin/mpirun
</span><br>
<span class="quotelev2">&gt;&gt; Identifier:      mpirun
</span><br>
<span class="quotelev2">&gt;&gt; Version:         ??? (???)
</span><br>
<span class="quotelev2">&gt;&gt; Code Type:       X86 (Native)
</span><br>
<span class="quotelev2">&gt;&gt; Parent Process:  bash [829]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Date/Time:       2009-02-25 17:09:53.411 +0100
</span><br>
<span class="quotelev2">&gt;&gt; OS Version:      Mac OS X Server 10.5.6 (9G71)
</span><br>
<span class="quotelev2">&gt;&gt; Report Version:  6
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Exception Type:  EXC_BREAKPOINT (SIGTRAP)
</span><br>
<span class="quotelev2">&gt;&gt; Exception Codes: 0x0000000000000002, 0x0000000000000000
</span><br>
<span class="quotelev2">&gt;&gt; Crashed Thread:  0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Application Specific Information:
</span><br>
<span class="quotelev2">&gt;&gt; *** Terminating app due to uncaught exception
</span><br>
<span class="quotelev2">&gt;&gt; 'NSInvalidArgumentException', reason: '***
</span><br>
<span class="quotelev2">&gt;&gt; -[NSKVONotifying_XGConnection&lt;0x216910&gt; finalize]: called when collecting
</span><br>
<span class="quotelev2">&gt;&gt; not enabled'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thread 0 Crashed:
</span><br>
<span class="quotelev2">&gt;&gt; 0   com.apple.CoreFoundation       0x917dffb4
</span><br>
<span class="quotelev2">&gt;&gt; ___TERMINATING_DUE_TO_UNCAUGHT_EXCEPTION___ + 4
</span><br>
<span class="quotelev2">&gt;&gt; 1   libobjc.A.dylib               0x91255e3b objc_exception_throw + 40
</span><br>
<span class="quotelev2">&gt;&gt; 2   com.apple.CoreFoundation       0x917e701d -[NSObject finalize] + 157
</span><br>
<span class="quotelev2">&gt;&gt; 3   mca_pls_xgrid.so               0x0019bf8b -[PlsXGridClient dealloc] +
</span><br>
<span class="quotelev2">&gt;&gt; 59 (opal_object.h:403)
</span><br>
<span class="quotelev2">&gt;&gt; 4   mca_pls_xgrid.so               0x0019a120 orte_pls_xgrid_finalize +
</span><br>
<span class="quotelev2">&gt;&gt; 48 (pls_xgrid_module.m:219)
</span><br>
<span class="quotelev2">&gt;&gt; 5   libopen-rte.0.dylib           0x0007b093 orte_pls_base_close + 35
</span><br>
<span class="quotelev2">&gt;&gt; 6   libopen-rte.0.dylib           0x0005cb5e orte_system_finalize + 142
</span><br>
<span class="quotelev2">&gt;&gt; 7   libopen-rte.0.dylib           0x0005932f orte_finalize + 47
</span><br>
<span class="quotelev2">&gt;&gt; 8   mpirun                         0x00002702 orterun + 2202
</span><br>
<span class="quotelev2">&gt;&gt; (orterun.c:496)
</span><br>
<span class="quotelev2">&gt;&gt; 9   mpirun                         0x00001b06 main + 24 (main.c:14)
</span><br>
<span class="quotelev2">&gt;&gt; 10  mpirun                         0x00001ac2 start + 54
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8208/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8209.php">Reuti: "Re: [OMPI users] Ompi runs thru cmd line but fails when run thru SGE"</a>
<li><strong>Previous message:</strong> <a href="8207.php">Sangamesh B: "Re: [OMPI users] Ompi runs thru cmd line but fails when run thru SGE"</a>
<li><strong>In reply to:</strong> <a href="8202.php">Brian W. Barrett: "Re: [OMPI users] openmpi 1.2.9 with Xgrid support more information"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8210.php">Ricardo Fernández-Perea: "Re: [OMPI users] openmpi 1.2.9 with Xgrid support more information"</a>
<li><strong>Reply:</strong> <a href="8210.php">Ricardo Fernández-Perea: "Re: [OMPI users] openmpi 1.2.9 with Xgrid support more information"</a>
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
