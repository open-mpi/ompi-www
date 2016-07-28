<?
$subject_val = "[OMPI devel] AS_VAR_COPY failure (Re: === CREATE FAILURE (v1.4) ===)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  9 01:34:12 2010" -->
<!-- isoreceived="20100909053412" -->
<!-- sent="Thu, 9 Sep 2010 07:34:07 +0200" -->
<!-- isosent="20100909053407" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] AS_VAR_COPY failure (Re: === CREATE FAILURE (v1.4) ===)" -->
<!-- id="9A4AEDEA-CB68-4B50-A791-433F6F5DB395_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201009090102.o8912nLl003667_at_eddie.osl.iu.edu" -->
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
<strong>Subject:</strong> [OMPI devel] AS_VAR_COPY failure (Re: === CREATE FAILURE (v1.4) ===)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-09 01:34:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8472.php">Ralf Wildenhues: "Re: [OMPI devel] AS_VAR_COPY failure (Re: === CREATE FAILURE (v1.4) ===)"</a>
<li><strong>Previous message:</strong> <a href="8470.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8472.php">Ralf Wildenhues: "Re: [OMPI devel] AS_VAR_COPY failure (Re: === CREATE FAILURE (v1.4) ===)"</a>
<li><strong>Reply:</strong> <a href="8472.php">Ralf Wildenhues: "Re: [OMPI devel] AS_VAR_COPY failure (Re: === CREATE FAILURE (v1.4) ===)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm checking into this.
<br>
<p>I'm guessing that the problem is that the autoconf we use to build the 1.4 tarballs doesn't have AS_VAR_COPY.  Arrgghhh...
<br>
<p><p><p>On Sep 9, 2010, at 3:02 AM, MPI Team wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ERROR: Command returned a non-zero exist status (v1.4):
</span><br>
<span class="quotelev1">&gt;       ./autogen.sh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Start time: Wed Sep  8 21:00:07 EDT 2010
</span><br>
<span class="quotelev1">&gt; End time:   Wed Sep  8 21:02:49 EDT 2010
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; =======================================================================
</span><br>
<span class="quotelev1">&gt; [... previous lines snipped ...]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *** Found configure.(in|ac)
</span><br>
<span class="quotelev1">&gt; ***   /home/mpiteam/openmpi/nightly-tarball-build-root/v1.4/create-r23733/ompi/ompi/contrib/vt/vt/extlib/otf
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *** Running GNU tools
</span><br>
<span class="quotelev1">&gt; [Running] libtoolize --automake --copy
</span><br>
<span class="quotelev1">&gt; [Running] aclocal
</span><br>
<span class="quotelev1">&gt; [Running] autoheader
</span><br>
<span class="quotelev1">&gt; [Running] autoconf
</span><br>
<span class="quotelev1">&gt; [Running] automake --foreign -a --copy --include-deps
</span><br>
<span class="quotelev1">&gt;  ++ Patching configure for Libtool PGI 10 fortran compiler name
</span><br>
<span class="quotelev1">&gt;  ++ Patching configure for Libtool PGI version number regexps
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;== Back in /home/mpiteam/openmpi/nightly-tarball-build-root/v1.4/create-r23733/ompi/ompi/contrib/vt
</span><br>
<span class="quotelev1">&gt; &lt;== autogen.sh continuing...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *** Found configure.(in|ac)
</span><br>
<span class="quotelev1">&gt; ***   /home/mpiteam/openmpi/nightly-tarball-build-root/v1.4/create-r23733/ompi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *** Running GNU tools
</span><br>
<span class="quotelev1">&gt; [Running] autom4te --language=m4sh ompi_get_version.m4sh -o ompi_get_version.sh
</span><br>
<span class="quotelev1">&gt; [Running] libtoolize --automake --copy --ltdl
</span><br>
<span class="quotelev1">&gt; ** Adjusting libltdl for OMPI :-(
</span><br>
<span class="quotelev1">&gt;   ++ patching for argz bugfix in libtool 1.5
</span><br>
<span class="quotelev1">&gt;      -- your libtool doesn't need this! yay!
</span><br>
<span class="quotelev1">&gt;   ++ patching 64-bit OS X bug in ltmain.sh
</span><br>
<span class="quotelev1">&gt;      -- your libtool doesn't need this! yay!
</span><br>
<span class="quotelev1">&gt;   ++ RTLD_GLOBAL in libltdl
</span><br>
<span class="quotelev1">&gt;      -- your libltdl doesn't need this! yay!
</span><br>
<span class="quotelev1">&gt; grep: configure: No such file or directory
</span><br>
<span class="quotelev1">&gt;   ++ patching for ifort (LT 2.2.0-4)
</span><br>
<span class="quotelev1">&gt;     -- your libltdl doesn't need this! yay!
</span><br>
<span class="quotelev1">&gt; [Running] aclocal -I config
</span><br>
<span class="quotelev1">&gt; [Running] autoheader
</span><br>
<span class="quotelev1">&gt; ** Adjusting libtool for OMPI :-(
</span><br>
<span class="quotelev1">&gt;   ++ patching for pathscale multi-line output (LT 2.x)
</span><br>
<span class="quotelev1">&gt;   ++ patching for ifort (LT 2.2.0-4)
</span><br>
<span class="quotelev1">&gt;     -- your libltdl doesn't need this! yay!
</span><br>
<span class="quotelev1">&gt;   ++ patching to remove solaris Cstd
</span><br>
<span class="quotelev1">&gt;   ++ patching for Sun Studio Fortran compilers
</span><br>
<span class="quotelev1">&gt; [Running] autoconf
</span><br>
<span class="quotelev1">&gt; configure:36430: error: possibly undefined macro: AS_VAR_COPY
</span><br>
<span class="quotelev1">&gt;      If this token and others are legitimate, please use m4_pattern_allow.
</span><br>
<span class="quotelev1">&gt;      See the Autoconf documentation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It seems that the execution of &quot;autoconf&quot; has failed.  See above for
</span><br>
<span class="quotelev1">&gt; the specific error message that caused it to abort.
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; =======================================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Your friendly daemon,
</span><br>
<span class="quotelev1">&gt; Cyrador
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; testing mailing list
</span><br>
<span class="quotelev1">&gt; testing_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/testing">http://www.open-mpi.org/mailman/listinfo.cgi/testing</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8472.php">Ralf Wildenhues: "Re: [OMPI devel] AS_VAR_COPY failure (Re: === CREATE FAILURE (v1.4) ===)"</a>
<li><strong>Previous message:</strong> <a href="8470.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8472.php">Ralf Wildenhues: "Re: [OMPI devel] AS_VAR_COPY failure (Re: === CREATE FAILURE (v1.4) ===)"</a>
<li><strong>Reply:</strong> <a href="8472.php">Ralf Wildenhues: "Re: [OMPI devel] AS_VAR_COPY failure (Re: === CREATE FAILURE (v1.4) ===)"</a>
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
