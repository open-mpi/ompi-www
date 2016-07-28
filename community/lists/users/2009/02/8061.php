<?
$subject_val = "Re: [OMPI users] mpirun takes only single processor instead of multiple processors";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 13 08:07:16 2009" -->
<!-- isoreceived="20090213130716" -->
<!-- sent="Fri, 13 Feb 2009 05:07:08 -0800" -->
<!-- isosent="20090213130708" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun takes only single processor instead of multiple processors" -->
<!-- id="C4932538-4249-4241-8578-19B8EB44ECE7_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="a0e0cf520902122048k3afbac55pc1dcfa79d79f7cae_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-13 08:07:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8062.php">jody: "Re: [OMPI users] MPI_PROC_NULL"</a>
<li><strong>Previous message:</strong> <a href="8060.php">jody: "Re: [OMPI users] MPI_PROC_NULL"</a>
<li><strong>In reply to:</strong> <a href="8053.php">Ramya Narasimhan: "Re: [OMPI users] mpirun takes only single processor instead of multiple processors"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you send all the information listed here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p><p><p>On Feb 12, 2009, at 8:48 PM, Ramya Narasimhan wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;         I have entered the IP address of the system in the hosts  
</span><br>
<span class="quotelev1">&gt; file (twice the IP for two  CPU's) .I don't know about this  mca  
</span><br>
<span class="quotelev1">&gt; parameter. Can you please tell me about this or any reference  
</span><br>
<span class="quotelev1">&gt; material for this parameter? Actually the input file is to perform  
</span><br>
<span class="quotelev1">&gt; minimization of the protein using CHARMM program. It is not giving  
</span><br>
<span class="quotelev1">&gt; any error message as which rank stopped. The output shows that the  
</span><br>
<span class="quotelev1">&gt; first charmm stops and the job runs on the other which is fully  
</span><br>
<span class="quotelev1">&gt; completed.
</span><br>
<span class="quotelev1">&gt; When I tried to check for the CPU's it actually encounts, I gave the  
</span><br>
<span class="quotelev1">&gt; command in charmm and it replied only one CPU. Is there anything  
</span><br>
<span class="quotelev1">&gt; wrong in the way of adding CPU's?
</span><br>
<span class="quotelev1">&gt; Thanks for help
</span><br>
<span class="quotelev1">&gt; Varsha.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Feb 13, 2009 at 9:49 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Could you pass along what is in your hosts file? Did you set any mca  
</span><br>
<span class="quotelev1">&gt; params in the default mca parameter file, or in your environ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I note that you redirected stdin. Which rank is running and which is  
</span><br>
<span class="quotelev1">&gt; stopped? How big is your input file? I am not familiar with your  
</span><br>
<span class="quotelev1">&gt; program - are both ranks expecting to get stdin, or only rank=0?
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
<span class="quotelev1">&gt; Hi All,
</span><br>
<span class="quotelev1">&gt;         I am a new user of Open MPI. I have installed open mpi-1.3  
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8062.php">jody: "Re: [OMPI users] MPI_PROC_NULL"</a>
<li><strong>Previous message:</strong> <a href="8060.php">jody: "Re: [OMPI users] MPI_PROC_NULL"</a>
<li><strong>In reply to:</strong> <a href="8053.php">Ramya Narasimhan: "Re: [OMPI users] mpirun takes only single processor instead of multiple processors"</a>
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
