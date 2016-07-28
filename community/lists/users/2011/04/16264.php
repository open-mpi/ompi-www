<?
$subject_val = "Re: [OMPI users] Try to submit OMPI job to SGE gives ERRORS (orte_plm_base_select failed &amp; orte_ess_set_name failed) (Reuti)";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr 16 18:13:10 2011" -->
<!-- isoreceived="20110416221310" -->
<!-- sent="Sun, 17 Apr 2011 00:12:54 +0200" -->
<!-- isosent="20110416221254" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Try to submit OMPI job to SGE gives ERRORS (orte_plm_base_select failed &amp;amp; orte_ess_set_name failed) (Reuti)" -->
<!-- id="BD9D9529-723C-47D7-8A5F-3C38C0405439_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BANLkTik5nzGem2vMVwfShc_AM4M8CEFXgw_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2011-04-16 18:12:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16265.php">Derrick LIN: "Re: [OMPI users] Try to submit OMPI job to SGE gives ERRORS (orte_plm_base_select failed &amp; orte_ess_set_name failed) (Reuti)"</a>
<li><strong>Previous message:</strong> <a href="16263.php">Derrick LIN: "Re: [OMPI users] Try to submit OMPI job to SGE gives ERRORS (orte_plm_base_select failed &amp; orte_ess_set_name failed) (Reuti)"</a>
<li><strong>In reply to:</strong> <a href="16263.php">Derrick LIN: "Re: [OMPI users] Try to submit OMPI job to SGE gives ERRORS (orte_plm_base_select failed &amp; orte_ess_set_name failed) (Reuti)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16265.php">Derrick LIN: "Re: [OMPI users] Try to submit OMPI job to SGE gives ERRORS (orte_plm_base_select failed &amp; orte_ess_set_name failed) (Reuti)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 16.04.2011 um 23:09 schrieb Derrick LIN:
<br>
<p><span class="quotelev1">&gt; So you route the SGE startup mechanism to use `ssh`, nevertherless is should work of course. Small difference to a conventional `ssh` is, that SGE will start a private daemon for each job on the nodes listening on a random port.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When you use only one host, then forks will be created but no `ssh` call. Your test uses more than one node?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have tested with more than one node but the error still happened. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You copied you SGE aware version to all nodes at the same location? Are you getting the correct `mpiexec` and shared libraries in your jobscript? Shows the output of:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I installed it from the ubuntu apt-get on each node, so the OpenMPI is in standard location. In fact ubuntu handles all dependencies very well without worrying about PATH or LD_LIBRARY_PATH.
</span><br>
<p>Well, does `mpiexec` point to the correct one? 
<br>
<p>I thought you compiled it on your own with --with-sge. What about:
<br>
<p>$ ompi_info | grep grid
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: gridengine (MCA v2.0, API v2.0, Component v1.4.3)
<br>
<p>You have this on all nodes and your binary was compiled with this version?
<br>
<p>All stuff below looks fine.
<br>
<p>You can even try to start &quot;from scratch&quot; with a private copy of Open MPI which you install for example in $HOME/local/openmpi-1.4.3 and set the paths accordingly.
<br>
<p>-- Reuti
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
<span class="quotelev1">&gt; the expected ones (ompi_job is the binary and ompi_job.sh the script) when submitted with a PE request?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/bin/mpiexec
</span><br>
<span class="quotelev1">&gt; /usr/lib/openmpi/lib:/usr/lib/openmpi/lib/openmpi
</span><br>
<span class="quotelev1">&gt;         linux-vdso.so.1 =&gt;  (0x00007fff9b1ff000)
</span><br>
<span class="quotelev1">&gt;         libmpi.so.0 =&gt; /usr/lib/libmpi.so.0 (0x00002af0868aa000)
</span><br>
<span class="quotelev1">&gt;         libopen-rte.so.0 =&gt; /usr/lib/libopen-rte.so.0 (0x00002af086b58000)
</span><br>
<span class="quotelev1">&gt;         libopen-pal.so.0 =&gt; /usr/lib/libopen-pal.so.0 (0x00002af086da4000)
</span><br>
<span class="quotelev1">&gt;         libdl.so.2 =&gt; /lib/libdl.so.2 (0x00002af087017000)
</span><br>
<span class="quotelev1">&gt;         libnsl.so.1 =&gt; /lib/libnsl.so.1 (0x00002af08721b000)
</span><br>
<span class="quotelev1">&gt;         libutil.so.1 =&gt; /lib/libutil.so.1 (0x00002af087436000)
</span><br>
<span class="quotelev1">&gt;         libm.so.6 =&gt; /lib/libm.so.6 (0x00002af087639000)
</span><br>
<span class="quotelev1">&gt;         libpthread.so.0 =&gt; /lib/libpthread.so.0 (0x00002af0878bc000)
</span><br>
<span class="quotelev1">&gt;         libc.so.6 =&gt; /lib/libc.so.6 (0x00002af087ada000)
</span><br>
<span class="quotelev1">&gt;         /lib64/ld-linux-x86-64.so.2 (0x00002af086687000)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Below are some runtime data inside a job spooling directory on the execution host
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; pwbcad_at_sgeqexec01:128.1$ ls
</span><br>
<span class="quotelev1">&gt; addgrpid  config  environment  error  exit_status  job_pid  pe_hostfile  pid  trace  usage
</span><br>
<span class="quotelev1">&gt; pwbcad_at_sgeqexec01:128.1$ cat config
</span><br>
<span class="quotelev1">&gt; add_grp_id=65416
</span><br>
<span class="quotelev1">&gt; fs_stdin_host=&quot;&quot;
</span><br>
<span class="quotelev1">&gt; fs_stdin_path=
</span><br>
<span class="quotelev1">&gt; fs_stdin_tmp_path=/tmp/128.1.dev.q/
</span><br>
<span class="quotelev1">&gt; fs_stdin_file_staging=0
</span><br>
<span class="quotelev1">&gt; fs_stdout_host=&quot;&quot;
</span><br>
<span class="quotelev1">&gt; fs_stdout_path=
</span><br>
<span class="quotelev1">&gt; fs_stdout_tmp_path=/tmp/128.1.dev.q/
</span><br>
<span class="quotelev1">&gt; fs_stdout_file_staging=0
</span><br>
<span class="quotelev1">&gt; fs_stderr_host=&quot;&quot;
</span><br>
<span class="quotelev1">&gt; fs_stderr_path=
</span><br>
<span class="quotelev1">&gt; fs_stderr_tmp_path=/tmp/128.1.dev.q/
</span><br>
<span class="quotelev1">&gt; fs_stderr_file_staging=0
</span><br>
<span class="quotelev1">&gt; stdout_path=/mnt/FacilityBioinformatics/pwbcad
</span><br>
<span class="quotelev1">&gt; stderr_path=/mnt/FacilityBioinformatics/pwbcad
</span><br>
<span class="quotelev1">&gt; stdin_path=/dev/null
</span><br>
<span class="quotelev1">&gt; merge_stderr=1
</span><br>
<span class="quotelev1">&gt; tmpdir=/tmp/128.1.dev.q
</span><br>
<span class="quotelev1">&gt; handle_as_binary=0
</span><br>
<span class="quotelev1">&gt; no_shell=0
</span><br>
<span class="quotelev1">&gt; ckpt_job=0
</span><br>
<span class="quotelev1">&gt; h_vmem=INFINITY
</span><br>
<span class="quotelev1">&gt; h_vmem_is_consumable_job=0
</span><br>
<span class="quotelev1">&gt; s_vmem=INFINITY
</span><br>
<span class="quotelev1">&gt; s_vmem_is_consumable_job=0
</span><br>
<span class="quotelev1">&gt; h_cpu=INFINITY
</span><br>
<span class="quotelev1">&gt; h_cpu_is_consumable_job=0
</span><br>
<span class="quotelev1">&gt; s_cpu=INFINITY
</span><br>
<span class="quotelev1">&gt; s_cpu_is_consumable_job=0
</span><br>
<span class="quotelev1">&gt; h_stack=INFINITY
</span><br>
<span class="quotelev1">&gt; h_stack_is_consumable_job=0
</span><br>
<span class="quotelev1">&gt; s_stack=INFINITY
</span><br>
<span class="quotelev1">&gt; s_stack_is_consumable_job=0
</span><br>
<span class="quotelev1">&gt; h_data=INFINITY
</span><br>
<span class="quotelev1">&gt; h_data_is_consumable_job=0
</span><br>
<span class="quotelev1">&gt; s_data=INFINITY
</span><br>
<span class="quotelev1">&gt; s_data_is_consumable_job=0
</span><br>
<span class="quotelev1">&gt; h_core=INFINITY
</span><br>
<span class="quotelev1">&gt; s_core=INFINITY
</span><br>
<span class="quotelev1">&gt; h_rss=INFINITY
</span><br>
<span class="quotelev1">&gt; s_rss=INFINITY
</span><br>
<span class="quotelev1">&gt; h_fsize=INFINITY
</span><br>
<span class="quotelev1">&gt; s_fsize=INFINITY
</span><br>
<span class="quotelev1">&gt; s_descriptors=UNDEFINED
</span><br>
<span class="quotelev1">&gt; h_descriptors=UNDEFINED
</span><br>
<span class="quotelev1">&gt; s_maxproc=UNDEFINED
</span><br>
<span class="quotelev1">&gt; h_maxproc=UNDEFINED
</span><br>
<span class="quotelev1">&gt; s_memorylocked=UNDEFINED
</span><br>
<span class="quotelev1">&gt; h_memorylocked=UNDEFINED
</span><br>
<span class="quotelev1">&gt; s_locks=UNDEFINED
</span><br>
<span class="quotelev1">&gt; h_locks=UNDEFINED
</span><br>
<span class="quotelev1">&gt; priority=0
</span><br>
<span class="quotelev1">&gt; shell_path=/bin/bash
</span><br>
<span class="quotelev1">&gt; script_file=/var/spool/gridengine/execd/sgeqexec01/job_scripts/128
</span><br>
<span class="quotelev1">&gt; job_owner=pwbcad
</span><br>
<span class="quotelev1">&gt; min_gid=0
</span><br>
<span class="quotelev1">&gt; min_uid=0
</span><br>
<span class="quotelev1">&gt; cwd=/mnt/FacilityBioinformatics/pwbcad
</span><br>
<span class="quotelev1">&gt; prolog=none
</span><br>
<span class="quotelev1">&gt; epilog=none
</span><br>
<span class="quotelev1">&gt; starter_method=NONE
</span><br>
<span class="quotelev1">&gt; suspend_method=NONE
</span><br>
<span class="quotelev1">&gt; resume_method=NONE
</span><br>
<span class="quotelev1">&gt; terminate_method=NONE
</span><br>
<span class="quotelev1">&gt; script_timeout=120
</span><br>
<span class="quotelev1">&gt; pe=orte
</span><br>
<span class="quotelev1">&gt; pe_slots=16
</span><br>
<span class="quotelev1">&gt; host_slots=8
</span><br>
<span class="quotelev1">&gt; pe_hostfile=/var/spool/gridengine/execd/sgeqexec01/active_jobs/128.1/pe_hostfile
</span><br>
<span class="quotelev1">&gt; pe_start=/bin/true
</span><br>
<span class="quotelev1">&gt; pe_stop=/bin/true
</span><br>
<span class="quotelev1">&gt; pe_stdout_path=/mnt/FacilityBioinformatics/pwbcad
</span><br>
<span class="quotelev1">&gt; pe_stderr_path=/mnt/FacilityBioinformatics/pwbcad
</span><br>
<span class="quotelev1">&gt; shell_start_mode=posix_compliant
</span><br>
<span class="quotelev1">&gt; use_login_shell=1
</span><br>
<span class="quotelev1">&gt; mail_list=pwbcad_at_[hidden]
</span><br>
<span class="quotelev1">&gt; mail_options=0
</span><br>
<span class="quotelev1">&gt; forbid_reschedule=0
</span><br>
<span class="quotelev1">&gt; forbid_apperror=0
</span><br>
<span class="quotelev1">&gt; queue=dev.q
</span><br>
<span class="quotelev1">&gt; host=sgeqexec01.garvan.unsw.edu.au
</span><br>
<span class="quotelev1">&gt; processors=UNDEFINED
</span><br>
<span class="quotelev1">&gt; binding=NULL
</span><br>
<span class="quotelev1">&gt; job_name=run_cal_pi_auto
</span><br>
<span class="quotelev1">&gt; job_id=128
</span><br>
<span class="quotelev1">&gt; ja_task_id=0
</span><br>
<span class="quotelev1">&gt; account=sge
</span><br>
<span class="quotelev1">&gt; submission_time=1302987873
</span><br>
<span class="quotelev1">&gt; notify=0
</span><br>
<span class="quotelev1">&gt; acct_project=none
</span><br>
<span class="quotelev1">&gt; njob_args=0
</span><br>
<span class="quotelev1">&gt; queue_tmpdir=/tmp
</span><br>
<span class="quotelev1">&gt; use_afs=0
</span><br>
<span class="quotelev1">&gt; admin_user=sgeadmin
</span><br>
<span class="quotelev1">&gt; notify_kill_type=1
</span><br>
<span class="quotelev1">&gt; notify_kill=default
</span><br>
<span class="quotelev1">&gt; notify_susp_type=1
</span><br>
<span class="quotelev1">&gt; notify_susp=default
</span><br>
<span class="quotelev1">&gt; qsub_gid=no
</span><br>
<span class="quotelev1">&gt; pty=0
</span><br>
<span class="quotelev1">&gt; write_osjob_id=1
</span><br>
<span class="quotelev1">&gt; inherit_env=1
</span><br>
<span class="quotelev1">&gt; enable_windomacc=0
</span><br>
<span class="quotelev1">&gt; enable_addgrp_kill=0
</span><br>
<span class="quotelev1">&gt; csp=0
</span><br>
<span class="quotelev1">&gt; ignore_fqdn=0
</span><br>
<span class="quotelev1">&gt; default_domain=none
</span><br>
<span class="quotelev1">&gt; pwbcad_at_sgeqexec01:128.1$ cat environment
</span><br>
<span class="quotelev1">&gt; USER=pwbcad
</span><br>
<span class="quotelev1">&gt; SSH_CLIENT=149.171.200.64 63056 22
</span><br>
<span class="quotelev1">&gt; MAIL=/var/mail/pwbcad
</span><br>
<span class="quotelev1">&gt; SHLVL=1
</span><br>
<span class="quotelev1">&gt; OLDPWD=/home/pwbcad
</span><br>
<span class="quotelev1">&gt; HOME=/home/pwbcad
</span><br>
<span class="quotelev1">&gt; SSH_TTY=/dev/pts/4
</span><br>
<span class="quotelev1">&gt; PAGER=less
</span><br>
<span class="quotelev1">&gt; PS1=\[\e[32;1m\]\u\[\e[0m\]@\[\e[35;1m\]\h\[\e[0m\]:\[\e[34;1m\]\W\[\e[0m\]\$
</span><br>
<span class="quotelev1">&gt; LOGNAME=pwbcad
</span><br>
<span class="quotelev1">&gt; _=/usr/bin/qsub
</span><br>
<span class="quotelev1">&gt; TERM=xterm
</span><br>
<span class="quotelev1">&gt; SGE_ROOT=/var/lib/gridengine
</span><br>
<span class="quotelev1">&gt; PATH=/tmp/128.1.dev.q:.:/home/pwbcad/bin:/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/games:/usr/local/meme/bin:/usr/local/eigenstrat:/usr/local/tophat/bin:/usr/local/cufflinks/bin:/usr/local/defuse/bin:/usr/local/bowtie/bin:/usr/local/cnvseq/bin:/usr/local/fastx_toolkit/bin:/usr/local/breakway/bin
</span><br>
<span class="quotelev1">&gt; SGE_CELL=default
</span><br>
<span class="quotelev1">&gt; LANG=en_AU.UTF-8
</span><br>
<span class="quotelev1">&gt; SHELL=/bin/bash
</span><br>
<span class="quotelev1">&gt; PWD=/mnt/FacilityBioinformatics/pwbcad
</span><br>
<span class="quotelev1">&gt; SSH_CONNECTION=149.171.200.64 63056 129.94.136.216 22
</span><br>
<span class="quotelev1">&gt; EDITOR=nano
</span><br>
<span class="quotelev1">&gt; REQNAME=run_cal_pi_auto
</span><br>
<span class="quotelev1">&gt; JOB_NAME=run_cal_pi_auto
</span><br>
<span class="quotelev1">&gt; JOB_SCRIPT=/var/spool/gridengine/execd/sgeqexec01/job_scripts/128
</span><br>
<span class="quotelev1">&gt; SGE_BINARY_PATH=/usr/sbin/lx26-amd64
</span><br>
<span class="quotelev1">&gt; REQUEST=run_cal_pi_auto
</span><br>
<span class="quotelev1">&gt; HOSTNAME=sgeqexec01.garvan.unsw.edu.au
</span><br>
<span class="quotelev1">&gt; QUEUE=dev.q
</span><br>
<span class="quotelev1">&gt; JOB_ID=128
</span><br>
<span class="quotelev1">&gt; ENVIRONMENT=BATCH
</span><br>
<span class="quotelev1">&gt; ARC=lx26-amd64
</span><br>
<span class="quotelev1">&gt; NQUEUES=2
</span><br>
<span class="quotelev1">&gt; NSLOTS=16
</span><br>
<span class="quotelev1">&gt; NHOSTS=2
</span><br>
<span class="quotelev1">&gt; RESTARTED=0
</span><br>
<span class="quotelev1">&gt; TMPDIR=/tmp/128.1.dev.q
</span><br>
<span class="quotelev1">&gt; TMP=/tmp/128.1.dev.q
</span><br>
<span class="quotelev1">&gt; PE=orte
</span><br>
<span class="quotelev1">&gt; PE_HOSTFILE=/var/spool/gridengine/execd/sgeqexec01/active_jobs/128.1/pe_hostfile
</span><br>
<span class="quotelev1">&gt; SGE_RSH_COMMAND=/usr/bin/ssh
</span><br>
<span class="quotelev1">&gt; SGE_O_HOME=/home/pwbcad
</span><br>
<span class="quotelev1">&gt; SGE_O_LOGNAME=pwbcad
</span><br>
<span class="quotelev1">&gt; SGE_O_PATH=.:/home/pwbcad/bin:/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/games:/usr/local/meme/bin:/usr/local/eigenstrat:/usr/local/tophat/bin:/usr/local/cufflinks/bin:/usr/local/defuse/bin:/usr/local/bowtie/bin:/usr/local/cnvseq/bin:/usr/local/fastx_toolkit/bin:/usr/local/breakway/bin
</span><br>
<span class="quotelev1">&gt; SGE_O_SHELL=/bin/bash
</span><br>
<span class="quotelev1">&gt; SGE_O_MAIL=/var/mail/pwbcad
</span><br>
<span class="quotelev1">&gt; SGE_O_HOST=enzo
</span><br>
<span class="quotelev1">&gt; SGE_O_WORKDIR=/mnt/FacilityBioinformatics/pwbcad
</span><br>
<span class="quotelev1">&gt; SGE_TASK_ID=undefined
</span><br>
<span class="quotelev1">&gt; SGE_TASK_FIRST=undefined
</span><br>
<span class="quotelev1">&gt; SGE_TASK_LAST=undefined
</span><br>
<span class="quotelev1">&gt; SGE_TASK_STEPSIZE=undefined
</span><br>
<span class="quotelev1">&gt; SGE_ARCH=lx26-amd64
</span><br>
<span class="quotelev1">&gt; SGE_ACCOUNT=sge
</span><br>
<span class="quotelev1">&gt; SGE_JOB_SPOOL_DIR=/var/spool/gridengine/execd/sgeqexec01/active_jobs/128.1
</span><br>
<span class="quotelev1">&gt; pwbcad_at_sgeqexec01:128.1$ cat pe_hostfile
</span><br>
<span class="quotelev1">&gt; sgeqexec01.garvan.unsw.edu.au 8 dev.q_at_[hidden] UNDEFINED
</span><br>
<span class="quotelev1">&gt; sgeqexec02.garvan.unsw.edu.au 8 dev.q_at_[hidden] UNDEFINED
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hope these provide you more info.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards
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
<li><strong>Next message:</strong> <a href="16265.php">Derrick LIN: "Re: [OMPI users] Try to submit OMPI job to SGE gives ERRORS (orte_plm_base_select failed &amp; orte_ess_set_name failed) (Reuti)"</a>
<li><strong>Previous message:</strong> <a href="16263.php">Derrick LIN: "Re: [OMPI users] Try to submit OMPI job to SGE gives ERRORS (orte_plm_base_select failed &amp; orte_ess_set_name failed) (Reuti)"</a>
<li><strong>In reply to:</strong> <a href="16263.php">Derrick LIN: "Re: [OMPI users] Try to submit OMPI job to SGE gives ERRORS (orte_plm_base_select failed &amp; orte_ess_set_name failed) (Reuti)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16265.php">Derrick LIN: "Re: [OMPI users] Try to submit OMPI job to SGE gives ERRORS (orte_plm_base_select failed &amp; orte_ess_set_name failed) (Reuti)"</a>
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
