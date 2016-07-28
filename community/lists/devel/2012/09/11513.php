<?
$subject_val = "Re: [OMPI devel] 1.6.2rc3 released";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 12 20:16:53 2012" -->
<!-- isoreceived="20120913001653" -->
<!-- sent="Wed, 12 Sep 2012 17:16:48 -0700" -->
<!-- isosent="20120913001648" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.6.2rc3 released" -->
<!-- id="CAAvDA15NSa+EuqP0OnAztCRq1O+fZMH9rBfn7G-6Q0kGU2KcXg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AE2BECF1-B0D3-48B5-B7B3-F1EFB2E8836A_at_cisco.com" -->
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
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-12 20:16:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11514.php">Matthias Jurenz: "Re: [OMPI devel] 1.6.2rc3 released"</a>
<li><strong>Previous message:</strong> <a href="11512.php">Jeff Squyres: "[OMPI devel] 1.6.2rc3 released"</a>
<li><strong>In reply to:</strong> <a href="11512.php">Jeff Squyres: "[OMPI devel] 1.6.2rc3 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11514.php">Matthias Jurenz: "Re: [OMPI devel] 1.6.2rc3 released"</a>
<li><strong>Reply:</strong> <a href="11514.php">Matthias Jurenz: "Re: [OMPI devel] 1.6.2rc3 released"</a>
<li><strong>Reply:</strong> <a href="11515.php">Jeff Squyres: "Re: [OMPI devel] 1.6.2rc3 released"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Solaris and NetBSD platforms which displayed the VT Makefile error w/
<br>
1.6.2rc2 have completed successful builds w/ 1.6.2rc3.
<br>
<p>The PGI-8.0 platform which showed the other VT problem is down at the moment.
<br>
So, I've tested that fix on the older (and thus slower) PGI-7.2-5
<br>
platform which also displayed the original problem.  That looks to be
<br>
fixed too.
<br>
<p>Finally, Jeff's fix to &quot;loosen&quot; the opal_nfs_path test to ignore
<br>
type==none (e.g. for bind-mounts) doesn't appear to be in this rc -
<br>
the file test/util/opal_path_nfs.c is unchanged relative to rc2.
<br>
Perhaps a CMR is in order?  Perhaps it just didn't rank as important
<br>
enough?
<br>
<p>-Paul [who doesn't mind creating more work for Jeff]
<br>
<p>On Wed, Sep 12, 2012 at 2:59 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Usual place:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/software/ompi/v1.6/">http://www.open-mpi.org/software/ompi/v1.6/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Changes since rc2:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Update README about IA64 and Intel compilers
</span><br>
<span class="quotelev1">&gt; - Fix VT compile problems
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
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11514.php">Matthias Jurenz: "Re: [OMPI devel] 1.6.2rc3 released"</a>
<li><strong>Previous message:</strong> <a href="11512.php">Jeff Squyres: "[OMPI devel] 1.6.2rc3 released"</a>
<li><strong>In reply to:</strong> <a href="11512.php">Jeff Squyres: "[OMPI devel] 1.6.2rc3 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11514.php">Matthias Jurenz: "Re: [OMPI devel] 1.6.2rc3 released"</a>
<li><strong>Reply:</strong> <a href="11514.php">Matthias Jurenz: "Re: [OMPI devel] 1.6.2rc3 released"</a>
<li><strong>Reply:</strong> <a href="11515.php">Jeff Squyres: "Re: [OMPI devel] 1.6.2rc3 released"</a>
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
