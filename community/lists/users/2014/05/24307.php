<?
$subject_val = "Re: [OMPI users] ROMIO bug reading darrays";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  7 16:11:01 2014" -->
<!-- isoreceived="20140507201101" -->
<!-- sent="Wed, 7 May 2014 16:10:58 -0400" -->
<!-- isosent="20140507201058" -->
<!-- name="Richard Shaw" -->
<!-- email="jrs65_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ROMIO bug reading darrays" -->
<!-- id="CAN+evm=HjCCrP5X+h9U47ncpsr9enPdKkc-8MzHDq-VUUsM9sw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="536A6124.4080705_at_mcs.anl.gov" -->
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
<strong>From:</strong> Richard Shaw (<em>jrs65_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-07 16:10:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24308.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ROMIO bug reading darrays"</a>
<li><strong>Previous message:</strong> <a href="24306.php">George Bosilca: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
<li><strong>In reply to:</strong> <a href="24303.php">Rob Latham: "Re: [OMPI users] ROMIO bug reading darrays"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24308.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ROMIO bug reading darrays"</a>
<li><strong>Reply:</strong> <a href="24308.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ROMIO bug reading darrays"</a>
<li><strong>Reply:</strong> <a href="24310.php">Rob Latham: "Re: [OMPI users] ROMIO bug reading darrays"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Rob. I'll keep track of it over there. How often do updated versions
<br>
of ROMIO get pulled over from MPICH into OpenMPI?
<br>
<p>On a slightly related note, I think I heard that you had fixed the 32bit
<br>
issues in ROMIO that were causing it to break when reading more than 2 GB
<br>
(i.e. <a href="http://www.open-mpi.org/community/lists/users/2012/07/19762.php">http://www.open-mpi.org/community/lists/users/2012/07/19762.php</a>).
<br>
Have those been pulled into OpenMPI? I've been staying clear of ROMIO for a
<br>
while (in favour of OMPIO), to avoid those issues.
<br>
<p>Thanks,
<br>
Richard
<br>
<p><p>On 7 May 2014 12:36, Rob Latham &lt;robl_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 05/05/2014 09:20 PM, Richard Shaw wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think I've come across a bug when using ROMIO to read in a 2D
</span><br>
<span class="quotelev2">&gt;&gt; distributed array. I've attached a test case to this email.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the bug report and the test case.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've opened MPICH bug (because this is ROMIO's fault, not OpenMPI's
</span><br>
<span class="quotelev1">&gt; fault... until I can prove otherwise ! :&gt;)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://trac.mpich.org/projects/mpich/ticket/2089">http://trac.mpich.org/projects/mpich/ticket/2089</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ==rob
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In the testcase I first initialise an array of 25 doubles (which will be
</span><br>
<span class="quotelev2">&gt;&gt; a 5x5 grid), then I create a datatype representing a 5x5 matrix
</span><br>
<span class="quotelev2">&gt;&gt; distributed in 3x3 blocks over a 2x2 process grid. As a reference I use
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Pack to pull out the block cyclic array elements local to each
</span><br>
<span class="quotelev2">&gt;&gt; process (which I think is correct). Then I write the original array of
</span><br>
<span class="quotelev2">&gt;&gt; 25 doubles to disk, and use MPI-IO to read it back in (performing the
</span><br>
<span class="quotelev2">&gt;&gt; Open, Set_view, and Real_all), and compare to the reference.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Running this with OMPI, the two match on all ranks.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;  &gt; mpirun -mca io ompio -np 4 ./darr_read.x
</span><br>
<span class="quotelev2">&gt;&gt; === Rank 0 === (9 elements)
</span><br>
<span class="quotelev2">&gt;&gt; Packed:  0.0  1.0  2.0  5.0  6.0  7.0 10.0 11.0 12.0
</span><br>
<span class="quotelev2">&gt;&gt; Read:    0.0  1.0  2.0  5.0  6.0  7.0 10.0 11.0 12.0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; === Rank 1 === (6 elements)
</span><br>
<span class="quotelev2">&gt;&gt; Packed: 15.0 16.0 17.0 20.0 21.0 22.0
</span><br>
<span class="quotelev2">&gt;&gt; Read:   15.0 16.0 17.0 20.0 21.0 22.0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; === Rank 2 === (6 elements)
</span><br>
<span class="quotelev2">&gt;&gt; Packed:  3.0  4.0  8.0  9.0 13.0 14.0
</span><br>
<span class="quotelev2">&gt;&gt; Read:    3.0  4.0  8.0  9.0 13.0 14.0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; === Rank 3 === (4 elements)
</span><br>
<span class="quotelev2">&gt;&gt; Packed: 18.0 19.0 23.0 24.0
</span><br>
<span class="quotelev2">&gt;&gt; Read:   18.0 19.0 23.0 24.0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, using ROMIO the two differ on two of the ranks:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;  &gt; mpirun -mca io romio -np 4 ./darr_read.x
</span><br>
<span class="quotelev2">&gt;&gt; === Rank 0 === (9 elements)
</span><br>
<span class="quotelev2">&gt;&gt; Packed:  0.0  1.0  2.0  5.0  6.0  7.0 10.0 11.0 12.0
</span><br>
<span class="quotelev2">&gt;&gt; Read:    0.0  1.0  2.0  5.0  6.0  7.0 10.0 11.0 12.0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; === Rank 1 === (6 elements)
</span><br>
<span class="quotelev2">&gt;&gt; Packed: 15.0 16.0 17.0 20.0 21.0 22.0
</span><br>
<span class="quotelev2">&gt;&gt; Read:    0.0  1.0  2.0  0.0  1.0  2.0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; === Rank 2 === (6 elements)
</span><br>
<span class="quotelev2">&gt;&gt; Packed:  3.0  4.0  8.0  9.0 13.0 14.0
</span><br>
<span class="quotelev2">&gt;&gt; Read:    3.0  4.0  8.0  9.0 13.0 14.0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; === Rank 3 === (4 elements)
</span><br>
<span class="quotelev2">&gt;&gt; Packed: 18.0 19.0 23.0 24.0
</span><br>
<span class="quotelev2">&gt;&gt; Read:    0.0  1.0  0.0  1.0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My interpretation is that the behaviour with OMPIO is correct.
</span><br>
<span class="quotelev2">&gt;&gt; Interestingly everything matches up using both ROMIO and OMPIO if I set
</span><br>
<span class="quotelev2">&gt;&gt; the block shape to 2x2.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This was run on OS X using 1.8.2a1r31632. I have also run this on Linux
</span><br>
<span class="quotelev2">&gt;&gt; with OpenMPI 1.7.4, and OMPIO is still correct, but using ROMIO I just
</span><br>
<span class="quotelev2">&gt;&gt; get segfaults.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Richard
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Rob Latham
</span><br>
<span class="quotelev1">&gt; Mathematics and Computer Science Division
</span><br>
<span class="quotelev1">&gt; Argonne National Lab, IL USA
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24307/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24308.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ROMIO bug reading darrays"</a>
<li><strong>Previous message:</strong> <a href="24306.php">George Bosilca: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
<li><strong>In reply to:</strong> <a href="24303.php">Rob Latham: "Re: [OMPI users] ROMIO bug reading darrays"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24308.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ROMIO bug reading darrays"</a>
<li><strong>Reply:</strong> <a href="24308.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ROMIO bug reading darrays"</a>
<li><strong>Reply:</strong> <a href="24310.php">Rob Latham: "Re: [OMPI users] ROMIO bug reading darrays"</a>
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
