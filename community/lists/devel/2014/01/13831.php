<?
$subject_val = "Re: [OMPI devel] 1.7.4rc: MPI_F08_TYPE build failure with AMD's Open64";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 21 17:36:15 2014" -->
<!-- isoreceived="20140121223615" -->
<!-- sent="Tue, 21 Jan 2014 14:36:10 -0800" -->
<!-- isosent="20140121223610" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4rc: MPI_F08_TYPE build failure with AMD's Open64" -->
<!-- id="CAAvDA16_qgPD5TBJM8yEv02FqGjfDHtrAeL0W9BaMC2HerWz7w_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="FB6328EF-577F-4D64-ACFB-F8B2E1260835_at_cisco.com" -->
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
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-21 17:36:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13832.php">Ralph Castain: "[OMPI devel] 1.7.4 status update"</a>
<li><strong>Previous message:</strong> <a href="13830.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc: MPI_F08_TYPE build failure with AMD's Open64"</a>
<li><strong>In reply to:</strong> <a href="13830.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc: MPI_F08_TYPE build failure with AMD's Open64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13835.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: MPI_F08_TYPE build failure with AMD's Open64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Jan 21, 2014 at 1:55 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; Paul --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm sorry, due to craziness and the holiday yesterday, the amended Fortran
</span><br>
<span class="quotelev1">&gt; BIND(C) checks didn't get committed to the v1.7 branch until earlier today.
</span><br>
<span class="quotelev1">&gt;  So they'll be in tonight's tarball.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It looks to me like the Open64 compilers won't pass the BIND(C) checks,
</span><br>
<span class="quotelev1">&gt; and we should be ok.  Can you verify tonight?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Will do.  I owe Ralph a check on the MIPS64 atomics too.
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As for adding --disable-mpi-fortran-08... maybe.  I'd still prefer the
</span><br>
<span class="quotelev1">&gt; configure script to just Do The Right Thing.  But I see your point for
</span><br>
<span class="quotelev1">&gt; handling the one-off cases where it doesn't.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>If ones compiler family of choice (e.g. XLF on PPC) passes the configure
<br>
checks but fails building the F08 stuff, then the presence or absence of
<br>
such a configuration option comes down to the difference between amputation
<br>
and euthanasia.  With the option, one can surgically remove F08 support and
<br>
retain F77 and F90 support, but without it one must discard the fortran
<br>
compiler entirely.  Since the likely alternative to a vendor compiler is
<br>
gfortran (which fails the F08 configure checks gracefully), you STILL don't
<br>
have F08 support and very possibly have slower executables (if you believe
<br>
that vendors compilers are better than GNU).
<br>
<p>So, I think --disable-mpi-fortran-08 would be a valuable addition.  Since
<br>
the configure logic is already fine-grained (OMPI_BUILD_FORTAN_*_BINDINGS),
<br>
it shouldn't be a big deal to bring back the former --disable switches for
<br>
F77 and F90 support, though I am not requesting that you do so.
<br>
<p>-Paul
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 17, 2014, at 7:49 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Building the v1.7 tarball (1.7.4rc2r30303) with AMD's Open64 compilers
</span><br>
<span class="quotelev1">&gt; (v4.5.2) I hit the errors shown in the attached make.log (too long to
</span><br>
<span class="quotelev1">&gt; cut-and-paste).
</span><br>
<span class="quotelev2">&gt; &gt; I've also attached config.log and configure's stdout.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &quot;We don't care about that compiler&quot; is an acceptable (to me) answer, but
</span><br>
<span class="quotelev1">&gt; I am reporting this for completeness.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Jeff may need to do more work on the configure probes for F08 support.
</span><br>
<span class="quotelev2">&gt; &gt; OR, why not provide --disable-mpi-f08 ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Paul
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Future Technologies Group
</span><br>
<span class="quotelev2">&gt; &gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt; &gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &lt;configure.stdout.bz2&gt;&lt;config.log.bz2&gt;&lt;make.log.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13831/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13832.php">Ralph Castain: "[OMPI devel] 1.7.4 status update"</a>
<li><strong>Previous message:</strong> <a href="13830.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc: MPI_F08_TYPE build failure with AMD's Open64"</a>
<li><strong>In reply to:</strong> <a href="13830.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc: MPI_F08_TYPE build failure with AMD's Open64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13835.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: MPI_F08_TYPE build failure with AMD's Open64"</a>
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
