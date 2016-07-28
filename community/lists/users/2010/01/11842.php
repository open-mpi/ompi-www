<?
$subject_val = "[OMPI users] ScaLAPACK and OpenMPI &gt; 1.3.1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 21 15:48:59 2010" -->
<!-- isoreceived="20100121204859" -->
<!-- sent="Thu, 21 Jan 2010 14:48:51 -0600" -->
<!-- isosent="20100121204851" -->
<!-- name="Champagne, Nathan J. (JSC-EV)[Jacobs Technology]" -->
<!-- email="nathan.j.champagne_at_[hidden]" -->
<!-- subject="[OMPI users] ScaLAPACK and OpenMPI &amp;gt; 1.3.1" -->
<!-- id="03261C2B265B89439DB2B424167AD3966C761D9384_at_NDJSSCC01.ndc.nasa.gov" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] ScaLAPACK and OpenMPI &gt; 1.3.1<br>
<strong>From:</strong> Champagne, Nathan J. (JSC-EV)[Jacobs Technology] (<em>nathan.j.champagne_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-21 15:48:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11843.php">흆e Sandgren: "Re: [OMPI users] ScaLAPACK and OpenMPI &gt; 1.3.1"</a>
<li><strong>Previous message:</strong> <a href="11841.php">Barrett, Brian W: "Re: [OMPI users] flex.exe"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11843.php">흆e Sandgren: "Re: [OMPI users] ScaLAPACK and OpenMPI &gt; 1.3.1"</a>
<li><strong>Reply:</strong> <a href="11843.php">흆e Sandgren: "Re: [OMPI users] ScaLAPACK and OpenMPI &gt; 1.3.1"</a>
<li><strong>Reply:</strong> <a href="11847.php">Martin Siegert: "Re: [OMPI users] ScaLAPACK and OpenMPI &gt; 1.3.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We started having a problem with OpenMPI beginning with version 1.3.2 where the program output can be correct, junk, or NaNs (result is not predictable). The output is the solution of a matrix equation solved by ScaLAPACK. We are using the Intel Fortran compiler (version 11.1) and the GNU compiler (version 4.1.2) on Gentoo Linux. So far, the problem manifests itself for a matrix (N X N) with N ~ 10,000 or more with a processor count ~ 64 or more. Note that the problem still occurs using OpenMPI 1.4.1.
<br>
<p>We build the ScaLAPACK and BLACS libraries locally and use the LAPACK and BLAS libraries supplied by Intel.
<br>
<p>We wrote a test program to demonstrate the problem. The matrix is built on each processor (no communication). Then, the matrix is factored and solved. The solution vector is collected from the processors and printed to a file by the master processor. The program and associated OpenMPI information (ompi_info --all) are available at:
<br>
<p><a href="http://www.em-stuff.com/files/files.tar.gz">http://www.em-stuff.com/files/files.tar.gz</a>
<br>
<p>The file &quot;compile&quot; in the &quot;test&quot; directory is used to create the executable. Edit it to reflect libraries on your local machine. Data created using OpenMPI 1.3.1 and 1.4.1 are in the &quot;output&quot; directory for reference.
<br>
<p>We appreciate any help.
<br>
<p>Thanks,
<br>
Nathan
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11842/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11843.php">흆e Sandgren: "Re: [OMPI users] ScaLAPACK and OpenMPI &gt; 1.3.1"</a>
<li><strong>Previous message:</strong> <a href="11841.php">Barrett, Brian W: "Re: [OMPI users] flex.exe"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11843.php">흆e Sandgren: "Re: [OMPI users] ScaLAPACK and OpenMPI &gt; 1.3.1"</a>
<li><strong>Reply:</strong> <a href="11843.php">흆e Sandgren: "Re: [OMPI users] ScaLAPACK and OpenMPI &gt; 1.3.1"</a>
<li><strong>Reply:</strong> <a href="11847.php">Martin Siegert: "Re: [OMPI users] ScaLAPACK and OpenMPI &gt; 1.3.1"</a>
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
