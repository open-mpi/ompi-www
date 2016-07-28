<?
$subject_val = "Re: [OMPI devel] 1.6.2rc3 released";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 17 05:09:46 2012" -->
<!-- isoreceived="20120917090946" -->
<!-- sent="Mon, 17 Sep 2012 11:09:40 +0200" -->
<!-- isosent="20120917090940" -->
<!-- name="Matthias Jurenz" -->
<!-- email="matthias.jurenz_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.6.2rc3 released" -->
<!-- id="3273892.0zsAavQ591_at_rico" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA16cGXcUwJFYf0sS1HRxQ8iTdPK3nCDHay+XSanZiPsubw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.6.2rc3 released<br>
<strong>From:</strong> Matthias Jurenz (<em>matthias.jurenz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-17 05:09:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11521.php">Jeff Squyres: "[OMPI devel] 1.6.2rc4"</a>
<li><strong>Previous message:</strong> <a href="11519.php">Jeff Squyres: "Re: [OMPI devel] F90 build failures with XLF-14.1 and OMPI trunk"</a>
<li><strong>In reply to:</strong> <a href="11516.php">Paul Hargrove: "Re: [OMPI devel] 1.6.2rc3 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11515.php">Jeff Squyres: "Re: [OMPI devel] 1.6.2rc3 released"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Oh, I've stopped reading after
<br>
<span class="quotelev3">&gt; &gt;&gt; So, I've tested that fix on the older (and thus slower) PGI-7.2-5
</span><br>
<span class="quotelev3">&gt; &gt;&gt; platform which also displayed the original problem. 
</span><br>
Sorry!
<br>
<p><span class="quotelev1">&gt; Do you still want me to retest on PGI-7.2-5?
</span><br>
No, it's not necessary. ;-)
<br>
<p>- Matthias
<br>
<p>On Thursday 13 September 2012 12:22:05 Paul Hargrove wrote:
<br>
<span class="quotelev1">&gt; Matthias,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Maybe we are failing to communicate?
</span><br>
<span class="quotelev1">&gt; I said the problem is FIXED for PGI-7.2-5 (but did have the problem in rc2).
</span><br>
<span class="quotelev1">&gt; The system w/ PGI-8.0 was unavailable for running of the test.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you still want me to retest on PGI-7.2-5?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Sep 13, 2012 at 3:37 AM, Matthias Jurenz
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;matthias.jurenz_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Wednesday 12 September 2012 17:16:48 Paul Hargrove wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Solaris and NetBSD platforms which displayed the VT Makefile error w/
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 1.6.2rc2 have completed successful builds w/ 1.6.2rc3.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The PGI-8.0 platform which showed the other VT problem is down at the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; moment. So, I've tested that fix on the older (and thus slower) PGI-7.2-5
</span><br>
<span class="quotelev3">&gt; &gt;&gt; platform which also displayed the original problem.  That looks to be
</span><br>
<span class="quotelev3">&gt; &gt;&gt; fixed too.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Strange. I've tested the fix with PGI version 7.2.5 as well - it works!
</span><br>
<span class="quotelev2">&gt; &gt; Could you please verify whether the preprocessor reaches the line 65 in
</span><br>
<span class="quotelev2">&gt; &gt; ompi/contrib/vt/vt/tools/vtunify/vt_unify.h (e.g. by inserting an #error
</span><br>
<span class="quotelev2">&gt; &gt; statement)? At this point the OpenMP parallelization will be disabled, if
</span><br>
<span class="quotelev2">&gt; &gt; the major version of the PGI compiler is less than 9.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thanks!
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; - Matthias
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Finally, Jeff's fix to &quot;loosen&quot; the opal_nfs_path test to ignore
</span><br>
<span class="quotelev3">&gt; &gt;&gt; type==none (e.g. for bind-mounts) doesn't appear to be in this rc -
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the file test/util/opal_path_nfs.c is unchanged relative to rc2.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Perhaps a CMR is in order?  Perhaps it just didn't rank as important
</span><br>
<span class="quotelev3">&gt; &gt;&gt; enough?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -Paul [who doesn't mind creating more work for Jeff]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Wed, Sep 12, 2012 at 2:59 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Usual place:
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;     <a href="http://www.open-mpi.org/software/ompi/v1.6/">http://www.open-mpi.org/software/ompi/v1.6/</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Changes since rc2:
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; - Update README about IA64 and Intel compilers
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; - Fix VT compile problems
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; --
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Matthias Jurenz
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Technische Universit&#228;t Dresden
</span><br>
<span class="quotelev2">&gt; &gt; Center for Information Services and High Performance Computing (ZIH)
</span><br>
<span class="quotelev2">&gt; &gt; 01062 Dresden, Germany
</span><br>
<span class="quotelev2">&gt; &gt; Phone: +49 (351) 463-31945
</span><br>
<span class="quotelev2">&gt; &gt; Fax: +49 (351) 463-37773
</span><br>
<span class="quotelev2">&gt; &gt; E-Mail: matthias.jurenz_at_[hidden]
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
<pre>
-- 
Matthias Jurenz
Technische Universit&#228;t Dresden
Center for Information Services and High Performance Computing (ZIH)
01062 Dresden, Germany
Phone: +49 (351) 463-31945
Fax: +49 (351) 463-37773
E-Mail: matthias.jurenz_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11521.php">Jeff Squyres: "[OMPI devel] 1.6.2rc4"</a>
<li><strong>Previous message:</strong> <a href="11519.php">Jeff Squyres: "Re: [OMPI devel] F90 build failures with XLF-14.1 and OMPI trunk"</a>
<li><strong>In reply to:</strong> <a href="11516.php">Paul Hargrove: "Re: [OMPI devel] 1.6.2rc3 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11515.php">Jeff Squyres: "Re: [OMPI devel] 1.6.2rc3 released"</a>
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
