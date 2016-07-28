<?
$subject_val = "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 12 10:40:26 2015" -->
<!-- isoreceived="20150812144026" -->
<!-- sent="Wed, 12 Aug 2015 23:40:25 +0900" -->
<!-- isosent="20150812144025" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7" -->
<!-- id="CAAkFZ5vD7u9TLZDGPq_mAOFSuE=YSmNCnVenyx4WyfXt11AcSw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="87vbckehi7.fsf_at_pc102091.liv.ac.uk" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-12 10:40:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27438.php">David Shrader: "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
<li><strong>Previous message:</strong> <a href="27436.php">Dave Love: "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
<li><strong>In reply to:</strong> <a href="27436.php">Dave Love: "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/09/27540.php">Lane, William: "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/09/27540.php">Lane, William: "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
basically, without --hetero-nodes, ompi assumes all nodes have the same
<br>
topology (fast startup)
<br>
with --hetero-nodes, ompi does not assume anything and request node
<br>
topology (slower startup)
<br>
<p>I am nor sure if this is still 100% true on all versions.
<br>
iirc, at least on master, a hwloc signature is checked and ompi
<br>
transparently fall back to --heyero-nodes if needed
<br>
<p>bottom line, on a heterogeneous cluster, it is required or safer to use the
<br>
--hetero-nodes option
<br>
<p><p>Cheers,
<br>
<p>Gilles
<br>
<p>On Wednesday, August 12, 2015, Dave Love &lt;d.love_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; &quot;Lane, William&quot; &lt;William.Lane_at_[hidden] &lt;javascript:;&gt;&gt; writes:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I can successfully run my OpenMPI 1.8.7 jobs outside of
</span><br>
<span class="quotelev1">&gt; Son-of-Gridengine but not via qrsh. We're
</span><br>
<span class="quotelev2">&gt; &gt; using CentOS 6.3 and a heterogeneous cluster of hyperthreaded and
</span><br>
<span class="quotelev1">&gt; non-hyperthreaded blades
</span><br>
<span class="quotelev2">&gt; &gt; and x3550 chassis. OpenMPI 1.8.7 has been built w/the debug switch as
</span><br>
<span class="quotelev1">&gt; well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think you want to explain exactly why you need this world of pain.  It
</span><br>
<span class="quotelev1">&gt; seems unlikely that MPI programs will run efficiently in it.  Our Intel
</span><br>
<span class="quotelev1">&gt; nodes mostly have hyperthreading on in BIOS -- or what passes for BIOS
</span><br>
<span class="quotelev1">&gt; on them -- but disabled at startup, and we only run MPI across identical
</span><br>
<span class="quotelev1">&gt; nodes in the heterogeneous system.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Here's my latest errors:
</span><br>
<span class="quotelev2">&gt; &gt; qrsh -V -now yes -pe mpi 209 mpirun -np 209 -display-devel-map --prefix
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.8.7/ --mca btl ^sm --hetero-nodes --bind-to core
</span><br>
<span class="quotelev1">&gt; /hpc/home/lanew/mpi/openmpi/ProcessColors3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [What does --hetero-nodes do?  It's undocumented as far as I can tell.]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; error: executing task of job 211298 failed: execution daemon on host
</span><br>
<span class="quotelev1">&gt; &quot;csclprd3-0-4&quot; didn't accept task
</span><br>
<span class="quotelev2">&gt; &gt; error: executing task of job 211298 failed: execution daemon on host
</span><br>
<span class="quotelev1">&gt; &quot;csclprd3-4-1&quot; didn't accept task
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So you need to find out why that was (probably lack of slots on the exec
</span><br>
<span class="quotelev1">&gt; host, which might be explained in the execd messages).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; [...]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; NOTE: the hosts that &quot;didn't accept task&quot; were different in two
</span><br>
<span class="quotelev1">&gt; different runs but the errors were the same.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Here's the definition of the mpi Parallel Environment on our
</span><br>
<span class="quotelev1">&gt; Son-of-Gridengine cluster:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; pe_name            mpi
</span><br>
<span class="quotelev2">&gt; &gt; slots              9999
</span><br>
<span class="quotelev2">&gt; &gt; user_lists         NONE
</span><br>
<span class="quotelev2">&gt; &gt; xuser_lists        NONE
</span><br>
<span class="quotelev2">&gt; &gt; start_proc_args    /opt/sge/mpi/startmpi.sh $pe_hostfile
</span><br>
<span class="quotelev2">&gt; &gt; stop_proc_args     /opt/sge/mpi/stopmpi.sh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Why are those two not NONE?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; allocation_rule    $fill_up
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As I said, that doesn't seem wise (unless you use -l exclusive).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; control_slaves     FALSE
</span><br>
<span class="quotelev2">&gt; &gt; job_is_first_task  TRUE
</span><br>
<span class="quotelev2">&gt; &gt; urgency_slots      min
</span><br>
<span class="quotelev2">&gt; &gt; accounting_summary TRUE
</span><br>
<span class="quotelev2">&gt; &gt; qsort_args         NONE
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Qsort_args is set to NONE, but it's supposed to be set to TRUE right?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No see sge_pe(5).  (I think the text I supplied for the FAQ is accurate,
</span><br>
<span class="quotelev1">&gt; but reuti might confirm if he's reading this.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Bill L.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If I can run my OpenMPI 1.8.7 jobs outside of Son-of-Gridengine w/no
</span><br>
<span class="quotelev1">&gt; issues it has to be Son-of-Gridengine that's
</span><br>
<span class="quotelev2">&gt; &gt; the issue right?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't see any evidence of an SGE bug, if that's what you mean, but
</span><br>
<span class="quotelev1">&gt; clearly you have a problem if execds won't accept the jobs, and this
</span><br>
<span class="quotelev1">&gt; isn't the place to discuss it.  I asked about SGE core binding, and it's
</span><br>
<span class="quotelev1">&gt; presumably also relevant how slots are defined on the compute nodes, but
</span><br>
<span class="quotelev1">&gt; I'd just say &quot;Don't do that&quot; without a pressing reason.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/08/27436.php">http://www.open-mpi.org/community/lists/users/2015/08/27436.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27437/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27438.php">David Shrader: "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
<li><strong>Previous message:</strong> <a href="27436.php">Dave Love: "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
<li><strong>In reply to:</strong> <a href="27436.php">Dave Love: "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/09/27540.php">Lane, William: "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/09/27540.php">Lane, William: "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
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
