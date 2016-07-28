<?
$subject_val = "Re: [OMPI users] openmpi 1.2.9 with Xgrid support more information";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 26 05:48:49 2009" -->
<!-- isoreceived="20090226104849" -->
<!-- sent="Thu, 26 Feb 2009 11:48:43 +0100" -->
<!-- isosent="20090226104843" -->
<!-- name="Ricardo Fern&#225;ndez-Perea" -->
<!-- email="rfernandezperea_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi 1.2.9 with Xgrid support more information" -->
<!-- id="ebd2bd0b0902260248g3b2431e0r9e76ba2633b3aae6_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="ebd2bd0b0902260140u7fa676c0le7da036e9664468a_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2009-02-26 05:48:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8211.php">Kiril Dichev: "Re: [OMPI users] Problems in 1.3 loading shared libs when using	VampirServer"</a>
<li><strong>Previous message:</strong> <a href="8209.php">Reuti: "Re: [OMPI users] Ompi runs thru cmd line but fails when run thru SGE"</a>
<li><strong>In reply to:</strong> <a href="8208.php">Ricardo Fern&#225;ndez-Perea: "Re: [OMPI users] openmpi 1.2.9 with Xgrid support more information"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi I have been looking to the code.
<br>
<p>and some documentation.
<br>
<p>By apple documentation the finalize method should never been call.
<br>
so that seems to be erroneous
<br>
<p>the connection belong to an autorelease pool that is release just after it
<br>
and due to the comment in the code
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;/* need to shut down connection */
<br>
<p><p>I have thought that the real intention was to end the connection to the
<br>
controller that by the documentation should be the close method that by
<br>
apple documentation should only be call when the connection is in the
<br>
opening or open state and
<br>
<p>I grep the code and nowhere else the connection is close so I applied the
<br>
following  diff
<br>
<p><p>diff pls_xgrid_client_old.m pls_xgrid_client.m
<br>
<p><p>107,108c107,109
<br>
<p>&lt;     [connection finalize];
<br>
<p>&lt;
<br>
<p><pre>
---
&gt;     if ([connection state] != XGConnectionStateOpen) {
&gt;     [connection close];
&gt;     }
and now seems to run with no problems.
Anyone can spot any reason for concern with this change?
Yours
Ricardo
On Thu, Feb 26, 2009 at 10:40 AM, Ricardo Fern&#225;ndez-Perea &lt;
rfernandezperea_at_[hidden]&gt; wrote:
&gt; Yes Brian
&gt; Its in Leopard.
&gt;
&gt; thanks for your interest.
&gt;
&gt; Ricardo
&gt;
&gt; On Wed, Feb 25, 2009 at 9:45 PM, Brian W. Barrett &lt;brbarret_at_[hidden]&gt;wrote:
&gt;
&gt;&gt; Ricardo -
&gt;&gt;
&gt;&gt; That's really interesting.  THis is on a Leopard system, right?  I'm the
&gt;&gt; author/maintainer of the xgrid code.  Unfortunately, I've been hiding trying
&gt;&gt; to finish my dissertation the last couple of months.  I can't offer much
&gt;&gt; advice without digging into it in more detail than I have time to do in the
&gt;&gt; near future.
&gt;&gt;
&gt;&gt; Brian
&gt;&gt;
&gt;&gt;
&gt;&gt; On Wed, 25 Feb 2009, Ricardo Fern&#225;ndez-Perea wrote:
&gt;&gt;
&gt;&gt;  HI
&gt;&gt;&gt; I Have checked the crash log.
&gt;&gt;&gt;
&gt;&gt;&gt; the result is bellow.
&gt;&gt;&gt;
&gt;&gt;&gt; If I am reading it and following the mpirun code correctly the release of
&gt;&gt;&gt; the last
&gt;&gt;&gt; mca_pls_xgrid_component.client
&gt;&gt;&gt;  by orte_pls_xgrid_finalize
&gt;&gt;&gt; causes a call to method dealloc for PlsXGridClient
&gt;&gt;&gt;
&gt;&gt;&gt; where a
&gt;&gt;&gt;
&gt;&gt;&gt; [connection finalize]
&gt;&gt;&gt;
&gt;&gt;&gt; is call that ends as a  [NSObject finalize]
&gt;&gt;&gt; I think is as intended,  anyone knows if that is correct?
&gt;&gt;&gt; but for some unknown reason is not liked for my configuration.
&gt;&gt;&gt; The only thing that I can find is that the behaviour of the finalize
&gt;&gt;&gt; method in NSObject  depends of the status of garbage collection.
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; I am using gcc-4.4 and Xcode 3.1.2.
&gt;&gt;&gt;
&gt;&gt;&gt; Ricardo
&gt;&gt;&gt;
&gt;&gt;&gt; Process:         mpirun [854]
&gt;&gt;&gt; Path:            /opt/openmpi/bin/mpirun
&gt;&gt;&gt; Identifier:      mpirun
&gt;&gt;&gt; Version:         ??? (???)
&gt;&gt;&gt; Code Type:       X86 (Native)
&gt;&gt;&gt; Parent Process:  bash [829]
&gt;&gt;&gt;
&gt;&gt;&gt; Date/Time:       2009-02-25 17:09:53.411 +0100
&gt;&gt;&gt; OS Version:      Mac OS X Server 10.5.6 (9G71)
&gt;&gt;&gt; Report Version:  6
&gt;&gt;&gt;
&gt;&gt;&gt; Exception Type:  EXC_BREAKPOINT (SIGTRAP)
&gt;&gt;&gt; Exception Codes: 0x0000000000000002, 0x0000000000000000
&gt;&gt;&gt; Crashed Thread:  0
&gt;&gt;&gt;
&gt;&gt;&gt; Application Specific Information:
&gt;&gt;&gt; *** Terminating app due to uncaught exception
&gt;&gt;&gt; 'NSInvalidArgumentException', reason: '***
&gt;&gt;&gt; -[NSKVONotifying_XGConnection&lt;0x216910&gt; finalize]: called when collecting
&gt;&gt;&gt; not enabled'
&gt;&gt;&gt;
&gt;&gt;&gt; Thread 0 Crashed:
&gt;&gt;&gt; 0   com.apple.CoreFoundation       0x917dffb4
&gt;&gt;&gt; ___TERMINATING_DUE_TO_UNCAUGHT_EXCEPTION___ + 4
&gt;&gt;&gt; 1   libobjc.A.dylib               0x91255e3b objc_exception_throw + 40
&gt;&gt;&gt; 2   com.apple.CoreFoundation       0x917e701d -[NSObject finalize] + 157
&gt;&gt;&gt; 3   mca_pls_xgrid.so               0x0019bf8b -[PlsXGridClient dealloc] +
&gt;&gt;&gt; 59 (opal_object.h:403)
&gt;&gt;&gt; 4   mca_pls_xgrid.so               0x0019a120 orte_pls_xgrid_finalize +
&gt;&gt;&gt; 48 (pls_xgrid_module.m:219)
&gt;&gt;&gt; 5   libopen-rte.0.dylib           0x0007b093 orte_pls_base_close + 35
&gt;&gt;&gt; 6   libopen-rte.0.dylib           0x0005cb5e orte_system_finalize + 142
&gt;&gt;&gt; 7   libopen-rte.0.dylib           0x0005932f orte_finalize + 47
&gt;&gt;&gt; 8   mpirun                         0x00002702 orterun + 2202
&gt;&gt;&gt; (orterun.c:496)
&gt;&gt;&gt; 9   mpirun                         0x00001b06 main + 24 (main.c:14)
&gt;&gt;&gt; 10  mpirun                         0x00001ac2 start + 54
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt; _______________________________________________
&gt;&gt; users mailing list
&gt;&gt; users_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;
&gt;
&gt;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8210/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8211.php">Kiril Dichev: "Re: [OMPI users] Problems in 1.3 loading shared libs when using	VampirServer"</a>
<li><strong>Previous message:</strong> <a href="8209.php">Reuti: "Re: [OMPI users] Ompi runs thru cmd line but fails when run thru SGE"</a>
<li><strong>In reply to:</strong> <a href="8208.php">Ricardo Fern&#225;ndez-Perea: "Re: [OMPI users] openmpi 1.2.9 with Xgrid support more information"</a>
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
