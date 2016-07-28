<?
$subject_val = "Re: [OMPI users] weird problem with passing data between nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jun 21 09:22:08 2008" -->
<!-- isoreceived="20080621132208" -->
<!-- sent="Sat, 21 Jun 2008 09:22:00 -0400" -->
<!-- isosent="20080621132200" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] weird problem with passing data between nodes" -->
<!-- id="0D322A13-4728-41BC-AD90-AEB3D958DDA3_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200806131027.10523.m.janssens_at_opencfd.co.uk" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-21 09:22:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5958.php">Jeff Squyres: "Re: [OMPI users] mpirun (orte ?) not shutting down cleanly on job aborts"</a>
<li><strong>Previous message:</strong> <a href="5956.php">Jeff Squyres: "Re: [OMPI users] Problem with getting started [solved]"</a>
<li><strong>In reply to:</strong> <a href="5874.php">Mattijs Janssens: "Re: [OMPI users] weird problem with passing data between nodes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, this does sound like the classic &quot;assuming MPI buffering&quot; case.   
<br>
Check out this magazine column that I wrote a long time ago about this  
<br>
topic:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://cw.squyres.com/columns/2004-08-CW-MPI-Mechanic.pdf">http://cw.squyres.com/columns/2004-08-CW-MPI-Mechanic.pdf</a>
<br>
<p>It's #1 on the top 10 list of All-Time Favorite Evils to Avoid in  
<br>
Parallel.  :-)
<br>
<p>One comment on Mattijs's email: please don't use bsend.  Bsend is  
<br>
evil.  :-)
<br>
<p><p><p>On Jun 13, 2008, at 5:27 AM, Mattijs Janssens wrote:
<br>
<p><span class="quotelev1">&gt; Sounds like a typical deadlock situation. All processors are waiting  
</span><br>
<span class="quotelev1">&gt; for one
</span><br>
<span class="quotelev1">&gt; another.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not a specialist but from what I know if the messages are small  
</span><br>
<span class="quotelev1">&gt; enough they'll
</span><br>
<span class="quotelev1">&gt; be offloaded to kernel/hardware and there is no deadlock. That why  
</span><br>
<span class="quotelev1">&gt; it might
</span><br>
<span class="quotelev1">&gt; work for small messages and/or certain mpi implementations.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Solutions:
</span><br>
<span class="quotelev1">&gt; - come up with a global communication schedule such that if one  
</span><br>
<span class="quotelev1">&gt; processor
</span><br>
<span class="quotelev1">&gt; sends the receiver is receiving.
</span><br>
<span class="quotelev1">&gt; - use mpi_bsend. Might be slower.
</span><br>
<span class="quotelev1">&gt; - use mpi_isend, mpi_irecv (but then you'll have to make sure the  
</span><br>
<span class="quotelev1">&gt; buffers stay
</span><br>
<span class="quotelev1">&gt; valid for the duration of the communication)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Friday 13 June 2008 01:55, zach wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I have a weird problem that shows up when i use LAM or OpenMPI but  
</span><br>
<span class="quotelev2">&gt;&gt; not
</span><br>
<span class="quotelev2">&gt;&gt; MPICH.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have a parallelized code working on a really large matrix. It
</span><br>
<span class="quotelev2">&gt;&gt; partitions the matrix column-wise and ships them off to processors,
</span><br>
<span class="quotelev2">&gt;&gt; so, any given processor is working on a matrix with the same number  
</span><br>
<span class="quotelev2">&gt;&gt; of
</span><br>
<span class="quotelev2">&gt;&gt; rows as the original but reduced number of columns. Each processor
</span><br>
<span class="quotelev2">&gt;&gt; needs to send a single column vector entry
</span><br>
<span class="quotelev2">&gt;&gt; from its own matrix to the adjacent processor and visa versa as part
</span><br>
<span class="quotelev2">&gt;&gt; of the algorithm.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have found that depending on the number of rows of the matrix -or,
</span><br>
<span class="quotelev2">&gt;&gt; the size of the vector being sent using MPI_Send, MPI_Recv, the
</span><br>
<span class="quotelev2">&gt;&gt; simulation will hang.
</span><br>
<span class="quotelev2">&gt;&gt; It is only until i reduce this dimension to a certain max number will
</span><br>
<span class="quotelev2">&gt;&gt; the sim run properly. I have also found that this magic number  
</span><br>
<span class="quotelev2">&gt;&gt; differs
</span><br>
<span class="quotelev2">&gt;&gt; depending on the system I am using, eg my home quad-core box or  
</span><br>
<span class="quotelev2">&gt;&gt; remote
</span><br>
<span class="quotelev2">&gt;&gt; cluster.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As i mentioned i have not had this issue with mpich. I would like to
</span><br>
<span class="quotelev2">&gt;&gt; understand why it is happening rather than just defect over to mpich
</span><br>
<span class="quotelev2">&gt;&gt; to get by.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any help would be appreciated!
</span><br>
<span class="quotelev2">&gt;&gt; zach
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5958.php">Jeff Squyres: "Re: [OMPI users] mpirun (orte ?) not shutting down cleanly on job aborts"</a>
<li><strong>Previous message:</strong> <a href="5956.php">Jeff Squyres: "Re: [OMPI users] Problem with getting started [solved]"</a>
<li><strong>In reply to:</strong> <a href="5874.php">Mattijs Janssens: "Re: [OMPI users] weird problem with passing data between nodes"</a>
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
