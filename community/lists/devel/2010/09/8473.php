<?
$subject_val = "Re: [OMPI devel] AS_VAR_COPY failure (Re: === CREATE FAILURE (v1.4) ===)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  9 01:53:04 2010" -->
<!-- isoreceived="20100909055304" -->
<!-- sent="Thu, 9 Sep 2010 07:52:59 +0200" -->
<!-- isosent="20100909055259" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] AS_VAR_COPY failure (Re: === CREATE FAILURE (v1.4) ===)" -->
<!-- id="C31BA851-ADAC-44AC-B7B9-CD084E0B85F2_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20100909054303.GA19028_at_gmx.de" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-09 01:52:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8474.php">Jeff Squyres: "[OMPI devel] Gentle reminder: teleconf in 30 mins"</a>
<li><strong>Previous message:</strong> <a href="8472.php">Ralf Wildenhues: "Re: [OMPI devel] AS_VAR_COPY failure (Re: === CREATE FAILURE (v1.4) ===)"</a>
<li><strong>In reply to:</strong> <a href="8472.php">Ralf Wildenhues: "Re: [OMPI devel] AS_VAR_COPY failure (Re: === CREATE FAILURE (v1.4) ===)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You rock!  I was literally just trying to figure out something exactly like this.  Your version is much more elegant than my current attempt.  :-)
<br>
<p>Many thanks!
<br>
<p><p>On Sep 9, 2010, at 7:43 AM, Ralf Wildenhues wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, sorry for not making this clear earlier: AS_VAR_COPY is fairly new,
</span><br>
<span class="quotelev1">&gt; and was introduced because AS_VAR_GET has problems.  You should be able
</span><br>
<span class="quotelev1">&gt; to workaround it by placing something like
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  m4_ifndef([AS_VAR_COPY],
</span><br>
<span class="quotelev1">&gt;    [m4_define([AS_VAR_COPY],
</span><br>
<span class="quotelev1">&gt;       [AS_LITERAL_IF([$1[]$2], [$1=$$2], [eval $1=\$$2])])])
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; early into the m4 stream (untested).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Ralf
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * Jeff Squyres wrote on Thu, Sep 09, 2010 at 07:34:07AM CEST:
</span><br>
<span class="quotelev2">&gt;&gt; I'm checking into this.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm guessing that the problem is that the autoconf we use to build the 1.4 tarballs doesn't have AS_VAR_COPY.  Arrgghhh...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 9, 2010, at 3:02 AM, MPI Team wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ERROR: Command returned a non-zero exist status (v1.4):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      ./autogen.sh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Start time: Wed Sep  8 21:00:07 EDT 2010
</span><br>
<span class="quotelev3">&gt;&gt;&gt; End time:   Wed Sep  8 21:02:49 EDT 2010
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =======================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [... previous lines snipped ...]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** Found configure.(in|ac)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ***   /home/mpiteam/openmpi/nightly-tarball-build-root/v1.4/create-r23733/ompi/ompi/contrib/vt/vt/extlib/otf
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** Running GNU tools
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [Running] libtoolize --automake --copy
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [Running] aclocal
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [Running] autoheader
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [Running] autoconf
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [Running] automake --foreign -a --copy --include-deps
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ++ Patching configure for Libtool PGI 10 fortran compiler name
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ++ Patching configure for Libtool PGI version number regexps
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;== Back in /home/mpiteam/openmpi/nightly-tarball-build-root/v1.4/create-r23733/ompi/ompi/contrib/vt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;== autogen.sh continuing...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** Found configure.(in|ac)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ***   /home/mpiteam/openmpi/nightly-tarball-build-root/v1.4/create-r23733/ompi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** Running GNU tools
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [Running] autom4te --language=m4sh ompi_get_version.m4sh -o ompi_get_version.sh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [Running] libtoolize --automake --copy --ltdl
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ** Adjusting libltdl for OMPI :-(
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ++ patching for argz bugfix in libtool 1.5
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     -- your libtool doesn't need this! yay!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ++ patching 64-bit OS X bug in ltmain.sh
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     -- your libtool doesn't need this! yay!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ++ RTLD_GLOBAL in libltdl
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     -- your libltdl doesn't need this! yay!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; grep: configure: No such file or directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ++ patching for ifort (LT 2.2.0-4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    -- your libltdl doesn't need this! yay!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [Running] aclocal -I config
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [Running] autoheader
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ** Adjusting libtool for OMPI :-(
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ++ patching for pathscale multi-line output (LT 2.x)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ++ patching for ifort (LT 2.2.0-4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    -- your libltdl doesn't need this! yay!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ++ patching to remove solaris Cstd
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ++ patching for Sun Studio Fortran compilers
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [Running] autoconf
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure:36430: error: possibly undefined macro: AS_VAR_COPY
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     If this token and others are legitimate, please use m4_pattern_allow.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     See the Autoconf documentation.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It seems that the execution of &quot;autoconf&quot; has failed.  See above for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the specific error message that caused it to abort.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =======================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Your friendly daemon,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cyrador
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; testing mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; testing_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/testing">http://www.open-mpi.org/mailman/listinfo.cgi/testing</a>
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Ralf Wildenhues      Institut fuer Numerische Simulation, Universitaet Bonn
</span><br>
<span class="quotelev1">&gt;                     Wegelerstrasse 6, D-53115 Bonn
</span><br>
<span class="quotelev1">&gt; tel: +49 228 733178  mailto:wildenhues_at_[hidden]
</span><br>
<span class="quotelev1">&gt; fax: +49 228 737527  <a href="http://wissrech.ins.uni-bonn.de/people/wildenhues.html">http://wissrech.ins.uni-bonn.de/people/wildenhues.html</a>
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
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8474.php">Jeff Squyres: "[OMPI devel] Gentle reminder: teleconf in 30 mins"</a>
<li><strong>Previous message:</strong> <a href="8472.php">Ralf Wildenhues: "Re: [OMPI devel] AS_VAR_COPY failure (Re: === CREATE FAILURE (v1.4) ===)"</a>
<li><strong>In reply to:</strong> <a href="8472.php">Ralf Wildenhues: "Re: [OMPI devel] AS_VAR_COPY failure (Re: === CREATE FAILURE (v1.4) ===)"</a>
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
