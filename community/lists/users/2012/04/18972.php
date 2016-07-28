<?
$subject_val = "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  9 16:13:27 2012" -->
<!-- isoreceived="20120409201327" -->
<!-- sent="Mon, 09 Apr 2012 22:13:20 +0200" -->
<!-- isosent="20120409201320" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio" -->
<!-- id="4F8342E0.4080707_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAGBXJ-tf8i9HTkpyzN1qa5CW3_9W8pZ49o8dMXsMg-M_hcQY+w_at_mail.gmail.com" -->
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
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-09 16:13:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18973.php">Thatyene Louise Alves de Souza Ramos: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
<li><strong>Previous message:</strong> <a href="18971.php">Greg Blair: "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
<li><strong>In reply to:</strong> <a href="18971.php">Greg Blair: "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18982.php">toufik hadjazi: "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
<li><strong>Reply:</strong> <a href="18982.php">toufik hadjazi: "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
<li><strong>Reply:</strong> <a href="19014.php">Jeffrey Squyres: "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Greg,
<br>
<p>Glad to hear that it works for you.
<br>
<p>And yes, these definitions are necessary for compiling any MPI 
<br>
application on Windows.
<br>
<p><p>Regards,
<br>
Shiqing
<br>
<p>On 2012-04-09 6:12 PM, Greg Blair wrote:
<br>
<span class="quotelev1">&gt; After we had OpenMPI 1.54 working, we moved to OpenMPI 1.55 without incident.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, neither 1.54 nor 1.55  would link any reference to comm_world
</span><br>
<span class="quotelev1">&gt; generated
</span><br>
<span class="quotelev1">&gt; from C or C++ until we defined the following three compiler defines
</span><br>
<span class="quotelev1">&gt;     1. OMPI_IMPORTS
</span><br>
<span class="quotelev1">&gt;     2. OPAL_IMPORTS
</span><br>
<span class="quotelev1">&gt;     3. ORTE_IMPORTS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (drill down the MSVC IDE  menu system: View Solution Explorer,
</span><br>
<span class="quotelev1">&gt; Solution explorer,  properties, C/C++, Preprocessor, Preprocessor
</span><br>
<span class="quotelev1">&gt; Definitions and set OMPI_IMPORTS OPAL_IMPORTS and ORTE_IMPORTS)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 4/9/12, Greg Blair&lt;greg.blair_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev2">&gt;&gt; After we had OpenMPI 1.54 working, we moved to OpenMPI 1.55 without
</span><br>
<span class="quotelev2">&gt;&gt; incident.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, neither 1.54 nor 1.55  would link any reference to comm_world
</span><br>
<span class="quotelev2">&gt;&gt; from C or C++ until we defined the following three compile defines
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
---------------------------------------------------------------
Shiqing Fan
High Performance Computing Center Stuttgart (HLRS)
Tel: ++49(0)711-685-87234      Nobelstrasse 19
Fax: ++49(0)711-685-65832      70569 Stuttgart
<a href="http://www.hlrs.de/organization/people/shiqing-fan/">http://www.hlrs.de/organization/people/shiqing-fan/</a>
email: fan_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18973.php">Thatyene Louise Alves de Souza Ramos: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
<li><strong>Previous message:</strong> <a href="18971.php">Greg Blair: "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
<li><strong>In reply to:</strong> <a href="18971.php">Greg Blair: "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18982.php">toufik hadjazi: "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
<li><strong>Reply:</strong> <a href="18982.php">toufik hadjazi: "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
<li><strong>Reply:</strong> <a href="19014.php">Jeffrey Squyres: "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
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
