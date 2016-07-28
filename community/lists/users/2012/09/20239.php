<?
$subject_val = "[OMPI users] trouble_MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 18 17:15:12 2012" -->
<!-- isoreceived="20120918211512" -->
<!-- sent="Tue, 18 Sep 2012 23:14:27 +0200" -->
<!-- isosent="20120918211427" -->
<!-- name="Alidoust" -->
<!-- email="phymalidoust_at_[hidden]" -->
<!-- subject="[OMPI users] trouble_MPI" -->
<!-- id="CAAKc9zV8avSN+QK2JixofC9EYo-q+c+viuzO-xqj5Y=HDDnxXQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAKc9zX=neiGyeq8gyxb89i_0H2QO534eXnX=QoG1Hz9o0-L5g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] trouble_MPI<br>
<strong>From:</strong> Alidoust (<em>phymalidoust_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-18 17:14:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20240.php">Ralph Castain: "Re: [OMPI users] trouble_MPI"</a>
<li><strong>Previous message:</strong> <a href="20238.php">Ralph Castain: "Re: [OMPI users] segmentation fault / bus error in openmpi-1.9a1r27342 (Solaris, Oracle C)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20240.php">Ralph Castain: "Re: [OMPI users] trouble_MPI"</a>
<li><strong>Reply:</strong> <a href="20240.php">Ralph Castain: "Re: [OMPI users] trouble_MPI"</a>
<li><strong>Reply:</strong> <a href="20241.php">Brian Budge: "Re: [OMPI users] trouble_MPI"</a>
<li><strong>Reply:</strong> <a href="20242.php">Jeff Squyres (jsquyres): "Re: [OMPI users] trouble_MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Madam/Sir,
<br>
<p><p>I have a serial Fortran code (f90), dealing with matrix diagonalizing
<br>
subroutines, and recently got its parallel version to be faster in some
<br>
unfeasible parts via the serial program.
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
Everything looks OK when matrix dimensions are less than 1000x1000. When I
<br>
increase the matrix dimensions to some larger values the parallel code gets
<br>
the following error
<br>
------------------
<br>
mpirun noticed that process rank 6 with PID 1566 on node node1082 exited on
<br>
signal 11 (Segmentation fault)
<br>
------------------
<br>
There is no such error with the serial version even for larger matrix
<br>
dimensions than 2400x2400. I then thought it might be raised by the number
<br>
of nodes and memory space I'm requiring. Then changed it as follows
<br>
<p>pmem=10gb,nodes=20:ppn=2
<br>
<p>which is more or less similar to what I'm using for serial jobs (
<br>
mem=10gb,nodes=1:ppn=1). But the problem persists still. Is there any
<br>
limitation on MPI subroutines for transferring data size or the issue would
<br>
be raised by some cause else?
<br>
<p>Best of Regards,
<br>
Mohammad
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20239/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20240.php">Ralph Castain: "Re: [OMPI users] trouble_MPI"</a>
<li><strong>Previous message:</strong> <a href="20238.php">Ralph Castain: "Re: [OMPI users] segmentation fault / bus error in openmpi-1.9a1r27342 (Solaris, Oracle C)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20240.php">Ralph Castain: "Re: [OMPI users] trouble_MPI"</a>
<li><strong>Reply:</strong> <a href="20240.php">Ralph Castain: "Re: [OMPI users] trouble_MPI"</a>
<li><strong>Reply:</strong> <a href="20241.php">Brian Budge: "Re: [OMPI users] trouble_MPI"</a>
<li><strong>Reply:</strong> <a href="20242.php">Jeff Squyres (jsquyres): "Re: [OMPI users] trouble_MPI"</a>
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
