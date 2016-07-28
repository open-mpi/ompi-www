<?
$subject_val = "Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 18 04:28:26 2009" -->
<!-- isoreceived="20091118092826" -->
<!-- sent="Wed, 18 Nov 2009 01:28:13 -0800" -->
<!-- isosent="20091118092813" -->
<!-- name="Bill Broadley" -->
<!-- email="bill_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0" -->
<!-- id="4B03BE2D.9040602_at_cse.ucdavis.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="49FA3164.7020301_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0<br>
<strong>From:</strong> Bill Broadley (<em>bill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-18 04:28:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11229.php">Laurin Müller: "[OMPI users] Antw: Re:  mpirun not working on more than one	 node"</a>
<li><strong>Previous message:</strong> <a href="11227.php">Ralph Castain: "Re: [OMPI users] custom modules per job	(PBS/OpenMPI/environment-modules)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/04/9155.php">Eugene Loh: "Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11231.php">Vincent Loechner: "Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0"</a>
<li><strong>Reply:</strong> <a href="11231.php">Vincent Loechner: "Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0"</a>
<li><strong>Reply:</strong> <a href="11236.php">Ashley Pittman: "Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
A rather stable production code that has worked with various versions of MPI
<br>
on various architectures started hanging with gcc-4.4.2 and openmpi 1.3.33
<br>
<p>Which lead me to this thread.
<br>
<p>I made some very small changes to Eugene's code, here's the diff:
<br>
$ diff testorig.c billtest.c
<br>
3,5c3,4
<br>
&lt;
<br>
&lt; #define N 40000
<br>
&lt; #define M 40000
<br>
<pre>
---
&gt; #define N 8000
&gt; #define M 8000
17c16
&lt;
---
&gt;   fprintf (stderr, &quot;Initialized\n&quot;);
32,33c31,39
&lt;     MPI_Sendrecv (sbuf, N, MPI_FLOAT, top, 0,
&lt; 		  rbuf, N, MPI_FLOAT, bottom, 0, MPI_COMM_WORLD, &amp;status);
---
&gt;     {
&gt;       if ((me == 0) &amp;&amp; (i % 100 == 0))
&gt; 	{
&gt; 	  fprintf (stderr, &quot;%d\n&quot;, i);
&gt; 	}
&gt;       MPI_Sendrecv (sbuf, N, MPI_FLOAT, top, 0, rbuf, N, MPI_FLOAT, bottom, 0,
&gt; 		    MPI_COMM_WORLD, &amp;status);
&gt;     }
&gt;
Basically print some occasional progress, and shrink M and N.
I'm running on a new intel dual socket nehalem system with centos-5.4.  I
compiled gcc-4.4.2 and openmpi myself with all the defaults, except I had to
point out mpfr-2.4.1 to gcc.
If I run:
$ mpirun -np 4 ./billtest
About 1 in 2 times I get something like:
bill_at_farm bill]$ mpirun -np 4 ./billtest
Initialized
Initialized
Initialized
Initialized
0
100
&lt;hang&gt;
Next time worked, next time:
[bill_at_farm bill]$ mpirun -np 4 ./billtest
Initialized
Initialized
Initialized
Initialized
0
100
200
300
400
500
600
700
800
900
1000
1100
1200
1300
1400
1500
1600
1700
1800
1900
2000
2100
2200
2300
2400
2500
2600
2700
2800
2900
3000
3100
3200
3300
3400
3500
&lt;hang&gt;
Next time hung at 7100.
Next time worked.
If I strace it when hung I get something like:
poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6, events=POLLIN},
{fd=7, events=POLLIN}, {fd=8, events=POLLIN}, {fd=9, events=POLLIN}], 6, 0) =
0 (Timeout)
If I run gdb on a hung job (compiled with -O4 -g)
(gdb) bt
#0  0x00002ab3b34cb385 in ompi_request_default_wait ()
   from /share/apps/openmpisb-1.3/gcc-4.4/lib/libmpi.so.0
#1  0x00002ab3b34f0d48 in PMPI_Sendrecv () from
/share/apps/openmpisb-1.3/gcc-4.4/lib/libmpi.so.0
#2  0x0000000000400b88 in main (argc=1, argv=0x7fff083fd298) at billtest.c:36
(gdb)
If I recompile with -O1 I get the same thing.
Even -g I get the same thing.
If I compile the application with gcc-4.3 and still use a gcc-4.4 compiled
openmpi I still get hangs.
If I compiled openmpi-1.3.3 with gcc-4.3 and the application with gcc-4.3 and
I run it 20 times I get zero hangs.  Seems like that gcc-4.4 and openib-1.3.3
are incompatible.  In my production code I'd always get hung at MPI_Waitall,
but the above is obviously inside of Sendrecv.
To be paranoid I just reran it 40 times without a hang.
Original code below.
Eugene Loh wrote:
...
&gt; #include &lt;stdio.h&gt;
&gt; #include &lt;mpi.h&gt;
&gt; 
&gt; #define N 40000
&gt; #define M 40000
&gt; 
&gt; int main(int argc, char **argv) {
&gt;  int np, me, i, top, bottom;
&gt;  float sbuf[N], rbuf[N];
&gt;  MPI_Status status;
&gt; 
&gt;  MPI_Init(&amp;argc,&amp;argv);
&gt;  MPI_Comm_size(MPI_COMM_WORLD,&amp;np);
&gt;  MPI_Comm_rank(MPI_COMM_WORLD,&amp;me);
&gt; 
&gt;  top    = me + 1;   if ( top  &gt;= np ) top    -= np;
&gt;  bottom = me - 1;   if ( bottom &lt; 0 ) bottom += np;
&gt; 
&gt;  for ( i = 0; i &lt; N; i++ ) sbuf[i] = 0;
&gt;  for ( i = 0; i &lt; N; i++ ) rbuf[i] = 0;
&gt; 
&gt;  MPI_Barrier(MPI_COMM_WORLD);
&gt;  for ( i = 0; i &lt; M - 1; i++ )
&gt;    MPI_Sendrecv(sbuf, N, MPI_FLOAT, top   , 0,
&gt;                 rbuf, N, MPI_FLOAT, bottom, 0, MPI_COMM_WORLD, &amp;status);
&gt;  MPI_Barrier(MPI_COMM_WORLD);
&gt; 
&gt;  MPI_Finalize();
&gt;  return 0;
&gt; }
&gt; 
&gt; Can you reproduce your problem with this test case?
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11229.php">Laurin Müller: "[OMPI users] Antw: Re:  mpirun not working on more than one	 node"</a>
<li><strong>Previous message:</strong> <a href="11227.php">Ralph Castain: "Re: [OMPI users] custom modules per job	(PBS/OpenMPI/environment-modules)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/04/9155.php">Eugene Loh: "Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11231.php">Vincent Loechner: "Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0"</a>
<li><strong>Reply:</strong> <a href="11231.php">Vincent Loechner: "Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0"</a>
<li><strong>Reply:</strong> <a href="11236.php">Ashley Pittman: "Re: [OMPI users] MPI processes hang when using OpenMPI 1.3.2 and Gcc-4.4.0"</a>
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
