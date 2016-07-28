<?
$subject_val = "Re: [OMPI devel] 1.8.7 rc1 out for review";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  9 20:08:57 2015" -->
<!-- isoreceived="20150710000857" -->
<!-- sent="Thu, 9 Jul 2015 17:08:43 -0700" -->
<!-- isosent="20150710000843" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.8.7 rc1 out for review" -->
<!-- id="CAAvDA17ErBytfi0w2myEqe-yv59QaaspLH6hEDjYA9KxhJUqTQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="76BC5D81-F8B0-43C3-94AD-07CF1DBE0197_at_open-mpi.org" -->
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
<strong>Date:</strong> 2015-07-09 20:08:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17607.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.8.7 rc1 out for review"</a>
<li><strong>Previous message:</strong> <a href="17605.php">Christopher Samuel: "Re: [OMPI devel] Error in ./configure for Yocto"</a>
<li><strong>In reply to:</strong> <a href="17604.php">Ralph Castain: "[OMPI devel] 1.8.7 rc1 out for review"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17607.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.8.7 rc1 out for review"</a>
<li><strong>Reply:</strong> <a href="17607.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.8.7 rc1 out for review"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Preliminary report:
<br>
<p>1) I find that &quot;ConnectX XRC support&quot; is still not detected as it was in
<br>
1.8.4 and earlier:
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
openmpi-1.8.7rc1-linux-x86_64-icc-14/LOG/configure.log:checking if ConnectX
<br>
XRC support is enabled... no
<br>
<p><p><p>2) I noticed a cosmetic &quot;glitch&quot; in the configure output:
<br>
<p>checking for working epoll library interface... checking if epoll can
<br>
build... yes
<br>
<p>yes
<br>
<p>This just means AC_MSG_{CHECKING,RESULT} macros are nested when they
<br>
shouldn't be.
<br>
There is nothing to suggest that the results of the configure probes are
<br>
incorrect.
<br>
<p><p>-Paul
<br>
<p>On Thu, Jul 9, 2015 at 1:03 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; In the usual place:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/software/ompi/v1.8/">http://www.open-mpi.org/software/ompi/v1.8/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please test and let me know of any issues that surface. My intent is to
</span><br>
<span class="quotelev1">&gt; release this next week.
</span><br>
<span class="quotelev1">&gt; Ralph
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17604.php">http://www.open-mpi.org/community/lists/devel/2015/07/17604.php</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17606/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17607.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.8.7 rc1 out for review"</a>
<li><strong>Previous message:</strong> <a href="17605.php">Christopher Samuel: "Re: [OMPI devel] Error in ./configure for Yocto"</a>
<li><strong>In reply to:</strong> <a href="17604.php">Ralph Castain: "[OMPI devel] 1.8.7 rc1 out for review"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17607.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.8.7 rc1 out for review"</a>
<li><strong>Reply:</strong> <a href="17607.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.8.7 rc1 out for review"</a>
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
