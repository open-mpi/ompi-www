<?
$subject_val = "[MTT users] mtt IBM reduce_scatter_in_place test failure";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 17 01:52:00 2008" -->
<!-- isoreceived="20080917055200" -->
<!-- sent="Wed, 17 Sep 2008 08:51:56 +0300" -->
<!-- isosent="20080917055156" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="[MTT users] mtt IBM reduce_scatter_in_place test failure" -->
<!-- id="453d39990809162251y52020bb9y897b6b3476819c27_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="mailman.1568.1221584458.16379.mtt-devel_at_open-mpi.org" -->
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
<strong>Subject:</strong> [MTT users] mtt IBM reduce_scatter_in_place test failure<br>
<strong>From:</strong> Lenny Verkhovsky (<em>lenny.verkhovsky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-17 01:51:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0614.php">Jeff Squyres: "Re: [MTT users] mtt IBM reduce_scatter_in_place test failure"</a>
<li><strong>Previous message:</strong> <a href="0612.php">Ethan Mallove: "Re: [MTT users] Patch to add --local-scratch option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0614.php">Jeff Squyres: "Re: [MTT users] mtt IBM reduce_scatter_in_place test failure"</a>
<li><strong>Reply:</strong> <a href="0614.php">Jeff Squyres: "Re: [MTT users] mtt IBM reduce_scatter_in_place test failure"</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/mtt-users/att-0613/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0614.php">Jeff Squyres: "Re: [MTT users] mtt IBM reduce_scatter_in_place test failure"</a>
<li><strong>Previous message:</strong> <a href="0612.php">Ethan Mallove: "Re: [MTT users] Patch to add --local-scratch option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0614.php">Jeff Squyres: "Re: [MTT users] mtt IBM reduce_scatter_in_place test failure"</a>
<li><strong>Reply:</strong> <a href="0614.php">Jeff Squyres: "Re: [MTT users] mtt IBM reduce_scatter_in_place test failure"</a>
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
