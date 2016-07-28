<?
$subject_val = "Re: [OMPI users] MPI_Init failing in singleton";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  7 09:53:30 2010" -->
<!-- isoreceived="20100707135330" -->
<!-- sent="Wed, 7 Jul 2010 07:53:20 -0600" -->
<!-- isosent="20100707135320" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Init failing in singleton" -->
<!-- id="EBD16214-DF86-471F-9159-56EE97B4A5E6_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTilKw5kiEtI2kdW53du_gdsjWw2ti21204nOfU5j_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Init failing in singleton<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-07 09:53:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13497.php">Ralph Castain: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<li><strong>Previous message:</strong> <a href="13495.php">Grzegorz Maj: "[OMPI users] MPI_Init failing in singleton"</a>
<li><strong>In reply to:</strong> <a href="13495.php">Grzegorz Maj: "[OMPI users] MPI_Init failing in singleton"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13503.php">Grzegorz Maj: "Re: [OMPI users] MPI_Init failing in singleton"</a>
<li><strong>Reply:</strong> <a href="13503.php">Grzegorz Maj: "Re: [OMPI users] MPI_Init failing in singleton"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Check your path and ld_library_path- looks like you are picking up some stale binary for orted and/or stale libraries (perhaps getting the default OMPI instead of 1.4.2) on the machine where it fails.
<br>
<p>On Jul 7, 2010, at 7:44 AM, Grzegorz Maj wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I was trying to run some MPI processes as a singletons. On some of the
</span><br>
<span class="quotelev1">&gt; machines they crash on MPI_Init. I use exactly the same binaries of my
</span><br>
<span class="quotelev1">&gt; application and the same installation of openmpi 1.4.2 on two machines
</span><br>
<span class="quotelev1">&gt; and it works on one of them and fails on the other one. This is the
</span><br>
<span class="quotelev1">&gt; command and its output (test is a simple application calling only
</span><br>
<span class="quotelev1">&gt; MPI_Init and MPI_Finalize):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=/home/gmaj/openmpi/lib ./test
</span><br>
<span class="quotelev1">&gt; [host01:21866] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev1">&gt; ../../../../../orte/mca/ess/hnp/ess_hnp_module.c at line 161
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  orte_plm_base_select failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned value Not found (-13) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [host01:21866] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev1">&gt; ../../orte/runtime/orte_init.c at line 132
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  orte_ess_set_name failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned value Not found (-13) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [host01:21866] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev1">&gt; ../../orte/orted/orted_main.c at line 323
</span><br>
<span class="quotelev1">&gt; [host01:21865] [[INVALID],INVALID] ORTE_ERROR_LOG: Unable to start a
</span><br>
<span class="quotelev1">&gt; daemon on the local node in file
</span><br>
<span class="quotelev1">&gt; ../../../../../orte/mca/ess/singleton/ess_singleton_module.c at line
</span><br>
<span class="quotelev1">&gt; 381
</span><br>
<span class="quotelev1">&gt; [host01:21865] [[INVALID],INVALID] ORTE_ERROR_LOG: Unable to start a
</span><br>
<span class="quotelev1">&gt; daemon on the local node in file
</span><br>
<span class="quotelev1">&gt; ../../../../../orte/mca/ess/singleton/ess_singleton_module.c at line
</span><br>
<span class="quotelev1">&gt; 143
</span><br>
<span class="quotelev1">&gt; [host01:21865] [[INVALID],INVALID] ORTE_ERROR_LOG: Unable to start a
</span><br>
<span class="quotelev1">&gt; daemon on the local node in file ../../orte/runtime/orte_init.c at
</span><br>
<span class="quotelev1">&gt; line 132
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  orte_ess_set_name failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned value Unable to start a daemon on the local node (-128)
</span><br>
<span class="quotelev1">&gt; instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev1">&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt; developer):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  ompi_mpi_init: orte_init failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned &quot;Unable to start a daemon on the local node&quot; (-128)
</span><br>
<span class="quotelev1">&gt; instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; [host01:21865] Abort before MPI_INIT completed successfully; not able
</span><br>
<span class="quotelev1">&gt; to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any ideas on this?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Grzegorz Maj
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13497.php">Ralph Castain: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<li><strong>Previous message:</strong> <a href="13495.php">Grzegorz Maj: "[OMPI users] MPI_Init failing in singleton"</a>
<li><strong>In reply to:</strong> <a href="13495.php">Grzegorz Maj: "[OMPI users] MPI_Init failing in singleton"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13503.php">Grzegorz Maj: "Re: [OMPI users] MPI_Init failing in singleton"</a>
<li><strong>Reply:</strong> <a href="13503.php">Grzegorz Maj: "Re: [OMPI users] MPI_Init failing in singleton"</a>
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
