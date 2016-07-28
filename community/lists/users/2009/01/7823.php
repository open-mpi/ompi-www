<?
$subject_val = "Re: [OMPI users] Ompi runs thru cmd line but fails when run thru SGE";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 26 08:41:31 2009" -->
<!-- isoreceived="20090126134131" -->
<!-- sent="Mon, 26 Jan 2009 14:41:37 +0100" -->
<!-- isosent="20090126134137" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Ompi runs thru cmd line but fails when run thru SGE" -->
<!-- id="EA43CE26-5777-4046-9DE2-9C3BCAE90649_at_staff.uni-marburg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="cb60cbc40901242116g6f37c8efo1393fa4401be2b54_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Ompi runs thru cmd line but fails when run thru SGE<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-26 08:41:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7824.php">Ali Copey: "[OMPI users] MPI_THREAD_MULTIPLE not provided"</a>
<li><strong>Previous message:</strong> <a href="7822.php">Andrea Iob: "Re: [OMPI users] Error compiling v1.3 with icc 10.1.021: PATH_MAX not defined"</a>
<li><strong>In reply to:</strong> <a href="7817.php">Sangamesh B: "Re: [OMPI users] Ompi runs thru cmd line but fails when run thru SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/02/8207.php">Sangamesh B: "Re: [OMPI users] Ompi runs thru cmd line but fails when run thru SGE"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/02/8207.php">Sangamesh B: "Re: [OMPI users] Ompi runs thru cmd line but fails when run thru SGE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 25.01.2009 um 06:16 schrieb Sangamesh B:
<br>
<p><span class="quotelev1">&gt; Thanks Reuti for the reply.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sun, Jan 25, 2009 at 2:22 AM, Reuti &lt;reuti_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Am 24.01.2009 um 17:12 schrieb Jeremy Stout:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The RLIMIT error is very common when using OpenMPI + OFED + Sun Grid
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Engine. You can find more information and several remedies here:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I usually resolve this problem by adding &quot;ulimit -l unlimited&quot; near
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the top of the SGE startup script on the computation nodes and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; restarting SGE on every node.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Did you request/set any limits with SGE's h_vmem/h_stack resource  
</span><br>
<span class="quotelev2">&gt;&gt; request?
</span><br>
<p>Was this also your problem:
<br>
<p><a href="http://gridengine.sunsource.net/ds/viewMessage.do">http://gridengine.sunsource.net/ds/viewMessage.do</a>? 
<br>
dsForumId=38&amp;dsMessageId=99442
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; No.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The used queue is as follows:
</span><br>
<span class="quotelev1">&gt; qconf -sq ib.q
</span><br>
<span class="quotelev1">&gt; qname                 ib.q
</span><br>
<span class="quotelev1">&gt; hostlist              @ibhosts
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
<span class="quotelev1">&gt; pe_list               orte
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
<span class="quotelev1">&gt; shell_start_mode      unix_behavior
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
<span class="quotelev1">&gt; # qconf -sp orte
</span><br>
<span class="quotelev1">&gt; pe_name           orte
</span><br>
<span class="quotelev1">&gt; slots             999
</span><br>
<span class="quotelev1">&gt; user_lists        NONE
</span><br>
<span class="quotelev1">&gt; xuser_lists       NONE
</span><br>
<span class="quotelev1">&gt; start_proc_args   /bin/true
</span><br>
<span class="quotelev1">&gt; stop_proc_args    /bin/true
</span><br>
<span class="quotelev1">&gt; allocation_rule   $fill_up
</span><br>
<span class="quotelev1">&gt; control_slaves    TRUE
</span><br>
<span class="quotelev1">&gt; job_is_first_task FALSE
</span><br>
<span class="quotelev1">&gt; urgency_slots     min
</span><br>
<span class="quotelev1">&gt; # qconf -shgrp @ibhosts
</span><br>
<span class="quotelev1">&gt; group_name @ibhosts
</span><br>
<span class="quotelev1">&gt; hostlist node-0-0.local node-0-1.local node-0-2.local node-0-3.local \
</span><br>
<span class="quotelev1">&gt;          node-0-4.local node-0-5.local node-0-6.local node-0-7.local \
</span><br>
<span class="quotelev1">&gt;          node-0-8.local node-0-9.local node-0-10.local  
</span><br>
<span class="quotelev1">&gt; node-0-11.local \
</span><br>
<span class="quotelev1">&gt;          node-0-12.local node-0-13.local node-0-14.local  
</span><br>
<span class="quotelev1">&gt; node-0-16.local \
</span><br>
<span class="quotelev1">&gt;          node-0-17.local node-0-18.local node-0-19.local  
</span><br>
<span class="quotelev1">&gt; node-0-20.local \
</span><br>
<span class="quotelev1">&gt;          node-0-21.local node-0-22.local
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The Hostnames for IB interface are like ibc0 ibc1.. ibc22
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this difference caussing the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ssh issues:
</span><br>
<span class="quotelev1">&gt; between master &amp; node: works fine but with some delay.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; between nodes: works fine, no delay
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; From command line the open mpi jobs were run with no error, even
</span><br>
<span class="quotelev1">&gt; master node is not used in hostfile.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Sangamesh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- Reuti
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeremy Stout
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sat, Jan 24, 2009 at 6:06 AM, Sangamesh B  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;forum.san_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello all,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Open MPI 1.3 is installed on Rocks 4.3 Linux cluster with  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; support of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; SGE i.e using --with-sge.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; But the ompi_info shows only one component:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; # /opt/mpi/openmpi/1.3/intel/bin/ompi_info | grep gridengine
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                MCA ras: gridengine (MCA v2.0, API v2.0,  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Component v1.3)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is this right? Because during ompi installation SGE qmaster  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; daemon was
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; not working.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Now the problem is, the open mpi parallel jobs submitted thru
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; gridengine are failing (when run on multiple nodes) with the error:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ cat err.26.Helloworld-PRL
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ssh_exchange_identification: Connection closed by remote host
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ------------------------------------------------------------------- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; A daemon (pid 8462) died unexpectedly with status 129 while  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; attempting
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to launch so we are aborting.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; There may be more information reported by the environment (see  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; above).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This may be because the daemon was unable to find all the needed  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; shared
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to have
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ------------------------------------------------------------------- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ------------------------------------------------------------------- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun noticed that the job aborted, but has no info as to the  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; process
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that caused that situation.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ------------------------------------------------------------------- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; When the job runs on single node, it runs well with producing the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; output but with an error:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ cat err.23.Helloworld-PRL
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   This will severely limit memory registrations.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   This will severely limit memory registrations.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   This will severely limit memory registrations.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   This will severely limit memory registrations.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   This will severely limit memory registrations.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ------------------------------------------------------------------- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; WARNING: There was an error initializing an OpenFabrics device.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Local host:   node-0-4.local
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Local device: mthca0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ------------------------------------------------------------------- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   This will severely limit memory registrations.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   This will severely limit memory registrations.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   This will severely limit memory registrations.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node-0-4.local:07869] 7 more processes have sent help message
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; help-mpi-btl-openib.txt / error in device init
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node-0-4.local:07869] Set MCA parameter  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;orte_base_help_aggregate&quot; to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0 to see all help / error messages
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; What may be the problem for this behavior?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sangamesh
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
<li><strong>Next message:</strong> <a href="7824.php">Ali Copey: "[OMPI users] MPI_THREAD_MULTIPLE not provided"</a>
<li><strong>Previous message:</strong> <a href="7822.php">Andrea Iob: "Re: [OMPI users] Error compiling v1.3 with icc 10.1.021: PATH_MAX not defined"</a>
<li><strong>In reply to:</strong> <a href="7817.php">Sangamesh B: "Re: [OMPI users] Ompi runs thru cmd line but fails when run thru SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/02/8207.php">Sangamesh B: "Re: [OMPI users] Ompi runs thru cmd line but fails when run thru SGE"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/02/8207.php">Sangamesh B: "Re: [OMPI users] Ompi runs thru cmd line but fails when run thru SGE"</a>
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
