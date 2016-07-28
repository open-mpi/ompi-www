<?
$subject_val = "Re: [OMPI users] Try to submit OMPI job to SGE gives ERRORS (orte_plm_base_select failed &amp; orte_ess_set_name failed) (Reuti)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 15 18:23:35 2011" -->
<!-- isoreceived="20110415222335" -->
<!-- sent="Sat, 16 Apr 2011 00:23:23 +0200" -->
<!-- isosent="20110415222323" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Try to submit OMPI job to SGE gives ERRORS (orte_plm_base_select failed &amp;amp; orte_ess_set_name failed) (Reuti)" -->
<!-- id="5EAD9236-D75A-41AC-A389-47AF469F8AC6_at_staff.uni-marburg.de" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="BANLkTi=ApM0KH6YcaGPRbJH9acQKHxttCg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Try to submit OMPI job to SGE gives ERRORS (orte_plm_base_select failed &amp; orte_ess_set_name failed) (Reuti)<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-15 18:23:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16259.php">Damien: "[OMPI users] missing symbols in Windows 1.5.3 binaries?"</a>
<li><strong>Previous message:</strong> <a href="16257.php">Derrick LIN: "Re: [OMPI users] Try to submit OMPI job to SGE gives ERRORS (orte_plm_base_select failed &amp; orte_ess_set_name failed) (Reuti)"</a>
<li><strong>In reply to:</strong> <a href="16257.php">Derrick LIN: "Re: [OMPI users] Try to submit OMPI job to SGE gives ERRORS (orte_plm_base_select failed &amp; orte_ess_set_name failed) (Reuti)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16263.php">Derrick LIN: "Re: [OMPI users] Try to submit OMPI job to SGE gives ERRORS (orte_plm_base_select failed &amp; orte_ess_set_name failed) (Reuti)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 15.04.2011 um 23:02 schrieb Derrick LIN:
<br>
<p><span class="quotelev1">&gt; - what is your SGE configuration `qconf -sconf`?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; &lt;snip&gt;
</span><br>
<span class="quotelev1">&gt; rlogin_daemon                /usr/sbin/sshd -i
</span><br>
<span class="quotelev1">&gt; rlogin_command               /usr/bin/ssh
</span><br>
<span class="quotelev1">&gt; qlogin_daemon                /usr/sbin/sshd -i
</span><br>
<span class="quotelev1">&gt; qlogin_command               /usr/share/gridengine/qlogin-wrapper
</span><br>
<span class="quotelev1">&gt; rsh_daemon                   /usr/sbin/sshd -i
</span><br>
<span class="quotelev1">&gt; rsh_command                  /usr/bin/ssh
</span><br>
<p>So you route the SGE startup mechanism to use `ssh`, nevertherless is should work of course. Small difference to a conventional `ssh` is, that SGE will start a private daemon for each job on the nodes listening on a random port.
<br>
<p>When you use only one host, then forks will be created but no `ssh` call. Your test uses more than one node?
<br>
<p>You copied you SGE aware version to all nodes at the same location? Are you getting the correct `mpiexec` and shared libraries in your jobscript? Shows the output of:
<br>
<p>#!/bin/sh
<br>
which mpiexec
<br>
echo $LD_LIBRARY_PATH
<br>
ldd ompi_job
<br>
<p>the expected ones (ompi_job is the binary and ompi_job.sh the script) when submitted with a PE request?
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; jsv_url                      none
</span><br>
<span class="quotelev1">&gt; jsv_allowed_mod              ac,h,i,e,o,j,M,N,p,w
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # my queue setting is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; qname                 dev.q
</span><br>
<span class="quotelev1">&gt; hostlist              sgeqexec01.domain.com.au
</span><br>
<span class="quotelev1">&gt; seq_no                0
</span><br>
<span class="quotelev1">&gt; load_thresholds       np_load_avg=1.75
</span><br>
<span class="quotelev1">&gt; suspend_thresholds    NONE
</span><br>
<span class="quotelev1">&gt; nsuspend              1
</span><br>
<span class="quotelev1">&gt; suspend_interval      00:05:00
</span><br>
<span class="quotelev1">&gt; priority              0
</span><br>
<span class="quotelev1">&gt; min_cpu_interval      00:05:00
</span><br>
<span class="quotelev1">&gt; processors            UNDEFINED
</span><br>
<span class="quotelev1">&gt; qtype                 BATCH INTERACTIVE
</span><br>
<span class="quotelev1">&gt; ckpt_list             NONE
</span><br>
<span class="quotelev1">&gt; pe_list               make orte
</span><br>
<span class="quotelev1">&gt; rerun                 FALSE
</span><br>
<span class="quotelev1">&gt; slots                 8
</span><br>
<span class="quotelev1">&gt; tmpdir                /tmp
</span><br>
<span class="quotelev1">&gt; shell                 /bin/bash
</span><br>
<span class="quotelev1">&gt; prolog                NONE
</span><br>
<span class="quotelev1">&gt; epilog                NONE
</span><br>
<span class="quotelev1">&gt; shell_start_mode      posix_compliant
</span><br>
<span class="quotelev1">&gt; starter_method        NONE
</span><br>
<span class="quotelev1">&gt; suspend_method        NONE
</span><br>
<span class="quotelev1">&gt; resume_method         NONE
</span><br>
<span class="quotelev1">&gt; terminate_method      NONE
</span><br>
<span class="quotelev1">&gt; notify                00:00:60
</span><br>
<span class="quotelev1">&gt; owner_list            NONE
</span><br>
<span class="quotelev1">&gt; user_lists            NONE
</span><br>
<span class="quotelev1">&gt; xuser_lists           NONE
</span><br>
<span class="quotelev1">&gt; subordinate_list      NONE
</span><br>
<span class="quotelev1">&gt; complex_values        NONE
</span><br>
<span class="quotelev1">&gt; projects              NONE
</span><br>
<span class="quotelev1">&gt; xprojects             NONE
</span><br>
<span class="quotelev1">&gt; calendar              NONE
</span><br>
<span class="quotelev1">&gt; initial_state         default
</span><br>
<span class="quotelev1">&gt; s_rt                  INFINITY
</span><br>
<span class="quotelev1">&gt; h_rt                  INFINITY
</span><br>
<span class="quotelev1">&gt; s_cpu                 INFINITY
</span><br>
<span class="quotelev1">&gt; h_cpu                 INFINITY
</span><br>
<span class="quotelev1">&gt; s_fsize               INFINITY
</span><br>
<span class="quotelev1">&gt; h_fsize               INFINITY
</span><br>
<span class="quotelev1">&gt; s_data                INFINITY
</span><br>
<span class="quotelev1">&gt; h_data                INFINITY
</span><br>
<span class="quotelev1">&gt; s_stack               INFINITY
</span><br>
<span class="quotelev1">&gt; h_stack               INFINITY
</span><br>
<span class="quotelev1">&gt; s_core                INFINITY
</span><br>
<span class="quotelev1">&gt; h_core                INFINITY
</span><br>
<span class="quotelev1">&gt; s_rss                 INFINITY
</span><br>
<span class="quotelev1">&gt; h_rss                 INFINITY
</span><br>
<span class="quotelev1">&gt; s_vmem                INFINITY
</span><br>
<span class="quotelev1">&gt; h_vmem                INFINITY
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # my PE setting is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; pe_name            orte
</span><br>
<span class="quotelev1">&gt; slots              4
</span><br>
<span class="quotelev1">&gt; user_lists         NONE
</span><br>
<span class="quotelev1">&gt; xuser_lists        NONE
</span><br>
<span class="quotelev1">&gt; start_proc_args    /bin/true
</span><br>
<span class="quotelev1">&gt; stop_proc_args     /bin/true
</span><br>
<span class="quotelev1">&gt; allocation_rule    $round_robin
</span><br>
<span class="quotelev1">&gt; control_slaves     TRUE
</span><br>
<span class="quotelev1">&gt; job_is_first_task  FALSE
</span><br>
<span class="quotelev1">&gt; urgency_slots      min
</span><br>
<span class="quotelev1">&gt; accounting_summary FALSE
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; a) you are testing from master to a node, but jobs are running between nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; b) unless you need X11 forwarding, using SGE&#146;s -builtin- communication works fine, this way you can have a cluster without `rsh` or `ssh` (or limited to admin staff) and can still run parallel jobs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry for the misleading snip. All the hosts (both master and execution host) in the cluster can powerwordless each other without an issue. As my 2) states, I could run a generic openmpi job without the SGE successfully. So I do not think is the communication issue?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Then you are bypassing SGE&#146;s slot allocation and will have wrong accounting and no job control of the slave tasks.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I know it's not a proper submission as a PE job. I simply ran out of idea what to do next. Even it's not a proper way, but that openmpi error didn't happen and the job completed. I am wondering why.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The correct version of my OpenMPI is 1.4.1, not 1.3 in my first post.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have installed OpenMPI on the submission host and the master later, but it didn't help. So I guess OpenMPI is needed in execution hosts only.
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
<li><strong>Next message:</strong> <a href="16259.php">Damien: "[OMPI users] missing symbols in Windows 1.5.3 binaries?"</a>
<li><strong>Previous message:</strong> <a href="16257.php">Derrick LIN: "Re: [OMPI users] Try to submit OMPI job to SGE gives ERRORS (orte_plm_base_select failed &amp; orte_ess_set_name failed) (Reuti)"</a>
<li><strong>In reply to:</strong> <a href="16257.php">Derrick LIN: "Re: [OMPI users] Try to submit OMPI job to SGE gives ERRORS (orte_plm_base_select failed &amp; orte_ess_set_name failed) (Reuti)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16263.php">Derrick LIN: "Re: [OMPI users] Try to submit OMPI job to SGE gives ERRORS (orte_plm_base_select failed &amp; orte_ess_set_name failed) (Reuti)"</a>
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
