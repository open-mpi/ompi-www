<?
$subject_val = "Re: [OMPI users] configuring with --enable-mpi-profile option";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 10 11:30:50 2008" -->
<!-- isoreceived="20080410153050" -->
<!-- sent="Thu, 10 Apr 2008 11:30:39 -0400" -->
<!-- isosent="20080410153039" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] configuring with --enable-mpi-profile option" -->
<!-- id="768FC75D-92B0-45CF-9E4E-26F49640912C_at_eecs.utk.edu" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="9FA59C95FFCBB34EA5E42C1A8573784F0107FA23_at_mtiexch01.mti.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] configuring with --enable-mpi-profile option<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-10 11:30:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5366.php">Jeff Squyres: "Re: [OMPI users] Problem with MPI_Scatter() on inter-communicator..."</a>
<li><strong>Previous message:</strong> <a href="5364.php">Edgar Gabriel: "Re: [OMPI users] Problem with MPI_Scatter() on inter-communicator..."</a>
<li><strong>In reply to:</strong> <a href="5363.php">Swati Kher: "[OMPI users] configuring with --enable-mpi-profile option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5369.php">Swati Kher: "Re: [OMPI users] configuring with --enable-mpi-profile option"</a>
<li><strong>Reply:</strong> <a href="5369.php">Swati Kher: "Re: [OMPI users] configuring with --enable-mpi-profile option"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think you're expect something that the MPI profiling interface is  
<br>
not supposed to provide you. There is no tool to dump or print any  
<br>
profile information by default (and it is not mandated by the  
<br>
standard). What this option does, is compile the profiling interface  
<br>
(as defined by the MPI standard) allowing external tools to gather  
<br>
information about the MPI application.
<br>
<p>But you need an extra tool.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Apr 10, 2008, at 10:41 AM, Swati Kher wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I configure openmpi with &#147;&#151;enable-mpi-profile&#148; option:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1)       Once build is complete, how do I specify profile name and  
</span><br>
<span class="quotelev1">&gt; location in the &#147;mpirun&#148; command? Do I have to set any flags with  
</span><br>
<span class="quotelev1">&gt; the &#147;mpirun&#148; command to view profile?
</span><br>
<span class="quotelev1">&gt; 2)       If vampire trace by default is built with openmpi, if I set  
</span><br>
<span class="quotelev1">&gt; VT_CC flag for compiling my application, where I can view &#147;.vtf&#148;  
</span><br>
<span class="quotelev1">&gt; files after a parallel run ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Swati Kher
</span><br>
<span class="quotelev1">&gt; Application Performance Optimization Engineer
</span><br>
<span class="quotelev1">&gt; Mellanox Technologies
</span><br>
<span class="quotelev1">&gt; Work: 408-916-0037 x337
</span><br>
<span class="quotelev1">&gt; swati_at_[hidden]
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
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5365/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5366.php">Jeff Squyres: "Re: [OMPI users] Problem with MPI_Scatter() on inter-communicator..."</a>
<li><strong>Previous message:</strong> <a href="5364.php">Edgar Gabriel: "Re: [OMPI users] Problem with MPI_Scatter() on inter-communicator..."</a>
<li><strong>In reply to:</strong> <a href="5363.php">Swati Kher: "[OMPI users] configuring with --enable-mpi-profile option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5369.php">Swati Kher: "Re: [OMPI users] configuring with --enable-mpi-profile option"</a>
<li><strong>Reply:</strong> <a href="5369.php">Swati Kher: "Re: [OMPI users] configuring with --enable-mpi-profile option"</a>
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
