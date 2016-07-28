<?
$subject_val = "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  4 14:28:17 2015" -->
<!-- isoreceived="20150904182817" -->
<!-- sent="Fri, 4 Sep 2015 18:28:11 +0000" -->
<!-- isosent="20150904182811" -->
<!-- name="Lane, William" -->
<!-- email="William.Lane_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7" -->
<!-- id="434F2BB0AF80484CA04DE0D8C0738BF293F035B0_at_cshsmsgmbx01.CSMC.EDU" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAkFZ5vD7u9TLZDGPq_mAOFSuE=YSmNCnVenyx4WyfXt11AcSw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7<br>
<strong>From:</strong> Lane, William (<em>William.Lane_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-04 14:28:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27541.php">Dhanashree N P: "[OMPI users] As one MPI process executes MPI_Barrier(), other processes hang"</a>
<li><strong>Previous message:</strong> <a href="27539.php">Diego Avesani: "Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/08/27437.php">Gilles Gouaillardet: "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27555.php">Dave Love: "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
<li><strong>Reply:</strong> <a href="27555.php">Dave Love: "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Our issues with OpenMPI 1.8.7 and Son-of-Gridengine turned out to be down to using the wrong Parallel Environment. Having a PE with control_slaves set to TRUE and start_proc_args and stop_proc_args set to NONE cleared up all our issues, at least for my MPI test code.
<br>
<p>Qsort_args was left set to NONE, which directly contradicts the FAQ for running OpenMPI through Son-of-Gridengine so maybe the OpenMPI FAQ WRT SOGE should be revised. Qsort_args is an API that involves writing your own function in a dynamically shared object that determines what nodes should be used to schedule a job.
<br>
<p>-Bill L.
<br>
<p>________________________________
<br>
From: users [users-bounces_at_[hidden]] on behalf of Gilles Gouaillardet [gilles.gouaillardet_at_[hidden]]
<br>
Sent: Wednesday, August 12, 2015 7:40 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7
<br>
<p>basically, without --hetero-nodes, ompi assumes all nodes have the same topology (fast startup)
<br>
with --hetero-nodes, ompi does not assume anything and request node topology (slower startup)
<br>
<p>I am nor sure if this is still 100% true on all versions.
<br>
iirc, at least on master, a hwloc signature is checked and ompi transparently fall back to --heyero-nodes if needed
<br>
<p>bottom line, on a heterogeneous cluster, it is required or safer to use the --hetero-nodes option
<br>
<p><p>Cheers,
<br>
<p>Gilles
<br>
<p>On Wednesday, August 12, 2015, Dave Love &lt;d.love_at_[hidden]&lt;mailto:d.love_at_[hidden]&gt;&gt; wrote:
<br>
&quot;Lane, William&quot; &lt;William.Lane_at_[hidden]&lt;UrlBlockedError.aspx&gt;&gt; writes:
<br>
<p><span class="quotelev1">&gt; I can successfully run my OpenMPI 1.8.7 jobs outside of Son-of-Gridengine but not via qrsh. We're
</span><br>
<span class="quotelev1">&gt; using CentOS 6.3 and a heterogeneous cluster of hyperthreaded and non-hyperthreaded blades
</span><br>
<span class="quotelev1">&gt; and x3550 chassis. OpenMPI 1.8.7 has been built w/the debug switch as well.
</span><br>
<p>I think you want to explain exactly why you need this world of pain.  It
<br>
seems unlikely that MPI programs will run efficiently in it.  Our Intel
<br>
nodes mostly have hyperthreading on in BIOS -- or what passes for BIOS
<br>
on them -- but disabled at startup, and we only run MPI across identical
<br>
nodes in the heterogeneous system.
<br>
<p><span class="quotelev1">&gt; Here's my latest errors:
</span><br>
<span class="quotelev1">&gt; qrsh -V -now yes -pe mpi 209 mpirun -np 209 -display-devel-map --prefix /hpc/apps/mpi/openmpi/1.8.7/ --mca btl ^sm --hetero-nodes --bind-to core /hpc/home/lanew/mpi/openmpi/ProcessColors3
</span><br>
<p>[What does --hetero-nodes do?  It's undocumented as far as I can tell.]
<br>
<p><span class="quotelev1">&gt; error: executing task of job 211298 failed: execution daemon on host &quot;csclprd3-0-4&quot; didn't accept task
</span><br>
<span class="quotelev1">&gt; error: executing task of job 211298 failed: execution daemon on host &quot;csclprd3-4-1&quot; didn't accept task
</span><br>
<p>So you need to find out why that was (probably lack of slots on the exec
<br>
host, which might be explained in the execd messages).
<br>
<p><span class="quotelev1">&gt; [...]
</span><br>
<p><span class="quotelev1">&gt; NOTE: the hosts that &quot;didn't accept task&quot; were different in two different runs but the errors were the same.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's the definition of the mpi Parallel Environment on our Son-of-Gridengine cluster:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; pe_name            mpi
</span><br>
<span class="quotelev1">&gt; slots              9999
</span><br>
<span class="quotelev1">&gt; user_lists         NONE
</span><br>
<span class="quotelev1">&gt; xuser_lists        NONE
</span><br>
<span class="quotelev1">&gt; start_proc_args    /opt/sge/mpi/startmpi.sh $pe_hostfile
</span><br>
<span class="quotelev1">&gt; stop_proc_args     /opt/sge/mpi/stopmpi.sh
</span><br>
<p>Why are those two not NONE?
<br>
<p><span class="quotelev1">&gt; allocation_rule    $fill_up
</span><br>
<p>As I said, that doesn't seem wise (unless you use -l exclusive).
<br>
<p><span class="quotelev1">&gt; control_slaves     FALSE
</span><br>
<span class="quotelev1">&gt; job_is_first_task  TRUE
</span><br>
<span class="quotelev1">&gt; urgency_slots      min
</span><br>
<span class="quotelev1">&gt; accounting_summary TRUE
</span><br>
<span class="quotelev1">&gt; qsort_args         NONE
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Qsort_args is set to NONE, but it's supposed to be set to TRUE right?
</span><br>
<p>No see sge_pe(5).  (I think the text I supplied for the FAQ is accurate,
<br>
but reuti might confirm if he's reading this.)
<br>
<p><span class="quotelev1">&gt; -Bill L.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I can run my OpenMPI 1.8.7 jobs outside of Son-of-Gridengine w/no issues it has to be Son-of-Gridengine that's
</span><br>
<span class="quotelev1">&gt; the issue right?
</span><br>
<p>I don't see any evidence of an SGE bug, if that's what you mean, but
<br>
clearly you have a problem if execds won't accept the jobs, and this
<br>
isn't the place to discuss it.  I asked about SGE core binding, and it's
<br>
presumably also relevant how slots are defined on the compute nodes, but
<br>
I'd just say &quot;Don't do that&quot; without a pressing reason.
<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;UrlBlockedError.aspx&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/08/27436.php">http://www.open-mpi.org/community/lists/users/2015/08/27436.php</a>
<br>
IMPORTANT WARNING: This message is intended for the use of the person or entity to which it is addressed and may contain information that is privileged and confidential, the disclosure of which is governed by applicable law. If the reader of this message is not the intended recipient, or the employee or agent responsible for delivering it to the intended recipient, you are hereby notified that any dissemination, distribution or copying of this information is strictly prohibited. Thank you for your cooperation.
<br>
<p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27540/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27541.php">Dhanashree N P: "[OMPI users] As one MPI process executes MPI_Barrier(), other processes hang"</a>
<li><strong>Previous message:</strong> <a href="27539.php">Diego Avesani: "Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/08/27437.php">Gilles Gouaillardet: "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27555.php">Dave Love: "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
<li><strong>Reply:</strong> <a href="27555.php">Dave Love: "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
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
