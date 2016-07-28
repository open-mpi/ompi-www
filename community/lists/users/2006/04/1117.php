<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Apr 21 01:59:51 2006" -->
<!-- isoreceived="20060421055951" -->
<!-- sent="Thu, 20 Apr 2006 22:59:44 -0700" -->
<!-- isosent="20060421055944" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error in configuration for crosscompiler PowerPC" -->
<!-- id="41B2F6BF-B9C0-488D-B39F-C4BAA295D12D_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.64.0604171137390.6292_at_rhsvr03.ece.unm.edu" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-21 01:59:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1118.php">Alexander Spiegel: "[OMPI users] SIGBUS on sparc / 64bit"</a>
<li><strong>Previous message:</strong> <a href="1116.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] OpenMPI and SLURM Confiuration ?"</a>
<li><strong>In reply to:</strong> <a href="1087.php">Jorge Parra: "Re: [OMPI users] Error in configuration for crosscompiler PowerPC"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 17, 2006, at 10:43 AM, Jorge Parra wrote:
<br>
<p><span class="quotelev1">&gt; I downloaded the nightly release version 1.0.3a1r9650 and attempted  
</span><br>
<span class="quotelev1">&gt; to configure it disabling the fortran bindings for f77 and f90.  
</span><br>
<span class="quotelev1">&gt; However it gives me a new error when checking for epoll_ctlon  
</span><br>
<span class="quotelev1">&gt; broken Linux distros:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; configure:error: cannot run test program while cross compiling.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any inputs will be greatly appreciated. I included the outputs of  
</span><br>
<span class="quotelev1">&gt; the configuration as an attachment.
</span><br>
<p>There was a problem in our cross-compilation support that only showed  
<br>
up on platforms with epoll support (of course, our test cross- 
<br>
compilation system is not one).  The issue has been fixed in our  
<br>
Subversion repository, for both the trunk and the v1.0 release.  You  
<br>
can download nightly snapshots of either one from our web page.
<br>
<p>Thanks for the bug report,
<br>
<p>Brian
<br>
<p><p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1118.php">Alexander Spiegel: "[OMPI users] SIGBUS on sparc / 64bit"</a>
<li><strong>Previous message:</strong> <a href="1116.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] OpenMPI and SLURM Confiuration ?"</a>
<li><strong>In reply to:</strong> <a href="1087.php">Jorge Parra: "Re: [OMPI users] Error in configuration for crosscompiler PowerPC"</a>
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
