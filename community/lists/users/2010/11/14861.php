<?
$subject_val = "Re: [OMPI users] launching the mpi runtime";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 22 10:52:59 2010" -->
<!-- isoreceived="20101122155259" -->
<!-- sent="Mon, 22 Nov 2010 10:52:46 -0500" -->
<!-- isosent="20101122155246" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] launching the mpi runtime" -->
<!-- id="62A0B6A1-88A0-4472-8E93-107BABB307F9_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTik8gs72sSthv-RD3pCURQL03nC-1T1GYv_wx+6P_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] launching the mpi runtime<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-22 10:52:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14862.php">Jeff Squyres: "Re: [OMPI users] boost + openmpi link errors: missing openmpi libraries"</a>
<li><strong>Previous message:</strong> <a href="14860.php">Terry Dontje: "Re: [OMPI users] Multiple Subnet MPI Fail"</a>
<li><strong>In reply to:</strong> <a href="14832.php">David Zhang: "Re: [OMPI users] launching the mpi runtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14866.php">Hicham Mouline: "Re: [OMPI users] launching the mpi runtime"</a>
<li><strong>Reply:</strong> <a href="14866.php">Hicham Mouline: "Re: [OMPI users] launching the mpi runtime"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Other than MPI_COMM_SPAWN[_MULTIPLE], we don't expose the underlying run-time to MPI applications.
<br>
<p>There is a whole programatic interface for the layer under MPI (the Open MPI Runtime Environment -- ORTE), though.  We don't advise mixing ORTE calls in MPI applications, but it is certainly feasible to use ORTE for non-MPI things (some of the OMPI community member organizations do so).
<br>
<p>What are you trying to do?
<br>
<p><p>On Nov 18, 2010, at 11:37 AM, David Zhang wrote:
<br>
<p><span class="quotelev1">&gt; you could spawn more processes from currently running processes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Nov 18, 2010 at 3:05 AM, Hicham Mouline &lt;hicham_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; One typically uses mpirun to launch a set of mpi processes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there some programmatical interface to launching the runtime and having the process that launched the runtime becoming part of the list of mpi processes,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; David Zhang
</span><br>
<span class="quotelev1">&gt; University of California, San Diego
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
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14862.php">Jeff Squyres: "Re: [OMPI users] boost + openmpi link errors: missing openmpi libraries"</a>
<li><strong>Previous message:</strong> <a href="14860.php">Terry Dontje: "Re: [OMPI users] Multiple Subnet MPI Fail"</a>
<li><strong>In reply to:</strong> <a href="14832.php">David Zhang: "Re: [OMPI users] launching the mpi runtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14866.php">Hicham Mouline: "Re: [OMPI users] launching the mpi runtime"</a>
<li><strong>Reply:</strong> <a href="14866.php">Hicham Mouline: "Re: [OMPI users] launching the mpi runtime"</a>
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
