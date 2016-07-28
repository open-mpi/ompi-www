<?
$subject_val = "Re: [OMPI users] error with mrmpi and openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 29 12:07:29 2012" -->
<!-- isoreceived="20121129170729" -->
<!-- sent="Thu, 29 Nov 2012 09:07:18 -0800" -->
<!-- isosent="20121129170718" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error with mrmpi and openmpi" -->
<!-- id="DBF77C04-FC7E-416A-A6C2-DDAE15AB5BDD_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="50B786B3.9030200_at_cray.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] error with mrmpi and openmpi<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-29 12:07:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20811.php">Shane Hart: "[OMPI users] MPI_Allreduce with F90 Handles"</a>
<li><strong>Previous message:</strong> <a href="20809.php">Jeff Squyres: "Re: [OMPI users] Can not turn off C++ build."</a>
<li><strong>In reply to:</strong> <a href="20807.php">Howard Pritchard: "Re: [OMPI users] error with mrmpi and openmpi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah, thanks - I was curious as Greenplum is about to release the full port of Hadoop to OpenMPI so it can be run anywhere and support MPI as well. I'm at least a little familiar with this one, but didn't realize it had been distributed.
<br>
<p><p>On Nov 29, 2012, at 8:00 AM, Howard Pritchard &lt;howardp_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mrmpi is an mpi based map reduce implementation developed at sandia labs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Howard
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 11/28/2012 09:20 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 28, 2012, at 12:21 PM, Mariana Vargas Magana&lt;mmarianav_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi openmpi'users
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I now trying to install mrmpi in a cluster to use it with openmpi, I installed locally openmpi with the option --disable-dlopen , I install also mrmpi without apparent problems but when testing with the basic commands in a python27 shell
</span><br>
<span class="quotelev2">&gt;&gt; What is mrmpi?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from mrmpi import mrmpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mr=mrmpi()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I get the following warning, and shell stays waiting without response&#133;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libibverbs: Warning: no userspace device-specific driver found for /sys/class/infiniband_verbs/uverbs0
</span><br>
<span class="quotelev2">&gt;&gt; Looks like OMPI was built with Infiniband support, but we aren't finding the required support libraries wherever the process is running. They were probably present on the machine where you built OMPI. You should check the remote node, and either install the libraries there or re-configure OMPI to ignore inifiniband. See &quot;./configure -h&quot; to find the relevant IB option - I think it is --without-openib
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Help please!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dr. Mariana Vargas-Maga&#241;a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Post-Doctoral Researcher
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Carnegie Mellon University
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Howard Pritchard
</span><br>
<span class="quotelev1">&gt; Software Engineering
</span><br>
<span class="quotelev1">&gt; Cray, Inc.
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20811.php">Shane Hart: "[OMPI users] MPI_Allreduce with F90 Handles"</a>
<li><strong>Previous message:</strong> <a href="20809.php">Jeff Squyres: "Re: [OMPI users] Can not turn off C++ build."</a>
<li><strong>In reply to:</strong> <a href="20807.php">Howard Pritchard: "Re: [OMPI users] error with mrmpi and openmpi"</a>
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
