<?
$subject_val = "[OMPI users] Error while launching Jobs in LSF with OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 24 18:05:16 2015" -->
<!-- isoreceived="20150624220516" -->
<!-- sent="Wed, 24 Jun 2015 15:04:55 -0700" -->
<!-- isosent="20150624220455" -->
<!-- name="Rahul Pisharody" -->
<!-- email="rpisharody_at_[hidden]" -->
<!-- subject="[OMPI users] Error while launching Jobs in LSF with OpenMPI" -->
<!-- id="CAO-5B6SQz-uZEwZQcoNC_qHkkYt3Dhje_2OvNkAUeNVQQ0Ackw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Error while launching Jobs in LSF with OpenMPI<br>
<strong>From:</strong> Rahul Pisharody (<em>rpisharody_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-24 18:04:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27190.php">Ralph Castain: "Re: [OMPI users] Error while launching Jobs in LSF with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="27188.php">Dave Turner: "[OMPI users] vader/sm not being picked up"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27190.php">Ralph Castain: "Re: [OMPI users] Error while launching Jobs in LSF with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="27190.php">Ralph Castain: "Re: [OMPI users] Error while launching Jobs in LSF with OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all,
<br>
<p>I'm trying to launch a job with OpenMPI using the LSF Scheduler.
<br>
However, when I execute the job, I get the following error :
<br>
<p>ORTE_ERROR_LOG: The specified application failed to start in file
<br>
plm_lsf_module.c at line 305
<br>
<p>lsb_launch failed: 0
<br>
<p><p>I'm using OpenMPI 1.6.4
<br>
<p>The LSF version is 9.1
<br>
<p><p>A couple of archived emails asked to check some of the environment
<br>
variables and the existence of some executables. From my launch terminal,
<br>
I've made sure that the Path and Library variables are set accordingly. I'm
<br>
passing the environment variables through '-x' switch to mpirun.
<br>
<p><p>Any idea what might be wrong here ?
<br>
<p><p>Thanks,
<br>
<p>Rahul
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27189/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27190.php">Ralph Castain: "Re: [OMPI users] Error while launching Jobs in LSF with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="27188.php">Dave Turner: "[OMPI users] vader/sm not being picked up"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27190.php">Ralph Castain: "Re: [OMPI users] Error while launching Jobs in LSF with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="27190.php">Ralph Castain: "Re: [OMPI users] Error while launching Jobs in LSF with OpenMPI"</a>
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
