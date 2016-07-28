<?
$subject_val = "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 16 14:05:40 2012" -->
<!-- isoreceived="20120416180540" -->
<!-- sent="Mon, 16 Apr 2012 20:05:33 +0200" -->
<!-- isosent="20120416180533" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio" -->
<!-- id="4F8C5F6D.5030502_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CA5DB955-ABDA-4D87-8F1D-1A1B93D7AA39_at_cisco.com" -->
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
<strong>Date:</strong> 2012-04-16 14:05:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19022.php">Shiqing Fan: "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
<li><strong>Previous message:</strong> <a href="19020.php">George Bosilca: "Re: [OMPI users] Sharing (not copying) data with OpenMPI?"</a>
<li><strong>In reply to:</strong> <a href="19014.php">Jeffrey Squyres: "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19019.php">Jeffrey Squyres: "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>They are definitions for enabling dllexport/import declarations on Windows, and they existed since the initial version for Cygwin. Normally these definitions are hidden via mpicc command wrapper, but on Windows, when user tries to compile a project in Visual Studio, they have to be added manually.
<br>
<p>I think there might be some workaround to get rid of them. Need some time to test.
<br>
<p>Regards,
<br>
Shiqing
<br>
<p><p><p>On 2012-04-16 3:48 PM, Jeffrey Squyres wrote:
<br>
<span class="quotelev1">&gt; Shiqing --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What are these defines?  Shouldn't they be invisible when compiling MPI applications?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 9, 2012, at 4:13 PM, Shiqing Fan wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Greg,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Glad to hear that it works for you.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; And yes, these definitions are necessary for compiling any MPI application on Windows.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Shiqing
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 2012-04-09 6:12 PM, Greg Blair wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; After we had OpenMPI 1.54 working, we moved to OpenMPI 1.55 without incident.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, neither 1.54 nor 1.55  would link any reference to comm_world
</span><br>
<span class="quotelev3">&gt;&gt;&gt; generated
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from C or C++ until we defined the following three compiler defines
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     1. OMPI_IMPORTS
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     2. OPAL_IMPORTS
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     3. ORTE_IMPORTS
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (drill down the MSVC IDE  menu system: View Solution Explorer,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Solution explorer,  properties, C/C++, Preprocessor, Preprocessor
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Definitions and set OMPI_IMPORTS OPAL_IMPORTS and ORTE_IMPORTS)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 4/9/12, Greg Blair&lt;greg.blair_at_[hidden]&gt;   wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; After we had OpenMPI 1.54 working, we moved to OpenMPI 1.55 without
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; incident.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; However, neither 1.54 nor 1.55  would link any reference to comm_world
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; from C or C++ until we defined the following three compile defines
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Shiqing Fan
</span><br>
<span class="quotelev2">&gt;&gt; High Performance Computing Center Stuttgart (HLRS)
</span><br>
<span class="quotelev2">&gt;&gt; Tel: ++49(0)711-685-87234      Nobelstrasse 19
</span><br>
<span class="quotelev2">&gt;&gt; Fax: ++49(0)711-685-65832      70569 Stuttgart
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.hlrs.de/organization/people/shiqing-fan/">http://www.hlrs.de/organization/people/shiqing-fan/</a>
</span><br>
<span class="quotelev2">&gt;&gt; email: fan_at_[hidden]
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
<li><strong>Next message:</strong> <a href="19022.php">Shiqing Fan: "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
<li><strong>Previous message:</strong> <a href="19020.php">George Bosilca: "Re: [OMPI users] Sharing (not copying) data with OpenMPI?"</a>
<li><strong>In reply to:</strong> <a href="19014.php">Jeffrey Squyres: "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19019.php">Jeffrey Squyres: "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
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
