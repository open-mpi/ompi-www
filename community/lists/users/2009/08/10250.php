<?
$subject_val = "Re: [OMPI users] pipes system limit";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  7 11:37:06 2009" -->
<!-- isoreceived="20090807153706" -->
<!-- sent="Fri, 07 Aug 2009 11:36:58 -0400" -->
<!-- isosent="20090807153658" -->
<!-- name="Rolf Vandevaart" -->
<!-- email="Rolf.Vandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] pipes system limit" -->
<!-- id="4A7C4A1A.3060900_at_Sun.COM" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A7C466C.1090002_at_polytech.univ-mrs.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] pipes system limit<br>
<strong>From:</strong> Rolf Vandevaart (<em>Rolf.Vandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-07 11:36:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10251.php">Yann JOBIC: "Re: [OMPI users] pipes system limit"</a>
<li><strong>Previous message:</strong> <a href="10249.php">Yann JOBIC: "[OMPI users] pipes system limit"</a>
<li><strong>In reply to:</strong> <a href="10249.php">Yann JOBIC: "[OMPI users] pipes system limit"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10251.php">Yann JOBIC: "Re: [OMPI users] pipes system limit"</a>
<li><strong>Reply:</strong> <a href="10251.php">Yann JOBIC: "Re: [OMPI users] pipes system limit"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This message is telling you that you have run out of file descriptors. 
<br>
I am surprised that the -mca parameter setting did not fix the problem.
<br>
Can you run limit or ulimit on your shell and send the information?  I 
<br>
typically set my limit to 65536 assuming the system allows it.
<br>
<p>burl-16 58 =&gt;limit descriptors
<br>
descriptors     65536
<br>
burl-16 59 =&gt;
<br>
<p>bash-3.00$ ulimit -n
<br>
65536
<br>
bash-3.00$
<br>
<p><p>Rolf
<br>
<p>On 08/07/09 11:21, Yann JOBIC wrote:
<br>
<span class="quotelev1">&gt; Hello all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm using hpc8.2 :
</span><br>
<span class="quotelev1">&gt; Lidia-jobic% ompi_info
</span><br>
<span class="quotelev1">&gt; Displaying Open MPI information for 32-bit ...
</span><br>
<span class="quotelev1">&gt;                 Package: ClusterTools 8.2
</span><br>
<span class="quotelev1">&gt;                Open MPI: 1.3.3r21324-ct8.2-b09j-r40
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And i've got a X4600 machine (8*4 cores).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When i'm trying to run a 32 processor jobs, i've got :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Lidia-jobic% mpiexec --mca opal_set_max_sys_limits 1 -n 32 ./exe
</span><br>
<span class="quotelev1">&gt; [Lidia:29384] [[61597,0],0] ORTE_ERROR_LOG: The system limit on number 
</span><br>
<span class="quotelev1">&gt; of pipes a process can open was reached in file base/iof_base_setup.c at 
</span><br>
<span class="quotelev1">&gt; line 112
</span><br>
<span class="quotelev1">&gt; [Lidia:29384] [[61597,0],0] ORTE_ERROR_LOG: The system limit on number 
</span><br>
<span class="quotelev1">&gt; of pipes a process can open was reached in file odls_default_module.c at 
</span><br>
<span class="quotelev1">&gt; line 203
</span><br>
<span class="quotelev1">&gt; [Lidia:29384] [[61597,0],0] ORTE_ERROR_LOG: The system limit on number 
</span><br>
<span class="quotelev1">&gt; of network connections a process can open was reached in file oob_tcp.c 
</span><br>
<span class="quotelev1">&gt; at line 446
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Error: system limit exceeded on number of network connections that can 
</span><br>
<span class="quotelev1">&gt; be open
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This can be resolved by setting the mca parameter 
</span><br>
<span class="quotelev1">&gt; opal_set_max_sys_limits to 1,
</span><br>
<span class="quotelev1">&gt; increasing your limit descriptor setting (using limit or ulimit commands),
</span><br>
<span class="quotelev1">&gt; or asking the system administrator to increase the system limit.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried the ulimit, the mca parameter, i've got no idea of where to look 
</span><br>
<span class="quotelev1">&gt; at.
</span><br>
<span class="quotelev1">&gt; I've got the same computer under linux, and it's working fine...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Have you seen it ?
</span><br>
<span class="quotelev1">&gt; Do you know a way to bypass it ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Many thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yann
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
=========================
rolf.vandevaart_at_[hidden]
781-442-3043
=========================
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10251.php">Yann JOBIC: "Re: [OMPI users] pipes system limit"</a>
<li><strong>Previous message:</strong> <a href="10249.php">Yann JOBIC: "[OMPI users] pipes system limit"</a>
<li><strong>In reply to:</strong> <a href="10249.php">Yann JOBIC: "[OMPI users] pipes system limit"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10251.php">Yann JOBIC: "Re: [OMPI users] pipes system limit"</a>
<li><strong>Reply:</strong> <a href="10251.php">Yann JOBIC: "Re: [OMPI users] pipes system limit"</a>
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
