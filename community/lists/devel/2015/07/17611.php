<?
$subject_val = "Re: [OMPI devel] 1.8.7 rc1 out for review";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 10 00:17:03 2015" -->
<!-- isoreceived="20150710041703" -->
<!-- sent="Thu, 9 Jul 2015 21:16:56 -0700" -->
<!-- isosent="20150710041656" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.8.7 rc1 out for review" -->
<!-- id="CAAvDA15NKhFqSzwgb81TtVH7852Bb41OYFySFyRQfH5OUp3GPQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAvDA15KG-gnkG4Fwui+7WtDcA9r6t94y2h2=QFVOyDMEe=U1g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.8.7 rc1 out for review<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-10 00:16:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17612.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.8.7 rc1 out for review"</a>
<li><strong>Previous message:</strong> <a href="17610.php">Paul Hargrove: "Re: [OMPI devel] 1.8.7 rc1 out for review"</a>
<li><strong>In reply to:</strong> <a href="17610.php">Paul Hargrove: "Re: [OMPI devel] 1.8.7 rc1 out for review"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17613.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.8.7 rc1 out for review"</a>
<li><strong>Reply:</strong> <a href="17613.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.8.7 rc1 out for review"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gilles,
<br>
<p>I've made another observation about what I believe is an error in the XRC
<br>
configure probe.
<br>
<p>If I am following the code below correctly, then *both* ConnectX and
<br>
ConnectIB depend on ibv_create_xrc_rcv_qp being defined.
<br>
However, that function is marked as deprecated (presumably in favor of
<br>
ibv_cmd_open_xrcd).
<br>
So, when a later revision of libibverbs removes the deprecated function,
<br>
*neither* the old or new interface will be detected as supported!
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# ibv_create_xrc_rcv_qp was added in OFED 1.3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# ibv_cmd_open_xrcd (aka XRC Domains) was added in  OFED 3.12
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if test &quot;$enable_connectx_xrc&quot; = &quot;yes&quot;; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$1_have_xrc=1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_CHECK_FUNCS([ibv_create_xrc_rcv_qp],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[], [$1_have_xrc=0])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_CHECK_DECLS([IBV_SRQT_XRC],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[], [$1_have_xrc=0],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[#include &lt;infiniband/verbs.h&gt;])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if test &quot;$enable_connectx_xrc&quot; = &quot;yes&quot; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;&amp; test $$1_have_xrc -eq 1; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_CHECK_FUNCS([ibv_cmd_open_xrcd], [$1_have_xrc_domains=1])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fi
<br>
<p>While I am not certain if a probe for IBV_SRQT_XRC is really necessary, my
<br>
suggested replacement for the logic above is:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# ibv_create_xrc_rcv_qp was added in OFED 1.3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# ibv_cmd_open_xrcd (aka XRC Domains) was added in  OFED 3.12
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if test &quot;$enable_connectx_xrc&quot; = &quot;yes&quot;; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$1_have_xrc=1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_CHECK_FUNCS([ibv_cmd_open_xrcd],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[AC_CHECK_DECLS([IBV_SRQT_XRC],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[$1_have_xrc_domains=1],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[$1_have_xrc=0],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[#include
<br>
&lt;infiniband/verbs.h&gt;])])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_CHECK_FUNCS([ibv_create_xrc_rcv_qp],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[$1_have_xrc=1])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fi
<br>
<p>In summary
<br>
&nbsp;&nbsp;$1_have_xrc_domains = HAVE_IBV_CMD_OPEN_XRCD &amp;&amp; HAVE_IBV_SRQT_XRC
<br>
&nbsp;&nbsp;$1_have_xrc = $1_have_xrc_domains || HAVE_IBV_CREATE_XRC_RCV_QP
<br>
<p>This worked as expected on old (only ConnectX XRC support) and new (both
<br>
ConnectX and ConnectIB XRC support) in my testing.
<br>
<p>-Paul
<br>
<p>On Thu, Jul 9, 2015 at 7:06 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The patch didn't apply to the 1.8.7rc1 tarball.
</span><br>
<span class="quotelev1">&gt; So, I made the change manually and ran autogen.pl.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The result is that one fewer configure test runs, but &quot;ConnectX XRC
</span><br>
<span class="quotelev1">&gt; support&quot; is still disabled:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Diffing the configure output:
</span><br>
<span class="quotelev1">&gt;  checking for ibv_resize_cq... yes
</span><br>
<span class="quotelev1">&gt;  checking for struct ibv_device.transport_type... yes
</span><br>
<span class="quotelev1">&gt;  checking for ibv_create_xrc_rcv_qp... yes
</span><br>
<span class="quotelev1">&gt; -checking for ibv_cmd_open_xrcd... no
</span><br>
<span class="quotelev1">&gt;  checking whether IBV_SRQT_XRC is declared... no
</span><br>
<span class="quotelev1">&gt;  checking infiniband/complib/cl_types_osd.h usability... no
</span><br>
<span class="quotelev1">&gt;  checking infiniband/complib/cl_types_osd.h presence... no
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You will note that &quot;IBV_SRQT_XRC&quot; did not appear when I grepped for XRC in
</span><br>
<span class="quotelev1">&gt; /usr/include/infiniband/verbs.h (in a previous message).
</span><br>
<span class="quotelev1">&gt; I am not sure, but suspect that identifier is related to &quot;ConnectIB XRC
</span><br>
<span class="quotelev1">&gt; support&quot; (not ConnectX).
</span><br>
<span class="quotelev1">&gt; If you look back at the 1.8.4 release you will find only a check for
</span><br>
<span class="quotelev1">&gt; ibv_create_xrc_rcv_qp.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Jul 9, 2015 at 6:17 PM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Thanks Paul,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; i just found an other bug ...
</span><br>
<span class="quotelev2">&gt;&gt; (and i should be blamed for it)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; here is attached a patch.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; basically, xrc was incorrectly disabled on &quot;older&quot; ofed stacks
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 7/10/2015 10:06 AM, Paul Hargrove wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  A bzip2-compressed config.log is attached.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  I am unsure how to determine the OFED version, because the admins have
</span><br>
<span class="quotelev2">&gt;&gt; prevented normal users from reading the RPM database.
</span><br>
<span class="quotelev2">&gt;&gt; Perhaps the following helps:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  $ nm /usr/lib64/libibverbs.a | grep -i xrc
</span><br>
<span class="quotelev2">&gt;&gt; 00000000000000e0 T ibv_cmd_close_xrc_domain
</span><br>
<span class="quotelev2">&gt;&gt; 0000000000000230 T ibv_cmd_create_xrc_rcv_qp
</span><br>
<span class="quotelev2">&gt;&gt; 00000000000003b0 T ibv_cmd_create_xrc_srq
</span><br>
<span class="quotelev2">&gt;&gt; 0000000000000a40 T ibv_cmd_modify_xrc_rcv_qp
</span><br>
<span class="quotelev2">&gt;&gt; 0000000000000150 T ibv_cmd_open_xrc_domain
</span><br>
<span class="quotelev2">&gt;&gt; 0000000000001e30 T ibv_cmd_query_xrc_rcv_qp
</span><br>
<span class="quotelev2">&gt;&gt; 0000000000000070 T ibv_cmd_reg_xrc_rcv_qp
</span><br>
<span class="quotelev2">&gt;&gt; 0000000000000000 T ibv_cmd_unreg_xrc_rcv_qp
</span><br>
<span class="quotelev2">&gt;&gt; 00000000000002b0 T ibv_close_xrc_domain
</span><br>
<span class="quotelev2">&gt;&gt; 00000000000002d0 T ibv_create_xrc_rcv_qp
</span><br>
<span class="quotelev2">&gt;&gt; 00000000000007a0 T ibv_create_xrc_srq
</span><br>
<span class="quotelev2">&gt;&gt; 0000000000000310 T ibv_modify_xrc_rcv_qp
</span><br>
<span class="quotelev2">&gt;&gt; 0000000000000280 T ibv_open_xrc_domain
</span><br>
<span class="quotelev2">&gt;&gt; 0000000000000340 T ibv_query_xrc_rcv_qp
</span><br>
<span class="quotelev2">&gt;&gt; 0000000000000370 T ibv_reg_xrc_rcv_qp
</span><br>
<span class="quotelev2">&gt;&gt; 0000000000000390 T ibv_unreg_xrc_rcv_qp
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  $ grep XRC /usr/include/infiniband/verbs.h
</span><br>
<span class="quotelev2">&gt;&gt;         IBV_DEVICE_XRC                  = 1 &lt;&lt; 20
</span><br>
<span class="quotelev2">&gt;&gt;         IBV_XRC_QP_EVENT_FLAG = 0x80000000,
</span><br>
<span class="quotelev2">&gt;&gt;         IBV_QPT_XRC,
</span><br>
<span class="quotelev2">&gt;&gt; [matches in comments have been removed].
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  When tonight's master tarball is posted (perhaps 10 minutes from now) I
</span><br>
<span class="quotelev2">&gt;&gt; will test it and report what I find.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  -Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Jul 9, 2015 at 5:17 PM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Paul,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; can you please compress and post your config.log ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; what is the OFED version you are running ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on master, that fix did the trick on mellanox test cluster (recent OFED
</span><br>
<span class="quotelev3">&gt;&gt;&gt; version) but did not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; enable XRC on lanl test clusters (my best bet is an old OFED library)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 7/10/2015 9:08 AM, Paul Hargrove wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Preliminary report:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1) I find that &quot;ConnectX XRC support&quot; is still not detected as it was in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1.8.4 and earlier:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  $ grep  'ConnectX XRC support' openmpi-1.*-icc-14/LOG/configure.log|
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  sort -u
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   openmpi-1.8-linux-x86_64-icc-14/LOG/configure.log:checking if
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ConnectX XRC support is enabled... yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   openmpi-1.8.1-linux-x86_64-icc-14/LOG/configure.log:checking if
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ConnectX XRC support is enabled... yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   openmpi-1.8.2-linux-x86_64-icc-14/LOG/configure.log:checking if
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ConnectX XRC support is enabled... yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   openmpi-1.8.3-linux-x86_64-icc-14/LOG/configure.log:checking if
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ConnectX XRC support is enabled... yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   openmpi-1.8.4-linux-x86_64-icc-14/LOG/configure.log:checking if
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ConnectX XRC support is enabled... yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   openmpi-1.8.5-linux-x86_64-icc-14/LOG/configure.log:checking if
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ConnectX XRC support is enabled... no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   openmpi-1.8.6-linux-x86_64-icc-14/LOG/configure.log:checking if
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ConnectX XRC support is enabled... no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   openmpi-1.8.7rc1-linux-x86_64-icc-14/LOG/configure.log:checking if
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ConnectX XRC support is enabled... no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  2) I noticed a cosmetic &quot;glitch&quot; in the configure output:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  checking for working epoll library interface... checking if epoll can build... yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  This just means AC_MSG_{CHECKING,RESULT} macros are nested when they
</span><br>
<span class="quotelev3">&gt;&gt;&gt; shouldn't be.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  There is nothing to suggest that the results of the configure probes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; are incorrect.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  -Paul
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Thu, Jul 9, 2015 at 1:03 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In the usual place:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  <a href="http://www.open-mpi.org/software/ompi/v1.8/">http://www.open-mpi.org/software/ompi/v1.8/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Please test and let me know of any issues that surface. My intent is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to release this next week.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Ralph
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17604.php">http://www.open-mpi.org/community/lists/devel/2015/07/17604.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing listdevel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17606.php">http://www.open-mpi.org/community/lists/devel/2015/07/17606.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17607.php">http://www.open-mpi.org/community/lists/devel/2015/07/17607.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  --
</span><br>
<span class="quotelev2">&gt;&gt;   Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev2">&gt;&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing listdevel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17608.php">http://www.open-mpi.org/community/lists/devel/2015/07/17608.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17609.php">http://www.open-mpi.org/community/lists/devel/2015/07/17609.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17611/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17612.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.8.7 rc1 out for review"</a>
<li><strong>Previous message:</strong> <a href="17610.php">Paul Hargrove: "Re: [OMPI devel] 1.8.7 rc1 out for review"</a>
<li><strong>In reply to:</strong> <a href="17610.php">Paul Hargrove: "Re: [OMPI devel] 1.8.7 rc1 out for review"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17613.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.8.7 rc1 out for review"</a>
<li><strong>Reply:</strong> <a href="17613.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.8.7 rc1 out for review"</a>
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
