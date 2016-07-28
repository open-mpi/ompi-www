<?
$subject_val = "Re: [OMPI devel] 1.8.6rc2 ready for test";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 16 20:55:24 2015" -->
<!-- isoreceived="20150617005524" -->
<!-- sent="Tue, 16 Jun 2015 17:54:44 -0700" -->
<!-- isosent="20150617005444" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.8.6rc2 ready for test" -->
<!-- id="CAAvDA163k-+vtghq9xjqxgYwWMV0qxDma6i3YbdNMfnMugR00Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="ADAD01B4-E6D0-4ED4-A6A7-26C3BEC099BB_at_open-mpi.org" -->
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
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-16 20:54:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17506.php">Ralph Castain: "Re: [OMPI devel] 1.8.6rc2 ready for test"</a>
<li><strong>Previous message:</strong> <a href="17504.php">Jeff Squyres (jsquyres): "[OMPI devel] Devel meeting in San Jose next week"</a>
<li><strong>In reply to:</strong> <a href="17496.php">Ralph Castain: "[OMPI devel] 1.8.6rc2 ready for test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17506.php">Ralph Castain: "Re: [OMPI devel] 1.8.6rc2 ready for test"</a>
<li><strong>Reply:</strong> <a href="17506.php">Ralph Castain: "Re: [OMPI devel] 1.8.6rc2 ready for test"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My testing report for 1.8.6rc2 is nearly unchanged relative to rc1:
<br>
<p>Around 70 configurations have completed, but slow qemu-emulated ARM and
<br>
MIPS systems will continue overnight.
<br>
At this point everything is successful except for some known issues (also
<br>
present in 1.8.5 and thus not regressions):
<br>
&nbsp;&nbsp;+ ROMIO doesn't compile on the latest OpenBSD
<br>
&nbsp;&nbsp;+ XLC-11.1 botches atomics on ppc64
<br>
&nbsp;&nbsp;+ fortran support is busted in various PGI and XLC compilers (in ways
<br>
configure doesn't detect).
<br>
<p>This round of testing excludes Solaris/SPARC since that system is down (and
<br>
may or may not return).
<br>
There is a chance I will bring up qemu-emulated SPARC in the future, but
<br>
not in time for this rc.
<br>
However, I believe others still test on that platform.
<br>
<p>-Paul
<br>
<p>On Sat, Jun 13, 2015 at 3:27 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Usual place:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/software/ompi/v1.8/">http://www.open-mpi.org/software/ompi/v1.8/</a>
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
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/06/17496.php">http://www.open-mpi.org/community/lists/devel/2015/06/17496.php</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17505/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17506.php">Ralph Castain: "Re: [OMPI devel] 1.8.6rc2 ready for test"</a>
<li><strong>Previous message:</strong> <a href="17504.php">Jeff Squyres (jsquyres): "[OMPI devel] Devel meeting in San Jose next week"</a>
<li><strong>In reply to:</strong> <a href="17496.php">Ralph Castain: "[OMPI devel] 1.8.6rc2 ready for test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17506.php">Ralph Castain: "Re: [OMPI devel] 1.8.6rc2 ready for test"</a>
<li><strong>Reply:</strong> <a href="17506.php">Ralph Castain: "Re: [OMPI devel] 1.8.6rc2 ready for test"</a>
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
