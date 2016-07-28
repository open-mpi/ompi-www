<?
$subject_val = "[OMPI users] Shared memory communication limits parallelism?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 30 14:00:16 2007" -->
<!-- isoreceived="20071130190016" -->
<!-- sent="Fri, 30 Nov 2007 18:01:47 +0000" -->
<!-- isosent="20071130180147" -->
<!-- name="Jo&#195;&#163;o Luis Silva" -->
<!-- email="jsilva_at_[hidden]" -->
<!-- subject="[OMPI users] Shared memory communication limits parallelism?" -->
<!-- id="fipj8o$svc$1_at_ger.gmane.org" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] Shared memory communication limits parallelism?<br>
<strong>From:</strong> Jo&#195;&#163;o Luis Silva (<em>jsilva_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-30 13:01:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4570.php">Jim Kusznir: "Re: [OMPI users] Suggestions on multi-compiler/multi-mpi build?"</a>
<li><strong>Previous message:</strong> <a href="4568.php">Madireddy Samuel Vijaykumar: "Re: [OMPI users] Newbie: Using hostfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/12/4571.php">George Bosilca: "Re: [OMPI users] Shared memory communication limits parallelism?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/12/4571.php">George Bosilca: "Re: [OMPI users] Shared memory communication limits parallelism?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I'm using the OpenMPI version that is distributed with Fedora 8
<br>
(openmpi-1.2.4-1.fc8) on a dual Xeon 5335 (which is a quad core CPU), and
<br>
therefore I have 8 cores in a shared memory environment.
<br>
<p>AFAIK by default OpenMPI correctly uses shared memory communication (sm)
<br>
without any extra parameter to mpirun, however the programs take longer and
<br>
don't scale well for more than 4 processors. Here are some example timings
<br>
for a simple MPI program (appended to this email):
<br>
<p>time mpirun -np N ./mpitest
<br>
(the timings are the same for time mpirun --mca btl self,sm -np N)
<br>
<p>N     t(s)    t1/t
<br>
-------------------------------
<br>
1      35.7    1.0
<br>
2      18.8    1.9
<br>
3      12.7    2.8
<br>
4      10.2    3.5
<br>
5       8.2    4.4
<br>
6       8.0    4.4
<br>
7       7.2    5.0
<br>
8       6.4    5.6
<br>
<p>You can see that processes 5 and up barely speeds up the process. However
<br>
with tcp it has a nearly perfect scalling:
<br>
<p>time mpirun --mca btl self,tcp -np N
<br>
<p>N    t(s)    t1/t
<br>
-------------------------------
<br>
1      34.8   1.0
<br>
2      17.7   2.0
<br>
3      11.7   3.0
<br>
4      8.8    4.0
<br>
5      7.0    5.0
<br>
6      6.0    5.8
<br>
7      5.2    6.8
<br>
8      4.5    7.8
<br>
<p>Why is this happening? Is this a bug?
<br>
<p>Best regards,
<br>
Jo&#195;&#163;o Silva
<br>
<p>P.S. Test program appended:
<br>
<p>----------------------------------------------------------
<br>
#include &quot;stdio.h&quot;
<br>
#include &quot;math.h&quot;
<br>
#include &quot;mpi.h&quot;
<br>
<p>#define N 1000000000
<br>
<p>int main(int argc, char* argv[]){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int i;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Init MPI */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int np,p;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc,&amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD,&amp;np);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD,&amp;p);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Process #%d of %d\n&quot;, p+1, np);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (i = p*N/np; i &lt; (p+1)*N/np; i++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;exp(i);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
----------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4570.php">Jim Kusznir: "Re: [OMPI users] Suggestions on multi-compiler/multi-mpi build?"</a>
<li><strong>Previous message:</strong> <a href="4568.php">Madireddy Samuel Vijaykumar: "Re: [OMPI users] Newbie: Using hostfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/12/4571.php">George Bosilca: "Re: [OMPI users] Shared memory communication limits parallelism?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/12/4571.php">George Bosilca: "Re: [OMPI users] Shared memory communication limits parallelism?"</a>
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
