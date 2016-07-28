<?
$subject_val = "[OMPI users] matrix multiplication in openmpi-1.9a1r27787 with Java";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 15 06:30:56 2013" -->
<!-- isoreceived="20130115113056" -->
<!-- sent="Tue, 15 Jan 2013 12:23:39 +0100 (CET)" -->
<!-- isosent="20130115112339" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] matrix multiplication in openmpi-1.9a1r27787 with Java" -->
<!-- id="201301151123.r0FBNdD3020378_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] matrix multiplication in openmpi-1.9a1r27787 with Java<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-15 06:23:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21124.php">Karos Lotfifar: "[OMPI users] help"</a>
<li><strong>Previous message:</strong> <a href="21122.php">Stefan Mauerberger: "Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>today I implemented a small Java program to multiply two matrices.
<br>
Once more the program works only well, if you simulate a 2-dimensional
<br>
array in an 1-dimensional one. The program works on Solaris 10 Sparc
<br>
and x86_64. It breaks on Linux x86_64 (openSuSE 12.1). Furthermore it
<br>
breaks if I combine little-endian and big-endian machines.
<br>
<p>mpiexec -np 4 -host tyr java MatMultWithNproc2DarrayIn1DarrayMain    or
<br>
mpiexec -np 4 -host sunpc1 java MatMultWithNproc2DarrayIn1DarrayMain
<br>
<p>Process 0 of 4 running on tyr.informatik.hs-fulda.de.
<br>
Process 1 of 4 running on tyr.informatik.hs-fulda.de.
<br>
Process 2 of 4 running on tyr.informatik.hs-fulda.de.
<br>
Process 3 of 4 running on tyr.informatik.hs-fulda.de.
<br>
<p>(4,6)-matrix a:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.00      2.00      3.00      4.00      5.00      6.00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7.00      8.00      9.00     10.00     11.00     12.00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;13.00     14.00     15.00     16.00     17.00     18.00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;19.00     20.00     21.00     22.00     23.00     24.00
<br>
<p>(6,8)-matrix b:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;48.00     47.00     46.00     45.00     44.00     43.00     42.00     41.00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;40.00     39.00     38.00     37.00     36.00     35.00     34.00     33.00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32.00     31.00     30.00     29.00     28.00     27.00     26.00     25.00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;24.00     23.00     22.00     21.00     20.00     19.00     18.00     17.00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16.00     15.00     14.00     13.00     12.00     11.00     10.00      9.00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8.00      7.00      6.00      5.00      4.00      3.00      2.00      1.00
<br>
<p>(4,8)-result-matrix c = a * b:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;448.00    427.00    406.00    385.00    364.00    343.00    322.00    301.00
<br>
&nbsp;&nbsp;&nbsp;1456.00   1399.00   1342.00   1285.00   1228.00   1171.00   1114.00   1057.00
<br>
&nbsp;&nbsp;&nbsp;2464.00   2371.00   2278.00   2185.00   2092.00   1999.00   1906.00   1813.00
<br>
&nbsp;&nbsp;&nbsp;3472.00   3343.00   3214.00   3085.00   2956.00   2827.00   2698.00   2569.00
<br>
<p><p><p><p><p>mpiexec -np 4 -host linpc1 java MatMultWithNproc2DarrayIn1DarrayMain
<br>
--------------------------------------------------------------------------
<br>
It looks like opal_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during opal_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;mca_base_open failed
<br>
&nbsp;&nbsp;--&gt; Returned value -2 instead of OPAL_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;opal_init failed
<br>
&nbsp;&nbsp;--&gt; Returned value Out of resource (-2) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
...
<br>
*** An error occurred in MPI_Init
<br>
*** on a NULL communicator
<br>
*** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
<br>
***    and potentially your MPI job)
<br>
[(null):29256] Local abort before MPI_INIT completed successfully; not able to 
<br>
aggregate erro
<br>
r messages, and not able to guarantee that all other processes were killed!
<br>
-------------------------------------------------------
<br>
...
<br>
<p><p><p><p><p>mpiexec -np 4 -host tyr,sunpc1 java MatMultWithNproc2DarrayIn1DarrayMain
<br>
[tyr:20374] *** An error occurred in MPI_Comm_dup
<br>
[tyr:20374] *** reported by process [3921084417,0]
<br>
[tyr:20374] *** on communicator MPI_COMM_WORLD
<br>
[tyr:20374] *** MPI_ERR_INTERN: internal error
<br>
[tyr:20374] *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now 
<br>
abort,
<br>
[tyr:20374] ***    and potentially your MPI job)
<br>
[tyr.informatik.hs-fulda.de:20369] 1 more process has sent help message 
<br>
help-mpi-errors.txt / mpi_errors_are_fatal
<br>
[tyr.informatik.hs-fulda.de:20369] Set MCA parameter &quot;orte_base_help_aggregate&quot; 
<br>
to 0 to see all help / error messages
<br>
tyr java 270 
<br>
<p><p>Any ideas why it breaks? Thank you very much for your help in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<p>


<br><hr>
<ul>
<li>APPLICATION/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21123/MatMultWithNproc2DarrayMain.java">MatMultWithNproc2DarrayMain.java</a>
</ul>
<!-- attachment="MatMultWithNproc2DarrayMain.java" -->
<hr>
<ul>
<li>APPLICATION/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21123/MatMultWithNproc2DarrayIn1DarrayMain.java">MatMultWithNproc2DarrayIn1DarrayMain.java</a>
</ul>
<!-- attachment="MatMultWithNproc2DarrayIn1DarrayMain.java" -->
<hr>
<ul>
<li>APPLICATION/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21123/PrintArray.java">PrintArray.java</a>
</ul>
<!-- attachment="PrintArray.java" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21124.php">Karos Lotfifar: "[OMPI users] help"</a>
<li><strong>Previous message:</strong> <a href="21122.php">Stefan Mauerberger: "Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash"</a>
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
