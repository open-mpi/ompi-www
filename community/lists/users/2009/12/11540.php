<?
$subject_val = "[OMPI users] error performing MPI_Comm_spawn";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 15 07:51:33 2009" -->
<!-- isoreceived="20091215125133" -->
<!-- sent="Tue, 15 Dec 2009 10:51:08 -0200" -->
<!-- isosent="20091215125108" -->
<!-- name="Marcia Cristina Cera" -->
<!-- email="marcia.cristina.cera_at_[hidden]" -->
<!-- subject="[OMPI users] error performing MPI_Comm_spawn" -->
<!-- id="6546e7be0912150451y7e215ce6u59de55444a86dac0_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] error performing MPI_Comm_spawn<br>
<strong>From:</strong> Marcia Cristina Cera (<em>marcia.cristina.cera_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-15 07:51:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11541.php">Ralph Castain: "Re: [OMPI users] error performing MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="11539.php">Sergio D&#237;az: "Re: [OMPI users] checkpoint opempi-1.3.3+sge62"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11541.php">Ralph Castain: "Re: [OMPI users] error performing MPI_Comm_spawn"</a>
<li><strong>Reply:</strong> <a href="11541.php">Ralph Castain: "Re: [OMPI users] error performing MPI_Comm_spawn"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I intend to develop an application using the MPI_Comm_spawn to create
<br>
dynamically new MPI tasks (or processes).
<br>
The structure of the program is like a tree: each node creates 2 new ones
<br>
until reaches a predefined number of levels.
<br>
<p>I developed a small program to explain my problem as can be seen in
<br>
attachment.
<br>
-- start.c: launches (through MPI_Comm_spawn, in which the argv has the
<br>
level value) the root of the tree (a ch_rec program). Afterward spawn, a
<br>
message is sent to  child and the process block in an MPI_Recv.
<br>
-- ch_rec.c: gets its level value and receives the parent message, then if
<br>
its level is less than a predefined limit, it will creates 2 children:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- set the level value;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- spawn 1 child;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- send a message;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- call an MPI_Irecv;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- repeat the 4 previous steps for the second child;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- call an MPI_Waitany waiting for children returns.
<br>
When children messages are received, the process send a message to its
<br>
parent and call MPI_Finalize.
<br>
<p>Using the openmpi-1.3.3 version the program runs as expected but with
<br>
openmpi-1.4 I get the following error:
<br>
<p>$ mpirun -np 1 start
<br>
level 0
<br>
level = 1
<br>
Parent sent: level 0 (pid:4279)
<br>
level = 2
<br>
Parent sent: level 1 (pid:4281)
<br>
[xiru-8.portoalegre.grenoble.grid5000.fr:04278] [[42824,0],0]
<br>
ORTE_ERROR_LOG: Not found in file base/plm_base_launch_support.c at line 758
<br>
<p>The error happens when my program try to launch the second child immediately
<br>
after the first spawn call.
<br>
In my tests I try to put an sleep of 2 second between the first and the
<br>
second spawn, and then the program runs as expected.
<br>
<p>Some one can help me with this version 1.4 bug?
<br>
<p>thanks,
<br>
m&#225;rcia.
<br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11540/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11540/spawn-problem.tar.gz">spawn-problem.tar.gz</a>
</ul>
<!-- attachment="spawn-problem.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11541.php">Ralph Castain: "Re: [OMPI users] error performing MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="11539.php">Sergio D&#237;az: "Re: [OMPI users] checkpoint opempi-1.3.3+sge62"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11541.php">Ralph Castain: "Re: [OMPI users] error performing MPI_Comm_spawn"</a>
<li><strong>Reply:</strong> <a href="11541.php">Ralph Castain: "Re: [OMPI users] error performing MPI_Comm_spawn"</a>
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
