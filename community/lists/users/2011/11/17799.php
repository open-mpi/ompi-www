<?
$subject_val = "Re: [OMPI users] orte_debugger_select and orte_ess_set_name failed";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 21 07:48:13 2011" -->
<!-- isoreceived="20111121124813" -->
<!-- sent="Mon, 21 Nov 2011 13:48:05 +0100" -->
<!-- isosent="20111121124805" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orte_debugger_select and orte_ess_set_name failed" -->
<!-- id="4ECA4885.7000604_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="002201cca6cf$45f7ca90$d1e75fb0$_at_com" -->
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
<strong>Subject:</strong> Re: [OMPI users] orte_debugger_select and orte_ess_set_name failed<br>
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-21 07:48:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17800.php">Paul Kapinos: "[OMPI users] How are the Open MPI processes spawned?"</a>
<li><strong>Previous message:</strong> <a href="17798.php">Shiqing Fan: "Re: [OMPI users] openmpi and mingw32?"</a>
<li><strong>In reply to:</strong> <a href="17790.php">MM: "[OMPI users] orte_debugger_select and orte_ess_set_name failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17806.php">MM: "Re: [OMPI users] orte_debugger_select and orte_ess_set_name failed"</a>
<li><strong>Reply:</strong> <a href="17806.php">MM: "Re: [OMPI users] orte_debugger_select and orte_ess_set_name failed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Could you please send your config and build log to me? Have you tried 
<br>
with a simpler program? Does this error always happen?
<br>
<p>Regards,
<br>
Shiqing
<br>
<p><p>On 2011-11-19 4:24 PM, MM wrote:
<br>
<span class="quotelev1">&gt; Trying to run my program linked against debug 1.5.4 on vs2010 fails:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun -np 1 .\nhui\Debug\nhui.exe : -np 1 .\nhcomp\Debug\nhcomp.exe
</span><br>
<span class="quotelev1">&gt; [PCNAME:04960] [[1282,0],0] ORTE_ERROR_LOG: Not found in file C:\Program
</span><br>
<span class="quotelev1">&gt; Files\openmpi-1.5.4\orte\mca\ess\hnp\ess_hnp_module.c at line 536
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
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
<span class="quotelev1">&gt;    orte_debugger_select failed
</span><br>
<span class="quotelev1">&gt;    --&gt;  Returned value Not found (-13) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [PCNAME:04960] [[1282,0],0] ORTE_ERROR_LOG: Not found in file C:\Program
</span><br>
<span class="quotelev1">&gt; Files\openmpi-1.5.4\orte\runtime\orte_init.c at line 128
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
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
<span class="quotelev1">&gt;    orte_ess_set_name failed
</span><br>
<span class="quotelev1">&gt;    --&gt;  Returned value Not found (-13) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [LLDNRATDHY9H4J:04960] [[1282,0],0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev1">&gt; C:\Program Files\openmpi-1.5.4\orte\tools\orterun\orterun.c at line 616
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; any help is appreciated,
</span><br>
<span class="quotelev1">&gt; MM
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
<li><strong>Next message:</strong> <a href="17800.php">Paul Kapinos: "[OMPI users] How are the Open MPI processes spawned?"</a>
<li><strong>Previous message:</strong> <a href="17798.php">Shiqing Fan: "Re: [OMPI users] openmpi and mingw32?"</a>
<li><strong>In reply to:</strong> <a href="17790.php">MM: "[OMPI users] orte_debugger_select and orte_ess_set_name failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17806.php">MM: "Re: [OMPI users] orte_debugger_select and orte_ess_set_name failed"</a>
<li><strong>Reply:</strong> <a href="17806.php">MM: "Re: [OMPI users] orte_debugger_select and orte_ess_set_name failed"</a>
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
