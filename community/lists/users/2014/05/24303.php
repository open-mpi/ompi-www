<?
$subject_val = "Re: [OMPI users] ROMIO bug reading darrays";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  7 12:36:52 2014" -->
<!-- isoreceived="20140507163652" -->
<!-- sent="Wed, 7 May 2014 11:36:52 -0500" -->
<!-- isosent="20140507163652" -->
<!-- name="Rob Latham" -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ROMIO bug reading darrays" -->
<!-- id="536A6124.4080705_at_mcs.anl.gov" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAN+evmkC+9KAcNPAUSScZiufwDJ3JfcSYMB-8ZdX1etDkabioQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] ROMIO bug reading darrays<br>
<strong>From:</strong> Rob Latham (<em>robl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-07 12:36:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24304.php">George Bosilca: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
<li><strong>Previous message:</strong> <a href="24302.php">Gus Correa: "Re: [OMPI users] users Digest, Vol 2881, Issue 4"</a>
<li><strong>In reply to:</strong> <a href="24286.php">Richard Shaw: "[OMPI users] ROMIO bug reading darrays"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24307.php">Richard Shaw: "Re: [OMPI users] ROMIO bug reading darrays"</a>
<li><strong>Reply:</strong> <a href="24307.php">Richard Shaw: "Re: [OMPI users] ROMIO bug reading darrays"</a>
<li><strong>Reply:</strong> <a href="24317.php">Rob Latham: "Re: [OMPI users] ROMIO bug reading darrays"</a>
<li><strong>Reply:</strong> <a href="24324.php">Rob Latham: "Re: [OMPI users] ROMIO bug reading darrays"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 05/05/2014 09:20 PM, Richard Shaw wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think I've come across a bug when using ROMIO to read in a 2D
</span><br>
<span class="quotelev1">&gt; distributed array. I've attached a test case to this email.
</span><br>
<p>Thanks for the bug report and the test case.
<br>
<p>I've opened MPICH bug (because this is ROMIO's fault, not OpenMPI's 
<br>
fault... until I can prove otherwise ! :&gt;)
<br>
<p><a href="http://trac.mpich.org/projects/mpich/ticket/2089">http://trac.mpich.org/projects/mpich/ticket/2089</a>
<br>
<p>==rob
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the testcase I first initialise an array of 25 doubles (which will be
</span><br>
<span class="quotelev1">&gt; a 5x5 grid), then I create a datatype representing a 5x5 matrix
</span><br>
<span class="quotelev1">&gt; distributed in 3x3 blocks over a 2x2 process grid. As a reference I use
</span><br>
<span class="quotelev1">&gt; MPI_Pack to pull out the block cyclic array elements local to each
</span><br>
<span class="quotelev1">&gt; process (which I think is correct). Then I write the original array of
</span><br>
<span class="quotelev1">&gt; 25 doubles to disk, and use MPI-IO to read it back in (performing the
</span><br>
<span class="quotelev1">&gt; Open, Set_view, and Real_all), and compare to the reference.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Running this with OMPI, the two match on all ranks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;  &gt; mpirun -mca io ompio -np 4 ./darr_read.x
</span><br>
<span class="quotelev1">&gt; === Rank 0 === (9 elements)
</span><br>
<span class="quotelev1">&gt; Packed:  0.0  1.0  2.0  5.0  6.0  7.0 10.0 11.0 12.0
</span><br>
<span class="quotelev1">&gt; Read:    0.0  1.0  2.0  5.0  6.0  7.0 10.0 11.0 12.0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; === Rank 1 === (6 elements)
</span><br>
<span class="quotelev1">&gt; Packed: 15.0 16.0 17.0 20.0 21.0 22.0
</span><br>
<span class="quotelev1">&gt; Read:   15.0 16.0 17.0 20.0 21.0 22.0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; === Rank 2 === (6 elements)
</span><br>
<span class="quotelev1">&gt; Packed:  3.0  4.0  8.0  9.0 13.0 14.0
</span><br>
<span class="quotelev1">&gt; Read:    3.0  4.0  8.0  9.0 13.0 14.0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; === Rank 3 === (4 elements)
</span><br>
<span class="quotelev1">&gt; Packed: 18.0 19.0 23.0 24.0
</span><br>
<span class="quotelev1">&gt; Read:   18.0 19.0 23.0 24.0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, using ROMIO the two differ on two of the ranks:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;  &gt; mpirun -mca io romio -np 4 ./darr_read.x
</span><br>
<span class="quotelev1">&gt; === Rank 0 === (9 elements)
</span><br>
<span class="quotelev1">&gt; Packed:  0.0  1.0  2.0  5.0  6.0  7.0 10.0 11.0 12.0
</span><br>
<span class="quotelev1">&gt; Read:    0.0  1.0  2.0  5.0  6.0  7.0 10.0 11.0 12.0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; === Rank 1 === (6 elements)
</span><br>
<span class="quotelev1">&gt; Packed: 15.0 16.0 17.0 20.0 21.0 22.0
</span><br>
<span class="quotelev1">&gt; Read:    0.0  1.0  2.0  0.0  1.0  2.0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; === Rank 2 === (6 elements)
</span><br>
<span class="quotelev1">&gt; Packed:  3.0  4.0  8.0  9.0 13.0 14.0
</span><br>
<span class="quotelev1">&gt; Read:    3.0  4.0  8.0  9.0 13.0 14.0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; === Rank 3 === (4 elements)
</span><br>
<span class="quotelev1">&gt; Packed: 18.0 19.0 23.0 24.0
</span><br>
<span class="quotelev1">&gt; Read:    0.0  1.0  0.0  1.0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My interpretation is that the behaviour with OMPIO is correct.
</span><br>
<span class="quotelev1">&gt; Interestingly everything matches up using both ROMIO and OMPIO if I set
</span><br>
<span class="quotelev1">&gt; the block shape to 2x2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This was run on OS X using 1.8.2a1r31632. I have also run this on Linux
</span><br>
<span class="quotelev1">&gt; with OpenMPI 1.7.4, and OMPIO is still correct, but using ROMIO I just
</span><br>
<span class="quotelev1">&gt; get segfaults.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Richard
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
<span class="quotelev1">&gt;
</span><br>
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
<li><strong>Next message:</strong> <a href="24304.php">George Bosilca: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
<li><strong>Previous message:</strong> <a href="24302.php">Gus Correa: "Re: [OMPI users] users Digest, Vol 2881, Issue 4"</a>
<li><strong>In reply to:</strong> <a href="24286.php">Richard Shaw: "[OMPI users] ROMIO bug reading darrays"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24307.php">Richard Shaw: "Re: [OMPI users] ROMIO bug reading darrays"</a>
<li><strong>Reply:</strong> <a href="24307.php">Richard Shaw: "Re: [OMPI users] ROMIO bug reading darrays"</a>
<li><strong>Reply:</strong> <a href="24317.php">Rob Latham: "Re: [OMPI users] ROMIO bug reading darrays"</a>
<li><strong>Reply:</strong> <a href="24324.php">Rob Latham: "Re: [OMPI users] ROMIO bug reading darrays"</a>
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
