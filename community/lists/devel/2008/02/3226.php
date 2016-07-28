<?
$subject_val = "Re: [OMPI devel] VT integration: make distclean problem";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 12 17:56:27 2008" -->
<!-- isoreceived="20080212225627" -->
<!-- sent="Tue, 12 Feb 2008 17:55:13 -0500" -->
<!-- isosent="20080212225513" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] VT integration: make distclean problem" -->
<!-- id="DF5A0C31-1F62-4B02-A968-D8A33482DAC9_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D1258113-2EBC-4BCA-A42E-511F656C8EC7_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-12 17:55:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3227.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Remove explicit call to progress() from ob1."</a>
<li><strong>Previous message:</strong> <a href="3225.php">Jeff Squyres: "[OMPI devel] btl_openib_rnr_retry MCA param"</a>
<li><strong>In reply to:</strong> <a href="3204.php">Josh Hursey: "Re: [OMPI devel] VT integration: make distclean problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmm; I'm not sure.
<br>
<p>distclean will fail in a tarball or SVN checkout if you do --enable- 
<br>
contrib-no-build=vt.  So it's not a developer-only artifact.
<br>
<p>I don't know what the Right solution is, though.  :-\
<br>
<p><p><p>On Feb 12, 2008, at 9:22 AM, Josh Hursey wrote:
<br>
<p><span class="quotelev1">&gt; Good points about 'distclean' versus 'clean'. For the make distclean
</span><br>
<span class="quotelev1">&gt; case then I think it is ok if we fail here since it is not a full
</span><br>
<span class="quotelev1">&gt; 'make dist' that I was working with originally.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry for the distraction.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 12, 2008, at 6:52 AM, Andreas Kn&#252;pfer wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Monday 11 February 2008, Josh Hursey wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've been noticing another problem with the VT integration. If you  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; do
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a &quot;./configure --enable-contrib-no-build=vt&quot; a subsequent 'make
</span><br>
<span class="quotelev3">&gt;&gt;&gt; distclean' will fail in contrib/vt. The 'make distclean' will  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; succeed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with VT enabled (default).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; hm, tricky. I guess it is about the 'make dist' functionality. All
</span><br>
<span class="quotelev2">&gt;&gt; others
</span><br>
<span class="quotelev2">&gt;&gt; like 'make distclean' etc. are only assisting functionality for
</span><br>
<span class="quotelev2">&gt;&gt; 'make dist'
</span><br>
<span class="quotelev2">&gt;&gt; after all.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; And for 'make dist' you need to have everything configured that is
</span><br>
<span class="quotelev2">&gt;&gt; going to be
</span><br>
<span class="quotelev2">&gt;&gt; part of the distribution. Therefore, VT needs to be part of the
</span><br>
<span class="quotelev2">&gt;&gt; tarball, so
</span><br>
<span class="quotelev2">&gt;&gt; you can disable it at build time. It would not work the other way
</span><br>
<span class="quotelev2">&gt;&gt; around.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So in my opinion, the current status is what we want to have. Are
</span><br>
<span class="quotelev2">&gt;&gt; there any
</span><br>
<span class="quotelev2">&gt;&gt; problems when configuring VT, then building the tarball with VT and
</span><br>
<span class="quotelev2">&gt;&gt; disabling
</span><br>
<span class="quotelev2">&gt;&gt; it once you build Open MPI from the tarball?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards, Andreas
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Dipl. Math. Andreas Knuepfer,
</span><br>
<span class="quotelev2">&gt;&gt; Center for Information Services and
</span><br>
<span class="quotelev2">&gt;&gt; High Performance Computing (ZIH), TU Dresden,
</span><br>
<span class="quotelev2">&gt;&gt; Willersbau A114, Zellescher Weg 12, 01062 Dresden
</span><br>
<span class="quotelev2">&gt;&gt; phone +49-351-463-38323, fax +49-351-463-37773
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3227.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Remove explicit call to progress() from ob1."</a>
<li><strong>Previous message:</strong> <a href="3225.php">Jeff Squyres: "[OMPI devel] btl_openib_rnr_retry MCA param"</a>
<li><strong>In reply to:</strong> <a href="3204.php">Josh Hursey: "Re: [OMPI devel] VT integration: make distclean problem"</a>
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
