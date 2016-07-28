<?
$subject_val = "Re: [OMPI devel] Trunk is broken";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  1 16:46:20 2009" -->
<!-- isoreceived="20090601204620" -->
<!-- sent="Mon, 1 Jun 2009 16:46:13 -0400" -->
<!-- isosent="20090601204613" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk is broken" -->
<!-- id="66BF1F09-36EC-4BE4-982F-2E1AFC5A06F5_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200906011004.56070.keller_at_ornl.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-01 16:46:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6162.php">Jeff Squyres: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>Previous message:</strong> <a href="6160.php">Ralph Castain: "Re: [OMPI devel] 1.3 branch ob1 brokenness"</a>
<li><strong>In reply to:</strong> <a href="6152.php">Rainer Keller: "Re: [OMPI devel] Trunk is broken"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Turned out to be a faulty svn update.  Getting a clean svn checkout  
<br>
fixed the problem.
<br>
<p><p><p>On Jun 1, 2009, at 10:04 AM, Rainer Keller wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; of course, at first I was afraid this was afraid that these were  
</span><br>
<span class="quotelev1">&gt; related to
</span><br>
<span class="quotelev1">&gt; pulling the OMPI_ALIGNMENT (and friends) configure to the OPAL layer  
</span><br>
<span class="quotelev1">&gt; (r21330),
</span><br>
<span class="quotelev1">&gt; but failures I seen in MTT are related to windows (r21334).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Well AM_CONDITIONAL(WANT_PERUSE...) is in ./config/ 
</span><br>
<span class="quotelev1">&gt; ompi_configure_options.m4,
</span><br>
<span class="quotelev1">&gt; in configure-macro OMPI_CONFIGURE_OPTIONS, which is called in  
</span><br>
<span class="quotelev1">&gt; configure.ac.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Did You run ./autogen.sh?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Rainer
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Monday 01 June 2009 09:53:47 am Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi folks
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm getting the following build failures this morning - looks like
</span><br>
<span class="quotelev2">&gt; &gt; something crept in over the weekend?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ompi/peruse/Makefile.am:19: WANT_PERUSE does not appear in  
</span><br>
<span class="quotelev1">&gt; AM_CONDITIONAL
</span><br>
<span class="quotelev2">&gt; &gt; ompi/Makefile.am:155:   `ompi/peruse/Makefile.am' included from here
</span><br>
<span class="quotelev2">&gt; &gt; ompi/Makefile.am: installing `config/depcomp'
</span><br>
<span class="quotelev2">&gt; &gt; ompi/mpi/f90/Makefile.am:242: OMPI_WANT_BUILD_F90_SMALL does not  
</span><br>
<span class="quotelev1">&gt; appear in
</span><br>
<span class="quotelev2">&gt; &gt; AM_CONDITIONAL
</span><br>
<span class="quotelev2">&gt; &gt; ompi/mpi/f90/Makefile.am:245: OMPI_WANT_BUILD_F90_MEDIUM does not  
</span><br>
<span class="quotelev1">&gt; appear in
</span><br>
<span class="quotelev2">&gt; &gt; AM_CONDITIONAL
</span><br>
<span class="quotelev2">&gt; &gt; ompi/mpi/f90/Makefile.am:248: OMPI_WANT_BUILD_F90_LARGE does not  
</span><br>
<span class="quotelev1">&gt; appear in
</span><br>
<span class="quotelev2">&gt; &gt; AM_CONDITIONAL
</span><br>
<span class="quotelev2">&gt; &gt; test/peruse/Makefile.am:19: WANT_PERUSE does not appear in  
</span><br>
<span class="quotelev1">&gt; AM_CONDITIONAL
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Rainer Keller, PhD                  Tel: +1 (865) 241-6293
</span><br>
<span class="quotelev1">&gt; Oak Ridge National Lab          Fax: +1 (865) 241-4811
</span><br>
<span class="quotelev1">&gt; PO Box 2008 MS 6164           Email: keller_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Oak Ridge, TN 37831-2008    AIM/Skype: rusraink
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6162.php">Jeff Squyres: "Re: [OMPI devel] opal / fortran / Flogical"</a>
<li><strong>Previous message:</strong> <a href="6160.php">Ralph Castain: "Re: [OMPI devel] 1.3 branch ob1 brokenness"</a>
<li><strong>In reply to:</strong> <a href="6152.php">Rainer Keller: "Re: [OMPI devel] Trunk is broken"</a>
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
