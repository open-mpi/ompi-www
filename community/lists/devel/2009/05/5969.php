<?
$subject_val = "[OMPI devel] mpi very slow to start on Mac OS X";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  6 16:05:55 2009" -->
<!-- isoreceived="20090506200555" -->
<!-- sent="Wed, 6 May 2009 21:05:18 +0100" -->
<!-- isosent="20090506200518" -->
<!-- name="Christopher Jefferson" -->
<!-- email="chris_at_[hidden]" -->
<!-- subject="[OMPI devel] mpi very slow to start on Mac OS X" -->
<!-- id="0ED3C715-E8C2-436D-8B88-ADD2E2D978B9_at_bubblescope.net" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] mpi very slow to start on Mac OS X<br>
<strong>From:</strong> Christopher Jefferson (<em>chris_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-06 16:05:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5970.php">Christopher Jefferson: "Re: [OMPI devel] mpi very slow to start on Mac OS X"</a>
<li><strong>Previous message:</strong> <a href="5968.php">Brian W. Barrett: "Re: [OMPI devel] Revise paffinity method?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5970.php">Christopher Jefferson: "Re: [OMPI devel] mpi very slow to start on Mac OS X"</a>
<li><strong>Maybe reply:</strong> <a href="5970.php">Christopher Jefferson: "Re: [OMPI devel] mpi very slow to start on Mac OS X"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am using the system openmpi (1.2.3) on Mac OS X 10.5.6, gcc 4.0.1. I  
<br>
believe these are all the standard tools.
<br>
<p>If I mpirun as:
<br>
<p>mpirun -n 2 ./a.out
<br>
<p>Using the test code from <a href="http://www.boost.org/doc/libs/1_39_0/doc/html/mpi/getting_started.html#mpi.config">http://www.boost.org/doc/libs/1_39_0/doc/html/mpi/getting_started.html#mpi.config</a> 
<br>
&nbsp;&nbsp;(note that at the moment I have not installed, and am not using,  
<br>
boost)
<br>
<p>I get the following output:
<br>
<p>~/temp$ time mpirun -n 2 ./mpi-test
<br>
[christopher-jeffersons-macbook.local:06005] [0,1,0]-[0,0,0]  
<br>
mca_oob_tcp_peer_complete_connect: connection failed: Connection  
<br>
refused (61) - retrying
<br>
[christopher-jeffersons-macbook.local:06006] [0,1,1]-[0,0,0]  
<br>
mca_oob_tcp_peer_complete_connect: connection failed: Connection  
<br>
refused (61) - retrying
<br>
[christopher-jeffersons-macbook.local:06005] [0,1,0]-[0,0,0]  
<br>
mca_oob_tcp_peer_complete_connect: connection failed: Operation timed  
<br>
out (60) - retrying
<br>
[christopher-jeffersons-macbook.local:06006] [0,1,1]-[0,0,0]  
<br>
mca_oob_tcp_peer_complete_connect: connection failed: Operation timed  
<br>
out (60) - retrying
<br>
[christopher-jeffersons-macbook.local:06005] [0,1,0]-[0,1,1]  
<br>
mca_oob_tcp_peer_complete_connect: connection failed: Connection  
<br>
refused (61) - retrying
<br>
[christopher-jeffersons-macbook.local:06005] [0,1,0]-[0,1,1]  
<br>
mca_oob_tcp_peer_complete_connect: connection failed: Operation timed  
<br>
out (60) - retrying
<br>
Rank 0 OK!
<br>
Rank 1 OK!
<br>
<p>real	3m52.070s
<br>
user	0m0.019s
<br>
sys	0m0.025s
<br>
<p><p>Note in particular the time.
<br>
<p>Running just ' int main(void) { }' takes about 1 minute 16 seconds.
<br>
<p>Any suggestions very welcome!
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5970.php">Christopher Jefferson: "Re: [OMPI devel] mpi very slow to start on Mac OS X"</a>
<li><strong>Previous message:</strong> <a href="5968.php">Brian W. Barrett: "Re: [OMPI devel] Revise paffinity method?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5970.php">Christopher Jefferson: "Re: [OMPI devel] mpi very slow to start on Mac OS X"</a>
<li><strong>Maybe reply:</strong> <a href="5970.php">Christopher Jefferson: "Re: [OMPI devel] mpi very slow to start on Mac OS X"</a>
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
