<?
$subject_val = "Re: [OMPI users] Ompi runs thru cmd line but fails when run thru SGE";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jan 25 00:16:05 2009" -->
<!-- isoreceived="20090125051605" -->
<!-- sent="Sun, 25 Jan 2009 10:46:00 +0530" -->
<!-- isosent="20090125051600" -->
<!-- name="Sangamesh B" -->
<!-- email="forum.san_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Ompi runs thru cmd line but fails when run thru SGE" -->
<!-- id="cb60cbc40901242116g6f37c8efo1393fa4401be2b54_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7F7538C2-967E-48B4-B0FB-9A71B4B45DA6_at_staff.uni-marburg.de" -->
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
<strong>Date:</strong> 2009-01-25 00:16:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7818.php">Ralph Castain: "Re: [OMPI users] 1.3 hangs running 2 exes with different names (Ralph Castain)"</a>
<li><strong>Previous message:</strong> <a href="7816.php">Reuti: "Re: [OMPI users] Ompi runs thru cmd line but fails when run thru SGE"</a>
<li><strong>In reply to:</strong> <a href="7816.php">Reuti: "Re: [OMPI users] Ompi runs thru cmd line but fails when run thru SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7823.php">Reuti: "Re: [OMPI users] Ompi runs thru cmd line but fails when run thru SGE"</a>
<li><strong>Reply:</strong> <a href="7823.php">Reuti: "Re: [OMPI users] Ompi runs thru cmd line but fails when run thru SGE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Reuti for the reply.
<br>
<p>On Sun, Jan 25, 2009 at 2:22 AM, Reuti &lt;reuti_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Am 24.01.2009 um 17:12 schrieb Jeremy Stout:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The RLIMIT error is very common when using OpenMPI + OFED + Sun Grid
</span><br>
<span class="quotelev2">&gt;&gt; Engine. You can find more information and several remedies here:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I usually resolve this problem by adding &quot;ulimit -l unlimited&quot; near
</span><br>
<span class="quotelev2">&gt;&gt; the top of the SGE startup script on the computation nodes and
</span><br>
<span class="quotelev2">&gt;&gt; restarting SGE on every node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Did you request/set any limits with SGE's h_vmem/h_stack resource request?
</span><br>
<span class="quotelev1">&gt;
</span><br>
No.
<br>
<p>The used queue is as follows:
<br>
qconf -sq ib.q
<br>
qname                 ib.q
<br>
hostlist              @ibhosts
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
pe_list               orte
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
shell_start_mode      unix_behavior
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
<p># qconf -sp orte
<br>
pe_name           orte
<br>
slots             999
<br>
user_lists        NONE
<br>
xuser_lists       NONE
<br>
start_proc_args   /bin/true
<br>
stop_proc_args    /bin/true
<br>
allocation_rule   $fill_up
<br>
control_slaves    TRUE
<br>
job_is_first_task FALSE
<br>
urgency_slots     min
<br>
# qconf -shgrp @ibhosts
<br>
group_name @ibhosts
<br>
hostlist node-0-0.local node-0-1.local node-0-2.local node-0-3.local \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node-0-4.local node-0-5.local node-0-6.local node-0-7.local \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node-0-8.local node-0-9.local node-0-10.local node-0-11.local \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node-0-12.local node-0-13.local node-0-14.local node-0-16.local \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node-0-17.local node-0-18.local node-0-19.local node-0-20.local \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node-0-21.local node-0-22.local
<br>
<p>The Hostnames for IB interface are like ibc0 ibc1.. ibc22
<br>
<p>Is this difference caussing the problem.
<br>
<p>ssh issues:
<br>
between master &amp; node: works fine but with some delay.
<br>
<p>between nodes: works fine, no delay
<br>
<p><span class="quotelev1">&gt;From command line the open mpi jobs were run with no error, even
</span><br>
master node is not used in hostfile.
<br>
<p>Thanks,
<br>
Sangamesh
<br>
<p><span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeremy Stout
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sat, Jan 24, 2009 at 6:06 AM, Sangamesh B &lt;forum.san_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Open MPI 1.3 is installed on Rocks 4.3 Linux cluster with support of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SGE i.e using --with-sge.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But the ompi_info shows only one component:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # /opt/mpi/openmpi/1.3/intel/bin/ompi_info | grep gridengine
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                MCA ras: gridengine (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is this right? Because during ompi installation SGE qmaster daemon was
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not working.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Now the problem is, the open mpi parallel jobs submitted thru
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gridengine are failing (when run on multiple nodes) with the error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ cat err.26.Helloworld-PRL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ssh_exchange_identification: Connection closed by remote host
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A daemon (pid 8462) died unexpectedly with status 129 while attempting
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to launch so we are aborting.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev3">&gt;&gt;&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that caused that situation.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When the job runs on single node, it runs well with producing the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; output but with an error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ cat err.23.Helloworld-PRL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   This will severely limit memory registrations.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   This will severely limit memory registrations.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   This will severely limit memory registrations.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   This will severely limit memory registrations.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   This will severely limit memory registrations.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WARNING: There was an error initializing an OpenFabrics device.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Local host:   node-0-4.local
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Local device: mthca0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   This will severely limit memory registrations.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   This will severely limit memory registrations.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libibverbs: Warning: RLIMIT_MEMLOCK is 32768 bytes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   This will severely limit memory registrations.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node-0-4.local:07869] 7 more processes have sent help message
</span><br>
<span class="quotelev3">&gt;&gt;&gt; help-mpi-btl-openib.txt / error in device init
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node-0-4.local:07869] Set MCA parameter &quot;orte_base_help_aggregate&quot; to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0 to see all help / error messages
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What may be the problem for this behavior?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sangamesh
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
<li><strong>Next message:</strong> <a href="7818.php">Ralph Castain: "Re: [OMPI users] 1.3 hangs running 2 exes with different names (Ralph Castain)"</a>
<li><strong>Previous message:</strong> <a href="7816.php">Reuti: "Re: [OMPI users] Ompi runs thru cmd line but fails when run thru SGE"</a>
<li><strong>In reply to:</strong> <a href="7816.php">Reuti: "Re: [OMPI users] Ompi runs thru cmd line but fails when run thru SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7823.php">Reuti: "Re: [OMPI users] Ompi runs thru cmd line but fails when run thru SGE"</a>
<li><strong>Reply:</strong> <a href="7823.php">Reuti: "Re: [OMPI users] Ompi runs thru cmd line but fails when run thru SGE"</a>
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
