<?
$subject_val = "Re: [OMPI users] Try to submit OMPI job to SGE gives ERRORS (orte_plm_base_select failed &amp; orte_ess_set_name failed) (Reuti)";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr 16 17:09:28 2011" -->
<!-- isoreceived="20110416210928" -->
<!-- sent="Sun, 17 Apr 2011 07:09:22 +1000" -->
<!-- isosent="20110416210922" -->
<!-- name="Derrick LIN" -->
<!-- email="klin938_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Try to submit OMPI job to SGE gives ERRORS (orte_plm_base_select failed &amp;amp; orte_ess_set_name failed) (Reuti)" -->
<!-- id="BANLkTik5nzGem2vMVwfShc_AM4M8CEFXgw_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2011-04-16 17:09:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16264.php">Reuti: "Re: [OMPI users] Try to submit OMPI job to SGE gives ERRORS (orte_plm_base_select failed &amp; orte_ess_set_name failed) (Reuti)"</a>
<li><strong>Previous message:</strong> <a href="16262.php">Damien: "Re: [OMPI users] missing symbols in Windows 1.5.3 binaries?"</a>
<li><strong>Maybe in reply to:</strong> <a href="16257.php">Derrick LIN: "Re: [OMPI users] Try to submit OMPI job to SGE gives ERRORS (orte_plm_base_select failed &amp; orte_ess_set_name failed) (Reuti)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16264.php">Reuti: "Re: [OMPI users] Try to submit OMPI job to SGE gives ERRORS (orte_plm_base_select failed &amp; orte_ess_set_name failed) (Reuti)"</a>
<li><strong>Reply:</strong> <a href="16264.php">Reuti: "Re: [OMPI users] Try to submit OMPI job to SGE gives ERRORS (orte_plm_base_select failed &amp; orte_ess_set_name failed) (Reuti)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So you route the SGE startup mechanism to use `ssh`, nevertherless is
</span><br>
<span class="quotelev1">&gt; should work of course. Small difference to a conventional `ssh` is, that SGE
</span><br>
<span class="quotelev1">&gt; will start a private daemon for each job on the nodes listening on a random
</span><br>
<span class="quotelev1">&gt; port.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When you use only one host, then forks will be created but no `ssh` call.
</span><br>
<span class="quotelev1">&gt; Your test uses more than one node?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I have tested with more than one node but the error still happened.
<br>
<p>You copied you SGE aware version to all nodes at the same location? Are you
<br>
<span class="quotelev1">&gt; getting the correct `mpiexec` and shared libraries in your jobscript? Shows
</span><br>
<span class="quotelev1">&gt; the output of:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I installed it from the ubuntu apt-get on each node, so the OpenMPI is in
<br>
standard location. In fact ubuntu handles all dependencies very well without
<br>
worrying about PATH or LD_LIBRARY_PATH.
<br>
<p><p><span class="quotelev1">&gt; #!/bin/sh
</span><br>
<span class="quotelev1">&gt; which mpiexec
</span><br>
<span class="quotelev1">&gt; echo $LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; ldd ompi_job
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the expected ones (ompi_job is the binary and ompi_job.sh the script) when
</span><br>
<span class="quotelev1">&gt; submitted with a PE request?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>/usr/bin/mpiexec
<br>
/usr/lib/openmpi/lib:/usr/lib/openmpi/lib/openmpi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;linux-vdso.so.1 =&gt;  (0x00007fff9b1ff000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libmpi.so.0 =&gt; /usr/lib/libmpi.so.0 (0x00002af0868aa000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libopen-rte.so.0 =&gt; /usr/lib/libopen-rte.so.0 (0x00002af086b58000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libopen-pal.so.0 =&gt; /usr/lib/libopen-pal.so.0 (0x00002af086da4000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libdl.so.2 =&gt; /lib/libdl.so.2 (0x00002af087017000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libnsl.so.1 =&gt; /lib/libnsl.so.1 (0x00002af08721b000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libutil.so.1 =&gt; /lib/libutil.so.1 (0x00002af087436000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libm.so.6 =&gt; /lib/libm.so.6 (0x00002af087639000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libpthread.so.0 =&gt; /lib/libpthread.so.0 (0x00002af0878bc000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libc.so.6 =&gt; /lib/libc.so.6 (0x00002af087ada000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/lib64/ld-linux-x86-64.so.2 (0x00002af086687000)
<br>
<p>Below are some runtime data inside a job spooling directory on the execution
<br>
host
<br>
<p>pwbcad_at_sgeqexec01:128.1$ ls
<br>
addgrpid  config  environment  error  exit_status  job_pid  pe_hostfile  pid
<br>
&nbsp;trace  usage
<br>
*pwbcad_at_sgeqexec01:128.1$ cat config*
<br>
add_grp_id=65416
<br>
fs_stdin_host=&quot;&quot;
<br>
fs_stdin_path=
<br>
fs_stdin_tmp_path=/tmp/128.1.dev.q/
<br>
fs_stdin_file_staging=0
<br>
fs_stdout_host=&quot;&quot;
<br>
fs_stdout_path=
<br>
fs_stdout_tmp_path=/tmp/128.1.dev.q/
<br>
fs_stdout_file_staging=0
<br>
fs_stderr_host=&quot;&quot;
<br>
fs_stderr_path=
<br>
fs_stderr_tmp_path=/tmp/128.1.dev.q/
<br>
fs_stderr_file_staging=0
<br>
stdout_path=/mnt/FacilityBioinformatics/pwbcad
<br>
stderr_path=/mnt/FacilityBioinformatics/pwbcad
<br>
stdin_path=/dev/null
<br>
merge_stderr=1
<br>
tmpdir=/tmp/128.1.dev.q
<br>
handle_as_binary=0
<br>
no_shell=0
<br>
ckpt_job=0
<br>
h_vmem=INFINITY
<br>
h_vmem_is_consumable_job=0
<br>
s_vmem=INFINITY
<br>
s_vmem_is_consumable_job=0
<br>
h_cpu=INFINITY
<br>
h_cpu_is_consumable_job=0
<br>
s_cpu=INFINITY
<br>
s_cpu_is_consumable_job=0
<br>
h_stack=INFINITY
<br>
h_stack_is_consumable_job=0
<br>
s_stack=INFINITY
<br>
s_stack_is_consumable_job=0
<br>
h_data=INFINITY
<br>
h_data_is_consumable_job=0
<br>
s_data=INFINITY
<br>
s_data_is_consumable_job=0
<br>
h_core=INFINITY
<br>
s_core=INFINITY
<br>
h_rss=INFINITY
<br>
s_rss=INFINITY
<br>
h_fsize=INFINITY
<br>
s_fsize=INFINITY
<br>
s_descriptors=UNDEFINED
<br>
h_descriptors=UNDEFINED
<br>
s_maxproc=UNDEFINED
<br>
h_maxproc=UNDEFINED
<br>
s_memorylocked=UNDEFINED
<br>
h_memorylocked=UNDEFINED
<br>
s_locks=UNDEFINED
<br>
h_locks=UNDEFINED
<br>
priority=0
<br>
shell_path=/bin/bash
<br>
script_file=/var/spool/gridengine/execd/sgeqexec01/job_scripts/128
<br>
job_owner=pwbcad
<br>
min_gid=0
<br>
min_uid=0
<br>
cwd=/mnt/FacilityBioinformatics/pwbcad
<br>
prolog=none
<br>
epilog=none
<br>
starter_method=NONE
<br>
suspend_method=NONE
<br>
resume_method=NONE
<br>
terminate_method=NONE
<br>
script_timeout=120
<br>
pe=orte
<br>
pe_slots=16
<br>
host_slots=8
<br>
pe_hostfile=/var/spool/gridengine/execd/sgeqexec01/active_jobs/128.1/pe_hostfile
<br>
pe_start=/bin/true
<br>
pe_stop=/bin/true
<br>
pe_stdout_path=/mnt/FacilityBioinformatics/pwbcad
<br>
pe_stderr_path=/mnt/FacilityBioinformatics/pwbcad
<br>
shell_start_mode=posix_compliant
<br>
use_login_shell=1
<br>
mail_list=pwbcad_at_[hidden]
<br>
mail_options=0
<br>
forbid_reschedule=0
<br>
forbid_apperror=0
<br>
queue=dev.q
<br>
host=sgeqexec01.garvan.unsw.edu.au
<br>
processors=UNDEFINED
<br>
binding=NULL
<br>
job_name=run_cal_pi_auto
<br>
job_id=128
<br>
ja_task_id=0
<br>
account=sge
<br>
submission_time=1302987873
<br>
notify=0
<br>
acct_project=none
<br>
njob_args=0
<br>
queue_tmpdir=/tmp
<br>
use_afs=0
<br>
admin_user=sgeadmin
<br>
notify_kill_type=1
<br>
notify_kill=default
<br>
notify_susp_type=1
<br>
notify_susp=default
<br>
qsub_gid=no
<br>
pty=0
<br>
write_osjob_id=1
<br>
inherit_env=1
<br>
enable_windomacc=0
<br>
enable_addgrp_kill=0
<br>
csp=0
<br>
ignore_fqdn=0
<br>
default_domain=none
<br>
*pwbcad_at_sgeqexec01:128.1$ cat environment*
<br>
USER=pwbcad
<br>
SSH_CLIENT=149.171.200.64 63056 22
<br>
MAIL=/var/mail/pwbcad
<br>
SHLVL=1
<br>
OLDPWD=/home/pwbcad
<br>
HOME=/home/pwbcad
<br>
SSH_TTY=/dev/pts/4
<br>
PAGER=less
<br>
PS1=\[\e[32;1m\]\u\[\e[0m\]@\[\e[35;1m\]\h\[\e[0m\]:\[\e[34;1m\]\W\[\e[0m\]\$
<br>
LOGNAME=pwbcad
<br>
_=/usr/bin/qsub
<br>
TERM=xterm
<br>
SGE_ROOT=/var/lib/gridengine
<br>
PATH=/tmp/128.1.dev.q:.:/home/pwbcad/bin:/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/games:/usr/local/meme/bin:/usr/local/eigenstrat:/usr/local/tophat/bin:/usr/local/cufflinks/bin:/usr/local/defuse/bin:/usr/local/bowtie/bin:/usr/local/cnvseq/bin:/usr/local/fastx_toolkit/bin:/usr/local/breakway/bin
<br>
SGE_CELL=default
<br>
LANG=en_AU.UTF-8
<br>
SHELL=/bin/bash
<br>
PWD=/mnt/FacilityBioinformatics/pwbcad
<br>
SSH_CONNECTION=149.171.200.64 63056 129.94.136.216 22
<br>
EDITOR=nano
<br>
REQNAME=run_cal_pi_auto
<br>
JOB_NAME=run_cal_pi_auto
<br>
JOB_SCRIPT=/var/spool/gridengine/execd/sgeqexec01/job_scripts/128
<br>
SGE_BINARY_PATH=/usr/sbin/lx26-amd64
<br>
REQUEST=run_cal_pi_auto
<br>
HOSTNAME=sgeqexec01.garvan.unsw.edu.au
<br>
QUEUE=dev.q
<br>
JOB_ID=128
<br>
ENVIRONMENT=BATCH
<br>
ARC=lx26-amd64
<br>
NQUEUES=2
<br>
NSLOTS=16
<br>
NHOSTS=2
<br>
RESTARTED=0
<br>
TMPDIR=/tmp/128.1.dev.q
<br>
TMP=/tmp/128.1.dev.q
<br>
PE=orte
<br>
PE_HOSTFILE=/var/spool/gridengine/execd/sgeqexec01/active_jobs/128.1/pe_hostfile
<br>
SGE_RSH_COMMAND=/usr/bin/ssh
<br>
SGE_O_HOME=/home/pwbcad
<br>
SGE_O_LOGNAME=pwbcad
<br>
SGE_O_PATH=.:/home/pwbcad/bin:/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/games:/usr/local/meme/bin:/usr/local/eigenstrat:/usr/local/tophat/bin:/usr/local/cufflinks/bin:/usr/local/defuse/bin:/usr/local/bowtie/bin:/usr/local/cnvseq/bin:/usr/local/fastx_toolkit/bin:/usr/local/breakway/bin
<br>
SGE_O_SHELL=/bin/bash
<br>
SGE_O_MAIL=/var/mail/pwbcad
<br>
SGE_O_HOST=enzo
<br>
SGE_O_WORKDIR=/mnt/FacilityBioinformatics/pwbcad
<br>
SGE_TASK_ID=undefined
<br>
SGE_TASK_FIRST=undefined
<br>
SGE_TASK_LAST=undefined
<br>
SGE_TASK_STEPSIZE=undefined
<br>
SGE_ARCH=lx26-amd64
<br>
SGE_ACCOUNT=sge
<br>
SGE_JOB_SPOOL_DIR=/var/spool/gridengine/execd/sgeqexec01/active_jobs/128.1
<br>
*pwbcad_at_sgeqexec01:128.1$ cat pe_hostfile*
<br>
sgeqexec01.garvan.unsw.edu.au 8 dev.q_at_sgeqexec01.garvan.unsw.edu.auUNDEFINED
<br>
sgeqexec02.garvan.unsw.edu.au 8 dev.q_at_sgeqexec02.garvan.unsw.edu.auUNDEFINED
<br>
<p>Hope these provide you more info.
<br>
<p>Regards
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16263/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16264.php">Reuti: "Re: [OMPI users] Try to submit OMPI job to SGE gives ERRORS (orte_plm_base_select failed &amp; orte_ess_set_name failed) (Reuti)"</a>
<li><strong>Previous message:</strong> <a href="16262.php">Damien: "Re: [OMPI users] missing symbols in Windows 1.5.3 binaries?"</a>
<li><strong>Maybe in reply to:</strong> <a href="16257.php">Derrick LIN: "Re: [OMPI users] Try to submit OMPI job to SGE gives ERRORS (orte_plm_base_select failed &amp; orte_ess_set_name failed) (Reuti)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16264.php">Reuti: "Re: [OMPI users] Try to submit OMPI job to SGE gives ERRORS (orte_plm_base_select failed &amp; orte_ess_set_name failed) (Reuti)"</a>
<li><strong>Reply:</strong> <a href="16264.php">Reuti: "Re: [OMPI users] Try to submit OMPI job to SGE gives ERRORS (orte_plm_base_select failed &amp; orte_ess_set_name failed) (Reuti)"</a>
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
