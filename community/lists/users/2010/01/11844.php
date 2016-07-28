<?
$subject_val = "Re: [OMPI users] ScaLAPACK and OpenMPI &gt; 1.3.1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 21 16:42:56 2010" -->
<!-- isoreceived="20100121214256" -->
<!-- sent="Thu, 21 Jan 2010 15:40:41 -0600" -->
<!-- isosent="20100121214041" -->
<!-- name="Champagne, Nathan J. (JSC-EV)[Jacobs Technology]" -->
<!-- email="nathan.j.champagne_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ScaLAPACK and OpenMPI &amp;gt; 1.3.1" -->
<!-- id="03261C2B265B89439DB2B424167AD3966C761D9403_at_NDJSSCC01.ndc.nasa.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1264109008.7216.2.camel_at_y-boda.ydc.se" -->
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
<strong>Subject:</strong> Re: [OMPI users] ScaLAPACK and OpenMPI &gt; 1.3.1<br>
<strong>From:</strong> Champagne, Nathan J. (JSC-EV)[Jacobs Technology] (<em>nathan.j.champagne_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-21 16:40:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11845.php">흆e Sandgren: "Re: [OMPI users] ScaLAPACK and OpenMPI &gt; 1.3.1"</a>
<li><strong>Previous message:</strong> <a href="11843.php">&#197;ke Sandgren: "Re: [OMPI users] ScaLAPACK and OpenMPI &gt; 1.3.1"</a>
<li><strong>In reply to:</strong> <a href="11843.php">&#197;ke Sandgren: "Re: [OMPI users] ScaLAPACK and OpenMPI &gt; 1.3.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11845.php">흆e Sandgren: "Re: [OMPI users] ScaLAPACK and OpenMPI &gt; 1.3.1"</a>
<li><strong>Reply:</strong> <a href="11845.php">흆e Sandgren: "Re: [OMPI users] ScaLAPACK and OpenMPI &gt; 1.3.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;What is a correct result then?
</span><br>
<p>The correct results are output by v1.3.1. The filename in the archive is &quot;sol_1.3.1_96.txt&quot;.
<br>
<p><span class="quotelev1">&gt;How often do you get junk or NaNs compared to correct result.
</span><br>
We haven't been able to quantify it. It almost seems random; similar to using a variable that's unintialized, expecting its initial value to be zero when it may not be.
<br>
<p>Nathan
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of &#197;ke Sandgren
<br>
Sent: Thursday, January 21, 2010 3:23 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] ScaLAPACK and OpenMPI &gt; 1.3.1
<br>
<p>On Thu, 2010-01-21 at 14:48 -0600, Champagne, Nathan J. (JSC-EV)[Jacobs
<br>
Technology] wrote:
<br>
<span class="quotelev1">&gt; We started having a problem with OpenMPI beginning with version 1.3.2
</span><br>
<span class="quotelev1">&gt; where the program output can be correct, junk, or NaNs (result is not
</span><br>
<span class="quotelev1">&gt; predictable). The output is the solution of a matrix equation solved
</span><br>
<span class="quotelev1">&gt; by ScaLAPACK. We are using the Intel Fortran compiler (version 11.1)
</span><br>
<span class="quotelev1">&gt; and the GNU compiler (version 4.1.2) on Gentoo Linux. So far, the
</span><br>
<span class="quotelev1">&gt; problem manifests itself for a matrix (N X N) with N ~ 10,000 or more
</span><br>
<span class="quotelev1">&gt; with a processor count ~ 64 or more. Note that the problem still
</span><br>
<span class="quotelev1">&gt; occurs using OpenMPI 1.4.1.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We build the ScaLAPACK and BLACS libraries locally and use the LAPACK
</span><br>
<span class="quotelev1">&gt; and BLAS libraries supplied by Intel.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We wrote a test program to demonstrate the problem. The matrix is
</span><br>
<span class="quotelev1">&gt; built on each processor (no communication). Then, the matrix is
</span><br>
<span class="quotelev1">&gt; factored and solved. The solution vector is collected from the
</span><br>
<span class="quotelev1">&gt; processors and printed to a file by the master processor. The program
</span><br>
<span class="quotelev1">&gt; and associated OpenMPI information (ompi_info --all) are available at:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.em-stuff.com/files/files.tar.gz">http://www.em-stuff.com/files/files.tar.gz</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The file &quot;compile&quot; in the &quot;test&quot; directory is used to create the
</span><br>
<span class="quotelev1">&gt; executable. Edit it to reflect libraries on your local machine. Data
</span><br>
<span class="quotelev1">&gt; created using OpenMPI 1.3.1 and 1.4.1 are in the &quot;output&quot; directory
</span><br>
<span class="quotelev1">&gt; for reference.
</span><br>
<p>What is a correct result then?
<br>
Hard to test without knowing.
<br>
<p>How often do you get junk or NaNs compared to correct result.
<br>
<p><pre>
-- 
Ake Sandgren, HPC2N, Umea University, S-90187 Umea, Sweden
Internet: ake_at_[hidden]   Phone: +46 90 7866134 Fax: +46 90 7866126
Mobile: +46 70 7716134 WWW: <a href="http://www.hpc2n.umu.se">http://www.hpc2n.umu.se</a>
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11845.php">흆e Sandgren: "Re: [OMPI users] ScaLAPACK and OpenMPI &gt; 1.3.1"</a>
<li><strong>Previous message:</strong> <a href="11843.php">&#197;ke Sandgren: "Re: [OMPI users] ScaLAPACK and OpenMPI &gt; 1.3.1"</a>
<li><strong>In reply to:</strong> <a href="11843.php">&#197;ke Sandgren: "Re: [OMPI users] ScaLAPACK and OpenMPI &gt; 1.3.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11845.php">흆e Sandgren: "Re: [OMPI users] ScaLAPACK and OpenMPI &gt; 1.3.1"</a>
<li><strong>Reply:</strong> <a href="11845.php">흆e Sandgren: "Re: [OMPI users] ScaLAPACK and OpenMPI &gt; 1.3.1"</a>
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
