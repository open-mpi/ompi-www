<?
$subject_val = "Re: [OMPI users] possible bug exercised by mpi4py";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 24 06:32:42 2012" -->
<!-- isoreceived="20120524103242" -->
<!-- sent="Thu, 24 May 2012 06:32:36 -0400" -->
<!-- isosent="20120524103236" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] possible bug exercised by mpi4py" -->
<!-- id="82401F3E-B23A-4420-873E-DCD477321420_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4FBD9D3F.50907_at_scinet.utoronto.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] possible bug exercised by mpi4py<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-24 06:32:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19363.php">Ricardo Reis: "[OMPI users] vers 1.6.1"</a>
<li><strong>Previous message:</strong> <a href="19361.php">Shiqing Fan: "Re: [OMPI users] scope of MPI_publish/Lookup_name of openmpi on windows 7"</a>
<li><strong>In reply to:</strong> <a href="19358.php">Jonathan Dursi: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19364.php">Jonathan Dursi: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>Reply:</strong> <a href="19364.php">Jonathan Dursi: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Many thanks for trans-coding to C; this was a major help in debugging the issue.
<br>
<p>Thankfully, it turned out to be a simple bug.  OMPI's parameter checking for MPI_ALLGATHERV was using the *local* group size when checking the recvcounts parameter, where it really should have been using the *remote* group size.  So when the local group size &gt; the remote group size, Bad Things could happen.
<br>
<p>For this test, the bad case would only happen with odd numbers of processes.  It probably only happens sometimes because the contents of memory after the recvcounts array are undefined -- sometimes they'll be ok, sometimes they won't.
<br>
<p>I fixed the issue in <a href="https://svn.open-mpi.org/trac/ompi/changeset/26488">https://svn.open-mpi.org/trac/ompi/changeset/26488</a> and filed to move it to 1.6.1 in <a href="https://svn.open-mpi.org/trac/ompi/ticket/3105">https://svn.open-mpi.org/trac/ompi/ticket/3105</a>.
<br>
<p>Many thanks for reporting the issue!
<br>
<p><p>On May 23, 2012, at 10:30 PM, Jonathan Dursi wrote:
<br>
<p><span class="quotelev1">&gt; On 23 May 9:37PM, Jonathan Dursi wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On the other hand, it works everywhere if I pad the rcounts array with
</span><br>
<span class="quotelev2">&gt;&gt; an extra valid value (0 or 1, or for that matter 783), or replace the
</span><br>
<span class="quotelev2">&gt;&gt; allgatherv with an allgather.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; .. and it fails with 7 even where it worked (but succeeds with 8) if I pad rcounts with an extra invalid value which should never be read.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Should the recvcounts[] parameters test in allgatherv.c loop up to size=ompi_comm_remote_size(comm), as is done in alltoallv.c, rather than ompi_comm_size(comm) ?   That seems to avoid the problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   - Jonathan
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jonathan Dursi | SciNet, Compute/Calcul Canada | www.SciNetHPC.ca
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
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19363.php">Ricardo Reis: "[OMPI users] vers 1.6.1"</a>
<li><strong>Previous message:</strong> <a href="19361.php">Shiqing Fan: "Re: [OMPI users] scope of MPI_publish/Lookup_name of openmpi on windows 7"</a>
<li><strong>In reply to:</strong> <a href="19358.php">Jonathan Dursi: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19364.php">Jonathan Dursi: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>Reply:</strong> <a href="19364.php">Jonathan Dursi: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
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
