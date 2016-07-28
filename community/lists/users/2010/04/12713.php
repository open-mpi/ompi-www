<?
$subject_val = "Re: [OMPI users] 'readv failed: Connection timed out' issue";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 20 09:19:17 2010" -->
<!-- isoreceived="20100420131917" -->
<!-- sent="Tue, 20 Apr 2010 09:18:33 -0400" -->
<!-- isosent="20100420131833" -->
<!-- name="Terry Dontje" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 'readv failed: Connection timed out' issue" -->
<!-- id="4BCDA9A9.3090904_at_oracle.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="499BB67F-DF1D-4167-BBC4-D4E46D09DF85_at_scinet.utoronto.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] 'readv failed: Connection timed out' issue<br>
<strong>From:</strong> Terry Dontje (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-20 09:18:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12714.php">Jonathan Dursi: "Re: [OMPI users] 'readv failed: Connection timed out' issue"</a>
<li><strong>Previous message:</strong> <a href="12712.php">Jonathan Dursi: "[OMPI users] 'readv failed: Connection timed out' issue"</a>
<li><strong>In reply to:</strong> <a href="12712.php">Jonathan Dursi: "[OMPI users] 'readv failed: Connection timed out' issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12714.php">Jonathan Dursi: "Re: [OMPI users] 'readv failed: Connection timed out' issue"</a>
<li><strong>Reply:</strong> <a href="12714.php">Jonathan Dursi: "Re: [OMPI users] 'readv failed: Connection timed out' issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jonathan,
<br>
<p>Do you know what the top level function is or communication pattern? Is 
<br>
it some type of collective or a pattern that has a many to one. What 
<br>
might be happening is that since OMPI uses a lazy connections by default 
<br>
if all processes are trying to establish communications to the same 
<br>
process you might run into the below.
<br>
<p>You might want to see if setting &quot;--mca mpi_preconnect_all 1&quot; helps any. 
<br>
But beware this will cause your startup to increase. However, this might 
<br>
give us insight as to whether the problem is flooding a single rank with 
<br>
connect requests.
<br>
<p>--td
<br>
<p>Jonathan Dursi wrote:
<br>
<span class="quotelev1">&gt; Hi:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We've got OpenMPI 1.4.1 and Intel MPI running on our 3000 node system.   We like OpenMPI for large jobs, because the startup time is much faster (and startup is more reliable) than the current defaults with IntelMPI; but we're having some pretty serious problems when the jobs are actually running.   When running medium- to large- sized jobs (say, anything over 500 cores) over ethernet using OpenMPI, several of our users, using a variety of very different sorts of codes, report errors like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [gpc-f102n010][[30331,1],212][btl_tcp_frag.c:214:mca_btl_tcp_frag_recv] 
</span><br>
<span class="quotelev1">&gt; mca_btl_tcp_frag_recv: readv failed: Connection timed out (110)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; which sometimes hang the job, or sometimes kill it outright:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [gpc-f114n073][[23186,1],109][btl_tcp_frag.c:214:mca_btl_tcp_frag_recv]  
</span><br>
<span class="quotelev1">&gt; mca_btl_tcp_frag_recv: readv failed: Connection timed out (110)
</span><br>
<span class="quotelev1">&gt; [gpc-f114n075][[23186,1],125][btl_tcp_frag.c:214:mca_btl_tcp_frag_recv]  
</span><br>
<span class="quotelev1">&gt; mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)
</span><br>
<span class="quotelev1">&gt; mpirun: killing job...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 0 with PID 9513 on node gpc-f123n025  
</span><br>
<span class="quotelev1">&gt; exited on signal 0 (Unknown signal 0).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We don't see this problem when the same users, using the same codes, use IntelMPI.  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Unfortunately, this only happens intermittently, and only with large jobs, so it is hard to track down.    It seems to happen more reliably with larger numbers of processors, but I don't know if that tells us something real about the issue, or just that larger N -&gt; better statistics.     For one users code, it definitely occurs during an MPI_Wait (this particular code has been run on a wide variety of machines with a wide variety of MPIs -- which isn't proof of correctness of course, but everything looks fine), for others it is less clear.   I don't know if it's an OpenMPI issue, or just represents a network issue which Intel's MPI happens to be more tolerant of with the default set of  parameters.   It's also unclear whether or not this issue occurred with earlier OpenMPI versions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Where should I start looking to find out what is going on?   Are there parameters that can be adjusted to play with timeouts to see if the issue can be localized, or worked around?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	- Jonathan
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p><p><pre>
-- 
Oracle
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.650.633.7054
Oracle * - Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12713/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-12713/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12714.php">Jonathan Dursi: "Re: [OMPI users] 'readv failed: Connection timed out' issue"</a>
<li><strong>Previous message:</strong> <a href="12712.php">Jonathan Dursi: "[OMPI users] 'readv failed: Connection timed out' issue"</a>
<li><strong>In reply to:</strong> <a href="12712.php">Jonathan Dursi: "[OMPI users] 'readv failed: Connection timed out' issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12714.php">Jonathan Dursi: "Re: [OMPI users] 'readv failed: Connection timed out' issue"</a>
<li><strong>Reply:</strong> <a href="12714.php">Jonathan Dursi: "Re: [OMPI users] 'readv failed: Connection timed out' issue"</a>
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
