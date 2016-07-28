<?
$subject_val = "Re: [OMPI users] Error while launching Jobs in LSF with OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 24 18:38:16 2015" -->
<!-- isoreceived="20150624223816" -->
<!-- sent="Wed, 24 Jun 2015 15:38:14 -0700" -->
<!-- isosent="20150624223814" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error while launching Jobs in LSF with OpenMPI" -->
<!-- id="CAMD57ofy4NHK-xmgLyJ-s07VJvDgV3QH+5bCp=Q-w=njrhdhMQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAO-5B6SQz-uZEwZQcoNC_qHkkYt3Dhje_2OvNkAUeNVQQ0Ackw_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-24 18:38:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27191.php">Gilles Gouaillardet: "Re: [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<li><strong>Previous message:</strong> <a href="27189.php">Rahul Pisharody: "[OMPI users] Error while launching Jobs in LSF with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="27189.php">Rahul Pisharody: "[OMPI users] Error while launching Jobs in LSF with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27209.php">Rahul Pisharody: "Re: [OMPI users] Error while launching Jobs in LSF with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="27209.php">Rahul Pisharody: "Re: [OMPI users] Error while launching Jobs in LSF with OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You probably should update to OMPI 1.8.6 as we spent some time in the 1.8
<br>
series refreshing the LSF support.
<br>
<p><p>On Wed, Jun 24, 2015 at 3:04 PM, Rahul Pisharody &lt;rpisharody_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Hello all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm trying to launch a job with OpenMPI using the LSF Scheduler.
</span><br>
<span class="quotelev1">&gt; However, when I execute the job, I get the following error :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ORTE_ERROR_LOG: The specified application failed to start in file
</span><br>
<span class="quotelev1">&gt; plm_lsf_module.c at line 305
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; lsb_launch failed: 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm using OpenMPI 1.6.4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The LSF version is 9.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A couple of archived emails asked to check some of the environment
</span><br>
<span class="quotelev1">&gt; variables and the existence of some executables. From my launch terminal,
</span><br>
<span class="quotelev1">&gt; I've made sure that the Path and Library variables are set accordingly. I'm
</span><br>
<span class="quotelev1">&gt; passing the environment variables through '-x' switch to mpirun.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any idea what might be wrong here ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rahul
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/06/27189.php">http://www.open-mpi.org/community/lists/users/2015/06/27189.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27190/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27191.php">Gilles Gouaillardet: "Re: [OMPI users] simple mpi hello world segfaults when coll ml not disabled"</a>
<li><strong>Previous message:</strong> <a href="27189.php">Rahul Pisharody: "[OMPI users] Error while launching Jobs in LSF with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="27189.php">Rahul Pisharody: "[OMPI users] Error while launching Jobs in LSF with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27209.php">Rahul Pisharody: "Re: [OMPI users] Error while launching Jobs in LSF with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="27209.php">Rahul Pisharody: "Re: [OMPI users] Error while launching Jobs in LSF with OpenMPI"</a>
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
