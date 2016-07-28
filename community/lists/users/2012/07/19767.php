<?
$subject_val = "[OMPI users] Extent of Distributed Array Type?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 15 18:21:54 2012" -->
<!-- isoreceived="20120715222154" -->
<!-- sent="Sun, 15 Jul 2012 18:21:47 -0400" -->
<!-- isosent="20120715222147" -->
<!-- name="Richard Shaw" -->
<!-- email="jrs65_at_[hidden]" -->
<!-- subject="[OMPI users] Extent of Distributed Array Type?" -->
<!-- id="2768D461D00B469D9D44996F11AB4A4E_at_gmail.com" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] Extent of Distributed Array Type?<br>
<strong>From:</strong> Richard Shaw (<em>jrs65_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-15 18:21:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19768.php">Anne M. Hammond: "[OMPI users] openmpi tar.gz for 1.6.1 or 1.6.2"</a>
<li><strong>Previous message:</strong> <a href="19766.php">Constantinos Makassikis: "Re: [OMPI users] Beginners Tutorial Link broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19815.php">Richard Shaw: "Re: [OMPI users] Extent of Distributed Array Type?"</a>
<li><strong>Reply:</strong> <a href="19815.php">Richard Shaw: "Re: [OMPI users] Extent of Distributed Array Type?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I'm getting thoroughly confused trying to work out what is the correct extent of a block-cyclic distributed array type (created with MPI_Type_create_darray), and I'm hoping someone can clarify it for me.
<br>
<p>My expectation is that calling MPI_Get_extent on this type should return the size of the original, global, array in bytes, whereas MPI_Type_size gives the size of the local section. This isn't really clear from the MPI 2.2 spec, but from reading around it sound like that's the obvious thing to expect.
<br>
<p>I've attached a minimal C example which tests this behaviour, it creates a type which views a 10x10 array of doubles, in 3x3 blocks with a 2x2 process grid. So my expectation is that the extent is 10*10*sizeof(double) = 800. I've attached the results from running this below.
<br>
<p>In practice both versions of OpenMPI (v1.4.4 and v1.6) I've tested don't give the behaviour I expect. It gives the correct type size on all processes, but only the rank 0 process gets the expected extent, all the others get a somewhat higher value. As a comparison IntelMPI (v4.0.3) does give the expected value for the extent (included below).
<br>
<p>I'd be very grateful if someone could explain what the extent means for a darray type? And why it isn't the global array size?
<br>
<p>Thanks,
<br>
Richard
<br>
<p><p><p>== OpenMPI (v1.4.4 and 1.6) == 
<br>
<p>$ mpirun -np 4 ./testextent
<br>
Rank 0, size=288, extent=800, lb=0
<br>
Rank 1, size=192, extent=824, lb=0
<br>
Rank 2, size=192, extent=1040, lb=0
<br>
Rank 3, size=128, extent=1064, lb=0
<br>
<p><p><p>== IntelMPI ==
<br>
<p>$ mpirun -np 4 ./testextent
<br>
Rank 0, size=288, extent=800, lb=0
<br>
Rank 1, size=192, extent=800, lb=0
<br>
Rank 2, size=192, extent=800, lb=0
<br>
Rank 3, size=128, extent=800, lb=0
<br>
<p><p><p><p>
<br><p>
<p><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19767/testextent.c">testextent.c</a>
</ul>
<!-- attachment="testextent.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19768.php">Anne M. Hammond: "[OMPI users] openmpi tar.gz for 1.6.1 or 1.6.2"</a>
<li><strong>Previous message:</strong> <a href="19766.php">Constantinos Makassikis: "Re: [OMPI users] Beginners Tutorial Link broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19815.php">Richard Shaw: "Re: [OMPI users] Extent of Distributed Array Type?"</a>
<li><strong>Reply:</strong> <a href="19815.php">Richard Shaw: "Re: [OMPI users] Extent of Distributed Array Type?"</a>
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
