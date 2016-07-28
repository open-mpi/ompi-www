<?
$subject_val = "Re: [OMPI devel] 1.6.4rc2 released";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 28 15:26:21 2013" -->
<!-- isoreceived="20130128202621" -->
<!-- sent="Mon, 28 Jan 2013 12:26:13 -0800" -->
<!-- isosent="20130128202613" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.6.4rc2 released" -->
<!-- id="CAAvDA14-VAdvt2ZiMWA5qApyiYnQ=GFsbajLRn83QP8v4ro-Hw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC42CB73A1_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.6.4rc2 released<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-28 15:26:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12034.php">Paul Hargrove: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<li><strong>Previous message:</strong> <a href="12032.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL] Open MPI Configure Script"</a>
<li><strong>In reply to:</strong> <a href="12012.php">Jeff Squyres (jsquyres): "[OMPI devel] 1.6.4rc2 released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am pleased to say that 1.6.4rc2 builds and runs (single node, sm btl) on
<br>
my BSD menagerie:
<br>
&nbsp;&nbsp;&nbsp;freebsd6-amd64
<br>
&nbsp;&nbsp;&nbsp;freebsd7-amd64
<br>
&nbsp;&nbsp;&nbsp;freebsd8-amd64
<br>
&nbsp;&nbsp;&nbsp;freebsd8-i386
<br>
&nbsp;&nbsp;&nbsp;freebsd9-amd64
<br>
&nbsp;&nbsp;&nbsp;freebsd9-i386
<br>
&nbsp;&nbsp;&nbsp;netbsd6-amd64
<br>
&nbsp;&nbsp;&nbsp;netbsd6-i386
<br>
&nbsp;&nbsp;&nbsp;openbsd5-amd64
<br>
&nbsp;&nbsp;&nbsp;openbsd5-i386
<br>
<p>The {Free,Net,Open}BSD platforms have all been updated this month to their
<br>
latest respective stable versions.
<br>
<p>I can also confirm testing of the following less common components
<br>
&nbsp;&nbsp;&nbsp;&nbsp;solaris-11(snv_151a) on x86 and x64:  btl:udapl (compile only)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;linux on x86:   mtl:mx, btl:mx and btl:elan (compile only)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;linux on x86-64: mtl:psm (compile and run)
<br>
<p>As time allows I will be scanning the logs from those builds to see if any
<br>
&quot;alarming&quot; warnings appear.
<br>
<p>-Paul
<br>
<p><p><p>On Sat, Jan 26, 2013 at 4:25 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; In the usual location:
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
<span class="quotelev1">&gt; - Automatically provide compiler flags that compile properly on some
</span><br>
<span class="quotelev1">&gt;   types of ARM systems.
</span><br>
<span class="quotelev1">&gt; - Fix slot_list behavior when multiple sockets are specified.  Thanks
</span><br>
<span class="quotelev1">&gt;   to Siegmar Gross for reporting the problem.
</span><br>
<span class="quotelev1">&gt; - Fixed memory leak in one-sided operations.  Thanks to Victor
</span><br>
<span class="quotelev1">&gt;   Vysotskiy for letting us know about this one.
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12033/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12034.php">Paul Hargrove: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<li><strong>Previous message:</strong> <a href="12032.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL] Open MPI Configure Script"</a>
<li><strong>In reply to:</strong> <a href="12012.php">Jeff Squyres (jsquyres): "[OMPI devel] 1.6.4rc2 released"</a>
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
