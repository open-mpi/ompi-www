<?
$subject_val = "Re: [OMPI devel] XRC Support";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  9 00:36:47 2015" -->
<!-- isoreceived="20150709043647" -->
<!-- sent="Thu, 09 Jul 2015 13:36:45 +0900" -->
<!-- isosent="20150709043645" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] XRC Support" -->
<!-- id="559DFA5D.2090707_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAAvDA15g3ZYnrbX2tOSq7wvaVNuUG-kNdvPK5cF894s0oE5Atw_at_mail.gmail.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-09 00:36:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17602.php">Victor Rodriguez: "[OMPI devel] Error in ./configure for Yocto"</a>
<li><strong>Previous message:</strong> <a href="17600.php">Paul Hargrove: "Re: [OMPI devel] XRC Support"</a>
<li><strong>In reply to:</strong> <a href="17600.php">Paul Hargrove: "Re: [OMPI devel] XRC Support"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ben and Paul,
<br>
<p>Thanks for the report !
<br>
<p>it looks like a simple typo (e.g. ')' instead of ','
<br>
<p>the attached patch is for v1.8
<br>
in order to use it, you need recent autotools (see 
<br>
<a href="http://www.open-mpi.org/source/building.php">http://www.open-mpi.org/source/building.php</a>)
<br>
apply the patch, run autogen.pl, and then configure, make, make install
<br>
<p>i am now double checking this
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 7/9/2015 11:25 AM, Paul Hargrove wrote:
<br>
<span class="quotelev1">&gt; I just gave the whole 1.8 series a spin and it looks like &quot;ConnectX 
</span><br>
<span class="quotelev1">&gt; XRC&quot; configure logic has been broken since 1.8.5, but worked in 1.8.4:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ grep  'ConnectX XRC support' openmpi-1.*-icc-14/LOG/configure.log| 
</span><br>
<span class="quotelev1">&gt;  sort -u
</span><br>
<span class="quotelev1">&gt; openmpi-1.8-linux-x86_64-icc-14/LOG/configure.log:checking if ConnectX 
</span><br>
<span class="quotelev1">&gt; XRC support is enabled... yes
</span><br>
<span class="quotelev1">&gt; openmpi-1.8.1-linux-x86_64-icc-14/LOG/configure.log:checking if 
</span><br>
<span class="quotelev1">&gt; ConnectX XRC support is enabled... yes
</span><br>
<span class="quotelev1">&gt; openmpi-1.8.2-linux-x86_64-icc-14/LOG/configure.log:checking if 
</span><br>
<span class="quotelev1">&gt; ConnectX XRC support is enabled... yes
</span><br>
<span class="quotelev1">&gt; openmpi-1.8.3-linux-x86_64-icc-14/LOG/configure.log:checking if 
</span><br>
<span class="quotelev1">&gt; ConnectX XRC support is enabled... yes
</span><br>
<span class="quotelev1">&gt; openmpi-1.8.4-linux-x86_64-icc-14/LOG/configure.log:checking if 
</span><br>
<span class="quotelev1">&gt; ConnectX XRC support is enabled... yes
</span><br>
<span class="quotelev1">&gt; openmpi-1.8.5-linux-x86_64-icc-14/LOG/configure.log:checking if 
</span><br>
<span class="quotelev1">&gt; ConnectX XRC support is enabled... no
</span><br>
<span class="quotelev1">&gt; openmpi-1.8.6-linux-x86_64-icc-14/LOG/configure.log:checking if 
</span><br>
<span class="quotelev1">&gt; ConnectX XRC support is enabled... no
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In addition to fixing the error in the configure logic, I wonder if 
</span><br>
<span class="quotelev1">&gt; anyone has thought on mechanisms to detect regressions of this sort?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Jul 8, 2015 at 6:11 PM, Ben Menadue &lt;ben.menadue_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:ben.menadue_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I just finished building 1.8.6 and master on our cluster and
</span><br>
<span class="quotelev1">&gt;     noticed that
</span><br>
<span class="quotelev1">&gt;     for both, XRC support wasn't being detected because it didn't
</span><br>
<span class="quotelev1">&gt;     detect the
</span><br>
<span class="quotelev1">&gt;     IBV_SRQT_XRC declaration:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             checking whether IBV_SRQT_XRC is declared... (cached) no
</span><br>
<span class="quotelev1">&gt;             ...
</span><br>
<span class="quotelev1">&gt;             checking if ConnectX XRC support is enabled... no
</span><br>
<span class="quotelev1">&gt;             checking if ConnectIB XRC support is enabled... no
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Both of these builds had --enable-openib-connectx-xrc. Having a
</span><br>
<span class="quotelev1">&gt;     look in the
</span><br>
<span class="quotelev1">&gt;     config.log, I found this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     configure:191690: checking whether IBV_SRQT_XRC is declared
</span><br>
<span class="quotelev1">&gt;     configure:191690: gcc -std=gnu99 -c -O3 -DNDEBUG -finline-functions
</span><br>
<span class="quotelev1">&gt;     -fno-strict-aliasing -pthread
</span><br>
<span class="quotelev1">&gt;     -I/short/z00/bjm900/build/openmpi/openmpi-1.8.6/opal/mca/hwloc/hwloc191/hwlo
</span><br>
<span class="quotelev1">&gt;     c/include
</span><br>
<span class="quotelev1">&gt;     -I/short/z00/bjm900/build/openmpi/openmpi-1.8.6/build/gnu/opal/mca/hwloc/hwl
</span><br>
<span class="quotelev1">&gt;     oc191/hwloc/include
</span><br>
<span class="quotelev1">&gt;     -I/short/z00/bjm900/build/openmpi/openmpi-1.8.6/opal/mca/event/libevent2021/
</span><br>
<span class="quotelev1">&gt;     libevent
</span><br>
<span class="quotelev1">&gt;     -I/short/z00/bjm900/build/openmpi/openmpi-1.8.6/opal/mca/event/libevent2021/
</span><br>
<span class="quotelev1">&gt;     libevent/include
</span><br>
<span class="quotelev1">&gt;     -I/short/z00/bjm900/build/openmpi/openmpi-1.8.6/build/gnu/opal/mca/event/lib
</span><br>
<span class="quotelev1">&gt;     event2021/libevent/include  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt;     conftest.c: In function 'main':
</span><br>
<span class="quotelev1">&gt;     conftest.c:718: error: 'IBV_SRQT_XRC' undeclared (first use in this
</span><br>
<span class="quotelev1">&gt;     function)
</span><br>
<span class="quotelev1">&gt;     conftest.c:718: error: (Each undeclared identifier is reported
</span><br>
<span class="quotelev1">&gt;     only once
</span><br>
<span class="quotelev1">&gt;     conftest.c:718: error: for each function it appears in.)
</span><br>
<span class="quotelev1">&gt;     configure:191690: $? = 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     If you have a look at the test program, the failure is because it
</span><br>
<span class="quotelev1">&gt;     forgets to
</span><br>
<span class="quotelev1">&gt;     include the infiniband/verbs.h header, and sure enough the
</span><br>
<span class="quotelev1">&gt;     configure script
</span><br>
<span class="quotelev1">&gt;     bears this out:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             ac_fn_c_check_decl &quot;$LINENO&quot; &quot;IBV_SRQT_XRC&quot;
</span><br>
<span class="quotelev1">&gt;     &quot;ac_cv_have_decl_IBV_SRQT_XRC&quot; &quot;$ac_includes_default&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Changing &quot;$ac_includes_default&quot; to &quot;#include &lt;infiniband/verbs.h&gt;&quot; and
</span><br>
<span class="quotelev1">&gt;     reconfiguring allows it to detect this declaration and then enable
</span><br>
<span class="quotelev1">&gt;     support
</span><br>
<span class="quotelev1">&gt;     for XRC:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             checking whether IBV_SRQT_XRC is declared... (cached) yes
</span><br>
<span class="quotelev1">&gt;             ...
</span><br>
<span class="quotelev1">&gt;             checking if ConnectX XRC support is enabled... yes
</span><br>
<span class="quotelev1">&gt;             checking if ConnectIB XRC support is enabled... yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Cheers,
</span><br>
<span class="quotelev1">&gt;     Ben
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     devel mailing list
</span><br>
<span class="quotelev1">&gt;     devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;     Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17599.php">http://www.open-mpi.org/community/lists/devel/2015/07/17599.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove PHHargrove_at_[hidden] &lt;mailto:PHHargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17600.php">http://www.open-mpi.org/community/lists/devel/2015/07/17600.php</a>
</span><br>
<p><p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17601/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17601/xrc.v1.8.patch">xrc.v1.8.patch</a>
</ul>
<!-- attachment="xrc.v1.8.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17602.php">Victor Rodriguez: "[OMPI devel] Error in ./configure for Yocto"</a>
<li><strong>Previous message:</strong> <a href="17600.php">Paul Hargrove: "Re: [OMPI devel] XRC Support"</a>
<li><strong>In reply to:</strong> <a href="17600.php">Paul Hargrove: "Re: [OMPI devel] XRC Support"</a>
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
