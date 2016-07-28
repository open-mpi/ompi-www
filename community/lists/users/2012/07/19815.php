<?
$subject_val = "Re: [OMPI users] Extent of Distributed Array Type?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 24 11:27:33 2012" -->
<!-- isoreceived="20120724152733" -->
<!-- sent="Tue, 24 Jul 2012 11:27:21 -0400" -->
<!-- isosent="20120724152721" -->
<!-- name="Richard Shaw" -->
<!-- email="jrs65_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Extent of Distributed Array Type?" -->
<!-- id="E98B5466D36E4E17BB30020BF7BE3AC2_at_gmail.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="2768D461D00B469D9D44996F11AB4A4E_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Extent of Distributed Array Type?<br>
<strong>From:</strong> Richard Shaw (<em>jrs65_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-24 11:27:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19816.php">Iliev, Hristo: "Re: [OMPI users] issue with addresses"</a>
<li><strong>Previous message:</strong> <a href="19814.php">Stephen J. Barr: "Re: [OMPI users] compiling openMPI 1.6 with Intel compilers on Ubuntu, getting error"</a>
<li><strong>In reply to:</strong> <a href="19767.php">Richard Shaw: "[OMPI users] Extent of Distributed Array Type?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19817.php">George Bosilca: "Re: [OMPI users] Extent of Distributed Array Type?"</a>
<li><strong>Reply:</strong> <a href="19817.php">George Bosilca: "Re: [OMPI users] Extent of Distributed Array Type?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've been speaking off line to Jonathan Dursi about this problem. And it does seems to be a bug.
<br>
<p>The same problem crops up in a simplified 1d only case (test case attached). In this instance the specification seems to be comprehensible - looking at the pdf copy of MPI-2.2 spec, p92-93, the definition of cyclic gives MPI_LB=0, MPI_UB=gsize*ex.
<br>
<p>Test case is creating a data type for an array of 10 doubles, cyclicly distributed across two processes with a block size of 1. Expected extent is 10*extent(MPI_DOUBLE) = 80. Results for OpenMPI v 1.4.4:
<br>
<p>$ mpirun -np 2 ./testextent1d
<br>
Rank 0, size=40, extent=80, lb=0
<br>
Rank 1, size=40, extent=88, lb=0
<br>
<p><p><p><p>Can anyone else confirm this?
<br>
<p>Thanks
<br>
Richard
<br>
<p><p>On Sunday, 15 July, 2012 at 6:21 PM, Richard Shaw wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm getting thoroughly confused trying to work out what is the correct extent of a block-cyclic distributed array type (created with MPI_Type_create_darray), and I'm hoping someone can clarify it for me.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My expectation is that calling MPI_Get_extent on this type should return the size of the original, global, array in bytes, whereas MPI_Type_size gives the size of the local section. This isn't really clear from the MPI 2.2 spec, but from reading around it sound like that's the obvious thing to expect.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've attached a minimal C example which tests this behaviour, it creates a type which views a 10x10 array of doubles, in 3x3 blocks with a 2x2 process grid. So my expectation is that the extent is 10*10*sizeof(double) = 800. I've attached the results from running this below.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In practice both versions of OpenMPI (v1.4.4 and v1.6) I've tested don't give the behaviour I expect. It gives the correct type size on all processes, but only the rank 0 process gets the expected extent, all the others get a somewhat higher value. As a comparison IntelMPI (v4.0.3) does give the expected value for the extent (included below).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'd be very grateful if someone could explain what the extent means for a darray type? And why it isn't the global array size?
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; == OpenMPI (v1.4.4 and 1.6) == 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpirun -np 4 ./testextent
</span><br>
<span class="quotelev1">&gt; Rank 0, size=288, extent=800, lb=0
</span><br>
<span class="quotelev1">&gt; Rank 1, size=192, extent=824, lb=0
</span><br>
<span class="quotelev1">&gt; Rank 2, size=192, extent=1040, lb=0
</span><br>
<span class="quotelev1">&gt; Rank 3, size=128, extent=1064, lb=0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; == IntelMPI ==
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpirun -np 4 ./testextent
</span><br>
<span class="quotelev1">&gt; Rank 0, size=288, extent=800, lb=0
</span><br>
<span class="quotelev1">&gt; Rank 1, size=192, extent=800, lb=0
</span><br>
<span class="quotelev1">&gt; Rank 2, size=192, extent=800, lb=0
</span><br>
<span class="quotelev1">&gt; Rank 3, size=128, extent=800, lb=0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Attachments: 
</span><br>
<span class="quotelev1">&gt; - testextent.c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><p><p>
<p>
<br><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19815/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19815/testextent1d.c">testextent1d.c</a>
</ul>
<!-- attachment="testextent1d.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19816.php">Iliev, Hristo: "Re: [OMPI users] issue with addresses"</a>
<li><strong>Previous message:</strong> <a href="19814.php">Stephen J. Barr: "Re: [OMPI users] compiling openMPI 1.6 with Intel compilers on Ubuntu, getting error"</a>
<li><strong>In reply to:</strong> <a href="19767.php">Richard Shaw: "[OMPI users] Extent of Distributed Array Type?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19817.php">George Bosilca: "Re: [OMPI users] Extent of Distributed Array Type?"</a>
<li><strong>Reply:</strong> <a href="19817.php">George Bosilca: "Re: [OMPI users] Extent of Distributed Array Type?"</a>
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
