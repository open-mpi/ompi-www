<?
$subject_val = "Re: [OMPI users] mpirun takes only single processor instead of multiple processors";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 12 23:19:35 2009" -->
<!-- isoreceived="20090213041935" -->
<!-- sent="Thu, 12 Feb 2009 21:19:25 -0700" -->
<!-- isosent="20090213041925" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun takes only single processor instead of multiple processors" -->
<!-- id="9EE2940F-EBB6-41CD-BFCE-C93BAB79C962_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="a0e0cf520902122012j284488b9obf108c613ac6d1d_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun takes only single processor instead of multiple processors<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-12 23:19:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8053.php">Ramya Narasimhan: "Re: [OMPI users] mpirun takes only single processor instead of multiple processors"</a>
<li><strong>Previous message:</strong> <a href="8051.php">Ramya Narasimhan: "[OMPI users] mpirun takes only single processor instead of multiple processors"</a>
<li><strong>In reply to:</strong> <a href="8051.php">Ramya Narasimhan: "[OMPI users] mpirun takes only single processor instead of multiple processors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8053.php">Ramya Narasimhan: "Re: [OMPI users] mpirun takes only single processor instead of multiple processors"</a>
<li><strong>Reply:</strong> <a href="8053.php">Ramya Narasimhan: "Re: [OMPI users] mpirun takes only single processor instead of multiple processors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Could you pass along what is in your hosts file? Did you set any mca  
<br>
params in the default mca parameter file, or in your environ?
<br>
<p>I note that you redirected stdin. Which rank is running and which is  
<br>
stopped? How big is your input file? I am not familiar with your  
<br>
program - are both ranks expecting to get stdin, or only rank=0?
<br>
<p>Thanks
<br>
Ralph
<br>
<p><p>On Feb 12, 2009, at 9:12 PM, Ramya Narasimhan wrote:
<br>
<p><span class="quotelev1">&gt; Hi All,
</span><br>
<span class="quotelev1">&gt;          I am a new user of Open MPI. I have installed open mpi-1.3  
</span><br>
<span class="quotelev1">&gt; on a RedHat Linux-5  ver system with F77 set as gfortran compiler. I  
</span><br>
<span class="quotelev1">&gt; tested the programs in examples and all ran. When I tried the CHARMM  
</span><br>
<span class="quotelev1">&gt; program with mpirun (2 CPU's) the job runs on single processor and  
</span><br>
<span class="quotelev1">&gt; it is stopped in the other. Actually I clarified that the error is  
</span><br>
<span class="quotelev1">&gt; not with CHARMM. Is there any error in my MPI procedure? I gave the  
</span><br>
<span class="quotelev1">&gt; job run as
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -hostfile hosts -np 2 charmm &lt; *.inp
</span><br>
<span class="quotelev1">&gt; Thanks for any help.
</span><br>
<span class="quotelev1">&gt; Varsha.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8053.php">Ramya Narasimhan: "Re: [OMPI users] mpirun takes only single processor instead of multiple processors"</a>
<li><strong>Previous message:</strong> <a href="8051.php">Ramya Narasimhan: "[OMPI users] mpirun takes only single processor instead of multiple processors"</a>
<li><strong>In reply to:</strong> <a href="8051.php">Ramya Narasimhan: "[OMPI users] mpirun takes only single processor instead of multiple processors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8053.php">Ramya Narasimhan: "Re: [OMPI users] mpirun takes only single processor instead of multiple processors"</a>
<li><strong>Reply:</strong> <a href="8053.php">Ramya Narasimhan: "Re: [OMPI users] mpirun takes only single processor instead of multiple processors"</a>
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
