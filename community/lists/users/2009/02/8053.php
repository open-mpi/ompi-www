<?
$subject_val = "Re: [OMPI users] mpirun takes only single processor instead of multiple processors";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 12 23:48:29 2009" -->
<!-- isoreceived="20090213044829" -->
<!-- sent="Fri, 13 Feb 2009 10:18:24 +0530" -->
<!-- isosent="20090213044824" -->
<!-- name="Ramya Narasimhan" -->
<!-- email="varsharamya_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun takes only single processor instead of multiple processors" -->
<!-- id="a0e0cf520902122048k3afbac55pc1dcfa79d79f7cae_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9EE2940F-EBB6-41CD-BFCE-C93BAB79C962_at_lanl.gov" -->
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
<strong>From:</strong> Ramya Narasimhan (<em>varsharamya_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-12 23:48:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8054.php">Ramya Narasimhan: "[OMPI users] running as rank 0 of 1 for 2 processor"</a>
<li><strong>Previous message:</strong> <a href="8052.php">Ralph Castain: "Re: [OMPI users] mpirun takes only single processor instead of multiple processors"</a>
<li><strong>In reply to:</strong> <a href="8052.php">Ralph Castain: "Re: [OMPI users] mpirun takes only single processor instead of multiple processors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8061.php">Jeff Squyres: "Re: [OMPI users] mpirun takes only single processor instead of multiple processors"</a>
<li><strong>Reply:</strong> <a href="8061.php">Jeff Squyres: "Re: [OMPI users] mpirun takes only single processor instead of multiple processors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I have entered the IP address of the system in the hosts file (twice
<br>
the IP for two  CPU's) .I don't know about this  mca parameter. Can you
<br>
please tell me about this or any reference material for this parameter?
<br>
Actually the input file is to perform minimization of the protein using
<br>
CHARMM program. It is not giving any error message as which rank stopped.
<br>
The output shows that the first charmm stops and the job runs on the other
<br>
which is fully completed.
<br>
When I tried to check for the CPU's it actually encounts, I gave the command
<br>
in charmm and it replied only one CPU. Is there anything wrong in the way of
<br>
adding CPU's?
<br>
Thanks for help
<br>
Varsha.
<br>
<p>On Fri, Feb 13, 2009 at 9:49 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Could you pass along what is in your hosts file? Did you set any mca params
</span><br>
<span class="quotelev1">&gt; in the default mca parameter file, or in your environ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I note that you redirected stdin. Which rank is running and which is
</span><br>
<span class="quotelev1">&gt; stopped? How big is your input file? I am not familiar with your program -
</span><br>
<span class="quotelev1">&gt; are both ranks expecting to get stdin, or only rank=0?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 12, 2009, at 9:12 PM, Ramya Narasimhan wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Hi All,
</span><br>
<span class="quotelev2">&gt;&gt;         I am a new user of Open MPI. I have installed open mpi-1.3 on a
</span><br>
<span class="quotelev2">&gt;&gt; RedHat Linux-5  ver system with F77 set as gfortran compiler. I tested the
</span><br>
<span class="quotelev2">&gt;&gt; programs in examples and all ran. When I tried the CHARMM program with
</span><br>
<span class="quotelev2">&gt;&gt; mpirun (2 CPU's) the job runs on single processor and it is stopped in the
</span><br>
<span class="quotelev2">&gt;&gt; other. Actually I clarified that the error is not with CHARMM. Is there any
</span><br>
<span class="quotelev2">&gt;&gt; error in my MPI procedure? I gave the job run as
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -hostfile hosts -np 2 charmm &lt; *.inp
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for any help.
</span><br>
<span class="quotelev2">&gt;&gt; Varsha.
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8053/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8054.php">Ramya Narasimhan: "[OMPI users] running as rank 0 of 1 for 2 processor"</a>
<li><strong>Previous message:</strong> <a href="8052.php">Ralph Castain: "Re: [OMPI users] mpirun takes only single processor instead of multiple processors"</a>
<li><strong>In reply to:</strong> <a href="8052.php">Ralph Castain: "Re: [OMPI users] mpirun takes only single processor instead of multiple processors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8061.php">Jeff Squyres: "Re: [OMPI users] mpirun takes only single processor instead of multiple processors"</a>
<li><strong>Reply:</strong> <a href="8061.php">Jeff Squyres: "Re: [OMPI users] mpirun takes only single processor instead of multiple processors"</a>
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
