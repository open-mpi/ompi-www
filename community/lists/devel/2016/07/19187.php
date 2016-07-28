<?
$subject_val = "Re: [OMPI devel] [2.0.0rc4] non-critical faulres report";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 12 14:31:59 2016" -->
<!-- isoreceived="20160712183159" -->
<!-- sent="Tue, 12 Jul 2016 11:31:46 -0700" -->
<!-- isosent="20160712183146" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [2.0.0rc4] non-critical faulres report" -->
<!-- id="CAAvDA17sHH+A2w5MGG3vrqfv13i3wkJ64RYRhnB-m74NUL6k9Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAvDA14XeOB+nbyznZdYr0ss7DRWto1THaj8O4kJ1_V6rk8VQw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [2.0.0rc4] non-critical faulres report<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-12 14:31:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19188.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [2.0.0rc4] non-critical faulres report"</a>
<li><strong>Previous message:</strong> <a href="19186.php">Paul Hargrove: "Re: [OMPI devel] [2.0.0rc4] non-critical faulres report"</a>
<li><strong>In reply to:</strong> <a href="19186.php">Paul Hargrove: "Re: [OMPI devel] [2.0.0rc4] non-critical faulres report"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19188.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [2.0.0rc4] non-critical faulres report"</a>
<li><strong>Reply:</strong> <a href="19188.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [2.0.0rc4] non-critical faulres report"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok, PGI 15.10 w/ -m32 failed in the same way as the earlier versions.
<br>
<p>-Paul
<br>
<p>On Tue, Jul 12, 2016 at 11:10 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I have a lead on a 15.10 installation with -m32 support.
</span><br>
<span class="quotelev1">&gt; I will report results later.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Jul 12, 2016 at 10:29 AM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Got it; thanks.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Jul 12, 2016, at 1:00 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I have only access to two instances of PGI which were installed with
</span><br>
<span class="quotelev2">&gt;&gt; -m32 support.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; They are both old:  12.10-0 and 13.9-0.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Sorry, I know that's not much.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -Paul
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Tue, Jul 12, 2016 at 8:06 AM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Paul,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Could you narrow down the versions of the PGCC where you get the ICE
</span><br>
<span class="quotelev2">&gt;&gt; when
</span><br>
<span class="quotelev3">&gt;&gt; &gt; using the -m32 option?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Howard
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 2016-07-06 15:29 GMT-06:00 Paul Hargrove &lt;phhargrove_at_[hidden]&gt;:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; The following are previously reported issues that I am *not* expecting
</span><br>
<span class="quotelev2">&gt;&gt; to be resolved in 2.0.0.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; However, I am listing them here for completeness.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Known, but with later target:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; OpenBSD fails to build ROMIO - PR1178 exists with v2.0.1 target
</span><br>
<span class="quotelev3">&gt;&gt; &gt; NAG Fortran support - PR1215 exists with v2.0.1 target
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Known, but *not* suspected to be the fault of Open MPI or it embedded
</span><br>
<span class="quotelev2">&gt;&gt; components:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Pathcc gets ICE - versions 5.0.5 and 6.0.527 get compiler crashes
</span><br>
<span class="quotelev2">&gt;&gt; building Open MPI
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Pgcc -m32 gets ICE - versions 12.x and 13.x (the only ones I can test
</span><br>
<span class="quotelev2">&gt;&gt; w/ -m32) crash compiling hwloc
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -Paul
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19155.php">http://www.open-mpi.org/community/lists/devel/2016/07/19155.php</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19181.php">http://www.open-mpi.org/community/lists/devel/2016/07/19181.php</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19182.php">http://www.open-mpi.org/community/lists/devel/2016/07/19182.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19183.php">http://www.open-mpi.org/community/lists/devel/2016/07/19183.php</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19187/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19188.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [2.0.0rc4] non-critical faulres report"</a>
<li><strong>Previous message:</strong> <a href="19186.php">Paul Hargrove: "Re: [OMPI devel] [2.0.0rc4] non-critical faulres report"</a>
<li><strong>In reply to:</strong> <a href="19186.php">Paul Hargrove: "Re: [OMPI devel] [2.0.0rc4] non-critical faulres report"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19188.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [2.0.0rc4] non-critical faulres report"</a>
<li><strong>Reply:</strong> <a href="19188.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [2.0.0rc4] non-critical faulres report"</a>
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
