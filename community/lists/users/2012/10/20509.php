<?
$subject_val = "Re: [OMPI users] wrong results in a heterogeneous environment with openmpi-1.6.2";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 18 10:32:20 2012" -->
<!-- isoreceived="20121018143220" -->
<!-- sent="Thu, 18 Oct 2012 16:25:16 +0200 (CEST)" -->
<!-- isosent="20121018142516" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] wrong results in a heterogeneous environment with openmpi-1.6.2" -->
<!-- id="201210181425.q9IEPG22005440_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] wrong results in a heterogeneous environment with openmpi-1.6.2" -->
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
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-18 10:25:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20510.php">Ralph Castain: "Re: [OMPI users] Question on ssh search path"</a>
<li><strong>Previous message:</strong> <a href="20508.php">Iliev, Hristo: "Re: [OMPI users] openmpi-1.6.2 and registerable memory"</a>
<li><strong>Maybe in reply to:</strong> <a href="20410.php">Siegmar Gross: "[OMPI users] wrong results in a heterogeneous environment with openmpi-1.6.2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p><span class="quotelev1">&gt; It's probably due to one or both of the following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. configure with --enable-heterogeneous
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. execute with --hetero-apps
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Both are required for hetero operations
</span><br>
<p><p>Unfortunately this doesn't solve the problem. I thought that -hetero-apps
<br>
is only necessary if I mix 32- and 64-bit binaries and that it is only
<br>
available in openmpi-1.7.x and newer.
<br>
<p><p>tyr matrix 105 ompi_info | grep -e Ident -e Hetero -e &quot;Built on&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ident string: 1.6.2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built on: Fri Sep 28 19:25:06 CEST 2012
<br>
&nbsp;&nbsp;&nbsp;Heterogeneous support: yes
<br>
&nbsp;&nbsp;&nbsp;
<br>
<p>tyr matrix 106 mpiexec -np 4 -host rs0,sunpc0 -hetero-apps mat_mult_1
<br>
mpiexec (OpenRTE) 1.6.2
<br>
<p>Usage: mpiexec [OPTION]...  [PROGRAM]...
<br>
Start the given program using Open RTE
<br>
...
<br>
<p>-hetero-apps is not available in openmpi-1.6.2. I try once more with
<br>
openmpi-1.9.
<br>
<p><p>tyr matrix 117 file ~/SunOS/sparc/bin/mat_mult_1 \
<br>
&nbsp;&nbsp;~/SunOS/x86_64/bin/mat_mult_1 
<br>
/home/fd1026/SunOS/sparc/bin/mat_mult_1:        ELF 64-bit MSB
<br>
&nbsp;&nbsp;&nbsp;executable SPARCV9 Version 1, dynamically linked, not stripped
<br>
/home/fd1026/SunOS/x86_64/bin/mat_mult_1:       ELF 64-bit LSB
<br>
&nbsp;&nbsp;&nbsp;executable AMD64 Version 1 [SSE2 SSE FXSR FPU], dynamically
<br>
&nbsp;&nbsp;&nbsp;linked, not stripped
<br>
<p><p>tyr matrix 118 ompi_info | grep -e Ident -e Hetero -e &quot;Built on&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ident string: 1.9a1r27380
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built on: Fri Sep 28 22:57:29 CEST 2012
<br>
&nbsp;&nbsp;&nbsp;Heterogeneous support: yes
<br>
<p><p>tyr matrix 119 mpiexec -np 4 -host rs0,sunpc0 -hetero-apps mat_mult_1
<br>
Process 0 of 4 running on rs0.informatik.hs-fulda.de
<br>
Process 2 of 4 running on sunpc0
<br>
Process 1 of 4 running on rs0.informatik.hs-fulda.de
<br>
Process 3 of 4 running on sunpc0
<br>
<p><p>(4,6)-matrix a:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1     2     3     4     5     6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7     8     9    10    11    12
<br>
&nbsp;&nbsp;&nbsp;&nbsp;13    14    15    16    17    18
<br>
&nbsp;&nbsp;&nbsp;&nbsp;19    20    21    22    23    24
<br>
<p>(6,8)-matrix b:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;48    47    46    45    44    43    42    41
<br>
&nbsp;&nbsp;&nbsp;&nbsp;40    39    38    37    36    35    34    33
<br>
&nbsp;&nbsp;&nbsp;&nbsp;32    31    30    29    28    27    26    25
<br>
&nbsp;&nbsp;&nbsp;&nbsp;24    23    22    21    20    19    18    17
<br>
&nbsp;&nbsp;&nbsp;&nbsp;16    15    14    13    12    11    10     9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8     7     6     5     4     3     2     1
<br>
<p>(4,8)-result-matrix c = a * b :
<br>
<p>&nbsp;&nbsp;&nbsp;448   427   406   385   364   343   322   301
<br>
&nbsp;&nbsp;1456  1399  1342  1285  1228  1171  1114  1057
<br>
49.015-3.56813e+304-3.1678e+296  -NaN6.6727e-315-7.40627e+304-3.1678e+296  -NaN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;48-3.56598e+304-3.18057e+296  -NaN2.122e-314-7.68057e+304-3.26998e+296  -NaN
<br>
<p>Thank you very much for any help in advance. I assume that the conversion
<br>
from the internal format to the network format and vice versa has a bug.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<p><p><p><p><span class="quotelev1">&gt; On Oct 4, 2012, at 4:03 AM, Siegmar Gross 
</span><br>
&lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I have a small matrix multiplication program which computes wrong
</span><br>
<span class="quotelev2">&gt; &gt; results in a heterogeneous environment with different little endian
</span><br>
<span class="quotelev2">&gt; &gt; and big endian architectures. Every process computes one row (block)
</span><br>
<span class="quotelev2">&gt; &gt; of the result matrix.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Solaris 10 x86_64 and Linux x86_64:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; tyr matrix 162 mpiexec -np 4 -host sunpc0,sunpc1,linpc0,linpc1 mat_mult_1
</span><br>
<span class="quotelev2">&gt; &gt; Process 0 of 4 running on sunpc0
</span><br>
<span class="quotelev2">&gt; &gt; Process 1 of 4 running on sunpc1
</span><br>
<span class="quotelev2">&gt; &gt; Process 2 of 4 running on linpc0
</span><br>
<span class="quotelev2">&gt; &gt; Process 3 of 4 running on linpc1
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt; (4,8)-result-matrix c = a * b :
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;   448   427   406   385   364   343   322   301
</span><br>
<span class="quotelev2">&gt; &gt;  1456  1399  1342  1285  1228  1171  1114  1057
</span><br>
<span class="quotelev2">&gt; &gt;  2464  2371  2278  2185  2092  1999  1906  1813
</span><br>
<span class="quotelev2">&gt; &gt;  3472  3343  3214  3085  2956  2827  2698  2569
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Solaris Sparc:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; tyr matrix 167 mpiexec -np 4 -host tyr,rs0,rs1 mat_mult_1
</span><br>
<span class="quotelev2">&gt; &gt; Process 0 of 4 running on tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev2">&gt; &gt; Process 3 of 4 running on tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev2">&gt; &gt; Process 2 of 4 running on rs1.informatik.hs-fulda.de
</span><br>
<span class="quotelev2">&gt; &gt; Process 1 of 4 running on rs0.informatik.hs-fulda.de
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt; (4,8)-result-matrix c = a * b :
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;   448   427   406   385   364   343   322   301
</span><br>
<span class="quotelev2">&gt; &gt;  1456  1399  1342  1285  1228  1171  1114  1057
</span><br>
<span class="quotelev2">&gt; &gt;  2464  2371  2278  2185  2092  1999  1906  1813
</span><br>
<span class="quotelev2">&gt; &gt;  3472  3343  3214  3085  2956  2827  2698  2569
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Solaris Sparc and x86_64: Rows 1 and 3 are from sunpc0 (adding the
</span><br>
<span class="quotelev2">&gt; &gt; option &quot;-hetero&quot; doesn't change anything)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; tyr matrix 168 mpiexec -np 4 -host tyr,sunpc0 mat_mult_1
</span><br>
<span class="quotelev2">&gt; &gt; Process 1 of 4 running on sunpc0
</span><br>
<span class="quotelev2">&gt; &gt; Process 3 of 4 running on sunpc0
</span><br>
<span class="quotelev2">&gt; &gt; Process 0 of 4 running on tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev2">&gt; &gt; Process 2 of 4 running on tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt; (4,8)-result-matrix c = a * b :
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;   448   427   406   385   364   343   322   301
</span><br>
<span class="quotelev2">&gt; &gt;    48-3.01737e+304-3.1678e+296  -NaN     0-7.40627e+304-3.16839e+296  -NaN
</span><br>
<span class="quotelev2">&gt; &gt;  2464  2371  2278  2185  2092  1999  1906  1813
</span><br>
<span class="quotelev2">&gt; &gt;    48-3.01737e+304-3.18057e+296  -NaN2.122e-314-7.68057e+304-3.26998e+296  
</span><br>
-NaN
<br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Solaris Sparc and Linux x86_64: Rows 1 and 3 are from linpc0
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; tyr matrix 169 mpiexec -np 4 -host tyr,linpc0 mat_mult_1
</span><br>
<span class="quotelev2">&gt; &gt; Process 0 of 4 running on tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev2">&gt; &gt; Process 2 of 4 running on tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev2">&gt; &gt; Process 1 of 4 running on linpc0
</span><br>
<span class="quotelev2">&gt; &gt; Process 3 of 4 running on linpc0
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt; (4,8)-result-matrix c = a * b :
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;   448   427   406   385   364   343   322   301
</span><br>
<span class="quotelev2">&gt; &gt;     0     0     0     0     0     08.10602e-3124.27085e-319
</span><br>
<span class="quotelev2">&gt; &gt;  2464  2371  2278  2185  2092  1999  1906  1813
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
6.66666e-3152.86948e-3161.73834e-3101.39066e-3092.122e-3141.39066e-3091.39066e-3
<br>
<span class="quotelev2">&gt; &gt; 099.88131e-324
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; In the past the program worked in a heterogeneous environment. This
</span><br>
<span class="quotelev2">&gt; &gt; is the main part of the program.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt;  double a[P][Q], b[Q][R],		/* matrices to multiply		*/
</span><br>
<span class="quotelev2">&gt; &gt; 	 c[P][R],			/* matrix for result		*/
</span><br>
<span class="quotelev2">&gt; &gt; 	 row_a[Q],			/* one row of matrix &quot;a&quot;	*/
</span><br>
<span class="quotelev2">&gt; &gt; 	 row_c[R];			/* one row of matrix &quot;c&quot;	*/
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt;  /* send matrix &quot;b&quot; to all processes					
</span><br>
*/
<br>
<span class="quotelev2">&gt; &gt;  MPI_Bcast (b, Q * R, MPI_DOUBLE, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt; &gt;  /* send row i of &quot;a&quot; to process i					*/
</span><br>
<span class="quotelev2">&gt; &gt;  MPI_Scatter (a, Q, MPI_DOUBLE, row_a, Q, MPI_DOUBLE, 0,
</span><br>
<span class="quotelev2">&gt; &gt; 	       MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt; &gt;  for (j = 0; j &lt; R; ++j)		/* compute i-th row of &quot;c&quot;	*/
</span><br>
<span class="quotelev2">&gt; &gt;  {
</span><br>
<span class="quotelev2">&gt; &gt;    row_c[j] = 0.0;
</span><br>
<span class="quotelev2">&gt; &gt;    for (k = 0; k &lt; Q; ++k)
</span><br>
<span class="quotelev2">&gt; &gt;    {
</span><br>
<span class="quotelev2">&gt; &gt;      row_c[j] = row_c[j] + row_a[k] * b[k][j];
</span><br>
<span class="quotelev2">&gt; &gt;    }
</span><br>
<span class="quotelev2">&gt; &gt;  }
</span><br>
<span class="quotelev2">&gt; &gt;  /* receive row i of &quot;c&quot; from process i				*/
</span><br>
<span class="quotelev2">&gt; &gt;  MPI_Gather (row_c, R, MPI_DOUBLE, c, R, MPI_DOUBLE, 0,
</span><br>
<span class="quotelev2">&gt; &gt; 	      MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Does anybody know why my program doesn't work? It blocks with
</span><br>
<span class="quotelev2">&gt; &gt; openmpi-1.7a1r27379 and openmpi-1.9a1r27380 (I had to add one
</span><br>
<span class="quotelev2">&gt; &gt; more machine because my local machine will not be used in these
</span><br>
<span class="quotelev2">&gt; &gt; versions) and it works as long as the machines have the same
</span><br>
<span class="quotelev2">&gt; &gt; endian.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; tyr matrix 110 mpiexec -np 4 -host tyr,linpc0,rs0 mat_mult_1
</span><br>
<span class="quotelev2">&gt; &gt; Process 0 of 4 running on linpc0
</span><br>
<span class="quotelev2">&gt; &gt; Process 1 of 4 running on linpc0
</span><br>
<span class="quotelev2">&gt; &gt; Process 3 of 4 running on rs0.informatik.hs-fulda.de
</span><br>
<span class="quotelev2">&gt; &gt; Process 2 of 4 running on rs0.informatik.hs-fulda.de
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt; (6,8)-matrix b:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;    48    47    46    45    44    43    42    41
</span><br>
<span class="quotelev2">&gt; &gt;    40    39    38    37    36    35    34    33
</span><br>
<span class="quotelev2">&gt; &gt;    32    31    30    29    28    27    26    25
</span><br>
<span class="quotelev2">&gt; &gt;    24    23    22    21    20    19    18    17
</span><br>
<span class="quotelev2">&gt; &gt;    16    15    14    13    12    11    10     9
</span><br>
<span class="quotelev2">&gt; &gt;     8     7     6     5     4     3     2     1
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ^CKilled by signal 2.
</span><br>
<span class="quotelev2">&gt; &gt; Killed by signal 2.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thank you very much for any help in advance.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Kind regards
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Siegmar
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; #define	P		4		/* # of rows			
</span><br>
*/
<br>
<span class="quotelev2">&gt; &gt; #define Q		6		/* # of columns / rows		*/
</span><br>
<span class="quotelev2">&gt; &gt; #define R		8		/* # of columns			*/
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; static void print_matrix (int p, int q, double **mat);
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; int main (int argc, char *argv[])
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt;  int	 ntasks,			/* number of parallel tasks	
</span><br>
*/
<br>
<span class="quotelev2">&gt; &gt; 	 mytid,				/* my task id			*/
</span><br>
<span class="quotelev2">&gt; &gt; 	 namelen,			/* length of processor name	*/
</span><br>
<span class="quotelev2">&gt; &gt; 	 i, j, k,			/* loop variables		*/
</span><br>
<span class="quotelev2">&gt; &gt; 	 tmp;				/* temporary value		*/
</span><br>
<span class="quotelev2">&gt; &gt;  double a[P][Q], b[Q][R],		/* matrices to multiply		*/
</span><br>
<span class="quotelev2">&gt; &gt; 	 c[P][R],			/* matrix for result		*/
</span><br>
<span class="quotelev2">&gt; &gt; 	 row_a[Q],			/* one row of matrix &quot;a&quot;	*/
</span><br>
<span class="quotelev2">&gt; &gt; 	 row_c[R];			/* one row of matrix &quot;c&quot;	*/
</span><br>
<span class="quotelev2">&gt; &gt;  char	 processor_name[MPI_MAX_PROCESSOR_NAME];
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;  MPI_Init (&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt; &gt;  MPI_Comm_rank (MPI_COMM_WORLD, &amp;mytid);
</span><br>
<span class="quotelev2">&gt; &gt;  MPI_Comm_size (MPI_COMM_WORLD, &amp;ntasks);
</span><br>
<span class="quotelev2">&gt; &gt;  MPI_Get_processor_name (processor_name, &amp;namelen);
</span><br>
<span class="quotelev2">&gt; &gt;  fprintf (stdout, &quot;Process %d of %d running on %s\n&quot;,
</span><br>
<span class="quotelev2">&gt; &gt; 	   mytid, ntasks, processor_name);
</span><br>
<span class="quotelev2">&gt; &gt;  fflush (stdout);
</span><br>
<span class="quotelev2">&gt; &gt;  MPI_Barrier (MPI_COMM_WORLD);		/* wait for all other processes	
</span><br>
*/
<br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;  if ((ntasks != P) &amp;&amp; (mytid == 0))
</span><br>
<span class="quotelev2">&gt; &gt;  {
</span><br>
<span class="quotelev2">&gt; &gt;    fprintf (stderr, &quot;\n\nI need %d processes.\n&quot;
</span><br>
<span class="quotelev2">&gt; &gt; 	     &quot;Usage:\n&quot;
</span><br>
<span class="quotelev2">&gt; &gt; 	     &quot;  mpiexec -np %d %s.\n\n&quot;,
</span><br>
<span class="quotelev2">&gt; &gt; 	     P, P, argv[0]);
</span><br>
<span class="quotelev2">&gt; &gt;  }
</span><br>
<span class="quotelev2">&gt; &gt;  if (ntasks != P)
</span><br>
<span class="quotelev2">&gt; &gt;  {
</span><br>
<span class="quotelev2">&gt; &gt;    MPI_Finalize ();
</span><br>
<span class="quotelev2">&gt; &gt;    exit (EXIT_FAILURE);
</span><br>
<span class="quotelev2">&gt; &gt;  }
</span><br>
<span class="quotelev2">&gt; &gt;  if (mytid == 0)
</span><br>
<span class="quotelev2">&gt; &gt;  {
</span><br>
<span class="quotelev2">&gt; &gt;    tmp = 1;
</span><br>
<span class="quotelev2">&gt; &gt;    for (i = 0; i &lt; P; ++i)		/* initialize matrix a		*/
</span><br>
<span class="quotelev2">&gt; &gt;    {
</span><br>
<span class="quotelev2">&gt; &gt;      for (j = 0; j &lt; Q; ++j)
</span><br>
<span class="quotelev2">&gt; &gt;      {
</span><br>
<span class="quotelev2">&gt; &gt; 	a[i][j] = tmp++;
</span><br>
<span class="quotelev2">&gt; &gt;      }
</span><br>
<span class="quotelev2">&gt; &gt;    }
</span><br>
<span class="quotelev2">&gt; &gt;    printf (&quot;\n\n(%d,%d)-matrix a:\n\n&quot;, P, Q);
</span><br>
<span class="quotelev2">&gt; &gt;    print_matrix (P, Q, (double **) a);
</span><br>
<span class="quotelev2">&gt; &gt;    tmp = Q * R;
</span><br>
<span class="quotelev2">&gt; &gt;    for (i = 0; i &lt; Q; ++i)		/* initialize matrix b		*/
</span><br>
<span class="quotelev2">&gt; &gt;    {
</span><br>
<span class="quotelev2">&gt; &gt;      for (j = 0; j &lt; R; ++j)
</span><br>
<span class="quotelev2">&gt; &gt;      {
</span><br>
<span class="quotelev2">&gt; &gt; 	b[i][j] = tmp--;
</span><br>
<span class="quotelev2">&gt; &gt;      }
</span><br>
<span class="quotelev2">&gt; &gt;    }
</span><br>
<span class="quotelev2">&gt; &gt;    printf (&quot;(%d,%d)-matrix b:\n\n&quot;, Q, R);
</span><br>
<span class="quotelev2">&gt; &gt;    print_matrix (Q, R, (double **) b);
</span><br>
<span class="quotelev2">&gt; &gt;  }
</span><br>
<span class="quotelev2">&gt; &gt;  /* send matrix &quot;b&quot; to all processes					
</span><br>
*/
<br>
<span class="quotelev2">&gt; &gt;  MPI_Bcast (b, Q * R, MPI_DOUBLE, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt; &gt;  /* send row i of &quot;a&quot; to process i					*/
</span><br>
<span class="quotelev2">&gt; &gt;  MPI_Scatter (a, Q, MPI_DOUBLE, row_a, Q, MPI_DOUBLE, 0,
</span><br>
<span class="quotelev2">&gt; &gt; 	       MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt; &gt;  for (j = 0; j &lt; R; ++j)		/* compute i-th row of &quot;c&quot;	*/
</span><br>
<span class="quotelev2">&gt; &gt;  {
</span><br>
<span class="quotelev2">&gt; &gt;    row_c[j] = 0.0;
</span><br>
<span class="quotelev2">&gt; &gt;    for (k = 0; k &lt; Q; ++k)
</span><br>
<span class="quotelev2">&gt; &gt;    {
</span><br>
<span class="quotelev2">&gt; &gt;      row_c[j] = row_c[j] + row_a[k] * b[k][j];
</span><br>
<span class="quotelev2">&gt; &gt;    }
</span><br>
<span class="quotelev2">&gt; &gt;  }
</span><br>
<span class="quotelev2">&gt; &gt;  /* receive row i of &quot;c&quot; from process i				*/
</span><br>
<span class="quotelev2">&gt; &gt;  MPI_Gather (row_c, R, MPI_DOUBLE, c, R, MPI_DOUBLE, 0,
</span><br>
<span class="quotelev2">&gt; &gt; 	      MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt; &gt;  if (mytid == 0)
</span><br>
<span class="quotelev2">&gt; &gt;  {
</span><br>
<span class="quotelev2">&gt; &gt;    printf (&quot;(%d,%d)-result-matrix c = a * b :\n\n&quot;, P, R);
</span><br>
<span class="quotelev2">&gt; &gt;    print_matrix (P, R, (double **) c);
</span><br>
<span class="quotelev2">&gt; &gt;  }
</span><br>
<span class="quotelev2">&gt; &gt;  MPI_Finalize ();
</span><br>
<span class="quotelev2">&gt; &gt;  return EXIT_SUCCESS;
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; void print_matrix (int p, int q, double **mat)
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt;  int i, j;				/* loop variables		*/
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;  for (i = 0; i &lt; p; ++i)
</span><br>
<span class="quotelev2">&gt; &gt;  {
</span><br>
<span class="quotelev2">&gt; &gt;    for (j = 0; j &lt; q; ++j)
</span><br>
<span class="quotelev2">&gt; &gt;    {
</span><br>
<span class="quotelev2">&gt; &gt;      printf (&quot;%6g&quot;, *((double *) mat + i * q + j));
</span><br>
<span class="quotelev2">&gt; &gt;    }
</span><br>
<span class="quotelev2">&gt; &gt;    printf (&quot;\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;  }
</span><br>
<span class="quotelev2">&gt; &gt;  printf (&quot;\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20510.php">Ralph Castain: "Re: [OMPI users] Question on ssh search path"</a>
<li><strong>Previous message:</strong> <a href="20508.php">Iliev, Hristo: "Re: [OMPI users] openmpi-1.6.2 and registerable memory"</a>
<li><strong>Maybe in reply to:</strong> <a href="20410.php">Siegmar Gross: "[OMPI users] wrong results in a heterogeneous environment with openmpi-1.6.2"</a>
<!-- nextthread="start" -->
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
