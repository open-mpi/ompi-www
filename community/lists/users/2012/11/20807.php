<?
$subject_val = "Re: [OMPI users] error with mrmpi and openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 29 11:04:57 2012" -->
<!-- isoreceived="20121129160457" -->
<!-- sent="Thu, 29 Nov 2012 09:00:51 -0700" -->
<!-- isosent="20121129160051" -->
<!-- name="Howard Pritchard" -->
<!-- email="howardp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error with mrmpi and openmpi" -->
<!-- id="50B786B3.9030200_at_cray.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="C14FCF71-F5D1-4C1E-976C-FC5BF7AD7BED_at_open-mpi.org" -->
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
<strong>From:</strong> Howard Pritchard (<em>howardp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-29 11:00:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20808.php">Ray Sheppard: "Re: [OMPI users] Can not turn off C++ build."</a>
<li><strong>Previous message:</strong> <a href="20806.php">Jeff Squyres: "Re: [OMPI users] error with mrmpi and openmpi"</a>
<li><strong>In reply to:</strong> <a href="20803.php">Ralph Castain: "Re: [OMPI users] error with mrmpi and openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20810.php">Ralph Castain: "Re: [OMPI users] error with mrmpi and openmpi"</a>
<li><strong>Reply:</strong> <a href="20810.php">Ralph Castain: "Re: [OMPI users] error with mrmpi and openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>mrmpi is an mpi based map reduce implementation developed at sandia labs.
<br>
<p>Howard
<br>
<p><p>On 11/28/2012 09:20 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; On Nov 28, 2012, at 12:21 PM, Mariana Vargas Magana&lt;mmarianav_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi openmpi'users
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I now trying to install mrmpi in a cluster to use it with openmpi, I installed locally openmpi with the option --disable-dlopen , I install also mrmpi without apparent problems but when testing with the basic commands in a python27 shell
</span><br>
<span class="quotelev1">&gt; What is mrmpi?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; from mrmpi import mrmpi
</span><br>
<span class="quotelev2">&gt;&gt; mr=mrmpi()
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I get the following warning, and shell stays waiting without response&#133;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; libibverbs: Warning: no userspace device-specific driver found for /sys/class/infiniband_verbs/uverbs0
</span><br>
<span class="quotelev1">&gt; Looks like OMPI was built with Infiniband support, but we aren't finding the required support libraries wherever the process is running. They were probably present on the machine where you built OMPI. You should check the remote node, and either install the libraries there or re-configure OMPI to ignore inifiniband. See &quot;./configure -h&quot; to find the relevant IB option - I think it is --without-openib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Help please!
</span><br>
<span class="quotelev2">&gt;&gt; Dr. Mariana Vargas-Maga&#241;a
</span><br>
<span class="quotelev2">&gt;&gt; Post-Doctoral Researcher
</span><br>
<span class="quotelev2">&gt;&gt; Carnegie Mellon University
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
Howard Pritchard
Software Engineering
Cray, Inc.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20808.php">Ray Sheppard: "Re: [OMPI users] Can not turn off C++ build."</a>
<li><strong>Previous message:</strong> <a href="20806.php">Jeff Squyres: "Re: [OMPI users] error with mrmpi and openmpi"</a>
<li><strong>In reply to:</strong> <a href="20803.php">Ralph Castain: "Re: [OMPI users] error with mrmpi and openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20810.php">Ralph Castain: "Re: [OMPI users] error with mrmpi and openmpi"</a>
<li><strong>Reply:</strong> <a href="20810.php">Ralph Castain: "Re: [OMPI users] error with mrmpi and openmpi"</a>
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
