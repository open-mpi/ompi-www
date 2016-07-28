<?
$subject_val = "Re: [OMPI users] Running openMPI job with torque";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  9 11:22:00 2010" -->
<!-- isoreceived="20100609152200" -->
<!-- sent="Wed, 9 Jun 2010 08:21:30 -0700" -->
<!-- isosent="20100609152130" -->
<!-- name="David Zhang" -->
<!-- email="solarbikedz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running openMPI job with torque" -->
<!-- id="AANLkTikcksqzThHgKx0VoRdh59HfX2m5RJrN8XkV4ZID_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTilRqGjX-V9SUY_pZngasFYKfsWEO03JIYmUYwMw_at_mail.gmail.com" -->
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
<strong>From:</strong> David Zhang (<em>solarbikedz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-09 11:21:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13275.php">Govind: "Re: [OMPI users] Running openMPI job with torque"</a>
<li><strong>Previous message:</strong> <a href="13273.php">Govind: "[OMPI users] Running openMPI job with torque"</a>
<li><strong>In reply to:</strong> <a href="13273.php">Govind: "[OMPI users] Running openMPI job with torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13275.php">Govind: "Re: [OMPI users] Running openMPI job with torque"</a>
<li><strong>Reply:</strong> <a href="13275.php">Govind: "Re: [OMPI users] Running openMPI job with torque"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
what does your my-script.sh looks like?
<br>
<p>On Wed, Jun 9, 2010 at 8:17 AM, Govind &lt;govind.rhul_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
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
<span class="quotelev1">&gt; 42.pbs1 &lt;<a href="http://42.pbs1.pp.rhul.ac.uk/">http://42.pbs1.pp.rhul.ac.uk/</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cat my-script.sh.e41
</span><br>
<span class="quotelev1">&gt; stty: standard input: Invalid argument
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun was unable to launch the specified application as it could not find
</span><br>
<span class="quotelev1">&gt; an executable:
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
<p><p><p><pre>
-- 
David Zhang
University of California, San Diego
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13274/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13275.php">Govind: "Re: [OMPI users] Running openMPI job with torque"</a>
<li><strong>Previous message:</strong> <a href="13273.php">Govind: "[OMPI users] Running openMPI job with torque"</a>
<li><strong>In reply to:</strong> <a href="13273.php">Govind: "[OMPI users] Running openMPI job with torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13275.php">Govind: "Re: [OMPI users] Running openMPI job with torque"</a>
<li><strong>Reply:</strong> <a href="13275.php">Govind: "Re: [OMPI users] Running openMPI job with torque"</a>
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
