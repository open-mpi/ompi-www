<?
$subject_val = "[OMPI users] mpirun -np 4 hello_world; on a eight processor shared memory machine produces wrong output";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 23 08:06:25 2010" -->
<!-- isoreceived="20100423120625" -->
<!-- sent="Fri, 23 Apr 2010 14:06:06 +0200" -->
<!-- isosent="20100423120606" -->
<!-- name="Pankatz, Klaus" -->
<!-- email="klaus.pankatz_at_[hidden]" -->
<!-- subject="[OMPI users] mpirun -np 4 hello_world; on a eight processor shared memory machine produces wrong output" -->
<!-- id="DB5810118A97904784BECE13867C5CF670054240D1_at_MSX" -->
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
<strong>Subject:</strong> [OMPI users] mpirun -np 4 hello_world; on a eight processor shared memory machine produces wrong output<br>
<strong>From:</strong> Pankatz, Klaus (<em>klaus.pankatz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-23 08:06:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12744.php">Reuti: "Re: [OMPI users] mpirun -np 4 hello_world; on a eight processor shared memory machine produces wrong output"</a>
<li><strong>Previous message:</strong> <a href="12742.php">Price, Brian M (N-KCI): "[OMPI users] Not getting mpi.mod file from openmpi build and install"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12744.php">Reuti: "Re: [OMPI users] mpirun -np 4 hello_world; on a eight processor shared memory machine produces wrong output"</a>
<li><strong>Reply:</strong> <a href="12744.php">Reuti: "Re: [OMPI users] mpirun -np 4 hello_world; on a eight processor shared memory machine produces wrong output"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>there's a problem with openMPI on my machine. When I simply try to run this little hello_world-program on multiple processors, the output isn't as expected: 
<br>
*****
<br>
C code: 
<br>
#include &lt;mpi.h&gt;
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;unistd.h&gt;
<br>
int main(int argc, char **argv)
<br>
{
<br>
&nbsp;&nbsp;int size,rank;
<br>
&nbsp;&nbsp;char hostname[50];
<br>
&nbsp;&nbsp;MPI_Init(&amp;argc,&amp;argv);
<br>
&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank); //Who am I?
<br>
&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;size); //How many processes?
<br>
&nbsp;&nbsp;gethostname (hostname, 50);
<br>
&nbsp;&nbsp;printf (&quot;Hello World! I'm number %2d of %2d running on host %s\n&quot;,
<br>
rank, size, hostname);
<br>
&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;return 0;
<br>
}
<br>
****
<br>
<p>Command: mpirun -np 4 a.out 
<br>
Output: 
<br>
Hello World! I'm number  0 of  1 running on host marvin
<br>
Hello World! I'm number  0 of  1 running on host marvin
<br>
Hello World! I'm number  0 of  1 running on host marvin
<br>
Hello World! I'm number  0 of  1 running on host marvin
<br>
<p>It should be more or less:
<br>
Hello World! I'm number  1 of  4 running on host marvin
<br>
Hello World! I'm number  2 of  4 running on host marvin
<br>
....
<br>
<p>OpenMPI-version 1.4.1 compiled with Lahey Fortran 95 (lf95).
<br>
OpenMPI was compiled &quot;out of the box&quot; only changing to the Lahey compiler with a setenv $FC lf95
<br>
<p>The System: Linux marvin 2.6.27.6-1 #1 SMP Sat Nov 15 20:19:04 CET 2008 x86_64 GNU/Linux
<br>
<p>Compiler: Lahey/Fujitsu Linux64 Fortran Compiler Release L8.10a
<br>
<p>Thanks very much!
<br>
Klaus
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12744.php">Reuti: "Re: [OMPI users] mpirun -np 4 hello_world; on a eight processor shared memory machine produces wrong output"</a>
<li><strong>Previous message:</strong> <a href="12742.php">Price, Brian M (N-KCI): "[OMPI users] Not getting mpi.mod file from openmpi build and install"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12744.php">Reuti: "Re: [OMPI users] mpirun -np 4 hello_world; on a eight processor shared memory machine produces wrong output"</a>
<li><strong>Reply:</strong> <a href="12744.php">Reuti: "Re: [OMPI users] mpirun -np 4 hello_world; on a eight processor shared memory machine produces wrong output"</a>
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
