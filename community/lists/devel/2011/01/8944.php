<?
$subject_val = "Re: [OMPI devel] OMPI-MIGRATE error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 31 06:47:55 2011" -->
<!-- isoreceived="20110131114755" -->
<!-- sent="Mon, 31 Jan 2011 12:47:48 +0100" -->
<!-- isosent="20110131114748" -->
<!-- name="Hugo Meyer" -->
<!-- email="meyer.hugo_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI-MIGRATE error" -->
<!-- id="AANLkTin_LBV_FnEsxoxiR7JyL0+vu_bQw888RdyjzWfR_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTim5faFU77vFnrdZFxnw=Mh_mwmwT00s0KbKUQ2G_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OMPI-MIGRATE error<br>
<strong>From:</strong> Hugo Meyer (<em>meyer.hugo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-31 06:47:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8945.php">Joshua Hursey: "Re: [OMPI devel] OMPI-MIGRATE error"</a>
<li><strong>Previous message:</strong> <a href="8943.php">Shamis, Pavel: "Re: [OMPI devel] OFED question"</a>
<li><strong>In reply to:</strong> <a href="8942.php">Hugo Meyer: "Re: [OMPI devel] OMPI-MIGRATE error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8945.php">Joshua Hursey: "Re: [OMPI devel] OMPI-MIGRATE error"</a>
<li><strong>Reply:</strong> <a href="8945.php">Joshua Hursey: "Re: [OMPI devel] OMPI-MIGRATE error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Joshua.
<br>
<p>I've tried the migration again, and i get the next (running process where
<br>
mpirun is running):
<br>
<p>Terminal 1:
<br>
<p>*[hmeyer_at_clus9 whoami]$
<br>
/home/hmeyer/desarrollo/ompi-code/binarios/bin/mpirun -np 2 -am
<br>
ft-enable-cr-recovery --mca orte_base_help_aggregate 0 ./whoami 10 10*
<br>
*Antes de MPI_Init*
<br>
*Antes de MPI_Init*
<br>
*--------------------------------------------------------------------------*
<br>
*Warning: Could not find any processes to migrate on the nodes specified.*
<br>
*         You provided the following:*
<br>
*Nodes: node9*
<br>
*Procs: (null)*
<br>
*--------------------------------------------------------------------------*
<br>
*Soy el n&#250;mero 1 (100000000)*
<br>
*Terminando, una instrucci&#243;n antes del finalize*
<br>
*Soy el n&#250;mero 0 (100000000)*
<br>
*Terminando, una instrucci&#243;n antes del finalize*
<br>
<p><p>Terminal 2:
<br>
<p>*[hmeyer_at_clus9 build]$
<br>
/home/hmeyer/desarrollo/ompi-code/binarios/bin/ompi-migrate -x node9 -t
<br>
node3 11724*
<br>
*--------------------------------------------------------------------------*
<br>
*Error: The Job identified by PID (11724) was not able to migrate processes
<br>
in this*
<br>
*       job. This could be caused by any of the following:*
<br>
*       - Invalid node or rank specified*
<br>
*       - No processes on the indicated node can by migrated*
<br>
*       - Process migration was not enabled for this job. Make sure to
<br>
indicate*
<br>
*         the proper AMCA file: &quot;-am ft-enable-cr-recovery&quot;.*
<br>
*--------------------------------------------------------------------------*
<br>
<p>Then i try another way, and i get the next:
<br>
<p>Terminal 1:
<br>
<p>*[hmeyer_at_clus9 whoami]$
<br>
/home/hmeyer/desarrollo/ompi-code/binarios/bin/mpirun -np 3 -am
<br>
ft-enable-cr-recovery ./whoami 10 10*
<br>
*Antes de MPI_Init*
<br>
*Antes de MPI_Init*
<br>
*Antes de MPI_Init*
<br>
*--------------------------------------------------------------------------*
<br>
*Notice: A migration of this job has been requested.*
<br>
*        The processes below will be migrated.*
<br>
*        Please standby.*
<br>
* **[[40382,1],1] Rank 1 on Node clus9*
<br>
*
<br>
*
<br>
*--------------------------------------------------------------------------*
<br>
*--------------------------------------------------------------------------*
<br>
*Error: The process below has failed. There is no checkpoint available for*
<br>
*       this job, so we are terminating the application since automatic*
<br>
*       recovery cannot occur.*
<br>
*Internal Name: [[40382,1],1]*
<br>
*MCW Rank: 1*
<br>
*
<br>
*
<br>
*--------------------------------------------------------------------------*
<br>
*Soy el n&#250;mero 0 (100000000)*
<br>
*Terminando, una instrucci&#243;n antes del finalize*
<br>
*Soy el n&#250;mero 2 (100000000)*
<br>
*Terminando, una instrucci&#243;n antes del finalize*
<br>
*
<br>
*
<br>
<p>Terminal 2:
<br>
<p>*[hmeyer_at_clus9 build]$
<br>
/home/hmeyer/desarrollo/ompi-code/binarios/bin/ompi-migrate -r 1 -t node3
<br>
11784*
<br>
*[clus9:11795] *** Process received signal ****
<br>
*[clus9:11795] Signal: Segmentation fault (11)*
<br>
*[clus9:11795] Signal code: Address not mapped (1)*
<br>
*[clus9:11795] Failing at address: (nil)*
<br>
*[clus9:11795] [ 0] /lib64/libpthread.so.0 [0x2aaaac0b9d40]*
<br>
*[clus9:11795] *** End of error message ****
<br>
*Segmentation fault*
<br>
*
<br>
*
<br>
<p>I'm using the ompi-migrate command in the right way? or i am missing
<br>
something? Because the first attempt didn't find any process.
<br>
<p>Best Regards.
<br>
<p>Hugo Meyer
<br>
<p><p>2011/1/28 Hugo Meyer &lt;meyer.hugo_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Thanks to you Joshua.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I will try the procedure with this modifications and i will let you know
</span><br>
<span class="quotelev1">&gt; how it goes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best Regards.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hugo Meyer
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2011/1/27 Joshua Hursey &lt;jjhursey_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I believe that this is now fixed on the trunk. All the details are in the
</span><br>
<span class="quotelev2">&gt;&gt; commit message:
</span><br>
<span class="quotelev2">&gt;&gt;  <a href="https://svn.open-mpi.org/trac/ompi/changeset/24317">https://svn.open-mpi.org/trac/ompi/changeset/24317</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In my testing yesterday, I did not test the scenario where the node with
</span><br>
<span class="quotelev2">&gt;&gt; mpirun also contains processes (the test cluster I was using does not by
</span><br>
<span class="quotelev2">&gt;&gt; default run this way). So I was able to reproduce by running on a single
</span><br>
<span class="quotelev2">&gt;&gt; node. There were a couple bugs that emerged that are fixed in the commit.
</span><br>
<span class="quotelev2">&gt;&gt; The two bugs that were hurting you were the TCP socket cleanup (which caused
</span><br>
<span class="quotelev2">&gt;&gt; the looping of the automatic recovery), and the incorrect accounting of
</span><br>
<span class="quotelev2">&gt;&gt; local process termination (which caused the modex errors).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Let me know if that fixes the problems that you were seeing.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for the bug report and your patience while I pursued a fix.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- Josh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 27, 2011, at 11:28 AM, Hugo Meyer wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hi Josh.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Thanks for your reply. I'll tell you what i'm getting now from the
</span><br>
<span class="quotelev2">&gt;&gt; executions in the next lines.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; When i run without doing a checkpoint i get this output, and the process
</span><br>
<span class="quotelev2">&gt;&gt; don' finish:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [hmeyer_at_clus9 whoami]$
</span><br>
<span class="quotelev2">&gt;&gt; /home/hmeyer/desarrollo/ompi-code/binarios/bin/mpirun -np 2 -am
</span><br>
<span class="quotelev2">&gt;&gt; ft-enable-cr-recovery ./whoami 10 10
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Antes de MPI_Init
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Antes de MPI_Init
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [clus9:04985] [[41167,0],0] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../orte/mca/errmgr/hnp/errmgr_hnp_crmig.c at line 287
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [clus9:04985] [[41167,0],0] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../orte/mca/errmgr/hnp/errmgr_hnp_crmig.c at line 287
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Soy el n&#250;mero 1 (100000000)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Terminando, una instrucci&#243;n antes del finalize
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Soy el n&#250;mero 0 (100000000)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Terminando, una instrucci&#243;n antes del finalize
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Error: The process below has failed. There is no checkpoint available
</span><br>
<span class="quotelev2">&gt;&gt; for
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        this job, so we are terminating the application since automatic
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        recovery cannot occur.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Internal Name: [[41167,1],0]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; MCW Rank: 0
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [clus9:04985] 1 more process has sent help message
</span><br>
<span class="quotelev2">&gt;&gt; help-orte-errmgr-hnp.txt / autor_failed_to_recover_proc
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [clus9:04985] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see
</span><br>
<span class="quotelev2">&gt;&gt; all help / error messages
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; If i make a checkpoint in another terminal of the mpirun process, during
</span><br>
<span class="quotelev2">&gt;&gt; the execution, i get this output:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [clus9:06105] [[42095,0],0] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../orte/mca/errmgr/hnp/errmgr_hnp_crmig.c at line 287
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [clus9:06105] [[42095,0],0] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../orte/mca/errmgr/hnp/errmgr_hnp_crmig.c at line 287
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [clus9:06107] [[42095,1],1] ORTE_ERROR_LOG: Data unpack would read past
</span><br>
<span class="quotelev2">&gt;&gt; end of buffer in file ../../../../orte/mca/grpcomm/base/grpcomm_base_modex.c
</span><br>
<span class="quotelev2">&gt;&gt; at line 350
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [clus9:06107] [[42095,1],1] ORTE_ERROR_LOG: Data unpack would read past
</span><br>
<span class="quotelev2">&gt;&gt; end of buffer in file
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../orte/mca/grpcomm/bad/grpcomm_bad_module.c at line 323
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [clus9:06107] pml:ob1: ft_event(Restart): Failed orte_grpcomm.modex() =
</span><br>
<span class="quotelev2">&gt;&gt; -26
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [clus9:06106] [[42095,1],0] ORTE_ERROR_LOG: Data unpack would read past
</span><br>
<span class="quotelev2">&gt;&gt; end of buffer in file ../../../../orte/mca/grpcomm/base/grpcomm_base_modex.c
</span><br>
<span class="quotelev2">&gt;&gt; at line 350
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [clus9:06106] [[42095,1],0] ORTE_ERROR_LOG: Data unpack would read past
</span><br>
<span class="quotelev2">&gt;&gt; end of buffer in file
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../orte/mca/grpcomm/bad/grpcomm_bad_module.c at line 323
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [clus9:06106] pml:ob1: ft_event(Restart): Failed orte_grpcomm.modex() =
</span><br>
<span class="quotelev2">&gt;&gt; -26
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Notice: The job has been successfully recovered from the
</span><br>
<span class="quotelev3">&gt;&gt; &gt;         last checkpoint.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Soy el n&#250;mero 1 (100000000)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Terminando, una instrucci&#243;n antes del finalize
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Soy el n&#250;mero 0 (100000000)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Terminando, una instrucci&#243;n antes del finalize
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [clus9:06105] 1 more process has sent help message
</span><br>
<span class="quotelev2">&gt;&gt; help-orte-errmgr-hnp.txt / autor_recovering_job
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [clus9:06105] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see
</span><br>
<span class="quotelev2">&gt;&gt; all help / error messages
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [clus9:06105] [[42095,0],0] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../orte/mca/errmgr/hnp/errmgr_hnp_crmig.c at line 287
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [clus9:06105] [[42095,0],0] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../orte/mca/errmgr/hnp/errmgr_hnp_crmig.c at line 287
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [clus9:06107] [[42095,1],1] ORTE_ERROR_LOG: Data unpack would read past
</span><br>
<span class="quotelev2">&gt;&gt; end of buffer in file ../../../../orte/mca/grpcomm/base/grpcomm_base_modex.c
</span><br>
<span class="quotelev2">&gt;&gt; at line 350
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [clus9:06107] [[42095,1],1] ORTE_ERROR_LOG: Data unpack would read past
</span><br>
<span class="quotelev2">&gt;&gt; end of buffer in file
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../orte/mca/grpcomm/bad/grpcomm_bad_module.c at line 323
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [clus9:06107] pml:ob1: ft_event(Restart): Failed orte_grpcomm.modex() =
</span><br>
<span class="quotelev2">&gt;&gt; -26
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [clus9:06106] [[42095,1],0] ORTE_ERROR_LOG: Data unpack would read past
</span><br>
<span class="quotelev2">&gt;&gt; end of buffer in file ../../../../orte/mca/grpcomm/base/grpcomm_base_modex.c
</span><br>
<span class="quotelev2">&gt;&gt; at line 350
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [clus9:06106] [[42095,1],0] ORTE_ERROR_LOG: Data unpack would read past
</span><br>
<span class="quotelev2">&gt;&gt; end of buffer in file
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../orte/mca/grpcomm/bad/grpcomm_bad_module.c at line 323
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [clus9:06106] pml:ob1: ft_event(Restart): Failed orte_grpcomm.modex() =
</span><br>
<span class="quotelev2">&gt;&gt; -26
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [clus9:06105] 1 more process has sent help message
</span><br>
<span class="quotelev2">&gt;&gt; help-orte-errmgr-hnp.txt / autor_recovery_complete
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Soy el n&#250;mero 0 (100000000)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Terminando, una instrucci&#243;n antes del finalize
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Soy el n&#250;mero 1 (100000000)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Terminando, una instrucci&#243;n antes del finalize
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [clus9:06105] 1 more process has sent help message
</span><br>
<span class="quotelev2">&gt;&gt; help-orte-errmgr-hnp.txt / autor_recovering_job
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [clus9:06105] [[42095,0],0] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../orte/mca/errmgr/hnp/errmgr_hnp_crmig.c at line 287
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [clus9:06105] [[42095,0],0] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../orte/mca/errmgr/hnp/errmgr_hnp_crmig.c at line 287
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [clus9:06107] [[42095,1],1] ORTE_ERROR_LOG: Data unpack would read past
</span><br>
<span class="quotelev2">&gt;&gt; end of buffer in file ../../../../orte/mca/grpcomm/base/grpcomm_base_modex.c
</span><br>
<span class="quotelev2">&gt;&gt; at line 350
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [clus9:06107] [[42095,1],1] ORTE_ERROR_LOG: Data unpack would read past
</span><br>
<span class="quotelev2">&gt;&gt; end of buffer in file
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../orte/mca/grpcomm/bad/grpcomm_bad_module.c at line 323
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [clus9:06106] [[42095,1],0] ORTE_ERROR_LOG: Data unpack would read past
</span><br>
<span class="quotelev2">&gt;&gt; end of buffer in file ../../../../orte/mca/grpcomm/base/grpcomm_base_modex.c
</span><br>
<span class="quotelev2">&gt;&gt; at line 350
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [clus9:06106] [[42095,1],0] ORTE_ERROR_LOG: Data unpack would read past
</span><br>
<span class="quotelev2">&gt;&gt; end of buffer in file
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../orte/mca/grpcomm/bad/grpcomm_bad_module.c at line 323
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [clus9:06106] pml:ob1: ft_event(Restart): Failed orte_grpcomm.modex() =
</span><br>
<span class="quotelev2">&gt;&gt; -26
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [clus9:06107] pml:ob1: ft_event(Restart): Failed orte_grpcomm.modex() =
</span><br>
<span class="quotelev2">&gt;&gt; -26
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; As you can see, it keeps looping on the recover. Then when i try to
</span><br>
<span class="quotelev2">&gt;&gt; migrate this processes using ompi-migrate, i get this:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [hmeyer_at_clus9 ~]$
</span><br>
<span class="quotelev2">&gt;&gt; /home/hmeyer/desarrollo/ompi-code/binarios/bin/ompi-migrate -x node9 -t
</span><br>
<span class="quotelev2">&gt;&gt; node3 18082
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Error: The Job identified by PID (18082) was not able to migrate
</span><br>
<span class="quotelev2">&gt;&gt; processes in this
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        job. This could be caused by any of the following:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        - Invalid node or rank specified
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        - No processes on the indicated node can by migrated
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        - Process migration was not enabled for this job. Make sure to
</span><br>
<span class="quotelev2">&gt;&gt; indicate
</span><br>
<span class="quotelev3">&gt;&gt; &gt;          the proper AMCA file: &quot;-am ft-enable-cr-recovery&quot;.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt; &gt; But, in the terminal where is running the application i get this:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [hmeyer_at_clus9 whoami]$
</span><br>
<span class="quotelev2">&gt;&gt; /home/hmeyer/desarrollo/ompi-code/binarios/bin/mpirun -np 2 -am
</span><br>
<span class="quotelev2">&gt;&gt; ft-enable-cr-recovery ./whoami 10 10
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Antes de MPI_Init
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Antes de MPI_Init
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [clus9:18082] [[62740,0],0] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../orte/mca/errmgr/hnp/errmgr_hnp_crmig.c at line 287
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [clus9:18082] [[62740,0],0] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../orte/mca/errmgr/hnp/errmgr_hnp_crmig.c at line 287
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Warning: Could not find any processes to migrate on the nodes specified.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;          You provided the following:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Nodes: node9
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Procs: (null)
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Notice: The processes have been successfully migrated to/from the
</span><br>
<span class="quotelev2">&gt;&gt; specified
</span><br>
<span class="quotelev3">&gt;&gt; &gt;         machines.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Soy el n&#250;mero 1 (100000000)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Terminando, una instrucci&#243;n antes del finalize
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Soy el n&#250;mero 0 (100000000)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Terminando, una instrucci&#243;n antes del finalize
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Error: The process below has failed. There is no checkpoint available
</span><br>
<span class="quotelev2">&gt;&gt; for
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        this job, so we are terminating the application since automatic
</span><br>
<span class="quotelev3">&gt;&gt; &gt;        recovery cannot occur.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Internal Name: [[62740,1],0]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; MCW Rank: 0
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [clus9:18082] 1 more process has sent help message
</span><br>
<span class="quotelev2">&gt;&gt; help-orte-errmgr-hnp.txt / autor_failed_to_recover_proc
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [clus9:18082] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see
</span><br>
<span class="quotelev2">&gt;&gt; all help / error messages
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I asume that the orte_get_job_data_object is the problem, because it is
</span><br>
<span class="quotelev2">&gt;&gt; not obtaining the proper value.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; If you need more data, just let me know.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Best Regards.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hugo Meyer
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 2011/1/26 Joshua Hursey &lt;jjhursey_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I found a few more bugs after testing the C/R functionality this
</span><br>
<span class="quotelev2">&gt;&gt; morning. I just committed some more C/R fixes in r24306 (things are now
</span><br>
<span class="quotelev2">&gt;&gt; working correctly on my test cluster).
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  <a href="https://svn.open-mpi.org/trac/ompi/changeset/24306">https://svn.open-mpi.org/trac/ompi/changeset/24306</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; One thing I just noticed in your original email was that you are
</span><br>
<span class="quotelev2">&gt;&gt; specifying the wrong parameter for migration (it is different than the
</span><br>
<span class="quotelev2">&gt;&gt; standard C/R functionality for backwards compatibility reasons). You need to
</span><br>
<span class="quotelev2">&gt;&gt; use the 'ft-enable-cr-recovery' AMCA parameter:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  mpirun -np 2 -am ft-enable-cr-recovery ./whoami 10 10
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; If you still get the segmentation fault after upgrading to the current
</span><br>
<span class="quotelev2">&gt;&gt; trunk, can you send me a backtrace from the core file? That will help me
</span><br>
<span class="quotelev2">&gt;&gt; narrow down on the problem.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Josh
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Jan 26, 2011, at 8:40 AM, Hugo Meyer wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Josh.
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; The ompi-checkpoint with his restart now are working great, but the
</span><br>
<span class="quotelev2">&gt;&gt; same error persist with ompi-migrate. I've also tried using &quot;-r&quot;, but i get
</span><br>
<span class="quotelev2">&gt;&gt; the same error.
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Best regards.
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Hugo Meyer
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; 2011/1/26 Hugo Meyer &lt;meyer.hugo_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Thanks Josh.
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; I've already check te prelink and is set to &quot;no&quot;.
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; I'm going to try with the trunk head, and then i'll let you know how
</span><br>
<span class="quotelev2">&gt;&gt; it goes.
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Best regards.
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Hugo Meyer
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; 2011/1/25 Joshua Hursey &lt;jjhursey_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Can you try with the current trunk head (r24296)?
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; I just committed a fix for the C/R functionality in which restarts
</span><br>
<span class="quotelev2">&gt;&gt; were getting stuck. This will likely affect the migration functionality, but
</span><br>
<span class="quotelev2">&gt;&gt; I have not had an opportunity to test just yet.
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Another thing to check is that prelink is turned off on all of your
</span><br>
<span class="quotelev2">&gt;&gt; machines.
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;  <a href="https://upc-bugs.lbl.gov//blcr/doc/html/FAQ.html#prelink">https://upc-bugs.lbl.gov//blcr/doc/html/FAQ.html#prelink</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Let me know if the problem persists, and I'll dig into a bit more.
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Josh
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; On Jan 24, 2011, at 11:37 AM, Hugo Meyer wrote:
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt; Hello @ll
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt; I've got a problem when i try to use the ompi-migrate command.
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt; What i'm doing is execute for example the next application in one
</span><br>
<span class="quotelev2">&gt;&gt; node of a cluster (both process wil run on the same node):
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt; mpirun -np 2 -am ft-enable-cr ./whoami 10 10
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt; Then in the same node i try to migrate the processes to another
</span><br>
<span class="quotelev2">&gt;&gt; node:
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt; ompi-migrate -x node9 -t node3 14914
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt; And then i get this message:
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt; [clus9:15620] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt; [clus9:15620] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt; [clus9:15620] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt; [clus9:15620] Failing at address: (nil)
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt; [clus9:15620] [ 0] /lib64/libpthread.so.0 [0x2aaaac0b8d40]
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt; [clus9:15620] *** End of error message ***
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt; Segmentation fault
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt; I assume that maybe there is something wrong with the thread level,
</span><br>
<span class="quotelev2">&gt;&gt; but i have configured the open-mpi like this:
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt; ../configure --prefix=/home/hmeyer/desarrollo/ompi-code/binarios/
</span><br>
<span class="quotelev2">&gt;&gt; --enable-debug --enable-debug-symbols --enable-trace --with-ft=cr
</span><br>
<span class="quotelev2">&gt;&gt; --disable-ipv6 --enable-opal-multi-threads --enable-ft-thread
</span><br>
<span class="quotelev2">&gt;&gt; --without-hwloc --disable-vt --with-blcr=/soft/blcr-0.8.2/
</span><br>
<span class="quotelev2">&gt;&gt; --with-blcr-libdir=/soft/blcr-0.8.2/lib/
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt; The checkpoint and restart works fine, but when i restore an
</span><br>
<span class="quotelev2">&gt;&gt; application that has more than one process, this one is restored and
</span><br>
<span class="quotelev2">&gt;&gt; executed until the last line before MPI_FINALIZE(), but the processes never
</span><br>
<span class="quotelev2">&gt;&gt; finalize, i assume that they never call the MPI_FINALIZE(), but with one
</span><br>
<span class="quotelev2">&gt;&gt; process ompi-checkpoint and ompi-restart work great.
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt; Best regards.
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt; Hugo Meyer
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; ------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Joshua Hursey
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Joshua Hursey
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Joshua Hursey
</span><br>
<span class="quotelev2">&gt;&gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev2">&gt;&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8944/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8945.php">Joshua Hursey: "Re: [OMPI devel] OMPI-MIGRATE error"</a>
<li><strong>Previous message:</strong> <a href="8943.php">Shamis, Pavel: "Re: [OMPI devel] OFED question"</a>
<li><strong>In reply to:</strong> <a href="8942.php">Hugo Meyer: "Re: [OMPI devel] OMPI-MIGRATE error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8945.php">Joshua Hursey: "Re: [OMPI devel] OMPI-MIGRATE error"</a>
<li><strong>Reply:</strong> <a href="8945.php">Joshua Hursey: "Re: [OMPI devel] OMPI-MIGRATE error"</a>
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
