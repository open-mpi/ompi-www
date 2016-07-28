<?
$subject_val = "Re: [OMPI users] Error while launching Jobs in LSF with OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 29 10:10:37 2015" -->
<!-- isoreceived="20150629141037" -->
<!-- sent="Mon, 29 Jun 2015 07:10:17 -0700" -->
<!-- isosent="20150629141017" -->
<!-- name="Rahul Pisharody" -->
<!-- email="rpisharody_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error while launching Jobs in LSF with OpenMPI" -->
<!-- id="CAO-5B6QRE-Rh8AVKdy5vSy+R-z2s_pAMeCpUHnCGM=N5_NVmZw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAMD57ofy4NHK-xmgLyJ-s07VJvDgV3QH+5bCp=Q-w=njrhdhMQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error while launching Jobs in LSF with OpenMPI<br>
<strong>From:</strong> Rahul Pisharody (<em>rpisharody_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-29 10:10:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27210.php">Nathan Hjelm: "Re: [OMPI users] Progress on target of MPI_Win_lock on Infiniband"</a>
<li><strong>Previous message:</strong> <a href="27208.php">&#195;&#133;ke Sandgren: "[OMPI users] Bug in ompi/errhandler/errcode.h (1.8.6)?"</a>
<li><strong>In reply to:</strong> <a href="27190.php">Ralph Castain: "Re: [OMPI users] Error while launching Jobs in LSF with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/07/27251.php">Ralph Castain: "Re: [OMPI users] Error while launching Jobs in LSF with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/07/27251.php">Ralph Castain: "Re: [OMPI users] Error while launching Jobs in LSF with OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you Ralph.
<br>
<p>Are there any known issues with using the LSF wrapper script mpirun.lsf to
<br>
launch openmpi runs in RHEL6 ?
<br>
I will also try to get openmpi updated.
<br>
<p>Thanks,
<br>
Rahul
<br>
<p>On Wed, Jun 24, 2015 at 3:38 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; You probably should update to OMPI 1.8.6 as we spent some time in the 1.8
</span><br>
<span class="quotelev1">&gt; series refreshing the LSF support.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Jun 24, 2015 at 3:04 PM, Rahul Pisharody &lt;rpisharody_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm trying to launch a job with OpenMPI using the LSF Scheduler.
</span><br>
<span class="quotelev2">&gt;&gt; However, when I execute the job, I get the following error :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_ERROR_LOG: The specified application failed to start in file
</span><br>
<span class="quotelev2">&gt;&gt; plm_lsf_module.c at line 305
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; lsb_launch failed: 0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm using OpenMPI 1.6.4
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The LSF version is 9.1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A couple of archived emails asked to check some of the environment
</span><br>
<span class="quotelev2">&gt;&gt; variables and the existence of some executables. From my launch
</span><br>
<span class="quotelev2">&gt;&gt; terminal, I've made sure that the Path and Library variables are set
</span><br>
<span class="quotelev2">&gt;&gt; accordingly. I'm passing the environment variables through '-x' switch to
</span><br>
<span class="quotelev2">&gt;&gt; mpirun.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any idea what might be wrong here ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Rahul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/06/27189.php">http://www.open-mpi.org/community/lists/users/2015/06/27189.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/06/27190.php">http://www.open-mpi.org/community/lists/users/2015/06/27190.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27209/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27210.php">Nathan Hjelm: "Re: [OMPI users] Progress on target of MPI_Win_lock on Infiniband"</a>
<li><strong>Previous message:</strong> <a href="27208.php">&#195;&#133;ke Sandgren: "[OMPI users] Bug in ompi/errhandler/errcode.h (1.8.6)?"</a>
<li><strong>In reply to:</strong> <a href="27190.php">Ralph Castain: "Re: [OMPI users] Error while launching Jobs in LSF with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/07/27251.php">Ralph Castain: "Re: [OMPI users] Error while launching Jobs in LSF with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/07/27251.php">Ralph Castain: "Re: [OMPI users] Error while launching Jobs in LSF with OpenMPI"</a>
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
