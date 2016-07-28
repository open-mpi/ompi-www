<?
$subject_val = "[OMPI users] testing for openMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  7 05:11:34 2012" -->
<!-- isoreceived="20120607091134" -->
<!-- sent="Thu, 07 Jun 2012 16:11:22 +0700" -->
<!-- isosent="20120607091122" -->
<!-- name="Duke" -->
<!-- email="duke.lists_at_[hidden]" -->
<!-- subject="[OMPI users] testing for openMPI" -->
<!-- id="4FD0703A.5050609_at_gmx.com" -->
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
<strong>Subject:</strong> [OMPI users] testing for openMPI<br>
<strong>From:</strong> Duke (<em>duke.lists_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-07 05:11:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19468.php">Jingcha Joba: "Re: [OMPI users] testing for openMPI"</a>
<li><strong>Previous message:</strong> <a href="19466.php">Jim Dinan: "Re: [OMPI users] [EXTERNAL] Re:  MPI One-Sided Communication, indexed datatype and segmentation fault."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19468.php">Jingcha Joba: "Re: [OMPI users] testing for openMPI"</a>
<li><strong>Reply:</strong> <a href="19468.php">Jingcha Joba: "Re: [OMPI users] testing for openMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks,
<br>
<p>Please be gentle to the newest member of openMPI, I am totally new to 
<br>
this field. I just built a test cluster with 3 boxes on Scientific Linux 
<br>
6.2 and openMPI (Open MPI 1.5.3), and I wanted to test how the cluster 
<br>
works but I cant figure out what was/is happening. On my master node, I 
<br>
have the hostfile:
<br>
<p>[mpiuser_at_fantomfs40a ~]$ cat .mpi_hostfile
<br>
# The Hostfile for Open MPI
<br>
fantomfs40a slots=2
<br>
hp430a slots=4 max-slots=4
<br>
hp430b slots=4 max-slots=4
<br>
<p>To test, I used the following c code:
<br>
<p>[mpiuser_at_fantomfs40a ~]$ cat test/mpihello.c
<br>
/* program hello */
<br>
/* Adapted from mpihello.f by drs */
<br>
<p>#include &lt;mpi.h&gt;
<br>
#include &lt;stdio.h&gt;
<br>
<p>int main(int argc, char **argv)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;int *buf, i, rank, nints, len;
<br>
&nbsp;&nbsp;&nbsp;char hostname[256];
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc,&amp;argv);
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
&nbsp;&nbsp;&nbsp;gethostname(hostname,255);
<br>
&nbsp;&nbsp;&nbsp;printf(&quot;Hello world!  I am process number: %d on host %s\n&quot;, rank, 
<br>
hostname);
<br>
&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>and then compiled and ran:
<br>
<p>[mpiuser_at_fantomfs40a ~]$ mpicc -o test/mpihello test/mpihello.c
<br>
[mpiuser_at_fantomfs40a ~]$ mpirun -np 2 --machinefile 
<br>
/home/mpiuser/.mpi_hostfile ./test/mpihello
<br>
Hello world!  I am process number: 0 on host fantomfs40a
<br>
Hello world!  I am process number: 1 on host fantomfs40a
<br>
<p>Unfortunately the result did not show what I wanted. I expected to see 
<br>
somethign like:
<br>
<p>Hello world!  I am process number: 0 on host hp430a
<br>
Hello world!  I am process number: 1 on host hp430b
<br>
<p>Anybody has any idea what I am doing wrong?
<br>
<p>Thank you in advance,
<br>
<p>D.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19468.php">Jingcha Joba: "Re: [OMPI users] testing for openMPI"</a>
<li><strong>Previous message:</strong> <a href="19466.php">Jim Dinan: "Re: [OMPI users] [EXTERNAL] Re:  MPI One-Sided Communication, indexed datatype and segmentation fault."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19468.php">Jingcha Joba: "Re: [OMPI users] testing for openMPI"</a>
<li><strong>Reply:</strong> <a href="19468.php">Jingcha Joba: "Re: [OMPI users] testing for openMPI"</a>
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
