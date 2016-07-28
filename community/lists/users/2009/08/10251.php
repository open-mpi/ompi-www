<?
$subject_val = "Re: [OMPI users] pipes system limit";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  7 11:53:35 2009" -->
<!-- isoreceived="20090807155335" -->
<!-- sent="Fri, 07 Aug 2009 17:53:30 +0200" -->
<!-- isosent="20090807155330" -->
<!-- name="Yann JOBIC" -->
<!-- email="jobic_at_[hidden]" -->
<!-- subject="Re: [OMPI users] pipes system limit" -->
<!-- id="4A7C4DFA.5020506_at_polytech.univ-mrs.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4A7C4A1A.3060900_at_Sun.COM" -->
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
<strong>From:</strong> Yann JOBIC (<em>jobic_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-07 11:53:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10252.php">Gus Correa: "Re: [OMPI users] Performance question about OpenMPI and	MVAPICH2 on	IB"</a>
<li><strong>Previous message:</strong> <a href="10250.php">Rolf Vandevaart: "Re: [OMPI users] pipes system limit"</a>
<li><strong>In reply to:</strong> <a href="10250.php">Rolf Vandevaart: "Re: [OMPI users] pipes system limit"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rolf Vandevaart wrote:
<br>
<span class="quotelev1">&gt; This message is telling you that you have run out of file descriptors. 
</span><br>
<span class="quotelev1">&gt; I am surprised that the -mca parameter setting did not fix the problem.
</span><br>
<span class="quotelev1">&gt; Can you run limit or ulimit on your shell and send the information?  I 
</span><br>
<span class="quotelev1">&gt; typically set my limit to 65536 assuming the system allows it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; burl-16 58 =&gt;limit descriptors
</span><br>
<span class="quotelev1">&gt; descriptors     65536
</span><br>
<span class="quotelev1">&gt; burl-16 59 =&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; bash-3.00$ ulimit -n
</span><br>
<span class="quotelev1">&gt; 65536
</span><br>
<span class="quotelev1">&gt; bash-3.00$
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rolf
</span><br>
Thanks for the fast answer !
<br>
<p>I've done : limit descriptors 1024  (csh style)
<br>
And that's working fine. I took the linux descriptors by default.
<br>
<p>Thanks again,
<br>
<p>Yann
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 08/07/09 11:21, Yann JOBIC wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hello all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm using hpc8.2 :
</span><br>
<span class="quotelev2">&gt;&gt; Lidia-jobic% ompi_info
</span><br>
<span class="quotelev2">&gt;&gt; Displaying Open MPI information for 32-bit ...
</span><br>
<span class="quotelev2">&gt;&gt;                 Package: ClusterTools 8.2
</span><br>
<span class="quotelev2">&gt;&gt;                Open MPI: 1.3.3r21324-ct8.2-b09j-r40
</span><br>
<span class="quotelev2">&gt;&gt; [...]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; And i've got a X4600 machine (8*4 cores).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When i'm trying to run a 32 processor jobs, i've got :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Lidia-jobic% mpiexec --mca opal_set_max_sys_limits 1 -n 32 ./exe
</span><br>
<span class="quotelev2">&gt;&gt; [Lidia:29384] [[61597,0],0] ORTE_ERROR_LOG: The system limit on 
</span><br>
<span class="quotelev2">&gt;&gt; number of pipes a process can open was reached in file 
</span><br>
<span class="quotelev2">&gt;&gt; base/iof_base_setup.c at line 112
</span><br>
<span class="quotelev2">&gt;&gt; [Lidia:29384] [[61597,0],0] ORTE_ERROR_LOG: The system limit on 
</span><br>
<span class="quotelev2">&gt;&gt; number of pipes a process can open was reached in file 
</span><br>
<span class="quotelev2">&gt;&gt; odls_default_module.c at line 203
</span><br>
<span class="quotelev2">&gt;&gt; [Lidia:29384] [[61597,0],0] ORTE_ERROR_LOG: The system limit on 
</span><br>
<span class="quotelev2">&gt;&gt; number of network connections a process can open was reached in file 
</span><br>
<span class="quotelev2">&gt;&gt; oob_tcp.c at line 446
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Error: system limit exceeded on number of network connections that 
</span><br>
<span class="quotelev2">&gt;&gt; can be open
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This can be resolved by setting the mca parameter 
</span><br>
<span class="quotelev2">&gt;&gt; opal_set_max_sys_limits to 1,
</span><br>
<span class="quotelev2">&gt;&gt; increasing your limit descriptor setting (using limit or ulimit 
</span><br>
<span class="quotelev2">&gt;&gt; commands),
</span><br>
<span class="quotelev2">&gt;&gt; or asking the system administrator to increase the system limit.
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I tried the ulimit, the mca parameter, i've got no idea of where to 
</span><br>
<span class="quotelev2">&gt;&gt; look at.
</span><br>
<span class="quotelev2">&gt;&gt; I've got the same computer under linux, and it's working fine...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Have you seen it ?
</span><br>
<span class="quotelev2">&gt;&gt; Do you know a way to bypass it ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Many thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yann
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
___________________________
Yann JOBIC
HPC engineer
Polytech Marseille DME
IUSTI-CNRS UMR 6595
Technop&#244;le de Ch&#226;teau Gombert
5 rue Enrico Fermi
13453 Marseille cedex 13
Tel : (33) 4 91 10 69 39
  ou  (33) 4 91 10 69 43
Fax : (33) 4 91 10 69 69 
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10252.php">Gus Correa: "Re: [OMPI users] Performance question about OpenMPI and	MVAPICH2 on	IB"</a>
<li><strong>Previous message:</strong> <a href="10250.php">Rolf Vandevaart: "Re: [OMPI users] pipes system limit"</a>
<li><strong>In reply to:</strong> <a href="10250.php">Rolf Vandevaart: "Re: [OMPI users] pipes system limit"</a>
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
