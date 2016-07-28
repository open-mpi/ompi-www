<?
$subject_val = "[OMPI users] wrong results in a heterogeneous environment with openmpi-1.6.2";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  4 07:11:06 2012" -->
<!-- isoreceived="20121004111106" -->
<!-- sent="Thu, 4 Oct 2012 13:03:51 +0200 (CEST)" -->
<!-- isosent="20121004110351" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] wrong results in a heterogeneous environment with openmpi-1.6.2" -->
<!-- id="201210041103.q94B3oND025326_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] wrong results in a heterogeneous environment with openmpi-1.6.2<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-04 07:03:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20411.php">Hodge, Gary C: "Re: [OMPI users] EXTERNAL: Re: unacceptable latency in gathering	process"</a>
<li><strong>Previous message:</strong> <a href="20409.php">Iliev, Hristo: "Re: [OMPI users] unacceptable latency in gathering process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20487.php">Ralph Castain: "Re: [OMPI users] wrong results in a heterogeneous environment with openmpi-1.6.2"</a>
<li><strong>Reply:</strong> <a href="20487.php">Ralph Castain: "Re: [OMPI users] wrong results in a heterogeneous environment with openmpi-1.6.2"</a>
<li><strong>Maybe reply:</strong> <a href="20509.php">Siegmar Gross: "Re: [OMPI users] wrong results in a heterogeneous environment with openmpi-1.6.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have a small matrix multiplication program which computes wrong
<br>
results in a heterogeneous environment with different little endian
<br>
and big endian architectures. Every process computes one row (block)
<br>
of the result matrix.
<br>
<p><p>Solaris 10 x86_64 and Linux x86_64:
<br>
<p>tyr matrix 162 mpiexec -np 4 -host sunpc0,sunpc1,linpc0,linpc1 mat_mult_1
<br>
Process 0 of 4 running on sunpc0
<br>
Process 1 of 4 running on sunpc1
<br>
Process 2 of 4 running on linpc0
<br>
Process 3 of 4 running on linpc1
<br>
...
<br>
(4,8)-result-matrix c = a * b :
<br>
<p>&nbsp;&nbsp;&nbsp;448   427   406   385   364   343   322   301
<br>
&nbsp;&nbsp;1456  1399  1342  1285  1228  1171  1114  1057
<br>
&nbsp;&nbsp;2464  2371  2278  2185  2092  1999  1906  1813
<br>
&nbsp;&nbsp;3472  3343  3214  3085  2956  2827  2698  2569
<br>
<p><p>Solaris Sparc:
<br>
<p>tyr matrix 167 mpiexec -np 4 -host tyr,rs0,rs1 mat_mult_1
<br>
Process 0 of 4 running on tyr.informatik.hs-fulda.de
<br>
Process 3 of 4 running on tyr.informatik.hs-fulda.de
<br>
Process 2 of 4 running on rs1.informatik.hs-fulda.de
<br>
Process 1 of 4 running on rs0.informatik.hs-fulda.de
<br>
...
<br>
(4,8)-result-matrix c = a * b :
<br>
<p>&nbsp;&nbsp;&nbsp;448   427   406   385   364   343   322   301
<br>
&nbsp;&nbsp;1456  1399  1342  1285  1228  1171  1114  1057
<br>
&nbsp;&nbsp;2464  2371  2278  2185  2092  1999  1906  1813
<br>
&nbsp;&nbsp;3472  3343  3214  3085  2956  2827  2698  2569
<br>
<p><p>Solaris Sparc and x86_64: Rows 1 and 3 are from sunpc0 (adding the
<br>
option &quot;-hetero&quot; doesn't change anything)
<br>
<p>tyr matrix 168 mpiexec -np 4 -host tyr,sunpc0 mat_mult_1
<br>
Process 1 of 4 running on sunpc0
<br>
Process 3 of 4 running on sunpc0
<br>
Process 0 of 4 running on tyr.informatik.hs-fulda.de
<br>
Process 2 of 4 running on tyr.informatik.hs-fulda.de
<br>
...
<br>
(4,8)-result-matrix c = a * b :
<br>
<p>&nbsp;&nbsp;&nbsp;448   427   406   385   364   343   322   301
<br>
&nbsp;&nbsp;&nbsp;&nbsp;48-3.01737e+304-3.1678e+296  -NaN     0-7.40627e+304-3.16839e+296  -NaN
<br>
&nbsp;&nbsp;2464  2371  2278  2185  2092  1999  1906  1813
<br>
&nbsp;&nbsp;&nbsp;&nbsp;48-3.01737e+304-3.18057e+296  -NaN2.122e-314-7.68057e+304-3.26998e+296  -NaN
<br>
<p><p>Solaris Sparc and Linux x86_64: Rows 1 and 3 are from linpc0
<br>
<p>tyr matrix 169 mpiexec -np 4 -host tyr,linpc0 mat_mult_1
<br>
Process 0 of 4 running on tyr.informatik.hs-fulda.de
<br>
Process 2 of 4 running on tyr.informatik.hs-fulda.de
<br>
Process 1 of 4 running on linpc0
<br>
Process 3 of 4 running on linpc0
<br>
...
<br>
(4,8)-result-matrix c = a * b :
<br>
<p>&nbsp;&nbsp;&nbsp;448   427   406   385   364   343   322   301
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0     0     0     0     0     08.10602e-3124.27085e-319
<br>
&nbsp;&nbsp;2464  2371  2278  2185  2092  1999  1906  1813
<br>
6.66666e-3152.86948e-3161.73834e-3101.39066e-3092.122e-3141.39066e-3091.39066e-3
<br>
099.88131e-324
<br>
<p>In the past the program worked in a heterogeneous environment. This
<br>
is the main part of the program.
<br>
<p>...
<br>
&nbsp;&nbsp;double a[P][Q], b[Q][R],		/* matrices to multiply		*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;c[P][R],			/* matrix for result		*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;row_a[Q],			/* one row of matrix &quot;a&quot;	*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;row_c[R];			/* one row of matrix &quot;c&quot;	*/
<br>
...
<br>
&nbsp;&nbsp;/* send matrix &quot;b&quot; to all processes					*/
<br>
&nbsp;&nbsp;MPI_Bcast (b, Q * R, MPI_DOUBLE, 0, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;/* send row i of &quot;a&quot; to process i					*/
<br>
&nbsp;&nbsp;MPI_Scatter (a, Q, MPI_DOUBLE, row_a, Q, MPI_DOUBLE, 0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;for (j = 0; j &lt; R; ++j)		/* compute i-th row of &quot;c&quot;	*/
<br>
&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;row_c[j] = 0.0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (k = 0; k &lt; Q; ++k)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;row_c[j] = row_c[j] + row_a[k] * b[k][j];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;/* receive row i of &quot;c&quot; from process i				*/
<br>
&nbsp;&nbsp;MPI_Gather (row_c, R, MPI_DOUBLE, c, R, MPI_DOUBLE, 0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_COMM_WORLD);
<br>
...
<br>
<p><p>Does anybody know why my program doesn't work? It blocks with
<br>
openmpi-1.7a1r27379 and openmpi-1.9a1r27380 (I had to add one
<br>
more machine because my local machine will not be used in these
<br>
versions) and it works as long as the machines have the same
<br>
endian.
<br>
<p>tyr matrix 110 mpiexec -np 4 -host tyr,linpc0,rs0 mat_mult_1
<br>
Process 0 of 4 running on linpc0
<br>
Process 1 of 4 running on linpc0
<br>
Process 3 of 4 running on rs0.informatik.hs-fulda.de
<br>
Process 2 of 4 running on rs0.informatik.hs-fulda.de
<br>
...
<br>
(6,8)-matrix b:
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
<p>^CKilled by signal 2.
<br>
Killed by signal 2.
<br>
<p><p>Thank you very much for any help in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<p>
<br><hr>
<ul>
<li>TEXT/x-sun-c-file attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20410/mat_mult_1.c">mat_mult_1.c</a>
</ul>
<!-- attachment="mat_mult_1.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20411.php">Hodge, Gary C: "Re: [OMPI users] EXTERNAL: Re: unacceptable latency in gathering	process"</a>
<li><strong>Previous message:</strong> <a href="20409.php">Iliev, Hristo: "Re: [OMPI users] unacceptable latency in gathering process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20487.php">Ralph Castain: "Re: [OMPI users] wrong results in a heterogeneous environment with openmpi-1.6.2"</a>
<li><strong>Reply:</strong> <a href="20487.php">Ralph Castain: "Re: [OMPI users] wrong results in a heterogeneous environment with openmpi-1.6.2"</a>
<li><strong>Maybe reply:</strong> <a href="20509.php">Siegmar Gross: "Re: [OMPI users] wrong results in a heterogeneous environment with openmpi-1.6.2"</a>
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
