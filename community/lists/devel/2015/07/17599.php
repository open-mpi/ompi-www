<?
$subject_val = "[OMPI devel] XRC Support";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  8 21:11:34 2015" -->
<!-- isoreceived="20150709011134" -->
<!-- sent="Thu, 9 Jul 2015 11:11:26 +1000" -->
<!-- isosent="20150709011126" -->
<!-- name="Ben Menadue" -->
<!-- email="ben.menadue_at_[hidden]" -->
<!-- subject="[OMPI devel] XRC Support" -->
<!-- id="004b01d0b9e4$2e44fea0$8acefbe0$_at_nci.org.au" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] XRC Support<br>
<strong>From:</strong> Ben Menadue (<em>ben.menadue_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-08 21:11:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17600.php">Paul Hargrove: "Re: [OMPI devel] XRC Support"</a>
<li><strong>Previous message:</strong> <a href="17598.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fortran issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17600.php">Paul Hargrove: "Re: [OMPI devel] XRC Support"</a>
<li><strong>Reply:</strong> <a href="17600.php">Paul Hargrove: "Re: [OMPI devel] XRC Support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I just finished building 1.8.6 and master on our cluster and noticed that
<br>
for both, XRC support wasn't being detected because it didn't detect the
<br>
IBV_SRQT_XRC declaration:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;checking whether IBV_SRQT_XRC is declared... (cached) no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;checking if ConnectX XRC support is enabled... no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;checking if ConnectIB XRC support is enabled... no
<br>
<p>Both of these builds had --enable-openib-connectx-xrc. Having a look in the
<br>
config.log, I found this:
<br>
<p>configure:191690: checking whether IBV_SRQT_XRC is declared
<br>
configure:191690: gcc -std=gnu99 -c -O3 -DNDEBUG -finline-functions
<br>
-fno-strict-aliasing -pthread
<br>
-I/short/z00/bjm900/build/openmpi/openmpi-1.8.6/opal/mca/hwloc/hwloc191/hwlo
<br>
c/include
<br>
-I/short/z00/bjm900/build/openmpi/openmpi-1.8.6/build/gnu/opal/mca/hwloc/hwl
<br>
oc191/hwloc/include
<br>
-I/short/z00/bjm900/build/openmpi/openmpi-1.8.6/opal/mca/event/libevent2021/
<br>
libevent
<br>
-I/short/z00/bjm900/build/openmpi/openmpi-1.8.6/opal/mca/event/libevent2021/
<br>
libevent/include
<br>
-I/short/z00/bjm900/build/openmpi/openmpi-1.8.6/build/gnu/opal/mca/event/lib
<br>
event2021/libevent/include  conftest.c &gt;&amp;5
<br>
conftest.c: In function 'main':
<br>
conftest.c:718: error: 'IBV_SRQT_XRC' undeclared (first use in this
<br>
function)
<br>
conftest.c:718: error: (Each undeclared identifier is reported only once
<br>
conftest.c:718: error: for each function it appears in.)
<br>
configure:191690: $? = 1
<br>
<p>If you have a look at the test program, the failure is because it forgets to
<br>
include the infiniband/verbs.h header, and sure enough the configure script
<br>
bears this out:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ac_fn_c_check_decl &quot;$LINENO&quot; &quot;IBV_SRQT_XRC&quot;
<br>
&quot;ac_cv_have_decl_IBV_SRQT_XRC&quot; &quot;$ac_includes_default&quot;
<br>
<p>Changing &quot;$ac_includes_default&quot; to &quot;#include &lt;infiniband/verbs.h&gt;&quot; and
<br>
reconfiguring allows it to detect this declaration and then enable support
<br>
for XRC:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;checking whether IBV_SRQT_XRC is declared... (cached) yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;checking if ConnectX XRC support is enabled... yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;checking if ConnectIB XRC support is enabled... yes
<br>
<p>Cheers,
<br>
Ben
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17600.php">Paul Hargrove: "Re: [OMPI devel] XRC Support"</a>
<li><strong>Previous message:</strong> <a href="17598.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Fortran issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17600.php">Paul Hargrove: "Re: [OMPI devel] XRC Support"</a>
<li><strong>Reply:</strong> <a href="17600.php">Paul Hargrove: "Re: [OMPI devel] XRC Support"</a>
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
