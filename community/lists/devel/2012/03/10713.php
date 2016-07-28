<?
$subject_val = "Re: [OMPI devel] memory bind warning with -bind-to-core and -bind-to-socket";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 14 10:29:15 2012" -->
<!-- isoreceived="20120314142915" -->
<!-- sent="Wed, 14 Mar 2012 08:29:06 -0600" -->
<!-- isosent="20120314142906" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] memory bind warning with -bind-to-core and -bind-to-socket" -->
<!-- id="B19009C0-3A3F-48CA-BCB3-CD436382E591_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3AF945EBF4D3EC41AFE44EED9B0585F35E8323AD03_at_HQMAIL02.nvidia.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] memory bind warning with -bind-to-core and -bind-to-socket<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-14 10:29:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10714.php">Eugene Loh: "[OMPI devel] v1.5 r26132 broken on multiple nodes?"</a>
<li><strong>Previous message:</strong> <a href="10712.php">Rolf vandeVaart: "[OMPI devel] memory bind warning with -bind-to-core and -bind-to-socket"</a>
<li><strong>In reply to:</strong> <a href="10712.php">Rolf vandeVaart: "[OMPI devel] memory bind warning with -bind-to-core and -bind-to-socket"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We should probably improve that warning. It most likely means that libnuma isn't available on that node, but basically it is reporting that hwloc is unable to set the memory binding policy to ensure that all memory is local to the cpu-bound location.
<br>
<p><p>On Mar 14, 2012, at 8:06 AM, Rolf vandeVaart wrote:
<br>
<p><span class="quotelev1">&gt; I am running a simple test and using the -bind-to-core or -bind-to-socket options.  I think the CPU binding is working fine, but I see these warnings about not being able to bind to memory.   Is this expected?  This is trunk code (266128)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [dt]$ mpirun --report-bindings -np 2 -bind-to-core connectivity_c
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WARNING: a request was made to bind a process. While the system supports binding the process itself, at least one node does NOT support binding memory to the process location.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Node:  dt
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is a warning only; your job will continue, though performance may be degraded.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [dt:03600] [[52612,0],0] odls:default binding child [[52612,1],1] to cpus 1,5
</span><br>
<span class="quotelev1">&gt; [dt:03600] [[52612,0],0] odls:default binding child [[52612,1],0] to cpus 0,4
</span><br>
<span class="quotelev1">&gt; [dt:03601] [[52612,1],0] is bound to cpus 0,4 
</span><br>
<span class="quotelev1">&gt; [dt:03602] [[52612,1],1] is bound to cpus 1,5
</span><br>
<span class="quotelev1">&gt; Connectivity test on 2 processes PASSED.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I see this on two different clusters.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; This email message is for the sole use of the intended recipient(s) and may contain
</span><br>
<span class="quotelev1">&gt; confidential information.  Any unauthorized review, use, disclosure or distribution
</span><br>
<span class="quotelev1">&gt; is prohibited.  If you are not the intended recipient, please contact the sender by
</span><br>
<span class="quotelev1">&gt; reply email and destroy all copies of the original message.
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10714.php">Eugene Loh: "[OMPI devel] v1.5 r26132 broken on multiple nodes?"</a>
<li><strong>Previous message:</strong> <a href="10712.php">Rolf vandeVaart: "[OMPI devel] memory bind warning with -bind-to-core and -bind-to-socket"</a>
<li><strong>In reply to:</strong> <a href="10712.php">Rolf vandeVaart: "[OMPI devel] memory bind warning with -bind-to-core and -bind-to-socket"</a>
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
