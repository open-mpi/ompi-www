<?
$subject_val = "Re: [OMPI users] MPI-2 I/O functions (Open MPI 1.5.x on Windows)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  4 10:08:48 2011" -->
<!-- isoreceived="20110404140848" -->
<!-- sent="Mon, 4 Apr 2011 09:08:43 -0500" -->
<!-- isosent="20110404140843" -->
<!-- name="Rob Latham" -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI-2 I/O functions (Open MPI 1.5.x on Windows)" -->
<!-- id="20110404140843.GB16772_at_mcs.anl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTi==CotVbL0WU4NjH92POVG5bOy6uqwJM8_RPs3__at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI-2 I/O functions (Open MPI 1.5.x on Windows)<br>
<strong>From:</strong> Rob Latham (<em>robl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-04 10:08:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16106.php">Rob Latham: "Re: [OMPI users] Deadlock with mpi_init_thread + mpi_file_set_view"</a>
<li><strong>Previous message:</strong> <a href="16104.php">Pascal Deveze: "Re: [OMPI users] Deadlock with mpi_init_thread + mpi_file_set_view"</a>
<li><strong>In reply to:</strong> <a href="16072.php">Satoi Ogawa: "[OMPI users] MPI-2 I/O functions (Open MPI 1.5.x on Windows)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16141.php">Satoi Ogawa: "Re: [OMPI users] MPI-2 I/O functions (Open MPI 1.5.x on Windows)"</a>
<li><strong>Reply:</strong> <a href="16141.php">Satoi Ogawa: "Re: [OMPI users] MPI-2 I/O functions (Open MPI 1.5.x on Windows)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sat, Apr 02, 2011 at 09:07:55PM +0900, Satoi Ogawa wrote:
<br>
<span class="quotelev1">&gt; Dear Developers and Users,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you for your development of Open MPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I want to use Open MPI 1.5.3 on Windows 7 32bit, one PC.
</span><br>
<span class="quotelev1">&gt; But there is something wrong with the part using MPI-2 I/O functions
</span><br>
<span class="quotelev1">&gt; in my program.
</span><br>
<span class="quotelev1">&gt; It correctly worked on Open MPI on Linux.
</span><br>
<span class="quotelev1">&gt; I would very much appreciate any information you could send me.
</span><br>
<span class="quotelev1">&gt; I can't find it in Open MPI User's Mailing List Archives.
</span><br>
<p>you probably need to configure OpenMPI so that ROMIO (the MPI-IO
<br>
library) is built with &quot;NTFS&quot; support.   
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
<li><strong>Next message:</strong> <a href="16106.php">Rob Latham: "Re: [OMPI users] Deadlock with mpi_init_thread + mpi_file_set_view"</a>
<li><strong>Previous message:</strong> <a href="16104.php">Pascal Deveze: "Re: [OMPI users] Deadlock with mpi_init_thread + mpi_file_set_view"</a>
<li><strong>In reply to:</strong> <a href="16072.php">Satoi Ogawa: "[OMPI users] MPI-2 I/O functions (Open MPI 1.5.x on Windows)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16141.php">Satoi Ogawa: "Re: [OMPI users] MPI-2 I/O functions (Open MPI 1.5.x on Windows)"</a>
<li><strong>Reply:</strong> <a href="16141.php">Satoi Ogawa: "Re: [OMPI users] MPI-2 I/O functions (Open MPI 1.5.x on Windows)"</a>
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
