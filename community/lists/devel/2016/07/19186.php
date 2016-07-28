<?
$subject_val = "Re: [OMPI devel] [2.0.0rc4] non-critical faulres report";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 12 14:11:01 2016" -->
<!-- isoreceived="20160712181101" -->
<!-- sent="Tue, 12 Jul 2016 11:10:39 -0700" -->
<!-- isosent="20160712181039" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [2.0.0rc4] non-critical faulres report" -->
<!-- id="CAAvDA14XeOB+nbyznZdYr0ss7DRWto1THaj8O4kJ1_V6rk8VQw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="FDE5195E-2798-4C08-89D6-111C04A45A81_at_cisco.com" -->
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
<strong>Date:</strong> 2016-07-12 14:10:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19187.php">Paul Hargrove: "Re: [OMPI devel] [2.0.0rc4] non-critical faulres report"</a>
<li><strong>Previous message:</strong> <a href="19185.php">Jeff Squyres (jsquyres): "[OMPI devel] Added &quot;known issues&quot; section to NEWS"</a>
<li><strong>In reply to:</strong> <a href="19183.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [2.0.0rc4] non-critical faulres report"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19187.php">Paul Hargrove: "Re: [OMPI devel] [2.0.0rc4] non-critical faulres report"</a>
<li><strong>Reply:</strong> <a href="19187.php">Paul Hargrove: "Re: [OMPI devel] [2.0.0rc4] non-critical faulres report"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have a lead on a 15.10 installation with -m32 support.
<br>
I will report results later.
<br>
<p>-Paul
<br>
<p><p>On Tue, Jul 12, 2016 at 10:29 AM, Jeff Squyres (jsquyres) &lt;
<br>
jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Got it; thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jul 12, 2016, at 1:00 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have only access to two instances of PGI which were installed with
</span><br>
<span class="quotelev1">&gt; -m32 support.
</span><br>
<span class="quotelev2">&gt; &gt; They are both old:  12.10-0 and 13.9-0.
</span><br>
<span class="quotelev2">&gt; &gt; Sorry, I know that's not much.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Paul
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Tue, Jul 12, 2016 at 8:06 AM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Paul,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Could you narrow down the versions of the PGCC where you get the ICE when
</span><br>
<span class="quotelev2">&gt; &gt; using the -m32 option?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Howard
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2016-07-06 15:29 GMT-06:00 Paul Hargrove &lt;phhargrove_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt; &gt; The following are previously reported issues that I am *not* expecting
</span><br>
<span class="quotelev1">&gt; to be resolved in 2.0.0.
</span><br>
<span class="quotelev2">&gt; &gt; However, I am listing them here for completeness.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Known, but with later target:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; OpenBSD fails to build ROMIO - PR1178 exists with v2.0.1 target
</span><br>
<span class="quotelev2">&gt; &gt; NAG Fortran support - PR1215 exists with v2.0.1 target
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Known, but *not* suspected to be the fault of Open MPI or it embedded
</span><br>
<span class="quotelev1">&gt; components:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Pathcc gets ICE - versions 5.0.5 and 6.0.527 get compiler crashes
</span><br>
<span class="quotelev1">&gt; building Open MPI
</span><br>
<span class="quotelev2">&gt; &gt; Pgcc -m32 gets ICE - versions 12.x and 13.x (the only ones I can test w/
</span><br>
<span class="quotelev1">&gt; -m32) crash compiling hwloc
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Paul
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev2">&gt; &gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt; &gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19155.php">http://www.open-mpi.org/community/lists/devel/2016/07/19155.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19181.php">http://www.open-mpi.org/community/lists/devel/2016/07/19181.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev2">&gt; &gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt; &gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19182.php">http://www.open-mpi.org/community/lists/devel/2016/07/19182.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19183.php">http://www.open-mpi.org/community/lists/devel/2016/07/19183.php</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19186/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19187.php">Paul Hargrove: "Re: [OMPI devel] [2.0.0rc4] non-critical faulres report"</a>
<li><strong>Previous message:</strong> <a href="19185.php">Jeff Squyres (jsquyres): "[OMPI devel] Added &quot;known issues&quot; section to NEWS"</a>
<li><strong>In reply to:</strong> <a href="19183.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [2.0.0rc4] non-critical faulres report"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19187.php">Paul Hargrove: "Re: [OMPI devel] [2.0.0rc4] non-critical faulres report"</a>
<li><strong>Reply:</strong> <a href="19187.php">Paul Hargrove: "Re: [OMPI devel] [2.0.0rc4] non-critical faulres report"</a>
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
