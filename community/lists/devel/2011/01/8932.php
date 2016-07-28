<?
$subject_val = "Re: [OMPI devel] OMPI-MIGRATE error";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 27 11:28:25 2011" -->
<!-- isoreceived="20110127162825" -->
<!-- sent="Thu, 27 Jan 2011 17:28:18 +0100" -->
<!-- isosent="20110127162818" -->
<!-- name="Hugo Meyer" -->
<!-- email="meyer.hugo_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI-MIGRATE error" -->
<!-- id="AANLkTimbq5CbAoPSa1nqaih1X4-8CX+=WF_2q_Ry11Xr_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="28581CF4-E28D-4C92-9A83-FB4430963A6F_at_open-mpi.org" -->
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
<strong>Date:</strong> 2011-01-27 11:28:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8933.php">Joshua Hursey: "Re: [OMPI devel] OMPI-MIGRATE error"</a>
<li><strong>Previous message:</strong> <a href="8931.php">Joshua Hursey: "Re: [OMPI devel] OMPI-MIGRATE error"</a>
<li><strong>In reply to:</strong> <a href="8931.php">Joshua Hursey: "Re: [OMPI devel] OMPI-MIGRATE error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8933.php">Joshua Hursey: "Re: [OMPI devel] OMPI-MIGRATE error"</a>
<li><strong>Reply:</strong> <a href="8933.php">Joshua Hursey: "Re: [OMPI devel] OMPI-MIGRATE error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Josh.
<br>
<p>Thanks for your reply. I'll tell you what i'm getting now from the
<br>
executions in the next lines.
<br>
When i run without doing a checkpoint i get this output, and the process
<br>
don' finish:
<br>
<p>*[hmeyer_at_clus9 whoami]$
<br>
/home/hmeyer/desarrollo/ompi-code/binarios/bin/mpirun -np 2 -am
<br>
ft-enable-cr-recovery ./whoami 10 10*
<br>
*Antes de MPI_Init*
<br>
*Antes de MPI_Init*
<br>
*[clus9:04985] [[41167,0],0] ORTE_ERROR_LOG: Error in file
<br>
../../../../../orte/mca/errmgr/hnp/errmgr_hnp_crmig.c at line 287*
<br>
*[clus9:04985] [[41167,0],0] ORTE_ERROR_LOG: Error in file
<br>
../../../../../orte/mca/errmgr/hnp/errmgr_hnp_crmig.c at line 287*
<br>
*Soy el n&#250;mero 1 (100000000)*
<br>
*Terminando, una instrucci&#243;n antes del finalize*
<br>
*Soy el n&#250;mero 0 (100000000)*
<br>
*Terminando, una instrucci&#243;n antes del finalize*
<br>
*--------------------------------------------------------------------------*
<br>
*Error: The process below has failed. There is no checkpoint available for*
<br>
*       this job, so we are terminating the application since automatic*
<br>
*       recovery cannot occur.*
<br>
*Internal Name: [[41167,1],0]*
<br>
*MCW Rank: 0*
<br>
*
<br>
*
<br>
*--------------------------------------------------------------------------*
<br>
*[clus9:04985] 1 more process has sent help message help-orte-errmgr-hnp.txt
<br>
/ autor_failed_to_recover_proc*
<br>
*[clus9:04985] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all
<br>
help / error messages*
<br>
*
<br>
*
<br>
<p>If i make a checkpoint in another terminal of the mpirun process, during the
<br>
execution, i get this output:
<br>
<p>*[clus9:06105] [[42095,0],0] ORTE_ERROR_LOG: Error in file
<br>
../../../../../orte/mca/errmgr/hnp/errmgr_hnp_crmig.c at line 287*
<br>
*[clus9:06105] [[42095,0],0] ORTE_ERROR_LOG: Error in file
<br>
../../../../../orte/mca/errmgr/hnp/errmgr_hnp_crmig.c at line 287*
<br>
*[clus9:06107] [[42095,1],1] ORTE_ERROR_LOG: Data unpack would read past end
<br>
of buffer in file ../../../../orte/mca/grpcomm/base/grpcomm_base_modex.c at
<br>
line 350*
<br>
*[clus9:06107] [[42095,1],1] ORTE_ERROR_LOG: Data unpack would read past end
<br>
of buffer in file ../../../../../orte/mca/grpcomm/bad/grpcomm_bad_module.c
<br>
at line 323*
<br>
*[clus9:06107] pml:ob1: ft_event(Restart): Failed orte_grpcomm.modex() = -26
<br>
*
<br>
*[clus9:06106] [[42095,1],0] ORTE_ERROR_LOG: Data unpack would read past end
<br>
of buffer in file ../../../../orte/mca/grpcomm/base/grpcomm_base_modex.c at
<br>
line 350*
<br>
*[clus9:06106] [[42095,1],0] ORTE_ERROR_LOG: Data unpack would read past end
<br>
of buffer in file ../../../../../orte/mca/grpcomm/bad/grpcomm_bad_module.c
<br>
at line 323*
<br>
*[clus9:06106] pml:ob1: ft_event(Restart): Failed orte_grpcomm.modex() = -26
<br>
*
<br>
*--------------------------------------------------------------------------*
<br>
*Notice: The job has been successfully recovered from the *
<br>
*        last checkpoint.*
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
*[clus9:06105] 1 more process has sent help message help-orte-errmgr-hnp.txt
<br>
/ autor_recovering_job*
<br>
*[clus9:06105] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all
<br>
help / error messages*
<br>
*[clus9:06105] [[42095,0],0] ORTE_ERROR_LOG: Error in file
<br>
../../../../../orte/mca/errmgr/hnp/errmgr_hnp_crmig.c at line 287*
<br>
*[clus9:06105] [[42095,0],0] ORTE_ERROR_LOG: Error in file
<br>
../../../../../orte/mca/errmgr/hnp/errmgr_hnp_crmig.c at line 287*
<br>
*[clus9:06107] [[42095,1],1] ORTE_ERROR_LOG: Data unpack would read past end
<br>
of buffer in file ../../../../orte/mca/grpcomm/base/grpcomm_base_modex.c at
<br>
line 350*
<br>
*[clus9:06107] [[42095,1],1] ORTE_ERROR_LOG: Data unpack would read past end
<br>
of buffer in file ../../../../../orte/mca/grpcomm/bad/grpcomm_bad_module.c
<br>
at line 323*
<br>
*[clus9:06107] pml:ob1: ft_event(Restart): Failed orte_grpcomm.modex() = -26
<br>
*
<br>
*[clus9:06106] [[42095,1],0] ORTE_ERROR_LOG: Data unpack would read past end
<br>
of buffer in file ../../../../orte/mca/grpcomm/base/grpcomm_base_modex.c at
<br>
line 350*
<br>
*[clus9:06106] [[42095,1],0] ORTE_ERROR_LOG: Data unpack would read past end
<br>
of buffer in file ../../../../../orte/mca/grpcomm/bad/grpcomm_bad_module.c
<br>
at line 323*
<br>
*[clus9:06106] pml:ob1: ft_event(Restart): Failed orte_grpcomm.modex() = -26
<br>
*
<br>
*[clus9:06105] 1 more process has sent help message help-orte-errmgr-hnp.txt
<br>
/ autor_recovery_complete*
<br>
*Soy el n&#250;mero 0 (100000000)*
<br>
*Terminando, una instrucci&#243;n antes del finalize*
<br>
*Soy el n&#250;mero 1 (100000000)*
<br>
*Terminando, una instrucci&#243;n antes del finalize*
<br>
*[clus9:06105] 1 more process has sent help message help-orte-errmgr-hnp.txt
<br>
/ autor_recovering_job*
<br>
*[clus9:06105] [[42095,0],0] ORTE_ERROR_LOG: Error in file
<br>
../../../../../orte/mca/errmgr/hnp/errmgr_hnp_crmig.c at line 287*
<br>
*[clus9:06105] [[42095,0],0] ORTE_ERROR_LOG: Error in file
<br>
../../../../../orte/mca/errmgr/hnp/errmgr_hnp_crmig.c at line 287*
<br>
*[clus9:06107] [[42095,1],1] ORTE_ERROR_LOG: Data unpack would read past end
<br>
of buffer in file ../../../../orte/mca/grpcomm/base/grpcomm_base_modex.c at
<br>
line 350*
<br>
*[clus9:06107] [[42095,1],1] ORTE_ERROR_LOG: Data unpack would read past end
<br>
of buffer in file ../../../../../orte/mca/grpcomm/bad/grpcomm_bad_module.c
<br>
at line 323*
<br>
*[clus9:06106] [[42095,1],0] ORTE_ERROR_LOG: Data unpack would read past end
<br>
of buffer in file ../../../../orte/mca/grpcomm/base/grpcomm_base_modex.c at
<br>
line 350*
<br>
*[clus9:06106] [[42095,1],0] ORTE_ERROR_LOG: Data unpack would read past end
<br>
of buffer in file ../../../../../orte/mca/grpcomm/bad/grpcomm_bad_module.c
<br>
at line 323*
<br>
*[clus9:06106] pml:ob1: ft_event(Restart): Failed orte_grpcomm.modex() = -26
<br>
*
<br>
*[clus9:06107] pml:ob1: ft_event(Restart): Failed orte_grpcomm.modex() = -26
<br>
*
<br>
<p><p>As you can see, it keeps looping on the recover. Then when i try to migrate
<br>
this processes using ompi-migrate, i get this:
<br>
<p>*[hmeyer_at_clus9 ~]$
<br>
/home/hmeyer/desarrollo/ompi-code/binarios/bin/ompi-migrate -x node9 -t
<br>
node3 18082*
<br>
*--------------------------------------------------------------------------*
<br>
*Error: The Job identified by PID (18082) was not able to migrate processes
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
<p>But, in the terminal where is running the application i get this:
<br>
<p>[hmeyer_at_clus9 whoami]$ /home/hmeyer/desarrollo/ompi-code/binarios/bin/mpirun
<br>
-np 2 -am ft-enable-cr-recovery ./whoami 10 10
<br>
Antes de MPI_Init
<br>
Antes de MPI_Init
<br>
[clus9:18082] [[62740,0],0] ORTE_ERROR_LOG: Error in file
<br>
../../../../../orte/mca/errmgr/hnp/errmgr_hnp_crmig.c at line 287
<br>
[clus9:18082] [[62740,0],0] ORTE_ERROR_LOG: Error in file
<br>
../../../../../orte/mca/errmgr/hnp/errmgr_hnp_crmig.c at line 287
<br>
--------------------------------------------------------------------------
<br>
Warning: Could not find any processes to migrate on the nodes specified.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;You provided the following:
<br>
Nodes: node9
<br>
Procs: (null)
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
Notice: The processes have been successfully migrated to/from the specified
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;machines.
<br>
--------------------------------------------------------------------------
<br>
Soy el n&#250;mero 1 (100000000)
<br>
Terminando, una instrucci&#243;n antes del finalize
<br>
Soy el n&#250;mero 0 (100000000)
<br>
Terminando, una instrucci&#243;n antes del finalize
<br>
--------------------------------------------------------------------------
<br>
Error: The process below has failed. There is no checkpoint available for
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;this job, so we are terminating the application since automatic
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;recovery cannot occur.
<br>
Internal Name: [[62740,1],0]
<br>
MCW Rank: 0
<br>
<p>--------------------------------------------------------------------------
<br>
[clus9:18082] 1 more process has sent help message help-orte-errmgr-hnp.txt
<br>
/ autor_failed_to_recover_proc
<br>
[clus9:18082] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all
<br>
help / error messages
<br>
<p>I asume that the orte_get_job_data_object is the problem, because it is not
<br>
obtaining the proper value.
<br>
<p>If you need more data, just let me know.
<br>
<p>Best Regards.
<br>
<p>Hugo Meyer
<br>
<p><p><p><p>2011/1/26 Joshua Hursey &lt;jjhursey_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; I found a few more bugs after testing the C/R functionality this morning. I
</span><br>
<span class="quotelev1">&gt; just committed some more C/R fixes in r24306 (things are now working
</span><br>
<span class="quotelev1">&gt; correctly on my test cluster).
</span><br>
<span class="quotelev1">&gt;  <a href="https://svn.open-mpi.org/trac/ompi/changeset/24306">https://svn.open-mpi.org/trac/ompi/changeset/24306</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; One thing I just noticed in your original email was that you are specifying
</span><br>
<span class="quotelev1">&gt; the wrong parameter for migration (it is different than the standard C/R
</span><br>
<span class="quotelev1">&gt; functionality for backwards compatibility reasons). You need to use the
</span><br>
<span class="quotelev1">&gt; 'ft-enable-cr-recovery' AMCA parameter:
</span><br>
<span class="quotelev1">&gt;  mpirun -np 2 -am ft-enable-cr-recovery ./whoami 10 10
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you still get the segmentation fault after upgrading to the current
</span><br>
<span class="quotelev1">&gt; trunk, can you send me a backtrace from the core file? That will help me
</span><br>
<span class="quotelev1">&gt; narrow down on the problem.
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
<span class="quotelev2">&gt; &gt; The ompi-checkpoint with his restart now are working great, but the same
</span><br>
<span class="quotelev1">&gt; error persist with ompi-migrate. I've also tried using &quot;-r&quot;, but i get the
</span><br>
<span class="quotelev1">&gt; same error.
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
<span class="quotelev2">&gt; &gt; I'm going to try with the trunk head, and then i'll let you know how it
</span><br>
<span class="quotelev1">&gt; goes.
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
<span class="quotelev2">&gt; &gt; I just committed a fix for the C/R functionality in which restarts were
</span><br>
<span class="quotelev1">&gt; getting stuck. This will likely affect the migration functionality, but I
</span><br>
<span class="quotelev1">&gt; have not had an opportunity to test just yet.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Another thing to check is that prelink is turned off on all of your
</span><br>
<span class="quotelev1">&gt; machines.
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
<span class="quotelev3">&gt; &gt; &gt; What i'm doing is execute for example the next application in one node
</span><br>
<span class="quotelev1">&gt; of a cluster (both process wil run on the same node):
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
<span class="quotelev3">&gt; &gt; &gt; I assume that maybe there is something wrong with the thread level, but
</span><br>
<span class="quotelev1">&gt; i have configured the open-mpi like this:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ../configure --prefix=/home/hmeyer/desarrollo/ompi-code/binarios/
</span><br>
<span class="quotelev1">&gt; --enable-debug --enable-debug-symbols --enable-trace --with-ft=cr
</span><br>
<span class="quotelev1">&gt; --disable-ipv6 --enable-opal-multi-threads --enable-ft-thread
</span><br>
<span class="quotelev1">&gt; --without-hwloc --disable-vt --with-blcr=/soft/blcr-0.8.2/
</span><br>
<span class="quotelev1">&gt; --with-blcr-libdir=/soft/blcr-0.8.2/lib/
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The checkpoint and restart works fine, but when i restore an
</span><br>
<span class="quotelev1">&gt; application that has more than one process, this one is restored and
</span><br>
<span class="quotelev1">&gt; executed until the last line before MPI_FINALIZE(), but the processes never
</span><br>
<span class="quotelev1">&gt; finalize, i assume that they never call the MPI_FINALIZE(), but with one
</span><br>
<span class="quotelev1">&gt; process ompi-checkpoint and ompi-restart work great.
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8932/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8933.php">Joshua Hursey: "Re: [OMPI devel] OMPI-MIGRATE error"</a>
<li><strong>Previous message:</strong> <a href="8931.php">Joshua Hursey: "Re: [OMPI devel] OMPI-MIGRATE error"</a>
<li><strong>In reply to:</strong> <a href="8931.php">Joshua Hursey: "Re: [OMPI devel] OMPI-MIGRATE error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8933.php">Joshua Hursey: "Re: [OMPI devel] OMPI-MIGRATE error"</a>
<li><strong>Reply:</strong> <a href="8933.php">Joshua Hursey: "Re: [OMPI devel] OMPI-MIGRATE error"</a>
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
