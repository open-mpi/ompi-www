<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Mar 21 16:51:16 2007" -->
<!-- isoreceived="20070321205116" -->
<!-- sent="Wed, 21 Mar 2007 12:51:09 -0800" -->
<!-- isosent="20070321205109" -->
<!-- name="tim gunter" -->
<!-- email="tgunter_at_[hidden]" -->
<!-- subject="[OMPI users] deadlock on barrier" -->
<!-- id="90c088060703211351u78ca6091mf2a761ad347e66f_at_mail.gmail.com" -->
<!-- charset="ANSI_X3.4-1968" -->
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
<strong>From:</strong> tim gunter (<em>tgunter_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-21 16:51:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2865.php">Heywood, Todd: "Re: [OMPI users] MPI processes  swapping out"</a>
<li><strong>Previous message:</strong> <a href="2863.php">Heywood, Todd: "[OMPI users] MPI processes  swapping out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2870.php">Jeff Squyres: "Re: [OMPI users] deadlock on barrier"</a>
<li><strong>Reply:</strong> <a href="2870.php">Jeff Squyres: "Re: [OMPI users] deadlock on barrier"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
i am experiencing some issues w/ openmpi 1.2 running on a rocks
<br>
4.2.1cluster(the issues also appear to occur w/ openmpi
<br>
1.1.5 and 1.1.4).
<br>
<p>when i run my program with the frontend in the list of nodes, they deadlock.
<br>
<p>when i run my program without the frontend in the list of nodes, they run to
<br>
completion.
<br>
<p>the simplest test program that does this(test1.c) does an &quot;MPI_Init&quot;,
<br>
followed by an &quot;MPI_Barrier&quot;, and a &quot;MPI_Finalize&quot;.
<br>
<p>so the following deadlocks:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;/users/gunter $ mpirun -np 3 -H frontend,compute-0-0,compute-0-1 ./test1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;host:compute-0-1.local made it past the barrier, ret:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpirun: killing job...
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mpirun noticed that job rank 0 with PID 15384 on node frontend exited on
<br>
signal 15 (Terminated).
<br>
&nbsp;&nbsp;&nbsp;&nbsp;2 additional processes aborted (not shown)
<br>
<p>this runs to completion:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;/users/gunter $ mpirun -np 3 -H compute-0-0,compute-0-1,compute-0-2
<br>
./test1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;host:compute-0-1.local made it past the barrier, ret:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;host:compute-0-0.local made it past the barrier, ret:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;host:compute-0-2.local made it past the barrier, ret:0
<br>
<p>if i have the compute nodes send a message to the frontend prior to the
<br>
barrier, it runs to completion:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;/users/gunter $ mpirun -np 3 -H frontend,compute-0-0,compute-0-1 ./test2
<br>
0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;host:     frontend.domain node:  0 is the master
<br>
&nbsp;&nbsp;&nbsp;&nbsp;host:   compute-0-0.local node:  1 sent:  1 to:    0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;host:   compute-0-1.local node:  2 sent:  2 to:    0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;host:     frontend.domain node:  0 recv:  1 from:  1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;host:     frontend.domain node:  0 recv:  2 from:  2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;host:     frontend.domain made it past the barrier, ret:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;host:   compute-0-1.local made it past the barrier, ret:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;host:   compute-0-0.local made it past the barrier, ret:0
<br>
<p>if i have a different node function as the master, it deadlocks:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;/users/gunter $ mpirun -np 3 -H frontend,compute-0-0,compute-0-1 ./test2
<br>
1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;host:   compute-0-0.local node:  1 is the master
<br>
&nbsp;&nbsp;&nbsp;&nbsp;host:   compute-0-1.local node:  2 sent:  2 to:    1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpirun: killing job...
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mpirun noticed that job rank 0 with PID 15411 on node frontend exited on
<br>
signal 15 (Terminated).
<br>
&nbsp;&nbsp;&nbsp;&nbsp;2 additional processes aborted (not shown)
<br>
<p>how is it that in the first example, one node makes it past the barrier, and
<br>
the rest deadlock?
<br>
<p>these programs both run to completion on two other MPI implementations.
<br>
<p>is there something mis-configured on my cluster? or is this potentially an
<br>
openmpi bug?
<br>
<p>what is the best way to debug this?
<br>
<p>any help would be appreciated!
<br>
<p>--tim
<br>
<p><p>
<p>

<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2864/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2864/test1.c">test1.c</a>
</ul>
<!-- attachment="test1.c" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2864/test2.c">test2.c</a>
</ul>
<!-- attachment="test2.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2865.php">Heywood, Todd: "Re: [OMPI users] MPI processes  swapping out"</a>
<li><strong>Previous message:</strong> <a href="2863.php">Heywood, Todd: "[OMPI users] MPI processes  swapping out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2870.php">Jeff Squyres: "Re: [OMPI users] deadlock on barrier"</a>
<li><strong>Reply:</strong> <a href="2870.php">Jeff Squyres: "Re: [OMPI users] deadlock on barrier"</a>
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
