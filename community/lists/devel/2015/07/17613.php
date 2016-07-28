<?
$subject_val = "Re: [OMPI devel] 1.8.7 rc1 out for review";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 10 00:29:34 2015" -->
<!-- isoreceived="20150710042934" -->
<!-- sent="Fri, 10 Jul 2015 13:29:31 +0900" -->
<!-- isosent="20150710042931" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.8.7 rc1 out for review" -->
<!-- id="559F4A2B.7070903_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAAvDA15NKhFqSzwgb81TtVH7852Bb41OYFySFyRQfH5OUp3GPQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-10 00:29:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17614.php">Paul Hargrove: "Re: [OMPI devel] 1.8.7 rc1 out for review"</a>
<li><strong>Previous message:</strong> <a href="17612.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.8.7 rc1 out for review"</a>
<li><strong>In reply to:</strong> <a href="17611.php">Paul Hargrove: "Re: [OMPI devel] 1.8.7 rc1 out for review"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17615.php">Paul Hargrove: "Re: [OMPI devel] 1.8.7 rc1 out for review"</a>
<li><strong>Reply:</strong> <a href="17615.php">Paul Hargrove: "Re: [OMPI devel] 1.8.7 rc1 out for review"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Paul,
<br>
<p>the openib btl need to be reworked ...
<br>
<p>currently, we have
<br>
#define HAVE_XRC (1 == OMPI_HAVE_CONNECTX_XRC)
<br>
/* and it is impossible to have !OMPI_HAVE_CONNECTX_XRC &amp;&amp; 
<br>
OMPI_HAVE_CONNECTX_XRC_DOMAINS */
<br>
<p>but with your patch, this becomes possible and HAVE_XRC would be zero, 
<br>
which is incorrect
<br>
<p>i will fix that too
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p><p>On 7/10/2015 1:16 PM, Paul Hargrove wrote:
<br>
<span class="quotelev1">&gt; Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've made another observation about what I believe is an error in the 
</span><br>
<span class="quotelev1">&gt; XRC configure probe.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I am following the code below correctly, then *both* ConnectX and 
</span><br>
<span class="quotelev1">&gt; ConnectIB depend on ibv_create_xrc_rcv_qp being defined.
</span><br>
<span class="quotelev1">&gt; However, that function is marked as deprecated (presumably in favor of 
</span><br>
<span class="quotelev1">&gt; ibv_cmd_open_xrcd).
</span><br>
<span class="quotelev1">&gt; So, when a later revision of libibverbs removes the deprecated 
</span><br>
<span class="quotelev1">&gt; function, *neither* the old or new interface will be detected as 
</span><br>
<span class="quotelev1">&gt; supported!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;            # ibv_create_xrc_rcv_qp was added in OFED 1.3
</span><br>
<span class="quotelev1">&gt;            # ibv_cmd_open_xrcd (aka XRC Domains) was added in  OFED 3.12
</span><br>
<span class="quotelev1">&gt;            if test &quot;$enable_connectx_xrc&quot; = &quot;yes&quot;; then
</span><br>
<span class="quotelev1">&gt;  $1_have_xrc=1
</span><br>
<span class="quotelev1">&gt;  AC_CHECK_FUNCS([ibv_create_xrc_rcv_qp],
</span><br>
<span class="quotelev1">&gt;       [], [$1_have_xrc=0])
</span><br>
<span class="quotelev1">&gt;  AC_CHECK_DECLS([IBV_SRQT_XRC],
</span><br>
<span class="quotelev1">&gt;       [], [$1_have_xrc=0],
</span><br>
<span class="quotelev1">&gt;       [#include &lt;infiniband/verbs.h&gt;])
</span><br>
<span class="quotelev1">&gt;            fi
</span><br>
<span class="quotelev1">&gt;            if test &quot;$enable_connectx_xrc&quot; = &quot;yes&quot; \
</span><br>
<span class="quotelev1">&gt;  &amp;&amp; test $$1_have_xrc -eq 1; then
</span><br>
<span class="quotelev1">&gt;  AC_CHECK_FUNCS([ibv_cmd_open_xrcd], [$1_have_xrc_domains=1])
</span><br>
<span class="quotelev1">&gt;            fi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; While I am not certain if a probe for IBV_SRQT_XRC is really 
</span><br>
<span class="quotelev1">&gt; necessary, my suggested replacement for the logic above is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;            # ibv_create_xrc_rcv_qp was added in OFED 1.3
</span><br>
<span class="quotelev1">&gt;            # ibv_cmd_open_xrcd (aka XRC Domains) was added in  OFED 3.12
</span><br>
<span class="quotelev1">&gt;            if test &quot;$enable_connectx_xrc&quot; = &quot;yes&quot;; then
</span><br>
<span class="quotelev1">&gt;  $1_have_xrc=1
</span><br>
<span class="quotelev1">&gt;  AC_CHECK_FUNCS([ibv_cmd_open_xrcd],
</span><br>
<span class="quotelev1">&gt;       [AC_CHECK_DECLS([IBV_SRQT_XRC],
</span><br>
<span class="quotelev1">&gt;                       [$1_have_xrc_domains=1],
</span><br>
<span class="quotelev1">&gt;                       [$1_have_xrc=0],
</span><br>
<span class="quotelev1">&gt;                       [#include &lt;infiniband/verbs.h&gt;])])
</span><br>
<span class="quotelev1">&gt;  AC_CHECK_FUNCS([ibv_create_xrc_rcv_qp],
</span><br>
<span class="quotelev1">&gt;       [$1_have_xrc=1])
</span><br>
<span class="quotelev1">&gt;            fi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In summary
</span><br>
<span class="quotelev1">&gt;   $1_have_xrc_domains = HAVE_IBV_CMD_OPEN_XRCD &amp;&amp; HAVE_IBV_SRQT_XRC
</span><br>
<span class="quotelev1">&gt;   $1_have_xrc = $1_have_xrc_domains || HAVE_IBV_CREATE_XRC_RCV_QP
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This worked as expected on old (only ConnectX XRC support) and new 
</span><br>
<span class="quotelev1">&gt; (both ConnectX and ConnectIB XRC support) in my testing.
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Jul 9, 2015 at 7:06 PM, Paul Hargrove &lt;phhargrove_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:phhargrove_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     The patch didn't apply to the 1.8.7rc1 tarball.
</span><br>
<span class="quotelev1">&gt;     So, I made the change manually and ran autogen.pl &lt;<a href="http://autogen.pl">http://autogen.pl</a>&gt;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     The result is that one fewer configure test runs, but &quot;ConnectX
</span><br>
<span class="quotelev1">&gt;     XRC support&quot; is still disabled:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Diffing the configure output:
</span><br>
<span class="quotelev1">&gt;      checking for ibv_resize_cq... yes
</span><br>
<span class="quotelev1">&gt;      checking for struct ibv_device.transport_type... yes
</span><br>
<span class="quotelev1">&gt;      checking for ibv_create_xrc_rcv_qp... yes
</span><br>
<span class="quotelev1">&gt;     -checking for ibv_cmd_open_xrcd... no
</span><br>
<span class="quotelev1">&gt;      checking whether IBV_SRQT_XRC is declared... no
</span><br>
<span class="quotelev1">&gt;      checking infiniband/complib/cl_types_osd.h usability... no
</span><br>
<span class="quotelev1">&gt;      checking infiniband/complib/cl_types_osd.h presence... no
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     You will note that &quot;IBV_SRQT_XRC&quot; did not appear when I grepped
</span><br>
<span class="quotelev1">&gt;     for XRC in /usr/include/infiniband/verbs.h (in a previous message).
</span><br>
<span class="quotelev1">&gt;     I am not sure, but suspect that identifier is related to
</span><br>
<span class="quotelev1">&gt;     &quot;ConnectIB XRC support&quot; (not ConnectX).
</span><br>
<span class="quotelev1">&gt;     If you look back at the 1.8.4 release you will find only a check
</span><br>
<span class="quotelev1">&gt;     for ibv_create_xrc_rcv_qp.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On Thu, Jul 9, 2015 at 6:17 PM, Gilles Gouaillardet
</span><br>
<span class="quotelev1">&gt;     &lt;gilles_at_[hidden] &lt;mailto:gilles_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Thanks Paul,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         i just found an other bug ...
</span><br>
<span class="quotelev1">&gt;         (and i should be blamed for it)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         here is attached a patch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         basically, xrc was incorrectly disabled on &quot;older&quot; ofed stacks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         On 7/10/2015 10:06 AM, Paul Hargrove wrote:
</span><br>
<span class="quotelev2">&gt;&gt;         Gilles,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         A bzip2-compressed config.log is attached.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         I am unsure how to determine the OFED version, because the
</span><br>
<span class="quotelev2">&gt;&gt;         admins have prevented normal users from reading the RPM database.
</span><br>
<span class="quotelev2">&gt;&gt;         Perhaps the following helps:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         $ nm /usr/lib64/libibverbs.a | grep -i xrc
</span><br>
<span class="quotelev2">&gt;&gt;         00000000000000e0 T ibv_cmd_close_xrc_domain
</span><br>
<span class="quotelev2">&gt;&gt;         0000000000000230 T ibv_cmd_create_xrc_rcv_qp
</span><br>
<span class="quotelev2">&gt;&gt;         00000000000003b0 T ibv_cmd_create_xrc_srq
</span><br>
<span class="quotelev2">&gt;&gt;         0000000000000a40 T ibv_cmd_modify_xrc_rcv_qp
</span><br>
<span class="quotelev2">&gt;&gt;         0000000000000150 T ibv_cmd_open_xrc_domain
</span><br>
<span class="quotelev2">&gt;&gt;         0000000000001e30 T ibv_cmd_query_xrc_rcv_qp
</span><br>
<span class="quotelev2">&gt;&gt;         0000000000000070 T ibv_cmd_reg_xrc_rcv_qp
</span><br>
<span class="quotelev2">&gt;&gt;         0000000000000000 T ibv_cmd_unreg_xrc_rcv_qp
</span><br>
<span class="quotelev2">&gt;&gt;         00000000000002b0 T ibv_close_xrc_domain
</span><br>
<span class="quotelev2">&gt;&gt;         00000000000002d0 T ibv_create_xrc_rcv_qp
</span><br>
<span class="quotelev2">&gt;&gt;         00000000000007a0 T ibv_create_xrc_srq
</span><br>
<span class="quotelev2">&gt;&gt;         0000000000000310 T ibv_modify_xrc_rcv_qp
</span><br>
<span class="quotelev2">&gt;&gt;         0000000000000280 T ibv_open_xrc_domain
</span><br>
<span class="quotelev2">&gt;&gt;         0000000000000340 T ibv_query_xrc_rcv_qp
</span><br>
<span class="quotelev2">&gt;&gt;         0000000000000370 T ibv_reg_xrc_rcv_qp
</span><br>
<span class="quotelev2">&gt;&gt;         0000000000000390 T ibv_unreg_xrc_rcv_qp
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         $ grep XRC /usr/include/infiniband/verbs.h
</span><br>
<span class="quotelev2">&gt;&gt;                 IBV_DEVICE_XRC        = 1 &lt;&lt; 20
</span><br>
<span class="quotelev2">&gt;&gt;                 IBV_XRC_QP_EVENT_FLAG = 0x80000000,
</span><br>
<span class="quotelev2">&gt;&gt;                 IBV_QPT_XRC,
</span><br>
<span class="quotelev2">&gt;&gt;         [matches in comments have been removed].
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         When tonight's master tarball is posted (perhaps 10 minutes
</span><br>
<span class="quotelev2">&gt;&gt;         from now) I will test it and report what I find.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         -Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         On Thu, Jul 9, 2015 at 5:17 PM, Gilles Gouaillardet
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;gilles_at_[hidden] &lt;mailto:gilles_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             Paul,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             can you please compress and post your config.log ?
</span><br>
<span class="quotelev2">&gt;&gt;             what is the OFED version you are running ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             on master, that fix did the trick on mellanox test
</span><br>
<span class="quotelev2">&gt;&gt;             cluster (recent OFED version) but did not
</span><br>
<span class="quotelev2">&gt;&gt;             enable XRC on lanl test clusters (my best bet is an old
</span><br>
<span class="quotelev2">&gt;&gt;             OFED library)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             Thanks
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             On 7/10/2015 9:08 AM, Paul Hargrove wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Preliminary report:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             1) I find that &quot;ConnectX XRC support&quot; is still not
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             detected as it was in 1.8.4 and earlier:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 $ grep  'ConnectX XRC support'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 openmpi-1.*-icc-14/LOG/configure.log|  sort -u
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 openmpi-1.8-linux-x86_64-icc-14/LOG/configure.log:checking
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 if ConnectX XRC support is enabled... yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 openmpi-1.8.1-linux-x86_64-icc-14/LOG/configure.log:checking
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 if ConnectX XRC support is enabled... yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 openmpi-1.8.2-linux-x86_64-icc-14/LOG/configure.log:checking
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 if ConnectX XRC support is enabled... yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 openmpi-1.8.3-linux-x86_64-icc-14/LOG/configure.log:checking
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 if ConnectX XRC support is enabled... yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 openmpi-1.8.4-linux-x86_64-icc-14/LOG/configure.log:checking
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 if ConnectX XRC support is enabled... yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 openmpi-1.8.5-linux-x86_64-icc-14/LOG/configure.log:checking
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 if ConnectX XRC support is enabled... no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 openmpi-1.8.6-linux-x86_64-icc-14/LOG/configure.log:checking
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 if ConnectX XRC support is enabled... no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 openmpi-1.8.7rc1-linux-x86_64-icc-14/LOG/configure.log:checking
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 if ConnectX XRC support is enabled... no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             2) I noticed a cosmetic &quot;glitch&quot; in the configure output:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 checking for working epoll library interface... checking if epoll can build... yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             This just means AC_MSG_{CHECKING,RESULT} macros are
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             nested when they shouldn't be.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             There is nothing to suggest that the results of the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             configure probes are incorrect.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             -Paul
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             On Thu, Jul 9, 2015 at 1:03 PM, Ralph Castain
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 In the usual place:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 <a href="http://www.open-mpi.org/software/ompi/v1.8/">http://www.open-mpi.org/software/ompi/v1.8/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 Please test and let me know of any issues that
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 surface. My intent is to release this next week.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 Subscription:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17604.php">http://www.open-mpi.org/community/lists/devel/2015/07/17604.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Paul H. Hargrove PHHargrove_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             &lt;mailto:PHHargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Computer Science Department         Tel: +1-510-495-2352
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             &lt;tel:%2B1-510-495-2352&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Lawrence Berkeley National Laboratory Fax:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             +1-510-486-6900 &lt;tel:%2B1-510-486-6900&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             _______________________________________________ devel
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             mailing list devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             &lt;mailto:devel_at_[hidden]&gt; Subscription:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Link to this post:<a href="http://www.open-mpi.org/community/lists/devel/2015/07/17606.php">http://www.open-mpi.org/community/lists/devel/2015/07/17606.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;             devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;             devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             Subscription:
</span><br>
<span class="quotelev2">&gt;&gt;             <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;             Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;             <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17607.php">http://www.open-mpi.org/community/lists/devel/2015/07/17607.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         -- 
</span><br>
<span class="quotelev2">&gt;&gt;         Paul H. Hargrove PHHargrove_at_[hidden] &lt;mailto:PHHargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev2">&gt;&gt;         Computer Science Department               Tel:
</span><br>
<span class="quotelev2">&gt;&gt;         +1-510-495-2352 &lt;tel:%2B1-510-495-2352&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Lawrence Berkeley National Laboratory     Fax:
</span><br>
<span class="quotelev2">&gt;&gt;         +1-510-486-6900 &lt;tel:%2B1-510-486-6900&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         _______________________________________________ devel mailing
</span><br>
<span class="quotelev2">&gt;&gt;         list devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Link to this post:<a href="http://www.open-mpi.org/community/lists/devel/2015/07/17608.php">http://www.open-mpi.org/community/lists/devel/2015/07/17608.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         _______________________________________________
</span><br>
<span class="quotelev1">&gt;         devel mailing list
</span><br>
<span class="quotelev1">&gt;         devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;         Link to this post:
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17609.php">http://www.open-mpi.org/community/lists/devel/2015/07/17609.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     -- 
</span><br>
<span class="quotelev1">&gt;     Paul H. Hargrove PHHargrove_at_[hidden] &lt;mailto:PHHargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt;     Computer Science Department Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt;     &lt;tel:%2B1-510-495-2352&gt;
</span><br>
<span class="quotelev1">&gt;     Lawrence Berkeley National Laboratory Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;     &lt;tel:%2B1-510-486-6900&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17611.php">http://www.open-mpi.org/community/lists/devel/2015/07/17611.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17613/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17614.php">Paul Hargrove: "Re: [OMPI devel] 1.8.7 rc1 out for review"</a>
<li><strong>Previous message:</strong> <a href="17612.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.8.7 rc1 out for review"</a>
<li><strong>In reply to:</strong> <a href="17611.php">Paul Hargrove: "Re: [OMPI devel] 1.8.7 rc1 out for review"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17615.php">Paul Hargrove: "Re: [OMPI devel] 1.8.7 rc1 out for review"</a>
<li><strong>Reply:</strong> <a href="17615.php">Paul Hargrove: "Re: [OMPI devel] 1.8.7 rc1 out for review"</a>
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
