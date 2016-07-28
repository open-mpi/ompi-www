<?
$subject_val = "[OMPI users] openmpi 1.2.9 with Xgrid support more information";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 25 13:14:34 2009" -->
<!-- isoreceived="20090225181434" -->
<!-- sent="Wed, 25 Feb 2009 19:14:29 +0100" -->
<!-- isosent="20090225181429" -->
<!-- name="Ricardo Fern&#225;ndez-Perea" -->
<!-- email="rfernandezperea_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi 1.2.9 with Xgrid support more information" -->
<!-- id="ebd2bd0b0902251014s669f01b3uf3037787ecc9d51b_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] openmpi 1.2.9 with Xgrid support more information<br>
<strong>From:</strong> Ricardo Fern&#225;ndez-Perea (<em>rfernandezperea_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-25 13:14:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8201.php">Jeff Squyres: "Re: [OMPI users] Signal: Segmentation fault (11); Signal code: Address not mapped (1)"</a>
<li><strong>Previous message:</strong> <a href="8199.php">Ken Mighell: "[OMPI users] Signal: Segmentation fault (11); Signal code: Address not mapped (1)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8202.php">Brian W. Barrett: "Re: [OMPI users] openmpi 1.2.9 with Xgrid support more information"</a>
<li><strong>Reply:</strong> <a href="8202.php">Brian W. Barrett: "Re: [OMPI users] openmpi 1.2.9 with Xgrid support more information"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
HI
<br>
I Have checked the crash log.
<br>
<p>the result is bellow.
<br>
<p>If I am reading it and following the mpirun code correctly the release of
<br>
the last
<br>
mca_pls_xgrid_component.client
<br>
&nbsp;by orte_pls_xgrid_finalize
<br>
causes a call to method dealloc for PlsXGridClient
<br>
<p>where a
<br>
<p>[connection finalize]
<br>
<p>is call that ends as a  [NSObject finalize]
<br>
I think is as intended,  anyone knows if that is correct?
<br>
but for some unknown reason is not liked for my configuration.
<br>
The only thing that I can find is that the behaviour of the finalize method
<br>
in NSObject  depends of the status of garbage collection.
<br>
<p><p>I am using gcc-4.4 and Xcode 3.1.2.
<br>
<p>Ricardo
<br>
<p>Process:         mpirun [854]
<br>
Path:            /opt/openmpi/bin/mpirun
<br>
Identifier:      mpirun
<br>
Version:         ??? (???)
<br>
Code Type:       X86 (Native)
<br>
Parent Process:  bash [829]
<br>
<p>Date/Time:       2009-02-25 17:09:53.411 +0100
<br>
OS Version:      Mac OS X Server 10.5.6 (9G71)
<br>
Report Version:  6
<br>
<p>Exception Type:  EXC_BREAKPOINT (SIGTRAP)
<br>
Exception Codes: 0x0000000000000002, 0x0000000000000000
<br>
Crashed Thread:  0
<br>
<p>Application Specific Information:
<br>
*** Terminating app due to uncaught exception 'NSInvalidArgumentException',
<br>
reason: '*** -[NSKVONotifying_XGConnection&lt;0x216910&gt; finalize]: called when
<br>
collecting not enabled'
<br>
<p>Thread 0 Crashed:
<br>
0   com.apple.CoreFoundation       0x917dffb4
<br>
___TERMINATING_DUE_TO_UNCAUGHT_EXCEPTION___ + 4
<br>
1   libobjc.A.dylib               0x91255e3b objc_exception_throw + 40
<br>
2   com.apple.CoreFoundation       0x917e701d -[NSObject finalize] + 157
<br>
3   mca_pls_xgrid.so               0x0019bf8b -[PlsXGridClient dealloc] + 59
<br>
(opal_object.h:403)
<br>
4   mca_pls_xgrid.so               0x0019a120 orte_pls_xgrid_finalize + 48
<br>
(pls_xgrid_module.m:219)
<br>
5   libopen-rte.0.dylib           0x0007b093 orte_pls_base_close + 35
<br>
6   libopen-rte.0.dylib           0x0005cb5e orte_system_finalize + 142
<br>
7   libopen-rte.0.dylib           0x0005932f orte_finalize + 47
<br>
8   mpirun                         0x00002702 orterun + 2202 (orterun.c:496)
<br>
9   mpirun                         0x00001b06 main + 24 (main.c:14)
<br>
10  mpirun                         0x00001ac2 start + 54
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8200/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8201.php">Jeff Squyres: "Re: [OMPI users] Signal: Segmentation fault (11); Signal code: Address not mapped (1)"</a>
<li><strong>Previous message:</strong> <a href="8199.php">Ken Mighell: "[OMPI users] Signal: Segmentation fault (11); Signal code: Address not mapped (1)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8202.php">Brian W. Barrett: "Re: [OMPI users] openmpi 1.2.9 with Xgrid support more information"</a>
<li><strong>Reply:</strong> <a href="8202.php">Brian W. Barrett: "Re: [OMPI users] openmpi 1.2.9 with Xgrid support more information"</a>
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
