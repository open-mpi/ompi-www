<?
$subject_val = "Re: [OMPI users] Relocating an Open MPI installation using OPAL_PREFIX";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 22 12:42:14 2008" -->
<!-- isoreceived="20081222174214" -->
<!-- sent="Mon, 22 Dec 2008 12:42:08 -0500" -->
<!-- isosent="20081222174208" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Relocating an Open MPI installation using OPAL_PREFIX" -->
<!-- id="20081222174207.GA245_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20081218160325.GK240_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Relocating an Open MPI installation using OPAL_PREFIX<br>
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-22 12:42:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7572.php">Ray Muno: "[OMPI users] OpenMPI 1.3RC2 job startup issue"</a>
<li><strong>Previous message:</strong> <a href="7570.php">Mi Yan: "[OMPI users] Mi Yan is out of the office."</a>
<li><strong>In reply to:</strong> <a href="7561.php">Ethan Mallove: "[OMPI users] Relocating an Open MPI installation using OPAL_PREFIX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7586.php">Jeff Squyres: "Re: [OMPI users] Relocating an Open MPI installation using OPAL_PREFIX"</a>
<li><strong>Reply:</strong> <a href="7586.php">Jeff Squyres: "Re: [OMPI users] Relocating an Open MPI installation using OPAL_PREFIX"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can anyone get OPAL_PREFIX to work on Linux? A simple test is to see
<br>
if the following works for any mpicc/mpirun:
<br>
<p>&nbsp;&nbsp;$ mv &lt;openmpi-installation&gt; /tmp/foo
<br>
&nbsp;&nbsp;$ set OPAL_PREFIX /tmp/foo
<br>
&nbsp;&nbsp;$ mpicc ...
<br>
&nbsp;&nbsp;$ mpirun ...
<br>
<p>If you are able to get the above to run successfully, I'm interested
<br>
in your config.log file.
<br>
<p>Thanks,
<br>
Ethan
<br>
<p><p>On Thu, Dec/18/2008 11:03:25AM, Ethan Mallove wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The below FAQ lists instructions on how to use a relocated Open MPI
</span><br>
<span class="quotelev1">&gt; installation:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   <a href="http://www.open-mpi.org/faq/?category=building#installdirs">http://www.open-mpi.org/faq/?category=building#installdirs</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Solaris, OPAL_PREFIX and friends (documented in the FAQ) work for
</span><br>
<span class="quotelev1">&gt; me with both MPI (hello_c) and non-MPI (hostname) programs. On Linux,
</span><br>
<span class="quotelev1">&gt; I can only get the non-MPI case to work. Here are the environment
</span><br>
<span class="quotelev1">&gt; variables I am setting:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   $ cat setenv_opal_prefix.csh
</span><br>
<span class="quotelev1">&gt;   set opal_prefix = &quot;/opt/openmpi-relocated&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   setenv OPAL_PREFIX         $opal_prefix
</span><br>
<span class="quotelev1">&gt;   setenv OPAL_BINDIR         $opal_prefix/bin
</span><br>
<span class="quotelev1">&gt;   setenv OPAL_SBINDIR        $opal_prefix/sbin
</span><br>
<span class="quotelev1">&gt;   setenv OPAL_DATAROOTDIR    $opal_prefix/share
</span><br>
<span class="quotelev1">&gt;   setenv OPAL_SYSCONFDIR     $opal_prefix/etc
</span><br>
<span class="quotelev1">&gt;   setenv OPAL_SHAREDSTATEDIR $opal_prefix/com
</span><br>
<span class="quotelev1">&gt;   setenv OPAL_LOCALSTATEDIR  $opal_prefix/var
</span><br>
<span class="quotelev1">&gt;   setenv OPAL_LIBDIR         $opal_prefix/lib
</span><br>
<span class="quotelev1">&gt;   setenv OPAL_INCLUDEDIR     $opal_prefix/include
</span><br>
<span class="quotelev1">&gt;   setenv OPAL_INFODIR        $opal_prefix/info
</span><br>
<span class="quotelev1">&gt;   setenv OPAL_MANDIR         $opal_prefix/man
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   setenv PATH $opal_prefix/bin:$PATH
</span><br>
<span class="quotelev1">&gt;   setenv LD_LIBRARY_PATH $opal_prefix/lib:$opal_prefix/lib/64
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is the error I get:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   $ mpirun -np 2 hello_c
</span><br>
<span class="quotelev1">&gt;   --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;   It looks like opal_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt;   likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt;   fail during opal_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt;   environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt;   here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt;   Open MPI developer):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     opal_carto_base_select failed
</span><br>
<span class="quotelev1">&gt;     --&gt; Returned value -13 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev1">&gt;   --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;   [burl-ct-v20z-0:27737] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file runtime/orte_init.c at line 77
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any ideas on what's going on?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Ethan
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7572.php">Ray Muno: "[OMPI users] OpenMPI 1.3RC2 job startup issue"</a>
<li><strong>Previous message:</strong> <a href="7570.php">Mi Yan: "[OMPI users] Mi Yan is out of the office."</a>
<li><strong>In reply to:</strong> <a href="7561.php">Ethan Mallove: "[OMPI users] Relocating an Open MPI installation using OPAL_PREFIX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7586.php">Jeff Squyres: "Re: [OMPI users] Relocating an Open MPI installation using OPAL_PREFIX"</a>
<li><strong>Reply:</strong> <a href="7586.php">Jeff Squyres: "Re: [OMPI users] Relocating an Open MPI installation using OPAL_PREFIX"</a>
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
