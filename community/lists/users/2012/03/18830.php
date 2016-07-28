<?
$subject_val = "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 23 05:56:41 2012" -->
<!-- isoreceived="20120323095641" -->
<!-- sent="Fri, 23 Mar 2012 10:56:32 +0100" -->
<!-- isosent="20120323095632" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio" -->
<!-- id="4F6C48D0.3080408_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="loom.20120319T115404-196_at_post.gmane.org" -->
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
<strong>Date:</strong> 2012-03-23 05:56:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18831.php">Júlio Hoffimann: "Re: [OMPI users] SIGTERM propagation across MPI processes"</a>
<li><strong>Previous message:</strong> <a href="18829.php">Ralph Castain: "Re: [OMPI users] SIGTERM propagation across MPI processes"</a>
<li><strong>In reply to:</strong> <a href="18799.php">Toufik: "[OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/04/18912.php">toufik hadjazi: "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Toufik
<br>
<p>Sorry for answering late. Have you found a solution for this problem?
<br>
<p>Could you please provide me some information of your CMake configuration and an output of ompi_info? This might be helpful for me to know what is wrong.
<br>
<p><p>Regards,
<br>
Shiqing
<br>
<p>On 2012-03-19 11:57 AM, Toufik wrote:
<br>
<span class="quotelev1">&gt; Hi everybody,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm trying lately to configure openmpi with visual studio 2010,
</span><br>
<span class="quotelev1">&gt; i did all the linking staff but i keep getting this message :
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
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    orte_rml_base_select failed
</span><br>
<span class="quotelev1">&gt;    --&gt;  Returned value Error (-1) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; could anybody tell me what the problem could be 'cause i don't really
</span><br>
<span class="quotelev1">&gt; know what to do.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks&amp;  regards,
</span><br>
<span class="quotelev1">&gt; Toufik
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
<li><strong>Next message:</strong> <a href="18831.php">Júlio Hoffimann: "Re: [OMPI users] SIGTERM propagation across MPI processes"</a>
<li><strong>Previous message:</strong> <a href="18829.php">Ralph Castain: "Re: [OMPI users] SIGTERM propagation across MPI processes"</a>
<li><strong>In reply to:</strong> <a href="18799.php">Toufik: "[OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/04/18912.php">toufik hadjazi: "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
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
