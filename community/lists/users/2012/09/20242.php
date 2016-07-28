<?
$subject_val = "Re: [OMPI users] trouble_MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 19 10:04:09 2012" -->
<!-- isoreceived="20120919140409" -->
<!-- sent="Tue, 18 Sep 2012 21:36:27 +0000" -->
<!-- isosent="20120918213627" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] trouble_MPI" -->
<!-- id="5883EB04-2A5A-4446-AB86-AAEBFC05A554_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-18 17:36:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20243.php">Siegmar Gross: "[OMPI users] question to MPI_UNIVERSE_SIZE"</a>
<li><strong>Previous message:</strong> <a href="20241.php">Brian Budge: "Re: [OMPI users] trouble_MPI"</a>
<li><strong>In reply to:</strong> <a href="20239.php">Alidoust: "[OMPI users] trouble_MPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This type of error usually occurs when you try to allocate too much memory on the stack. Try allocating your array from the heap.
<br>
<p>Sent from my phone. No type good.
<br>
<p>On Sep 18, 2012, at 5:16 PM, &quot;Alidoust&quot; &lt;phymalidoust_at_[hidden]&lt;mailto:phymalidoust_at_[hidden]&gt;&gt; wrote:
<br>
<p><p>Dear Madam/Sir,
<br>
<p><p>I have a serial Fortran code (f90), dealing with matrix diagonalizing subroutines, and recently got its parallel version to be faster in some unfeasible parts via the serial program.
<br>
I have been using the following commands for initializing MPI in the code
<br>
---------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;call MPI_INIT(ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;call MPI_COMM_SIZE(MPI_COMM_WORLD, p, ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;call MPI_COMM_RANK(MPI_COMM_WORLD, my_rank, ierr)
<br>
<p>CPU requirement &gt;&gt; pmem=1500mb,nodes=5:ppn=8 &lt;&lt;
<br>
-------------------
<br>
Everything looks OK when matrix dimensions are less than 1000x1000. When I increase the matrix dimensions to some larger values the parallel code gets the following error
<br>
------------------
<br>
mpirun noticed that process rank 6 with PID 1566 on node node1082 exited on signal 11 (Segmentation fault)
<br>
------------------
<br>
There is no such error with the serial version even for larger matrix dimensions than 2400x2400. I then thought it might be raised by the number of nodes and memory space I'm requiring. Then changed it as follows
<br>
<p>pmem=10gb,nodes=20:ppn=2
<br>
<p>which is more or less similar to what I'm using for serial jobs (mem=10gb,nodes=1:ppn=1). But the problem persists still. Is there any limitation on MPI subroutines for transferring data size or the issue would be raised by some cause else?
<br>
<p>Best of Regards,
<br>
Mohammad
<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20242/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20243.php">Siegmar Gross: "[OMPI users] question to MPI_UNIVERSE_SIZE"</a>
<li><strong>Previous message:</strong> <a href="20241.php">Brian Budge: "Re: [OMPI users] trouble_MPI"</a>
<li><strong>In reply to:</strong> <a href="20239.php">Alidoust: "[OMPI users] trouble_MPI"</a>
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
