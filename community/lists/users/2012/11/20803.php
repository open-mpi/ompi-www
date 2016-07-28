<?
$subject_val = "Re: [OMPI users] error with mrmpi and openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 28 23:20:18 2012" -->
<!-- isoreceived="20121129042018" -->
<!-- sent="Wed, 28 Nov 2012 20:20:07 -0800" -->
<!-- isosent="20121129042007" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error with mrmpi and openmpi" -->
<!-- id="C14FCF71-F5D1-4C1E-976C-FC5BF7AD7BED_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="BB047A7C-981E-492C-925F-FEB9579987BB_at_yahoo.com.mx" -->
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
<strong>Date:</strong> 2012-11-28 23:20:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20804.php">Ralph Castain: "Re: [OMPI users] cluster with iOS or Android devices?"</a>
<li><strong>Previous message:</strong> <a href="20802.php">Syed Ahsan Ali: "Re: [OMPI users] Infiniband errors"</a>
<li><strong>In reply to:</strong> <a href="20795.php">Mariana Vargas Magana: "[OMPI users] error with mrmpi and openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20806.php">Jeff Squyres: "Re: [OMPI users] error with mrmpi and openmpi"</a>
<li><strong>Reply:</strong> <a href="20806.php">Jeff Squyres: "Re: [OMPI users] error with mrmpi and openmpi"</a>
<li><strong>Reply:</strong> <a href="20807.php">Howard Pritchard: "Re: [OMPI users] error with mrmpi and openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 28, 2012, at 12:21 PM, Mariana Vargas Magana &lt;mmarianav_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi openmpi'users
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I now trying to install mrmpi in a cluster to use it with openmpi, I installed locally openmpi with the option --disable-dlopen , I install also mrmpi without apparent problems but when testing with the basic commands in a python27 shell 
</span><br>
<p>What is mrmpi?
<br>
<p><span class="quotelev1">&gt; from mrmpi import mrmpi
</span><br>
<span class="quotelev1">&gt; mr=mrmpi()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I get the following warning, and shell stays waiting without response&#133;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; libibverbs: Warning: no userspace device-specific driver found for /sys/class/infiniband_verbs/uverbs0
</span><br>
<p>Looks like OMPI was built with Infiniband support, but we aren't finding the required support libraries wherever the process is running. They were probably present on the machine where you built OMPI. You should check the remote node, and either install the libraries there or re-configure OMPI to ignore inifiniband. See &quot;./configure -h&quot; to find the relevant IB option - I think it is --without-openib
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Help please!
</span><br>
<span class="quotelev1">&gt; Dr. Mariana Vargas-Maga&#241;a
</span><br>
<span class="quotelev1">&gt; Post-Doctoral Researcher 
</span><br>
<span class="quotelev1">&gt; Carnegie Mellon University
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
<li><strong>Next message:</strong> <a href="20804.php">Ralph Castain: "Re: [OMPI users] cluster with iOS or Android devices?"</a>
<li><strong>Previous message:</strong> <a href="20802.php">Syed Ahsan Ali: "Re: [OMPI users] Infiniband errors"</a>
<li><strong>In reply to:</strong> <a href="20795.php">Mariana Vargas Magana: "[OMPI users] error with mrmpi and openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20806.php">Jeff Squyres: "Re: [OMPI users] error with mrmpi and openmpi"</a>
<li><strong>Reply:</strong> <a href="20806.php">Jeff Squyres: "Re: [OMPI users] error with mrmpi and openmpi"</a>
<li><strong>Reply:</strong> <a href="20807.php">Howard Pritchard: "Re: [OMPI users] error with mrmpi and openmpi"</a>
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
