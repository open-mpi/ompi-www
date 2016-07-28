<?
$subject_val = "Re: [OMPI devel] [1.8.4rc5] preliminary results";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 19 15:22:35 2014" -->
<!-- isoreceived="20141219202235" -->
<!-- sent="Fri, 19 Dec 2014 20:22:34 +0000" -->
<!-- isosent="20141219202234" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [1.8.4rc5] preliminary results" -->
<!-- id="34BB2F06-A891-472A-982D-A654103B66A4_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA14=QoGOn9JZ-=tjGb8rwntz+2io_duxp7oSWfmLYOYtww_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-12-19 15:22:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16698.php">Eric Chamberland: "[OMPI devel] BUG in ADIOI_NFS_WriteStrided"</a>
<li><strong>Previous message:</strong> <a href="16696.php">Howard Pritchard: "Re: [OMPI devel] BUG in ADIOI_NFS_WriteStrided"</a>
<li><strong>In reply to:</strong> <a href="16683.php">Paul Hargrove: "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16699.php">Paul Hargrove: "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
<li><strong>Reply:</strong> <a href="16699.php">Paul Hargrove: "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Paul --
<br>
<p>The fix for this is now on the v1.8 branch.  I'm spinning up a new nightly tarball for you.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/nightly/v1.8/">http://www.open-mpi.org/nightly/v1.8/</a>
<br>
<p>Could you test it in the 2 cases where you had fortran failures?
<br>
<p><p><p>On Dec 18, 2014, at 8:50 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Update:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I now have 59 of 61 results, with only the QEMU-emulated MIPS platforms outstanding.
</span><br>
<span class="quotelev1">&gt; Those will not likely finish until near to (or after) midnight tonight.
</span><br>
<span class="quotelev1">&gt; Unless something turns up on the MIPS systems my &quot;smoke test&quot; of rc5 is complete. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The only issues I found are the vader and fortran ones mentioned previously.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Nathan now has an account on the same SGI UV as I have been using.
</span><br>
<span class="quotelev1">&gt; Jeff now has my configure and ompi_info output for my fortran failures.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; NOTE (primarily directed at Jeff):
</span><br>
<span class="quotelev1">&gt; I define &quot;issue&quot; to *exclude* known problem with certain compilers that are also present in earlier releases.  In particular, I pass explicit --with-mpi-fortran=XXX and/or --disable-oshmem-fortran options to configure when using certain PGI and XLC versions because (as of 1.8.3 when I last adjusted those settings) configure was not able to automatically disqualify their &quot;deficient&quot; fortran support.  If there is a desire/need to follow up on this, let me know.  However, all those &quot;deficient&quot; fortan compilers have been reported by me on this list at least once in testing prior releases (just never in one place).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Dec 18, 2014 at 8:55 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; With results from about 50 out of 61 platforms:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; + KNOWN: SGI UV is still &quot;broken-by-default&quot; (fails compiling vader unless configured with --without-xpmem)
</span><br>
<span class="quotelev1">&gt; + NEW: I see Fortran bindings failing to compile w/ gfortran
</span><br>
<span class="quotelev1">&gt; + NEW: I see Fortran bindings fail to link with Open64
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I also have unexplained errors on my Solaris-10/SPARC system.
</span><br>
<span class="quotelev1">&gt; It looks like there may have been a loss of network connectivity during the tests.
</span><br>
<span class="quotelev1">&gt; I need to check these deeper, but I expect them to pass when I get a chance to re-run them.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16683.php">http://www.open-mpi.org/community/lists/devel/2014/12/16683.php</a>
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
<li><strong>Next message:</strong> <a href="16698.php">Eric Chamberland: "[OMPI devel] BUG in ADIOI_NFS_WriteStrided"</a>
<li><strong>Previous message:</strong> <a href="16696.php">Howard Pritchard: "Re: [OMPI devel] BUG in ADIOI_NFS_WriteStrided"</a>
<li><strong>In reply to:</strong> <a href="16683.php">Paul Hargrove: "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16699.php">Paul Hargrove: "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
<li><strong>Reply:</strong> <a href="16699.php">Paul Hargrove: "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
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
