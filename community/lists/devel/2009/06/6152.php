<?
$subject_val = "Re: [OMPI devel] Trunk is broken";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  1 10:05:07 2009" -->
<!-- isoreceived="20090601140507" -->
<!-- sent="Mon, 01 Jun 2009 10:04:55 -0400" -->
<!-- isosent="20090601140455" -->
<!-- name="Rainer Keller" -->
<!-- email="keller_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk is broken" -->
<!-- id="200906011004.56070.keller_at_ornl.gov" -->
<!-- charset="iso-8859-15" -->
<!-- inreplyto="71d2d8cc0906010653q17512ea9ic892e60b21ce7b50_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Trunk is broken<br>
<strong>From:</strong> Rainer Keller (<em>keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-01 10:04:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6153.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21340"</a>
<li><strong>Previous message:</strong> <a href="6151.php">Ralph Castain: "[OMPI devel] Trunk is broken"</a>
<li><strong>In reply to:</strong> <a href="6151.php">Ralph Castain: "[OMPI devel] Trunk is broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6161.php">Jeff Squyres: "Re: [OMPI devel] Trunk is broken"</a>
<li><strong>Reply:</strong> <a href="6161.php">Jeff Squyres: "Re: [OMPI devel] Trunk is broken"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
of course, at first I was afraid this was afraid that these were related to 
<br>
pulling the OMPI_ALIGNMENT (and friends) configure to the OPAL layer (r21330), 
<br>
but failures I seen in MTT are related to windows (r21334).
<br>
<p>Well AM_CONDITIONAL(WANT_PERUSE...) is in ./config/ompi_configure_options.m4, 
<br>
in configure-macro OMPI_CONFIGURE_OPTIONS, which is called in configure.ac.
<br>
<p>Did You run ./autogen.sh?
<br>
<p>Thanks,
<br>
Rainer
<br>
<p><p>On Monday 01 June 2009 09:53:47 am Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Hi folks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm getting the following build failures this morning - looks like
</span><br>
<span class="quotelev1">&gt; something crept in over the weekend?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ompi/peruse/Makefile.am:19: WANT_PERUSE does not appear in AM_CONDITIONAL
</span><br>
<span class="quotelev1">&gt; ompi/Makefile.am:155:   `ompi/peruse/Makefile.am' included from here
</span><br>
<span class="quotelev1">&gt; ompi/Makefile.am: installing `config/depcomp'
</span><br>
<span class="quotelev1">&gt; ompi/mpi/f90/Makefile.am:242: OMPI_WANT_BUILD_F90_SMALL does not appear in
</span><br>
<span class="quotelev1">&gt; AM_CONDITIONAL
</span><br>
<span class="quotelev1">&gt; ompi/mpi/f90/Makefile.am:245: OMPI_WANT_BUILD_F90_MEDIUM does not appear in
</span><br>
<span class="quotelev1">&gt; AM_CONDITIONAL
</span><br>
<span class="quotelev1">&gt; ompi/mpi/f90/Makefile.am:248: OMPI_WANT_BUILD_F90_LARGE does not appear in
</span><br>
<span class="quotelev1">&gt; AM_CONDITIONAL
</span><br>
<span class="quotelev1">&gt; test/peruse/Makefile.am:19: WANT_PERUSE does not appear in AM_CONDITIONAL
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<p><pre>
-- 
------------------------------------------------------------------------
Rainer Keller, PhD                  Tel: +1 (865) 241-6293
Oak Ridge National Lab          Fax: +1 (865) 241-4811
PO Box 2008 MS 6164           Email: keller_at_[hidden]
Oak Ridge, TN 37831-2008    AIM/Skype: rusraink
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6153.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21340"</a>
<li><strong>Previous message:</strong> <a href="6151.php">Ralph Castain: "[OMPI devel] Trunk is broken"</a>
<li><strong>In reply to:</strong> <a href="6151.php">Ralph Castain: "[OMPI devel] Trunk is broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6161.php">Jeff Squyres: "Re: [OMPI devel] Trunk is broken"</a>
<li><strong>Reply:</strong> <a href="6161.php">Jeff Squyres: "Re: [OMPI devel] Trunk is broken"</a>
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
