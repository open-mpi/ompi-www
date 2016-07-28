<?
$subject_val = "Re: [OMPI devel] 1.6.2rc3 released";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 13 06:37:06 2012" -->
<!-- isoreceived="20120913103706" -->
<!-- sent="Thu, 13 Sep 2012 12:37 +0200" -->
<!-- isosent="20120913103710" -->
<!-- name="Matthias Jurenz" -->
<!-- email="matthias.jurenz_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.6.2rc3 released" -->
<!-- id="4123234.QQ4VnWZgmj_at_rico" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA15NSa+EuqP0OnAztCRq1O+fZMH9rBfn7G-6Q0kGU2KcXg_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2012-09-13 06:37:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11515.php">Jeff Squyres: "Re: [OMPI devel] 1.6.2rc3 released"</a>
<li><strong>Previous message:</strong> <a href="11513.php">Paul Hargrove: "Re: [OMPI devel] 1.6.2rc3 released"</a>
<li><strong>In reply to:</strong> <a href="11513.php">Paul Hargrove: "Re: [OMPI devel] 1.6.2rc3 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11516.php">Paul Hargrove: "Re: [OMPI devel] 1.6.2rc3 released"</a>
<li><strong>Reply:</strong> <a href="11516.php">Paul Hargrove: "Re: [OMPI devel] 1.6.2rc3 released"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wednesday 12 September 2012 17:16:48 Paul Hargrove wrote:
<br>
<span class="quotelev1">&gt; Solaris and NetBSD platforms which displayed the VT Makefile error w/
</span><br>
<span class="quotelev1">&gt; 1.6.2rc2 have completed successful builds w/ 1.6.2rc3.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The PGI-8.0 platform which showed the other VT problem is down at the
</span><br>
<span class="quotelev1">&gt; moment. So, I've tested that fix on the older (and thus slower) PGI-7.2-5
</span><br>
<span class="quotelev1">&gt; platform which also displayed the original problem.  That looks to be
</span><br>
<span class="quotelev1">&gt; fixed too.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Strange. I've tested the fix with PGI version 7.2.5 as well - it works!
<br>
Could you please verify whether the preprocessor reaches the line 65 in 
<br>
ompi/contrib/vt/vt/tools/vtunify/vt_unify.h (e.g. by inserting an #error 
<br>
statement)? At this point the OpenMP parallelization will be disabled, if the 
<br>
major version of the PGI compiler is less than 9.
<br>
<p>Thanks!
<br>
<p>- Matthias
<br>
<p><span class="quotelev1">&gt; Finally, Jeff's fix to &quot;loosen&quot; the opal_nfs_path test to ignore
</span><br>
<span class="quotelev1">&gt; type==none (e.g. for bind-mounts) doesn't appear to be in this rc -
</span><br>
<span class="quotelev1">&gt; the file test/util/opal_path_nfs.c is unchanged relative to rc2.
</span><br>
<span class="quotelev1">&gt; Perhaps a CMR is in order?  Perhaps it just didn't rank as important
</span><br>
<span class="quotelev1">&gt; enough?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul [who doesn't mind creating more work for Jeff]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Sep 12, 2012 at 2:59 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Usual place:
</span><br>
<span class="quotelev2">&gt; &gt;     <a href="http://www.open-mpi.org/software/ompi/v1.6/">http://www.open-mpi.org/software/ompi/v1.6/</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Changes since rc2:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; - Update README about IA64 and Intel compilers
</span><br>
<span class="quotelev2">&gt; &gt; - Fix VT compile problems
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
<span class="quotelev2">&gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<li><strong>Next message:</strong> <a href="11515.php">Jeff Squyres: "Re: [OMPI devel] 1.6.2rc3 released"</a>
<li><strong>Previous message:</strong> <a href="11513.php">Paul Hargrove: "Re: [OMPI devel] 1.6.2rc3 released"</a>
<li><strong>In reply to:</strong> <a href="11513.php">Paul Hargrove: "Re: [OMPI devel] 1.6.2rc3 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11516.php">Paul Hargrove: "Re: [OMPI devel] 1.6.2rc3 released"</a>
<li><strong>Reply:</strong> <a href="11516.php">Paul Hargrove: "Re: [OMPI devel] 1.6.2rc3 released"</a>
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
