<?
$subject_val = "[OMPI users] Cannot create X11 window in Rank 0 node(master) ?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 30 05:53:10 2009" -->
<!-- isoreceived="20090630095310" -->
<!-- sent="Tue, 30 Jun 2009 18:53:01 +0900" -->
<!-- isosent="20090630095301" -->
<!-- name="Ashika Umanga Umagiliya" -->
<!-- email="aumanga_at_[hidden]" -->
<!-- subject="[OMPI users] Cannot create X11 window in Rank 0 node(master) ?" -->
<!-- id="4A49E07D.6080001_at_biggjapan.com" -->
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
<strong>Subject:</strong> [OMPI users] Cannot create X11 window in Rank 0 node(master) ?<br>
<strong>From:</strong> Ashika Umanga Umagiliya (<em>aumanga_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-30 05:53:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9767.php">Ralph Castain: "Re: [OMPI users] Cannot create X11 window in Rank 0 node(master) ?"</a>
<li><strong>Previous message:</strong> <a href="9765.php">rahmani: "[OMPI users] enable-mpi-threads"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9767.php">Ralph Castain: "Re: [OMPI users] Cannot create X11 window in Rank 0 node(master) ?"</a>
<li><strong>Reply:</strong> <a href="9767.php">Ralph Castain: "Re: [OMPI users] Cannot create X11 window in Rank 0 node(master) ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I have written mandelbrot rendering using X11.I have two nodes with OpenMPI.
<br>
<p>In my code, the rank 0 node(master) does the data collection from 
<br>
salves, Window creation using X11 and render the graph.(using 
<br>
XCreateSimpleWindow() ). Slave nodes calculate and send data to master.
<br>
<p>But when I execute my application by :
<br>
#mpirun -np 4 -host biggserver ./mandel
<br>
<p>its gives error :
<br>
<p>&quot;cannot connect to X server '(null)'&quot;
<br>
<p><p>Isn't the rank 0 given to the machine which we initially run the MPI 
<br>
application?
<br>
If so,why the application says it cannot connect to X server?Since rank 
<br>
0 is my workstation?
<br>
<p>When I run this using a single node , it works well.
<br>
<p>Any tips?
<br>
<p>thanks in advance,
<br>
umanga
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9767.php">Ralph Castain: "Re: [OMPI users] Cannot create X11 window in Rank 0 node(master) ?"</a>
<li><strong>Previous message:</strong> <a href="9765.php">rahmani: "[OMPI users] enable-mpi-threads"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9767.php">Ralph Castain: "Re: [OMPI users] Cannot create X11 window in Rank 0 node(master) ?"</a>
<li><strong>Reply:</strong> <a href="9767.php">Ralph Castain: "Re: [OMPI users] Cannot create X11 window in Rank 0 node(master) ?"</a>
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
