<?
$subject_val = "Re: [OMPI devel] help-oshmem-shmem.txt still missing in v1.8";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 31 07:37:07 2015" -->
<!-- isoreceived="20150131123707" -->
<!-- sent="Sat, 31 Jan 2015 12:37:06 +0000" -->
<!-- isosent="20150131123706" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] help-oshmem-shmem.txt still missing in v1.8" -->
<!-- id="9B25A1FB-6B08-446E-ADF8-5B8D262E6FA6_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="54CC9A8F.8010604_at_tu-dresden.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] help-oshmem-shmem.txt still missing in v1.8<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-31 07:37:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16863.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>Previous message:</strong> <a href="16861.php">Bert Wesarg: "[OMPI devel] Assertion `0 != r_mkey-&gt;len' failed in spml_yoda.c:1113:mca_spml_yoda_get"</a>
<li><strong>In reply to:</strong> <a href="16860.php">Bert Wesarg: "[OMPI devel] help-oshmem-shmem.txt still missing in v1.8"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<a href="https://github.com/open-mpi/ompi-release/pull/176">https://github.com/open-mpi/ompi-release/pull/176</a> filed; thanks.
<br>

<br>
<span class="quotelev1">&gt; On Jan 31, 2015, at 4:04 AM, Bert Wesarg &lt;bert.wesarg_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the help-oshmem-shmem.txt is still missing in the v1.8 branch but used by the oshmem component. The fix may be part of be3fc7bf202546a64c299f3055b231edc0985e9e in the oshmem/mca/sshmem/base/Makefile.am. At least this has the diff which matches the current diff between master and v1.8
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ git diff master:oshmem/mca/sshmem/base/Makefile.am ompi-release/v1.8:oshmem/mca/sshmem/base/Makefile.am
</span><br>
<span class="quotelev1">&gt; diff --git a/master:oshmem/mca/sshmem/base/Makefile.am b/ompi-release/v1.8:oshmem/mca/sshmem/base/Makefile.am
</span><br>
<span class="quotelev1">&gt; index 9b2af1f..79b11b1 100644 ompi-release/v1.8:oshmem/mca/sshmem/base/Makefile.am
</span><br>
<span class="quotelev1">&gt; --- a/master:oshmem/mca/sshmem/base/Makefile.am
</span><br>
<span class="quotelev1">&gt; +++ b/ompi-release/v1.8:oshmem/mca/sshmem/base/Makefile.am
</span><br>
<span class="quotelev1">&gt; @@ -7,8 +7,6 @@
</span><br>
<span class="quotelev1">&gt; # $HEADER$
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -dist_oshmemdata_DATA = base/help-oshmem-sshmem.txt
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; headers += \
</span><br>
<span class="quotelev1">&gt;         base/base.h
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can someone confirm this. It may take a while to test this, as I also have failing shmem programs with 1.8.4 which didn't with 1.8.2.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Bert
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Dipl.-Inf. Bert Wesarg
</span><br>
<span class="quotelev1">&gt; wiss. Mitarbeiter
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Technische Universit&#195;&#164;t Dresden
</span><br>
<span class="quotelev1">&gt; Zentrum f&#195;&#188;r Informationsdienste und Hochleistungsrechnen (ZIH)
</span><br>
<span class="quotelev1">&gt; 01062 Dresden
</span><br>
<span class="quotelev1">&gt; Tel.: +49 (351) 463-42451
</span><br>
<span class="quotelev1">&gt; Fax: +49 (351) 463-37773
</span><br>
<span class="quotelev1">&gt; E-Mail: bert.wesarg_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16860.php">http://www.open-mpi.org/community/lists/devel/2015/01/16860.php</a>
</span><br>

<br>

<br>
-- 
<br>
Jeff Squyres
<br>
jsquyres_at_[hidden]
<br>
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>

<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16863.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>Previous message:</strong> <a href="16861.php">Bert Wesarg: "[OMPI devel] Assertion `0 != r_mkey-&gt;len' failed in spml_yoda.c:1113:mca_spml_yoda_get"</a>
<li><strong>In reply to:</strong> <a href="16860.php">Bert Wesarg: "[OMPI devel] help-oshmem-shmem.txt still missing in v1.8"</a>
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
