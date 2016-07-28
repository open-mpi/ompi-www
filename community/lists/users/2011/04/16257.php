<?
$subject_val = "Re: [OMPI users] Try to submit OMPI job to SGE gives ERRORS (orte_plm_base_select failed &amp; orte_ess_set_name failed) (Reuti)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 15 17:02:26 2011" -->
<!-- isoreceived="20110415210226" -->
<!-- sent="Sat, 16 Apr 2011 07:02:21 +1000" -->
<!-- isosent="20110415210221" -->
<!-- name="Derrick LIN" -->
<!-- email="klin938_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Try to submit OMPI job to SGE gives ERRORS (orte_plm_base_select failed &amp;amp; orte_ess_set_name failed) (Reuti)" -->
<!-- id="BANLkTi=ApM0KH6YcaGPRbJH9acQKHxttCg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="[OMPI users] Try to submit OMPI job to SGE gives ERRORS (orte_plm_base_select failed &amp;amp; orte_ess_set_name failed) (Reuti)" -->
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
<strong>From:</strong> Derrick LIN (<em>klin938_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-15 17:02:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16258.php">Reuti: "Re: [OMPI users] Try to submit OMPI job to SGE gives ERRORS (orte_plm_base_select failed &amp; orte_ess_set_name failed) (Reuti)"</a>
<li><strong>Previous message:</strong> <a href="16256.php">Ralph Castain: "Re: [OMPI users] Condor and MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16258.php">Reuti: "Re: [OMPI users] Try to submit OMPI job to SGE gives ERRORS (orte_plm_base_select failed &amp; orte_ess_set_name failed) (Reuti)"</a>
<li><strong>Reply:</strong> <a href="16258.php">Reuti: "Re: [OMPI users] Try to submit OMPI job to SGE gives ERRORS (orte_plm_base_select failed &amp; orte_ess_set_name failed) (Reuti)"</a>
<li><strong>Maybe reply:</strong> <a href="16263.php">Derrick LIN: "Re: [OMPI users] Try to submit OMPI job to SGE gives ERRORS (orte_plm_base_select failed &amp; orte_ess_set_name failed) (Reuti)"</a>
<li><strong>Maybe reply:</strong> <a href="16265.php">Derrick LIN: "Re: [OMPI users] Try to submit OMPI job to SGE gives ERRORS (orte_plm_base_select failed &amp; orte_ess_set_name failed) (Reuti)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - what is your SGE configuration `qconf -sconf`?
</span><br>
<p><p>#global:
<br>
execd_spool_dir              /var/spool/gridengine/execd
<br>
mailer                       /usr/bin/mail
<br>
xterm                        /usr/bin/xterm
<br>
load_sensor                  none
<br>
prolog                       none
<br>
epilog                       none
<br>
shell_start_mode             posix_compliant
<br>
login_shells                 bash,sh,ksh,csh,tcsh
<br>
min_uid                      0
<br>
min_gid                      0
<br>
user_lists                   none
<br>
xuser_lists                  none
<br>
projects                     none
<br>
xprojects                    none
<br>
enforce_project              false
<br>
enforce_user                 auto
<br>
load_report_time             00:00:40
<br>
max_unheard                  00:05:00
<br>
reschedule_unknown           00:00:00
<br>
loglevel                     log_warning
<br>
administrator_mail           root
<br>
set_token_cmd                none
<br>
pag_cmd                      none
<br>
token_extend_time            none
<br>
shepherd_cmd                 none
<br>
qmaster_params               none
<br>
execd_params                 none
<br>
reporting_params             accounting=true reporting=false \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;flush_time=00:00:15 joblog=false
<br>
sharelog=00:00:00
<br>
finished_jobs                100
<br>
gid_range                    65400-65500
<br>
max_aj_instances             2000
<br>
max_aj_tasks                 75000
<br>
max_u_jobs                   0
<br>
max_jobs                     0
<br>
auto_user_oticket            0
<br>
auto_user_fshare             0
<br>
auto_user_default_project    none
<br>
auto_user_delete_time        86400
<br>
delegated_file_staging       false
<br>
reprioritize                 false
<br>
rlogin_daemon                /usr/sbin/sshd -i
<br>
rlogin_command               /usr/bin/ssh
<br>
qlogin_daemon                /usr/sbin/sshd -i
<br>
qlogin_command               /usr/share/gridengine/qlogin-wrapper
<br>
rsh_daemon                   /usr/sbin/sshd -i
<br>
rsh_command                  /usr/bin/ssh
<br>
jsv_url                      none
<br>
jsv_allowed_mod              ac,h,i,e,o,j,M,N,p,w
<br>
<p># my queue setting is:
<br>
<p>qname                 dev.q
<br>
hostlist              sgeqexec01.domain.com.au
<br>
seq_no                0
<br>
load_thresholds       np_load_avg=1.75
<br>
suspend_thresholds    NONE
<br>
nsuspend              1
<br>
suspend_interval      00:05:00
<br>
priority              0
<br>
min_cpu_interval      00:05:00
<br>
processors            UNDEFINED
<br>
qtype                 BATCH INTERACTIVE
<br>
ckpt_list             NONE
<br>
pe_list               make orte
<br>
rerun                 FALSE
<br>
slots                 8
<br>
tmpdir                /tmp
<br>
shell                 /bin/bash
<br>
prolog                NONE
<br>
epilog                NONE
<br>
shell_start_mode      posix_compliant
<br>
starter_method        NONE
<br>
suspend_method        NONE
<br>
resume_method         NONE
<br>
terminate_method      NONE
<br>
notify                00:00:60
<br>
owner_list            NONE
<br>
user_lists            NONE
<br>
xuser_lists           NONE
<br>
subordinate_list      NONE
<br>
complex_values        NONE
<br>
projects              NONE
<br>
xprojects             NONE
<br>
calendar              NONE
<br>
initial_state         default
<br>
s_rt                  INFINITY
<br>
h_rt                  INFINITY
<br>
s_cpu                 INFINITY
<br>
h_cpu                 INFINITY
<br>
s_fsize               INFINITY
<br>
h_fsize               INFINITY
<br>
s_data                INFINITY
<br>
h_data                INFINITY
<br>
s_stack               INFINITY
<br>
h_stack               INFINITY
<br>
s_core                INFINITY
<br>
h_core                INFINITY
<br>
s_rss                 INFINITY
<br>
h_rss                 INFINITY
<br>
s_vmem                INFINITY
<br>
h_vmem                INFINITY
<br>
<p># my PE setting is:
<br>
<p>pe_name            orte
<br>
slots              4
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
<p><p><span class="quotelev1">&gt; a) you are testing from master to a node, but jobs are running between
</span><br>
<span class="quotelev1">&gt; nodes.
</span><br>
<p><p><span class="quotelev1">&gt; b) unless you need X11 forwarding, using SGE&#226;&#128;&#153;s -builtin- communication
</span><br>
<span class="quotelev1">&gt; works fine, this way you can have a cluster without `rsh` or `ssh` (or
</span><br>
<span class="quotelev1">&gt; limited to admin staff) and can still run parallel jobs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Sorry for the misleading snip. All the hosts (both master and execution
<br>
host) in the cluster can powerwordless each other without an issue. As my 2)
<br>
states, I could run a generic openmpi job without the SGE successfully. So I
<br>
do not think is the communication issue?
<br>
<p><p><span class="quotelev1">&gt; Then you are bypassing SGE&#226;&#128;&#153;s slot allocation and will have wrong accounting
</span><br>
<span class="quotelev1">&gt; and no job control of the slave tasks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I know it's not a proper submission as a PE job. I simply ran out of idea
<br>
what to do next. Even it's not a proper way, but that openmpi error didn't
<br>
happen and the job completed. I am wondering why.
<br>
<p><p>The correct version of my OpenMPI is 1.4.1, not 1.3 in my first post.
<br>
<p>I have installed OpenMPI on the submission host and the master later, but it
<br>
didn't help. So I guess OpenMPI is needed in execution hosts only.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16257/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16258.php">Reuti: "Re: [OMPI users] Try to submit OMPI job to SGE gives ERRORS (orte_plm_base_select failed &amp; orte_ess_set_name failed) (Reuti)"</a>
<li><strong>Previous message:</strong> <a href="16256.php">Ralph Castain: "Re: [OMPI users] Condor and MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16258.php">Reuti: "Re: [OMPI users] Try to submit OMPI job to SGE gives ERRORS (orte_plm_base_select failed &amp; orte_ess_set_name failed) (Reuti)"</a>
<li><strong>Reply:</strong> <a href="16258.php">Reuti: "Re: [OMPI users] Try to submit OMPI job to SGE gives ERRORS (orte_plm_base_select failed &amp; orte_ess_set_name failed) (Reuti)"</a>
<li><strong>Maybe reply:</strong> <a href="16263.php">Derrick LIN: "Re: [OMPI users] Try to submit OMPI job to SGE gives ERRORS (orte_plm_base_select failed &amp; orte_ess_set_name failed) (Reuti)"</a>
<li><strong>Maybe reply:</strong> <a href="16265.php">Derrick LIN: "Re: [OMPI users] Try to submit OMPI job to SGE gives ERRORS (orte_plm_base_select failed &amp; orte_ess_set_name failed) (Reuti)"</a>
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
