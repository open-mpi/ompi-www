<?
$subject_val = "[OMPI users] OpenMPI 1.5.4 with VS2008 and example code fails at orte_init";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 12 16:56:56 2011" -->
<!-- isoreceived="20110912205656" -->
<!-- sent="Mon, 12 Sep 2011 22:56:51 +0200" -->
<!-- isosent="20110912205651" -->
<!-- name="Riku" -->
<!-- email="subs_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI 1.5.4 with VS2008 and example code fails at orte_init" -->
<!-- id="CAMYKUgXX2mqJkXRjceVOEFh+dLJ96gZ0T5WUGqAZvnibcNixKA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI 1.5.4 with VS2008 and example code fails at orte_init<br>
<strong>From:</strong> Riku (<em>subs_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-12 16:56:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17236.php">Blosch, Edwin L: "[OMPI users] Question on using rsh"</a>
<li><strong>Previous message:</strong> <a href="17234.php">Samuel K. Gutierrez: "Re: [OMPI users] EXTERNAL: Re:  qp memory allocation problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all,
<br>
<p>I recently successfully compiled Open MPI 1.5.4 with Visual Studio
<br>
2008 for the 32-bit platform. Because of some adaptations (yet to be
<br>
added in) I cannot use the provided binary release.
<br>
<p>For initial testing I also compiled the Hello World example code
<br>
(hello_cxx.cc). The program works fine when run together with the
<br>
binary release (of 1.5.4), downloaded from open-mpi.org. When running
<br>
the test example together with the code I have compiled myself, I get
<br>
the errors below.
<br>
<p>I have used CMake to configure and generate solution files for Visual
<br>
Studio 2008. No settings, except build type (Release), were changed
<br>
from the CMake defaults. Compilation/linking and installation went
<br>
through without problems. When testing, I have made sure that the PATH
<br>
variable only points to the installation that I wish to use.
<br>
<p>I have compared my installation folders, and as far as I can see I
<br>
have managed to build all the necessary binaries. Only the Fortran 77
<br>
binding libs/dlls have been omitted in the build (they were not marked
<br>
for build in CMake either).
<br>
<p>The outputs from the binary distribution of &quot;ompi_info&quot; and my own
<br>
version are _identical_, except for paths identifying the libraries.
<br>
Nothing strange there.
<br>
<p>The problem at hand leaves me scratching my head. Does anyone have any
<br>
ideas, or suggestions?
<br>
<p>Thank you,
<br>
<p>Riku
<br>
<p>==============
<br>
Error messages:
<br>
==============
<br>
<p>$&gt; mpirun hello_cxx.exe
<br>
<p>[Anemone:06412] [[5578,0],0] ORTE_ERROR_LOG: Not found in file
<br>
..\..\openmpi-1.5.4\orte\mca\ess\hnp\ess_hnp_module.c at line 536
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;orte_debugger_select failed
<br>
&nbsp;&nbsp;--&gt; Returned value Not found (-13) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
[Anemone:06412] [[5578,0],0] ORTE_ERROR_LOG: Not found in file
<br>
..\..\openmpi-1.5.4\orte\runtime\orte_init.c at line 128
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;orte_ess_set_name failed
<br>
&nbsp;&nbsp;--&gt; Returned value Not found (-13) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
[Anemone:06412] [[5578,0],0] ORTE_ERROR_LOG: Not found in file
<br>
..\..\..\..\openmpi-1.5.4\orte\tools\orterun\orterun.c at line 616
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17236.php">Blosch, Edwin L: "[OMPI users] Question on using rsh"</a>
<li><strong>Previous message:</strong> <a href="17234.php">Samuel K. Gutierrez: "Re: [OMPI users] EXTERNAL: Re:  qp memory allocation problem"</a>
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
