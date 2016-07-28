<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun May  7 14:38:37 2006" -->
<!-- isoreceived="20060507183837" -->
<!-- sent="Sun, 7 May 2006 20:38:35 +0200" -->
<!-- isosent="20060507183835" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] small configure nits" -->
<!-- id="DCC493A2-B8AE-48E9-9F46-23D7042480A5_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20060506162946.GG3779_at_iam.uni-bonn.de" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-07 14:38:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0855.php">Ralf Wildenhues: "Re: [OMPI devel] small configure nits"</a>
<li><strong>Previous message:</strong> <a href="0853.php">Dries Kimpe: "Re: [OMPI devel] [OMPI users] pnetcdf &amp; Open MPI"</a>
<li><strong>In reply to:</strong> <a href="0852.php">Ralf Wildenhues: "[OMPI devel] small configure nits"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0855.php">Ralf Wildenhues: "Re: [OMPI devel] small configure nits"</a>
<li><strong>Reply:</strong> <a href="0855.php">Ralf Wildenhues: "Re: [OMPI devel] small configure nits"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Probably means this was a problem in some ancient version of our  
<br>
environment and it never got changed.  It looks reasonable, so I'll  
<br>
make it so.  Which platforms will barf with the './config'?  Trying  
<br>
to figure out which branches this needs to be committed to...
<br>
<p>Thanks,
<br>
<p>Brian
<br>
<p>On May 6, 2006, at 6:29 PM, Ralf Wildenhues wrote:
<br>
<p><span class="quotelev1">&gt; Hi there,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A very minor nit in OpenMPI, concerning autotools: I think it's
</span><br>
<span class="quotelev1">&gt; better to specify the arguments to AC_CONFIG_AUX_DIR and _MACRO_DIR
</span><br>
<span class="quotelev1">&gt; without leading &quot;./&quot;, since if those name end up in Makefile targets,
</span><br>
<span class="quotelev1">&gt; BSD make won't have problems with VPATH lookup.  (Maybe this should be
</span><br>
<span class="quotelev1">&gt; noted in the Autoconf documentation.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Conversely, if that has been done on purpose, say, to fix some issue,
</span><br>
<span class="quotelev1">&gt; then I'd like to know about it.  FWIW, it's present in LAM as well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Ralf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Index: configure.ac
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- configure.ac	(revision 9831)
</span><br>
<span class="quotelev1">&gt; +++ configure.ac	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -33,8 +33,8 @@
</span><br>
<span class="quotelev1">&gt;          [m4_normalize(esyscmd([config/ompi_get_version.sh VERSION  
</span><br>
<span class="quotelev1">&gt; --base]))],
</span><br>
<span class="quotelev1">&gt;          [<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>], [openmpi])
</span><br>
<span class="quotelev1">&gt;  AC_PREREQ(2.58)
</span><br>
<span class="quotelev1">&gt; -AC_CONFIG_AUX_DIR(./config)
</span><br>
<span class="quotelev1">&gt; -AC_CONFIG_MACRO_DIR(./config)
</span><br>
<span class="quotelev1">&gt; +AC_CONFIG_AUX_DIR(config)
</span><br>
<span class="quotelev1">&gt; +AC_CONFIG_MACRO_DIR(config)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  # Get our platform support file.  This has to be done very, very  
</span><br>
<span class="quotelev1">&gt; early
</span><br>
<span class="quotelev1">&gt;  # because it twiddles random bits of autoconf
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0855.php">Ralf Wildenhues: "Re: [OMPI devel] small configure nits"</a>
<li><strong>Previous message:</strong> <a href="0853.php">Dries Kimpe: "Re: [OMPI devel] [OMPI users] pnetcdf &amp; Open MPI"</a>
<li><strong>In reply to:</strong> <a href="0852.php">Ralf Wildenhues: "[OMPI devel] small configure nits"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0855.php">Ralf Wildenhues: "Re: [OMPI devel] small configure nits"</a>
<li><strong>Reply:</strong> <a href="0855.php">Ralf Wildenhues: "Re: [OMPI devel] small configure nits"</a>
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
