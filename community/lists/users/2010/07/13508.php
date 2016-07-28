<?
$subject_val = "Re: [OMPI users] MPI_Init failing in singleton";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  7 13:13:53 2010" -->
<!-- isoreceived="20100707171353" -->
<!-- sent="Wed, 7 Jul 2010 11:13:44 -0600" -->
<!-- isosent="20100707171344" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Init failing in singleton" -->
<!-- id="17C1E1A4-518A-4A78-9E4E-EEC878AA34BF_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTimn-yUGHN8WUd-bFqiUCREJ-kI2og18X1hYVlsI_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2010-07-07 13:13:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13509.php">Ralph Castain: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<li><strong>Previous message:</strong> <a href="13507.php">Jeff Squyres: "Re: [OMPI users] perhaps an openmpi bug, how best to identify?"</a>
<li><strong>In reply to:</strong> <a href="13503.php">Grzegorz Maj: "Re: [OMPI users] MPI_Init failing in singleton"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 7, 2010, at 10:12 AM, Grzegorz Maj wrote:
<br>
<p><span class="quotelev1">&gt; The problem was that orted couldn't find ssh nor rsh on that machine.
</span><br>
<span class="quotelev1">&gt; I've added my installation to PATH and it now works.
</span><br>
<span class="quotelev1">&gt; So one question: I will definitely not use MPI_Comm_spawn or any
</span><br>
<span class="quotelev1">&gt; related stuff. Do I need this ssh? If not, is there any way to say
</span><br>
<span class="quotelev1">&gt; orted that it shouldn't be looking for ssh because it won't need it?
</span><br>
<p>That's an interesting question - never faced that situation before. At the moment, the answer is &quot;no&quot;. However, I could conjure up a patch that lets the orted not select a plm module....
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Grzegorz Maj
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2010/7/7 Ralph Castain &lt;rhc_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt; Check your path and ld_library_path- looks like you are picking up some stale binary for orted and/or stale libraries (perhaps getting the default OMPI instead of 1.4.2) on the machine where it fails.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 7, 2010, at 7:44 AM, Grzegorz Maj wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I was trying to run some MPI processes as a singletons. On some of the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; machines they crash on MPI_Init. I use exactly the same binaries of my
</span><br>
<span class="quotelev3">&gt;&gt;&gt; application and the same installation of openmpi 1.4.2 on two machines
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and it works on one of them and fails on the other one. This is the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; command and its output (test is a simple application calling only
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Init and MPI_Finalize):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LD_LIBRARY_PATH=/home/gmaj/openmpi/lib ./test
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [host01:21866] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../../../../orte/mca/ess/hnp/ess_hnp_module.c at line 161
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  orte_plm_base_select failed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  --&gt; Returned value Not found (-13) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [host01:21866] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../orte/runtime/orte_init.c at line 132
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  orte_ess_set_name failed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  --&gt; Returned value Not found (-13) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [host01:21866] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../orte/orted/orted_main.c at line 323
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [host01:21865] [[INVALID],INVALID] ORTE_ERROR_LOG: Unable to start a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon on the local node in file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../../../../orte/mca/ess/singleton/ess_singleton_module.c at line
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 381
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [host01:21865] [[INVALID],INVALID] ORTE_ERROR_LOG: Unable to start a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon on the local node in file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../../../../orte/mca/ess/singleton/ess_singleton_module.c at line
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 143
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [host01:21865] [[INVALID],INVALID] ORTE_ERROR_LOG: Unable to start a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon on the local node in file ../../orte/runtime/orte_init.c at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; line 132
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  orte_ess_set_name failed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  --&gt; Returned value Unable to start a daemon on the local node (-128)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; instead of ORTE_SUCCESS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev3">&gt;&gt;&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; developer):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ompi_mpi_init: orte_init failed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  --&gt; Returned &quot;Unable to start a daemon on the local node&quot; (-128)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** before MPI was initialized
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [host01:21865] Abort before MPI_INIT completed successfully; not able
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to guarantee that all other processes were killed!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any ideas on this?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Grzegorz Maj
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="13509.php">Ralph Castain: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<li><strong>Previous message:</strong> <a href="13507.php">Jeff Squyres: "Re: [OMPI users] perhaps an openmpi bug, how best to identify?"</a>
<li><strong>In reply to:</strong> <a href="13503.php">Grzegorz Maj: "Re: [OMPI users] MPI_Init failing in singleton"</a>
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
