<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Nov 28 10:40:10 2005" -->
<!-- isoreceived="20051128154010" -->
<!-- sent="Mon, 28 Nov 2005 16:40:00 +0100" -->
<!-- isosent="20051128154000" -->
<!-- name="Arnold Meijster" -->
<!-- email="a.meijster_at_[hidden]" -->
<!-- subject="[O-MPI users] Problems running simple hello world program" -->
<!-- id="438B24D0.70202_at_rug.nl" -->
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
<strong>From:</strong> Arnold Meijster (<em>a.meijster_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-28 10:40:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0394.php">Troy Telford: "Re: [O-MPI users] pathscale 2.1/2.3 build problem"</a>
<li><strong>Previous message:</strong> <a href="0392.php">Dries Kimpe: "[O-MPI users] pathscale 2.1/2.3 build problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0396.php">Jeff Squyres: "Re: [O-MPI users] Problems running simple hello world program"</a>
<li><strong>Reply:</strong> <a href="0396.php">Jeff Squyres: "Re: [O-MPI users] Problems running simple hello world program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I've the following problem. I downloaded/compiled/installed openMPI 1.0
<br>
on my Linux i386 box with ubuntu 5.10.
<br>
<p>Now I tested with the following trivial 'hello world' program:
<br>
#include &lt;stdio.h&gt;
<br>
#include &quot;mpi.h&quot;
<br>
<p>int main(argc,argv)
<br>
int argc;
<br>
char *argv[];
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int myid, numprocs;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc,&amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD,&amp;numprocs);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD,&amp;myid);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;printf (&quot;%d of %d: Hello world!\n&quot;, myid, numprocs);
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p><p>Compilation with: mpicc -o hello hello.c
<br>
So far, so good. Now the weird things is that
<br>
sometimes I can run this program, sometimes I cannot!
<br>
<p><p>Here is a cut and paste snippit of my terminal:
<br>
arnold_at_rc-429:~/programming/mpi$ mpirun -machinefile machinefile -np 4 
<br>
./hello
<br>
2 of 4: Hello world!
<br>
3 of 4: Hello world!
<br>
1 of 4: Hello world!
<br>
0 of 4: Hello world!
<br>
arnold_at_rc-429:~/programming/mpi$ mpirun -machinefile machinefile -np 4 
<br>
./hello
<br>
0 of 4: Hello world!
<br>
3 of 4: Hello world!
<br>
2 of 4: Hello world!
<br>
1 of 4: Hello world!
<br>
arnold_at_rc-429:~/programming/mpi$ mpirun -machinefile machinefile -np 4 
<br>
./hello
<br>
mpirun noticed that job rank 3 with PID 7643 on node &quot;rc-429&quot; exited on 
<br>
signal 11.
<br>
3 processes killed (possibly by Open MPI)
<br>
arnold_at_rc-429:~/programming/mpi$ mpirun -machinefile machinefile -np 4 
<br>
./hello
<br>
mpirun noticed that job rank 3 with PID 7657 on node &quot;rc-429&quot; exited on 
<br>
signal 11.
<br>
1 additional process aborted (not shown)
<br>
2 processes killed (possibly by Open MPI)
<br>
arnold_at_rc-429:~/programming/mpi$ mpirun -machinefile machinefile -np 4 
<br>
./hello
<br>
1 of 4: Hello world!
<br>
3 of 4: Hello world!
<br>
0 of 4: Hello world!
<br>
2 of 4: Hello world!
<br>
arnold_at_rc-429:~/programming/mpi$
<br>
<p><p>Has anyone seen this behaviour before? And if Yes, what is
<br>
going on? (BTW signal 11 is segmentation fault. I don't see
<br>
how this program can result in that)
<br>
<p><p>Any help appreciated,
<br>
<p>&nbsp;&nbsp;&nbsp;Arnold
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0394.php">Troy Telford: "Re: [O-MPI users] pathscale 2.1/2.3 build problem"</a>
<li><strong>Previous message:</strong> <a href="0392.php">Dries Kimpe: "[O-MPI users] pathscale 2.1/2.3 build problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0396.php">Jeff Squyres: "Re: [O-MPI users] Problems running simple hello world program"</a>
<li><strong>Reply:</strong> <a href="0396.php">Jeff Squyres: "Re: [O-MPI users] Problems running simple hello world program"</a>
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
