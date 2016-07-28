<?
$subject_val = "Re: [OMPI users] mpirun (signal 15 Termination)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 14 13:07:28 2009" -->
<!-- isoreceived="20090114180728" -->
<!-- sent="Wed, 14 Jan 2009 13:07:22 -0500" -->
<!-- isosent="20090114180722" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun (signal 15 Termination)" -->
<!-- id="C25F7DF6-CE38-49B3-84A4-A183E78AC3D7_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="45ae3b650901140846w31dbbd8fs74ba0ed0aaf7c219_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun (signal 15 Termination)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-14 13:07:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7705.php">kmuriki_at_[hidden]: "Re: [OMPI users] slow MPI_BCast for messages size from 24K bytes to 800K bytes. (fwd)"</a>
<li><strong>Previous message:</strong> <a href="7703.php">Hana Milani: "Re: [OMPI users] mpirun (signal 15 Termination)"</a>
<li><strong>In reply to:</strong> <a href="7702.php">Simon Hammond: "Re: [OMPI users] mpirun (signal 15 Termination)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7703.php">Hana Milani: "Re: [OMPI users] mpirun (signal 15 Termination)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Signal 15 (i.e., SIGTERM) can also mean that a job scheduler killed  
<br>
you (e.g., if your job ran out of time).
<br>
<p><p>On Jan 14, 2009, at 11:46 AM, Simon Hammond wrote:
<br>
<p><span class="quotelev1">&gt; Do you get anything else in the output? We sometimes get this but it
</span><br>
<span class="quotelev1">&gt; means the execution has proceeded sucessfully.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Si Hammond
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; High Performance Systems Group
</span><br>
<span class="quotelev1">&gt; Department of Computer Science
</span><br>
<span class="quotelev1">&gt; University of Warwick
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2009/1/14 Hana Milani &lt;hana.milani_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt; Dear all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have to run my code in parallel, therefore, I have installed  
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.2.8
</span><br>
<span class="quotelev2">&gt;&gt; on a core2quad system with suse 11.0 linux and gfortran compiler. I  
</span><br>
<span class="quotelev2">&gt;&gt; have
</span><br>
<span class="quotelev2">&gt;&gt; also downloaded blacs and scalapack from:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.netlib.org/scalapack/scalapack_installer.tgz">http://www.netlib.org/scalapack/scalapack_installer.tgz</a>.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Everything has gone smoothly in installing the code and enabling  
</span><br>
<span class="quotelev2">&gt;&gt; mpi for it,
</span><br>
<span class="quotelev2">&gt;&gt; but when I want to run my test I receive the following error:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that job rank 0 with PID 2407 on node linux-4pel  
</span><br>
<span class="quotelev2">&gt;&gt; exited on
</span><br>
<span class="quotelev2">&gt;&gt; signal 15 (Terminated).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Hana
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="7705.php">kmuriki_at_[hidden]: "Re: [OMPI users] slow MPI_BCast for messages size from 24K bytes to 800K bytes. (fwd)"</a>
<li><strong>Previous message:</strong> <a href="7703.php">Hana Milani: "Re: [OMPI users] mpirun (signal 15 Termination)"</a>
<li><strong>In reply to:</strong> <a href="7702.php">Simon Hammond: "Re: [OMPI users] mpirun (signal 15 Termination)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7703.php">Hana Milani: "Re: [OMPI users] mpirun (signal 15 Termination)"</a>
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
