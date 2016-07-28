<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Nov 15 07:10:40 2005" -->
<!-- isoreceived="20051115121040" -->
<!-- sent="Tue, 15 Nov 2005 07:10:31 -0500" -->
<!-- isosent="20051115121031" -->
<!-- name="Allan Menezes" -->
<!-- email="amenezes007_at_[hidden]" -->
<!-- subject="[O-MPI users] hpl and tcp" -->
<!-- id="4379D037.3060307_at_sympatico.ca" -->
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
<strong>From:</strong> Allan Menezes (<em>amenezes007_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-15 07:10:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0345.php">Jeff Squyres: "Re: [O-MPI users] OMPI 1.0 rc6 --with-bproc errors"</a>
<li><strong>Previous message:</strong> <a href="0343.php">Allan Menezes: "[O-MPI users] HPL and TCP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0347.php">Jeff Squyres: "Re: [O-MPI users] hpl and tcp"</a>
<li><strong>Reply:</strong> <a href="0347.php">Jeff Squyres: "Re: [O-MPI users] hpl and tcp"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>&nbsp;Here are last night's reults of the following command on my 15 node 
<br>
cluster. One node is down from 16.
<br>
mpirun --mca pml teg --mca btl_tcp_if_include eth1,eth0 --hostfile aa 
<br>
-np 15 ./xhpl
<br>
No errors were spewed out to stdout as per my previous post when using  
<br>
btl tcp and btl_tcp_if_include eth1
<br>
However both tests with pml teg and btl tcp ran to completion with no 
<br>
errors, but the pml teg switch gives slightly(marginally) better 
<br>
performance.
<br>
Here is the HPL1.out for the above mpirun command listed:
<br>
<p><p>============================================================================
<br>
HPLinpack 1.0a  --  High-Performance Linpack benchmark  --   January 20, 
<br>
2004
<br>
Written by A. Petitet and R. Clint Whaley,  Innovative Computing Labs.,  UTK
<br>
============================================================================
<br>
<p>An explanation of the input/output parameters follows:
<br>
T/V    : Wall time / encoded variant.
<br>
N      : The order of the coefficient matrix A.
<br>
NB     : The partitioning blocking factor.
<br>
P      : The number of process rows.
<br>
Q      : The number of process columns.
<br>
Time   : Time in seconds to solve the linear system.
<br>
Gflops : Rate of execution for solving the linear system.
<br>
<p>The following parameter values will be used:
<br>
<p>N      :   25920
<br>
NB     :     120
<br>
PMAP   : Row-major process mapping
<br>
P      :       3
<br>
Q      :       5
<br>
PFACT  :    Left    Crout    Right
<br>
NBMIN  :       2        4
<br>
NDIV   :       2
<br>
RFACT  :    Left    Crout    Right
<br>
BCAST  :   1ring
<br>
DEPTH  :       0
<br>
SWAP   : Mix (threshold = 64)
<br>
L1     : transposed form
<br>
U      : transposed form
<br>
EQUIL  : yes
<br>
ALIGN  : 8 double precision words
<br>
<p>----------------------------------------------------------------------------
<br>
<p>- The matrix A is randomly generated for each test.
<br>
- The following scaled residual checks will be computed:
<br>
&nbsp;&nbsp;&nbsp;1) ||Ax-b||_oo / ( eps * ||A||_1  * N        )
<br>
&nbsp;&nbsp;&nbsp;2) ||Ax-b||_oo / ( eps * ||A||_1  * ||x||_1  )
<br>
&nbsp;&nbsp;&nbsp;3) ||Ax-b||_oo / ( eps * ||A||_oo * ||x||_oo )
<br>
- The relative machine precision (eps) is taken to be          1.110223e-16
<br>
- Computational tests pass if scaled residuals are less than           16.0
<br>
<p>============================================================================
<br>
T/V                N    NB     P     Q               Time             Gflops
<br>
----------------------------------------------------------------------------
<br>
WR00L2L2       25920   120     3     5             529.79          2.192e+01
<br>
----------------------------------------------------------------------------
<br>
||Ax-b||_oo / ( eps * ||A||_1  * N        ) =        0.0128599 ...... PASSED
<br>
||Ax-b||_oo / ( eps * ||A||_1  * ||x||_1  ) =        0.0185612 ...... PASSED
<br>
||Ax-b||_oo / ( eps * ||A||_oo * ||x||_oo ) =        0.0037747 ...... PASSED
<br>
============================================================================
<br>
T/V                N    NB     P     Q               Time             Gflops
<br>
----------------------------------------------------------------------------
<br>
WR00L2L4       25920   120     3     5             532.56          2.180e+01
<br>
----------------------------------------------------------------------------
<br>
||Ax-b||_oo / ( eps * ||A||_1  * N        ) =        0.0117992 ...... PASSED
<br>
||Ax-b||_oo / ( eps * ||A||_1  * ||x||_1  ) =        0.0170302 ...... PASSED
<br>
||Ax-b||_oo / ( eps * ||A||_oo * ||x||_oo ) =        0.0034634 ...... PASSED
<br>
============================================================================
<br>
T/V                N    NB     P     Q               Time             Gflops
<br>
----------------------------------------------------------------------------
<br>
WR00L2C2       25920   120     3     5             534.56          2.172e+01
<br>
----------------------------------------------------------------------------
<br>
||Ax-b||_oo / ( eps * ||A||_1  * N        ) =        0.9834234 ...... PASSED
<br>
||Ax-b||_oo / ( eps * ||A||_1  * ||x||_1  ) =        1.4194125 ...... PASSED
<br>
||Ax-b||_oo / ( eps * ||A||_oo * ||x||_oo ) =        0.2886629 ...... PASSED
<br>
============================================================================
<br>
T/V                N    NB     P     Q               Time             Gflops
<br>
----------------------------------------------------------------------------
<br>
WR00L2C4       25920   120     3     5             540.77          2.147e+01
<br>
----------------------------------------------------------------------------
<br>
||Ax-b||_oo / ( eps * ||A||_1  * N        ) =        0.0121362 ...... PASSED
<br>
||Ax-b||_oo / ( eps * ||A||_1  * ||x||_1  ) =        0.0175166 ...... PASSED
<br>
||Ax-b||_oo / ( eps * ||A||_oo * ||x||_oo ) =        0.0035623 ...... PASSED
<br>
============================================================================
<br>
T/V                N    NB     P     Q               Time             Gflops
<br>
----------------------------------------------------------------------------
<br>
WR00L2R2       25920   120     3     5             539.15          2.154e+01
<br>
----------------------------------------------------------------------------
<br>
||Ax-b||_oo / ( eps * ||A||_1  * N        ) =        0.0117731 ...... PASSED
<br>
||Ax-b||_oo / ( eps * ||A||_1  * ||x||_1  ) =        0.0169925 ...... PASSED
<br>
||Ax-b||_oo / ( eps * ||A||_oo * ||x||_oo ) =        0.0034557 ...... PASSED
<br>
============================================================================
<br>
T/V                N    NB     P     Q               Time             Gflops
<br>
----------------------------------------------------------------------------
<br>
WR00L2R4       25920   120     3     5             533.87          2.175e+01
<br>
----------------------------------------------------------------------------
<br>
||Ax-b||_oo / ( eps * ||A||_1  * N        ) =        0.0109683 ...... PASSED
<br>
||Ax-b||_oo / ( eps * ||A||_1  * ||x||_1  ) =        0.0158310 ...... PASSED
<br>
||Ax-b||_oo / ( eps * ||A||_oo * ||x||_oo ) =        0.0032195 ...... PASSED
<br>
============================================================================
<br>
T/V                N    NB     P     Q               Time             Gflops
<br>
----------------------------------------------------------------------------
<br>
WR00C2L2       25920   120     3     5             537.89          2.159e+01
<br>
----------------------------------------------------------------------------
<br>
||Ax-b||_oo / ( eps * ||A||_1  * N        ) =        0.0128599 ...... PASSED
<br>
||Ax-b||_oo / ( eps * ||A||_1  * ||x||_1  ) =        0.0185612 ...... PASSED
<br>
||Ax-b||_oo / ( eps * ||A||_oo * ||x||_oo ) =        0.0037747 ...... PASSED
<br>
============================================================================
<br>
T/V                N    NB     P     Q               Time             Gflops
<br>
----------------------------------------------------------------------------
<br>
WR00C2L4       25920   120     3     5             533.54          2.176e+01
<br>
----------------------------------------------------------------------------
<br>
||Ax-b||_oo / ( eps * ||A||_1  * N        ) =        0.0117992 ...... PASSED
<br>
||Ax-b||_oo / ( eps * ||A||_1  * ||x||_1  ) =        0.0170302 ...... PASSED
<br>
||Ax-b||_oo / ( eps * ||A||_oo * ||x||_oo ) =        0.0034634 ...... PASSED
<br>
============================================================================
<br>
T/V                N    NB     P     Q               Time             Gflops
<br>
----------------------------------------------------------------------------
<br>
WR00C2C2       25920   120     3     5             538.54          2.156e+01
<br>
----------------------------------------------------------------------------
<br>
||Ax-b||_oo / ( eps * ||A||_1  * N        ) =        0.0128599 ...... PASSED
<br>
||Ax-b||_oo / ( eps * ||A||_1  * ||x||_1  ) =        0.0185612 ...... PASSED
<br>
||Ax-b||_oo / ( eps * ||A||_oo * ||x||_oo ) =        0.0037747 ...... PASSED
<br>
============================================================================
<br>
T/V                N    NB     P     Q               Time             Gflops
<br>
----------------------------------------------------------------------------
<br>
WR00C2C4       25920   120     3     5             534.37          2.173e+01
<br>
----------------------------------------------------------------------------
<br>
||Ax-b||_oo / ( eps * ||A||_1  * N        ) =        0.0121362 ...... PASSED
<br>
||Ax-b||_oo / ( eps * ||A||_1  * ||x||_1  ) =        0.0175166 ...... PASSED
<br>
||Ax-b||_oo / ( eps * ||A||_oo * ||x||_oo ) =        0.0035623 ...... PASSED
<br>
============================================================================
<br>
T/V                N    NB     P     Q               Time             Gflops
<br>
----------------------------------------------------------------------------
<br>
WR00C2R2       25920   120     3     5             539.73          2.151e+01
<br>
----------------------------------------------------------------------------
<br>
||Ax-b||_oo / ( eps * ||A||_1  * N        ) =        0.0117731 ...... PASSED
<br>
||Ax-b||_oo / ( eps * ||A||_1  * ||x||_1  ) =        0.0169925 ...... PASSED
<br>
||Ax-b||_oo / ( eps * ||A||_oo * ||x||_oo ) =        0.0034557 ...... PASSED
<br>
============================================================================
<br>
T/V                N    NB     P     Q               Time             Gflops
<br>
----------------------------------------------------------------------------
<br>
WR00C2R4       25920   120     3     5             533.93          2.175e+01
<br>
----------------------------------------------------------------------------
<br>
||Ax-b||_oo / ( eps * ||A||_1  * N        ) =        0.0109683 ...... PASSED
<br>
||Ax-b||_oo / ( eps * ||A||_1  * ||x||_1  ) =        0.0158310 ...... PASSED
<br>
||Ax-b||_oo / ( eps * ||A||_oo * ||x||_oo ) =        0.0032195 ...... PASSED
<br>
============================================================================
<br>
T/V                N    NB     P     Q               Time             Gflops
<br>
----------------------------------------------------------------------------
<br>
WR00R2L2       25920   120     3     5             534.67          2.172e+01
<br>
----------------------------------------------------------------------------
<br>
||Ax-b||_oo / ( eps * ||A||_1  * N        ) =        0.0128599 ...... PASSED
<br>
||Ax-b||_oo / ( eps * ||A||_1  * ||x||_1  ) =        0.0185612 ...... PASSED
<br>
||Ax-b||_oo / ( eps * ||A||_oo * ||x||_oo ) =        0.0037747 ...... PASSED
<br>
============================================================================
<br>
T/V                N    NB     P     Q               Time             Gflops
<br>
----------------------------------------------------------------------------
<br>
WR00R2L4       25920   120     3     5             537.47          2.160e+01
<br>
----------------------------------------------------------------------------
<br>
||Ax-b||_oo / ( eps * ||A||_1  * N        ) =        0.0117992 ...... PASSED
<br>
||Ax-b||_oo / ( eps * ||A||_1  * ||x||_1  ) =        0.0170302 ...... PASSED
<br>
||Ax-b||_oo / ( eps * ||A||_oo * ||x||_oo ) =        0.0034634 ...... PASSED
<br>
============================================================================
<br>
T/V                N    NB     P     Q               Time             Gflops
<br>
----------------------------------------------------------------------------
<br>
WR00R2C2       25920   120     3     5             531.71          2.184e+01
<br>
----------------------------------------------------------------------------
<br>
||Ax-b||_oo / ( eps * ||A||_1  * N        ) =        0.0128599 ...... PASSED
<br>
||Ax-b||_oo / ( eps * ||A||_1  * ||x||_1  ) =        0.0185612 ...... PASSED
<br>
||Ax-b||_oo / ( eps * ||A||_oo * ||x||_oo ) =        0.0037747 ...... PASSED
<br>
============================================================================
<br>
T/V                N    NB     P     Q               Time             Gflops
<br>
----------------------------------------------------------------------------
<br>
WR00R2C4       25920   120     3     5             531.03          2.186e+01
<br>
----------------------------------------------------------------------------
<br>
||Ax-b||_oo / ( eps * ||A||_1  * N        ) =        0.0121362 ...... PASSED
<br>
||Ax-b||_oo / ( eps * ||A||_1  * ||x||_1  ) =        0.0175166 ...... PASSED
<br>
||Ax-b||_oo / ( eps * ||A||_oo * ||x||_oo ) =        0.0035623 ...... PASSED
<br>
============================================================================
<br>
T/V                N    NB     P     Q               Time             Gflops
<br>
----------------------------------------------------------------------------
<br>
WR00R2R2       25920   120     3     5             532.63          2.180e+01
<br>
----------------------------------------------------------------------------
<br>
||Ax-b||_oo / ( eps * ||A||_1  * N        ) =        0.0117731 ...... PASSED
<br>
||Ax-b||_oo / ( eps * ||A||_1  * ||x||_1  ) =        0.0169925 ...... PASSED
<br>
||Ax-b||_oo / ( eps * ||A||_oo * ||x||_oo ) =        0.0034557 ...... PASSED
<br>
============================================================================
<br>
T/V                N    NB     P     Q               Time             Gflops
<br>
----------------------------------------------------------------------------
<br>
WR00R2R4       25920   120     3     5             530.89          2.187e+01
<br>
----------------------------------------------------------------------------
<br>
||Ax-b||_oo / ( eps * ||A||_1  * N        ) =        0.0109683 ...... PASSED
<br>
||Ax-b||_oo / ( eps * ||A||_1  * ||x||_1  ) =        0.0158310 ...... PASSED
<br>
||Ax-b||_oo / ( eps * ||A||_oo * ||x||_oo ) =        0.0032195 ...... PASSED
<br>
============================================================================
<br>
<p>Finished     18 tests with the following results:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;18 tests completed and passed residual checks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0 tests completed and failed residual checks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0 tests skipped because of illegal input values.
<br>
----------------------------------------------------------------------------
<br>
<p>End of Tests.
<br>
============================================================================
<br>
<p><p>Thank you,
<br>
Best Wishes,
<br>
Allan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0345.php">Jeff Squyres: "Re: [O-MPI users] OMPI 1.0 rc6 --with-bproc errors"</a>
<li><strong>Previous message:</strong> <a href="0343.php">Allan Menezes: "[O-MPI users] HPL and TCP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0347.php">Jeff Squyres: "Re: [O-MPI users] hpl and tcp"</a>
<li><strong>Reply:</strong> <a href="0347.php">Jeff Squyres: "Re: [O-MPI users] hpl and tcp"</a>
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
