<?
$subject_val = "Re: [OMPI devel] OMPI-MIGRATE error";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 27 15:51:31 2011" -->
<!-- isoreceived="20110127205131" -->
<!-- sent="Thu, 27 Jan 2011 15:51:23 -0500" -->
<!-- isosent="20110127205123" -->
<!-- name="Joshua Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI-MIGRATE error" -->
<!-- id="370ABC0C-D0C4-44F3-BE1A-8BBEFE303322_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="AANLkTimbq5CbAoPSa1nqaih1X4-8CX+=WF_2q_Ry11Xr_at_mail.gmail.com" -->
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
<strong>From:</strong> Joshua Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-27 15:51:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8934.php">Barrett, Brian W: "[OMPI devel] OFED question"</a>
<li><strong>Previous message:</strong> <a href="8932.php">Hugo Meyer: "Re: [OMPI devel] OMPI-MIGRATE error"</a>
<li><strong>In reply to:</strong> <a href="8932.php">Hugo Meyer: "Re: [OMPI devel] OMPI-MIGRATE error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8942.php">Hugo Meyer: "Re: [OMPI devel] OMPI-MIGRATE error"</a>
<li><strong>Reply:</strong> <a href="8942.php">Hugo Meyer: "Re: [OMPI devel] OMPI-MIGRATE error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I believe that this is now fixed on the trunk. All the details are in the commit message:
<br>
&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/changeset/24317">https://svn.open-mpi.org/trac/ompi/changeset/24317</a>
<br>
<p>In my testing yesterday, I did not test the scenario where the node with mpirun also contains processes (the test cluster I was using does not by default run this way). So I was able to reproduce by running on a single node. There were a couple bugs that emerged that are fixed in the commit. The two bugs that were hurting you were the TCP socket cleanup (which caused the looping of the automatic recovery), and the incorrect accounting of local process termination (which caused the modex errors).
<br>
<p>Let me know if that fixes the problems that you were seeing.
<br>
<p>Thanks for the bug report and your patience while I pursued a fix.
<br>
<p>-- Josh
<br>
<p>On Jan 27, 2011, at 11:28 AM, Hugo Meyer wrote:
<br>
<p><span class="quotelev1">&gt; Hi Josh.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for your reply. I'll tell you what i'm getting now from the executions in the next lines.
</span><br>
<span class="quotelev1">&gt; When i run without doing a checkpoint i get this output, and the process don' finish:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [hmeyer_at_clus9 whoami]$ /home/hmeyer/desarrollo/ompi-code/binarios/bin/mpirun -np 2 -am ft-enable-cr-recovery ./whoami 10 10
</span><br>
<span class="quotelev1">&gt; Antes de MPI_Init
</span><br>
<span class="quotelev1">&gt; Antes de MPI_Init
</span><br>
<span class="quotelev1">&gt; [clus9:04985] [[41167,0],0] ORTE_ERROR_LOG: Error in file ../../../../../orte/mca/errmgr/hnp/errmgr_hnp_crmig.c at line 287
</span><br>
<span class="quotelev1">&gt; [clus9:04985] [[41167,0],0] ORTE_ERROR_LOG: Error in file ../../../../../orte/mca/errmgr/hnp/errmgr_hnp_crmig.c at line 287
</span><br>
<span class="quotelev1">&gt; Soy el n&#250;mero 1 (100000000)
</span><br>
<span class="quotelev1">&gt; Terminando, una instrucci&#243;n antes del finalize
</span><br>
<span class="quotelev1">&gt; Soy el n&#250;mero 0 (100000000)
</span><br>
<span class="quotelev1">&gt; Terminando, una instrucci&#243;n antes del finalize
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Error: The process below has failed. There is no checkpoint available for
</span><br>
<span class="quotelev1">&gt;        this job, so we are terminating the application since automatic
</span><br>
<span class="quotelev1">&gt;        recovery cannot occur.
</span><br>
<span class="quotelev1">&gt; Internal Name: [[41167,1],0]
</span><br>
<span class="quotelev1">&gt; MCW Rank: 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [clus9:04985] 1 more process has sent help message help-orte-errmgr-hnp.txt / autor_failed_to_recover_proc
</span><br>
<span class="quotelev1">&gt; [clus9:04985] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If i make a checkpoint in another terminal of the mpirun process, during the execution, i get this output:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [clus9:06105] [[42095,0],0] ORTE_ERROR_LOG: Error in file ../../../../../orte/mca/errmgr/hnp/errmgr_hnp_crmig.c at line 287
</span><br>
<span class="quotelev1">&gt; [clus9:06105] [[42095,0],0] ORTE_ERROR_LOG: Error in file ../../../../../orte/mca/errmgr/hnp/errmgr_hnp_crmig.c at line 287
</span><br>
<span class="quotelev1">&gt; [clus9:06107] [[42095,1],1] ORTE_ERROR_LOG: Data unpack would read past end of buffer in file ../../../../orte/mca/grpcomm/base/grpcomm_base_modex.c at line 350
</span><br>
<span class="quotelev1">&gt; [clus9:06107] [[42095,1],1] ORTE_ERROR_LOG: Data unpack would read past end of buffer in file ../../../../../orte/mca/grpcomm/bad/grpcomm_bad_module.c at line 323
</span><br>
<span class="quotelev1">&gt; [clus9:06107] pml:ob1: ft_event(Restart): Failed orte_grpcomm.modex() = -26
</span><br>
<span class="quotelev1">&gt; [clus9:06106] [[42095,1],0] ORTE_ERROR_LOG: Data unpack would read past end of buffer in file ../../../../orte/mca/grpcomm/base/grpcomm_base_modex.c at line 350
</span><br>
<span class="quotelev1">&gt; [clus9:06106] [[42095,1],0] ORTE_ERROR_LOG: Data unpack would read past end of buffer in file ../../../../../orte/mca/grpcomm/bad/grpcomm_bad_module.c at line 323
</span><br>
<span class="quotelev1">&gt; [clus9:06106] pml:ob1: ft_event(Restart): Failed orte_grpcomm.modex() = -26
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Notice: The job has been successfully recovered from the 
</span><br>
<span class="quotelev1">&gt;         last checkpoint.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Soy el n&#250;mero 1 (100000000)
</span><br>
<span class="quotelev1">&gt; Terminando, una instrucci&#243;n antes del finalize
</span><br>
<span class="quotelev1">&gt; Soy el n&#250;mero 0 (100000000)
</span><br>
<span class="quotelev1">&gt; Terminando, una instrucci&#243;n antes del finalize
</span><br>
<span class="quotelev1">&gt; [clus9:06105] 1 more process has sent help message help-orte-errmgr-hnp.txt / autor_recovering_job
</span><br>
<span class="quotelev1">&gt; [clus9:06105] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
</span><br>
<span class="quotelev1">&gt; [clus9:06105] [[42095,0],0] ORTE_ERROR_LOG: Error in file ../../../../../orte/mca/errmgr/hnp/errmgr_hnp_crmig.c at line 287
</span><br>
<span class="quotelev1">&gt; [clus9:06105] [[42095,0],0] ORTE_ERROR_LOG: Error in file ../../../../../orte/mca/errmgr/hnp/errmgr_hnp_crmig.c at line 287
</span><br>
<span class="quotelev1">&gt; [clus9:06107] [[42095,1],1] ORTE_ERROR_LOG: Data unpack would read past end of buffer in file ../../../../orte/mca/grpcomm/base/grpcomm_base_modex.c at line 350
</span><br>
<span class="quotelev1">&gt; [clus9:06107] [[42095,1],1] ORTE_ERROR_LOG: Data unpack would read past end of buffer in file ../../../../../orte/mca/grpcomm/bad/grpcomm_bad_module.c at line 323
</span><br>
<span class="quotelev1">&gt; [clus9:06107] pml:ob1: ft_event(Restart): Failed orte_grpcomm.modex() = -26
</span><br>
<span class="quotelev1">&gt; [clus9:06106] [[42095,1],0] ORTE_ERROR_LOG: Data unpack would read past end of buffer in file ../../../../orte/mca/grpcomm/base/grpcomm_base_modex.c at line 350
</span><br>
<span class="quotelev1">&gt; [clus9:06106] [[42095,1],0] ORTE_ERROR_LOG: Data unpack would read past end of buffer in file ../../../../../orte/mca/grpcomm/bad/grpcomm_bad_module.c at line 323
</span><br>
<span class="quotelev1">&gt; [clus9:06106] pml:ob1: ft_event(Restart): Failed orte_grpcomm.modex() = -26
</span><br>
<span class="quotelev1">&gt; [clus9:06105] 1 more process has sent help message help-orte-errmgr-hnp.txt / autor_recovery_complete
</span><br>
<span class="quotelev1">&gt; Soy el n&#250;mero 0 (100000000)
</span><br>
<span class="quotelev1">&gt; Terminando, una instrucci&#243;n antes del finalize
</span><br>
<span class="quotelev1">&gt; Soy el n&#250;mero 1 (100000000)
</span><br>
<span class="quotelev1">&gt; Terminando, una instrucci&#243;n antes del finalize
</span><br>
<span class="quotelev1">&gt; [clus9:06105] 1 more process has sent help message help-orte-errmgr-hnp.txt / autor_recovering_job
</span><br>
<span class="quotelev1">&gt; [clus9:06105] [[42095,0],0] ORTE_ERROR_LOG: Error in file ../../../../../orte/mca/errmgr/hnp/errmgr_hnp_crmig.c at line 287
</span><br>
<span class="quotelev1">&gt; [clus9:06105] [[42095,0],0] ORTE_ERROR_LOG: Error in file ../../../../../orte/mca/errmgr/hnp/errmgr_hnp_crmig.c at line 287
</span><br>
<span class="quotelev1">&gt; [clus9:06107] [[42095,1],1] ORTE_ERROR_LOG: Data unpack would read past end of buffer in file ../../../../orte/mca/grpcomm/base/grpcomm_base_modex.c at line 350
</span><br>
<span class="quotelev1">&gt; [clus9:06107] [[42095,1],1] ORTE_ERROR_LOG: Data unpack would read past end of buffer in file ../../../../../orte/mca/grpcomm/bad/grpcomm_bad_module.c at line 323
</span><br>
<span class="quotelev1">&gt; [clus9:06106] [[42095,1],0] ORTE_ERROR_LOG: Data unpack would read past end of buffer in file ../../../../orte/mca/grpcomm/base/grpcomm_base_modex.c at line 350
</span><br>
<span class="quotelev1">&gt; [clus9:06106] [[42095,1],0] ORTE_ERROR_LOG: Data unpack would read past end of buffer in file ../../../../../orte/mca/grpcomm/bad/grpcomm_bad_module.c at line 323
</span><br>
<span class="quotelev1">&gt; [clus9:06106] pml:ob1: ft_event(Restart): Failed orte_grpcomm.modex() = -26
</span><br>
<span class="quotelev1">&gt; [clus9:06107] pml:ob1: ft_event(Restart): Failed orte_grpcomm.modex() = -26
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As you can see, it keeps looping on the recover. Then when i try to migrate this processes using ompi-migrate, i get this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [hmeyer_at_clus9 ~]$ /home/hmeyer/desarrollo/ompi-code/binarios/bin/ompi-migrate -x node9 -t node3 18082
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Error: The Job identified by PID (18082) was not able to migrate processes in this
</span><br>
<span class="quotelev1">&gt;        job. This could be caused by any of the following:
</span><br>
<span class="quotelev1">&gt;        - Invalid node or rank specified
</span><br>
<span class="quotelev1">&gt;        - No processes on the indicated node can by migrated
</span><br>
<span class="quotelev1">&gt;        - Process migration was not enabled for this job. Make sure to indicate
</span><br>
<span class="quotelev1">&gt;          the proper AMCA file: &quot;-am ft-enable-cr-recovery&quot;.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; But, in the terminal where is running the application i get this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [hmeyer_at_clus9 whoami]$ /home/hmeyer/desarrollo/ompi-code/binarios/bin/mpirun -np 2 -am ft-enable-cr-recovery ./whoami 10 10
</span><br>
<span class="quotelev1">&gt; Antes de MPI_Init
</span><br>
<span class="quotelev1">&gt; Antes de MPI_Init
</span><br>
<span class="quotelev1">&gt; [clus9:18082] [[62740,0],0] ORTE_ERROR_LOG: Error in file ../../../../../orte/mca/errmgr/hnp/errmgr_hnp_crmig.c at line 287
</span><br>
<span class="quotelev1">&gt; [clus9:18082] [[62740,0],0] ORTE_ERROR_LOG: Error in file ../../../../../orte/mca/errmgr/hnp/errmgr_hnp_crmig.c at line 287
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Warning: Could not find any processes to migrate on the nodes specified.
</span><br>
<span class="quotelev1">&gt;          You provided the following:
</span><br>
<span class="quotelev1">&gt; Nodes: node9
</span><br>
<span class="quotelev1">&gt; Procs: (null)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Notice: The processes have been successfully migrated to/from the specified
</span><br>
<span class="quotelev1">&gt;         machines.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Soy el n&#250;mero 1 (100000000)
</span><br>
<span class="quotelev1">&gt; Terminando, una instrucci&#243;n antes del finalize
</span><br>
<span class="quotelev1">&gt; Soy el n&#250;mero 0 (100000000)
</span><br>
<span class="quotelev1">&gt; Terminando, una instrucci&#243;n antes del finalize
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Error: The process below has failed. There is no checkpoint available for
</span><br>
<span class="quotelev1">&gt;        this job, so we are terminating the application since automatic
</span><br>
<span class="quotelev1">&gt;        recovery cannot occur.
</span><br>
<span class="quotelev1">&gt; Internal Name: [[62740,1],0]
</span><br>
<span class="quotelev1">&gt; MCW Rank: 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [clus9:18082] 1 more process has sent help message help-orte-errmgr-hnp.txt / autor_failed_to_recover_proc
</span><br>
<span class="quotelev1">&gt; [clus9:18082] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I asume that the orte_get_job_data_object is the problem, because it is not obtaining the proper value. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you need more data, just let me know.
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2011/1/26 Joshua Hursey &lt;jjhursey_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; I found a few more bugs after testing the C/R functionality this morning. I just committed some more C/R fixes in r24306 (things are now working correctly on my test cluster).
</span><br>
<span class="quotelev1">&gt;  <a href="https://svn.open-mpi.org/trac/ompi/changeset/24306">https://svn.open-mpi.org/trac/ompi/changeset/24306</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; One thing I just noticed in your original email was that you are specifying the wrong parameter for migration (it is different than the standard C/R functionality for backwards compatibility reasons). You need to use the 'ft-enable-cr-recovery' AMCA parameter:
</span><br>
<span class="quotelev1">&gt;  mpirun -np 2 -am ft-enable-cr-recovery ./whoami 10 10
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you still get the segmentation fault after upgrading to the current trunk, can you send me a backtrace from the core file? That will help me narrow down on the problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 26, 2011, at 8:40 AM, Hugo Meyer wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Josh.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The ompi-checkpoint with his restart now are working great, but the same error persist with ompi-migrate. I've also tried using &quot;-r&quot;, but i get the same error.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Best regards.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hugo Meyer
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2011/1/26 Hugo Meyer &lt;meyer.hugo_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks Josh.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I've already check te prelink and is set to &quot;no&quot;.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm going to try with the trunk head, and then i'll let you know how it goes.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Best regards.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hugo Meyer
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2011/1/25 Joshua Hursey &lt;jjhursey_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Can you try with the current trunk head (r24296)?
</span><br>
<span class="quotelev2">&gt; &gt; I just committed a fix for the C/R functionality in which restarts were getting stuck. This will likely affect the migration functionality, but I have not had an opportunity to test just yet.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Another thing to check is that prelink is turned off on all of your machines.
</span><br>
<span class="quotelev2">&gt; &gt;  <a href="https://upc-bugs.lbl.gov//blcr/doc/html/FAQ.html#prelink">https://upc-bugs.lbl.gov//blcr/doc/html/FAQ.html#prelink</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Let me know if the problem persists, and I'll dig into a bit more.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt; Josh
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jan 24, 2011, at 11:37 AM, Hugo Meyer wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hello @ll
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I've got a problem when i try to use the ompi-migrate command.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; What i'm doing is execute for example the next application in one node of a cluster (both process wil run on the same node):
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mpirun -np 2 -am ft-enable-cr ./whoami 10 10
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Then in the same node i try to migrate the processes to another node:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ompi-migrate -x node9 -t node3 14914
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; And then i get this message:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [clus9:15620] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [clus9:15620] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [clus9:15620] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [clus9:15620] Failing at address: (nil)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [clus9:15620] [ 0] /lib64/libpthread.so.0 [0x2aaaac0b8d40]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [clus9:15620] *** End of error message ***
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Segmentation fault
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I assume that maybe there is something wrong with the thread level, but i have configured the open-mpi like this:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ../configure --prefix=/home/hmeyer/desarrollo/ompi-code/binarios/ --enable-debug --enable-debug-symbols --enable-trace --with-ft=cr --disable-ipv6 --enable-opal-multi-threads --enable-ft-thread --without-hwloc --disable-vt --with-blcr=/soft/blcr-0.8.2/ --with-blcr-libdir=/soft/blcr-0.8.2/lib/
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The checkpoint and restart works fine, but when i restore an application that has more than one process, this one is restored and executed until the last line before MPI_FINALIZE(), but the processes never finalize, i assume that they never call the MPI_FINALIZE(), but with one process ompi-checkpoint and ompi-restart work great.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Best regards.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hugo Meyer
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; Joshua Hursey
</span><br>
<span class="quotelev2">&gt; &gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev2">&gt; &gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------
</span><br>
<span class="quotelev1">&gt; Joshua Hursey
</span><br>
<span class="quotelev1">&gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev1">&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev1">&gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p>------------------------------------
<br>
Joshua Hursey
<br>
Postdoctoral Research Associate
<br>
Oak Ridge National Laboratory
<br>
<a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8934.php">Barrett, Brian W: "[OMPI devel] OFED question"</a>
<li><strong>Previous message:</strong> <a href="8932.php">Hugo Meyer: "Re: [OMPI devel] OMPI-MIGRATE error"</a>
<li><strong>In reply to:</strong> <a href="8932.php">Hugo Meyer: "Re: [OMPI devel] OMPI-MIGRATE error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8942.php">Hugo Meyer: "Re: [OMPI devel] OMPI-MIGRATE error"</a>
<li><strong>Reply:</strong> <a href="8942.php">Hugo Meyer: "Re: [OMPI devel] OMPI-MIGRATE error"</a>
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
