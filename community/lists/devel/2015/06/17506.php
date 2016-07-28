<?
$subject_val = "Re: [OMPI devel] 1.8.6rc2 ready for test";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 17 09:35:14 2015" -->
<!-- isoreceived="20150617133514" -->
<!-- sent="Wed, 17 Jun 2015 06:35:06 -0700" -->
<!-- isosent="20150617133506" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.8.6rc2 ready for test" -->
<!-- id="F3070C90-F7A0-4393-85B3-F71469300A42_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAvDA163k-+vtghq9xjqxgYwWMV0qxDma6i3YbdNMfnMugR00Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.8.6rc2 ready for test<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-17 09:35:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17507.php">Jeff Squyres (jsquyres): "[OMPI devel] Clarification on Open MPI's version requirements"</a>
<li><strong>Previous message:</strong> <a href="17505.php">Paul Hargrove: "Re: [OMPI devel] 1.8.6rc2 ready for test"</a>
<li><strong>In reply to:</strong> <a href="17505.php">Paul Hargrove: "Re: [OMPI devel] 1.8.6rc2 ready for test"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Paul!
<br>
<p><span class="quotelev1">&gt; On Jun 16, 2015, at 5:54 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My testing report for 1.8.6rc2 is nearly unchanged relative to rc1:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Around 70 configurations have completed, but slow qemu-emulated ARM and MIPS systems will continue overnight.
</span><br>
<span class="quotelev1">&gt; At this point everything is successful except for some known issues (also present in 1.8.5 and thus not regressions):
</span><br>
<span class="quotelev1">&gt;   + ROMIO doesn't compile on the latest OpenBSD
</span><br>
<span class="quotelev1">&gt;   + XLC-11.1 botches atomics on ppc64
</span><br>
<span class="quotelev1">&gt;   + fortran support is busted in various PGI and XLC compilers (in ways configure doesn't detect).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This round of testing excludes Solaris/SPARC since that system is down (and may or may not return).
</span><br>
<span class="quotelev1">&gt; There is a chance I will bring up qemu-emulated SPARC in the future, but not in time for this rc.
</span><br>
<span class="quotelev1">&gt; However, I believe others still test on that platform.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sat, Jun 13, 2015 at 3:27 PM, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Usual place:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/software/ompi/v1.8/">http://www.open-mpi.org/software/ompi/v1.8/</a> &lt;<a href="http://www.open-mpi.org/software/ompi/v1.8/">http://www.open-mpi.org/software/ompi/v1.8/</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/06/17496.php">http://www.open-mpi.org/community/lists/devel/2015/06/17496.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/06/17496.php">http://www.open-mpi.org/community/lists/devel/2015/06/17496.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/06/17505.php">http://www.open-mpi.org/community/lists/devel/2015/06/17505.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17506/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17507.php">Jeff Squyres (jsquyres): "[OMPI devel] Clarification on Open MPI's version requirements"</a>
<li><strong>Previous message:</strong> <a href="17505.php">Paul Hargrove: "Re: [OMPI devel] 1.8.6rc2 ready for test"</a>
<li><strong>In reply to:</strong> <a href="17505.php">Paul Hargrove: "Re: [OMPI devel] 1.8.6rc2 ready for test"</a>
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
