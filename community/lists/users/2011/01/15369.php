<?
$subject_val = "Re: [OMPI users] parallel with parallel of wie2k code";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 14 09:31:44 2011" -->
<!-- isoreceived="20110114143144" -->
<!-- sent="Fri, 14 Jan 2011 09:31:35 -0500" -->
<!-- isosent="20110114143135" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] parallel with parallel of wie2k code" -->
<!-- id="AAEF6CF5-1AE4-48CA-BEC7-3FBAD844BFAF_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="763386.25906.qm_at_web25308.mail.ukl.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] parallel with parallel of wie2k code<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-14 09:31:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15370.php">Anthony Chan: "Re: [OMPI users] parallel with parallel of wie2k code"</a>
<li><strong>Previous message:</strong> <a href="15368.php">lagoun brahim: "[OMPI users] parallel with parallel of wie2k code"</a>
<li><strong>In reply to:</strong> <a href="15368.php">lagoun brahim: "[OMPI users] parallel with parallel of wie2k code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15370.php">Anthony Chan: "Re: [OMPI users] parallel with parallel of wie2k code"</a>
<li><strong>Reply:</strong> <a href="15370.php">Anthony Chan: "Re: [OMPI users] parallel with parallel of wie2k code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
These don't look like error messages from Open MPI; it's quite possible that you accidentally mixed multiple MPI implementations when compiling and/or running your application.
<br>
<p><p>On Jan 14, 2011, at 6:35 AM, lagoun brahim wrote:
<br>
<p><span class="quotelev1">&gt; dear user's 
</span><br>
<span class="quotelev1">&gt; i have compiled the wien2k code with openmpi 1.4 (ifort11.1+icc2011+icpc+mkl libraries10.2) in smp machines (quad) with open suse 10.3 64bits
</span><br>
<span class="quotelev1">&gt; but when i run the parallel version i have the following error message
</span><br>
<span class="quotelev1">&gt; run_lapw -p -cc 0.01
</span><br>
<span class="quotelev1">&gt;  LAPW0 END
</span><br>
<span class="quotelev1">&gt; Fatal error in MPI_Comm_size: Invalid communicator, error stack:
</span><br>
<span class="quotelev1">&gt; MPI_Comm_size(111): MPI_Comm_size(comm=0x5b, size=0x8fe10c) failed
</span><br>
<span class="quotelev1">&gt; MPI_Comm_size(69).: Invalid communicator
</span><br>
<span class="quotelev1">&gt; Fatal error in MPI_Comm_size: Invalid communicator, error stack:
</span><br>
<span class="quotelev1">&gt; MPI_Comm_size(111): MPI_Comm_size(comm=0x5b, size=0x8fe10c) failed
</span><br>
<span class="quotelev1">&gt; MPI_Comm_size(69).: Invalid communicator
</span><br>
<span class="quotelev1">&gt; Fatal error in MPI_Comm_size: Invalid communicator, error stack:
</span><br>
<span class="quotelev1">&gt; MPI_Comm_size(111): MPI_Comm_size(comm=0x5b, size=0x8fe10c) failed
</span><br>
<span class="quotelev1">&gt; MPI_Comm_size(69).: Invalid communicator
</span><br>
<span class="quotelev1">&gt; Fatal error in MPI_Comm_size: Invalid communicator, error stack:
</span><br>
<span class="quotelev1">&gt; MPI_Comm_size(111): MPI_Comm_size(comm=0x5b, size=0x8fe10c) failed
</span><br>
<span class="quotelev1">&gt; MPI_Comm_size(69).: Invalid communicator
</span><br>
<span class="quotelev1">&gt; cat: No match.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;   stop error
</span><br>
<span class="quotelev1">&gt; i don't now where is the probleme
</span><br>
<span class="quotelev1">&gt; i need your help please
</span><br>
<span class="quotelev1">&gt; and thanks in advance
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
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15370.php">Anthony Chan: "Re: [OMPI users] parallel with parallel of wie2k code"</a>
<li><strong>Previous message:</strong> <a href="15368.php">lagoun brahim: "[OMPI users] parallel with parallel of wie2k code"</a>
<li><strong>In reply to:</strong> <a href="15368.php">lagoun brahim: "[OMPI users] parallel with parallel of wie2k code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15370.php">Anthony Chan: "Re: [OMPI users] parallel with parallel of wie2k code"</a>
<li><strong>Reply:</strong> <a href="15370.php">Anthony Chan: "Re: [OMPI users] parallel with parallel of wie2k code"</a>
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
