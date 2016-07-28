<?
$subject_val = "Re: [OMPI users] Ompi runs thru cmd line but fails when run thru SGE";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 26 00:13:16 2009" -->
<!-- isoreceived="20090226051316" -->
<!-- sent="Thu, 26 Feb 2009 10:43:11 +0530" -->
<!-- isosent="20090226051311" -->
<!-- name="Sangamesh B" -->
<!-- email="forum.san_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Ompi runs thru cmd line but fails when run thru SGE" -->
<!-- id="cb60cbc40902252113w1e6c4618p7b5b2398d7681bde_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EA43CE26-5777-4046-9DE2-9C3BCAE90649_at_staff.uni-marburg.de" -->
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
<strong>From:</strong> Sangamesh B (<em>forum.san_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-26 00:13:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8208.php">Ricardo Fernández-Perea: "Re: [OMPI users] openmpi 1.2.9 with Xgrid support more information"</a>
<li><strong>Previous message:</strong> <a href="8206.php">Jeff Squyres: "Re: [OMPI users] 3.5 seconds before application launches"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/01/7823.php">Reuti: "Re: [OMPI users] Ompi runs thru cmd line but fails when run thru SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8209.php">Reuti: "Re: [OMPI users] Ompi runs thru cmd line but fails when run thru SGE"</a>
<li><strong>Reply:</strong> <a href="8209.php">Reuti: "Re: [OMPI users] Ompi runs thru cmd line but fails when run thru SGE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Reuti,
<br>
<p>&nbsp;&nbsp;&nbsp;I'm sorry for the late response.
<br>
<p>On Mon, Jan 26, 2009 at 7:11 PM, Reuti &lt;reuti_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Am 25.01.2009 um 06:16 schrieb Sangamesh B:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks Reuti for the reply.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sun, Jan 25, 2009 at 2:22 AM, Reuti &lt;reuti_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Am 24.01.2009 um 17:12 schrieb Jeremy Stout:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The RLIMIT error is very common when using OpenMPI + OFED + Sun Grid
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Engine. You can find more information and several remedies here:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I usually resolve this problem by adding &quot;ulimit -l unlimited&quot; near
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the top of the SGE startup script on the computation nodes and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; restarting SGE on every node.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Did you request/set any limits with SGE's h_vmem/h_stack resource
</span><br>
<span class="quotelev3">&gt;&gt;&gt; request?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Was this also your problem:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://gridengine.sunsource.net/ds/viewMessage.do?dsForumId=38&amp;dsMessageId=99442">http://gridengine.sunsource.net/ds/viewMessage.do?dsForumId=38&amp;dsMessageId=99442</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
&nbsp;I've not posted that mail. But the same setting is not working for me:
<br>
<p>$ qconf -sconf
<br>
global:
<br>
..
<br>
execd_params                 H_MEMORYLOCKED=infinity
<br>
..
<br>
<p>But I'm using &quot;unset SGE_ROOT&quot; (suggested by you) inside sge job
<br>
submission script with a Loose integration of Open MPI with SGE. Its
<br>
working fine.
<br>
<p>I'm curious to know why Open MPI-1.3 is not working with Tight
<br>
Integration to SGE 6.0U8 in a Rocks-4.3 cluster.
<br>
<p>In other cluster Open MPI-1.3 works well with Tight Integration to SGE.
<br>
<p>Thanks a lot,
<br>
<p>Sangamesh
<br>
<p><p>Thanks,
<br>
Sangamesh
<br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; No.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The used queue is as follows:
</span><br>
<span class="quotelev2">&gt;&gt; qconf -sq ib.q
</span><br>
<span class="quotelev2">&gt;&gt; qname &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; ib.q
</span><br>
<span class="quotelev2">&gt;&gt; hostlist &#160; &#160; &#160; &#160; &#160; &#160; &#160;@ibhosts
</span><br>
<span class="quotelev2">&gt;&gt; seq_no &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;0
</span><br>
<span class="quotelev2">&gt;&gt; load_thresholds &#160; &#160; &#160; np_load_avg=1.75
</span><br>
<span class="quotelev2">&gt;&gt; suspend_thresholds &#160; &#160;NONE
</span><br>
<span class="quotelev2">&gt;&gt; nsuspend &#160; &#160; &#160; &#160; &#160; &#160; &#160;1
</span><br>
<span class="quotelev2">&gt;&gt; suspend_interval &#160; &#160; &#160;00:05:00
</span><br>
<span class="quotelev2">&gt;&gt; priority &#160; &#160; &#160; &#160; &#160; &#160; &#160;0
</span><br>
<span class="quotelev2">&gt;&gt; min_cpu_interval &#160; &#160; &#160;00:05:00
</span><br>
<span class="quotelev2">&gt;&gt; processors &#160; &#160; &#160; &#160; &#160; &#160;UNDEFINED
</span><br>
<span class="quotelev2">&gt;&gt; qtype &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; BATCH INTERACTIVE
</span><br>
<span class="quotelev2">&gt;&gt; ckpt_list &#160; &#160; &#160; &#160; &#160; &#160; NONE
</span><br>
<span class="quotelev2">&gt;&gt; pe_list &#160; &#160; &#160; &#160; &#160; &#160; &#160; orte
</span><br>
<span class="quotelev2">&gt;&gt; rerun &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; FALSE
</span><br>
<span class="quotelev2">&gt;&gt; slots &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; 8
</span><br>
<span class="quotelev2">&gt;&gt; tmpdir &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;/tmp
</span><br>
<span class="quotelev2">&gt;&gt; shell &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; /bin/bash
</span><br>
<span class="quotelev2">&gt;&gt; prolog &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;NONE
</span><br>
<span class="quotelev2">&gt;&gt; epilog &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;NONE
</span><br>
<span class="quotelev2">&gt;&gt; shell_start_mode &#160; &#160; &#160;unix_behavior
</span><br>
<span class="quotelev2">&gt;&gt; starter_method &#160; &#160; &#160; &#160;NONE
</span><br>
<span class="quotelev2">&gt;&gt; suspend_method &#160; &#160; &#160; &#160;NONE
</span><br>
<span class="quotelev2">&gt;&gt; resume_method &#160; &#160; &#160; &#160; NONE
</span><br>
<span class="quotelev2">&gt;&gt; terminate_method &#160; &#160; &#160;NONE
</span><br>
<span class="quotelev2">&gt;&gt; notify &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;00:00:60
</span><br>
<span class="quotelev2">&gt;&gt; owner_list &#160; &#160; &#160; &#160; &#160; &#160;NONE
</span><br>
<span class="quotelev2">&gt;&gt; user_lists &#160; &#160; &#160; &#160; &#160; &#160;NONE
</span><br>
<span class="quotelev2">&gt;&gt; xuser_lists &#160; &#160; &#160; &#160; &#160; NONE
</span><br>
<span class="quotelev2">&gt;&gt; subordinate_list &#160; &#160; &#160;NONE
</span><br>
<span class="quotelev2">&gt;&gt; complex_values &#160; &#160; &#160; &#160;NONE
</span><br>
<span class="quotelev2">&gt;&gt; projects &#160; &#160; &#160; &#160; &#160; &#160; &#160;NONE
</span><br>
<span class="quotelev2">&gt;&gt; xprojects &#160; &#160; &#160; &#160; &#160; &#160; NONE
</span><br>
<span class="quotelev2">&gt;&gt; calendar &#160; &#160; &#160; &#160; &#160; &#160; &#160;NONE
</span><br>
<span class="quotelev2">&gt;&gt; initial_state &#160; &#160; &#160; &#160; default
</span><br>
<span class="quotelev2">&gt;&gt; s_rt &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;INFINITY
</span><br>
<span class="quotelev2">&gt;&gt; h_rt &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;INFINITY
</span><br>
<span class="quotelev2">&gt;&gt; s_cpu &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; INFINITY
</span><br>
<span class="quotelev2">&gt;&gt; h_cpu &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; INFINITY
</span><br>
<span class="quotelev2">&gt;&gt; s_fsize &#160; &#160; &#160; &#160; &#160; &#160; &#160; INFINITY
</span><br>
<span class="quotelev2">&gt;&gt; h_fsize &#160; &#160; &#160; &#160; &#160; &#160; &#160; INFINITY
</span><br>
<span class="quotelev2">&gt;&gt; s_data &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;INFINITY
</span><br>
<span class="quotelev2">&gt;&gt; h_data &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;INFINITY
</span><br>
<span class="quotelev2">&gt;&gt; s_stack &#160; &#160; &#160; &#160; &#160; &#160; &#160; INFINITY
</span><br>
<span class="quotelev2">&gt;&gt; h_stack &#160; &#160; &#160; &#160; &#160; &#160; &#160; INFINITY
</span><br>
<span class="quotelev2">&gt;&gt; s_core &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;INFINITY
</span><br>
<span class="quotelev2">&gt;&gt; h_core &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;INFINITY
</span><br>
<span class="quotelev2">&gt;&gt; s_rss &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; INFINITY
</span><br>
<span class="quotelev2">&gt;&gt; h_rss &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; INFINITY
</span><br>
<span class="quotelev2">&gt;&gt; s_vmem &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;INFINITY
</span><br>
<span class="quotelev2">&gt;&gt; h_vmem &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;INFINITY
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # qconf -sp orte
</span><br>
<span class="quotelev2">&gt;&gt; pe_name &#160; &#160; &#160; &#160; &#160; orte
</span><br>
<span class="quotelev2">&gt;&gt; slots &#160; &#160; &#160; &#160; &#160; &#160; 999
</span><br>
<span class="quotelev2">&gt;&gt; user_lists &#160; &#160; &#160; &#160;NONE
</span><br>
<span class="quotelev2">&gt;&gt; xuser_lists &#160; &#160; &#160; NONE
</span><br>
<span class="quotelev2">&gt;&gt; start_proc_args &#160; /bin/true
</span><br>
<span class="quotelev2">&gt;&gt; stop_proc_args &#160; &#160;/bin/true
</span><br>
<span class="quotelev2">&gt;&gt; allocation_rule &#160; $fill_up
</span><br>
<span class="quotelev2">&gt;&gt; control_slaves &#160; &#160;TRUE
</span><br>
<span class="quotelev2">&gt;&gt; job_is_first_task FALSE
</span><br>
<span class="quotelev2">&gt;&gt; urgency_slots &#160; &#160; min
</span><br>
<span class="quotelev2">&gt;&gt; # qconf -shgrp @ibhosts
</span><br>
<span class="quotelev2">&gt;&gt; group_name @ibhosts
</span><br>
<span class="quotelev2">&gt;&gt; hostlist node-0-0.local node-0-1.local node-0-2.local node-0-3.local \
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; node-0-4.local node-0-5.local node-0-6.local node-0-7.local \
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; node-0-8.local node-0-9.local node-0-10.local node-0-11.local \
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; node-0-12.local node-0-13.local node-0-14.local node-0-16.local \
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; node-0-17.local node-0-18.local node-0-19.local node-0-20.local \
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160; node-0-21.local node-0-22.local
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The Hostnames for IB interface are like ibc0 ibc1.. ibc22
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is this difference caussing the problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ssh issues:
</span><br>
<span class="quotelev2">&gt;&gt; between master &amp; node: works fine but with some delay.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; between nodes: works fine, no delay
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From command line the open mpi jobs were run with no error, even
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; master node is not used in hostfile.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Sangamesh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- Reuti
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jeremy Stout
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Sat, Jan 24, 2009 at 6:06 AM, Sangamesh B &lt;forum.san_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hello all,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#160;Open MPI 1.3 is installed on Rocks 4.3 Linux cluster with support of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; SGE i.e using --with-sge.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; But the ompi_info shows only one component:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; # /opt/mpi/openmpi/1.3/intel/bin/ompi_info | grep gridengine
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; MCA ras: gridengine (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Is this right? Because during ompi installation SGE qmaster daemon was
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; not working.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Now the problem is, the open mpi parallel jobs submitted thru
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; gridengine are failing (when run on multiple nodes) with the error:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; $ cat err.26.Helloworld-PRL
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ssh_exchange_identification: Connection closed by remote host
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; A daemon (pid 8462) died unexpectedly with status 129 while attempting
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to launch so we are aborting.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; When the job runs on single node, it runs well with producing the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; output but with an error:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; $ cat err.23.Helloworld-PRL
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#160;This will severely limit memory registrations.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#160;This will severely limit memory registrations.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#160;This will severely limit memory registrations.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#160;This will severely limit memory registrations.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#160;This will severely limit memory registrations.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; WARNING: There was an error initializing an OpenFabrics device.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#160;Local host: &#160; node-0-4.local
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#160;Local device: mthca0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#160;This will severely limit memory registrations.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#160;This will severely limit memory registrations.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#160;This will severely limit memory registrations.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [node-0-4.local:07869] 7 more processes have sent help message
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; help-mpi-btl-openib.txt / error in device init
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [node-0-4.local:07869] Set MCA parameter &quot;orte_base_help_aggregate&quot; to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 0 to see all help / error messages
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; What may be the problem for this behavior?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Sangamesh
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="8208.php">Ricardo Fernández-Perea: "Re: [OMPI users] openmpi 1.2.9 with Xgrid support more information"</a>
<li><strong>Previous message:</strong> <a href="8206.php">Jeff Squyres: "Re: [OMPI users] 3.5 seconds before application launches"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/01/7823.php">Reuti: "Re: [OMPI users] Ompi runs thru cmd line but fails when run thru SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8209.php">Reuti: "Re: [OMPI users] Ompi runs thru cmd line but fails when run thru SGE"</a>
<li><strong>Reply:</strong> <a href="8209.php">Reuti: "Re: [OMPI users] Ompi runs thru cmd line but fails when run thru SGE"</a>
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
