<?
$subject_val = "Re: [OMPI users] Ompi runs thru cmd line but fails when run thru SGE";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 26 05:02:17 2009" -->
<!-- isoreceived="20090226100217" -->
<!-- sent="Thu, 26 Feb 2009 11:02:02 +0100" -->
<!-- isosent="20090226100202" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Ompi runs thru cmd line but fails when run thru SGE" -->
<!-- id="53057157-1A0F-4AC0-B7FC-F5B6CBA8F449_at_staff.uni-marburg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="cb60cbc40902252113w1e6c4618p7b5b2398d7681bde_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2009-02-26 05:02:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8210.php">Ricardo Fernández-Perea: "Re: [OMPI users] openmpi 1.2.9 with Xgrid support more information"</a>
<li><strong>Previous message:</strong> <a href="8208.php">Ricardo Fern&#225;ndez-Perea: "Re: [OMPI users] openmpi 1.2.9 with Xgrid support more information"</a>
<li><strong>In reply to:</strong> <a href="8207.php">Sangamesh B: "Re: [OMPI users] Ompi runs thru cmd line but fails when run thru SGE"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>the daemons will fork into daemon land - no accounting, no control by  
<br>
SGE via qdel (nevertheless it runs, just not tightly integrated):
<br>
<p><a href="https://svn.open-mpi.org/trac/ompi/ticket/1783">https://svn.open-mpi.org/trac/ompi/ticket/1783</a>
<br>
<p>-- Reuti
<br>
<p><p>Am 26.02.2009 um 06:13 schrieb Sangamesh B:
<br>
<p><span class="quotelev1">&gt; Hello Reuti,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    I'm sorry for the late response.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Jan 26, 2009 at 7:11 PM, Reuti &lt;reuti_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Am 25.01.2009 um 06:16 schrieb Sangamesh B:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks Reuti for the reply.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sun, Jan 25, 2009 at 2:22 AM, Reuti &lt;reuti_at_staff.uni- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; marburg.de&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Am 24.01.2009 um 17:12 schrieb Jeremy Stout:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The RLIMIT error is very common when using OpenMPI + OFED + Sun  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Grid
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Engine. You can find more information and several remedies here:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I usually resolve this problem by adding &quot;ulimit -l unlimited&quot;  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; near
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the top of the SGE startup script on the computation nodes and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; restarting SGE on every node.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Did you request/set any limits with SGE's h_vmem/h_stack resource
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; request?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Was this also your problem:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://gridengine.sunsource.net/ds/viewMessage.do">http://gridengine.sunsource.net/ds/viewMessage.do</a>? 
</span><br>
<span class="quotelev2">&gt;&gt; dsForumId=38&amp;dsMessageId=99442
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;  I've not posted that mail. But the same setting is not working for  
</span><br>
<span class="quotelev1">&gt; me:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ qconf -sconf
</span><br>
<span class="quotelev1">&gt; global:
</span><br>
<span class="quotelev1">&gt; ..
</span><br>
<span class="quotelev1">&gt; execd_params                 H_MEMORYLOCKED=infinity
</span><br>
<span class="quotelev1">&gt; ..
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But I'm using &quot;unset SGE_ROOT&quot; (suggested by you) inside sge job
</span><br>
<span class="quotelev1">&gt; submission script with a Loose integration of Open MPI with SGE. Its
</span><br>
<span class="quotelev1">&gt; working fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm curious to know why Open MPI-1.3 is not working with Tight
</span><br>
<span class="quotelev1">&gt; Integration to SGE 6.0U8 in a Rocks-4.3 cluster.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In other cluster Open MPI-1.3 works well with Tight Integration to  
</span><br>
<span class="quotelev1">&gt; SGE.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks a lot,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sangamesh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Sangamesh
</span><br>
<span class="quotelev2">&gt;&gt; -- Reuti
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; No.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The used queue is as follows:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; qconf -sq ib.q
</span><br>
<span class="quotelev3">&gt;&gt;&gt; qname                 ib.q
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hostlist              @ibhosts
</span><br>
<span class="quotelev3">&gt;&gt;&gt; seq_no                0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; load_thresholds       np_load_avg=1.75
</span><br>
<span class="quotelev3">&gt;&gt;&gt; suspend_thresholds    NONE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nsuspend              1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; suspend_interval      00:05:00
</span><br>
<span class="quotelev3">&gt;&gt;&gt; priority              0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; min_cpu_interval      00:05:00
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processors            UNDEFINED
</span><br>
<span class="quotelev3">&gt;&gt;&gt; qtype                 BATCH INTERACTIVE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ckpt_list             NONE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pe_list               orte
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rerun                 FALSE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; slots                 8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tmpdir                /tmp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; shell                 /bin/bash
</span><br>
<span class="quotelev3">&gt;&gt;&gt; prolog                NONE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; epilog                NONE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; shell_start_mode      unix_behavior
</span><br>
<span class="quotelev3">&gt;&gt;&gt; starter_method        NONE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; suspend_method        NONE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; resume_method         NONE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; terminate_method      NONE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; notify                00:00:60
</span><br>
<span class="quotelev3">&gt;&gt;&gt; owner_list            NONE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; user_lists            NONE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; xuser_lists           NONE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; subordinate_list      NONE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; complex_values        NONE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; projects              NONE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; xprojects             NONE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; calendar              NONE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; initial_state         default
</span><br>
<span class="quotelev3">&gt;&gt;&gt; s_rt                  INFINITY
</span><br>
<span class="quotelev3">&gt;&gt;&gt; h_rt                  INFINITY
</span><br>
<span class="quotelev3">&gt;&gt;&gt; s_cpu                 INFINITY
</span><br>
<span class="quotelev3">&gt;&gt;&gt; h_cpu                 INFINITY
</span><br>
<span class="quotelev3">&gt;&gt;&gt; s_fsize               INFINITY
</span><br>
<span class="quotelev3">&gt;&gt;&gt; h_fsize               INFINITY
</span><br>
<span class="quotelev3">&gt;&gt;&gt; s_data                INFINITY
</span><br>
<span class="quotelev3">&gt;&gt;&gt; h_data                INFINITY
</span><br>
<span class="quotelev3">&gt;&gt;&gt; s_stack               INFINITY
</span><br>
<span class="quotelev3">&gt;&gt;&gt; h_stack               INFINITY
</span><br>
<span class="quotelev3">&gt;&gt;&gt; s_core                INFINITY
</span><br>
<span class="quotelev3">&gt;&gt;&gt; h_core                INFINITY
</span><br>
<span class="quotelev3">&gt;&gt;&gt; s_rss                 INFINITY
</span><br>
<span class="quotelev3">&gt;&gt;&gt; h_rss                 INFINITY
</span><br>
<span class="quotelev3">&gt;&gt;&gt; s_vmem                INFINITY
</span><br>
<span class="quotelev3">&gt;&gt;&gt; h_vmem                INFINITY
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # qconf -sp orte
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pe_name           orte
</span><br>
<span class="quotelev3">&gt;&gt;&gt; slots             999
</span><br>
<span class="quotelev3">&gt;&gt;&gt; user_lists        NONE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; xuser_lists       NONE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; start_proc_args   /bin/true
</span><br>
<span class="quotelev3">&gt;&gt;&gt; stop_proc_args    /bin/true
</span><br>
<span class="quotelev3">&gt;&gt;&gt; allocation_rule   $fill_up
</span><br>
<span class="quotelev3">&gt;&gt;&gt; control_slaves    TRUE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; job_is_first_task FALSE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; urgency_slots     min
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # qconf -shgrp @ibhosts
</span><br>
<span class="quotelev3">&gt;&gt;&gt; group_name @ibhosts
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hostlist node-0-0.local node-0-1.local node-0-2.local  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node-0-3.local \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         node-0-4.local node-0-5.local node-0-6.local  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node-0-7.local \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         node-0-8.local node-0-9.local node-0-10.local  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node-0-11.local \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         node-0-12.local node-0-13.local node-0-14.local  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node-0-16.local \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         node-0-17.local node-0-18.local node-0-19.local  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node-0-20.local \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         node-0-21.local node-0-22.local
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The Hostnames for IB interface are like ibc0 ibc1.. ibc22
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is this difference caussing the problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ssh issues:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; between master &amp; node: works fine but with some delay.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; between nodes: works fine, no delay
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; From command line the open mpi jobs were run with no error, even
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; master node is not used in hostfile.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sangamesh
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- Reuti
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Jeremy Stout
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Sat, Jan 24, 2009 at 6:06 AM, Sangamesh B &lt;forum.san_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hello all,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  Open MPI 1.3 is installed on Rocks 4.3 Linux cluster with  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; support of
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; SGE i.e using --with-sge.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; But the ompi_info shows only one component:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; # /opt/mpi/openmpi/1.3/intel/bin/ompi_info | grep gridengine
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;               MCA ras: gridengine (MCA v2.0, API v2.0,  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Component v1.3)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Is this right? Because during ompi installation SGE qmaster  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; daemon was
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; not working.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Now the problem is, the open mpi parallel jobs submitted thru
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; gridengine are failing (when run on multiple nodes) with the  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; error:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; $ cat err.26.Helloworld-PRL
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ssh_exchange_identification: Connection closed by remote host
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ----------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ---------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; A daemon (pid 8462) died unexpectedly with status 129 while  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; attempting
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; to launch so we are aborting.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; There may be more information reported by the environment (see  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; above).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; This may be because the daemon was unable to find all the  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; needed shared
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; to have
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; location of the shared libraries on the remote nodes and this  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; will
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ----------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ---------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ----------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ---------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mpirun noticed that the job aborted, but has no info as to the  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; process
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; that caused that situation.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ----------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ---------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; When the job runs on single node, it runs well with producing the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; output but with an error:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; $ cat err.23.Helloworld-PRL
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  This will severely limit memory registrations.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  This will severely limit memory registrations.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  This will severely limit memory registrations.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  This will severely limit memory registrations.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  This will severely limit memory registrations.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ----------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ---------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; WARNING: There was an error initializing an OpenFabrics device.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  Local host:   node-0-4.local
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  Local device: mthca0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ----------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ---------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  This will severely limit memory registrations.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  This will severely limit memory registrations.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  This will severely limit memory registrations.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [node-0-4.local:07869] 7 more processes have sent help message
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; help-mpi-btl-openib.txt / error in device init
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [node-0-4.local:07869] Set MCA parameter  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &quot;orte_base_help_aggregate&quot; to
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 0 to see all help / error messages
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; What may be the problem for this behavior?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Sangamesh
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8210.php">Ricardo Fernández-Perea: "Re: [OMPI users] openmpi 1.2.9 with Xgrid support more information"</a>
<li><strong>Previous message:</strong> <a href="8208.php">Ricardo Fern&#225;ndez-Perea: "Re: [OMPI users] openmpi 1.2.9 with Xgrid support more information"</a>
<li><strong>In reply to:</strong> <a href="8207.php">Sangamesh B: "Re: [OMPI users] Ompi runs thru cmd line but fails when run thru SGE"</a>
<!-- nextthread="start" -->
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
