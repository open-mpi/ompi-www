<?
$subject_val = "[OMPI users] OpenMPI 1.3 and SGE 6.2u1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 19 11:07:22 2009" -->
<!-- isoreceived="20090319150722" -->
<!-- sent="Thu, 19 Mar 2009 10:07:17 -0500" -->
<!-- isosent="20090319150717" -->
<!-- name="Malone, Scott" -->
<!-- email="Scott.Malone_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI 1.3 and SGE 6.2u1" -->
<!-- id="8F77913624F7524AACD2A92EAF3BFA5402651BA4D8_at_SJMEMXMBS11.stjude.sjcrh.local" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI 1.3 and SGE 6.2u1<br>
<strong>From:</strong> Malone, Scott (<em>Scott.Malone_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-19 11:07:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8516.php">Tim Campbell: "[OMPI users] v1.3 on Mac OS X with PGI 8.0"</a>
<li><strong>Previous message:</strong> <a href="8514.php">Cristian KLEIN: "[OMPI users] mpirun exit status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8517.php">Reuti: "Re: [OMPI users] OpenMPI 1.3 and SGE 6.2u1"</a>
<li><strong>Reply:</strong> <a href="8517.php">Reuti: "Re: [OMPI users] OpenMPI 1.3 and SGE 6.2u1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am having two problem with the integration of OpenMPI 1.3 and SGE 6.2u1, which we are new with both.  The troubles are getting jobs to suspend/resume and collect cpu time correctly.
<br>
<p>For suspend/resume I have added the following to my mpirun command:
<br>
<p>--mca orte_forward_job_control 1 --mca plm_rsh_daemonize_qrsh 1
<br>
<p>and adjusted the suspend_method for the queue that it's running in.  I have not gotten it to place any process into the T state.  Although this is not a huge problem, I hope to have this working in the future.
<br>
<p>My main problem is getting the cpu time correct.  On a multiple cpu job only the master nodes shows  the cpu time correct for that process, the others are very short and not sure what they are measuring. (I believe startup time).  Here's and example:
<br>
<p>cpu          0.360
<br>
cpu          0.480
<br>
cpu          0.470
<br>
cpu          0.490
<br>
cpu          0.530
<br>
cpu          0.470
<br>
cpu          0.680
<br>
cpu          464.305
<br>
<p>And from watching the runs that time is close to the wall clock time and match what I see for that single process.  Now I have gotten it to give what I believe are correct values, but I have to include --debug-daemons option to our mpirun command.  With that I get the following:
<br>
<p>cpu          73.146
<br>
cpu          72.982
<br>
cpu          73.381
<br>
cpu          73.142
<br>
cpu          73.029
<br>
cpu          73.183
<br>
cpu          73.117
<br>
cpu          73.265
<br>
cpu          73.236
<br>
<p>I have noticed that when I get the cpu time correctly I get qrsh process that startup (my understanding is that this is what starts the processes on the remote machines) and they stay running until the jobs is finished.  When I don't get the correct cpu time, I see the qrsh processes start on the master node, but die off once they start the process on the remote nodes.  The PE environment looks like the following:
<br>
<p><p>pe_name            orte
<br>
slots              560
<br>
user_lists         NONE
<br>
xuser_lists        NONE
<br>
start_proc_args    /bin/true
<br>
stop_proc_args     /bin/true
<br>
allocation_rule    $round_robin
<br>
control_slaves     TRUE
<br>
job_is_first_task  FALSE
<br>
urgency_slots      min
<br>
accounting_summary FALSE
<br>
<p>Please let me know if I can provide any more information to help figure this out.
<br>
<p>Thanks,
<br>
<p>Scott Malone
<br>
Manager, High Performance Computing Facility
<br>
Information Sciences - Research Informatics
<br>
St. Jude Children's Research Hospital
<br>
332 North Lauderdale
<br>
Memphis, TN 38105
<br>
901.495.4947
<br>
scott.malone_at_[hidden]
<br>
<p><p><p>________________________________
<br>
Email Disclaimer: www.stjude.org/emaildisclaimer
<br>
<p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8515/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8516.php">Tim Campbell: "[OMPI users] v1.3 on Mac OS X with PGI 8.0"</a>
<li><strong>Previous message:</strong> <a href="8514.php">Cristian KLEIN: "[OMPI users] mpirun exit status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8517.php">Reuti: "Re: [OMPI users] OpenMPI 1.3 and SGE 6.2u1"</a>
<li><strong>Reply:</strong> <a href="8517.php">Reuti: "Re: [OMPI users] OpenMPI 1.3 and SGE 6.2u1"</a>
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
