<?
$subject_val = "Re: [OMPI users] OpenMPI 1.8 and PGI compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 25 13:26:28 2014" -->
<!-- isoreceived="20140425172628" -->
<!-- sent="Fri, 25 Apr 2014 10:26:22 -0700" -->
<!-- isosent="20140425172622" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.8 and PGI compilers" -->
<!-- id="8E82B15C-0795-481E-AB35-6AF776F91B7C_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="ADC981242279AD408816CB7141A2789D7B8A2FEC_at_GROWLER.ern.nps.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.8 and PGI compilers<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-25 13:26:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24258.php">Vince Grimes: "[OMPI users] Connection timed out on TCP"</a>
<li><strong>Previous message:</strong> <a href="24256.php">Andrus, Brian Contractor: "[OMPI users] OpenMPI 1.8 and PGI compilers"</a>
<li><strong>In reply to:</strong> <a href="24256.php">Andrus, Brian Contractor: "[OMPI users] OpenMPI 1.8 and PGI compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24263.php">Hjelm, Nathan T: "Re: [OMPI users] OpenMPI 1.8 and PGI compilers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm....we haven't heard a problem like that, but if you don't have Xeon Phi devices on your machine, one simple workaround would be to add
<br>
<p>--enable-mca-no-build=btl-scif
<br>
<p>to your configure line
<br>
<p>On Apr 25, 2014, at 10:22 AM, Andrus, Brian Contractor &lt;bdandrus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; All,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have been unable to compile OpenMPI 1.8 using PGI compilers (13.6, 13.10 or 14.3)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; EVERY time, I get the error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; PGC-S-0094-Illegal type conversion required (btl_scif_component.c: 215)
</span><br>
<span class="quotelev1">&gt; PGC/x86-64 Linux 14.3-0: compilation completed with severe errors
</span><br>
<span class="quotelev1">&gt; make[2]: *** [btl_scif_component.lo] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Has anyone successfully built OpenMPI 1.8 with PGI?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If so, how??
</span><br>
<span class="quotelev1">&gt; I have tried ./configure alone, using &quot;-fast&quot; options, setting -DNO_PGI_OFFSET all to no avail.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian Andrus
</span><br>
<span class="quotelev1">&gt; ITACS/Research Computing
</span><br>
<span class="quotelev1">&gt; Naval Postgraduate School
</span><br>
<span class="quotelev1">&gt; Monterey, California
</span><br>
<span class="quotelev1">&gt; voice: 831-656-6238
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="24258.php">Vince Grimes: "[OMPI users] Connection timed out on TCP"</a>
<li><strong>Previous message:</strong> <a href="24256.php">Andrus, Brian Contractor: "[OMPI users] OpenMPI 1.8 and PGI compilers"</a>
<li><strong>In reply to:</strong> <a href="24256.php">Andrus, Brian Contractor: "[OMPI users] OpenMPI 1.8 and PGI compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24263.php">Hjelm, Nathan T: "Re: [OMPI users] OpenMPI 1.8 and PGI compilers"</a>
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
