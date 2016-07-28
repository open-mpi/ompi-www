<?
$subject_val = "Re: [OMPI users] 'readv failed: Connection timed out' issue";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 21 11:18:40 2010" -->
<!-- isoreceived="20100421151840" -->
<!-- sent="Wed, 21 Apr 2010 11:18:31 -0400" -->
<!-- isosent="20100421151831" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 'readv failed: Connection timed out' issue" -->
<!-- id="B7F52D36-3067-4A83-8901-81FE844A24E1_at_cisco.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-21 11:18:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12728.php">Nev: "Re: [OMPI users] unresolved symbol mca_base_param_reg_int"</a>
<li><strong>Previous message:</strong> <a href="12726.php">Paul Cizmas: "Re: [OMPI users] OS X - Can't find the absoft directory"</a>
<li><strong>In reply to:</strong> <a href="12712.php">Jonathan Dursi: "[OMPI users] 'readv failed: Connection timed out' issue"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 20, 2010, at 8:55 AM, Jonathan Dursi wrote:
<br>
<p><span class="quotelev1">&gt; We've got OpenMPI 1.4.1 and Intel MPI running on our 3000 node system.   We like OpenMPI for large jobs, because the startup time is much faster (and startup is more reliable) than the current defaults with IntelMPI; but we're having some pretty serious problems when the jobs are actually running.   When running medium- to large- sized jobs (say, anything over 500 cores) over ethernet using OpenMPI, several of our users, using a variety of very different sorts of codes, report errors like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [gpc-f102n010][[30331,1],212][btl_tcp_frag.c:214:mca_btl_tcp_frag_recv]
</span><br>
<span class="quotelev1">&gt; mca_btl_tcp_frag_recv: readv failed: Connection timed out (110)
</span><br>
<p>That's odd -- this error message indicates that the TCP BTL had previously successfully established the connection and was trying to receive an MPI message on the socket.  But then reading from the socket timed out.  Hmm.
<br>
<p><span class="quotelev1">&gt; which sometimes hang the job, or sometimes kill it outright:
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
<p>This one is a little different -- it indicates that n075 saw its peer hang up the socket, which it determined to be a fatal error and therefore aborted.  (sidenote: I'm not sure why we don't judge a connection timeout to be the same fatal error... hmmm...)
<br>
<p>It's likely that n073 saw the timeout, closed the socket, and then n075 saw that hangup.  It might not happen in all scenarios, because n075 might not see the hangup unless it's actively trying to read something from that peer's socket.
<br>
<p>Regardless, the real question is: why is the socket timing out?
<br>
<p><span class="quotelev1">&gt; Unfortunately, this only happens intermittently, and only with large jobs, so it is hard to track down.    It seems to happen more reliably with larger numbers of processors, but I don't know if that tells us something real about the issue, or just that larger N -&gt; better statistics.     For one users code, it definitely occurs during an MPI_Wait (this particular code has been run on a wide variety of machines with a wide variety of MPIs -- which isn't proof of correctness of course, but everything looks fine), for others it is less clear.  
</span><br>
<p>I think it's reasonable to see this in MPI_Wait -- it means that OMPI was notified that there was something to read of a particular socket file descriptor and was trying to read it (and then timed out).  I'll bet that the others all died in some kind of communication with a specific peer (regardless of whether it was in a collective or point-to-point communication call).  
<br>
<p><span class="quotelev1">&gt; I don't know if it's an OpenMPI issue, or just represents a network issue which Intel's MPI happens to be more tolerant of with the default set of  parameters.   It's also unclear whether or not this issue occurred with earlier OpenMPI versions.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Where should I start looking to find out what is going on?   Are there parameters that can be adjusted to play with timeouts to see if the issue can be localized, or worked around?
</span><br>
<p>Can you see if there's any kernel parameters to adjust how many fd's you can have open simultaneously, and the length of TCP socket timeouts?
<br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="12728.php">Nev: "Re: [OMPI users] unresolved symbol mca_base_param_reg_int"</a>
<li><strong>Previous message:</strong> <a href="12726.php">Paul Cizmas: "Re: [OMPI users] OS X - Can't find the absoft directory"</a>
<li><strong>In reply to:</strong> <a href="12712.php">Jonathan Dursi: "[OMPI users] 'readv failed: Connection timed out' issue"</a>
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
