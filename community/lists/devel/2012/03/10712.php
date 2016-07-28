<?
$subject_val = "[OMPI devel] memory bind warning with -bind-to-core and -bind-to-socket";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 14 10:06:50 2012" -->
<!-- isoreceived="20120314140650" -->
<!-- sent="Wed, 14 Mar 2012 07:06:44 -0700" -->
<!-- isosent="20120314140644" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="[OMPI devel] memory bind warning with -bind-to-core and -bind-to-socket" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F35E8323AD03_at_HQMAIL02.nvidia.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] memory bind warning with -bind-to-core and -bind-to-socket<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-14 10:06:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10713.php">Ralph Castain: "Re: [OMPI devel] memory bind warning with -bind-to-core and -bind-to-socket"</a>
<li><strong>Previous message:</strong> <a href="10711.php">Jeffrey Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10713.php">Ralph Castain: "Re: [OMPI devel] memory bind warning with -bind-to-core and -bind-to-socket"</a>
<li><strong>Reply:</strong> <a href="10713.php">Ralph Castain: "Re: [OMPI devel] memory bind warning with -bind-to-core and -bind-to-socket"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am running a simple test and using the -bind-to-core or -bind-to-socket options.  I think the CPU binding is working fine, but I see these warnings about not being able to bind to memory.   Is this expected?  This is trunk code (266128)
<br>
<p>[dt]$ mpirun --report-bindings -np 2 -bind-to-core connectivity_c
<br>
--------------------------------------------------------------------------
<br>
WARNING: a request was made to bind a process. While the system supports binding the process itself, at least one node does NOT support binding memory to the process location.
<br>
<p>&nbsp;&nbsp;Node:  dt
<br>
<p>This is a warning only; your job will continue, though performance may be degraded.
<br>
--------------------------------------------------------------------------
<br>
[dt:03600] [[52612,0],0] odls:default binding child [[52612,1],1] to cpus 1,5
<br>
[dt:03600] [[52612,0],0] odls:default binding child [[52612,1],0] to cpus 0,4
<br>
[dt:03601] [[52612,1],0] is bound to cpus 0,4 
<br>
[dt:03602] [[52612,1],1] is bound to cpus 1,5
<br>
Connectivity test on 2 processes PASSED.
<br>
<p>I see this on two different clusters.
<br>
<p>-----------------------------------------------------------------------------------
<br>
This email message is for the sole use of the intended recipient(s) and may contain
<br>
confidential information.  Any unauthorized review, use, disclosure or distribution
<br>
is prohibited.  If you are not the intended recipient, please contact the sender by
<br>
reply email and destroy all copies of the original message.
<br>
-----------------------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10713.php">Ralph Castain: "Re: [OMPI devel] memory bind warning with -bind-to-core and -bind-to-socket"</a>
<li><strong>Previous message:</strong> <a href="10711.php">Jeffrey Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26106"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10713.php">Ralph Castain: "Re: [OMPI devel] memory bind warning with -bind-to-core and -bind-to-socket"</a>
<li><strong>Reply:</strong> <a href="10713.php">Ralph Castain: "Re: [OMPI devel] memory bind warning with -bind-to-core and -bind-to-socket"</a>
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
