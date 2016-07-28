<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat May  6 12:30:08 2006" -->
<!-- isoreceived="20060506163008" -->
<!-- sent="Sat, 6 May 2006 18:29:46 +0200" -->
<!-- isosent="20060506162946" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="[OMPI devel] small configure nits" -->
<!-- id="20060506162946.GG3779_at_iam.uni-bonn.de" -->
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
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-06 12:29:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0853.php">Dries Kimpe: "Re: [OMPI devel] [OMPI users] pnetcdf &amp; Open MPI"</a>
<li><strong>Previous message:</strong> <a href="0851.php">Paul Donohue: "[OMPI devel] Oversubscription/Scheduling Bug"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0854.php">Brian Barrett: "Re: [OMPI devel] small configure nits"</a>
<li><strong>Reply:</strong> <a href="0854.php">Brian Barrett: "Re: [OMPI devel] small configure nits"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi there,
<br>
<p>A very minor nit in OpenMPI, concerning autotools: I think it's
<br>
better to specify the arguments to AC_CONFIG_AUX_DIR and _MACRO_DIR
<br>
without leading &quot;./&quot;, since if those name end up in Makefile targets,
<br>
BSD make won't have problems with VPATH lookup.  (Maybe this should be
<br>
noted in the Autoconf documentation.)
<br>
<p>Conversely, if that has been done on purpose, say, to fix some issue,
<br>
then I'd like to know about it.  FWIW, it's present in LAM as well.
<br>
<p>Cheers,
<br>
Ralf
<br>
<p>Index: configure.ac
<br>
===================================================================
<br>
--- configure.ac	(revision 9831)
<br>
+++ configure.ac	(working copy)
<br>
@@ -33,8 +33,8 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[m4_normalize(esyscmd([config/ompi_get_version.sh VERSION --base]))],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>], [openmpi])
<br>
&nbsp;AC_PREREQ(2.58)
<br>
-AC_CONFIG_AUX_DIR(./config)
<br>
-AC_CONFIG_MACRO_DIR(./config)
<br>
+AC_CONFIG_AUX_DIR(config)
<br>
+AC_CONFIG_MACRO_DIR(config)
<br>
&nbsp;
<br>
&nbsp;# Get our platform support file.  This has to be done very, very early
<br>
&nbsp;# because it twiddles random bits of autoconf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0853.php">Dries Kimpe: "Re: [OMPI devel] [OMPI users] pnetcdf &amp; Open MPI"</a>
<li><strong>Previous message:</strong> <a href="0851.php">Paul Donohue: "[OMPI devel] Oversubscription/Scheduling Bug"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0854.php">Brian Barrett: "Re: [OMPI devel] small configure nits"</a>
<li><strong>Reply:</strong> <a href="0854.php">Brian Barrett: "Re: [OMPI devel] small configure nits"</a>
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
