<?
$subject_val = "Re: [OMPI devel] VT integration: make distclean problem";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 12 09:22:17 2008" -->
<!-- isoreceived="20080212142217" -->
<!-- sent="Tue, 12 Feb 2008 09:22:15 -0500" -->
<!-- isosent="20080212142215" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] VT integration: make distclean problem" -->
<!-- id="D1258113-2EBC-4BCA-A42E-511F656C8EC7_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="200802121252.47510.andreas.knuepfer_at_tu-dresden.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] VT integration: make distclean problem<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-12 09:22:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3205.php">Tim Prins: "Re: [OMPI devel] C++ build failures"</a>
<li><strong>Previous message:</strong> <a href="3203.php">Jeff Squyres: "[OMPI devel] memchecker build broken"</a>
<li><strong>In reply to:</strong> <a href="3196.php">Andreas Kn&#252;pfer: "Re: [OMPI devel] VT integration: make distclean problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3226.php">Jeff Squyres: "Re: [OMPI devel] VT integration: make distclean problem"</a>
<li><strong>Reply:</strong> <a href="3226.php">Jeff Squyres: "Re: [OMPI devel] VT integration: make distclean problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Good points about 'distclean' versus 'clean'. For the make distclean  
<br>
case then I think it is ok if we fail here since it is not a full  
<br>
'make dist' that I was working with originally.
<br>
<p>Sorry for the distraction.
<br>
<p>Cheers,
<br>
Josh
<br>
<p>On Feb 12, 2008, at 6:52 AM, Andreas Kn&#252;pfer wrote:
<br>
<p><span class="quotelev1">&gt; On Monday 11 February 2008, Josh Hursey wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I've been noticing another problem with the VT integration. If you do
</span><br>
<span class="quotelev2">&gt;&gt; a &quot;./configure --enable-contrib-no-build=vt&quot; a subsequent 'make
</span><br>
<span class="quotelev2">&gt;&gt; distclean' will fail in contrib/vt. The 'make distclean' will succeed
</span><br>
<span class="quotelev2">&gt;&gt; with VT enabled (default).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hm, tricky. I guess it is about the 'make dist' functionality. All  
</span><br>
<span class="quotelev1">&gt; others
</span><br>
<span class="quotelev1">&gt; like 'make distclean' etc. are only assisting functionality for  
</span><br>
<span class="quotelev1">&gt; 'make dist'
</span><br>
<span class="quotelev1">&gt; after all.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And for 'make dist' you need to have everything configured that is  
</span><br>
<span class="quotelev1">&gt; going to be
</span><br>
<span class="quotelev1">&gt; part of the distribution. Therefore, VT needs to be part of the  
</span><br>
<span class="quotelev1">&gt; tarball, so
</span><br>
<span class="quotelev1">&gt; you can disable it at build time. It would not work the other way  
</span><br>
<span class="quotelev1">&gt; around.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So in my opinion, the current status is what we want to have. Are  
</span><br>
<span class="quotelev1">&gt; there any
</span><br>
<span class="quotelev1">&gt; problems when configuring VT, then building the tarball with VT and  
</span><br>
<span class="quotelev1">&gt; disabling
</span><br>
<span class="quotelev1">&gt; it once you build Open MPI from the tarball?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards, Andreas
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Dipl. Math. Andreas Knuepfer,
</span><br>
<span class="quotelev1">&gt; Center for Information Services and
</span><br>
<span class="quotelev1">&gt; High Performance Computing (ZIH), TU Dresden,
</span><br>
<span class="quotelev1">&gt; Willersbau A114, Zellescher Weg 12, 01062 Dresden
</span><br>
<span class="quotelev1">&gt; phone +49-351-463-38323, fax +49-351-463-37773
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3205.php">Tim Prins: "Re: [OMPI devel] C++ build failures"</a>
<li><strong>Previous message:</strong> <a href="3203.php">Jeff Squyres: "[OMPI devel] memchecker build broken"</a>
<li><strong>In reply to:</strong> <a href="3196.php">Andreas Kn&#252;pfer: "Re: [OMPI devel] VT integration: make distclean problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3226.php">Jeff Squyres: "Re: [OMPI devel] VT integration: make distclean problem"</a>
<li><strong>Reply:</strong> <a href="3226.php">Jeff Squyres: "Re: [OMPI devel] VT integration: make distclean problem"</a>
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
