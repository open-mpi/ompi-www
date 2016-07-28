<?
$subject_val = "Re: [OMPI devel] XRC Support";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  8 22:25:37 2015" -->
<!-- isoreceived="20150709022537" -->
<!-- sent="Wed, 8 Jul 2015 19:25:26 -0700" -->
<!-- isosent="20150709022526" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] XRC Support" -->
<!-- id="CAAvDA15g3ZYnrbX2tOSq7wvaVNuUG-kNdvPK5cF894s0oE5Atw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="004b01d0b9e4$2e44fea0$8acefbe0$_at_nci.org.au" -->
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
<strong>Subject:</strong> Re: [OMPI devel] XRC Support<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-08 22:25:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17601.php">Gilles Gouaillardet: "Re: [OMPI devel] XRC Support"</a>
<li><strong>Previous message:</strong> <a href="17599.php">Ben Menadue: "[OMPI devel] XRC Support"</a>
<li><strong>In reply to:</strong> <a href="17599.php">Ben Menadue: "[OMPI devel] XRC Support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17601.php">Gilles Gouaillardet: "Re: [OMPI devel] XRC Support"</a>
<li><strong>Reply:</strong> <a href="17601.php">Gilles Gouaillardet: "Re: [OMPI devel] XRC Support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just gave the whole 1.8 series a spin and it looks like &quot;ConnectX XRC&quot;
<br>
configure logic has been broken since 1.8.5, but worked in 1.8.4:
<br>
<p>$ grep  'ConnectX XRC support' openmpi-1.*-icc-14/LOG/configure.log|  sort
<br>
-u
<br>
openmpi-1.8-linux-x86_64-icc-14/LOG/configure.log:checking if ConnectX XRC
<br>
support is enabled... yes
<br>
openmpi-1.8.1-linux-x86_64-icc-14/LOG/configure.log:checking if ConnectX
<br>
XRC support is enabled... yes
<br>
openmpi-1.8.2-linux-x86_64-icc-14/LOG/configure.log:checking if ConnectX
<br>
XRC support is enabled... yes
<br>
openmpi-1.8.3-linux-x86_64-icc-14/LOG/configure.log:checking if ConnectX
<br>
XRC support is enabled... yes
<br>
openmpi-1.8.4-linux-x86_64-icc-14/LOG/configure.log:checking if ConnectX
<br>
XRC support is enabled... yes
<br>
openmpi-1.8.5-linux-x86_64-icc-14/LOG/configure.log:checking if ConnectX
<br>
XRC support is enabled... no
<br>
openmpi-1.8.6-linux-x86_64-icc-14/LOG/configure.log:checking if ConnectX
<br>
XRC support is enabled... no
<br>
<p>In addition to fixing the error in the configure logic, I wonder if anyone
<br>
has thought on mechanisms to detect regressions of this sort?
<br>
<p>-Paul
<br>
<p>On Wed, Jul 8, 2015 at 6:11 PM, Ben Menadue &lt;ben.menadue_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I just finished building 1.8.6 and master on our cluster and noticed that
</span><br>
<span class="quotelev1">&gt; for both, XRC support wasn't being detected because it didn't detect the
</span><br>
<span class="quotelev1">&gt; IBV_SRQT_XRC declaration:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         checking whether IBV_SRQT_XRC is declared... (cached) no
</span><br>
<span class="quotelev1">&gt;         ...
</span><br>
<span class="quotelev1">&gt;         checking if ConnectX XRC support is enabled... no
</span><br>
<span class="quotelev1">&gt;         checking if ConnectIB XRC support is enabled... no
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Both of these builds had --enable-openib-connectx-xrc. Having a look in the
</span><br>
<span class="quotelev1">&gt; config.log, I found this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; configure:191690: checking whether IBV_SRQT_XRC is declared
</span><br>
<span class="quotelev1">&gt; configure:191690: gcc -std=gnu99 -c -O3 -DNDEBUG -finline-functions
</span><br>
<span class="quotelev1">&gt; -fno-strict-aliasing -pthread
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -I/short/z00/bjm900/build/openmpi/openmpi-1.8.6/opal/mca/hwloc/hwloc191/hwlo
</span><br>
<span class="quotelev1">&gt; c/include
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -I/short/z00/bjm900/build/openmpi/openmpi-1.8.6/build/gnu/opal/mca/hwloc/hwl
</span><br>
<span class="quotelev1">&gt; oc191/hwloc/include
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -I/short/z00/bjm900/build/openmpi/openmpi-1.8.6/opal/mca/event/libevent2021/
</span><br>
<span class="quotelev1">&gt; libevent
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -I/short/z00/bjm900/build/openmpi/openmpi-1.8.6/opal/mca/event/libevent2021/
</span><br>
<span class="quotelev1">&gt; libevent/include
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -I/short/z00/bjm900/build/openmpi/openmpi-1.8.6/build/gnu/opal/mca/event/lib
</span><br>
<span class="quotelev1">&gt; event2021/libevent/include  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; conftest.c: In function 'main':
</span><br>
<span class="quotelev1">&gt; conftest.c:718: error: 'IBV_SRQT_XRC' undeclared (first use in this
</span><br>
<span class="quotelev1">&gt; function)
</span><br>
<span class="quotelev1">&gt; conftest.c:718: error: (Each undeclared identifier is reported only once
</span><br>
<span class="quotelev1">&gt; conftest.c:718: error: for each function it appears in.)
</span><br>
<span class="quotelev1">&gt; configure:191690: $? = 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you have a look at the test program, the failure is because it forgets
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev1">&gt; include the infiniband/verbs.h header, and sure enough the configure script
</span><br>
<span class="quotelev1">&gt; bears this out:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         ac_fn_c_check_decl &quot;$LINENO&quot; &quot;IBV_SRQT_XRC&quot;
</span><br>
<span class="quotelev1">&gt; &quot;ac_cv_have_decl_IBV_SRQT_XRC&quot; &quot;$ac_includes_default&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Changing &quot;$ac_includes_default&quot; to &quot;#include &lt;infiniband/verbs.h&gt;&quot; and
</span><br>
<span class="quotelev1">&gt; reconfiguring allows it to detect this declaration and then enable support
</span><br>
<span class="quotelev1">&gt; for XRC:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         checking whether IBV_SRQT_XRC is declared... (cached) yes
</span><br>
<span class="quotelev1">&gt;         ...
</span><br>
<span class="quotelev1">&gt;         checking if ConnectX XRC support is enabled... yes
</span><br>
<span class="quotelev1">&gt;         checking if ConnectIB XRC support is enabled... yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Ben
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17599.php">http://www.open-mpi.org/community/lists/devel/2015/07/17599.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17600/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17601.php">Gilles Gouaillardet: "Re: [OMPI devel] XRC Support"</a>
<li><strong>Previous message:</strong> <a href="17599.php">Ben Menadue: "[OMPI devel] XRC Support"</a>
<li><strong>In reply to:</strong> <a href="17599.php">Ben Menadue: "[OMPI devel] XRC Support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17601.php">Gilles Gouaillardet: "Re: [OMPI devel] XRC Support"</a>
<li><strong>Reply:</strong> <a href="17601.php">Gilles Gouaillardet: "Re: [OMPI devel] XRC Support"</a>
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
