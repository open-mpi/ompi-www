<?
$subject_val = "Re: [OMPI users] OpenMPI 1.3 and SGE 6.2u1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 19 11:32:33 2009" -->
<!-- isoreceived="20090319153233" -->
<!-- sent="Thu, 19 Mar 2009 16:32:16 +0100" -->
<!-- isosent="20090319153216" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.3 and SGE 6.2u1" -->
<!-- id="9D107E21-E673-4332-B7BF-44C02218339F_at_staff.uni-marburg.de" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="8F77913624F7524AACD2A92EAF3BFA5402651BA4D8_at_SJMEMXMBS11.stjude.sjcrh.local" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.3 and SGE 6.2u1<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-19 11:32:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8518.php">Malone, Scott: "Re: [OMPI users] OpenMPI 1.3 and SGE 6.2u1"</a>
<li><strong>Previous message:</strong> <a href="8516.php">Tim Campbell: "[OMPI users] v1.3 on Mac OS X with PGI 8.0"</a>
<li><strong>In reply to:</strong> <a href="8515.php">Malone, Scott: "[OMPI users] OpenMPI 1.3 and SGE 6.2u1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8518.php">Malone, Scott: "Re: [OMPI users] OpenMPI 1.3 and SGE 6.2u1"</a>
<li><strong>Reply:</strong> <a href="8518.php">Malone, Scott: "Re: [OMPI users] OpenMPI 1.3 and SGE 6.2u1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 19.03.2009 um 16:07 schrieb Malone, Scott:
<br>
<p><span class="quotelev1">&gt; I am having two problem with the integration of OpenMPI 1.3 and SGE  
</span><br>
<span class="quotelev1">&gt; 6.2u1, which we are new with both.  The troubles are getting jobs  
</span><br>
<span class="quotelev1">&gt; to suspend/resume and collect cpu time correctly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For suspend/resume I have added the following to my mpirun command:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --mca orte_forward_job_control 1 --mca plm_rsh_daemonize_qrsh 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
why? In 1.3 the orted is already daemonizing because of a bug and I  
<br>
only found that it's necessary for the notify feature to daemonize  
<br>
the orted.
<br>
<p><span class="quotelev1">&gt;  and adjusted the suspend_method for the queue that it&#146;s running  
</span><br>
<span class="quotelev1">&gt; in.  I have not gotten it to place any process into the T state.   
</span><br>
<span class="quotelev1">&gt; Although this is not a huge problem, I hope to have this working in  
</span><br>
<span class="quotelev1">&gt; the future.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My main problem is getting the cpu time correct.  On a multiple cpu  
</span><br>
<span class="quotelev1">&gt; job only the master nodes shows  the cpu time correct for that  
</span><br>
<span class="quotelev1">&gt; process, the others are very short and not sure what they are  
</span><br>
<span class="quotelev1">&gt; measuring. (I believe startup time).  Here&#146;s and example:
</span><br>
<span class="quotelev1">&gt;
</span><br>
When the orted daemonize, they are no longer bound to the  
<br>
sge_shephered. As a result of this, there is noone tracking their  
<br>
accounting on the nodes. This will be fixed AFAIK in 1.3.2, so that  
<br>
the daemons are still bound to a running sge_shephered.
<br>
<p>If you need the -notify feature and corerct accouting, you will need  
<br>
to wait until the qrsh_starter in SGE is fixed not to exit when they  
<br>
receive a usr1/2.
<br>
<p>-- Reuti
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cpu          0.360
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cpu          0.480
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cpu          0.470
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cpu          0.490
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cpu          0.530
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cpu          0.470
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cpu          0.680
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cpu          464.305
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And from watching the runs that time is close to the wall clock  
</span><br>
<span class="quotelev1">&gt; time and match what I see for that single process.  Now I have  
</span><br>
<span class="quotelev1">&gt; gotten it to give what I believe are correct values, but I have to  
</span><br>
<span class="quotelev1">&gt; include --debug-daemons option to our mpirun command.  With that I  
</span><br>
<span class="quotelev1">&gt; get the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cpu          73.146
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cpu          72.982
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cpu          73.381
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cpu          73.142
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cpu          73.029
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cpu          73.183
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cpu          73.117
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cpu          73.265
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cpu          73.236
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have noticed that when I get the cpu time correctly I get qrsh  
</span><br>
<span class="quotelev1">&gt; process that startup (my understanding is that this is what starts  
</span><br>
<span class="quotelev1">&gt; the processes on the remote machines) and they stay running until  
</span><br>
<span class="quotelev1">&gt; the jobs is finished.  When I don&#146;t get the correct cpu time, I see  
</span><br>
<span class="quotelev1">&gt; the qrsh processes start on the master node, but die off once they  
</span><br>
<span class="quotelev1">&gt; start the process on the remote nodes.  The PE environment looks  
</span><br>
<span class="quotelev1">&gt; like the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; pe_name            orte
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; slots              560
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; user_lists         NONE
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; xuser_lists        NONE
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; start_proc_args    /bin/true
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; stop_proc_args     /bin/true
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; allocation_rule    $round_robin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; control_slaves     TRUE
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; job_is_first_task  FALSE
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; urgency_slots      min
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; accounting_summary FALSE
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please let me know if I can provide any more information to help  
</span><br>
<span class="quotelev1">&gt; figure this out.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Scott Malone
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Manager, High Performance Computing Facility
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Information Sciences - Research Informatics
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; St. Jude Children&#146;s Research Hospital
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 332 North Lauderdale
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Memphis, TN 38105
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 901.495.4947
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; scott.malone_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Email Disclaimer: www.stjude.org/emaildisclaimer
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
<li><strong>Next message:</strong> <a href="8518.php">Malone, Scott: "Re: [OMPI users] OpenMPI 1.3 and SGE 6.2u1"</a>
<li><strong>Previous message:</strong> <a href="8516.php">Tim Campbell: "[OMPI users] v1.3 on Mac OS X with PGI 8.0"</a>
<li><strong>In reply to:</strong> <a href="8515.php">Malone, Scott: "[OMPI users] OpenMPI 1.3 and SGE 6.2u1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8518.php">Malone, Scott: "Re: [OMPI users] OpenMPI 1.3 and SGE 6.2u1"</a>
<li><strong>Reply:</strong> <a href="8518.php">Malone, Scott: "Re: [OMPI users] OpenMPI 1.3 and SGE 6.2u1"</a>
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
