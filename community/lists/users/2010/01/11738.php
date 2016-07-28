<?
$subject_val = "[OMPI users] MPI problem after update";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 12 04:35:29 2010" -->
<!-- isoreceived="20100112093529" -->
<!-- sent="Tue, 12 Jan 2010 10:35:23 +0100" -->
<!-- isosent="20100112093523" -->
<!-- name="florian beutler" -->
<!-- email="der_schwabe_at_[hidden]" -->
<!-- subject="[OMPI users] MPI problem after update" -->
<!-- id="20100112093523.258540_at_gmx.net" -->
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
<strong>Subject:</strong> [OMPI users] MPI problem after update<br>
<strong>From:</strong> florian beutler (<em>der_schwabe_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-12 04:35:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11739.php">Jeff Squyres: "Re: [OMPI users] MPI problem after update"</a>
<li><strong>Previous message:</strong> <a href="11737.php">Sangamesh B: "Re: [OMPI users] problem with progress thread and orte"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11739.php">Jeff Squyres: "Re: [OMPI users] MPI problem after update"</a>
<li><strong>Reply:</strong> <a href="11739.php">Jeff Squyres: "Re: [OMPI users] MPI problem after update"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi everyone
<br>
I run an update of ubuntu 9.10 on my laptop and now my mpi programs do not work anymore... The error is
<br>
<p>[florian-laptop:02935] [[INVALID],INVALID] ORTE_ERROR_LOG: A system-required executable either could not be found or was not executable by this user in file ../../../../../../orte/mca/ess/singleton/ess_singleton_module.c at line 269
<br>
[florian-laptop:02935] [[INVALID],INVALID] ORTE_ERROR_LOG: A system-required executable either could not be found or was not executable by this user in file ../../../../../../orte/mca/ess/singleton/ess_singleton_module.c at line 143
<br>
[florian-laptop:02935] [[INVALID],INVALID] ORTE_ERROR_LOG: A system-required executable either could not be found or was not executable by this user in file ../../../orte/runtime/orte_init.c at line 132
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort. There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems. This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>orte_ess_set_name failed
<br>
--&gt; Returned value A system-required executable either could not be found or was not executable by this user (-127) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
It looks like MPI_INIT failed for some reason; your parallel process is
<br>
likely to abort. There are many reasons that a parallel process can
<br>
fail during MPI_INIT; some of which are due to configuration or environment
<br>
problems. This failure appears to be an internal failure; here's some
<br>
additional information (which may only be relevant to an Open MPI
<br>
developer):
<br>
<p>ompi_mpi_init: orte_init failed
<br>
--&gt; Returned &quot;A system-required executable either could not be found or was not executable by this user&quot; (-127) instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[florian-laptop:2935] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
<br>
<p>I have not really an idea what causes this problem but it is definitely a problem of the mpi package because the mpi programs are working on other machines...
<br>
My MPI program is using MPI only
<br>
I am thankful for any help, if any additional informations are needed I am happy to provide them
<br>
best regards
<br>
florian
<br>
<p><p><p><pre>
-- 
Jetzt kostenlos herunterladen: Internet Explorer 8 und Mozilla Firefox 3.5 -
sicherer, schneller und einfacher! <a href="http://portal.gmx.net/de/go/atbrowser">http://portal.gmx.net/de/go/atbrowser</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11739.php">Jeff Squyres: "Re: [OMPI users] MPI problem after update"</a>
<li><strong>Previous message:</strong> <a href="11737.php">Sangamesh B: "Re: [OMPI users] problem with progress thread and orte"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11739.php">Jeff Squyres: "Re: [OMPI users] MPI problem after update"</a>
<li><strong>Reply:</strong> <a href="11739.php">Jeff Squyres: "Re: [OMPI users] MPI problem after update"</a>
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
