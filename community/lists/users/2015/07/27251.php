<?
$subject_val = "Re: [OMPI users] Error while launching Jobs in LSF with OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  3 10:20:17 2015" -->
<!-- isoreceived="20150703142017" -->
<!-- sent="Fri, 3 Jul 2015 07:20:12 -0700" -->
<!-- isosent="20150703142012" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error while launching Jobs in LSF with OpenMPI" -->
<!-- id="AA2C8D7B-6D65-43CE-800F-E95E6413E4FC_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAO-5B6QRE-Rh8AVKdy5vSy+R-z2s_pAMeCpUHnCGM=N5_NVmZw_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-07-03 10:20:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27252.php">Rafael Lago: "[OMPI users] Problems Compiling ULFM"</a>
<li><strong>Previous message:</strong> <a href="27250.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ompi_info in 1.8.x"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/06/27209.php">Rahul Pisharody: "Re: [OMPI users] Error while launching Jobs in LSF with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27262.php">Rahul Pisharody: "Re: [OMPI users] Error while launching Jobs in LSF with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="27262.php">Rahul Pisharody: "Re: [OMPI users] Error while launching Jobs in LSF with OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for delay - was in meetings and traveling all week.
<br>
<p>I don&#226;&#128;&#153;t know anything about the LSF wrapper script, but I suspect it will work just fine. The LSF integration in the 1.8 series has been tested by IBM and is working.
<br>
<p><p><span class="quotelev1">&gt; On Jun 29, 2015, at 7:10 AM, Rahul Pisharody &lt;rpisharody_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you Ralph.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are there any known issues with using the LSF wrapper script mpirun.lsf to launch openmpi runs in RHEL6 ?
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
<span class="quotelev1">&gt; On Wed, Jun 24, 2015 at 3:38 PM, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; You probably should update to OMPI 1.8.6 as we spent some time in the 1.8 series refreshing the LSF support.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Jun 24, 2015 at 3:04 PM, Rahul Pisharody &lt;rpisharody_at_[hidden] &lt;mailto:rpisharody_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hello all, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm trying to launch a job with OpenMPI using the LSF Scheduler.
</span><br>
<span class="quotelev1">&gt; However, when I execute the job, I get the following error :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ORTE_ERROR_LOG: The specified application failed to start in file plm_lsf_module.c at line 305
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; lsb_launch failed: 0
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A couple of archived emails asked to check some of the environment variables and the existence of some executables. From my launch terminal, I've made sure that the Path and Library variables are set accordingly. I'm passing the environment variables through '-x' switch to mpirun.
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/06/27189.php">http://www.open-mpi.org/community/lists/users/2015/06/27189.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/06/27189.php">http://www.open-mpi.org/community/lists/users/2015/06/27189.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/06/27190.php">http://www.open-mpi.org/community/lists/users/2015/06/27190.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/06/27190.php">http://www.open-mpi.org/community/lists/users/2015/06/27190.php</a>&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/06/27209.php">http://www.open-mpi.org/community/lists/users/2015/06/27209.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27251/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27252.php">Rafael Lago: "[OMPI users] Problems Compiling ULFM"</a>
<li><strong>Previous message:</strong> <a href="27250.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ompi_info in 1.8.x"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/06/27209.php">Rahul Pisharody: "Re: [OMPI users] Error while launching Jobs in LSF with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27262.php">Rahul Pisharody: "Re: [OMPI users] Error while launching Jobs in LSF with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="27262.php">Rahul Pisharody: "Re: [OMPI users] Error while launching Jobs in LSF with OpenMPI"</a>
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
