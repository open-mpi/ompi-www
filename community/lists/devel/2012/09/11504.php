<?
$subject_val = "Re: [OMPI devel] 1.6.2rc2 build failure w/ icc on IA64";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 12 10:57:38 2012" -->
<!-- isoreceived="20120912145738" -->
<!-- sent="Wed, 12 Sep 2012 10:57:40 -0400" -->
<!-- isosent="20120912145740" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.6.2rc2 build failure w/ icc on IA64" -->
<!-- id="EC2E3330-F82F-44DC-8D6B-3F97384A85ED_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA17xtNc-+_AyzWoE9eT1nPhgNbAvsg_4vjroTCXAsaJDfQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.6.2rc2 build failure w/ icc on IA64<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-12 10:57:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11505.php">Ralph Castain: "Re: [OMPI devel] Warnings in OMPI trunk and 1.7"</a>
<li><strong>Previous message:</strong> <a href="11503.php">Shamis, Pavel: "Re: [OMPI devel] Warnings in OMPI trunk and 1.7"</a>
<li><strong>In reply to:</strong> <a href="11499.php">Paul Hargrove: "[OMPI devel] 1.6.2rc2 build failure w/ icc on IA64"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 11, 2012, at 4:57 PM, Paul Hargrove wrote:
<br>
<p><span class="quotelev1">&gt; So, I think the README could use an update with respect to IA64 and ICC.
</span><br>
<span class="quotelev1">&gt; Note that I can build w/ gcc just fine on IA64, but I'd not exactly break down in tears if OMPI dropped support for IA64 entirely.
</span><br>
<p>Thanks for the reminder!
<br>
<p>I added:
<br>
<p>- It has been reported that the Intel 9.1 and 10.0 compilers fail to
<br>
&nbsp;&nbsp;compile Open MPI on IA64 platforms.  As of 12 Sep 2012, there is
<br>
&nbsp;&nbsp;very little (if any) testing performed on IA64 platforms (with any
<br>
&nbsp;&nbsp;compiler).  Support is &quot;best effort&quot; for these platforms, but it is
<br>
&nbsp;&nbsp;doubtful that any effort will be expended to fix the Intel 9.1 /
<br>
&nbsp;&nbsp;10.0 compiler issuers on this platform.
<br>
<p><p><p><p><span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Sep 11, 2012 at 7:10 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 1.6.2rc2 is out -- please test:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/software/ompi/v1.6/">http://www.open-mpi.org/software/ompi/v1.6/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Changes since rc1:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - VT compile fix on Solaris
</span><br>
<span class="quotelev1">&gt; - rmaps segv fix
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
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
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
<li><strong>Next message:</strong> <a href="11505.php">Ralph Castain: "Re: [OMPI devel] Warnings in OMPI trunk and 1.7"</a>
<li><strong>Previous message:</strong> <a href="11503.php">Shamis, Pavel: "Re: [OMPI devel] Warnings in OMPI trunk and 1.7"</a>
<li><strong>In reply to:</strong> <a href="11499.php">Paul Hargrove: "[OMPI devel] 1.6.2rc2 build failure w/ icc on IA64"</a>
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
