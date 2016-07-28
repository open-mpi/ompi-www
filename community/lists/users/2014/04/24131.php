<?
$subject_val = "[OMPI users] Performance issue of mpirun/mpi_init";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 10 05:05:47 2014" -->
<!-- isoreceived="20140410090547" -->
<!-- sent="Thu, 10 Apr 2014 09:05:43 +0000" -->
<!-- isosent="20140410090543" -->
<!-- name="Victor Vysotskiy" -->
<!-- email="victor.vysotskiy_at_[hidden]" -->
<!-- subject="[OMPI users] Performance issue of mpirun/mpi_init" -->
<!-- id="8D58A4B5E6148C419C6AD6334962375DC211905A_at_UWMBX04.uw.lu.se" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Performance issue of mpirun/mpi_init<br>
<strong>From:</strong> Victor Vysotskiy (<em>victor.vysotskiy_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-10 05:05:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24132.php">Ralph Castain: "Re: [OMPI users] Performance issue of mpirun/mpi_init"</a>
<li><strong>Previous message:</strong> <a href="24130.php">Ralph Castain: "Re: [OMPI users] Extent of Distributed Array Type?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24132.php">Ralph Castain: "Re: [OMPI users] Performance issue of mpirun/mpi_init"</a>
<li><strong>Reply:</strong> <a href="24132.php">Ralph Castain: "Re: [OMPI users] Performance issue of mpirun/mpi_init"</a>
<li><strong>Maybe reply:</strong> <a href="24136.php">Victor Vysotskiy: "Re: [OMPI users] Performance issue of mpirun/mpi_init"</a>
<li><strong>Maybe reply:</strong> <a href="24141.php">Victor Vysotskiy: "Re: [OMPI users] Performance issue of mpirun/mpi_init"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Developers,
<br>
<p>I have faced a performance degradation on multi-core single processor machine. Specifically,  in the most recent Open MPI v1.8 the  initialization and process startup stage became ~10x slower compared to v1.6.5. In order to measure timings I have used the following code snippet:
<br>
<p>/*-------------------------------------------*/
<br>
#include &lt;mpi.h&gt;
<br>
<p>int main (int argc, char *argv[]) {
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc,&amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
/*-------------------------------------------*/
<br>
<p>The execution wall time has been measured in a trivial way by using the 'time'  command, i.e.:
<br>
<p>time mpirun -np 2 ./a.out 
<br>
<p>Below are given averaged timings for both versions on Linux x86_64 (Intel i7-3630): 
<br>
<p>Default settings:
<br>
1.8   : 0.679 s 
<br>
1.6.5: 1.041 s
<br>
<p>OMPI_MCA_btl=tcp,self:
<br>
1.8   : 0.679 s 
<br>
1.6.5: 0.041 s 
<br>
<p>The same problem has been detected on Mac OS X v10.9.2.
<br>
<p>Here I should stress that others MPI distributions perform as the OpenMPI v1.6.5 with the TCP byte transfer layer activated. 
<br>
<p>So, I am wondering whether it is possible to tune v1.8 in order to boost the startup process? The problem is that during the automatic nightly verification of our program we usually spawn parallel binaries a thousands of times. 
<br>
<p>Thank you In advance!
<br>
<p>Best regards,
<br>
Victor.
<br>
&nbsp;
<br>
&nbsp;&nbsp;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24132.php">Ralph Castain: "Re: [OMPI users] Performance issue of mpirun/mpi_init"</a>
<li><strong>Previous message:</strong> <a href="24130.php">Ralph Castain: "Re: [OMPI users] Extent of Distributed Array Type?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24132.php">Ralph Castain: "Re: [OMPI users] Performance issue of mpirun/mpi_init"</a>
<li><strong>Reply:</strong> <a href="24132.php">Ralph Castain: "Re: [OMPI users] Performance issue of mpirun/mpi_init"</a>
<li><strong>Maybe reply:</strong> <a href="24136.php">Victor Vysotskiy: "Re: [OMPI users] Performance issue of mpirun/mpi_init"</a>
<li><strong>Maybe reply:</strong> <a href="24141.php">Victor Vysotskiy: "Re: [OMPI users] Performance issue of mpirun/mpi_init"</a>
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
