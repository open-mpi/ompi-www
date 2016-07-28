<?
$subject_val = "Re: [OMPI users] trouble_MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 19 12:29:58 2012" -->
<!-- isoreceived="20120919162958" -->
<!-- sent="Wed, 19 Sep 2012 09:29:51 -0700" -->
<!-- isosent="20120919162951" -->
<!-- name="David Warren" -->
<!-- email="warren_at_[hidden]" -->
<!-- subject="Re: [OMPI users] trouble_MPI" -->
<!-- id="5059F2FF.5050609_at_atmos.washington.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CANjXV6-CcamwLT+UYYKXvktKrV8rW-3eOwJ9N6RPpxmKnrw5TA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] trouble_MPI<br>
<strong>From:</strong> David Warren (<em>warren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-19 12:29:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20245.php">devendra rai: "[OMPI users] MPI_Probe causes a crash with signal 6."</a>
<li><strong>Previous message:</strong> <a href="20243.php">Siegmar Gross: "[OMPI users] question to MPI_UNIVERSE_SIZE"</a>
<li><strong>In reply to:</strong> <a href="20241.php">Brian Budge: "Re: [OMPI users] trouble_MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20242.php">Jeff Squyres (jsquyres): "Re: [OMPI users] trouble_MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Segfaults in FORTRAN generally mean either an array is out of bounds, or 
<br>
you can't get the memory you are requesting. Check your array sizes 
<br>
(particularly the ones in subroutines). You can compile with -C, but 
<br>
that only tells you if you exceed an array declaration, not the actual 
<br>
size. It is possible to pass a smaller array to a subroutine than it 
<br>
declares it to be and -C won't catch that. I have seen lots of code that 
<br>
does that. Some that even relied on the fact that VAXen used to stack 
<br>
arrays in order, so you could wander into the next and previous ones, 
<br>
and everything worked as expected.
<br>
<p>I doubt you are exceeding and memory limitation as you are asking for 40 
<br>
processors, so each one is pretty small. It is more likely that there is 
<br>
some temporary array there that is the wrong size.
<br>
<p>On 09/18/12 14:42, Brian Budge wrote:
<br>
<span class="quotelev1">&gt; On Tue, Sep 18, 2012 at 2:14 PM, Alidoust&lt;phymalidoust_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Dear Madam/Sir,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have a serial Fortran code (f90), dealing with matrix diagonalizing
</span><br>
<span class="quotelev2">&gt;&gt; subroutines, and recently got its parallel version to be faster in some
</span><br>
<span class="quotelev2">&gt;&gt; unfeasible parts via the serial program.
</span><br>
<span class="quotelev2">&gt;&gt; I have been using the following commands for initializing MPI in the code
</span><br>
<span class="quotelev2">&gt;&gt; ---------------
</span><br>
<span class="quotelev2">&gt;&gt;      call MPI_INIT(ierr)
</span><br>
<span class="quotelev2">&gt;&gt;      call MPI_COMM_SIZE(MPI_COMM_WORLD, p, ierr)
</span><br>
<span class="quotelev2">&gt;&gt;      call MPI_COMM_RANK(MPI_COMM_WORLD, my_rank, ierr)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; CPU requirement&gt;&gt;  pmem=1500mb,nodes=5:ppn=8&lt;&lt;
</span><br>
<span class="quotelev2">&gt;&gt; -------------------
</span><br>
<span class="quotelev2">&gt;&gt; Everything looks OK when matrix dimensions are less than 1000x1000. When I
</span><br>
<span class="quotelev2">&gt;&gt; increase the matrix dimensions to some larger values the parallel code gets
</span><br>
<span class="quotelev2">&gt;&gt; the following error
</span><br>
<span class="quotelev2">&gt;&gt; ------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that process rank 6 with PID 1566 on node node1082 exited on
</span><br>
<span class="quotelev2">&gt;&gt; signal 11 (Segmentation fault)
</span><br>
<span class="quotelev2">&gt;&gt; ------------------
</span><br>
<span class="quotelev2">&gt;&gt; There is no such error with the serial version even for larger matrix
</span><br>
<span class="quotelev2">&gt;&gt; dimensions than 2400x2400. I then thought it might be raised by the number
</span><br>
<span class="quotelev2">&gt;&gt; of nodes and memory space I'm requiring. Then changed it as follows
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; pmem=10gb,nodes=20:ppn=2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; which is more or less similar to what I'm using for serial jobs
</span><br>
<span class="quotelev2">&gt;&gt; (mem=10gb,nodes=1:ppn=1). But the problem persists still. Is there any
</span><br>
<span class="quotelev2">&gt;&gt; limitation on MPI subroutines for transferring data size or the issue would
</span><br>
<span class="quotelev2">&gt;&gt; be raised by some cause else?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best of Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Mohammad
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; I believe the send/recv/bcast calls are all limited to sending 2 GB
</span><br>
<span class="quotelev1">&gt; data since they use a signed 32-bit integer to denote the size.  If
</span><br>
<span class="quotelev1">&gt; your matrices require a lot of space per element, I suppose this limit
</span><br>
<span class="quotelev1">&gt; could be reached.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Brian
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
<li><strong>Next message:</strong> <a href="20245.php">devendra rai: "[OMPI users] MPI_Probe causes a crash with signal 6."</a>
<li><strong>Previous message:</strong> <a href="20243.php">Siegmar Gross: "[OMPI users] question to MPI_UNIVERSE_SIZE"</a>
<li><strong>In reply to:</strong> <a href="20241.php">Brian Budge: "Re: [OMPI users] trouble_MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20242.php">Jeff Squyres (jsquyres): "Re: [OMPI users] trouble_MPI"</a>
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
