<?
$subject_val = "Re: [OMPI users] parallel with parallel of wie2k code";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 14 14:29:02 2011" -->
<!-- isoreceived="20110114192902" -->
<!-- sent="Fri, 14 Jan 2011 19:28:56 +0000 (GMT)" -->
<!-- isosent="20110114192856" -->
<!-- name="lagoun brahim" -->
<!-- email="lag17_brahim_at_[hidden]" -->
<!-- subject="Re: [OMPI users] parallel with parallel of wie2k code" -->
<!-- id="280709.71176.qm_at_web25308.mail.ukl.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1082719523.63977.1295023541744.JavaMail.root_at_zimbra.anl.gov" -->
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
<strong>From:</strong> lagoun brahim (<em>lag17_brahim_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-14 14:28:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15372.php">Martin Siegert: "Re: [OMPI users] Newbie question continues, a step toward real app"</a>
<li><strong>Previous message:</strong> <a href="15370.php">Anthony Chan: "Re: [OMPI users] parallel with parallel of wie2k code"</a>
<li><strong>In reply to:</strong> <a href="15370.php">Anthony Chan: "Re: [OMPI users] parallel with parallel of wie2k code"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
thank you Anthony for your reply
<br>
i have compiled the code with the mpif90 compiler
<br>
you're right I compile the code with the mpich2 it did not work so I installed the openmpi and I recompile the code with
<br>
any suggestion and thanks
<br>
<p>--- En date de : Ven 14.1.11, Anthony Chan &lt;chan_at_[hidden]&gt; a &#233;crit :
<br>
<p>De: Anthony Chan &lt;chan_at_[hidden]&gt;
<br>
Objet: Re: [OMPI users] parallel with parallel of wie2k code
<br>
&#192;: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Date: Vendredi 14 janvier 2011, 17h45
<br>
<p>Hi lagoun,
<br>
<p>The error message looks like from MPICH2.&#160; Actually, it seems the code
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
<span class="quotelev2">&gt; &gt;&#160; LAPW0 END
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
<span class="quotelev3">&gt; &gt; &gt;&#160;&#160;&#160;stop error
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
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15371/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15372.php">Martin Siegert: "Re: [OMPI users] Newbie question continues, a step toward real app"</a>
<li><strong>Previous message:</strong> <a href="15370.php">Anthony Chan: "Re: [OMPI users] parallel with parallel of wie2k code"</a>
<li><strong>In reply to:</strong> <a href="15370.php">Anthony Chan: "Re: [OMPI users] parallel with parallel of wie2k code"</a>
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
