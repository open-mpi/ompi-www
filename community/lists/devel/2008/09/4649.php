<?
$subject_val = "[OMPI devel] mtt IBM reduce_scatter_in_place test failure";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 16 13:00:48 2008" -->
<!-- isoreceived="20080916170048" -->
<!-- sent="Tue, 16 Sep 2008 20:00:43 +0300" -->
<!-- isosent="20080916170043" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="[OMPI devel] mtt IBM reduce_scatter_in_place test failure" -->
<!-- id="453d39990809161000m4ab253bfj2dcfccd87e8aed36_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] mtt IBM reduce_scatter_in_place test failure<br>
<strong>From:</strong> Lenny Verkhovsky (<em>lenny.verkhovsky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-16 13:00:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4650.php">Greg Watson: "Re: [OMPI devel] -display-map and mpi_spawn"</a>
<li><strong>Previous message:</strong> <a href="4648.php">Jeff Squyres: "[OMPI devel] mmap() failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4653.php">Jeff Squyres: "Re: [OMPI devel] mtt IBM reduce_scatter_in_place test failure"</a>
<li><strong>Reply:</strong> <a href="4653.php">Jeff Squyres: "Re: [OMPI devel] mtt IBM reduce_scatter_in_place test failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am running mtt test on our  cluster and I found error for
<br>
IBM reduce_scatter_in_place  test for np&gt;8
<br>
<p>/home/USERS/lenny/OMPI_1_3_TRUNK/bin/mpirun -np 10 -H witch2
<br>
./reduce_scatter_in_place
<br>
<p>**WARNING**]: MPI_COMM_WORLD rank 4, file reduce_scatter_in_place.c:80:
<br>
bad answer (0) at index 0 of 1000 (should be 40000)
<br>
[**WARNING**]: MPI_COMM_WORLD rank 3, file reduce_scatter_in_place.c:80:
<br>
[**WARNING**]: MPI_COMM_WORLD rank 2, file reduce_scatter_in_place.c:80:
<br>
bad answer (20916) at index 0 of 1000 (should be 20000)
<br>
bad answer (0) at index 0 of 1000 (should be 30000)
<br>
[**WARNING**]: MPI_COMM_WORLD rank 5, file reduce_scatter_in_place.c:80:
<br>
bad answer (0) at index 0 of 1000 (should be 50000)
<br>
[**WARNING**]: MPI_COMM_WORLD rank 6, file reduce_scatter_in_place.c:80:
<br>
bad answer (0) at index 0 of 1000 (should be 60000)
<br>
[**WARNING**]: MPI_COMM_WORLD rank 7, file reduce_scatter_in_place.c:80:
<br>
[**WARNING**]: MPI_COMM_WORLD rank 8, file reduce_scatter_in_place.c:80:
<br>
bad answer (0) at index 0 of 1000 (should be 80000)
<br>
bad answer (0) at index 0 of 1000 (should be 70000)
<br>
[**WARNING**]: MPI_COMM_WORLD rank 9, file reduce_scatter_in_place.c:80:
<br>
bad answer (0) at index 0 of 1000 (should be 90000)
<br>
[**WARNING**]: MPI_COMM_WORLD rank 0, file reduce_scatter_in_place.c:80:
<br>
bad answer (-516024720) at index 0 of 1000 (should be 0)
<br>
[**WARNING**]: MPI_COMM_WORLD rank 1, file reduce_scatter_in_place.c:80:
<br>
bad answer (28112) at index 0 of 1000 (should be 10000)
<br>
<p>I think that the error is in the test itself.
<br>
<p>--- sources/test_get__ibm/ibm/collective/reduce_scatter_in_place.c
<br>
2005-09-28 18:11:37.000000000 +0300
<br>
+++ installs/LKcC/tests/ibm/ibm/collective/reduce_scatter_in_place.c
<br>
2008-09-16 19:32:48.000000000 +0300
<br>
@@ -64,7 +64,7 @@ int main(int argc, char **argv)
<br>
&nbsp;&nbsp;ompitest_error(__FILE__, __LINE__, &quot;Doh! Rank %d was not able to allocate
<br>
enough memory. MPI test aborted!\n&quot;, myself);
<br>
&nbsp;&nbsp;}
<br>
<p>- for (j = 1; j &lt;= MAXLEN; j *= 10) {
<br>
+ for (j = 1; j &lt; MAXLEN; j *= 10) {
<br>
&nbsp;&nbsp;for (i = 0; i &lt; tasks; i++) {
<br>
&nbsp;&nbsp;recvcounts[i] = j;
<br>
&nbsp;&nbsp;}
<br>
<p>I am not sure if this is right fix and who can review/commit it to the test
<br>
trunk.
<br>
<p>Best regards
<br>
<p>Lenny.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4649/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4650.php">Greg Watson: "Re: [OMPI devel] -display-map and mpi_spawn"</a>
<li><strong>Previous message:</strong> <a href="4648.php">Jeff Squyres: "[OMPI devel] mmap() failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4653.php">Jeff Squyres: "Re: [OMPI devel] mtt IBM reduce_scatter_in_place test failure"</a>
<li><strong>Reply:</strong> <a href="4653.php">Jeff Squyres: "Re: [OMPI devel] mtt IBM reduce_scatter_in_place test failure"</a>
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
