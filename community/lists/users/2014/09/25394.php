<?
$subject_val = "Re: [OMPI users] Application hangs in 1.8.1 related to collective operations";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 26 17:10:21 2014" -->
<!-- isoreceived="20140926211021" -->
<!-- sent="Fri, 26 Sep 2014 15:10:20 -0600" -->
<!-- isosent="20140926211020" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Application hangs in 1.8.1 related to collective operations" -->
<!-- id="CAF1Cqj79Fy1j-ayL7KdyU-oZH07br5jVrP6-tTgfXB1R-MP6oQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="25AE6277FDC12F408393C11ACE6C400F0CBF1FB9_at_HDXDSP53.us.lmco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Application hangs in 1.8.1 related to collective operations<br>
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-26 17:10:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25395.php">Amos Anderson: "[OMPI users] OpenMPI 1.8.2 segfaults while 1.6.5 works?"</a>
<li><strong>Previous message:</strong> <a href="25393.php">Amos Anderson: "[OMPI users] Binary distribution of my program possible using OpenMPI+Torque?"</a>
<li><strong>In reply to:</strong> <a href="25389.php">Blosch, Edwin L: "[OMPI users] Application hangs in 1.8.1 related to collective operations"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Ed,
<br>
<p>Could you post the output of ompi_info?  It would also help to know which
<br>
variant of the collective ops
<br>
your doing.  If you could post the output when you run with
<br>
<p>mpirun --mca coll_base_verbose 10 &quot;other mpirun args you've been using&quot;
<br>
<p>that would be great
<br>
<p>Also, if you know the sizes (number of elements) involved in the reduce and
<br>
allreduce operations it
<br>
would be helpful to know this as well.
<br>
<p>Thanks,
<br>
<p>Howard
<br>
<p><p>2014-09-25 3:34 GMT-06:00 Blosch, Edwin L &lt;edwin.l.blosch_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt;  I had an application suddenly stop making progress.  By killing the last
</span><br>
<span class="quotelev1">&gt; process out of 208 processes, then looking at the stack trace, I found 3 of
</span><br>
<span class="quotelev1">&gt; 208 processes were in an MPI_REDUCE call.  The other 205 had progressed in
</span><br>
<span class="quotelev1">&gt; their execution to another routine, where they were waiting in an unrelated
</span><br>
<span class="quotelev1">&gt; MPI_ALLREDUCE call.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The code structure is such that each processes calls MPI_REDUCE 5 times
</span><br>
<span class="quotelev1">&gt; for different variables, then some work is done, then the MPI_ALLREDUCE
</span><br>
<span class="quotelev1">&gt; call happens early in the next iteration of the solution procedure.  I
</span><br>
<span class="quotelev1">&gt; thought it was also noteworthy that the 3 processes stuck at MPI_REDUCE,
</span><br>
<span class="quotelev1">&gt; were actually stuck on the 4th of 5 MPI_REDUCE calls, not the 5th call.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No issues with MVAPICH.  Problem easily solved by adding MPI_BARRIER after
</span><br>
<span class="quotelev1">&gt; the section of MPI_REDUCE calls.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seems like MPI_REDUCE has some kind of non-blocking implementation, and
</span><br>
<span class="quotelev1">&gt; it was not safe to enter the MPI_ALLREDUCE while those MPI_REDUCE calls had
</span><br>
<span class="quotelev1">&gt; not yet completed for other processes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This was in OpenMPI 1.8.1.  Same problem seen on 3 slightly different
</span><br>
<span class="quotelev1">&gt; systems, all QDR Infiniband, Mellanox HCAs, using a Mellanox OFED stack
</span><br>
<span class="quotelev1">&gt; (slightly different versions on each cluster).  Intel compilers, again
</span><br>
<span class="quotelev1">&gt; slightly different versions on each of the 3 systems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Has anyone encountered anything similar?  While I have a workaround, I
</span><br>
<span class="quotelev1">&gt; want to make sure the root cause of the deadlock gets fixed.  Please let me
</span><br>
<span class="quotelev1">&gt; know what I can do to help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/09/25389.php">http://www.open-mpi.org/community/lists/users/2014/09/25389.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25394/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25395.php">Amos Anderson: "[OMPI users] OpenMPI 1.8.2 segfaults while 1.6.5 works?"</a>
<li><strong>Previous message:</strong> <a href="25393.php">Amos Anderson: "[OMPI users] Binary distribution of my program possible using OpenMPI+Torque?"</a>
<li><strong>In reply to:</strong> <a href="25389.php">Blosch, Edwin L: "[OMPI users] Application hangs in 1.8.1 related to collective operations"</a>
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
