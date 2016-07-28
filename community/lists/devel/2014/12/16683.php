<?
$subject_val = "Re: [OMPI devel] [1.8.4rc5] preliminary results";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 18 20:50:51 2014" -->
<!-- isoreceived="20141219015051" -->
<!-- sent="Thu, 18 Dec 2014 17:50:48 -0800" -->
<!-- isosent="20141219015048" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [1.8.4rc5] preliminary results" -->
<!-- id="CAAvDA14=QoGOn9JZ-=tjGb8rwntz+2io_duxp7oSWfmLYOYtww_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAvDA1424ttWyv+_7GJN6+1LEOtgVE6EY+ZQY_=UsWp9wwY4aQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-12-18 20:50:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16684.php">Gilles Gouaillardet: "Re: [OMPI devel] libfabric, config.h and hwloc"</a>
<li><strong>Previous message:</strong> <a href="16682.php">Paul Hargrove: "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
<li><strong>In reply to:</strong> <a href="16669.php">Paul Hargrove: "[OMPI devel] [1.8.4rc5] preliminary results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16693.php">Paul Hargrove: "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
<li><strong>Reply:</strong> <a href="16693.php">Paul Hargrove: "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
<li><strong>Reply:</strong> <a href="16697.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Update:
<br>
<p>I now have 59 of 61 results, with only the QEMU-emulated MIPS platforms
<br>
outstanding.
<br>
Those will not likely finish until near to (or after) midnight tonight.
<br>
Unless something turns up on the MIPS systems my &quot;smoke test&quot; of rc5 is
<br>
complete.
<br>
<p>The only issues I found are the vader and fortran ones mentioned previously.
<br>
<p>Nathan now has an account on the same SGI UV as I have been using.
<br>
Jeff now has my configure and ompi_info output for my fortran failures.
<br>
<p>NOTE (primarily directed at Jeff):
<br>
I define &quot;issue&quot; to *exclude* known problem with certain compilers that are
<br>
also present in earlier releases.  In particular, I pass explicit
<br>
--with-mpi-fortran=XXX and/or --disable-oshmem-fortran options to configure
<br>
when using certain PGI and XLC versions because (as of 1.8.3 when I last
<br>
adjusted those settings) configure was not able to automatically disqualify
<br>
their &quot;deficient&quot; fortran support.  If there is a desire/need to follow up
<br>
on this, let me know.  However, all those &quot;deficient&quot; fortan compilers have
<br>
been reported by me on this list at least once in testing prior releases
<br>
(just never in one place).
<br>
<p>-Paul
<br>
<p>On Thu, Dec 18, 2014 at 8:55 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With results from about 50 out of 61 platforms:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; + KNOWN: SGI UV is still &quot;broken-by-default&quot; (fails compiling vader unless
</span><br>
<span class="quotelev1">&gt; configured with --without-xpmem)
</span><br>
<span class="quotelev1">&gt; + NEW: I see Fortran bindings failing to compile w/ gfortran
</span><br>
<span class="quotelev1">&gt; + NEW: I see Fortran bindings fail to link with Open64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I also have unexplained errors on my Solaris-10/SPARC system.
</span><br>
<span class="quotelev1">&gt; It looks like there may have been a loss of network connectivity during
</span><br>
<span class="quotelev1">&gt; the tests.
</span><br>
<span class="quotelev1">&gt; I need to check these deeper, but I expect them to pass when I get a
</span><br>
<span class="quotelev1">&gt; chance to re-run them.
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
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16683/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16684.php">Gilles Gouaillardet: "Re: [OMPI devel] libfabric, config.h and hwloc"</a>
<li><strong>Previous message:</strong> <a href="16682.php">Paul Hargrove: "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
<li><strong>In reply to:</strong> <a href="16669.php">Paul Hargrove: "[OMPI devel] [1.8.4rc5] preliminary results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16693.php">Paul Hargrove: "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
<li><strong>Reply:</strong> <a href="16693.php">Paul Hargrove: "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
<li><strong>Reply:</strong> <a href="16697.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
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
