<?
$subject_val = "[OMPI users] Interactive OMPI job, stdin problem";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 12 10:21:51 2008" -->
<!-- isoreceived="20081212152151" -->
<!-- sent="Fri, 12 Dec 2008 16:21:43 +0100" -->
<!-- isosent="20081212152143" -->
<!-- name="Harald Anlauf" -->
<!-- email="anlauf_at_[hidden]" -->
<!-- subject="[OMPI users] Interactive OMPI job, stdin problem" -->
<!-- id="20081212152143.122520_at_gmx.net" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Interactive OMPI job, stdin problem<br>
<strong>From:</strong> Harald Anlauf (<em>anlauf_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-12 10:21:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7521.php">Eugene Loh: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<li><strong>Previous message:</strong> <a href="7519.php">Marcus G. Daniels: "Re: [OMPI users] Axon BTL for OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7522.php">Ralph Castain: "Re: [OMPI users] Interactive OMPI job, stdin problem"</a>
<li><strong>Reply:</strong> <a href="7522.php">Ralph Castain: "Re: [OMPI users] Interactive OMPI job, stdin problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I am having problems with OMPI-1.3beta with an interactive job where rank 0
<br>
reads stdin from a terminal.  The problem does not show up when stdin
<br>
is redirected from a file.  The problem also does not exist with OMPI 1.2.[5-9].
<br>
Has there been any change in OMPI between 1.2 and 1.3 that I should take
<br>
care of?
<br>
<p>Please find attached a famous sample program that was modified to aid debugging.
<br>
<p>The program reads the number of intervals used to calculate pi. 0 means exit.
<br>
I first enter 1000, then 0.
<br>
<p>Interactive run, without mpirun:
<br>
% ./a.out
<br>
&nbsp;Process            0  of            1  is alive
<br>
&nbsp;Process            0  before read
<br>
Enter the number of intervals: (0 quits)
<br>
1000
<br>
&nbsp;Process            0  read:  n =        1000
<br>
&nbsp;Process            0  before MPI_BCAST
<br>
&nbsp;Process            0  after  MPI_BCAST
<br>
&nbsp;&nbsp;pi is approximately: 3.1415927369231227  Error is: 0.0000000833333296
<br>
&nbsp;Process            0  before read
<br>
Enter the number of intervals: (0 quits)
<br>
0
<br>
&nbsp;Process            0  read:  n =           0
<br>
&nbsp;Process            0  before MPI_BCAST
<br>
&nbsp;Process            0  after  MPI_BCAST
<br>
&nbsp;Process            0  Normal exit
<br>
<p>With mpirun:
<br>
% mpirun -np 1 ./a.out
<br>
&nbsp;Process            0  of            1  is alive
<br>
&nbsp;Process            0  before read
<br>
Enter the number of intervals: (0 quits)
<br>
1000
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 0 with PID 10909 on
<br>
node oflws105 exiting without calling &quot;finalize&quot;. This may
<br>
have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>
--------------------------------------------------------------------------
<br>
<p><p>Now with stdin redirected from a here-document:
<br>
% mpirun -np 1 ./a.out &lt;&lt;EOF
<br>
<span class="quotelev1">&gt; 1000
</span><br>
<span class="quotelev1">&gt; 0
</span><br>
<span class="quotelev1">&gt; EOF
</span><br>
&nbsp;Process            0  of            1  is alive
<br>
&nbsp;Process            0  before read
<br>
Enter the number of intervals: (0 quits)
<br>
&nbsp;Process            0  read:  n =        1000
<br>
&nbsp;Process            0  before MPI_BCAST
<br>
&nbsp;Process            0  after  MPI_BCAST
<br>
&nbsp;&nbsp;pi is approximately: 3.1415927369231227  Error is: 0.0000000833333296
<br>
&nbsp;Process            0  before read
<br>
Enter the number of intervals: (0 quits)
<br>
&nbsp;Process            0  read:  n =           0
<br>
&nbsp;Process            0  before MPI_BCAST
<br>
&nbsp;Process            0  after  MPI_BCAST
<br>
<p>Similarly for np &gt; 1, with minor variations, but the same error message.
<br>
<p>Can anybody reproduce this behavior?
<br>
<p>% ompi_info |grep SVN
<br>
&nbsp;&nbsp;&nbsp;Open MPI SVN revision: r20119
<br>
&nbsp;&nbsp;&nbsp;Open RTE SVN revision: r20119
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL SVN revision: r20119
<br>
<p>Regards,
<br>
Harald
<br>
<p><pre>
-- 
Sensationsangebot verl&#228;ngert: GMX FreeDSL - Telefonanschluss + DSL 
f&#252;r nur 16,37 Euro/mtl.!* <a href="http://dsl.gmx.de/?ac=OM.AD.PD003K1308T4569a">http://dsl.gmx.de/?ac=OM.AD.PD003K1308T4569a</a>

</pre>
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7520/pi3f90-test.f90">pi3f90-test.f90</a>
</ul>
<!-- attachment="pi3f90-test.f90" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7521.php">Eugene Loh: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<li><strong>Previous message:</strong> <a href="7519.php">Marcus G. Daniels: "Re: [OMPI users] Axon BTL for OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7522.php">Ralph Castain: "Re: [OMPI users] Interactive OMPI job, stdin problem"</a>
<li><strong>Reply:</strong> <a href="7522.php">Ralph Castain: "Re: [OMPI users] Interactive OMPI job, stdin problem"</a>
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
