<?
$subject_val = "Re: [OMPI devel] AS_VAR_COPY failure (Re: === CREATE FAILURE (v1.4) ===)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  9 01:43:10 2010" -->
<!-- isoreceived="20100909054310" -->
<!-- sent="Thu, 9 Sep 2010 07:43:03 +0200" -->
<!-- isosent="20100909054303" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] AS_VAR_COPY failure (Re: === CREATE FAILURE (v1.4) ===)" -->
<!-- id="20100909054303.GA19028_at_gmx.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="9A4AEDEA-CB68-4B50-A791-433F6F5DB395_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] AS_VAR_COPY failure (Re: === CREATE FAILURE (v1.4) ===)<br>
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-09 01:43:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8473.php">Jeff Squyres: "Re: [OMPI devel] AS_VAR_COPY failure (Re: === CREATE FAILURE (v1.4) ===)"</a>
<li><strong>Previous message:</strong> <a href="8471.php">Jeff Squyres: "[OMPI devel] AS_VAR_COPY failure (Re: === CREATE FAILURE (v1.4) ===)"</a>
<li><strong>In reply to:</strong> <a href="8471.php">Jeff Squyres: "[OMPI devel] AS_VAR_COPY failure (Re: === CREATE FAILURE (v1.4) ===)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8473.php">Jeff Squyres: "Re: [OMPI devel] AS_VAR_COPY failure (Re: === CREATE FAILURE (v1.4) ===)"</a>
<li><strong>Reply:</strong> <a href="8473.php">Jeff Squyres: "Re: [OMPI devel] AS_VAR_COPY failure (Re: === CREATE FAILURE (v1.4) ===)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>Yes, sorry for not making this clear earlier: AS_VAR_COPY is fairly new,
<br>
and was introduced because AS_VAR_GET has problems.  You should be able
<br>
to workaround it by placing something like
<br>
<p>&nbsp;&nbsp;m4_ifndef([AS_VAR_COPY],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[m4_define([AS_VAR_COPY],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[AS_LITERAL_IF([$1[]$2], [$1=$$2], [eval $1=\$$2])])])
<br>
<p>early into the m4 stream (untested).
<br>
<p>Cheers,
<br>
Ralf
<br>
<p>* Jeff Squyres wrote on Thu, Sep 09, 2010 at 07:34:07AM CEST:
<br>
<span class="quotelev1">&gt; I'm checking into this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm guessing that the problem is that the autoconf we use to build the 1.4 tarballs doesn't have AS_VAR_COPY.  Arrgghhh...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 9, 2010, at 3:02 AM, MPI Team wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ERROR: Command returned a non-zero exist status (v1.4):
</span><br>
<span class="quotelev2">&gt; &gt;       ./autogen.sh
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Start time: Wed Sep  8 21:00:07 EDT 2010
</span><br>
<span class="quotelev2">&gt; &gt; End time:   Wed Sep  8 21:02:49 EDT 2010
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; =======================================================================
</span><br>
<span class="quotelev2">&gt; &gt; [... previous lines snipped ...]
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; *** Found configure.(in|ac)
</span><br>
<span class="quotelev2">&gt; &gt; ***   /home/mpiteam/openmpi/nightly-tarball-build-root/v1.4/create-r23733/ompi/ompi/contrib/vt/vt/extlib/otf
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; *** Running GNU tools
</span><br>
<span class="quotelev2">&gt; &gt; [Running] libtoolize --automake --copy
</span><br>
<span class="quotelev2">&gt; &gt; [Running] aclocal
</span><br>
<span class="quotelev2">&gt; &gt; [Running] autoheader
</span><br>
<span class="quotelev2">&gt; &gt; [Running] autoconf
</span><br>
<span class="quotelev2">&gt; &gt; [Running] automake --foreign -a --copy --include-deps
</span><br>
<span class="quotelev2">&gt; &gt;  ++ Patching configure for Libtool PGI 10 fortran compiler name
</span><br>
<span class="quotelev2">&gt; &gt;  ++ Patching configure for Libtool PGI version number regexps
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &lt;== Back in /home/mpiteam/openmpi/nightly-tarball-build-root/v1.4/create-r23733/ompi/ompi/contrib/vt
</span><br>
<span class="quotelev2">&gt; &gt; &lt;== autogen.sh continuing...
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; *** Found configure.(in|ac)
</span><br>
<span class="quotelev2">&gt; &gt; ***   /home/mpiteam/openmpi/nightly-tarball-build-root/v1.4/create-r23733/ompi
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; *** Running GNU tools
</span><br>
<span class="quotelev2">&gt; &gt; [Running] autom4te --language=m4sh ompi_get_version.m4sh -o ompi_get_version.sh
</span><br>
<span class="quotelev2">&gt; &gt; [Running] libtoolize --automake --copy --ltdl
</span><br>
<span class="quotelev2">&gt; &gt; ** Adjusting libltdl for OMPI :-(
</span><br>
<span class="quotelev2">&gt; &gt;   ++ patching for argz bugfix in libtool 1.5
</span><br>
<span class="quotelev2">&gt; &gt;      -- your libtool doesn't need this! yay!
</span><br>
<span class="quotelev2">&gt; &gt;   ++ patching 64-bit OS X bug in ltmain.sh
</span><br>
<span class="quotelev2">&gt; &gt;      -- your libtool doesn't need this! yay!
</span><br>
<span class="quotelev2">&gt; &gt;   ++ RTLD_GLOBAL in libltdl
</span><br>
<span class="quotelev2">&gt; &gt;      -- your libltdl doesn't need this! yay!
</span><br>
<span class="quotelev2">&gt; &gt; grep: configure: No such file or directory
</span><br>
<span class="quotelev2">&gt; &gt;   ++ patching for ifort (LT 2.2.0-4)
</span><br>
<span class="quotelev2">&gt; &gt;     -- your libltdl doesn't need this! yay!
</span><br>
<span class="quotelev2">&gt; &gt; [Running] aclocal -I config
</span><br>
<span class="quotelev2">&gt; &gt; [Running] autoheader
</span><br>
<span class="quotelev2">&gt; &gt; ** Adjusting libtool for OMPI :-(
</span><br>
<span class="quotelev2">&gt; &gt;   ++ patching for pathscale multi-line output (LT 2.x)
</span><br>
<span class="quotelev2">&gt; &gt;   ++ patching for ifort (LT 2.2.0-4)
</span><br>
<span class="quotelev2">&gt; &gt;     -- your libltdl doesn't need this! yay!
</span><br>
<span class="quotelev2">&gt; &gt;   ++ patching to remove solaris Cstd
</span><br>
<span class="quotelev2">&gt; &gt;   ++ patching for Sun Studio Fortran compilers
</span><br>
<span class="quotelev2">&gt; &gt; [Running] autoconf
</span><br>
<span class="quotelev2">&gt; &gt; configure:36430: error: possibly undefined macro: AS_VAR_COPY
</span><br>
<span class="quotelev2">&gt; &gt;      If this token and others are legitimate, please use m4_pattern_allow.
</span><br>
<span class="quotelev2">&gt; &gt;      See the Autoconf documentation.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; It seems that the execution of &quot;autoconf&quot; has failed.  See above for
</span><br>
<span class="quotelev2">&gt; &gt; the specific error message that caused it to abort.
</span><br>
<span class="quotelev2">&gt; &gt; -------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; =======================================================================
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Your friendly daemon,
</span><br>
<span class="quotelev2">&gt; &gt; Cyrador
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; testing mailing list
</span><br>
<span class="quotelev2">&gt; &gt; testing_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/testing">http://www.open-mpi.org/mailman/listinfo.cgi/testing</a>
</span><br>
<pre>
-- 
Ralf Wildenhues      Institut fuer Numerische Simulation, Universitaet Bonn
                     Wegelerstrasse 6, D-53115 Bonn
tel: +49 228 733178  mailto:wildenhues_at_[hidden]
fax: +49 228 737527  <a href="http://wissrech.ins.uni-bonn.de/people/wildenhues.html">http://wissrech.ins.uni-bonn.de/people/wildenhues.html</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8473.php">Jeff Squyres: "Re: [OMPI devel] AS_VAR_COPY failure (Re: === CREATE FAILURE (v1.4) ===)"</a>
<li><strong>Previous message:</strong> <a href="8471.php">Jeff Squyres: "[OMPI devel] AS_VAR_COPY failure (Re: === CREATE FAILURE (v1.4) ===)"</a>
<li><strong>In reply to:</strong> <a href="8471.php">Jeff Squyres: "[OMPI devel] AS_VAR_COPY failure (Re: === CREATE FAILURE (v1.4) ===)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8473.php">Jeff Squyres: "Re: [OMPI devel] AS_VAR_COPY failure (Re: === CREATE FAILURE (v1.4) ===)"</a>
<li><strong>Reply:</strong> <a href="8473.php">Jeff Squyres: "Re: [OMPI devel] AS_VAR_COPY failure (Re: === CREATE FAILURE (v1.4) ===)"</a>
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
