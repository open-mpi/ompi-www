<?
$subject_val = "Re: [OMPI users] configuring with --enable-mpi-profile option";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 10 13:28:07 2008" -->
<!-- isoreceived="20080410172807" -->
<!-- sent="Thu, 10 Apr 2008 10:27:40 -0700" -->
<!-- isosent="20080410172740" -->
<!-- name="Swati Kher" -->
<!-- email="Swati_at_[hidden]" -->
<!-- subject="Re: [OMPI users] configuring with --enable-mpi-profile option" -->
<!-- id="9FA59C95FFCBB34EA5E42C1A8573784F0107FA63_at_mtiexch01.mti.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="768FC75D-92B0-45CF-9E4E-26F49640912C_at_eecs.utk.edu" -->
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
<strong>From:</strong> Swati Kher (<em>Swati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-10 13:27:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5370.php">Danesh Daroui: "Re: [OMPI users] submitted job stops"</a>
<li><strong>Previous message:</strong> <a href="5368.php">Brian W. Barrett: "Re: [OMPI users] cross compiler make problem with mpi 1.2.6"</a>
<li><strong>In reply to:</strong> <a href="5365.php">George Bosilca: "Re: [OMPI users] configuring with --enable-mpi-profile option"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
But if openmpi is installed, I can automatically instrument my
<br>
application with Vampir  (ie I don't have to install vtf separately -
<br>
right?)
<br>
<p>And I can view with Vampir Trace the results of my app's parallel run?
<br>
<p>-----Original Message-----
<br>
From: George Bosilca [mailto:bosilca_at_[hidden]] 
<br>
Sent: Thursday, April 10, 2008 8:31 AM
<br>
To: Open MPI Users
<br>
Cc: Swati Kher
<br>
Subject: Re: [OMPI users] configuring with --enable-mpi-profile option
<br>
<p>I think you're expect something that the MPI profiling interface is  
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
<span class="quotelev1">&gt; If I configure openmpi with &quot;-enable-mpi-profile&quot; option:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1)       Once build is complete, how do I specify profile name and  
</span><br>
<span class="quotelev1">&gt; location in the &quot;mpirun&quot; command? Do I have to set any flags with  
</span><br>
<span class="quotelev1">&gt; the &quot;mpirun&quot; command to view profile?
</span><br>
<span class="quotelev1">&gt; 2)       If vampire trace by default is built with openmpi, if I set  
</span><br>
<span class="quotelev1">&gt; VT_CC flag for compiling my application, where I can view &quot;.vtf&quot;  
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5370.php">Danesh Daroui: "Re: [OMPI users] submitted job stops"</a>
<li><strong>Previous message:</strong> <a href="5368.php">Brian W. Barrett: "Re: [OMPI users] cross compiler make problem with mpi 1.2.6"</a>
<li><strong>In reply to:</strong> <a href="5365.php">George Bosilca: "Re: [OMPI users] configuring with --enable-mpi-profile option"</a>
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
