<?
$subject_val = "Re: [OMPI users] Running openMPI job with torque";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  9 11:46:12 2010" -->
<!-- isoreceived="20100609154612" -->
<!-- sent="Wed, 9 Jun 2010 09:46:03 -0600" -->
<!-- isosent="20100609154603" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running openMPI job with torque" -->
<!-- id="AB55F22C-9601-4C23-80D7-93A3B99F5352_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTinR7II6W2RYyNuGrOW5CuLKWm689sqH_hxU29L5_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Running openMPI job with torque<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-09 11:46:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13277.php">Govind Songara: "Re: [OMPI users] Running openMPI job with torque"</a>
<li><strong>Previous message:</strong> <a href="13275.php">Govind: "Re: [OMPI users] Running openMPI job with torque"</a>
<li><strong>In reply to:</strong> <a href="13275.php">Govind: "Re: [OMPI users] Running openMPI job with torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13277.php">Govind Songara: "Re: [OMPI users] Running openMPI job with torque"</a>
<li><strong>Reply:</strong> <a href="13277.php">Govind Songara: "Re: [OMPI users] Running openMPI job with torque"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You need to include the path to &quot;hello&quot; unless it sits in your PATH environment!
<br>
<p>On Jun 9, 2010, at 9:37 AM, Govind wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #!/bin/sh
</span><br>
<span class="quotelev1">&gt; /usr/lib64/openmpi/1.4-gcc/bin/mpirun hello
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 9 June 2010 16:21, David Zhang &lt;solarbikedz_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; what does your my-script.sh looks like?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Jun 9, 2010 at 8:17 AM, Govind &lt;govind.rhul_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hi, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have installed following openMPI packge on worker node from repo
</span><br>
<span class="quotelev1">&gt; openmpi-libs-1.4-4.el5.x86_64
</span><br>
<span class="quotelev1">&gt; openmpi-1.4-4.el5.x86_64
</span><br>
<span class="quotelev1">&gt; mpitests-openmpi-3.0-2.el5.x86_64
</span><br>
<span class="quotelev1">&gt; mpi-selector-1.0.2-1.el5.noarch
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; torque-client-2.3.6-2cri.el5.x86_64
</span><br>
<span class="quotelev1">&gt; torque-2.3.6-2cri.el5.x86_64
</span><br>
<span class="quotelev1">&gt; torque-mom-2.3.6-2cri.el5.x86_64
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Having some problem on running MPI jobs with torque
</span><br>
<span class="quotelev1">&gt; qsub -q long -l nodes=4 my-script.sh 
</span><br>
<span class="quotelev1">&gt; 42.pbs1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; cat my-script.sh.e41
</span><br>
<span class="quotelev1">&gt; stty: standard input: Invalid argument
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun was unable to launch the specified application as it could not find an executable:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Executable: hello
</span><br>
<span class="quotelev1">&gt; Node: node56.beowulf.cluster
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; while attempting to start process rank 0.
</span><br>
<span class="quotelev1">&gt; ==================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I could run the  binary directly on the node without any problem.
</span><br>
<span class="quotelev1">&gt;  mpiexec -n 4 hello
</span><br>
<span class="quotelev1">&gt; Hello World! from process 2 out of 4 on node56.beowulf.cluster
</span><br>
<span class="quotelev1">&gt; Hello World! from process 0 out of 4 on node56.beowulf.cluster
</span><br>
<span class="quotelev1">&gt; Hello World! from process 3 out of 4 on node56.beowulf.cluster
</span><br>
<span class="quotelev1">&gt; Hello World! from process 1 out of 4 on node56.beowulf.cluster
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could you please advise, if I missing anything here.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; Govind
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; David Zhang
</span><br>
<span class="quotelev1">&gt; University of California, San Diego
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13276/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13277.php">Govind Songara: "Re: [OMPI users] Running openMPI job with torque"</a>
<li><strong>Previous message:</strong> <a href="13275.php">Govind: "Re: [OMPI users] Running openMPI job with torque"</a>
<li><strong>In reply to:</strong> <a href="13275.php">Govind: "Re: [OMPI users] Running openMPI job with torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13277.php">Govind Songara: "Re: [OMPI users] Running openMPI job with torque"</a>
<li><strong>Reply:</strong> <a href="13277.php">Govind Songara: "Re: [OMPI users] Running openMPI job with torque"</a>
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
