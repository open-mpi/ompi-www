<?
$subject_val = "Re: [OMPI users] numactl with torque cpusets";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 21 17:58:34 2011" -->
<!-- isoreceived="20111121225834" -->
<!-- sent="Mon, 21 Nov 2011 17:58:29 -0500" -->
<!-- isosent="20111121225829" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] numactl with torque cpusets" -->
<!-- id="B9EFF695-A2B4-45DD-A355-43EE0BC150E5_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3399E82B-BDFF-4946-8DCE-217575BD360E_at_umich.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] numactl with torque cpusets<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-21 17:58:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17808.php">Shamik Ganguly: "[OMPI users] Shared memory optimizations in OMPI"</a>
<li><strong>Previous message:</strong> <a href="17806.php">MM: "Re: [OMPI users] orte_debugger_select and orte_ess_set_name failed"</a>
<li><strong>In reply to:</strong> <a href="17739.php">Brock Palen: "[OMPI users] numactl with torque cpusets"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
For the web archives...
<br>
<p>Brock and I talked about this in person at SC.  The conversation was much more involved than this seemingly-simple question implied.  :-)
<br>
<p>The short version is:
<br>
<p>- numactl does both memory and processor binding
<br>
- hwloc is the new numactl :-)
<br>
&nbsp;&nbsp;- e.g., see the hwloc-bind(1) command
<br>
- OMPI does both memory and processor binding
<br>
- OMPI 1.5.5 will have an MCA parameter for process-wide memory binding policy
<br>
- Torque cpusets are probably do what is desired: restrict MPI processes to a subset of the processors on a given server (e.g., if multiple Torque jobs are running on the same server)
<br>
<p><p>On Nov 9, 2011, at 1:46 PM, Brock Palen wrote:
<br>
<p><span class="quotelev1">&gt; Question,
</span><br>
<span class="quotelev1">&gt; If we are using torque with TM with cpusets enabled for pinning should we not enable numactl?  Would they conflict with each other?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brock Palen
</span><br>
<span class="quotelev1">&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev1">&gt; Center for Advanced Computing
</span><br>
<span class="quotelev1">&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev1">&gt; (734)936-1985
</span><br>
<span class="quotelev1">&gt; 
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17808.php">Shamik Ganguly: "[OMPI users] Shared memory optimizations in OMPI"</a>
<li><strong>Previous message:</strong> <a href="17806.php">MM: "Re: [OMPI users] orte_debugger_select and orte_ess_set_name failed"</a>
<li><strong>In reply to:</strong> <a href="17739.php">Brock Palen: "[OMPI users] numactl with torque cpusets"</a>
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
