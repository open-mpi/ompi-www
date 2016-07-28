<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon May  8 09:07:12 2006" -->
<!-- isoreceived="20060508130712" -->
<!-- sent="Mon, 8 May 2006 15:06:32 +0200" -->
<!-- isosent="20060508130632" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] typo in ompi/mca/io/romio/configure.m4?" -->
<!-- id="3446FC5A-BFED-4931-BB04-EB132CEE03C0_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20060508115442.GA26464_at_iam.uni-bonn.de" -->
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
<strong>Date:</strong> 2006-05-08 09:06:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0860.php">Brian Barrett: "Re: [OMPI devel] [OMPI users] pnetcdf &amp; Open MPI"</a>
<li><strong>Previous message:</strong> <a href="0858.php">Ralf Wildenhues: "Re: [OMPI devel] typo in ompi/mca/io/romio/configure.m4?"</a>
<li><strong>In reply to:</strong> <a href="0858.php">Ralf Wildenhues: "Re: [OMPI devel] typo in ompi/mca/io/romio/configure.m4?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0861.php">Dries Kimpe: "Re: [OMPI devel] typo in ompi/mca/io/romio/configure.m4?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 8, 2006, at 1:54 PM, Ralf Wildenhues wrote:
<br>
<p><span class="quotelev1">&gt; Hi Brian, Dries,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * Brian Barrett wrote on Mon, May 08, 2006 at 01:43:38PM CEST:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, we really *should* abort configure and warn the user if --
</span><br>
<span class="quotelev2">&gt;&gt; enable-io-romio is given and ROMIO fails to configure.  I will fix
</span><br>
<span class="quotelev2">&gt;&gt; this with the LDFLAGS fix.  I'll let you know when the fixes become
</span><br>
<span class="quotelev2">&gt;&gt; available
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; While you're looking at config/ompi_config_subdir* anyway, you may be
</span><br>
<span class="quotelev1">&gt; interested to know that it mistreats some arguments with special
</span><br>
<span class="quotelev1">&gt; characters in it.  That may not be so important to OpenMPI, but when
</span><br>
<span class="quotelev1">&gt; passing the same config.cache file down to the sub-configure (which
</span><br>
<span class="quotelev1">&gt; OpenMPI does not do), then it can be:
</span><br>
<span class="quotelev1">&gt; <a href="http://lists.gnu.org/archive/html/bug-autoconf/2006-04/msg00087.html">http://lists.gnu.org/archive/html/bug-autoconf/2006-04/msg00087.html</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://lists.gnu.org/archive/html/autoconf-patches/2006-04/">http://lists.gnu.org/archive/html/autoconf-patches/2006-04/</a> 
</span><br>
<span class="quotelev1">&gt; msg00357.html
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It may even be that this comment from configure.ac:
</span><br>
<span class="quotelev1">&gt; # AC_CONFIG_SUBDIRS appears to be broken for non-gcc compilers (i.e.,
</span><br>
<span class="quotelev1">&gt; # passing precious variables down to the sub-configure).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hints at the very problem linked to above, but frankly, I don't know
</span><br>
<span class="quotelev1">&gt; that.  Again, if that was a different issue with AC_CONFIG_SUBDIRS,
</span><br>
<span class="quotelev1">&gt; it'd be great to hear about it.
</span><br>
<p>I don't remember what the issue was -- Jeff, do you remember?
<br>
<p>I think we disabled config.cache for other reasons -- namely that we  
<br>
(Open MPI) internally add compiler flags, so that made config.cache  
<br>
really difficult to do right.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0860.php">Brian Barrett: "Re: [OMPI devel] [OMPI users] pnetcdf &amp; Open MPI"</a>
<li><strong>Previous message:</strong> <a href="0858.php">Ralf Wildenhues: "Re: [OMPI devel] typo in ompi/mca/io/romio/configure.m4?"</a>
<li><strong>In reply to:</strong> <a href="0858.php">Ralf Wildenhues: "Re: [OMPI devel] typo in ompi/mca/io/romio/configure.m4?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0861.php">Dries Kimpe: "Re: [OMPI devel] typo in ompi/mca/io/romio/configure.m4?"</a>
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
