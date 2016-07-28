<?
$subject_val = "[OMPI users] 'readv failed: Connection timed out' issue";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 20 08:55:55 2010" -->
<!-- isoreceived="20100420125555" -->
<!-- sent="Tue, 20 Apr 2010 08:55:50 -0400" -->
<!-- isosent="20100420125550" -->
<!-- name="Jonathan Dursi" -->
<!-- email="ljdursi_at_[hidden]" -->
<!-- subject="[OMPI users] 'readv failed: Connection timed out' issue" -->
<!-- id="499BB67F-DF1D-4167-BBC4-D4E46D09DF85_at_scinet.utoronto.ca" -->
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
<strong>Subject:</strong> [OMPI users] 'readv failed: Connection timed out' issue<br>
<strong>From:</strong> Jonathan Dursi (<em>ljdursi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-20 08:55:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12713.php">Terry Dontje: "Re: [OMPI users] 'readv failed: Connection timed out' issue"</a>
<li><strong>Previous message:</strong> <a href="12711.php">Jeff Squyres: "Re: [OMPI users] unresolved symbol mca_base_param_reg_int"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12713.php">Terry Dontje: "Re: [OMPI users] 'readv failed: Connection timed out' issue"</a>
<li><strong>Reply:</strong> <a href="12713.php">Terry Dontje: "Re: [OMPI users] 'readv failed: Connection timed out' issue"</a>
<li><strong>Reply:</strong> <a href="12727.php">Jeff Squyres: "Re: [OMPI users] 'readv failed: Connection timed out' issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi:
<br>
<p>We've got OpenMPI 1.4.1 and Intel MPI running on our 3000 node system.   We like OpenMPI for large jobs, because the startup time is much faster (and startup is more reliable) than the current defaults with IntelMPI; but we're having some pretty serious problems when the jobs are actually running.   When running medium- to large- sized jobs (say, anything over 500 cores) over ethernet using OpenMPI, several of our users, using a variety of very different sorts of codes, report errors like this:
<br>
<p>[gpc-f102n010][[30331,1],212][btl_tcp_frag.c:214:mca_btl_tcp_frag_recv] 
<br>
mca_btl_tcp_frag_recv: readv failed: Connection timed out (110)
<br>
<p>which sometimes hang the job, or sometimes kill it outright:
<br>
<p>[gpc-f114n073][[23186,1],109][btl_tcp_frag.c:214:mca_btl_tcp_frag_recv]  
<br>
mca_btl_tcp_frag_recv: readv failed: Connection timed out (110)
<br>
[gpc-f114n075][[23186,1],125][btl_tcp_frag.c:214:mca_btl_tcp_frag_recv]  
<br>
mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)
<br>
mpirun: killing job...
<br>
<p>--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 0 with PID 9513 on node gpc-f123n025  
<br>
exited on signal 0 (Unknown signal 0).
<br>
--------------------------------------------------------------------------
<br>
<p>We don't see this problem when the same users, using the same codes, use IntelMPI.  
<br>
<p>Unfortunately, this only happens intermittently, and only with large jobs, so it is hard to track down.    It seems to happen more reliably with larger numbers of processors, but I don't know if that tells us something real about the issue, or just that larger N -&gt; better statistics.     For one users code, it definitely occurs during an MPI_Wait (this particular code has been run on a wide variety of machines with a wide variety of MPIs -- which isn't proof of correctness of course, but everything looks fine), for others it is less clear.   I don't know if it's an OpenMPI issue, or just represents a network issue which Intel's MPI happens to be more tolerant of with the default set of  parameters.   It's also unclear whether or not this issue occurred with earlier OpenMPI versions.
<br>
<p>Where should I start looking to find out what is going on?   Are there parameters that can be adjusted to play with timeouts to see if the issue can be localized, or worked around?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Jonathan
<br>
<pre>
-- 
Jonathan Dursi &lt;ljdursi_at_[hidden]&gt;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12713.php">Terry Dontje: "Re: [OMPI users] 'readv failed: Connection timed out' issue"</a>
<li><strong>Previous message:</strong> <a href="12711.php">Jeff Squyres: "Re: [OMPI users] unresolved symbol mca_base_param_reg_int"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12713.php">Terry Dontje: "Re: [OMPI users] 'readv failed: Connection timed out' issue"</a>
<li><strong>Reply:</strong> <a href="12713.php">Terry Dontje: "Re: [OMPI users] 'readv failed: Connection timed out' issue"</a>
<li><strong>Reply:</strong> <a href="12727.php">Jeff Squyres: "Re: [OMPI users] 'readv failed: Connection timed out' issue"</a>
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
