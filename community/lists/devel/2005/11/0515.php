<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Nov  1 16:53:23 2005" -->
<!-- isoreceived="20051101215323" -->
<!-- sent="Tue, 01 Nov 2005 14:53:16 -0700" -->
<!-- isosent="20051101215316" -->
<!-- name="Tim S. Woodall" -->
<!-- email="twoodall_at_[hidden]" -->
<!-- subject="tcp performance" -->
<!-- id="4367E3CC.5020903_at_lanl.gov" -->
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
<strong>From:</strong> Tim S. Woodall (<em>twoodall_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-01 16:53:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0516.php">Jeff Squyres: "MPI_REPLACE: opinion?"</a>
<li><strong>Previous message:</strong> <a href="../../2005/10/0514.php">Gleb Natapov: "Re:  [PATCH] casting is bad!"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Linpack runs on odin:
<br>
<p>TEG/TCP PTL:
<br>
<p>/u/twoodall&gt; orterun -mca pml teg -mca ptl tcp -np 4 ./xhpl
<br>
============================================================================
<br>
HPLinpack 1.0a  --  High-Performance Linpack benchmark  --   January 20, 2004
<br>
Written by A. Petitet and R. Clint Whaley,  Innovative Computing Labs.,  UTK
<br>
============================================================================
<br>
...
<br>
============================================================================
<br>
T/V                N    NB     P     Q               Time             Gflops
<br>
----------------------------------------------------------------------------
<br>
WR13R2C4        4800    80     2     2               9.33          7.908e+00
<br>
----------------------------------------------------------------------------
<br>
||Ax-b||_oo / ( eps * ||A||_1  * N        ) =        0.0338488 ...... PASSED
<br>
||Ax-b||_oo / ( eps * ||A||_1  * ||x||_1  ) =        0.0249994 ...... PASSED
<br>
||Ax-b||_oo / ( eps * ||A||_oo * ||x||_oo ) =        0.0051310 ...... PASSED
<br>
============================================================================
<br>
<p><p>OB1/TCP BTL:
<br>
<p><p>/u/twoodall&gt; orterun -mca pml ob1 -mca btl tcp -np 4 ./xhpl
<br>
============================================================================
<br>
HPLinpack 1.0a  --  High-Performance Linpack benchmark  --   January 20, 2004
<br>
Written by A. Petitet and R. Clint Whaley,  Innovative Computing Labs.,  UTK
<br>
============================================================================
<br>
&nbsp;&nbsp;...
<br>
============================================================================
<br>
T/V                N    NB     P     Q               Time             Gflops
<br>
----------------------------------------------------------------------------
<br>
WR13R2C4        4800    80     2     2               8.24          8.955e+00
<br>
----------------------------------------------------------------------------
<br>
||Ax-b||_oo / ( eps * ||A||_1  * N        ) =        0.0300076 ...... PASSED
<br>
||Ax-b||_oo / ( eps * ||A||_1  * ||x||_1  ) =        0.0221624 ...... PASSED
<br>
||Ax-b||_oo / ( eps * ||A||_oo * ||x||_oo ) =        0.0045487 ...... PASSED
<br>
============================================================================
<br>
<p><p>OB1/MVAPI BTL:
<br>
<p>/u/twoodall&gt; orterun -mca pml ob1 -mca btl mvapi -np 4 ./xhpl
<br>
============================================================================
<br>
HPLinpack 1.0a  --  High-Performance Linpack benchmark  --   January 20, 2004
<br>
Written by A. Petitet and R. Clint Whaley,  Innovative Computing Labs.,  UTK
<br>
============================================================================
<br>
&nbsp;&nbsp;...
<br>
============================================================================
<br>
T/V                N    NB     P     Q               Time             Gflops
<br>
----------------------------------------------------------------------------
<br>
WR13R2C4        4800    80     2     2               7.32          1.007e+01
<br>
----------------------------------------------------------------------------
<br>
||Ax-b||_oo / ( eps * ||A||_1  * N        ) =        0.0293766 ...... PASSED
<br>
||Ax-b||_oo / ( eps * ||A||_1  * ||x||_1  ) =        0.0216963 ...... PASSED
<br>
||Ax-b||_oo / ( eps * ||A||_oo * ||x||_oo ) =        0.0044530 ...... PASSED
<br>
============================================================================
<br>
<p><p><p>Note that these are w/  -DHPL_NO_MPI_DATATYPE defined when build hpl, otherwise
<br>
we hang...
<br>
<p><p>Tim
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0516.php">Jeff Squyres: "MPI_REPLACE: opinion?"</a>
<li><strong>Previous message:</strong> <a href="../../2005/10/0514.php">Gleb Natapov: "Re:  [PATCH] casting is bad!"</a>
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
