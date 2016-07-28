<?
$subject_val = "Re: [OMPI users] trouble_MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 18 17:42:51 2012" -->
<!-- isoreceived="20120918214251" -->
<!-- sent="Tue, 18 Sep 2012 14:42:47 -0700" -->
<!-- isosent="20120918214247" -->
<!-- name="Brian Budge" -->
<!-- email="brian.budge_at_[hidden]" -->
<!-- subject="Re: [OMPI users] trouble_MPI" -->
<!-- id="CANjXV6-CcamwLT+UYYKXvktKrV8rW-3eOwJ9N6RPpxmKnrw5TA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAKc9zV8avSN+QK2JixofC9EYo-q+c+viuzO-xqj5Y=HDDnxXQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Brian Budge (<em>brian.budge_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-18 17:42:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20242.php">Jeff Squyres (jsquyres): "Re: [OMPI users] trouble_MPI"</a>
<li><strong>Previous message:</strong> <a href="20240.php">Ralph Castain: "Re: [OMPI users] trouble_MPI"</a>
<li><strong>In reply to:</strong> <a href="20239.php">Alidoust: "[OMPI users] trouble_MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20244.php">David Warren: "Re: [OMPI users] trouble_MPI"</a>
<li><strong>Reply:</strong> <a href="20244.php">David Warren: "Re: [OMPI users] trouble_MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Sep 18, 2012 at 2:14 PM, Alidoust &lt;phymalidoust_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dear Madam/Sir,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a serial Fortran code (f90), dealing with matrix diagonalizing
</span><br>
<span class="quotelev1">&gt; subroutines, and recently got its parallel version to be faster in some
</span><br>
<span class="quotelev1">&gt; unfeasible parts via the serial program.
</span><br>
<span class="quotelev1">&gt; I have been using the following commands for initializing MPI in the code
</span><br>
<span class="quotelev1">&gt; ---------------
</span><br>
<span class="quotelev1">&gt;     call MPI_INIT(ierr)
</span><br>
<span class="quotelev1">&gt;     call MPI_COMM_SIZE(MPI_COMM_WORLD, p, ierr)
</span><br>
<span class="quotelev1">&gt;     call MPI_COMM_RANK(MPI_COMM_WORLD, my_rank, ierr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CPU requirement &gt;&gt; pmem=1500mb,nodes=5:ppn=8 &lt;&lt;
</span><br>
<span class="quotelev1">&gt; -------------------
</span><br>
<span class="quotelev1">&gt; Everything looks OK when matrix dimensions are less than 1000x1000. When I
</span><br>
<span class="quotelev1">&gt; increase the matrix dimensions to some larger values the parallel code gets
</span><br>
<span class="quotelev1">&gt; the following error
</span><br>
<span class="quotelev1">&gt; ------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 6 with PID 1566 on node node1082 exited on
</span><br>
<span class="quotelev1">&gt; signal 11 (Segmentation fault)
</span><br>
<span class="quotelev1">&gt; ------------------
</span><br>
<span class="quotelev1">&gt; There is no such error with the serial version even for larger matrix
</span><br>
<span class="quotelev1">&gt; dimensions than 2400x2400. I then thought it might be raised by the number
</span><br>
<span class="quotelev1">&gt; of nodes and memory space I'm requiring. Then changed it as follows
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; pmem=10gb,nodes=20:ppn=2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; which is more or less similar to what I'm using for serial jobs
</span><br>
<span class="quotelev1">&gt; (mem=10gb,nodes=1:ppn=1). But the problem persists still. Is there any
</span><br>
<span class="quotelev1">&gt; limitation on MPI subroutines for transferring data size or the issue would
</span><br>
<span class="quotelev1">&gt; be raised by some cause else?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best of Regards,
</span><br>
<span class="quotelev1">&gt; Mohammad
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I believe the send/recv/bcast calls are all limited to sending 2 GB
<br>
data since they use a signed 32-bit integer to denote the size.  If
<br>
your matrices require a lot of space per element, I suppose this limit
<br>
could be reached.
<br>
<p>&nbsp;&nbsp;Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20242.php">Jeff Squyres (jsquyres): "Re: [OMPI users] trouble_MPI"</a>
<li><strong>Previous message:</strong> <a href="20240.php">Ralph Castain: "Re: [OMPI users] trouble_MPI"</a>
<li><strong>In reply to:</strong> <a href="20239.php">Alidoust: "[OMPI users] trouble_MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20244.php">David Warren: "Re: [OMPI users] trouble_MPI"</a>
<li><strong>Reply:</strong> <a href="20244.php">David Warren: "Re: [OMPI users] trouble_MPI"</a>
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
