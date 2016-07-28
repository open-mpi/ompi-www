<?
$subject_val = "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 10 13:34:30 2012" -->
<!-- isoreceived="20120410173430" -->
<!-- sent="Tue, 10 Apr 2012 17:34:23 +0000" -->
<!-- isosent="20120410173423" -->
<!-- name="toufik hadjazi" -->
<!-- email="h_toufik7_at_[hidden]" -->
<!-- subject="Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio" -->
<!-- id="DUB114-W3253446FF84913C90ABDC1B0340_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4F8342E0.4080707_at_hlrs.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio<br>
<strong>From:</strong> toufik hadjazi (<em>h_toufik7_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-10 13:34:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18983.php">toufik hadjazi: "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
<li><strong>Previous message:</strong> <a href="18981.php">Eloi Gaudry: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<li><strong>In reply to:</strong> <a href="18972.php">Shiqing Fan: "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18983.php">toufik hadjazi: "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
<li><strong>Reply:</strong> <a href="18983.php">toufik hadjazi: "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, 
<br>
still not working for me :((PS: it compiles well without any error but it fails in the execution).the error message is : 
<br>
[Toufik-PC:05628] [[21037,0],0] ORTE_ERROR_LOG: Error in file 
<br>
..\..\..\openmpi-1.5.4\orte\mca\ess\hnp\ess_hnp_module.c at line 215 
<br>
-------------------------------------------------------------------- 
<br>
------ 
<br>
It looks like orte_init failed for some reason; your parallel process is 
<br>
likely to abort. There are many reasons that a parallel process can 
<br>
fail during orte_init; some of which are due to configuration or 
<br>
environment problems. This failure appears to be an internal failure; 
<br>
here's some additional information (which may only be relevant to an 
<br>
Open MPI developer): 
<br>
&nbsp;&nbsp;orte_rml_base_select failed 
<br>
&nbsp;&nbsp;--&gt; Returned value Error (-1) instead of ORTE_SUCCESS 
<br>
best regards,Toufik
<br>
<p><span class="quotelev1">&gt; Date: Mon, 9 Apr 2012 22:13:20 +0200
</span><br>
<span class="quotelev1">&gt; From: fan_at_[hidden]
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; CC: greg.blair_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Greg,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Glad to hear that it works for you.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And yes, these definitions are necessary for compiling any MPI 
</span><br>
<span class="quotelev1">&gt; application on Windows.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Shiqing
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 2012-04-09 6:12 PM, Greg Blair wrote:
</span><br>
<span class="quotelev2">&gt; &gt; After we had OpenMPI 1.54 working, we moved to OpenMPI 1.55 without incident.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; However, neither 1.54 nor 1.55  would link any reference to comm_world
</span><br>
<span class="quotelev2">&gt; &gt; generated
</span><br>
<span class="quotelev2">&gt; &gt; from C or C++ until we defined the following three compiler defines
</span><br>
<span class="quotelev2">&gt; &gt;     1. OMPI_IMPORTS
</span><br>
<span class="quotelev2">&gt; &gt;     2. OPAL_IMPORTS
</span><br>
<span class="quotelev2">&gt; &gt;     3. ORTE_IMPORTS
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; (drill down the MSVC IDE  menu system: View Solution Explorer,
</span><br>
<span class="quotelev2">&gt; &gt; Solution explorer,  properties, C/C++, Preprocessor, Preprocessor
</span><br>
<span class="quotelev2">&gt; &gt; Definitions and set OMPI_IMPORTS OPAL_IMPORTS and ORTE_IMPORTS)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 4/9/12, Greg Blair&lt;greg.blair_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; After we had OpenMPI 1.54 working, we moved to OpenMPI 1.55 without
</span><br>
<span class="quotelev3">&gt; &gt;&gt; incident.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; However, neither 1.54 nor 1.55  would link any reference to comm_world
</span><br>
<span class="quotelev3">&gt; &gt;&gt; from C or C++ until we defined the following three compile defines
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Shiqing Fan
</span><br>
<span class="quotelev1">&gt; High Performance Computing Center Stuttgart (HLRS)
</span><br>
<span class="quotelev1">&gt; Tel: ++49(0)711-685-87234      Nobelstrasse 19
</span><br>
<span class="quotelev1">&gt; Fax: ++49(0)711-685-65832      70569 Stuttgart
</span><br>
<span class="quotelev1">&gt; <a href="http://www.hlrs.de/organization/people/shiqing-fan/">http://www.hlrs.de/organization/people/shiqing-fan/</a>
</span><br>
<span class="quotelev1">&gt; email: fan_at_[hidden]
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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18982/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18983.php">toufik hadjazi: "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
<li><strong>Previous message:</strong> <a href="18981.php">Eloi Gaudry: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<li><strong>In reply to:</strong> <a href="18972.php">Shiqing Fan: "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18983.php">toufik hadjazi: "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
<li><strong>Reply:</strong> <a href="18983.php">toufik hadjazi: "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
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
