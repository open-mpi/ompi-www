<?
$subject_val = "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 16 04:47:50 2012" -->
<!-- isoreceived="20120416084750" -->
<!-- sent="Mon, 16 Apr 2012 10:47:43 +0200" -->
<!-- isosent="20120416084743" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio" -->
<!-- id="4F8BDCAF.1050305_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="DUB114-W45E80A3A2152F5CE532558B0340_at_phx.gbl" -->
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
<strong>Date:</strong> 2012-04-16 04:47:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19012.php">Seyyed Mohtadin Hashemi: "Re: [OMPI users] OpenMPI fails to run with -np larger than 10"</a>
<li><strong>Previous message:</strong> <a href="19010.php">Shiqing Fan: "Re: [OMPI users] OpenMpi on a windows Xp tcp network"</a>
<li><strong>In reply to:</strong> <a href="18983.php">toufik hadjazi: "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19013.php">toufik hadjazi: "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
<li><strong>Reply:</strong> <a href="19013.php">toufik hadjazi: "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Toufik,
<br>
<p>Do you have a HPC pack or CCP installed on your windows 7? It seems that 
<br>
Open MPI is trying to use ccp to allocate resources. Is your windows 7 
<br>
64 bit or 32 bit?
<br>
<p><p>Regards,
<br>
Shiqing
<br>
<p>On 2012-04-10 7:43 PM, toufik hadjazi wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; even when i try to run : ompi_clean.exe or any other commande in the 
</span><br>
<span class="quotelev1">&gt; commande line with a supervisor account it fails and gives me the same 
</span><br>
<span class="quotelev1">&gt; error message.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; best regards,
</span><br>
<span class="quotelev1">&gt; Toufik
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; From: h_toufik7_at_[hidden]
</span><br>
<span class="quotelev1">&gt; To: fan_at_[hidden]; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Date: Tue, 10 Apr 2012 17:34:23 +0000
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] configuration of openmpi-1.5.4 with visual 
</span><br>
<span class="quotelev1">&gt; studio
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; still not working for me :(
</span><br>
<span class="quotelev1">&gt; (PS: it compiles well without any error but it fails in the execution).
</span><br>
<span class="quotelev1">&gt; the error message is :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [Toufik-PC:05628] [[21037,0],0] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev1">&gt; ..\..\..\openmpi-1.5.4\orte\mca\ess\hnp\ess_hnp_module.c at line 215
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ------
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort. There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems. This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   orte_rml_base_select failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned value Error (-1) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; best regards,
</span><br>
<span class="quotelev1">&gt; Toufik
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Date: Mon, 9 Apr 2012 22:13:20 +0200
</span><br>
<span class="quotelev2">&gt; &gt; From: fan_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; CC: greg.blair_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] configuration of openmpi-1.5.4 with visual 
</span><br>
<span class="quotelev1">&gt; studio
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi Greg,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Glad to hear that it works for you.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; And yes, these definitions are necessary for compiling any MPI
</span><br>
<span class="quotelev2">&gt; &gt; application on Windows.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt; Shiqing
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 2012-04-09 6:12 PM, Greg Blair wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; After we had OpenMPI 1.54 working, we moved to OpenMPI 1.55 
</span><br>
<span class="quotelev1">&gt; without incident.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; However, neither 1.54 nor 1.55 would link any reference to comm_world
</span><br>
<span class="quotelev3">&gt; &gt; &gt; generated
</span><br>
<span class="quotelev3">&gt; &gt; &gt; from C or C++ until we defined the following three compiler defines
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 1. OMPI_IMPORTS
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 2. OPAL_IMPORTS
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 3. ORTE_IMPORTS
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (drill down the MSVC IDE menu system: View Solution Explorer,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Solution explorer, properties, C/C++, Preprocessor, Preprocessor
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Definitions and set OMPI_IMPORTS OPAL_IMPORTS and ORTE_IMPORTS)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On 4/9/12, Greg Blair&lt;greg.blair_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; After we had OpenMPI 1.54 working, we moved to OpenMPI 1.55 without
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; incident.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; However, neither 1.54 nor 1.55 would link any reference to comm_world
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; from C or C++ until we defined the following three compile defines
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; ---------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; Shiqing Fan
</span><br>
<span class="quotelev2">&gt; &gt; High Performance Computing Center Stuttgart (HLRS)
</span><br>
<span class="quotelev2">&gt; &gt; Tel: ++49(0)711-685-87234 Nobelstrasse 19
</span><br>
<span class="quotelev2">&gt; &gt; Fax: ++49(0)711-685-65832 70569 Stuttgart
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.hlrs.de/organization/people/shiqing-fan/">http://www.hlrs.de/organization/people/shiqing-fan/</a>
</span><br>
<span class="quotelev2">&gt; &gt; email: fan_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________ users mailing list 
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19011/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19012.php">Seyyed Mohtadin Hashemi: "Re: [OMPI users] OpenMPI fails to run with -np larger than 10"</a>
<li><strong>Previous message:</strong> <a href="19010.php">Shiqing Fan: "Re: [OMPI users] OpenMpi on a windows Xp tcp network"</a>
<li><strong>In reply to:</strong> <a href="18983.php">toufik hadjazi: "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19013.php">toufik hadjazi: "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
<li><strong>Reply:</strong> <a href="19013.php">toufik hadjazi: "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
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
