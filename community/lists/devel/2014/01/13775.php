<?
$subject_val = "Re: [OMPI devel] 1.7.4rc1 install failure: NetBSD-6 amd64";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 14 12:28:12 2014" -->
<!-- isoreceived="20140114172812" -->
<!-- sent="Tue, 14 Jan 2014 09:28:10 -0800" -->
<!-- isosent="20140114172810" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4rc1 install failure: NetBSD-6 amd64" -->
<!-- id="CAAvDA17-4V9yTh+bBDRRUr5OsadeLEQq=6janmOzvpDRX=66vw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="A75DAE3E-F7BF-4EF4-90B0-C53008FD5906_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7.4rc1 install failure: NetBSD-6 amd64<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-14 12:28:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13776.php">Igor Ivanov: "Re: [OMPI devel] [EXTERNAL] Re:  bug in mca framework?"</a>
<li><strong>Previous message:</strong> <a href="13774.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc1 install failure: NetBSD-6 amd64"</a>
<li><strong>In reply to:</strong> <a href="13773.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc1 install failure: NetBSD-6 amd64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13774.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc1 install failure: NetBSD-6 amd64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I had only suggested gfrotran by name because it is available in both
<br>
source and binary form from the pkgsrc repo, and is the successor to g95
<br>
within the GCC project.  I am fine with the &quot;&lt;some_other_compiler&gt;&quot; text.
<br>
<p>-Paul
<br>
<p><p>On Tue, Jan 14, 2014 at 5:41 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; More tweaking -- I don't think there's an explicit reason to mention
</span><br>
<span class="quotelev1">&gt; gfortran, is there?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - On NetBSD-6 (at least AMD64 and i386), and possibly on OpenBSD,
</span><br>
<span class="quotelev1">&gt;   libtool misidentifies properties of f95/g95, leading to obscure
</span><br>
<span class="quotelev1">&gt;   compile-time failures if used to build Open MPI.  You can work
</span><br>
<span class="quotelev1">&gt;   around this issue by ensuring that libtool will not use f95/g95
</span><br>
<span class="quotelev1">&gt;   (e.g., by specifying FC=&lt;some_other_compiler&gt;, or otherwise ensuring
</span><br>
<span class="quotelev1">&gt;   a different Fortran compiler will be found earlier in the path than
</span><br>
<span class="quotelev1">&gt;   f95/g95), or by disabling the Fortran MPI bindings with
</span><br>
<span class="quotelev1">&gt;   --disable-mpi-fortran.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 14, 2014, at 8:15 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jan 14, 2014, at 2:44 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The problem surfaces on i386 too, and use of gfortran seems the best
</span><br>
<span class="quotelev1">&gt; fix.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; My recommended rewrite:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; - On NetBSD-6 (at least AMD64 and i386) libtool misidentifies
</span><br>
<span class="quotelev1">&gt; properties of
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  f95/g95, leading to obscure compile-time failures if used to build
</span><br>
<span class="quotelev1">&gt; Open MPI.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  You can work around this issue by either installing gfortran, removing
</span><br>
<span class="quotelev1">&gt; f95
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  and g95 from your path, or by configuring Open MPI to disable the
</span><br>
<span class="quotelev1">&gt; fortran
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  bindings.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I tweaked a bit -- how's this:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; - On NetBSD-6 (at least AMD64 and i386), and possibly on OpenBSD,
</span><br>
<span class="quotelev2">&gt; &gt;  libtool misidentifies properties of f95/g95, leading to obscure
</span><br>
<span class="quotelev2">&gt; &gt;  compile-time failures if used to build Open MPI.  You can work
</span><br>
<span class="quotelev2">&gt; &gt;  around this issue by ensuring that libtool will not find f95/g95
</span><br>
<span class="quotelev2">&gt; &gt;  (e.g., by specifying FC=gfortran, or otherwise ensuring gfortran
</span><br>
<span class="quotelev2">&gt; &gt;  will be found earlier in the path than f95/g95), or by configuring
</span><br>
<span class="quotelev2">&gt; &gt;  Open MPI to disable the Fortran MPI bindings.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13775/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13776.php">Igor Ivanov: "Re: [OMPI devel] [EXTERNAL] Re:  bug in mca framework?"</a>
<li><strong>Previous message:</strong> <a href="13774.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc1 install failure: NetBSD-6 amd64"</a>
<li><strong>In reply to:</strong> <a href="13773.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc1 install failure: NetBSD-6 amd64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13774.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc1 install failure: NetBSD-6 amd64"</a>
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
