<?
$subject_val = "[OMPI users] Optimal mapping/binding when threads are used?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 10 20:59:25 2014" -->
<!-- isoreceived="20140411005925" -->
<!-- sent="Thu, 10 Apr 2014 20:59:24 -0400" -->
<!-- isosent="20140411005924" -->
<!-- name="Saliya Ekanayake" -->
<!-- email="esaliya_at_[hidden]" -->
<!-- subject="[OMPI users] Optimal mapping/binding when threads are used?" -->
<!-- id="CA+ssbKW4jeMNnta=OqdqZS2LUbDNY8rGAh+E3Lm9ww-DXwCs-A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Optimal mapping/binding when threads are used?<br>
<strong>From:</strong> Saliya Ekanayake (<em>esaliya_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-10 20:59:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24147.php">Ralph Castain: "Re: [OMPI users] Performance issue of mpirun/mpi_init"</a>
<li><strong>Previous message:</strong> <a href="24145.php">Ross Boylan: "Re: [OMPI users] Waitall never returns [solved]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24148.php">Ralph Castain: "Re: [OMPI users] Optimal mapping/binding when threads are used?"</a>
<li><strong>Reply:</strong> <a href="24148.php">Ralph Castain: "Re: [OMPI users] Optimal mapping/binding when threads are used?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am evaluating the performance of a clustering program written in Java
<br>
with MPI+threads and would like to get some insight in solving a peculiar
<br>
case. I've attached a performance graph to explain this.
<br>
<p>In essence the tests were carried out as TxPxN, where T is threads per
<br>
process, P is processes per node, and N is number of nodes. I noticed an
<br>
inefficiency with Tx*1*xN cases in general (tall bars in graph).
<br>
<p>To elaborate a bit further,
<br>
1. each node has 2 sockets with 4 cores each (totaling 8 cores)
<br>
2. used OpenMPI 1.7.5rc5 (later tested with 1.8 and observed the same)
<br>
3. with options
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A.) --map-by node:PE=4 and --bind-to core
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;B.) --map-by node:PE=8 and --bind-to-core
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C.) --map-by socket and --bind-to none
<br>
<p>Timing of A,B,C came out as A &lt; B &lt; C, so used results from option A for Tx
<br>
*1*xN in the graph.
<br>
<p>Could you please give some suggestion that may help to speed up these Tx*1*xN
<br>
cases? Also, I expected B to perform better than A as threads could utilize
<br>
all 8 cores, but it wasn't the case.
<br>
<p>Thank you,
<br>
Saliya
<br>
<p><p>[image: Inline image 1]
<br>
<p><pre>
-- 
Saliya Ekanayake esaliya_at_[hidden]
Cell 812-391-4914 Home 812-961-6383
<a href="http://saliya.org">http://saliya.org</a>

</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24146/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-24146/image.png" alt="image.png">
<!-- attachment="image.png" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24147.php">Ralph Castain: "Re: [OMPI users] Performance issue of mpirun/mpi_init"</a>
<li><strong>Previous message:</strong> <a href="24145.php">Ross Boylan: "Re: [OMPI users] Waitall never returns [solved]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24148.php">Ralph Castain: "Re: [OMPI users] Optimal mapping/binding when threads are used?"</a>
<li><strong>Reply:</strong> <a href="24148.php">Ralph Castain: "Re: [OMPI users] Optimal mapping/binding when threads are used?"</a>
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
