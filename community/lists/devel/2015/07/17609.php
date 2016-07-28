<?
$subject_val = "Re: [OMPI devel] 1.8.7 rc1 out for review";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  9 21:17:51 2015" -->
<!-- isoreceived="20150710011751" -->
<!-- sent="Fri, 10 Jul 2015 10:17:45 +0900" -->
<!-- isosent="20150710011745" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.8.7 rc1 out for review" -->
<!-- id="559F1D39.90105_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAAvDA144tYbstB=N1TP-XMp_PNwopn6WtcC33sRSbek1AF8dUg_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-07-09 21:17:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17610.php">Paul Hargrove: "Re: [OMPI devel] 1.8.7 rc1 out for review"</a>
<li><strong>Previous message:</strong> <a href="17608.php">Paul Hargrove: "Re: [OMPI devel] 1.8.7 rc1 out for review"</a>
<li><strong>In reply to:</strong> <a href="17608.php">Paul Hargrove: "Re: [OMPI devel] 1.8.7 rc1 out for review"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17610.php">Paul Hargrove: "Re: [OMPI devel] 1.8.7 rc1 out for review"</a>
<li><strong>Reply:</strong> <a href="17610.php">Paul Hargrove: "Re: [OMPI devel] 1.8.7 rc1 out for review"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Paul,
<br>
<p>i just found an other bug ...
<br>
(and i should be blamed for it)
<br>
<p>here is attached a patch.
<br>
<p>basically, xrc was incorrectly disabled on &quot;older&quot; ofed stacks
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p><p>On 7/10/2015 10:06 AM, Paul Hargrove wrote:
<br>
<span class="quotelev1">&gt; Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A bzip2-compressed config.log is attached.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am unsure how to determine the OFED version, because the admins have 
</span><br>
<span class="quotelev1">&gt; prevented normal users from reading the RPM database.
</span><br>
<span class="quotelev1">&gt; Perhaps the following helps:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ nm /usr/lib64/libibverbs.a | grep -i xrc
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
<span class="quotelev1">&gt; $ grep XRC /usr/include/infiniband/verbs.h
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
<span class="quotelev1">&gt; When tonight's master tarball is posted (perhaps 10 minutes from now) 
</span><br>
<span class="quotelev1">&gt; I will test it and report what I find.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Jul 9, 2015 at 5:17 PM, Gilles Gouaillardet &lt;gilles_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:gilles_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Paul,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     can you please compress and post your config.log ?
</span><br>
<span class="quotelev1">&gt;     what is the OFED version you are running ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     on master, that fix did the trick on mellanox test cluster (recent
</span><br>
<span class="quotelev1">&gt;     OFED version) but did not
</span><br>
<span class="quotelev1">&gt;     enable XRC on lanl test clusters (my best bet is an old OFED library)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On 7/10/2015 9:08 AM, Paul Hargrove wrote:
</span><br>
<span class="quotelev2">&gt;&gt;     Preliminary report:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     1) I find that &quot;ConnectX XRC support&quot; is still not detected as it
</span><br>
<span class="quotelev2">&gt;&gt;     was in 1.8.4 and earlier:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         $ grep  'ConnectX XRC support'
</span><br>
<span class="quotelev2">&gt;&gt;         openmpi-1.*-icc-14/LOG/configure.log|  sort -u
</span><br>
<span class="quotelev2">&gt;&gt;         openmpi-1.8-linux-x86_64-icc-14/LOG/configure.log:checking if
</span><br>
<span class="quotelev2">&gt;&gt;         ConnectX XRC support is enabled... yes
</span><br>
<span class="quotelev2">&gt;&gt;         openmpi-1.8.1-linux-x86_64-icc-14/LOG/configure.log:checking
</span><br>
<span class="quotelev2">&gt;&gt;         if ConnectX XRC support is enabled... yes
</span><br>
<span class="quotelev2">&gt;&gt;         openmpi-1.8.2-linux-x86_64-icc-14/LOG/configure.log:checking
</span><br>
<span class="quotelev2">&gt;&gt;         if ConnectX XRC support is enabled... yes
</span><br>
<span class="quotelev2">&gt;&gt;         openmpi-1.8.3-linux-x86_64-icc-14/LOG/configure.log:checking
</span><br>
<span class="quotelev2">&gt;&gt;         if ConnectX XRC support is enabled... yes
</span><br>
<span class="quotelev2">&gt;&gt;         openmpi-1.8.4-linux-x86_64-icc-14/LOG/configure.log:checking
</span><br>
<span class="quotelev2">&gt;&gt;         if ConnectX XRC support is enabled... yes
</span><br>
<span class="quotelev2">&gt;&gt;         openmpi-1.8.5-linux-x86_64-icc-14/LOG/configure.log:checking
</span><br>
<span class="quotelev2">&gt;&gt;         if ConnectX XRC support is enabled... no
</span><br>
<span class="quotelev2">&gt;&gt;         openmpi-1.8.6-linux-x86_64-icc-14/LOG/configure.log:checking
</span><br>
<span class="quotelev2">&gt;&gt;         if ConnectX XRC support is enabled... no
</span><br>
<span class="quotelev2">&gt;&gt;         openmpi-1.8.7rc1-linux-x86_64-icc-14/LOG/configure.log:checking
</span><br>
<span class="quotelev2">&gt;&gt;         if ConnectX XRC support is enabled... no
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     2) I noticed a cosmetic &quot;glitch&quot; in the configure output:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         checking for working epoll library interface... checking if epoll can build... yes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         yes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     This just means AC_MSG_{CHECKING,RESULT} macros are nested when
</span><br>
<span class="quotelev2">&gt;&gt;     they shouldn't be.
</span><br>
<span class="quotelev2">&gt;&gt;     There is nothing to suggest that the results of the configure
</span><br>
<span class="quotelev2">&gt;&gt;     probes are incorrect.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     -Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     On Thu, Jul 9, 2015 at 1:03 PM, Ralph Castain &lt;rhc_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         In the usual place:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         <a href="http://www.open-mpi.org/software/ompi/v1.8/">http://www.open-mpi.org/software/ompi/v1.8/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Please test and let me know of any issues that surface. My
</span><br>
<span class="quotelev2">&gt;&gt;         intent is to release this next week.
</span><br>
<span class="quotelev2">&gt;&gt;         Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;         devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;         devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;         Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;         <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17604.php">http://www.open-mpi.org/community/lists/devel/2015/07/17604.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     -- 
</span><br>
<span class="quotelev2">&gt;&gt;     Paul H. Hargrove PHHargrove_at_[hidden] &lt;mailto:PHHargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev2">&gt;&gt;     Computer Science Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;tel:%2B1-510-495-2352&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;tel:%2B1-510-486-6900&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     _______________________________________________ devel mailing
</span><br>
<span class="quotelev2">&gt;&gt;     list devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt; Subscription:
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Link to this post:<a href="http://www.open-mpi.org/community/lists/devel/2015/07/17606.php">http://www.open-mpi.org/community/lists/devel/2015/07/17606.php</a>
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
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17607.php">http://www.open-mpi.org/community/lists/devel/2015/07/17607.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17608.php">http://www.open-mpi.org/community/lists/devel/2015/07/17608.php</a>
</span><br>
<p><p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17609/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17609/xrc.2.v1.8.patch">xrc.2.v1.8.patch</a>
</ul>
<!-- attachment="xrc.2.v1.8.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17610.php">Paul Hargrove: "Re: [OMPI devel] 1.8.7 rc1 out for review"</a>
<li><strong>Previous message:</strong> <a href="17608.php">Paul Hargrove: "Re: [OMPI devel] 1.8.7 rc1 out for review"</a>
<li><strong>In reply to:</strong> <a href="17608.php">Paul Hargrove: "Re: [OMPI devel] 1.8.7 rc1 out for review"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17610.php">Paul Hargrove: "Re: [OMPI devel] 1.8.7 rc1 out for review"</a>
<li><strong>Reply:</strong> <a href="17610.php">Paul Hargrove: "Re: [OMPI devel] 1.8.7 rc1 out for review"</a>
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
