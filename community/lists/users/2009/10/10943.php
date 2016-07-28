<?
$subject_val = "Re: [OMPI users] MPI_File_open return error code 16";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 22 14:35:32 2009" -->
<!-- isoreceived="20091022183532" -->
<!-- sent="Thu, 22 Oct 2009 13:35:21 -0500" -->
<!-- isosent="20091022183521" -->
<!-- name="Rob Latham" -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_File_open return error code 16" -->
<!-- id="20091022183521.GF19983_at_mcs.anl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="eafc0afe0908261823s374e511fgd6b31154e87df4a7_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_File_open return error code 16<br>
<strong>From:</strong> Rob Latham (<em>robl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-22 14:35:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10944.php">Victor Rosas Garcia: "[OMPI users] wrong rank and process number"</a>
<li><strong>Previous message:</strong> <a href="10942.php">Francesco Pietra: "[OMPI users] installation with two different compilers"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/08/10495.php">Changsheng Jiang: "[OMPI users] MPI_File_open return error code 16"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Aug 27, 2009 at 09:23:20AM +0800, Changsheng Jiang wrote:
<br>
<span class="quotelev1">&gt; Hi List,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am learning MPI.
</span><br>
<p>Welcome! sorry for the several-months lateness of my reply: I check in
<br>
on OpenMPI only occasionally looking for MPI-IO questions. 
<br>
<p><span class="quotelev1">&gt; A small code snippet try to open a file by MPI_File_open gets error
</span><br>
<span class="quotelev1">&gt; 16(Internal error code.) in a single server with OpenMPI 1.3.3, but
</span><br>
<span class="quotelev1">&gt; it's run correctly in another server(with OpenMPI 1.3.2).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How to fix this problem? Thanks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is the snippet:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main(int argc, char *argv[]) {
</span><br>
<span class="quotelev1">&gt;   MPI_File fh;
</span><br>
<span class="quotelev1">&gt;   MPI_Init( &amp;argc, &amp;argv );
</span><br>
<span class="quotelev1">&gt;   int ret = MPI_File_open(
</span><br>
<span class="quotelev1">&gt;       MPI_COMM_WORLD, &quot;temp&quot;,
</span><br>
<span class="quotelev1">&gt;       MPI_MODE_RDWR | MPI_MODE_CREATE,
</span><br>
<span class="quotelev1">&gt;       MPI_INFO_NULL, &amp;fh);
</span><br>
<span class="quotelev1">&gt;   if (ret != MPI_SUCCESS) {
</span><br>
<span class="quotelev1">&gt;     fprintf(stderr, &quot;open file failed, code=%d\n&quot;, ret);
</span><br>
<span class="quotelev1">&gt;   } else {
</span><br>
<span class="quotelev1">&gt;     MPI_File_close(&amp;fh);
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt;   MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;   return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<p>The error code isn't very interesting, but if you can turn that error
<br>
code into a human readable string with the MPI_Error_string() routine,
<br>
then maybe you'll have a hint as to what is causing the problem.
<br>
<p>==rob
<br>
<p><pre>
-- 
Rob Latham
Mathematics and Computer Science Division
Argonne National Lab, IL USA
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10944.php">Victor Rosas Garcia: "[OMPI users] wrong rank and process number"</a>
<li><strong>Previous message:</strong> <a href="10942.php">Francesco Pietra: "[OMPI users] installation with two different compilers"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/08/10495.php">Changsheng Jiang: "[OMPI users] MPI_File_open return error code 16"</a>
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
