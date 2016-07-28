<?
$subject_val = "Re: [OMPI devel] 1.7.4 status update";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 22 22:27:34 2014" -->
<!-- isoreceived="20140123032734" -->
<!-- sent="Wed, 22 Jan 2014 19:27:32 -0800" -->
<!-- isosent="20140123032732" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4 status update" -->
<!-- id="CAAvDA15n84hBtjyGBqM7hNWrieuuV_qDP9CongHDT67g4aK0Tw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E5640285-F48C-45AB-B39B-BD9F09CE758A_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7.4 status update<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-22 22:27:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13861.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc: yet another launch failure"</a>
<li><strong>Previous message:</strong> <a href="13859.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<li><strong>In reply to:</strong> <a href="13857.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4 status update"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13870.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4 status update"</a>
<li><strong>Reply:</strong> <a href="13870.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4 status update"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>Sorry to hear you spent the day dealing with both fortran and autoconf.
<br>
I spent mine dealing with my auto insurance company claims department.
<br>
So, we both had miserable days but you win.
<br>
<p>The 1.7 tarball was ready by the time I read your message and I've launched
<br>
a flock of testers.
<br>
Were there any specific platforms/configurations you want me to retest
<br>
tonight w/ 1.7?
<br>
<p>After the 1.7 tests on the XLF, Open64 and PathScale platforms complete
<br>
I'll be testing the trunk on those systems with the compiler-appropriate
<br>
--enable-mpi-fortran= settings.
<br>
<p>I might eventually see about refining the PGI good/nogood table by desired
<br>
level of fortran support.
<br>
However, there is no point in doing that until the churn has ended.
<br>
<p>-Paul
<br>
<p><p>On Wed, Jan 22, 2014 at 6:41 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; Ok, here's my update: I fixed a bunch of issues in the Fortran support
</span><br>
<span class="quotelev1">&gt; today; most are minor, but they took a while to verify (and some are slated
</span><br>
<span class="quotelev1">&gt; for v1.7.5 because they aren't critical).  I also added the ability to
</span><br>
<span class="quotelev1">&gt; disable building the mpi_f08 module.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's what's on the trunk / v1.7, and will be in nightly tarballs soon
</span><br>
<span class="quotelev1">&gt; (v1.7 is building now; I have to re-start the trunk one when v1.7 finishes
</span><br>
<span class="quotelev1">&gt; because I goofed and it failed the first time):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Fix for MPI_STATUS_IGNORE issue (a side-effect of the &quot;protected&quot; update
</span><br>
<span class="quotelev1">&gt; the other day)
</span><br>
<span class="quotelev1">&gt; - Add some missing interfaces for MPI_Neighbor subroutines
</span><br>
<span class="quotelev1">&gt; - Add missing interfaces for the profiled versions of the MPI_Dist_graph
</span><br>
<span class="quotelev1">&gt; subroutines
</span><br>
<span class="quotelev1">&gt; - Add missing pre-defined function callbacks in the mpi_f08 module
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's what's on the trunk and still awaiting a code review (probably
</span><br>
<span class="quotelev1">&gt; tomorrow) before it can go to v1.7:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - --enable-mpi-fortran behavior now allows you specify up to what level of
</span><br>
<span class="quotelev1">&gt; Fortran bindings you want built:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   --enable-mpi-fortran: tries to build them all (this is the default)
</span><br>
<span class="quotelev1">&gt;   --enable-mpi-fortran=mpifh: only builds mpif.h support
</span><br>
<span class="quotelev1">&gt;   --enable-mpi-fortran=usempi: builds mpif.h and use mpi support
</span><br>
<span class="quotelev1">&gt;   --enable-mpi-fortran=usempif08: builds mpif.h, use mpi, and use mpi_f08
</span><br>
<span class="quotelev1">&gt; support
</span><br>
<span class="quotelev1">&gt;   --disable-mpi-fortran: does not build any Fortran support
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So to disable the mpi_f08 bindings, you can --enable-mpi-fortran=usempi.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 22, 2014, at 5:45 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Update: I've been working all day on Fortran issues (pulling on one
</span><br>
<span class="quotelev1">&gt; Paul-Fortran--sweater-thread revealed several other issues :-( ).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'll be sending an update soon...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jan 22, 2014, at 5:40 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Wed, Jan 22, 2014 at 1:33 PM, Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; My main concern with 1.7.4 at the moment stems from all the Fortran
</span><br>
<span class="quotelev1">&gt; changes we pushed into that release - this occurred *after* 1.7.3, and so
</span><br>
<span class="quotelev1">&gt; those problems represent a regression in the 1.7 series.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Unless I am missing something, the currently open Fortan issues are:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; + XLF, which didn't work in 1.7.3 either (just verified this today)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; + PathScale and Open64 which fail building in
</span><br>
<span class="quotelev1">&gt; ompi/mpi/fortran/use-mpi-f08/
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The XLF issue is not a regression.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The remaining PathScale/Open64 issue MAY be a compiler bug.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; If Jeff follows through on his promise to implement
</span><br>
<span class="quotelev1">&gt; --disable-mpi-fortran-08 then use of that option is a work-around for the
</span><br>
<span class="quotelev1">&gt; regression on PathScale and Open64.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -Paul
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
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
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13860/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13861.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc: yet another launch failure"</a>
<li><strong>Previous message:</strong> <a href="13859.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<li><strong>In reply to:</strong> <a href="13857.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4 status update"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13870.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4 status update"</a>
<li><strong>Reply:</strong> <a href="13870.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4 status update"</a>
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
