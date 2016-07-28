<?
$subject_val = "[OMPI users] openmpi-1.4.3 atomic_cmpset check failed in mac OS X 10.6 intel ifort";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 10 11:04:46 2010" -->
<!-- isoreceived="20101210160446" -->
<!-- sent="Fri, 10 Dec 2010 10:04:11 -0600" -->
<!-- isosent="20101210160411" -->
<!-- name="Jose Agust&#237;n Garc&#237;a Reynoso" -->
<!-- email="agustin_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi-1.4.3 atomic_cmpset check failed in mac OS X 10.6 intel ifort" -->
<!-- id="A5B473A1-81E9-4C15-85F3-B9A906513E1E_at_atmosfera.unam.mx" -->
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
<strong>Subject:</strong> [OMPI users] openmpi-1.4.3 atomic_cmpset check failed in mac OS X 10.6 intel ifort<br>
<strong>From:</strong> Jose Agust&#237;n Garc&#237;a Reynoso (<em>agustin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-10 11:04:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15069.php">David Mathog: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a	single machine?"</a>
<li><strong>Previous message:</strong> <a href="15067.php">Prentice Bisbal: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a	single machine?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
During the  'make check'  the following result is obtained
<br>
<p>--&gt; Testing atomic_cmpset
<br>
&nbsp;&nbsp;&nbsp;- 1 threads: Passed
<br>
Assertion failed: ((5 * nthreads * nreps) == val32), function main, file atomic_cmpset.c, line 280.
<br>
./run_tests: line 8: 37634 Abort trap              $* $threads
<br>
&nbsp;&nbsp;&nbsp;- 2 threads: Failed
<br>
&nbsp;&nbsp;&nbsp;- 4 threads: Passed
<br>
Assertion failed: ((5 * nthreads * nreps) == val32), function main, file atomic_cmpset.c, line 280.
<br>
./run_tests: line 8: 37637 Abort trap              $* $threads
<br>
&nbsp;&nbsp;&nbsp;- 5 threads: Failed
<br>
&nbsp;&nbsp;&nbsp;- 8 threads: Passed
<br>
FAIL: atomic_cmpset
<br>
--&gt; Testing atomic_cmpset_noinline
<br>
&nbsp;&nbsp;&nbsp;- 1 threads: Passed
<br>
&nbsp;&nbsp;&nbsp;- 2 threads: Passed
<br>
&nbsp;&nbsp;&nbsp;- 4 threads: Passed
<br>
&nbsp;&nbsp;&nbsp;- 5 threads: Passed
<br>
&nbsp;&nbsp;&nbsp;- 8 threads: Passed
<br>
PASS: atomic_cmpset_noinline
<br>
========================================================
<br>
1 of 8 tests failed
<br>
Please report to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
========================================================
<br>
make[3]: *** [check-TESTS] Error 1
<br>
make[2]: *** [check-am] Error 2
<br>
make[1]: *** [check-recursive] Error 1
<br>
make: *** [check-recursive] Error 1
<br>
<p><p>Jose Agust&#237;n Garc&#237;a Reynoso 
<br>
&nbsp;&nbsp;&nbsp;
<br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15068/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15068/ompi-output.tar.bz2">ompi-output.tar.bz2</a>
</ul>
<!-- attachment="ompi-output.tar.bz2" -->
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15068/03-attachment">attachment</a>
</ul>
<!-- attachment="03-attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15069.php">David Mathog: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a	single machine?"</a>
<li><strong>Previous message:</strong> <a href="15067.php">Prentice Bisbal: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a	single machine?"</a>
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
