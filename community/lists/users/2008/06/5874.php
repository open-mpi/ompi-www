<?
$subject_val = "Re: [OMPI users] weird problem with passing data between nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 13 05:27:21 2008" -->
<!-- isoreceived="20080613092721" -->
<!-- sent="Fri, 13 Jun 2008 10:27:10 +0100" -->
<!-- isosent="20080613092710" -->
<!-- name="Mattijs Janssens" -->
<!-- email="m.janssens_at_[hidden]" -->
<!-- subject="Re: [OMPI users] weird problem with passing data between nodes" -->
<!-- id="200806131027.10523.m.janssens_at_opencfd.co.uk" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="9fdb08030806121755s17718b80kf00c8f99d6bcd847_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] weird problem with passing data between nodes<br>
<strong>From:</strong> Mattijs Janssens (<em>m.janssens_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-13 05:27:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5875.php">Gabriele Fatigati: "[OMPI users] OpenMPI with bounds checking"</a>
<li><strong>Previous message:</strong> <a href="5873.php">Gabriele Fatigati: "Re: [OMPI users] OpenMPI bug?"</a>
<li><strong>In reply to:</strong> <a href="5870.php">zach: "[OMPI users] weird problem with passing data between nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5957.php">Jeff Squyres: "Re: [OMPI users] weird problem with passing data between nodes"</a>
<li><strong>Reply:</strong> <a href="5957.php">Jeff Squyres: "Re: [OMPI users] weird problem with passing data between nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sounds like a typical deadlock situation. All processors are waiting for one 
<br>
another.
<br>
<p>Not a specialist but from what I know if the messages are small enough they'll 
<br>
be offloaded to kernel/hardware and there is no deadlock. That why it might 
<br>
work for small messages and/or certain mpi implementations.
<br>
<p>Solutions:
<br>
- come up with a global communication schedule such that if one processor 
<br>
sends the receiver is receiving.
<br>
- use mpi_bsend. Might be slower.
<br>
- use mpi_isend, mpi_irecv (but then you'll have to make sure the buffers stay 
<br>
valid for the duration of the communication)
<br>
<p>On Friday 13 June 2008 01:55, zach wrote:
<br>
<span class="quotelev1">&gt; I have a weird problem that shows up when i use LAM or OpenMPI but not
</span><br>
<span class="quotelev1">&gt; MPICH.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a parallelized code working on a really large matrix. It
</span><br>
<span class="quotelev1">&gt; partitions the matrix column-wise and ships them off to processors,
</span><br>
<span class="quotelev1">&gt; so, any given processor is working on a matrix with the same number of
</span><br>
<span class="quotelev1">&gt; rows as the original but reduced number of columns. Each processor
</span><br>
<span class="quotelev1">&gt; needs to send a single column vector entry
</span><br>
<span class="quotelev1">&gt; from its own matrix to the adjacent processor and visa versa as part
</span><br>
<span class="quotelev1">&gt; of the algorithm.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have found that depending on the number of rows of the matrix -or,
</span><br>
<span class="quotelev1">&gt; the size of the vector being sent using MPI_Send, MPI_Recv, the
</span><br>
<span class="quotelev1">&gt; simulation will hang.
</span><br>
<span class="quotelev1">&gt; It is only until i reduce this dimension to a certain max number will
</span><br>
<span class="quotelev1">&gt; the sim run properly. I have also found that this magic number differs
</span><br>
<span class="quotelev1">&gt; depending on the system I am using, eg my home quad-core box or remote
</span><br>
<span class="quotelev1">&gt; cluster.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As i mentioned i have not had this issue with mpich. I would like to
</span><br>
<span class="quotelev1">&gt; understand why it is happening rather than just defect over to mpich
</span><br>
<span class="quotelev1">&gt; to get by.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any help would be appreciated!
</span><br>
<span class="quotelev1">&gt; zach
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5875.php">Gabriele Fatigati: "[OMPI users] OpenMPI with bounds checking"</a>
<li><strong>Previous message:</strong> <a href="5873.php">Gabriele Fatigati: "Re: [OMPI users] OpenMPI bug?"</a>
<li><strong>In reply to:</strong> <a href="5870.php">zach: "[OMPI users] weird problem with passing data between nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5957.php">Jeff Squyres: "Re: [OMPI users] weird problem with passing data between nodes"</a>
<li><strong>Reply:</strong> <a href="5957.php">Jeff Squyres: "Re: [OMPI users] weird problem with passing data between nodes"</a>
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
