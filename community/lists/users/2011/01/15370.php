<?
$subject_val = "Re: [OMPI users] parallel with parallel of wie2k code";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 14 11:45:45 2011" -->
<!-- isoreceived="20110114164545" -->
<!-- sent="Fri, 14 Jan 2011 10:45:41 -0600 (CST)" -->
<!-- isosent="20110114164541" -->
<!-- name="Anthony Chan" -->
<!-- email="chan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] parallel with parallel of wie2k code" -->
<!-- id="1082719523.63977.1295023541744.JavaMail.root_at_zimbra.anl.gov" -->
<!-- charset="utf-8" -->
<!-- inreplyto="AAEF6CF5-1AE4-48CA-BEC7-3FBAD844BFAF_at_cisco.com" -->
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
<strong>From:</strong> Anthony Chan (<em>chan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-14 11:45:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15371.php">lagoun brahim: "Re: [OMPI users] parallel with parallel of wie2k code"</a>
<li><strong>Previous message:</strong> <a href="15369.php">Jeff Squyres: "Re: [OMPI users] parallel with parallel of wie2k code"</a>
<li><strong>In reply to:</strong> <a href="15369.php">Jeff Squyres: "Re: [OMPI users] parallel with parallel of wie2k code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15371.php">lagoun brahim: "Re: [OMPI users] parallel with parallel of wie2k code"</a>
<li><strong>Reply:</strong> <a href="15371.php">lagoun brahim: "Re: [OMPI users] parallel with parallel of wie2k code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi lagoun,
<br>
<p>The error message looks like from MPICH2.  Actually, it seems the code
<br>
was linked with mpich2 library but was compiled with mpich-1 header file.
<br>
<p>You should use MPI wrappers, i.e mpicc/mpif90..., provided by your chosen
<br>
MPI implementation.
<br>
<p>A.Chan
<br>
<p>----- Original Message -----
<br>
<span class="quotelev1">&gt; These don't look like error messages from Open MPI; it's quite
</span><br>
<span class="quotelev1">&gt; possible that you accidentally mixed multiple MPI implementations when
</span><br>
<span class="quotelev1">&gt; compiling and/or running your application.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 14, 2011, at 6:35 AM, lagoun brahim wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; dear user's
</span><br>
<span class="quotelev2">&gt; &gt; i have compiled the wien2k code with openmpi 1.4
</span><br>
<span class="quotelev2">&gt; &gt; (ifort11.1+icc2011+icpc+mkl libraries10.2) in smp machines (quad)
</span><br>
<span class="quotelev2">&gt; &gt; with open suse 10.3 64bits
</span><br>
<span class="quotelev2">&gt; &gt; but when i run the parallel version i have the following error
</span><br>
<span class="quotelev2">&gt; &gt; message
</span><br>
<span class="quotelev2">&gt; &gt; run_lapw -p -cc 0.01
</span><br>
<span class="quotelev2">&gt; &gt;  LAPW0 END
</span><br>
<span class="quotelev2">&gt; &gt; Fatal error in MPI_Comm_size: Invalid communicator, error stack:
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Comm_size(111): MPI_Comm_size(comm=0x5b, size=0x8fe10c) failed
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Comm_size(69).: Invalid communicator
</span><br>
<span class="quotelev2">&gt; &gt; Fatal error in MPI_Comm_size: Invalid communicator, error stack:
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Comm_size(111): MPI_Comm_size(comm=0x5b, size=0x8fe10c) failed
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Comm_size(69).: Invalid communicator
</span><br>
<span class="quotelev2">&gt; &gt; Fatal error in MPI_Comm_size: Invalid communicator, error stack:
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Comm_size(111): MPI_Comm_size(comm=0x5b, size=0x8fe10c) failed
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Comm_size(69).: Invalid communicator
</span><br>
<span class="quotelev2">&gt; &gt; Fatal error in MPI_Comm_size: Invalid communicator, error stack:
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Comm_size(111): MPI_Comm_size(comm=0x5b, size=0x8fe10c) failed
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Comm_size(69).: Invalid communicator
</span><br>
<span class="quotelev2">&gt; &gt; cat: No match.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   stop error
</span><br>
<span class="quotelev2">&gt; &gt; i don't now where is the probleme
</span><br>
<span class="quotelev2">&gt; &gt; i need your help please
</span><br>
<span class="quotelev2">&gt; &gt; and thanks in advance
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15371.php">lagoun brahim: "Re: [OMPI users] parallel with parallel of wie2k code"</a>
<li><strong>Previous message:</strong> <a href="15369.php">Jeff Squyres: "Re: [OMPI users] parallel with parallel of wie2k code"</a>
<li><strong>In reply to:</strong> <a href="15369.php">Jeff Squyres: "Re: [OMPI users] parallel with parallel of wie2k code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15371.php">lagoun brahim: "Re: [OMPI users] parallel with parallel of wie2k code"</a>
<li><strong>Reply:</strong> <a href="15371.php">lagoun brahim: "Re: [OMPI users] parallel with parallel of wie2k code"</a>
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
