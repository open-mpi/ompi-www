<?
$subject_val = "Re: [OMPI devel] Master failure of oob_tcp on Solaris";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 20 10:13:59 2015" -->
<!-- isoreceived="20150320141359" -->
<!-- sent="Fri, 20 Mar 2015 07:13:54 -0700" -->
<!-- isosent="20150320141354" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Master failure of oob_tcp on Solaris" -->
<!-- id="DC82AAA0-DEBA-4BCD-A6D4-B2AFCDAF70DC_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA14H0XK+ttVm5VNVLLuwwHjyhbWoTePoCfB-RbbxqmYXgg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Master failure of oob_tcp on Solaris<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-20 10:13:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17140.php">Rolf vandeVaart: "[OMPI devel] New binding warnings in master"</a>
<li><strong>Previous message:</strong> <a href="17138.php">Paul Hargrove: "[OMPI devel] Master failure of oob_tcp on Solaris"</a>
<li><strong>In reply to:</strong> <a href="17138.php">Paul Hargrove: "[OMPI devel] Master failure of oob_tcp on Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17142.php">Paul Hargrove: "Re: [OMPI devel] Master failure of oob_tcp on Solaris"</a>
<li><strong>Reply:</strong> <a href="17142.php">Paul Hargrove: "Re: [OMPI devel] Master failure of oob_tcp on Solaris"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Paul
<br>
<p>It should have kept running, albeit with that warning - did the program actually fail?
<br>
<p><p><span class="quotelev1">&gt; On Mar 19, 2015, at 10:05 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Seen earlier today with last night's master tarball:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpirun -mca btl sm,self,verbs -np 2 -host pcp-j-31,pcp-j-35 examples/ring_c'
</span><br>
<span class="quotelev1">&gt; [pcp-j-35:01400] [/shared/OMPI/openmpi-master-solaris11-x64-ib-ss12u3/openmpi-dev-1351-gccba8ce/orte/mca/oob/tcp/oob_tcp_common.c:103] setsockopt(TCP_KEEPALIVE) failed: Option not supported by protocol (99)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden] &lt;mailto:PHHargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/03/17138.php">http://www.open-mpi.org/community/lists/devel/2015/03/17138.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17139/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17140.php">Rolf vandeVaart: "[OMPI devel] New binding warnings in master"</a>
<li><strong>Previous message:</strong> <a href="17138.php">Paul Hargrove: "[OMPI devel] Master failure of oob_tcp on Solaris"</a>
<li><strong>In reply to:</strong> <a href="17138.php">Paul Hargrove: "[OMPI devel] Master failure of oob_tcp on Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17142.php">Paul Hargrove: "Re: [OMPI devel] Master failure of oob_tcp on Solaris"</a>
<li><strong>Reply:</strong> <a href="17142.php">Paul Hargrove: "Re: [OMPI devel] Master failure of oob_tcp on Solaris"</a>
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
