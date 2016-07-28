<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon May  8 07:54:50 2006" -->
<!-- isoreceived="20060508115450" -->
<!-- sent="Mon, 8 May 2006 13:54:43 +0200" -->
<!-- isosent="20060508115443" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] typo in ompi/mca/io/romio/configure.m4?" -->
<!-- id="20060508115442.GA26464_at_iam.uni-bonn.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="6B524107-8843-4A7B-9D5F-CD2E23B60F82_at_open-mpi.org" -->
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
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-08 07:54:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0859.php">Brian Barrett: "Re: [OMPI devel] typo in ompi/mca/io/romio/configure.m4?"</a>
<li><strong>Previous message:</strong> <a href="0857.php">Brian Barrett: "[OMPI devel] [SPAM:### 81%] Re: typo in ompi/mca/io/romio/configure.m4?"</a>
<li><strong>In reply to:</strong> <a href="0857.php">Brian Barrett: "[OMPI devel] [SPAM:### 81%] Re: typo in ompi/mca/io/romio/configure.m4?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0859.php">Brian Barrett: "Re: [OMPI devel] typo in ompi/mca/io/romio/configure.m4?"</a>
<li><strong>Reply:</strong> <a href="0859.php">Brian Barrett: "Re: [OMPI devel] typo in ompi/mca/io/romio/configure.m4?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brian, Dries,
<br>
<p>* Brian Barrett wrote on Mon, May 08, 2006 at 01:43:38PM CEST:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, we really *should* abort configure and warn the user if -- 
</span><br>
<span class="quotelev1">&gt; enable-io-romio is given and ROMIO fails to configure.  I will fix  
</span><br>
<span class="quotelev1">&gt; this with the LDFLAGS fix.  I'll let you know when the fixes become  
</span><br>
<span class="quotelev1">&gt; available
</span><br>
<p>While you're looking at config/ompi_config_subdir* anyway, you may be
<br>
interested to know that it mistreats some arguments with special
<br>
characters in it.  That may not be so important to OpenMPI, but when
<br>
passing the same config.cache file down to the sub-configure (which
<br>
OpenMPI does not do), then it can be:
<br>
<a href="http://lists.gnu.org/archive/html/bug-autoconf/2006-04/msg00087.html">http://lists.gnu.org/archive/html/bug-autoconf/2006-04/msg00087.html</a>
<br>
<a href="http://lists.gnu.org/archive/html/autoconf-patches/2006-04/msg00357.html">http://lists.gnu.org/archive/html/autoconf-patches/2006-04/msg00357.html</a>
<br>
<p>It may even be that this comment from configure.ac:
<br>
# AC_CONFIG_SUBDIRS appears to be broken for non-gcc compilers (i.e.,
<br>
# passing precious variables down to the sub-configure).
<br>
<p>hints at the very problem linked to above, but frankly, I don't know
<br>
that.  Again, if that was a different issue with AC_CONFIG_SUBDIRS,
<br>
it'd be great to hear about it.
<br>
<p>Cheers,
<br>
Ralf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0859.php">Brian Barrett: "Re: [OMPI devel] typo in ompi/mca/io/romio/configure.m4?"</a>
<li><strong>Previous message:</strong> <a href="0857.php">Brian Barrett: "[OMPI devel] [SPAM:### 81%] Re: typo in ompi/mca/io/romio/configure.m4?"</a>
<li><strong>In reply to:</strong> <a href="0857.php">Brian Barrett: "[OMPI devel] [SPAM:### 81%] Re: typo in ompi/mca/io/romio/configure.m4?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0859.php">Brian Barrett: "Re: [OMPI devel] typo in ompi/mca/io/romio/configure.m4?"</a>
<li><strong>Reply:</strong> <a href="0859.php">Brian Barrett: "Re: [OMPI devel] typo in ompi/mca/io/romio/configure.m4?"</a>
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
