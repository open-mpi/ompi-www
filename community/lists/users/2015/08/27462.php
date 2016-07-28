<?
$subject_val = "[OMPI users] connection time out (110)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 13 16:05:28 2015" -->
<!-- isoreceived="20150813200528" -->
<!-- sent="Thu, 13 Aug 2015 23:35:26 +0330" -->
<!-- isosent="20150813200526" -->
<!-- name="Ehsan Moradi" -->
<!-- email="ehmo.tk_at_[hidden]" -->
<!-- subject="[OMPI users] connection time out (110)" -->
<!-- id="CAJdx8H2OHpSE6xvNDRSCXK6juhbb9KgRjfwqFAXHmchN9uERrQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] connection time out (110)<br>
<strong>From:</strong> Ehsan Moradi (<em>ehmo.tk_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-13 16:05:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27463.php">Howard Pritchard: "Re: [OMPI users] segfault on java binding from MPI.init()"</a>
<li><strong>Previous message:</strong> <a href="27461.php">Nathan Hjelm: "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
hi
<br>
my friends, i getting error connection time out (110) even after
<br>
<p>echo 10000 &gt; /proc/sys/net/core/somaxconn
<br>
<p>echo 100000 &gt; /proc/sys/net/core/netdev_max_backlog
<br>
<p>mpirun --mca oob_tcp_listen_mode listen_thread -np 1024 my_mpi_program
<br>
<p>&nbsp;my program work on 2 nodes only if i add one more its going to break and
<br>
show connection time out (110)
<br>
what should i do?
<br>
i checked all 4 nodes and they have ping to each other by 0.080 sec
<br>
and i can use all nodes for a sample program like hello world
<br>
but when the program get bigger its not work
<br>
thank you guys help me please
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27462/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27463.php">Howard Pritchard: "Re: [OMPI users] segfault on java binding from MPI.init()"</a>
<li><strong>Previous message:</strong> <a href="27461.php">Nathan Hjelm: "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
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
