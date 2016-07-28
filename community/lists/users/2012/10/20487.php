<?
$subject_val = "Re: [OMPI users] wrong results in a heterogeneous environment with openmpi-1.6.2";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 15 09:37:07 2012" -->
<!-- isoreceived="20121015133707" -->
<!-- sent="Mon, 15 Oct 2012 06:37:00 -0700" -->
<!-- isosent="20121015133700" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] wrong results in a heterogeneous environment with openmpi-1.6.2" -->
<!-- id="6E1C69CF-0E91-4F67-865B-257D9950FFC6_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201210041103.q94B3oND025326_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] wrong results in a heterogeneous environment with openmpi-1.6.2<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-15 09:37:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20488.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_accept randomly gives errors"</a>
<li><strong>Previous message:</strong> <a href="20486.php">Ralph Castain: "Re: [OMPI users] Can not submit openmpi jobs with slurm on Centos 6.0"</a>
<li><strong>In reply to:</strong> <a href="20410.php">Siegmar Gross: "[OMPI users] wrong results in a heterogeneous environment with openmpi-1.6.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20509.php">Siegmar Gross: "Re: [OMPI users] wrong results in a heterogeneous environment with openmpi-1.6.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It's probably due to one or both of the following:
<br>
<p>1. configure with --enable-heterogeneous
<br>
<p>2. execute with --hetero-apps
<br>
<p>Both are required for hetero operations
<br>
<p><p>On Oct 4, 2012, at 4:03 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a small matrix multiplication program which computes wrong
</span><br>
<span class="quotelev1">&gt; results in a heterogeneous environment with different little endian
</span><br>
<span class="quotelev1">&gt; and big endian architectures. Every process computes one row (block)
</span><br>
<span class="quotelev1">&gt; of the result matrix.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Solaris 10 x86_64 and Linux x86_64:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr matrix 162 mpiexec -np 4 -host sunpc0,sunpc1,linpc0,linpc1 mat_mult_1
</span><br>
<span class="quotelev1">&gt; Process 0 of 4 running on sunpc0
</span><br>
<span class="quotelev1">&gt; Process 1 of 4 running on sunpc1
</span><br>
<span class="quotelev1">&gt; Process 2 of 4 running on linpc0
</span><br>
<span class="quotelev1">&gt; Process 3 of 4 running on linpc1
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; (4,8)-result-matrix c = a * b :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   448   427   406   385   364   343   322   301
</span><br>
<span class="quotelev1">&gt;  1456  1399  1342  1285  1228  1171  1114  1057
</span><br>
<span class="quotelev1">&gt;  2464  2371  2278  2185  2092  1999  1906  1813
</span><br>
<span class="quotelev1">&gt;  3472  3343  3214  3085  2956  2827  2698  2569
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Solaris Sparc:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr matrix 167 mpiexec -np 4 -host tyr,rs0,rs1 mat_mult_1
</span><br>
<span class="quotelev1">&gt; Process 0 of 4 running on tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt; Process 3 of 4 running on tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt; Process 2 of 4 running on rs1.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt; Process 1 of 4 running on rs0.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; (4,8)-result-matrix c = a * b :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   448   427   406   385   364   343   322   301
</span><br>
<span class="quotelev1">&gt;  1456  1399  1342  1285  1228  1171  1114  1057
</span><br>
<span class="quotelev1">&gt;  2464  2371  2278  2185  2092  1999  1906  1813
</span><br>
<span class="quotelev1">&gt;  3472  3343  3214  3085  2956  2827  2698  2569
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Solaris Sparc and x86_64: Rows 1 and 3 are from sunpc0 (adding the
</span><br>
<span class="quotelev1">&gt; option &quot;-hetero&quot; doesn't change anything)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr matrix 168 mpiexec -np 4 -host tyr,sunpc0 mat_mult_1
</span><br>
<span class="quotelev1">&gt; Process 1 of 4 running on sunpc0
</span><br>
<span class="quotelev1">&gt; Process 3 of 4 running on sunpc0
</span><br>
<span class="quotelev1">&gt; Process 0 of 4 running on tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt; Process 2 of 4 running on tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; (4,8)-result-matrix c = a * b :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   448   427   406   385   364   343   322   301
</span><br>
<span class="quotelev1">&gt;    48-3.01737e+304-3.1678e+296  -NaN     0-7.40627e+304-3.16839e+296  -NaN
</span><br>
<span class="quotelev1">&gt;  2464  2371  2278  2185  2092  1999  1906  1813
</span><br>
<span class="quotelev1">&gt;    48-3.01737e+304-3.18057e+296  -NaN2.122e-314-7.68057e+304-3.26998e+296  -NaN
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Solaris Sparc and Linux x86_64: Rows 1 and 3 are from linpc0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr matrix 169 mpiexec -np 4 -host tyr,linpc0 mat_mult_1
</span><br>
<span class="quotelev1">&gt; Process 0 of 4 running on tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt; Process 2 of 4 running on tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt; Process 1 of 4 running on linpc0
</span><br>
<span class="quotelev1">&gt; Process 3 of 4 running on linpc0
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; (4,8)-result-matrix c = a * b :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   448   427   406   385   364   343   322   301
</span><br>
<span class="quotelev1">&gt;     0     0     0     0     0     08.10602e-3124.27085e-319
</span><br>
<span class="quotelev1">&gt;  2464  2371  2278  2185  2092  1999  1906  1813
</span><br>
<span class="quotelev1">&gt; 6.66666e-3152.86948e-3161.73834e-3101.39066e-3092.122e-3141.39066e-3091.39066e-3
</span><br>
<span class="quotelev1">&gt; 099.88131e-324
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In the past the program worked in a heterogeneous environment. This
</span><br>
<span class="quotelev1">&gt; is the main part of the program.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;  double a[P][Q], b[Q][R],		/* matrices to multiply		*/
</span><br>
<span class="quotelev1">&gt; 	 c[P][R],			/* matrix for result		*/
</span><br>
<span class="quotelev1">&gt; 	 row_a[Q],			/* one row of matrix &quot;a&quot;	*/
</span><br>
<span class="quotelev1">&gt; 	 row_c[R];			/* one row of matrix &quot;c&quot;	*/
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;  /* send matrix &quot;b&quot; to all processes					*/
</span><br>
<span class="quotelev1">&gt;  MPI_Bcast (b, Q * R, MPI_DOUBLE, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;  /* send row i of &quot;a&quot; to process i					*/
</span><br>
<span class="quotelev1">&gt;  MPI_Scatter (a, Q, MPI_DOUBLE, row_a, Q, MPI_DOUBLE, 0,
</span><br>
<span class="quotelev1">&gt; 	       MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;  for (j = 0; j &lt; R; ++j)		/* compute i-th row of &quot;c&quot;	*/
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;    row_c[j] = 0.0;
</span><br>
<span class="quotelev1">&gt;    for (k = 0; k &lt; Q; ++k)
</span><br>
<span class="quotelev1">&gt;    {
</span><br>
<span class="quotelev1">&gt;      row_c[j] = row_c[j] + row_a[k] * b[k][j];
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  /* receive row i of &quot;c&quot; from process i				*/
</span><br>
<span class="quotelev1">&gt;  MPI_Gather (row_c, R, MPI_DOUBLE, c, R, MPI_DOUBLE, 0,
</span><br>
<span class="quotelev1">&gt; 	      MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does anybody know why my program doesn't work? It blocks with
</span><br>
<span class="quotelev1">&gt; openmpi-1.7a1r27379 and openmpi-1.9a1r27380 (I had to add one
</span><br>
<span class="quotelev1">&gt; more machine because my local machine will not be used in these
</span><br>
<span class="quotelev1">&gt; versions) and it works as long as the machines have the same
</span><br>
<span class="quotelev1">&gt; endian.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr matrix 110 mpiexec -np 4 -host tyr,linpc0,rs0 mat_mult_1
</span><br>
<span class="quotelev1">&gt; Process 0 of 4 running on linpc0
</span><br>
<span class="quotelev1">&gt; Process 1 of 4 running on linpc0
</span><br>
<span class="quotelev1">&gt; Process 3 of 4 running on rs0.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt; Process 2 of 4 running on rs0.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; (6,8)-matrix b:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    48    47    46    45    44    43    42    41
</span><br>
<span class="quotelev1">&gt;    40    39    38    37    36    35    34    33
</span><br>
<span class="quotelev1">&gt;    32    31    30    29    28    27    26    25
</span><br>
<span class="quotelev1">&gt;    24    23    22    21    20    19    18    17
</span><br>
<span class="quotelev1">&gt;    16    15    14    13    12    11    10     9
</span><br>
<span class="quotelev1">&gt;     8     7     6     5     4     3     2     1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ^CKilled by signal 2.
</span><br>
<span class="quotelev1">&gt; Killed by signal 2.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you very much for any help in advance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kind regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Siegmar
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #define	P		4		/* # of rows			*/
</span><br>
<span class="quotelev1">&gt; #define Q		6		/* # of columns / rows		*/
</span><br>
<span class="quotelev1">&gt; #define R		8		/* # of columns			*/
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; static void print_matrix (int p, int q, double **mat);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main (int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;  int	 ntasks,			/* number of parallel tasks	*/
</span><br>
<span class="quotelev1">&gt; 	 mytid,				/* my task id			*/
</span><br>
<span class="quotelev1">&gt; 	 namelen,			/* length of processor name	*/
</span><br>
<span class="quotelev1">&gt; 	 i, j, k,			/* loop variables		*/
</span><br>
<span class="quotelev1">&gt; 	 tmp;				/* temporary value		*/
</span><br>
<span class="quotelev1">&gt;  double a[P][Q], b[Q][R],		/* matrices to multiply		*/
</span><br>
<span class="quotelev1">&gt; 	 c[P][R],			/* matrix for result		*/
</span><br>
<span class="quotelev1">&gt; 	 row_a[Q],			/* one row of matrix &quot;a&quot;	*/
</span><br>
<span class="quotelev1">&gt; 	 row_c[R];			/* one row of matrix &quot;c&quot;	*/
</span><br>
<span class="quotelev1">&gt;  char	 processor_name[MPI_MAX_PROCESSOR_NAME];
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  MPI_Init (&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_rank (MPI_COMM_WORLD, &amp;mytid);
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_size (MPI_COMM_WORLD, &amp;ntasks);
</span><br>
<span class="quotelev1">&gt;  MPI_Get_processor_name (processor_name, &amp;namelen);
</span><br>
<span class="quotelev1">&gt;  fprintf (stdout, &quot;Process %d of %d running on %s\n&quot;,
</span><br>
<span class="quotelev1">&gt; 	   mytid, ntasks, processor_name);
</span><br>
<span class="quotelev1">&gt;  fflush (stdout);
</span><br>
<span class="quotelev1">&gt;  MPI_Barrier (MPI_COMM_WORLD);		/* wait for all other processes	*/
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  if ((ntasks != P) &amp;&amp; (mytid == 0))
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;    fprintf (stderr, &quot;\n\nI need %d processes.\n&quot;
</span><br>
<span class="quotelev1">&gt; 	     &quot;Usage:\n&quot;
</span><br>
<span class="quotelev1">&gt; 	     &quot;  mpiexec -np %d %s.\n\n&quot;,
</span><br>
<span class="quotelev1">&gt; 	     P, P, argv[0]);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  if (ntasks != P)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;    MPI_Finalize ();
</span><br>
<span class="quotelev1">&gt;    exit (EXIT_FAILURE);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  if (mytid == 0)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;    tmp = 1;
</span><br>
<span class="quotelev1">&gt;    for (i = 0; i &lt; P; ++i)		/* initialize matrix a		*/
</span><br>
<span class="quotelev1">&gt;    {
</span><br>
<span class="quotelev1">&gt;      for (j = 0; j &lt; Q; ++j)
</span><br>
<span class="quotelev1">&gt;      {
</span><br>
<span class="quotelev1">&gt; 	a[i][j] = tmp++;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;    printf (&quot;\n\n(%d,%d)-matrix a:\n\n&quot;, P, Q);
</span><br>
<span class="quotelev1">&gt;    print_matrix (P, Q, (double **) a);
</span><br>
<span class="quotelev1">&gt;    tmp = Q * R;
</span><br>
<span class="quotelev1">&gt;    for (i = 0; i &lt; Q; ++i)		/* initialize matrix b		*/
</span><br>
<span class="quotelev1">&gt;    {
</span><br>
<span class="quotelev1">&gt;      for (j = 0; j &lt; R; ++j)
</span><br>
<span class="quotelev1">&gt;      {
</span><br>
<span class="quotelev1">&gt; 	b[i][j] = tmp--;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;    printf (&quot;(%d,%d)-matrix b:\n\n&quot;, Q, R);
</span><br>
<span class="quotelev1">&gt;    print_matrix (Q, R, (double **) b);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  /* send matrix &quot;b&quot; to all processes					*/
</span><br>
<span class="quotelev1">&gt;  MPI_Bcast (b, Q * R, MPI_DOUBLE, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;  /* send row i of &quot;a&quot; to process i					*/
</span><br>
<span class="quotelev1">&gt;  MPI_Scatter (a, Q, MPI_DOUBLE, row_a, Q, MPI_DOUBLE, 0,
</span><br>
<span class="quotelev1">&gt; 	       MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;  for (j = 0; j &lt; R; ++j)		/* compute i-th row of &quot;c&quot;	*/
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;    row_c[j] = 0.0;
</span><br>
<span class="quotelev1">&gt;    for (k = 0; k &lt; Q; ++k)
</span><br>
<span class="quotelev1">&gt;    {
</span><br>
<span class="quotelev1">&gt;      row_c[j] = row_c[j] + row_a[k] * b[k][j];
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  /* receive row i of &quot;c&quot; from process i				*/
</span><br>
<span class="quotelev1">&gt;  MPI_Gather (row_c, R, MPI_DOUBLE, c, R, MPI_DOUBLE, 0,
</span><br>
<span class="quotelev1">&gt; 	      MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;  if (mytid == 0)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;    printf (&quot;(%d,%d)-result-matrix c = a * b :\n\n&quot;, P, R);
</span><br>
<span class="quotelev1">&gt;    print_matrix (P, R, (double **) c);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  MPI_Finalize ();
</span><br>
<span class="quotelev1">&gt;  return EXIT_SUCCESS;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; void print_matrix (int p, int q, double **mat)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;  int i, j;				/* loop variables		*/
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  for (i = 0; i &lt; p; ++i)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;    for (j = 0; j &lt; q; ++j)
</span><br>
<span class="quotelev1">&gt;    {
</span><br>
<span class="quotelev1">&gt;      printf (&quot;%6g&quot;, *((double *) mat + i * q + j));
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;    printf (&quot;\n&quot;);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  printf (&quot;\n&quot;);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20488.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_accept randomly gives errors"</a>
<li><strong>Previous message:</strong> <a href="20486.php">Ralph Castain: "Re: [OMPI users] Can not submit openmpi jobs with slurm on Centos 6.0"</a>
<li><strong>In reply to:</strong> <a href="20410.php">Siegmar Gross: "[OMPI users] wrong results in a heterogeneous environment with openmpi-1.6.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20509.php">Siegmar Gross: "Re: [OMPI users] wrong results in a heterogeneous environment with openmpi-1.6.2"</a>
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
