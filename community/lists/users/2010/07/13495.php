<?
$subject_val = "[OMPI users] MPI_Init failing in singleton";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  7 09:44:35 2010" -->
<!-- isoreceived="20100707134435" -->
<!-- sent="Wed, 7 Jul 2010 15:44:26 +0200" -->
<!-- isosent="20100707134426" -->
<!-- name="Grzegorz Maj" -->
<!-- email="maju3_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Init failing in singleton" -->
<!-- id="AANLkTilKw5kiEtI2kdW53du_gdsjWw2ti21204nOfU5j_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Init failing in singleton<br>
<strong>From:</strong> Grzegorz Maj (<em>maju3_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-07 09:44:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13496.php">Ralph Castain: "Re: [OMPI users] MPI_Init failing in singleton"</a>
<li><strong>Previous message:</strong> <a href="13494.php">Jeff Squyres: "Re: [OMPI users] Sending an objects vector via MPI C++"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13496.php">Ralph Castain: "Re: [OMPI users] MPI_Init failing in singleton"</a>
<li><strong>Reply:</strong> <a href="13496.php">Ralph Castain: "Re: [OMPI users] MPI_Init failing in singleton"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I was trying to run some MPI processes as a singletons. On some of the
<br>
machines they crash on MPI_Init. I use exactly the same binaries of my
<br>
application and the same installation of openmpi 1.4.2 on two machines
<br>
and it works on one of them and fails on the other one. This is the
<br>
command and its output (test is a simple application calling only
<br>
MPI_Init and MPI_Finalize):
<br>
<p>LD_LIBRARY_PATH=/home/gmaj/openmpi/lib ./test
<br>
[host01:21866] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file
<br>
../../../../../orte/mca/ess/hnp/ess_hnp_module.c at line 161
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
<p>&nbsp;&nbsp;orte_plm_base_select failed
<br>
&nbsp;&nbsp;--&gt; Returned value Not found (-13) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
[host01:21866] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file
<br>
../../orte/runtime/orte_init.c at line 132
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
[host01:21866] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file
<br>
../../orte/orted/orted_main.c at line 323
<br>
[host01:21865] [[INVALID],INVALID] ORTE_ERROR_LOG: Unable to start a
<br>
daemon on the local node in file
<br>
../../../../../orte/mca/ess/singleton/ess_singleton_module.c at line
<br>
381
<br>
[host01:21865] [[INVALID],INVALID] ORTE_ERROR_LOG: Unable to start a
<br>
daemon on the local node in file
<br>
../../../../../orte/mca/ess/singleton/ess_singleton_module.c at line
<br>
143
<br>
[host01:21865] [[INVALID],INVALID] ORTE_ERROR_LOG: Unable to start a
<br>
daemon on the local node in file ../../orte/runtime/orte_init.c at
<br>
line 132
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
&nbsp;&nbsp;--&gt; Returned value Unable to start a daemon on the local node (-128)
<br>
instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
It looks like MPI_INIT failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during MPI_INIT; some of which are due to configuration or environment
<br>
problems.  This failure appears to be an internal failure; here's some
<br>
additional information (which may only be relevant to an Open MPI
<br>
developer):
<br>
<p>&nbsp;&nbsp;ompi_mpi_init: orte_init failed
<br>
&nbsp;&nbsp;--&gt; Returned &quot;Unable to start a daemon on the local node&quot; (-128)
<br>
instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[host01:21865] Abort before MPI_INIT completed successfully; not able
<br>
to guarantee that all other processes were killed!
<br>
<p><p>Any ideas on this?
<br>
<p>Thanks,
<br>
Grzegorz Maj
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13496.php">Ralph Castain: "Re: [OMPI users] MPI_Init failing in singleton"</a>
<li><strong>Previous message:</strong> <a href="13494.php">Jeff Squyres: "Re: [OMPI users] Sending an objects vector via MPI C++"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13496.php">Ralph Castain: "Re: [OMPI users] MPI_Init failing in singleton"</a>
<li><strong>Reply:</strong> <a href="13496.php">Ralph Castain: "Re: [OMPI users] MPI_Init failing in singleton"</a>
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
