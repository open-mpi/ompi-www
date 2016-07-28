<?
$subject_val = "Re: [OMPI users] an MPI process using about 12 file descriptors per neighbour processes - isn't it a bit too much?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 14 12:08:22 2009" -->
<!-- isoreceived="20090814160822" -->
<!-- sent="Fri, 14 Aug 2009 12:08:10 -0400" -->
<!-- isosent="20090814160810" -->
<!-- name="Rolf Vandevaart" -->
<!-- email="Rolf.Vandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] an MPI process using about 12 file descriptors per neighbour processes - isn't it a bit too much?" -->
<!-- id="4A858BEA.1000603_at_Sun.COM" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A855E08.6090500_at_rz.rwth-aachen.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] an MPI process using about 12 file descriptors per neighbour processes - isn't it a bit too much?<br>
<strong>From:</strong> Rolf Vandevaart (<em>Rolf.Vandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-14 12:08:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10365.php">Warner Yuen: "Re: [OMPI users] openmpi with xgrid"</a>
<li><strong>Previous message:</strong> <a href="10363.php">Michael Di Domenico: "Re: [OMPI users] strange IMB runs"</a>
<li><strong>In reply to:</strong> <a href="10360.php">Paul Kapinos: "[OMPI users] an MPI process using about 12 file descriptors per neighbour processes - isn't it a bit too much?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Paul:
<br>
I tried the running the same way as you did and I saw the same thing.  I 
<br>
was using ClusterTools 8.2 (Open MPI 1.3.3r21324) and running on 
<br>
Solaris.  I looked at the mpirun process and it was definitely consuming 
<br>
approximately 12 file descriptors per a.out process.
<br>
<p>&nbsp;&nbsp;burl-ct-v440-0 59 =&gt;limit descriptors
<br>
descriptors     1024
<br>
&nbsp;&nbsp;burl-ct-v440-0 60 =&gt;mpirun -np 84 a.out
<br>
Connectivity test on 84 processes PASSED.
<br>
&nbsp;&nbsp;burl-ct-v440-0 61 =&gt;mpirun -np 85 a.out
<br>
[burl-ct-v440-0:27083] [[38835,0],0] ORTE_ERROR_LOG: The system limit on 
<br>
number of network connections a process can open was reached in file 
<br>
oob_tcp.c at line 446
<br>
--------------------------------------------------------------------------
<br>
Error: system limit exceeded on number of network connections that can 
<br>
be open
<br>
<p>This can be resolved by setting the mca parameter 
<br>
opal_set_max_sys_limits to 1,
<br>
increasing your limit descriptor setting (using limit or ulimit commands),
<br>
or asking the system administrator to increase the system limit.
<br>
--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;burl-ct-v440-0 62 =&gt;
<br>
<p>This should not be happening.  I will try and look to see what is going 
<br>
on.  The process that is complaining is the mpirun process which in this 
<br>
scenario forks/execs all the a.outs.
<br>
<p>Rolf
<br>
<p>On 08/14/09 08:52, Paul Kapinos wrote:
<br>
<span class="quotelev1">&gt; Hi OpenMPI folks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We use Sun MPI (Cluster Tools 8.2) and also native OpenMPI 1.3.3 and we 
</span><br>
<span class="quotelev1">&gt; wonder us about the way OpenMPI devours file descriptors: on our 
</span><br>
<span class="quotelev1">&gt; computers, ulimit -n is currently set to 1024, and we found out that we 
</span><br>
<span class="quotelev1">&gt; may run maximally 84 MPI processes per box, and if we try to run 85 (or 
</span><br>
<span class="quotelev1">&gt; above) processes, we got such error message:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Error: system limit exceeded on number of network connections that can 
</span><br>
<span class="quotelev1">&gt; be open
</span><br>
<span class="quotelev1">&gt; .....
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Simple computing tells us, 1024/85 is about 12. This lets us believe 
</span><br>
<span class="quotelev1">&gt; that there is an single OpenMPI process, which needs 12 file descriptor 
</span><br>
<span class="quotelev1">&gt; per other MPI process.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; By now, we have only one box with more than 100 CPUs on which it may be 
</span><br>
<span class="quotelev1">&gt; meaningfull to run more than 85 processes. But in the quite near future, 
</span><br>
<span class="quotelev1">&gt; many-core boxes are arising (we also ordered 128-way nehalems), so it 
</span><br>
<span class="quotelev1">&gt; may be disadvantageous to consume a lot of file descriptors per MPI 
</span><br>
<span class="quotelev1">&gt; process.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We see a possibility to awod this problem by setting the ulimit for file 
</span><br>
<span class="quotelev1">&gt; descriptor to a higher value.  This is not easy unter linux: you need 
</span><br>
<span class="quotelev1">&gt; either to recompile the kernel (which is not a choise for us), or to set 
</span><br>
<span class="quotelev1">&gt; a root process somewhere which will set the ulimit to a higher value 
</span><br>
<span class="quotelev1">&gt; (which is a security risk and not easy to implement).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We also tryed to set the opal_set_max_sys_limits to 1, as the help says 
</span><br>
<span class="quotelev1">&gt; (by adding  &quot;-mca opal_set_max_sys_limits 1&quot; to the command line), but 
</span><br>
<span class="quotelev1">&gt; we does not see any change of behaviour).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What is your meaning?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Paul Kapinos
</span><br>
<span class="quotelev1">&gt; RZ RWTH Aachen
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #####################################################
</span><br>
<span class="quotelev1">&gt;  /opt/SUNWhpc/HPC8.2/intel/bin/mpiexec -mca opal_set_max_sys_limits 1 
</span><br>
<span class="quotelev1">&gt; -np 86   a.out
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
=========================
rolf.vandevaart_at_[hidden]
781-442-3043
=========================
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10365.php">Warner Yuen: "Re: [OMPI users] openmpi with xgrid"</a>
<li><strong>Previous message:</strong> <a href="10363.php">Michael Di Domenico: "Re: [OMPI users] strange IMB runs"</a>
<li><strong>In reply to:</strong> <a href="10360.php">Paul Kapinos: "[OMPI users] an MPI process using about 12 file descriptors per neighbour processes - isn't it a bit too much?"</a>
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
