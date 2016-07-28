<?
$subject_val = "Re: [OMPI devel] [1.8.4rc5] preliminary results";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 19 18:52:19 2014" -->
<!-- isoreceived="20141219235219" -->
<!-- sent="Fri, 19 Dec 2014 23:52:17 +0000" -->
<!-- isosent="20141219235217" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [1.8.4rc5] preliminary results" -->
<!-- id="2EE24B7A-AB47-41CE-9064-AE23565E76F4_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA15mwvUn9BpwUfjcmUttDehFfwiFkK+e3mfctLtGm0_SQw_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-19 18:52:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16702.php">Rob Latham: "Re: [OMPI devel] [mpich-discuss] BUG in ADIOI_NFS_WriteStrided"</a>
<li><strong>Previous message:</strong> <a href="16700.php">Paul Hargrove: "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
<li><strong>In reply to:</strong> <a href="16700.php">Paul Hargrove: "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you!
<br>
<p>On Dec 19, 2014, at 6:46 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; A quick glance at the results for the two &quot;configurations of interest&quot; appear to show the problem is resolved.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tonight I will take a complete look through my results and report ONLY if I find new regressions.
</span><br>
<span class="quotelev1">&gt; Unless you hear from me, assume &quot;openmpi-v1.8.3-322-g562a764&quot; gets my &quot;thumbs up&quot; with respect to &quot;Fortran Sadness&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Dec 19, 2014 at 12:51 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Less typing to launch 50+ testers than pick out just those two.
</span><br>
<span class="quotelev1">&gt; Starting them now...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Dec 19, 2014 at 12:22 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Paul --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The fix for this is now on the v1.8 branch.  I'm spinning up a new nightly tarball for you.
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
<span class="quotelev2">&gt; &gt; I now have 59 of 61 results, with only the QEMU-emulated MIPS platforms outstanding.
</span><br>
<span class="quotelev2">&gt; &gt; Those will not likely finish until near to (or after) midnight tonight.
</span><br>
<span class="quotelev2">&gt; &gt; Unless something turns up on the MIPS systems my &quot;smoke test&quot; of rc5 is complete.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The only issues I found are the vader and fortran ones mentioned previously.
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
<span class="quotelev2">&gt; &gt; I define &quot;issue&quot; to *exclude* known problem with certain compilers that are also present in earlier releases.  In particular, I pass explicit --with-mpi-fortran=XXX and/or --disable-oshmem-fortran options to configure when using certain PGI and XLC versions because (as of 1.8.3 when I last adjusted those settings) configure was not able to automatically disqualify their &quot;deficient&quot; fortran support.  If there is a desire/need to follow up on this, let me know.  However, all those &quot;deficient&quot; fortan compilers have been reported by me on this list at least once in testing prior releases (just never in one place).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Paul
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Thu, Dec 18, 2014 at 8:55 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; With results from about 50 out of 61 platforms:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; + KNOWN: SGI UV is still &quot;broken-by-default&quot; (fails compiling vader unless configured with --without-xpmem)
</span><br>
<span class="quotelev2">&gt; &gt; + NEW: I see Fortran bindings failing to compile w/ gfortran
</span><br>
<span class="quotelev2">&gt; &gt; + NEW: I see Fortran bindings fail to link with Open64
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I also have unexplained errors on my Solaris-10/SPARC system.
</span><br>
<span class="quotelev2">&gt; &gt; It looks like there may have been a loss of network connectivity during the tests.
</span><br>
<span class="quotelev2">&gt; &gt; I need to check these deeper, but I expect them to pass when I get a chance to re-run them.
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
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16683.php">http://www.open-mpi.org/community/lists/devel/2014/12/16683.php</a>
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
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16697.php">http://www.open-mpi.org/community/lists/devel/2014/12/16697.php</a>
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16700.php">http://www.open-mpi.org/community/lists/devel/2014/12/16700.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16702.php">Rob Latham: "Re: [OMPI devel] [mpich-discuss] BUG in ADIOI_NFS_WriteStrided"</a>
<li><strong>Previous message:</strong> <a href="16700.php">Paul Hargrove: "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
<li><strong>In reply to:</strong> <a href="16700.php">Paul Hargrove: "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
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
