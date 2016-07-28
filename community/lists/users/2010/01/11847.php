<?
$subject_val = "Re: [OMPI users] ScaLAPACK and OpenMPI &gt; 1.3.1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 21 19:05:15 2010" -->
<!-- isoreceived="20100122000515" -->
<!-- sent="Thu, 21 Jan 2010 16:05:10 -0800" -->
<!-- isosent="20100122000510" -->
<!-- name="Martin Siegert" -->
<!-- email="siegert_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ScaLAPACK and OpenMPI &amp;gt; 1.3.1" -->
<!-- id="20100122000510.GB24476_at_stikine.its.sfu.ca" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="03261C2B265B89439DB2B424167AD3966C761D9384_at_NDJSSCC01.ndc.nasa.gov" -->
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
<strong>From:</strong> Martin Siegert (<em>siegert_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-21 19:05:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11848.php">Jeff Squyres: "Re: [OMPI users] flex.exe"</a>
<li><strong>Previous message:</strong> <a href="11846.php">Champagne, Nathan J. (JSC-EV)[Jacobs Technology]: "Re: [OMPI users] ScaLAPACK and OpenMPI &gt; 1.3.1"</a>
<li><strong>In reply to:</strong> <a href="11842.php">Champagne, Nathan J. (JSC-EV)[Jacobs Technology]: "[OMPI users] ScaLAPACK and OpenMPI &gt; 1.3.1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Nathan,
<br>
<p>On Thu, Jan 21, 2010 at 02:48:51PM -0600, Champagne, Nathan J. (JSC-EV)[Jacobs T
<br>
echnology] wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    We started having a problem with OpenMPI beginning with version 1.3.2
</span><br>
<span class="quotelev1">&gt;    where the program output can be correct, junk, or NaNs (result is not
</span><br>
<span class="quotelev1">&gt;    predictable). The output is the solution of a matrix equation solved by
</span><br>
<span class="quotelev1">&gt;    ScaLAPACK. We are using the Intel Fortran compiler (version 11.1) and
</span><br>
<span class="quotelev1">&gt;    the GNU compiler (version 4.1.2) on Gentoo Linux. So far, the problem
</span><br>
<span class="quotelev1">&gt;    manifests itself for a matrix (N X N) with N ~ 10,000 or more with a
</span><br>
<span class="quotelev1">&gt;    processor count ~ 64 or more. Note that the problem still occurs using
</span><br>
<span class="quotelev1">&gt;    OpenMPI 1.4.1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    We build the ScaLAPACK and BLACS libraries locally and use the LAPACK
</span><br>
<span class="quotelev1">&gt;    and BLAS libraries supplied by Intel.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    We wrote a test program to demonstrate the problem. The matrix is built
</span><br>
<span class="quotelev1">&gt;    on each processor (no communication). Then, the matrix is factored and
</span><br>
<span class="quotelev1">&gt;    solved. The solution vector is collected from the processors and
</span><br>
<span class="quotelev1">&gt;    printed to a file by the master processor. The program and associated
</span><br>
<span class="quotelev1">&gt;    OpenMPI information (ompi_info --all) are available at:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.em-stuff.com/files/files.tar.gz">http://www.em-stuff.com/files/files.tar.gz</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    The file &quot;compile&quot; in the &quot;test&quot; directory is used to create the
</span><br>
<span class="quotelev1">&gt;    executable. Edit it to reflect libraries on your local machine. Data
</span><br>
<span class="quotelev1">&gt;    created using OpenMPI 1.3.1 and 1.4.1 are in the &quot;output&quot; directory for
</span><br>
<span class="quotelev1">&gt;    reference.
</span><br>
<p>For what it is worth:
<br>
I compiled and ran your code using 64 processors. 
<br>
<p># diff -u output/sol_1.3.1_96.txt test/mkl/solution_vector.txt
<br>
--- output/sol_1.3.1_96.txt     2010-01-20 06:46:41.000000000 -0800
<br>
+++ test/mkl/solution_vector.txt        2010-01-21 14:41:59.000000000 -0800
<br>
@@ -4786,7 +4786,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4785     -0.3914681E+00   0.1178753E-03
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4786     -0.3913341E+00   0.7695833E-04
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4787     -0.3912001E+00   0.3607245E-04
<br>
-       4788     -0.3910662E+00  -0.4782369E-05
<br>
+       4788     -0.3910662E+00  -0.4782368E-05
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4789     -0.3909323E+00  -0.4560614E-04
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4790     -0.3907985E+00  -0.8639889E-04
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4791     -0.3906647E+00  -0.1271607E-03
<br>
<p>In other words: I do not see a problem.
<br>
<p>This is with openmpi-1.3.3, scalapack-1.8.0, mpiblacs-1.1p3,
<br>
ifort-11.1.038, mkl-10.2.0.013.
<br>
<p>Cheers,
<br>
Martin
<br>
<p><pre>
--
Martin Siegert
Head, Research Computing
WestGrid Site Lead
IT Services                                phone: 778 782-4691
Simon Fraser University                    fax:   778 782-4242
Burnaby, British Columbia                  email: siegert_at_[hidden]
Canada  V5A 1S6
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11848.php">Jeff Squyres: "Re: [OMPI users] flex.exe"</a>
<li><strong>Previous message:</strong> <a href="11846.php">Champagne, Nathan J. (JSC-EV)[Jacobs Technology]: "Re: [OMPI users] ScaLAPACK and OpenMPI &gt; 1.3.1"</a>
<li><strong>In reply to:</strong> <a href="11842.php">Champagne, Nathan J. (JSC-EV)[Jacobs Technology]: "[OMPI users] ScaLAPACK and OpenMPI &gt; 1.3.1"</a>
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
