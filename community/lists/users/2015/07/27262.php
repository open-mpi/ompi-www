<?
$subject_val = "Re: [OMPI users] Error while launching Jobs in LSF with OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  7 19:35:22 2015" -->
<!-- isoreceived="20150707233522" -->
<!-- sent="Tue, 7 Jul 2015 16:35:00 -0700" -->
<!-- isosent="20150707233500" -->
<!-- name="Rahul Pisharody" -->
<!-- email="rpisharody_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error while launching Jobs in LSF with OpenMPI" -->
<!-- id="CAO-5B6RKTQii2ZxxhCdcCeYYT=Hwncp767TSbdFPAeBtA+e2bg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="AA2C8D7B-6D65-43CE-800F-E95E6413E4FC_at_open-mpi.org" -->
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
<strong>Date:</strong> 2015-07-07 19:35:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27263.php">Lane, William: "Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash"</a>
<li><strong>Previous message:</strong> <a href="27261.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash"</a>
<li><strong>In reply to:</strong> <a href="27251.php">Ralph Castain: "Re: [OMPI users] Error while launching Jobs in LSF with OpenMPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Ralph and everybody,
<br>
<p>The issue was finally tracked down. It had nothing to do with OpenMPI.
<br>
The LSF Environment Variable LSF_DJOB_DISABLED was set to 'y'. This was
<br>
preventing openmpi from launching jobs spanning multiple machines.
<br>
<p>Thank you all for your hep and suggestions.
<br>
<p>Thanks,
<br>
Rahul
<br>
<p>On Fri, Jul 3, 2015 at 7:20 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Sorry for delay - was in meetings and traveling all week.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don&#226;&#128;&#153;t know anything about the LSF wrapper script, but I suspect it will
</span><br>
<span class="quotelev1">&gt; work just fine. The LSF integration in the 1.8 series has been tested by
</span><br>
<span class="quotelev1">&gt; IBM and is working.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 29, 2015, at 7:10 AM, Rahul Pisharody &lt;rpisharody_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you Ralph.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are there any known issues with using the LSF wrapper script mpirun.lsf to
</span><br>
<span class="quotelev1">&gt; launch openmpi runs in RHEL6 ?
</span><br>
<span class="quotelev1">&gt; I will also try to get openmpi updated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Rahul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Jun 24, 2015 at 3:38 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You probably should update to OMPI 1.8.6 as we spent some time in the 1.8
</span><br>
<span class="quotelev2">&gt;&gt; series refreshing the LSF support.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Jun 24, 2015 at 3:04 PM, Rahul Pisharody &lt;rpisharody_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm trying to launch a job with OpenMPI using the LSF Scheduler.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, when I execute the job, I get the following error :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ORTE_ERROR_LOG: The specified application failed to start in file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; plm_lsf_module.c at line 305
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lsb_launch failed: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm using OpenMPI 1.6.4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The LSF version is 9.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A couple of archived emails asked to check some of the environment
</span><br>
<span class="quotelev3">&gt;&gt;&gt; variables and the existence of some executables. From my launch
</span><br>
<span class="quotelev3">&gt;&gt;&gt; terminal, I've made sure that the Path and Library variables are set
</span><br>
<span class="quotelev3">&gt;&gt;&gt; accordingly. I'm passing the environment variables through '-x' switch to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any idea what might be wrong here ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Rahul
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/06/27189.php">http://www.open-mpi.org/community/lists/users/2015/06/27189.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/06/27190.php">http://www.open-mpi.org/community/lists/users/2015/06/27190.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/06/27209.php">http://www.open-mpi.org/community/lists/users/2015/06/27209.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/07/27251.php">http://www.open-mpi.org/community/lists/users/2015/07/27251.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27262/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27263.php">Lane, William: "Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash"</a>
<li><strong>Previous message:</strong> <a href="27261.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.6, CentOS 6.3, too many slots = crash"</a>
<li><strong>In reply to:</strong> <a href="27251.php">Ralph Castain: "Re: [OMPI users] Error while launching Jobs in LSF with OpenMPI"</a>
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
