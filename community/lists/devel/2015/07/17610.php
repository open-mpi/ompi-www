<?
$subject_val = "Re: [OMPI devel] 1.8.7 rc1 out for review";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  9 22:07:11 2015" -->
<!-- isoreceived="20150710020711" -->
<!-- sent="Thu, 9 Jul 2015 19:06:53 -0700" -->
<!-- isosent="20150710020653" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.8.7 rc1 out for review" -->
<!-- id="CAAvDA15KG-gnkG4Fwui+7WtDcA9r6t94y2h2=QFVOyDMEe=U1g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="559F1D39.90105_at_rist.or.jp" -->
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
<strong>Date:</strong> 2015-07-09 22:06:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17611.php">Paul Hargrove: "Re: [OMPI devel] 1.8.7 rc1 out for review"</a>
<li><strong>Previous message:</strong> <a href="17609.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.8.7 rc1 out for review"</a>
<li><strong>In reply to:</strong> <a href="17609.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.8.7 rc1 out for review"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17611.php">Paul Hargrove: "Re: [OMPI devel] 1.8.7 rc1 out for review"</a>
<li><strong>Reply:</strong> <a href="17611.php">Paul Hargrove: "Re: [OMPI devel] 1.8.7 rc1 out for review"</a>
<li><strong>Reply:</strong> <a href="17612.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.8.7 rc1 out for review"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gilles,
<br>
<p>The patch didn't apply to the 1.8.7rc1 tarball.
<br>
So, I made the change manually and ran autogen.pl.
<br>
<p>The result is that one fewer configure test runs, but &quot;ConnectX XRC
<br>
support&quot; is still disabled:
<br>
<p>Diffing the configure output:
<br>
&nbsp;checking for ibv_resize_cq... yes
<br>
&nbsp;checking for struct ibv_device.transport_type... yes
<br>
&nbsp;checking for ibv_create_xrc_rcv_qp... yes
<br>
-checking for ibv_cmd_open_xrcd... no
<br>
&nbsp;checking whether IBV_SRQT_XRC is declared... no
<br>
&nbsp;checking infiniband/complib/cl_types_osd.h usability... no
<br>
&nbsp;checking infiniband/complib/cl_types_osd.h presence... no
<br>
<p><p>You will note that &quot;IBV_SRQT_XRC&quot; did not appear when I grepped for XRC in
<br>
/usr/include/infiniband/verbs.h (in a previous message).
<br>
I am not sure, but suspect that identifier is related to &quot;ConnectIB XRC
<br>
support&quot; (not ConnectX).
<br>
If you look back at the 1.8.4 release you will find only a check for
<br>
ibv_create_xrc_rcv_qp.
<br>
<p>-Paul
<br>
<p>On Thu, Jul 9, 2015 at 6:17 PM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt;  Thanks Paul,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i just found an other bug ...
</span><br>
<span class="quotelev1">&gt; (and i should be blamed for it)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; here is attached a patch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; basically, xrc was incorrectly disabled on &quot;older&quot; ofed stacks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 7/10/2015 10:06 AM, Paul Hargrove wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  A bzip2-compressed config.log is attached.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I am unsure how to determine the OFED version, because the admins have
</span><br>
<span class="quotelev1">&gt; prevented normal users from reading the RPM database.
</span><br>
<span class="quotelev1">&gt; Perhaps the following helps:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  $ nm /usr/lib64/libibverbs.a | grep -i xrc
</span><br>
<span class="quotelev1">&gt; 00000000000000e0 T ibv_cmd_close_xrc_domain
</span><br>
<span class="quotelev1">&gt; 0000000000000230 T ibv_cmd_create_xrc_rcv_qp
</span><br>
<span class="quotelev1">&gt; 00000000000003b0 T ibv_cmd_create_xrc_srq
</span><br>
<span class="quotelev1">&gt; 0000000000000a40 T ibv_cmd_modify_xrc_rcv_qp
</span><br>
<span class="quotelev1">&gt; 0000000000000150 T ibv_cmd_open_xrc_domain
</span><br>
<span class="quotelev1">&gt; 0000000000001e30 T ibv_cmd_query_xrc_rcv_qp
</span><br>
<span class="quotelev1">&gt; 0000000000000070 T ibv_cmd_reg_xrc_rcv_qp
</span><br>
<span class="quotelev1">&gt; 0000000000000000 T ibv_cmd_unreg_xrc_rcv_qp
</span><br>
<span class="quotelev1">&gt; 00000000000002b0 T ibv_close_xrc_domain
</span><br>
<span class="quotelev1">&gt; 00000000000002d0 T ibv_create_xrc_rcv_qp
</span><br>
<span class="quotelev1">&gt; 00000000000007a0 T ibv_create_xrc_srq
</span><br>
<span class="quotelev1">&gt; 0000000000000310 T ibv_modify_xrc_rcv_qp
</span><br>
<span class="quotelev1">&gt; 0000000000000280 T ibv_open_xrc_domain
</span><br>
<span class="quotelev1">&gt; 0000000000000340 T ibv_query_xrc_rcv_qp
</span><br>
<span class="quotelev1">&gt; 0000000000000370 T ibv_reg_xrc_rcv_qp
</span><br>
<span class="quotelev1">&gt; 0000000000000390 T ibv_unreg_xrc_rcv_qp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  $ grep XRC /usr/include/infiniband/verbs.h
</span><br>
<span class="quotelev1">&gt;         IBV_DEVICE_XRC                  = 1 &lt;&lt; 20
</span><br>
<span class="quotelev1">&gt;         IBV_XRC_QP_EVENT_FLAG = 0x80000000,
</span><br>
<span class="quotelev1">&gt;         IBV_QPT_XRC,
</span><br>
<span class="quotelev1">&gt; [matches in comments have been removed].
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  When tonight's master tarball is posted (perhaps 10 minutes from now) I
</span><br>
<span class="quotelev1">&gt; will test it and report what I find.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Jul 9, 2015 at 5:17 PM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Paul,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; can you please compress and post your config.log ?
</span><br>
<span class="quotelev2">&gt;&gt; what is the OFED version you are running ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; on master, that fix did the trick on mellanox test cluster (recent OFED
</span><br>
<span class="quotelev2">&gt;&gt; version) but did not
</span><br>
<span class="quotelev2">&gt;&gt; enable XRC on lanl test clusters (my best bet is an old OFED library)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 7/10/2015 9:08 AM, Paul Hargrove wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Preliminary report:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1) I find that &quot;ConnectX XRC support&quot; is still not detected as it was in
</span><br>
<span class="quotelev2">&gt;&gt; 1.8.4 and earlier:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  $ grep  'ConnectX XRC support' openmpi-1.*-icc-14/LOG/configure.log|
</span><br>
<span class="quotelev2">&gt;&gt;  sort -u
</span><br>
<span class="quotelev2">&gt;&gt;   openmpi-1.8-linux-x86_64-icc-14/LOG/configure.log:checking if ConnectX
</span><br>
<span class="quotelev2">&gt;&gt; XRC support is enabled... yes
</span><br>
<span class="quotelev2">&gt;&gt;   openmpi-1.8.1-linux-x86_64-icc-14/LOG/configure.log:checking if
</span><br>
<span class="quotelev2">&gt;&gt; ConnectX XRC support is enabled... yes
</span><br>
<span class="quotelev2">&gt;&gt;   openmpi-1.8.2-linux-x86_64-icc-14/LOG/configure.log:checking if
</span><br>
<span class="quotelev2">&gt;&gt; ConnectX XRC support is enabled... yes
</span><br>
<span class="quotelev2">&gt;&gt;   openmpi-1.8.3-linux-x86_64-icc-14/LOG/configure.log:checking if
</span><br>
<span class="quotelev2">&gt;&gt; ConnectX XRC support is enabled... yes
</span><br>
<span class="quotelev2">&gt;&gt;   openmpi-1.8.4-linux-x86_64-icc-14/LOG/configure.log:checking if
</span><br>
<span class="quotelev2">&gt;&gt; ConnectX XRC support is enabled... yes
</span><br>
<span class="quotelev2">&gt;&gt;   openmpi-1.8.5-linux-x86_64-icc-14/LOG/configure.log:checking if
</span><br>
<span class="quotelev2">&gt;&gt; ConnectX XRC support is enabled... no
</span><br>
<span class="quotelev2">&gt;&gt;   openmpi-1.8.6-linux-x86_64-icc-14/LOG/configure.log:checking if
</span><br>
<span class="quotelev2">&gt;&gt; ConnectX XRC support is enabled... no
</span><br>
<span class="quotelev2">&gt;&gt;   openmpi-1.8.7rc1-linux-x86_64-icc-14/LOG/configure.log:checking if
</span><br>
<span class="quotelev2">&gt;&gt; ConnectX XRC support is enabled... no
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  2) I noticed a cosmetic &quot;glitch&quot; in the configure output:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  checking for working epoll library interface... checking if epoll can build... yes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   yes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  This just means AC_MSG_{CHECKING,RESULT} macros are nested when they
</span><br>
<span class="quotelev2">&gt;&gt; shouldn't be.
</span><br>
<span class="quotelev2">&gt;&gt;  There is nothing to suggest that the results of the configure probes
</span><br>
<span class="quotelev2">&gt;&gt; are incorrect.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  -Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Jul 9, 2015 at 1:03 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In the usual place:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  <a href="http://www.open-mpi.org/software/ompi/v1.8/">http://www.open-mpi.org/software/ompi/v1.8/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Please test and let me know of any issues that surface. My intent is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to release this next week.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Ralph
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
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17604.php">http://www.open-mpi.org/community/lists/devel/2015/07/17604.php</a>
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
<span class="quotelev2">&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing listdevel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17606.php">http://www.open-mpi.org/community/lists/devel/2015/07/17606.php</a>
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17607.php">http://www.open-mpi.org/community/lists/devel/2015/07/17607.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  --
</span><br>
<span class="quotelev1">&gt;   Paul H. Hargrove                          PHHargrove_at_[hidden]
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
<span class="quotelev1">&gt; devel mailing listdevel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17608.php">http://www.open-mpi.org/community/lists/devel/2015/07/17608.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17609.php">http://www.open-mpi.org/community/lists/devel/2015/07/17609.php</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17610/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17611.php">Paul Hargrove: "Re: [OMPI devel] 1.8.7 rc1 out for review"</a>
<li><strong>Previous message:</strong> <a href="17609.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.8.7 rc1 out for review"</a>
<li><strong>In reply to:</strong> <a href="17609.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.8.7 rc1 out for review"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17611.php">Paul Hargrove: "Re: [OMPI devel] 1.8.7 rc1 out for review"</a>
<li><strong>Reply:</strong> <a href="17611.php">Paul Hargrove: "Re: [OMPI devel] 1.8.7 rc1 out for review"</a>
<li><strong>Reply:</strong> <a href="17612.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.8.7 rc1 out for review"</a>
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
