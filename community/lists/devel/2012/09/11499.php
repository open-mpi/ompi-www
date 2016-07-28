<?
$subject_val = "[OMPI devel] 1.6.2rc2 build failure w/ icc on IA64";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 11 16:57:31 2012" -->
<!-- isoreceived="20120911205731" -->
<!-- sent="Tue, 11 Sep 2012 13:57:25 -0700" -->
<!-- isosent="20120911205725" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.6.2rc2 build failure w/ icc on IA64" -->
<!-- id="CAAvDA17xtNc-+_AyzWoE9eT1nPhgNbAvsg_4vjroTCXAsaJDfQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] 1.6.2rc2 build failure w/ icc on IA64<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-11 16:57:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11500.php">Ralph Castain: "[OMPI devel] Warnings in OMPI trunk and 1.7"</a>
<li><strong>Previous message:</strong> <a href="11498.php">Paul Hargrove: "Re: [OMPI devel] 1.6.2rc2 VT/OMP build failure with PGI 8.0-6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11504.php">Jeff Squyres: "Re: [OMPI devel] 1.6.2rc2 build failure w/ icc on IA64"</a>
<li><strong>Reply:</strong> <a href="11504.php">Jeff Squyres: "Re: [OMPI devel] 1.6.2rc2 build failure w/ icc on IA64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have reported as long ago as 1.4.5rc2 (see
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2012/01/10256.php">http://www.open-mpi.org/community/lists/devel/2012/01/10256.php</a> ) that Open
<br>
MPI does not build with the Intel compilers (versions 9.1 and 10.0 tested)
<br>
on IA64.
<br>
<p>This is still true with 1.6.2rc2, and I doubt anybody plans to fix this
<br>
soon, if ever.
<br>
HOWEVER, the following still appears in OMPI's README and suggests to the
<br>
casual reader that ICC 9.1 and 1.0 on IA64 should probably work:
<br>
<p><span class="quotelev1">&gt; - The Intel 9.0 v20051201 compiler on IA64 platforms seems to have a
</span><br>
<span class="quotelev1">&gt;   problem with optimizing the ptmalloc2 memory manager component (the
</span><br>
<span class="quotelev1">&gt;   generated code will segv).  As such, the ptmalloc2 component will
</span><br>
<span class="quotelev1">&gt;   automatically disable itself if it detects that it is on this
</span><br>
<span class="quotelev1">&gt;   platform/compiler combination.  The only effect that this should
</span><br>
<span class="quotelev1">&gt;   have is that the MCA parameter mpi_leave_pinned will be inoperative.
</span><br>
<p>There is no other mention of IA64 in the README and the other Intel
<br>
compiler issues are not related.
<br>
<p>So, I think the README could use an update with respect to IA64 and ICC.
<br>
Note that I can build w/ gcc just fine on IA64, but I'd not exactly break
<br>
down in tears if OMPI dropped support for IA64 entirely.
<br>
<p>-Paul
<br>
<p>On Tue, Sep 11, 2012 at 7:10 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 1.6.2rc2 is out -- please test:
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
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11499/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11500.php">Ralph Castain: "[OMPI devel] Warnings in OMPI trunk and 1.7"</a>
<li><strong>Previous message:</strong> <a href="11498.php">Paul Hargrove: "Re: [OMPI devel] 1.6.2rc2 VT/OMP build failure with PGI 8.0-6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11504.php">Jeff Squyres: "Re: [OMPI devel] 1.6.2rc2 build failure w/ icc on IA64"</a>
<li><strong>Reply:</strong> <a href="11504.php">Jeff Squyres: "Re: [OMPI devel] 1.6.2rc2 build failure w/ icc on IA64"</a>
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
