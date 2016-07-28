<?
$subject_val = "Re: [OMPI users] Fwd: [GE users] Open MPI job fails when run thru SGE";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  2 01:45:57 2009" -->
<!-- isoreceived="20090202064557" -->
<!-- sent="Mon, 2 Feb 2009 07:45:45 +0100" -->
<!-- isosent="20090202064545" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fwd: [GE users] Open MPI job fails when run thru SGE" -->
<!-- id="50E342B0-1DFA-43EC-BA1B-64740724FE8E_at_staff.uni-marburg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="cb60cbc40902012044q76ae8c81g718b57d36f5efdf7_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fwd: [GE users] Open MPI job fails when run thru SGE<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-02 01:45:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7927.php">Reuti: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
<li><strong>Previous message:</strong> <a href="7925.php">Sangamesh B: "Re: [OMPI users] Fwd: [GE users] Open MPI job fails when run thru SGE"</a>
<li><strong>In reply to:</strong> <a href="7925.php">Sangamesh B: "Re: [OMPI users] Fwd: [GE users] Open MPI job fails when run thru SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7930.php">Sangamesh B: "Re: [OMPI users] Fwd: [GE users] Open MPI job fails when run thru SGE"</a>
<li><strong>Reply:</strong> <a href="7930.php">Sangamesh B: "Re: [OMPI users] Fwd: [GE users] Open MPI job fails when run thru SGE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 02.02.2009 um 05:44 schrieb Sangamesh B:
<br>
<p><span class="quotelev1">&gt; On Sun, Feb 1, 2009 at 10:37 PM, Reuti &lt;reuti_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Am 01.02.2009 um 16:00 schrieb Sangamesh B:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sat, Jan 31, 2009 at 6:27 PM, Reuti &lt;reuti_at_staff.uni- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; marburg.de&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Am 31.01.2009 um 08:49 schrieb Sangamesh B:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Fri, Jan 30, 2009 at 10:20 PM, Reuti &lt;reuti_at_staff.uni- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; marburg.de&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Am 30.01.2009 um 15:02 schrieb Sangamesh B:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Dear Open MPI,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Do you have a solution for the following problem of Open MPI  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; (1.3)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; when run through Grid Engine.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I changed global execd params with H_MEMORYLOCKED=infinity and
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; restarted the sgeexecd in all nodes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; But still the problem persists:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  $cat err.77.CPMD-OMPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ssh_exchange_identification: Connection closed by remote host
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I think this might already be the reason why it's not working. A
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mpihello
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; program is running fine through SGE?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; No.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Any Open MPI parallel job thru SGE runs only if its running on a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; single node (i.e. 8processes on 8 cores of a single node). If  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; number
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; of processes is more than 8, then SGE will schedule it on 2  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; nodes -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the job will fail with the above error.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Now I did a loose integration of Open MPI 1.3 with SGE. The job  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; runs,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; but all 16 processes run on a single node.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; What are the entries in `qconf -sconf`for:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rsh_command
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rsh_daemon
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ qconf -sconf
</span><br>
<span class="quotelev3">&gt;&gt;&gt; global:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; execd_spool_dir              /opt/gridengine/default/spool
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; .....
</span><br>
<span class="quotelev3">&gt;&gt;&gt; qrsh_command                 /usr/bin/ssh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rsh_command                  /usr/bin/ssh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rlogin_command               /usr/bin/ssh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rsh_daemon                   /usr/sbin/sshd
</span><br>
<span class="quotelev3">&gt;&gt;&gt; qrsh_daemon                  /usr/sbin/sshd
</span><br>
<span class="quotelev3">&gt;&gt;&gt; reprioritize                 0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Do you must use ssh? Often in a private cluster the rsh based one  
</span><br>
<span class="quotelev2">&gt;&gt; is ok, or
</span><br>
<span class="quotelev2">&gt;&gt; with SGE 6.2 the built-in mechanism of SGE. Otherwise please  
</span><br>
<span class="quotelev2">&gt;&gt; follow this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://gridengine.sunsource.net/howto/qrsh_qlogin_ssh.html">http://gridengine.sunsource.net/howto/qrsh_qlogin_ssh.html</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think its better to check once with Open MPI 1.2.8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; What is your mpirun command in the jobscript - you are getting  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; there the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun from Open MPI? According to the output below, it's not a  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; loose
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; integration, but you prepare alraedy a machinefile, which is  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; superfluous
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Open MPI.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; No. I've not prepared the machinefile for Open MPI.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For Tight integartion job:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/mpi/openmpi/1.3/intel/bin/mpirun -np $NSLOTS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $CPMDBIN/cpmd311-ompi-mkl.x  wf1.in $PP_LIBRARY &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wf1.out_OMPI$NSLOTS.$JOB_ID
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For loose integration job:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/mpi/openmpi/1.3/intel/bin/mpirun -np $NSLOTS -hostfile
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $TMPDIR/machines  $CPMDBIN/cpmd311-ompi-mkl.x  wf1.in $PP_LIBRARY &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wf1.out_OMPI_$JOB_ID.$NSLOTS
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; a) you compiled Open MPI with &quot;--with-sge&quot;?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Yes. But ompi_info shows only one component of sge
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ /opt/mpi/openmpi/1.3/intel/bin/ompi_info | grep gridengine
</span><br>
<span class="quotelev1">&gt;                  MCA ras: gridengine (MCA v2.0, API v2.0, Component  
</span><br>
<span class="quotelev1">&gt; v1.3)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; b) when the $SGE_ROOT variable is set, Open MPI will use a Tight  
</span><br>
<span class="quotelev2">&gt;&gt; Integration
</span><br>
<span class="quotelev2">&gt;&gt; automatically.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; In SGE job submit script, I set SGE_ROOT= &lt;nothing&gt;
</span><br>
<p>This will set the variable to an empty string. You need to use:
<br>
<p>unset SGE_ROOT
<br>
<p>Despite the mentioned error message on the list, I can run Open MPI  
<br>
1.3 with tight integration into SGE.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; And run a loose integration job. It failed to run with following  
</span><br>
<span class="quotelev1">&gt; error:
</span><br>
<span class="quotelev1">&gt; $ cat err.87.Hello-OMPI
</span><br>
<span class="quotelev1">&gt; [node-0-18.local:08252] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found
</span><br>
<span class="quotelev1">&gt; in file ess_hnp_module.c at line 126
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel  
</span><br>
<span class="quotelev1">&gt; process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   orte_plm_base_select failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned value Not found (-13) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; [node-0-18.local:08252] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found
</span><br>
<span class="quotelev1">&gt; in file runtime/orte_init.c at line 132
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel  
</span><br>
<span class="quotelev1">&gt; process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   orte_ess_set_name failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned value Not found (-13) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; [node-0-18.local:08252] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found
</span><br>
<span class="quotelev1">&gt; in file orterun.c at line 454
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ cat out.87.Hello-OMPI
</span><br>
<span class="quotelev1">&gt; /opt/gridengine/default/spool/node-0-18/active_jobs/87.1/pe_hostfile
</span><br>
<span class="quotelev1">&gt; ibc18
</span><br>
<span class="quotelev1">&gt; ibc18
</span><br>
<span class="quotelev1">&gt; ibc18
</span><br>
<span class="quotelev1">&gt; ibc18
</span><br>
<span class="quotelev1">&gt; ibc18
</span><br>
<span class="quotelev1">&gt; ibc18
</span><br>
<span class="quotelev1">&gt; ibc18
</span><br>
<span class="quotelev1">&gt; ibc18
</span><br>
<span class="quotelev1">&gt; ibc17
</span><br>
<span class="quotelev1">&gt; ibc17
</span><br>
<span class="quotelev1">&gt; ibc17
</span><br>
<span class="quotelev1">&gt; ibc17
</span><br>
<span class="quotelev1">&gt; ibc17
</span><br>
<span class="quotelev1">&gt; ibc17
</span><br>
<span class="quotelev1">&gt; ibc17
</span><br>
<span class="quotelev1">&gt; ibc17
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; c) The machine file you presented looks like being for MPICH(1),  
</span><br>
<span class="quotelev2">&gt;&gt; the syntax
</span><br>
<span class="quotelev2">&gt;&gt; for Open MPI in the machine is different:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ibc17 slots=8
</span><br>
<span class="quotelev2">&gt;&gt; ibc12 slots=8
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; I tested a helloworld program with Open MPI with machinefile of  
</span><br>
<span class="quotelev1">&gt; style MPICH(1).
</span><br>
<span class="quotelev1">&gt; It works.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So in a loose integration job,
</span><br>
<span class="quotelev1">&gt; Open MPI may not be able to find $TMPDIR/machines file
</span><br>
<span class="quotelev1">&gt; Or it might be running in a Tight integration style.
</span><br>
<span class="quotelev2">&gt;&gt; So you would have to adjust the format of the generated file and  
</span><br>
<span class="quotelev2">&gt;&gt; reset
</span><br>
<span class="quotelev2">&gt;&gt; SGE_ROOT inside your jobscript, to force Open MPI to do a loose  
</span><br>
<span class="quotelev2">&gt;&gt; integration
</span><br>
<span class="quotelev2">&gt;&gt; only.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- Reuti
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think I should check with Open MPI 1.2.8. That may work..
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sangamesh
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; $ cat out.83.Hello-OMPI
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /opt/gridengine/default/spool/node-0-17/active_jobs/83.1/ 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; pe_hostfile
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ibc17
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ibc17
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ibc17
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ibc17
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ibc17
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ibc17
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ibc17
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ibc17
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ibc12
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ibc12
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ibc12
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ibc12
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ibc12
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ibc12
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ibc12
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ibc12
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Greetings: 1 of 16 from the node node-0-17.local
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Greetings: 10 of 16 from the node node-0-17.local
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Greetings: 15 of 16 from the node node-0-17.local
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Greetings: 9 of 16 from the node node-0-17.local
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Greetings: 14 of 16 from the node node-0-17.local
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Greetings: 8 of 16 from the node node-0-17.local
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Greetings: 11 of 16 from the node node-0-17.local
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Greetings: 12 of 16 from the node node-0-17.local
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Greetings: 6 of 16 from the node node-0-17.local
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Greetings: 0 of 16 from the node node-0-17.local
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Greetings: 5 of 16 from the node node-0-17.local
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Greetings: 3 of 16 from the node node-0-17.local
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Greetings: 13 of 16 from the node node-0-17.local
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Greetings: 4 of 16 from the node node-0-17.local
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Greetings: 7 of 16 from the node node-0-17.local
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Greetings: 2 of 16 from the node node-0-17.local
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; But qhost -u &lt;user name&gt; shows that it is scheduled/running on two
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; nodes.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Any body successful in running Open MPI 1.3 tightly integrated  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; with SGE?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; For a Tight Integration there's a FAQ:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=running#run-n1ge-or-sge">http://www.open-mpi.org/faq/?category=running#run-n1ge-or-sge</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- Reuti
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Sangamesh
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -- Reuti
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ---------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ----------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; A daemon (pid 31947) died unexpectedly with status 129 while
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; attempting
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; to launch so we are aborting.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; There may be more information reported by the environment  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; (see above).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; This may be because the daemon was unable to find all the needed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; shared
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; libraries on the remote node. You may set your  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; LD_LIBRARY_PATH to have
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; location of the shared libraries on the remote nodes and this  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; will
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ---------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ----------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ---------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ----------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpirun noticed that the job aborted, but has no info as to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; the process
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; that caused that situation.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ---------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ----------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ssh_exchange_identification: Connection closed by remote host
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ---------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ----------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpirun was unable to cleanly terminate the daemons on the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; nodes shown
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; below. Additional manual cleanup may be required - please  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; refer to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; the &quot;orte-clean&quot; tool for assistance.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ---------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ----------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     node-0-19.local - daemon did not report back when launched
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     node-0-20.local - daemon did not report back when launched
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     node-0-21.local - daemon did not report back when launched
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     node-0-22.local - daemon did not report back when launched
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; The hostnames for infiniband interfaces are ibc0, ibc1,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ibc2 .. ibc23.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; May be Open MPI is not able to identify hosts as it is using  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; node-0-..
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; . Is this causing open mpi to fail?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Sangamesh
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Mon, Jan 26, 2009 at 5:09 PM, mihlon &lt;vaclam1_at_[hidden]&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hello SGE users,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; The cluster is installed with Rocks-4.3, SGE 6.0 &amp; Open MPI  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 1.3.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Open MPI is configured with &quot;--with-sge&quot;.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ompi_info shows only one component:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; # /opt/mpi/openmpi/1.3/intel/bin/ompi_info | grep gridengine
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; MCA ras: gridengine (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Is this acceptable?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; maybe yes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; see: <a href="http://www.open-mpi.org/faq/?category=building#build">http://www.open-mpi.org/faq/?category=building#build</a>- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; rte-sge
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; shell$ ompi_info | grep gridengine
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; MCA ras: gridengine (MCA v1.0, API v1.3, Component v1.3)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; MCA pls: gridengine (MCA v1.0, API v1.3, Component v1.3)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (Specific frameworks and version numbers may vary, depending  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; on your
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; version of Open MPI.)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; The Open MPI parallel jobs run successfully through command  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; line,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; but
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; fail when run thru SGE(with -pe orte &lt;slots&gt;).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; The error is:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; $ cat err.26.Helloworld-PRL
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ssh_exchange_identification: Connection closed by remote host
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; A daemon (pid 8462) died unexpectedly with status 129 while
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; attempting
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; to launch so we are aborting.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; There may be more information reported by the environment (see
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; above).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; This may be because the daemon was unable to find all the  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; needed
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; shared
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; libraries on the remote node. You may set your  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; LD_LIBRARY_PATH to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; have
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; location of the shared libraries on the remote nodes and  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; this will
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpirun noticed that the job aborted, but has no info as to the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; process
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; But the same job runs well, if it runs on a single node but  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; with an
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; error:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; $ cat err.23.Helloworld-PRL
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; This will severely limit memory registrations.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; This will severely limit memory registrations.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; This will severely limit memory registrations.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; This will severely limit memory registrations.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; This will severely limit memory registrations.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; WARNING: There was an error initializing an OpenFabrics  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; device.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Local host: node-0-4.local
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Local device: mthca0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; This will severely limit memory registrations.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; This will severely limit memory registrations.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; This will severely limit memory registrations.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node-0-4.local:07869] 7 more processes have sent help message
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; help-mpi-btl-openib.txt / error in device init
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [node-0-4.local:07869] Set MCA parameter  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &quot;orte_base_help_aggregate&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0 to see all help / error messages
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; The following link explains the same problem:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://gridengine.sunsource.net/ds/viewMessage.do">http://gridengine.sunsource.net/ds/viewMessage.do</a>? 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; dsForumId=38&amp;dsMessageId=72398
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; With this reference, I put 'ulimit -l unlimited' into
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /etc/init.d/sgeexecd in all nodes. Restarted the services.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Do not set 'ulimit -l unlimited' in /etc/init.d/sgeexecd
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; but set it in the SGE:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Run   qconf -mconf   and set    execd_params
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; frontend$&gt; qconf -sconf
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; execd_params                 H_MEMORYLOCKED=infinity
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Then restart all your sgeexecd hosts.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Milan
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; But still the problem persists.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; What could be the way out for this?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Sangamesh
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://gridengine.sunsource.net/ds/viewMessage.do">http://gridengine.sunsource.net/ds/viewMessage.do</a>? 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; dsForumId=38&amp;dsMessageId=99133
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; To unsubscribe from this discussion, e-mail:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [users-unsubscribe_at_[hidden]].
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://gridengine.sunsource.net/ds/viewMessage.do">http://gridengine.sunsource.net/ds/viewMessage.do</a>? 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; dsForumId=38&amp;dsMessageId=99461
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; To unsubscribe from this discussion, e-mail:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [users-unsubscribe_at_[hidden]].
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
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
<li><strong>Next message:</strong> <a href="7927.php">Reuti: "Re: [OMPI users] v1.3: mca_common_sm_mmap_init error"</a>
<li><strong>Previous message:</strong> <a href="7925.php">Sangamesh B: "Re: [OMPI users] Fwd: [GE users] Open MPI job fails when run thru SGE"</a>
<li><strong>In reply to:</strong> <a href="7925.php">Sangamesh B: "Re: [OMPI users] Fwd: [GE users] Open MPI job fails when run thru SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7930.php">Sangamesh B: "Re: [OMPI users] Fwd: [GE users] Open MPI job fails when run thru SGE"</a>
<li><strong>Reply:</strong> <a href="7930.php">Sangamesh B: "Re: [OMPI users] Fwd: [GE users] Open MPI job fails when run thru SGE"</a>
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
