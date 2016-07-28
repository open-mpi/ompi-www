<?
$subject_val = "Re: [OMPI devel] 1.7.4rc: MPI_F08_TYPE build failure with AMD's Open64";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 21 16:55:09 2014" -->
<!-- isoreceived="20140121215509" -->
<!-- sent="Tue, 21 Jan 2014 21:55:07 +0000" -->
<!-- isosent="20140121215507" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4rc: MPI_F08_TYPE build failure with AMD's Open64" -->
<!-- id="FB6328EF-577F-4D64-ACFB-F8B2E1260835_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA16N5EYzd9C+S=y0k7UM=0M5HjWH1EZwY7XgffpP3BTSvg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7.4rc: MPI_F08_TYPE build failure with AMD's Open64<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-21 16:55:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13831.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: MPI_F08_TYPE build failure with AMD's Open64"</a>
<li><strong>Previous message:</strong> <a href="13829.php">Adrian Reber: "Re: [OMPI devel] callback debugging"</a>
<li><strong>In reply to:</strong> <a href="13798.php">Paul Hargrove: "[OMPI devel] 1.7.4rc: MPI_F08_TYPE build failure with AMD's Open64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13831.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: MPI_F08_TYPE build failure with AMD's Open64"</a>
<li><strong>Reply:</strong> <a href="13831.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: MPI_F08_TYPE build failure with AMD's Open64"</a>
<li><strong>Reply:</strong> <a href="13835.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: MPI_F08_TYPE build failure with AMD's Open64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Paul --
<br>
<p>I'm sorry, due to craziness and the holiday yesterday, the amended Fortran BIND(C) checks didn't get committed to the v1.7 branch until earlier today.  So they'll be in tonight's tarball.
<br>
<p>It looks to me like the Open64 compilers won't pass the BIND(C) checks, and we should be ok.  Can you verify tonight?
<br>
<p>As for adding --disable-mpi-fortran-08... maybe.  I'd still prefer the configure script to just Do The Right Thing.  But I see your point for handling the one-off cases where it doesn't.
<br>
<p><p>On Jan 17, 2014, at 7:49 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Building the v1.7 tarball (1.7.4rc2r30303) with AMD's Open64 compilers (v4.5.2) I hit the errors shown in the attached make.log (too long to cut-and-paste).
</span><br>
<span class="quotelev1">&gt; I've also attached config.log and configure's stdout.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;We don't care about that compiler&quot; is an acceptable (to me) answer, but I am reporting this for completeness.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff may need to do more work on the configure probes for F08 support.
</span><br>
<span class="quotelev1">&gt; OR, why not provide --disable-mpi-f08 ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
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
<span class="quotelev1">&gt; &lt;configure.stdout.bz2&gt;&lt;config.log.bz2&gt;&lt;make.log.bz2&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="13831.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: MPI_F08_TYPE build failure with AMD's Open64"</a>
<li><strong>Previous message:</strong> <a href="13829.php">Adrian Reber: "Re: [OMPI devel] callback debugging"</a>
<li><strong>In reply to:</strong> <a href="13798.php">Paul Hargrove: "[OMPI devel] 1.7.4rc: MPI_F08_TYPE build failure with AMD's Open64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13831.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: MPI_F08_TYPE build failure with AMD's Open64"</a>
<li><strong>Reply:</strong> <a href="13831.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: MPI_F08_TYPE build failure with AMD's Open64"</a>
<li><strong>Reply:</strong> <a href="13835.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: MPI_F08_TYPE build failure with AMD's Open64"</a>
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
