<?
$subject_val = "Re: [OMPI devel] [1.8.4rc5] preliminary results";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 19 15:51:40 2014" -->
<!-- isoreceived="20141219205140" -->
<!-- sent="Fri, 19 Dec 2014 12:51:33 -0800" -->
<!-- isosent="20141219205133" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [1.8.4rc5] preliminary results" -->
<!-- id="CAAvDA16b10SeOcbABarMbdUFrmyi+bwXaaFaCBcjhbBfEU4FJg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="34BB2F06-A891-472A-982D-A654103B66A4_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [1.8.4rc5] preliminary results<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-19 15:51:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16700.php">Paul Hargrove: "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
<li><strong>Previous message:</strong> <a href="16698.php">Eric Chamberland: "[OMPI devel] BUG in ADIOI_NFS_WriteStrided"</a>
<li><strong>In reply to:</strong> <a href="16697.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16700.php">Paul Hargrove: "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
<li><strong>Reply:</strong> <a href="16700.php">Paul Hargrove: "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>Less typing to launch 50+ testers than pick out just those two.
<br>
Starting them now...
<br>
<p>-Paul
<br>
<p>On Fri, Dec 19, 2014 at 12:22 PM, Jeff Squyres (jsquyres) &lt;
<br>
jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Paul --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The fix for this is now on the v1.8 branch.  I'm spinning up a new nightly
</span><br>
<span class="quotelev1">&gt; tarball for you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/nightly/v1.8/">http://www.open-mpi.org/nightly/v1.8/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could you test it in the 2 cases where you had fortran failures?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 18, 2014, at 8:50 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Update:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I now have 59 of 61 results, with only the QEMU-emulated MIPS platforms
</span><br>
<span class="quotelev1">&gt; outstanding.
</span><br>
<span class="quotelev2">&gt; &gt; Those will not likely finish until near to (or after) midnight tonight.
</span><br>
<span class="quotelev2">&gt; &gt; Unless something turns up on the MIPS systems my &quot;smoke test&quot; of rc5 is
</span><br>
<span class="quotelev1">&gt; complete.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The only issues I found are the vader and fortran ones mentioned
</span><br>
<span class="quotelev1">&gt; previously.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Nathan now has an account on the same SGI UV as I have been using.
</span><br>
<span class="quotelev2">&gt; &gt; Jeff now has my configure and ompi_info output for my fortran failures.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; NOTE (primarily directed at Jeff):
</span><br>
<span class="quotelev2">&gt; &gt; I define &quot;issue&quot; to *exclude* known problem with certain compilers that
</span><br>
<span class="quotelev1">&gt; are also present in earlier releases.  In particular, I pass explicit
</span><br>
<span class="quotelev1">&gt; --with-mpi-fortran=XXX and/or --disable-oshmem-fortran options to configure
</span><br>
<span class="quotelev1">&gt; when using certain PGI and XLC versions because (as of 1.8.3 when I last
</span><br>
<span class="quotelev1">&gt; adjusted those settings) configure was not able to automatically disqualify
</span><br>
<span class="quotelev1">&gt; their &quot;deficient&quot; fortran support.  If there is a desire/need to follow up
</span><br>
<span class="quotelev1">&gt; on this, let me know.  However, all those &quot;deficient&quot; fortan compilers have
</span><br>
<span class="quotelev1">&gt; been reported by me on this list at least once in testing prior releases
</span><br>
<span class="quotelev1">&gt; (just never in one place).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Paul
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Thu, Dec 18, 2014 at 8:55 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; With results from about 50 out of 61 platforms:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; + KNOWN: SGI UV is still &quot;broken-by-default&quot; (fails compiling vader
</span><br>
<span class="quotelev1">&gt; unless configured with --without-xpmem)
</span><br>
<span class="quotelev2">&gt; &gt; + NEW: I see Fortran bindings failing to compile w/ gfortran
</span><br>
<span class="quotelev2">&gt; &gt; + NEW: I see Fortran bindings fail to link with Open64
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I also have unexplained errors on my Solaris-10/SPARC system.
</span><br>
<span class="quotelev2">&gt; &gt; It looks like there may have been a loss of network connectivity during
</span><br>
<span class="quotelev1">&gt; the tests.
</span><br>
<span class="quotelev2">&gt; &gt; I need to check these deeper, but I expect them to pass when I get a
</span><br>
<span class="quotelev1">&gt; chance to re-run them.
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
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16683.php">http://www.open-mpi.org/community/lists/devel/2014/12/16683.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16697.php">http://www.open-mpi.org/community/lists/devel/2014/12/16697.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16699/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16700.php">Paul Hargrove: "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
<li><strong>Previous message:</strong> <a href="16698.php">Eric Chamberland: "[OMPI devel] BUG in ADIOI_NFS_WriteStrided"</a>
<li><strong>In reply to:</strong> <a href="16697.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16700.php">Paul Hargrove: "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
<li><strong>Reply:</strong> <a href="16700.php">Paul Hargrove: "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
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
