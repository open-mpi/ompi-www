<?
$subject_val = "[OMPI users] Low performance of Open MPI-1.3 over Gigabit";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 25 02:22:05 2009" -->
<!-- isoreceived="20090225072205" -->
<!-- sent="Wed, 25 Feb 2009 12:51:58 +0530" -->
<!-- isosent="20090225072158" -->
<!-- name="Sangamesh B" -->
<!-- email="forum.san_at_[hidden]" -->
<!-- subject="[OMPI users] Low performance of Open MPI-1.3 over Gigabit" -->
<!-- id="cb60cbc40902242321u3df21d52w8102e91ae1017353_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Low performance of Open MPI-1.3 over Gigabit<br>
<strong>From:</strong> Sangamesh B (<em>forum.san_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-25 02:21:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8193.php">michael.meinel_at_[hidden]: "Re: [OMPI users] Problems in 1.3 loading shared libs whenusingVampirServer"</a>
<li><strong>Previous message:</strong> <a href="8191.php">Ralph Castain: "Re: [OMPI users] New User question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/03/8277.php">Sangamesh B: "Re: [OMPI users] Low performance of Open MPI-1.3 over Gigabit"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/03/8277.php">Sangamesh B: "Re: [OMPI users] Low performance of Open MPI-1.3 over Gigabit"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear All,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;A fortran application is installed with Open MPI-1.3 + Intel
<br>
compilers on a Rocks-4.3 cluster with Intel Xeon Dual socket Quad core
<br>
processor @ 3GHz (8cores/node).
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;The time consumed for different tests over a Gigabit connected
<br>
nodes are as follows: (Each node has 8 GB memory).
<br>
<p>No of Nodes used:6  No of cores used/node:4 total mpi processes:24
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CPU TIME :    1 HOURS 19 MINUTES 14.39 SECONDS
<br>
&nbsp;&nbsp;&nbsp;ELAPSED TIME :    2 HOURS 41 MINUTES  8.55 SECONDS
<br>
<p>No of Nodes used:6  No of cores used/node:8 total mpi processes:48
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CPU TIME :    4 HOURS 19 MINUTES 19.29 SECONDS
<br>
&nbsp;&nbsp;&nbsp;ELAPSED TIME :    9 HOURS 15 MINUTES 46.39 SECONDS
<br>
<p>No of Nodes used:3  No of cores used/node:8 total mpi processes:24
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CPU TIME :    2 HOURS 41 MINUTES 27.98 SECONDS
<br>
&nbsp;&nbsp;&nbsp;ELAPSED TIME :    4 HOURS 21 MINUTES  0.24 SECONDS
<br>
<p>But the same application performs well on another Linux cluster with
<br>
LAM-MPI-7.1.3
<br>
<p>No of Nodes used:6  No of cores used/node:4 total mpi processes:24
<br>
CPU TIME :    1hours:30min:37.25s
<br>
ELAPSED TIME  1hours:51min:10.00S
<br>
<p>No of Nodes used:12  No of cores used/node:4 total mpi processes:48
<br>
CPU TIME :    0hours:46min:13.98s
<br>
ELAPSED TIME  1hours:02min:26.11s
<br>
<p>No of Nodes used:6  No of cores used/node:8 total mpi processes:48
<br>
CPU TIME :     1hours:13min:09.17s
<br>
ELAPSED TIME  1hours:47min:14.04s
<br>
<p>So there is a huge difference between CPU TIME &amp; ELAPSED TIME for Open MPI jobs.
<br>
<p>Note: On the same cluster Open MPI gives better performance for
<br>
inifiniband nodes.
<br>
<p>What could be the problem for Open MPI over Gigabit?
<br>
Any flags need to be used?
<br>
Or is it not that good to use Open MPI on Gigabit?
<br>
<p>Thanks,
<br>
Sangamesh
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8193.php">michael.meinel_at_[hidden]: "Re: [OMPI users] Problems in 1.3 loading shared libs whenusingVampirServer"</a>
<li><strong>Previous message:</strong> <a href="8191.php">Ralph Castain: "Re: [OMPI users] New User question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/03/8277.php">Sangamesh B: "Re: [OMPI users] Low performance of Open MPI-1.3 over Gigabit"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/03/8277.php">Sangamesh B: "Re: [OMPI users] Low performance of Open MPI-1.3 over Gigabit"</a>
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
