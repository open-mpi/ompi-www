<?
$subject_val = "[OMPI users] ROMIO bug reading darrays";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  5 22:21:03 2014" -->
<!-- isoreceived="20140506022103" -->
<!-- sent="Mon, 5 May 2014 22:20:59 -0400" -->
<!-- isosent="20140506022059" -->
<!-- name="Richard Shaw" -->
<!-- email="jrs65_at_[hidden]" -->
<!-- subject="[OMPI users] ROMIO bug reading darrays" -->
<!-- id="CAN+evmkC+9KAcNPAUSScZiufwDJ3JfcSYMB-8ZdX1etDkabioQ_at_mail.gmail.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] ROMIO bug reading darrays<br>
<strong>From:</strong> Richard Shaw (<em>jrs65_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-05 22:20:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24287.php">Imran Ali: "[OMPI users] MPI File Open does not work"</a>
<li><strong>Previous message:</strong> <a href="24285.php">Daniels, Marcus G: "Re: [OMPI users] MPI_Barrier hangs on second attempt but only when	multiple hosts used."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24303.php">Rob Latham: "Re: [OMPI users] ROMIO bug reading darrays"</a>
<li><strong>Reply:</strong> <a href="24303.php">Rob Latham: "Re: [OMPI users] ROMIO bug reading darrays"</a>
<li><strong>Reply:</strong> <a href="24323.php">Rob Latham: "Re: [OMPI users] ROMIO bug reading darrays"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I think I've come across a bug when using ROMIO to read in a 2D distributed
<br>
array. I've attached a test case to this email.
<br>
<p>In the testcase I first initialise an array of 25 doubles (which will be a
<br>
5x5 grid), then I create a datatype representing a 5x5 matrix distributed
<br>
in 3x3 blocks over a 2x2 process grid. As a reference I use MPI_Pack to
<br>
pull out the block cyclic array elements local to each process (which I
<br>
think is correct). Then I write the original array of 25 doubles to disk,
<br>
and use MPI-IO to read it back in (performing the Open, Set_view, and
<br>
Real_all), and compare to the reference.
<br>
<p>Running this with OMPI, the two match on all ranks.
<br>
<p><span class="quotelev1">&gt; mpirun -mca io ompio -np 4 ./darr_read.x
</span><br>
=== Rank 0 === (9 elements)
<br>
Packed:  0.0  1.0  2.0  5.0  6.0  7.0 10.0 11.0 12.0
<br>
Read:    0.0  1.0  2.0  5.0  6.0  7.0 10.0 11.0 12.0
<br>
<p>=== Rank 1 === (6 elements)
<br>
Packed: 15.0 16.0 17.0 20.0 21.0 22.0
<br>
Read:   15.0 16.0 17.0 20.0 21.0 22.0
<br>
<p>=== Rank 2 === (6 elements)
<br>
Packed:  3.0  4.0  8.0  9.0 13.0 14.0
<br>
Read:    3.0  4.0  8.0  9.0 13.0 14.0
<br>
<p>=== Rank 3 === (4 elements)
<br>
Packed: 18.0 19.0 23.0 24.0
<br>
Read:   18.0 19.0 23.0 24.0
<br>
<p><p><p>However, using ROMIO the two differ on two of the ranks:
<br>
<p><span class="quotelev1">&gt; mpirun -mca io romio -np 4 ./darr_read.x
</span><br>
=== Rank 0 === (9 elements)
<br>
Packed:  0.0  1.0  2.0  5.0  6.0  7.0 10.0 11.0 12.0
<br>
Read:    0.0  1.0  2.0  5.0  6.0  7.0 10.0 11.0 12.0
<br>
<p>=== Rank 1 === (6 elements)
<br>
Packed: 15.0 16.0 17.0 20.0 21.0 22.0
<br>
Read:    0.0  1.0  2.0  0.0  1.0  2.0
<br>
<p>=== Rank 2 === (6 elements)
<br>
Packed:  3.0  4.0  8.0  9.0 13.0 14.0
<br>
Read:    3.0  4.0  8.0  9.0 13.0 14.0
<br>
<p>=== Rank 3 === (4 elements)
<br>
Packed: 18.0 19.0 23.0 24.0
<br>
Read:    0.0  1.0  0.0  1.0
<br>
<p><p><p>My interpretation is that the behaviour with OMPIO is correct.
<br>
Interestingly everything matches up using both ROMIO and OMPIO if I set the
<br>
block shape to 2x2.
<br>
<p>This was run on OS X using 1.8.2a1r31632. I have also run this on Linux
<br>
with OpenMPI 1.7.4, and OMPIO is still correct, but using ROMIO I just get
<br>
segfaults.
<br>
<p>Thanks,
<br>
Richard
<br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24286/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24286/darr_read.c">darr_read.c</a>
</ul>
<!-- attachment="darr_read.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24287.php">Imran Ali: "[OMPI users] MPI File Open does not work"</a>
<li><strong>Previous message:</strong> <a href="24285.php">Daniels, Marcus G: "Re: [OMPI users] MPI_Barrier hangs on second attempt but only when	multiple hosts used."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24303.php">Rob Latham: "Re: [OMPI users] ROMIO bug reading darrays"</a>
<li><strong>Reply:</strong> <a href="24303.php">Rob Latham: "Re: [OMPI users] ROMIO bug reading darrays"</a>
<li><strong>Reply:</strong> <a href="24323.php">Rob Latham: "Re: [OMPI users] ROMIO bug reading darrays"</a>
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
