<?
$subject_val = "Re: [OMPI devel] 1.7.4 status update";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 22 21:41:13 2014" -->
<!-- isoreceived="20140123024113" -->
<!-- sent="Thu, 23 Jan 2014 02:41:11 +0000" -->
<!-- isosent="20140123024111" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4 status update" -->
<!-- id="E5640285-F48C-45AB-B39B-BD9F09CE758A_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C66EF2C0-0792-4A81-A27E-B024B893C95E_at_cisco.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-22 21:41:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13858.php">Paul Hargrove: "[OMPI devel] 1.7.4rc: yet another launch failure"</a>
<li><strong>Previous message:</strong> <a href="13856.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<li><strong>In reply to:</strong> <a href="13851.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4 status update"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13860.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4 status update"</a>
<li><strong>Reply:</strong> <a href="13860.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4 status update"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok, here's my update: I fixed a bunch of issues in the Fortran support today; most are minor, but they took a while to verify (and some are slated for v1.7.5 because they aren't critical).  I also added the ability to disable building the mpi_f08 module.
<br>
<p>Here's what's on the trunk / v1.7, and will be in nightly tarballs soon (v1.7 is building now; I have to re-start the trunk one when v1.7 finishes because I goofed and it failed the first time):
<br>
<p>- Fix for MPI_STATUS_IGNORE issue (a side-effect of the &quot;protected&quot; update the other day)
<br>
- Add some missing interfaces for MPI_Neighbor subroutines
<br>
- Add missing interfaces for the profiled versions of the MPI_Dist_graph subroutines
<br>
- Add missing pre-defined function callbacks in the mpi_f08 module
<br>
<p>Here's what's on the trunk and still awaiting a code review (probably tomorrow) before it can go to v1.7:
<br>
<p>- --enable-mpi-fortran behavior now allows you specify up to what level of Fortran bindings you want built:
<br>
<p>&nbsp;&nbsp;--enable-mpi-fortran: tries to build them all (this is the default)
<br>
&nbsp;&nbsp;--enable-mpi-fortran=mpifh: only builds mpif.h support
<br>
&nbsp;&nbsp;--enable-mpi-fortran=usempi: builds mpif.h and use mpi support
<br>
&nbsp;&nbsp;--enable-mpi-fortran=usempif08: builds mpif.h, use mpi, and use mpi_f08 support
<br>
&nbsp;&nbsp;--disable-mpi-fortran: does not build any Fortran support
<br>
<p>So to disable the mpi_f08 bindings, you can --enable-mpi-fortran=usempi.
<br>
<p><p><p>On Jan 22, 2014, at 5:45 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Update: I've been working all day on Fortran issues (pulling on one Paul-Fortran--sweater-thread revealed several other issues :-( ).  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'll be sending an update soon...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 22, 2014, at 5:40 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Jan 22, 2014 at 1:33 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; My main concern with 1.7.4 at the moment stems from all the Fortran changes we pushed into that release - this occurred *after* 1.7.3, and so those problems represent a regression in the 1.7 series.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Unless I am missing something, the currently open Fortan issues are:
</span><br>
<span class="quotelev2">&gt;&gt; + XLF, which didn't work in 1.7.3 either (just verified this today)
</span><br>
<span class="quotelev2">&gt;&gt; + PathScale and Open64 which fail building in ompi/mpi/fortran/use-mpi-f08/
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The XLF issue is not a regression.
</span><br>
<span class="quotelev2">&gt;&gt; The remaining PathScale/Open64 issue MAY be a compiler bug.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If Jeff follows through on his promise to implement --disable-mpi-fortran-08 then use of that option is a work-around for the regression on PathScale and Open64.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev2">&gt;&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
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
<li><strong>Next message:</strong> <a href="13858.php">Paul Hargrove: "[OMPI devel] 1.7.4rc: yet another launch failure"</a>
<li><strong>Previous message:</strong> <a href="13856.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<li><strong>In reply to:</strong> <a href="13851.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4 status update"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13860.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4 status update"</a>
<li><strong>Reply:</strong> <a href="13860.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4 status update"</a>
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
