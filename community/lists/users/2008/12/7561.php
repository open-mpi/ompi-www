<?
$subject_val = "[OMPI users] Relocating an Open MPI installation using OPAL_PREFIX";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 18 11:03:31 2008" -->
<!-- isoreceived="20081218160331" -->
<!-- sent="Thu, 18 Dec 2008 11:03:25 -0500" -->
<!-- isosent="20081218160325" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="[OMPI users] Relocating an Open MPI installation using OPAL_PREFIX" -->
<!-- id="20081218160325.GK240_at_sun.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Relocating an Open MPI installation using OPAL_PREFIX<br>
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-18 11:03:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7562.php">deadchicken_at_[hidden]: "Re: [OMPI users] Communications problems w/OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="7560.php">deadchicken_at_[hidden]: "Re: [OMPI users] Communications problems w/OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7571.php">Ethan Mallove: "Re: [OMPI users] Relocating an Open MPI installation using OPAL_PREFIX"</a>
<li><strong>Reply:</strong> <a href="7571.php">Ethan Mallove: "Re: [OMPI users] Relocating an Open MPI installation using OPAL_PREFIX"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>The below FAQ lists instructions on how to use a relocated Open MPI
<br>
installation:
<br>
<p>&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=building#installdirs">http://www.open-mpi.org/faq/?category=building#installdirs</a>
<br>
<p>On Solaris, OPAL_PREFIX and friends (documented in the FAQ) work for
<br>
me with both MPI (hello_c) and non-MPI (hostname) programs. On Linux,
<br>
I can only get the non-MPI case to work. Here are the environment
<br>
variables I am setting:
<br>
<p>&nbsp;&nbsp;$ cat setenv_opal_prefix.csh
<br>
&nbsp;&nbsp;set opal_prefix = &quot;/opt/openmpi-relocated&quot;
<br>
<p>&nbsp;&nbsp;setenv OPAL_PREFIX         $opal_prefix
<br>
&nbsp;&nbsp;setenv OPAL_BINDIR         $opal_prefix/bin
<br>
&nbsp;&nbsp;setenv OPAL_SBINDIR        $opal_prefix/sbin
<br>
&nbsp;&nbsp;setenv OPAL_DATAROOTDIR    $opal_prefix/share
<br>
&nbsp;&nbsp;setenv OPAL_SYSCONFDIR     $opal_prefix/etc
<br>
&nbsp;&nbsp;setenv OPAL_SHAREDSTATEDIR $opal_prefix/com
<br>
&nbsp;&nbsp;setenv OPAL_LOCALSTATEDIR  $opal_prefix/var
<br>
&nbsp;&nbsp;setenv OPAL_LIBDIR         $opal_prefix/lib
<br>
&nbsp;&nbsp;setenv OPAL_INCLUDEDIR     $opal_prefix/include
<br>
&nbsp;&nbsp;setenv OPAL_INFODIR        $opal_prefix/info
<br>
&nbsp;&nbsp;setenv OPAL_MANDIR         $opal_prefix/man
<br>
<p>&nbsp;&nbsp;setenv PATH $opal_prefix/bin:$PATH
<br>
&nbsp;&nbsp;setenv LD_LIBRARY_PATH $opal_prefix/lib:$opal_prefix/lib/64
<br>
<p>Here is the error I get:
<br>
<p>&nbsp;&nbsp;$ mpirun -np 2 hello_c
<br>
&nbsp;&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;It looks like opal_init failed for some reason; your parallel process is
<br>
&nbsp;&nbsp;likely to abort.  There are many reasons that a parallel process can
<br>
&nbsp;&nbsp;fail during opal_init; some of which are due to configuration or
<br>
&nbsp;&nbsp;environment problems.  This failure appears to be an internal failure;
<br>
&nbsp;&nbsp;here's some additional information (which may only be relevant to an
<br>
&nbsp;&nbsp;Open MPI developer):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;opal_carto_base_select failed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--&gt; Returned value -13 instead of OPAL_SUCCESS
<br>
&nbsp;&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;[burl-ct-v20z-0:27737] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file runtime/orte_init.c at line 77
<br>
<p>Any ideas on what's going on?
<br>
<p>Thanks,
<br>
Ethan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7562.php">deadchicken_at_[hidden]: "Re: [OMPI users] Communications problems w/OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="7560.php">deadchicken_at_[hidden]: "Re: [OMPI users] Communications problems w/OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7571.php">Ethan Mallove: "Re: [OMPI users] Relocating an Open MPI installation using OPAL_PREFIX"</a>
<li><strong>Reply:</strong> <a href="7571.php">Ethan Mallove: "Re: [OMPI users] Relocating an Open MPI installation using OPAL_PREFIX"</a>
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
